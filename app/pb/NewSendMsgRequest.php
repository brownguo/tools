<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * NewSendMsgRequest message
 */
class NewSendMsgRequest extends \ProtobufMessage
{
    /* Field index constants */
    const CNT = 1;
    const INFO = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::CNT => array(
            'name' => 'cnt',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::INFO => array(
            'name' => 'info',
            'required' => false,
            'type' => '\ChatInfo'
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
        $this->values[self::CNT] = null;
        $this->values[self::INFO] = null;
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
     * Sets value of 'cnt' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCnt($value)
    {
        return $this->set(self::CNT, $value);
    }

    /**
     * Returns value of 'cnt' property
     *
     * @return integer
     */
    public function getCnt()
    {
        $value = $this->get(self::CNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'cnt' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCnt()
    {
        return $this->get(self::CNT) !== null;
    }

    /**
     * Sets value of 'info' property
     *
     * @param \ChatInfo $value Property value
     *
     * @return null
     */
    public function setInfo(\ChatInfo $value=null)
    {
        return $this->set(self::INFO, $value);
    }

    /**
     * Returns value of 'info' property
     *
     * @return \ChatInfo
     */
    public function getInfo()
    {
        return $this->get(self::INFO);
    }

    /**
     * Returns true if 'info' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInfo()
    {
        return $this->get(self::INFO) !== null;
    }
}
}