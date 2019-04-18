<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * CustomizedInfo message
 */
class CustomizedInfo extends \ProtobufMessage
{
    /* Field index constants */
    const BRANDFLAG = 1;
    const EXTERNALINFO = 2;
    const BRANDINFO = 3;
    const BRANDICONURL = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BRANDFLAG => array(
            'name' => 'brandFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXTERNALINFO => array(
            'name' => 'externalInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BRANDINFO => array(
            'name' => 'brandInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BRANDICONURL => array(
            'name' => 'brandIconURL',
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
        $this->values[self::BRANDFLAG] = null;
        $this->values[self::EXTERNALINFO] = null;
        $this->values[self::BRANDINFO] = null;
        $this->values[self::BRANDICONURL] = null;
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
     * Sets value of 'brandFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBrandFlag($value)
    {
        return $this->set(self::BRANDFLAG, $value);
    }

    /**
     * Returns value of 'brandFlag' property
     *
     * @return integer
     */
    public function getBrandFlag()
    {
        $value = $this->get(self::BRANDFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'brandFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBrandFlag()
    {
        return $this->get(self::BRANDFLAG) !== null;
    }

    /**
     * Sets value of 'externalInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExternalInfo($value)
    {
        return $this->set(self::EXTERNALINFO, $value);
    }

    /**
     * Returns value of 'externalInfo' property
     *
     * @return string
     */
    public function getExternalInfo()
    {
        $value = $this->get(self::EXTERNALINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'externalInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExternalInfo()
    {
        return $this->get(self::EXTERNALINFO) !== null;
    }

    /**
     * Sets value of 'brandInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrandInfo($value)
    {
        return $this->set(self::BRANDINFO, $value);
    }

    /**
     * Returns value of 'brandInfo' property
     *
     * @return string
     */
    public function getBrandInfo()
    {
        $value = $this->get(self::BRANDINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'brandInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBrandInfo()
    {
        return $this->get(self::BRANDINFO) !== null;
    }

    /**
     * Sets value of 'brandIconURL' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBrandIconURL($value)
    {
        return $this->set(self::BRANDICONURL, $value);
    }

    /**
     * Returns value of 'brandIconURL' property
     *
     * @return string
     */
    public function getBrandIconURL()
    {
        $value = $this->get(self::BRANDICONURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'brandIconURL' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBrandIconURL()
    {
        return $this->get(self::BRANDICONURL) !== null;
    }
}
}