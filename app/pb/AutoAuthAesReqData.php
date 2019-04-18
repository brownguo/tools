<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * AutoAuthAesReqData message
 */
class AutoAuthAesReqData extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const BASEAUTHREQINFO = 2;
    const AUTOAUTHKEY = 3;
    const IMEI = 4;
    const SOFTTYPE = 5;
    const BUILTINIPSEQ = 6;
    const CLIENTSEQID = 7;
    const SIGNATURE = 8;
    const DEVICENAME = 9;
    const DEVICETYPE = 10;
    const LANGUAGE = 11;
    const TIMEZONE = 12;
    const CHANNEL = 13;
    const CLIENTCHECKDATA = 14;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => false,
            'type' => '\BaseRequest'
        ),
        self::BASEAUTHREQINFO => array(
            'name' => 'BaseAuthReqInfo',
            'required' => false,
            'type' => '\BaseAuthReqInfo'
        ),
        self::AUTOAUTHKEY => array(
            'name' => 'autoAuthKey',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::IMEI => array(
            'name' => 'imei',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SOFTTYPE => array(
            'name' => 'softType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BUILTINIPSEQ => array(
            'name' => 'builtinIpseq',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTSEQID => array(
            'name' => 'clientSeqId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNATURE => array(
            'name' => 'signature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEVICENAME => array(
            'name' => 'deviceName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEVICETYPE => array(
            'name' => 'deviceType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LANGUAGE => array(
            'name' => 'language',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIMEZONE => array(
            'name' => 'timeZone',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHANNEL => array(
            'name' => 'channel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTCHECKDATA => array(
            'name' => 'clientCheckData',
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::BASEAUTHREQINFO] = null;
        $this->values[self::AUTOAUTHKEY] = null;
        $this->values[self::IMEI] = null;
        $this->values[self::SOFTTYPE] = null;
        $this->values[self::BUILTINIPSEQ] = null;
        $this->values[self::CLIENTSEQID] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::DEVICENAME] = null;
        $this->values[self::DEVICETYPE] = null;
        $this->values[self::LANGUAGE] = null;
        $this->values[self::TIMEZONE] = null;
        $this->values[self::CHANNEL] = null;
        $this->values[self::CLIENTCHECKDATA] = null;
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
     * Sets value of 'baseRequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaseRequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }

    /**
     * Sets value of 'BaseAuthReqInfo' property
     *
     * @param \BaseAuthReqInfo $value Property value
     *
     * @return null
     */
    public function setBaseAuthReqInfo(\BaseAuthReqInfo $value=null)
    {
        return $this->set(self::BASEAUTHREQINFO, $value);
    }

    /**
     * Returns value of 'BaseAuthReqInfo' property
     *
     * @return \BaseAuthReqInfo
     */
    public function getBaseAuthReqInfo()
    {
        return $this->get(self::BASEAUTHREQINFO);
    }

    /**
     * Returns true if 'BaseAuthReqInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseAuthReqInfo()
    {
        return $this->get(self::BASEAUTHREQINFO) !== null;
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
     * Sets value of 'imei' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImei($value)
    {
        return $this->set(self::IMEI, $value);
    }

    /**
     * Returns value of 'imei' property
     *
     * @return string
     */
    public function getImei()
    {
        $value = $this->get(self::IMEI);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'imei' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImei()
    {
        return $this->get(self::IMEI) !== null;
    }

    /**
     * Sets value of 'softType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSoftType($value)
    {
        return $this->set(self::SOFTTYPE, $value);
    }

    /**
     * Returns value of 'softType' property
     *
     * @return string
     */
    public function getSoftType()
    {
        $value = $this->get(self::SOFTTYPE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'softType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSoftType()
    {
        return $this->get(self::SOFTTYPE) !== null;
    }

    /**
     * Sets value of 'builtinIpseq' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBuiltinIpseq($value)
    {
        return $this->set(self::BUILTINIPSEQ, $value);
    }

    /**
     * Returns value of 'builtinIpseq' property
     *
     * @return integer
     */
    public function getBuiltinIpseq()
    {
        $value = $this->get(self::BUILTINIPSEQ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'builtinIpseq' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuiltinIpseq()
    {
        return $this->get(self::BUILTINIPSEQ) !== null;
    }

    /**
     * Sets value of 'clientSeqId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientSeqId($value)
    {
        return $this->set(self::CLIENTSEQID, $value);
    }

    /**
     * Returns value of 'clientSeqId' property
     *
     * @return string
     */
    public function getClientSeqId()
    {
        $value = $this->get(self::CLIENTSEQID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'clientSeqId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientSeqId()
    {
        return $this->get(self::CLIENTSEQID) !== null;
    }

    /**
     * Sets value of 'signature' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignature($value)
    {
        return $this->set(self::SIGNATURE, $value);
    }

    /**
     * Returns value of 'signature' property
     *
     * @return string
     */
    public function getSignature()
    {
        $value = $this->get(self::SIGNATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'signature' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSignature()
    {
        return $this->get(self::SIGNATURE) !== null;
    }

    /**
     * Sets value of 'deviceName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceName($value)
    {
        return $this->set(self::DEVICENAME, $value);
    }

    /**
     * Returns value of 'deviceName' property
     *
     * @return string
     */
    public function getDeviceName()
    {
        $value = $this->get(self::DEVICENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deviceName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceName()
    {
        return $this->get(self::DEVICENAME) !== null;
    }

    /**
     * Sets value of 'deviceType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceType($value)
    {
        return $this->set(self::DEVICETYPE, $value);
    }

    /**
     * Returns value of 'deviceType' property
     *
     * @return string
     */
    public function getDeviceType()
    {
        $value = $this->get(self::DEVICETYPE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deviceType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceType()
    {
        return $this->get(self::DEVICETYPE) !== null;
    }

    /**
     * Sets value of 'language' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLanguage($value)
    {
        return $this->set(self::LANGUAGE, $value);
    }

    /**
     * Returns value of 'language' property
     *
     * @return string
     */
    public function getLanguage()
    {
        $value = $this->get(self::LANGUAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'language' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLanguage()
    {
        return $this->get(self::LANGUAGE) !== null;
    }

    /**
     * Sets value of 'timeZone' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimeZone($value)
    {
        return $this->set(self::TIMEZONE, $value);
    }

    /**
     * Returns value of 'timeZone' property
     *
     * @return string
     */
    public function getTimeZone()
    {
        $value = $this->get(self::TIMEZONE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'timeZone' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeZone()
    {
        return $this->get(self::TIMEZONE) !== null;
    }

    /**
     * Sets value of 'channel' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChannel($value)
    {
        return $this->set(self::CHANNEL, $value);
    }

    /**
     * Returns value of 'channel' property
     *
     * @return integer
     */
    public function getChannel()
    {
        $value = $this->get(self::CHANNEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'channel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChannel()
    {
        return $this->get(self::CHANNEL) !== null;
    }

    /**
     * Sets value of 'clientCheckData' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setClientCheckData(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::CLIENTCHECKDATA, $value);
    }

    /**
     * Returns value of 'clientCheckData' property
     *
     * @return \SKBuiltinString_
     */
    public function getClientCheckData()
    {
        return $this->get(self::CLIENTCHECKDATA);
    }

    /**
     * Returns true if 'clientCheckData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientCheckData()
    {
        return $this->get(self::CLIENTCHECKDATA) !== null;
    }
}
}