<?php
/**
 * Sxapioegetsingleorderv2Response
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
 * Sxapioegetsingleorderv2Response Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sxapioegetsingleorderv2Response implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapioegetsingleorderv2_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'c_error_message' => 'string',
        't_fieldlist' => '\Swagger\Client\Model\TFieldlistResp',
        't_oelineitem' => '\Swagger\Client\Model\TOelineitemResp',
        't_oetaxsa' => '\Swagger\Client\Model\TOetaxsaResp',
        't_oetaxar' => '\Swagger\Client\Model\TOetaxarResp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'c_error_message' => null,
        't_fieldlist' => null,
        't_oelineitem' => null,
        't_oetaxsa' => null,
        't_oetaxar' => null
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
        't_fieldlist' => 'tFieldlist',
        't_oelineitem' => 'tOelineitem',
        't_oetaxsa' => 'tOetaxsa',
        't_oetaxar' => 'tOetaxar'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_error_message' => 'setCErrorMessage',
        't_fieldlist' => 'setTFieldlist',
        't_oelineitem' => 'setTOelineitem',
        't_oetaxsa' => 'setTOetaxsa',
        't_oetaxar' => 'setTOetaxar'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_error_message' => 'getCErrorMessage',
        't_fieldlist' => 'getTFieldlist',
        't_oelineitem' => 'getTOelineitem',
        't_oetaxsa' => 'getTOetaxsa',
        't_oetaxar' => 'getTOetaxar'
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
        $this->container['t_fieldlist'] = isset($data['t_fieldlist']) ? $data['t_fieldlist'] : null;
        $this->container['t_oelineitem'] = isset($data['t_oelineitem']) ? $data['t_oelineitem'] : null;
        $this->container['t_oetaxsa'] = isset($data['t_oetaxsa']) ? $data['t_oetaxsa'] : null;
        $this->container['t_oetaxar'] = isset($data['t_oetaxar']) ? $data['t_oetaxar'] : null;
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
     * Gets t_fieldlist
     *
     * @return \Swagger\Client\Model\TFieldlistResp
     */
    public function getTFieldlist()
    {
        return $this->container['t_fieldlist'];
    }

    /**
     * Sets t_fieldlist
     *
     * @param \Swagger\Client\Model\TFieldlistResp $t_fieldlist t_fieldlist
     *
     * @return $this
     */
    public function setTFieldlist($t_fieldlist)
    {
        $this->container['t_fieldlist'] = $t_fieldlist;

        return $this;
    }

    /**
     * Gets t_oelineitem
     *
     * @return \Swagger\Client\Model\TOelineitemResp
     */
    public function getTOelineitem()
    {
        return $this->container['t_oelineitem'];
    }

    /**
     * Sets t_oelineitem
     *
     * @param \Swagger\Client\Model\TOelineitemResp $t_oelineitem t_oelineitem
     *
     * @return $this
     */
    public function setTOelineitem($t_oelineitem)
    {
        $this->container['t_oelineitem'] = $t_oelineitem;

        return $this;
    }

    /**
     * Gets t_oetaxsa
     *
     * @return \Swagger\Client\Model\TOetaxsaResp
     */
    public function getTOetaxsa()
    {
        return $this->container['t_oetaxsa'];
    }

    /**
     * Sets t_oetaxsa
     *
     * @param \Swagger\Client\Model\TOetaxsaResp $t_oetaxsa t_oetaxsa
     *
     * @return $this
     */
    public function setTOetaxsa($t_oetaxsa)
    {
        $this->container['t_oetaxsa'] = $t_oetaxsa;

        return $this;
    }

    /**
     * Gets t_oetaxar
     *
     * @return \Swagger\Client\Model\TOetaxarResp
     */
    public function getTOetaxar()
    {
        return $this->container['t_oetaxar'];
    }

    /**
     * Sets t_oetaxar
     *
     * @param \Swagger\Client\Model\TOetaxarResp $t_oetaxar t_oetaxar
     *
     * @return $this
     */
    public function setTOetaxar($t_oetaxar)
    {
        $this->container['t_oetaxar'] = $t_oetaxar;

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


