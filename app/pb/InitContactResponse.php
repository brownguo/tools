<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * InitContactResponse message
 */
class InitContactResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const CURRENTWXCONTACTSEQ = 2;
    const CURRENTCHATROOMCONTACTSEQ = 3;
    const COUNTINUEFLAG = 4;
    const CONTACTUSERNAMELIST = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => false,
            'type' => '\BaseResponse'
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
        self::COUNTINUEFLAG => array(
            'name' => 'countinueFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTACTUSERNAMELIST => array(
            'name' => 'contactUsernameList',
            'repeated' => true,
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
        $this->values[self::BASERESPONSE] = null;
        $this->values[self::CURRENTWXCONTACTSEQ] = null;
        $this->values[self::CURRENTCHATROOMCONTACTSEQ] = null;
        $this->values[self::COUNTINUEFLAG] = null;
        $this->values[self::CONTACTUSERNAMELIST] = array();
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
     * Sets value of 'baseResponse' property
     *
     * @param \BaseResponse $value Property value
     *
     * @return null
     */
    public function setBaseResponse(\BaseResponse $value=null)
    {
        return $this->set(self::BASERESPONSE, $value);
    }

    /**
     * Returns value of 'baseResponse' property
     *
     * @return \BaseResponse
     */
    public function getBaseResponse()
    {
        return $this->get(self::BASERESPONSE);
    }

    /**
     * Returns true if 'baseResponse' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBaseResponse()
    {
        return $this->get(self::BASERESPONSE) !== null;
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

    /**
     * Sets value of 'countinueFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setCountinueFlag($value)
    {
        return $this->set(self::COUNTINUEFLAG, $value);
    }

    /**
     * Returns value of 'countinueFlag' property
     *
     * @return integer
     */
    public function getCountinueFlag()
    {
        $value = $this->get(self::COUNTINUEFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'countinueFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCountinueFlag()
    {
        return $this->get(self::COUNTINUEFLAG) !== null;
    }

    /**
     * Appends value to 'contactUsernameList' list
     *
     * @param string $value Value to append
     *
     * @return null
     */
    public function appendContactUsernameList($value)
    {
        return $this->append(self::CONTACTUSERNAMELIST, $value);
    }

    /**
     * Clears 'contactUsernameList' list
     *
     * @return null
     */
    public function clearContactUsernameList()
    {
        return $this->clear(self::CONTACTUSERNAMELIST);
    }

    /**
     * Returns 'contactUsernameList' list
     *
     * @return string[]
     */
    public function getContactUsernameList()
    {
        return $this->get(self::CONTACTUSERNAMELIST);
    }

    /**
     * Returns true if 'contactUsernameList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContactUsernameList()
    {
        return count($this->get(self::CONTACTUSERNAMELIST)) !== 0;
    }

    /**
     * Returns 'contactUsernameList' iterator
     *
     * @return \ArrayIterator
     */
    public function getContactUsernameListIterator()
    {
        return new \ArrayIterator($this->get(self::CONTACTUSERNAMELIST));
    }

    /**
     * Returns element from 'contactUsernameList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return string
     */
    public function getContactUsernameListAt($offset)
    {
        return $this->get(self::CONTACTUSERNAMELIST, $offset);
    }

    /**
     * Returns count of 'contactUsernameList' list
     *
     * @return int
     */
    public function getContactUsernameListCount()
    {
        return $this->count(self::CONTACTUSERNAMELIST);
    }
}
}