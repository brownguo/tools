<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * PhoneNumListInfo message
 */
class PhoneNumListInfo extends \ProtobufMessage
{
    /* Field index constants */
    const COUNT = 1;
    const PHONENUMLIST = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::COUNT => array(
            'name' => 'Count',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PHONENUMLIST => array(
            'name' => 'phoneNumList',
            'repeated' => true,
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
        $this->values[self::COUNT] = null;
        $this->values[self::PHONENUMLIST] = array();
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
     * Sets value of 'Count' property
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
     * Returns value of 'Count' property
     *
     * @return integer
     */
    public function getCount()
    {
        $value = $this->get(self::COUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Count' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCount()
    {
        return $this->get(self::COUNT) !== null;
    }

    /**
     * Appends value to 'phoneNumList' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendPhoneNumList($value)
    {
        return $this->append(self::PHONENUMLIST, $value);
    }

    /**
     * Clears 'phoneNumList' list
     *
     * @return null
     */
    public function clearPhoneNumList()
    {
        return $this->clear(self::PHONENUMLIST);
    }

    /**
     * Returns 'phoneNumList' list
     *
     * @return integer[]
     */
    public function getPhoneNumList()
    {
        return $this->get(self::PHONENUMLIST);
    }

    /**
     * Returns true if 'phoneNumList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPhoneNumList()
    {
        return count($this->get(self::PHONENUMLIST)) !== 0;
    }

    /**
     * Returns 'phoneNumList' iterator
     *
     * @return \ArrayIterator
     */
    public function getPhoneNumListIterator()
    {
        return new \ArrayIterator($this->get(self::PHONENUMLIST));
    }

    /**
     * Returns element from 'phoneNumList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getPhoneNumListAt($offset)
    {
        return $this->get(self::PHONENUMLIST, $offset);
    }

    /**
     * Returns count of 'phoneNumList' list
     *
     * @return int
     */
    public function getPhoneNumListCount()
    {
        return $this->count(self::PHONENUMLIST);
    }
}
}