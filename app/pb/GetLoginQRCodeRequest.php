<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * GetLoginQRCodeRequest message
 */
class GetLoginQRCodeRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const AES = 2;
    const OPCODE = 3;
    const DEVICENAME = 4;
    const USERNAME = 5;
    const EXTDEVLOGINTYPE = 6;
    const HADRWAREEXTRA = 7;
    const SOFTTYPE = 8;
    const RSA = 9;

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
        self::OPCODE => array(
            'name' => 'opcode',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEVICENAME => array(
            'name' => 'deviceName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::USERNAME => array(
            'name' => 'userName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EXTDEVLOGINTYPE => array(
            'name' => 'extDevLoginType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HADRWAREEXTRA => array(
            'name' => 'hadrwareExtra',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SOFTTYPE => array(
            'name' => 'softType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::RSA => array(
            'name' => 'rsa',
            'required' => false,
            'type' => '\RSAPem'
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
        $this->values[self::OPCODE] = null;
        $this->values[self::DEVICENAME] = null;
        $this->values[self::USERNAME] = null;
        $this->values[self::EXTDEVLOGINTYPE] = null;
        $this->values[self::HADRWAREEXTRA] = null;
        $this->values[self::SOFTTYPE] = null;
        $this->values[self::RSA] = null;
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

    /**
     * Sets value of 'deviceName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDeviceName($value)
    {
        return $this->set(self::DEVICENAME, $value);
    }

    /**
     * Returns value of 'deviceName' property
     *
     * @return string
     */
    public function getDeviceName()
    {
        $value = $this->get(self::DEVICENAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'deviceName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeviceName()
    {
        return $this->get(self::DEVICENAME) !== null;
    }

    /**
     * Sets value of 'userName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserName($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'userName' property
     *
     * @return string
     */
    public function getUserName()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'userName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserName()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'extDevLoginType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExtDevLoginType($value)
    {
        return $this->set(self::EXTDEVLOGINTYPE, $value);
    }

    /**
     * Returns value of 'extDevLoginType' property
     *
     * @return integer
     */
    public function getExtDevLoginType()
    {
        $value = $this->get(self::EXTDEVLOGINTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'extDevLoginType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtDevLoginType()
    {
        return $this->get(self::EXTDEVLOGINTYPE) !== null;
    }

    /**
     * Sets value of 'hadrwareExtra' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHadrwareExtra($value)
    {
        return $this->set(self::HADRWAREEXTRA, $value);
    }

    /**
     * Returns value of 'hadrwareExtra' property
     *
     * @return string
     */
    public function getHadrwareExtra()
    {
        $value = $this->get(self::HADRWAREEXTRA);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'hadrwareExtra' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHadrwareExtra()
    {
        return $this->get(self::HADRWAREEXTRA) !== null;
    }

    /**
     * Sets value of 'softType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSoftType($value)
    {
        return $this->set(self::SOFTTYPE, $value);
    }

    /**
     * Returns value of 'softType' property
     *
     * @return string
     */
    public function getSoftType()
    {
        $value = $this->get(self::SOFTTYPE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'softType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSoftType()
    {
        return $this->get(self::SOFTTYPE) !== null;
    }

    /**
     * Sets value of 'rsa' property
     *
     * @param \RSAPem $value Property value
     *
     * @return null
     */
    public function setRsa(\RSAPem $value=null)
    {
        return $this->set(self::RSA, $value);
    }

    /**
     * Returns value of 'rsa' property
     *
     * @return \RSAPem
     */
    public function getRsa()
    {
        return $this->get(self::RSA);
    }

    /**
     * Returns true if 'rsa' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRsa()
    {
        return $this->get(self::RSA) !== null;
    }
}
}