<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * AccountInfo message
 */
class AccountInfo extends \ProtobufMessage
{
    /* Field index constants */
    const WXID = 1;
    const NICKNAME = 2;
    const BINDUIN = 3;
    const BINDMAIL = 4;
    const BINDMOBILE = 5;
    const ALIAS = 6;
    const STATUS = 8;
    const PLUGINFLAG = 9;
    const REGISTERTYPE = 10;
    const DEVICEINFOXML = 11;
    const SAFEDEVICE = 12;
    const OFFICIALNAMEPINYIN = 13;
    const OFFICIALNAMEZH = 14;
    const PUSHMAILSTATUS = 15;
    const FSURL = 16;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::WXID => array(
            'name' => 'wxid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NICKNAME => array(
            'name' => 'nickName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BINDUIN => array(
            'name' => 'bindUin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BINDMAIL => array(
            'name' => 'bindMail',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BINDMOBILE => array(
            'name' => 'bindMobile',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ALIAS => array(
            'name' => 'Alias',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PLUGINFLAG => array(
            'name' => 'pluginFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REGISTERTYPE => array(
            'name' => 'registerType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEVICEINFOXML => array(
            'name' => 'deviceInfoXml',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SAFEDEVICE => array(
            'name' => 'safeDevice',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OFFICIALNAMEPINYIN => array(
            'name' => 'officialNamePinyin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OFFICIALNAMEZH => array(
            'name' => 'officialNameZh',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PUSHMAILSTATUS => array(
            'name' => 'pushMailStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FSURL => array(
            'name' => 'fsUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
    );

    /**
     * Constructs new message container and clears its internal state
     */
    public function __construct()
    {
        $this->reset();
    }

    /**
     * Clears message values and sets default ones
     *
     * @return null
     */
    public function reset()
    {
        $this->values[self::WXID] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::BINDUIN] = null;
        $this->values[self::BINDMAIL] = null;
        $this->values[self::BINDMOBILE] = null;
        $this->values[self::ALIAS] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::PLUGINFLAG] = null;
        $this->values[self::REGISTERTYPE] = null;
        $this->values[self::DEVICEINFOXML] = null;
        $this->values[self::SAFEDEVICE] = null;
        $this->values[self::OFFICIALNAMEPINYIN] = null;
        $this->values[self::OFFICIALNAMEZH] = null;
        $this->values[self::PUSHMAILSTATUS] = null;
        $this->values[self::FSURL] = null;
    }

    /**
     * Returns field descriptors
     *
     * @return array
     */
    public function fields()
    {
        return self::$fields;
    }

    /**
     * Sets value of 'wxid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWxid($value)
    {
        return $this->set(self::WXID, $value);
    }

    /**
     * Returns value of 'wxid' property
     *
     * @return string
     */
    public function getWxid()
    {
        $value = $this->get(self::WXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'wxid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWxid()
    {
        return $this->get(self::WXID) !== null;
    }

    /**
     * Sets value of 'nickName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNickName($value)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickName' property
     *
     * @return string
     */
    public function getNickName()
    {
        $value = $this->get(self::NICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'nickName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNickName()
    {
        return $this->get(self::NICKNAME) !== null;
    }

    /**
     * Sets value of 'bindUin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBindUin($value)
    {
        return $this->set(self::BINDUIN, $value);
    }

    /**
     * Returns value of 'bindUin' property
     *
     * @return integer
     */
    public function getBindUin()
    {
        $value = $this->get(self::BINDUIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bindUin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBindUin()
    {
        return $this->get(self::BINDUIN) !== null;
    }

    /**
     * Sets value of 'bindMail' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBindMail($value)
    {
        return $this->set(self::BINDMAIL, $value);
    }

    /**
     * Returns value of 'bindMail' property
     *
     * @return string
     */
    public function getBindMail()
    {
        $value = $this->get(self::BINDMAIL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'bindMail' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBindMail()
    {
        return $this->get(self::BINDMAIL) !== null;
    }

    /**
     * Sets value of 'bindMobile' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBindMobile($value)
    {
        return $this->set(self::BINDMOBILE, $value);
    }

    /**
     * Returns value of 'bindMobile' property
     *
     * @return string
     */
    public function getBindMobile()
    {
        $value = $this->get(self::BINDMOBILE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'bindMobile' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBindMobile()
    {
        return $this->get(self::BINDMOBILE) !== null;
    }

    /**
     * Sets value of 'Alias' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAlias($value)
    {
        return $this->set(self::ALIAS, $value);
    }

    /**
     * Returns value of 'Alias' property
     *
     * @return string
     */
    public function getAlias()
    {
        $value = $this->get(self::ALIAS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Alias' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlias()
    {
        return $this->get(self::ALIAS) !== null;
    }

    /**
     * Sets value of 'status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }

    /**
     * Sets value of 'pluginFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPluginFlag($value)
    {
        return $this->set(self::PLUGINFLAG, $value);
    }

    /**
     * Returns value of 'pluginFlag' property
     *
     * @return integer
     */
    public function getPluginFlag()
    {
        $value = $this->get(self::PLUGINFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'pluginFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPluginFlag()
    {
        return $this->get(self::PLUGINFLAG) !== null;
    }

    /**
     * Sets value of 'registerType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRegisterType($value)
    {
        return $this->set(self::REGISTERTYPE, $value);
    }

    /**
     * Returns value of 'registerType' property
     *
     * @return integer
     */
    public function getRegisterType()
    {
        $value = $this->get(self::REGISTERTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'registerType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRegisterType()
    {
        return $this->get(self::REGISTERTYPE) !== null;
    }

    /**
     * Sets value of 'deviceInfoXml' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceInfoXml($value)
    {
        return $this->set(self::DEVICEINFOXML, $value);
    }

    /**
     * Returns value of 'deviceInfoXml' property
     *
     * @return string
     */
    public function getDeviceInfoXml()
    {
        $value = $this->get(self::DEVICEINFOXML);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deviceInfoXml' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceInfoXml()
    {
        return $this->get(self::DEVICEINFOXML) !== null;
    }

    /**
     * Sets value of 'safeDevice' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSafeDevice($value)
    {
        return $this->set(self::SAFEDEVICE, $value);
    }

    /**
     * Returns value of 'safeDevice' property
     *
     * @return integer
     */
    public function getSafeDevice()
    {
        $value = $this->get(self::SAFEDEVICE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'safeDevice' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSafeDevice()
    {
        return $this->get(self::SAFEDEVICE) !== null;
    }

    /**
     * Sets value of 'officialNamePinyin' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOfficialNamePinyin($value)
    {
        return $this->set(self::OFFICIALNAMEPINYIN, $value);
    }

    /**
     * Returns value of 'officialNamePinyin' property
     *
     * @return string
     */
    public function getOfficialNamePinyin()
    {
        $value = $this->get(self::OFFICIALNAMEPINYIN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'officialNamePinyin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOfficialNamePinyin()
    {
        return $this->get(self::OFFICIALNAMEPINYIN) !== null;
    }

    /**
     * Sets value of 'officialNameZh' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOfficialNameZh($value)
    {
        return $this->set(self::OFFICIALNAMEZH, $value);
    }

    /**
     * Returns value of 'officialNameZh' property
     *
     * @return string
     */
    public function getOfficialNameZh()
    {
        $value = $this->get(self::OFFICIALNAMEZH);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'officialNameZh' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOfficialNameZh()
    {
        return $this->get(self::OFFICIALNAMEZH) !== null;
    }

    /**
     * Sets value of 'pushMailStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPushMailStatus($value)
    {
        return $this->set(self::PUSHMAILSTATUS, $value);
    }

    /**
     * Returns value of 'pushMailStatus' property
     *
     * @return integer
     */
    public function getPushMailStatus()
    {
        $value = $this->get(self::PUSHMAILSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'pushMailStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPushMailStatus()
    {
        return $this->get(self::PUSHMAILSTATUS) !== null;
    }

    /**
     * Sets value of 'fsUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFsUrl($value)
    {
        return $this->set(self::FSURL, $value);
    }

    /**
     * Returns value of 'fsUrl' property
     *
     * @return string
     */
    public function getFsUrl()
    {
        $value = $this->get(self::FSURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fsUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFsUrl()
    {
        return $this->get(self::FSURL) !== null;
    }
}
}