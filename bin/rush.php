<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2020/5/26
 * Time: 下午1:02
 */

include_once './requests.php';
require_once '../vendor/autoload.php';

class rush
{
    protected static $getCookieUrl = 'https://api.nike.com/measure/uxevents/v1';
    protected static $userinfo_url = 'https://www.deepsheet.net/H/getProjectInfo?projectid=20052322345184617937&sharekey=&preview=';
    protected static $client;
    public static function _init()
    {
        static::$client = new GuzzleHttp\Client([
            'headers' => [
                'Accept'            => '*/*',
                'User-Agent'        => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_12_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.122 Safari/537.36',
                'Cookie'            => 'PHPSESSID=pibnqikr4balnf3bl8881l99o7; pagemodeloa_sheet20052322345184617937=SIMPLEPAGE; searchResult_table_action_total=0; mcss_ckj=31357c32357c38347c35357c35357c34357c34357c30357c30357c36357c3934; Hm_lvt_35a20a00be201fa9a257e423b6f54444=1590657186,1590657371,1590657710; mcss_lastloginuser=18226677043; lastFolder=mycreatedfiles; filelistpagetitle=%u6DF1%u8868%u8868%u683C; lastFileUpdateTime=2020-05-28%2017%3A36%3A05; uni_lastopendfile=20052322345184617937; loginuserInfo=%5Bobject%20Object%5D; mcss_loginuser=18226677043; mcss_olduser=18226677043; unifile_unisheet_table_action_total=0; mcsstable_currentPos_Rowid_20052322345184617937_18226677043=null; mcsstable_currentPos_Fieldid_20052322345184617937_18226677043=null; Hm_lpvt_35a20a00be201fa9a257e423b6f54444=1590658725',
            ],'debug'=>false]);

        $response = static::$client->request('GET',static::$userinfo_url);

        print_r((string) $response->getBody());
        //static::getCookies();
    }

    protected static function getCookies()
    {
        $response = requests::post(static::$getCookieUrl,array());
        $response = (string) $response->getBody();
        print_r($response);
    }
}

rush::_init();