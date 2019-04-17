<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/4/17
 * Time: 9:35 PM
 */

include_once "./pb/GetLoginQRCodeRequest.php";
include_once "./pb/AesKey.php";
include_once "./pb/BaseRequest.php";

$start = new GetLoginQRCodeRequest();
$aeskey = new AesKey();
$aeskey->setKey('123456');
$aeskey->setLen(6);

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

$baseR->setSessionKey('Session1Key');
$baseR->setUin('0');
$baseR->setDevicelId('1231231ddd');
$baseR->setClientVersion('12313');
$baseR->setOsType('iPhone');
$baseR->setScene(0);

//print_r($baseR->dump());
//$packed = $baseR->serializeToString();
//print_r($packed);
//$dump_all_filed = $start->dump();
//print_r($dump_all_filed);

$start->setAes();
$start->setBaseRequest($baseR);
$start->setAes($aeskey);
$start->setOpcode(0);
$start->setExtDevLoginType(0);

print_r($start->dump());