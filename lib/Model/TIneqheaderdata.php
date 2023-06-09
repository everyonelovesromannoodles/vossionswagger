<?php
/**
 * TIneqheaderdata
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
 * TIneqheaderdata Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TIneqheaderdata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-ineqheaderdata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'warehouseid' => 'string',
        'customerid' => 'string',
        'shiptonumber' => 'string',
        'unittype' => 'string',
        'currenttotal' => 'double',
        'userfield' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'warehouseid' => null,
        'customerid' => null,
        'shiptonumber' => null,
        'unittype' => null,
        'currenttotal' => 'double',
        'userfield' => null
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
        'warehouseid' => 'warehouseid',
        'customerid' => 'customerid',
        'shiptonumber' => 'shiptonumber',
        'unittype' => 'unittype',
        'currenttotal' => 'currenttotal',
        'userfield' => 'userfield'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'warehouseid' => 'setWarehouseid',
        'customerid' => 'setCustomerid',
        'shiptonumber' => 'setShiptonumber',
        'unittype' => 'setUnittype',
        'currenttotal' => 'setCurrenttotal',
        'userfield' => 'setUserfield'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'warehouseid' => 'getWarehouseid',
        'customerid' => 'getCustomerid',
        'shiptonumber' => 'getShiptonumber',
        'unittype' => 'getUnittype',
        'currenttotal' => 'getCurrenttotal',
        'userfield' => 'getUserfield'
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
        $this->container['warehouseid'] = isset($data['warehouseid']) ? $data['warehouseid'] : null;
        $this->container['customerid'] = isset($data['customerid']) ? $data['customerid'] : null;
        $this->container['shiptonumber'] = isset($data['shiptonumber']) ? $data['shiptonumber'] : null;
        $this->container['unittype'] = isset($data['unittype']) ? $data['unittype'] : null;
        $this->container['currenttotal'] = isset($data['currenttotal']) ? $data['currenttotal'] : null;
        $this->container['userfield'] = isset($data['userfield']) ? $data['userfield'] : null;
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
     * Gets warehouseid
     *
     * @return string
     */
    public function getWarehouseid()
    {
        return $this->container['warehouseid'];
    }

    /**
     * Sets warehouseid
     *
     * @param string $warehouseid warehouseid
     *
     * @return $this
     */
    public function setWarehouseid($warehouseid)
    {
        $this->container['warehouseid'] = $warehouseid;

        return $this;
    }

    /**
     * Gets customerid
     *
     * @return string
     */
    public function getCustomerid()
    {
        return $this->container['customerid'];
    }

    /**
     * Sets customerid
     *
     * @param string $customerid customerid
     *
     * @return $this
     */
    public function setCustomerid($customerid)
    {
        $this->container['customerid'] = $customerid;

        return $this;
    }

    /**
     * Gets shiptonumber
     *
     * @return string
     */
    public function getShiptonumber()
    {
        return $this->container['shiptonumber'];
    }

    /**
     * Sets shiptonumber
     *
     * @param string $shiptonumber shiptonumber
     *
     * @return $this
     */
    public function setShiptonumber($shiptonumber)
    {
        $this->container['shiptonumber'] = $shiptonumber;

        return $this;
    }

    /**
     * Gets unittype
     *
     * @return string
     */
    public function getUnittype()
    {
        return $this->container['unittype'];
    }

    /**
     * Sets unittype
     *
     * @param string $unittype unittype
     *
     * @return $this
     */
    public function setUnittype($unittype)
    {
        $this->container['unittype'] = $unittype;

        return $this;
    }

    /**
     * Gets currenttotal
     *
     * @return double
     */
    public function getCurrenttotal()
    {
        return $this->container['currenttotal'];
    }

    /**
     * Sets currenttotal
     *
     * @param double $currenttotal currenttotal
     *
     * @return $this
     */
    public function setCurrenttotal($currenttotal)
    {
        $this->container['currenttotal'] = $currenttotal;

        return $this;
    }

    /**
     * Gets userfield
     *
     * @return string
     */
    public function getUserfield()
    {
        return $this->container['userfield'];
    }

    /**
     * Sets userfield
     *
     * @param string $userfield userfield
     *
     * @return $this
     */
    public function setUserfield($userfield)
    {
        $this->container['userfield'] = $userfield;

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


