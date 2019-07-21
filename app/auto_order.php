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
    protected static $transactionKey;

    public static function _init()
    {
        logger::notice("程序启动");
        #static::CreateTransaction();exit();
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
        #获取详情
        static::getGoodsDetail();
        #结算
        static::checkout();
        #CreateTransaction
        static::CreateTransaction();
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
        #($body['statusCode'] == '2398585')
        if(($body['result'] == true))
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

        $configs = rush_conf::goods_detail(static::$loginInfo['nickName'],
            static::$loginInfo['l_b_s'],
            static::$loginInfo['JSESSIONID'],
            urlencode(static::$recommenede_key),
            static::$csrf_token,
            static::$loginInfo['recommend_tool_cookie_id_v1']
        );

        $headers = array_merge(rush_conf::makeCommonHeader(),$configs['headers']);

        $url = $configs['url'];
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
            'headers' => $headers,
        ));

        $IvtsResponseBody = (string) $IvtsResponse->getBody();

        $IvtsResponseBody = json_decode($IvtsResponseBody,true);

        $availableQty = json_decode($IvtsResponseBody['skuStr'],true);

        logger::notice(sprintf('检查登陆状态:%s',$IvtsResponseBody['memberLogin']),'tips');

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
    }

    public static function checkout()
    {
        logger::notice('正在获取订单结算Key');

        $send_data = array(
            'skuId' => 108524,
            'count' => 1,
        );
        $configs = rush_conf::checkout_conf(
            static::$loginInfo['nickName'],
            static::$loginInfo['l_b_s'],
            static::$loginInfo['JSESSIONID'],
            urlencode(static::$recommenede_key),
            static::$csrf_token,
            static::$loginInfo['recommend_tool_cookie_id_v1'],
            $send_data
        );

        $headers = array_merge($configs['headers'],rush_conf::makeCommonHeader());

        $response = static::$client->request('POST',$configs['url'],array(
                'headers'       =>  $headers,
                'form_params'   =>  $send_data,
                #'debug' =>true,
        ));

        $response = json_decode($response->getBody(),true);

        #保存订单结算Key
        static::$transactionKey = explode('=',$response['resultMessage']['message']);

        if($response['result'] == true && !empty($response['resultMessage']['message']))
        {
            logger::notice(sprintf('结算Key获取成功,Key:%s',static::$transactionKey[1]),'tips');
        }
        else
        {
            logger::notice(sprintf('获取订单结算Key失败,原因:%s',$response['resultMessage']['message']),'error');
            exit();
        }
    }

    public static function CreateTransaction()
    {

        #创建订单
        $CreateTransactionParams = array(
            'shippingInfoSubForm.name'              =>  'xxx',
            'shippingInfoSubForm.mobile'            =>	'xxx',
            'shippingInfoSubForm.countryId'         =>  1,
            'shippingInfoSubForm.provinceId'        =>  110000,
            'shippingInfoSubForm.cityId'            =>  110100,
            'shippingInfoSubForm.areaId'            =>  110108,
            'shippingInfoSubForm.townId'            =>  0,
            'shippingInfoSubForm.address'   	    =>  'xxx',
            'shippingInfoSubForm.postcode'	        =>  100000,
            'shippingInfoSubForm.email'             =>  '',
            'shippingInfoSubForm.appointType'       =>  1,
            'appointType'                           =>  1,
            'isDefault'	                            =>  'false',
            'paymentInfoSubForm.paymentType'        =>	6,      #支付宝
            'invoiceInfoSubForm.isNeedInvoice'	    =>  'false',
            'invoiceInfoSubForm.invoiceType'        =>  '',
            'invoiceInfoSubForm.invoiceTitle'       =>  '',
            'invoiceInfoSubForm.companyAddress'     =>  '',
            'invoiceInfoSubForm.companyPhone'       =>  '',
            'invoiceInfoSubForm.accountBankName'    =>  '',
            'invoiceInfoSubForm.accountBankNumber'  =>  '',
            'invoiceInfoSubForm.taxPayerId'         =>  '',
            'couponInfoSubForm.couponCode'          =>  '',
            'crmCouponStr'                          =>  '',
            'crmCouponIdStr'                        =>  '',
            'key'	                                =>  static::$transactionKey[1],#交易Key
            'staffId'                               =>  '',
            'storeId'                               =>  '',
            'clientIdentification'	                =>  240169790,
        );

        print_r($CreateTransactionParams);
        $configs = rush_conf::transaction(static::$csrf_token,
            static::$loginInfo['JSESSIONID'],
            static::$loginInfo['l_b_s'],
            static::$loginInfo['nickName'],
            static::$loginInfo['recommend_tool_cookie_id_v1'],
            static::$recommenede_key,
            $CreateTransactionParams,
            static::$transactionKey[1]
        );

        $headers = array_merge(rush_conf::makeCommonHeader(),$configs['headers']);

        #print_r($headers);
        $transactionResponse = static::$client->request('POST',$configs['url'],array(
            'headers'       =>$headers,
            'form_params'   =>$CreateTransactionParams,
            'debug'         =>true,
        ));

        $response = $transactionResponse->getBody();
        $response = json_decode($response,true);

        print_r($response);
        if($response['result'] && !empty($response['returnObject']['code']))
        {
            $result = $response['returnObject'];
            logger::notice(sprintf('订单创建成功,订单ID:%s,订单总价:%s,收件人:%s,手机号:%s,收件地址:%s,配送方式:%s,支付方式:%s',$result['code'],$result['totalActual'],
                $result['name'],$result['mobile'],$result['address'],$result['mode'],$result['payType']));
        }
        else
        {
            logger::notice(sprintf('订单创建失败,原因:%s',$response['resultMessage']['message']),'error');
            exit();
        }
        #echo $transactionResponse->getBody();
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