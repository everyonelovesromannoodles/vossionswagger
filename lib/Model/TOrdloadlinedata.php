<?php
/**
 * TOrdloadlinedata
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
 * TOrdloadlinedata Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TOrdloadlinedata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-ordloadlinedata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'orderno' => 'int',
        'ordersuf' => 'int',
        'lineno' => 'int',
        'shipprod' => 'string',
        'descrip' => 'string',
        'qtyord' => 'double',
        'qtyship' => 'double',
        'qtybo' => 'double',
        'price' => 'double',
        'netamt' => 'double',
        'unit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'orderno' => 'int64',
        'ordersuf' => 'int64',
        'lineno' => 'int64',
        'shipprod' => null,
        'descrip' => null,
        'qtyord' => 'double',
        'qtyship' => 'double',
        'qtybo' => 'double',
        'price' => 'double',
        'netamt' => 'double',
        'unit' => null
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
        'orderno' => 'orderno',
        'ordersuf' => 'ordersuf',
        'lineno' => 'lineno',
        'shipprod' => 'shipprod',
        'descrip' => 'descrip',
        'qtyord' => 'qtyord',
        'qtyship' => 'qtyship',
        'qtybo' => 'qtybo',
        'price' => 'price',
        'netamt' => 'netamt',
        'unit' => 'unit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orderno' => 'setOrderno',
        'ordersuf' => 'setOrdersuf',
        'lineno' => 'setLineno',
        'shipprod' => 'setShipprod',
        'descrip' => 'setDescrip',
        'qtyord' => 'setQtyord',
        'qtyship' => 'setQtyship',
        'qtybo' => 'setQtybo',
        'price' => 'setPrice',
        'netamt' => 'setNetamt',
        'unit' => 'setUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orderno' => 'getOrderno',
        'ordersuf' => 'getOrdersuf',
        'lineno' => 'getLineno',
        'shipprod' => 'getShipprod',
        'descrip' => 'getDescrip',
        'qtyord' => 'getQtyord',
        'qtyship' => 'getQtyship',
        'qtybo' => 'getQtybo',
        'price' => 'getPrice',
        'netamt' => 'getNetamt',
        'unit' => 'getUnit'
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
        $this->container['orderno'] = isset($data['orderno']) ? $data['orderno'] : null;
        $this->container['ordersuf'] = isset($data['ordersuf']) ? $data['ordersuf'] : null;
        $this->container['lineno'] = isset($data['lineno']) ? $data['lineno'] : null;
        $this->container['shipprod'] = isset($data['shipprod']) ? $data['shipprod'] : null;
        $this->container['descrip'] = isset($data['descrip']) ? $data['descrip'] : null;
        $this->container['qtyord'] = isset($data['qtyord']) ? $data['qtyord'] : null;
        $this->container['qtyship'] = isset($data['qtyship']) ? $data['qtyship'] : null;
        $this->container['qtybo'] = isset($data['qtybo']) ? $data['qtybo'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['netamt'] = isset($data['netamt']) ? $data['netamt'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
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
     * Gets orderno
     *
     * @return int
     */
    public function getOrderno()
    {
        return $this->container['orderno'];
    }

    /**
     * Sets orderno
     *
     * @param int $orderno orderno
     *
     * @return $this
     */
    public function setOrderno($orderno)
    {
        $this->container['orderno'] = $orderno;

        return $this;
    }

    /**
     * Gets ordersuf
     *
     * @return int
     */
    public function getOrdersuf()
    {
        return $this->container['ordersuf'];
    }

    /**
     * Sets ordersuf
     *
     * @param int $ordersuf ordersuf
     *
     * @return $this
     */
    public function setOrdersuf($ordersuf)
    {
        $this->container['ordersuf'] = $ordersuf;

        return $this;
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
     * Gets shipprod
     *
     * @return string
     */
    public function getShipprod()
    {
        return $this->container['shipprod'];
    }

    /**
     * Sets shipprod
     *
     * @param string $shipprod shipprod
     *
     * @return $this
     */
    public function setShipprod($shipprod)
    {
        $this->container['shipprod'] = $shipprod;

        return $this;
    }

    /**
     * Gets descrip
     *
     * @return string
     */
    public function getDescrip()
    {
        return $this->container['descrip'];
    }

    /**
     * Sets descrip
     *
     * @param string $descrip descrip
     *
     * @return $this
     */
    public function setDescrip($descrip)
    {
        $this->container['descrip'] = $descrip;

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
     * Gets qtybo
     *
     * @return double
     */
    public function getQtybo()
    {
        return $this->container['qtybo'];
    }

    /**
     * Sets qtybo
     *
     * @param double $qtybo qtybo
     *
     * @return $this
     */
    public function setQtybo($qtybo)
    {
        $this->container['qtybo'] = $qtybo;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets netamt
     *
     * @return double
     */
    public function getNetamt()
    {
        return $this->container['netamt'];
    }

    /**
     * Sets netamt
     *
     * @param double $netamt netamt
     *
     * @return $this
     */
    public function setNetamt($netamt)
    {
        $this->container['netamt'] = $netamt;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

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


