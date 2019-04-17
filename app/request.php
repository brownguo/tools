<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/4/17
 * Time: 9:35 PM
 */

include_once "./pb/GetLoginQRCodeRequest.php";
include_once "./pb/AesKey.php";

$start = new GetLoginQRCodeRequest();
$aeskey = new AesKey();
$filed = $start->fields();


//$start->setAes($aeskey->setKey('JumpManAesKeys!'));
//$start->setBaseRequest('111');
//$start->setDeviceName('111');
//$start->setExtDevLoginType('1111');
//$start->setHadrwareExtra('111');
//$start->setOpcode('11');
//$start->setRsa('11');
//$start->setSoftType('11');
//$start->setUserName('111');








$dump_all_filed = $start->dump();
print_r($dump_all_filed);