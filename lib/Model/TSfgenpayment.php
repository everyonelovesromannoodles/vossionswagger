<?php
/**
 * TSfgenpayment
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
 * TSfgenpayment Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TSfgenpayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-sfgenpayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'companyno' => 'int',
        'pmntty' => 'string',
        'pmnttynm' => 'string',
        'cvvreq' => 'string',
        'extradata' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'companyno' => 'int64',
        'pmntty' => null,
        'pmnttynm' => null,
        'cvvreq' => null,
        'extradata' => null
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
        'companyno' => 'companyno',
        'pmntty' => 'pmntty',
        'pmnttynm' => 'pmnttynm',
        'cvvreq' => 'cvvreq',
        'extradata' => 'extradata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'companyno' => 'setCompanyno',
        'pmntty' => 'setPmntty',
        'pmnttynm' => 'setPmnttynm',
        'cvvreq' => 'setCvvreq',
        'extradata' => 'setExtradata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'companyno' => 'getCompanyno',
        'pmntty' => 'getPmntty',
        'pmnttynm' => 'getPmnttynm',
        'cvvreq' => 'getCvvreq',
        'extradata' => 'getExtradata'
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
        $this->container['companyno'] = isset($data['companyno']) ? $data['companyno'] : null;
        $this->container['pmntty'] = isset($data['pmntty']) ? $data['pmntty'] : null;
        $this->container['pmnttynm'] = isset($data['pmnttynm']) ? $data['pmnttynm'] : null;
        $this->container['cvvreq'] = isset($data['cvvreq']) ? $data['cvvreq'] : null;
        $this->container['extradata'] = isset($data['extradata']) ? $data['extradata'] : null;
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
     * Gets companyno
     *
     * @return int
     */
    public function getCompanyno()
    {
        return $this->container['companyno'];
    }

    /**
     * Sets companyno
     *
     * @param int $companyno companyno
     *
     * @return $this
     */
    public function setCompanyno($companyno)
    {
        $this->container['companyno'] = $companyno;

        return $this;
    }

    /**
     * Gets pmntty
     *
     * @return string
     */
    public function getPmntty()
    {
        return $this->container['pmntty'];
    }

    /**
     * Sets pmntty
     *
     * @param string $pmntty pmntty
     *
     * @return $this
     */
    public function setPmntty($pmntty)
    {
        $this->container['pmntty'] = $pmntty;

        return $this;
    }

    /**
     * Gets pmnttynm
     *
     * @return string
     */
    public function getPmnttynm()
    {
        return $this->container['pmnttynm'];
    }

    /**
     * Sets pmnttynm
     *
     * @param string $pmnttynm pmnttynm
     *
     * @return $this
     */
    public function setPmnttynm($pmnttynm)
    {
        $this->container['pmnttynm'] = $pmnttynm;

        return $this;
    }

    /**
     * Gets cvvreq
     *
     * @return string
     */
    public function getCvvreq()
    {
        return $this->container['cvvreq'];
    }

    /**
     * Sets cvvreq
     *
     * @param string $cvvreq cvvreq
     *
     * @return $this
     */
    public function setCvvreq($cvvreq)
    {
        $this->container['cvvreq'] = $cvvreq;

        return $this;
    }

    /**
     * Gets extradata
     *
     * @return string
     */
    public function getExtradata()
    {
        return $this->container['extradata'];
    }

    /**
     * Sets extradata
     *
     * @param string $extradata extradata
     *
     * @return $this
     */
    public function setExtradata($extradata)
    {
        $this->container['extradata'] = $extradata;

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


