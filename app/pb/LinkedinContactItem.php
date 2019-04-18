<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * LinkedinContactItem message
 */
class LinkedinContactItem extends \ProtobufMessage
{
    /* Field index constants */
    const LINKEDINNAME = 1;
    const LINKEDINMEMBERID = 2;
    const LINKEDINPUBLICURL = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::LINKEDINNAME => array(
            'name' => 'linkedinName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LINKEDINMEMBERID => array(
            'name' => 'linkedinMemberID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LINKEDINPUBLICURL => array(
            'name' => 'linkedinPublicUrl',
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
        $this->values[self::LINKEDINNAME] = null;
        $this->values[self::LINKEDINMEMBERID] = null;
        $this->values[self::LINKEDINPUBLICURL] = null;
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
     * Sets value of 'linkedinName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLinkedinName($value)
    {
        return $this->set(self::LINKEDINNAME, $value);
    }

    /**
     * Returns value of 'linkedinName' property
     *
     * @return string
     */
    public function getLinkedinName()
    {
        $value = $this->get(self::LINKEDINNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'linkedinName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLinkedinName()
    {
        return $this->get(self::LINKEDINNAME) !== null;
    }

    /**
     * Sets value of 'linkedinMemberID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLinkedinMemberID($value)
    {
        return $this->set(self::LINKEDINMEMBERID, $value);
    }

    /**
     * Returns value of 'linkedinMemberID' property
     *
     * @return string
     */
    public function getLinkedinMemberID()
    {
        $value = $this->get(self::LINKEDINMEMBERID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'linkedinMemberID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLinkedinMemberID()
    {
        return $this->get(self::LINKEDINMEMBERID) !== null;
    }

    /**
     * Sets value of 'linkedinPublicUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLinkedinPublicUrl($value)
    {
        return $this->set(self::LINKEDINPUBLICURL, $value);
    }

    /**
     * Returns value of 'linkedinPublicUrl' property
     *
     * @return string
     */
    public function getLinkedinPublicUrl()
    {
        $value = $this->get(self::LINKEDINPUBLICURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'linkedinPublicUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLinkedinPublicUrl()
    {
        return $this->get(self::LINKEDINPUBLICURL) !== null;
    }
}
}