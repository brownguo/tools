<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/7/1
 * Time: 下午3:04
 */

class rush_conf
{

    #Common Configs.
    protected static $Host              = 'www.adidas.com.cn';
    protected static $UA                = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:67.0) Gecko/20100101 Firefox/67.0';
    protected static $Accept            = '*/*';
    protected static $AcceptLanguage    = 'zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2';
    protected static $AcceptEncoding    = 'gzip, deflate, br';
    protected static $XRequestedWith    = 'XMLHttpRequest';
    protected static $Connection        = 'keep-alive';
    protected static $Referer           = 'https://www.adidas.com.cn/';
    protected static $Cookies           = null;
    protected static $CacheControl      = 'max-age=0';

    public static function userinfo()
    {
        return array(
            'loginName'          =>'18513555214',
            'password'           =>'ddddddddddd',
            'isRemberMeLoginName'=>'false',
            'NECaptchaValidate'  =>'',
        );
    }

    public static function makeCommonHeader()
    {
        $head = array(
            'Host'              =>  static::$Host,
            'User-Agent'        =>  static::$UA,
            'Accept'            =>  static::$Accept,
            'Accept-Language'   =>  static::$AcceptLanguage,
            'Accept-Encoding'   =>  static::$AcceptEncoding,
            'X-Requested-With'  =>  static::$XRequestedWith,
            'Connection'        =>  static::$Connection,
            'Referer'           =>  static::$Referer,
            'Cache-Control'     =>  static::$CacheControl,
        );
        return $head;
    }

    public static function xsrf_token_conf($timestamp)
    {
        $xsrf_conf = array(
            'headers'   => array(),
            'url'   =>  sprintf('https://www.adidas.com.cn/ping.json?%s',$timestamp),
        );
        return $xsrf_conf;
    }

    public static function recommended_search_conf($timestamp)
    {
        $config = array(
            'headers'   =>  array(),
            'url' =>  sprintf('https://www.adidas.com.cn/index/recommendedSearchKey.json?_=%s',$timestamp),

        );
        return $config;
    }

    public static function cookies_conf($timestamp)
    {
        $config = array(
            'headers'   =>  array(),
            'url' =>  sprintf('https://www.adidas.com.cn/cookie/getCookieId?_=%s',$timestamp),

        );
        return $config;
    }

    public static function login_conf($x_csrf_token,$send_data,$recommend_tool_cookie_id,$JSessionId)
    {
        $config = array(
            'headers'   =>  array(
                'Accept'            => '*/*',
                'Accept-Encoding'   =>'gzip, deflate, br',
                'Accept-Language'   =>'zh-CN,zh;q=0.9,en;q=0.8',
                'Cache-Control'     =>'no-cache',
                'Connection'        =>'keep-alive',
                'Content-Length'    => strlen(http_build_query($send_data)),
                'Content-type'      =>'application/x-www-form-urlencoded; charset=UTF-8',
                'Cookie'            =>'_ga=GA1.3.1905815612.1562227768; _gid=GA1.3.1562976595.1562227768; locale=zh_CN; '.$JSessionId.'; eyeofcloudEndUserId=oeu1562227769684r0.26864912703466404; eyeofcloudSegments=%7B%221%22%3A%22ff%22%2C%222%22%3A%22false%22%2C%223%22%3A%22direct%22%7D; eyeofcloudBuckets=%7B%7D; XSRF-TOKEN='.$x_csrf_token.'; firsttime=first; adidas_recommend_cookie_keyzh_CN=%u62A2YEEZY%2CUB19%2CClima%2CONTHEMOVE%2Cadicolor%2CEQT%2Crugby%2Ctoystory%2C%u4E09%u53F6%u8349; Hm_lvt_80c6e16552c255ce9d85ca7568a03495=1562227771; Hm_lpvt_80c6e16552c255ce9d85ca7568a03495=1562227771; _pk_id.2_3029faa541cd34f0c6dc7f8b9d17411a.9929=510a6fc218e8f4c6.1562227771.0.1562227771..; '.$recommend_tool_cookie_id.'; pt_ref_7f28852c=https://www.adidas.com.cn/; pt_s_7f28852c=vt=1562227770860&cad=; pt_7f28852c=uid=cl4bCKyNk2UkP9xmWg7x2w&nid=1&vid=uq9KHAPHqUgm0D4s2tD-uw&vn=1&pvn=1&sact=1562227854593&to_flag=0&pl=YAAcM4v7qXoIz4dkufZevw*pt*1562227770860; gdxidpyhxdE=nawsm8Mo6WTkcAHM%2F6WyBCNqK%2Fjxa8U6UIm0ikLW9UaoJk2m8fRl9X1oneimXYCAYHNEZVw7%5CBYqtLbqXKz6jpd4qxxCOWm0%5CqgT7qdVB%2Fuhg8O%5Cyk3S%2BSnWO496du3P2G70ojb2SIPDyZhVGNq%2FP2g6%2FPc5y2yJM22n6WAHz6fKUoIM%3A1562228671337; _9755xjdesxxd_=32; loginTypes=account',
                'Host'              =>'www.adidas.com.cn',
                'Origin'            =>'https://www.adidas.com.cn',
                'Pragma'            =>'no-cache',
                'Referer'           =>'https://www.adidas.com.cn/member/login',
                'User-Agent'        =>'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
                'X-CSRF-TOKEN'      =>$x_csrf_token,
                'X-Requested-With'  =>'XMLHttpRequest'
            ),
            'url' =>  'https://www.adidas.com.cn/member/login.json',
        );
        return $config;
    }
}