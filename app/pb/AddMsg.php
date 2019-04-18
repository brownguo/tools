<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * AddMsg message
 */
class AddMsg extends \ProtobufMessage
{
    /* Field index constants */
    const MSGID = 1;
    const FROM = 2;
    const TO = 3;
    const TYPE = 4;
    const CONTENT = 5;
    const STATUS = 6;
    const IMGSTATUS = 7;
    const IMG = 8;
    const CREATETIME = 9;
    const MSGSOURCE = 10;
    const PUSHCONTENT = 11;
    const NEWMSGID = 12;
    const MSGSEQ = 13;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MSGID => array(
            'name' => 'msgid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::STATUS => array(
            'name' => 'status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGSTATUS => array(
            'name' => 'imgStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMG => array(
            'name' => 'img',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::CREATETIME => array(
            'name' => 'createtime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGSOURCE => array(
            'name' => 'msgSource',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PUSHCONTENT => array(
            'name' => 'pushcontent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NEWMSGID => array(
            'name' => 'newMsgId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGSEQ => array(
            'name' => 'msgSeq',
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
        $this->values[self::MSGID] = null;
        $this->values[self::FROM] = null;
        $this->values[self::TO] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::IMGSTATUS] = null;
        $this->values[self::IMG] = null;
        $this->values[self::CREATETIME] = null;
        $this->values[self::MSGSOURCE] = null;
        $this->values[self::PUSHCONTENT] = null;
        $this->values[self::NEWMSGID] = null;
        $this->values[self::MSGSEQ] = null;
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
     * Sets value of 'msgid' property
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
     * Returns value of 'msgid' property
     *
     * @return integer
     */
    public function getMsgid()
    {
        $value = $this->get(self::MSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgid()
    {
        return $this->get(self::MSGID) !== null;
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
     * Sets value of 'type' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setType($value)
    {
        return $this->set(self::TYPE, $value);
    }

    /**
     * Returns value of 'type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
    }

    /**
     * Sets value of 'content' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setContent(\SKBuiltinString $value=null)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return \SKBuiltinString
     */
    public function getContent()
    {
        return $this->get(self::CONTENT);
    }

    /**
     * Returns true if 'content' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContent()
    {
        return $this->get(self::CONTENT) !== null;
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
     * Sets value of 'imgStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setImgStatus($value)
    {
        return $this->set(self::IMGSTATUS, $value);
    }

    /**
     * Returns value of 'imgStatus' property
     *
     * @return integer
     */
    public function getImgStatus()
    {
        $value = $this->get(self::IMGSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'imgStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgStatus()
    {
        return $this->get(self::IMGSTATUS) !== null;
    }

    /**
     * Sets value of 'img' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setImg(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::IMG, $value);
    }

    /**
     * Returns value of 'img' property
     *
     * @return \SKBuiltinString_
     */
    public function getImg()
    {
        return $this->get(self::IMG);
    }

    /**
     * Returns true if 'img' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImg()
    {
        return $this->get(self::IMG) !== null;
    }

    /**
     * Sets value of 'createtime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCreatetime($value)
    {
        return $this->set(self::CREATETIME, $value);
    }

    /**
     * Returns value of 'createtime' property
     *
     * @return integer
     */
    public function getCreatetime()
    {
        $value = $this->get(self::CREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'createtime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreatetime()
    {
        return $this->get(self::CREATETIME) !== null;
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
     * Sets value of 'pushcontent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPushcontent($value)
    {
        return $this->set(self::PUSHCONTENT, $value);
    }

    /**
     * Returns value of 'pushcontent' property
     *
     * @return string
     */
    public function getPushcontent()
    {
        $value = $this->get(self::PUSHCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'pushcontent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPushcontent()
    {
        return $this->get(self::PUSHCONTENT) !== null;
    }

    /**
     * Sets value of 'newMsgId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNewMsgId($value)
    {
        return $this->set(self::NEWMSGID, $value);
    }

    /**
     * Returns value of 'newMsgId' property
     *
     * @return integer
     */
    public function getNewMsgId()
    {
        $value = $this->get(self::NEWMSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'newMsgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewMsgId()
    {
        return $this->get(self::NEWMSGID) !== null;
    }

    /**
     * Sets value of 'msgSeq' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgSeq($value)
    {
        return $this->set(self::MSGSEQ, $value);
    }

    /**
     * Returns value of 'msgSeq' property
     *
     * @return integer
     */
    public function getMsgSeq()
    {
        $value = $this->get(self::MSGSEQ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'msgSeq' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgSeq()
    {
        return $this->get(self::MSGSEQ) !== null;
    }
}
}