<?php
/**
 * TSfgenstatev2
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
 * TSfgenstatev2 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TSfgenstatev2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-sfgenstatev2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'companyno' => 'int',
        'countrycd' => 'string',
        'statecd' => 'string',
        'statenm' => 'string',
        'extradata' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'companyno' => 'int64',
        'countrycd' => null,
        'statecd' => null,
        'statenm' => null,
        'extradata' => null
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
        'companyno' => 'companyno',
        'countrycd' => 'countrycd',
        'statecd' => 'statecd',
        'statenm' => 'statenm',
        'extradata' => 'extradata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'companyno' => 'setCompanyno',
        'countrycd' => 'setCountrycd',
        'statecd' => 'setStatecd',
        'statenm' => 'setStatenm',
        'extradata' => 'setExtradata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'companyno' => 'getCompanyno',
        'countrycd' => 'getCountrycd',
        'statecd' => 'getStatecd',
        'statenm' => 'getStatenm',
        'extradata' => 'getExtradata'
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
        $this->container['companyno'] = isset($data['companyno']) ? $data['companyno'] : null;
        $this->container['countrycd'] = isset($data['countrycd']) ? $data['countrycd'] : null;
        $this->container['statecd'] = isset($data['statecd']) ? $data['statecd'] : null;
        $this->container['statenm'] = isset($data['statenm']) ? $data['statenm'] : null;
        $this->container['extradata'] = isset($data['extradata']) ? $data['extradata'] : null;
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
     * Gets companyno
     *
     * @return int
     */
    public function getCompanyno()
    {
        return $this->container['companyno'];
    }

    /**
     * Sets companyno
     *
     * @param int $companyno companyno
     *
     * @return $this
     */
    public function setCompanyno($companyno)
    {
        $this->container['companyno'] = $companyno;

        return $this;
    }

    /**
     * Gets countrycd
     *
     * @return string
     */
    public function getCountrycd()
    {
        return $this->container['countrycd'];
    }

    /**
     * Sets countrycd
     *
     * @param string $countrycd countrycd
     *
     * @return $this
     */
    public function setCountrycd($countrycd)
    {
        $this->container['countrycd'] = $countrycd;

        return $this;
    }

    /**
     * Gets statecd
     *
     * @return string
     */
    public function getStatecd()
    {
        return $this->container['statecd'];
    }

    /**
     * Sets statecd
     *
     * @param string $statecd statecd
     *
     * @return $this
     */
    public function setStatecd($statecd)
    {
        $this->container['statecd'] = $statecd;

        return $this;
    }

    /**
     * Gets statenm
     *
     * @return string
     */
    public function getStatenm()
    {
        return $this->container['statenm'];
    }

    /**
     * Sets statenm
     *
     * @param string $statenm statenm
     *
     * @return $this
     */
    public function setStatenm($statenm)
    {
        $this->container['statenm'] = $statenm;

        return $this;
    }

    /**
     * Gets extradata
     *
     * @return string
     */
    public function getExtradata()
    {
        return $this->container['extradata'];
    }

    /**
     * Sets extradata
     *
     * @param string $extradata extradata
     *
     * @return $this
     */
    public function setExtradata($extradata)
    {
        $this->container['extradata'] = $extradata;

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


