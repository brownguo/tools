<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * Synckey_ message embedded in Synckey message
 */
class Synckey_Synckey_ extends \ProtobufMessage
{
    /* Field index constants */
    const SYNCKEY = 1;
    const TYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SYNCKEY => array(
            'name' => 'synckey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
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
        $this->values[self::SYNCKEY] = null;
        $this->values[self::TYPE] = null;
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
     * Sets value of 'synckey' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSynckey($value)
    {
        return $this->set(self::SYNCKEY, $value);
    }

    /**
     * Returns value of 'synckey' property
     *
     * @return integer
     */
    public function getSynckey()
    {
        $value = $this->get(self::SYNCKEY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'synckey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSynckey()
    {
        return $this->get(self::SYNCKEY) !== null;
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
}
}