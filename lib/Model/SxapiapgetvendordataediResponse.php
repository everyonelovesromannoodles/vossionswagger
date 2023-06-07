<?php
/**
 * SxapiapgetvendordataediResponse
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
 * SxapiapgetvendordataediResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapiapgetvendordataediResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiapgetvendordataedi_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'c_error_message' => 'string',
        'e_commerce_type' => 'string',
        'edi846_number' => 'int',
        'edi846_version' => 'string',
        'edi_network' => 'string',
        'edi_partner_address' => 'string',
        'edi_partner' => 'string',
        'edi_purchase_order_version' => 'string',
        'edi_your_address' => 'string',
        'edi_payment_type' => 'string',
        'edi_purchase_order_type' => 'string',
        'edi_quote_type' => 'string',
        'edi_rebate_type' => 'string',
        'payment_type' => 'string',
        'update_price' => 'string',
        'vendor_bank_account' => 'string',
        'vendor_bank_transit_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'c_error_message' => null,
        'e_commerce_type' => null,
        'edi846_number' => 'int64',
        'edi846_version' => null,
        'edi_network' => null,
        'edi_partner_address' => null,
        'edi_partner' => null,
        'edi_purchase_order_version' => null,
        'edi_your_address' => null,
        'edi_payment_type' => null,
        'edi_purchase_order_type' => null,
        'edi_quote_type' => null,
        'edi_rebate_type' => null,
        'payment_type' => null,
        'update_price' => null,
        'vendor_bank_account' => null,
        'vendor_bank_transit_number' => null
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
        'e_commerce_type' => 'eCommerceType',
        'edi846_number' => 'edi846Number',
        'edi846_version' => 'edi846Version',
        'edi_network' => 'ediNetwork',
        'edi_partner_address' => 'ediPartnerAddress',
        'edi_partner' => 'ediPartner',
        'edi_purchase_order_version' => 'ediPurchaseOrderVersion',
        'edi_your_address' => 'ediYourAddress',
        'edi_payment_type' => 'ediPaymentType',
        'edi_purchase_order_type' => 'ediPurchaseOrderType',
        'edi_quote_type' => 'ediQuoteType',
        'edi_rebate_type' => 'ediRebateType',
        'payment_type' => 'paymentType',
        'update_price' => 'updatePrice',
        'vendor_bank_account' => 'vendorBankAccount',
        'vendor_bank_transit_number' => 'vendorBankTransitNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_error_message' => 'setCErrorMessage',
        'e_commerce_type' => 'setECommerceType',
        'edi846_number' => 'setEdi846Number',
        'edi846_version' => 'setEdi846Version',
        'edi_network' => 'setEdiNetwork',
        'edi_partner_address' => 'setEdiPartnerAddress',
        'edi_partner' => 'setEdiPartner',
        'edi_purchase_order_version' => 'setEdiPurchaseOrderVersion',
        'edi_your_address' => 'setEdiYourAddress',
        'edi_payment_type' => 'setEdiPaymentType',
        'edi_purchase_order_type' => 'setEdiPurchaseOrderType',
        'edi_quote_type' => 'setEdiQuoteType',
        'edi_rebate_type' => 'setEdiRebateType',
        'payment_type' => 'setPaymentType',
        'update_price' => 'setUpdatePrice',
        'vendor_bank_account' => 'setVendorBankAccount',
        'vendor_bank_transit_number' => 'setVendorBankTransitNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_error_message' => 'getCErrorMessage',
        'e_commerce_type' => 'getECommerceType',
        'edi846_number' => 'getEdi846Number',
        'edi846_version' => 'getEdi846Version',
        'edi_network' => 'getEdiNetwork',
        'edi_partner_address' => 'getEdiPartnerAddress',
        'edi_partner' => 'getEdiPartner',
        'edi_purchase_order_version' => 'getEdiPurchaseOrderVersion',
        'edi_your_address' => 'getEdiYourAddress',
        'edi_payment_type' => 'getEdiPaymentType',
        'edi_purchase_order_type' => 'getEdiPurchaseOrderType',
        'edi_quote_type' => 'getEdiQuoteType',
        'edi_rebate_type' => 'getEdiRebateType',
        'payment_type' => 'getPaymentType',
        'update_price' => 'getUpdatePrice',
        'vendor_bank_account' => 'getVendorBankAccount',
        'vendor_bank_transit_number' => 'getVendorBankTransitNumber'
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
        $this->container['e_commerce_type'] = isset($data['e_commerce_type']) ? $data['e_commerce_type'] : null;
        $this->container['edi846_number'] = isset($data['edi846_number']) ? $data['edi846_number'] : null;
        $this->container['edi846_version'] = isset($data['edi846_version']) ? $data['edi846_version'] : null;
        $this->container['edi_network'] = isset($data['edi_network']) ? $data['edi_network'] : null;
        $this->container['edi_partner_address'] = isset($data['edi_partner_address']) ? $data['edi_partner_address'] : null;
        $this->container['edi_partner'] = isset($data['edi_partner']) ? $data['edi_partner'] : null;
        $this->container['edi_purchase_order_version'] = isset($data['edi_purchase_order_version']) ? $data['edi_purchase_order_version'] : null;
        $this->container['edi_your_address'] = isset($data['edi_your_address']) ? $data['edi_your_address'] : null;
        $this->container['edi_payment_type'] = isset($data['edi_payment_type']) ? $data['edi_payment_type'] : null;
        $this->container['edi_purchase_order_type'] = isset($data['edi_purchase_order_type']) ? $data['edi_purchase_order_type'] : null;
        $this->container['edi_quote_type'] = isset($data['edi_quote_type']) ? $data['edi_quote_type'] : null;
        $this->container['edi_rebate_type'] = isset($data['edi_rebate_type']) ? $data['edi_rebate_type'] : null;
        $this->container['payment_type'] = isset($data['payment_type']) ? $data['payment_type'] : null;
        $this->container['update_price'] = isset($data['update_price']) ? $data['update_price'] : null;
        $this->container['vendor_bank_account'] = isset($data['vendor_bank_account']) ? $data['vendor_bank_account'] : null;
        $this->container['vendor_bank_transit_number'] = isset($data['vendor_bank_transit_number']) ? $data['vendor_bank_transit_number'] : null;
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
     * Gets e_commerce_type
     *
     * @return string
     */
    public function getECommerceType()
    {
        return $this->container['e_commerce_type'];
    }

    /**
     * Sets e_commerce_type
     *
     * @param string $e_commerce_type e_commerce_type
     *
     * @return $this
     */
    public function setECommerceType($e_commerce_type)
    {
        $this->container['e_commerce_type'] = $e_commerce_type;

        return $this;
    }

    /**
     * Gets edi846_number
     *
     * @return int
     */
    public function getEdi846Number()
    {
        return $this->container['edi846_number'];
    }

    /**
     * Sets edi846_number
     *
     * @param int $edi846_number edi846_number
     *
     * @return $this
     */
    public function setEdi846Number($edi846_number)
    {
        $this->container['edi846_number'] = $edi846_number;

        return $this;
    }

    /**
     * Gets edi846_version
     *
     * @return string
     */
    public function getEdi846Version()
    {
        return $this->container['edi846_version'];
    }

    /**
     * Sets edi846_version
     *
     * @param string $edi846_version edi846_version
     *
     * @return $this
     */
    public function setEdi846Version($edi846_version)
    {
        $this->container['edi846_version'] = $edi846_version;

        return $this;
    }

    /**
     * Gets edi_network
     *
     * @return string
     */
    public function getEdiNetwork()
    {
        return $this->container['edi_network'];
    }

    /**
     * Sets edi_network
     *
     * @param string $edi_network edi_network
     *
     * @return $this
     */
    public function setEdiNetwork($edi_network)
    {
        $this->container['edi_network'] = $edi_network;

        return $this;
    }

    /**
     * Gets edi_partner_address
     *
     * @return string
     */
    public function getEdiPartnerAddress()
    {
        return $this->container['edi_partner_address'];
    }

    /**
     * Sets edi_partner_address
     *
     * @param string $edi_partner_address edi_partner_address
     *
     * @return $this
     */
    public function setEdiPartnerAddress($edi_partner_address)
    {
        $this->container['edi_partner_address'] = $edi_partner_address;

        return $this;
    }

    /**
     * Gets edi_partner
     *
     * @return string
     */
    public function getEdiPartner()
    {
        return $this->container['edi_partner'];
    }

    /**
     * Sets edi_partner
     *
     * @param string $edi_partner edi_partner
     *
     * @return $this
     */
    public function setEdiPartner($edi_partner)
    {
        $this->container['edi_partner'] = $edi_partner;

        return $this;
    }

    /**
     * Gets edi_purchase_order_version
     *
     * @return string
     */
    public function getEdiPurchaseOrderVersion()
    {
        return $this->container['edi_purchase_order_version'];
    }

    /**
     * Sets edi_purchase_order_version
     *
     * @param string $edi_purchase_order_version edi_purchase_order_version
     *
     * @return $this
     */
    public function setEdiPurchaseOrderVersion($edi_purchase_order_version)
    {
        $this->container['edi_purchase_order_version'] = $edi_purchase_order_version;

        return $this;
    }

    /**
     * Gets edi_your_address
     *
     * @return string
     */
    public function getEdiYourAddress()
    {
        return $this->container['edi_your_address'];
    }

    /**
     * Sets edi_your_address
     *
     * @param string $edi_your_address edi_your_address
     *
     * @return $this
     */
    public function setEdiYourAddress($edi_your_address)
    {
        $this->container['edi_your_address'] = $edi_your_address;

        return $this;
    }

    /**
     * Gets edi_payment_type
     *
     * @return string
     */
    public function getEdiPaymentType()
    {
        return $this->container['edi_payment_type'];
    }

    /**
     * Sets edi_payment_type
     *
     * @param string $edi_payment_type edi_payment_type
     *
     * @return $this
     */
    public function setEdiPaymentType($edi_payment_type)
    {
        $this->container['edi_payment_type'] = $edi_payment_type;

        return $this;
    }

    /**
     * Gets edi_purchase_order_type
     *
     * @return string
     */
    public function getEdiPurchaseOrderType()
    {
        return $this->container['edi_purchase_order_type'];
    }

    /**
     * Sets edi_purchase_order_type
     *
     * @param string $edi_purchase_order_type edi_purchase_order_type
     *
     * @return $this
     */
    public function setEdiPurchaseOrderType($edi_purchase_order_type)
    {
        $this->container['edi_purchase_order_type'] = $edi_purchase_order_type;

        return $this;
    }

    /**
     * Gets edi_quote_type
     *
     * @return string
     */
    public function getEdiQuoteType()
    {
        return $this->container['edi_quote_type'];
    }

    /**
     * Sets edi_quote_type
     *
     * @param string $edi_quote_type edi_quote_type
     *
     * @return $this
     */
    public function setEdiQuoteType($edi_quote_type)
    {
        $this->container['edi_quote_type'] = $edi_quote_type;

        return $this;
    }

    /**
     * Gets edi_rebate_type
     *
     * @return string
     */
    public function getEdiRebateType()
    {
        return $this->container['edi_rebate_type'];
    }

    /**
     * Sets edi_rebate_type
     *
     * @param string $edi_rebate_type edi_rebate_type
     *
     * @return $this
     */
    public function setEdiRebateType($edi_rebate_type)
    {
        $this->container['edi_rebate_type'] = $edi_rebate_type;

        return $this;
    }

    /**
     * Gets payment_type
     *
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['payment_type'];
    }

    /**
     * Sets payment_type
     *
     * @param string $payment_type payment_type
     *
     * @return $this
     */
    public function setPaymentType($payment_type)
    {
        $this->container['payment_type'] = $payment_type;

        return $this;
    }

    /**
     * Gets update_price
     *
     * @return string
     */
    public function getUpdatePrice()
    {
        return $this->container['update_price'];
    }

    /**
     * Sets update_price
     *
     * @param string $update_price update_price
     *
     * @return $this
     */
    public function setUpdatePrice($update_price)
    {
        $this->container['update_price'] = $update_price;

        return $this;
    }

    /**
     * Gets vendor_bank_account
     *
     * @return string
     */
    public function getVendorBankAccount()
    {
        return $this->container['vendor_bank_account'];
    }

    /**
     * Sets vendor_bank_account
     *
     * @param string $vendor_bank_account vendor_bank_account
     *
     * @return $this
     */
    public function setVendorBankAccount($vendor_bank_account)
    {
        $this->container['vendor_bank_account'] = $vendor_bank_account;

        return $this;
    }

    /**
     * Gets vendor_bank_transit_number
     *
     * @return string
     */
    public function getVendorBankTransitNumber()
    {
        return $this->container['vendor_bank_transit_number'];
    }

    /**
     * Sets vendor_bank_transit_number
     *
     * @param string $vendor_bank_transit_number vendor_bank_transit_number
     *
     * @return $this
     */
    public function setVendorBankTransitNumber($vendor_bank_transit_number)
    {
        $this->container['vendor_bank_transit_number'] = $vendor_bank_transit_number;

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

