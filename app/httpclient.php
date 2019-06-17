<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/6/12
 * Time: 下午3:41
 */

require '../vendor/autoload.php';

$client = new GuzzleHttp\Client([
    'headers' => ['Accept' => '*/*','Content-type'=>'application/octet-stream','User-Agent'=>'MicroMessenger Client'],'debug'=>true]);

#请求不通的原因是PHP把字符串给转义了，需要解决一下转义的问题。
$send_data = "\xbfNp(\x02\x07\x16\x00\x00\x00\x00\xf6\x03__\xae\x01\x01\x02&Y\x19\xb8/|\x8bVz\xaa\xab`@3J<3\x95\xe1\x8e\xc5\xef\x1e\xec\xc2wQ\xdfQ\xda8&B\xd3v\xd2\xe9ro\x0f\x9f\xd30\xeeM4D\xf1\xed,{\x99\xf5m\x9b\xfaE\xb8H/\x1b\xb40\n\x06::\xe7?\xba\xe8\xe8\n\xbd\xa3G\x12\xff%\x1d\x8dY\xa0|\x0c\xd0\x83\xfc\xe6\x19c\x93\\\xcb-\xd6\x8c\x8dQ%9:\xaf\x83Y\xa0\xd1\xb4\xd0\x8eYz\x96\xc7\xadjg\xde\xec5\xeb<\x03\xed\x9c\xf9-6I\xfb\xda3\xd3\xdd\n\xec\x06\xed\xed\xf2\xfd\x0f\xfe`\xa2V\xfcV?p\xf2l\xb3/\x83w\xaf\xc8\xb3\xdex\xca\x1d\xd1\x01\xc5\xb6\x89\x90(\xaa\xe0oy\xcd\xad\x90oeg\xd4\xa6i\xd63Q\x84`\xac\xe8\xf3C\x10&\xb0\xf1\x80\xca\xdbB\x95\xeb\xd8@\x9b\xd0g\x8e\xb5\xcc5\x9e\xdd\xaa\n\xd0\xe4\xd5^\xe4\xc8p\xa64db\x96hO\x9e\x8c\xda\xe0\x9b\x84 \xe1\xf7\x1c\xdcF\xaaI1\xbc`\x1d|\x81|\xb3\xb6\x83\x1c\xc0\xac";

$body = \GuzzleHttp\Psr7\stream_for($send_data);

$r = $client->request('POST', '180.163.25.139/cgi-bin/micromsg-bin/getloginqrcode', ['body' => $body]);

echo "BufferLenght:".strlen($r->getBody()).PHP_EOL;


$buffer = $r->getBody();

#print_r(unpack('C',"\xbf"));


#解密返回的结果
unPackHeader($buffer);


# 步长BUG

function unPackHeader($src,$key='')
{
    if(strlen($src) < 0x20)
    {
        exit("Protocol Error!\n");
    }
    else
    {

        print_r(substr($src,1));
        return ;
        $nCur = 0;
        if($src[$nCur] == unpack('C',"\xbf")[1])        # array [1] => 191
        {
            $nCur += 1;                                 # 跳过协议标志位
        }

        $nLenHeader     = $src[$nCur] >> 2;                 # 包头长度
        $bUseCompressed = ($src[$nCur] & 0x3 == 1);         # 包体是否使用压缩算法:01使用,02不使用

        $nCur += 1;
        $nDecryptType  = $src[$nCur] >> 4;   #解密算法(固定为AES解密): 05 aes解密 / 07 rsa解密
        $nLenCookie    = $src[$nCur] & 0xf;  # cookie长度
        $nCur += 1;
        $nCur += 4;                          #服务器版本(当前固定返回4字节0)

        $uin = unpack('i',substr($src,$nCur,$nCur+4))[1];  #uin

        $nCur += 4;

        $cookie_temp = substr($src,$nCur,$nCur+$nLenCookie);

        $cookie = "";

        if($cookie_temp != $cookie)
        {
            $cookie = $cookie_temp;
        }

        $nCur += $nLenCookie;

        $body = $src;

        decompress_and_aesDecrypt($body,$key);
    }
}
# AES-128-CBC解密解压缩
function decompress_and_aesDecrypt($src,$key,$iv=null)
{
    $result = openssl_decrypt($src,'aes-128-cbc',$key,true,$key);

    echo "解密后数据".PHP_EOL;

    print_r($result);
}
