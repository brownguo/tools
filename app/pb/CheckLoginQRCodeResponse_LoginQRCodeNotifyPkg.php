<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * LoginQRCodeNotifyPkg message embedded in CheckLoginQRCodeResponse message
 */
class CheckLoginQRCodeResponse_LoginQRCodeNotifyPkg extends \ProtobufMessage
{
    /* Field index constants */
    const NOTIFYDATA = 1;
    const OPCODE = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NOTIFYDATA => array(
            'name' => 'notifyData',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::OPCODE => array(
            'name' => 'opcode',
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
        $this->values[self::NOTIFYDATA] = null;
        $this->values[self::OPCODE] = null;
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
     * Sets value of 'notifyData' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setNotifyData(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::NOTIFYDATA, $value);
    }

    /**
     * Returns value of 'notifyData' property
     *
     * @return \SKBuiltinString_
     */
    public function getNotifyData()
    {
        return $this->get(self::NOTIFYDATA);
    }

    /**
     * Returns true if 'notifyData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNotifyData()
    {
        return $this->get(self::NOTIFYDATA) !== null;
    }

    /**
     * Sets value of 'opcode' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setOpcode($value)
    {
        return $this->set(self::OPCODE, $value);
    }

    /**
     * Returns value of 'opcode' property
     *
     * @return integer
     */
    public function getOpcode()
    {
        $value = $this->get(self::OPCODE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'opcode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOpcode()
    {
        return $this->get(self::OPCODE) !== null;
    }
}
}