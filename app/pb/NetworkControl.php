<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * NetworkControl message
 */
class NetworkControl extends \ProtobufMessage
{
    /* Field index constants */
    const PORTLIST = 1;
    const TIMEOUTLIST = 2;
    const MIMNOOPINTERVAL = 3;
    const MAXNOOPINTERVAL = 4;
    const TYPINGINTERVAL = 5;
    const NOOPINTERVALTIME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::PORTLIST => array(
            'name' => 'portList',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIMEOUTLIST => array(
            'name' => 'timeoutList',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MIMNOOPINTERVAL => array(
            'name' => 'mimNoopInterval',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::MAXNOOPINTERVAL => array(
            'name' => 'maxNoopInterval',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPINGINTERVAL => array(
            'name' => 'typingInterval',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NOOPINTERVALTIME => array(
            'name' => 'noopIntervalTime',
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
        $this->values[self::PORTLIST] = null;
        $this->values[self::TIMEOUTLIST] = null;
        $this->values[self::MIMNOOPINTERVAL] = null;
        $this->values[self::MAXNOOPINTERVAL] = null;
        $this->values[self::TYPINGINTERVAL] = null;
        $this->values[self::NOOPINTERVALTIME] = null;
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
     * Sets value of 'portList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPortList($value)
    {
        return $this->set(self::PORTLIST, $value);
    }

    /**
     * Returns value of 'portList' property
     *
     * @return string
     */
    public function getPortList()
    {
        $value = $this->get(self::PORTLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'portList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPortList()
    {
        return $this->get(self::PORTLIST) !== null;
    }

    /**
     * Sets value of 'timeoutList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setTimeoutList($value)
    {
        return $this->set(self::TIMEOUTLIST, $value);
    }

    /**
     * Returns value of 'timeoutList' property
     *
     * @return string
     */
    public function getTimeoutList()
    {
        $value = $this->get(self::TIMEOUTLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'timeoutList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeoutList()
    {
        return $this->get(self::TIMEOUTLIST) !== null;
    }

    /**
     * Sets value of 'mimNoopInterval' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMimNoopInterval($value)
    {
        return $this->set(self::MIMNOOPINTERVAL, $value);
    }

    /**
     * Returns value of 'mimNoopInterval' property
     *
     * @return integer
     */
    public function getMimNoopInterval()
    {
        $value = $this->get(self::MIMNOOPINTERVAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'mimNoopInterval' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMimNoopInterval()
    {
        return $this->get(self::MIMNOOPINTERVAL) !== null;
    }

    /**
     * Sets value of 'maxNoopInterval' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMaxNoopInterval($value)
    {
        return $this->set(self::MAXNOOPINTERVAL, $value);
    }

    /**
     * Returns value of 'maxNoopInterval' property
     *
     * @return integer
     */
    public function getMaxNoopInterval()
    {
        $value = $this->get(self::MAXNOOPINTERVAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'maxNoopInterval' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxNoopInterval()
    {
        return $this->get(self::MAXNOOPINTERVAL) !== null;
    }

    /**
     * Sets value of 'typingInterval' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTypingInterval($value)
    {
        return $this->set(self::TYPINGINTERVAL, $value);
    }

    /**
     * Returns value of 'typingInterval' property
     *
     * @return integer
     */
    public function getTypingInterval()
    {
        $value = $this->get(self::TYPINGINTERVAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'typingInterval' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTypingInterval()
    {
        return $this->get(self::TYPINGINTERVAL) !== null;
    }

    /**
     * Sets value of 'noopIntervalTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNoopIntervalTime($value)
    {
        return $this->set(self::NOOPINTERVALTIME, $value);
    }

    /**
     * Returns value of 'noopIntervalTime' property
     *
     * @return integer
     */
    public function getNoopIntervalTime()
    {
        $value = $this->get(self::NOOPINTERVALTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'noopIntervalTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNoopIntervalTime()
    {
        return $this->get(self::NOOPINTERVALTIME) !== null;
    }
}
}