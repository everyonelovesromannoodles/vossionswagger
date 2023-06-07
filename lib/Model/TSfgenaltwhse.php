<?php
/**
 * TSfgenaltwhse
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
 * TSfgenaltwhse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TSfgenaltwhse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-sfgenaltwhse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'companyno' => 'int',
        'whseseq' => 'string',
        'whselist' => 'string',
        'extradata' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'companyno' => 'int64',
        'whseseq' => null,
        'whselist' => null,
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
        'whseseq' => 'whseseq',
        'whselist' => 'whselist',
        'extradata' => 'extradata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'companyno' => 'setCompanyno',
        'whseseq' => 'setWhseseq',
        'whselist' => 'setWhselist',
        'extradata' => 'setExtradata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'companyno' => 'getCompanyno',
        'whseseq' => 'getWhseseq',
        'whselist' => 'getWhselist',
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
        $this->container['whseseq'] = isset($data['whseseq']) ? $data['whseseq'] : null;
        $this->container['whselist'] = isset($data['whselist']) ? $data['whselist'] : null;
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
     * Gets whseseq
     *
     * @return string
     */
    public function getWhseseq()
    {
        return $this->container['whseseq'];
    }

    /**
     * Sets whseseq
     *
     * @param string $whseseq whseseq
     *
     * @return $this
     */
    public function setWhseseq($whseseq)
    {
        $this->container['whseseq'] = $whseseq;

        return $this;
    }

    /**
     * Gets whselist
     *
     * @return string
     */
    public function getWhselist()
    {
        return $this->container['whselist'];
    }

    /**
     * Sets whselist
     *
     * @param string $whselist whselist
     *
     * @return $this
     */
    public function setWhselist($whselist)
    {
        $this->container['whselist'] = $whselist;

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


