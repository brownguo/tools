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

$baseRequest = new BaseRequest();



/*==================BaseRequest===========================*/
$baseRequest->setSessionKey('hQvyCVmcLt98WBUf');
$baseRequest->setUin(0);
$baseRequest->setDevicelId('\377\270y\014\373\236\237\257h\\a\010(\005?\036');
$baseRequest->setClientVersion('369558056');
$baseRequest->setOsType('iPad iPhone OS9.3.3');
$baseRequest->setScene(0);
print_r($baseRequest->dump());
/*==================BaseRequest===========================*/
