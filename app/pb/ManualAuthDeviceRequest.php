<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * ManualAuthDeviceRequest message
 */
class ManualAuthDeviceRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const INPUTTYPE = 22;
    const IPHONEVER = 21;
    const ADSOURCE = 20;
    const BUNDLEID = 19;
    const REALCOUNTRY = 18;
    const OSTYPE = 17;
    const DEVICEMODEL = 16;
    const DEVICEBRAND = 15;
    const TIMESTAMP = 14;
    const CLIENTCHECKDAT = 23;
    const CHANNEL = 13;
    const LANGUAGE = 10;
    const DEVICEINFOXML = 9;
    const LOGINDEVICENAME = 8;
    const SIGNATURE = 7;
    const CLIENTSEQID = 6;
    const BUILTINIPSEQ = 5;
    const SOFTINFOXML = 4;
    const IMEI = 3;
    const BASEREQINFO = 2;
    const TIMEZONE = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => true,
            'type' => '\BaseRequest'
        ),
        self::INPUTTYPE => array(
            'name' => 'Inputtype',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IPHONEVER => array(
            'name' => 'Iphonever',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADSOURCE => array(
            'name' => 'Adsource',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BUNDLEID => array(
            'name' => 'Bundleid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REALCOUNTRY => array(
            'name' => 'realCountry',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::OSTYPE => array(
            'name' => 'osType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEVICEMODEL => array(
            'name' => 'deviceModel',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEVICEBRAND => array(
            'name' => 'deviceBrand',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIMESTAMP => array(
            'name' => 'Timestamp',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTCHECKDAT => array(
            'name' => 'Clientcheckdat',
            'required' => true,
            'type' => '\SKBuiltinString_'
        ),
        self::CHANNEL => array(
            'name' => 'Channel',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LANGUAGE => array(
            'name' => 'language',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DEVICEINFOXML => array(
            'name' => 'deviceInfoXml',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LOGINDEVICENAME => array(
            'name' => 'loginDeviceName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNATURE => array(
            'name' => 'Signature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLIENTSEQID => array(
            'name' => 'clientSeqID',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BUILTINIPSEQ => array(
            'name' => 'Builtinipseq',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOFTINFOXML => array(
            'name' => 'softInfoXml',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IMEI => array(
            'name' => 'imei',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BASEREQINFO => array(
            'name' => 'baseReqInfo',
            'required' => true,
            'type' => '\BaseAuthReqInfo'
        ),
        self::TIMEZONE => array(
            'name' => 'timeZone',
            'required' => true,
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::INPUTTYPE] = null;
        $this->values[self::IPHONEVER] = null;
        $this->values[self::ADSOURCE] = null;
        $this->values[self::BUNDLEID] = null;
        $this->values[self::REALCOUNTRY] = null;
        $this->values[self::OSTYPE] = null;
        $this->values[self::DEVICEMODEL] = null;
        $this->values[self::DEVICEBRAND] = null;
        $this->values[self::TIMESTAMP] = null;
        $this->values[self::CLIENTCHECKDAT] = null;
        $this->values[self::CHANNEL] = null;
        $this->values[self::LANGUAGE] = null;
        $this->values[self::DEVICEINFOXML] = null;
        $this->values[self::LOGINDEVICENAME] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::CLIENTSEQID] = null;
        $this->values[self::BUILTINIPSEQ] = null;
        $this->values[self::SOFTINFOXML] = null;
        $this->values[self::IMEI] = null;
        $this->values[self::BASEREQINFO] = null;
        $this->values[self::TIMEZONE] = null;
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
     * Sets value of 'Inputtype' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInputtype($value)
    {
        return $this->set(self::INPUTTYPE, $value);
    }

    /**
     * Returns value of 'Inputtype' property
     *
     * @return integer
     */
    public function getInputtype()
    {
        $value = $this->get(self::INPUTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Inputtype' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInputtype()
    {
        return $this->get(self::INPUTTYPE) !== null;
    }

    /**
     * Sets value of 'Iphonever' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIphonever($value)
    {
        return $this->set(self::IPHONEVER, $value);
    }

    /**
     * Returns value of 'Iphonever' property
     *
     * @return string
     */
    public function getIphonever()
    {
        $value = $this->get(self::IPHONEVER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Iphonever' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIphonever()
    {
        return $this->get(self::IPHONEVER) !== null;
    }

    /**
     * Sets value of 'Adsource' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAdsource($value)
    {
        return $this->set(self::ADSOURCE, $value);
    }

    /**
     * Returns value of 'Adsource' property
     *
     * @return string
     */
    public function getAdsource()
    {
        $value = $this->get(self::ADSOURCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Adsource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdsource()
    {
        return $this->get(self::ADSOURCE) !== null;
    }

    /**
     * Sets value of 'Bundleid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBundleid($value)
    {
        return $this->set(self::BUNDLEID, $value);
    }

    /**
     * Returns value of 'Bundleid' property
     *
     * @return string
     */
    public function getBundleid()
    {
        $value = $this->get(self::BUNDLEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Bundleid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBundleid()
    {
        return $this->get(self::BUNDLEID) !== null;
    }

    /**
     * Sets value of 'realCountry' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRealCountry($value)
    {
        return $this->set(self::REALCOUNTRY, $value);
    }

    /**
     * Returns value of 'realCountry' property
     *
     * @return string
     */
    public function getRealCountry()
    {
        $value = $this->get(self::REALCOUNTRY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'realCountry' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRealCountry()
    {
        return $this->get(self::REALCOUNTRY) !== null;
    }

    /**
     * Sets value of 'osType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOsType($value)
    {
        return $this->set(self::OSTYPE, $value);
    }

    /**
     * Returns value of 'osType' property
     *
     * @return string
     */
    public function getOsType()
    {
        $value = $this->get(self::OSTYPE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'osType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOsType()
    {
        return $this->get(self::OSTYPE) !== null;
    }

    /**
     * Sets value of 'deviceModel' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceModel($value)
    {
        return $this->set(self::DEVICEMODEL, $value);
    }

    /**
     * Returns value of 'deviceModel' property
     *
     * @return string
     */
    public function getDeviceModel()
    {
        $value = $this->get(self::DEVICEMODEL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deviceModel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceModel()
    {
        return $this->get(self::DEVICEMODEL) !== null;
    }

    /**
     * Sets value of 'deviceBrand' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceBrand($value)
    {
        return $this->set(self::DEVICEBRAND, $value);
    }

    /**
     * Returns value of 'deviceBrand' property
     *
     * @return string
     */
    public function getDeviceBrand()
    {
        $value = $this->get(self::DEVICEBRAND);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deviceBrand' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceBrand()
    {
        return $this->get(self::DEVICEBRAND) !== null;
    }

    /**
     * Sets value of 'Timestamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimestamp($value)
    {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'Timestamp' property
     *
     * @return integer
     */
    public function getTimestamp()
    {
        $value = $this->get(self::TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Timestamp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimestamp()
    {
        return $this->get(self::TIMESTAMP) !== null;
    }

    /**
     * Sets value of 'Clientcheckdat' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setClientcheckdat(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::CLIENTCHECKDAT, $value);
    }

    /**
     * Returns value of 'Clientcheckdat' property
     *
     * @return \SKBuiltinString_
     */
    public function getClientcheckdat()
    {
        return $this->get(self::CLIENTCHECKDAT);
    }

    /**
     * Returns true if 'Clientcheckdat' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientcheckdat()
    {
        return $this->get(self::CLIENTCHECKDAT) !== null;
    }

    /**
     * Sets value of 'Channel' property
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
     * Returns value of 'Channel' property
     *
     * @return integer
     */
    public function getChannel()
    {
        $value = $this->get(self::CHANNEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Channel' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChannel()
    {
        return $this->get(self::CHANNEL) !== null;
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
     * Sets value of 'loginDeviceName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLoginDeviceName($value)
    {
        return $this->set(self::LOGINDEVICENAME, $value);
    }

    /**
     * Returns value of 'loginDeviceName' property
     *
     * @return string
     */
    public function getLoginDeviceName()
    {
        $value = $this->get(self::LOGINDEVICENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'loginDeviceName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLoginDeviceName()
    {
        return $this->get(self::LOGINDEVICENAME) !== null;
    }

    /**
     * Sets value of 'Signature' property
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
     * Returns value of 'Signature' property
     *
     * @return string
     */
    public function getSignature()
    {
        $value = $this->get(self::SIGNATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Signature' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSignature()
    {
        return $this->get(self::SIGNATURE) !== null;
    }

    /**
     * Sets value of 'clientSeqID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setClientSeqID($value)
    {
        return $this->set(self::CLIENTSEQID, $value);
    }

    /**
     * Returns value of 'clientSeqID' property
     *
     * @return string
     */
    public function getClientSeqID()
    {
        $value = $this->get(self::CLIENTSEQID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'clientSeqID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientSeqID()
    {
        return $this->get(self::CLIENTSEQID) !== null;
    }

    /**
     * Sets value of 'Builtinipseq' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBuiltinipseq($value)
    {
        return $this->set(self::BUILTINIPSEQ, $value);
    }

    /**
     * Returns value of 'Builtinipseq' property
     *
     * @return integer
     */
    public function getBuiltinipseq()
    {
        $value = $this->get(self::BUILTINIPSEQ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Builtinipseq' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuiltinipseq()
    {
        return $this->get(self::BUILTINIPSEQ) !== null;
    }

    /**
     * Sets value of 'softInfoXml' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSoftInfoXml($value)
    {
        return $this->set(self::SOFTINFOXML, $value);
    }

    /**
     * Returns value of 'softInfoXml' property
     *
     * @return string
     */
    public function getSoftInfoXml()
    {
        $value = $this->get(self::SOFTINFOXML);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'softInfoXml' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSoftInfoXml()
    {
        return $this->get(self::SOFTINFOXML) !== null;
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
     * Sets value of 'baseReqInfo' property
     *
     * @param \BaseAuthReqInfo $value Property value
     *
     * @return null
     */
    public function setBaseReqInfo(\BaseAuthReqInfo $value=null)
    {
        return $this->set(self::BASEREQINFO, $value);
    }

    /**
     * Returns value of 'baseReqInfo' property
     *
     * @return \BaseAuthReqInfo
     */
    public function getBaseReqInfo()
    {
        return $this->get(self::BASEREQINFO);
    }

    /**
     * Returns true if 'baseReqInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseReqInfo()
    {
        return $this->get(self::BASEREQINFO) !== null;
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
}
}