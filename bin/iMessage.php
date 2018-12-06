<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2018/11/21
 * Time: 2:07 PM
 */

class iMessage extends SQLite3
{
    protected $db_path;

    protected $dbh;

    protected $helper;

    protected $osx_epoch = 978307200;

    protected $now_time;

    protected $verify_code;

    public function __construct()
    {
        //初始化chat路径
        $this->db_path  = getenv('HOME').'/Library/Messages/chat.db';
        //初始化当前时间
        $this->now_time = microtime(true);
        //检查环境
        //self::_checkEnv();
        //连接SQLlite
        self::_connect();
        //读取iMessage
        self::_getiMessage();
    }

    public function _checkEnv()
    {
        logger::notice('检查SqlLite3环境');

        $pad_length = 26;

        $need_map = array(
            'sqlite3'    =>true,
            'pdo_sqlite' =>true,
        );

        foreach ($need_map as $ext_name=>$must_required)
        {
            $suport = extension_loaded($ext_name);

            if($must_required && !$suport)
            {
                exit($ext_name. " \033[31;40m [NOT SUPORT BUT REQUIRED] \033[0m\n\n\033[31;40mYou have to compile CLI version of PHP with --enable-{$ext_name}\n\n");
            }
            echo str_pad($ext_name, $pad_length), "\033[32;40m [OK] \033[0m\n";
        }
    }

    public function _connect()
    {
        $this->open($this->db_path);

        if($this)
        {
            logger::notice('Opened database successfully');
        }
        else
        {
            logger::notice('Opened database Fail!','error');
            exit(0);
        }
    }


    public function _getiMessage()
    {
        $sql = 'SELECT text, date FROM `message` ORDER BY date DESC limit 1';
        $ret = $this->query($sql);

        while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $verify_code_str   = $row['text'];
            $recv_message_time = $row['date'];

        }

        $recv_message_time = (($recv_message_time / 1e9) + $this->osx_epoch);

        if($recv_message_time > $this->now_time)
        {
            if($verify_code_str)
            {
                preg_match('/【114预约挂号】您的短信验证码为【(.*?)】/si',$verify_code_str,$verify_code);

                if(!empty($verify_code))
                {
                    //return $verify_code[1];
                    $this->verify_code = $verify_code[1];
                }
            }
            else
            {
                logger::notice('iMessage读取失败');
                exit(0);
            }
        }
        else
        {
            usleep(50000);
            self::_getiMessage();
        }
    }

    public function _return_verify_code()
    {
        return $this->verify_code;
    }
}


$LoadableModules = array('plugins');

spl_autoload_register(function($name)
{
    global $LoadableModules;

    foreach ($LoadableModules as $module)
    {
        $filename =  SERVER_BASE.$module.$name . '.php';
        if (file_exists($filename))
            require_once $filename;
    }
});