<?php
/**
 * TErrormsg
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
 * TErrormsg Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TErrormsg implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-errormsg';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'errlevel' => 'string',
        'errtype' => 'string',
        'lnseqno' => 'int',
        'lnitemnumber' => 'string',
        'fieldname' => 'string',
        'fieldvalue' => 'string',
        'msgtext' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'errlevel' => null,
        'errtype' => null,
        'lnseqno' => 'int64',
        'lnitemnumber' => null,
        'fieldname' => null,
        'fieldvalue' => null,
        'msgtext' => null
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
        'errlevel' => 'errlevel',
        'errtype' => 'errtype',
        'lnseqno' => 'lnseqno',
        'lnitemnumber' => 'lnitemnumber',
        'fieldname' => 'fieldname',
        'fieldvalue' => 'fieldvalue',
        'msgtext' => 'msgtext'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'errlevel' => 'setErrlevel',
        'errtype' => 'setErrtype',
        'lnseqno' => 'setLnseqno',
        'lnitemnumber' => 'setLnitemnumber',
        'fieldname' => 'setFieldname',
        'fieldvalue' => 'setFieldvalue',
        'msgtext' => 'setMsgtext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'errlevel' => 'getErrlevel',
        'errtype' => 'getErrtype',
        'lnseqno' => 'getLnseqno',
        'lnitemnumber' => 'getLnitemnumber',
        'fieldname' => 'getFieldname',
        'fieldvalue' => 'getFieldvalue',
        'msgtext' => 'getMsgtext'
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
        $this->container['errlevel'] = isset($data['errlevel']) ? $data['errlevel'] : null;
        $this->container['errtype'] = isset($data['errtype']) ? $data['errtype'] : null;
        $this->container['lnseqno'] = isset($data['lnseqno']) ? $data['lnseqno'] : null;
        $this->container['lnitemnumber'] = isset($data['lnitemnumber']) ? $data['lnitemnumber'] : null;
        $this->container['fieldname'] = isset($data['fieldname']) ? $data['fieldname'] : null;
        $this->container['fieldvalue'] = isset($data['fieldvalue']) ? $data['fieldvalue'] : null;
        $this->container['msgtext'] = isset($data['msgtext']) ? $data['msgtext'] : null;
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
     * Gets errlevel
     *
     * @return string
     */
    public function getErrlevel()
    {
        return $this->container['errlevel'];
    }

    /**
     * Sets errlevel
     *
     * @param string $errlevel errlevel
     *
     * @return $this
     */
    public function setErrlevel($errlevel)
    {
        $this->container['errlevel'] = $errlevel;

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
     * Gets lnseqno
     *
     * @return int
     */
    public function getLnseqno()
    {
        return $this->container['lnseqno'];
    }

    /**
     * Sets lnseqno
     *
     * @param int $lnseqno lnseqno
     *
     * @return $this
     */
    public function setLnseqno($lnseqno)
    {
        $this->container['lnseqno'] = $lnseqno;

        return $this;
    }

    /**
     * Gets lnitemnumber
     *
     * @return string
     */
    public function getLnitemnumber()
    {
        return $this->container['lnitemnumber'];
    }

    /**
     * Sets lnitemnumber
     *
     * @param string $lnitemnumber lnitemnumber
     *
     * @return $this
     */
    public function setLnitemnumber($lnitemnumber)
    {
        $this->container['lnitemnumber'] = $lnitemnumber;

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
     * Gets fieldvalue
     *
     * @return string
     */
    public function getFieldvalue()
    {
        return $this->container['fieldvalue'];
    }

    /**
     * Sets fieldvalue
     *
     * @param string $fieldvalue fieldvalue
     *
     * @return $this
     */
    public function setFieldvalue($fieldvalue)
    {
        $this->container['fieldvalue'] = $fieldvalue;

        return $this;
    }

    /**
     * Gets msgtext
     *
     * @return string
     */
    public function getMsgtext()
    {
        return $this->container['msgtext'];
    }

    /**
     * Sets msgtext
     *
     * @param string $msgtext msgtext
     *
     * @return $this
     */
    public function setMsgtext($msgtext)
    {
        $this->container['msgtext'] = $msgtext;

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


