<?php
/**
 * EnterpriseImFancyCardCardSaveCardSubModule
 *
 * PHP version 5
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 创建动态消息卡片
 *
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
 * EnterpriseImFancyCardCardSaveCardSubModule Class Doc Comment
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EnterpriseImFancyCardCardSaveCardSubModule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'card_sub_module';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'module_type' => 'string',
'text' => 'string',
'image' => '\swagger_client\Model\EnterpriseImFancyCardCardSaveCardModuleImage',
'action' => '\swagger_client\Model\EnterpriseImFancyCardCardSaveModuleAction',
'props' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'module_type' => null,
'text' => null,
'image' => null,
'action' => null,
'props' => null    ];

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
        'module_type' => 'module_type',
'text' => 'text',
'image' => 'image',
'action' => 'action',
'props' => 'props'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'module_type' => 'setModuleType',
'text' => 'setText',
'image' => 'setImage',
'action' => 'setAction',
'props' => 'setProps'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'module_type' => 'getModuleType',
'text' => 'getText',
'image' => 'getImage',
'action' => 'getAction',
'props' => 'getProps'    ];

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

    const ENTERPRISE_IM_FANCY_CARD_CARD_SAVE_MODULE_TYPE_TEXT = 'text';
const ENTERPRISE_IM_FANCY_CARD_CARD_SAVE_MODULE_TYPE_IMAGE = 'image';
const ENTERPRISE_IM_FANCY_CARD_CARD_SAVE_MODULE_TYPE_IMAGE_TEXT = 'image_text';
const ENTERPRISE_IM_FANCY_CARD_CARD_SAVE_MODULE_TYPE_BUTTONS = 'buttons';
const ENTERPRISE_IM_FANCY_CARD_CARD_SAVE_MODULE_TYPE_PHONE_LEADS = 'phone_leads';
const ENTERPRISE_IM_FANCY_CARD_CARD_SAVE_MODULE_TYPE_BUTTON = 'button';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModuleTypeAllowableValues()
    {
        return [
            self::ENTERPRISE_IM_FANCY_CARD_CARD_SAVE_MODULE_TYPE_TEXT,
            self::ENTERPRISE_IM_FANCY_CARD_CARD_SAVE_MODULE_TYPE_IMAGE,
            self::ENTERPRISE_IM_FANCY_CARD_CARD_SAVE_MODULE_TYPE_IMAGE_TEXT,
            self::ENTERPRISE_IM_FANCY_CARD_CARD_SAVE_MODULE_TYPE_BUTTONS,
            self::ENTERPRISE_IM_FANCY_CARD_CARD_SAVE_MODULE_TYPE_PHONE_LEADS,
            self::ENTERPRISE_IM_FANCY_CARD_CARD_SAVE_MODULE_TYPE_BUTTON,''
        ];
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
        $this->container['module_type'] = isset($data['module_type']) ? $data['module_type'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['props'] = isset($data['props']) ? $data['props'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['module_type'] === null) {
            $invalidProperties[] = "'module_type' can't be null";
        }
        $allowedValues = $this->getModuleTypeAllowableValues();
        if (!is_null($this->container['module_type']) && !in_array($this->container['module_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'module_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets module_type
     *
     * @return string
     */
    public function getModuleType()
    {
        return $this->container['module_type'];
    }

    /**
     * Sets module_type
     *
     * @param string $module_type module_type
     *
     * @return $this
     */
    public function setModuleType($module_type)
    {
        $allowedValues = $this->getModuleTypeAllowableValues();
        if (!in_array($module_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'module_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['module_type'] = $module_type;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text 文本
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets image
     *
     * @return \swagger_client\Model\EnterpriseImFancyCardCardSaveCardModuleImage
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param \swagger_client\Model\EnterpriseImFancyCardCardSaveCardModuleImage $image image
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets action
     *
     * @return \swagger_client\Model\EnterpriseImFancyCardCardSaveModuleAction
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param \swagger_client\Model\EnterpriseImFancyCardCardSaveModuleAction $action action
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets props
     *
     * @return string
     */
    public function getProps()
    {
        return $this->container['props'];
    }

    /**
     * Sets props
     *
     * @param string $props 模块属性 json string
     *
     * @return $this
     */
    public function setProps($props)
    {
        $this->container['props'] = $props;

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
