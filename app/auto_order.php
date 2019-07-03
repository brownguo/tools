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
    protected static $csrf_token;
    protected static $recommended_conf;
    protected static $recommenede_key;
    protected static $cookies_conf;
    protected static $cookies_id;


    public static function _init()
    {
        logger::notice("程序启动");
        #加载配置文件
        static::loadConfigs();
        #获取XSRTToken
        static::getXSRFToken();
        #获取推荐搜索key
        static::getRecommendedSearchKey();
        #获取请求Cookies
        static::getCookieId();
        #登陆
        static::doLogin();
    }

    public static function _initHttpClient()
    {
        static::$client = new GuzzleHttp\Client();
        logger::notice("初始化[HTTPClient]成功");
    }

    public static function loadConfigs()
    {
        static::$userinfo         = rush_conf::userinfo();
        static::$recommended_conf = rush_conf::recommended_search_conf();
        static::$cookies_conf     = rush_conf::get_cookies_conf();

        logger::notice("配置文件加载成功");
    }

    public static function getXSRFToken()
    {
        logger::notice("开始获取CSRF Token");

        $conf   = rush_conf::xsrf_token_conf();
        $url    = sprintf($conf['url'],date::getMicroTimestamp());
        $res    = requests::post($url,null,$conf['headers'],true,false,null);

        if($res['http_code'] == 200)
        {
            $tmp_token          = $res['response_headers']['Set-Cookie'];
            static::$csrf_token = requests::parseCSRFToken($tmp_token);

            logger::notice("CSRF Token获取成功");
        }
    }

    public static function getRecommendedSearchKey()
    {
        logger::notice('开始获取Recommended Key');

        static::$recommended_conf['headers']['X-CSRF-TOKEN'] = static::$csrf_token;

        $url = sprintf(static::$recommended_conf['url'],date::getMicroTimestamp());
        $res = requests::get($url,null,static::$recommended_conf['headers'],true,false,null);

        if($res['http_code'] == 200)
        {
            static::$recommenede_key = json_decode($res['body'],true);
            logger::notice('获取Recommended Key 成功');
        }
    }

    public static function getCookieId()
    {
        $url = sprintf(static::$cookies_conf['url'],date::getMicroTimestamp());
        $res = requests::get($url,null,static::$cookies_conf['headers'],true,false,null);

        if($res['http_code'] == 200)
        {
            $tmp_cookie_id      = $res['response_headers']['Set-Cookie'];
            static::$cookies_id = requests::parseCSRFToken($tmp_cookie_id);

            logger::notice('Cookies获取成功');
        }
    }

    public static function doLogin()
    {
        $configs = rush_conf::login_conf(static::$csrf_token,static::$userinfo,static::$cookies_id);
        $url     = $configs['url'];
        $headers = $configs['headers'];

        print_r($headers);
        $res = requests::post($url,static::$userinfo,$headers,true,false,null);
        print_r($res);
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