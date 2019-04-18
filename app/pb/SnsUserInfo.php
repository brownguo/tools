<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * SnsUserInfo message
 */
class SnsUserInfo extends \ProtobufMessage
{
    /* Field index constants */
    const SNSFLAG = 1;
    const SNSBGIMGID = 2;
    const SNSBGOBJECTID = 3;
    const SNSFLAGEX = 4;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::SNSFLAG => array(
            'name' => 'snsFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SNSBGIMGID => array(
            'name' => 'snsBGImgID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SNSBGOBJECTID => array(
            'name' => 'snsBGObjectID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SNSFLAGEX => array(
            'name' => 'snsFlagEx',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
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
        $this->values[self::SNSFLAG] = null;
        $this->values[self::SNSBGIMGID] = null;
        $this->values[self::SNSBGOBJECTID] = null;
        $this->values[self::SNSFLAGEX] = null;
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
     * Sets value of 'snsFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSnsFlag($value)
    {
        return $this->set(self::SNSFLAG, $value);
    }

    /**
     * Returns value of 'snsFlag' property
     *
     * @return integer
     */
    public function getSnsFlag()
    {
        $value = $this->get(self::SNSFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'snsFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsFlag()
    {
        return $this->get(self::SNSFLAG) !== null;
    }

    /**
     * Sets value of 'snsBGImgID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSnsBGImgID($value)
    {
        return $this->set(self::SNSBGIMGID, $value);
    }

    /**
     * Returns value of 'snsBGImgID' property
     *
     * @return string
     */
    public function getSnsBGImgID()
    {
        $value = $this->get(self::SNSBGIMGID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'snsBGImgID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsBGImgID()
    {
        return $this->get(self::SNSBGIMGID) !== null;
    }

    /**
     * Sets value of 'snsBGObjectID' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSnsBGObjectID($value)
    {
        return $this->set(self::SNSBGOBJECTID, $value);
    }

    /**
     * Returns value of 'snsBGObjectID' property
     *
     * @return integer
     */
    public function getSnsBGObjectID()
    {
        $value = $this->get(self::SNSBGOBJECTID);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'snsBGObjectID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsBGObjectID()
    {
        return $this->get(self::SNSBGOBJECTID) !== null;
    }

    /**
     * Sets value of 'snsFlagEx' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSnsFlagEx($value)
    {
        return $this->set(self::SNSFLAGEX, $value);
    }

    /**
     * Returns value of 'snsFlagEx' property
     *
     * @return integer
     */
    public function getSnsFlagEx()
    {
        $value = $this->get(self::SNSFLAGEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'snsFlagEx' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsFlagEx()
    {
        return $this->get(self::SNSFLAGEX) !== null;
    }
}
}