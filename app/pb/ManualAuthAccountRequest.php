<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * ManualAuthAccountRequest message
 */
class ManualAuthAccountRequest extends \ProtobufMessage
{
    /* Field index constants */
    const AES = 1;
    const ECDH = 2;
    const USERNAME = 3;
    const PASSWORD1 = 4;
    const PASSWORD2 = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::AES => array(
            'name' => 'aes',
            'required' => true,
            'type' => '\AesKey'
        ),
        self::ECDH => array(
            'name' => 'ecdh',
            'required' => true,
            'type' => '\ManualAuthAccountRequest_Ecdh'
        ),
        self::USERNAME => array(
            'name' => 'userName',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PASSWORD1 => array(
            'name' => 'password1',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PASSWORD2 => array(
            'name' => 'password2',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
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
        $this->values[self::AES] = null;
        $this->values[self::ECDH] = null;
        $this->values[self::USERNAME] = null;
        $this->values[self::PASSWORD1] = null;
        $this->values[self::PASSWORD2] = null;
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
     * Sets value of 'ecdh' property
     *
     * @param \ManualAuthAccountRequest_Ecdh $value Property value
     *
     * @return null
     */
    public function setEcdh(\ManualAuthAccountRequest_Ecdh $value=null)
    {
        return $this->set(self::ECDH, $value);
    }

    /**
     * Returns value of 'ecdh' property
     *
     * @return \ManualAuthAccountRequest_Ecdh
     */
    public function getEcdh()
    {
        return $this->get(self::ECDH);
    }

    /**
     * Returns true if 'ecdh' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEcdh()
    {
        return $this->get(self::ECDH) !== null;
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
     * Sets value of 'password1' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPassword1($value)
    {
        return $this->set(self::PASSWORD1, $value);
    }

    /**
     * Returns value of 'password1' property
     *
     * @return string
     */
    public function getPassword1()
    {
        $value = $this->get(self::PASSWORD1);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'password1' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPassword1()
    {
        return $this->get(self::PASSWORD1) !== null;
    }

    /**
     * Sets value of 'password2' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setPassword2($value)
    {
        return $this->set(self::PASSWORD2, $value);
    }

    /**
     * Returns value of 'password2' property
     *
     * @return string
     */
    public function getPassword2()
    {
        $value = $this->get(self::PASSWORD2);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'password2' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPassword2()
    {
        return $this->get(self::PASSWORD2) !== null;
    }
}
}