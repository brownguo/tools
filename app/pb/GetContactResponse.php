<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * GetContactResponse message
 */
class GetContactResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const CONTACTCOUNT = 2;
    const CONTACTLIST = 3;
    const RET = 4;
    const TICKET = 5;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => false,
            'type' => '\BaseResponse'
        ),
        self::CONTACTCOUNT => array(
            'name' => 'contactCount',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::CONTACTLIST => array(
            'name' => 'contactList',
            'repeated' => true,
            'type' => '\ModContact'
        ),
        self::RET => array(
            'name' => 'ret',
            'repeated' => true,
            'type' => \ProtobufMessage::PB_TYPE_INT,
        ),
        self::TICKET => array(
            'name' => 'ticket',
            'repeated' => true,
            'type' => '\VerifyUserValidTicket'
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
        $this->values[self::CONTACTCOUNT] = null;
        $this->values[self::CONTACTLIST] = array();
        $this->values[self::RET] = array();
        $this->values[self::TICKET] = array();
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
     * Sets value of 'contactCount' property
     *
     * @param integer $value Property value
     *
     * @return null
     */
    public function setContactCount($value)
    {
        return $this->set(self::CONTACTCOUNT, $value);
    }

    /**
     * Returns value of 'contactCount' property
     *
     * @return integer
     */
    public function getContactCount()
    {
        $value = $this->get(self::CONTACTCOUNT);
        return $value === null ? (integer)$value : $value;
    }

    /**
     * Returns true if 'contactCount' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContactCount()
    {
        return $this->get(self::CONTACTCOUNT) !== null;
    }

    /**
     * Appends value to 'contactList' list
     *
     * @param \ModContact $value Value to append
     *
     * @return null
     */
    public function appendContactList(\ModContact $value)
    {
        return $this->append(self::CONTACTLIST, $value);
    }

    /**
     * Clears 'contactList' list
     *
     * @return null
     */
    public function clearContactList()
    {
        return $this->clear(self::CONTACTLIST);
    }

    /**
     * Returns 'contactList' list
     *
     * @return \ModContact[]
     */
    public function getContactList()
    {
        return $this->get(self::CONTACTLIST);
    }

    /**
     * Returns true if 'contactList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasContactList()
    {
        return count($this->get(self::CONTACTLIST)) !== 0;
    }

    /**
     * Returns 'contactList' iterator
     *
     * @return \ArrayIterator
     */
    public function getContactListIterator()
    {
        return new \ArrayIterator($this->get(self::CONTACTLIST));
    }

    /**
     * Returns element from 'contactList' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \ModContact
     */
    public function getContactListAt($offset)
    {
        return $this->get(self::CONTACTLIST, $offset);
    }

    /**
     * Returns count of 'contactList' list
     *
     * @return int
     */
    public function getContactListCount()
    {
        return $this->count(self::CONTACTLIST);
    }

    /**
     * Appends value to 'ret' list
     *
     * @param integer $value Value to append
     *
     * @return null
     */
    public function appendRet($value)
    {
        return $this->append(self::RET, $value);
    }

    /**
     * Clears 'ret' list
     *
     * @return null
     */
    public function clearRet()
    {
        return $this->clear(self::RET);
    }

    /**
     * Returns 'ret' list
     *
     * @return integer[]
     */
    public function getRet()
    {
        return $this->get(self::RET);
    }

    /**
     * Returns true if 'ret' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasRet()
    {
        return count($this->get(self::RET)) !== 0;
    }

    /**
     * Returns 'ret' iterator
     *
     * @return \ArrayIterator
     */
    public function getRetIterator()
    {
        return new \ArrayIterator($this->get(self::RET));
    }

    /**
     * Returns element from 'ret' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return integer
     */
    public function getRetAt($offset)
    {
        return $this->get(self::RET, $offset);
    }

    /**
     * Returns count of 'ret' list
     *
     * @return int
     */
    public function getRetCount()
    {
        return $this->count(self::RET);
    }

    /**
     * Appends value to 'ticket' list
     *
     * @param \VerifyUserValidTicket $value Value to append
     *
     * @return null
     */
    public function appendTicket(\VerifyUserValidTicket $value)
    {
        return $this->append(self::TICKET, $value);
    }

    /**
     * Clears 'ticket' list
     *
     * @return null
     */
    public function clearTicket()
    {
        return $this->clear(self::TICKET);
    }

    /**
     * Returns 'ticket' list
     *
     * @return \VerifyUserValidTicket[]
     */
    public function getTicket()
    {
        return $this->get(self::TICKET);
    }

    /**
     * Returns true if 'ticket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasTicket()
    {
        return count($this->get(self::TICKET)) !== 0;
    }

    /**
     * Returns 'ticket' iterator
     *
     * @return \ArrayIterator
     */
    public function getTicketIterator()
    {
        return new \ArrayIterator($this->get(self::TICKET));
    }

    /**
     * Returns element from 'ticket' list at given offset
     *
     * @param int $offset Position in list
     *
     * @return \VerifyUserValidTicket
     */
    public function getTicketAt($offset)
    {
        return $this->get(self::TICKET, $offset);
    }

    /**
     * Returns count of 'ticket' list
     *
     * @return int
     */
    public function getTicketCount()
    {
        return $this->count(self::TICKET);
    }
}
}