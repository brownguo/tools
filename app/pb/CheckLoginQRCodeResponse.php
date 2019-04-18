<?php
/**
 * Auto generated from pb.proto at 2019-04-17 13:34:39
 */

namespace {
/**
 * CheckLoginQRCodeResponse message
 */
class CheckLoginQRCodeResponse extends \ProtobufMessage
{
    /* Field index constants */
    const BASERESPONSE = 1;
    const DATA = 3;

    /* @var array Field descriptors */
    protected static $fields = array(
        self::BASERESPONSE => array(
            'name' => 'baseResponse',
            'required' => false,
            'type' => '\BaseResponse'
        ),
        self::DATA => array(
            'name' => 'data',
            'required' => false,
            'type' => '\CheckLoginQRCodeResponse_LoginQRCodeNotifyPkg'
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
        $this->values[self::DATA] = null;
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
     * Sets value of 'data' property
     *
     * @param \CheckLoginQRCodeResponse_LoginQRCodeNotifyPkg $value Property value
     *
     * @return null
     */
    public function setData(\CheckLoginQRCodeResponse_LoginQRCodeNotifyPkg $value=null)
    {
        return $this->set(self::DATA, $value);
    }

    /**
     * Returns value of 'data' property
     *
     * @return \CheckLoginQRCodeResponse_LoginQRCodeNotifyPkg
     */
    public function getData()
    {
        return $this->get(self::DATA);
    }

    /**
     * Returns true if 'data' property is set, false otherwise
     *
     * @return boolean
     */
    public function hasData()
    {
        return $this->get(self::DATA) !== null;
    }
}
}