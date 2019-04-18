<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * Host message
 */
class Host extends \ProtobufMessage
{
    /* Field index constants */
    const ORIGIN = 1;
    const SUBSTITUTE = 2;
    const PRIORITY = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::ORIGIN => array(
            'name' => 'origin',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SUBSTITUTE => array(
            'name' => 'substitute',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PRIORITY => array(
            'name' => 'priority',
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
        $this->values[self::ORIGIN] = null;
        $this->values[self::SUBSTITUTE] = null;
        $this->values[self::PRIORITY] = null;
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
     * Sets value of 'origin' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOrigin($value)
    {
        return $this->set(self::ORIGIN, $value);
    }

    /**
     * Returns value of 'origin' property
     *
     * @return string
     */
    public function getOrigin()
    {
        $value = $this->get(self::ORIGIN);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'origin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOrigin()
    {
        return $this->get(self::ORIGIN) !== null;
    }

    /**
     * Sets value of 'substitute' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSubstitute($value)
    {
        return $this->set(self::SUBSTITUTE, $value);
    }

    /**
     * Returns value of 'substitute' property
     *
     * @return string
     */
    public function getSubstitute()
    {
        $value = $this->get(self::SUBSTITUTE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'substitute' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSubstitute()
    {
        return $this->get(self::SUBSTITUTE) !== null;
    }

    /**
     * Sets value of 'priority' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPriority($value)
    {
        return $this->set(self::PRIORITY, $value);
    }

    /**
     * Returns value of 'priority' property
     *
     * @return integer
     */
    public function getPriority()
    {
        $value = $this->get(self::PRIORITY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'priority' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPriority()
    {
        return $this->get(self::PRIORITY) !== null;
    }
}
}