<?php
/**
 * TSfgenwhse
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
 * TSfgenwhse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TSfgenwhse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-sfgenwhse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'companyno' => 'int',
        'whse' => 'string',
        'whsenm' => 'string',
        'whseprice' => 'string',
        'extradata' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'companyno' => 'int64',
        'whse' => null,
        'whsenm' => null,
        'whseprice' => null,
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
        'whse' => 'whse',
        'whsenm' => 'whsenm',
        'whseprice' => 'whseprice',
        'extradata' => 'extradata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'companyno' => 'setCompanyno',
        'whse' => 'setWhse',
        'whsenm' => 'setWhsenm',
        'whseprice' => 'setWhseprice',
        'extradata' => 'setExtradata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'companyno' => 'getCompanyno',
        'whse' => 'getWhse',
        'whsenm' => 'getWhsenm',
        'whseprice' => 'getWhseprice',
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
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['whsenm'] = isset($data['whsenm']) ? $data['whsenm'] : null;
        $this->container['whseprice'] = isset($data['whseprice']) ? $data['whseprice'] : null;
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
     * Gets whsenm
     *
     * @return string
     */
    public function getWhsenm()
    {
        return $this->container['whsenm'];
    }

    /**
     * Sets whsenm
     *
     * @param string $whsenm whsenm
     *
     * @return $this
     */
    public function setWhsenm($whsenm)
    {
        $this->container['whsenm'] = $whsenm;

        return $this;
    }

    /**
     * Gets whseprice
     *
     * @return string
     */
    public function getWhseprice()
    {
        return $this->container['whseprice'];
    }

    /**
     * Sets whseprice
     *
     * @param string $whseprice whseprice
     *
     * @return $this
     */
    public function setWhseprice($whseprice)
    {
        $this->container['whseprice'] = $whseprice;

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


