<?php
/**
 * Sxapisfgetoeorderdatav3Request
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
 * Sxapisfgetoeorderdatav3Request Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sxapisfgetoeorderdatav3Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapisfgetoeorderdatav3_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'get_order_info' => 'string',
        'customer_number' => 'double',
        'ship_to' => 'string',
        'lookup_type' => 'string',
        'source_type' => 'string',
        'from_entry_date' => '\DateTime',
        'to_entry_date' => '\DateTime',
        'order_number' => 'int',
        'order_suffix' => 'int',
        'invoice_number' => 'int',
        'customer_purchase_order_number' => 'string',
        'parent_order_number' => 'int',
        'guest_flag' => 'string',
        'email_address' => 'string',
        'history_sequence_number' => 'int',
        'entry_date' => '\DateTime',
        'include_order_total_extended_amount' => 'bool'
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
        'get_order_info' => null,
        'customer_number' => 'double',
        'ship_to' => null,
        'lookup_type' => null,
        'source_type' => null,
        'from_entry_date' => 'date',
        'to_entry_date' => 'date',
        'order_number' => 'int64',
        'order_suffix' => 'int64',
        'invoice_number' => 'int64',
        'customer_purchase_order_number' => null,
        'parent_order_number' => 'int64',
        'guest_flag' => null,
        'email_address' => null,
        'history_sequence_number' => 'int64',
        'entry_date' => 'date',
        'include_order_total_extended_amount' => null
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
        'get_order_info' => 'getOrderInfo',
        'customer_number' => 'customerNumber',
        'ship_to' => 'shipTo',
        'lookup_type' => 'lookupType',
        'source_type' => 'sourceType',
        'from_entry_date' => 'fromEntryDate',
        'to_entry_date' => 'toEntryDate',
        'order_number' => 'orderNumber',
        'order_suffix' => 'orderSuffix',
        'invoice_number' => 'invoiceNumber',
        'customer_purchase_order_number' => 'customerPurchaseOrderNumber',
        'parent_order_number' => 'parentOrderNumber',
        'guest_flag' => 'guestFlag',
        'email_address' => 'emailAddress',
        'history_sequence_number' => 'historySequenceNumber',
        'entry_date' => 'entryDate',
        'include_order_total_extended_amount' => 'includeOrderTotalExtendedAmount'
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
        'get_order_info' => 'setGetOrderInfo',
        'customer_number' => 'setCustomerNumber',
        'ship_to' => 'setShipTo',
        'lookup_type' => 'setLookupType',
        'source_type' => 'setSourceType',
        'from_entry_date' => 'setFromEntryDate',
        'to_entry_date' => 'setToEntryDate',
        'order_number' => 'setOrderNumber',
        'order_suffix' => 'setOrderSuffix',
        'invoice_number' => 'setInvoiceNumber',
        'customer_purchase_order_number' => 'setCustomerPurchaseOrderNumber',
        'parent_order_number' => 'setParentOrderNumber',
        'guest_flag' => 'setGuestFlag',
        'email_address' => 'setEmailAddress',
        'history_sequence_number' => 'setHistorySequenceNumber',
        'entry_date' => 'setEntryDate',
        'include_order_total_extended_amount' => 'setIncludeOrderTotalExtendedAmount'
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
        'get_order_info' => 'getGetOrderInfo',
        'customer_number' => 'getCustomerNumber',
        'ship_to' => 'getShipTo',
        'lookup_type' => 'getLookupType',
        'source_type' => 'getSourceType',
        'from_entry_date' => 'getFromEntryDate',
        'to_entry_date' => 'getToEntryDate',
        'order_number' => 'getOrderNumber',
        'order_suffix' => 'getOrderSuffix',
        'invoice_number' => 'getInvoiceNumber',
        'customer_purchase_order_number' => 'getCustomerPurchaseOrderNumber',
        'parent_order_number' => 'getParentOrderNumber',
        'guest_flag' => 'getGuestFlag',
        'email_address' => 'getEmailAddress',
        'history_sequence_number' => 'getHistorySequenceNumber',
        'entry_date' => 'getEntryDate',
        'include_order_total_extended_amount' => 'getIncludeOrderTotalExtendedAmount'
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
        $this->container['get_order_info'] = isset($data['get_order_info']) ? $data['get_order_info'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['lookup_type'] = isset($data['lookup_type']) ? $data['lookup_type'] : null;
        $this->container['source_type'] = isset($data['source_type']) ? $data['source_type'] : null;
        $this->container['from_entry_date'] = isset($data['from_entry_date']) ? $data['from_entry_date'] : null;
        $this->container['to_entry_date'] = isset($data['to_entry_date']) ? $data['to_entry_date'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['order_suffix'] = isset($data['order_suffix']) ? $data['order_suffix'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['customer_purchase_order_number'] = isset($data['customer_purchase_order_number']) ? $data['customer_purchase_order_number'] : null;
        $this->container['parent_order_number'] = isset($data['parent_order_number']) ? $data['parent_order_number'] : null;
        $this->container['guest_flag'] = isset($data['guest_flag']) ? $data['guest_flag'] : null;
        $this->container['email_address'] = isset($data['email_address']) ? $data['email_address'] : null;
        $this->container['history_sequence_number'] = isset($data['history_sequence_number']) ? $data['history_sequence_number'] : null;
        $this->container['entry_date'] = isset($data['entry_date']) ? $data['entry_date'] : null;
        $this->container['include_order_total_extended_amount'] = isset($data['include_order_total_extended_amount']) ? $data['include_order_total_extended_amount'] : null;
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
     * Gets get_order_info
     *
     * @return string
     */
    public function getGetOrderInfo()
    {
        return $this->container['get_order_info'];
    }

    /**
     * Sets get_order_info
     *
     * @param string $get_order_info get_order_info
     *
     * @return $this
     */
    public function setGetOrderInfo($get_order_info)
    {
        $this->container['get_order_info'] = $get_order_info;

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
     * Gets lookup_type
     *
     * @return string
     */
    public function getLookupType()
    {
        return $this->container['lookup_type'];
    }

    /**
     * Sets lookup_type
     *
     * @param string $lookup_type lookup_type
     *
     * @return $this
     */
    public function setLookupType($lookup_type)
    {
        $this->container['lookup_type'] = $lookup_type;

        return $this;
    }

    /**
     * Gets source_type
     *
     * @return string
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type
     *
     * @param string $source_type source_type
     *
     * @return $this
     */
    public function setSourceType($source_type)
    {
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets from_entry_date
     *
     * @return \DateTime
     */
    public function getFromEntryDate()
    {
        return $this->container['from_entry_date'];
    }

    /**
     * Sets from_entry_date
     *
     * @param \DateTime $from_entry_date from_entry_date
     *
     * @return $this
     */
    public function setFromEntryDate($from_entry_date)
    {
        $this->container['from_entry_date'] = $from_entry_date;

        return $this;
    }

    /**
     * Gets to_entry_date
     *
     * @return \DateTime
     */
    public function getToEntryDate()
    {
        return $this->container['to_entry_date'];
    }

    /**
     * Sets to_entry_date
     *
     * @param \DateTime $to_entry_date to_entry_date
     *
     * @return $this
     */
    public function setToEntryDate($to_entry_date)
    {
        $this->container['to_entry_date'] = $to_entry_date;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param int $order_number order_number
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets order_suffix
     *
     * @return int
     */
    public function getOrderSuffix()
    {
        return $this->container['order_suffix'];
    }

    /**
     * Sets order_suffix
     *
     * @param int $order_suffix order_suffix
     *
     * @return $this
     */
    public function setOrderSuffix($order_suffix)
    {
        $this->container['order_suffix'] = $order_suffix;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return int
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param int $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets customer_purchase_order_number
     *
     * @return string
     */
    public function getCustomerPurchaseOrderNumber()
    {
        return $this->container['customer_purchase_order_number'];
    }

    /**
     * Sets customer_purchase_order_number
     *
     * @param string $customer_purchase_order_number customer_purchase_order_number
     *
     * @return $this
     */
    public function setCustomerPurchaseOrderNumber($customer_purchase_order_number)
    {
        $this->container['customer_purchase_order_number'] = $customer_purchase_order_number;

        return $this;
    }

    /**
     * Gets parent_order_number
     *
     * @return int
     */
    public function getParentOrderNumber()
    {
        return $this->container['parent_order_number'];
    }

    /**
     * Sets parent_order_number
     *
     * @param int $parent_order_number parent_order_number
     *
     * @return $this
     */
    public function setParentOrderNumber($parent_order_number)
    {
        $this->container['parent_order_number'] = $parent_order_number;

        return $this;
    }

    /**
     * Gets guest_flag
     *
     * @return string
     */
    public function getGuestFlag()
    {
        return $this->container['guest_flag'];
    }

    /**
     * Sets guest_flag
     *
     * @param string $guest_flag guest_flag
     *
     * @return $this
     */
    public function setGuestFlag($guest_flag)
    {
        $this->container['guest_flag'] = $guest_flag;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string $email_address email_address
     *
     * @return $this
     */
    public function setEmailAddress($email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets history_sequence_number
     *
     * @return int
     */
    public function getHistorySequenceNumber()
    {
        return $this->container['history_sequence_number'];
    }

    /**
     * Sets history_sequence_number
     *
     * @param int $history_sequence_number history_sequence_number
     *
     * @return $this
     */
    public function setHistorySequenceNumber($history_sequence_number)
    {
        $this->container['history_sequence_number'] = $history_sequence_number;

        return $this;
    }

    /**
     * Gets entry_date
     *
     * @return \DateTime
     */
    public function getEntryDate()
    {
        return $this->container['entry_date'];
    }

    /**
     * Sets entry_date
     *
     * @param \DateTime $entry_date entry_date
     *
     * @return $this
     */
    public function setEntryDate($entry_date)
    {
        $this->container['entry_date'] = $entry_date;

        return $this;
    }

    /**
     * Gets include_order_total_extended_amount
     *
     * @return bool
     */
    public function getIncludeOrderTotalExtendedAmount()
    {
        return $this->container['include_order_total_extended_amount'];
    }

    /**
     * Sets include_order_total_extended_amount
     *
     * @param bool $include_order_total_extended_amount include_order_total_extended_amount
     *
     * @return $this
     */
    public function setIncludeOrderTotalExtendedAmount($include_order_total_extended_amount)
    {
        $this->container['include_order_total_extended_amount'] = $include_order_total_extended_amount;

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


