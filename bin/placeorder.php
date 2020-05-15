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
$uxid               = 'com.nike.commerce.nikedotcom.web';
$locale             = 'zh_CN';
$backendEnvironment = 'identity';
$browser            = 'Google%20Inc.';
$os                 = 'undefined';
$mobile             = 'false';
$native             = 'false';
$visit              = 5;
$visitor            = '932f9922-ea86-4625-857b-ff547279c093';


$login_url = sprintf('https://unite.nike.com/login?appVersion=%s&experienceVersion=%s&uxid=%s&locale=%s&backendEnvironment=%s&browser=%s&os=%s&mobile=%s&native=%s&visit=%s&visitor=%s',
        $appVersion,$experienceVersion,$uxid,$locale,$backendEnvironment,$browser,$os,$mobile,$native,$visit,$visitor
    );


require_once '../vendor/autoload.php';

$client = new GuzzleHttp\Client([
    'headers' => [
        ':authority' => 'unite.nike.com',
        ':method'    => 'POST',
        ':path:'     => '/login?appVersion=759&experienceVersion=759&uxid=com.nike.commerce.nikedotcom.web&locale=zh_CN&backendEnvironment=identity&browser=Google%20Inc.&os=undefined&mobile=false&native=false&visit=5&visitor=932f9922-ea86-4625-857b-ff547279c093',
        ':scheme'    => 'https',
        'accept'     => '*/*',
        'accept-encoding' => 'gzip, deflate, br',
        'accept-language' => 'zh-CN,zh;q=0.9,en;q=0.8',
        'content-type' => 'application/json',
        'cookie'       => 'guidU=bd669be9-500c-4366-c3a5-22f87cb229a0; dreams_sample=96; _smt_uid=5aa632fc.51fa7e6b; _gscu_207448657=20841468b00zzd18; RES_TRACKINGID=74339942686414802; anonymousId=3EFCCB84906289BD668570FFEE890C6A; CONSUMER_CHOICE_GS=SG; siteCatalyst_sample=20; dreamcatcher_sample=4; neo_sample=34; sq=3; _ga=GA1.2.1800860178.1540194689; _gcl_au=1.1.620465537.1554798512; NIKE_CART=b:c; s_fid=35EECB172E4D1E2C-28F41E970F5CB06D; NIKE_COMMERCE_COUNTRY=CN; NIKE_COMMERCE_LANG_LOCALE=zh_CN; AMCV_F0935E09512D2C270A490D4D%40AdobeOrg=1994364360%7CMCIDTS%7C18235%7CMCMID%7C36708608709531692431578682793078542857%7CMCAAMLH-1576046606%7C11%7CMCAAMB-1576046606%7CRKhpRz8krg2tLO6pguXWp5olkAcUniQYPHaMWWgdJ3xzPWQmdj0y%7CMCOPTOUT-1575449006s%7CNONE%7CMCAID%7CNONE%7CvVersion%7C3.4.0; AnalysisUserId=122.224.10.39.239461576129592969; CONSUMERCHOICE=cn/zh_cn; ResonanceSegment=1; utag_main=_st:1587451364865$ses_id:1587450351956%3Bexp-session; geoloc=cc=CN,rc=BJ,tp=vhigh,tz=GMT+8,la=39.90,lo=116.41; nike_locale=cn/zh_cn; _gscbrs_207448657=1; Hm_lvt_ed406c6497cc3917d06fd572612b4bba=1587449524,1587698754,1587887009; gridViewSetting=true; ak_bmsc=AE1C777738FC97A968A0291A9FD25933D2C07715C07B0000D23CBE5E00DD711F~pl3uWLIkiD2aLM6Wor77h2Gbrvb+H96n1kZiOH1xtMWs597hINGgqTPHb4zV6l8UWBMNqmGJGVw+BeEy/2R4AsBfqAV/VeCbIKAJdNv9yW522NVpI+K1DFhatvZN4YuDvsAmT7ejtgxjHhf5s0KsZdWfn/4ugYTU9fKEP6i2yeMllHNnFUeBTzGGAgnyMNBS1C3xx6jPsE7RI5Iy6zA1I1AfxlL7+i9U/sKrTUmyhsEe1kz/WySsf2Md169F5uettK; guidS=6cfb09b1-f3eb-4cf6-fa9d-f8707fe9b29e; guidSTimestamp=1589525790527|1589525790527; lls=3; llCheck=BakNfan257b6nXiDoxTPrlUG2DLW6NGRQCM+7sacB1SPPcKbcSGCFUUPO7gv7GJSJQylDEC1foW9Dxd2b3Ol/dskDbs7ZawNMkcinmIdeOYjsh9RmE1XW9qfmQT9fvMjUIZe/O3hgbmSuqBxoq7GJNEiECJyK2Y5Q2sx4Jhk8TM=; AKA_A2=A; bm_sz=4957A387BF0844018A46C544CE245805~YAAQFXfA0gLmddJxAQAA77RfFwcn+B7bJ3fCL296cVYoH8EoXl5fCSJdItBzDuRskP9ED2kkwwtMbiozGag7c+EZOggZ5wD/0ie2F3K8aAwV+zscHV9n8/y+22LfDC6Q9YcnmA1FndJlTmyvdlzc4MkxsVpelHMMO9rJOjpOS7VgfeCdsdOI5B4PsEma; Hm_lpvt_ed406c6497cc3917d06fd572612b4bba=1589530049; _uetsid=343f6cfc-10e2-5691-7d92-be9b5522879d; _gscs_207448657=t89530049mn0ugc20|pv:1; ppd=homepage|nikecom>homepage; bm_sv=25455153977A269B501DD4F997DB939F~g/IWhGpcNEh3j7NFOUsmWtm7yotmJh9wxqlxk8FMJMnwSB8sbQNSAhD/7agvgAxujCnO1yjFVIZPjn/S8uI4qIynAcIpnRt/Exv2fdRq7HniOIQa6mF2q+XhzfyYWc/qzWXN7whytyARUQOU3sU37wQKyPwJwRQ/gsYTA/kdt4s=; RT="z=1&dm=nike.com&si=65c0e4c6-4235-4647-a303-f295519056b3&ss=ka7x5epu&sl=0&tt=0&bcn=%2F%2F173e255a.akstat.io%2F&ld=2jf6f&nu=708e03704036f2ab7072ef75152a24a7&cl=8f9"; _abck=C7E954957A8A98A88F804BE8BECFD36F~-1~YAAQFXfA0psCdtJxAQAAqAVgFwP6WAdoJNqTqZFGreg5FB6toct15wU6nuQlcFpZdscUbxC9jCOKBBIzL03IyM/OWjylCS7+pn0TXsyhGr2plus/SB+41RDoIz3YTOeBu0uoAq+zNvqLeH6wS7UM1AX1WDIW25hDnWPdxfIG6hY5mgry2Rp1uPc0r3BTkMCD6raKcCCa62CQrj0lHXVbwhocZC02peCGo0izytWMXk7VTUczlvC0w+8wsHZmqyADIerQmhqi6geZD+6A4SN3pQuki/Ci2JWwYvenXJ81lsDx94iztV+7gYaZhM1zGFuDyzWCC4wPgcfjZGPbQla1uMY+~-1~-1~-1',
        'origin'       => 'https://www.nike.com',
        'referer'      => 'https://www.nike.com/cn',
        'sec-fetch-dest' => 'empty',
        'sec-fetch-mode' => 'cors',
        'sec-fetch-site' => 'same-site',
        'user-agent'     => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36',
    ],'debug'=>true]);

$data = array(
    "username"      => "tonyzhang@qq.com",
	"password"      => "ajsoj1.",
	"client_id"     => "HlHa2Cje3ctlaOqnxvgZXNaAs7T9nAuH",
	"ux_id"         => "com.nike.commerce.nikedotcom.web",
	"grant_type"    => "password"
);

$response = $client->post($login_url,['body'=>json_encode($data)]);

$body = (string) $response->getBody();

print_r($body);