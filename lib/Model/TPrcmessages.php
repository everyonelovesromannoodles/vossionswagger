<?php
/**
 * TPrcmessages
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
 * TPrcmessages Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TPrcmessages implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-prcmessages';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'setno' => 'int',
        'seqno' => 'int',
        'errtype' => 'string',
        'fieldname' => 'string',
        'messagetext' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'setno' => 'int64',
        'seqno' => 'int64',
        'errtype' => null,
        'fieldname' => null,
        'messagetext' => null
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
        'setno' => 'setno',
        'seqno' => 'seqno',
        'errtype' => 'errtype',
        'fieldname' => 'fieldname',
        'messagetext' => 'messagetext'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'setno' => 'setSetno',
        'seqno' => 'setSeqno',
        'errtype' => 'setErrtype',
        'fieldname' => 'setFieldname',
        'messagetext' => 'setMessagetext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'setno' => 'getSetno',
        'seqno' => 'getSeqno',
        'errtype' => 'getErrtype',
        'fieldname' => 'getFieldname',
        'messagetext' => 'getMessagetext'
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
        $this->container['setno'] = isset($data['setno']) ? $data['setno'] : null;
        $this->container['seqno'] = isset($data['seqno']) ? $data['seqno'] : null;
        $this->container['errtype'] = isset($data['errtype']) ? $data['errtype'] : null;
        $this->container['fieldname'] = isset($data['fieldname']) ? $data['fieldname'] : null;
        $this->container['messagetext'] = isset($data['messagetext']) ? $data['messagetext'] : null;
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
     * Gets setno
     *
     * @return int
     */
    public function getSetno()
    {
        return $this->container['setno'];
    }

    /**
     * Sets setno
     *
     * @param int $setno setno
     *
     * @return $this
     */
    public function setSetno($setno)
    {
        $this->container['setno'] = $setno;

        return $this;
    }

    /**
     * Gets seqno
     *
     * @return int
     */
    public function getSeqno()
    {
        return $this->container['seqno'];
    }

    /**
     * Sets seqno
     *
     * @param int $seqno seqno
     *
     * @return $this
     */
    public function setSeqno($seqno)
    {
        $this->container['seqno'] = $seqno;

        return $this;
    }

    /**
     * Gets errtype
     *
     * @return string
     */
    public function getErrtype()
    {
        return $this->container['errtype'];
    }

    /**
     * Sets errtype
     *
     * @param string $errtype errtype
     *
     * @return $this
     */
    public function setErrtype($errtype)
    {
        $this->container['errtype'] = $errtype;

        return $this;
    }

    /**
     * Gets fieldname
     *
     * @return string
     */
    public function getFieldname()
    {
        return $this->container['fieldname'];
    }

    /**
     * Sets fieldname
     *
     * @param string $fieldname fieldname
     *
     * @return $this
     */
    public function setFieldname($fieldname)
    {
        $this->container['fieldname'] = $fieldname;

        return $this;
    }

    /**
     * Gets messagetext
     *
     * @return string
     */
    public function getMessagetext()
    {
        return $this->container['messagetext'];
    }

    /**
     * Sets messagetext
     *
     * @param string $messagetext messagetext
     *
     * @return $this
     */
    public function setMessagetext($messagetext)
    {
        $this->container['messagetext'] = $messagetext;

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


