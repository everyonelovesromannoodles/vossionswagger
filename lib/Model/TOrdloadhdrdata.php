<?php
/**
 * TOrdloadhdrdata
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
 * TOrdloadhdrdata Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TOrdloadhdrdata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-ordloadhdrdata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'messageout' => 'string',
        'orderno' => 'int',
        'ordersuf' => 'int',
        'completioncd' => 'string',
        'custpo' => 'string',
        'totinvamt' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'messageout' => null,
        'orderno' => 'int64',
        'ordersuf' => 'int64',
        'completioncd' => null,
        'custpo' => null,
        'totinvamt' => 'double'
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
        'messageout' => 'messageout',
        'orderno' => 'orderno',
        'ordersuf' => 'ordersuf',
        'completioncd' => 'completioncd',
        'custpo' => 'custpo',
        'totinvamt' => 'totinvamt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'messageout' => 'setMessageout',
        'orderno' => 'setOrderno',
        'ordersuf' => 'setOrdersuf',
        'completioncd' => 'setCompletioncd',
        'custpo' => 'setCustpo',
        'totinvamt' => 'setTotinvamt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'messageout' => 'getMessageout',
        'orderno' => 'getOrderno',
        'ordersuf' => 'getOrdersuf',
        'completioncd' => 'getCompletioncd',
        'custpo' => 'getCustpo',
        'totinvamt' => 'getTotinvamt'
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
        $this->container['messageout'] = isset($data['messageout']) ? $data['messageout'] : null;
        $this->container['orderno'] = isset($data['orderno']) ? $data['orderno'] : null;
        $this->container['ordersuf'] = isset($data['ordersuf']) ? $data['ordersuf'] : null;
        $this->container['completioncd'] = isset($data['completioncd']) ? $data['completioncd'] : null;
        $this->container['custpo'] = isset($data['custpo']) ? $data['custpo'] : null;
        $this->container['totinvamt'] = isset($data['totinvamt']) ? $data['totinvamt'] : null;
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
     * Gets messageout
     *
     * @return string
     */
    public function getMessageout()
    {
        return $this->container['messageout'];
    }

    /**
     * Sets messageout
     *
     * @param string $messageout messageout
     *
     * @return $this
     */
    public function setMessageout($messageout)
    {
        $this->container['messageout'] = $messageout;

        return $this;
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
     * Gets completioncd
     *
     * @return string
     */
    public function getCompletioncd()
    {
        return $this->container['completioncd'];
    }

    /**
     * Sets completioncd
     *
     * @param string $completioncd completioncd
     *
     * @return $this
     */
    public function setCompletioncd($completioncd)
    {
        $this->container['completioncd'] = $completioncd;

        return $this;
    }

    /**
     * Gets custpo
     *
     * @return string
     */
    public function getCustpo()
    {
        return $this->container['custpo'];
    }

    /**
     * Sets custpo
     *
     * @param string $custpo custpo
     *
     * @return $this
     */
    public function setCustpo($custpo)
    {
        $this->container['custpo'] = $custpo;

        return $this;
    }

    /**
     * Gets totinvamt
     *
     * @return double
     */
    public function getTotinvamt()
    {
        return $this->container['totinvamt'];
    }

    /**
     * Sets totinvamt
     *
     * @param double $totinvamt totinvamt
     *
     * @return $this
     */
    public function setTotinvamt($totinvamt)
    {
        $this->container['totinvamt'] = $totinvamt;

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


