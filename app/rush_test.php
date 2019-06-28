<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/6/28
 * Time: 下午3:01
 */



/*
require '../vendor/autoload.php';


$client = new \GuzzleHttp\Client(['cookies' => true]);

$jar = new \GuzzleHttp\Cookie\CookieJar();

$url = 'https://www.adidas.com.cn';

$res = $client->request('GET', $url, [ 'allow_redirects' => true]);
$body = (string) $res->getBody();

print_r($res->getHeaders());
*/

$cookie_jar = dirname(__FILE__)."/pic.cookie";


$url = "https://www.adidas.com.cn/";

//模拟群友通讯录手机号登录
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_jar);
$rs = curl_exec($ch);
curl_close($ch);

