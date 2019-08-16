<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/6/12
 * Time: 下午3:41
 */
#header("Content-Type: text/html;charset=utf-8");
require '../vendor/autoload.php';

$client = new GuzzleHttp\Client([
    'headers' => ['Accept' => '*/*','Content-type'=>'application/octet-stream','User-Agent'=>'MicroMessenger Client'],'debug'=>true]);

#请求不通的原因是PHP把字符串给转义了，需要解决一下转义的问题。
$send_data = "\xbfNp\x16\x08\x88\xcb\x00\x00\x00\x00\xf7\x03yy\xae\x01\x01\x02\xb6+\x0bOw\x85\x16@\xd3\x91\xf6\x1c4\xd4\xfb\xf1\xc7\rwCc\xef\x1d\xc2\xc3\xdc)U\x8bl\x1e\x17\x95\x9d<\xce\xd9h\x01m\xb4:F\x0b\xe9b\xf5iS\xd7&7E3\x85_\xb0\x01\x08\x83S\x8f\x0f\x8dx\x9fk\x04\x7f_\x17Q\xb8Q[l\xbb]^;\x8c\xa6\xe2\x86%+\x93\xc0X\xf4\x05m\xfb\x94\xe2\xfd=\xc5P\xc9\xe0\xd6f\x90.\xc3\x19\x1fK\x00/\x13R\xa0E\xae\xfb\xf9c;\xf2\xd3E,\xa8\x97\x0fc\xcfE3\xff\x9a\x9f\xf0\xf4\x08\xdc0\x99\xff\xcd\xed\x1bO\x88\xc0@$\x058\xd6$\x85\x1a\x04\x87\xd7r\xfd\xa0\xb9\x84\xc5j\x02\xcb\xd9\xdcd=\x91T/\xc7\xf0\xa1\xa91\xa2;\xc8\xa40J\x93\x1e\xff\xac\xe6\x97\x19\x1cu\x9b\xda\xbb\xe7\x00@o\xdb@\x04ET\xb5\x0c1g\x7f\xa1\x01C\xf1\xa0zq1}\xab\xf3\xc0\x1c\x96A\t\x82~\x7f\xf7\xd9J\x18;\xf1\x870>\xdeHr\x17\xa7\xcc\xed.\xe0i^hVP\xa7x{";

$body = \GuzzleHttp\Psr7\stream_for($send_data);

$r = $client->request('POST', '180.163.25.139/cgi-bin/micromsg-bin/getloginqrcode', ['body' => $body]);

echo "ReturnBufferLenght:".strlen($r->getBody()).PHP_EOL;


$buffer = (string) $r->getBody();

print_r($buffer);exit();

#print_r(mb_convert_encoding($buffer, 'UTF-8', 'ISO-8859-1'));exit();
#print_r(sprintf("%x",$buffer));exit();


#print_r($arr);exit;



#解密返回的结果
unPackHeader($buffer);



# 步长BUG,nlen不对

function unPackHeader($src,$key='')
{
    if(strlen($src) < 0x20)
    {
        exit("Protocol Error!\n");
    }
    else
    {
        $nCur = 0;
        if(getbytes($src)[$nCur] == unpack('C',"\xbf")[1])        # array [1] => 191
        {
            $nCur += 1;                                             # 跳过协议标志位
        }

        # //res 125
        #print_r(getbytes($src)[$nCur]);
        

        $nLenHeader     = getbytes($src)[$nCur] >> 2;                 # 包头长度
        $bUseCompressed = getbytes($src)[$nCur] & 0x3;         # 包体是否使用压缩算法:01使用,02不使用

        $nCur += 1;
        $nDecryptType  = getbytes($src)[$nCur] >> 4;   #解密算法(固定为AES解密): 05 aes解密 / 07 rsa解密
        $nLenCookie    = getbytes($src)[$nCur] & 0xf;  # cookie长度
        $nCur += 1;
        $nCur += 4;                          #服务器版本(当前固定返回4字节0)

        $uin = 0;  #uin

        $nCur += 4;


        #nCur:11 nLenHeader:31 nLenCookie:6 bUseCompressed:1 nDecryptType:5 cookie_temp:b'\x00\x00\x00\x00\x00\x00'
        $cookie_temp = getbytes($src);

        #Cookies end number is 17. start_no is 11,total count = 6 ,result = \x00\x00\x00\x00\x00\x00

        #$end_no = $nCur+$nLenCookie;
        #echo "nCur:{$nCur},End_no:{$end_no}".PHP_EOL;

        $cookie_temp = dexToHexs(array_slice($cookie_temp,$nCur,6));

        $cookie = "";

        if($cookie_temp != $cookie)
        {
            $cookie = $cookie_temp;
        }

        $nCur += $nLenCookie;
        echo sprintf("nCur:%s nLenHeader:%s nLenCookie:%s bUseCompressed:%s nDecryptType:%s cookie_temp:%s",$nCur,$nLenHeader,$nLenCookie,$bUseCompressed,$nDecryptType,$cookie_temp).PHP_EOL;

        $body = array_slice(getbytes($src),$nLenHeader);
        $body = dexToHexs($body);

        print_r($body);

        #var_dump(getbytes(toStr($src)));
        decompress_and_aesDecrypt($body,'6PFv7cr931bnSUqB');
    }
}

# AES-128-CBC解密解压缩
function decompress_and_aesDecrypt($src,$key,$iv=null)
{
    $result = openssl_decrypt($src,'AES-128-CBC',$key);
    echo "\ndecryptKey:".$key.PHP_EOL;
    echo "\n解密后数据:".PHP_EOL;

    var_dump($result);
}

# String To ByteArray
function getbytes($str)
{
    $len = strlen($str);
    $bytes = array();
    for($i=0;$i<$len;$i++)
    {
        /*
        if(ord($str[$i]) >= 128)
        {
            $byte = ord($str[$i]) - 256;
        }
        else
        {
            $byte = ord($str[$i]);
        }
        */
        #echo $str[$i].'==='.ord($str[$i]).PHP_EOL;
        $bytes[] = ord($str[$i]) ;
    }
    return $bytes;
}

#String and Array to Hex
function dexToHexs($data)
{
    $ret = '"';
    if(is_array($data))
    {
        foreach ($data as $k=>$val)
        {
            $ret .= '\x' . str_pad(dechex($val), 2, '0', STR_PAD_LEFT);
        }
    }
    else
    {
        $ret .= '\x' . str_pad(dechex($data), 2, '0', STR_PAD_LEFT);
    }
    return $ret . '"';
}