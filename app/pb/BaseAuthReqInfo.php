<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * BaseAuthReqInfo message
 */
class BaseAuthReqInfo extends \ProtobufMessage
{
    /* Field index constants */
    const WTLOGINREQBUFF = 1;
    const WTLOGINIMGREQI = 2;
    const WXVERIFYCODERE = 3;
    const CLIDBENCRYPTKE = 4;
    const CLIDBENCRYPTINFO = 5;
    const AUTHREQFLAG = 6;
    const AUTHTICKET = 7;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::WTLOGINREQBUFF => array(
            'name' => 'Wtloginreqbuff',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::WTLOGINIMGREQI => array(
            'name' => 'Wtloginimgreqi',
            'required' => false,
            'type' => '\WTLoginImgReqInfo'
        ),
        self::WXVERIFYCODERE => array(
            'name' => 'Wxverifycodere',
            'required' => false,
            'type' => '\WxVerifyCodeReqInfo'
        ),
        self::CLIDBENCRYPTKE => array(
            'name' => 'Clidbencryptke',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::CLIDBENCRYPTINFO => array(
            'name' => 'cliDbencryptInfo',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::AUTHREQFLAG => array(
            'name' => 'Authreqflag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUTHTICKET => array(
            'name' => 'Authticket',
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
        $this->values[self::WTLOGINREQBUFF] = null;
        $this->values[self::WTLOGINIMGREQI] = null;
        $this->values[self::WXVERIFYCODERE] = null;
        $this->values[self::CLIDBENCRYPTKE] = null;
        $this->values[self::CLIDBENCRYPTINFO] = null;
        $this->values[self::AUTHREQFLAG] = null;
        $this->values[self::AUTHTICKET] = null;
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
     * Sets value of 'Wtloginreqbuff' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setWtloginreqbuff(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::WTLOGINREQBUFF, $value);
    }

    /**
     * Returns value of 'Wtloginreqbuff' property
     *
     * @return \SKBuiltinString_
     */
    public function getWtloginreqbuff()
    {
        return $this->get(self::WTLOGINREQBUFF);
    }

    /**
     * Returns true if 'Wtloginreqbuff' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWtloginreqbuff()
    {
        return $this->get(self::WTLOGINREQBUFF) !== null;
    }

    /**
     * Sets value of 'Wtloginimgreqi' property
     *
     * @param \WTLoginImgReqInfo $value Property value
     *
     * @return null
     */
    public function setWtloginimgreqi(\WTLoginImgReqInfo $value=null)
    {
        return $this->set(self::WTLOGINIMGREQI, $value);
    }

    /**
     * Returns value of 'Wtloginimgreqi' property
     *
     * @return \WTLoginImgReqInfo
     */
    public function getWtloginimgreqi()
    {
        return $this->get(self::WTLOGINIMGREQI);
    }

    /**
     * Returns true if 'Wtloginimgreqi' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWtloginimgreqi()
    {
        return $this->get(self::WTLOGINIMGREQI) !== null;
    }

    /**
     * Sets value of 'Wxverifycodere' property
     *
     * @param \WxVerifyCodeReqInfo $value Property value
     *
     * @return null
     */
    public function setWxverifycodere(\WxVerifyCodeReqInfo $value=null)
    {
        return $this->set(self::WXVERIFYCODERE, $value);
    }

    /**
     * Returns value of 'Wxverifycodere' property
     *
     * @return \WxVerifyCodeReqInfo
     */
    public function getWxverifycodere()
    {
        return $this->get(self::WXVERIFYCODERE);
    }

    /**
     * Returns true if 'Wxverifycodere' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWxverifycodere()
    {
        return $this->get(self::WXVERIFYCODERE) !== null;
    }

    /**
     * Sets value of 'Clidbencryptke' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setClidbencryptke(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::CLIDBENCRYPTKE, $value);
    }

    /**
     * Returns value of 'Clidbencryptke' property
     *
     * @return \SKBuiltinString_
     */
    public function getClidbencryptke()
    {
        return $this->get(self::CLIDBENCRYPTKE);
    }

    /**
     * Returns true if 'Clidbencryptke' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasClidbencryptke()
    {
        return $this->get(self::CLIDBENCRYPTKE) !== null;
    }

    /**
     * Sets value of 'cliDbencryptInfo' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setCliDbencryptInfo(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::CLIDBENCRYPTINFO, $value);
    }

    /**
     * Returns value of 'cliDbencryptInfo' property
     *
     * @return \SKBuiltinString_
     */
    public function getCliDbencryptInfo()
    {
        return $this->get(self::CLIDBENCRYPTINFO);
    }

    /**
     * Returns true if 'cliDbencryptInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCliDbencryptInfo()
    {
        return $this->get(self::CLIDBENCRYPTINFO) !== null;
    }

    /**
     * Sets value of 'Authreqflag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAuthreqflag($value)
    {
        return $this->set(self::AUTHREQFLAG, $value);
    }

    /**
     * Returns value of 'Authreqflag' property
     *
     * @return integer
     */
    public function getAuthreqflag()
    {
        $value = $this->get(self::AUTHREQFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Authreqflag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthreqflag()
    {
        return $this->get(self::AUTHREQFLAG) !== null;
    }

    /**
     * Sets value of 'Authticket' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAuthticket($value)
    {
        return $this->set(self::AUTHTICKET, $value);
    }

    /**
     * Returns value of 'Authticket' property
     *
     * @return string
     */
    public function getAuthticket()
    {
        $value = $this->get(self::AUTHTICKET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Authticket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthticket()
    {
        return $this->get(self::AUTHTICKET) !== null;
    }
}
}