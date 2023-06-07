<?php
/**
 * SxapisfoeordertotloadResponse
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
 * SxapisfoeordertotloadResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapisfoeordertotloadResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapisfoeordertotload_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'c_error_message' => 'string',
        't_ordloadhdrdata' => '\Swagger\Client\Model\TOrdloadhdrdataResp',
        't_ordloadlinedata' => '\Swagger\Client\Model\TOrdloadlinedataResp',
        't_ordtotdata' => '\Swagger\Client\Model\TOrdtotdataResp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'c_error_message' => null,
        't_ordloadhdrdata' => null,
        't_ordloadlinedata' => null,
        't_ordtotdata' => null
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
        'c_error_message' => 'cErrorMessage',
        't_ordloadhdrdata' => 'tOrdloadhdrdata',
        't_ordloadlinedata' => 'tOrdloadlinedata',
        't_ordtotdata' => 'tOrdtotdata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_error_message' => 'setCErrorMessage',
        't_ordloadhdrdata' => 'setTOrdloadhdrdata',
        't_ordloadlinedata' => 'setTOrdloadlinedata',
        't_ordtotdata' => 'setTOrdtotdata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_error_message' => 'getCErrorMessage',
        't_ordloadhdrdata' => 'getTOrdloadhdrdata',
        't_ordloadlinedata' => 'getTOrdloadlinedata',
        't_ordtotdata' => 'getTOrdtotdata'
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
        $this->container['c_error_message'] = isset($data['c_error_message']) ? $data['c_error_message'] : null;
        $this->container['t_ordloadhdrdata'] = isset($data['t_ordloadhdrdata']) ? $data['t_ordloadhdrdata'] : null;
        $this->container['t_ordloadlinedata'] = isset($data['t_ordloadlinedata']) ? $data['t_ordloadlinedata'] : null;
        $this->container['t_ordtotdata'] = isset($data['t_ordtotdata']) ? $data['t_ordtotdata'] : null;
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
     * Gets c_error_message
     *
     * @return string
     */
    public function getCErrorMessage()
    {
        return $this->container['c_error_message'];
    }

    /**
     * Sets c_error_message
     *
     * @param string $c_error_message c_error_message
     *
     * @return $this
     */
    public function setCErrorMessage($c_error_message)
    {
        $this->container['c_error_message'] = $c_error_message;

        return $this;
    }

    /**
     * Gets t_ordloadhdrdata
     *
     * @return \Swagger\Client\Model\TOrdloadhdrdataResp
     */
    public function getTOrdloadhdrdata()
    {
        return $this->container['t_ordloadhdrdata'];
    }

    /**
     * Sets t_ordloadhdrdata
     *
     * @param \Swagger\Client\Model\TOrdloadhdrdataResp $t_ordloadhdrdata t_ordloadhdrdata
     *
     * @return $this
     */
    public function setTOrdloadhdrdata($t_ordloadhdrdata)
    {
        $this->container['t_ordloadhdrdata'] = $t_ordloadhdrdata;

        return $this;
    }

    /**
     * Gets t_ordloadlinedata
     *
     * @return \Swagger\Client\Model\TOrdloadlinedataResp
     */
    public function getTOrdloadlinedata()
    {
        return $this->container['t_ordloadlinedata'];
    }

    /**
     * Sets t_ordloadlinedata
     *
     * @param \Swagger\Client\Model\TOrdloadlinedataResp $t_ordloadlinedata t_ordloadlinedata
     *
     * @return $this
     */
    public function setTOrdloadlinedata($t_ordloadlinedata)
    {
        $this->container['t_ordloadlinedata'] = $t_ordloadlinedata;

        return $this;
    }

    /**
     * Gets t_ordtotdata
     *
     * @return \Swagger\Client\Model\TOrdtotdataResp
     */
    public function getTOrdtotdata()
    {
        return $this->container['t_ordtotdata'];
    }

    /**
     * Sets t_ordtotdata
     *
     * @param \Swagger\Client\Model\TOrdtotdataResp $t_ordtotdata t_ordtotdata
     *
     * @return $this
     */
    public function setTOrdtotdata($t_ordtotdata)
    {
        $this->container['t_ordtotdata'] = $t_ordtotdata;

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


