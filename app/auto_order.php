<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/7/1
 * Time: 下午2:36
 */

date_default_timezone_set('PRC');
define('SERVER_BASE', realpath(__dir__ . '/..') . '/');

class auto_order
{

    protected static $client;
    protected static $userinfo;
    protected static $xsrf_token_conf;

    public static function _init()
    {
        logger::notice("程序启动");

        #加载配置文件
        static::loadConfigs();
        #获取XSRTToken
        static::getXSRFToken();
    }

    public static function _initHttpClient()
    {
        static::$client = new GuzzleHttp\Client();
        logger::notice("初始化[HTTPClient]成功");
    }

    public static function loadConfigs()
    {
        static::$userinfo = rush_conf::userinfo();
        logger::notice("配置文件加载成功");
    }

    public static function getXSRFToken()
    {
        logger::notice("开始获取XSRFToken");

        $conf   = rush_conf::xsrf_token_conf();
        $url    = sprintf($conf['url'],date::getMicroTimestamp());
        $res    = requests::post($url,null,$conf['headers'],true,false,null);

        print_r($res);
        if($res['http_code'] == 200)
        {
            logger::notice("XSRF Token获取成功");
        }
    }
}


$LoadableModules = array('app/config','bin');

spl_autoload_register(function($name)
{
    global $LoadableModules;

    foreach ($LoadableModules as $module)
    {
        $filename =  SERVER_BASE.$module.'/'.$name . '.php';
        if (file_exists($filename))
            require_once $filename;
    }
});auto_order::_init();