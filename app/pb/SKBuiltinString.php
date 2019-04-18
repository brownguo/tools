<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * SKBuiltinString message
 */
class SKBuiltinString extends \ProtobufMessage
{
    /* Field index constants */
    const ATSTRING = 1;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ATSTRING => array(
            'name' => 'atstring',
            'required' => true,
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
        $this->values[self::ATSTRING] = null;
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
     * Sets value of 'atstring' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAtstring($value)
    {
        return $this->set(self::ATSTRING, $value);
    }

    /**
     * Returns value of 'atstring' property
     *
     * @return string
     */
    public function getAtstring()
    {
        $value = $this->get(self::ATSTRING);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'atstring' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAtstring()
    {
        return $this->get(self::ATSTRING) !== null;
    }
}
}