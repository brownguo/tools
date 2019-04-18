<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * Synckey message
 */
class Synckey extends \ProtobufMessage
{
    /* Field index constants */
    const SIZE = 1;
    const TYPE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SIZE => array(
            'name' => 'size',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TYPE => array(
            'name' => 'type',
            'repeated' => true,
            'type' => '\Synckey_Synckey_'
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
        $this->values[self::SIZE] = null;
        $this->values[self::TYPE] = array();
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
     * Sets value of 'size' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSize($value)
    {
        return $this->set(self::SIZE, $value);
    }

    /**
     * Returns value of 'size' property
     *
     * @return integer
     */
    public function getSize()
    {
        $value = $this->get(self::SIZE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'size' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSize()
    {
        return $this->get(self::SIZE) !== null;
    }

    /**
     * Appends value to 'type' list
     *
     * @param \Synckey_Synckey_ $value Value to append
     *
     * @return null
     */
    public function appendType(\Synckey_Synckey_ $value)
    {
        return $this->append(self::TYPE, $value);
    }

    /**
     * Clears 'type' list
     *
     * @return null
     */
    public function clearType()
    {
        return $this->clear(self::TYPE);
    }

    /**
     * Returns 'type' list
     *
     * @return \Synckey_Synckey_[]
     */
    public function getType()
    {
        return $this->get(self::TYPE);
    }

    /**
     * Returns true if 'type' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasType()
    {
        return count($this->get(self::TYPE)) !== 0;
    }

    /**
     * Returns 'type' iterator
     *
     * @return \ArrayIterator
     */
    public function getTypeIterator()
    {
        return new \ArrayIterator($this->get(self::TYPE));
    }

    /**
     * Returns element from 'type' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \Synckey_Synckey_
     */
    public function getTypeAt($offset)
    {
        return $this->get(self::TYPE, $offset);
    }

    /**
     * Returns count of 'type' list
     *
     * @return int
     */
    public function getTypeCount()
    {
        return $this->count(self::TYPE);
    }
}
}