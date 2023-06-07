<?php
/**
 * Sxapioeorderchangev2Request
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
 * Sxapioeorderchangev2Request Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sxapioeorderchangev2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapioeorderchangev2_request';

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
        'include_lines' => 'bool',
        't_inoeordheader' => '\Swagger\Client\Model\TInoeordheaderReq',
        't_inoeordlinev2' => '\Swagger\Client\Model\TInoeordlinev2Req',
        't_inoeordlinecomp' => '\Swagger\Client\Model\TInoeordlinecompReq',
        't_inoeordnotes' => '\Swagger\Client\Model\TInoeordnotesReq',
        't_inoeordchgserlotdata' => '\Swagger\Client\Model\TInoeordchgserlotdataReq',
        't_inoeordhdrextra' => '\Swagger\Client\Model\TInoeordhdrextraReq',
        't_inoeordlineextra' => '\Swagger\Client\Model\TInoeordlineextraReq'
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
        'include_lines' => null,
        't_inoeordheader' => null,
        't_inoeordlinev2' => null,
        't_inoeordlinecomp' => null,
        't_inoeordnotes' => null,
        't_inoeordchgserlotdata' => null,
        't_inoeordhdrextra' => null,
        't_inoeordlineextra' => null
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
        'include_lines' => 'includeLines',
        't_inoeordheader' => 'tInoeordheader',
        't_inoeordlinev2' => 'tInoeordlinev2',
        't_inoeordlinecomp' => 'tInoeordlinecomp',
        't_inoeordnotes' => 'tInoeordnotes',
        't_inoeordchgserlotdata' => 'tInoeordchgserlotdata',
        't_inoeordhdrextra' => 'tInoeordhdrextra',
        't_inoeordlineextra' => 'tInoeordlineextra'
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
        'include_lines' => 'setIncludeLines',
        't_inoeordheader' => 'setTInoeordheader',
        't_inoeordlinev2' => 'setTInoeordlinev2',
        't_inoeordlinecomp' => 'setTInoeordlinecomp',
        't_inoeordnotes' => 'setTInoeordnotes',
        't_inoeordchgserlotdata' => 'setTInoeordchgserlotdata',
        't_inoeordhdrextra' => 'setTInoeordhdrextra',
        't_inoeordlineextra' => 'setTInoeordlineextra'
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
        'include_lines' => 'getIncludeLines',
        't_inoeordheader' => 'getTInoeordheader',
        't_inoeordlinev2' => 'getTInoeordlinev2',
        't_inoeordlinecomp' => 'getTInoeordlinecomp',
        't_inoeordnotes' => 'getTInoeordnotes',
        't_inoeordchgserlotdata' => 'getTInoeordchgserlotdata',
        't_inoeordhdrextra' => 'getTInoeordhdrextra',
        't_inoeordlineextra' => 'getTInoeordlineextra'
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
        $this->container['include_lines'] = isset($data['include_lines']) ? $data['include_lines'] : null;
        $this->container['t_inoeordheader'] = isset($data['t_inoeordheader']) ? $data['t_inoeordheader'] : null;
        $this->container['t_inoeordlinev2'] = isset($data['t_inoeordlinev2']) ? $data['t_inoeordlinev2'] : null;
        $this->container['t_inoeordlinecomp'] = isset($data['t_inoeordlinecomp']) ? $data['t_inoeordlinecomp'] : null;
        $this->container['t_inoeordnotes'] = isset($data['t_inoeordnotes']) ? $data['t_inoeordnotes'] : null;
        $this->container['t_inoeordchgserlotdata'] = isset($data['t_inoeordchgserlotdata']) ? $data['t_inoeordchgserlotdata'] : null;
        $this->container['t_inoeordhdrextra'] = isset($data['t_inoeordhdrextra']) ? $data['t_inoeordhdrextra'] : null;
        $this->container['t_inoeordlineextra'] = isset($data['t_inoeordlineextra']) ? $data['t_inoeordlineextra'] : null;
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
     * Gets include_lines
     *
     * @return bool
     */
    public function getIncludeLines()
    {
        return $this->container['include_lines'];
    }

    /**
     * Sets include_lines
     *
     * @param bool $include_lines include_lines
     *
     * @return $this
     */
    public function setIncludeLines($include_lines)
    {
        $this->container['include_lines'] = $include_lines;

        return $this;
    }

    /**
     * Gets t_inoeordheader
     *
     * @return \Swagger\Client\Model\TInoeordheaderReq
     */
    public function getTInoeordheader()
    {
        return $this->container['t_inoeordheader'];
    }

    /**
     * Sets t_inoeordheader
     *
     * @param \Swagger\Client\Model\TInoeordheaderReq $t_inoeordheader t_inoeordheader
     *
     * @return $this
     */
    public function setTInoeordheader($t_inoeordheader)
    {
        $this->container['t_inoeordheader'] = $t_inoeordheader;

        return $this;
    }

    /**
     * Gets t_inoeordlinev2
     *
     * @return \Swagger\Client\Model\TInoeordlinev2Req
     */
    public function getTInoeordlinev2()
    {
        return $this->container['t_inoeordlinev2'];
    }

    /**
     * Sets t_inoeordlinev2
     *
     * @param \Swagger\Client\Model\TInoeordlinev2Req $t_inoeordlinev2 t_inoeordlinev2
     *
     * @return $this
     */
    public function setTInoeordlinev2($t_inoeordlinev2)
    {
        $this->container['t_inoeordlinev2'] = $t_inoeordlinev2;

        return $this;
    }

    /**
     * Gets t_inoeordlinecomp
     *
     * @return \Swagger\Client\Model\TInoeordlinecompReq
     */
    public function getTInoeordlinecomp()
    {
        return $this->container['t_inoeordlinecomp'];
    }

    /**
     * Sets t_inoeordlinecomp
     *
     * @param \Swagger\Client\Model\TInoeordlinecompReq $t_inoeordlinecomp t_inoeordlinecomp
     *
     * @return $this
     */
    public function setTInoeordlinecomp($t_inoeordlinecomp)
    {
        $this->container['t_inoeordlinecomp'] = $t_inoeordlinecomp;

        return $this;
    }

    /**
     * Gets t_inoeordnotes
     *
     * @return \Swagger\Client\Model\TInoeordnotesReq
     */
    public function getTInoeordnotes()
    {
        return $this->container['t_inoeordnotes'];
    }

    /**
     * Sets t_inoeordnotes
     *
     * @param \Swagger\Client\Model\TInoeordnotesReq $t_inoeordnotes t_inoeordnotes
     *
     * @return $this
     */
    public function setTInoeordnotes($t_inoeordnotes)
    {
        $this->container['t_inoeordnotes'] = $t_inoeordnotes;

        return $this;
    }

    /**
     * Gets t_inoeordchgserlotdata
     *
     * @return \Swagger\Client\Model\TInoeordchgserlotdataReq
     */
    public function getTInoeordchgserlotdata()
    {
        return $this->container['t_inoeordchgserlotdata'];
    }

    /**
     * Sets t_inoeordchgserlotdata
     *
     * @param \Swagger\Client\Model\TInoeordchgserlotdataReq $t_inoeordchgserlotdata t_inoeordchgserlotdata
     *
     * @return $this
     */
    public function setTInoeordchgserlotdata($t_inoeordchgserlotdata)
    {
        $this->container['t_inoeordchgserlotdata'] = $t_inoeordchgserlotdata;

        return $this;
    }

    /**
     * Gets t_inoeordhdrextra
     *
     * @return \Swagger\Client\Model\TInoeordhdrextraReq
     */
    public function getTInoeordhdrextra()
    {
        return $this->container['t_inoeordhdrextra'];
    }

    /**
     * Sets t_inoeordhdrextra
     *
     * @param \Swagger\Client\Model\TInoeordhdrextraReq $t_inoeordhdrextra t_inoeordhdrextra
     *
     * @return $this
     */
    public function setTInoeordhdrextra($t_inoeordhdrextra)
    {
        $this->container['t_inoeordhdrextra'] = $t_inoeordhdrextra;

        return $this;
    }

    /**
     * Gets t_inoeordlineextra
     *
     * @return \Swagger\Client\Model\TInoeordlineextraReq
     */
    public function getTInoeordlineextra()
    {
        return $this->container['t_inoeordlineextra'];
    }

    /**
     * Sets t_inoeordlineextra
     *
     * @param \Swagger\Client\Model\TInoeordlineextraReq $t_inoeordlineextra t_inoeordlineextra
     *
     * @return $this
     */
    public function setTInoeordlineextra($t_inoeordlineextra)
    {
        $this->container['t_inoeordlineextra'] = $t_inoeordlineextra;

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

