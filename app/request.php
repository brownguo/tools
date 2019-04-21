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



/*==================AesKey===========================*/
$aeskey = new AesKey();
$aeskey->setKey('hQvyCVmcLt98WBUf');
$aeskey->setLen(16);
//print_r($aeskey->dump());
/*==================AesKey===========================*/




/*==================BaseRequest===========================*/
$baseRequest = new BaseRequest();
$baseRequest->setSessionKey('hQvyCVmcLt98WBUf');
$baseRequest->setUin(0);
$baseRequest->setDevicelId('c_\027\016].7_\237\324\010\306Ke,\013');
$baseRequest->setClientVersion('369558056');
$baseRequest->setOsType('iPad iPhone OS9.3.3');
$baseRequest->setScene(0);
//print_r($baseRequest->dump());
/*==================BaseRequest===========================*/


/*==================GetLoginQRCodeRequest===========================*/

$start = new GetLoginQRCodeRequest();
$start->setBaseRequest($baseRequest);
$start->setAes($aeskey);
$start->setOpcode(0);
$start->setExtDevLoginType(0);
$packed = $start->getBaseRequest()->serializeToString();
$start->dump();
print_r($packed);