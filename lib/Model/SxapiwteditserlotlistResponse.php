<?php
/**
 * SxapiwteditserlotlistResponse
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
 * SxapiwteditserlotlistResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapiwteditserlotlistResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiwteditserlotlist_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        't_list_outeditserlot' => '\Swagger\Client\Model\TListOuteditserlotResp',
        't_outfieldvalue' => '\Swagger\Client\Model\TOutfieldvalueResp',
        'c_error_message' => 'string',
        'success_flag' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        't_list_outeditserlot' => null,
        't_outfieldvalue' => null,
        'c_error_message' => null,
        'success_flag' => null
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
        't_list_outeditserlot' => 'tListOuteditserlot',
        't_outfieldvalue' => 'tOutfieldvalue',
        'c_error_message' => 'cErrorMessage',
        'success_flag' => 'successFlag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        't_list_outeditserlot' => 'setTListOuteditserlot',
        't_outfieldvalue' => 'setTOutfieldvalue',
        'c_error_message' => 'setCErrorMessage',
        'success_flag' => 'setSuccessFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        't_list_outeditserlot' => 'getTListOuteditserlot',
        't_outfieldvalue' => 'getTOutfieldvalue',
        'c_error_message' => 'getCErrorMessage',
        'success_flag' => 'getSuccessFlag'
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
        $this->container['t_list_outeditserlot'] = isset($data['t_list_outeditserlot']) ? $data['t_list_outeditserlot'] : null;
        $this->container['t_outfieldvalue'] = isset($data['t_outfieldvalue']) ? $data['t_outfieldvalue'] : null;
        $this->container['c_error_message'] = isset($data['c_error_message']) ? $data['c_error_message'] : null;
        $this->container['success_flag'] = isset($data['success_flag']) ? $data['success_flag'] : null;
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
     * Gets t_list_outeditserlot
     *
     * @return \Swagger\Client\Model\TListOuteditserlotResp
     */
    public function getTListOuteditserlot()
    {
        return $this->container['t_list_outeditserlot'];
    }

    /**
     * Sets t_list_outeditserlot
     *
     * @param \Swagger\Client\Model\TListOuteditserlotResp $t_list_outeditserlot t_list_outeditserlot
     *
     * @return $this
     */
    public function setTListOuteditserlot($t_list_outeditserlot)
    {
        $this->container['t_list_outeditserlot'] = $t_list_outeditserlot;

        return $this;
    }

    /**
     * Gets t_outfieldvalue
     *
     * @return \Swagger\Client\Model\TOutfieldvalueResp
     */
    public function getTOutfieldvalue()
    {
        return $this->container['t_outfieldvalue'];
    }

    /**
     * Sets t_outfieldvalue
     *
     * @param \Swagger\Client\Model\TOutfieldvalueResp $t_outfieldvalue t_outfieldvalue
     *
     * @return $this
     */
    public function setTOutfieldvalue($t_outfieldvalue)
    {
        $this->container['t_outfieldvalue'] = $t_outfieldvalue;

        return $this;
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
     * Gets success_flag
     *
     * @return bool
     */
    public function getSuccessFlag()
    {
        return $this->container['success_flag'];
    }

    /**
     * Sets success_flag
     *
     * @param bool $success_flag success_flag
     *
     * @return $this
     */
    public function setSuccessFlag($success_flag)
    {
        $this->container['success_flag'] = $success_flag;

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


