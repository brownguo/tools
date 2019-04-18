<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * UploadMsgImgRequest message
 */
class UploadMsgImgRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const CDNMIDIMGSIZE = 20;
    const CDNTHUMBIMGURL = 21;
    const CDNTHUMBIMGSIZE = 22;
    const CDNTHUMBIMGHEIGHT = 23;
    const CDNTHUMBIMGWIDTH = 24;
    const CDNTHUMBAESKEY = 25;
    const CDNBIGIMGSIZE = 19;
    const REQTIME = 26;
    const CRC32 = 28;
    const MSGFORWARDTYPE = 29;
    const HITMD5 = 30;
    const APPID = 31;
    const MESSAGEACTION = 32;
    const MESSAGEEXT = 33;
    const MD5 = 27;
    const MEDIATAGNAME = 34;
    const ENCRYVER = 18;
    const CDNMIDIMGURL = 16;
    const CLIENTIMGID = 2;
    const FROMID = 3;
    const TO = 4;
    const TOTALLEN = 5;
    const STARTPOS = 6;
    const DATALEN = 7;
    const AESKEY = 17;
    const DATA = 8;
    const MSGSOURCE = 10;
    const COMPRESSTYPE = 11;
    const NETTYPE = 12;
    const PHOTOFROM = 13;
    const UICREATETIME = 14;
    const CDNBIGIMGURL = 15;
    const MSGTYPE = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'BaseRequest',
            'required' => false,
            'type' => '\BaseRequest'
        ),
        self::CDNMIDIMGSIZE => array(
            'name' => 'cDNMidImgSize',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CDNTHUMBIMGURL => array(
            'name' => 'cDNThumbImgUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CDNTHUMBIMGSIZE => array(
            'name' => 'cDNThumbImgSize',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CDNTHUMBIMGHEIGHT => array(
            'name' => 'cDNThumbImgHeight',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CDNTHUMBIMGWIDTH => array(
            'name' => 'cDNThumbImgWidth',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CDNTHUMBAESKEY => array(
            'name' => 'cDNThumbAESKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CDNBIGIMGSIZE => array(
            'name' => 'cDNBigImgSize',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REQTIME => array(
            'name' => 'reqTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CRC32 => array(
            'name' => 'Crc32',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGFORWARDTYPE => array(
            'name' => 'Msgforwardtype',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HITMD5 => array(
            'name' => 'hitMd5',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::APPID => array(
            'name' => 'appid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MESSAGEACTION => array(
            'name' => 'messageAction',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MESSAGEEXT => array(
            'name' => 'messageExt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MD5 => array(
            'name' => 'md5',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MEDIATAGNAME => array(
            'name' => 'mediaTagName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENCRYVER => array(
            'name' => 'encryVer',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CDNMIDIMGURL => array(
            'name' => 'cDNMidImgUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLIENTIMGID => array(
            'name' => 'clientImgId',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::FROMID => array(
            'name' => 'fromid',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::TO => array(
            'name' => 'to',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::TOTALLEN => array(
            'name' => 'totalLen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::STARTPOS => array(
            'name' => 'startPos',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DATALEN => array(
            'name' => 'dataLen',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AESKEY => array(
            'name' => 'aESKey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::MSGSOURCE => array(
            'name' => 'msgSource',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::COMPRESSTYPE => array(
            'name' => 'compressType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NETTYPE => array(
            'name' => 'netType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PHOTOFROM => array(
            'name' => 'photoFrom',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UICREATETIME => array(
            'name' => 'uICreateTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CDNBIGIMGURL => array(
            'name' => 'cDNBigImgUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MSGTYPE => array(
            'name' => 'msgType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::CDNMIDIMGSIZE] = null;
        $this->values[self::CDNTHUMBIMGURL] = null;
        $this->values[self::CDNTHUMBIMGSIZE] = null;
        $this->values[self::CDNTHUMBIMGHEIGHT] = null;
        $this->values[self::CDNTHUMBIMGWIDTH] = null;
        $this->values[self::CDNTHUMBAESKEY] = null;
        $this->values[self::CDNBIGIMGSIZE] = null;
        $this->values[self::REQTIME] = null;
        $this->values[self::CRC32] = null;
        $this->values[self::MSGFORWARDTYPE] = null;
        $this->values[self::HITMD5] = null;
        $this->values[self::APPID] = null;
        $this->values[self::MESSAGEACTION] = null;
        $this->values[self::MESSAGEEXT] = null;
        $this->values[self::MD5] = null;
        $this->values[self::MEDIATAGNAME] = null;
        $this->values[self::ENCRYVER] = null;
        $this->values[self::CDNMIDIMGURL] = null;
        $this->values[self::CLIENTIMGID] = null;
        $this->values[self::FROMID] = null;
        $this->values[self::TO] = null;
        $this->values[self::TOTALLEN] = null;
        $this->values[self::STARTPOS] = null;
        $this->values[self::DATALEN] = null;
        $this->values[self::AESKEY] = null;
        $this->values[self::DATA] = null;
        $this->values[self::MSGSOURCE] = null;
        $this->values[self::COMPRESSTYPE] = null;
        $this->values[self::NETTYPE] = null;
        $this->values[self::PHOTOFROM] = null;
        $this->values[self::UICREATETIME] = null;
        $this->values[self::CDNBIGIMGURL] = null;
        $this->values[self::MSGTYPE] = null;
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
     * Sets value of 'BaseRequest' property
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
     * Returns value of 'BaseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'BaseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }

    /**
     * Sets value of 'cDNMidImgSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCDNMidImgSize($value)
    {
        return $this->set(self::CDNMIDIMGSIZE, $value);
    }

    /**
     * Returns value of 'cDNMidImgSize' property
     *
     * @return integer
     */
    public function getCDNMidImgSize()
    {
        $value = $this->get(self::CDNMIDIMGSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cDNMidImgSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNMidImgSize()
    {
        return $this->get(self::CDNMIDIMGSIZE) !== null;
    }

    /**
     * Sets value of 'cDNThumbImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCDNThumbImgUrl($value)
    {
        return $this->set(self::CDNTHUMBIMGURL, $value);
    }

    /**
     * Returns value of 'cDNThumbImgUrl' property
     *
     * @return string
     */
    public function getCDNThumbImgUrl()
    {
        $value = $this->get(self::CDNTHUMBIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'cDNThumbImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNThumbImgUrl()
    {
        return $this->get(self::CDNTHUMBIMGURL) !== null;
    }

    /**
     * Sets value of 'cDNThumbImgSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCDNThumbImgSize($value)
    {
        return $this->set(self::CDNTHUMBIMGSIZE, $value);
    }

    /**
     * Returns value of 'cDNThumbImgSize' property
     *
     * @return integer
     */
    public function getCDNThumbImgSize()
    {
        $value = $this->get(self::CDNTHUMBIMGSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cDNThumbImgSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNThumbImgSize()
    {
        return $this->get(self::CDNTHUMBIMGSIZE) !== null;
    }

    /**
     * Sets value of 'cDNThumbImgHeight' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCDNThumbImgHeight($value)
    {
        return $this->set(self::CDNTHUMBIMGHEIGHT, $value);
    }

    /**
     * Returns value of 'cDNThumbImgHeight' property
     *
     * @return integer
     */
    public function getCDNThumbImgHeight()
    {
        $value = $this->get(self::CDNTHUMBIMGHEIGHT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cDNThumbImgHeight' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNThumbImgHeight()
    {
        return $this->get(self::CDNTHUMBIMGHEIGHT) !== null;
    }

    /**
     * Sets value of 'cDNThumbImgWidth' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCDNThumbImgWidth($value)
    {
        return $this->set(self::CDNTHUMBIMGWIDTH, $value);
    }

    /**
     * Returns value of 'cDNThumbImgWidth' property
     *
     * @return integer
     */
    public function getCDNThumbImgWidth()
    {
        $value = $this->get(self::CDNTHUMBIMGWIDTH);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cDNThumbImgWidth' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNThumbImgWidth()
    {
        return $this->get(self::CDNTHUMBIMGWIDTH) !== null;
    }

    /**
     * Sets value of 'cDNThumbAESKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCDNThumbAESKey($value)
    {
        return $this->set(self::CDNTHUMBAESKEY, $value);
    }

    /**
     * Returns value of 'cDNThumbAESKey' property
     *
     * @return string
     */
    public function getCDNThumbAESKey()
    {
        $value = $this->get(self::CDNTHUMBAESKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'cDNThumbAESKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNThumbAESKey()
    {
        return $this->get(self::CDNTHUMBAESKEY) !== null;
    }

    /**
     * Sets value of 'cDNBigImgSize' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCDNBigImgSize($value)
    {
        return $this->set(self::CDNBIGIMGSIZE, $value);
    }

    /**
     * Returns value of 'cDNBigImgSize' property
     *
     * @return integer
     */
    public function getCDNBigImgSize()
    {
        $value = $this->get(self::CDNBIGIMGSIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cDNBigImgSize' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNBigImgSize()
    {
        return $this->get(self::CDNBIGIMGSIZE) !== null;
    }

    /**
     * Sets value of 'reqTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setReqTime($value)
    {
        return $this->set(self::REQTIME, $value);
    }

    /**
     * Returns value of 'reqTime' property
     *
     * @return integer
     */
    public function getReqTime()
    {
        $value = $this->get(self::REQTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'reqTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasReqTime()
    {
        return $this->get(self::REQTIME) !== null;
    }

    /**
     * Sets value of 'Crc32' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCrc32($value)
    {
        return $this->set(self::CRC32, $value);
    }

    /**
     * Returns value of 'Crc32' property
     *
     * @return integer
     */
    public function getCrc32()
    {
        $value = $this->get(self::CRC32);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Crc32' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCrc32()
    {
        return $this->get(self::CRC32) !== null;
    }

    /**
     * Sets value of 'Msgforwardtype' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgforwardtype($value)
    {
        return $this->set(self::MSGFORWARDTYPE, $value);
    }

    /**
     * Returns value of 'Msgforwardtype' property
     *
     * @return integer
     */
    public function getMsgforwardtype()
    {
        $value = $this->get(self::MSGFORWARDTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Msgforwardtype' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgforwardtype()
    {
        return $this->get(self::MSGFORWARDTYPE) !== null;
    }

    /**
     * Sets value of 'hitMd5' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHitMd5($value)
    {
        return $this->set(self::HITMD5, $value);
    }

    /**
     * Returns value of 'hitMd5' property
     *
     * @return integer
     */
    public function getHitMd5()
    {
        $value = $this->get(self::HITMD5);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hitMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHitMd5()
    {
        return $this->get(self::HITMD5) !== null;
    }

    /**
     * Sets value of 'appid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAppid($value)
    {
        return $this->set(self::APPID, $value);
    }

    /**
     * Returns value of 'appid' property
     *
     * @return string
     */
    public function getAppid()
    {
        $value = $this->get(self::APPID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'appid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAppid()
    {
        return $this->get(self::APPID) !== null;
    }

    /**
     * Sets value of 'messageAction' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageAction($value)
    {
        return $this->set(self::MESSAGEACTION, $value);
    }

    /**
     * Returns value of 'messageAction' property
     *
     * @return string
     */
    public function getMessageAction()
    {
        $value = $this->get(self::MESSAGEACTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'messageAction' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessageAction()
    {
        return $this->get(self::MESSAGEACTION) !== null;
    }

    /**
     * Sets value of 'messageExt' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMessageExt($value)
    {
        return $this->set(self::MESSAGEEXT, $value);
    }

    /**
     * Returns value of 'messageExt' property
     *
     * @return string
     */
    public function getMessageExt()
    {
        $value = $this->get(self::MESSAGEEXT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'messageExt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMessageExt()
    {
        return $this->get(self::MESSAGEEXT) !== null;
    }

    /**
     * Sets value of 'md5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMd5($value)
    {
        return $this->set(self::MD5, $value);
    }

    /**
     * Returns value of 'md5' property
     *
     * @return string
     */
    public function getMd5()
    {
        $value = $this->get(self::MD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'md5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMd5()
    {
        return $this->get(self::MD5) !== null;
    }

    /**
     * Sets value of 'mediaTagName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMediaTagName($value)
    {
        return $this->set(self::MEDIATAGNAME, $value);
    }

    /**
     * Returns value of 'mediaTagName' property
     *
     * @return string
     */
    public function getMediaTagName()
    {
        $value = $this->get(self::MEDIATAGNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mediaTagName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMediaTagName()
    {
        return $this->get(self::MEDIATAGNAME) !== null;
    }

    /**
     * Sets value of 'encryVer' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEncryVer($value)
    {
        return $this->set(self::ENCRYVER, $value);
    }

    /**
     * Returns value of 'encryVer' property
     *
     * @return integer
     */
    public function getEncryVer()
    {
        $value = $this->get(self::ENCRYVER);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'encryVer' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEncryVer()
    {
        return $this->get(self::ENCRYVER) !== null;
    }

    /**
     * Sets value of 'cDNMidImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCDNMidImgUrl($value)
    {
        return $this->set(self::CDNMIDIMGURL, $value);
    }

    /**
     * Returns value of 'cDNMidImgUrl' property
     *
     * @return string
     */
    public function getCDNMidImgUrl()
    {
        $value = $this->get(self::CDNMIDIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'cDNMidImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNMidImgUrl()
    {
        return $this->get(self::CDNMIDIMGURL) !== null;
    }

    /**
     * Sets value of 'clientImgId' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setClientImgId(\SKBuiltinString $value=null)
    {
        return $this->set(self::CLIENTIMGID, $value);
    }

    /**
     * Returns value of 'clientImgId' property
     *
     * @return \SKBuiltinString
     */
    public function getClientImgId()
    {
        return $this->get(self::CLIENTIMGID);
    }

    /**
     * Returns true if 'clientImgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientImgId()
    {
        return $this->get(self::CLIENTIMGID) !== null;
    }

    /**
     * Sets value of 'fromid' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setFromid(\SKBuiltinString $value=null)
    {
        return $this->set(self::FROMID, $value);
    }

    /**
     * Returns value of 'fromid' property
     *
     * @return \SKBuiltinString
     */
    public function getFromid()
    {
        return $this->get(self::FROMID);
    }

    /**
     * Returns true if 'fromid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromid()
    {
        return $this->get(self::FROMID) !== null;
    }

    /**
     * Sets value of 'to' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setTo(\SKBuiltinString $value=null)
    {
        return $this->set(self::TO, $value);
    }

    /**
     * Returns value of 'to' property
     *
     * @return \SKBuiltinString
     */
    public function getTo()
    {
        return $this->get(self::TO);
    }

    /**
     * Returns true if 'to' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTo()
    {
        return $this->get(self::TO) !== null;
    }

    /**
     * Sets value of 'totalLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTotalLen($value)
    {
        return $this->set(self::TOTALLEN, $value);
    }

    /**
     * Returns value of 'totalLen' property
     *
     * @return integer
     */
    public function getTotalLen()
    {
        $value = $this->get(self::TOTALLEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'totalLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTotalLen()
    {
        return $this->get(self::TOTALLEN) !== null;
    }

    /**
     * Sets value of 'startPos' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStartPos($value)
    {
        return $this->set(self::STARTPOS, $value);
    }

    /**
     * Returns value of 'startPos' property
     *
     * @return integer
     */
    public function getStartPos()
    {
        $value = $this->get(self::STARTPOS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'startPos' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStartPos()
    {
        return $this->get(self::STARTPOS) !== null;
    }

    /**
     * Sets value of 'dataLen' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDataLen($value)
    {
        return $this->set(self::DATALEN, $value);
    }

    /**
     * Returns value of 'dataLen' property
     *
     * @return integer
     */
    public function getDataLen()
    {
        $value = $this->get(self::DATALEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'dataLen' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDataLen()
    {
        return $this->get(self::DATALEN) !== null;
    }

    /**
     * Sets value of 'aESKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAESKey($value)
    {
        return $this->set(self::AESKEY, $value);
    }

    /**
     * Returns value of 'aESKey' property
     *
     * @return string
     */
    public function getAESKey()
    {
        $value = $this->get(self::AESKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'aESKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAESKey()
    {
        return $this->get(self::AESKEY) !== null;
    }

    /**
     * Sets value of 'data' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setData(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return \SKBuiltinString_
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }

    /**
     * Returns true if 'data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasData()
    {
        return $this->get(self::DATA) !== null;
    }

    /**
     * Sets value of 'msgSource' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMsgSource($value)
    {
        return $this->set(self::MSGSOURCE, $value);
    }

    /**
     * Returns value of 'msgSource' property
     *
     * @return string
     */
    public function getMsgSource()
    {
        $value = $this->get(self::MSGSOURCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'msgSource' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgSource()
    {
        return $this->get(self::MSGSOURCE) !== null;
    }

    /**
     * Sets value of 'compressType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCompressType($value)
    {
        return $this->set(self::COMPRESSTYPE, $value);
    }

    /**
     * Returns value of 'compressType' property
     *
     * @return integer
     */
    public function getCompressType()
    {
        $value = $this->get(self::COMPRESSTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'compressType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCompressType()
    {
        return $this->get(self::COMPRESSTYPE) !== null;
    }

    /**
     * Sets value of 'netType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNetType($value)
    {
        return $this->set(self::NETTYPE, $value);
    }

    /**
     * Returns value of 'netType' property
     *
     * @return integer
     */
    public function getNetType()
    {
        $value = $this->get(self::NETTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'netType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNetType()
    {
        return $this->get(self::NETTYPE) !== null;
    }

    /**
     * Sets value of 'photoFrom' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPhotoFrom($value)
    {
        return $this->set(self::PHOTOFROM, $value);
    }

    /**
     * Returns value of 'photoFrom' property
     *
     * @return integer
     */
    public function getPhotoFrom()
    {
        $value = $this->get(self::PHOTOFROM);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'photoFrom' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPhotoFrom()
    {
        return $this->get(self::PHOTOFROM) !== null;
    }

    /**
     * Sets value of 'uICreateTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUICreateTime($value)
    {
        return $this->set(self::UICREATETIME, $value);
    }

    /**
     * Returns value of 'uICreateTime' property
     *
     * @return integer
     */
    public function getUICreateTime()
    {
        $value = $this->get(self::UICREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uICreateTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUICreateTime()
    {
        return $this->get(self::UICREATETIME) !== null;
    }

    /**
     * Sets value of 'cDNBigImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCDNBigImgUrl($value)
    {
        return $this->set(self::CDNBIGIMGURL, $value);
    }

    /**
     * Returns value of 'cDNBigImgUrl' property
     *
     * @return string
     */
    public function getCDNBigImgUrl()
    {
        $value = $this->get(self::CDNBIGIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'cDNBigImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCDNBigImgUrl()
    {
        return $this->get(self::CDNBIGIMGURL) !== null;
    }

    /**
     * Sets value of 'msgType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgType($value)
    {
        return $this->set(self::MSGTYPE, $value);
    }

    /**
     * Returns value of 'msgType' property
     *
     * @return integer
     */
    public function getMsgType()
    {
        $value = $this->get(self::MSGTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgType()
    {
        return $this->get(self::MSGTYPE) !== null;
    }
}
}