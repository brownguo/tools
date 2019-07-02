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


$send_data = '{
	"attrs": {
		"true_name": "张凯",
	    "alt_email": "",
		"nick_name": "zkay",
		"gender": "0",
		"classes": "2013060110",
		"subject": "计算机科学与技术",
		"campus": "清水河校区",
		"room_number": "123",
		"qq_number": "1480630390",
		"wechat_number": "",
		"remarks": ""
	}
}';

$send_data = array(
    'attrs'=>array(
        "true_name"     =>  "张凯",
	    "alt_email"     =>  "",
		"nick_name"     =>  "zkay",
		"gender"        =>  "0",
		"classes"       =>  "2013060110",
		"subject"       =>  "计算机科学与技术",
		"campus"        =>  "清水河校区",
		"room_number"   =>  "16-8-4",
		"qq_number"     =>  "1480630390",
		"wechat_number" =>  "",
		"remarks"       =>  ""
    ),
);

#just need XSRFTOKEN
$client = new GuzzleHttp\Client([
    'headers' => [
        'Accept'            =>'text/x-json',
        'Accept-Encoding'   =>'gzip, deflate',
        'Accept-Language'   =>'zh-CN,zh;q=0.9,en;q=0.8',
        'Cache-Control'     =>'no-cache',
        'Connection'        =>'keep-alive',
        'Content-Length'    =>strlen(json_encode($send_data)),
        'Content-Type'      =>'text/x-json',
        'Cookie'            =>'face=auto; locale=zh_CN; saveUsername=true; domain=std.uestc.edu.cn; CoremailReferer=http%3A%2F%2Fmail.std.uestc.edu.cn%2F; UM_distinctid=16bb13c3654385-057758ec204684-37677e05-1fa400-16bb13c3655664; uid=2013060110028%40std.uestc.edu.cn; Coremail=fb10217e55f63d974194b3a46d89375f; Coremail.sid=BAmhMaFFRUtQVZczgVFFVcHsBeTmbdRa',
        'Host'              =>'mail.std.uestc.edu.cn',
        'Origin'            =>'http://mail.std.uestc.edu.cn',
        'Pragma'            =>'no-cache',
        'Referer'           =>'http://mail.std.uestc.edu.cn/coremail/XT5/index.jsp?sid=BAmhMaFFRUtQVZczgVFFVcHsBeTmbdRa',
        'User-Agent'        =>'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
        'X-Requested-With'  =>'XMLHttpRequest',

    ],'debug'=>true]);


$std_client = new GuzzleHttp\Client([
    'headers' => [
        'Accept'            =>'text/x-json',
        'Accept-Encoding'   =>'gzip, deflate',
        'Accept-Language'   =>'zh-CN,zh;q=0.9,en;q=0.8',
        'Cache-Control'     =>'no-cache',
        'Connection'        =>'keep-alive',
        'Content-Length'    =>'34',
        'Content-Type'      =>'text/x-json',
        'Cookie'            =>'face=auto; locale=zh_CN; saveUsername=true; domain=std.uestc.edu.cn; CoremailReferer=http%3A%2F%2Fmail.std.uestc.edu.cn%2F; UM_distinctid=16bb13c3654385-057758ec204684-37677e05-1fa400-16bb13c3655664; uid=2013060110028%40std.uestc.edu.cn; Coremail=fb10217e55f63d974194b3a46d89375f; Coremail.sid=BAmhMaFFRUtQVZczgVFFVcHsBeTmbdRa',
        'Host'              =>'mail.std.uestc.edu.cn',
        'Origin'            =>'http://mail.std.uestc.edu.cn',
        'Pragma'            =>'no-cache',
        'Referer'           =>'http://mail.std.uestc.edu.cn/coremail/XT5/index.jsp?sid=BAmhMaFFRUtQVZczgVFFVcHsBeTmbdRa',
        'User-Agent'        =>'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
        'X-Requested-With'  =>'XMLHttpRequest',

    ],'debug'=>true]);



#$body = \GuzzleHttp\Psr7\stream_for($send_data);

$r = $client->request('POST', 'http://mail.std.uestc.edu.cn/coremail/s/json?func=user%3AsetAttrs&sid=BAmhMaFFRUtQVZczgVFFVcHsBeTmbdRa', ['json' => json_encode($send_data,JSON_UNESCAPED_UNICODE)]);

$body = (string) $r->getBody();

print_r($body);


$std_send_data = array(
    'id'        =>'Personal',
    'withValue' =>'true'
);
$std = $std_client->request('POST','http://mail.std.uestc.edu.cn/coremail/s/json?sid=BAmhMaFFRUtQVZczgVFFVcHsBeTmbdRa&func=user%3AgetSchema',['json'=>json_encode($std_send_data)]);

print_r((string) $std->getBody());