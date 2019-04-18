<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * WTLoginImgReqInfo message
 */
class WTLoginImgReqInfo extends \ProtobufMessage
{
    /* Field index constants */
    const IMGSID = 1;
    const IMGCODE = 2;
    const IMGENCRTPTKEY = 3;
    const KSID = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::IMGSID => array(
            'name' => 'Imgsid',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IMGCODE => array(
            'name' => 'Imgcode',
            'required' => true,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IMGENCRTPTKEY => array(
            'name' => 'Imgencrtptkey',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::KSID => array(
            'name' => 'Ksid',
            'required' => true,
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
        $this->values[self::IMGSID] = null;
        $this->values[self::IMGCODE] = null;
        $this->values[self::IMGENCRTPTKEY] = null;
        $this->values[self::KSID] = null;
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
     * Sets value of 'Imgsid' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgsid($value)
    {
        return $this->set(self::IMGSID, $value);
    }

    /**
     * Returns value of 'Imgsid' property
     *
     * @return string
     */
    public function getImgsid()
    {
        $value = $this->get(self::IMGSID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Imgsid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgsid()
    {
        return $this->get(self::IMGSID) !== null;
    }

    /**
     * Sets value of 'Imgcode' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgcode($value)
    {
        return $this->set(self::IMGCODE, $value);
    }

    /**
     * Returns value of 'Imgcode' property
     *
     * @return string
     */
    public function getImgcode()
    {
        $value = $this->get(self::IMGCODE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Imgcode' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgcode()
    {
        return $this->get(self::IMGCODE) !== null;
    }

    /**
     * Sets value of 'Imgencrtptkey' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setImgencrtptkey($value)
    {
        return $this->set(self::IMGENCRTPTKEY, $value);
    }

    /**
     * Returns value of 'Imgencrtptkey' property
     *
     * @return string
     */
    public function getImgencrtptkey()
    {
        $value = $this->get(self::IMGENCRTPTKEY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Imgencrtptkey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgencrtptkey()
    {
        return $this->get(self::IMGENCRTPTKEY) !== null;
    }

    /**
     * Sets value of 'Ksid' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setKsid(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::KSID, $value);
    }

    /**
     * Returns value of 'Ksid' property
     *
     * @return \SKBuiltinString_
     */
    public function getKsid()
    {
        return $this->get(self::KSID);
    }

    /**
     * Returns true if 'Ksid' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasKsid()
    {
        return $this->get(self::KSID) !== null;
    }
}
}