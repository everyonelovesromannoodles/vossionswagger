<?php
/**
 * TOeordV5
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
 * TOeordV5 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TOeordV5 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-oeordV5';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'order_no' => 'int',
        'order_suf' => 'int',
        'whse' => 'string',
        'cust_no' => 'double',
        'ship_to' => 'string',
        'stage_cd' => 'int',
        'stage_cd_words' => 'string',
        'enter_dt' => '\DateTime',
        'tot_inv_amt' => 'double',
        'trans_type' => 'string',
        'cust_po' => 'string',
        'req_ship_dt' => '\DateTime',
        'promise_dt' => '\DateTime',
        'picked_dt' => '\DateTime',
        'ship_dt' => '\DateTime',
        'invoice_dt' => '\DateTime',
        'sort_fld' => 'string',
        'approvty' => 'string',
        'pickedtm' => 'string',
        'pickinit' => 'string',
        'taken_by' => 'string',
        'tot_line_ord' => 'double',
        'tot_line_amt' => 'double',
        'user1' => 'string',
        'user2' => 'string',
        'user3' => 'string',
        'user4' => 'string',
        'user5' => 'string',
        'user6' => 'double',
        'user7' => 'double',
        'user8' => '\DateTime',
        'user9' => '\DateTime',
        'user10' => 'string',
        'user11' => 'string',
        'user12' => 'string',
        'user13' => 'string',
        'user14' => 'string',
        'user15' => 'string',
        'user16' => 'string',
        'user17' => 'string',
        'user18' => 'string',
        'user19' => 'string',
        'user20' => 'string',
        'user21' => 'string',
        'user22' => 'string',
        'user23' => 'string',
        'user24' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'order_no' => 'int64',
        'order_suf' => 'int64',
        'whse' => null,
        'cust_no' => 'double',
        'ship_to' => null,
        'stage_cd' => 'int64',
        'stage_cd_words' => null,
        'enter_dt' => 'date',
        'tot_inv_amt' => 'double',
        'trans_type' => null,
        'cust_po' => null,
        'req_ship_dt' => 'date',
        'promise_dt' => 'date',
        'picked_dt' => 'date',
        'ship_dt' => 'date',
        'invoice_dt' => 'date',
        'sort_fld' => null,
        'approvty' => null,
        'pickedtm' => null,
        'pickinit' => null,
        'taken_by' => null,
        'tot_line_ord' => 'double',
        'tot_line_amt' => 'double',
        'user1' => null,
        'user2' => null,
        'user3' => null,
        'user4' => null,
        'user5' => null,
        'user6' => 'double',
        'user7' => 'double',
        'user8' => 'date',
        'user9' => 'date',
        'user10' => null,
        'user11' => null,
        'user12' => null,
        'user13' => null,
        'user14' => null,
        'user15' => null,
        'user16' => null,
        'user17' => null,
        'user18' => null,
        'user19' => null,
        'user20' => null,
        'user21' => null,
        'user22' => null,
        'user23' => null,
        'user24' => null
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
        'whse' => 'whse',
        'cust_no' => 'custNo',
        'ship_to' => 'shipTo',
        'stage_cd' => 'stageCd',
        'stage_cd_words' => 'stageCdWords',
        'enter_dt' => 'enterDt',
        'tot_inv_amt' => 'totInvAmt',
        'trans_type' => 'transType',
        'cust_po' => 'custPo',
        'req_ship_dt' => 'reqShipDt',
        'promise_dt' => 'promiseDt',
        'picked_dt' => 'pickedDt',
        'ship_dt' => 'shipDt',
        'invoice_dt' => 'invoiceDt',
        'sort_fld' => 'sortFld',
        'approvty' => 'approvty',
        'pickedtm' => 'pickedtm',
        'pickinit' => 'pickinit',
        'taken_by' => 'takenBy',
        'tot_line_ord' => 'totLineOrd',
        'tot_line_amt' => 'totLineAmt',
        'user1' => 'user1',
        'user2' => 'user2',
        'user3' => 'user3',
        'user4' => 'user4',
        'user5' => 'user5',
        'user6' => 'user6',
        'user7' => 'user7',
        'user8' => 'user8',
        'user9' => 'user9',
        'user10' => 'user10',
        'user11' => 'user11',
        'user12' => 'user12',
        'user13' => 'user13',
        'user14' => 'user14',
        'user15' => 'user15',
        'user16' => 'user16',
        'user17' => 'user17',
        'user18' => 'user18',
        'user19' => 'user19',
        'user20' => 'user20',
        'user21' => 'user21',
        'user22' => 'user22',
        'user23' => 'user23',
        'user24' => 'user24'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'order_no' => 'setOrderNo',
        'order_suf' => 'setOrderSuf',
        'whse' => 'setWhse',
        'cust_no' => 'setCustNo',
        'ship_to' => 'setShipTo',
        'stage_cd' => 'setStageCd',
        'stage_cd_words' => 'setStageCdWords',
        'enter_dt' => 'setEnterDt',
        'tot_inv_amt' => 'setTotInvAmt',
        'trans_type' => 'setTransType',
        'cust_po' => 'setCustPo',
        'req_ship_dt' => 'setReqShipDt',
        'promise_dt' => 'setPromiseDt',
        'picked_dt' => 'setPickedDt',
        'ship_dt' => 'setShipDt',
        'invoice_dt' => 'setInvoiceDt',
        'sort_fld' => 'setSortFld',
        'approvty' => 'setApprovty',
        'pickedtm' => 'setPickedtm',
        'pickinit' => 'setPickinit',
        'taken_by' => 'setTakenBy',
        'tot_line_ord' => 'setTotLineOrd',
        'tot_line_amt' => 'setTotLineAmt',
        'user1' => 'setUser1',
        'user2' => 'setUser2',
        'user3' => 'setUser3',
        'user4' => 'setUser4',
        'user5' => 'setUser5',
        'user6' => 'setUser6',
        'user7' => 'setUser7',
        'user8' => 'setUser8',
        'user9' => 'setUser9',
        'user10' => 'setUser10',
        'user11' => 'setUser11',
        'user12' => 'setUser12',
        'user13' => 'setUser13',
        'user14' => 'setUser14',
        'user15' => 'setUser15',
        'user16' => 'setUser16',
        'user17' => 'setUser17',
        'user18' => 'setUser18',
        'user19' => 'setUser19',
        'user20' => 'setUser20',
        'user21' => 'setUser21',
        'user22' => 'setUser22',
        'user23' => 'setUser23',
        'user24' => 'setUser24'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'order_no' => 'getOrderNo',
        'order_suf' => 'getOrderSuf',
        'whse' => 'getWhse',
        'cust_no' => 'getCustNo',
        'ship_to' => 'getShipTo',
        'stage_cd' => 'getStageCd',
        'stage_cd_words' => 'getStageCdWords',
        'enter_dt' => 'getEnterDt',
        'tot_inv_amt' => 'getTotInvAmt',
        'trans_type' => 'getTransType',
        'cust_po' => 'getCustPo',
        'req_ship_dt' => 'getReqShipDt',
        'promise_dt' => 'getPromiseDt',
        'picked_dt' => 'getPickedDt',
        'ship_dt' => 'getShipDt',
        'invoice_dt' => 'getInvoiceDt',
        'sort_fld' => 'getSortFld',
        'approvty' => 'getApprovty',
        'pickedtm' => 'getPickedtm',
        'pickinit' => 'getPickinit',
        'taken_by' => 'getTakenBy',
        'tot_line_ord' => 'getTotLineOrd',
        'tot_line_amt' => 'getTotLineAmt',
        'user1' => 'getUser1',
        'user2' => 'getUser2',
        'user3' => 'getUser3',
        'user4' => 'getUser4',
        'user5' => 'getUser5',
        'user6' => 'getUser6',
        'user7' => 'getUser7',
        'user8' => 'getUser8',
        'user9' => 'getUser9',
        'user10' => 'getUser10',
        'user11' => 'getUser11',
        'user12' => 'getUser12',
        'user13' => 'getUser13',
        'user14' => 'getUser14',
        'user15' => 'getUser15',
        'user16' => 'getUser16',
        'user17' => 'getUser17',
        'user18' => 'getUser18',
        'user19' => 'getUser19',
        'user20' => 'getUser20',
        'user21' => 'getUser21',
        'user22' => 'getUser22',
        'user23' => 'getUser23',
        'user24' => 'getUser24'
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
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['cust_no'] = isset($data['cust_no']) ? $data['cust_no'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['stage_cd'] = isset($data['stage_cd']) ? $data['stage_cd'] : null;
        $this->container['stage_cd_words'] = isset($data['stage_cd_words']) ? $data['stage_cd_words'] : null;
        $this->container['enter_dt'] = isset($data['enter_dt']) ? $data['enter_dt'] : null;
        $this->container['tot_inv_amt'] = isset($data['tot_inv_amt']) ? $data['tot_inv_amt'] : null;
        $this->container['trans_type'] = isset($data['trans_type']) ? $data['trans_type'] : null;
        $this->container['cust_po'] = isset($data['cust_po']) ? $data['cust_po'] : null;
        $this->container['req_ship_dt'] = isset($data['req_ship_dt']) ? $data['req_ship_dt'] : null;
        $this->container['promise_dt'] = isset($data['promise_dt']) ? $data['promise_dt'] : null;
        $this->container['picked_dt'] = isset($data['picked_dt']) ? $data['picked_dt'] : null;
        $this->container['ship_dt'] = isset($data['ship_dt']) ? $data['ship_dt'] : null;
        $this->container['invoice_dt'] = isset($data['invoice_dt']) ? $data['invoice_dt'] : null;
        $this->container['sort_fld'] = isset($data['sort_fld']) ? $data['sort_fld'] : null;
        $this->container['approvty'] = isset($data['approvty']) ? $data['approvty'] : null;
        $this->container['pickedtm'] = isset($data['pickedtm']) ? $data['pickedtm'] : null;
        $this->container['pickinit'] = isset($data['pickinit']) ? $data['pickinit'] : null;
        $this->container['taken_by'] = isset($data['taken_by']) ? $data['taken_by'] : null;
        $this->container['tot_line_ord'] = isset($data['tot_line_ord']) ? $data['tot_line_ord'] : null;
        $this->container['tot_line_amt'] = isset($data['tot_line_amt']) ? $data['tot_line_amt'] : null;
        $this->container['user1'] = isset($data['user1']) ? $data['user1'] : null;
        $this->container['user2'] = isset($data['user2']) ? $data['user2'] : null;
        $this->container['user3'] = isset($data['user3']) ? $data['user3'] : null;
        $this->container['user4'] = isset($data['user4']) ? $data['user4'] : null;
        $this->container['user5'] = isset($data['user5']) ? $data['user5'] : null;
        $this->container['user6'] = isset($data['user6']) ? $data['user6'] : null;
        $this->container['user7'] = isset($data['user7']) ? $data['user7'] : null;
        $this->container['user8'] = isset($data['user8']) ? $data['user8'] : null;
        $this->container['user9'] = isset($data['user9']) ? $data['user9'] : null;
        $this->container['user10'] = isset($data['user10']) ? $data['user10'] : null;
        $this->container['user11'] = isset($data['user11']) ? $data['user11'] : null;
        $this->container['user12'] = isset($data['user12']) ? $data['user12'] : null;
        $this->container['user13'] = isset($data['user13']) ? $data['user13'] : null;
        $this->container['user14'] = isset($data['user14']) ? $data['user14'] : null;
        $this->container['user15'] = isset($data['user15']) ? $data['user15'] : null;
        $this->container['user16'] = isset($data['user16']) ? $data['user16'] : null;
        $this->container['user17'] = isset($data['user17']) ? $data['user17'] : null;
        $this->container['user18'] = isset($data['user18']) ? $data['user18'] : null;
        $this->container['user19'] = isset($data['user19']) ? $data['user19'] : null;
        $this->container['user20'] = isset($data['user20']) ? $data['user20'] : null;
        $this->container['user21'] = isset($data['user21']) ? $data['user21'] : null;
        $this->container['user22'] = isset($data['user22']) ? $data['user22'] : null;
        $this->container['user23'] = isset($data['user23']) ? $data['user23'] : null;
        $this->container['user24'] = isset($data['user24']) ? $data['user24'] : null;
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
     * Gets stage_cd_words
     *
     * @return string
     */
    public function getStageCdWords()
    {
        return $this->container['stage_cd_words'];
    }

    /**
     * Sets stage_cd_words
     *
     * @param string $stage_cd_words stage_cd_words
     *
     * @return $this
     */
    public function setStageCdWords($stage_cd_words)
    {
        $this->container['stage_cd_words'] = $stage_cd_words;

        return $this;
    }

    /**
     * Gets enter_dt
     *
     * @return \DateTime
     */
    public function getEnterDt()
    {
        return $this->container['enter_dt'];
    }

    /**
     * Sets enter_dt
     *
     * @param \DateTime $enter_dt enter_dt
     *
     * @return $this
     */
    public function setEnterDt($enter_dt)
    {
        $this->container['enter_dt'] = $enter_dt;

        return $this;
    }

    /**
     * Gets tot_inv_amt
     *
     * @return double
     */
    public function getTotInvAmt()
    {
        return $this->container['tot_inv_amt'];
    }

    /**
     * Sets tot_inv_amt
     *
     * @param double $tot_inv_amt tot_inv_amt
     *
     * @return $this
     */
    public function setTotInvAmt($tot_inv_amt)
    {
        $this->container['tot_inv_amt'] = $tot_inv_amt;

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
     * Gets cust_po
     *
     * @return string
     */
    public function getCustPo()
    {
        return $this->container['cust_po'];
    }

    /**
     * Sets cust_po
     *
     * @param string $cust_po cust_po
     *
     * @return $this
     */
    public function setCustPo($cust_po)
    {
        $this->container['cust_po'] = $cust_po;

        return $this;
    }

    /**
     * Gets req_ship_dt
     *
     * @return \DateTime
     */
    public function getReqShipDt()
    {
        return $this->container['req_ship_dt'];
    }

    /**
     * Sets req_ship_dt
     *
     * @param \DateTime $req_ship_dt req_ship_dt
     *
     * @return $this
     */
    public function setReqShipDt($req_ship_dt)
    {
        $this->container['req_ship_dt'] = $req_ship_dt;

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
     * Gets picked_dt
     *
     * @return \DateTime
     */
    public function getPickedDt()
    {
        return $this->container['picked_dt'];
    }

    /**
     * Sets picked_dt
     *
     * @param \DateTime $picked_dt picked_dt
     *
     * @return $this
     */
    public function setPickedDt($picked_dt)
    {
        $this->container['picked_dt'] = $picked_dt;

        return $this;
    }

    /**
     * Gets ship_dt
     *
     * @return \DateTime
     */
    public function getShipDt()
    {
        return $this->container['ship_dt'];
    }

    /**
     * Sets ship_dt
     *
     * @param \DateTime $ship_dt ship_dt
     *
     * @return $this
     */
    public function setShipDt($ship_dt)
    {
        $this->container['ship_dt'] = $ship_dt;

        return $this;
    }

    /**
     * Gets invoice_dt
     *
     * @return \DateTime
     */
    public function getInvoiceDt()
    {
        return $this->container['invoice_dt'];
    }

    /**
     * Sets invoice_dt
     *
     * @param \DateTime $invoice_dt invoice_dt
     *
     * @return $this
     */
    public function setInvoiceDt($invoice_dt)
    {
        $this->container['invoice_dt'] = $invoice_dt;

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
     * Gets approvty
     *
     * @return string
     */
    public function getApprovty()
    {
        return $this->container['approvty'];
    }

    /**
     * Sets approvty
     *
     * @param string $approvty approvty
     *
     * @return $this
     */
    public function setApprovty($approvty)
    {
        $this->container['approvty'] = $approvty;

        return $this;
    }

    /**
     * Gets pickedtm
     *
     * @return string
     */
    public function getPickedtm()
    {
        return $this->container['pickedtm'];
    }

    /**
     * Sets pickedtm
     *
     * @param string $pickedtm pickedtm
     *
     * @return $this
     */
    public function setPickedtm($pickedtm)
    {
        $this->container['pickedtm'] = $pickedtm;

        return $this;
    }

    /**
     * Gets pickinit
     *
     * @return string
     */
    public function getPickinit()
    {
        return $this->container['pickinit'];
    }

    /**
     * Sets pickinit
     *
     * @param string $pickinit pickinit
     *
     * @return $this
     */
    public function setPickinit($pickinit)
    {
        $this->container['pickinit'] = $pickinit;

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
     * Gets tot_line_ord
     *
     * @return double
     */
    public function getTotLineOrd()
    {
        return $this->container['tot_line_ord'];
    }

    /**
     * Sets tot_line_ord
     *
     * @param double $tot_line_ord tot_line_ord
     *
     * @return $this
     */
    public function setTotLineOrd($tot_line_ord)
    {
        $this->container['tot_line_ord'] = $tot_line_ord;

        return $this;
    }

    /**
     * Gets tot_line_amt
     *
     * @return double
     */
    public function getTotLineAmt()
    {
        return $this->container['tot_line_amt'];
    }

    /**
     * Sets tot_line_amt
     *
     * @param double $tot_line_amt tot_line_amt
     *
     * @return $this
     */
    public function setTotLineAmt($tot_line_amt)
    {
        $this->container['tot_line_amt'] = $tot_line_amt;

        return $this;
    }

    /**
     * Gets user1
     *
     * @return string
     */
    public function getUser1()
    {
        return $this->container['user1'];
    }

    /**
     * Sets user1
     *
     * @param string $user1 user1
     *
     * @return $this
     */
    public function setUser1($user1)
    {
        $this->container['user1'] = $user1;

        return $this;
    }

    /**
     * Gets user2
     *
     * @return string
     */
    public function getUser2()
    {
        return $this->container['user2'];
    }

    /**
     * Sets user2
     *
     * @param string $user2 user2
     *
     * @return $this
     */
    public function setUser2($user2)
    {
        $this->container['user2'] = $user2;

        return $this;
    }

    /**
     * Gets user3
     *
     * @return string
     */
    public function getUser3()
    {
        return $this->container['user3'];
    }

    /**
     * Sets user3
     *
     * @param string $user3 user3
     *
     * @return $this
     */
    public function setUser3($user3)
    {
        $this->container['user3'] = $user3;

        return $this;
    }

    /**
     * Gets user4
     *
     * @return string
     */
    public function getUser4()
    {
        return $this->container['user4'];
    }

    /**
     * Sets user4
     *
     * @param string $user4 user4
     *
     * @return $this
     */
    public function setUser4($user4)
    {
        $this->container['user4'] = $user4;

        return $this;
    }

    /**
     * Gets user5
     *
     * @return string
     */
    public function getUser5()
    {
        return $this->container['user5'];
    }

    /**
     * Sets user5
     *
     * @param string $user5 user5
     *
     * @return $this
     */
    public function setUser5($user5)
    {
        $this->container['user5'] = $user5;

        return $this;
    }

    /**
     * Gets user6
     *
     * @return double
     */
    public function getUser6()
    {
        return $this->container['user6'];
    }

    /**
     * Sets user6
     *
     * @param double $user6 user6
     *
     * @return $this
     */
    public function setUser6($user6)
    {
        $this->container['user6'] = $user6;

        return $this;
    }

    /**
     * Gets user7
     *
     * @return double
     */
    public function getUser7()
    {
        return $this->container['user7'];
    }

    /**
     * Sets user7
     *
     * @param double $user7 user7
     *
     * @return $this
     */
    public function setUser7($user7)
    {
        $this->container['user7'] = $user7;

        return $this;
    }

    /**
     * Gets user8
     *
     * @return \DateTime
     */
    public function getUser8()
    {
        return $this->container['user8'];
    }

    /**
     * Sets user8
     *
     * @param \DateTime $user8 user8
     *
     * @return $this
     */
    public function setUser8($user8)
    {
        $this->container['user8'] = $user8;

        return $this;
    }

    /**
     * Gets user9
     *
     * @return \DateTime
     */
    public function getUser9()
    {
        return $this->container['user9'];
    }

    /**
     * Sets user9
     *
     * @param \DateTime $user9 user9
     *
     * @return $this
     */
    public function setUser9($user9)
    {
        $this->container['user9'] = $user9;

        return $this;
    }

    /**
     * Gets user10
     *
     * @return string
     */
    public function getUser10()
    {
        return $this->container['user10'];
    }

    /**
     * Sets user10
     *
     * @param string $user10 user10
     *
     * @return $this
     */
    public function setUser10($user10)
    {
        $this->container['user10'] = $user10;

        return $this;
    }

    /**
     * Gets user11
     *
     * @return string
     */
    public function getUser11()
    {
        return $this->container['user11'];
    }

    /**
     * Sets user11
     *
     * @param string $user11 user11
     *
     * @return $this
     */
    public function setUser11($user11)
    {
        $this->container['user11'] = $user11;

        return $this;
    }

    /**
     * Gets user12
     *
     * @return string
     */
    public function getUser12()
    {
        return $this->container['user12'];
    }

    /**
     * Sets user12
     *
     * @param string $user12 user12
     *
     * @return $this
     */
    public function setUser12($user12)
    {
        $this->container['user12'] = $user12;

        return $this;
    }

    /**
     * Gets user13
     *
     * @return string
     */
    public function getUser13()
    {
        return $this->container['user13'];
    }

    /**
     * Sets user13
     *
     * @param string $user13 user13
     *
     * @return $this
     */
    public function setUser13($user13)
    {
        $this->container['user13'] = $user13;

        return $this;
    }

    /**
     * Gets user14
     *
     * @return string
     */
    public function getUser14()
    {
        return $this->container['user14'];
    }

    /**
     * Sets user14
     *
     * @param string $user14 user14
     *
     * @return $this
     */
    public function setUser14($user14)
    {
        $this->container['user14'] = $user14;

        return $this;
    }

    /**
     * Gets user15
     *
     * @return string
     */
    public function getUser15()
    {
        return $this->container['user15'];
    }

    /**
     * Sets user15
     *
     * @param string $user15 user15
     *
     * @return $this
     */
    public function setUser15($user15)
    {
        $this->container['user15'] = $user15;

        return $this;
    }

    /**
     * Gets user16
     *
     * @return string
     */
    public function getUser16()
    {
        return $this->container['user16'];
    }

    /**
     * Sets user16
     *
     * @param string $user16 user16
     *
     * @return $this
     */
    public function setUser16($user16)
    {
        $this->container['user16'] = $user16;

        return $this;
    }

    /**
     * Gets user17
     *
     * @return string
     */
    public function getUser17()
    {
        return $this->container['user17'];
    }

    /**
     * Sets user17
     *
     * @param string $user17 user17
     *
     * @return $this
     */
    public function setUser17($user17)
    {
        $this->container['user17'] = $user17;

        return $this;
    }

    /**
     * Gets user18
     *
     * @return string
     */
    public function getUser18()
    {
        return $this->container['user18'];
    }

    /**
     * Sets user18
     *
     * @param string $user18 user18
     *
     * @return $this
     */
    public function setUser18($user18)
    {
        $this->container['user18'] = $user18;

        return $this;
    }

    /**
     * Gets user19
     *
     * @return string
     */
    public function getUser19()
    {
        return $this->container['user19'];
    }

    /**
     * Sets user19
     *
     * @param string $user19 user19
     *
     * @return $this
     */
    public function setUser19($user19)
    {
        $this->container['user19'] = $user19;

        return $this;
    }

    /**
     * Gets user20
     *
     * @return string
     */
    public function getUser20()
    {
        return $this->container['user20'];
    }

    /**
     * Sets user20
     *
     * @param string $user20 user20
     *
     * @return $this
     */
    public function setUser20($user20)
    {
        $this->container['user20'] = $user20;

        return $this;
    }

    /**
     * Gets user21
     *
     * @return string
     */
    public function getUser21()
    {
        return $this->container['user21'];
    }

    /**
     * Sets user21
     *
     * @param string $user21 user21
     *
     * @return $this
     */
    public function setUser21($user21)
    {
        $this->container['user21'] = $user21;

        return $this;
    }

    /**
     * Gets user22
     *
     * @return string
     */
    public function getUser22()
    {
        return $this->container['user22'];
    }

    /**
     * Sets user22
     *
     * @param string $user22 user22
     *
     * @return $this
     */
    public function setUser22($user22)
    {
        $this->container['user22'] = $user22;

        return $this;
    }

    /**
     * Gets user23
     *
     * @return string
     */
    public function getUser23()
    {
        return $this->container['user23'];
    }

    /**
     * Sets user23
     *
     * @param string $user23 user23
     *
     * @return $this
     */
    public function setUser23($user23)
    {
        $this->container['user23'] = $user23;

        return $this;
    }

    /**
     * Gets user24
     *
     * @return string
     */
    public function getUser24()
    {
        return $this->container['user24'];
    }

    /**
     * Sets user24
     *
     * @param string $user24 user24
     *
     * @return $this
     */
    public function setUser24($user24)
    {
        $this->container['user24'] = $user24;

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


