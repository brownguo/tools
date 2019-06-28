<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/6/28
 * Time: 下午3:01
 */




require '../vendor/autoload.php';


$client = new \GuzzleHttp\Client(['cookies' => true]);

$jar = new \GuzzleHttp\Cookie\CookieJar();

$url = 'https://www.adidas.com.cn';

$res = $client->request('GET', $url, [ 'allow_redirects' => true]);
$body = (string) $res->getBody();

print_r($res->getHeaders());
