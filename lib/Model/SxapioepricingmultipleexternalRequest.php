<?php
/**
 * SxapioepricingmultipleexternalRequest
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
 * SxapioepricingmultipleexternalRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapioepricingmultipleexternalRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapioepricingmultipleexternal_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'saso_api_key' => 'string',
        'arsc_api_key' => 'string',
        'customer_number' => 'double',
        'edi_partner_code' => 'string',
        'ship_to' => 'string',
        'c_key_code' => 'string',
        'get_price_breaks' => 'bool',
        'use_default_whse' => 'bool',
        'send_full_qty_on_order' => 'bool',
        'check_other_whse_inventory' => 'bool',
        'pricing_method' => 'string',
        'extra_data' => 'string',
        't_oemultprcin_v2' => '\Swagger\Client\Model\TOemultprcinV2Req',
        't_infieldvalue' => '\Swagger\Client\Model\TInfieldvalueReq'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_number' => 'int64',
        'operator_init' => null,
        'operator_password' => null,
        'saso_api_key' => null,
        'arsc_api_key' => null,
        'customer_number' => 'double',
        'edi_partner_code' => null,
        'ship_to' => null,
        'c_key_code' => null,
        'get_price_breaks' => null,
        'use_default_whse' => null,
        'send_full_qty_on_order' => null,
        'check_other_whse_inventory' => null,
        'pricing_method' => null,
        'extra_data' => null,
        't_oemultprcin_v2' => null,
        't_infieldvalue' => null
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
        'company_number' => 'companyNumber',
        'operator_init' => 'operatorInit',
        'operator_password' => 'operatorPassword',
        'saso_api_key' => 'sasoApiKey',
        'arsc_api_key' => 'arscApiKey',
        'customer_number' => 'customerNumber',
        'edi_partner_code' => 'ediPartnerCode',
        'ship_to' => 'shipTo',
        'c_key_code' => 'cKeyCode',
        'get_price_breaks' => 'getPriceBreaks',
        'use_default_whse' => 'useDefaultWhse',
        'send_full_qty_on_order' => 'sendFullQtyOnOrder',
        'check_other_whse_inventory' => 'checkOtherWhseInventory',
        'pricing_method' => 'pricingMethod',
        'extra_data' => 'extraData',
        't_oemultprcin_v2' => 'tOemultprcinV2',
        't_infieldvalue' => 'tInfieldvalue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_number' => 'setCompanyNumber',
        'operator_init' => 'setOperatorInit',
        'operator_password' => 'setOperatorPassword',
        'saso_api_key' => 'setSasoApiKey',
        'arsc_api_key' => 'setArscApiKey',
        'customer_number' => 'setCustomerNumber',
        'edi_partner_code' => 'setEdiPartnerCode',
        'ship_to' => 'setShipTo',
        'c_key_code' => 'setCKeyCode',
        'get_price_breaks' => 'setGetPriceBreaks',
        'use_default_whse' => 'setUseDefaultWhse',
        'send_full_qty_on_order' => 'setSendFullQtyOnOrder',
        'check_other_whse_inventory' => 'setCheckOtherWhseInventory',
        'pricing_method' => 'setPricingMethod',
        'extra_data' => 'setExtraData',
        't_oemultprcin_v2' => 'setTOemultprcinV2',
        't_infieldvalue' => 'setTInfieldvalue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_number' => 'getCompanyNumber',
        'operator_init' => 'getOperatorInit',
        'operator_password' => 'getOperatorPassword',
        'saso_api_key' => 'getSasoApiKey',
        'arsc_api_key' => 'getArscApiKey',
        'customer_number' => 'getCustomerNumber',
        'edi_partner_code' => 'getEdiPartnerCode',
        'ship_to' => 'getShipTo',
        'c_key_code' => 'getCKeyCode',
        'get_price_breaks' => 'getGetPriceBreaks',
        'use_default_whse' => 'getUseDefaultWhse',
        'send_full_qty_on_order' => 'getSendFullQtyOnOrder',
        'check_other_whse_inventory' => 'getCheckOtherWhseInventory',
        'pricing_method' => 'getPricingMethod',
        'extra_data' => 'getExtraData',
        't_oemultprcin_v2' => 'getTOemultprcinV2',
        't_infieldvalue' => 'getTInfieldvalue'
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
        $this->container['company_number'] = isset($data['company_number']) ? $data['company_number'] : null;
        $this->container['operator_init'] = isset($data['operator_init']) ? $data['operator_init'] : null;
        $this->container['operator_password'] = isset($data['operator_password']) ? $data['operator_password'] : null;
        $this->container['saso_api_key'] = isset($data['saso_api_key']) ? $data['saso_api_key'] : null;
        $this->container['arsc_api_key'] = isset($data['arsc_api_key']) ? $data['arsc_api_key'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['edi_partner_code'] = isset($data['edi_partner_code']) ? $data['edi_partner_code'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['c_key_code'] = isset($data['c_key_code']) ? $data['c_key_code'] : null;
        $this->container['get_price_breaks'] = isset($data['get_price_breaks']) ? $data['get_price_breaks'] : null;
        $this->container['use_default_whse'] = isset($data['use_default_whse']) ? $data['use_default_whse'] : null;
        $this->container['send_full_qty_on_order'] = isset($data['send_full_qty_on_order']) ? $data['send_full_qty_on_order'] : null;
        $this->container['check_other_whse_inventory'] = isset($data['check_other_whse_inventory']) ? $data['check_other_whse_inventory'] : null;
        $this->container['pricing_method'] = isset($data['pricing_method']) ? $data['pricing_method'] : null;
        $this->container['extra_data'] = isset($data['extra_data']) ? $data['extra_data'] : null;
        $this->container['t_oemultprcin_v2'] = isset($data['t_oemultprcin_v2']) ? $data['t_oemultprcin_v2'] : null;
        $this->container['t_infieldvalue'] = isset($data['t_infieldvalue']) ? $data['t_infieldvalue'] : null;
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
     * Gets company_number
     *
     * @return int
     */
    public function getCompanyNumber()
    {
        return $this->container['company_number'];
    }

    /**
     * Sets company_number
     *
     * @param int $company_number company_number
     *
     * @return $this
     */
    public function setCompanyNumber($company_number)
    {
        $this->container['company_number'] = $company_number;

        return $this;
    }

    /**
     * Gets operator_init
     *
     * @return string
     */
    public function getOperatorInit()
    {
        return $this->container['operator_init'];
    }

    /**
     * Sets operator_init
     *
     * @param string $operator_init operator_init
     *
     * @return $this
     */
    public function setOperatorInit($operator_init)
    {
        $this->container['operator_init'] = $operator_init;

        return $this;
    }

    /**
     * Gets operator_password
     *
     * @return string
     */
    public function getOperatorPassword()
    {
        return $this->container['operator_password'];
    }

    /**
     * Sets operator_password
     *
     * @param string $operator_password operator_password
     *
     * @return $this
     */
    public function setOperatorPassword($operator_password)
    {
        $this->container['operator_password'] = $operator_password;

        return $this;
    }

    /**
     * Gets saso_api_key
     *
     * @return string
     */
    public function getSasoApiKey()
    {
        return $this->container['saso_api_key'];
    }

    /**
     * Sets saso_api_key
     *
     * @param string $saso_api_key saso_api_key
     *
     * @return $this
     */
    public function setSasoApiKey($saso_api_key)
    {
        $this->container['saso_api_key'] = $saso_api_key;

        return $this;
    }

    /**
     * Gets arsc_api_key
     *
     * @return string
     */
    public function getArscApiKey()
    {
        return $this->container['arsc_api_key'];
    }

    /**
     * Sets arsc_api_key
     *
     * @param string $arsc_api_key arsc_api_key
     *
     * @return $this
     */
    public function setArscApiKey($arsc_api_key)
    {
        $this->container['arsc_api_key'] = $arsc_api_key;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return double
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param double $customer_number customer_number
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets edi_partner_code
     *
     * @return string
     */
    public function getEdiPartnerCode()
    {
        return $this->container['edi_partner_code'];
    }

    /**
     * Sets edi_partner_code
     *
     * @param string $edi_partner_code edi_partner_code
     *
     * @return $this
     */
    public function setEdiPartnerCode($edi_partner_code)
    {
        $this->container['edi_partner_code'] = $edi_partner_code;

        return $this;
    }

    /**
     * Gets ship_to
     *
     * @return string
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to
     *
     * @param string $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets c_key_code
     *
     * @return string
     */
    public function getCKeyCode()
    {
        return $this->container['c_key_code'];
    }

    /**
     * Sets c_key_code
     *
     * @param string $c_key_code c_key_code
     *
     * @return $this
     */
    public function setCKeyCode($c_key_code)
    {
        $this->container['c_key_code'] = $c_key_code;

        return $this;
    }

    /**
     * Gets get_price_breaks
     *
     * @return bool
     */
    public function getGetPriceBreaks()
    {
        return $this->container['get_price_breaks'];
    }

    /**
     * Sets get_price_breaks
     *
     * @param bool $get_price_breaks get_price_breaks
     *
     * @return $this
     */
    public function setGetPriceBreaks($get_price_breaks)
    {
        $this->container['get_price_breaks'] = $get_price_breaks;

        return $this;
    }

    /**
     * Gets use_default_whse
     *
     * @return bool
     */
    public function getUseDefaultWhse()
    {
        return $this->container['use_default_whse'];
    }

    /**
     * Sets use_default_whse
     *
     * @param bool $use_default_whse use_default_whse
     *
     * @return $this
     */
    public function setUseDefaultWhse($use_default_whse)
    {
        $this->container['use_default_whse'] = $use_default_whse;

        return $this;
    }

    /**
     * Gets send_full_qty_on_order
     *
     * @return bool
     */
    public function getSendFullQtyOnOrder()
    {
        return $this->container['send_full_qty_on_order'];
    }

    /**
     * Sets send_full_qty_on_order
     *
     * @param bool $send_full_qty_on_order send_full_qty_on_order
     *
     * @return $this
     */
    public function setSendFullQtyOnOrder($send_full_qty_on_order)
    {
        $this->container['send_full_qty_on_order'] = $send_full_qty_on_order;

        return $this;
    }

    /**
     * Gets check_other_whse_inventory
     *
     * @return bool
     */
    public function getCheckOtherWhseInventory()
    {
        return $this->container['check_other_whse_inventory'];
    }

    /**
     * Sets check_other_whse_inventory
     *
     * @param bool $check_other_whse_inventory check_other_whse_inventory
     *
     * @return $this
     */
    public function setCheckOtherWhseInventory($check_other_whse_inventory)
    {
        $this->container['check_other_whse_inventory'] = $check_other_whse_inventory;

        return $this;
    }

    /**
     * Gets pricing_method
     *
     * @return string
     */
    public function getPricingMethod()
    {
        return $this->container['pricing_method'];
    }

    /**
     * Sets pricing_method
     *
     * @param string $pricing_method pricing_method
     *
     * @return $this
     */
    public function setPricingMethod($pricing_method)
    {
        $this->container['pricing_method'] = $pricing_method;

        return $this;
    }

    /**
     * Gets extra_data
     *
     * @return string
     */
    public function getExtraData()
    {
        return $this->container['extra_data'];
    }

    /**
     * Sets extra_data
     *
     * @param string $extra_data extra_data
     *
     * @return $this
     */
    public function setExtraData($extra_data)
    {
        $this->container['extra_data'] = $extra_data;

        return $this;
    }

    /**
     * Gets t_oemultprcin_v2
     *
     * @return \Swagger\Client\Model\TOemultprcinV2Req
     */
    public function getTOemultprcinV2()
    {
        return $this->container['t_oemultprcin_v2'];
    }

    /**
     * Sets t_oemultprcin_v2
     *
     * @param \Swagger\Client\Model\TOemultprcinV2Req $t_oemultprcin_v2 t_oemultprcin_v2
     *
     * @return $this
     */
    public function setTOemultprcinV2($t_oemultprcin_v2)
    {
        $this->container['t_oemultprcin_v2'] = $t_oemultprcin_v2;

        return $this;
    }

    /**
     * Gets t_infieldvalue
     *
     * @return \Swagger\Client\Model\TInfieldvalueReq
     */
    public function getTInfieldvalue()
    {
        return $this->container['t_infieldvalue'];
    }

    /**
     * Sets t_infieldvalue
     *
     * @param \Swagger\Client\Model\TInfieldvalueReq $t_infieldvalue t_infieldvalue
     *
     * @return $this
     */
    public function setTInfieldvalue($t_infieldvalue)
    {
        $this->container['t_infieldvalue'] = $t_infieldvalue;

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


