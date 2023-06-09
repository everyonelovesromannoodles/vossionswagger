<?php
/**
 * TSrinputheaderdata
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
 * TSrinputheaderdata Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TSrinputheaderdata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-srinputheaderdata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customerid' => 'string',
        'warehouseid' => 'string',
        'ordersource' => 'string',
        'ponumber' => 'string',
        'ordnumber' => 'string',
        'billtocontact' => 'string',
        'billtocity' => 'string',
        'billtostate' => 'string',
        'billtozip' => 'string',
        'billtophone' => 'string',
        'billtophoneext' => 'string',
        'backorder' => 'string',
        'carriercode' => 'string',
        'customeraddr1' => 'string',
        'customeraddr2' => 'string',
        'customeraddr3' => 'string',
        'customeraddr4' => 'string',
        'contractnumber' => 'string',
        'customername' => 'string',
        'customercountry' => 'string',
        'shiptoaddr1' => 'string',
        'shiptoaddr2' => 'string',
        'shiptoaddr3' => 'string',
        'shiptoaddr4' => 'string',
        'shiptocontact' => 'string',
        'shiptocity' => 'string',
        'shiptocountry' => 'string',
        'shiptoname' => 'string',
        'shiptonumber' => 'string',
        'shiptostate' => 'string',
        'shiptophone' => 'string',
        'shiptophoneext' => 'string',
        'shiptozip' => 'string',
        'ordertype' => 'string',
        'employeeid' => 'string',
        'employeename' => 'string',
        'department' => 'string',
        'project' => 'string',
        'workordernum' => 'string',
        'machinenum' => 'string',
        'notes' => 'string',
        'srnotesprntfl' => 'string',
        'pickprtfl' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customerid' => null,
        'warehouseid' => null,
        'ordersource' => null,
        'ponumber' => null,
        'ordnumber' => null,
        'billtocontact' => null,
        'billtocity' => null,
        'billtostate' => null,
        'billtozip' => null,
        'billtophone' => null,
        'billtophoneext' => null,
        'backorder' => null,
        'carriercode' => null,
        'customeraddr1' => null,
        'customeraddr2' => null,
        'customeraddr3' => null,
        'customeraddr4' => null,
        'contractnumber' => null,
        'customername' => null,
        'customercountry' => null,
        'shiptoaddr1' => null,
        'shiptoaddr2' => null,
        'shiptoaddr3' => null,
        'shiptoaddr4' => null,
        'shiptocontact' => null,
        'shiptocity' => null,
        'shiptocountry' => null,
        'shiptoname' => null,
        'shiptonumber' => null,
        'shiptostate' => null,
        'shiptophone' => null,
        'shiptophoneext' => null,
        'shiptozip' => null,
        'ordertype' => null,
        'employeeid' => null,
        'employeename' => null,
        'department' => null,
        'project' => null,
        'workordernum' => null,
        'machinenum' => null,
        'notes' => null,
        'srnotesprntfl' => null,
        'pickprtfl' => null
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
        'customerid' => 'customerid',
        'warehouseid' => 'warehouseid',
        'ordersource' => 'ordersource',
        'ponumber' => 'ponumber',
        'ordnumber' => 'ordnumber',
        'billtocontact' => 'billtocontact',
        'billtocity' => 'billtocity',
        'billtostate' => 'billtostate',
        'billtozip' => 'billtozip',
        'billtophone' => 'billtophone',
        'billtophoneext' => 'billtophoneext',
        'backorder' => 'backorder',
        'carriercode' => 'carriercode',
        'customeraddr1' => 'customeraddr1',
        'customeraddr2' => 'customeraddr2',
        'customeraddr3' => 'customeraddr3',
        'customeraddr4' => 'customeraddr4',
        'contractnumber' => 'contractnumber',
        'customername' => 'customername',
        'customercountry' => 'customercountry',
        'shiptoaddr1' => 'shiptoaddr1',
        'shiptoaddr2' => 'shiptoaddr2',
        'shiptoaddr3' => 'shiptoaddr3',
        'shiptoaddr4' => 'shiptoaddr4',
        'shiptocontact' => 'shiptocontact',
        'shiptocity' => 'shiptocity',
        'shiptocountry' => 'shiptocountry',
        'shiptoname' => 'shiptoname',
        'shiptonumber' => 'shiptonumber',
        'shiptostate' => 'shiptostate',
        'shiptophone' => 'shiptophone',
        'shiptophoneext' => 'shiptophoneext',
        'shiptozip' => 'shiptozip',
        'ordertype' => 'ordertype',
        'employeeid' => 'employeeid',
        'employeename' => 'employeename',
        'department' => 'department',
        'project' => 'project',
        'workordernum' => 'workordernum',
        'machinenum' => 'machinenum',
        'notes' => 'notes',
        'srnotesprntfl' => 'srnotesprntfl',
        'pickprtfl' => 'pickprtfl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customerid' => 'setCustomerid',
        'warehouseid' => 'setWarehouseid',
        'ordersource' => 'setOrdersource',
        'ponumber' => 'setPonumber',
        'ordnumber' => 'setOrdnumber',
        'billtocontact' => 'setBilltocontact',
        'billtocity' => 'setBilltocity',
        'billtostate' => 'setBilltostate',
        'billtozip' => 'setBilltozip',
        'billtophone' => 'setBilltophone',
        'billtophoneext' => 'setBilltophoneext',
        'backorder' => 'setBackorder',
        'carriercode' => 'setCarriercode',
        'customeraddr1' => 'setCustomeraddr1',
        'customeraddr2' => 'setCustomeraddr2',
        'customeraddr3' => 'setCustomeraddr3',
        'customeraddr4' => 'setCustomeraddr4',
        'contractnumber' => 'setContractnumber',
        'customername' => 'setCustomername',
        'customercountry' => 'setCustomercountry',
        'shiptoaddr1' => 'setShiptoaddr1',
        'shiptoaddr2' => 'setShiptoaddr2',
        'shiptoaddr3' => 'setShiptoaddr3',
        'shiptoaddr4' => 'setShiptoaddr4',
        'shiptocontact' => 'setShiptocontact',
        'shiptocity' => 'setShiptocity',
        'shiptocountry' => 'setShiptocountry',
        'shiptoname' => 'setShiptoname',
        'shiptonumber' => 'setShiptonumber',
        'shiptostate' => 'setShiptostate',
        'shiptophone' => 'setShiptophone',
        'shiptophoneext' => 'setShiptophoneext',
        'shiptozip' => 'setShiptozip',
        'ordertype' => 'setOrdertype',
        'employeeid' => 'setEmployeeid',
        'employeename' => 'setEmployeename',
        'department' => 'setDepartment',
        'project' => 'setProject',
        'workordernum' => 'setWorkordernum',
        'machinenum' => 'setMachinenum',
        'notes' => 'setNotes',
        'srnotesprntfl' => 'setSrnotesprntfl',
        'pickprtfl' => 'setPickprtfl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customerid' => 'getCustomerid',
        'warehouseid' => 'getWarehouseid',
        'ordersource' => 'getOrdersource',
        'ponumber' => 'getPonumber',
        'ordnumber' => 'getOrdnumber',
        'billtocontact' => 'getBilltocontact',
        'billtocity' => 'getBilltocity',
        'billtostate' => 'getBilltostate',
        'billtozip' => 'getBilltozip',
        'billtophone' => 'getBilltophone',
        'billtophoneext' => 'getBilltophoneext',
        'backorder' => 'getBackorder',
        'carriercode' => 'getCarriercode',
        'customeraddr1' => 'getCustomeraddr1',
        'customeraddr2' => 'getCustomeraddr2',
        'customeraddr3' => 'getCustomeraddr3',
        'customeraddr4' => 'getCustomeraddr4',
        'contractnumber' => 'getContractnumber',
        'customername' => 'getCustomername',
        'customercountry' => 'getCustomercountry',
        'shiptoaddr1' => 'getShiptoaddr1',
        'shiptoaddr2' => 'getShiptoaddr2',
        'shiptoaddr3' => 'getShiptoaddr3',
        'shiptoaddr4' => 'getShiptoaddr4',
        'shiptocontact' => 'getShiptocontact',
        'shiptocity' => 'getShiptocity',
        'shiptocountry' => 'getShiptocountry',
        'shiptoname' => 'getShiptoname',
        'shiptonumber' => 'getShiptonumber',
        'shiptostate' => 'getShiptostate',
        'shiptophone' => 'getShiptophone',
        'shiptophoneext' => 'getShiptophoneext',
        'shiptozip' => 'getShiptozip',
        'ordertype' => 'getOrdertype',
        'employeeid' => 'getEmployeeid',
        'employeename' => 'getEmployeename',
        'department' => 'getDepartment',
        'project' => 'getProject',
        'workordernum' => 'getWorkordernum',
        'machinenum' => 'getMachinenum',
        'notes' => 'getNotes',
        'srnotesprntfl' => 'getSrnotesprntfl',
        'pickprtfl' => 'getPickprtfl'
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
        $this->container['customerid'] = isset($data['customerid']) ? $data['customerid'] : null;
        $this->container['warehouseid'] = isset($data['warehouseid']) ? $data['warehouseid'] : null;
        $this->container['ordersource'] = isset($data['ordersource']) ? $data['ordersource'] : null;
        $this->container['ponumber'] = isset($data['ponumber']) ? $data['ponumber'] : null;
        $this->container['ordnumber'] = isset($data['ordnumber']) ? $data['ordnumber'] : null;
        $this->container['billtocontact'] = isset($data['billtocontact']) ? $data['billtocontact'] : null;
        $this->container['billtocity'] = isset($data['billtocity']) ? $data['billtocity'] : null;
        $this->container['billtostate'] = isset($data['billtostate']) ? $data['billtostate'] : null;
        $this->container['billtozip'] = isset($data['billtozip']) ? $data['billtozip'] : null;
        $this->container['billtophone'] = isset($data['billtophone']) ? $data['billtophone'] : null;
        $this->container['billtophoneext'] = isset($data['billtophoneext']) ? $data['billtophoneext'] : null;
        $this->container['backorder'] = isset($data['backorder']) ? $data['backorder'] : null;
        $this->container['carriercode'] = isset($data['carriercode']) ? $data['carriercode'] : null;
        $this->container['customeraddr1'] = isset($data['customeraddr1']) ? $data['customeraddr1'] : null;
        $this->container['customeraddr2'] = isset($data['customeraddr2']) ? $data['customeraddr2'] : null;
        $this->container['customeraddr3'] = isset($data['customeraddr3']) ? $data['customeraddr3'] : null;
        $this->container['customeraddr4'] = isset($data['customeraddr4']) ? $data['customeraddr4'] : null;
        $this->container['contractnumber'] = isset($data['contractnumber']) ? $data['contractnumber'] : null;
        $this->container['customername'] = isset($data['customername']) ? $data['customername'] : null;
        $this->container['customercountry'] = isset($data['customercountry']) ? $data['customercountry'] : null;
        $this->container['shiptoaddr1'] = isset($data['shiptoaddr1']) ? $data['shiptoaddr1'] : null;
        $this->container['shiptoaddr2'] = isset($data['shiptoaddr2']) ? $data['shiptoaddr2'] : null;
        $this->container['shiptoaddr3'] = isset($data['shiptoaddr3']) ? $data['shiptoaddr3'] : null;
        $this->container['shiptoaddr4'] = isset($data['shiptoaddr4']) ? $data['shiptoaddr4'] : null;
        $this->container['shiptocontact'] = isset($data['shiptocontact']) ? $data['shiptocontact'] : null;
        $this->container['shiptocity'] = isset($data['shiptocity']) ? $data['shiptocity'] : null;
        $this->container['shiptocountry'] = isset($data['shiptocountry']) ? $data['shiptocountry'] : null;
        $this->container['shiptoname'] = isset($data['shiptoname']) ? $data['shiptoname'] : null;
        $this->container['shiptonumber'] = isset($data['shiptonumber']) ? $data['shiptonumber'] : null;
        $this->container['shiptostate'] = isset($data['shiptostate']) ? $data['shiptostate'] : null;
        $this->container['shiptophone'] = isset($data['shiptophone']) ? $data['shiptophone'] : null;
        $this->container['shiptophoneext'] = isset($data['shiptophoneext']) ? $data['shiptophoneext'] : null;
        $this->container['shiptozip'] = isset($data['shiptozip']) ? $data['shiptozip'] : null;
        $this->container['ordertype'] = isset($data['ordertype']) ? $data['ordertype'] : null;
        $this->container['employeeid'] = isset($data['employeeid']) ? $data['employeeid'] : null;
        $this->container['employeename'] = isset($data['employeename']) ? $data['employeename'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['workordernum'] = isset($data['workordernum']) ? $data['workordernum'] : null;
        $this->container['machinenum'] = isset($data['machinenum']) ? $data['machinenum'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['srnotesprntfl'] = isset($data['srnotesprntfl']) ? $data['srnotesprntfl'] : null;
        $this->container['pickprtfl'] = isset($data['pickprtfl']) ? $data['pickprtfl'] : null;
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
     * Gets customerid
     *
     * @return string
     */
    public function getCustomerid()
    {
        return $this->container['customerid'];
    }

    /**
     * Sets customerid
     *
     * @param string $customerid customerid
     *
     * @return $this
     */
    public function setCustomerid($customerid)
    {
        $this->container['customerid'] = $customerid;

        return $this;
    }

    /**
     * Gets warehouseid
     *
     * @return string
     */
    public function getWarehouseid()
    {
        return $this->container['warehouseid'];
    }

    /**
     * Sets warehouseid
     *
     * @param string $warehouseid warehouseid
     *
     * @return $this
     */
    public function setWarehouseid($warehouseid)
    {
        $this->container['warehouseid'] = $warehouseid;

        return $this;
    }

    /**
     * Gets ordersource
     *
     * @return string
     */
    public function getOrdersource()
    {
        return $this->container['ordersource'];
    }

    /**
     * Sets ordersource
     *
     * @param string $ordersource ordersource
     *
     * @return $this
     */
    public function setOrdersource($ordersource)
    {
        $this->container['ordersource'] = $ordersource;

        return $this;
    }

    /**
     * Gets ponumber
     *
     * @return string
     */
    public function getPonumber()
    {
        return $this->container['ponumber'];
    }

    /**
     * Sets ponumber
     *
     * @param string $ponumber ponumber
     *
     * @return $this
     */
    public function setPonumber($ponumber)
    {
        $this->container['ponumber'] = $ponumber;

        return $this;
    }

    /**
     * Gets ordnumber
     *
     * @return string
     */
    public function getOrdnumber()
    {
        return $this->container['ordnumber'];
    }

    /**
     * Sets ordnumber
     *
     * @param string $ordnumber ordnumber
     *
     * @return $this
     */
    public function setOrdnumber($ordnumber)
    {
        $this->container['ordnumber'] = $ordnumber;

        return $this;
    }

    /**
     * Gets billtocontact
     *
     * @return string
     */
    public function getBilltocontact()
    {
        return $this->container['billtocontact'];
    }

    /**
     * Sets billtocontact
     *
     * @param string $billtocontact billtocontact
     *
     * @return $this
     */
    public function setBilltocontact($billtocontact)
    {
        $this->container['billtocontact'] = $billtocontact;

        return $this;
    }

    /**
     * Gets billtocity
     *
     * @return string
     */
    public function getBilltocity()
    {
        return $this->container['billtocity'];
    }

    /**
     * Sets billtocity
     *
     * @param string $billtocity billtocity
     *
     * @return $this
     */
    public function setBilltocity($billtocity)
    {
        $this->container['billtocity'] = $billtocity;

        return $this;
    }

    /**
     * Gets billtostate
     *
     * @return string
     */
    public function getBilltostate()
    {
        return $this->container['billtostate'];
    }

    /**
     * Sets billtostate
     *
     * @param string $billtostate billtostate
     *
     * @return $this
     */
    public function setBilltostate($billtostate)
    {
        $this->container['billtostate'] = $billtostate;

        return $this;
    }

    /**
     * Gets billtozip
     *
     * @return string
     */
    public function getBilltozip()
    {
        return $this->container['billtozip'];
    }

    /**
     * Sets billtozip
     *
     * @param string $billtozip billtozip
     *
     * @return $this
     */
    public function setBilltozip($billtozip)
    {
        $this->container['billtozip'] = $billtozip;

        return $this;
    }

    /**
     * Gets billtophone
     *
     * @return string
     */
    public function getBilltophone()
    {
        return $this->container['billtophone'];
    }

    /**
     * Sets billtophone
     *
     * @param string $billtophone billtophone
     *
     * @return $this
     */
    public function setBilltophone($billtophone)
    {
        $this->container['billtophone'] = $billtophone;

        return $this;
    }

    /**
     * Gets billtophoneext
     *
     * @return string
     */
    public function getBilltophoneext()
    {
        return $this->container['billtophoneext'];
    }

    /**
     * Sets billtophoneext
     *
     * @param string $billtophoneext billtophoneext
     *
     * @return $this
     */
    public function setBilltophoneext($billtophoneext)
    {
        $this->container['billtophoneext'] = $billtophoneext;

        return $this;
    }

    /**
     * Gets backorder
     *
     * @return string
     */
    public function getBackorder()
    {
        return $this->container['backorder'];
    }

    /**
     * Sets backorder
     *
     * @param string $backorder backorder
     *
     * @return $this
     */
    public function setBackorder($backorder)
    {
        $this->container['backorder'] = $backorder;

        return $this;
    }

    /**
     * Gets carriercode
     *
     * @return string
     */
    public function getCarriercode()
    {
        return $this->container['carriercode'];
    }

    /**
     * Sets carriercode
     *
     * @param string $carriercode carriercode
     *
     * @return $this
     */
    public function setCarriercode($carriercode)
    {
        $this->container['carriercode'] = $carriercode;

        return $this;
    }

    /**
     * Gets customeraddr1
     *
     * @return string
     */
    public function getCustomeraddr1()
    {
        return $this->container['customeraddr1'];
    }

    /**
     * Sets customeraddr1
     *
     * @param string $customeraddr1 customeraddr1
     *
     * @return $this
     */
    public function setCustomeraddr1($customeraddr1)
    {
        $this->container['customeraddr1'] = $customeraddr1;

        return $this;
    }

    /**
     * Gets customeraddr2
     *
     * @return string
     */
    public function getCustomeraddr2()
    {
        return $this->container['customeraddr2'];
    }

    /**
     * Sets customeraddr2
     *
     * @param string $customeraddr2 customeraddr2
     *
     * @return $this
     */
    public function setCustomeraddr2($customeraddr2)
    {
        $this->container['customeraddr2'] = $customeraddr2;

        return $this;
    }

    /**
     * Gets customeraddr3
     *
     * @return string
     */
    public function getCustomeraddr3()
    {
        return $this->container['customeraddr3'];
    }

    /**
     * Sets customeraddr3
     *
     * @param string $customeraddr3 customeraddr3
     *
     * @return $this
     */
    public function setCustomeraddr3($customeraddr3)
    {
        $this->container['customeraddr3'] = $customeraddr3;

        return $this;
    }

    /**
     * Gets customeraddr4
     *
     * @return string
     */
    public function getCustomeraddr4()
    {
        return $this->container['customeraddr4'];
    }

    /**
     * Sets customeraddr4
     *
     * @param string $customeraddr4 customeraddr4
     *
     * @return $this
     */
    public function setCustomeraddr4($customeraddr4)
    {
        $this->container['customeraddr4'] = $customeraddr4;

        return $this;
    }

    /**
     * Gets contractnumber
     *
     * @return string
     */
    public function getContractnumber()
    {
        return $this->container['contractnumber'];
    }

    /**
     * Sets contractnumber
     *
     * @param string $contractnumber contractnumber
     *
     * @return $this
     */
    public function setContractnumber($contractnumber)
    {
        $this->container['contractnumber'] = $contractnumber;

        return $this;
    }

    /**
     * Gets customername
     *
     * @return string
     */
    public function getCustomername()
    {
        return $this->container['customername'];
    }

    /**
     * Sets customername
     *
     * @param string $customername customername
     *
     * @return $this
     */
    public function setCustomername($customername)
    {
        $this->container['customername'] = $customername;

        return $this;
    }

    /**
     * Gets customercountry
     *
     * @return string
     */
    public function getCustomercountry()
    {
        return $this->container['customercountry'];
    }

    /**
     * Sets customercountry
     *
     * @param string $customercountry customercountry
     *
     * @return $this
     */
    public function setCustomercountry($customercountry)
    {
        $this->container['customercountry'] = $customercountry;

        return $this;
    }

    /**
     * Gets shiptoaddr1
     *
     * @return string
     */
    public function getShiptoaddr1()
    {
        return $this->container['shiptoaddr1'];
    }

    /**
     * Sets shiptoaddr1
     *
     * @param string $shiptoaddr1 shiptoaddr1
     *
     * @return $this
     */
    public function setShiptoaddr1($shiptoaddr1)
    {
        $this->container['shiptoaddr1'] = $shiptoaddr1;

        return $this;
    }

    /**
     * Gets shiptoaddr2
     *
     * @return string
     */
    public function getShiptoaddr2()
    {
        return $this->container['shiptoaddr2'];
    }

    /**
     * Sets shiptoaddr2
     *
     * @param string $shiptoaddr2 shiptoaddr2
     *
     * @return $this
     */
    public function setShiptoaddr2($shiptoaddr2)
    {
        $this->container['shiptoaddr2'] = $shiptoaddr2;

        return $this;
    }

    /**
     * Gets shiptoaddr3
     *
     * @return string
     */
    public function getShiptoaddr3()
    {
        return $this->container['shiptoaddr3'];
    }

    /**
     * Sets shiptoaddr3
     *
     * @param string $shiptoaddr3 shiptoaddr3
     *
     * @return $this
     */
    public function setShiptoaddr3($shiptoaddr3)
    {
        $this->container['shiptoaddr3'] = $shiptoaddr3;

        return $this;
    }

    /**
     * Gets shiptoaddr4
     *
     * @return string
     */
    public function getShiptoaddr4()
    {
        return $this->container['shiptoaddr4'];
    }

    /**
     * Sets shiptoaddr4
     *
     * @param string $shiptoaddr4 shiptoaddr4
     *
     * @return $this
     */
    public function setShiptoaddr4($shiptoaddr4)
    {
        $this->container['shiptoaddr4'] = $shiptoaddr4;

        return $this;
    }

    /**
     * Gets shiptocontact
     *
     * @return string
     */
    public function getShiptocontact()
    {
        return $this->container['shiptocontact'];
    }

    /**
     * Sets shiptocontact
     *
     * @param string $shiptocontact shiptocontact
     *
     * @return $this
     */
    public function setShiptocontact($shiptocontact)
    {
        $this->container['shiptocontact'] = $shiptocontact;

        return $this;
    }

    /**
     * Gets shiptocity
     *
     * @return string
     */
    public function getShiptocity()
    {
        return $this->container['shiptocity'];
    }

    /**
     * Sets shiptocity
     *
     * @param string $shiptocity shiptocity
     *
     * @return $this
     */
    public function setShiptocity($shiptocity)
    {
        $this->container['shiptocity'] = $shiptocity;

        return $this;
    }

    /**
     * Gets shiptocountry
     *
     * @return string
     */
    public function getShiptocountry()
    {
        return $this->container['shiptocountry'];
    }

    /**
     * Sets shiptocountry
     *
     * @param string $shiptocountry shiptocountry
     *
     * @return $this
     */
    public function setShiptocountry($shiptocountry)
    {
        $this->container['shiptocountry'] = $shiptocountry;

        return $this;
    }

    /**
     * Gets shiptoname
     *
     * @return string
     */
    public function getShiptoname()
    {
        return $this->container['shiptoname'];
    }

    /**
     * Sets shiptoname
     *
     * @param string $shiptoname shiptoname
     *
     * @return $this
     */
    public function setShiptoname($shiptoname)
    {
        $this->container['shiptoname'] = $shiptoname;

        return $this;
    }

    /**
     * Gets shiptonumber
     *
     * @return string
     */
    public function getShiptonumber()
    {
        return $this->container['shiptonumber'];
    }

    /**
     * Sets shiptonumber
     *
     * @param string $shiptonumber shiptonumber
     *
     * @return $this
     */
    public function setShiptonumber($shiptonumber)
    {
        $this->container['shiptonumber'] = $shiptonumber;

        return $this;
    }

    /**
     * Gets shiptostate
     *
     * @return string
     */
    public function getShiptostate()
    {
        return $this->container['shiptostate'];
    }

    /**
     * Sets shiptostate
     *
     * @param string $shiptostate shiptostate
     *
     * @return $this
     */
    public function setShiptostate($shiptostate)
    {
        $this->container['shiptostate'] = $shiptostate;

        return $this;
    }

    /**
     * Gets shiptophone
     *
     * @return string
     */
    public function getShiptophone()
    {
        return $this->container['shiptophone'];
    }

    /**
     * Sets shiptophone
     *
     * @param string $shiptophone shiptophone
     *
     * @return $this
     */
    public function setShiptophone($shiptophone)
    {
        $this->container['shiptophone'] = $shiptophone;

        return $this;
    }

    /**
     * Gets shiptophoneext
     *
     * @return string
     */
    public function getShiptophoneext()
    {
        return $this->container['shiptophoneext'];
    }

    /**
     * Sets shiptophoneext
     *
     * @param string $shiptophoneext shiptophoneext
     *
     * @return $this
     */
    public function setShiptophoneext($shiptophoneext)
    {
        $this->container['shiptophoneext'] = $shiptophoneext;

        return $this;
    }

    /**
     * Gets shiptozip
     *
     * @return string
     */
    public function getShiptozip()
    {
        return $this->container['shiptozip'];
    }

    /**
     * Sets shiptozip
     *
     * @param string $shiptozip shiptozip
     *
     * @return $this
     */
    public function setShiptozip($shiptozip)
    {
        $this->container['shiptozip'] = $shiptozip;

        return $this;
    }

    /**
     * Gets ordertype
     *
     * @return string
     */
    public function getOrdertype()
    {
        return $this->container['ordertype'];
    }

    /**
     * Sets ordertype
     *
     * @param string $ordertype ordertype
     *
     * @return $this
     */
    public function setOrdertype($ordertype)
    {
        $this->container['ordertype'] = $ordertype;

        return $this;
    }

    /**
     * Gets employeeid
     *
     * @return string
     */
    public function getEmployeeid()
    {
        return $this->container['employeeid'];
    }

    /**
     * Sets employeeid
     *
     * @param string $employeeid employeeid
     *
     * @return $this
     */
    public function setEmployeeid($employeeid)
    {
        $this->container['employeeid'] = $employeeid;

        return $this;
    }

    /**
     * Gets employeename
     *
     * @return string
     */
    public function getEmployeename()
    {
        return $this->container['employeename'];
    }

    /**
     * Sets employeename
     *
     * @param string $employeename employeename
     *
     * @return $this
     */
    public function setEmployeename($employeename)
    {
        $this->container['employeename'] = $employeename;

        return $this;
    }

    /**
     * Gets department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
     * Sets department
     *
     * @param string $department department
     *
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;

        return $this;
    }

    /**
     * Gets project
     *
     * @return string
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param string $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets workordernum
     *
     * @return string
     */
    public function getWorkordernum()
    {
        return $this->container['workordernum'];
    }

    /**
     * Sets workordernum
     *
     * @param string $workordernum workordernum
     *
     * @return $this
     */
    public function setWorkordernum($workordernum)
    {
        $this->container['workordernum'] = $workordernum;

        return $this;
    }

    /**
     * Gets machinenum
     *
     * @return string
     */
    public function getMachinenum()
    {
        return $this->container['machinenum'];
    }

    /**
     * Sets machinenum
     *
     * @param string $machinenum machinenum
     *
     * @return $this
     */
    public function setMachinenum($machinenum)
    {
        $this->container['machinenum'] = $machinenum;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param string $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets srnotesprntfl
     *
     * @return string
     */
    public function getSrnotesprntfl()
    {
        return $this->container['srnotesprntfl'];
    }

    /**
     * Sets srnotesprntfl
     *
     * @param string $srnotesprntfl srnotesprntfl
     *
     * @return $this
     */
    public function setSrnotesprntfl($srnotesprntfl)
    {
        $this->container['srnotesprntfl'] = $srnotesprntfl;

        return $this;
    }

    /**
     * Gets pickprtfl
     *
     * @return string
     */
    public function getPickprtfl()
    {
        return $this->container['pickprtfl'];
    }

    /**
     * Sets pickprtfl
     *
     * @param string $pickprtfl pickprtfl
     *
     * @return $this
     */
    public function setPickprtfl($pickprtfl)
    {
        $this->container['pickprtfl'] = $pickprtfl;

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


