<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * RSAPem message
 */
class RSAPem extends \ProtobufMessage
{
    /* Field index constants */
    const LEN = 1;
    const PEM = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LEN => array(
            'name' => 'len',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PEM => array(
            'name' => 'pem',
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
        $this->values[self::LEN] = null;
        $this->values[self::PEM] = null;
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
     * Sets value of 'pem' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPem($value)
    {
        return $this->set(self::PEM, $value);
    }

    /**
     * Returns value of 'pem' property
     *
     * @return string
     */
    public function getPem()
    {
        $value = $this->get(self::PEM);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'pem' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPem()
    {
        return $this->get(self::PEM) !== null;
    }
}
}