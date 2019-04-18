<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * NetworkSectResp message
 */
class NetworkSectResp extends \ProtobufMessage
{
    /* Field index constants */
    const NEWHOSTLIST = 1;
    const NETWORKCONTROL = 2;
    const BUILTINIPLIST = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::NEWHOSTLIST => array(
            'name' => 'newHostList',
            'required' => false,
            'type' => '\HostList'
        ),
        self::NETWORKCONTROL => array(
            'name' => 'networkControl',
            'required' => false,
            'type' => '\NetworkControl'
        ),
        self::BUILTINIPLIST => array(
            'name' => 'builtinIplist',
            'required' => false,
            'type' => '\BuiltinIPList'
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
        $this->values[self::NEWHOSTLIST] = null;
        $this->values[self::NETWORKCONTROL] = null;
        $this->values[self::BUILTINIPLIST] = null;
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
     * Sets value of 'newHostList' property
     *
     * @param \HostList $value Property value
     *
     * @return null
     */
    public function setNewHostList(\HostList $value=null)
    {
        return $this->set(self::NEWHOSTLIST, $value);
    }

    /**
     * Returns value of 'newHostList' property
     *
     * @return \HostList
     */
    public function getNewHostList()
    {
        return $this->get(self::NEWHOSTLIST);
    }

    /**
     * Returns true if 'newHostList' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNewHostList()
    {
        return $this->get(self::NEWHOSTLIST) !== null;
    }

    /**
     * Sets value of 'networkControl' property
     *
     * @param \NetworkControl $value Property value
     *
     * @return null
     */
    public function setNetworkControl(\NetworkControl $value=null)
    {
        return $this->set(self::NETWORKCONTROL, $value);
    }

    /**
     * Returns value of 'networkControl' property
     *
     * @return \NetworkControl
     */
    public function getNetworkControl()
    {
        return $this->get(self::NETWORKCONTROL);
    }

    /**
     * Returns true if 'networkControl' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasNetworkControl()
    {
        return $this->get(self::NETWORKCONTROL) !== null;
    }

    /**
     * Sets value of 'builtinIplist' property
     *
     * @param \BuiltinIPList $value Property value
     *
     * @return null
     */
    public function setBuiltinIplist(\BuiltinIPList $value=null)
    {
        return $this->set(self::BUILTINIPLIST, $value);
    }

    /**
     * Returns value of 'builtinIplist' property
     *
     * @return \BuiltinIPList
     */
    public function getBuiltinIplist()
    {
        return $this->get(self::BUILTINIPLIST);
    }

    /**
     * Returns true if 'builtinIplist' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasBuiltinIplist()
    {
        return $this->get(self::BUILTINIPLIST) !== null;
    }
}
}