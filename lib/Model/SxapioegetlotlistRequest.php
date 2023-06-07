<?php
/**
 * SxapioegetlotlistRequest
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
 * SxapioegetlotlistRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapioegetlotlistRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapioegetlotlist_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'warehouse' => 'string',
        'product_code' => 'string',
        'return_flag' => 'bool',
        'order_number' => 'int',
        'order_suffix' => 'int',
        'line_number' => 'int',
        'sequence_number' => 'int',
        'return_order_number' => 'int',
        'return_order_suffix' => 'int',
        'return_line_number' => 'int',
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
        'warehouse' => null,
        'product_code' => null,
        'return_flag' => null,
        'order_number' => 'int64',
        'order_suffix' => 'int64',
        'line_number' => 'int64',
        'sequence_number' => 'int64',
        'return_order_number' => 'int64',
        'return_order_suffix' => 'int64',
        'return_line_number' => 'int64',
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
        'warehouse' => 'warehouse',
        'product_code' => 'productCode',
        'return_flag' => 'returnFlag',
        'order_number' => 'orderNumber',
        'order_suffix' => 'orderSuffix',
        'line_number' => 'lineNumber',
        'sequence_number' => 'sequenceNumber',
        'return_order_number' => 'returnOrderNumber',
        'return_order_suffix' => 'returnOrderSuffix',
        'return_line_number' => 'returnLineNumber',
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
        'warehouse' => 'setWarehouse',
        'product_code' => 'setProductCode',
        'return_flag' => 'setReturnFlag',
        'order_number' => 'setOrderNumber',
        'order_suffix' => 'setOrderSuffix',
        'line_number' => 'setLineNumber',
        'sequence_number' => 'setSequenceNumber',
        'return_order_number' => 'setReturnOrderNumber',
        'return_order_suffix' => 'setReturnOrderSuffix',
        'return_line_number' => 'setReturnLineNumber',
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
        'warehouse' => 'getWarehouse',
        'product_code' => 'getProductCode',
        'return_flag' => 'getReturnFlag',
        'order_number' => 'getOrderNumber',
        'order_suffix' => 'getOrderSuffix',
        'line_number' => 'getLineNumber',
        'sequence_number' => 'getSequenceNumber',
        'return_order_number' => 'getReturnOrderNumber',
        'return_order_suffix' => 'getReturnOrderSuffix',
        'return_line_number' => 'getReturnLineNumber',
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
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
        $this->container['product_code'] = isset($data['product_code']) ? $data['product_code'] : null;
        $this->container['return_flag'] = isset($data['return_flag']) ? $data['return_flag'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['order_suffix'] = isset($data['order_suffix']) ? $data['order_suffix'] : null;
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['sequence_number'] = isset($data['sequence_number']) ? $data['sequence_number'] : null;
        $this->container['return_order_number'] = isset($data['return_order_number']) ? $data['return_order_number'] : null;
        $this->container['return_order_suffix'] = isset($data['return_order_suffix']) ? $data['return_order_suffix'] : null;
        $this->container['return_line_number'] = isset($data['return_line_number']) ? $data['return_line_number'] : null;
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
     * Gets return_flag
     *
     * @return bool
     */
    public function getReturnFlag()
    {
        return $this->container['return_flag'];
    }

    /**
     * Sets return_flag
     *
     * @param bool $return_flag return_flag
     *
     * @return $this
     */
    public function setReturnFlag($return_flag)
    {
        $this->container['return_flag'] = $return_flag;

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
     * Gets line_number
     *
     * @return int
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param int $line_number line_number
     *
     * @return $this
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets sequence_number
     *
     * @return int
     */
    public function getSequenceNumber()
    {
        return $this->container['sequence_number'];
    }

    /**
     * Sets sequence_number
     *
     * @param int $sequence_number sequence_number
     *
     * @return $this
     */
    public function setSequenceNumber($sequence_number)
    {
        $this->container['sequence_number'] = $sequence_number;

        return $this;
    }

    /**
     * Gets return_order_number
     *
     * @return int
     */
    public function getReturnOrderNumber()
    {
        return $this->container['return_order_number'];
    }

    /**
     * Sets return_order_number
     *
     * @param int $return_order_number return_order_number
     *
     * @return $this
     */
    public function setReturnOrderNumber($return_order_number)
    {
        $this->container['return_order_number'] = $return_order_number;

        return $this;
    }

    /**
     * Gets return_order_suffix
     *
     * @return int
     */
    public function getReturnOrderSuffix()
    {
        return $this->container['return_order_suffix'];
    }

    /**
     * Sets return_order_suffix
     *
     * @param int $return_order_suffix return_order_suffix
     *
     * @return $this
     */
    public function setReturnOrderSuffix($return_order_suffix)
    {
        $this->container['return_order_suffix'] = $return_order_suffix;

        return $this;
    }

    /**
     * Gets return_line_number
     *
     * @return int
     */
    public function getReturnLineNumber()
    {
        return $this->container['return_line_number'];
    }

    /**
     * Sets return_line_number
     *
     * @param int $return_line_number return_line_number
     *
     * @return $this
     */
    public function setReturnLineNumber($return_line_number)
    {
        $this->container['return_line_number'] = $return_line_number;

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


