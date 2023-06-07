<?php
/**
 * SxtLncomm
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
 * SxtLncomm Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxtLncomm implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxt_lncomm';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_iden' => 'string',
        'seq_no' => 'int',
        'sx_line_no' => 'string',
        'text_data' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_iden' => null,
        'seq_no' => 'int64',
        'sx_line_no' => null,
        'text_data' => null
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
        'line_iden' => 'lineIden',
        'seq_no' => 'seqNo',
        'sx_line_no' => 'sxLineNo',
        'text_data' => 'textData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_iden' => 'setLineIden',
        'seq_no' => 'setSeqNo',
        'sx_line_no' => 'setSxLineNo',
        'text_data' => 'setTextData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_iden' => 'getLineIden',
        'seq_no' => 'getSeqNo',
        'sx_line_no' => 'getSxLineNo',
        'text_data' => 'getTextData'
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
        $this->container['line_iden'] = isset($data['line_iden']) ? $data['line_iden'] : null;
        $this->container['seq_no'] = isset($data['seq_no']) ? $data['seq_no'] : null;
        $this->container['sx_line_no'] = isset($data['sx_line_no']) ? $data['sx_line_no'] : null;
        $this->container['text_data'] = isset($data['text_data']) ? $data['text_data'] : null;
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
     * Gets line_iden
     *
     * @return string
     */
    public function getLineIden()
    {
        return $this->container['line_iden'];
    }

    /**
     * Sets line_iden
     *
     * @param string $line_iden line_iden
     *
     * @return $this
     */
    public function setLineIden($line_iden)
    {
        $this->container['line_iden'] = $line_iden;

        return $this;
    }

    /**
     * Gets seq_no
     *
     * @return int
     */
    public function getSeqNo()
    {
        return $this->container['seq_no'];
    }

    /**
     * Sets seq_no
     *
     * @param int $seq_no seq_no
     *
     * @return $this
     */
    public function setSeqNo($seq_no)
    {
        $this->container['seq_no'] = $seq_no;

        return $this;
    }

    /**
     * Gets sx_line_no
     *
     * @return string
     */
    public function getSxLineNo()
    {
        return $this->container['sx_line_no'];
    }

    /**
     * Sets sx_line_no
     *
     * @param string $sx_line_no sx_line_no
     *
     * @return $this
     */
    public function setSxLineNo($sx_line_no)
    {
        $this->container['sx_line_no'] = $sx_line_no;

        return $this;
    }

    /**
     * Gets text_data
     *
     * @return string
     */
    public function getTextData()
    {
        return $this->container['text_data'];
    }

    /**
     * Sets text_data
     *
     * @param string $text_data text_data
     *
     * @return $this
     */
    public function setTextData($text_data)
    {
        $this->container['text_data'] = $text_data;

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

