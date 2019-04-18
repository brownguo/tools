<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * Ecdh message embedded in ManualAuthAccountRequest message
 */
class ManualAuthAccountRequest_Ecdh extends \ProtobufMessage
{
    /* Field index constants */
    const NID = 1;
    const ECDHKEY = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NID => array(
            'name' => 'nid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ECDHKEY => array(
            'name' => 'ecdhKey',
            'required' => true,
            'type' => '\ManualAuthAccountRequest_Ecdh_EcdhKey'
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
        $this->values[self::NID] = null;
        $this->values[self::ECDHKEY] = null;
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
     * Sets value of 'nid' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setNid($value)
    {
        return $this->set(self::NID, $value);
    }

    /**
     * Returns value of 'nid' property
     *
     * @return integer
     */
    public function getNid()
    {
        $value = $this->get(self::NID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'nid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNid()
    {
        return $this->get(self::NID) !== null;
    }

    /**
     * Sets value of 'ecdhKey' property
     *
     * @param \ManualAuthAccountRequest_Ecdh_EcdhKey $value Property value
     *
     * @return null
     */
    public function setEcdhKey(\ManualAuthAccountRequest_Ecdh_EcdhKey $value=null)
    {
        return $this->set(self::ECDHKEY, $value);
    }

    /**
     * Returns value of 'ecdhKey' property
     *
     * @return \ManualAuthAccountRequest_Ecdh_EcdhKey
     */
    public function getEcdhKey()
    {
        return $this->get(self::ECDHKEY);
    }

    /**
     * Returns true if 'ecdhKey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEcdhKey()
    {
        return $this->get(self::ECDHKEY) !== null;
    }
}
}