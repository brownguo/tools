<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/6/11
 * Time: 10:56 PM
 */


$url = '180.163.25.139/cgi-bin/micromsg-bin/getloginqrcode';

$header = array(
    'Accept : */*',
    'Content-type : application/octet-stream',
    'User-Agent : MicroMessenger Client',
);

$send_data = '\xbfNp\x16\x08\x88\xcb\x00\x00\x00\x00\xf6\x03__\xae\x01\x01\x02F\\J\x9ap\xfdf\x91\xc4le\xb3\n\x80\xc16\x18k\xa3{|!l\x82\xd0\xa6\xb3\x8d\x860\x90\xbb\x1c\xea\x81\x90\xfad\xf4+\xdd+p\xc2\xac\xaak)\x842\x18\x13(\x9b\xbc\x94(\xcf\xd8\x97#\xc1\xbc\xd6\xae\x18;\xafns\xeb\xaffH\x85s\xa8\xef\x88?]\xec\xc1\xc9\xbd\x81eT\xebAJxzk\x14\xb4\xa4h\xd2\xe0K4%\xe3\x80}\x98K\xc9\xc6\\\x10\xd7\x89\xd1\x89\x9aW\x9e\xd3\xf7,\x84\x97\xbal\xdf\x8c\xa9Z\x1d,\xe8\xb3\xabL{~\xb0W\xff\x8ch\xdfz\xc8F\xe0\xd7\x83\x90t\x9a\x1cP1j\x8e\xe0\x04\xceV\xf6\x11\xde\xe2+\x9a\xbcaX/\xd0\xbf\x9e\x9c\r\xd8\x18\'\xda\xcb\xfe\xa0e6\xb6s\xdex\x10\x16X\xe9(\x84:\xc2\\60\x90HR2\xd5\xf0\xab\xc8/\xffyZ\x85\xb9\x92o\x14\xaf\xd0j \xea\xba:\n<\x86%\xc8\xa3\xe9d\x8b\x12\xc7\x11\xdb\xa6G\xf7YEuZT\x1b\x1f\x80\x0fKqw\xf5\x17}';

$res = request_post($url,$send_data,$header);

echo "Buffer 长度:".strlen($res).PHP_EOL;


var_dump($res);


function request_post($url = '', $param = '',$header) {
    if (empty($url) || empty($param)) {
        return false;
    }

    $postUrl = $url;
    $curlPost = $param;
    $ch = curl_init();//初始化curl
    curl_setopt($ch, CURLOPT_URL,$postUrl);//抓取指定网页
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);//设置header
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//要求结果为字符串且输出到屏幕上
    curl_setopt($ch, CURLOPT_POST, true);//post提交方式
    curl_setopt($ch, CURLOPT_POSTFIELDS, $curlPost);
    $data = curl_exec($ch);//运行curl
    curl_close($ch);
    return $data;
}