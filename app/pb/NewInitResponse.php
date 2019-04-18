<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * NewInitResponse message
 */
class NewInitResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASE = 1;
    const CURRENTSYNCKEY = 2;
    const MAXSYNCKEY = 3;
    const CONTINUEFLAG = 4;
    const SELECTBITMAP = 5;
    const CMDCOUNT = 6;
    const CMDLISTLIST = 7;
    const RATIO = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASE => array(
            'name' => 'base',
            'required' => false,
            'type' => '\BaseResponse'
        ),
        self::CURRENTSYNCKEY => array(
            'name' => 'currentSynckey',
            'required' => false,
            'type' => '\SKBuiltinBuffer_'
        ),
        self::MAXSYNCKEY => array(
            'name' => 'maxSynckey',
            'required' => false,
            'type' => '\SKBuiltinBuffer_'
        ),
        self::CONTINUEFLAG => array(
            'name' => 'continueFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SELECTBITMAP => array(
            'name' => 'selectBitmap',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CMDCOUNT => array(
            'name' => 'cmdCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CMDLISTLIST => array(
            'name' => 'CmdListList',
            'repeated' => true,
            'type' => '\CmdItem'
        ),
        self::RATIO => array(
            'name' => 'ratio',
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
        $this->values[self::BASE] = null;
        $this->values[self::CURRENTSYNCKEY] = null;
        $this->values[self::MAXSYNCKEY] = null;
        $this->values[self::CONTINUEFLAG] = null;
        $this->values[self::SELECTBITMAP] = null;
        $this->values[self::CMDCOUNT] = null;
        $this->values[self::CMDLISTLIST] = array();
        $this->values[self::RATIO] = null;
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
     * Sets value of 'currentSynckey' property
     *
     * @param \SKBuiltinBuffer_ $value Property value
     *
     * @return null
     */
    public function setCurrentSynckey(\SKBuiltinBuffer_ $value=null)
    {
        return $this->set(self::CURRENTSYNCKEY, $value);
    }

    /**
     * Returns value of 'currentSynckey' property
     *
     * @return \SKBuiltinBuffer_
     */
    public function getCurrentSynckey()
    {
        return $this->get(self::CURRENTSYNCKEY);
    }

    /**
     * Returns true if 'currentSynckey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurrentSynckey()
    {
        return $this->get(self::CURRENTSYNCKEY) !== null;
    }

    /**
     * Sets value of 'maxSynckey' property
     *
     * @param \SKBuiltinBuffer_ $value Property value
     *
     * @return null
     */
    public function setMaxSynckey(\SKBuiltinBuffer_ $value=null)
    {
        return $this->set(self::MAXSYNCKEY, $value);
    }

    /**
     * Returns value of 'maxSynckey' property
     *
     * @return \SKBuiltinBuffer_
     */
    public function getMaxSynckey()
    {
        return $this->get(self::MAXSYNCKEY);
    }

    /**
     * Returns true if 'maxSynckey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxSynckey()
    {
        return $this->get(self::MAXSYNCKEY) !== null;
    }

    /**
     * Sets value of 'continueFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContinueFlag($value)
    {
        return $this->set(self::CONTINUEFLAG, $value);
    }

    /**
     * Returns value of 'continueFlag' property
     *
     * @return integer
     */
    public function getContinueFlag()
    {
        $value = $this->get(self::CONTINUEFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'continueFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContinueFlag()
    {
        return $this->get(self::CONTINUEFLAG) !== null;
    }

    /**
     * Sets value of 'selectBitmap' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSelectBitmap($value)
    {
        return $this->set(self::SELECTBITMAP, $value);
    }

    /**
     * Returns value of 'selectBitmap' property
     *
     * @return integer
     */
    public function getSelectBitmap()
    {
        $value = $this->get(self::SELECTBITMAP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'selectBitmap' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSelectBitmap()
    {
        return $this->get(self::SELECTBITMAP) !== null;
    }

    /**
     * Sets value of 'cmdCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCmdCount($value)
    {
        return $this->set(self::CMDCOUNT, $value);
    }

    /**
     * Returns value of 'cmdCount' property
     *
     * @return integer
     */
    public function getCmdCount()
    {
        $value = $this->get(self::CMDCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cmdCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmdCount()
    {
        return $this->get(self::CMDCOUNT) !== null;
    }

    /**
     * Appends value to 'CmdListList' list
     *
     * @param \CmdItem $value Value to append
     *
     * @return null
     */
    public function appendCmdListList(\CmdItem $value)
    {
        return $this->append(self::CMDLISTLIST, $value);
    }

    /**
     * Clears 'CmdListList' list
     *
     * @return null
     */
    public function clearCmdListList()
    {
        return $this->clear(self::CMDLISTLIST);
    }

    /**
     * Returns 'CmdListList' list
     *
     * @return \CmdItem[]
     */
    public function getCmdListList()
    {
        return $this->get(self::CMDLISTLIST);
    }

    /**
     * Returns true if 'CmdListList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmdListList()
    {
        return count($this->get(self::CMDLISTLIST)) !== 0;
    }

    /**
     * Returns 'CmdListList' iterator
     *
     * @return \ArrayIterator
     */
    public function getCmdListListIterator()
    {
        return new \ArrayIterator($this->get(self::CMDLISTLIST));
    }

    /**
     * Returns element from 'CmdListList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \CmdItem
     */
    public function getCmdListListAt($offset)
    {
        return $this->get(self::CMDLISTLIST, $offset);
    }

    /**
     * Returns count of 'CmdListList' list
     *
     * @return int
     */
    public function getCmdListListCount()
    {
        return $this->count(self::CMDLISTLIST);
    }

    /**
     * Sets value of 'ratio' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRatio($value)
    {
        return $this->set(self::RATIO, $value);
    }

    /**
     * Returns value of 'ratio' property
     *
     * @return integer
     */
    public function getRatio()
    {
        $value = $this->get(self::RATIO);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ratio' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRatio()
    {
        return $this->get(self::RATIO) !== null;
    }
}
}