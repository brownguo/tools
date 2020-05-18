<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2020/5/15
 * Time: 下午3:06
 */

//1,访问登陆页面，拿到bm_dz,_abck这两个cookies，2、将cookies注册到sensor_data, 开始post登陆
$appVersion         = 759;
$experienceVersion  = 759;
$uxid               = 'com.nike.commerce.snkrs.web';
$locale             = 'zh_CN';
$backendEnvironment = 'identity';
$browser            = 'Google%20Inc.';
$os                 = 'undefined';
$mobile             = 'false';
$native             = 'false';
$visit              = 4;
$visitor            = '932f9922-ea86-4625-857b-ff547279c093';


$login_url = sprintf('https://unite.nike.com/login?appVersion=%s&experienceVersion=%s&uxid=%s&locale=%s&backendEnvironment=%s&browser=%s&os=%s&mobile=%s&native=%s&visit=%s&visitor=%s',
        $appVersion,$experienceVersion,$uxid,$locale,$backendEnvironment,$browser,$os,$mobile,$native,$visit,$visitor
    );

echo $login_url.PHP_EOL.PHP_EOL;


require_once '../vendor/autoload.php';
$data = array(
    "username"      => "tonyzhang@qq.com",
    "password"      => "ajsoj1.",
    "client_id"     => "PbCREuPr3iaFANEDjtiEzXooFl7mXGQ7",
    "ux_id"         => $uxid,
    "grant_type"    => "password"
);
$client = new GuzzleHttp\Client([
    'headers' => [
        'authority'        => 'unite.nike.com',
        'method'           => 'POST',
        'path'             => '/login?appVersion=759&experienceVersion=759&uxid=com.nike.commerce.nikedotcom.web&locale=zh_CN&backendEnvironment=identity&browser=Google%20Inc.&os=undefined&mobile=false&native=false&visit=5&visitor=932f9922-ea86-4625-857b-ff547279c093',
        'scheme'           => 'https',
        'accept'            => '*/*',
        'accept-encoding'   => 'gzip, deflate, br',
        'accept-language'   => 'zh-CN,zh;q=0.9,en;q=0.8',
        'content-type'      => 'application/json',
        'cookie'            => 'guidU=bd669be9-500c-4366-c3a5-22f87cb229a0; dreams_sample=96; _smt_uid=5aa632fc.51fa7e6b; _gscu_207448657=20841468b00zzd18; RES_TRACKINGID=74339942686414802; anonymousId=3EFCCB84906289BD668570FFEE890C6A; CONSUMER_CHOICE_GS=SG; siteCatalyst_sample=20; dreamcatcher_sample=4; neo_sample=34; sq=3; _ga=GA1.2.1800860178.1540194689; _gcl_au=1.1.620465537.1554798512; NIKE_CART=b:c; s_fid=35EECB172E4D1E2C-28F41E970F5CB06D; NIKE_COMMERCE_COUNTRY=CN; NIKE_COMMERCE_LANG_LOCALE=zh_CN; AMCV_F0935E09512D2C270A490D4D%40AdobeOrg=1994364360%7CMCIDTS%7C18235%7CMCMID%7C36708608709531692431578682793078542857%7CMCAAMLH-1576046606%7C11%7CMCAAMB-1576046606%7CRKhpRz8krg2tLO6pguXWp5olkAcUniQYPHaMWWgdJ3xzPWQmdj0y%7CMCOPTOUT-1575449006s%7CNONE%7CMCAID%7CNONE%7CvVersion%7C3.4.0; AnalysisUserId=122.224.10.39.239461576129592969; CONSUMERCHOICE=cn/zh_cn; ResonanceSegment=1; utag_main=_st:1587451364865$ses_id:1587450351956%3Bexp-session; geoloc=cc=CN,rc=BJ,tp=vhigh,tz=GMT+8,la=39.90,lo=116.41; nike_locale=cn/zh_cn; _gscbrs_207448657=1; Hm_lvt_ed406c6497cc3917d06fd572612b4bba=1587449524,1587698754,1587887009; gridViewSetting=true; guidS=6cfb09b1-f3eb-4cf6-fa9d-f8707fe9b29e; guidSTimestamp=1589525790527|1589525790527; lls=3; ppd=homepage|nikecom>homepage; Hm_lpvt_ed406c6497cc3917d06fd572612b4bba=1589532238; ajs_user_id=null; ajs_group_id=null; ajs_anonymous_id=%22425ffe13-f4a7-47bc-b7b0-25f9b192d240%22; bm_sz=0503D73FBDDDCC002ECD5B0B324FAA63~YAAQXR7eOsXDPRlyAQAAu4ZQJgflBmMMHQmNkZyLMCPu6h2DivbB+OuVIa5YNp0H0VdkH/lhMOr8AdbLI+7N7BeBPV+i97QRAtePDz0IU1eO/XJKFyjpTZds6psB3pLGHTfsmk/N9fV1abVM/r+ZmtUV9bajGhSbHjVaD0+JtFVmiU1zJyvoktgcCJfQ; ak_bmsc=131D8AC01C7A53CB74E6A0AB3A161EAD43942FBF3E380000F020C25E6E654E5B~plzTziR2e8GuSTYhHbAagKOiaPweVyDRk52e+dHa9NMsRFSh8XJcpj65//p5UUyhS9vKAgAt9wlZfUXqJO/4K22DLJLFyt7C/VwYEijkIHislHtZynseF1MFczpYHz5kL+p8/jDIo1B5Z/WCpW/bktZpSyZ40Y93EtAS9nRubwyblZdIWb5txhgupZOYYYOGjIu4h4XFq23Yttjnso5S7qAIZlrp2eYkdXqRQXJTf/M1c=; AKA_A2=A; llCheck=wyOISXpMYq1G+5FrPKUrso/DnGbjiI56vItRucunMjWqVVyv6Y7nFmp2PB5KK10LJQylDEC1foW9Dxd2b3Ol/dskDbs7ZawNMkcinmIdeOagKZ2vepmpMJ4MOYn9jKBjUIZe/O3hgbmSuqBxoq7GJItM9LbCnr7RwUPNwNEhwl4=; bm_sv=D8847BFB37CBC5164C334E92E005D5AC~agd7zPF5TWVbVetPByk6BfSIXtjPk6uLKUBgtddb8HdzKz1ZeYWmskGNNlQQPYFL2pM35er2djGAJYmqJkekufbe8fIt+u/e9DtR4z5L+kQB8o/1mZpvIHQmiXJKEbnoUWCGDGDzJdhYnAknqXEKnA==; RT="z=1&dm=nike.com&si=65c0e4c6-4235-4647-a303-f295519056b3&ss=ka7um34e&sl=0&tt=0&bcn=%2F%2F173e2509.akstat.io%2F"; _abck=C7E954957A8A98A88F804BE8BECFD36F~-1~YAAQXR7eOsSLQxlyAQAAeUtvJgMcoPykkQGIJqgclwycB6R27jfK8+qVtxfTf/zuRma7c65AR6QyUVEBQhFXym2IchUZ4d1SUNU3kxa73B0VnFVxMngCs64FPGJU356Coyc9H71lGxNlQQwCe2s4A5ze066gKawtUFT8XAhBQbGYm/Bmq/96ZUaXVdOglmemfj/zaKWHTS88x+n9WnGpYV/wtSqzOX7CGSGESUIh3EcJEdzbAYnhecpjx2NxTKTH6LuRWMI8/IoQDJnAJcAQ3LOUn47oXGyUOVRa7RjbBTrG/bO0XawUOV7OE0mktsg0mjX520PIo5PeQPj7sVTJkJ6N~-1~-1~-1',
        'origin'            => 'https://www.nike.com',
        'referer'           => 'https://www.nike.com/cn/launch?s=in-stock',
        'sec-fetch-dest'    => 'empty',
        'content-length'    => strlen(json_encode($data)),
        'sec-fetch-mode'    => 'cors',
        'sec-fetch-site'    => 'same-site',
        'user-agent'        => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36',
    ],'debug'=>true]);



$response = $client->post($login_url,['json'=>$data]);

$body = (string) $response->getBody();

print_r($body);