<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * VerifyUserValidTicket message
 */
class VerifyUserValidTicket extends \ProtobufMessage
{
    /* Field index constants */
    const USERNAME = 1;
    const ANTISPAMTICKET = 2;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::USERNAME => array(
            'name' => 'username',
            'required' => false,
            'type' => \ProtobufMessage::PB_TYPE_STRING,
        ),
        self::ANTISPAMTICKET => array(
            'name' => 'antispamticket',
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
        $this->values[self::USERNAME] = null;
        $this->values[self::ANTISPAMTICKET] = null;
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
     * Sets value of 'antispamticket' property
     *
     * @param string $value Property value
     *
     * @return null
     */
    public function setAntispamticket($value)
    {
        return $this->set(self::ANTISPAMTICKET, $value);
    }

    /**
     * Returns value of 'antispamticket' property
     *
     * @return string
     */
    public function getAntispamticket()
    {
        $value = $this->get(self::ANTISPAMTICKET);
        return $value === null ? (string)$value : $value;
    }

    /**
     * Returns true if 'antispamticket' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasAntispamticket()
    {
        return $this->get(self::ANTISPAMTICKET) !== null;
    }
}
}