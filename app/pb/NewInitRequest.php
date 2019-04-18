<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * NewInitRequest message
 */
class NewInitRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASE = 1;
    const USERNAME = 2;
    const CURRENTSYNCKEY = 3;
    const MAXSYNCKEY = 4;
    const LANGUAGE = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASE => array(
            'name' => 'base',
            'required' => false,
            'type' => '\BaseRequest'
        ),
        self::USERNAME => array(
            'name' => 'userName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CURRENTSYNCKEY => array(
            'name' => 'currentSynckey',
            'required' => false,
            'type' => '\SKBuiltinBuffer_'
        ),
        self::MAXSYNCKEY => array(
            'name' => 'maxSynckey',
            'required' => false,
            'type' => '\SKBuiltinBuffer_'
        ),
        self::LANGUAGE => array(
            'name' => 'language',
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
        $this->values[self::BASE] = null;
        $this->values[self::USERNAME] = null;
        $this->values[self::CURRENTSYNCKEY] = null;
        $this->values[self::MAXSYNCKEY] = null;
        $this->values[self::LANGUAGE] = null;
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
     * Sets value of 'base' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBase(\BaseRequest $value=null)
    {
        return $this->set(self::BASE, $value);
    }

    /**
     * Returns value of 'base' property
     *
     * @return \BaseRequest
     */
    public function getBase()
    {
        return $this->get(self::BASE);
    }

    /**
     * Returns true if 'base' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBase()
    {
        return $this->get(self::BASE) !== null;
    }

    /**
     * Sets value of 'userName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUserName($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'userName' property
     *
     * @return string
     */
    public function getUserName()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'userName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserName()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'currentSynckey' property
     *
     * @param \SKBuiltinBuffer_ $value Property value
     *
     * @return null
     */
    public function setCurrentSynckey(\SKBuiltinBuffer_ $value=null)
    {
        return $this->set(self::CURRENTSYNCKEY, $value);
    }

    /**
     * Returns value of 'currentSynckey' property
     *
     * @return \SKBuiltinBuffer_
     */
    public function getCurrentSynckey()
    {
        return $this->get(self::CURRENTSYNCKEY);
    }

    /**
     * Returns true if 'currentSynckey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurrentSynckey()
    {
        return $this->get(self::CURRENTSYNCKEY) !== null;
    }

    /**
     * Sets value of 'maxSynckey' property
     *
     * @param \SKBuiltinBuffer_ $value Property value
     *
     * @return null
     */
    public function setMaxSynckey(\SKBuiltinBuffer_ $value=null)
    {
        return $this->set(self::MAXSYNCKEY, $value);
    }

    /**
     * Returns value of 'maxSynckey' property
     *
     * @return \SKBuiltinBuffer_
     */
    public function getMaxSynckey()
    {
        return $this->get(self::MAXSYNCKEY);
    }

    /**
     * Returns true if 'maxSynckey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMaxSynckey()
    {
        return $this->get(self::MAXSYNCKEY) !== null;
    }

    /**
     * Sets value of 'language' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLanguage($value)
    {
        return $this->set(self::LANGUAGE, $value);
    }

    /**
     * Returns value of 'language' property
     *
     * @return string
     */
    public function getLanguage()
    {
        $value = $this->get(self::LANGUAGE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'language' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLanguage()
    {
        return $this->get(self::LANGUAGE) !== null;
    }
}
}