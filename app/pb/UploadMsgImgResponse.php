<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * UploadMsgImgResponse message
 */
class UploadMsgImgResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const MSGID = 2;
    const CLIENTIMGID = 3;
    const FROM = 4;
    const TO = 5;
    const TOTALLEN = 6;
    const STARTPOS = 7;
    const DATALEN = 8;
    const CREATETIME = 9;
    const NEWMSGID = 10;
    const AESKEY = 11;
    const FILEID = 12;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => false,
            'type' => '\BaseResponse'
        ),
        self::MSGID => array(
            'name' => 'Msgid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTIMGID => array(
            'name' => 'clientImgId',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::FROM => array(
            'name' => 'from',
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
        self::CREATETIME => array(
            'name' => 'createTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWMSGID => array(
            'name' => 'Newmsgid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AESKEY => array(
            'name' => 'Aeskey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::FILEID => array(
            'name' => 'Fileid',
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::MSGID] = null;
        $this->values[self::CLIENTIMGID] = null;
        $this->values[self::FROM] = null;
        $this->values[self::TO] = null;
        $this->values[self::TOTALLEN] = null;
        $this->values[self::STARTPOS] = null;
        $this->values[self::DATALEN] = null;
        $this->values[self::CREATETIME] = null;
        $this->values[self::NEWMSGID] = null;
        $this->values[self::AESKEY] = null;
        $this->values[self::FILEID] = null;
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
     * Sets value of 'baseResponse' property
     *
     * @param \BaseResponse $value Property value
     *
     * @return null
     */
    public function setBaseResponse(\BaseResponse $value=null)
    {
        return $this->set(self::BASERESPONSE, $value);
    }

    /**
     * Returns value of 'baseResponse' property
     *
     * @return \BaseResponse
     */
    public function getBaseResponse()
    {
        return $this->get(self::BASERESPONSE);
    }

    /**
     * Returns true if 'baseResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseResponse()
    {
        return $this->get(self::BASERESPONSE) !== null;
    }

    /**
     * Sets value of 'Msgid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgid($value)
    {
        return $this->set(self::MSGID, $value);
    }

    /**
     * Returns value of 'Msgid' property
     *
     * @return integer
     */
    public function getMsgid()
    {
        $value = $this->get(self::MSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Msgid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgid()
    {
        return $this->get(self::MSGID) !== null;
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
     * Sets value of 'from' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setFrom(\SKBuiltinString $value=null)
    {
        return $this->set(self::FROM, $value);
    }

    /**
     * Returns value of 'from' property
     *
     * @return \SKBuiltinString
     */
    public function getFrom()
    {
        return $this->get(self::FROM);
    }

    /**
     * Returns true if 'from' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFrom()
    {
        return $this->get(self::FROM) !== null;
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
     * Sets value of 'createTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreateTime($value)
    {
        return $this->set(self::CREATETIME, $value);
    }

    /**
     * Returns value of 'createTime' property
     *
     * @return integer
     */
    public function getCreateTime()
    {
        $value = $this->get(self::CREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'createTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreateTime()
    {
        return $this->get(self::CREATETIME) !== null;
    }

    /**
     * Sets value of 'Newmsgid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewmsgid($value)
    {
        return $this->set(self::NEWMSGID, $value);
    }

    /**
     * Returns value of 'Newmsgid' property
     *
     * @return integer
     */
    public function getNewmsgid()
    {
        $value = $this->get(self::NEWMSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Newmsgid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewmsgid()
    {
        return $this->get(self::NEWMSGID) !== null;
    }

    /**
     * Sets value of 'Aeskey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAeskey($value)
    {
        return $this->set(self::AESKEY, $value);
    }

    /**
     * Returns value of 'Aeskey' property
     *
     * @return string
     */
    public function getAeskey()
    {
        $value = $this->get(self::AESKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Aeskey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAeskey()
    {
        return $this->get(self::AESKEY) !== null;
    }

    /**
     * Sets value of 'Fileid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setFileid($value)
    {
        return $this->set(self::FILEID, $value);
    }

    /**
     * Returns value of 'Fileid' property
     *
     * @return string
     */
    public function getFileid()
    {
        $value = $this->get(self::FILEID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Fileid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFileid()
    {
        return $this->get(self::FILEID) !== null;
    }
}
}