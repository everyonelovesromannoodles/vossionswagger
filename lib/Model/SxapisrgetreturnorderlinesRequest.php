<?php
/**
 * SxapisrgetreturnorderlinesRequest
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
 * SxapisrgetreturnorderlinesRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapisrgetreturnorderlinesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapisrgetreturnorderlines_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'order_number' => 'int',
        'order_suffix' => 'int',
        'customer_number' => 'double',
        'ship_to' => 'string',
        'warehouse' => 'string',
        'product_code' => 'string',
        'special_nonstock_type' => 'string',
        'inventory_type' => 'string',
        'record_limit' => 'int',
        't_infieldvalue' => '\Swagger\Client\Model\TInfieldvalueReq'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_number' => 'int64',
        'operator_init' => null,
        'operator_password' => null,
        'order_number' => 'int64',
        'order_suffix' => 'int64',
        'customer_number' => 'double',
        'ship_to' => null,
        'warehouse' => null,
        'product_code' => null,
        'special_nonstock_type' => null,
        'inventory_type' => null,
        'record_limit' => 'int64',
        't_infieldvalue' => null
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
        'company_number' => 'companyNumber',
        'operator_init' => 'operatorInit',
        'operator_password' => 'operatorPassword',
        'order_number' => 'orderNumber',
        'order_suffix' => 'orderSuffix',
        'customer_number' => 'customerNumber',
        'ship_to' => 'shipTo',
        'warehouse' => 'warehouse',
        'product_code' => 'productCode',
        'special_nonstock_type' => 'specialNonstockType',
        'inventory_type' => 'inventoryType',
        'record_limit' => 'recordLimit',
        't_infieldvalue' => 'tInfieldvalue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_number' => 'setCompanyNumber',
        'operator_init' => 'setOperatorInit',
        'operator_password' => 'setOperatorPassword',
        'order_number' => 'setOrderNumber',
        'order_suffix' => 'setOrderSuffix',
        'customer_number' => 'setCustomerNumber',
        'ship_to' => 'setShipTo',
        'warehouse' => 'setWarehouse',
        'product_code' => 'setProductCode',
        'special_nonstock_type' => 'setSpecialNonstockType',
        'inventory_type' => 'setInventoryType',
        'record_limit' => 'setRecordLimit',
        't_infieldvalue' => 'setTInfieldvalue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_number' => 'getCompanyNumber',
        'operator_init' => 'getOperatorInit',
        'operator_password' => 'getOperatorPassword',
        'order_number' => 'getOrderNumber',
        'order_suffix' => 'getOrderSuffix',
        'customer_number' => 'getCustomerNumber',
        'ship_to' => 'getShipTo',
        'warehouse' => 'getWarehouse',
        'product_code' => 'getProductCode',
        'special_nonstock_type' => 'getSpecialNonstockType',
        'inventory_type' => 'getInventoryType',
        'record_limit' => 'getRecordLimit',
        't_infieldvalue' => 'getTInfieldvalue'
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
        $this->container['company_number'] = isset($data['company_number']) ? $data['company_number'] : null;
        $this->container['operator_init'] = isset($data['operator_init']) ? $data['operator_init'] : null;
        $this->container['operator_password'] = isset($data['operator_password']) ? $data['operator_password'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['order_suffix'] = isset($data['order_suffix']) ? $data['order_suffix'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
        $this->container['product_code'] = isset($data['product_code']) ? $data['product_code'] : null;
        $this->container['special_nonstock_type'] = isset($data['special_nonstock_type']) ? $data['special_nonstock_type'] : null;
        $this->container['inventory_type'] = isset($data['inventory_type']) ? $data['inventory_type'] : null;
        $this->container['record_limit'] = isset($data['record_limit']) ? $data['record_limit'] : null;
        $this->container['t_infieldvalue'] = isset($data['t_infieldvalue']) ? $data['t_infieldvalue'] : null;
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
     * Gets company_number
     *
     * @return int
     */
    public function getCompanyNumber()
    {
        return $this->container['company_number'];
    }

    /**
     * Sets company_number
     *
     * @param int $company_number company_number
     *
     * @return $this
     */
    public function setCompanyNumber($company_number)
    {
        $this->container['company_number'] = $company_number;

        return $this;
    }

    /**
     * Gets operator_init
     *
     * @return string
     */
    public function getOperatorInit()
    {
        return $this->container['operator_init'];
    }

    /**
     * Sets operator_init
     *
     * @param string $operator_init operator_init
     *
     * @return $this
     */
    public function setOperatorInit($operator_init)
    {
        $this->container['operator_init'] = $operator_init;

        return $this;
    }

    /**
     * Gets operator_password
     *
     * @return string
     */
    public function getOperatorPassword()
    {
        return $this->container['operator_password'];
    }

    /**
     * Sets operator_password
     *
     * @param string $operator_password operator_password
     *
     * @return $this
     */
    public function setOperatorPassword($operator_password)
    {
        $this->container['operator_password'] = $operator_password;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param int $order_number order_number
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets order_suffix
     *
     * @return int
     */
    public function getOrderSuffix()
    {
        return $this->container['order_suffix'];
    }

    /**
     * Sets order_suffix
     *
     * @param int $order_suffix order_suffix
     *
     * @return $this
     */
    public function setOrderSuffix($order_suffix)
    {
        $this->container['order_suffix'] = $order_suffix;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return double
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param double $customer_number customer_number
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return string
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param string $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets warehouse
     *
     * @return string
     */
    public function getWarehouse()
    {
        return $this->container['warehouse'];
    }

    /**
     * Sets warehouse
     *
     * @param string $warehouse warehouse
     *
     * @return $this
     */
    public function setWarehouse($warehouse)
    {
        $this->container['warehouse'] = $warehouse;

        return $this;
    }

    /**
     * Gets product_code
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param string $product_code product_code
     *
     * @return $this
     */
    public function setProductCode($product_code)
    {
        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets special_nonstock_type
     *
     * @return string
     */
    public function getSpecialNonstockType()
    {
        return $this->container['special_nonstock_type'];
    }

    /**
     * Sets special_nonstock_type
     *
     * @param string $special_nonstock_type special_nonstock_type
     *
     * @return $this
     */
    public function setSpecialNonstockType($special_nonstock_type)
    {
        $this->container['special_nonstock_type'] = $special_nonstock_type;

        return $this;
    }

    /**
     * Gets inventory_type
     *
     * @return string
     */
    public function getInventoryType()
    {
        return $this->container['inventory_type'];
    }

    /**
     * Sets inventory_type
     *
     * @param string $inventory_type inventory_type
     *
     * @return $this
     */
    public function setInventoryType($inventory_type)
    {
        $this->container['inventory_type'] = $inventory_type;

        return $this;
    }

    /**
     * Gets record_limit
     *
     * @return int
     */
    public function getRecordLimit()
    {
        return $this->container['record_limit'];
    }

    /**
     * Sets record_limit
     *
     * @param int $record_limit record_limit
     *
     * @return $this
     */
    public function setRecordLimit($record_limit)
    {
        $this->container['record_limit'] = $record_limit;

        return $this;
    }

    /**
     * Gets t_infieldvalue
     *
     * @return \Swagger\Client\Model\TInfieldvalueReq
     */
    public function getTInfieldvalue()
    {
        return $this->container['t_infieldvalue'];
    }

    /**
     * Sets t_infieldvalue
     *
     * @param \Swagger\Client\Model\TInfieldvalueReq $t_infieldvalue t_infieldvalue
     *
     * @return $this
     */
    public function setTInfieldvalue($t_infieldvalue)
    {
        $this->container['t_infieldvalue'] = $t_infieldvalue;

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


