<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * LoginQRCodeNotify message
 */
class LoginQRCodeNotify extends \ProtobufMessage
{
    /* Field index constants */
    const UUID = 1;
    const STATE = 2;
    const WXID = 3;
    const WXNEWPASS = 4;
    const HEADIMGURL = 5;
    const PUSHLOGINURLEXPIREDTIME = 6;
    const NICKNAME = 7;
    const EFFECTIVETIME = 8;
    const T10 = 10;
    const DEVICE = 11;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::UUID => array(
            'name' => 'uuid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::STATE => array(
            'name' => 'state',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WXID => array(
            'name' => 'wxid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::WXNEWPASS => array(
            'name' => 'wxnewpass',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::HEADIMGURL => array(
            'name' => 'headImgUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PUSHLOGINURLEXPIREDTIME => array(
            'name' => 'pushLoginUrlexpiredTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NICKNAME => array(
            'name' => 'nickName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::EFFECTIVETIME => array(
            'name' => 'EffectiveTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::T10 => array(
            'name' => 't10',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEVICE => array(
            'name' => 'device',
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
        $this->values[self::UUID] = null;
        $this->values[self::STATE] = null;
        $this->values[self::WXID] = null;
        $this->values[self::WXNEWPASS] = null;
        $this->values[self::HEADIMGURL] = null;
        $this->values[self::PUSHLOGINURLEXPIREDTIME] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::EFFECTIVETIME] = null;
        $this->values[self::T10] = null;
        $this->values[self::DEVICE] = null;
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
     * Sets value of 'state' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setState($value)
    {
        return $this->set(self::STATE, $value);
    }

    /**
     * Returns value of 'state' property
     *
     * @return integer
     */
    public function getState()
    {
        $value = $this->get(self::STATE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'state' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasState()
    {
        return $this->get(self::STATE) !== null;
    }

    /**
     * Sets value of 'wxid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWxid($value)
    {
        return $this->set(self::WXID, $value);
    }

    /**
     * Returns value of 'wxid' property
     *
     * @return string
     */
    public function getWxid()
    {
        $value = $this->get(self::WXID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'wxid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWxid()
    {
        return $this->get(self::WXID) !== null;
    }

    /**
     * Sets value of 'wxnewpass' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWxnewpass($value)
    {
        return $this->set(self::WXNEWPASS, $value);
    }

    /**
     * Returns value of 'wxnewpass' property
     *
     * @return string
     */
    public function getWxnewpass()
    {
        $value = $this->get(self::WXNEWPASS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'wxnewpass' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWxnewpass()
    {
        return $this->get(self::WXNEWPASS) !== null;
    }

    /**
     * Sets value of 'headImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHeadImgUrl($value)
    {
        return $this->set(self::HEADIMGURL, $value);
    }

    /**
     * Returns value of 'headImgUrl' property
     *
     * @return string
     */
    public function getHeadImgUrl()
    {
        $value = $this->get(self::HEADIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'headImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHeadImgUrl()
    {
        return $this->get(self::HEADIMGURL) !== null;
    }

    /**
     * Sets value of 'pushLoginUrlexpiredTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPushLoginUrlexpiredTime($value)
    {
        return $this->set(self::PUSHLOGINURLEXPIREDTIME, $value);
    }

    /**
     * Returns value of 'pushLoginUrlexpiredTime' property
     *
     * @return integer
     */
    public function getPushLoginUrlexpiredTime()
    {
        $value = $this->get(self::PUSHLOGINURLEXPIREDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'pushLoginUrlexpiredTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPushLoginUrlexpiredTime()
    {
        return $this->get(self::PUSHLOGINURLEXPIREDTIME) !== null;
    }

    /**
     * Sets value of 'nickName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNickName($value)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickName' property
     *
     * @return string
     */
    public function getNickName()
    {
        $value = $this->get(self::NICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'nickName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNickName()
    {
        return $this->get(self::NICKNAME) !== null;
    }

    /**
     * Sets value of 'EffectiveTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setEffectiveTime($value)
    {
        return $this->set(self::EFFECTIVETIME, $value);
    }

    /**
     * Returns value of 'EffectiveTime' property
     *
     * @return integer
     */
    public function getEffectiveTime()
    {
        $value = $this->get(self::EFFECTIVETIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'EffectiveTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEffectiveTime()
    {
        return $this->get(self::EFFECTIVETIME) !== null;
    }

    /**
     * Sets value of 't10' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setT10($value)
    {
        return $this->set(self::T10, $value);
    }

    /**
     * Returns value of 't10' property
     *
     * @return integer
     */
    public function getT10()
    {
        $value = $this->get(self::T10);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 't10' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasT10()
    {
        return $this->get(self::T10) !== null;
    }

    /**
     * Sets value of 'device' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDevice($value)
    {
        return $this->set(self::DEVICE, $value);
    }

    /**
     * Returns value of 'device' property
     *
     * @return string
     */
    public function getDevice()
    {
        $value = $this->get(self::DEVICE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'device' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDevice()
    {
        return $this->get(self::DEVICE) !== null;
    }
}
}