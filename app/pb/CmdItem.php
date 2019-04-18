<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * CmdItem message
 */
class CmdItem extends \ProtobufMessage
{
    /* Field index constants */
    const CMDID = 1;
    const CMDBUF = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CMDID => array(
            'name' => 'cmdId',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CMDBUF => array(
            'name' => 'cmdBuf',
            'required' => false,
            'type' => '\SKBuiltinBuffer_'
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
        $this->values[self::CMDID] = null;
        $this->values[self::CMDBUF] = null;
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
     * Sets value of 'cmdId' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCmdId($value)
    {
        return $this->set(self::CMDID, $value);
    }

    /**
     * Returns value of 'cmdId' property
     *
     * @return integer
     */
    public function getCmdId()
    {
        $value = $this->get(self::CMDID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cmdId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmdId()
    {
        return $this->get(self::CMDID) !== null;
    }

    /**
     * Sets value of 'cmdBuf' property
     *
     * @param \SKBuiltinBuffer_ $value Property value
     *
     * @return null
     */
    public function setCmdBuf(\SKBuiltinBuffer_ $value=null)
    {
        return $this->set(self::CMDBUF, $value);
    }

    /**
     * Returns value of 'cmdBuf' property
     *
     * @return \SKBuiltinBuffer_
     */
    public function getCmdBuf()
    {
        return $this->get(self::CMDBUF);
    }

    /**
     * Returns true if 'cmdBuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCmdBuf()
    {
        return $this->get(self::CMDBUF) !== null;
    }
}
}