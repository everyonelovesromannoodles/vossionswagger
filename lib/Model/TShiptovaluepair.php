<?php
/**
 * TShiptovaluepair
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
 * TShiptovaluepair Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TShiptovaluepair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-shiptovaluepair';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sortfld' => 'string',
        'custno' => 'double',
        'shipto' => 'string',
        'fieldname' => 'string',
        'fieldvalue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sortfld' => null,
        'custno' => 'double',
        'shipto' => null,
        'fieldname' => null,
        'fieldvalue' => null
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
        'sortfld' => 'sortfld',
        'custno' => 'custno',
        'shipto' => 'shipto',
        'fieldname' => 'fieldname',
        'fieldvalue' => 'fieldvalue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sortfld' => 'setSortfld',
        'custno' => 'setCustno',
        'shipto' => 'setShipto',
        'fieldname' => 'setFieldname',
        'fieldvalue' => 'setFieldvalue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sortfld' => 'getSortfld',
        'custno' => 'getCustno',
        'shipto' => 'getShipto',
        'fieldname' => 'getFieldname',
        'fieldvalue' => 'getFieldvalue'
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
        $this->container['sortfld'] = isset($data['sortfld']) ? $data['sortfld'] : null;
        $this->container['custno'] = isset($data['custno']) ? $data['custno'] : null;
        $this->container['shipto'] = isset($data['shipto']) ? $data['shipto'] : null;
        $this->container['fieldname'] = isset($data['fieldname']) ? $data['fieldname'] : null;
        $this->container['fieldvalue'] = isset($data['fieldvalue']) ? $data['fieldvalue'] : null;
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
     * Gets sortfld
     *
     * @return string
     */
    public function getSortfld()
    {
        return $this->container['sortfld'];
    }

    /**
     * Sets sortfld
     *
     * @param string $sortfld sortfld
     *
     * @return $this
     */
    public function setSortfld($sortfld)
    {
        $this->container['sortfld'] = $sortfld;

        return $this;
    }

    /**
     * Gets custno
     *
     * @return double
     */
    public function getCustno()
    {
        return $this->container['custno'];
    }

    /**
     * Sets custno
     *
     * @param double $custno custno
     *
     * @return $this
     */
    public function setCustno($custno)
    {
        $this->container['custno'] = $custno;

        return $this;
    }

    /**
     * Gets shipto
     *
     * @return string
     */
    public function getShipto()
    {
        return $this->container['shipto'];
    }

    /**
     * Sets shipto
     *
     * @param string $shipto shipto
     *
     * @return $this
     */
    public function setShipto($shipto)
    {
        $this->container['shipto'] = $shipto;

        return $this;
    }

    /**
     * Gets fieldname
     *
     * @return string
     */
    public function getFieldname()
    {
        return $this->container['fieldname'];
    }

    /**
     * Sets fieldname
     *
     * @param string $fieldname fieldname
     *
     * @return $this
     */
    public function setFieldname($fieldname)
    {
        $this->container['fieldname'] = $fieldname;

        return $this;
    }

    /**
     * Gets fieldvalue
     *
     * @return string
     */
    public function getFieldvalue()
    {
        return $this->container['fieldvalue'];
    }

    /**
     * Sets fieldvalue
     *
     * @param string $fieldvalue fieldvalue
     *
     * @return $this
     */
    public function setFieldvalue($fieldvalue)
    {
        $this->container['fieldvalue'] = $fieldvalue;

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


