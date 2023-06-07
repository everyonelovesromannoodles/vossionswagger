<?php
/**
 * SxapisrgetwhseprodbalancesRequest
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
 * SxapisrgetwhseprodbalancesRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapisrgetwhseprodbalancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapisrgetwhseprodbalances_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'product_code' => 'string',
        'unit_of_measure' => 'string',
        'warehouse' => 'string',
        'customer_number' => 'double',
        'ship_to' => 'string',
        'use_cross_reference_flag' => 'bool',
        'include_unavailable_inventory' => 'bool',
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
        'product_code' => null,
        'unit_of_measure' => null,
        'warehouse' => null,
        'customer_number' => 'double',
        'ship_to' => null,
        'use_cross_reference_flag' => null,
        'include_unavailable_inventory' => null,
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
        'product_code' => 'productCode',
        'unit_of_measure' => 'unitOfMeasure',
        'warehouse' => 'warehouse',
        'customer_number' => 'customerNumber',
        'ship_to' => 'shipTo',
        'use_cross_reference_flag' => 'useCrossReferenceFlag',
        'include_unavailable_inventory' => 'includeUnavailableInventory',
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
        'product_code' => 'setProductCode',
        'unit_of_measure' => 'setUnitOfMeasure',
        'warehouse' => 'setWarehouse',
        'customer_number' => 'setCustomerNumber',
        'ship_to' => 'setShipTo',
        'use_cross_reference_flag' => 'setUseCrossReferenceFlag',
        'include_unavailable_inventory' => 'setIncludeUnavailableInventory',
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
        'product_code' => 'getProductCode',
        'unit_of_measure' => 'getUnitOfMeasure',
        'warehouse' => 'getWarehouse',
        'customer_number' => 'getCustomerNumber',
        'ship_to' => 'getShipTo',
        'use_cross_reference_flag' => 'getUseCrossReferenceFlag',
        'include_unavailable_inventory' => 'getIncludeUnavailableInventory',
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
        $this->container['product_code'] = isset($data['product_code']) ? $data['product_code'] : null;
        $this->container['unit_of_measure'] = isset($data['unit_of_measure']) ? $data['unit_of_measure'] : null;
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['use_cross_reference_flag'] = isset($data['use_cross_reference_flag']) ? $data['use_cross_reference_flag'] : null;
        $this->container['include_unavailable_inventory'] = isset($data['include_unavailable_inventory']) ? $data['include_unavailable_inventory'] : null;
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
     * Gets unit_of_measure
     *
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure
     *
     * @param string $unit_of_measure unit_of_measure
     *
     * @return $this
     */
    public function setUnitOfMeasure($unit_of_measure)
    {
        $this->container['unit_of_measure'] = $unit_of_measure;

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
     * Gets use_cross_reference_flag
     *
     * @return bool
     */
    public function getUseCrossReferenceFlag()
    {
        return $this->container['use_cross_reference_flag'];
    }

    /**
     * Sets use_cross_reference_flag
     *
     * @param bool $use_cross_reference_flag use_cross_reference_flag
     *
     * @return $this
     */
    public function setUseCrossReferenceFlag($use_cross_reference_flag)
    {
        $this->container['use_cross_reference_flag'] = $use_cross_reference_flag;

        return $this;
    }

    /**
     * Gets include_unavailable_inventory
     *
     * @return bool
     */
    public function getIncludeUnavailableInventory()
    {
        return $this->container['include_unavailable_inventory'];
    }

    /**
     * Sets include_unavailable_inventory
     *
     * @param bool $include_unavailable_inventory include_unavailable_inventory
     *
     * @return $this
     */
    public function setIncludeUnavailableInventory($include_unavailable_inventory)
    {
        $this->container['include_unavailable_inventory'] = $include_unavailable_inventory;

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


