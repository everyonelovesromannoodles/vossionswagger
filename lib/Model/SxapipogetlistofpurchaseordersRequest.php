<?php
/**
 * SxapipogetlistofpurchaseordersRequest
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
 * SxapipogetlistofpurchaseordersRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapipogetlistofpurchaseordersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapipogetlistofpurchaseorders_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'vendor_number' => 'double',
        'ship_from_number' => 'int',
        'whse' => 'string',
        'transaction_type' => 'string',
        'product' => 'string',
        'buyer' => 'string',
        'tracker_number' => 'int',
        'container_number' => 'string',
        'begin_stage' => 'int',
        'end_stage' => 'int',
        'begin_costed_date' => '\DateTime',
        'end_costed_date' => '\DateTime',
        'begin_paid_date' => '\DateTime',
        'end_paid_date' => '\DateTime',
        'begin_due_date' => '\DateTime',
        'end_due_date' => '\DateTime',
        'begin_printed_date' => '\DateTime',
        'end_printed_date' => '\DateTime',
        'begin_entered_date' => '\DateTime',
        'end_entered_date' => '\DateTime',
        'begin_receipt_date' => '\DateTime',
        'end_receipt_date' => '\DateTime',
        'begin_ordered_date' => '\DateTime',
        'end_ordered_date' => '\DateTime',
        'begin_requested_ship_date' => '\DateTime',
        'end_requested_ship_date' => '\DateTime',
        'sort1' => 'string',
        'sort2' => 'string',
        'record_limit' => 'int'
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
        'vendor_number' => 'double',
        'ship_from_number' => 'int64',
        'whse' => null,
        'transaction_type' => null,
        'product' => null,
        'buyer' => null,
        'tracker_number' => 'int64',
        'container_number' => null,
        'begin_stage' => 'int64',
        'end_stage' => 'int64',
        'begin_costed_date' => 'date',
        'end_costed_date' => 'date',
        'begin_paid_date' => 'date',
        'end_paid_date' => 'date',
        'begin_due_date' => 'date',
        'end_due_date' => 'date',
        'begin_printed_date' => 'date',
        'end_printed_date' => 'date',
        'begin_entered_date' => 'date',
        'end_entered_date' => 'date',
        'begin_receipt_date' => 'date',
        'end_receipt_date' => 'date',
        'begin_ordered_date' => 'date',
        'end_ordered_date' => 'date',
        'begin_requested_ship_date' => 'date',
        'end_requested_ship_date' => 'date',
        'sort1' => null,
        'sort2' => null,
        'record_limit' => 'int64'
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
        'vendor_number' => 'vendorNumber',
        'ship_from_number' => 'shipFromNumber',
        'whse' => 'whse',
        'transaction_type' => 'transactionType',
        'product' => 'product',
        'buyer' => 'buyer',
        'tracker_number' => 'trackerNumber',
        'container_number' => 'containerNumber',
        'begin_stage' => 'beginStage',
        'end_stage' => 'endStage',
        'begin_costed_date' => 'beginCostedDate',
        'end_costed_date' => 'endCostedDate',
        'begin_paid_date' => 'beginPaidDate',
        'end_paid_date' => 'endPaidDate',
        'begin_due_date' => 'beginDueDate',
        'end_due_date' => 'endDueDate',
        'begin_printed_date' => 'beginPrintedDate',
        'end_printed_date' => 'endPrintedDate',
        'begin_entered_date' => 'beginEnteredDate',
        'end_entered_date' => 'endEnteredDate',
        'begin_receipt_date' => 'beginReceiptDate',
        'end_receipt_date' => 'endReceiptDate',
        'begin_ordered_date' => 'beginOrderedDate',
        'end_ordered_date' => 'endOrderedDate',
        'begin_requested_ship_date' => 'beginRequestedShipDate',
        'end_requested_ship_date' => 'endRequestedShipDate',
        'sort1' => 'sort1',
        'sort2' => 'sort2',
        'record_limit' => 'recordLimit'
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
        'vendor_number' => 'setVendorNumber',
        'ship_from_number' => 'setShipFromNumber',
        'whse' => 'setWhse',
        'transaction_type' => 'setTransactionType',
        'product' => 'setProduct',
        'buyer' => 'setBuyer',
        'tracker_number' => 'setTrackerNumber',
        'container_number' => 'setContainerNumber',
        'begin_stage' => 'setBeginStage',
        'end_stage' => 'setEndStage',
        'begin_costed_date' => 'setBeginCostedDate',
        'end_costed_date' => 'setEndCostedDate',
        'begin_paid_date' => 'setBeginPaidDate',
        'end_paid_date' => 'setEndPaidDate',
        'begin_due_date' => 'setBeginDueDate',
        'end_due_date' => 'setEndDueDate',
        'begin_printed_date' => 'setBeginPrintedDate',
        'end_printed_date' => 'setEndPrintedDate',
        'begin_entered_date' => 'setBeginEnteredDate',
        'end_entered_date' => 'setEndEnteredDate',
        'begin_receipt_date' => 'setBeginReceiptDate',
        'end_receipt_date' => 'setEndReceiptDate',
        'begin_ordered_date' => 'setBeginOrderedDate',
        'end_ordered_date' => 'setEndOrderedDate',
        'begin_requested_ship_date' => 'setBeginRequestedShipDate',
        'end_requested_ship_date' => 'setEndRequestedShipDate',
        'sort1' => 'setSort1',
        'sort2' => 'setSort2',
        'record_limit' => 'setRecordLimit'
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
        'vendor_number' => 'getVendorNumber',
        'ship_from_number' => 'getShipFromNumber',
        'whse' => 'getWhse',
        'transaction_type' => 'getTransactionType',
        'product' => 'getProduct',
        'buyer' => 'getBuyer',
        'tracker_number' => 'getTrackerNumber',
        'container_number' => 'getContainerNumber',
        'begin_stage' => 'getBeginStage',
        'end_stage' => 'getEndStage',
        'begin_costed_date' => 'getBeginCostedDate',
        'end_costed_date' => 'getEndCostedDate',
        'begin_paid_date' => 'getBeginPaidDate',
        'end_paid_date' => 'getEndPaidDate',
        'begin_due_date' => 'getBeginDueDate',
        'end_due_date' => 'getEndDueDate',
        'begin_printed_date' => 'getBeginPrintedDate',
        'end_printed_date' => 'getEndPrintedDate',
        'begin_entered_date' => 'getBeginEnteredDate',
        'end_entered_date' => 'getEndEnteredDate',
        'begin_receipt_date' => 'getBeginReceiptDate',
        'end_receipt_date' => 'getEndReceiptDate',
        'begin_ordered_date' => 'getBeginOrderedDate',
        'end_ordered_date' => 'getEndOrderedDate',
        'begin_requested_ship_date' => 'getBeginRequestedShipDate',
        'end_requested_ship_date' => 'getEndRequestedShipDate',
        'sort1' => 'getSort1',
        'sort2' => 'getSort2',
        'record_limit' => 'getRecordLimit'
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
        $this->container['vendor_number'] = isset($data['vendor_number']) ? $data['vendor_number'] : null;
        $this->container['ship_from_number'] = isset($data['ship_from_number']) ? $data['ship_from_number'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['product'] = isset($data['product']) ? $data['product'] : null;
        $this->container['buyer'] = isset($data['buyer']) ? $data['buyer'] : null;
        $this->container['tracker_number'] = isset($data['tracker_number']) ? $data['tracker_number'] : null;
        $this->container['container_number'] = isset($data['container_number']) ? $data['container_number'] : null;
        $this->container['begin_stage'] = isset($data['begin_stage']) ? $data['begin_stage'] : null;
        $this->container['end_stage'] = isset($data['end_stage']) ? $data['end_stage'] : null;
        $this->container['begin_costed_date'] = isset($data['begin_costed_date']) ? $data['begin_costed_date'] : null;
        $this->container['end_costed_date'] = isset($data['end_costed_date']) ? $data['end_costed_date'] : null;
        $this->container['begin_paid_date'] = isset($data['begin_paid_date']) ? $data['begin_paid_date'] : null;
        $this->container['end_paid_date'] = isset($data['end_paid_date']) ? $data['end_paid_date'] : null;
        $this->container['begin_due_date'] = isset($data['begin_due_date']) ? $data['begin_due_date'] : null;
        $this->container['end_due_date'] = isset($data['end_due_date']) ? $data['end_due_date'] : null;
        $this->container['begin_printed_date'] = isset($data['begin_printed_date']) ? $data['begin_printed_date'] : null;
        $this->container['end_printed_date'] = isset($data['end_printed_date']) ? $data['end_printed_date'] : null;
        $this->container['begin_entered_date'] = isset($data['begin_entered_date']) ? $data['begin_entered_date'] : null;
        $this->container['end_entered_date'] = isset($data['end_entered_date']) ? $data['end_entered_date'] : null;
        $this->container['begin_receipt_date'] = isset($data['begin_receipt_date']) ? $data['begin_receipt_date'] : null;
        $this->container['end_receipt_date'] = isset($data['end_receipt_date']) ? $data['end_receipt_date'] : null;
        $this->container['begin_ordered_date'] = isset($data['begin_ordered_date']) ? $data['begin_ordered_date'] : null;
        $this->container['end_ordered_date'] = isset($data['end_ordered_date']) ? $data['end_ordered_date'] : null;
        $this->container['begin_requested_ship_date'] = isset($data['begin_requested_ship_date']) ? $data['begin_requested_ship_date'] : null;
        $this->container['end_requested_ship_date'] = isset($data['end_requested_ship_date']) ? $data['end_requested_ship_date'] : null;
        $this->container['sort1'] = isset($data['sort1']) ? $data['sort1'] : null;
        $this->container['sort2'] = isset($data['sort2']) ? $data['sort2'] : null;
        $this->container['record_limit'] = isset($data['record_limit']) ? $data['record_limit'] : null;
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
     * Gets vendor_number
     *
     * @return double
     */
    public function getVendorNumber()
    {
        return $this->container['vendor_number'];
    }

    /**
     * Sets vendor_number
     *
     * @param double $vendor_number vendor_number
     *
     * @return $this
     */
    public function setVendorNumber($vendor_number)
    {
        $this->container['vendor_number'] = $vendor_number;

        return $this;
    }

    /**
     * Gets ship_from_number
     *
     * @return int
     */
    public function getShipFromNumber()
    {
        return $this->container['ship_from_number'];
    }

    /**
     * Sets ship_from_number
     *
     * @param int $ship_from_number ship_from_number
     *
     * @return $this
     */
    public function setShipFromNumber($ship_from_number)
    {
        $this->container['ship_from_number'] = $ship_from_number;

        return $this;
    }

    /**
     * Gets whse
     *
     * @return string
     */
    public function getWhse()
    {
        return $this->container['whse'];
    }

    /**
     * Sets whse
     *
     * @param string $whse whse
     *
     * @return $this
     */
    public function setWhse($whse)
    {
        $this->container['whse'] = $whse;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param string $transaction_type transaction_type
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product product
     *
     * @return $this
     */
    public function setProduct($product)
    {
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return string
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param string $buyer buyer
     *
     * @return $this
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets tracker_number
     *
     * @return int
     */
    public function getTrackerNumber()
    {
        return $this->container['tracker_number'];
    }

    /**
     * Sets tracker_number
     *
     * @param int $tracker_number tracker_number
     *
     * @return $this
     */
    public function setTrackerNumber($tracker_number)
    {
        $this->container['tracker_number'] = $tracker_number;

        return $this;
    }

    /**
     * Gets container_number
     *
     * @return string
     */
    public function getContainerNumber()
    {
        return $this->container['container_number'];
    }

    /**
     * Sets container_number
     *
     * @param string $container_number container_number
     *
     * @return $this
     */
    public function setContainerNumber($container_number)
    {
        $this->container['container_number'] = $container_number;

        return $this;
    }

    /**
     * Gets begin_stage
     *
     * @return int
     */
    public function getBeginStage()
    {
        return $this->container['begin_stage'];
    }

    /**
     * Sets begin_stage
     *
     * @param int $begin_stage begin_stage
     *
     * @return $this
     */
    public function setBeginStage($begin_stage)
    {
        $this->container['begin_stage'] = $begin_stage;

        return $this;
    }

    /**
     * Gets end_stage
     *
     * @return int
     */
    public function getEndStage()
    {
        return $this->container['end_stage'];
    }

    /**
     * Sets end_stage
     *
     * @param int $end_stage end_stage
     *
     * @return $this
     */
    public function setEndStage($end_stage)
    {
        $this->container['end_stage'] = $end_stage;

        return $this;
    }

    /**
     * Gets begin_costed_date
     *
     * @return \DateTime
     */
    public function getBeginCostedDate()
    {
        return $this->container['begin_costed_date'];
    }

    /**
     * Sets begin_costed_date
     *
     * @param \DateTime $begin_costed_date begin_costed_date
     *
     * @return $this
     */
    public function setBeginCostedDate($begin_costed_date)
    {
        $this->container['begin_costed_date'] = $begin_costed_date;

        return $this;
    }

    /**
     * Gets end_costed_date
     *
     * @return \DateTime
     */
    public function getEndCostedDate()
    {
        return $this->container['end_costed_date'];
    }

    /**
     * Sets end_costed_date
     *
     * @param \DateTime $end_costed_date end_costed_date
     *
     * @return $this
     */
    public function setEndCostedDate($end_costed_date)
    {
        $this->container['end_costed_date'] = $end_costed_date;

        return $this;
    }

    /**
     * Gets begin_paid_date
     *
     * @return \DateTime
     */
    public function getBeginPaidDate()
    {
        return $this->container['begin_paid_date'];
    }

    /**
     * Sets begin_paid_date
     *
     * @param \DateTime $begin_paid_date begin_paid_date
     *
     * @return $this
     */
    public function setBeginPaidDate($begin_paid_date)
    {
        $this->container['begin_paid_date'] = $begin_paid_date;

        return $this;
    }

    /**
     * Gets end_paid_date
     *
     * @return \DateTime
     */
    public function getEndPaidDate()
    {
        return $this->container['end_paid_date'];
    }

    /**
     * Sets end_paid_date
     *
     * @param \DateTime $end_paid_date end_paid_date
     *
     * @return $this
     */
    public function setEndPaidDate($end_paid_date)
    {
        $this->container['end_paid_date'] = $end_paid_date;

        return $this;
    }

    /**
     * Gets begin_due_date
     *
     * @return \DateTime
     */
    public function getBeginDueDate()
    {
        return $this->container['begin_due_date'];
    }

    /**
     * Sets begin_due_date
     *
     * @param \DateTime $begin_due_date begin_due_date
     *
     * @return $this
     */
    public function setBeginDueDate($begin_due_date)
    {
        $this->container['begin_due_date'] = $begin_due_date;

        return $this;
    }

    /**
     * Gets end_due_date
     *
     * @return \DateTime
     */
    public function getEndDueDate()
    {
        return $this->container['end_due_date'];
    }

    /**
     * Sets end_due_date
     *
     * @param \DateTime $end_due_date end_due_date
     *
     * @return $this
     */
    public function setEndDueDate($end_due_date)
    {
        $this->container['end_due_date'] = $end_due_date;

        return $this;
    }

    /**
     * Gets begin_printed_date
     *
     * @return \DateTime
     */
    public function getBeginPrintedDate()
    {
        return $this->container['begin_printed_date'];
    }

    /**
     * Sets begin_printed_date
     *
     * @param \DateTime $begin_printed_date begin_printed_date
     *
     * @return $this
     */
    public function setBeginPrintedDate($begin_printed_date)
    {
        $this->container['begin_printed_date'] = $begin_printed_date;

        return $this;
    }

    /**
     * Gets end_printed_date
     *
     * @return \DateTime
     */
    public function getEndPrintedDate()
    {
        return $this->container['end_printed_date'];
    }

    /**
     * Sets end_printed_date
     *
     * @param \DateTime $end_printed_date end_printed_date
     *
     * @return $this
     */
    public function setEndPrintedDate($end_printed_date)
    {
        $this->container['end_printed_date'] = $end_printed_date;

        return $this;
    }

    /**
     * Gets begin_entered_date
     *
     * @return \DateTime
     */
    public function getBeginEnteredDate()
    {
        return $this->container['begin_entered_date'];
    }

    /**
     * Sets begin_entered_date
     *
     * @param \DateTime $begin_entered_date begin_entered_date
     *
     * @return $this
     */
    public function setBeginEnteredDate($begin_entered_date)
    {
        $this->container['begin_entered_date'] = $begin_entered_date;

        return $this;
    }

    /**
     * Gets end_entered_date
     *
     * @return \DateTime
     */
    public function getEndEnteredDate()
    {
        return $this->container['end_entered_date'];
    }

    /**
     * Sets end_entered_date
     *
     * @param \DateTime $end_entered_date end_entered_date
     *
     * @return $this
     */
    public function setEndEnteredDate($end_entered_date)
    {
        $this->container['end_entered_date'] = $end_entered_date;

        return $this;
    }

    /**
     * Gets begin_receipt_date
     *
     * @return \DateTime
     */
    public function getBeginReceiptDate()
    {
        return $this->container['begin_receipt_date'];
    }

    /**
     * Sets begin_receipt_date
     *
     * @param \DateTime $begin_receipt_date begin_receipt_date
     *
     * @return $this
     */
    public function setBeginReceiptDate($begin_receipt_date)
    {
        $this->container['begin_receipt_date'] = $begin_receipt_date;

        return $this;
    }

    /**
     * Gets end_receipt_date
     *
     * @return \DateTime
     */
    public function getEndReceiptDate()
    {
        return $this->container['end_receipt_date'];
    }

    /**
     * Sets end_receipt_date
     *
     * @param \DateTime $end_receipt_date end_receipt_date
     *
     * @return $this
     */
    public function setEndReceiptDate($end_receipt_date)
    {
        $this->container['end_receipt_date'] = $end_receipt_date;

        return $this;
    }

    /**
     * Gets begin_ordered_date
     *
     * @return \DateTime
     */
    public function getBeginOrderedDate()
    {
        return $this->container['begin_ordered_date'];
    }

    /**
     * Sets begin_ordered_date
     *
     * @param \DateTime $begin_ordered_date begin_ordered_date
     *
     * @return $this
     */
    public function setBeginOrderedDate($begin_ordered_date)
    {
        $this->container['begin_ordered_date'] = $begin_ordered_date;

        return $this;
    }

    /**
     * Gets end_ordered_date
     *
     * @return \DateTime
     */
    public function getEndOrderedDate()
    {
        return $this->container['end_ordered_date'];
    }

    /**
     * Sets end_ordered_date
     *
     * @param \DateTime $end_ordered_date end_ordered_date
     *
     * @return $this
     */
    public function setEndOrderedDate($end_ordered_date)
    {
        $this->container['end_ordered_date'] = $end_ordered_date;

        return $this;
    }

    /**
     * Gets begin_requested_ship_date
     *
     * @return \DateTime
     */
    public function getBeginRequestedShipDate()
    {
        return $this->container['begin_requested_ship_date'];
    }

    /**
     * Sets begin_requested_ship_date
     *
     * @param \DateTime $begin_requested_ship_date begin_requested_ship_date
     *
     * @return $this
     */
    public function setBeginRequestedShipDate($begin_requested_ship_date)
    {
        $this->container['begin_requested_ship_date'] = $begin_requested_ship_date;

        return $this;
    }

    /**
     * Gets end_requested_ship_date
     *
     * @return \DateTime
     */
    public function getEndRequestedShipDate()
    {
        return $this->container['end_requested_ship_date'];
    }

    /**
     * Sets end_requested_ship_date
     *
     * @param \DateTime $end_requested_ship_date end_requested_ship_date
     *
     * @return $this
     */
    public function setEndRequestedShipDate($end_requested_ship_date)
    {
        $this->container['end_requested_ship_date'] = $end_requested_ship_date;

        return $this;
    }

    /**
     * Gets sort1
     *
     * @return string
     */
    public function getSort1()
    {
        return $this->container['sort1'];
    }

    /**
     * Sets sort1
     *
     * @param string $sort1 sort1
     *
     * @return $this
     */
    public function setSort1($sort1)
    {
        $this->container['sort1'] = $sort1;

        return $this;
    }

    /**
     * Gets sort2
     *
     * @return string
     */
    public function getSort2()
    {
        return $this->container['sort2'];
    }

    /**
     * Sets sort2
     *
     * @param string $sort2 sort2
     *
     * @return $this
     */
    public function setSort2($sort2)
    {
        $this->container['sort2'] = $sort2;

        return $this;
    }

    /**
     * Gets record_limit
     *
     * @return int
     */
    public function getRecordLimit()
    {
        return $this->container['record_limit'];
    }

    /**
     * Sets record_limit
     *
     * @param int $record_limit record_limit
     *
     * @return $this
     */
    public function setRecordLimit($record_limit)
    {
        $this->container['record_limit'] = $record_limit;

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


