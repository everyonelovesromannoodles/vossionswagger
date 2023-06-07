<?php
/**
 * TOetaxsa
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
 * TOetaxsa Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TOetaxsa implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-oetaxsa';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'seqno' => 'int',
        'locallabels' => 'string',
        'taxcode' => 'string',
        'localdescrip' => 'string',
        'taxgroupnm' => 'string',
        'taxamt' => 'string',
        'taxsaleamt' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'seqno' => 'int64',
        'locallabels' => null,
        'taxcode' => null,
        'localdescrip' => null,
        'taxgroupnm' => null,
        'taxamt' => null,
        'taxsaleamt' => null
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
        'seqno' => 'seqno',
        'locallabels' => 'locallabels',
        'taxcode' => 'taxcode',
        'localdescrip' => 'localdescrip',
        'taxgroupnm' => 'taxgroupnm',
        'taxamt' => 'taxamt',
        'taxsaleamt' => 'taxsaleamt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seqno' => 'setSeqno',
        'locallabels' => 'setLocallabels',
        'taxcode' => 'setTaxcode',
        'localdescrip' => 'setLocaldescrip',
        'taxgroupnm' => 'setTaxgroupnm',
        'taxamt' => 'setTaxamt',
        'taxsaleamt' => 'setTaxsaleamt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seqno' => 'getSeqno',
        'locallabels' => 'getLocallabels',
        'taxcode' => 'getTaxcode',
        'localdescrip' => 'getLocaldescrip',
        'taxgroupnm' => 'getTaxgroupnm',
        'taxamt' => 'getTaxamt',
        'taxsaleamt' => 'getTaxsaleamt'
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
        $this->container['seqno'] = isset($data['seqno']) ? $data['seqno'] : null;
        $this->container['locallabels'] = isset($data['locallabels']) ? $data['locallabels'] : null;
        $this->container['taxcode'] = isset($data['taxcode']) ? $data['taxcode'] : null;
        $this->container['localdescrip'] = isset($data['localdescrip']) ? $data['localdescrip'] : null;
        $this->container['taxgroupnm'] = isset($data['taxgroupnm']) ? $data['taxgroupnm'] : null;
        $this->container['taxamt'] = isset($data['taxamt']) ? $data['taxamt'] : null;
        $this->container['taxsaleamt'] = isset($data['taxsaleamt']) ? $data['taxsaleamt'] : null;
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
     * Gets locallabels
     *
     * @return string
     */
    public function getLocallabels()
    {
        return $this->container['locallabels'];
    }

    /**
     * Sets locallabels
     *
     * @param string $locallabels locallabels
     *
     * @return $this
     */
    public function setLocallabels($locallabels)
    {
        $this->container['locallabels'] = $locallabels;

        return $this;
    }

    /**
     * Gets taxcode
     *
     * @return string
     */
    public function getTaxcode()
    {
        return $this->container['taxcode'];
    }

    /**
     * Sets taxcode
     *
     * @param string $taxcode taxcode
     *
     * @return $this
     */
    public function setTaxcode($taxcode)
    {
        $this->container['taxcode'] = $taxcode;

        return $this;
    }

    /**
     * Gets localdescrip
     *
     * @return string
     */
    public function getLocaldescrip()
    {
        return $this->container['localdescrip'];
    }

    /**
     * Sets localdescrip
     *
     * @param string $localdescrip localdescrip
     *
     * @return $this
     */
    public function setLocaldescrip($localdescrip)
    {
        $this->container['localdescrip'] = $localdescrip;

        return $this;
    }

    /**
     * Gets taxgroupnm
     *
     * @return string
     */
    public function getTaxgroupnm()
    {
        return $this->container['taxgroupnm'];
    }

    /**
     * Sets taxgroupnm
     *
     * @param string $taxgroupnm taxgroupnm
     *
     * @return $this
     */
    public function setTaxgroupnm($taxgroupnm)
    {
        $this->container['taxgroupnm'] = $taxgroupnm;

        return $this;
    }

    /**
     * Gets taxamt
     *
     * @return string
     */
    public function getTaxamt()
    {
        return $this->container['taxamt'];
    }

    /**
     * Sets taxamt
     *
     * @param string $taxamt taxamt
     *
     * @return $this
     */
    public function setTaxamt($taxamt)
    {
        $this->container['taxamt'] = $taxamt;

        return $this;
    }

    /**
     * Gets taxsaleamt
     *
     * @return string
     */
    public function getTaxsaleamt()
    {
        return $this->container['taxsaleamt'];
    }

    /**
     * Sets taxsaleamt
     *
     * @param string $taxsaleamt taxsaleamt
     *
     * @return $this
     */
    public function setTaxsaleamt($taxsaleamt)
    {
        $this->container['taxsaleamt'] = $taxsaleamt;

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


