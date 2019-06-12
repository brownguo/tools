<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/1/11
 * Time: 9:12 PM
 */

class requests
{

    const VERSION = '1.0.0';

    protected static $ch = null;

    protected static $timeout = 30;
    protected static $headers = array();
    protected static $http_info;
    protected static $result;
    protected static $out_header;

    protected static $proxys;

    public static function _init()
    {
        if(!is_resource(static::$ch))
        {
            static::$ch = curl_init();

            curl_setopt(static::$ch, CURLOPT_RETURNTRANSFER,true);
            curl_setopt(static::$ch, CURLOPT_HEADER, false);
            curl_setopt(static::$ch, CURLOPT_USERAGENT, false);
            curl_setopt(static::$ch, CURLOPT_TIMEOUT, static::$timeout);
            curl_setopt(static::$ch, CURLOPT_NOSIGNAL,true);
        }

        return static::$ch;
    }

    public static function set_proxy($proxy)
    {
        static::$proxys = is_array($proxy) ? $proxy : array($proxy);
    }

    //格式化URL参数
    public static function format_url_args($args)
    {
        if(!empty($args))
        {
            return http_build_query($args);
        }
    }

    public static function request($url,$method,$args,$header = null,$is_save_cookies,$is_carry_cookies,$cookies_name=null)
    {
        $method = strtoupper($method);

        if($method == 'GET' && !empty($args))
        {
            $url = $url.(strpos($url, '?') === false ? '?' : '&').http_build_query($args);
        }


        curl_setopt(static::$ch, CURLOPT_HTTPHEADER, array(
            'Accept : */*',
            'Content-type : application/octet-stream',
            'User-Agent : MicroMessenger Client',
        ));

        if(!empty($header))
        {
            curl_setopt(static::$ch, CURLOPT_HTTPHEADER, $header);
        }

        if($method == 'POST')
        {
            if(is_array($args))
           # {
           #     $args = http_build_query($args);
           # }

            print_r($args);

            # Content-Type: application/x-www-form-urlencoded
            curl_setopt(static::$ch, CURLOPT_POST, true);
            curl_setopt(static::$ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt(static::$ch, CURLOPT_POSTFIELDS,$args);
        }

        if($is_save_cookies)
        {
            if($cookies_name !== null)
            {
                curl_setopt(static::$ch, CURLOPT_COOKIEJAR, '../logs/'.$cookies_name.'.tmp');
            }
            else
            {
                curl_setopt(static::$ch, CURLOPT_COOKIEJAR, '../logs/cookies.tmp');
            }
        }
        if($is_carry_cookies)
        {
            if($cookies_name !== null)
            {
                curl_setopt(static::$ch, CURLOPT_COOKIEFILE, '../logs/'.$cookies_name.'.tmp');
            }
            else
            {
                curl_setopt(static::$ch, CURLOPT_COOKIEFILE, '../logs/cookies.tmp');
            }
        }
        if(strpos($url, 'https') !== false)
        {
            curl_setopt(static::$ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt(static::$ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        if(!empty(static::$proxys))
        {
            $key = rand(0,count(static::$proxys) - 1);
            $proxy = static::$proxys[$key];
            curl_setopt(static::$ch, CURLOPT_PROXY, $proxy);
        }

        
        #curl_setopt(static::$ch, CURLOPT_REFERER, "https://www.nike.com/");
        #curl_setopt(static::$ch, CURLOPT_ENCODING,'gzip');
        curl_setopt(static::$ch, CURLOPT_URL, $url);
        curl_setopt(static::$ch, CURLINFO_HEADER_OUT, true);

        static::$result     = curl_exec (static::$ch);

        if(static::$result === false)
        {
            echo 'Curl error: ' . curl_error(static::$ch);
        }

        static::$http_info = curl_getinfo(static::$ch);

        print_r(static::$http_info);

        curl_close(static::$ch);
    }

    public static function get($url,$args=null,$header=null,$is_save_cookies = false,$is_carry_cookies = false,$cookie_name = null)
    {
        static::_init();
        static::request($url,'get',$args,$header,$is_save_cookies,$is_carry_cookies,$cookie_name);
        return static::$result;
    }

    public static function post($url,$args,$header,$is_save_cookies = false,$is_carry_cookies = false,$cookie_name = null)
    {
        static::_init();
        static::request($url,'post',$args,$header,$is_save_cookies,$is_carry_cookies,$cookie_name);
        return static::$result;
    }

    public static function get_http_info()
    {
        return static::$http_info;
    }

    public static function curl_download($url,$dir)
    {
        $ch = curl_init($url);

        $fp = fopen($dir, "wb");
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        $curl_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if($curl_code == 200)
        {
            curl_close($ch);
            fclose($fp);
            return true;
        }
        else
        {
            return false;
        }
    }
}