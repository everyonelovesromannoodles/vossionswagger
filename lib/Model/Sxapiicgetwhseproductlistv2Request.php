<?php
/**
 * Sxapiicgetwhseproductlistv2Request
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
 * Sxapiicgetwhseproductlistv2Request Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sxapiicgetwhseproductlistv2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiicgetwhseproductlistv2_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'prod' => 'string',
        'whse' => 'string',
        'vendor_number' => 'double',
        'product_line' => 'string',
        'lookup_name' => 'string',
        'status_stock_flag' => 'bool',
        'status_direct_flag' => 'bool',
        'status_order_as_needed_flag' => 'bool',
        'status_do_not_reorder_flag' => 'bool',
        'product_category' => 'string',
        'kit_type' => 'string',
        'key_word1' => 'string',
        'key_word2' => 'string',
        'key_word3' => 'string',
        'key_word4' => 'string',
        'key_word5' => 'string',
        'inactive_flag' => 'bool',
        'record_limit' => 'int'
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
        'prod' => null,
        'whse' => null,
        'vendor_number' => 'double',
        'product_line' => null,
        'lookup_name' => null,
        'status_stock_flag' => null,
        'status_direct_flag' => null,
        'status_order_as_needed_flag' => null,
        'status_do_not_reorder_flag' => null,
        'product_category' => null,
        'kit_type' => null,
        'key_word1' => null,
        'key_word2' => null,
        'key_word3' => null,
        'key_word4' => null,
        'key_word5' => null,
        'inactive_flag' => null,
        'record_limit' => 'int64'
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
        'prod' => 'prod',
        'whse' => 'whse',
        'vendor_number' => 'vendorNumber',
        'product_line' => 'productLine',
        'lookup_name' => 'lookupName',
        'status_stock_flag' => 'statusStockFlag',
        'status_direct_flag' => 'statusDirectFlag',
        'status_order_as_needed_flag' => 'statusOrderAsNeededFlag',
        'status_do_not_reorder_flag' => 'statusDoNotReorderFlag',
        'product_category' => 'productCategory',
        'kit_type' => 'kitType',
        'key_word1' => 'keyWord1',
        'key_word2' => 'keyWord2',
        'key_word3' => 'keyWord3',
        'key_word4' => 'keyWord4',
        'key_word5' => 'keyWord5',
        'inactive_flag' => 'inactiveFlag',
        'record_limit' => 'recordLimit'
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
        'prod' => 'setProd',
        'whse' => 'setWhse',
        'vendor_number' => 'setVendorNumber',
        'product_line' => 'setProductLine',
        'lookup_name' => 'setLookupName',
        'status_stock_flag' => 'setStatusStockFlag',
        'status_direct_flag' => 'setStatusDirectFlag',
        'status_order_as_needed_flag' => 'setStatusOrderAsNeededFlag',
        'status_do_not_reorder_flag' => 'setStatusDoNotReorderFlag',
        'product_category' => 'setProductCategory',
        'kit_type' => 'setKitType',
        'key_word1' => 'setKeyWord1',
        'key_word2' => 'setKeyWord2',
        'key_word3' => 'setKeyWord3',
        'key_word4' => 'setKeyWord4',
        'key_word5' => 'setKeyWord5',
        'inactive_flag' => 'setInactiveFlag',
        'record_limit' => 'setRecordLimit'
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
        'prod' => 'getProd',
        'whse' => 'getWhse',
        'vendor_number' => 'getVendorNumber',
        'product_line' => 'getProductLine',
        'lookup_name' => 'getLookupName',
        'status_stock_flag' => 'getStatusStockFlag',
        'status_direct_flag' => 'getStatusDirectFlag',
        'status_order_as_needed_flag' => 'getStatusOrderAsNeededFlag',
        'status_do_not_reorder_flag' => 'getStatusDoNotReorderFlag',
        'product_category' => 'getProductCategory',
        'kit_type' => 'getKitType',
        'key_word1' => 'getKeyWord1',
        'key_word2' => 'getKeyWord2',
        'key_word3' => 'getKeyWord3',
        'key_word4' => 'getKeyWord4',
        'key_word5' => 'getKeyWord5',
        'inactive_flag' => 'getInactiveFlag',
        'record_limit' => 'getRecordLimit'
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
        $this->container['prod'] = isset($data['prod']) ? $data['prod'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['vendor_number'] = isset($data['vendor_number']) ? $data['vendor_number'] : null;
        $this->container['product_line'] = isset($data['product_line']) ? $data['product_line'] : null;
        $this->container['lookup_name'] = isset($data['lookup_name']) ? $data['lookup_name'] : null;
        $this->container['status_stock_flag'] = isset($data['status_stock_flag']) ? $data['status_stock_flag'] : null;
        $this->container['status_direct_flag'] = isset($data['status_direct_flag']) ? $data['status_direct_flag'] : null;
        $this->container['status_order_as_needed_flag'] = isset($data['status_order_as_needed_flag']) ? $data['status_order_as_needed_flag'] : null;
        $this->container['status_do_not_reorder_flag'] = isset($data['status_do_not_reorder_flag']) ? $data['status_do_not_reorder_flag'] : null;
        $this->container['product_category'] = isset($data['product_category']) ? $data['product_category'] : null;
        $this->container['kit_type'] = isset($data['kit_type']) ? $data['kit_type'] : null;
        $this->container['key_word1'] = isset($data['key_word1']) ? $data['key_word1'] : null;
        $this->container['key_word2'] = isset($data['key_word2']) ? $data['key_word2'] : null;
        $this->container['key_word3'] = isset($data['key_word3']) ? $data['key_word3'] : null;
        $this->container['key_word4'] = isset($data['key_word4']) ? $data['key_word4'] : null;
        $this->container['key_word5'] = isset($data['key_word5']) ? $data['key_word5'] : null;
        $this->container['inactive_flag'] = isset($data['inactive_flag']) ? $data['inactive_flag'] : null;
        $this->container['record_limit'] = isset($data['record_limit']) ? $data['record_limit'] : null;
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
     * Gets prod
     *
     * @return string
     */
    public function getProd()
    {
        return $this->container['prod'];
    }

    /**
     * Sets prod
     *
     * @param string $prod prod
     *
     * @return $this
     */
    public function setProd($prod)
    {
        $this->container['prod'] = $prod;

        return $this;
    }

    /**
     * Gets whse
     *
     * @return string
     */
    public function getWhse()
    {
        return $this->container['whse'];
    }

    /**
     * Sets whse
     *
     * @param string $whse whse
     *
     * @return $this
     */
    public function setWhse($whse)
    {
        $this->container['whse'] = $whse;

        return $this;
    }

    /**
     * Gets vendor_number
     *
     * @return double
     */
    public function getVendorNumber()
    {
        return $this->container['vendor_number'];
    }

    /**
     * Sets vendor_number
     *
     * @param double $vendor_number vendor_number
     *
     * @return $this
     */
    public function setVendorNumber($vendor_number)
    {
        $this->container['vendor_number'] = $vendor_number;

        return $this;
    }

    /**
     * Gets product_line
     *
     * @return string
     */
    public function getProductLine()
    {
        return $this->container['product_line'];
    }

    /**
     * Sets product_line
     *
     * @param string $product_line product_line
     *
     * @return $this
     */
    public function setProductLine($product_line)
    {
        $this->container['product_line'] = $product_line;

        return $this;
    }

    /**
     * Gets lookup_name
     *
     * @return string
     */
    public function getLookupName()
    {
        return $this->container['lookup_name'];
    }

    /**
     * Sets lookup_name
     *
     * @param string $lookup_name lookup_name
     *
     * @return $this
     */
    public function setLookupName($lookup_name)
    {
        $this->container['lookup_name'] = $lookup_name;

        return $this;
    }

    /**
     * Gets status_stock_flag
     *
     * @return bool
     */
    public function getStatusStockFlag()
    {
        return $this->container['status_stock_flag'];
    }

    /**
     * Sets status_stock_flag
     *
     * @param bool $status_stock_flag status_stock_flag
     *
     * @return $this
     */
    public function setStatusStockFlag($status_stock_flag)
    {
        $this->container['status_stock_flag'] = $status_stock_flag;

        return $this;
    }

    /**
     * Gets status_direct_flag
     *
     * @return bool
     */
    public function getStatusDirectFlag()
    {
        return $this->container['status_direct_flag'];
    }

    /**
     * Sets status_direct_flag
     *
     * @param bool $status_direct_flag status_direct_flag
     *
     * @return $this
     */
    public function setStatusDirectFlag($status_direct_flag)
    {
        $this->container['status_direct_flag'] = $status_direct_flag;

        return $this;
    }

    /**
     * Gets status_order_as_needed_flag
     *
     * @return bool
     */
    public function getStatusOrderAsNeededFlag()
    {
        return $this->container['status_order_as_needed_flag'];
    }

    /**
     * Sets status_order_as_needed_flag
     *
     * @param bool $status_order_as_needed_flag status_order_as_needed_flag
     *
     * @return $this
     */
    public function setStatusOrderAsNeededFlag($status_order_as_needed_flag)
    {
        $this->container['status_order_as_needed_flag'] = $status_order_as_needed_flag;

        return $this;
    }

    /**
     * Gets status_do_not_reorder_flag
     *
     * @return bool
     */
    public function getStatusDoNotReorderFlag()
    {
        return $this->container['status_do_not_reorder_flag'];
    }

    /**
     * Sets status_do_not_reorder_flag
     *
     * @param bool $status_do_not_reorder_flag status_do_not_reorder_flag
     *
     * @return $this
     */
    public function setStatusDoNotReorderFlag($status_do_not_reorder_flag)
    {
        $this->container['status_do_not_reorder_flag'] = $status_do_not_reorder_flag;

        return $this;
    }

    /**
     * Gets product_category
     *
     * @return string
     */
    public function getProductCategory()
    {
        return $this->container['product_category'];
    }

    /**
     * Sets product_category
     *
     * @param string $product_category product_category
     *
     * @return $this
     */
    public function setProductCategory($product_category)
    {
        $this->container['product_category'] = $product_category;

        return $this;
    }

    /**
     * Gets kit_type
     *
     * @return string
     */
    public function getKitType()
    {
        return $this->container['kit_type'];
    }

    /**
     * Sets kit_type
     *
     * @param string $kit_type kit_type
     *
     * @return $this
     */
    public function setKitType($kit_type)
    {
        $this->container['kit_type'] = $kit_type;

        return $this;
    }

    /**
     * Gets key_word1
     *
     * @return string
     */
    public function getKeyWord1()
    {
        return $this->container['key_word1'];
    }

    /**
     * Sets key_word1
     *
     * @param string $key_word1 key_word1
     *
     * @return $this
     */
    public function setKeyWord1($key_word1)
    {
        $this->container['key_word1'] = $key_word1;

        return $this;
    }

    /**
     * Gets key_word2
     *
     * @return string
     */
    public function getKeyWord2()
    {
        return $this->container['key_word2'];
    }

    /**
     * Sets key_word2
     *
     * @param string $key_word2 key_word2
     *
     * @return $this
     */
    public function setKeyWord2($key_word2)
    {
        $this->container['key_word2'] = $key_word2;

        return $this;
    }

    /**
     * Gets key_word3
     *
     * @return string
     */
    public function getKeyWord3()
    {
        return $this->container['key_word3'];
    }

    /**
     * Sets key_word3
     *
     * @param string $key_word3 key_word3
     *
     * @return $this
     */
    public function setKeyWord3($key_word3)
    {
        $this->container['key_word3'] = $key_word3;

        return $this;
    }

    /**
     * Gets key_word4
     *
     * @return string
     */
    public function getKeyWord4()
    {
        return $this->container['key_word4'];
    }

    /**
     * Sets key_word4
     *
     * @param string $key_word4 key_word4
     *
     * @return $this
     */
    public function setKeyWord4($key_word4)
    {
        $this->container['key_word4'] = $key_word4;

        return $this;
    }

    /**
     * Gets key_word5
     *
     * @return string
     */
    public function getKeyWord5()
    {
        return $this->container['key_word5'];
    }

    /**
     * Sets key_word5
     *
     * @param string $key_word5 key_word5
     *
     * @return $this
     */
    public function setKeyWord5($key_word5)
    {
        $this->container['key_word5'] = $key_word5;

        return $this;
    }

    /**
     * Gets inactive_flag
     *
     * @return bool
     */
    public function getInactiveFlag()
    {
        return $this->container['inactive_flag'];
    }

    /**
     * Sets inactive_flag
     *
     * @param bool $inactive_flag inactive_flag
     *
     * @return $this
     */
    public function setInactiveFlag($inactive_flag)
    {
        $this->container['inactive_flag'] = $inactive_flag;

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

