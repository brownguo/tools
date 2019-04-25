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

print_r($baseRequest->getSessionKey());
echo PHP_EOL;
//print_r($baseRequest->dump());
/*==================BaseRequest===========================*/


/*==================GetLoginQRCodeRequest===========================*/

$start = new GetLoginQRCodeRequest();
$start->setBaseRequest($baseRequest);
$start->setAes($aeskey);
$start->setOpcode(0);
$start->setExtDevLoginType(0);
//$packed = $start->getBaseRequest()->serializeToString();
$start->dump();
//print_r($packed);
/*

5、proto3和proto2区别



1）、proto文件中的第一行非空白非注释行syntax = “proto3"表示使用proto3的语法，否则默认使用proto2的语法

2）、字段移除required，将optional改名为singular。如果不加repeated，默认就是singular的。



3）、语言增加了Go,Ruby,JavaNano等的支持未来还计划支持PHP等

4）、移除了default选项在proto2中，可使用default为field指定默认值。在proto3中，field的默认值只依赖于field的类型，不再能够被指定。当field的value为默认值时，该field不会被序列化，可节省空间。不要依赖于字段的默认值的行为，因为无法区分是指定为默认值，还是未定义值。

5）、枚举类型的第一个枚举值必须是0，proto3中必须提供一个枚举值为0作为枚举的默认值。为了和proto2兼容（proto2使用第一个枚举值作为默认值），因此规定一个枚举值为0。

6）、不再支持group，proto2中已经不推荐使用group。proto3中不再支持group。group可以用embedded message来实现。

7）、不再支持Extension，新增Any关键字proto3中不再支持Extension, 除了用在custom option。


baseRequest {
  sessionKey: "wLOGu8nIb0TD6Zaj"
  uin: 0
  devicelId: "@4xaE-\013(\321\340<\211t\016p\033"
  clientVersion: 369558056
  osType: "iPad iPhone OS9.3.3"
  scene: 0
}
aes {
  len: 16
  key: "wLOGu8nIb0TD6Zaj"
}
opcode: 0
extDevLoginType: 0
 */

print_r(($start->serializeToString()));
//可能是思路错了,上面的代码End!