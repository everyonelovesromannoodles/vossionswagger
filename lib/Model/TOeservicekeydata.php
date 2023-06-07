<?php
/**
 * TOeservicekeydata
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
 * TOeservicekeydata Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TOeservicekeydata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-oeservicekeydata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'orderno' => 'int',
        'ordersuf' => 'int',
        'custno' => 'double',
        'custname' => 'string',
        'shipto' => 'string',
        'whse' => 'string',
        'transtype' => 'string',
        'stagecd' => 'int',
        'stagecddesc' => 'string',
        'approvty' => 'string',
        'ordersource' => 'string',
        'servicekey' => 'string',
        'sroassemblyfl' => 'bool',
        'relateddocument' => 'string',
        'enterdt' => '\DateTime',
        'shipdt' => '\DateTime',
        'invoicedt' => '\DateTime',
        'totordamt' => 'double',
        'totlineamt' => 'double',
        'totinvamt' => 'double',
        'taxamt1' => 'double',
        'taxamt2' => 'double',
        'taxamt3' => 'double',
        'taxamt4' => 'double',
        'warrantyinvamt' => 'double',
        'warrantyvendno' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'orderno' => 'int64',
        'ordersuf' => 'int64',
        'custno' => 'double',
        'custname' => null,
        'shipto' => null,
        'whse' => null,
        'transtype' => null,
        'stagecd' => 'int64',
        'stagecddesc' => null,
        'approvty' => null,
        'ordersource' => null,
        'servicekey' => null,
        'sroassemblyfl' => null,
        'relateddocument' => null,
        'enterdt' => 'date',
        'shipdt' => 'date',
        'invoicedt' => 'date',
        'totordamt' => 'double',
        'totlineamt' => 'double',
        'totinvamt' => 'double',
        'taxamt1' => 'double',
        'taxamt2' => 'double',
        'taxamt3' => 'double',
        'taxamt4' => 'double',
        'warrantyinvamt' => 'double',
        'warrantyvendno' => 'double'
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
        'orderno' => 'orderno',
        'ordersuf' => 'ordersuf',
        'custno' => 'custno',
        'custname' => 'custname',
        'shipto' => 'shipto',
        'whse' => 'whse',
        'transtype' => 'transtype',
        'stagecd' => 'stagecd',
        'stagecddesc' => 'stagecddesc',
        'approvty' => 'approvty',
        'ordersource' => 'ordersource',
        'servicekey' => 'servicekey',
        'sroassemblyfl' => 'sroassemblyfl',
        'relateddocument' => 'relateddocument',
        'enterdt' => 'enterdt',
        'shipdt' => 'shipdt',
        'invoicedt' => 'invoicedt',
        'totordamt' => 'totordamt',
        'totlineamt' => 'totlineamt',
        'totinvamt' => 'totinvamt',
        'taxamt1' => 'taxamt1',
        'taxamt2' => 'taxamt2',
        'taxamt3' => 'taxamt3',
        'taxamt4' => 'taxamt4',
        'warrantyinvamt' => 'warrantyinvamt',
        'warrantyvendno' => 'warrantyvendno'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'orderno' => 'setOrderno',
        'ordersuf' => 'setOrdersuf',
        'custno' => 'setCustno',
        'custname' => 'setCustname',
        'shipto' => 'setShipto',
        'whse' => 'setWhse',
        'transtype' => 'setTranstype',
        'stagecd' => 'setStagecd',
        'stagecddesc' => 'setStagecddesc',
        'approvty' => 'setApprovty',
        'ordersource' => 'setOrdersource',
        'servicekey' => 'setServicekey',
        'sroassemblyfl' => 'setSroassemblyfl',
        'relateddocument' => 'setRelateddocument',
        'enterdt' => 'setEnterdt',
        'shipdt' => 'setShipdt',
        'invoicedt' => 'setInvoicedt',
        'totordamt' => 'setTotordamt',
        'totlineamt' => 'setTotlineamt',
        'totinvamt' => 'setTotinvamt',
        'taxamt1' => 'setTaxamt1',
        'taxamt2' => 'setTaxamt2',
        'taxamt3' => 'setTaxamt3',
        'taxamt4' => 'setTaxamt4',
        'warrantyinvamt' => 'setWarrantyinvamt',
        'warrantyvendno' => 'setWarrantyvendno'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'orderno' => 'getOrderno',
        'ordersuf' => 'getOrdersuf',
        'custno' => 'getCustno',
        'custname' => 'getCustname',
        'shipto' => 'getShipto',
        'whse' => 'getWhse',
        'transtype' => 'getTranstype',
        'stagecd' => 'getStagecd',
        'stagecddesc' => 'getStagecddesc',
        'approvty' => 'getApprovty',
        'ordersource' => 'getOrdersource',
        'servicekey' => 'getServicekey',
        'sroassemblyfl' => 'getSroassemblyfl',
        'relateddocument' => 'getRelateddocument',
        'enterdt' => 'getEnterdt',
        'shipdt' => 'getShipdt',
        'invoicedt' => 'getInvoicedt',
        'totordamt' => 'getTotordamt',
        'totlineamt' => 'getTotlineamt',
        'totinvamt' => 'getTotinvamt',
        'taxamt1' => 'getTaxamt1',
        'taxamt2' => 'getTaxamt2',
        'taxamt3' => 'getTaxamt3',
        'taxamt4' => 'getTaxamt4',
        'warrantyinvamt' => 'getWarrantyinvamt',
        'warrantyvendno' => 'getWarrantyvendno'
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
        $this->container['orderno'] = isset($data['orderno']) ? $data['orderno'] : null;
        $this->container['ordersuf'] = isset($data['ordersuf']) ? $data['ordersuf'] : null;
        $this->container['custno'] = isset($data['custno']) ? $data['custno'] : null;
        $this->container['custname'] = isset($data['custname']) ? $data['custname'] : null;
        $this->container['shipto'] = isset($data['shipto']) ? $data['shipto'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['transtype'] = isset($data['transtype']) ? $data['transtype'] : null;
        $this->container['stagecd'] = isset($data['stagecd']) ? $data['stagecd'] : null;
        $this->container['stagecddesc'] = isset($data['stagecddesc']) ? $data['stagecddesc'] : null;
        $this->container['approvty'] = isset($data['approvty']) ? $data['approvty'] : null;
        $this->container['ordersource'] = isset($data['ordersource']) ? $data['ordersource'] : null;
        $this->container['servicekey'] = isset($data['servicekey']) ? $data['servicekey'] : null;
        $this->container['sroassemblyfl'] = isset($data['sroassemblyfl']) ? $data['sroassemblyfl'] : null;
        $this->container['relateddocument'] = isset($data['relateddocument']) ? $data['relateddocument'] : null;
        $this->container['enterdt'] = isset($data['enterdt']) ? $data['enterdt'] : null;
        $this->container['shipdt'] = isset($data['shipdt']) ? $data['shipdt'] : null;
        $this->container['invoicedt'] = isset($data['invoicedt']) ? $data['invoicedt'] : null;
        $this->container['totordamt'] = isset($data['totordamt']) ? $data['totordamt'] : null;
        $this->container['totlineamt'] = isset($data['totlineamt']) ? $data['totlineamt'] : null;
        $this->container['totinvamt'] = isset($data['totinvamt']) ? $data['totinvamt'] : null;
        $this->container['taxamt1'] = isset($data['taxamt1']) ? $data['taxamt1'] : null;
        $this->container['taxamt2'] = isset($data['taxamt2']) ? $data['taxamt2'] : null;
        $this->container['taxamt3'] = isset($data['taxamt3']) ? $data['taxamt3'] : null;
        $this->container['taxamt4'] = isset($data['taxamt4']) ? $data['taxamt4'] : null;
        $this->container['warrantyinvamt'] = isset($data['warrantyinvamt']) ? $data['warrantyinvamt'] : null;
        $this->container['warrantyvendno'] = isset($data['warrantyvendno']) ? $data['warrantyvendno'] : null;
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
     * Gets orderno
     *
     * @return int
     */
    public function getOrderno()
    {
        return $this->container['orderno'];
    }

    /**
     * Sets orderno
     *
     * @param int $orderno orderno
     *
     * @return $this
     */
    public function setOrderno($orderno)
    {
        $this->container['orderno'] = $orderno;

        return $this;
    }

    /**
     * Gets ordersuf
     *
     * @return int
     */
    public function getOrdersuf()
    {
        return $this->container['ordersuf'];
    }

    /**
     * Sets ordersuf
     *
     * @param int $ordersuf ordersuf
     *
     * @return $this
     */
    public function setOrdersuf($ordersuf)
    {
        $this->container['ordersuf'] = $ordersuf;

        return $this;
    }

    /**
     * Gets custno
     *
     * @return double
     */
    public function getCustno()
    {
        return $this->container['custno'];
    }

    /**
     * Sets custno
     *
     * @param double $custno custno
     *
     * @return $this
     */
    public function setCustno($custno)
    {
        $this->container['custno'] = $custno;

        return $this;
    }

    /**
     * Gets custname
     *
     * @return string
     */
    public function getCustname()
    {
        return $this->container['custname'];
    }

    /**
     * Sets custname
     *
     * @param string $custname custname
     *
     * @return $this
     */
    public function setCustname($custname)
    {
        $this->container['custname'] = $custname;

        return $this;
    }

    /**
     * Gets shipto
     *
     * @return string
     */
    public function getShipto()
    {
        return $this->container['shipto'];
    }

    /**
     * Sets shipto
     *
     * @param string $shipto shipto
     *
     * @return $this
     */
    public function setShipto($shipto)
    {
        $this->container['shipto'] = $shipto;

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
     * Gets transtype
     *
     * @return string
     */
    public function getTranstype()
    {
        return $this->container['transtype'];
    }

    /**
     * Sets transtype
     *
     * @param string $transtype transtype
     *
     * @return $this
     */
    public function setTranstype($transtype)
    {
        $this->container['transtype'] = $transtype;

        return $this;
    }

    /**
     * Gets stagecd
     *
     * @return int
     */
    public function getStagecd()
    {
        return $this->container['stagecd'];
    }

    /**
     * Sets stagecd
     *
     * @param int $stagecd stagecd
     *
     * @return $this
     */
    public function setStagecd($stagecd)
    {
        $this->container['stagecd'] = $stagecd;

        return $this;
    }

    /**
     * Gets stagecddesc
     *
     * @return string
     */
    public function getStagecddesc()
    {
        return $this->container['stagecddesc'];
    }

    /**
     * Sets stagecddesc
     *
     * @param string $stagecddesc stagecddesc
     *
     * @return $this
     */
    public function setStagecddesc($stagecddesc)
    {
        $this->container['stagecddesc'] = $stagecddesc;

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
     * Gets servicekey
     *
     * @return string
     */
    public function getServicekey()
    {
        return $this->container['servicekey'];
    }

    /**
     * Sets servicekey
     *
     * @param string $servicekey servicekey
     *
     * @return $this
     */
    public function setServicekey($servicekey)
    {
        $this->container['servicekey'] = $servicekey;

        return $this;
    }

    /**
     * Gets sroassemblyfl
     *
     * @return bool
     */
    public function getSroassemblyfl()
    {
        return $this->container['sroassemblyfl'];
    }

    /**
     * Sets sroassemblyfl
     *
     * @param bool $sroassemblyfl sroassemblyfl
     *
     * @return $this
     */
    public function setSroassemblyfl($sroassemblyfl)
    {
        $this->container['sroassemblyfl'] = $sroassemblyfl;

        return $this;
    }

    /**
     * Gets relateddocument
     *
     * @return string
     */
    public function getRelateddocument()
    {
        return $this->container['relateddocument'];
    }

    /**
     * Sets relateddocument
     *
     * @param string $relateddocument relateddocument
     *
     * @return $this
     */
    public function setRelateddocument($relateddocument)
    {
        $this->container['relateddocument'] = $relateddocument;

        return $this;
    }

    /**
     * Gets enterdt
     *
     * @return \DateTime
     */
    public function getEnterdt()
    {
        return $this->container['enterdt'];
    }

    /**
     * Sets enterdt
     *
     * @param \DateTime $enterdt enterdt
     *
     * @return $this
     */
    public function setEnterdt($enterdt)
    {
        $this->container['enterdt'] = $enterdt;

        return $this;
    }

    /**
     * Gets shipdt
     *
     * @return \DateTime
     */
    public function getShipdt()
    {
        return $this->container['shipdt'];
    }

    /**
     * Sets shipdt
     *
     * @param \DateTime $shipdt shipdt
     *
     * @return $this
     */
    public function setShipdt($shipdt)
    {
        $this->container['shipdt'] = $shipdt;

        return $this;
    }

    /**
     * Gets invoicedt
     *
     * @return \DateTime
     */
    public function getInvoicedt()
    {
        return $this->container['invoicedt'];
    }

    /**
     * Sets invoicedt
     *
     * @param \DateTime $invoicedt invoicedt
     *
     * @return $this
     */
    public function setInvoicedt($invoicedt)
    {
        $this->container['invoicedt'] = $invoicedt;

        return $this;
    }

    /**
     * Gets totordamt
     *
     * @return double
     */
    public function getTotordamt()
    {
        return $this->container['totordamt'];
    }

    /**
     * Sets totordamt
     *
     * @param double $totordamt totordamt
     *
     * @return $this
     */
    public function setTotordamt($totordamt)
    {
        $this->container['totordamt'] = $totordamt;

        return $this;
    }

    /**
     * Gets totlineamt
     *
     * @return double
     */
    public function getTotlineamt()
    {
        return $this->container['totlineamt'];
    }

    /**
     * Sets totlineamt
     *
     * @param double $totlineamt totlineamt
     *
     * @return $this
     */
    public function setTotlineamt($totlineamt)
    {
        $this->container['totlineamt'] = $totlineamt;

        return $this;
    }

    /**
     * Gets totinvamt
     *
     * @return double
     */
    public function getTotinvamt()
    {
        return $this->container['totinvamt'];
    }

    /**
     * Sets totinvamt
     *
     * @param double $totinvamt totinvamt
     *
     * @return $this
     */
    public function setTotinvamt($totinvamt)
    {
        $this->container['totinvamt'] = $totinvamt;

        return $this;
    }

    /**
     * Gets taxamt1
     *
     * @return double
     */
    public function getTaxamt1()
    {
        return $this->container['taxamt1'];
    }

    /**
     * Sets taxamt1
     *
     * @param double $taxamt1 taxamt1
     *
     * @return $this
     */
    public function setTaxamt1($taxamt1)
    {
        $this->container['taxamt1'] = $taxamt1;

        return $this;
    }

    /**
     * Gets taxamt2
     *
     * @return double
     */
    public function getTaxamt2()
    {
        return $this->container['taxamt2'];
    }

    /**
     * Sets taxamt2
     *
     * @param double $taxamt2 taxamt2
     *
     * @return $this
     */
    public function setTaxamt2($taxamt2)
    {
        $this->container['taxamt2'] = $taxamt2;

        return $this;
    }

    /**
     * Gets taxamt3
     *
     * @return double
     */
    public function getTaxamt3()
    {
        return $this->container['taxamt3'];
    }

    /**
     * Sets taxamt3
     *
     * @param double $taxamt3 taxamt3
     *
     * @return $this
     */
    public function setTaxamt3($taxamt3)
    {
        $this->container['taxamt3'] = $taxamt3;

        return $this;
    }

    /**
     * Gets taxamt4
     *
     * @return double
     */
    public function getTaxamt4()
    {
        return $this->container['taxamt4'];
    }

    /**
     * Sets taxamt4
     *
     * @param double $taxamt4 taxamt4
     *
     * @return $this
     */
    public function setTaxamt4($taxamt4)
    {
        $this->container['taxamt4'] = $taxamt4;

        return $this;
    }

    /**
     * Gets warrantyinvamt
     *
     * @return double
     */
    public function getWarrantyinvamt()
    {
        return $this->container['warrantyinvamt'];
    }

    /**
     * Sets warrantyinvamt
     *
     * @param double $warrantyinvamt warrantyinvamt
     *
     * @return $this
     */
    public function setWarrantyinvamt($warrantyinvamt)
    {
        $this->container['warrantyinvamt'] = $warrantyinvamt;

        return $this;
    }

    /**
     * Gets warrantyvendno
     *
     * @return double
     */
    public function getWarrantyvendno()
    {
        return $this->container['warrantyvendno'];
    }

    /**
     * Sets warrantyvendno
     *
     * @param double $warrantyvendno warrantyvendno
     *
     * @return $this
     */
    public function setWarrantyvendno($warrantyvendno)
    {
        $this->container['warrantyvendno'] = $warrantyvendno;

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


