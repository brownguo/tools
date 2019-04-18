<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * CheckLoginQRCodeRequest message
 */
class CheckLoginQRCodeRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const AES = 2;
    const UUID = 3;
    const TIMESTAMP = 4;
    const OPCODE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => false,
            'type' => '\BaseRequest'
        ),
        self::AES => array(
            'name' => 'aes',
            'required' => false,
            'type' => '\AesKey'
        ),
        self::UUID => array(
            'name' => 'uuid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::TIMESTAMP => array(
            'name' => 'timeStamp',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::AES] = null;
        $this->values[self::UUID] = null;
        $this->values[self::TIMESTAMP] = null;
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
     * Sets value of 'baseRequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaseRequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }

    /**
     * Sets value of 'aes' property
     *
     * @param \AesKey $value Property value
     *
     * @return null
     */
    public function setAes(\AesKey $value=null)
    {
        return $this->set(self::AES, $value);
    }

    /**
     * Returns value of 'aes' property
     *
     * @return \AesKey
     */
    public function getAes()
    {
        return $this->get(self::AES);
    }

    /**
     * Returns true if 'aes' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAes()
    {
        return $this->get(self::AES) !== null;
    }

    /**
     * Sets value of 'uuid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUuid($value)
    {
        return $this->set(self::UUID, $value);
    }

    /**
     * Returns value of 'uuid' property
     *
     * @return string
     */
    public function getUuid()
    {
        $value = $this->get(self::UUID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'uuid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUuid()
    {
        return $this->get(self::UUID) !== null;
    }

    /**
     * Sets value of 'timeStamp' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setTimeStamp($value)
    {
        return $this->set(self::TIMESTAMP, $value);
    }

    /**
     * Returns value of 'timeStamp' property
     *
     * @return integer
     */
    public function getTimeStamp()
    {
        $value = $this->get(self::TIMESTAMP);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'timeStamp' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTimeStamp()
    {
        return $this->get(self::TIMESTAMP) !== null;
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