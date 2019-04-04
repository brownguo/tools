<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/4/3
 * Time: 10:20 PM
 */
date_default_timezone_set('PRC');
include "../bin/medoo.php";

include "../bin/requests.php";

include "../bin/logger.php";
$database = new medoo([
    // 必须配置项
    'database_type' => 'mysql',
    'database_name' => 'House',
    'server' => '127.0.0.1',
    'username' => 'root',
    'password' => 'admin123',
    'charset' => 'utf8',

    // 可选参数
    'port' => 3306,

    // 可选，定义表的前缀
//    'prefix' => 'PREFIX_',

    // 连接参数扩展, 更多参考 http://www.php.net/manual/en/pdo.setattribute.php
    'option' => [
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);


$datas = $database->select("account", [
    "Name",
    "Mobile"
], [
    "LIMIT" => [0,50000]
]);

//print_r($datas);
//
//exit();

$url = 'http://mobsec-dianhua.baidu.com/dianhua_api/open/location?tel=%s';


//$url = 'https://www.baifubao.com/callback?cmd=1059&callback=phone&phone=';

//$url = "http://cnareainfo.online-service.vip/phone?number=%s";

//print_r($datas);
//exit();

foreach ($datas as $key=>$val)
{
    if(!empty($val['Mobile']) && !empty($val['Name']))
    {
//        print_r(more_array_unique($datas[$key]));
        if(strlen($val['Mobile']) == 11)
        {
            getPhoneLocal($url,$val['Mobile']);
        }
    }
}


function getPhoneLocal($url,$phone)
{
        $url = sprintf($url,$phone);
        $res = requests::get($url);
        $res = json_decode($res,true);
        //查询成功
        if(preg_match("/^1[34578]\d{9}$/", $phone))
        {
            if($res['responseHeader']['status'] == 200 && !empty($res['response'][$phone]))
            {
                if($res['response'][$phone]['detail']['province'] == '北京')
                {
                    logger::info(sprintf('号码:%s,归属地:%s,运营商:%s',$phone,$res['response'][$phone]['detail']['province'],$res['response'][$phone]['location']));
                }
            }
        }
}


function more_array_unique($arr=array()){
    foreach($arr[0] as $k => $v){
        $arr_inner_key[]= $k;   //先把二维数组中的内层数组的键值记录在在一维数组中
    }
    foreach ($arr as $k => $v){
        $v =join(",",$v);    //降维 用implode()也行
        $temp[$k] =$v;      //保留原来的键值 $temp[]即为不保留原来键值
    }
    $temp =array_unique($temp);    //去重：去掉重复的字符串
    foreach ($temp as $k => $v){
        $a = explode(",",$v);   //拆分后的重组 如：Array( [0] => james [1] => 30 )
        $arr_after[$k]= array_combine($arr_inner_key,$a);  //将原来的键与值重新合并
    }
    return $arr_after;
}



//print_r($datas);