<?php
/**
 * SxapisfgetcustomermasterResponse
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
 * SxapisfgetcustomermasterResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapisfgetcustomermasterResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapisfgetcustomermaster_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer_name' => 'string',
        'customer_address1' => 'string',
        'customer_address2' => 'string',
        'customer_address3' => 'string',
        'customer_address4' => 'string',
        'customer_city' => 'string',
        'customer_state' => 'string',
        'customer_zip_code' => 'string',
        'customer_country' => 'string',
        'default_ship_to' => 'string',
        'suspend_code' => 'string',
        'default_warehouse' => 'string',
        'po_required' => 'bool',
        'carrier_code' => 'string',
        'ar_customer_number' => 'double',
        'alternate_whse_sequence_code' => 'string',
        'customer_class' => 'string',
        'price_list' => 'string',
        'product_restriction' => 'string',
        'currency_code' => 'string',
        'default_pricing_exchange_code' => 'string',
        'default_validation_code' => 'string',
        'c_error_message' => 'string',
        't_shiptolstv2' => '\Swagger\Client\Model\TShiptolstv2Resp',
        't_custcomment' => '\Swagger\Client\Model\TCustcommentResp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer_name' => null,
        'customer_address1' => null,
        'customer_address2' => null,
        'customer_address3' => null,
        'customer_address4' => null,
        'customer_city' => null,
        'customer_state' => null,
        'customer_zip_code' => null,
        'customer_country' => null,
        'default_ship_to' => null,
        'suspend_code' => null,
        'default_warehouse' => null,
        'po_required' => null,
        'carrier_code' => null,
        'ar_customer_number' => 'double',
        'alternate_whse_sequence_code' => null,
        'customer_class' => null,
        'price_list' => null,
        'product_restriction' => null,
        'currency_code' => null,
        'default_pricing_exchange_code' => null,
        'default_validation_code' => null,
        'c_error_message' => null,
        't_shiptolstv2' => null,
        't_custcomment' => null
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
        'customer_name' => 'customerName',
        'customer_address1' => 'customerAddress1',
        'customer_address2' => 'customerAddress2',
        'customer_address3' => 'customerAddress3',
        'customer_address4' => 'customerAddress4',
        'customer_city' => 'customerCity',
        'customer_state' => 'customerState',
        'customer_zip_code' => 'customerZipCode',
        'customer_country' => 'customerCountry',
        'default_ship_to' => 'defaultShipTo',
        'suspend_code' => 'suspendCode',
        'default_warehouse' => 'defaultWarehouse',
        'po_required' => 'poRequired',
        'carrier_code' => 'carrierCode',
        'ar_customer_number' => 'arCustomerNumber',
        'alternate_whse_sequence_code' => 'alternateWhseSequenceCode',
        'customer_class' => 'customerClass',
        'price_list' => 'priceList',
        'product_restriction' => 'productRestriction',
        'currency_code' => 'currencyCode',
        'default_pricing_exchange_code' => 'defaultPricingExchangeCode',
        'default_validation_code' => 'defaultValidationCode',
        'c_error_message' => 'cErrorMessage',
        't_shiptolstv2' => 'tShiptolstv2',
        't_custcomment' => 'tCustcomment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer_name' => 'setCustomerName',
        'customer_address1' => 'setCustomerAddress1',
        'customer_address2' => 'setCustomerAddress2',
        'customer_address3' => 'setCustomerAddress3',
        'customer_address4' => 'setCustomerAddress4',
        'customer_city' => 'setCustomerCity',
        'customer_state' => 'setCustomerState',
        'customer_zip_code' => 'setCustomerZipCode',
        'customer_country' => 'setCustomerCountry',
        'default_ship_to' => 'setDefaultShipTo',
        'suspend_code' => 'setSuspendCode',
        'default_warehouse' => 'setDefaultWarehouse',
        'po_required' => 'setPoRequired',
        'carrier_code' => 'setCarrierCode',
        'ar_customer_number' => 'setArCustomerNumber',
        'alternate_whse_sequence_code' => 'setAlternateWhseSequenceCode',
        'customer_class' => 'setCustomerClass',
        'price_list' => 'setPriceList',
        'product_restriction' => 'setProductRestriction',
        'currency_code' => 'setCurrencyCode',
        'default_pricing_exchange_code' => 'setDefaultPricingExchangeCode',
        'default_validation_code' => 'setDefaultValidationCode',
        'c_error_message' => 'setCErrorMessage',
        't_shiptolstv2' => 'setTShiptolstv2',
        't_custcomment' => 'setTCustcomment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_name' => 'getCustomerName',
        'customer_address1' => 'getCustomerAddress1',
        'customer_address2' => 'getCustomerAddress2',
        'customer_address3' => 'getCustomerAddress3',
        'customer_address4' => 'getCustomerAddress4',
        'customer_city' => 'getCustomerCity',
        'customer_state' => 'getCustomerState',
        'customer_zip_code' => 'getCustomerZipCode',
        'customer_country' => 'getCustomerCountry',
        'default_ship_to' => 'getDefaultShipTo',
        'suspend_code' => 'getSuspendCode',
        'default_warehouse' => 'getDefaultWarehouse',
        'po_required' => 'getPoRequired',
        'carrier_code' => 'getCarrierCode',
        'ar_customer_number' => 'getArCustomerNumber',
        'alternate_whse_sequence_code' => 'getAlternateWhseSequenceCode',
        'customer_class' => 'getCustomerClass',
        'price_list' => 'getPriceList',
        'product_restriction' => 'getProductRestriction',
        'currency_code' => 'getCurrencyCode',
        'default_pricing_exchange_code' => 'getDefaultPricingExchangeCode',
        'default_validation_code' => 'getDefaultValidationCode',
        'c_error_message' => 'getCErrorMessage',
        't_shiptolstv2' => 'getTShiptolstv2',
        't_custcomment' => 'getTCustcomment'
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
        $this->container['customer_name'] = isset($data['customer_name']) ? $data['customer_name'] : null;
        $this->container['customer_address1'] = isset($data['customer_address1']) ? $data['customer_address1'] : null;
        $this->container['customer_address2'] = isset($data['customer_address2']) ? $data['customer_address2'] : null;
        $this->container['customer_address3'] = isset($data['customer_address3']) ? $data['customer_address3'] : null;
        $this->container['customer_address4'] = isset($data['customer_address4']) ? $data['customer_address4'] : null;
        $this->container['customer_city'] = isset($data['customer_city']) ? $data['customer_city'] : null;
        $this->container['customer_state'] = isset($data['customer_state']) ? $data['customer_state'] : null;
        $this->container['customer_zip_code'] = isset($data['customer_zip_code']) ? $data['customer_zip_code'] : null;
        $this->container['customer_country'] = isset($data['customer_country']) ? $data['customer_country'] : null;
        $this->container['default_ship_to'] = isset($data['default_ship_to']) ? $data['default_ship_to'] : null;
        $this->container['suspend_code'] = isset($data['suspend_code']) ? $data['suspend_code'] : null;
        $this->container['default_warehouse'] = isset($data['default_warehouse']) ? $data['default_warehouse'] : null;
        $this->container['po_required'] = isset($data['po_required']) ? $data['po_required'] : null;
        $this->container['carrier_code'] = isset($data['carrier_code']) ? $data['carrier_code'] : null;
        $this->container['ar_customer_number'] = isset($data['ar_customer_number']) ? $data['ar_customer_number'] : null;
        $this->container['alternate_whse_sequence_code'] = isset($data['alternate_whse_sequence_code']) ? $data['alternate_whse_sequence_code'] : null;
        $this->container['customer_class'] = isset($data['customer_class']) ? $data['customer_class'] : null;
        $this->container['price_list'] = isset($data['price_list']) ? $data['price_list'] : null;
        $this->container['product_restriction'] = isset($data['product_restriction']) ? $data['product_restriction'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['default_pricing_exchange_code'] = isset($data['default_pricing_exchange_code']) ? $data['default_pricing_exchange_code'] : null;
        $this->container['default_validation_code'] = isset($data['default_validation_code']) ? $data['default_validation_code'] : null;
        $this->container['c_error_message'] = isset($data['c_error_message']) ? $data['c_error_message'] : null;
        $this->container['t_shiptolstv2'] = isset($data['t_shiptolstv2']) ? $data['t_shiptolstv2'] : null;
        $this->container['t_custcomment'] = isset($data['t_custcomment']) ? $data['t_custcomment'] : null;
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
     * Gets customer_name
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->container['customer_name'];
    }

    /**
     * Sets customer_name
     *
     * @param string $customer_name customer_name
     *
     * @return $this
     */
    public function setCustomerName($customer_name)
    {
        $this->container['customer_name'] = $customer_name;

        return $this;
    }

    /**
     * Gets customer_address1
     *
     * @return string
     */
    public function getCustomerAddress1()
    {
        return $this->container['customer_address1'];
    }

    /**
     * Sets customer_address1
     *
     * @param string $customer_address1 customer_address1
     *
     * @return $this
     */
    public function setCustomerAddress1($customer_address1)
    {
        $this->container['customer_address1'] = $customer_address1;

        return $this;
    }

    /**
     * Gets customer_address2
     *
     * @return string
     */
    public function getCustomerAddress2()
    {
        return $this->container['customer_address2'];
    }

    /**
     * Sets customer_address2
     *
     * @param string $customer_address2 customer_address2
     *
     * @return $this
     */
    public function setCustomerAddress2($customer_address2)
    {
        $this->container['customer_address2'] = $customer_address2;

        return $this;
    }

    /**
     * Gets customer_address3
     *
     * @return string
     */
    public function getCustomerAddress3()
    {
        return $this->container['customer_address3'];
    }

    /**
     * Sets customer_address3
     *
     * @param string $customer_address3 customer_address3
     *
     * @return $this
     */
    public function setCustomerAddress3($customer_address3)
    {
        $this->container['customer_address3'] = $customer_address3;

        return $this;
    }

    /**
     * Gets customer_address4
     *
     * @return string
     */
    public function getCustomerAddress4()
    {
        return $this->container['customer_address4'];
    }

    /**
     * Sets customer_address4
     *
     * @param string $customer_address4 customer_address4
     *
     * @return $this
     */
    public function setCustomerAddress4($customer_address4)
    {
        $this->container['customer_address4'] = $customer_address4;

        return $this;
    }

    /**
     * Gets customer_city
     *
     * @return string
     */
    public function getCustomerCity()
    {
        return $this->container['customer_city'];
    }

    /**
     * Sets customer_city
     *
     * @param string $customer_city customer_city
     *
     * @return $this
     */
    public function setCustomerCity($customer_city)
    {
        $this->container['customer_city'] = $customer_city;

        return $this;
    }

    /**
     * Gets customer_state
     *
     * @return string
     */
    public function getCustomerState()
    {
        return $this->container['customer_state'];
    }

    /**
     * Sets customer_state
     *
     * @param string $customer_state customer_state
     *
     * @return $this
     */
    public function setCustomerState($customer_state)
    {
        $this->container['customer_state'] = $customer_state;

        return $this;
    }

    /**
     * Gets customer_zip_code
     *
     * @return string
     */
    public function getCustomerZipCode()
    {
        return $this->container['customer_zip_code'];
    }

    /**
     * Sets customer_zip_code
     *
     * @param string $customer_zip_code customer_zip_code
     *
     * @return $this
     */
    public function setCustomerZipCode($customer_zip_code)
    {
        $this->container['customer_zip_code'] = $customer_zip_code;

        return $this;
    }

    /**
     * Gets customer_country
     *
     * @return string
     */
    public function getCustomerCountry()
    {
        return $this->container['customer_country'];
    }

    /**
     * Sets customer_country
     *
     * @param string $customer_country customer_country
     *
     * @return $this
     */
    public function setCustomerCountry($customer_country)
    {
        $this->container['customer_country'] = $customer_country;

        return $this;
    }

    /**
     * Gets default_ship_to
     *
     * @return string
     */
    public function getDefaultShipTo()
    {
        return $this->container['default_ship_to'];
    }

    /**
     * Sets default_ship_to
     *
     * @param string $default_ship_to default_ship_to
     *
     * @return $this
     */
    public function setDefaultShipTo($default_ship_to)
    {
        $this->container['default_ship_to'] = $default_ship_to;

        return $this;
    }

    /**
     * Gets suspend_code
     *
     * @return string
     */
    public function getSuspendCode()
    {
        return $this->container['suspend_code'];
    }

    /**
     * Sets suspend_code
     *
     * @param string $suspend_code suspend_code
     *
     * @return $this
     */
    public function setSuspendCode($suspend_code)
    {
        $this->container['suspend_code'] = $suspend_code;

        return $this;
    }

    /**
     * Gets default_warehouse
     *
     * @return string
     */
    public function getDefaultWarehouse()
    {
        return $this->container['default_warehouse'];
    }

    /**
     * Sets default_warehouse
     *
     * @param string $default_warehouse default_warehouse
     *
     * @return $this
     */
    public function setDefaultWarehouse($default_warehouse)
    {
        $this->container['default_warehouse'] = $default_warehouse;

        return $this;
    }

    /**
     * Gets po_required
     *
     * @return bool
     */
    public function getPoRequired()
    {
        return $this->container['po_required'];
    }

    /**
     * Sets po_required
     *
     * @param bool $po_required po_required
     *
     * @return $this
     */
    public function setPoRequired($po_required)
    {
        $this->container['po_required'] = $po_required;

        return $this;
    }

    /**
     * Gets carrier_code
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string $carrier_code carrier_code
     *
     * @return $this
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets ar_customer_number
     *
     * @return double
     */
    public function getArCustomerNumber()
    {
        return $this->container['ar_customer_number'];
    }

    /**
     * Sets ar_customer_number
     *
     * @param double $ar_customer_number ar_customer_number
     *
     * @return $this
     */
    public function setArCustomerNumber($ar_customer_number)
    {
        $this->container['ar_customer_number'] = $ar_customer_number;

        return $this;
    }

    /**
     * Gets alternate_whse_sequence_code
     *
     * @return string
     */
    public function getAlternateWhseSequenceCode()
    {
        return $this->container['alternate_whse_sequence_code'];
    }

    /**
     * Sets alternate_whse_sequence_code
     *
     * @param string $alternate_whse_sequence_code alternate_whse_sequence_code
     *
     * @return $this
     */
    public function setAlternateWhseSequenceCode($alternate_whse_sequence_code)
    {
        $this->container['alternate_whse_sequence_code'] = $alternate_whse_sequence_code;

        return $this;
    }

    /**
     * Gets customer_class
     *
     * @return string
     */
    public function getCustomerClass()
    {
        return $this->container['customer_class'];
    }

    /**
     * Sets customer_class
     *
     * @param string $customer_class customer_class
     *
     * @return $this
     */
    public function setCustomerClass($customer_class)
    {
        $this->container['customer_class'] = $customer_class;

        return $this;
    }

    /**
     * Gets price_list
     *
     * @return string
     */
    public function getPriceList()
    {
        return $this->container['price_list'];
    }

    /**
     * Sets price_list
     *
     * @param string $price_list price_list
     *
     * @return $this
     */
    public function setPriceList($price_list)
    {
        $this->container['price_list'] = $price_list;

        return $this;
    }

    /**
     * Gets product_restriction
     *
     * @return string
     */
    public function getProductRestriction()
    {
        return $this->container['product_restriction'];
    }

    /**
     * Sets product_restriction
     *
     * @param string $product_restriction product_restriction
     *
     * @return $this
     */
    public function setProductRestriction($product_restriction)
    {
        $this->container['product_restriction'] = $product_restriction;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code currency_code
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets default_pricing_exchange_code
     *
     * @return string
     */
    public function getDefaultPricingExchangeCode()
    {
        return $this->container['default_pricing_exchange_code'];
    }

    /**
     * Sets default_pricing_exchange_code
     *
     * @param string $default_pricing_exchange_code default_pricing_exchange_code
     *
     * @return $this
     */
    public function setDefaultPricingExchangeCode($default_pricing_exchange_code)
    {
        $this->container['default_pricing_exchange_code'] = $default_pricing_exchange_code;

        return $this;
    }

    /**
     * Gets default_validation_code
     *
     * @return string
     */
    public function getDefaultValidationCode()
    {
        return $this->container['default_validation_code'];
    }

    /**
     * Sets default_validation_code
     *
     * @param string $default_validation_code default_validation_code
     *
     * @return $this
     */
    public function setDefaultValidationCode($default_validation_code)
    {
        $this->container['default_validation_code'] = $default_validation_code;

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
     * Gets t_shiptolstv2
     *
     * @return \Swagger\Client\Model\TShiptolstv2Resp
     */
    public function getTShiptolstv2()
    {
        return $this->container['t_shiptolstv2'];
    }

    /**
     * Sets t_shiptolstv2
     *
     * @param \Swagger\Client\Model\TShiptolstv2Resp $t_shiptolstv2 t_shiptolstv2
     *
     * @return $this
     */
    public function setTShiptolstv2($t_shiptolstv2)
    {
        $this->container['t_shiptolstv2'] = $t_shiptolstv2;

        return $this;
    }

    /**
     * Gets t_custcomment
     *
     * @return \Swagger\Client\Model\TCustcommentResp
     */
    public function getTCustcomment()
    {
        return $this->container['t_custcomment'];
    }

    /**
     * Sets t_custcomment
     *
     * @param \Swagger\Client\Model\TCustcommentResp $t_custcomment t_custcomment
     *
     * @return $this
     */
    public function setTCustcomment($t_custcomment)
    {
        $this->container['t_custcomment'] = $t_custcomment;

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


