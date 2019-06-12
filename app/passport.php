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


$url = '180.163.25.139/cgi-bin/micromsg-bin/getloginqrcode';

$header = array(
    'Accept : */*',
    'Content-type : application/octet-stream',
    'User-Agent : MicroMessenger Client',
);

$send_data = '\xbfNp\x16\x08\x88\xcb\x00\x00\x00\x00\xf6\x03__\xae\x01\x01\x02F\\J\x9ap\xfdf\x91\xc4le\xb3\n\x80\xc16\x18k\xa3{|!l\x82\xd0\xa6\xb3\x8d\x860\x90\xbb\x1c\xea\x81\x90\xfad\xf4+\xdd+p\xc2\xac\xaak)\x842\x18\x13(\x9b\xbc\x94(\xcf\xd8\x97#\xc1\xbc\xd6\xae\x18;\xafns\xeb\xaffH\x85s\xa8\xef\x88?]\xec\xc1\xc9\xbd\x81eT\xebAJxzk\x14\xb4\xa4h\xd2\xe0K4%\xe3\x80}\x98K\xc9\xc6\\\x10\xd7\x89\xd1\x89\x9aW\x9e\xd3\xf7,\x84\x97\xbal\xdf\x8c\xa9Z\x1d,\xe8\xb3\xabL{~\xb0W\xff\x8ch\xdfz\xc8F\xe0\xd7\x83\x90t\x9a\x1cP1j\x8e\xe0\x04\xceV\xf6\x11\xde\xe2+\x9a\xbcaX/\xd0\xbf\x9e\x9c\r\xd8\x18\'\xda\xcb\xfe\xa0e6\xb6s\xdex\x10\x16X\xe9(\x84:\xc2\\60\x90HR2\xd5\xf0\xab\xc8/\xffyZ\x85\xb9\x92o\x14\xaf\xd0j \xea\xba:\n<\x86%\xc8\xa3\xe9d\x8b\x12\xc7\x11\xdb\xa6G\xf7YEuZT\x1b\x1f\x80\x0fKqw\xf5\x17}';

$res = requests::post($url,$send_data,$header,false,false,null);

echo "Buffer 长度:".strlen($res).PHP_EOL;
#echo "Buffer res:".getbytes($res).PHP_EOL;

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

function getbytes($str) {

    $len = strlen($str);
    $bytes = array();
    for($i=0;$i<$len;$i++) {
        if(ord($str[$i]) >= 128){
            $byte = ord($str[$i]) - 256;
        }else{
            $byte = ord($str[$i]);
        }
        $bytes[] =  $byte ;
    }
    return $bytes;
}