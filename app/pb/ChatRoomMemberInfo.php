<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * ChatRoomMemberInfo message
 */
class ChatRoomMemberInfo extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const NICKNAME = 2;
    const DISPLAYNAME = 3;
    const BIGHEADIMGURL = 4;
    const SMALLHEADIMGURL = 5;
    const CHATROOMMEMBERFLAG = 6;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'userName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NICKNAME => array(
            'name' => 'nickName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::DISPLAYNAME => array(
            'name' => 'displayName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::BIGHEADIMGURL => array(
            'name' => 'bigHeadImgUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SMALLHEADIMGURL => array(
            'name' => 'smallHeadImgUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHATROOMMEMBERFLAG => array(
            'name' => 'chatroomMemberFlag',
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
        $this->values[self::NICKNAME] = null;
        $this->values[self::DISPLAYNAME] = null;
        $this->values[self::BIGHEADIMGURL] = null;
        $this->values[self::SMALLHEADIMGURL] = null;
        $this->values[self::CHATROOMMEMBERFLAG] = null;
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
     * Sets value of 'nickName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setNickName($value)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickName' property
     *
     * @return string
     */
    public function getNickName()
    {
        $value = $this->get(self::NICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'nickName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNickName()
    {
        return $this->get(self::NICKNAME) !== null;
    }

    /**
     * Sets value of 'displayName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDisplayName($value)
    {
        return $this->set(self::DISPLAYNAME, $value);
    }

    /**
     * Returns value of 'displayName' property
     *
     * @return string
     */
    public function getDisplayName()
    {
        $value = $this->get(self::DISPLAYNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'displayName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDisplayName()
    {
        return $this->get(self::DISPLAYNAME) !== null;
    }

    /**
     * Sets value of 'bigHeadImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setBigHeadImgUrl($value)
    {
        return $this->set(self::BIGHEADIMGURL, $value);
    }

    /**
     * Returns value of 'bigHeadImgUrl' property
     *
     * @return string
     */
    public function getBigHeadImgUrl()
    {
        $value = $this->get(self::BIGHEADIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'bigHeadImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBigHeadImgUrl()
    {
        return $this->get(self::BIGHEADIMGURL) !== null;
    }

    /**
     * Sets value of 'smallHeadImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSmallHeadImgUrl($value)
    {
        return $this->set(self::SMALLHEADIMGURL, $value);
    }

    /**
     * Returns value of 'smallHeadImgUrl' property
     *
     * @return string
     */
    public function getSmallHeadImgUrl()
    {
        $value = $this->get(self::SMALLHEADIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'smallHeadImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSmallHeadImgUrl()
    {
        return $this->get(self::SMALLHEADIMGURL) !== null;
    }

    /**
     * Sets value of 'chatroomMemberFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatroomMemberFlag($value)
    {
        return $this->set(self::CHATROOMMEMBERFLAG, $value);
    }

    /**
     * Returns value of 'chatroomMemberFlag' property
     *
     * @return integer
     */
    public function getChatroomMemberFlag()
    {
        $value = $this->get(self::CHATROOMMEMBERFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatroomMemberFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatroomMemberFlag()
    {
        return $this->get(self::CHATROOMMEMBERFLAG) !== null;
    }
}
}