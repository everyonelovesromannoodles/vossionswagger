<?php
/**
 * SxapiwtgetlistoftransferordersRequest
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
 * SxapiwtgetlistoftransferordersRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapiwtgetlistoftransferordersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiwtgetlistoftransferorders_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'ship_from_whse' => 'string',
        'ship_to_whse' => 'string',
        'ship_from_company_number' => 'int',
        'ship_to_company_number' => 'int',
        'transaction_types' => 'string',
        'product_code' => 'string',
        'ship_vias' => 'string',
        'warehouse_transfer_number' => 'int',
        'start_stage' => 'int',
        'end_stage' => 'int',
        'sort1' => 'string',
        'sort2' => 'string',
        'start_enter_date' => '\DateTime',
        'end_enter_date' => '\DateTime',
        'start_order_date' => '\DateTime',
        'end_order_date' => '\DateTime',
        'start_due_date' => '\DateTime',
        'end_due_date' => '\DateTime',
        'start_requested_ship_date' => '\DateTime',
        'end_requested_ship_date' => '\DateTime',
        'start_printed_date' => '\DateTime',
        'end_printed_date' => '\DateTime',
        'start_ship_date' => '\DateTime',
        'end_ship_date' => '\DateTime',
        'start_receipt_date' => '\DateTime',
        'end_receipt_date' => '\DateTime',
        'late_only_flag' => 'bool',
        'backorder_only_flag' => 'bool',
        'rush_only_flag' => 'bool',
        'nonstock_only_flag' => 'bool',
        'entered_stage_only' => 'bool',
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
        'ship_from_whse' => null,
        'ship_to_whse' => null,
        'ship_from_company_number' => 'int64',
        'ship_to_company_number' => 'int64',
        'transaction_types' => null,
        'product_code' => null,
        'ship_vias' => null,
        'warehouse_transfer_number' => 'int64',
        'start_stage' => 'int64',
        'end_stage' => 'int64',
        'sort1' => null,
        'sort2' => null,
        'start_enter_date' => 'date',
        'end_enter_date' => 'date',
        'start_order_date' => 'date',
        'end_order_date' => 'date',
        'start_due_date' => 'date',
        'end_due_date' => 'date',
        'start_requested_ship_date' => 'date',
        'end_requested_ship_date' => 'date',
        'start_printed_date' => 'date',
        'end_printed_date' => 'date',
        'start_ship_date' => 'date',
        'end_ship_date' => 'date',
        'start_receipt_date' => 'date',
        'end_receipt_date' => 'date',
        'late_only_flag' => null,
        'backorder_only_flag' => null,
        'rush_only_flag' => null,
        'nonstock_only_flag' => null,
        'entered_stage_only' => null,
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
        'ship_from_whse' => 'shipFromWhse',
        'ship_to_whse' => 'shipToWhse',
        'ship_from_company_number' => 'shipFromCompanyNumber',
        'ship_to_company_number' => 'shipToCompanyNumber',
        'transaction_types' => 'transactionTypes',
        'product_code' => 'productCode',
        'ship_vias' => 'shipVias',
        'warehouse_transfer_number' => 'warehouseTransferNumber',
        'start_stage' => 'startStage',
        'end_stage' => 'endStage',
        'sort1' => 'sort1',
        'sort2' => 'sort2',
        'start_enter_date' => 'startEnterDate',
        'end_enter_date' => 'endEnterDate',
        'start_order_date' => 'startOrderDate',
        'end_order_date' => 'endOrderDate',
        'start_due_date' => 'startDueDate',
        'end_due_date' => 'endDueDate',
        'start_requested_ship_date' => 'startRequestedShipDate',
        'end_requested_ship_date' => 'endRequestedShipDate',
        'start_printed_date' => 'startPrintedDate',
        'end_printed_date' => 'endPrintedDate',
        'start_ship_date' => 'startShipDate',
        'end_ship_date' => 'endShipDate',
        'start_receipt_date' => 'startReceiptDate',
        'end_receipt_date' => 'endReceiptDate',
        'late_only_flag' => 'lateOnlyFlag',
        'backorder_only_flag' => 'backorderOnlyFlag',
        'rush_only_flag' => 'rushOnlyFlag',
        'nonstock_only_flag' => 'nonstockOnlyFlag',
        'entered_stage_only' => 'enteredStageOnly',
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
        'ship_from_whse' => 'setShipFromWhse',
        'ship_to_whse' => 'setShipToWhse',
        'ship_from_company_number' => 'setShipFromCompanyNumber',
        'ship_to_company_number' => 'setShipToCompanyNumber',
        'transaction_types' => 'setTransactionTypes',
        'product_code' => 'setProductCode',
        'ship_vias' => 'setShipVias',
        'warehouse_transfer_number' => 'setWarehouseTransferNumber',
        'start_stage' => 'setStartStage',
        'end_stage' => 'setEndStage',
        'sort1' => 'setSort1',
        'sort2' => 'setSort2',
        'start_enter_date' => 'setStartEnterDate',
        'end_enter_date' => 'setEndEnterDate',
        'start_order_date' => 'setStartOrderDate',
        'end_order_date' => 'setEndOrderDate',
        'start_due_date' => 'setStartDueDate',
        'end_due_date' => 'setEndDueDate',
        'start_requested_ship_date' => 'setStartRequestedShipDate',
        'end_requested_ship_date' => 'setEndRequestedShipDate',
        'start_printed_date' => 'setStartPrintedDate',
        'end_printed_date' => 'setEndPrintedDate',
        'start_ship_date' => 'setStartShipDate',
        'end_ship_date' => 'setEndShipDate',
        'start_receipt_date' => 'setStartReceiptDate',
        'end_receipt_date' => 'setEndReceiptDate',
        'late_only_flag' => 'setLateOnlyFlag',
        'backorder_only_flag' => 'setBackorderOnlyFlag',
        'rush_only_flag' => 'setRushOnlyFlag',
        'nonstock_only_flag' => 'setNonstockOnlyFlag',
        'entered_stage_only' => 'setEnteredStageOnly',
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
        'ship_from_whse' => 'getShipFromWhse',
        'ship_to_whse' => 'getShipToWhse',
        'ship_from_company_number' => 'getShipFromCompanyNumber',
        'ship_to_company_number' => 'getShipToCompanyNumber',
        'transaction_types' => 'getTransactionTypes',
        'product_code' => 'getProductCode',
        'ship_vias' => 'getShipVias',
        'warehouse_transfer_number' => 'getWarehouseTransferNumber',
        'start_stage' => 'getStartStage',
        'end_stage' => 'getEndStage',
        'sort1' => 'getSort1',
        'sort2' => 'getSort2',
        'start_enter_date' => 'getStartEnterDate',
        'end_enter_date' => 'getEndEnterDate',
        'start_order_date' => 'getStartOrderDate',
        'end_order_date' => 'getEndOrderDate',
        'start_due_date' => 'getStartDueDate',
        'end_due_date' => 'getEndDueDate',
        'start_requested_ship_date' => 'getStartRequestedShipDate',
        'end_requested_ship_date' => 'getEndRequestedShipDate',
        'start_printed_date' => 'getStartPrintedDate',
        'end_printed_date' => 'getEndPrintedDate',
        'start_ship_date' => 'getStartShipDate',
        'end_ship_date' => 'getEndShipDate',
        'start_receipt_date' => 'getStartReceiptDate',
        'end_receipt_date' => 'getEndReceiptDate',
        'late_only_flag' => 'getLateOnlyFlag',
        'backorder_only_flag' => 'getBackorderOnlyFlag',
        'rush_only_flag' => 'getRushOnlyFlag',
        'nonstock_only_flag' => 'getNonstockOnlyFlag',
        'entered_stage_only' => 'getEnteredStageOnly',
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
        $this->container['ship_from_whse'] = isset($data['ship_from_whse']) ? $data['ship_from_whse'] : null;
        $this->container['ship_to_whse'] = isset($data['ship_to_whse']) ? $data['ship_to_whse'] : null;
        $this->container['ship_from_company_number'] = isset($data['ship_from_company_number']) ? $data['ship_from_company_number'] : null;
        $this->container['ship_to_company_number'] = isset($data['ship_to_company_number']) ? $data['ship_to_company_number'] : null;
        $this->container['transaction_types'] = isset($data['transaction_types']) ? $data['transaction_types'] : null;
        $this->container['product_code'] = isset($data['product_code']) ? $data['product_code'] : null;
        $this->container['ship_vias'] = isset($data['ship_vias']) ? $data['ship_vias'] : null;
        $this->container['warehouse_transfer_number'] = isset($data['warehouse_transfer_number']) ? $data['warehouse_transfer_number'] : null;
        $this->container['start_stage'] = isset($data['start_stage']) ? $data['start_stage'] : null;
        $this->container['end_stage'] = isset($data['end_stage']) ? $data['end_stage'] : null;
        $this->container['sort1'] = isset($data['sort1']) ? $data['sort1'] : null;
        $this->container['sort2'] = isset($data['sort2']) ? $data['sort2'] : null;
        $this->container['start_enter_date'] = isset($data['start_enter_date']) ? $data['start_enter_date'] : null;
        $this->container['end_enter_date'] = isset($data['end_enter_date']) ? $data['end_enter_date'] : null;
        $this->container['start_order_date'] = isset($data['start_order_date']) ? $data['start_order_date'] : null;
        $this->container['end_order_date'] = isset($data['end_order_date']) ? $data['end_order_date'] : null;
        $this->container['start_due_date'] = isset($data['start_due_date']) ? $data['start_due_date'] : null;
        $this->container['end_due_date'] = isset($data['end_due_date']) ? $data['end_due_date'] : null;
        $this->container['start_requested_ship_date'] = isset($data['start_requested_ship_date']) ? $data['start_requested_ship_date'] : null;
        $this->container['end_requested_ship_date'] = isset($data['end_requested_ship_date']) ? $data['end_requested_ship_date'] : null;
        $this->container['start_printed_date'] = isset($data['start_printed_date']) ? $data['start_printed_date'] : null;
        $this->container['end_printed_date'] = isset($data['end_printed_date']) ? $data['end_printed_date'] : null;
        $this->container['start_ship_date'] = isset($data['start_ship_date']) ? $data['start_ship_date'] : null;
        $this->container['end_ship_date'] = isset($data['end_ship_date']) ? $data['end_ship_date'] : null;
        $this->container['start_receipt_date'] = isset($data['start_receipt_date']) ? $data['start_receipt_date'] : null;
        $this->container['end_receipt_date'] = isset($data['end_receipt_date']) ? $data['end_receipt_date'] : null;
        $this->container['late_only_flag'] = isset($data['late_only_flag']) ? $data['late_only_flag'] : null;
        $this->container['backorder_only_flag'] = isset($data['backorder_only_flag']) ? $data['backorder_only_flag'] : null;
        $this->container['rush_only_flag'] = isset($data['rush_only_flag']) ? $data['rush_only_flag'] : null;
        $this->container['nonstock_only_flag'] = isset($data['nonstock_only_flag']) ? $data['nonstock_only_flag'] : null;
        $this->container['entered_stage_only'] = isset($data['entered_stage_only']) ? $data['entered_stage_only'] : null;
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
     * Gets ship_from_whse
     *
     * @return string
     */
    public function getShipFromWhse()
    {
        return $this->container['ship_from_whse'];
    }

    /**
     * Sets ship_from_whse
     *
     * @param string $ship_from_whse ship_from_whse
     *
     * @return $this
     */
    public function setShipFromWhse($ship_from_whse)
    {
        $this->container['ship_from_whse'] = $ship_from_whse;

        return $this;
    }

    /**
     * Gets ship_to_whse
     *
     * @return string
     */
    public function getShipToWhse()
    {
        return $this->container['ship_to_whse'];
    }

    /**
     * Sets ship_to_whse
     *
     * @param string $ship_to_whse ship_to_whse
     *
     * @return $this
     */
    public function setShipToWhse($ship_to_whse)
    {
        $this->container['ship_to_whse'] = $ship_to_whse;

        return $this;
    }

    /**
     * Gets ship_from_company_number
     *
     * @return int
     */
    public function getShipFromCompanyNumber()
    {
        return $this->container['ship_from_company_number'];
    }

    /**
     * Sets ship_from_company_number
     *
     * @param int $ship_from_company_number ship_from_company_number
     *
     * @return $this
     */
    public function setShipFromCompanyNumber($ship_from_company_number)
    {
        $this->container['ship_from_company_number'] = $ship_from_company_number;

        return $this;
    }

    /**
     * Gets ship_to_company_number
     *
     * @return int
     */
    public function getShipToCompanyNumber()
    {
        return $this->container['ship_to_company_number'];
    }

    /**
     * Sets ship_to_company_number
     *
     * @param int $ship_to_company_number ship_to_company_number
     *
     * @return $this
     */
    public function setShipToCompanyNumber($ship_to_company_number)
    {
        $this->container['ship_to_company_number'] = $ship_to_company_number;

        return $this;
    }

    /**
     * Gets transaction_types
     *
     * @return string
     */
    public function getTransactionTypes()
    {
        return $this->container['transaction_types'];
    }

    /**
     * Sets transaction_types
     *
     * @param string $transaction_types transaction_types
     *
     * @return $this
     */
    public function setTransactionTypes($transaction_types)
    {
        $this->container['transaction_types'] = $transaction_types;

        return $this;
    }

    /**
     * Gets product_code
     *
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['product_code'];
    }

    /**
     * Sets product_code
     *
     * @param string $product_code product_code
     *
     * @return $this
     */
    public function setProductCode($product_code)
    {
        $this->container['product_code'] = $product_code;

        return $this;
    }

    /**
     * Gets ship_vias
     *
     * @return string
     */
    public function getShipVias()
    {
        return $this->container['ship_vias'];
    }

    /**
     * Sets ship_vias
     *
     * @param string $ship_vias ship_vias
     *
     * @return $this
     */
    public function setShipVias($ship_vias)
    {
        $this->container['ship_vias'] = $ship_vias;

        return $this;
    }

    /**
     * Gets warehouse_transfer_number
     *
     * @return int
     */
    public function getWarehouseTransferNumber()
    {
        return $this->container['warehouse_transfer_number'];
    }

    /**
     * Sets warehouse_transfer_number
     *
     * @param int $warehouse_transfer_number warehouse_transfer_number
     *
     * @return $this
     */
    public function setWarehouseTransferNumber($warehouse_transfer_number)
    {
        $this->container['warehouse_transfer_number'] = $warehouse_transfer_number;

        return $this;
    }

    /**
     * Gets start_stage
     *
     * @return int
     */
    public function getStartStage()
    {
        return $this->container['start_stage'];
    }

    /**
     * Sets start_stage
     *
     * @param int $start_stage start_stage
     *
     * @return $this
     */
    public function setStartStage($start_stage)
    {
        $this->container['start_stage'] = $start_stage;

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
     * Gets start_enter_date
     *
     * @return \DateTime
     */
    public function getStartEnterDate()
    {
        return $this->container['start_enter_date'];
    }

    /**
     * Sets start_enter_date
     *
     * @param \DateTime $start_enter_date start_enter_date
     *
     * @return $this
     */
    public function setStartEnterDate($start_enter_date)
    {
        $this->container['start_enter_date'] = $start_enter_date;

        return $this;
    }

    /**
     * Gets end_enter_date
     *
     * @return \DateTime
     */
    public function getEndEnterDate()
    {
        return $this->container['end_enter_date'];
    }

    /**
     * Sets end_enter_date
     *
     * @param \DateTime $end_enter_date end_enter_date
     *
     * @return $this
     */
    public function setEndEnterDate($end_enter_date)
    {
        $this->container['end_enter_date'] = $end_enter_date;

        return $this;
    }

    /**
     * Gets start_order_date
     *
     * @return \DateTime
     */
    public function getStartOrderDate()
    {
        return $this->container['start_order_date'];
    }

    /**
     * Sets start_order_date
     *
     * @param \DateTime $start_order_date start_order_date
     *
     * @return $this
     */
    public function setStartOrderDate($start_order_date)
    {
        $this->container['start_order_date'] = $start_order_date;

        return $this;
    }

    /**
     * Gets end_order_date
     *
     * @return \DateTime
     */
    public function getEndOrderDate()
    {
        return $this->container['end_order_date'];
    }

    /**
     * Sets end_order_date
     *
     * @param \DateTime $end_order_date end_order_date
     *
     * @return $this
     */
    public function setEndOrderDate($end_order_date)
    {
        $this->container['end_order_date'] = $end_order_date;

        return $this;
    }

    /**
     * Gets start_due_date
     *
     * @return \DateTime
     */
    public function getStartDueDate()
    {
        return $this->container['start_due_date'];
    }

    /**
     * Sets start_due_date
     *
     * @param \DateTime $start_due_date start_due_date
     *
     * @return $this
     */
    public function setStartDueDate($start_due_date)
    {
        $this->container['start_due_date'] = $start_due_date;

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
     * Gets start_requested_ship_date
     *
     * @return \DateTime
     */
    public function getStartRequestedShipDate()
    {
        return $this->container['start_requested_ship_date'];
    }

    /**
     * Sets start_requested_ship_date
     *
     * @param \DateTime $start_requested_ship_date start_requested_ship_date
     *
     * @return $this
     */
    public function setStartRequestedShipDate($start_requested_ship_date)
    {
        $this->container['start_requested_ship_date'] = $start_requested_ship_date;

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
     * Gets start_printed_date
     *
     * @return \DateTime
     */
    public function getStartPrintedDate()
    {
        return $this->container['start_printed_date'];
    }

    /**
     * Sets start_printed_date
     *
     * @param \DateTime $start_printed_date start_printed_date
     *
     * @return $this
     */
    public function setStartPrintedDate($start_printed_date)
    {
        $this->container['start_printed_date'] = $start_printed_date;

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
     * Gets start_ship_date
     *
     * @return \DateTime
     */
    public function getStartShipDate()
    {
        return $this->container['start_ship_date'];
    }

    /**
     * Sets start_ship_date
     *
     * @param \DateTime $start_ship_date start_ship_date
     *
     * @return $this
     */
    public function setStartShipDate($start_ship_date)
    {
        $this->container['start_ship_date'] = $start_ship_date;

        return $this;
    }

    /**
     * Gets end_ship_date
     *
     * @return \DateTime
     */
    public function getEndShipDate()
    {
        return $this->container['end_ship_date'];
    }

    /**
     * Sets end_ship_date
     *
     * @param \DateTime $end_ship_date end_ship_date
     *
     * @return $this
     */
    public function setEndShipDate($end_ship_date)
    {
        $this->container['end_ship_date'] = $end_ship_date;

        return $this;
    }

    /**
     * Gets start_receipt_date
     *
     * @return \DateTime
     */
    public function getStartReceiptDate()
    {
        return $this->container['start_receipt_date'];
    }

    /**
     * Sets start_receipt_date
     *
     * @param \DateTime $start_receipt_date start_receipt_date
     *
     * @return $this
     */
    public function setStartReceiptDate($start_receipt_date)
    {
        $this->container['start_receipt_date'] = $start_receipt_date;

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
     * Gets late_only_flag
     *
     * @return bool
     */
    public function getLateOnlyFlag()
    {
        return $this->container['late_only_flag'];
    }

    /**
     * Sets late_only_flag
     *
     * @param bool $late_only_flag late_only_flag
     *
     * @return $this
     */
    public function setLateOnlyFlag($late_only_flag)
    {
        $this->container['late_only_flag'] = $late_only_flag;

        return $this;
    }

    /**
     * Gets backorder_only_flag
     *
     * @return bool
     */
    public function getBackorderOnlyFlag()
    {
        return $this->container['backorder_only_flag'];
    }

    /**
     * Sets backorder_only_flag
     *
     * @param bool $backorder_only_flag backorder_only_flag
     *
     * @return $this
     */
    public function setBackorderOnlyFlag($backorder_only_flag)
    {
        $this->container['backorder_only_flag'] = $backorder_only_flag;

        return $this;
    }

    /**
     * Gets rush_only_flag
     *
     * @return bool
     */
    public function getRushOnlyFlag()
    {
        return $this->container['rush_only_flag'];
    }

    /**
     * Sets rush_only_flag
     *
     * @param bool $rush_only_flag rush_only_flag
     *
     * @return $this
     */
    public function setRushOnlyFlag($rush_only_flag)
    {
        $this->container['rush_only_flag'] = $rush_only_flag;

        return $this;
    }

    /**
     * Gets nonstock_only_flag
     *
     * @return bool
     */
    public function getNonstockOnlyFlag()
    {
        return $this->container['nonstock_only_flag'];
    }

    /**
     * Sets nonstock_only_flag
     *
     * @param bool $nonstock_only_flag nonstock_only_flag
     *
     * @return $this
     */
    public function setNonstockOnlyFlag($nonstock_only_flag)
    {
        $this->container['nonstock_only_flag'] = $nonstock_only_flag;

        return $this;
    }

    /**
     * Gets entered_stage_only
     *
     * @return bool
     */
    public function getEnteredStageOnly()
    {
        return $this->container['entered_stage_only'];
    }

    /**
     * Sets entered_stage_only
     *
     * @param bool $entered_stage_only entered_stage_only
     *
     * @return $this
     */
    public function setEnteredStageOnly($entered_stage_only)
    {
        $this->container['entered_stage_only'] = $entered_stage_only;

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


