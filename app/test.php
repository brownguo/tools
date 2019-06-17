<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/6/11
 * Time: 10:56 PM
 */

require '../vendor/autoload.php';

use GuzzleHttp\Client;


$url = '180.163.25.139/cgi-bin/micromsg-bin/getloginqrcode';
$test_url = 'http://api.moeya.cn';



$headers = array(
    'Accept'        =>  '*/*',
    'Content-type'  =>  'application/octet-stream',
    'User-Agent'    =>  'MicroMessenger Client',
);

$send_data = '\xbfNp\x16\x08\x88\xcb\x00\x00\x00\x00\xf6\x03__\xae\x01\x01\x02"{\x10\xfba\xc9*\x04Feq\xca\xef\x1b\xf4g\xb3\x18\xf1\x96\'\xee\xd4V\x87\n\x95N1\xf1\xf73~\x16\x01\x98\x90\xfbYqc\x87\xa0\x91\xf4b\xb3k\x12b"\x0b\xb6\xe5\xb7\x98\r\xd4\xfb\x80\xcf\x13]qSW\x9dU\xe4^nX\xe6\xd0#\xe1\xe6\x0f\xd8F\x12n\x8c\x07\x0e\xba\x06\xf8\x80A`\xf7\x06O\x15H=\xcaC\xa9\xb1\xef\xfd\xb8\x85\xc1\x1bh\x9e+\xaf\xd5^\xbd}P\xe2|\x14z\xcd)\x12\x91\xedX\x9d\xde\xc6\x95\xee\x16\xba\x9c\x9eIn]\x92\x06\xce\xe7\x04\x80\xf5B\xa8\x06:|J\x81s\xf0\n4\xfa9z\xf2N\x1bH\x80\x80\xc0\x19\x03\xc27~\xccz\x8c\xde\x86\x9cDg\xb4\xc4\xd3\xd2\tAYj\xa5\xac\xdd\x8a-\xb3\xf0\xb6 \xd8\xfaMH\xfcz\xdb\xfb#\xb8A\xc6\xfd\xa9\x05\xc4\xde\x10n8\xbe\xcc\xcd\x9c\xb8\'\xaa\xfc\xb7\xfd\x1f\x9f\x01\xe6\x8e\xd8\xd4\x9b\x1d\xb3vK\xed\xaa\xad\xc4\xee~I\xd9\xcc\x18\xbb\xf1o\x8fr\xc5\xe1\xa9';

/*
$stream = \GuzzleHttp\Psr7\stream_for($send_data);

$request = new \GuzzleHttp\Psr7\Request('POST', $url, $header, $stream);


$res = $request->getBody()->getContents();

echo "HttpCode:".$request->getStatusCode().PHP_EOL;

#echo "Buffer 长度:".strlen($res).PHP_EOL;

print_r($request);


$client = new Client([
    'headers'   =>  $headers,
    'debug'     =>  true
]);


$stream = \GuzzleHttp\Psr7\stream_for($send_data);


$request = $client->post($url,['body'=>$stream]);

$body = $request->getBody(); //获取响应体，对象
$bodyStr = (string)$body;

echo "Buffer 长度:".strlen($bodyStr).PHP_EOL;

print_r($bodyStr);
*/
$descs = "helloworld";

echo substr($descs,1,8).PHP_EOL;
