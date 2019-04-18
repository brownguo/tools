<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * GetLoginQRCodeResponse message
 */
class GetLoginQRCodeResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const QRCODE = 2;
    const UUID = 3;
    const CHECKTIME = 4;
    const AESKEY = 5;
    const EXPIREDTIME = 6;
    const BLUETOOTHBROADCASTUUID = 7;
    const BLUETOOTHBROADCASTCONTENT = 8;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => false,
            'type' => '\BaseResponse'
        ),
        self::QRCODE => array(
            'name' => 'qRCode',
            'required' => false,
            'type' => '\QRCode'
        ),
        self::UUID => array(
            'name' => 'uuid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHECKTIME => array(
            'name' => 'checkTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AESKEY => array(
            'name' => 'AESKey',
            'required' => false,
            'type' => '\AesKey'
        ),
        self::EXPIREDTIME => array(
            'name' => 'expiredTime',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BLUETOOTHBROADCASTUUID => array(
            'name' => 'blueToothBroadCastUuid',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BLUETOOTHBROADCASTCONTENT => array(
            'name' => 'blueToothBroadCastContent',
            'required' => false,
            'type' => '\SKBuiltinString_'
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::QRCODE] = null;
        $this->values[self::UUID] = null;
        $this->values[self::CHECKTIME] = null;
        $this->values[self::AESKEY] = null;
        $this->values[self::EXPIREDTIME] = null;
        $this->values[self::BLUETOOTHBROADCASTUUID] = null;
        $this->values[self::BLUETOOTHBROADCASTCONTENT] = null;
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
     * Sets value of 'baseResponse' property
     *
     * @param \BaseResponse $value Property value
     *
     * @return null
     */
    public function setBaseResponse(\BaseResponse $value=null)
    {
        return $this->set(self::BASERESPONSE, $value);
    }

    /**
     * Returns value of 'baseResponse' property
     *
     * @return \BaseResponse
     */
    public function getBaseResponse()
    {
        return $this->get(self::BASERESPONSE);
    }

    /**
     * Returns true if 'baseResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseResponse()
    {
        return $this->get(self::BASERESPONSE) !== null;
    }

    /**
     * Sets value of 'qRCode' property
     *
     * @param \QRCode $value Property value
     *
     * @return null
     */
    public function setQRCode(\QRCode $value=null)
    {
        return $this->set(self::QRCODE, $value);
    }

    /**
     * Returns value of 'qRCode' property
     *
     * @return \QRCode
     */
    public function getQRCode()
    {
        return $this->get(self::QRCODE);
    }

    /**
     * Returns true if 'qRCode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasQRCode()
    {
        return $this->get(self::QRCODE) !== null;
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
     * Sets value of 'checkTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCheckTime($value)
    {
        return $this->set(self::CHECKTIME, $value);
    }

    /**
     * Returns value of 'checkTime' property
     *
     * @return integer
     */
    public function getCheckTime()
    {
        $value = $this->get(self::CHECKTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'checkTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCheckTime()
    {
        return $this->get(self::CHECKTIME) !== null;
    }

    /**
     * Sets value of 'AESKey' property
     *
     * @param \AesKey $value Property value
     *
     * @return null
     */
    public function setAESKey(\AesKey $value=null)
    {
        return $this->set(self::AESKEY, $value);
    }

    /**
     * Returns value of 'AESKey' property
     *
     * @return \AesKey
     */
    public function getAESKey()
    {
        return $this->get(self::AESKEY);
    }

    /**
     * Returns true if 'AESKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAESKey()
    {
        return $this->get(self::AESKEY) !== null;
    }

    /**
     * Sets value of 'expiredTime' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExpiredTime($value)
    {
        return $this->set(self::EXPIREDTIME, $value);
    }

    /**
     * Returns value of 'expiredTime' property
     *
     * @return integer
     */
    public function getExpiredTime()
    {
        $value = $this->get(self::EXPIREDTIME);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'expiredTime' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExpiredTime()
    {
        return $this->get(self::EXPIREDTIME) !== null;
    }

    /**
     * Sets value of 'blueToothBroadCastUuid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBlueToothBroadCastUuid($value)
    {
        return $this->set(self::BLUETOOTHBROADCASTUUID, $value);
    }

    /**
     * Returns value of 'blueToothBroadCastUuid' property
     *
     * @return string
     */
    public function getBlueToothBroadCastUuid()
    {
        $value = $this->get(self::BLUETOOTHBROADCASTUUID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'blueToothBroadCastUuid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBlueToothBroadCastUuid()
    {
        return $this->get(self::BLUETOOTHBROADCASTUUID) !== null;
    }

    /**
     * Sets value of 'blueToothBroadCastContent' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setBlueToothBroadCastContent(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::BLUETOOTHBROADCASTCONTENT, $value);
    }

    /**
     * Returns value of 'blueToothBroadCastContent' property
     *
     * @return \SKBuiltinString_
     */
    public function getBlueToothBroadCastContent()
    {
        return $this->get(self::BLUETOOTHBROADCASTCONTENT);
    }

    /**
     * Returns true if 'blueToothBroadCastContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBlueToothBroadCastContent()
    {
        return $this->get(self::BLUETOOTHBROADCASTCONTENT) !== null;
    }
}
}