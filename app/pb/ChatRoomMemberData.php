<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * ChatRoomMemberData message
 */
class ChatRoomMemberData extends \ProtobufMessage
{
    /* Field index constants */
    const MEMBERCOUNT = 1;
    const CHATROOMMEMBER = 2;
    const INFOMASK = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::MEMBERCOUNT => array(
            'name' => 'memberCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATROOMMEMBER => array(
            'name' => 'chatRoomMember',
            'repeated' => true,
            'type' => '\ChatRoomMemberInfo'
        ),
        self::INFOMASK => array(
            'name' => 'infoMask',
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
        $this->values[self::MEMBERCOUNT] = null;
        $this->values[self::CHATROOMMEMBER] = array();
        $this->values[self::INFOMASK] = null;
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
     * Sets value of 'memberCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setMemberCount($value)
    {
        return $this->set(self::MEMBERCOUNT, $value);
    }

    /**
     * Returns value of 'memberCount' property
     *
     * @return integer
     */
    public function getMemberCount()
    {
        $value = $this->get(self::MEMBERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'memberCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMemberCount()
    {
        return $this->get(self::MEMBERCOUNT) !== null;
    }

    /**
     * Appends value to 'chatRoomMember' list
     *
     * @param \ChatRoomMemberInfo $value Value to append
     *
     * @return null
     */
    public function appendChatRoomMember(\ChatRoomMemberInfo $value)
    {
        return $this->append(self::CHATROOMMEMBER, $value);
    }

    /**
     * Clears 'chatRoomMember' list
     *
     * @return null
     */
    public function clearChatRoomMember()
    {
        return $this->clear(self::CHATROOMMEMBER);
    }

    /**
     * Returns 'chatRoomMember' list
     *
     * @return \ChatRoomMemberInfo[]
     */
    public function getChatRoomMember()
    {
        return $this->get(self::CHATROOMMEMBER);
    }

    /**
     * Returns true if 'chatRoomMember' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatRoomMember()
    {
        return count($this->get(self::CHATROOMMEMBER)) !== 0;
    }

    /**
     * Returns 'chatRoomMember' iterator
     *
     * @return \ArrayIterator
     */
    public function getChatRoomMemberIterator()
    {
        return new \ArrayIterator($this->get(self::CHATROOMMEMBER));
    }

    /**
     * Returns element from 'chatRoomMember' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \ChatRoomMemberInfo
     */
    public function getChatRoomMemberAt($offset)
    {
        return $this->get(self::CHATROOMMEMBER, $offset);
    }

    /**
     * Returns count of 'chatRoomMember' list
     *
     * @return int
     */
    public function getChatRoomMemberCount()
    {
        return $this->count(self::CHATROOMMEMBER);
    }

    /**
     * Sets value of 'infoMask' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setInfoMask($value)
    {
        return $this->set(self::INFOMASK, $value);
    }

    /**
     * Returns value of 'infoMask' property
     *
     * @return integer
     */
    public function getInfoMask()
    {
        $value = $this->get(self::INFOMASK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'infoMask' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasInfoMask()
    {
        return $this->get(self::INFOMASK) !== null;
    }
}
}