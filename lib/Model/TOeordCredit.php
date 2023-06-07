<?php
/**
 * TOeordCredit
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
 * TOeordCredit Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TOeordCredit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-oeord_credit';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_no' => 'int',
        'order_suf' => 'int',
        'order_nox' => 'string',
        'order_notes' => 'string',
        'stage_cd' => 'int',
        'stage_cdx' => 'string',
        'trans_type' => 'string',
        'promise_dt' => '\DateTime',
        'create_dt' => '\DateTime',
        'cust_no' => 'double',
        'cust_nox' => 'string',
        'cust_notes' => 'string',
        'name' => 'string',
        'whse' => 'string',
        'approv_ty' => 'string',
        'taken_by' => 'string',
        'credit_mgr' => 'string',
        'priority' => 'int',
        'ship_via_ty' => 'string',
        'sort_dt1' => '\DateTime',
        'sort_dt2' => '\DateTime',
        'sort_fld' => 'string',
        'amounti' => 'int',
        'seq_no' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_no' => 'int64',
        'order_suf' => 'int64',
        'order_nox' => null,
        'order_notes' => null,
        'stage_cd' => 'int64',
        'stage_cdx' => null,
        'trans_type' => null,
        'promise_dt' => 'date',
        'create_dt' => 'date',
        'cust_no' => 'double',
        'cust_nox' => null,
        'cust_notes' => null,
        'name' => null,
        'whse' => null,
        'approv_ty' => null,
        'taken_by' => null,
        'credit_mgr' => null,
        'priority' => 'int64',
        'ship_via_ty' => null,
        'sort_dt1' => 'date',
        'sort_dt2' => 'date',
        'sort_fld' => null,
        'amounti' => 'int64',
        'seq_no' => 'int64'
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
        'order_no' => 'orderNo',
        'order_suf' => 'orderSuf',
        'order_nox' => 'orderNox',
        'order_notes' => 'orderNotes',
        'stage_cd' => 'stageCd',
        'stage_cdx' => 'stageCdx',
        'trans_type' => 'transType',
        'promise_dt' => 'promiseDt',
        'create_dt' => 'createDt',
        'cust_no' => 'custNo',
        'cust_nox' => 'custNox',
        'cust_notes' => 'custNotes',
        'name' => 'name',
        'whse' => 'whse',
        'approv_ty' => 'approvTy',
        'taken_by' => 'takenBy',
        'credit_mgr' => 'creditMgr',
        'priority' => 'priority',
        'ship_via_ty' => 'shipViaTy',
        'sort_dt1' => 'sortDt1',
        'sort_dt2' => 'sortDt2',
        'sort_fld' => 'sortFld',
        'amounti' => 'amounti',
        'seq_no' => 'seqNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_no' => 'setOrderNo',
        'order_suf' => 'setOrderSuf',
        'order_nox' => 'setOrderNox',
        'order_notes' => 'setOrderNotes',
        'stage_cd' => 'setStageCd',
        'stage_cdx' => 'setStageCdx',
        'trans_type' => 'setTransType',
        'promise_dt' => 'setPromiseDt',
        'create_dt' => 'setCreateDt',
        'cust_no' => 'setCustNo',
        'cust_nox' => 'setCustNox',
        'cust_notes' => 'setCustNotes',
        'name' => 'setName',
        'whse' => 'setWhse',
        'approv_ty' => 'setApprovTy',
        'taken_by' => 'setTakenBy',
        'credit_mgr' => 'setCreditMgr',
        'priority' => 'setPriority',
        'ship_via_ty' => 'setShipViaTy',
        'sort_dt1' => 'setSortDt1',
        'sort_dt2' => 'setSortDt2',
        'sort_fld' => 'setSortFld',
        'amounti' => 'setAmounti',
        'seq_no' => 'setSeqNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_no' => 'getOrderNo',
        'order_suf' => 'getOrderSuf',
        'order_nox' => 'getOrderNox',
        'order_notes' => 'getOrderNotes',
        'stage_cd' => 'getStageCd',
        'stage_cdx' => 'getStageCdx',
        'trans_type' => 'getTransType',
        'promise_dt' => 'getPromiseDt',
        'create_dt' => 'getCreateDt',
        'cust_no' => 'getCustNo',
        'cust_nox' => 'getCustNox',
        'cust_notes' => 'getCustNotes',
        'name' => 'getName',
        'whse' => 'getWhse',
        'approv_ty' => 'getApprovTy',
        'taken_by' => 'getTakenBy',
        'credit_mgr' => 'getCreditMgr',
        'priority' => 'getPriority',
        'ship_via_ty' => 'getShipViaTy',
        'sort_dt1' => 'getSortDt1',
        'sort_dt2' => 'getSortDt2',
        'sort_fld' => 'getSortFld',
        'amounti' => 'getAmounti',
        'seq_no' => 'getSeqNo'
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
        $this->container['order_no'] = isset($data['order_no']) ? $data['order_no'] : null;
        $this->container['order_suf'] = isset($data['order_suf']) ? $data['order_suf'] : null;
        $this->container['order_nox'] = isset($data['order_nox']) ? $data['order_nox'] : null;
        $this->container['order_notes'] = isset($data['order_notes']) ? $data['order_notes'] : null;
        $this->container['stage_cd'] = isset($data['stage_cd']) ? $data['stage_cd'] : null;
        $this->container['stage_cdx'] = isset($data['stage_cdx']) ? $data['stage_cdx'] : null;
        $this->container['trans_type'] = isset($data['trans_type']) ? $data['trans_type'] : null;
        $this->container['promise_dt'] = isset($data['promise_dt']) ? $data['promise_dt'] : null;
        $this->container['create_dt'] = isset($data['create_dt']) ? $data['create_dt'] : null;
        $this->container['cust_no'] = isset($data['cust_no']) ? $data['cust_no'] : null;
        $this->container['cust_nox'] = isset($data['cust_nox']) ? $data['cust_nox'] : null;
        $this->container['cust_notes'] = isset($data['cust_notes']) ? $data['cust_notes'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['approv_ty'] = isset($data['approv_ty']) ? $data['approv_ty'] : null;
        $this->container['taken_by'] = isset($data['taken_by']) ? $data['taken_by'] : null;
        $this->container['credit_mgr'] = isset($data['credit_mgr']) ? $data['credit_mgr'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['ship_via_ty'] = isset($data['ship_via_ty']) ? $data['ship_via_ty'] : null;
        $this->container['sort_dt1'] = isset($data['sort_dt1']) ? $data['sort_dt1'] : null;
        $this->container['sort_dt2'] = isset($data['sort_dt2']) ? $data['sort_dt2'] : null;
        $this->container['sort_fld'] = isset($data['sort_fld']) ? $data['sort_fld'] : null;
        $this->container['amounti'] = isset($data['amounti']) ? $data['amounti'] : null;
        $this->container['seq_no'] = isset($data['seq_no']) ? $data['seq_no'] : null;
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
     * Gets order_no
     *
     * @return int
     */
    public function getOrderNo()
    {
        return $this->container['order_no'];
    }

    /**
     * Sets order_no
     *
     * @param int $order_no order_no
     *
     * @return $this
     */
    public function setOrderNo($order_no)
    {
        $this->container['order_no'] = $order_no;

        return $this;
    }

    /**
     * Gets order_suf
     *
     * @return int
     */
    public function getOrderSuf()
    {
        return $this->container['order_suf'];
    }

    /**
     * Sets order_suf
     *
     * @param int $order_suf order_suf
     *
     * @return $this
     */
    public function setOrderSuf($order_suf)
    {
        $this->container['order_suf'] = $order_suf;

        return $this;
    }

    /**
     * Gets order_nox
     *
     * @return string
     */
    public function getOrderNox()
    {
        return $this->container['order_nox'];
    }

    /**
     * Sets order_nox
     *
     * @param string $order_nox order_nox
     *
     * @return $this
     */
    public function setOrderNox($order_nox)
    {
        $this->container['order_nox'] = $order_nox;

        return $this;
    }

    /**
     * Gets order_notes
     *
     * @return string
     */
    public function getOrderNotes()
    {
        return $this->container['order_notes'];
    }

    /**
     * Sets order_notes
     *
     * @param string $order_notes order_notes
     *
     * @return $this
     */
    public function setOrderNotes($order_notes)
    {
        $this->container['order_notes'] = $order_notes;

        return $this;
    }

    /**
     * Gets stage_cd
     *
     * @return int
     */
    public function getStageCd()
    {
        return $this->container['stage_cd'];
    }

    /**
     * Sets stage_cd
     *
     * @param int $stage_cd stage_cd
     *
     * @return $this
     */
    public function setStageCd($stage_cd)
    {
        $this->container['stage_cd'] = $stage_cd;

        return $this;
    }

    /**
     * Gets stage_cdx
     *
     * @return string
     */
    public function getStageCdx()
    {
        return $this->container['stage_cdx'];
    }

    /**
     * Sets stage_cdx
     *
     * @param string $stage_cdx stage_cdx
     *
     * @return $this
     */
    public function setStageCdx($stage_cdx)
    {
        $this->container['stage_cdx'] = $stage_cdx;

        return $this;
    }

    /**
     * Gets trans_type
     *
     * @return string
     */
    public function getTransType()
    {
        return $this->container['trans_type'];
    }

    /**
     * Sets trans_type
     *
     * @param string $trans_type trans_type
     *
     * @return $this
     */
    public function setTransType($trans_type)
    {
        $this->container['trans_type'] = $trans_type;

        return $this;
    }

    /**
     * Gets promise_dt
     *
     * @return \DateTime
     */
    public function getPromiseDt()
    {
        return $this->container['promise_dt'];
    }

    /**
     * Sets promise_dt
     *
     * @param \DateTime $promise_dt promise_dt
     *
     * @return $this
     */
    public function setPromiseDt($promise_dt)
    {
        $this->container['promise_dt'] = $promise_dt;

        return $this;
    }

    /**
     * Gets create_dt
     *
     * @return \DateTime
     */
    public function getCreateDt()
    {
        return $this->container['create_dt'];
    }

    /**
     * Sets create_dt
     *
     * @param \DateTime $create_dt create_dt
     *
     * @return $this
     */
    public function setCreateDt($create_dt)
    {
        $this->container['create_dt'] = $create_dt;

        return $this;
    }

    /**
     * Gets cust_no
     *
     * @return double
     */
    public function getCustNo()
    {
        return $this->container['cust_no'];
    }

    /**
     * Sets cust_no
     *
     * @param double $cust_no cust_no
     *
     * @return $this
     */
    public function setCustNo($cust_no)
    {
        $this->container['cust_no'] = $cust_no;

        return $this;
    }

    /**
     * Gets cust_nox
     *
     * @return string
     */
    public function getCustNox()
    {
        return $this->container['cust_nox'];
    }

    /**
     * Sets cust_nox
     *
     * @param string $cust_nox cust_nox
     *
     * @return $this
     */
    public function setCustNox($cust_nox)
    {
        $this->container['cust_nox'] = $cust_nox;

        return $this;
    }

    /**
     * Gets cust_notes
     *
     * @return string
     */
    public function getCustNotes()
    {
        return $this->container['cust_notes'];
    }

    /**
     * Sets cust_notes
     *
     * @param string $cust_notes cust_notes
     *
     * @return $this
     */
    public function setCustNotes($cust_notes)
    {
        $this->container['cust_notes'] = $cust_notes;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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
     * Gets approv_ty
     *
     * @return string
     */
    public function getApprovTy()
    {
        return $this->container['approv_ty'];
    }

    /**
     * Sets approv_ty
     *
     * @param string $approv_ty approv_ty
     *
     * @return $this
     */
    public function setApprovTy($approv_ty)
    {
        $this->container['approv_ty'] = $approv_ty;

        return $this;
    }

    /**
     * Gets taken_by
     *
     * @return string
     */
    public function getTakenBy()
    {
        return $this->container['taken_by'];
    }

    /**
     * Sets taken_by
     *
     * @param string $taken_by taken_by
     *
     * @return $this
     */
    public function setTakenBy($taken_by)
    {
        $this->container['taken_by'] = $taken_by;

        return $this;
    }

    /**
     * Gets credit_mgr
     *
     * @return string
     */
    public function getCreditMgr()
    {
        return $this->container['credit_mgr'];
    }

    /**
     * Sets credit_mgr
     *
     * @param string $credit_mgr credit_mgr
     *
     * @return $this
     */
    public function setCreditMgr($credit_mgr)
    {
        $this->container['credit_mgr'] = $credit_mgr;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets ship_via_ty
     *
     * @return string
     */
    public function getShipViaTy()
    {
        return $this->container['ship_via_ty'];
    }

    /**
     * Sets ship_via_ty
     *
     * @param string $ship_via_ty ship_via_ty
     *
     * @return $this
     */
    public function setShipViaTy($ship_via_ty)
    {
        $this->container['ship_via_ty'] = $ship_via_ty;

        return $this;
    }

    /**
     * Gets sort_dt1
     *
     * @return \DateTime
     */
    public function getSortDt1()
    {
        return $this->container['sort_dt1'];
    }

    /**
     * Sets sort_dt1
     *
     * @param \DateTime $sort_dt1 sort_dt1
     *
     * @return $this
     */
    public function setSortDt1($sort_dt1)
    {
        $this->container['sort_dt1'] = $sort_dt1;

        return $this;
    }

    /**
     * Gets sort_dt2
     *
     * @return \DateTime
     */
    public function getSortDt2()
    {
        return $this->container['sort_dt2'];
    }

    /**
     * Sets sort_dt2
     *
     * @param \DateTime $sort_dt2 sort_dt2
     *
     * @return $this
     */
    public function setSortDt2($sort_dt2)
    {
        $this->container['sort_dt2'] = $sort_dt2;

        return $this;
    }

    /**
     * Gets sort_fld
     *
     * @return string
     */
    public function getSortFld()
    {
        return $this->container['sort_fld'];
    }

    /**
     * Sets sort_fld
     *
     * @param string $sort_fld sort_fld
     *
     * @return $this
     */
    public function setSortFld($sort_fld)
    {
        $this->container['sort_fld'] = $sort_fld;

        return $this;
    }

    /**
     * Gets amounti
     *
     * @return int
     */
    public function getAmounti()
    {
        return $this->container['amounti'];
    }

    /**
     * Sets amounti
     *
     * @param int $amounti amounti
     *
     * @return $this
     */
    public function setAmounti($amounti)
    {
        $this->container['amounti'] = $amounti;

        return $this;
    }

    /**
     * Gets seq_no
     *
     * @return int
     */
    public function getSeqNo()
    {
        return $this->container['seq_no'];
    }

    /**
     * Sets seq_no
     *
     * @param int $seq_no seq_no
     *
     * @return $this
     */
    public function setSeqNo($seq_no)
    {
        $this->container['seq_no'] = $seq_no;

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


