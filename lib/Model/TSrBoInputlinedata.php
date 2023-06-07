<?php
/**
 * TSrBoInputlinedata
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
 * TSrBoInputlinedata Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TSrBoInputlinedata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-sr-bo-inputlinedata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lineno' => 'int',
        'prod' => 'string',
        'qtyord' => 'double',
        'qtyship' => 'double',
        'botype' => 'string',
        'lostbustyl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lineno' => 'int64',
        'prod' => null,
        'qtyord' => 'double',
        'qtyship' => 'double',
        'botype' => null,
        'lostbustyl' => null
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
        'lineno' => 'lineno',
        'prod' => 'prod',
        'qtyord' => 'qtyord',
        'qtyship' => 'qtyship',
        'botype' => 'botype',
        'lostbustyl' => 'lostbustyl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lineno' => 'setLineno',
        'prod' => 'setProd',
        'qtyord' => 'setQtyord',
        'qtyship' => 'setQtyship',
        'botype' => 'setBotype',
        'lostbustyl' => 'setLostbustyl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lineno' => 'getLineno',
        'prod' => 'getProd',
        'qtyord' => 'getQtyord',
        'qtyship' => 'getQtyship',
        'botype' => 'getBotype',
        'lostbustyl' => 'getLostbustyl'
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
        $this->container['lineno'] = isset($data['lineno']) ? $data['lineno'] : null;
        $this->container['prod'] = isset($data['prod']) ? $data['prod'] : null;
        $this->container['qtyord'] = isset($data['qtyord']) ? $data['qtyord'] : null;
        $this->container['qtyship'] = isset($data['qtyship']) ? $data['qtyship'] : null;
        $this->container['botype'] = isset($data['botype']) ? $data['botype'] : null;
        $this->container['lostbustyl'] = isset($data['lostbustyl']) ? $data['lostbustyl'] : null;
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
     * Gets lineno
     *
     * @return int
     */
    public function getLineno()
    {
        return $this->container['lineno'];
    }

    /**
     * Sets lineno
     *
     * @param int $lineno lineno
     *
     * @return $this
     */
    public function setLineno($lineno)
    {
        $this->container['lineno'] = $lineno;

        return $this;
    }

    /**
     * Gets prod
     *
     * @return string
     */
    public function getProd()
    {
        return $this->container['prod'];
    }

    /**
     * Sets prod
     *
     * @param string $prod prod
     *
     * @return $this
     */
    public function setProd($prod)
    {
        $this->container['prod'] = $prod;

        return $this;
    }

    /**
     * Gets qtyord
     *
     * @return double
     */
    public function getQtyord()
    {
        return $this->container['qtyord'];
    }

    /**
     * Sets qtyord
     *
     * @param double $qtyord qtyord
     *
     * @return $this
     */
    public function setQtyord($qtyord)
    {
        $this->container['qtyord'] = $qtyord;

        return $this;
    }

    /**
     * Gets qtyship
     *
     * @return double
     */
    public function getQtyship()
    {
        return $this->container['qtyship'];
    }

    /**
     * Sets qtyship
     *
     * @param double $qtyship qtyship
     *
     * @return $this
     */
    public function setQtyship($qtyship)
    {
        $this->container['qtyship'] = $qtyship;

        return $this;
    }

    /**
     * Gets botype
     *
     * @return string
     */
    public function getBotype()
    {
        return $this->container['botype'];
    }

    /**
     * Sets botype
     *
     * @param string $botype botype
     *
     * @return $this
     */
    public function setBotype($botype)
    {
        $this->container['botype'] = $botype;

        return $this;
    }

    /**
     * Gets lostbustyl
     *
     * @return string
     */
    public function getLostbustyl()
    {
        return $this->container['lostbustyl'];
    }

    /**
     * Sets lostbustyl
     *
     * @param string $lostbustyl lostbustyl
     *
     * @return $this
     */
    public function setLostbustyl($lostbustyl)
    {
        $this->container['lostbustyl'] = $lostbustyl;

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

