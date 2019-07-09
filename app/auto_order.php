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
    protected static $display_lenght = 25;

    protected static $loginInfo = array();


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
        #获取详细信息
        static::getGoodsDetail();
        exit();
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
            'headers'=> rush_conf::makeCommonHeader(),
        ));

        if($response->getStatusCode() == 200)
        {
            if($response->hasHeader('Set-Cookie'))
            {
                static::$csrf_token = requests::parseCSRFToken($response->getHeader('Set-Cookie'));
                logger::notice(sprintf("Token:%s",static::$csrf_token));
            }
        }
        else
        {
            logger::notice('Token获取失败','error');
            exit();
        }
    }

    public static function getRecommendedSearchKey()
    {
        logger::notice('开始获取 Recommended Key');

        $configs = rush_conf::recommended_search_conf(static::$c_time);

        $response = static::$client->request('GET',$configs['url'],array(
                'headers' => rush_conf::makeCommonHeader(),
            )
        );
        if($response->getStatusCode() == 200)
        {
            static::$recommenede_key = json_decode($response->getBody(),true);
            logger::notice(sprintf('Recommend Key:%s',static::$recommenede_key));
        }
        else
        {
            logger::notice("Recommended Key获取失败",'error');
            exit();
        }
    }

    public static function getCookieId()
    {
        logger::notice('开始获取 CookiesId');

        $configs = rush_conf::cookies_conf(static::$c_time);

        $response = static::$client->request('GET',$configs['url'],array(
            'headers' => rush_conf::makeCommonHeader(),
        ));

        if($response->getStatusCode() == 200)
        {
            $head_arr  = $response->getHeader('Set-Cookie');

            foreach ($head_arr as $key => $val)
            {
                 $head_temp[] = explode(";",$val);
            }

            static::$JSessionId               = $head_temp[0][0];
            static::$recommend_tool_cookie_id = $head_temp[1][0];

            logger::notice(sprintf('Cookie获取成功, JSessionId:%s, Recommend_c_id%s',static::$JSessionId,static::$recommend_tool_cookie_id));
        }
        else
        {
            logger::notice('Cookie获取失败','error');
            exit();
        }
    }

    public static function doLogin()
    {
        logger::notice(sprintf("开始登陆，当前账号：%s 密码：%s",static::$userinfo['loginName'],static::$userinfo['password']));
        $configs    = rush_conf::login_conf(static::$csrf_token,static::$userinfo,static::$recommend_tool_cookie_id,static::$JSessionId,static::$recommenede_key);
        $url        = $configs['url'];
        $headers    = $configs['headers'];

        $response   = static::$client->request('POST',$url,array(
            'headers'     => $headers,
            'form_params' => static::$userinfo,
            #'debug'       => true,
        ));

        $body       = json_decode($response->getBody(),true);

        #print_r($body);
        if(($body['result'] == true) && ($body['statusCode'] == '2398585'))
        {
            $temp_head = $response->getHeader('Set-Cookie');
            foreach ($temp_head as $key=>$val)
            {
                $temp = explode(';',$val);
                $login_head = explode("=",$temp[0]);
                static::$loginInfo[$login_head[0]] = $login_head[1];
            }
            logger::notice(sprintf('登录成功,Nickname:%s, JSESSIONID:%s, L_B_S:%s',
                urldecode(static::$loginInfo['nickName']),
                static::$loginInfo['JSESSIONID'],
                static::$loginInfo['l_b_s']),
                'tips');
        }
        else
        {
            logger::notice('登录失败','error');
            exit();
        }
    }

    public static function getGoodsDetail()
    {
        logger::notice('开始获取库存商品详情');

        $url = rush_conf::goods_detail()['url'];
        $response = static::$client->request('GET',$url,array(
            'headers' => rush_conf::makeCommonHeader(),
        ));

        $body = (string) $response->getBody();

        #product_name
        preg_match_all('/<title>(.*)<\/title>/i',$body,$product_name);
        #iid
        preg_match_all('/<li code="(.*)" itemstyle="(.*)" ipi="(.*)" iid="(.*)" class="(.*)">/i',$body,$iid);

        logger::notice(sprintf('当前商品名称:[%s] SkuId:[%s],Iid:[%s]',$product_name[1][0],$iid[3][0],$iid[4][0]),'tips');

        preg_match_all('/<li ipi="(.*)" size="(.*)" dispalySize=\'(.*)\'>/i',$body,$outSizeInfo);

        #获取库存
        $IvtsUrl = rush_conf::productGetItemIvts($iid[4][0],date::getTime());

        $IvtsResponse = static::$client->request('GET',$IvtsUrl['url'],array(
            'headers' => rush_conf::makeCommonHeader(),
        ));

        $IvtsResponseBody = (string) $IvtsResponse->getBody();

        $IvtsResponseBody = json_decode($IvtsResponseBody,true);

        $availableQty = json_decode($IvtsResponseBody['skuStr'],true);

        #合并数组。尺码,SkuID,库存

        if(count($outSizeInfo[1]) == count($outSizeInfo[3]))
        {
            foreach ($outSizeInfo[1] as $key=>$val)
            {
                $sizeInfo[$val] = $outSizeInfo[3][$key];
            }
        }

        foreach ($availableQty as $key=>$availabe)
        {
            $temp_ipi[] = preg_replace('/\[||\]/i','',$availabe['properties']);
            $availableQty[$key]['ipi']  = explode(',',$temp_ipi[$key])[1];
            $availableQty[$key]['size'] = $sizeInfo[$availableQty[$key]['ipi']];
        }

        logger::safeEcho(
            "SkuId". str_pad('',static::$display_lenght + 2 - strlen('SkuId')).
            "IPI". str_pad('',static::$display_lenght + 2 - strlen('IPI')).
            "尺码". str_pad('',static::$display_lenght + 2 - strlen('尺码')).
            "库存". str_pad('',static::$display_lenght + 2 - strlen('库存'))."\n");

        foreach ($availableQty as $key => $ivs)
        {
            echo $ivs['skuId'].logger::str_pad_fill(25,$ivs['skuId']).
                $ivs['ipi'].logger::str_pad_fill(25,$ivs['ipi']).
                $ivs['size'].logger::str_pad_fill(25,$ivs['size']).
                $ivs['availableQty'].logger::str_pad_fill(25,$ivs['availableQty']).PHP_EOL;
        }


        #TODO,下单,获取订单信息,支付。
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