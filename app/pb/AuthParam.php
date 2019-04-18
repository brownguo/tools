<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * AuthParam message
 */
class AuthParam extends \ProtobufMessage
{
    /* Field index constants */
    const UIN = 1;
    const MMTLSCONTROLBITFLAG = 21;
    const FSURL = 20;
    const AUTHRESULTFLAG = 19;
    const UPDATEFLAG = 18;
    const NEWVERSION = 17;
    const AUTHTICKET = 16;
    const SHOWSTYLEKEY = 15;
    const A2KEY = 12;
    const SERVERTIME = 22;
    const AUTHKEY = 11;
    const CLIDBENCRYPTKEY = 9;
    const WXVERIFYCODERESPINFO = 8;
    const WTLOGINIMGRESPINFO = 7;
    const WTLOGINRSPBUFF = 6;
    const WTLOGINRSPBUFFFLAG = 5;
    const AUTOAUTHKEY = 4;
    const SESSION = 3;
    const ECDH = 2;
    const CLIDBENCRYPTINFO = 10;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UIN => array(
            'name' => 'uin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MMTLSCONTROLBITFLAG => array(
            'name' => 'mmtlsControlBitFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FSURL => array(
            'name' => 'fsurl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::AUTHRESULTFLAG => array(
            'name' => 'authResultFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UPDATEFLAG => array(
            'name' => 'updateFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWVERSION => array(
            'name' => 'newVersion',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUTHTICKET => array(
            'name' => 'authTicket',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SHOWSTYLEKEY => array(
            'name' => 'showStyleKey',
            'required' => false,
            'type' => '\ShowStyleKey'
        ),
        self::A2KEY => array(
            'name' => 'a2Key',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::SERVERTIME => array(
            'name' => 'serverTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUTHKEY => array(
            'name' => 'authKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLIDBENCRYPTKEY => array(
            'name' => 'cliDbencryptKey',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::WXVERIFYCODERESPINFO => array(
            'name' => 'wxVerifyCodeRespInfo',
            'required' => false,
            'type' => '\WxVerifyCodeReqInfo'
        ),
        self::WTLOGINIMGRESPINFO => array(
            'name' => 'wtloginImgRespInfo',
            'required' => false,
            'type' => '\WTLoginImgReqInfo'
        ),
        self::WTLOGINRSPBUFF => array(
            'name' => 'wtloginRspBuff',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::WTLOGINRSPBUFFFLAG => array(
            'name' => 'wtloginRspBuffFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUTOAUTHKEY => array(
            'name' => 'autoAuthKey',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::SESSION => array(
            'name' => 'session',
            'required' => false,
            'type' => '\SessionKey'
        ),
        self::ECDH => array(
            'name' => 'ecdh',
            'required' => false,
            'type' => '\AuthParam_Ecdh'
        ),
        self::CLIDBENCRYPTINFO => array(
            'name' => 'cliDbencryptInfo',
            'required' => false,
            'type' => '\SKBuiltinString_'
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
        $this->values[self::UIN] = null;
        $this->values[self::MMTLSCONTROLBITFLAG] = null;
        $this->values[self::FSURL] = null;
        $this->values[self::AUTHRESULTFLAG] = null;
        $this->values[self::UPDATEFLAG] = null;
        $this->values[self::NEWVERSION] = null;
        $this->values[self::AUTHTICKET] = null;
        $this->values[self::SHOWSTYLEKEY] = null;
        $this->values[self::A2KEY] = null;
        $this->values[self::SERVERTIME] = null;
        $this->values[self::AUTHKEY] = null;
        $this->values[self::CLIDBENCRYPTKEY] = null;
        $this->values[self::WXVERIFYCODERESPINFO] = null;
        $this->values[self::WTLOGINIMGRESPINFO] = null;
        $this->values[self::WTLOGINRSPBUFF] = null;
        $this->values[self::WTLOGINRSPBUFFFLAG] = null;
        $this->values[self::AUTOAUTHKEY] = null;
        $this->values[self::SESSION] = null;
        $this->values[self::ECDH] = null;
        $this->values[self::CLIDBENCRYPTINFO] = null;
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
     * Sets value of 'uin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUin($value)
    {
        return $this->set(self::UIN, $value);
    }

    /**
     * Returns value of 'uin' property
     *
     * @return integer
     */
    public function getUin()
    {
        $value = $this->get(self::UIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUin()
    {
        return $this->get(self::UIN) !== null;
    }

    /**
     * Sets value of 'mmtlsControlBitFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMmtlsControlBitFlag($value)
    {
        return $this->set(self::MMTLSCONTROLBITFLAG, $value);
    }

    /**
     * Returns value of 'mmtlsControlBitFlag' property
     *
     * @return integer
     */
    public function getMmtlsControlBitFlag()
    {
        $value = $this->get(self::MMTLSCONTROLBITFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mmtlsControlBitFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMmtlsControlBitFlag()
    {
        return $this->get(self::MMTLSCONTROLBITFLAG) !== null;
    }

    /**
     * Sets value of 'fsurl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFsurl($value)
    {
        return $this->set(self::FSURL, $value);
    }

    /**
     * Returns value of 'fsurl' property
     *
     * @return string
     */
    public function getFsurl()
    {
        $value = $this->get(self::FSURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'fsurl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFsurl()
    {
        return $this->get(self::FSURL) !== null;
    }

    /**
     * Sets value of 'authResultFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAuthResultFlag($value)
    {
        return $this->set(self::AUTHRESULTFLAG, $value);
    }

    /**
     * Returns value of 'authResultFlag' property
     *
     * @return integer
     */
    public function getAuthResultFlag()
    {
        $value = $this->get(self::AUTHRESULTFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'authResultFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthResultFlag()
    {
        return $this->get(self::AUTHRESULTFLAG) !== null;
    }

    /**
     * Sets value of 'updateFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUpdateFlag($value)
    {
        return $this->set(self::UPDATEFLAG, $value);
    }

    /**
     * Returns value of 'updateFlag' property
     *
     * @return integer
     */
    public function getUpdateFlag()
    {
        $value = $this->get(self::UPDATEFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'updateFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUpdateFlag()
    {
        return $this->get(self::UPDATEFLAG) !== null;
    }

    /**
     * Sets value of 'newVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewVersion($value)
    {
        return $this->set(self::NEWVERSION, $value);
    }

    /**
     * Returns value of 'newVersion' property
     *
     * @return integer
     */
    public function getNewVersion()
    {
        $value = $this->get(self::NEWVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'newVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewVersion()
    {
        return $this->get(self::NEWVERSION) !== null;
    }

    /**
     * Sets value of 'authTicket' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthTicket($value)
    {
        return $this->set(self::AUTHTICKET, $value);
    }

    /**
     * Returns value of 'authTicket' property
     *
     * @return string
     */
    public function getAuthTicket()
    {
        $value = $this->get(self::AUTHTICKET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'authTicket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthTicket()
    {
        return $this->get(self::AUTHTICKET) !== null;
    }

    /**
     * Sets value of 'showStyleKey' property
     *
     * @param \ShowStyleKey $value Property value
     *
     * @return null
     */
    public function setShowStyleKey(\ShowStyleKey $value=null)
    {
        return $this->set(self::SHOWSTYLEKEY, $value);
    }

    /**
     * Returns value of 'showStyleKey' property
     *
     * @return \ShowStyleKey
     */
    public function getShowStyleKey()
    {
        return $this->get(self::SHOWSTYLEKEY);
    }

    /**
     * Returns true if 'showStyleKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShowStyleKey()
    {
        return $this->get(self::SHOWSTYLEKEY) !== null;
    }

    /**
     * Sets value of 'a2Key' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setA2Key(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::A2KEY, $value);
    }

    /**
     * Returns value of 'a2Key' property
     *
     * @return \SKBuiltinString_
     */
    public function getA2Key()
    {
        return $this->get(self::A2KEY);
    }

    /**
     * Returns true if 'a2Key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasA2Key()
    {
        return $this->get(self::A2KEY) !== null;
    }

    /**
     * Sets value of 'serverTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setServerTime($value)
    {
        return $this->set(self::SERVERTIME, $value);
    }

    /**
     * Returns value of 'serverTime' property
     *
     * @return integer
     */
    public function getServerTime()
    {
        $value = $this->get(self::SERVERTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'serverTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasServerTime()
    {
        return $this->get(self::SERVERTIME) !== null;
    }

    /**
     * Sets value of 'authKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthKey($value)
    {
        return $this->set(self::AUTHKEY, $value);
    }

    /**
     * Returns value of 'authKey' property
     *
     * @return string
     */
    public function getAuthKey()
    {
        $value = $this->get(self::AUTHKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'authKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthKey()
    {
        return $this->get(self::AUTHKEY) !== null;
    }

    /**
     * Sets value of 'cliDbencryptKey' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setCliDbencryptKey(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::CLIDBENCRYPTKEY, $value);
    }

    /**
     * Returns value of 'cliDbencryptKey' property
     *
     * @return \SKBuiltinString_
     */
    public function getCliDbencryptKey()
    {
        return $this->get(self::CLIDBENCRYPTKEY);
    }

    /**
     * Returns true if 'cliDbencryptKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCliDbencryptKey()
    {
        return $this->get(self::CLIDBENCRYPTKEY) !== null;
    }

    /**
     * Sets value of 'wxVerifyCodeRespInfo' property
     *
     * @param \WxVerifyCodeReqInfo $value Property value
     *
     * @return null
     */
    public function setWxVerifyCodeRespInfo(\WxVerifyCodeReqInfo $value=null)
    {
        return $this->set(self::WXVERIFYCODERESPINFO, $value);
    }

    /**
     * Returns value of 'wxVerifyCodeRespInfo' property
     *
     * @return \WxVerifyCodeReqInfo
     */
    public function getWxVerifyCodeRespInfo()
    {
        return $this->get(self::WXVERIFYCODERESPINFO);
    }

    /**
     * Returns true if 'wxVerifyCodeRespInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWxVerifyCodeRespInfo()
    {
        return $this->get(self::WXVERIFYCODERESPINFO) !== null;
    }

    /**
     * Sets value of 'wtloginImgRespInfo' property
     *
     * @param \WTLoginImgReqInfo $value Property value
     *
     * @return null
     */
    public function setWtloginImgRespInfo(\WTLoginImgReqInfo $value=null)
    {
        return $this->set(self::WTLOGINIMGRESPINFO, $value);
    }

    /**
     * Returns value of 'wtloginImgRespInfo' property
     *
     * @return \WTLoginImgReqInfo
     */
    public function getWtloginImgRespInfo()
    {
        return $this->get(self::WTLOGINIMGRESPINFO);
    }

    /**
     * Returns true if 'wtloginImgRespInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWtloginImgRespInfo()
    {
        return $this->get(self::WTLOGINIMGRESPINFO) !== null;
    }

    /**
     * Sets value of 'wtloginRspBuff' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setWtloginRspBuff(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::WTLOGINRSPBUFF, $value);
    }

    /**
     * Returns value of 'wtloginRspBuff' property
     *
     * @return \SKBuiltinString_
     */
    public function getWtloginRspBuff()
    {
        return $this->get(self::WTLOGINRSPBUFF);
    }

    /**
     * Returns true if 'wtloginRspBuff' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWtloginRspBuff()
    {
        return $this->get(self::WTLOGINRSPBUFF) !== null;
    }

    /**
     * Sets value of 'wtloginRspBuffFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWtloginRspBuffFlag($value)
    {
        return $this->set(self::WTLOGINRSPBUFFFLAG, $value);
    }

    /**
     * Returns value of 'wtloginRspBuffFlag' property
     *
     * @return integer
     */
    public function getWtloginRspBuffFlag()
    {
        $value = $this->get(self::WTLOGINRSPBUFFFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'wtloginRspBuffFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWtloginRspBuffFlag()
    {
        return $this->get(self::WTLOGINRSPBUFFFLAG) !== null;
    }

    /**
     * Sets value of 'autoAuthKey' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setAutoAuthKey(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::AUTOAUTHKEY, $value);
    }

    /**
     * Returns value of 'autoAuthKey' property
     *
     * @return \SKBuiltinString_
     */
    public function getAutoAuthKey()
    {
        return $this->get(self::AUTOAUTHKEY);
    }

    /**
     * Returns true if 'autoAuthKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAutoAuthKey()
    {
        return $this->get(self::AUTOAUTHKEY) !== null;
    }

    /**
     * Sets value of 'session' property
     *
     * @param \SessionKey $value Property value
     *
     * @return null
     */
    public function setSession(\SessionKey $value=null)
    {
        return $this->set(self::SESSION, $value);
    }

    /**
     * Returns value of 'session' property
     *
     * @return \SessionKey
     */
    public function getSession()
    {
        return $this->get(self::SESSION);
    }

    /**
     * Returns true if 'session' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSession()
    {
        return $this->get(self::SESSION) !== null;
    }

    /**
     * Sets value of 'ecdh' property
     *
     * @param \AuthParam_Ecdh $value Property value
     *
     * @return null
     */
    public function setEcdh(\AuthParam_Ecdh $value=null)
    {
        return $this->set(self::ECDH, $value);
    }

    /**
     * Returns value of 'ecdh' property
     *
     * @return \AuthParam_Ecdh
     */
    public function getEcdh()
    {
        return $this->get(self::ECDH);
    }

    /**
     * Returns true if 'ecdh' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEcdh()
    {
        return $this->get(self::ECDH) !== null;
    }

    /**
     * Sets value of 'cliDbencryptInfo' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setCliDbencryptInfo(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::CLIDBENCRYPTINFO, $value);
    }

    /**
     * Returns value of 'cliDbencryptInfo' property
     *
     * @return \SKBuiltinString_
     */
    public function getCliDbencryptInfo()
    {
        return $this->get(self::CLIDBENCRYPTINFO);
    }

    /**
     * Returns true if 'cliDbencryptInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCliDbencryptInfo()
    {
        return $this->get(self::CLIDBENCRYPTINFO) !== null;
    }
}
}