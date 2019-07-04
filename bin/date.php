<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2018/12/5
 * Time: 4:24 PM
 */

class date
{

    public static function _init(){}

    public static function getLocalTime()
    {
        return date('Y-m-d H:i:s',time());
    }

    public static function getTime()
    {
        list($t1, $t2) = explode(' ', microtime());
        return (float)sprintf('%.0f', (floatval($t1) + floatval($t2)) * 1000);
    }
}