<?php
/**
 * Sxapisfvalidatecustomerv2Response
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * SX.e API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 11.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.32
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Sxapisfvalidatecustomerv2Response Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sxapisfvalidatecustomerv2Response implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapisfvalidatecustomerv2_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'valid_flag' => 'bool',
        'customer_name' => 'string',
        'customer_class' => 'string',
        'default_warehouse' => 'string',
        'list_price' => 'int',
        'c_error_message' => 'string',
        't_outfieldvalue' => '\Swagger\Client\Model\TOutfieldvalueResp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'valid_flag' => null,
        'customer_name' => null,
        'customer_class' => null,
        'default_warehouse' => null,
        'list_price' => 'int64',
        'c_error_message' => null,
        't_outfieldvalue' => null
    ];

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
        'valid_flag' => 'validFlag',
        'customer_name' => 'customerName',
        'customer_class' => 'customerClass',
        'default_warehouse' => 'defaultWarehouse',
        'list_price' => 'listPrice',
        'c_error_message' => 'cErrorMessage',
        't_outfieldvalue' => 'tOutfieldvalue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'valid_flag' => 'setValidFlag',
        'customer_name' => 'setCustomerName',
        'customer_class' => 'setCustomerClass',
        'default_warehouse' => 'setDefaultWarehouse',
        'list_price' => 'setListPrice',
        'c_error_message' => 'setCErrorMessage',
        't_outfieldvalue' => 'setTOutfieldvalue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'valid_flag' => 'getValidFlag',
        'customer_name' => 'getCustomerName',
        'customer_class' => 'getCustomerClass',
        'default_warehouse' => 'getDefaultWarehouse',
        'list_price' => 'getListPrice',
        'c_error_message' => 'getCErrorMessage',
        't_outfieldvalue' => 'getTOutfieldvalue'
    ];

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
        $this->container['valid_flag'] = isset($data['valid_flag']) ? $data['valid_flag'] : null;
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['customer_class'] = isset($data['customer_class']) ? $data['customer_class'] : null;
        $this->container['default_warehouse'] = isset($data['default_warehouse']) ? $data['default_warehouse'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
        $this->container['c_error_message'] = isset($data['c_error_message']) ? $data['c_error_message'] : null;
        $this->container['t_outfieldvalue'] = isset($data['t_outfieldvalue']) ? $data['t_outfieldvalue'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets valid_flag
     *
     * @return bool
     */
    public function getValidFlag()
    {
        return $this->container['valid_flag'];
    }

    /**
     * Sets valid_flag
     *
     * @param bool $valid_flag valid_flag
     *
     * @return $this
     */
    public function setValidFlag($valid_flag)
    {
        $this->container['valid_flag'] = $valid_flag;

        return $this;
    }

    /**
     * Gets customer_name
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string $customer_name customer_name
     *
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets customer_class
     *
     * @return string
     */
    public function getCustomerClass()
    {
        return $this->container['customer_class'];
    }

    /**
     * Sets customer_class
     *
     * @param string $customer_class customer_class
     *
     * @return $this
     */
    public function setCustomerClass($customer_class)
    {
        $this->container['customer_class'] = $customer_class;

        return $this;
    }

    /**
     * Gets default_warehouse
     *
     * @return string
     */
    public function getDefaultWarehouse()
    {
        return $this->container['default_warehouse'];
    }

    /**
     * Sets default_warehouse
     *
     * @param string $default_warehouse default_warehouse
     *
     * @return $this
     */
    public function setDefaultWarehouse($default_warehouse)
    {
        $this->container['default_warehouse'] = $default_warehouse;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return int
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param int $list_price list_price
     *
     * @return $this
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets c_error_message
     *
     * @return string
     */
    public function getCErrorMessage()
    {
        return $this->container['c_error_message'];
    }

    /**
     * Sets c_error_message
     *
     * @param string $c_error_message c_error_message
     *
     * @return $this
     */
    public function setCErrorMessage($c_error_message)
    {
        $this->container['c_error_message'] = $c_error_message;

        return $this;
    }

    /**
     * Gets t_outfieldvalue
     *
     * @return \Swagger\Client\Model\TOutfieldvalueResp
     */
    public function getTOutfieldvalue()
    {
        return $this->container['t_outfieldvalue'];
    }

    /**
     * Sets t_outfieldvalue
     *
     * @param \Swagger\Client\Model\TOutfieldvalueResp $t_outfieldvalue t_outfieldvalue
     *
     * @return $this
     */
    public function setTOutfieldvalue($t_outfieldvalue)
    {
        $this->container['t_outfieldvalue'] = $t_outfieldvalue;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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


