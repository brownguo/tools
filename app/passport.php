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


print_r($buffer);


$url = 'hkshort.weixin.qq.com/cgi-bin/micromsg-bin/getloginqrcode';


$send_data = pack($start->SerializeToString());

$res = requests::post($url,$send_data,null,false,false,null);

echo "Buffer 长度:".strlen($res).PHP_EOL;
print_r($res);


function pack_request_body()
{

}

MakeHead(1,2,3,true,false);
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
