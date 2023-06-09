<?php
/**
 * SxapikpgetlistofworkordersRequest
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
 * SxapikpgetlistofworkordersRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapikpgetlistofworkordersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapikpgetlistofworkorders_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'kit_product_code' => 'string',
        'component_product_code' => 'string',
        'warehouse' => 'string',
        'beginning_stage_code' => 'string',
        'ending_stage_code' => 'string',
        'beginning_entered_date' => 'string',
        'ending_entered_date' => 'string',
        'created_by' => 'string',
        'status_type' => 'string',
        'backorder_only_flag' => 'bool',
        'sort1' => 'string',
        'sort2' => 'string',
        'record_limit' => 'int',
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
        'kit_product_code' => null,
        'component_product_code' => null,
        'warehouse' => null,
        'beginning_stage_code' => null,
        'ending_stage_code' => null,
        'beginning_entered_date' => null,
        'ending_entered_date' => null,
        'created_by' => null,
        'status_type' => null,
        'backorder_only_flag' => null,
        'sort1' => null,
        'sort2' => null,
        'record_limit' => 'int64',
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
        'kit_product_code' => 'kitProductCode',
        'component_product_code' => 'componentProductCode',
        'warehouse' => 'warehouse',
        'beginning_stage_code' => 'beginningStageCode',
        'ending_stage_code' => 'endingStageCode',
        'beginning_entered_date' => 'beginningEnteredDate',
        'ending_entered_date' => 'endingEnteredDate',
        'created_by' => 'createdBy',
        'status_type' => 'statusType',
        'backorder_only_flag' => 'backorderOnlyFlag',
        'sort1' => 'sort1',
        'sort2' => 'sort2',
        'record_limit' => 'recordLimit',
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
        'kit_product_code' => 'setKitProductCode',
        'component_product_code' => 'setComponentProductCode',
        'warehouse' => 'setWarehouse',
        'beginning_stage_code' => 'setBeginningStageCode',
        'ending_stage_code' => 'setEndingStageCode',
        'beginning_entered_date' => 'setBeginningEnteredDate',
        'ending_entered_date' => 'setEndingEnteredDate',
        'created_by' => 'setCreatedBy',
        'status_type' => 'setStatusType',
        'backorder_only_flag' => 'setBackorderOnlyFlag',
        'sort1' => 'setSort1',
        'sort2' => 'setSort2',
        'record_limit' => 'setRecordLimit',
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
        'kit_product_code' => 'getKitProductCode',
        'component_product_code' => 'getComponentProductCode',
        'warehouse' => 'getWarehouse',
        'beginning_stage_code' => 'getBeginningStageCode',
        'ending_stage_code' => 'getEndingStageCode',
        'beginning_entered_date' => 'getBeginningEnteredDate',
        'ending_entered_date' => 'getEndingEnteredDate',
        'created_by' => 'getCreatedBy',
        'status_type' => 'getStatusType',
        'backorder_only_flag' => 'getBackorderOnlyFlag',
        'sort1' => 'getSort1',
        'sort2' => 'getSort2',
        'record_limit' => 'getRecordLimit',
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
        $this->container['kit_product_code'] = isset($data['kit_product_code']) ? $data['kit_product_code'] : null;
        $this->container['component_product_code'] = isset($data['component_product_code']) ? $data['component_product_code'] : null;
        $this->container['warehouse'] = isset($data['warehouse']) ? $data['warehouse'] : null;
        $this->container['beginning_stage_code'] = isset($data['beginning_stage_code']) ? $data['beginning_stage_code'] : null;
        $this->container['ending_stage_code'] = isset($data['ending_stage_code']) ? $data['ending_stage_code'] : null;
        $this->container['beginning_entered_date'] = isset($data['beginning_entered_date']) ? $data['beginning_entered_date'] : null;
        $this->container['ending_entered_date'] = isset($data['ending_entered_date']) ? $data['ending_entered_date'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['status_type'] = isset($data['status_type']) ? $data['status_type'] : null;
        $this->container['backorder_only_flag'] = isset($data['backorder_only_flag']) ? $data['backorder_only_flag'] : null;
        $this->container['sort1'] = isset($data['sort1']) ? $data['sort1'] : null;
        $this->container['sort2'] = isset($data['sort2']) ? $data['sort2'] : null;
        $this->container['record_limit'] = isset($data['record_limit']) ? $data['record_limit'] : null;
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
     * Gets kit_product_code
     *
     * @return string
     */
    public function getKitProductCode()
    {
        return $this->container['kit_product_code'];
    }

    /**
     * Sets kit_product_code
     *
     * @param string $kit_product_code kit_product_code
     *
     * @return $this
     */
    public function setKitProductCode($kit_product_code)
    {
        $this->container['kit_product_code'] = $kit_product_code;

        return $this;
    }

    /**
     * Gets component_product_code
     *
     * @return string
     */
    public function getComponentProductCode()
    {
        return $this->container['component_product_code'];
    }

    /**
     * Sets component_product_code
     *
     * @param string $component_product_code component_product_code
     *
     * @return $this
     */
    public function setComponentProductCode($component_product_code)
    {
        $this->container['component_product_code'] = $component_product_code;

        return $this;
    }

    /**
     * Gets warehouse
     *
     * @return string
     */
    public function getWarehouse()
    {
        return $this->container['warehouse'];
    }

    /**
     * Sets warehouse
     *
     * @param string $warehouse warehouse
     *
     * @return $this
     */
    public function setWarehouse($warehouse)
    {
        $this->container['warehouse'] = $warehouse;

        return $this;
    }

    /**
     * Gets beginning_stage_code
     *
     * @return string
     */
    public function getBeginningStageCode()
    {
        return $this->container['beginning_stage_code'];
    }

    /**
     * Sets beginning_stage_code
     *
     * @param string $beginning_stage_code beginning_stage_code
     *
     * @return $this
     */
    public function setBeginningStageCode($beginning_stage_code)
    {
        $this->container['beginning_stage_code'] = $beginning_stage_code;

        return $this;
    }

    /**
     * Gets ending_stage_code
     *
     * @return string
     */
    public function getEndingStageCode()
    {
        return $this->container['ending_stage_code'];
    }

    /**
     * Sets ending_stage_code
     *
     * @param string $ending_stage_code ending_stage_code
     *
     * @return $this
     */
    public function setEndingStageCode($ending_stage_code)
    {
        $this->container['ending_stage_code'] = $ending_stage_code;

        return $this;
    }

    /**
     * Gets beginning_entered_date
     *
     * @return string
     */
    public function getBeginningEnteredDate()
    {
        return $this->container['beginning_entered_date'];
    }

    /**
     * Sets beginning_entered_date
     *
     * @param string $beginning_entered_date beginning_entered_date
     *
     * @return $this
     */
    public function setBeginningEnteredDate($beginning_entered_date)
    {
        $this->container['beginning_entered_date'] = $beginning_entered_date;

        return $this;
    }

    /**
     * Gets ending_entered_date
     *
     * @return string
     */
    public function getEndingEnteredDate()
    {
        return $this->container['ending_entered_date'];
    }

    /**
     * Sets ending_entered_date
     *
     * @param string $ending_entered_date ending_entered_date
     *
     * @return $this
     */
    public function setEndingEnteredDate($ending_entered_date)
    {
        $this->container['ending_entered_date'] = $ending_entered_date;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string $created_by created_by
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets status_type
     *
     * @return string
     */
    public function getStatusType()
    {
        return $this->container['status_type'];
    }

    /**
     * Sets status_type
     *
     * @param string $status_type status_type
     *
     * @return $this
     */
    public function setStatusType($status_type)
    {
        $this->container['status_type'] = $status_type;

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


