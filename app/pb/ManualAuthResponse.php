<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * ManualAuthResponse message
 */
class ManualAuthResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const UNIFYFLAG = 2;
    const AUTHPARAM = 3;
    const ACCOUNTINFO = 4;
    const DNSINFO = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => true,
            'type' => '\BaseResponse'
        ),
        self::UNIFYFLAG => array(
            'name' => 'unifyFlag',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::AUTHPARAM => array(
            'name' => 'authParam',
            'required' => true,
            'type' => '\AuthParam'
        ),
        self::ACCOUNTINFO => array(
            'name' => 'accountInfo',
            'required' => true,
            'type' => '\AccountInfo'
        ),
        self::DNSINFO => array(
            'name' => 'dnsInfo',
            'required' => true,
            'type' => '\NetworkSectResp'
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
        $this->values[self::UNIFYFLAG] = null;
        $this->values[self::AUTHPARAM] = null;
        $this->values[self::ACCOUNTINFO] = null;
        $this->values[self::DNSINFO] = null;
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
     * Sets value of 'unifyFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUnifyFlag($value)
    {
        return $this->set(self::UNIFYFLAG, $value);
    }

    /**
     * Returns value of 'unifyFlag' property
     *
     * @return integer
     */
    public function getUnifyFlag()
    {
        $value = $this->get(self::UNIFYFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'unifyFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUnifyFlag()
    {
        return $this->get(self::UNIFYFLAG) !== null;
    }

    /**
     * Sets value of 'authParam' property
     *
     * @param \AuthParam $value Property value
     *
     * @return null
     */
    public function setAuthParam(\AuthParam $value=null)
    {
        return $this->set(self::AUTHPARAM, $value);
    }

    /**
     * Returns value of 'authParam' property
     *
     * @return \AuthParam
     */
    public function getAuthParam()
    {
        return $this->get(self::AUTHPARAM);
    }

    /**
     * Returns true if 'authParam' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAuthParam()
    {
        return $this->get(self::AUTHPARAM) !== null;
    }

    /**
     * Sets value of 'accountInfo' property
     *
     * @param \AccountInfo $value Property value
     *
     * @return null
     */
    public function setAccountInfo(\AccountInfo $value=null)
    {
        return $this->set(self::ACCOUNTINFO, $value);
    }

    /**
     * Returns value of 'accountInfo' property
     *
     * @return \AccountInfo
     */
    public function getAccountInfo()
    {
        return $this->get(self::ACCOUNTINFO);
    }

    /**
     * Returns true if 'accountInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAccountInfo()
    {
        return $this->get(self::ACCOUNTINFO) !== null;
    }

    /**
     * Sets value of 'dnsInfo' property
     *
     * @param \NetworkSectResp $value Property value
     *
     * @return null
     */
    public function setDnsInfo(\NetworkSectResp $value=null)
    {
        return $this->set(self::DNSINFO, $value);
    }

    /**
     * Returns value of 'dnsInfo' property
     *
     * @return \NetworkSectResp
     */
    public function getDnsInfo()
    {
        return $this->get(self::DNSINFO);
    }

    /**
     * Returns true if 'dnsInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDnsInfo()
    {
        return $this->get(self::DNSINFO) !== null;
    }
}
}