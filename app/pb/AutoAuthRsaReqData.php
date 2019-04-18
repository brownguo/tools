<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * AutoAuthRsaReqData message
 */
class AutoAuthRsaReqData extends \ProtobufMessage
{
    /* Field index constants */
    const AESENCRYPTKEY = 1;
    const CLIPUBECDHKEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::AESENCRYPTKEY => array(
            'name' => 'aesEncryptKey',
            'required' => false,
            'type' => '\AesKey'
        ),
        self::CLIPUBECDHKEY => array(
            'name' => 'cliPubEcdhKey',
            'required' => false,
            'type' => '\AutoAuthRsaReqData_EcdhKey'
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
        $this->values[self::AESENCRYPTKEY] = null;
        $this->values[self::CLIPUBECDHKEY] = null;
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
     * Sets value of 'aesEncryptKey' property
     *
     * @param \AesKey $value Property value
     *
     * @return null
     */
    public function setAesEncryptKey(\AesKey $value=null)
    {
        return $this->set(self::AESENCRYPTKEY, $value);
    }

    /**
     * Returns value of 'aesEncryptKey' property
     *
     * @return \AesKey
     */
    public function getAesEncryptKey()
    {
        return $this->get(self::AESENCRYPTKEY);
    }

    /**
     * Returns true if 'aesEncryptKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAesEncryptKey()
    {
        return $this->get(self::AESENCRYPTKEY) !== null;
    }

    /**
     * Sets value of 'cliPubEcdhKey' property
     *
     * @param \AutoAuthRsaReqData_EcdhKey $value Property value
     *
     * @return null
     */
    public function setCliPubEcdhKey(\AutoAuthRsaReqData_EcdhKey $value=null)
    {
        return $this->set(self::CLIPUBECDHKEY, $value);
    }

    /**
     * Returns value of 'cliPubEcdhKey' property
     *
     * @return \AutoAuthRsaReqData_EcdhKey
     */
    public function getCliPubEcdhKey()
    {
        return $this->get(self::CLIPUBECDHKEY);
    }

    /**
     * Returns true if 'cliPubEcdhKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCliPubEcdhKey()
    {
        return $this->get(self::CLIPUBECDHKEY) !== null;
    }
}
}