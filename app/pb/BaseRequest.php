<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * BaseRequest message
 */
class BaseRequest extends \ProtobufMessage
{
    /* Field index constants */
    const SESSIONKEY = 1;
    const UIN = 2;
    const DEVICELID = 3;
    const CLIENTVERSION = 4;
    const OSTYPE = 5;
    const SCENE = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SESSIONKEY => array(
            'name' => 'sessionKey',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::UIN => array(
            'name' => 'uin',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEVICELID => array(
            'name' => 'devicelId',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CLIENTVERSION => array(
            'name' => 'clientVersion',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::OSTYPE => array(
            'name' => 'osType',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SCENE => array(
            'name' => 'scene',
            'required' => true,
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
        $this->values[self::SESSIONKEY] = null;
        $this->values[self::UIN] = null;
        $this->values[self::DEVICELID] = null;
        $this->values[self::CLIENTVERSION] = null;
        $this->values[self::OSTYPE] = null;
        $this->values[self::SCENE] = null;
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
     * Sets value of 'sessionKey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSessionKey($value)
    {
        return $this->set(self::SESSIONKEY, $value);
    }

    /**
     * Returns value of 'sessionKey' property
     *
     * @return string
     */
    public function getSessionKey()
    {
        $value = $this->get(self::SESSIONKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'sessionKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSessionKey()
    {
        return $this->get(self::SESSIONKEY) !== null;
    }

    /**
     * Sets value of 'uin' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUin($value)
    {
        return $this->set(self::UIN, $value);
    }

    /**
     * Returns value of 'uin' property
     *
     * @return integer
     */
    public function getUin()
    {
        $value = $this->get(self::UIN);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'uin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUin()
    {
        return $this->get(self::UIN) !== null;
    }

    /**
     * Sets value of 'devicelId' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDevicelId($value)
    {
        return $this->set(self::DEVICELID, $value);
    }

    /**
     * Returns value of 'devicelId' property
     *
     * @return string
     */
    public function getDevicelId()
    {
        $value = $this->get(self::DEVICELID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'devicelId' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDevicelId()
    {
        return $this->get(self::DEVICELID) !== null;
    }

    /**
     * Sets value of 'clientVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setClientVersion($value)
    {
        return $this->set(self::CLIENTVERSION, $value);
    }

    /**
     * Returns value of 'clientVersion' property
     *
     * @return integer
     */
    public function getClientVersion()
    {
        $value = $this->get(self::CLIENTVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'clientVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClientVersion()
    {
        return $this->get(self::CLIENTVERSION) !== null;
    }

    /**
     * Sets value of 'osType' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setOsType($value)
    {
        return $this->set(self::OSTYPE, $value);
    }

    /**
     * Returns value of 'osType' property
     *
     * @return string
     */
    public function getOsType()
    {
        $value = $this->get(self::OSTYPE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'osType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasOsType()
    {
        return $this->get(self::OSTYPE) !== null;
    }

    /**
     * Sets value of 'scene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScene($value)
    {
        return $this->set(self::SCENE, $value);
    }

    /**
     * Returns value of 'scene' property
     *
     * @return integer
     */
    public function getScene()
    {
        $value = $this->get(self::SCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'scene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScene()
    {
        return $this->get(self::SCENE) !== null;
    }
}
}