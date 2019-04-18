<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * NewSyncResponse message
 */
class NewSyncResponse extends \ProtobufMessage
{
    /* Field index constants */
    const RET = 1;
    const CMDLIST = 2;
    const CONTINUEFLAG = 3;
    const SYNC_KEY = 4;
    const STATUS = 5;
    const ONLINEVERSION = 6;
    const SVRTIME = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RET => array(
            'name' => 'ret',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CMDLIST => array(
            'name' => 'cmdList',
            'required' => false,
            'type' => '\CmdList'
        ),
        self::CONTINUEFLAG => array(
            'name' => 'Continueflag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SYNC_KEY => array(
            'name' => 'sync_key',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STATUS => array(
            'name' => 'Status',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ONLINEVERSION => array(
            'name' => 'Onlineversion',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SVRTIME => array(
            'name' => 'Svrtime',
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
        $this->values[self::RET] = null;
        $this->values[self::CMDLIST] = null;
        $this->values[self::CONTINUEFLAG] = null;
        $this->values[self::SYNC_KEY] = null;
        $this->values[self::STATUS] = null;
        $this->values[self::ONLINEVERSION] = null;
        $this->values[self::SVRTIME] = null;
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
     * Sets value of 'ret' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRet($value)
    {
        return $this->set(self::RET, $value);
    }

    /**
     * Returns value of 'ret' property
     *
     * @return integer
     */
    public function getRet()
    {
        $value = $this->get(self::RET);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ret' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRet()
    {
        return $this->get(self::RET) !== null;
    }

    /**
     * Sets value of 'cmdList' property
     *
     * @param \CmdList $value Property value
     *
     * @return null
     */
    public function setCmdList(\CmdList $value=null)
    {
        return $this->set(self::CMDLIST, $value);
    }

    /**
     * Returns value of 'cmdList' property
     *
     * @return \CmdList
     */
    public function getCmdList()
    {
        return $this->get(self::CMDLIST);
    }

    /**
     * Returns true if 'cmdList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmdList()
    {
        return $this->get(self::CMDLIST) !== null;
    }

    /**
     * Sets value of 'Continueflag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContinueflag($value)
    {
        return $this->set(self::CONTINUEFLAG, $value);
    }

    /**
     * Returns value of 'Continueflag' property
     *
     * @return integer
     */
    public function getContinueflag()
    {
        $value = $this->get(self::CONTINUEFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Continueflag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContinueflag()
    {
        return $this->get(self::CONTINUEFLAG) !== null;
    }

    /**
     * Sets value of 'sync_key' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSyncKey($value)
    {
        return $this->set(self::SYNC_KEY, $value);
    }

    /**
     * Returns value of 'sync_key' property
     *
     * @return string
     */
    public function getSyncKey()
    {
        $value = $this->get(self::SYNC_KEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'sync_key' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSyncKey()
    {
        return $this->get(self::SYNC_KEY) !== null;
    }

    /**
     * Sets value of 'Status' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setStatus($value)
    {
        return $this->set(self::STATUS, $value);
    }

    /**
     * Returns value of 'Status' property
     *
     * @return integer
     */
    public function getStatus()
    {
        $value = $this->get(self::STATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Status' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasStatus()
    {
        return $this->get(self::STATUS) !== null;
    }

    /**
     * Sets value of 'Onlineversion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOnlineversion($value)
    {
        return $this->set(self::ONLINEVERSION, $value);
    }

    /**
     * Returns value of 'Onlineversion' property
     *
     * @return integer
     */
    public function getOnlineversion()
    {
        $value = $this->get(self::ONLINEVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Onlineversion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOnlineversion()
    {
        return $this->get(self::ONLINEVERSION) !== null;
    }

    /**
     * Sets value of 'Svrtime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSvrtime($value)
    {
        return $this->set(self::SVRTIME, $value);
    }

    /**
     * Returns value of 'Svrtime' property
     *
     * @return integer
     */
    public function getSvrtime()
    {
        $value = $this->get(self::SVRTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Svrtime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSvrtime()
    {
        return $this->get(self::SVRTIME) !== null;
    }
}
}