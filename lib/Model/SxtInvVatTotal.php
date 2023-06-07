<?php
/**
 * SxtInvVatTotal
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
 * SxtInvVatTotal Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxtInvVatTotal implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxt_inv_vat_total';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vatrate' => 'string',
        'vatable' => 'string',
        'settdiscamt' => 'string',
        'vatamt' => 'string',
        'linetot' => 'string',
        'vatcode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vatrate' => null,
        'vatable' => null,
        'settdiscamt' => null,
        'vatamt' => null,
        'linetot' => null,
        'vatcode' => null
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
        'vatrate' => 'vatrate',
        'vatable' => 'vatable',
        'settdiscamt' => 'settdiscamt',
        'vatamt' => 'vatamt',
        'linetot' => 'linetot',
        'vatcode' => 'vatcode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vatrate' => 'setVatrate',
        'vatable' => 'setVatable',
        'settdiscamt' => 'setSettdiscamt',
        'vatamt' => 'setVatamt',
        'linetot' => 'setLinetot',
        'vatcode' => 'setVatcode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vatrate' => 'getVatrate',
        'vatable' => 'getVatable',
        'settdiscamt' => 'getSettdiscamt',
        'vatamt' => 'getVatamt',
        'linetot' => 'getLinetot',
        'vatcode' => 'getVatcode'
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
        $this->container['vatrate'] = isset($data['vatrate']) ? $data['vatrate'] : null;
        $this->container['vatable'] = isset($data['vatable']) ? $data['vatable'] : null;
        $this->container['settdiscamt'] = isset($data['settdiscamt']) ? $data['settdiscamt'] : null;
        $this->container['vatamt'] = isset($data['vatamt']) ? $data['vatamt'] : null;
        $this->container['linetot'] = isset($data['linetot']) ? $data['linetot'] : null;
        $this->container['vatcode'] = isset($data['vatcode']) ? $data['vatcode'] : null;
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
     * Gets vatrate
     *
     * @return string
     */
    public function getVatrate()
    {
        return $this->container['vatrate'];
    }

    /**
     * Sets vatrate
     *
     * @param string $vatrate vatrate
     *
     * @return $this
     */
    public function setVatrate($vatrate)
    {
        $this->container['vatrate'] = $vatrate;

        return $this;
    }

    /**
     * Gets vatable
     *
     * @return string
     */
    public function getVatable()
    {
        return $this->container['vatable'];
    }

    /**
     * Sets vatable
     *
     * @param string $vatable vatable
     *
     * @return $this
     */
    public function setVatable($vatable)
    {
        $this->container['vatable'] = $vatable;

        return $this;
    }

    /**
     * Gets settdiscamt
     *
     * @return string
     */
    public function getSettdiscamt()
    {
        return $this->container['settdiscamt'];
    }

    /**
     * Sets settdiscamt
     *
     * @param string $settdiscamt settdiscamt
     *
     * @return $this
     */
    public function setSettdiscamt($settdiscamt)
    {
        $this->container['settdiscamt'] = $settdiscamt;

        return $this;
    }

    /**
     * Gets vatamt
     *
     * @return string
     */
    public function getVatamt()
    {
        return $this->container['vatamt'];
    }

    /**
     * Sets vatamt
     *
     * @param string $vatamt vatamt
     *
     * @return $this
     */
    public function setVatamt($vatamt)
    {
        $this->container['vatamt'] = $vatamt;

        return $this;
    }

    /**
     * Gets linetot
     *
     * @return string
     */
    public function getLinetot()
    {
        return $this->container['linetot'];
    }

    /**
     * Sets linetot
     *
     * @param string $linetot linetot
     *
     * @return $this
     */
    public function setLinetot($linetot)
    {
        $this->container['linetot'] = $linetot;

        return $this;
    }

    /**
     * Gets vatcode
     *
     * @return string
     */
    public function getVatcode()
    {
        return $this->container['vatcode'];
    }

    /**
     * Sets vatcode
     *
     * @param string $vatcode vatcode
     *
     * @return $this
     */
    public function setVatcode($vatcode)
    {
        $this->container['vatcode'] = $vatcode;

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

