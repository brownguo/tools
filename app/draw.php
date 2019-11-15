<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/7/16
 * Time: 下午3:30
 */

date_default_timezone_set('PRC');
define('SERVER_BASE', realpath(__dir__ . '/..') . '/');

class draw
{
    /**
     * @var string
     * 配置文件路径
     */
    protected static $configs_path = 'config/draw.ini';

    /**
     * @var
     * 配置
     */
    protected static $configs;

    /**
     * @var
     * HttpClient
     */
    protected static $_client;

    /**
     * @var array
     * header of array
     */
    protected static $rawheaders = array();

    /**
     * @var array
     * cookies of array
     */
    protected static $rawcookies = array();

    /**
     * static construct.
     */
    public static function _init()
    {
        #欢迎语
        logger::notice('Rush !!!');
        self::$configs = parse_ini_file(static::$configs_path,true);

        self::$_client = new GuzzleHttp\Client();

        self::get_req_cookies();
    }

    protected static function set_header($key,$data)
    {
        self::$rawheaders[$key] = $data;
    }

    protected static function get_header()
    {
        return self::$rawheaders;
    }

    protected static function set_cookies()
    {

    }

    protected static function get_req_cookies()
    {
        $config = self::$configs['init'];
        $url    = $config['url'];

        foreach ($config as $field => $val)
        {
            self::set_header($field,$val);
        }

        $response = static::$_client->request('GET',$url,
            ['headers'=>self::$rawheaders]);

        if($response->getStatusCode() == 200)
        {
            print_r($response->getHeader('Set-Cookie'));
        }
        $body = (string) $response->getBody();
        print_r($body);
        echo $url.PHP_EOL;
    }


    protected static function dologin()
    {
        $configs = static::$configs['login'];
        $url     = $configs['url'];

        #拼接登陆URL
        foreach ($configs as $field => $val)
        {
            if($field !== 'url')
            {
                $url .= $field.'='.$configs[$field].'&';
            }
        }

        $url = trim($url,'&');


        $response = static::$_client->request('POST',$url,array(
        ));
        echo $response->getStatusCode();
        #print_r($response);
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
});draw::_init();