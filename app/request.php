<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/4/17
 * Time: 9:35 PM
 *
 * 问题:protobuf格式不太对..
 */

include_once "./pb/GetLoginQRCodeRequest.php";
include_once "./pb/AesKey.php";
include_once "./pb/BaseRequest.php";
include_once "../bin/requests.php";
$start = new GetLoginQRCodeRequest();
$aeskey = new AesKey();
$aeskey->setKey('hQvyCVmcLt98WBUf');
$aeskey->setLen(16);

//$start->setAes($aeskey->setKey('JumpManAesKeys!'));
//$start->setBaseRequest('111');
//$start->setDeviceName('111');
//$start->setExtDevLoginType('1111');
//$start->setHadrwareExtra('111');
//$start->setOpcode('11');
//$start->setRsa('11');
//$start->setSoftType('11');
//$start->setUserName('111');

$baseR = new BaseRequest();

$baseR->setSessionKey('hQvyCVmcLt98WBUf');
$baseR->setUin('0');
$baseR->setDevicelId('2/!\000\n\235\372\263\014B\306v\275\257\337\001');
$baseR->setClientVersion('369558056');
$baseR->setOsType('iPad iPhone OS9.3.3');
$baseR->setScene(0);

//print_r($baseR->dump());
//$packed = $baseR->serializeToString();
//print_r($packed);
//$dump_all_filed = $start->dump();
//print_r($dump_all_filed);


print_r($baseR->values);
$start->setBaseRequest($baseR);
$start->setAes($aeskey);
$start->setOpcode(0);
$start->setExtDevLoginType(0);
print_r($start->getBaseRequest());
exit();

//$packed = $start->encode();


//$url = 'http://short.weixin.qq.com/cgi-bin/micromsg-bin/getloginqrcode';
//$res = requests::post($url,$packed,null);
//var_dump($res);
//to 16
//print_r(bin2hex($packed));
//print_r($packed);





//print_r($start->getBaseRequest());
//$fields = $start->fields();
//foreach ($fields as $key => $_item) {
//    $field_name = $_item['name'];
//    if(isset($data[$field_name])) {
//        $this->set($key, $data[$field_name]);
//    }
//}

print_r($start->dump());
//print_r($packed);
//print_r($start->serializeToString());
