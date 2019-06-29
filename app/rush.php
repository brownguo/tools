<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/6/28
 * Time: 下午2:14
 */


require '../vendor/autoload.php';


$send_data = array(
    'loginName'             =>'18513558982',
    'password'              =>'admin123.',
    'isRemberMeLoginName'   => 'true',
    'NECaptchaValidate'     =>'',
);

#$send_data = http_build_query($send_data);


#just need XSRFTOKEN
$client = new GuzzleHttp\Client([
    'headers' => [
        'Accept'            => '*/*',
        'Accept-Encoding'   =>'gzip, deflate, br',
        'Accept-Language'   =>'zh-CN,zh;q=0.9,en;q=0.8',
        'Cache-Control'     =>'no-cache',
        'Connection'        =>'keep-alive',
        'Content-Length'    => strlen(http_build_query($send_data)),
        'Content-type'      =>'application/x-www-form-urlencoded; charset=UTF-8',

        'Cookie:'           =>'XSRF-TOKEN=a794c873-d3e5-493e-bb7e-106ea171d91a; 
        firsttime=first; 
        adidas_recommend_cookie_keyzh_CN=%u4E24%u4EF6%u989D%u59169%u6298%2C%u62A2YEEZY%2CHOME%20OF%20CLASSICS%2C4D%2CClima%2CNite%20JOGGER%2CGame%20of%20Thrones%2Cultraboost%2Cyung%2096%2Csuperstar; 
        locale=zh_CN; 
         loginTypes=account;
           JSESSIONID=F3297CD301044F53CC8142DA764564ED-n52; ',

        'Host'              =>'www.adidas.com.cn',
        'Origin'            =>'https://www.adidas.com.cn',
        'Pragma'            =>'no-cache',
        'Referer'           =>'https://www.adidas.com.cn/member/login',
        'User-Agent'        =>'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
        'X-CSRF-TOKEN'      =>'a794c873-d3e5-493e-bb7e-106ea171d91a',
        'X-Requested-With'  =>'XMLHttpRequest'

    ],'debug'=>true]);



#$body = \GuzzleHttp\Psr7\stream_for($send_data);

$r = $client->request('POST', 'https://www.adidas.com.cn/member/login.json', ['form_params' => $send_data]);

$buffer = (string) $r->getBody();


print_r($buffer);