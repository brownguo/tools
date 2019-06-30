<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/6/28
 * Time: 下午3:01
 */




#没办法保存response cookies

require '../vendor/autoload.php';


function getMicroTimestamp()
{
    list($t1, $t2) = explode(' ', microtime());
    return (float)sprintf('%.0f', (floatval($t1) + floatval($t2)) * 1000);
}

$client = new \GuzzleHttp\Client(['cookies' => true]);

$jar = new \GuzzleHttp\Cookie\CookieJar();

$url = 'https://www.adidas.com.cn/index/recommendedSearchKey.json?_='.getMicroTimestamp();


$res = $client->request('GET', $url, [ 'allow_redirects' => true]);
$body = (string) $res->getBody();
print_r($body);
print_r($res->getHeaders());

