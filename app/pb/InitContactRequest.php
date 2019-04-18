<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * InitContactRequest message
 */
class InitContactRequest extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const CURRENTWXCONTACTSEQ = 2;
    const CURRENTCHATROOMCONTACTSEQ = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'username',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CURRENTWXCONTACTSEQ => array(
            'name' => 'currentWxcontactSeq',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CURRENTCHATROOMCONTACTSEQ => array(
            'name' => 'currentChatRoomContactSeq',
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
        $this->values[self::USERNAME] = null;
        $this->values[self::CURRENTWXCONTACTSEQ] = null;
        $this->values[self::CURRENTCHATROOMCONTACTSEQ] = null;
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
     * Sets value of 'username' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setUsername($value)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'username' property
     *
     * @return string
     */
    public function getUsername()
    {
        $value = $this->get(self::USERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'username' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUsername()
    {
        return $this->get(self::USERNAME) !== null;
    }

    /**
     * Sets value of 'currentWxcontactSeq' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrentWxcontactSeq($value)
    {
        return $this->set(self::CURRENTWXCONTACTSEQ, $value);
    }

    /**
     * Returns value of 'currentWxcontactSeq' property
     *
     * @return integer
     */
    public function getCurrentWxcontactSeq()
    {
        $value = $this->get(self::CURRENTWXCONTACTSEQ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'currentWxcontactSeq' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurrentWxcontactSeq()
    {
        return $this->get(self::CURRENTWXCONTACTSEQ) !== null;
    }

    /**
     * Sets value of 'currentChatRoomContactSeq' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCurrentChatRoomContactSeq($value)
    {
        return $this->set(self::CURRENTCHATROOMCONTACTSEQ, $value);
    }

    /**
     * Returns value of 'currentChatRoomContactSeq' property
     *
     * @return integer
     */
    public function getCurrentChatRoomContactSeq()
    {
        $value = $this->get(self::CURRENTCHATROOMCONTACTSEQ);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'currentChatRoomContactSeq' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCurrentChatRoomContactSeq()
    {
        return $this->get(self::CURRENTCHATROOMCONTACTSEQ) !== null;
    }
}
}