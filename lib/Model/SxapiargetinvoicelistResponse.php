<?php
/**
 * SxapiargetinvoicelistResponse
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
 * SxapiargetinvoicelistResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapiargetinvoicelistResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiargetinvoicelist_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'more_records_available' => 'bool',
        'c_error_message' => 'string',
        't_artrans' => '\Swagger\Client\Model\TArtransResp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'more_records_available' => null,
        'c_error_message' => null,
        't_artrans' => null
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
        'more_records_available' => 'moreRecordsAvailable',
        'c_error_message' => 'cErrorMessage',
        't_artrans' => 'tArtrans'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'more_records_available' => 'setMoreRecordsAvailable',
        'c_error_message' => 'setCErrorMessage',
        't_artrans' => 'setTArtrans'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'more_records_available' => 'getMoreRecordsAvailable',
        'c_error_message' => 'getCErrorMessage',
        't_artrans' => 'getTArtrans'
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
        $this->container['more_records_available'] = isset($data['more_records_available']) ? $data['more_records_available'] : null;
        $this->container['c_error_message'] = isset($data['c_error_message']) ? $data['c_error_message'] : null;
        $this->container['t_artrans'] = isset($data['t_artrans']) ? $data['t_artrans'] : null;
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
     * Gets more_records_available
     *
     * @return bool
     */
    public function getMoreRecordsAvailable()
    {
        return $this->container['more_records_available'];
    }

    /**
     * Sets more_records_available
     *
     * @param bool $more_records_available more_records_available
     *
     * @return $this
     */
    public function setMoreRecordsAvailable($more_records_available)
    {
        $this->container['more_records_available'] = $more_records_available;

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
     * Gets t_artrans
     *
     * @return \Swagger\Client\Model\TArtransResp
     */
    public function getTArtrans()
    {
        return $this->container['t_artrans'];
    }

    /**
     * Sets t_artrans
     *
     * @param \Swagger\Client\Model\TArtransResp $t_artrans t_artrans
     *
     * @return $this
     */
    public function setTArtrans($t_artrans)
    {
        $this->container['t_artrans'] = $t_artrans;

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


