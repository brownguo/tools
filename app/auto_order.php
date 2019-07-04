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
    protected static $c_time;
    protected static $JSessionId;
    protected static $recommend_tool_cookie_id;

    public static function _init()
    {
        logger::notice("程序启动");
        #初始化HTTPClient
        static::_initHttpClient();
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
        static::$c_time           = date::getTime();
        static::$userinfo         = rush_conf::userinfo();
        logger::notice("配置文件加载成功");
    }

    public static function getXSRFToken()
    {
        logger::notice("开始获取CSRF Token");

        $configs     = rush_conf::xsrf_token_conf(static::$c_time);

        $response    = static::$client->request('POST',$configs['url'],array(
            'headers'=> $configs['headers'],
        ));

        if($response->getStatusCode() == 200)
        {
            if($response->hasHeader('Set-Cookie'))
            {
                static::$csrf_token = requests::parseCSRFToken($response->getHeader('Set-Cookie'));
                logger::notice('Token获取成功');
            }
        }
        else
        {
            logger::error('Token获取失败');
            exit();
        }
    }

    public static function getRecommendedSearchKey()
    {
        logger::notice('开始获取Recommended Key');

        $configs = rush_conf::recommended_search_conf(static::$c_time);

        $response = static::$client->request('GET',$configs['url'],array(
                'headers' => $configs['headers'],
            )
        );
        if($response->getStatusCode() == 200)
        {
            static::$recommenede_key = json_decode($response->getBody(),true);
            logger::notice('Recommend Key 获取成功');
        }
    }

    public static function getCookieId()
    {
        logger::notice('开始获取CookiesID');

        $configs = rush_conf::cookies_conf(static::$c_time);

        $response = static::$client->request('GET',$configs['url'],array(
            'headers'=>$configs['headers'],
        ));

        if($response->getStatusCode() == 200)
        {
            $temp_head          = $response->getHeader('Set-Cookie');
            static::$JSessionId = $temp_head[0];
            static::$recommend_tool_cookie_id = $temp_head[1];
            logger::notice('Cookie获取成功');
        }
        else
        {
            logger::error('Cookie获取失败');
        }
    }

    public static function doLogin()
    {
        $configs = rush_conf::login_conf(static::$csrf_token,static::$userinfo,static::$cookies_id);
        $url     = $configs['url'];
        $headers = $configs['headers'];

        $res = requests::post($url,static::$userinfo,$headers,true,false,null);
        print_r($res);
    }
}


$LoadableModules = array('app/config','bin','vendor');

spl_autoload_register(function($name)
{
    global $LoadableModules;

    foreach ($LoadableModules as $module)
    {
        if($module == 'vendor')
        {
            $filename =  SERVER_BASE.$module.'/autoload.php';
        }
        else
        {
            $filename =  SERVER_BASE.$module.'/'.$name . '.php';
        }
        if (file_exists($filename))
            require_once $filename;
    }
});auto_order::_init();