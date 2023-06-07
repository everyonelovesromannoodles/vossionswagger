<?php
/**
 * SxapipdequatepricingtotalsResponse
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
 * SxapipdequatepricingtotalsResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapipdequatepricingtotalsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapipdequatepricingtotals_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        't_outeqheaderdata' => '\Swagger\Client\Model\TOuteqheaderdataResp',
        't_outeqlinedata' => '\Swagger\Client\Model\TOuteqlinedataResp',
        't_outfieldvalue' => '\Swagger\Client\Model\TOutfieldvalueResp',
        't_outeqrejectedpromotion' => '\Swagger\Client\Model\TOuteqrejectedpromotionResp',
        't_outeqcartlineitem' => '\Swagger\Client\Model\TOuteqcartlineitemResp',
        't_outeqassigneddiscounts' => '\Swagger\Client\Model\TOuteqassigneddiscountsResp',
        't_outeqfinancialdiscounts' => '\Swagger\Client\Model\TOuteqfinancialdiscountsResp',
        't_outeqcoupons' => '\Swagger\Client\Model\TOuteqcouponsResp',
        't_eqpricingmessages' => '\Swagger\Client\Model\TEqpricingmessagesResp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        't_outeqheaderdata' => null,
        't_outeqlinedata' => null,
        't_outfieldvalue' => null,
        't_outeqrejectedpromotion' => null,
        't_outeqcartlineitem' => null,
        't_outeqassigneddiscounts' => null,
        't_outeqfinancialdiscounts' => null,
        't_outeqcoupons' => null,
        't_eqpricingmessages' => null
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
        't_outeqheaderdata' => 'tOuteqheaderdata',
        't_outeqlinedata' => 'tOuteqlinedata',
        't_outfieldvalue' => 'tOutfieldvalue',
        't_outeqrejectedpromotion' => 'tOuteqrejectedpromotion',
        't_outeqcartlineitem' => 'tOuteqcartlineitem',
        't_outeqassigneddiscounts' => 'tOuteqassigneddiscounts',
        't_outeqfinancialdiscounts' => 'tOuteqfinancialdiscounts',
        't_outeqcoupons' => 'tOuteqcoupons',
        't_eqpricingmessages' => 'tEqpricingmessages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        't_outeqheaderdata' => 'setTOuteqheaderdata',
        't_outeqlinedata' => 'setTOuteqlinedata',
        't_outfieldvalue' => 'setTOutfieldvalue',
        't_outeqrejectedpromotion' => 'setTOuteqrejectedpromotion',
        't_outeqcartlineitem' => 'setTOuteqcartlineitem',
        't_outeqassigneddiscounts' => 'setTOuteqassigneddiscounts',
        't_outeqfinancialdiscounts' => 'setTOuteqfinancialdiscounts',
        't_outeqcoupons' => 'setTOuteqcoupons',
        't_eqpricingmessages' => 'setTEqpricingmessages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        't_outeqheaderdata' => 'getTOuteqheaderdata',
        't_outeqlinedata' => 'getTOuteqlinedata',
        't_outfieldvalue' => 'getTOutfieldvalue',
        't_outeqrejectedpromotion' => 'getTOuteqrejectedpromotion',
        't_outeqcartlineitem' => 'getTOuteqcartlineitem',
        't_outeqassigneddiscounts' => 'getTOuteqassigneddiscounts',
        't_outeqfinancialdiscounts' => 'getTOuteqfinancialdiscounts',
        't_outeqcoupons' => 'getTOuteqcoupons',
        't_eqpricingmessages' => 'getTEqpricingmessages'
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
        $this->container['t_outeqheaderdata'] = isset($data['t_outeqheaderdata']) ? $data['t_outeqheaderdata'] : null;
        $this->container['t_outeqlinedata'] = isset($data['t_outeqlinedata']) ? $data['t_outeqlinedata'] : null;
        $this->container['t_outfieldvalue'] = isset($data['t_outfieldvalue']) ? $data['t_outfieldvalue'] : null;
        $this->container['t_outeqrejectedpromotion'] = isset($data['t_outeqrejectedpromotion']) ? $data['t_outeqrejectedpromotion'] : null;
        $this->container['t_outeqcartlineitem'] = isset($data['t_outeqcartlineitem']) ? $data['t_outeqcartlineitem'] : null;
        $this->container['t_outeqassigneddiscounts'] = isset($data['t_outeqassigneddiscounts']) ? $data['t_outeqassigneddiscounts'] : null;
        $this->container['t_outeqfinancialdiscounts'] = isset($data['t_outeqfinancialdiscounts']) ? $data['t_outeqfinancialdiscounts'] : null;
        $this->container['t_outeqcoupons'] = isset($data['t_outeqcoupons']) ? $data['t_outeqcoupons'] : null;
        $this->container['t_eqpricingmessages'] = isset($data['t_eqpricingmessages']) ? $data['t_eqpricingmessages'] : null;
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
     * Gets t_outeqheaderdata
     *
     * @return \Swagger\Client\Model\TOuteqheaderdataResp
     */
    public function getTOuteqheaderdata()
    {
        return $this->container['t_outeqheaderdata'];
    }

    /**
     * Sets t_outeqheaderdata
     *
     * @param \Swagger\Client\Model\TOuteqheaderdataResp $t_outeqheaderdata t_outeqheaderdata
     *
     * @return $this
     */
    public function setTOuteqheaderdata($t_outeqheaderdata)
    {
        $this->container['t_outeqheaderdata'] = $t_outeqheaderdata;

        return $this;
    }

    /**
     * Gets t_outeqlinedata
     *
     * @return \Swagger\Client\Model\TOuteqlinedataResp
     */
    public function getTOuteqlinedata()
    {
        return $this->container['t_outeqlinedata'];
    }

    /**
     * Sets t_outeqlinedata
     *
     * @param \Swagger\Client\Model\TOuteqlinedataResp $t_outeqlinedata t_outeqlinedata
     *
     * @return $this
     */
    public function setTOuteqlinedata($t_outeqlinedata)
    {
        $this->container['t_outeqlinedata'] = $t_outeqlinedata;

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
     * Gets t_outeqrejectedpromotion
     *
     * @return \Swagger\Client\Model\TOuteqrejectedpromotionResp
     */
    public function getTOuteqrejectedpromotion()
    {
        return $this->container['t_outeqrejectedpromotion'];
    }

    /**
     * Sets t_outeqrejectedpromotion
     *
     * @param \Swagger\Client\Model\TOuteqrejectedpromotionResp $t_outeqrejectedpromotion t_outeqrejectedpromotion
     *
     * @return $this
     */
    public function setTOuteqrejectedpromotion($t_outeqrejectedpromotion)
    {
        $this->container['t_outeqrejectedpromotion'] = $t_outeqrejectedpromotion;

        return $this;
    }

    /**
     * Gets t_outeqcartlineitem
     *
     * @return \Swagger\Client\Model\TOuteqcartlineitemResp
     */
    public function getTOuteqcartlineitem()
    {
        return $this->container['t_outeqcartlineitem'];
    }

    /**
     * Sets t_outeqcartlineitem
     *
     * @param \Swagger\Client\Model\TOuteqcartlineitemResp $t_outeqcartlineitem t_outeqcartlineitem
     *
     * @return $this
     */
    public function setTOuteqcartlineitem($t_outeqcartlineitem)
    {
        $this->container['t_outeqcartlineitem'] = $t_outeqcartlineitem;

        return $this;
    }

    /**
     * Gets t_outeqassigneddiscounts
     *
     * @return \Swagger\Client\Model\TOuteqassigneddiscountsResp
     */
    public function getTOuteqassigneddiscounts()
    {
        return $this->container['t_outeqassigneddiscounts'];
    }

    /**
     * Sets t_outeqassigneddiscounts
     *
     * @param \Swagger\Client\Model\TOuteqassigneddiscountsResp $t_outeqassigneddiscounts t_outeqassigneddiscounts
     *
     * @return $this
     */
    public function setTOuteqassigneddiscounts($t_outeqassigneddiscounts)
    {
        $this->container['t_outeqassigneddiscounts'] = $t_outeqassigneddiscounts;

        return $this;
    }

    /**
     * Gets t_outeqfinancialdiscounts
     *
     * @return \Swagger\Client\Model\TOuteqfinancialdiscountsResp
     */
    public function getTOuteqfinancialdiscounts()
    {
        return $this->container['t_outeqfinancialdiscounts'];
    }

    /**
     * Sets t_outeqfinancialdiscounts
     *
     * @param \Swagger\Client\Model\TOuteqfinancialdiscountsResp $t_outeqfinancialdiscounts t_outeqfinancialdiscounts
     *
     * @return $this
     */
    public function setTOuteqfinancialdiscounts($t_outeqfinancialdiscounts)
    {
        $this->container['t_outeqfinancialdiscounts'] = $t_outeqfinancialdiscounts;

        return $this;
    }

    /**
     * Gets t_outeqcoupons
     *
     * @return \Swagger\Client\Model\TOuteqcouponsResp
     */
    public function getTOuteqcoupons()
    {
        return $this->container['t_outeqcoupons'];
    }

    /**
     * Sets t_outeqcoupons
     *
     * @param \Swagger\Client\Model\TOuteqcouponsResp $t_outeqcoupons t_outeqcoupons
     *
     * @return $this
     */
    public function setTOuteqcoupons($t_outeqcoupons)
    {
        $this->container['t_outeqcoupons'] = $t_outeqcoupons;

        return $this;
    }

    /**
     * Gets t_eqpricingmessages
     *
     * @return \Swagger\Client\Model\TEqpricingmessagesResp
     */
    public function getTEqpricingmessages()
    {
        return $this->container['t_eqpricingmessages'];
    }

    /**
     * Sets t_eqpricingmessages
     *
     * @param \Swagger\Client\Model\TEqpricingmessagesResp $t_eqpricingmessages t_eqpricingmessages
     *
     * @return $this
     */
    public function setTEqpricingmessages($t_eqpricingmessages)
    {
        $this->container['t_eqpricingmessages'] = $t_eqpricingmessages;

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

