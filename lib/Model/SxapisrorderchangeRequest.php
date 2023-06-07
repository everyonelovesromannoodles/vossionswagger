<?php
/**
 * SxapisrorderchangeRequest
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
 * SxapisrorderchangeRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapisrorderchangeRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapisrorderchange_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        't_srchgordhdrin' => '\Swagger\Client\Model\TSrchgordhdrinReq',
        't_srchgordlinein' => '\Swagger\Client\Model\TSrchgordlineinReq',
        't_srchgordhdrextrain' => '\Swagger\Client\Model\TSrchgordhdrextrainReq',
        't_srchgordlineextrain' => '\Swagger\Client\Model\TSrchgordlineextrainReq'
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
        't_srchgordhdrin' => null,
        't_srchgordlinein' => null,
        't_srchgordhdrextrain' => null,
        't_srchgordlineextrain' => null
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
        't_srchgordhdrin' => 'tSrchgordhdrin',
        't_srchgordlinein' => 'tSrchgordlinein',
        't_srchgordhdrextrain' => 'tSrchgordhdrextrain',
        't_srchgordlineextrain' => 'tSrchgordlineextrain'
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
        't_srchgordhdrin' => 'setTSrchgordhdrin',
        't_srchgordlinein' => 'setTSrchgordlinein',
        't_srchgordhdrextrain' => 'setTSrchgordhdrextrain',
        't_srchgordlineextrain' => 'setTSrchgordlineextrain'
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
        't_srchgordhdrin' => 'getTSrchgordhdrin',
        't_srchgordlinein' => 'getTSrchgordlinein',
        't_srchgordhdrextrain' => 'getTSrchgordhdrextrain',
        't_srchgordlineextrain' => 'getTSrchgordlineextrain'
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
        $this->container['t_srchgordhdrin'] = isset($data['t_srchgordhdrin']) ? $data['t_srchgordhdrin'] : null;
        $this->container['t_srchgordlinein'] = isset($data['t_srchgordlinein']) ? $data['t_srchgordlinein'] : null;
        $this->container['t_srchgordhdrextrain'] = isset($data['t_srchgordhdrextrain']) ? $data['t_srchgordhdrextrain'] : null;
        $this->container['t_srchgordlineextrain'] = isset($data['t_srchgordlineextrain']) ? $data['t_srchgordlineextrain'] : null;
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
     * Gets t_srchgordhdrin
     *
     * @return \Swagger\Client\Model\TSrchgordhdrinReq
     */
    public function getTSrchgordhdrin()
    {
        return $this->container['t_srchgordhdrin'];
    }

    /**
     * Sets t_srchgordhdrin
     *
     * @param \Swagger\Client\Model\TSrchgordhdrinReq $t_srchgordhdrin t_srchgordhdrin
     *
     * @return $this
     */
    public function setTSrchgordhdrin($t_srchgordhdrin)
    {
        $this->container['t_srchgordhdrin'] = $t_srchgordhdrin;

        return $this;
    }

    /**
     * Gets t_srchgordlinein
     *
     * @return \Swagger\Client\Model\TSrchgordlineinReq
     */
    public function getTSrchgordlinein()
    {
        return $this->container['t_srchgordlinein'];
    }

    /**
     * Sets t_srchgordlinein
     *
     * @param \Swagger\Client\Model\TSrchgordlineinReq $t_srchgordlinein t_srchgordlinein
     *
     * @return $this
     */
    public function setTSrchgordlinein($t_srchgordlinein)
    {
        $this->container['t_srchgordlinein'] = $t_srchgordlinein;

        return $this;
    }

    /**
     * Gets t_srchgordhdrextrain
     *
     * @return \Swagger\Client\Model\TSrchgordhdrextrainReq
     */
    public function getTSrchgordhdrextrain()
    {
        return $this->container['t_srchgordhdrextrain'];
    }

    /**
     * Sets t_srchgordhdrextrain
     *
     * @param \Swagger\Client\Model\TSrchgordhdrextrainReq $t_srchgordhdrextrain t_srchgordhdrextrain
     *
     * @return $this
     */
    public function setTSrchgordhdrextrain($t_srchgordhdrextrain)
    {
        $this->container['t_srchgordhdrextrain'] = $t_srchgordhdrextrain;

        return $this;
    }

    /**
     * Gets t_srchgordlineextrain
     *
     * @return \Swagger\Client\Model\TSrchgordlineextrainReq
     */
    public function getTSrchgordlineextrain()
    {
        return $this->container['t_srchgordlineextrain'];
    }

    /**
     * Sets t_srchgordlineextrain
     *
     * @param \Swagger\Client\Model\TSrchgordlineextrainReq $t_srchgordlineextrain t_srchgordlineextrain
     *
     * @return $this
     */
    public function setTSrchgordlineextrain($t_srchgordlineextrain)
    {
        $this->container['t_srchgordlineextrain'] = $t_srchgordlineextrain;

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

