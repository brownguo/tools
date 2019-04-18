<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * ShowStyleKey message
 */
class ShowStyleKey extends \ProtobufMessage
{
    /* Field index constants */
    const KEYCOUNT = 1;
    const KEY = 20;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::KEYCOUNT => array(
            'name' => 'keycount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::KEY => array(
            'name' => 'key',
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
        $this->values[self::KEYCOUNT] = null;
        $this->values[self::KEY] = null;
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
     * Sets value of 'keycount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setKeycount($value)
    {
        return $this->set(self::KEYCOUNT, $value);
    }

    /**
     * Returns value of 'keycount' property
     *
     * @return integer
     */
    public function getKeycount()
    {
        $value = $this->get(self::KEYCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'keycount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKeycount()
    {
        return $this->get(self::KEYCOUNT) !== null;
    }

    /**
     * Sets value of 'key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setKey($value)
    {
        return $this->set(self::KEY, $value);
    }

    /**
     * Returns value of 'key' property
     *
     * @return string
     */
    public function getKey()
    {
        $value = $this->get(self::KEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKey()
    {
        return $this->get(self::KEY) !== null;
    }
}
}