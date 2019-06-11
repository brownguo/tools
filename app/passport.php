<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/5/29
 * Time: 下午2:46
 */



include_once "./pb/BaseRequest.php";
include_once "./pb/GetLoginQRCodeRequest.php";
include_once "./pb/GetLoginQRCodeRequest.php";
include_once "../bin/requests.php";

$baseRequest = array(
    'baseRequst' => array(
        'sessionKey'   => 'k2J7XS4cIALnU6Ru',
        'uin'           => 0,
        'devicelId'     => '\301\004\313P\234\303\371 I\261\241\234<O\242r',
        'clientVersion' => '369558056',
        'osType'        => 'iPad iPhone OS9.3.3',
        'scene'         => 0
    ),
    'aes' => array(
        'len'   =>16,
        'key'   =>"k2J7XS4cIALnU6Ru"
    ),
    'opcode'         =>0,
    'extDevLoginType'=>0
);





$start = new GetLoginQRCodeRequest();

$baseRequest = new BaseRequest();
$baseRequest->setSessionKey('hQvyCVmcLt98WBUf');
$baseRequest->setUin(0);
$baseRequest->setDevicelId('c_\027\016].7_\237\324\010\306Ke,\013');
$baseRequest->setClientVersion('369558056');
$baseRequest->setOsType('iPad iPhone OS9.3.3');
$baseRequest->setScene(0);

$start->setOpcode(0);
$start->setExtDevLoginType(0);

$start->setBaseRequest($baseRequest);

$buffer = $start->SerializeToString();


#print_r($buffer);


$url = 'http://180.163.25.139/cgi-bin/micromsg-bin/getloginqrcode';

$request_header = array(
    "Accept:*/*",
    "Content-type:application/octet-stream",
    "User-Agent:MicroMessenger Client",
);



$header = "\xbfNp(\x02\x07\x16\x00\x00\x00\x00\xf6\x03__\xae\x01\x01\x02";

$send_data = "\xbfNp(\x02\x07\x16\x00\x00\x00\x00\xf6\x03__\xae\x01\x01\x02\xcb\x17A\x93\xf9D\x96\xd6\xf4\x0e_<\x8e\xf0\x11\xc8\x84\xe8\xbe\xe3nb\n\xf1%\x88\xbf\xbe\x13R\xd32\x94\x02Z\x98\x91c\x9b\'\xde0\xc7\"pJ\xcf\xa9\xec\xa5.\x05\xd2\xd4\xf5\xa8\x88w\xe0NH\t\x0c\xe9\x88\xab\t\xbcD\xb1\x88P_\xb8\xd2\xa1\x0f\xfc\xa2\xbf\xa7l\xc2\x9b\xaa2\x0e#\xf7aj\"u%\xe3\xe2;\xf1\xcd\xa9\x18\xa0\xa5=L\xa0\xe3\xb7k\\s\xdd\x0c\xa0$\xba\xb6-@6y\x90\x8f\xe6/7\x0c\xadr\x94\xd5\x12s\xa1\xd4\x15\x95\xe9\x87\xf8\xe2\xa7\xfe\'pi\xe8\x0b\xa9!R\x03\x9d\xb3\xaet\x0cm\xe6{\xb4\xe8Z\x85]\n\xee\x9d\xeb\x88\xf3\x8b$\x93\xd6\xd8p\xc0\xdb\xce\xaf(i\xc5\xdc@{\x7fn^\x16\x99\x8c\x9d\xf5\x07\xee\x8f{\x0e\xc9\x07,\x05jg\x84\xc0\xf8*\xbf]\xaf50\xf4t\xa7\x1b\x03\xcfT?\xf0>T+c9c3\xed\xc6\x0e\rZ\x0c$0\x99$\xee\x19\xdf\x01h5\x17\x05\x16\x1a\x86d\xfc\x98\xb7";

$res = requests::post($url,$send_data,$request_header,false,false,null);

echo "Buffer 长度:".strlen($res).PHP_EOL;


print_r($res);





#MakeHead(1,2,3,true,false);
function MakeHead($cgi,$nLenProtobuf,$encodetypr = 7,$iscookie = true,$isuin=false)
{
    $version = 369558056;

    $header  = '\xbf';

    $header .= '\x02';

    if($iscookie)
    {
        $header .= decToHexs((0x7 << 4) + 0xf);
    }
    else
    {
        $header .= decToHexs((0x7 << 4));
    }


    $buffer = pack("I",$version);

    #var_dump($buffer);
    #print_r($header);
    #echo PHP_EOL;



    #echo bin2hex($buffer).PHP_EOL;

    //补齐4位
    $header.= str_repeat(bin2hex(0),4);

    if($iscookie)
    {
        $header.= str_repeat(bin2hex(0),15);
    }

    $header.= pack("L",$cgi);
    $header.= pack("L",$nLenProtobuf);
    $header.= pack("L",$encodetypr);
    $header.= pack("L",174);
    $header.= '\x01';
    $header.= '\x01\x02';

    return $header;
    #var_dump($header);

    #echo preg_replace_callback("/./", function($matched) {
    #    return '\x'.dechex(ord($matched[0]));
    #},"helloworld!" );

    #echo decToHexs($version).PHP_EOL;
    #echo $header.PHP_EOL;
}



function decToHexs($hexval)
{
    if(!empty($hexval))
    {
        $res = "\\x".dechex($hexval);
    }
    return $res;
}

#print_r(stringToByteArray("Hello world!","utf-8"));


function stringToByteArray($str,$charset) {

    $str = iconv($charset,'UTF-16',$str);
    preg_match_all('/(.)/s',$str,$bytes);
    $bytes=array_map('ord',$bytes[1]) ;
    return $bytes;

}
