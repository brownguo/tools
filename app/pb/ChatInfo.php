<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * ChatInfo message
 */
class ChatInfo extends \ProtobufMessage
{
    /* Field index constants */
    const TOID = 1;
    const CONTENT = 2;
    const TYPE = 3;
    const UTC = 4;
    const CLIENTMSGID = 5;
    const MSGSOURCE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::TOID => array(
            'name' => 'toid',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::CONTENT => array(
            'name' => 'content',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TYPE => array(
            'name' => 'type',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::UTC => array(
            'name' => 'utc',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CLIENTMSGID => array(
            'name' => 'clientMsgId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGSOURCE => array(
            'name' => 'msgSource',
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
        $this->values[self::TOID] = null;
        $this->values[self::CONTENT] = null;
        $this->values[self::TYPE] = null;
        $this->values[self::UTC] = null;
        $this->values[self::CLIENTMSGID] = null;
        $this->values[self::MSGSOURCE] = null;
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
     * Sets value of 'toid' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setToid(\SKBuiltinString $value=null)
    {
        return $this->set(self::TOID, $value);
    }

    /**
     * Returns value of 'toid' property
     *
     * @return \SKBuiltinString
     */
    public function getToid()
    {
        return $this->get(self::TOID);
    }

    /**
     * Returns true if 'toid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasToid()
    {
        return $this->get(self::TOID) !== null;
    }

    /**
     * Sets value of 'content' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setContent($value)
    {
        return $this->set(self::CONTENT, $value);
    }

    /**
     * Returns value of 'content' property
     *
     * @return string
     */
    public function getContent()
    {
        $value = $this->get(self::CONTENT);
        return $value === null ? (string)$value : $value;
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
     * Sets value of 'utc' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUtc($value)
    {
        return $this->set(self::UTC, $value);
    }

    /**
     * Returns value of 'utc' property
     *
     * @return integer
     */
    public function getUtc()
    {
        $value = $this->get(self::UTC);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'utc' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUtc()
    {
        return $this->get(self::UTC) !== null;
    }

    /**
     * Sets value of 'clientMsgId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientMsgId($value)
    {
        return $this->set(self::CLIENTMSGID, $value);
    }

    /**
     * Returns value of 'clientMsgId' property
     *
     * @return integer
     */
    public function getClientMsgId()
    {
        $value = $this->get(self::CLIENTMSGID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'clientMsgId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientMsgId()
    {
        return $this->get(self::CLIENTMSGID) !== null;
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
}
}