<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/1/11
 * Time: 10:32 PM
 */
class format_cookies
{
    protected static $cookies = 'anonymousId=xxxx;';
    public static function printr()
    {
        $ret = static::format();

        print_r($ret);
    }

    public static function format()
    {
        static $ret = array();
        foreach (explode(';',static::$cookies) as $field => $val)
        {
            $res = (explode('=',$val));
            $ret[trim($res[0])] = $res[1];

        }
        return $ret;
    }
}
format_cookies::printr();