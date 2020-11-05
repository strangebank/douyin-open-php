<?php
/**
 * DouyinPayDouyinPayInlineResponse2002Data
 *
 * PHP version 5
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace swagger_client\Model;

use \ArrayAccess;
use swagger_client\ObjectSerializer;

/**
 * DouyinPayDouyinPayInlineResponse2002Data Class Doc Comment
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DouyinPayDouyinPayInlineResponse2002Data implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_200_2_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ret_code' => 'int',
'ret_msg' => 'string',
'sub_code' => 'int',
'sub_msg' => 'string',
'balance' => 'int',
'ext' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ret_code' => null,
'ret_msg' => null,
'sub_code' => null,
'sub_msg' => null,
'balance' => null,
'ext' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ret_code' => 'ret_code',
'ret_msg' => 'ret_msg',
'sub_code' => 'sub_code',
'sub_msg' => 'sub_msg',
'balance' => 'balance',
'ext' => 'ext'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ret_code' => 'setRetCode',
'ret_msg' => 'setRetMsg',
'sub_code' => 'setSubCode',
'sub_msg' => 'setSubMsg',
'balance' => 'setBalance',
'ext' => 'setExt'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ret_code' => 'getRetCode',
'ret_msg' => 'getRetMsg',
'sub_code' => 'getSubCode',
'sub_msg' => 'getSubMsg',
'balance' => 'getBalance',
'ext' => 'getExt'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['ret_code'] = isset($data['ret_code']) ? $data['ret_code'] : null;
        $this->container['ret_msg'] = isset($data['ret_msg']) ? $data['ret_msg'] : null;
        $this->container['sub_code'] = isset($data['sub_code']) ? $data['sub_code'] : null;
        $this->container['sub_msg'] = isset($data['sub_msg']) ? $data['sub_msg'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['ext'] = isset($data['ext']) ? $data['ext'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ret_code'] === null) {
            $invalidProperties[] = "'ret_code' can't be null";
        }
        if ($this->container['ret_msg'] === null) {
            $invalidProperties[] = "'ret_msg' can't be null";
        }
        if ($this->container['sub_code'] === null) {
            $invalidProperties[] = "'sub_code' can't be null";
        }
        if ($this->container['sub_msg'] === null) {
            $invalidProperties[] = "'sub_msg' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalidProperties[] = "'balance' can't be null";
        }
        if ($this->container['ext'] === null) {
            $invalidProperties[] = "'ext' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets ret_code
     *
     * @return int
     */
    public function getRetCode()
    {
        return $this->container['ret_code'];
    }

    /**
     * Sets ret_code
     *
     * @param int $ret_code 返回码
     *
     * @return $this
     */
    public function setRetCode($ret_code)
    {
        $this->container['ret_code'] = $ret_code;

        return $this;
    }

    /**
     * Gets ret_msg
     *
     * @return string
     */
    public function getRetMsg()
    {
        return $this->container['ret_msg'];
    }

    /**
     * Sets ret_msg
     *
     * @param string $ret_msg 返回信息
     *
     * @return $this
     */
    public function setRetMsg($ret_msg)
    {
        $this->container['ret_msg'] = $ret_msg;

        return $this;
    }

    /**
     * Gets sub_code
     *
     * @return int
     */
    public function getSubCode()
    {
        return $this->container['sub_code'];
    }

    /**
     * Sets sub_code
     *
     * @param int $sub_code 返回码
     *
     * @return $this
     */
    public function setSubCode($sub_code)
    {
        $this->container['sub_code'] = $sub_code;

        return $this;
    }

    /**
     * Gets sub_msg
     *
     * @return string
     */
    public function getSubMsg()
    {
        return $this->container['sub_msg'];
    }

    /**
     * Sets sub_msg
     *
     * @param string $sub_msg 返回信息
     *
     * @return $this
     */
    public function setSubMsg($sub_msg)
    {
        $this->container['sub_msg'] = $sub_msg;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return int
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param int $balance 余额
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets ext
     *
     * @return string
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param string $ext 附加信息
     *
     * @return $this
     */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}