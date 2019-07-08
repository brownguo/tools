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
            'loginName'          =>'18513558982',
            'password'           =>'aaaaadddddd.',
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

    public static function goods_detail()
    {
        $detail_conf = array(
            'url'   =>  'https://www.adidas.com.cn/item/FV5304?locale=zh_CN'
        );
        return $detail_conf;
    }

    public static function productGetItemIvts($iid,$timestamp)
    {
        $ivts_conf = array(
            'url' => sprintf('https://www.adidas.com.cn/productGetItemIvts/%s.json?_=%s',$iid,$timestamp)
        );
        return $ivts_conf;
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

    public static function login_conf($x_csrf_token,$send_data,$recommend_tool_cookie_id,$JSessionId,$recommenede_key)
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
                'Cookie'            =>'locale=zh_CN; '.$JSessionId.'; XSRF-TOKEN='.$x_csrf_token.'; firsttime=first; adidas_recommend_cookie_keyzh_CN='.urlencode($recommenede_key).'; '.$recommend_tool_cookie_id.'; pt_ref_7f28852c=https://www.adidas.com.cn/; _9755xjdesxxd_=32; loginTypes=account',
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