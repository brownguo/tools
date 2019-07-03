<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2019/7/1
 * Time: 下午3:04
 */

class rush_conf
{
    public static function userinfo()
    {
        return array(
            'loginName'          =>'18513558982',
            'passport'           =>'1111.',
            'isRemberMeLoginName'=>'false',
            'NECaptchaValidate'  =>'',
        );
    }

    public static function xsrf_token_conf()
    {
        $xsrf_conf = array(
            'headers'   => array(
                'Host'              =>  'www.adidas.com.cn',
                'User-Agent'        =>  'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:67.0) Gecko/20100101 Firefox/67.0',
                'Accept'            =>  '*/*',
                'Accept-Language'   =>  'zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
                'Accept-Encoding'   =>  'gzip, deflate, br',
                'X-Requested-With'  =>  'XMLHttpRequest',
                'Connection'        =>  'keep-alive',
                'Referer'           =>  'https://www.adidas.com.cn/',
                'Cookie'            =>  'eyeofcloudEndUserId=oeu1562138142571r0.3308801597694577; eyeofcloudSegments=%7B%221%22%3A%22ff%22%2C%222%22%3A%22false%22%2C%223%22%3A%22direct%22%7D; eyeofcloudBuckets=%7B%2223%22%3A%221000000046%22%7D; _ga=GA1.3.1063962665.1562138143; _gid=GA1.3.454538129.1562138143; _gat=1; Hm_lvt_80c6e16552c255ce9d85ca7568a03495=1562138143; Hm_lpvt_80c6e16552c255ce9d85ca7568a03495=1562138143; _pk_id.2_3029faa541cd34f0c6dc7f8b9d17411a.9929=124c101fd1ebb133.1562138143.1.1562138143.1562138143.; _pk_ses.2_3029faa541cd34f0c6dc7f8b9d17411a.9929=*; pt_ref_7f28852c=; pt_s_7f28852c=vt=1562138142939&cad=; pt_7f28852c=uid=Uo0AlfIM5kL18z0UYlZedw&nid=1&vid=p0depi8RlIJ1QU/pXiRZcA&vn=1&pvn=1&sact=1562138142939&to_flag=0&pl=OLIHyM-0F5geqVKKsoIkEw*pt*1562138142939',
                'Cache-Control'     =>  'max-age=0',
                'Content-Length'    =>0,
            ),
            'url'   =>  'https://www.adidas.com.cn/ping.json?%s',
        );

        return $xsrf_conf;
    }

    public static function recommended_search_conf()
    {
        $config = array(
            'headers'   =>  array(
                'Accept'            =>  '*/*',
                'Accept-Encoding'   =>  'gzip, deflate, br',
                'Accept-Language'   =>  'zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
                'Connection'        =>  'keep-alive',
                'Cookie'            =>  'eyeofcloudEndUserId=oeu1562138142571r0.3308801597694577; eyeofcloudSegments=%7B%221%22%3A%22ff%22%2C%222%22%3A%22false%22%2C%223%22%3A%22direct%22%7D; eyeofcloudBuckets=%7B%2223%22%3A%221000000046%22%7D; _ga=GA1.3.1063962665.1562138143; _gid=GA1.3.454538129.1562138143; _gat=1; Hm_lvt_80c6e16552c255ce9d85ca7568a03495=1562138143; Hm_lpvt_80c6e16552c255ce9d85ca7568a03495=1562138143; _pk_id.2_3029faa541cd34f0c6dc7f8b9d17411a.9929=124c101fd1ebb133.1562138143.1.1562138143.1562138143.; _pk_ses.2_3029faa541cd34f0c6dc7f8b9d17411a.9929=*; pt_ref_7f28852c=; pt_s_7f28852c=vt=1562138142939&cad=; pt_7f28852c=uid=Uo0AlfIM5kL18z0UYlZedw&nid=1&vid=p0depi8RlIJ1QU/pXiRZcA&vn=1&pvn=1&sact=1562138142939&to_flag=0&pl=OLIHyM-0F5geqVKKsoIkEw*pt*1562138142939; XSRF-TOKEN=870f4f69-592d-4db4-abea-e0650ce5740f; firsttime=first',
                'Host'              =>  'www.adidas.com.cn',
                'Referer'           =>  'https://www.adidas.com.cn/',
                'User-Agent'        =>  'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:67.0) Gecko/20100101 Firefox/67.0',
                'X-Requested-With' =>  'XMLHttpRequest',
            ),
            'url' =>  'https://www.adidas.com.cn/index/recommendedSearchKey.json?_=%s',

        );

        return $config;
    }

    public static function get_cookies_conf()
    {
        $config = array(
            'headers'   =>  array(
                'Accept'            =>  '*/*',
                'Accept-Encoding'   =>  'gzip, deflate, br',
                'Accept-Language'   =>  'zh-CN,zh;q=0.8,zh-TW;q=0.7,zh-HK;q=0.5,en-US;q=0.3,en;q=0.2',
                'Connection'        =>  'keep-alive',
                'Cookie'            =>  'eyeofcloudEndUserId=oeu1562138142571r0.3308801597694577; eyeofcloudSegments=%7B%221%22%3A%22ff%22%2C%222%22%3A%22false%22%2C%223%22%3A%22direct%22%7D; eyeofcloudBuckets=%7B%2223%22%3A%221000000046%22%7D; _ga=GA1.3.1063962665.1562138143; _gid=GA1.3.454538129.1562138143; _gat=1; Hm_lvt_80c6e16552c255ce9d85ca7568a03495=1562138143; Hm_lpvt_80c6e16552c255ce9d85ca7568a03495=1562138143; _pk_id.2_3029faa541cd34f0c6dc7f8b9d17411a.9929=124c101fd1ebb133.1562138143.1.1562138143.1562138143.; _pk_ses.2_3029faa541cd34f0c6dc7f8b9d17411a.9929=*; pt_ref_7f28852c=; pt_s_7f28852c=vt=1562138142939&cad=; pt_7f28852c=uid=Uo0AlfIM5kL18z0UYlZedw&nid=1&vid=p0depi8RlIJ1QU/pXiRZcA&vn=1&pvn=1&sact=1562138142939&to_flag=0&pl=OLIHyM-0F5geqVKKsoIkEw*pt*1562138142939; XSRF-TOKEN=870f4f69-592d-4db4-abea-e0650ce5740f; firsttime=first',
                'Host'              =>  'www.adidas.com.cn',
                'Referer'           =>  'https://www.adidas.com.cn/',
                'User-Agent'        =>  'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.12; rv:67.0) Gecko/20100101 Firefox/67.0',
                'X-Requested-With'  =>  'XMLHttpRequest',
            ),
            'url' =>  'https://www.adidas.com.cn/cookie/getCookieId?_=%s',

        );
        return $config;
    }

    public static function login_conf($x_csrf_token,$send_data,$recommend_tool_cookie_id)
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
                'Cookie'           =>'eyeofcloudEndUserId=oeu1560847384550r0.741748269944329; eyeofcloudSegments=%7B%221%22%3A%22gc%22%2C%222%22%3A%22false%22%2C%223%22%3A%22direct%22%7D; XSRF-TOKEN=a794c873-d3e5-493e-bb7e-106ea171d91a; firsttime=first; adidas_recommend_cookie_keyzh_CN=%u4E24%u4EF6%u989D%u59169%u6298%2C%u62A2YEEZY%2CHOME%20OF%20CLASSICS%2C4D%2CClima%2CNite%20JOGGER%2CGame%20of%20Thrones%2Cultraboost%2Cyung%2096%2Csuperstar; _ga=GA1.3.940331066.1560847385; Hm_lvt_80c6e16552c255ce9d85ca7568a03495=1561098302; locale=zh_CN; _9755xjdesxxd_=32; l_b_s=c6e82b5c50908c29ae6bffa04205328ef138dfb5; eyeofcloudBuckets=%7B%226%22%3A%221000000012%22%7D; f_b_h="7hd65dsBDCXubNK1u9sG3w=="; _gid=GA1.3.399002083.1561702122; loginTypes=account; _gat_UA-27771328-2=1; _gat=1; gdxidpyhxdE=OyLDaLmsSS2qovDeXAkxpDo3c8Pysguj16aSUCv8quIpyUd9%2Bu2%2Fm9I5BwH7iD4faHfIQN6%2BAMLGYcJxmBEt5A0KVPe9k6Ttd1lZW%5Cvy5ngmvPMxzd89oM2m9hxwNKZChZQkKvr2NP%2Fasbj3s5CDJUmi%2BnhKgQoBNVfAGp%2B8bfEZfqT6%3A1561705285280; JSESSIONID=F3297CD301044F53CC8142DA764564ED-n52; recommend_tool_cookie_id_v1=1-67138bc53943a272df78d2c7b1e28e933a80fe1a; Hm_lpvt_80c6e16552c255ce9d85ca7568a03495=1561704405; pt_ref_7f28852c=https://www.adidas.com.cn/orderHistory?orderType=0&amp; pt_s_7f28852c=vt=1561704405379&cad=; _pk_id.2_3029faa541cd34f0c6dc7f8b9d17411a.9929=888b0d85a8bbe661.1560847385.1.1561704405.1561359121.; pt_7f28852c=uid=HYVJbjc3uqf4A6JiWIhYKA&nid=0&vid=NQcqmyThiKlBh7WDNvMBMg&vn=8&pvn=4&sact=1561704411988&to_flag=0&pl=d6tEJcSwyQhMwsrWb1I/cw*pt*1561704405379',
                'Host'              =>'www.adidas.com.cn',
                'Origin'            =>'https://www.adidas.com.cn',
                'Pragma'            =>'no-cache',
                'Referer'           =>'https://www.adidas.com.cn/member/login',
                'User-Agent'        =>'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36',
                'X-CSRF-TOKEN'      =>'a794c873-d3e5-493e-bb7e-106ea171d91a', #设置会乱码，不知道为毛！
                'X-Requested-With'  =>'XMLHttpRequest'
            ),
            'url' =>  'https://www.adidas.com.cn/member/login.json',
        );
        return $config;
    }
}