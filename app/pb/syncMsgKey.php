<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * syncMsgKey message
 */
class syncMsgKey extends \ProtobufMessage
{
    /* Field index constants */
    const LEN = 1;
    const MSGKEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEN => array(
            'name' => 'len',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MSGKEY => array(
            'name' => 'msgkey',
            'required' => false,
            'type' => '\Synckey'
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
        $this->values[self::LEN] = null;
        $this->values[self::MSGKEY] = null;
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
     * Sets value of 'len' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLen($value)
    {
        return $this->set(self::LEN, $value);
    }

    /**
     * Returns value of 'len' property
     *
     * @return integer
     */
    public function getLen()
    {
        $value = $this->get(self::LEN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'len' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLen()
    {
        return $this->get(self::LEN) !== null;
    }

    /**
     * Sets value of 'msgkey' property
     *
     * @param \Synckey $value Property value
     *
     * @return null
     */
    public function setMsgkey(\Synckey $value=null)
    {
        return $this->set(self::MSGKEY, $value);
    }

    /**
     * Returns value of 'msgkey' property
     *
     * @return \Synckey
     */
    public function getMsgkey()
    {
        return $this->get(self::MSGKEY);
    }

    /**
     * Returns true if 'msgkey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMsgkey()
    {
        return $this->get(self::MSGKEY) !== null;
    }
}
}