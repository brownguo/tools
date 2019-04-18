<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * FLAG message
 */
class FLAG extends \ProtobufMessage
{
    /* Field index constants */
    const FLAG = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::FLAG => array(
            'name' => 'flag',
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
        $this->values[self::FLAG] = null;
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
     * Sets value of 'flag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFlag($value)
    {
        return $this->set(self::FLAG, $value);
    }

    /**
     * Returns value of 'flag' property
     *
     * @return integer
     */
    public function getFlag()
    {
        $value = $this->get(self::FLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'flag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFlag()
    {
        return $this->get(self::FLAG) !== null;
    }
}
}