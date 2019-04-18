<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * NewSyncRequest message
 */
class NewSyncRequest extends \ProtobufMessage
{
    /* Field index constants */
    const CONTINUEFLAG = 1;
    const SELECTOR = 2;
    const TAGMSGKEY = 3;
    const SCENE = 4;
    const DEVICE = 5;
    const SYNCMSGDIGEST = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CONTINUEFLAG => array(
            'name' => 'continueflag',
            'required' => false,
            'type' => '\FLAG'
        ),
        self::SELECTOR => array(
            'name' => 'selector',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TAGMSGKEY => array(
            'name' => 'tagmsgkey',
            'required' => false,
            'type' => '\syncMsgKey'
        ),
        self::SCENE => array(
            'name' => 'scene',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DEVICE => array(
            'name' => 'device',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SYNCMSGDIGEST => array(
            'name' => 'syncmsgdigest',
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
        $this->values[self::CONTINUEFLAG] = null;
        $this->values[self::SELECTOR] = null;
        $this->values[self::TAGMSGKEY] = null;
        $this->values[self::SCENE] = null;
        $this->values[self::DEVICE] = null;
        $this->values[self::SYNCMSGDIGEST] = null;
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
     * Sets value of 'continueflag' property
     *
     * @param \FLAG $value Property value
     *
     * @return null
     */
    public function setContinueflag(\FLAG $value=null)
    {
        return $this->set(self::CONTINUEFLAG, $value);
    }

    /**
     * Returns value of 'continueflag' property
     *
     * @return \FLAG
     */
    public function getContinueflag()
    {
        return $this->get(self::CONTINUEFLAG);
    }

    /**
     * Returns true if 'continueflag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContinueflag()
    {
        return $this->get(self::CONTINUEFLAG) !== null;
    }

    /**
     * Sets value of 'selector' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSelector($value)
    {
        return $this->set(self::SELECTOR, $value);
    }

    /**
     * Returns value of 'selector' property
     *
     * @return integer
     */
    public function getSelector()
    {
        $value = $this->get(self::SELECTOR);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'selector' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSelector()
    {
        return $this->get(self::SELECTOR) !== null;
    }

    /**
     * Sets value of 'tagmsgkey' property
     *
     * @param \syncMsgKey $value Property value
     *
     * @return null
     */
    public function setTagmsgkey(\syncMsgKey $value=null)
    {
        return $this->set(self::TAGMSGKEY, $value);
    }

    /**
     * Returns value of 'tagmsgkey' property
     *
     * @return \syncMsgKey
     */
    public function getTagmsgkey()
    {
        return $this->get(self::TAGMSGKEY);
    }

    /**
     * Returns true if 'tagmsgkey' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTagmsgkey()
    {
        return $this->get(self::TAGMSGKEY) !== null;
    }

    /**
     * Sets value of 'scene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setScene($value)
    {
        return $this->set(self::SCENE, $value);
    }

    /**
     * Returns value of 'scene' property
     *
     * @return integer
     */
    public function getScene()
    {
        $value = $this->get(self::SCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'scene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasScene()
    {
        return $this->get(self::SCENE) !== null;
    }

    /**
     * Sets value of 'device' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDevice($value)
    {
        return $this->set(self::DEVICE, $value);
    }

    /**
     * Returns value of 'device' property
     *
     * @return string
     */
    public function getDevice()
    {
        $value = $this->get(self::DEVICE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'device' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDevice()
    {
        return $this->get(self::DEVICE) !== null;
    }

    /**
     * Sets value of 'syncmsgdigest' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSyncmsgdigest($value)
    {
        return $this->set(self::SYNCMSGDIGEST, $value);
    }

    /**
     * Returns value of 'syncmsgdigest' property
     *
     * @return integer
     */
    public function getSyncmsgdigest()
    {
        $value = $this->get(self::SYNCMSGDIGEST);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'syncmsgdigest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSyncmsgdigest()
    {
        return $this->get(self::SYNCMSGDIGEST) !== null;
    }
}
}