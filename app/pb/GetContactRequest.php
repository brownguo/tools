<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * GetContactRequest message
 */
class GetContactRequest extends \ProtobufMessage
{
    /* Field index constants */
    const BASEREQUEST = 1;
    const USERCOUNT = 2;
    const USERNAMELIST = 3;
    const ANTISPAMTICKETCOUNT = 4;
    const ANTISPAMTICKET = 5;
    const FROMCHATROOMCOUNT = 6;
    const FROMCHATROOM = 7;
    const GETCONTACTSCENE = 8;
    const CHATROOMACCESSVERIFYTICKET = 9;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASEREQUEST => array(
            'name' => 'baseRequest',
            'required' => false,
            'type' => '\BaseRequest'
        ),
        self::USERCOUNT => array(
            'name' => 'userCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::USERNAMELIST => array(
            'name' => 'userNameList',
            'repeated' => true,
            'type' => '\SKBuiltinString'
        ),
        self::ANTISPAMTICKETCOUNT => array(
            'name' => 'antispamTicketCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ANTISPAMTICKET => array(
            'name' => 'antispamTicket',
            'repeated' => true,
            'type' => '\SKBuiltinString'
        ),
        self::FROMCHATROOMCOUNT => array(
            'name' => 'fromChatRoomCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::FROMCHATROOM => array(
            'name' => 'fromChatRoom',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::GETCONTACTSCENE => array(
            'name' => 'getContactScene',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATROOMACCESSVERIFYTICKET => array(
            'name' => 'chatRoomAccessVerifyTicket',
            'required' => false,
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
        $this->values[self::BASEREQUEST] = null;
        $this->values[self::USERCOUNT] = null;
        $this->values[self::USERNAMELIST] = array();
        $this->values[self::ANTISPAMTICKETCOUNT] = null;
        $this->values[self::ANTISPAMTICKET] = array();
        $this->values[self::FROMCHATROOMCOUNT] = null;
        $this->values[self::FROMCHATROOM] = null;
        $this->values[self::GETCONTACTSCENE] = null;
        $this->values[self::CHATROOMACCESSVERIFYTICKET] = null;
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
     * Sets value of 'baseRequest' property
     *
     * @param \BaseRequest $value Property value
     *
     * @return null
     */
    public function setBaseRequest(\BaseRequest $value=null)
    {
        return $this->set(self::BASEREQUEST, $value);
    }

    /**
     * Returns value of 'baseRequest' property
     *
     * @return \BaseRequest
     */
    public function getBaseRequest()
    {
        return $this->get(self::BASEREQUEST);
    }

    /**
     * Returns true if 'baseRequest' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseRequest()
    {
        return $this->get(self::BASEREQUEST) !== null;
    }

    /**
     * Sets value of 'userCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setUserCount($value)
    {
        return $this->set(self::USERCOUNT, $value);
    }

    /**
     * Returns value of 'userCount' property
     *
     * @return integer
     */
    public function getUserCount()
    {
        $value = $this->get(self::USERCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'userCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserCount()
    {
        return $this->get(self::USERCOUNT) !== null;
    }

    /**
     * Appends value to 'userNameList' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendUserNameList(\SKBuiltinString $value)
    {
        return $this->append(self::USERNAMELIST, $value);
    }

    /**
     * Clears 'userNameList' list
     *
     * @return null
     */
    public function clearUserNameList()
    {
        return $this->clear(self::USERNAMELIST);
    }

    /**
     * Returns 'userNameList' list
     *
     * @return \SKBuiltinString[]
     */
    public function getUserNameList()
    {
        return $this->get(self::USERNAMELIST);
    }

    /**
     * Returns true if 'userNameList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasUserNameList()
    {
        return count($this->get(self::USERNAMELIST)) !== 0;
    }

    /**
     * Returns 'userNameList' iterator
     *
     * @return \ArrayIterator
     */
    public function getUserNameListIterator()
    {
        return new \ArrayIterator($this->get(self::USERNAMELIST));
    }

    /**
     * Returns element from 'userNameList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getUserNameListAt($offset)
    {
        return $this->get(self::USERNAMELIST, $offset);
    }

    /**
     * Returns count of 'userNameList' list
     *
     * @return int
     */
    public function getUserNameListCount()
    {
        return $this->count(self::USERNAMELIST);
    }

    /**
     * Sets value of 'antispamTicketCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAntispamTicketCount($value)
    {
        return $this->set(self::ANTISPAMTICKETCOUNT, $value);
    }

    /**
     * Returns value of 'antispamTicketCount' property
     *
     * @return integer
     */
    public function getAntispamTicketCount()
    {
        $value = $this->get(self::ANTISPAMTICKETCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'antispamTicketCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAntispamTicketCount()
    {
        return $this->get(self::ANTISPAMTICKETCOUNT) !== null;
    }

    /**
     * Appends value to 'antispamTicket' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendAntispamTicket(\SKBuiltinString $value)
    {
        return $this->append(self::ANTISPAMTICKET, $value);
    }

    /**
     * Clears 'antispamTicket' list
     *
     * @return null
     */
    public function clearAntispamTicket()
    {
        return $this->clear(self::ANTISPAMTICKET);
    }

    /**
     * Returns 'antispamTicket' list
     *
     * @return \SKBuiltinString[]
     */
    public function getAntispamTicket()
    {
        return $this->get(self::ANTISPAMTICKET);
    }

    /**
     * Returns true if 'antispamTicket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAntispamTicket()
    {
        return count($this->get(self::ANTISPAMTICKET)) !== 0;
    }

    /**
     * Returns 'antispamTicket' iterator
     *
     * @return \ArrayIterator
     */
    public function getAntispamTicketIterator()
    {
        return new \ArrayIterator($this->get(self::ANTISPAMTICKET));
    }

    /**
     * Returns element from 'antispamTicket' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getAntispamTicketAt($offset)
    {
        return $this->get(self::ANTISPAMTICKET, $offset);
    }

    /**
     * Returns count of 'antispamTicket' list
     *
     * @return int
     */
    public function getAntispamTicketCount()
    {
        return $this->count(self::ANTISPAMTICKET);
    }

    /**
     * Sets value of 'fromChatRoomCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setFromChatRoomCount($value)
    {
        return $this->set(self::FROMCHATROOMCOUNT, $value);
    }

    /**
     * Returns value of 'fromChatRoomCount' property
     *
     * @return integer
     */
    public function getFromChatRoomCount()
    {
        $value = $this->get(self::FROMCHATROOMCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'fromChatRoomCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromChatRoomCount()
    {
        return $this->get(self::FROMCHATROOMCOUNT) !== null;
    }

    /**
     * Sets value of 'fromChatRoom' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setFromChatRoom(\SKBuiltinString $value=null)
    {
        return $this->set(self::FROMCHATROOM, $value);
    }

    /**
     * Returns value of 'fromChatRoom' property
     *
     * @return \SKBuiltinString
     */
    public function getFromChatRoom()
    {
        return $this->get(self::FROMCHATROOM);
    }

    /**
     * Returns true if 'fromChatRoom' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasFromChatRoom()
    {
        return $this->get(self::FROMCHATROOM) !== null;
    }

    /**
     * Sets value of 'getContactScene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setGetContactScene($value)
    {
        return $this->set(self::GETCONTACTSCENE, $value);
    }

    /**
     * Returns value of 'getContactScene' property
     *
     * @return integer
     */
    public function getGetContactScene()
    {
        $value = $this->get(self::GETCONTACTSCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'getContactScene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasGetContactScene()
    {
        return $this->get(self::GETCONTACTSCENE) !== null;
    }

    /**
     * Sets value of 'chatRoomAccessVerifyTicket' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setChatRoomAccessVerifyTicket(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::CHATROOMACCESSVERIFYTICKET, $value);
    }

    /**
     * Returns value of 'chatRoomAccessVerifyTicket' property
     *
     * @return \SKBuiltinString_
     */
    public function getChatRoomAccessVerifyTicket()
    {
        return $this->get(self::CHATROOMACCESSVERIFYTICKET);
    }

    /**
     * Returns true if 'chatRoomAccessVerifyTicket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatRoomAccessVerifyTicket()
    {
        return $this->get(self::CHATROOMACCESSVERIFYTICKET) !== null;
    }
}
}