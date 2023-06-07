<?php
/**
 * SxapiwtgetsingletransferorderRequest
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
 * SxapiwtgetsingletransferorderRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapiwtgetsingletransferorderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiwtgetsingletransferorder_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'warehouse_transfer_number' => 'int',
        'warehouse_transfer_suffix' => 'int',
        'line_sort' => 'string',
        'include_header_data' => 'bool',
        'include_total_data' => 'bool',
        'include_line_data' => 'bool',
        'single_line_number' => 'int'
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
        'warehouse_transfer_number' => 'int64',
        'warehouse_transfer_suffix' => 'int64',
        'line_sort' => null,
        'include_header_data' => null,
        'include_total_data' => null,
        'include_line_data' => null,
        'single_line_number' => 'int64'
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
        'warehouse_transfer_number' => 'warehouseTransferNumber',
        'warehouse_transfer_suffix' => 'warehouseTransferSuffix',
        'line_sort' => 'lineSort',
        'include_header_data' => 'includeHeaderData',
        'include_total_data' => 'includeTotalData',
        'include_line_data' => 'includeLineData',
        'single_line_number' => 'singleLineNumber'
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
        'warehouse_transfer_number' => 'setWarehouseTransferNumber',
        'warehouse_transfer_suffix' => 'setWarehouseTransferSuffix',
        'line_sort' => 'setLineSort',
        'include_header_data' => 'setIncludeHeaderData',
        'include_total_data' => 'setIncludeTotalData',
        'include_line_data' => 'setIncludeLineData',
        'single_line_number' => 'setSingleLineNumber'
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
        'warehouse_transfer_number' => 'getWarehouseTransferNumber',
        'warehouse_transfer_suffix' => 'getWarehouseTransferSuffix',
        'line_sort' => 'getLineSort',
        'include_header_data' => 'getIncludeHeaderData',
        'include_total_data' => 'getIncludeTotalData',
        'include_line_data' => 'getIncludeLineData',
        'single_line_number' => 'getSingleLineNumber'
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
        $this->container['warehouse_transfer_number'] = isset($data['warehouse_transfer_number']) ? $data['warehouse_transfer_number'] : null;
        $this->container['warehouse_transfer_suffix'] = isset($data['warehouse_transfer_suffix']) ? $data['warehouse_transfer_suffix'] : null;
        $this->container['line_sort'] = isset($data['line_sort']) ? $data['line_sort'] : null;
        $this->container['include_header_data'] = isset($data['include_header_data']) ? $data['include_header_data'] : null;
        $this->container['include_total_data'] = isset($data['include_total_data']) ? $data['include_total_data'] : null;
        $this->container['include_line_data'] = isset($data['include_line_data']) ? $data['include_line_data'] : null;
        $this->container['single_line_number'] = isset($data['single_line_number']) ? $data['single_line_number'] : null;
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
     * Gets warehouse_transfer_number
     *
     * @return int
     */
    public function getWarehouseTransferNumber()
    {
        return $this->container['warehouse_transfer_number'];
    }

    /**
     * Sets warehouse_transfer_number
     *
     * @param int $warehouse_transfer_number warehouse_transfer_number
     *
     * @return $this
     */
    public function setWarehouseTransferNumber($warehouse_transfer_number)
    {
        $this->container['warehouse_transfer_number'] = $warehouse_transfer_number;

        return $this;
    }

    /**
     * Gets warehouse_transfer_suffix
     *
     * @return int
     */
    public function getWarehouseTransferSuffix()
    {
        return $this->container['warehouse_transfer_suffix'];
    }

    /**
     * Sets warehouse_transfer_suffix
     *
     * @param int $warehouse_transfer_suffix warehouse_transfer_suffix
     *
     * @return $this
     */
    public function setWarehouseTransferSuffix($warehouse_transfer_suffix)
    {
        $this->container['warehouse_transfer_suffix'] = $warehouse_transfer_suffix;

        return $this;
    }

    /**
     * Gets line_sort
     *
     * @return string
     */
    public function getLineSort()
    {
        return $this->container['line_sort'];
    }

    /**
     * Sets line_sort
     *
     * @param string $line_sort line_sort
     *
     * @return $this
     */
    public function setLineSort($line_sort)
    {
        $this->container['line_sort'] = $line_sort;

        return $this;
    }

    /**
     * Gets include_header_data
     *
     * @return bool
     */
    public function getIncludeHeaderData()
    {
        return $this->container['include_header_data'];
    }

    /**
     * Sets include_header_data
     *
     * @param bool $include_header_data include_header_data
     *
     * @return $this
     */
    public function setIncludeHeaderData($include_header_data)
    {
        $this->container['include_header_data'] = $include_header_data;

        return $this;
    }

    /**
     * Gets include_total_data
     *
     * @return bool
     */
    public function getIncludeTotalData()
    {
        return $this->container['include_total_data'];
    }

    /**
     * Sets include_total_data
     *
     * @param bool $include_total_data include_total_data
     *
     * @return $this
     */
    public function setIncludeTotalData($include_total_data)
    {
        $this->container['include_total_data'] = $include_total_data;

        return $this;
    }

    /**
     * Gets include_line_data
     *
     * @return bool
     */
    public function getIncludeLineData()
    {
        return $this->container['include_line_data'];
    }

    /**
     * Sets include_line_data
     *
     * @param bool $include_line_data include_line_data
     *
     * @return $this
     */
    public function setIncludeLineData($include_line_data)
    {
        $this->container['include_line_data'] = $include_line_data;

        return $this;
    }

    /**
     * Gets single_line_number
     *
     * @return int
     */
    public function getSingleLineNumber()
    {
        return $this->container['single_line_number'];
    }

    /**
     * Sets single_line_number
     *
     * @param int $single_line_number single_line_number
     *
     * @return $this
     */
    public function setSingleLineNumber($single_line_number)
    {
        $this->container['single_line_number'] = $single_line_number;

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

