<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * AutoAuthRequest message
 */
class AutoAuthRequest extends \ProtobufMessage
{
    /* Field index constants */
    const RSAREQDATA = 1;
    const AESREQDATA = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::RSAREQDATA => array(
            'name' => 'rsaReqData',
            'required' => false,
            'type' => '\AutoAuthRsaReqData'
        ),
        self::AESREQDATA => array(
            'name' => 'aesReqData',
            'required' => false,
            'type' => '\AutoAuthAesReqData'
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
        $this->values[self::RSAREQDATA] = null;
        $this->values[self::AESREQDATA] = null;
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
     * Sets value of 'rsaReqData' property
     *
     * @param \AutoAuthRsaReqData $value Property value
     *
     * @return null
     */
    public function setRsaReqData(\AutoAuthRsaReqData $value=null)
    {
        return $this->set(self::RSAREQDATA, $value);
    }

    /**
     * Returns value of 'rsaReqData' property
     *
     * @return \AutoAuthRsaReqData
     */
    public function getRsaReqData()
    {
        return $this->get(self::RSAREQDATA);
    }

    /**
     * Returns true if 'rsaReqData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRsaReqData()
    {
        return $this->get(self::RSAREQDATA) !== null;
    }

    /**
     * Sets value of 'aesReqData' property
     *
     * @param \AutoAuthAesReqData $value Property value
     *
     * @return null
     */
    public function setAesReqData(\AutoAuthAesReqData $value=null)
    {
        return $this->set(self::AESREQDATA, $value);
    }

    /**
     * Returns value of 'aesReqData' property
     *
     * @return \AutoAuthAesReqData
     */
    public function getAesReqData()
    {
        return $this->get(self::AESREQDATA);
    }

    /**
     * Returns true if 'aesReqData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAesReqData()
    {
        return $this->get(self::AESREQDATA) !== null;
    }
}
}