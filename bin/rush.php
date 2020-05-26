<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2020/5/26
 * Time: 下午1:02
 */

include_once './requests.php';

class rush
{
    protected static $getCookieUrl = 'https://api.nike.com/measure/uxevents/v1';

    public static function _init()
    {
        static::getCookies();
    }

    protected static function getCookies()
    {
        $response = requests::post(static::$getCookieUrl,array());
        print_r($response);
    }
}

rush::_init();