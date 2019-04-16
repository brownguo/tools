<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/4/15
 * Time: 3:35 PM
 */

class random_string
{
    public static function getRandomString($len)
    {
        $lower    = range('a','z');
        $upper    = range('A','Z');
        $digits   = range(0,9);

        $chars = array_merge($lower,$upper,$digits);

        shuffle($chars);

        $randstring = '';

        for($i = 0; $i < $len; $i++)
        {
            $randstring .= $chars[mt_rand(0,count($chars)-1)];
        }

        return $randstring;
    }
}