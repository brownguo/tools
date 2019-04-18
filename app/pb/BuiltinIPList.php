<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * BuiltinIPList message
 */
class BuiltinIPList extends \ProtobufMessage
{
    /* Field index constants */
    const LONGCONNECTIPCOUNT = 1;
    const SHORTCONNECTIPCOUNT = 2;
    const SEQ = 5;
    const LONGCONNECTIPLIST = 3;
    const SHORTCONNECTIPLIST = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LONGCONNECTIPCOUNT => array(
            'name' => 'longConnectIpcount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SHORTCONNECTIPCOUNT => array(
            'name' => 'shortconnectIpcount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SEQ => array(
            'name' => 'seq',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::LONGCONNECTIPLIST => array(
            'name' => 'longConnectIplist',
            'repeated' => true,
            'type' => '\BuiltinIP'
        ),
        self::SHORTCONNECTIPLIST => array(
            'name' => 'shortConnectIplist',
            'repeated' => true,
            'type' => '\BuiltinIP'
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
        $this->values[self::LONGCONNECTIPCOUNT] = null;
        $this->values[self::SHORTCONNECTIPCOUNT] = null;
        $this->values[self::SEQ] = null;
        $this->values[self::LONGCONNECTIPLIST] = array();
        $this->values[self::SHORTCONNECTIPLIST] = array();
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
     * Sets value of 'longConnectIpcount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLongConnectIpcount($value)
    {
        return $this->set(self::LONGCONNECTIPCOUNT, $value);
    }

    /**
     * Returns value of 'longConnectIpcount' property
     *
     * @return integer
     */
    public function getLongConnectIpcount()
    {
        $value = $this->get(self::LONGCONNECTIPCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'longConnectIpcount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLongConnectIpcount()
    {
        return $this->get(self::LONGCONNECTIPCOUNT) !== null;
    }

    /**
     * Sets value of 'shortconnectIpcount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setShortconnectIpcount($value)
    {
        return $this->set(self::SHORTCONNECTIPCOUNT, $value);
    }

    /**
     * Returns value of 'shortconnectIpcount' property
     *
     * @return integer
     */
    public function getShortconnectIpcount()
    {
        $value = $this->get(self::SHORTCONNECTIPCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'shortconnectIpcount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShortconnectIpcount()
    {
        return $this->get(self::SHORTCONNECTIPCOUNT) !== null;
    }

    /**
     * Sets value of 'seq' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSeq($value)
    {
        return $this->set(self::SEQ, $value);
    }

    /**
     * Returns value of 'seq' property
     *
     * @return integer
     */
    public function getSeq()
    {
        $value = $this->get(self::SEQ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'seq' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSeq()
    {
        return $this->get(self::SEQ) !== null;
    }

    /**
     * Appends value to 'longConnectIplist' list
     *
     * @param \BuiltinIP $value Value to append
     *
     * @return null
     */
    public function appendLongConnectIplist(\BuiltinIP $value)
    {
        return $this->append(self::LONGCONNECTIPLIST, $value);
    }

    /**
     * Clears 'longConnectIplist' list
     *
     * @return null
     */
    public function clearLongConnectIplist()
    {
        return $this->clear(self::LONGCONNECTIPLIST);
    }

    /**
     * Returns 'longConnectIplist' list
     *
     * @return \BuiltinIP[]
     */
    public function getLongConnectIplist()
    {
        return $this->get(self::LONGCONNECTIPLIST);
    }

    /**
     * Returns true if 'longConnectIplist' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLongConnectIplist()
    {
        return count($this->get(self::LONGCONNECTIPLIST)) !== 0;
    }

    /**
     * Returns 'longConnectIplist' iterator
     *
     * @return \ArrayIterator
     */
    public function getLongConnectIplistIterator()
    {
        return new \ArrayIterator($this->get(self::LONGCONNECTIPLIST));
    }

    /**
     * Returns element from 'longConnectIplist' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \BuiltinIP
     */
    public function getLongConnectIplistAt($offset)
    {
        return $this->get(self::LONGCONNECTIPLIST, $offset);
    }

    /**
     * Returns count of 'longConnectIplist' list
     *
     * @return int
     */
    public function getLongConnectIplistCount()
    {
        return $this->count(self::LONGCONNECTIPLIST);
    }

    /**
     * Appends value to 'shortConnectIplist' list
     *
     * @param \BuiltinIP $value Value to append
     *
     * @return null
     */
    public function appendShortConnectIplist(\BuiltinIP $value)
    {
        return $this->append(self::SHORTCONNECTIPLIST, $value);
    }

    /**
     * Clears 'shortConnectIplist' list
     *
     * @return null
     */
    public function clearShortConnectIplist()
    {
        return $this->clear(self::SHORTCONNECTIPLIST);
    }

    /**
     * Returns 'shortConnectIplist' list
     *
     * @return \BuiltinIP[]
     */
    public function getShortConnectIplist()
    {
        return $this->get(self::SHORTCONNECTIPLIST);
    }

    /**
     * Returns true if 'shortConnectIplist' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasShortConnectIplist()
    {
        return count($this->get(self::SHORTCONNECTIPLIST)) !== 0;
    }

    /**
     * Returns 'shortConnectIplist' iterator
     *
     * @return \ArrayIterator
     */
    public function getShortConnectIplistIterator()
    {
        return new \ArrayIterator($this->get(self::SHORTCONNECTIPLIST));
    }

    /**
     * Returns element from 'shortConnectIplist' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \BuiltinIP
     */
    public function getShortConnectIplistAt($offset)
    {
        return $this->get(self::SHORTCONNECTIPLIST, $offset);
    }

    /**
     * Returns count of 'shortConnectIplist' list
     *
     * @return int
     */
    public function getShortConnectIplistCount()
    {
        return $this->count(self::SHORTCONNECTIPLIST);
    }
}
}