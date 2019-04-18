<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * WxVerifyCodeReqInfo message
 */
class WxVerifyCodeReqInfo extends \ProtobufMessage
{
    /* Field index constants */
    const VERIFYSIGNATUR = 1;
    const VERIFYCONTENT = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::VERIFYSIGNATUR => array(
            'name' => 'Verifysignatur',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VERIFYCONTENT => array(
            'name' => 'Verifycontent',
            'required' => true,
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
        $this->values[self::VERIFYSIGNATUR] = null;
        $this->values[self::VERIFYCONTENT] = null;
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
     * Sets value of 'Verifysignatur' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVerifysignatur($value)
    {
        return $this->set(self::VERIFYSIGNATUR, $value);
    }

    /**
     * Returns value of 'Verifysignatur' property
     *
     * @return string
     */
    public function getVerifysignatur()
    {
        $value = $this->get(self::VERIFYSIGNATUR);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Verifysignatur' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifysignatur()
    {
        return $this->get(self::VERIFYSIGNATUR) !== null;
    }

    /**
     * Sets value of 'Verifycontent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVerifycontent($value)
    {
        return $this->set(self::VERIFYCONTENT, $value);
    }

    /**
     * Returns value of 'Verifycontent' property
     *
     * @return string
     */
    public function getVerifycontent()
    {
        $value = $this->get(self::VERIFYCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Verifycontent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifycontent()
    {
        return $this->get(self::VERIFYCONTENT) !== null;
    }
}
}