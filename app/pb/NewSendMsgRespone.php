<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * NewSendMsgRespone message
 */
class NewSendMsgRespone extends \ProtobufMessage
{
    /* Field index constants */
    const BASE = 1;
    const COUNT = 2;
    const LIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASE => array(
            'name' => 'base',
            'required' => false,
            'type' => '\BaseResponse'
        ),
        self::COUNT => array(
            'name' => 'count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LIST => array(
            'name' => 'List',
            'repeated' => true,
            'type' => '\NewMsgResponeNew'
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
        $this->values[self::BASE] = null;
        $this->values[self::COUNT] = null;
        $this->values[self::LIST] = array();
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
     * Sets value of 'base' property
     *
     * @param \BaseResponse $value Property value
     *
     * @return null
     */
    public function setBase(\BaseResponse $value=null)
    {
        return $this->set(self::BASE, $value);
    }

    /**
     * Returns value of 'base' property
     *
     * @return \BaseResponse
     */
    public function getBase()
    {
        return $this->get(self::BASE);
    }

    /**
     * Returns true if 'base' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBase()
    {
        return $this->get(self::BASE) !== null;
    }

    /**
     * Sets value of 'count' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCount($value)
    {
        return $this->set(self::COUNT, $value);
    }

    /**
     * Returns value of 'count' property
     *
     * @return integer
     */
    public function getCount()
    {
        $value = $this->get(self::COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'count' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCount()
    {
        return $this->get(self::COUNT) !== null;
    }

    /**
     * Appends value to 'List' list
     *
     * @param \NewMsgResponeNew $value Value to append
     *
     * @return null
     */
    public function appendList(\NewMsgResponeNew $value)
    {
        return $this->append(self::LIST, $value);
    }

    /**
     * Clears 'List' list
     *
     * @return null
     */
    public function clearList()
    {
        return $this->clear(self::LIST);
    }

    /**
     * Returns 'List' list
     *
     * @return \NewMsgResponeNew[]
     */
    public function getList()
    {
        return $this->get(self::LIST);
    }

    /**
     * Returns true if 'List' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasList()
    {
        return count($this->get(self::LIST)) !== 0;
    }

    /**
     * Returns 'List' iterator
     *
     * @return \ArrayIterator
     */
    public function getListIterator()
    {
        return new \ArrayIterator($this->get(self::LIST));
    }

    /**
     * Returns element from 'List' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \NewMsgResponeNew
     */
    public function getListAt($offset)
    {
        return $this->get(self::LIST, $offset);
    }

    /**
     * Returns count of 'List' list
     *
     * @return int
     */
    public function getListCount()
    {
        return $this->count(self::LIST);
    }
}
}