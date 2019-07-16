<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/7/16
 * Time: 下午3:30
 */

class draw
{
    protected static $configs_path = 'config/draw.ini';
    protected static $configs;

    public static function _init()
    {
        #加载配置文件
        static::loadConfigs();
        #登陆
        static::dologin();
    }

    protected static function loadConfigs()
    {
        static::$configs = parse_ini_file(static::$configs_path,true);
    }


    protected static function dologin()
    {
        print_r(static::$configs);
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