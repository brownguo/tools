<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/7/1
 * Time: 下午3:04
 */

class rush_conf
{
    public static function xsrf_token_conf()
    {
        $xsrf_conf = array(
            'headers'   => array(
                'Host'              =>  'www.adidas.com.cn',
                'User-Agent'        =>  'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:67.0) Gecko/20100101 Firefox/67.0',
                'Accept'            =>  '*/*',
                'Accept-Language'   =>  'zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
                'Accept-Encoding'   =>  'gzip, deflate, br',
                'X-Requested-With:' =>  'XMLHttpRequest',
                'Connection'        =>  'keep-alive',
                'Referer:'          =>  'https://www.adidas.com.cn/',
                'Cookie:'           =>  'eyeofcloudEndUserId=oeu1561964452214r0.9202991631206027; eyeofcloudSegments=%7B%221%22%3A%22ff%22%2C%222%22%3A%22false%22%2C%223%22%3A%22direct%22%7D; eyeofcloudBuckets=%7B%2223%22%3A%221000000045%22%7D; _ga=GA1.3.1275043293.1561964452; _gid=GA1.3.1756069591.1561964452; _gat=1; Hm_lvt_80c6e16552c255ce9d85ca7568a03495=1561964452; Hm_lpvt_80c6e16552c255ce9d85ca7568a03495=1561964452',
                'Cache-Control'     =>  'max-age=0',
                'Content-Length: 0'
            ),
            'url'   =>  'https://www.adidas.com.cn/ping.json?%s',
        );

        return $xsrf_conf;
    }

    public static function userinfo()
    {
        return array(
            'username'=>'18513558982',
            'passport'=>'admin123.'
        );
    }
}