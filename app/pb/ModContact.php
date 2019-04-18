<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * ModContact message
 */
class ModContact extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const ALBUMBGIMGID = 36;
    const SNSUSERINFO = 37;
    const COUNTRY = 38;
    const BIGHEADIMGURL = 39;
    const SMALLHEADIMGURL = 40;
    const MYBRANDLIST = 41;
    const CUSTOMIZEDINFO = 42;
    const CHATROOMDATA = 43;
    const HEADIMGMD5 = 44;
    const ENCRYPTUSERNAME = 45;
    const IDCARDNUM = 46;
    const REALNAME = 47;
    const MOBILEHASH = 48;
    const MOBILEFULLHASH = 49;
    const ADDITIONALCONTACTLIST = 50;
    const CHATROOMVERSION = 53;
    const EXTINFO = 54;
    const CHATROOMMAXCOUNT = 55;
    const CHATROOMTYPE = 56;
    const NEWCHATROOMDATA = 57;
    const DELETEFLAG = 58;
    const DESCRIPTION = 59;
    const CARDIMGURL = 60;
    const LABELIDLIST = 61;
    const PHONENUMLISTINFO = 62;
    const WEIDIANINFO = 63;
    const CHATROOMINFOVERSION = 64;
    const DELETECONTACTSCENE = 65;
    const CHATROOMSTATUSTATUS = 66;
    const ALBUMFLAG = 35;
    const ALBUMSTYLE = 34;
    const WEIBOFLAG = 33;
    const WEIBONICKNAME = 32;
    const NICKNAME = 2;
    const PYINITIAL = 3;
    const QUANPIN = 4;
    const SEX = 5;
    const IMGBUF = 6;
    const BITMASK = 7;
    const BITVAL = 8;
    const IMGFLAG = 9;
    const REMARK = 10;
    const REMARKPYINITIAL = 11;
    const REMARKQUANPIN = 12;
    const CONTACTTYPE = 13;
    const ROOMINFOCOUNT = 14;
    const ROOMINFOLIST = 15;
    const EXTFLAG = 67;
    const DOMAINLIST_ = 16;
    const ADDCONTACTSCENE = 18;
    const PROVINCE = 19;
    const CITY = 20;
    const SIGNATURE = 21;
    const PERSONALCARD = 22;
    const HASWEIXINHDHEADIMG = 23;
    const VERIFYFLAG = 24;
    const VERIFYINFO = 25;
    const LEVEL = 26;
    const SOURCE = 27;
    const WEIBO = 28;
    const VERIFYCONTENT = 29;
    const ALIAS = 30;
    const CHATROOMOWNER = 31;
    const CHATROOMNOTIFY = 17;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'userName',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::ALBUMBGIMGID => array(
            'name' => 'albumBGImgID',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SNSUSERINFO => array(
            'name' => 'snsUserInfo',
            'required' => false,
            'type' => '\SnsUserInfo'
        ),
        self::COUNTRY => array(
            'name' => 'country',
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
        self::MYBRANDLIST => array(
            'name' => 'myBrandList',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CUSTOMIZEDINFO => array(
            'name' => 'customizedInfo',
            'required' => false,
            'type' => '\CustomizedInfo'
        ),
        self::CHATROOMDATA => array(
            'name' => 'chatRoomData',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::HEADIMGMD5 => array(
            'name' => 'headImgMd5',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ENCRYPTUSERNAME => array(
            'name' => 'encryptUserName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::IDCARDNUM => array(
            'name' => 'iDCardNum',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::REALNAME => array(
            'name' => 'realName',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MOBILEHASH => array(
            'name' => 'mobileHash',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::MOBILEFULLHASH => array(
            'name' => 'mobileFullHash',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ADDITIONALCONTACTLIST => array(
            'name' => 'additionalContactList',
            'required' => false,
            'type' => '\AdditionalContactList'
        ),
        self::CHATROOMVERSION => array(
            'name' => 'chatroomVersion',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::EXTINFO => array(
            'name' => 'extInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHATROOMMAXCOUNT => array(
            'name' => 'chatroomMaxCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATROOMTYPE => array(
            'name' => 'chatroomType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::NEWCHATROOMDATA => array(
            'name' => 'newChatroomData',
            'required' => false,
            'type' => '\ChatRoomMemberData'
        ),
        self::DELETEFLAG => array(
            'name' => 'deleteFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DESCRIPTION => array(
            'name' => 'description',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CARDIMGURL => array(
            'name' => 'cardImgUrl',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LABELIDLIST => array(
            'name' => 'labelIDList',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PHONENUMLISTINFO => array(
            'name' => 'Phonenumlistinfo',
            'required' => false,
            'type' => '\PhoneNumListInfo'
        ),
        self::WEIDIANINFO => array(
            'name' => 'Weidianinfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHATROOMINFOVERSION => array(
            'name' => 'ChatroomInfoVersion',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DELETECONTACTSCENE => array(
            'name' => 'DeletecontactScene',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CHATROOMSTATUSTATUS => array(
            'name' => 'ChatroomstatuStatus',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ALBUMFLAG => array(
            'name' => 'albumFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ALBUMSTYLE => array(
            'name' => 'albumStyle',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEIBOFLAG => array(
            'name' => 'weiboFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEIBONICKNAME => array(
            'name' => 'weiboNickname',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::NICKNAME => array(
            'name' => 'nickName',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::PYINITIAL => array(
            'name' => 'pyInitial',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::QUANPIN => array(
            'name' => 'quanPin',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::SEX => array(
            'name' => 'sex',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGBUF => array(
            'name' => 'imgBuf',
            'required' => false,
            'type' => '\SKBuiltinString_'
        ),
        self::BITMASK => array(
            'name' => 'bitMask',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::BITVAL => array(
            'name' => 'bitVal',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::IMGFLAG => array(
            'name' => 'imgFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::REMARK => array(
            'name' => 'remark',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::REMARKPYINITIAL => array(
            'name' => 'remarkPYInitial',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::REMARKQUANPIN => array(
            'name' => 'remarkQuanPin',
            'required' => false,
            'type' => '\SKBuiltinString'
        ),
        self::CONTACTTYPE => array(
            'name' => 'contactType',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMINFOCOUNT => array(
            'name' => 'roomInfoCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::ROOMINFOLIST => array(
            'name' => 'RoomInfoList',
            'repeated' => true,
            'type' => '\RoomInfo'
        ),
        self::EXTFLAG => array(
            'name' => 'Extflag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::DOMAINLIST_ => array(
            'name' => 'domainList_',
            'repeated' => true,
            'type' => '\SKBuiltinString'
        ),
        self::ADDCONTACTSCENE => array(
            'name' => 'addContactScene',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::PROVINCE => array(
            'name' => 'province',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CITY => array(
            'name' => 'city',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::SIGNATURE => array(
            'name' => 'signature',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::PERSONALCARD => array(
            'name' => 'personalCard',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::HASWEIXINHDHEADIMG => array(
            'name' => 'hasWeiXinHdHeadImg',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VERIFYFLAG => array(
            'name' => 'verifyFlag',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::VERIFYINFO => array(
            'name' => 'verifyInfo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::LEVEL => array(
            'name' => 'level',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::SOURCE => array(
            'name' => 'source',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::WEIBO => array(
            'name' => 'weibo',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::VERIFYCONTENT => array(
            'name' => 'verifyContent',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ALIAS => array(
            'name' => 'alias',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHATROOMOWNER => array(
            'name' => 'chatRoomOwner',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::CHATROOMNOTIFY => array(
            'name' => 'chatRoomNotify',
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
        $this->values[self::ALBUMBGIMGID] = null;
        $this->values[self::SNSUSERINFO] = null;
        $this->values[self::COUNTRY] = null;
        $this->values[self::BIGHEADIMGURL] = null;
        $this->values[self::SMALLHEADIMGURL] = null;
        $this->values[self::MYBRANDLIST] = null;
        $this->values[self::CUSTOMIZEDINFO] = null;
        $this->values[self::CHATROOMDATA] = null;
        $this->values[self::HEADIMGMD5] = null;
        $this->values[self::ENCRYPTUSERNAME] = null;
        $this->values[self::IDCARDNUM] = null;
        $this->values[self::REALNAME] = null;
        $this->values[self::MOBILEHASH] = null;
        $this->values[self::MOBILEFULLHASH] = null;
        $this->values[self::ADDITIONALCONTACTLIST] = null;
        $this->values[self::CHATROOMVERSION] = null;
        $this->values[self::EXTINFO] = null;
        $this->values[self::CHATROOMMAXCOUNT] = null;
        $this->values[self::CHATROOMTYPE] = null;
        $this->values[self::NEWCHATROOMDATA] = null;
        $this->values[self::DELETEFLAG] = null;
        $this->values[self::DESCRIPTION] = null;
        $this->values[self::CARDIMGURL] = null;
        $this->values[self::LABELIDLIST] = null;
        $this->values[self::PHONENUMLISTINFO] = null;
        $this->values[self::WEIDIANINFO] = null;
        $this->values[self::CHATROOMINFOVERSION] = null;
        $this->values[self::DELETECONTACTSCENE] = null;
        $this->values[self::CHATROOMSTATUSTATUS] = null;
        $this->values[self::ALBUMFLAG] = null;
        $this->values[self::ALBUMSTYLE] = null;
        $this->values[self::WEIBOFLAG] = null;
        $this->values[self::WEIBONICKNAME] = null;
        $this->values[self::NICKNAME] = null;
        $this->values[self::PYINITIAL] = null;
        $this->values[self::QUANPIN] = null;
        $this->values[self::SEX] = null;
        $this->values[self::IMGBUF] = null;
        $this->values[self::BITMASK] = null;
        $this->values[self::BITVAL] = null;
        $this->values[self::IMGFLAG] = null;
        $this->values[self::REMARK] = null;
        $this->values[self::REMARKPYINITIAL] = null;
        $this->values[self::REMARKQUANPIN] = null;
        $this->values[self::CONTACTTYPE] = null;
        $this->values[self::ROOMINFOCOUNT] = null;
        $this->values[self::ROOMINFOLIST] = array();
        $this->values[self::EXTFLAG] = null;
        $this->values[self::DOMAINLIST_] = array();
        $this->values[self::ADDCONTACTSCENE] = null;
        $this->values[self::PROVINCE] = null;
        $this->values[self::CITY] = null;
        $this->values[self::SIGNATURE] = null;
        $this->values[self::PERSONALCARD] = null;
        $this->values[self::HASWEIXINHDHEADIMG] = null;
        $this->values[self::VERIFYFLAG] = null;
        $this->values[self::VERIFYINFO] = null;
        $this->values[self::LEVEL] = null;
        $this->values[self::SOURCE] = null;
        $this->values[self::WEIBO] = null;
        $this->values[self::VERIFYCONTENT] = null;
        $this->values[self::ALIAS] = null;
        $this->values[self::CHATROOMOWNER] = null;
        $this->values[self::CHATROOMNOTIFY] = null;
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
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setUserName(\SKBuiltinString $value=null)
    {
        return $this->set(self::USERNAME, $value);
    }

    /**
     * Returns value of 'userName' property
     *
     * @return \SKBuiltinString
     */
    public function getUserName()
    {
        return $this->get(self::USERNAME);
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
     * Sets value of 'albumBGImgID' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAlbumBGImgID($value)
    {
        return $this->set(self::ALBUMBGIMGID, $value);
    }

    /**
     * Returns value of 'albumBGImgID' property
     *
     * @return string
     */
    public function getAlbumBGImgID()
    {
        $value = $this->get(self::ALBUMBGIMGID);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'albumBGImgID' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlbumBGImgID()
    {
        return $this->get(self::ALBUMBGIMGID) !== null;
    }

    /**
     * Sets value of 'snsUserInfo' property
     *
     * @param \SnsUserInfo $value Property value
     *
     * @return null
     */
    public function setSnsUserInfo(\SnsUserInfo $value=null)
    {
        return $this->set(self::SNSUSERINFO, $value);
    }

    /**
     * Returns value of 'snsUserInfo' property
     *
     * @return \SnsUserInfo
     */
    public function getSnsUserInfo()
    {
        return $this->get(self::SNSUSERINFO);
    }

    /**
     * Returns true if 'snsUserInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSnsUserInfo()
    {
        return $this->get(self::SNSUSERINFO) !== null;
    }

    /**
     * Sets value of 'country' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCountry($value)
    {
        return $this->set(self::COUNTRY, $value);
    }

    /**
     * Returns value of 'country' property
     *
     * @return string
     */
    public function getCountry()
    {
        $value = $this->get(self::COUNTRY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'country' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCountry()
    {
        return $this->get(self::COUNTRY) !== null;
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
     * Sets value of 'myBrandList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMyBrandList($value)
    {
        return $this->set(self::MYBRANDLIST, $value);
    }

    /**
     * Returns value of 'myBrandList' property
     *
     * @return string
     */
    public function getMyBrandList()
    {
        $value = $this->get(self::MYBRANDLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'myBrandList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMyBrandList()
    {
        return $this->get(self::MYBRANDLIST) !== null;
    }

    /**
     * Sets value of 'customizedInfo' property
     *
     * @param \CustomizedInfo $value Property value
     *
     * @return null
     */
    public function setCustomizedInfo(\CustomizedInfo $value=null)
    {
        return $this->set(self::CUSTOMIZEDINFO, $value);
    }

    /**
     * Returns value of 'customizedInfo' property
     *
     * @return \CustomizedInfo
     */
    public function getCustomizedInfo()
    {
        return $this->get(self::CUSTOMIZEDINFO);
    }

    /**
     * Returns true if 'customizedInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCustomizedInfo()
    {
        return $this->get(self::CUSTOMIZEDINFO) !== null;
    }

    /**
     * Sets value of 'chatRoomData' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChatRoomData($value)
    {
        return $this->set(self::CHATROOMDATA, $value);
    }

    /**
     * Returns value of 'chatRoomData' property
     *
     * @return string
     */
    public function getChatRoomData()
    {
        $value = $this->get(self::CHATROOMDATA);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'chatRoomData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatRoomData()
    {
        return $this->get(self::CHATROOMDATA) !== null;
    }

    /**
     * Sets value of 'headImgMd5' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setHeadImgMd5($value)
    {
        return $this->set(self::HEADIMGMD5, $value);
    }

    /**
     * Returns value of 'headImgMd5' property
     *
     * @return string
     */
    public function getHeadImgMd5()
    {
        $value = $this->get(self::HEADIMGMD5);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'headImgMd5' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHeadImgMd5()
    {
        return $this->get(self::HEADIMGMD5) !== null;
    }

    /**
     * Sets value of 'encryptUserName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setEncryptUserName($value)
    {
        return $this->set(self::ENCRYPTUSERNAME, $value);
    }

    /**
     * Returns value of 'encryptUserName' property
     *
     * @return string
     */
    public function getEncryptUserName()
    {
        $value = $this->get(self::ENCRYPTUSERNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'encryptUserName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasEncryptUserName()
    {
        return $this->get(self::ENCRYPTUSERNAME) !== null;
    }

    /**
     * Sets value of 'iDCardNum' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setIDCardNum($value)
    {
        return $this->set(self::IDCARDNUM, $value);
    }

    /**
     * Returns value of 'iDCardNum' property
     *
     * @return string
     */
    public function getIDCardNum()
    {
        $value = $this->get(self::IDCARDNUM);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'iDCardNum' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasIDCardNum()
    {
        return $this->get(self::IDCARDNUM) !== null;
    }

    /**
     * Sets value of 'realName' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setRealName($value)
    {
        return $this->set(self::REALNAME, $value);
    }

    /**
     * Returns value of 'realName' property
     *
     * @return string
     */
    public function getRealName()
    {
        $value = $this->get(self::REALNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'realName' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRealName()
    {
        return $this->get(self::REALNAME) !== null;
    }

    /**
     * Sets value of 'mobileHash' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMobileHash($value)
    {
        return $this->set(self::MOBILEHASH, $value);
    }

    /**
     * Returns value of 'mobileHash' property
     *
     * @return string
     */
    public function getMobileHash()
    {
        $value = $this->get(self::MOBILEHASH);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mobileHash' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMobileHash()
    {
        return $this->get(self::MOBILEHASH) !== null;
    }

    /**
     * Sets value of 'mobileFullHash' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setMobileFullHash($value)
    {
        return $this->set(self::MOBILEFULLHASH, $value);
    }

    /**
     * Returns value of 'mobileFullHash' property
     *
     * @return string
     */
    public function getMobileFullHash()
    {
        $value = $this->get(self::MOBILEFULLHASH);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'mobileFullHash' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasMobileFullHash()
    {
        return $this->get(self::MOBILEFULLHASH) !== null;
    }

    /**
     * Sets value of 'additionalContactList' property
     *
     * @param \AdditionalContactList $value Property value
     *
     * @return null
     */
    public function setAdditionalContactList(\AdditionalContactList $value=null)
    {
        return $this->set(self::ADDITIONALCONTACTLIST, $value);
    }

    /**
     * Returns value of 'additionalContactList' property
     *
     * @return \AdditionalContactList
     */
    public function getAdditionalContactList()
    {
        return $this->get(self::ADDITIONALCONTACTLIST);
    }

    /**
     * Returns true if 'additionalContactList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAdditionalContactList()
    {
        return $this->get(self::ADDITIONALCONTACTLIST) !== null;
    }

    /**
     * Sets value of 'chatroomVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatroomVersion($value)
    {
        return $this->set(self::CHATROOMVERSION, $value);
    }

    /**
     * Returns value of 'chatroomVersion' property
     *
     * @return integer
     */
    public function getChatroomVersion()
    {
        $value = $this->get(self::CHATROOMVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatroomVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatroomVersion()
    {
        return $this->get(self::CHATROOMVERSION) !== null;
    }

    /**
     * Sets value of 'extInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setExtInfo($value)
    {
        return $this->set(self::EXTINFO, $value);
    }

    /**
     * Returns value of 'extInfo' property
     *
     * @return string
     */
    public function getExtInfo()
    {
        $value = $this->get(self::EXTINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'extInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtInfo()
    {
        return $this->get(self::EXTINFO) !== null;
    }

    /**
     * Sets value of 'chatroomMaxCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatroomMaxCount($value)
    {
        return $this->set(self::CHATROOMMAXCOUNT, $value);
    }

    /**
     * Returns value of 'chatroomMaxCount' property
     *
     * @return integer
     */
    public function getChatroomMaxCount()
    {
        $value = $this->get(self::CHATROOMMAXCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatroomMaxCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatroomMaxCount()
    {
        return $this->get(self::CHATROOMMAXCOUNT) !== null;
    }

    /**
     * Sets value of 'chatroomType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatroomType($value)
    {
        return $this->set(self::CHATROOMTYPE, $value);
    }

    /**
     * Returns value of 'chatroomType' property
     *
     * @return integer
     */
    public function getChatroomType()
    {
        $value = $this->get(self::CHATROOMTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatroomType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatroomType()
    {
        return $this->get(self::CHATROOMTYPE) !== null;
    }

    /**
     * Sets value of 'newChatroomData' property
     *
     * @param \ChatRoomMemberData $value Property value
     *
     * @return null
     */
    public function setNewChatroomData(\ChatRoomMemberData $value=null)
    {
        return $this->set(self::NEWCHATROOMDATA, $value);
    }

    /**
     * Returns value of 'newChatroomData' property
     *
     * @return \ChatRoomMemberData
     */
    public function getNewChatroomData()
    {
        return $this->get(self::NEWCHATROOMDATA);
    }

    /**
     * Returns true if 'newChatroomData' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewChatroomData()
    {
        return $this->get(self::NEWCHATROOMDATA) !== null;
    }

    /**
     * Sets value of 'deleteFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeleteFlag($value)
    {
        return $this->set(self::DELETEFLAG, $value);
    }

    /**
     * Returns value of 'deleteFlag' property
     *
     * @return integer
     */
    public function getDeleteFlag()
    {
        $value = $this->get(self::DELETEFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'deleteFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeleteFlag()
    {
        return $this->get(self::DELETEFLAG) !== null;
    }

    /**
     * Sets value of 'description' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setDescription($value)
    {
        return $this->set(self::DESCRIPTION, $value);
    }

    /**
     * Returns value of 'description' property
     *
     * @return string
     */
    public function getDescription()
    {
        $value = $this->get(self::DESCRIPTION);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'description' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDescription()
    {
        return $this->get(self::DESCRIPTION) !== null;
    }

    /**
     * Sets value of 'cardImgUrl' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCardImgUrl($value)
    {
        return $this->set(self::CARDIMGURL, $value);
    }

    /**
     * Returns value of 'cardImgUrl' property
     *
     * @return string
     */
    public function getCardImgUrl()
    {
        $value = $this->get(self::CARDIMGURL);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'cardImgUrl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCardImgUrl()
    {
        return $this->get(self::CARDIMGURL) !== null;
    }

    /**
     * Sets value of 'labelIDList' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setLabelIDList($value)
    {
        return $this->set(self::LABELIDLIST, $value);
    }

    /**
     * Returns value of 'labelIDList' property
     *
     * @return string
     */
    public function getLabelIDList()
    {
        $value = $this->get(self::LABELIDLIST);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'labelIDList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLabelIDList()
    {
        return $this->get(self::LABELIDLIST) !== null;
    }

    /**
     * Sets value of 'Phonenumlistinfo' property
     *
     * @param \PhoneNumListInfo $value Property value
     *
     * @return null
     */
    public function setPhonenumlistinfo(\PhoneNumListInfo $value=null)
    {
        return $this->set(self::PHONENUMLISTINFO, $value);
    }

    /**
     * Returns value of 'Phonenumlistinfo' property
     *
     * @return \PhoneNumListInfo
     */
    public function getPhonenumlistinfo()
    {
        return $this->get(self::PHONENUMLISTINFO);
    }

    /**
     * Returns true if 'Phonenumlistinfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPhonenumlistinfo()
    {
        return $this->get(self::PHONENUMLISTINFO) !== null;
    }

    /**
     * Sets value of 'Weidianinfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeidianinfo($value)
    {
        return $this->set(self::WEIDIANINFO, $value);
    }

    /**
     * Returns value of 'Weidianinfo' property
     *
     * @return string
     */
    public function getWeidianinfo()
    {
        $value = $this->get(self::WEIDIANINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'Weidianinfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeidianinfo()
    {
        return $this->get(self::WEIDIANINFO) !== null;
    }

    /**
     * Sets value of 'ChatroomInfoVersion' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatroomInfoVersion($value)
    {
        return $this->set(self::CHATROOMINFOVERSION, $value);
    }

    /**
     * Returns value of 'ChatroomInfoVersion' property
     *
     * @return integer
     */
    public function getChatroomInfoVersion()
    {
        $value = $this->get(self::CHATROOMINFOVERSION);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ChatroomInfoVersion' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatroomInfoVersion()
    {
        return $this->get(self::CHATROOMINFOVERSION) !== null;
    }

    /**
     * Sets value of 'DeletecontactScene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setDeletecontactScene($value)
    {
        return $this->set(self::DELETECONTACTSCENE, $value);
    }

    /**
     * Returns value of 'DeletecontactScene' property
     *
     * @return integer
     */
    public function getDeletecontactScene()
    {
        $value = $this->get(self::DELETECONTACTSCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'DeletecontactScene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDeletecontactScene()
    {
        return $this->get(self::DELETECONTACTSCENE) !== null;
    }

    /**
     * Sets value of 'ChatroomstatuStatus' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatroomstatuStatus($value)
    {
        return $this->set(self::CHATROOMSTATUSTATUS, $value);
    }

    /**
     * Returns value of 'ChatroomstatuStatus' property
     *
     * @return integer
     */
    public function getChatroomstatuStatus()
    {
        $value = $this->get(self::CHATROOMSTATUSTATUS);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'ChatroomstatuStatus' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatroomstatuStatus()
    {
        return $this->get(self::CHATROOMSTATUSTATUS) !== null;
    }

    /**
     * Sets value of 'albumFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAlbumFlag($value)
    {
        return $this->set(self::ALBUMFLAG, $value);
    }

    /**
     * Returns value of 'albumFlag' property
     *
     * @return integer
     */
    public function getAlbumFlag()
    {
        $value = $this->get(self::ALBUMFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'albumFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlbumFlag()
    {
        return $this->get(self::ALBUMFLAG) !== null;
    }

    /**
     * Sets value of 'albumStyle' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAlbumStyle($value)
    {
        return $this->set(self::ALBUMSTYLE, $value);
    }

    /**
     * Returns value of 'albumStyle' property
     *
     * @return integer
     */
    public function getAlbumStyle()
    {
        $value = $this->get(self::ALBUMSTYLE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'albumStyle' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlbumStyle()
    {
        return $this->get(self::ALBUMSTYLE) !== null;
    }

    /**
     * Sets value of 'weiboFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setWeiboFlag($value)
    {
        return $this->set(self::WEIBOFLAG, $value);
    }

    /**
     * Returns value of 'weiboFlag' property
     *
     * @return integer
     */
    public function getWeiboFlag()
    {
        $value = $this->get(self::WEIBOFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'weiboFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeiboFlag()
    {
        return $this->get(self::WEIBOFLAG) !== null;
    }

    /**
     * Sets value of 'weiboNickname' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeiboNickname($value)
    {
        return $this->set(self::WEIBONICKNAME, $value);
    }

    /**
     * Returns value of 'weiboNickname' property
     *
     * @return string
     */
    public function getWeiboNickname()
    {
        $value = $this->get(self::WEIBONICKNAME);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'weiboNickname' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeiboNickname()
    {
        return $this->get(self::WEIBONICKNAME) !== null;
    }

    /**
     * Sets value of 'nickName' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setNickName(\SKBuiltinString $value=null)
    {
        return $this->set(self::NICKNAME, $value);
    }

    /**
     * Returns value of 'nickName' property
     *
     * @return \SKBuiltinString
     */
    public function getNickName()
    {
        return $this->get(self::NICKNAME);
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
     * Sets value of 'pyInitial' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setPyInitial(\SKBuiltinString $value=null)
    {
        return $this->set(self::PYINITIAL, $value);
    }

    /**
     * Returns value of 'pyInitial' property
     *
     * @return \SKBuiltinString
     */
    public function getPyInitial()
    {
        return $this->get(self::PYINITIAL);
    }

    /**
     * Returns true if 'pyInitial' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPyInitial()
    {
        return $this->get(self::PYINITIAL) !== null;
    }

    /**
     * Sets value of 'quanPin' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setQuanPin(\SKBuiltinString $value=null)
    {
        return $this->set(self::QUANPIN, $value);
    }

    /**
     * Returns value of 'quanPin' property
     *
     * @return \SKBuiltinString
     */
    public function getQuanPin()
    {
        return $this->get(self::QUANPIN);
    }

    /**
     * Returns true if 'quanPin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasQuanPin()
    {
        return $this->get(self::QUANPIN) !== null;
    }

    /**
     * Sets value of 'sex' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSex($value)
    {
        return $this->set(self::SEX, $value);
    }

    /**
     * Returns value of 'sex' property
     *
     * @return integer
     */
    public function getSex()
    {
        $value = $this->get(self::SEX);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'sex' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSex()
    {
        return $this->get(self::SEX) !== null;
    }

    /**
     * Sets value of 'imgBuf' property
     *
     * @param \SKBuiltinString_ $value Property value
     *
     * @return null
     */
    public function setImgBuf(\SKBuiltinString_ $value=null)
    {
        return $this->set(self::IMGBUF, $value);
    }

    /**
     * Returns value of 'imgBuf' property
     *
     * @return \SKBuiltinString_
     */
    public function getImgBuf()
    {
        return $this->get(self::IMGBUF);
    }

    /**
     * Returns true if 'imgBuf' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgBuf()
    {
        return $this->get(self::IMGBUF) !== null;
    }

    /**
     * Sets value of 'bitMask' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBitMask($value)
    {
        return $this->set(self::BITMASK, $value);
    }

    /**
     * Returns value of 'bitMask' property
     *
     * @return integer
     */
    public function getBitMask()
    {
        $value = $this->get(self::BITMASK);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bitMask' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBitMask()
    {
        return $this->get(self::BITMASK) !== null;
    }

    /**
     * Sets value of 'bitVal' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setBitVal($value)
    {
        return $this->set(self::BITVAL, $value);
    }

    /**
     * Returns value of 'bitVal' property
     *
     * @return integer
     */
    public function getBitVal()
    {
        $value = $this->get(self::BITVAL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'bitVal' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBitVal()
    {
        return $this->get(self::BITVAL) !== null;
    }

    /**
     * Sets value of 'imgFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setImgFlag($value)
    {
        return $this->set(self::IMGFLAG, $value);
    }

    /**
     * Returns value of 'imgFlag' property
     *
     * @return integer
     */
    public function getImgFlag()
    {
        $value = $this->get(self::IMGFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'imgFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasImgFlag()
    {
        return $this->get(self::IMGFLAG) !== null;
    }

    /**
     * Sets value of 'remark' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setRemark(\SKBuiltinString $value=null)
    {
        return $this->set(self::REMARK, $value);
    }

    /**
     * Returns value of 'remark' property
     *
     * @return \SKBuiltinString
     */
    public function getRemark()
    {
        return $this->get(self::REMARK);
    }

    /**
     * Returns true if 'remark' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRemark()
    {
        return $this->get(self::REMARK) !== null;
    }

    /**
     * Sets value of 'remarkPYInitial' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setRemarkPYInitial(\SKBuiltinString $value=null)
    {
        return $this->set(self::REMARKPYINITIAL, $value);
    }

    /**
     * Returns value of 'remarkPYInitial' property
     *
     * @return \SKBuiltinString
     */
    public function getRemarkPYInitial()
    {
        return $this->get(self::REMARKPYINITIAL);
    }

    /**
     * Returns true if 'remarkPYInitial' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRemarkPYInitial()
    {
        return $this->get(self::REMARKPYINITIAL) !== null;
    }

    /**
     * Sets value of 'remarkQuanPin' property
     *
     * @param \SKBuiltinString $value Property value
     *
     * @return null
     */
    public function setRemarkQuanPin(\SKBuiltinString $value=null)
    {
        return $this->set(self::REMARKQUANPIN, $value);
    }

    /**
     * Returns value of 'remarkQuanPin' property
     *
     * @return \SKBuiltinString
     */
    public function getRemarkQuanPin()
    {
        return $this->get(self::REMARKQUANPIN);
    }

    /**
     * Returns true if 'remarkQuanPin' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRemarkQuanPin()
    {
        return $this->get(self::REMARKQUANPIN) !== null;
    }

    /**
     * Sets value of 'contactType' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContactType($value)
    {
        return $this->set(self::CONTACTTYPE, $value);
    }

    /**
     * Returns value of 'contactType' property
     *
     * @return integer
     */
    public function getContactType()
    {
        $value = $this->get(self::CONTACTTYPE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'contactType' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContactType()
    {
        return $this->get(self::CONTACTTYPE) !== null;
    }

    /**
     * Sets value of 'roomInfoCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setRoomInfoCount($value)
    {
        return $this->set(self::ROOMINFOCOUNT, $value);
    }

    /**
     * Returns value of 'roomInfoCount' property
     *
     * @return integer
     */
    public function getRoomInfoCount()
    {
        $value = $this->get(self::ROOMINFOCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'roomInfoCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomInfoCount()
    {
        return $this->get(self::ROOMINFOCOUNT) !== null;
    }

    /**
     * Appends value to 'RoomInfoList' list
     *
     * @param \RoomInfo $value Value to append
     *
     * @return null
     */
    public function appendRoomInfoList(\RoomInfo $value)
    {
        return $this->append(self::ROOMINFOLIST, $value);
    }

    /**
     * Clears 'RoomInfoList' list
     *
     * @return null
     */
    public function clearRoomInfoList()
    {
        return $this->clear(self::ROOMINFOLIST);
    }

    /**
     * Returns 'RoomInfoList' list
     *
     * @return \RoomInfo[]
     */
    public function getRoomInfoList()
    {
        return $this->get(self::ROOMINFOLIST);
    }

    /**
     * Returns true if 'RoomInfoList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRoomInfoList()
    {
        return count($this->get(self::ROOMINFOLIST)) !== 0;
    }

    /**
     * Returns 'RoomInfoList' iterator
     *
     * @return \ArrayIterator
     */
    public function getRoomInfoListIterator()
    {
        return new \ArrayIterator($this->get(self::ROOMINFOLIST));
    }

    /**
     * Returns element from 'RoomInfoList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \RoomInfo
     */
    public function getRoomInfoListAt($offset)
    {
        return $this->get(self::ROOMINFOLIST, $offset);
    }

    /**
     * Returns count of 'RoomInfoList' list
     *
     * @return int
     */
    public function getRoomInfoListCount()
    {
        return $this->count(self::ROOMINFOLIST);
    }

    /**
     * Sets value of 'Extflag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setExtflag($value)
    {
        return $this->set(self::EXTFLAG, $value);
    }

    /**
     * Returns value of 'Extflag' property
     *
     * @return integer
     */
    public function getExtflag()
    {
        $value = $this->get(self::EXTFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'Extflag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasExtflag()
    {
        return $this->get(self::EXTFLAG) !== null;
    }

    /**
     * Appends value to 'domainList_' list
     *
     * @param \SKBuiltinString $value Value to append
     *
     * @return null
     */
    public function appendDomainList(\SKBuiltinString $value)
    {
        return $this->append(self::DOMAINLIST_, $value);
    }

    /**
     * Clears 'domainList_' list
     *
     * @return null
     */
    public function clearDomainList()
    {
        return $this->clear(self::DOMAINLIST_);
    }

    /**
     * Returns 'domainList_' list
     *
     * @return \SKBuiltinString[]
     */
    public function getDomainList()
    {
        return $this->get(self::DOMAINLIST_);
    }

    /**
     * Returns true if 'domainList_' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasDomainList()
    {
        return count($this->get(self::DOMAINLIST_)) !== 0;
    }

    /**
     * Returns 'domainList_' iterator
     *
     * @return \ArrayIterator
     */
    public function getDomainListIterator()
    {
        return new \ArrayIterator($this->get(self::DOMAINLIST_));
    }

    /**
     * Returns element from 'domainList_' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \SKBuiltinString
     */
    public function getDomainListAt($offset)
    {
        return $this->get(self::DOMAINLIST_, $offset);
    }

    /**
     * Returns count of 'domainList_' list
     *
     * @return int
     */
    public function getDomainListCount()
    {
        return $this->count(self::DOMAINLIST_);
    }

    /**
     * Sets value of 'addContactScene' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setAddContactScene($value)
    {
        return $this->set(self::ADDCONTACTSCENE, $value);
    }

    /**
     * Returns value of 'addContactScene' property
     *
     * @return integer
     */
    public function getAddContactScene()
    {
        $value = $this->get(self::ADDCONTACTSCENE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'addContactScene' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAddContactScene()
    {
        return $this->get(self::ADDCONTACTSCENE) !== null;
    }

    /**
     * Sets value of 'province' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setProvince($value)
    {
        return $this->set(self::PROVINCE, $value);
    }

    /**
     * Returns value of 'province' property
     *
     * @return string
     */
    public function getProvince()
    {
        $value = $this->get(self::PROVINCE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'province' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasProvince()
    {
        return $this->get(self::PROVINCE) !== null;
    }

    /**
     * Sets value of 'city' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setCity($value)
    {
        return $this->set(self::CITY, $value);
    }

    /**
     * Returns value of 'city' property
     *
     * @return string
     */
    public function getCity()
    {
        $value = $this->get(self::CITY);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'city' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasCity()
    {
        return $this->get(self::CITY) !== null;
    }

    /**
     * Sets value of 'signature' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setSignature($value)
    {
        return $this->set(self::SIGNATURE, $value);
    }

    /**
     * Returns value of 'signature' property
     *
     * @return string
     */
    public function getSignature()
    {
        $value = $this->get(self::SIGNATURE);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'signature' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSignature()
    {
        return $this->get(self::SIGNATURE) !== null;
    }

    /**
     * Sets value of 'personalCard' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setPersonalCard($value)
    {
        return $this->set(self::PERSONALCARD, $value);
    }

    /**
     * Returns value of 'personalCard' property
     *
     * @return integer
     */
    public function getPersonalCard()
    {
        $value = $this->get(self::PERSONALCARD);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'personalCard' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasPersonalCard()
    {
        return $this->get(self::PERSONALCARD) !== null;
    }

    /**
     * Sets value of 'hasWeiXinHdHeadImg' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setHasWeiXinHdHeadImg($value)
    {
        return $this->set(self::HASWEIXINHDHEADIMG, $value);
    }

    /**
     * Returns value of 'hasWeiXinHdHeadImg' property
     *
     * @return integer
     */
    public function getHasWeiXinHdHeadImg()
    {
        $value = $this->get(self::HASWEIXINHDHEADIMG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'hasWeiXinHdHeadImg' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasHasWeiXinHdHeadImg()
    {
        return $this->get(self::HASWEIXINHDHEADIMG) !== null;
    }

    /**
     * Sets value of 'verifyFlag' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setVerifyFlag($value)
    {
        return $this->set(self::VERIFYFLAG, $value);
    }

    /**
     * Returns value of 'verifyFlag' property
     *
     * @return integer
     */
    public function getVerifyFlag()
    {
        $value = $this->get(self::VERIFYFLAG);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'verifyFlag' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifyFlag()
    {
        return $this->get(self::VERIFYFLAG) !== null;
    }

    /**
     * Sets value of 'verifyInfo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVerifyInfo($value)
    {
        return $this->set(self::VERIFYINFO, $value);
    }

    /**
     * Returns value of 'verifyInfo' property
     *
     * @return string
     */
    public function getVerifyInfo()
    {
        $value = $this->get(self::VERIFYINFO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'verifyInfo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifyInfo()
    {
        return $this->get(self::VERIFYINFO) !== null;
    }

    /**
     * Sets value of 'level' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setLevel($value)
    {
        return $this->set(self::LEVEL, $value);
    }

    /**
     * Returns value of 'level' property
     *
     * @return integer
     */
    public function getLevel()
    {
        $value = $this->get(self::LEVEL);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'level' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasLevel()
    {
        return $this->get(self::LEVEL) !== null;
    }

    /**
     * Sets value of 'source' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setSource($value)
    {
        return $this->set(self::SOURCE, $value);
    }

    /**
     * Returns value of 'source' property
     *
     * @return integer
     */
    public function getSource()
    {
        $value = $this->get(self::SOURCE);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'source' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasSource()
    {
        return $this->get(self::SOURCE) !== null;
    }

    /**
     * Sets value of 'weibo' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setWeibo($value)
    {
        return $this->set(self::WEIBO, $value);
    }

    /**
     * Returns value of 'weibo' property
     *
     * @return string
     */
    public function getWeibo()
    {
        $value = $this->get(self::WEIBO);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'weibo' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasWeibo()
    {
        return $this->get(self::WEIBO) !== null;
    }

    /**
     * Sets value of 'verifyContent' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setVerifyContent($value)
    {
        return $this->set(self::VERIFYCONTENT, $value);
    }

    /**
     * Returns value of 'verifyContent' property
     *
     * @return string
     */
    public function getVerifyContent()
    {
        $value = $this->get(self::VERIFYCONTENT);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'verifyContent' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasVerifyContent()
    {
        return $this->get(self::VERIFYCONTENT) !== null;
    }

    /**
     * Sets value of 'alias' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAlias($value)
    {
        return $this->set(self::ALIAS, $value);
    }

    /**
     * Returns value of 'alias' property
     *
     * @return string
     */
    public function getAlias()
    {
        $value = $this->get(self::ALIAS);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'alias' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAlias()
    {
        return $this->get(self::ALIAS) !== null;
    }

    /**
     * Sets value of 'chatRoomOwner' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setChatRoomOwner($value)
    {
        return $this->set(self::CHATROOMOWNER, $value);
    }

    /**
     * Returns value of 'chatRoomOwner' property
     *
     * @return string
     */
    public function getChatRoomOwner()
    {
        $value = $this->get(self::CHATROOMOWNER);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'chatRoomOwner' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatRoomOwner()
    {
        return $this->get(self::CHATROOMOWNER) !== null;
    }

    /**
     * Sets value of 'chatRoomNotify' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setChatRoomNotify($value)
    {
        return $this->set(self::CHATROOMNOTIFY, $value);
    }

    /**
     * Returns value of 'chatRoomNotify' property
     *
     * @return integer
     */
    public function getChatRoomNotify()
    {
        $value = $this->get(self::CHATROOMNOTIFY);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'chatRoomNotify' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasChatRoomNotify()
    {
        return $this->get(self::CHATROOMNOTIFY) !== null;
    }
}
}