<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * NewMsgResponeNew message
 */
class NewMsgResponeNew extends \ProtobufMessage
{
    /* Field index constants */
    const RET = 1;
    const TOUSETNAME = 2;
    const MSGID = 3;
    const CLIENTMSGID = 4;
    const CREATETIME = 5;
    const SERVERTIME = 6;
    const TYPE = 7;
    const NEWMSGID = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RET => array(
            'name' => 'Ret',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TOUSETNAME => array(
            'name' => 'toUsetName',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::MSGID => array(
            'name' => 'MsgId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTMSGID => array(
            'name' => 'ClientMsgid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CREATETIME => array(
            'name' => 'Createtime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SERVERTIME => array(
            'name' => 'servertime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'Type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWMSGID => array(
            'name' => 'newMsgId',
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
        $this->values[self::RET] = null;
        $this->values[self::TOUSETNAME] = null;
        $this->values[self::MSGID] = null;
        $this->values[self::CLIENTMSGID] = null;
        $this->values[self::CREATETIME] = null;
        $this->values[self::SERVERTIME] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::NEWMSGID] = null;
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
     * Sets value of 'Ret' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRet($value)
    {
        return $this->set(self::RET, $value);
    }

    /**
     * Returns value of 'Ret' property
     *
     * @return integer
     */
    public function getRet()
    {
        $value = $this->get(self::RET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Ret' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRet()
    {
        return $this->get(self::RET) !== null;
    }

    /**
     * Sets value of 'toUsetName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setToUsetName(\SKBuiltinString $value=null)
    {
        return $this->set(self::TOUSETNAME, $value);
    }

    /**
     * Returns value of 'toUsetName' property
     *
     * @return \SKBuiltinString
     */
    public function getToUsetName()
    {
        return $this->get(self::TOUSETNAME);
    }

    /**
     * Returns true if 'toUsetName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasToUsetName()
    {
        return $this->get(self::TOUSETNAME) !== null;
    }

    /**
     * Sets value of 'MsgId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMsgId($value)
    {
        return $this->set(self::MSGID, $value);
    }

    /**
     * Returns value of 'MsgId' property
     *
     * @return integer
     */
    public function getMsgId()
    {
        $value = $this->get(self::MSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'MsgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgId()
    {
        return $this->get(self::MSGID) !== null;
    }

    /**
     * Sets value of 'ClientMsgid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientMsgid($value)
    {
        return $this->set(self::CLIENTMSGID, $value);
    }

    /**
     * Returns value of 'ClientMsgid' property
     *
     * @return integer
     */
    public function getClientMsgid()
    {
        $value = $this->get(self::CLIENTMSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ClientMsgid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientMsgid()
    {
        return $this->get(self::CLIENTMSGID) !== null;
    }

    /**
     * Sets value of 'Createtime' property
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
     * Returns value of 'Createtime' property
     *
     * @return integer
     */
    public function getCreatetime()
    {
        $value = $this->get(self::CREATETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Createtime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCreatetime()
    {
        return $this->get(self::CREATETIME) !== null;
    }

    /**
     * Sets value of 'servertime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setServertime($value)
    {
        return $this->set(self::SERVERTIME, $value);
    }

    /**
     * Returns value of 'servertime' property
     *
     * @return integer
     */
    public function getServertime()
    {
        $value = $this->get(self::SERVERTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'servertime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasServertime()
    {
        return $this->get(self::SERVERTIME) !== null;
    }

    /**
     * Sets value of 'Type' property
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
     * Returns value of 'Type' property
     *
     * @return integer
     */
    public function getType()
    {
        $value = $this->get(self::TYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return $this->get(self::TYPE) !== null;
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
}
}