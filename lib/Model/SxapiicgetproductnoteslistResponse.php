<?php
/**
 * SxapiicgetproductnoteslistResponse
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
 * SxapiicgetproductnoteslistResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapiicgetproductnoteslistResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiicgetproductnoteslist_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'c_error_message' => 'string',
        'cross_reference_product' => 'string',
        'cross_reference_type' => 'string',
        'more_records_flag' => 'bool',
        't_notes' => '\Swagger\Client\Model\TNotesResp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'c_error_message' => null,
        'cross_reference_product' => null,
        'cross_reference_type' => null,
        'more_records_flag' => null,
        't_notes' => null
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
        'cross_reference_product' => 'crossReferenceProduct',
        'cross_reference_type' => 'crossReferenceType',
        'more_records_flag' => 'moreRecordsFlag',
        't_notes' => 'tNotes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_error_message' => 'setCErrorMessage',
        'cross_reference_product' => 'setCrossReferenceProduct',
        'cross_reference_type' => 'setCrossReferenceType',
        'more_records_flag' => 'setMoreRecordsFlag',
        't_notes' => 'setTNotes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_error_message' => 'getCErrorMessage',
        'cross_reference_product' => 'getCrossReferenceProduct',
        'cross_reference_type' => 'getCrossReferenceType',
        'more_records_flag' => 'getMoreRecordsFlag',
        't_notes' => 'getTNotes'
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
        $this->container['cross_reference_product'] = isset($data['cross_reference_product']) ? $data['cross_reference_product'] : null;
        $this->container['cross_reference_type'] = isset($data['cross_reference_type']) ? $data['cross_reference_type'] : null;
        $this->container['more_records_flag'] = isset($data['more_records_flag']) ? $data['more_records_flag'] : null;
        $this->container['t_notes'] = isset($data['t_notes']) ? $data['t_notes'] : null;
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
     * Gets cross_reference_product
     *
     * @return string
     */
    public function getCrossReferenceProduct()
    {
        return $this->container['cross_reference_product'];
    }

    /**
     * Sets cross_reference_product
     *
     * @param string $cross_reference_product cross_reference_product
     *
     * @return $this
     */
    public function setCrossReferenceProduct($cross_reference_product)
    {
        $this->container['cross_reference_product'] = $cross_reference_product;

        return $this;
    }

    /**
     * Gets cross_reference_type
     *
     * @return string
     */
    public function getCrossReferenceType()
    {
        return $this->container['cross_reference_type'];
    }

    /**
     * Sets cross_reference_type
     *
     * @param string $cross_reference_type cross_reference_type
     *
     * @return $this
     */
    public function setCrossReferenceType($cross_reference_type)
    {
        $this->container['cross_reference_type'] = $cross_reference_type;

        return $this;
    }

    /**
     * Gets more_records_flag
     *
     * @return bool
     */
    public function getMoreRecordsFlag()
    {
        return $this->container['more_records_flag'];
    }

    /**
     * Sets more_records_flag
     *
     * @param bool $more_records_flag more_records_flag
     *
     * @return $this
     */
    public function setMoreRecordsFlag($more_records_flag)
    {
        $this->container['more_records_flag'] = $more_records_flag;

        return $this;
    }

    /**
     * Gets t_notes
     *
     * @return \Swagger\Client\Model\TNotesResp
     */
    public function getTNotes()
    {
        return $this->container['t_notes'];
    }

    /**
     * Sets t_notes
     *
     * @param \Swagger\Client\Model\TNotesResp $t_notes t_notes
     *
     * @return $this
     */
    public function setTNotes($t_notes)
    {
        $this->container['t_notes'] = $t_notes;

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


