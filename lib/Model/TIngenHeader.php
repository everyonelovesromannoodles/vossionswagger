<?php
/**
 * TIngenHeader
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
 * TIngenHeader Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TIngenHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-ingen-header';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'key1' => 'string',
        'key2' => 'string',
        'key3' => 'string',
        'custno' => 'double',
        'enterdt' => '\DateTime',
        'orderno' => 'int',
        'ordersuf' => 'int',
        'prod' => 'string',
        'shipfm' => 'int',
        'shipto' => 'string',
        'stagecd' => 'int',
        'totcost' => 'double',
        'totcostord' => 'double',
        'totinvamt' => 'double',
        'totinvord' => 'double',
        'totqtyord' => 'double',
        'totqtyshp' => 'double',
        'transtype' => 'string',
        'vendno' => 'double',
        'whse' => 'string',
        'char1' => 'string',
        'char2' => 'string',
        'char3' => 'string',
        'char4' => 'string',
        'char5' => 'string',
        'char6' => 'string',
        'char7' => 'string',
        'char8' => 'string',
        'char9' => 'string',
        'char10' => 'string',
        'dec1' => 'double',
        'dec2' => 'double',
        'dec3' => 'double',
        'dec4' => 'double',
        'dec5' => 'double',
        'date1' => '\DateTime',
        'date2' => '\DateTime',
        'date3' => '\DateTime',
        'date4' => '\DateTime',
        'date5' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'key1' => null,
        'key2' => null,
        'key3' => null,
        'custno' => 'double',
        'enterdt' => 'date',
        'orderno' => 'int64',
        'ordersuf' => 'int64',
        'prod' => null,
        'shipfm' => 'int64',
        'shipto' => null,
        'stagecd' => 'int64',
        'totcost' => 'double',
        'totcostord' => 'double',
        'totinvamt' => 'double',
        'totinvord' => 'double',
        'totqtyord' => 'double',
        'totqtyshp' => 'double',
        'transtype' => null,
        'vendno' => 'double',
        'whse' => null,
        'char1' => null,
        'char2' => null,
        'char3' => null,
        'char4' => null,
        'char5' => null,
        'char6' => null,
        'char7' => null,
        'char8' => null,
        'char9' => null,
        'char10' => null,
        'dec1' => 'double',
        'dec2' => 'double',
        'dec3' => 'double',
        'dec4' => 'double',
        'dec5' => 'double',
        'date1' => 'date',
        'date2' => 'date',
        'date3' => 'date',
        'date4' => 'date',
        'date5' => 'date'
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
        'key1' => 'key1',
        'key2' => 'key2',
        'key3' => 'key3',
        'custno' => 'custno',
        'enterdt' => 'enterdt',
        'orderno' => 'orderno',
        'ordersuf' => 'ordersuf',
        'prod' => 'prod',
        'shipfm' => 'shipfm',
        'shipto' => 'shipto',
        'stagecd' => 'stagecd',
        'totcost' => 'totcost',
        'totcostord' => 'totcostord',
        'totinvamt' => 'totinvamt',
        'totinvord' => 'totinvord',
        'totqtyord' => 'totqtyord',
        'totqtyshp' => 'totqtyshp',
        'transtype' => 'transtype',
        'vendno' => 'vendno',
        'whse' => 'whse',
        'char1' => 'char1',
        'char2' => 'char2',
        'char3' => 'char3',
        'char4' => 'char4',
        'char5' => 'char5',
        'char6' => 'char6',
        'char7' => 'char7',
        'char8' => 'char8',
        'char9' => 'char9',
        'char10' => 'char10',
        'dec1' => 'dec1',
        'dec2' => 'dec2',
        'dec3' => 'dec3',
        'dec4' => 'dec4',
        'dec5' => 'dec5',
        'date1' => 'date1',
        'date2' => 'date2',
        'date3' => 'date3',
        'date4' => 'date4',
        'date5' => 'date5'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'key1' => 'setKey1',
        'key2' => 'setKey2',
        'key3' => 'setKey3',
        'custno' => 'setCustno',
        'enterdt' => 'setEnterdt',
        'orderno' => 'setOrderno',
        'ordersuf' => 'setOrdersuf',
        'prod' => 'setProd',
        'shipfm' => 'setShipfm',
        'shipto' => 'setShipto',
        'stagecd' => 'setStagecd',
        'totcost' => 'setTotcost',
        'totcostord' => 'setTotcostord',
        'totinvamt' => 'setTotinvamt',
        'totinvord' => 'setTotinvord',
        'totqtyord' => 'setTotqtyord',
        'totqtyshp' => 'setTotqtyshp',
        'transtype' => 'setTranstype',
        'vendno' => 'setVendno',
        'whse' => 'setWhse',
        'char1' => 'setChar1',
        'char2' => 'setChar2',
        'char3' => 'setChar3',
        'char4' => 'setChar4',
        'char5' => 'setChar5',
        'char6' => 'setChar6',
        'char7' => 'setChar7',
        'char8' => 'setChar8',
        'char9' => 'setChar9',
        'char10' => 'setChar10',
        'dec1' => 'setDec1',
        'dec2' => 'setDec2',
        'dec3' => 'setDec3',
        'dec4' => 'setDec4',
        'dec5' => 'setDec5',
        'date1' => 'setDate1',
        'date2' => 'setDate2',
        'date3' => 'setDate3',
        'date4' => 'setDate4',
        'date5' => 'setDate5'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'key1' => 'getKey1',
        'key2' => 'getKey2',
        'key3' => 'getKey3',
        'custno' => 'getCustno',
        'enterdt' => 'getEnterdt',
        'orderno' => 'getOrderno',
        'ordersuf' => 'getOrdersuf',
        'prod' => 'getProd',
        'shipfm' => 'getShipfm',
        'shipto' => 'getShipto',
        'stagecd' => 'getStagecd',
        'totcost' => 'getTotcost',
        'totcostord' => 'getTotcostord',
        'totinvamt' => 'getTotinvamt',
        'totinvord' => 'getTotinvord',
        'totqtyord' => 'getTotqtyord',
        'totqtyshp' => 'getTotqtyshp',
        'transtype' => 'getTranstype',
        'vendno' => 'getVendno',
        'whse' => 'getWhse',
        'char1' => 'getChar1',
        'char2' => 'getChar2',
        'char3' => 'getChar3',
        'char4' => 'getChar4',
        'char5' => 'getChar5',
        'char6' => 'getChar6',
        'char7' => 'getChar7',
        'char8' => 'getChar8',
        'char9' => 'getChar9',
        'char10' => 'getChar10',
        'dec1' => 'getDec1',
        'dec2' => 'getDec2',
        'dec3' => 'getDec3',
        'dec4' => 'getDec4',
        'dec5' => 'getDec5',
        'date1' => 'getDate1',
        'date2' => 'getDate2',
        'date3' => 'getDate3',
        'date4' => 'getDate4',
        'date5' => 'getDate5'
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
        $this->container['key1'] = isset($data['key1']) ? $data['key1'] : null;
        $this->container['key2'] = isset($data['key2']) ? $data['key2'] : null;
        $this->container['key3'] = isset($data['key3']) ? $data['key3'] : null;
        $this->container['custno'] = isset($data['custno']) ? $data['custno'] : null;
        $this->container['enterdt'] = isset($data['enterdt']) ? $data['enterdt'] : null;
        $this->container['orderno'] = isset($data['orderno']) ? $data['orderno'] : null;
        $this->container['ordersuf'] = isset($data['ordersuf']) ? $data['ordersuf'] : null;
        $this->container['prod'] = isset($data['prod']) ? $data['prod'] : null;
        $this->container['shipfm'] = isset($data['shipfm']) ? $data['shipfm'] : null;
        $this->container['shipto'] = isset($data['shipto']) ? $data['shipto'] : null;
        $this->container['stagecd'] = isset($data['stagecd']) ? $data['stagecd'] : null;
        $this->container['totcost'] = isset($data['totcost']) ? $data['totcost'] : null;
        $this->container['totcostord'] = isset($data['totcostord']) ? $data['totcostord'] : null;
        $this->container['totinvamt'] = isset($data['totinvamt']) ? $data['totinvamt'] : null;
        $this->container['totinvord'] = isset($data['totinvord']) ? $data['totinvord'] : null;
        $this->container['totqtyord'] = isset($data['totqtyord']) ? $data['totqtyord'] : null;
        $this->container['totqtyshp'] = isset($data['totqtyshp']) ? $data['totqtyshp'] : null;
        $this->container['transtype'] = isset($data['transtype']) ? $data['transtype'] : null;
        $this->container['vendno'] = isset($data['vendno']) ? $data['vendno'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['char1'] = isset($data['char1']) ? $data['char1'] : null;
        $this->container['char2'] = isset($data['char2']) ? $data['char2'] : null;
        $this->container['char3'] = isset($data['char3']) ? $data['char3'] : null;
        $this->container['char4'] = isset($data['char4']) ? $data['char4'] : null;
        $this->container['char5'] = isset($data['char5']) ? $data['char5'] : null;
        $this->container['char6'] = isset($data['char6']) ? $data['char6'] : null;
        $this->container['char7'] = isset($data['char7']) ? $data['char7'] : null;
        $this->container['char8'] = isset($data['char8']) ? $data['char8'] : null;
        $this->container['char9'] = isset($data['char9']) ? $data['char9'] : null;
        $this->container['char10'] = isset($data['char10']) ? $data['char10'] : null;
        $this->container['dec1'] = isset($data['dec1']) ? $data['dec1'] : null;
        $this->container['dec2'] = isset($data['dec2']) ? $data['dec2'] : null;
        $this->container['dec3'] = isset($data['dec3']) ? $data['dec3'] : null;
        $this->container['dec4'] = isset($data['dec4']) ? $data['dec4'] : null;
        $this->container['dec5'] = isset($data['dec5']) ? $data['dec5'] : null;
        $this->container['date1'] = isset($data['date1']) ? $data['date1'] : null;
        $this->container['date2'] = isset($data['date2']) ? $data['date2'] : null;
        $this->container['date3'] = isset($data['date3']) ? $data['date3'] : null;
        $this->container['date4'] = isset($data['date4']) ? $data['date4'] : null;
        $this->container['date5'] = isset($data['date5']) ? $data['date5'] : null;
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
     * Gets key1
     *
     * @return string
     */
    public function getKey1()
    {
        return $this->container['key1'];
    }

    /**
     * Sets key1
     *
     * @param string $key1 key1
     *
     * @return $this
     */
    public function setKey1($key1)
    {
        $this->container['key1'] = $key1;

        return $this;
    }

    /**
     * Gets key2
     *
     * @return string
     */
    public function getKey2()
    {
        return $this->container['key2'];
    }

    /**
     * Sets key2
     *
     * @param string $key2 key2
     *
     * @return $this
     */
    public function setKey2($key2)
    {
        $this->container['key2'] = $key2;

        return $this;
    }

    /**
     * Gets key3
     *
     * @return string
     */
    public function getKey3()
    {
        return $this->container['key3'];
    }

    /**
     * Sets key3
     *
     * @param string $key3 key3
     *
     * @return $this
     */
    public function setKey3($key3)
    {
        $this->container['key3'] = $key3;

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
     * Gets prod
     *
     * @return string
     */
    public function getProd()
    {
        return $this->container['prod'];
    }

    /**
     * Sets prod
     *
     * @param string $prod prod
     *
     * @return $this
     */
    public function setProd($prod)
    {
        $this->container['prod'] = $prod;

        return $this;
    }

    /**
     * Gets shipfm
     *
     * @return int
     */
    public function getShipfm()
    {
        return $this->container['shipfm'];
    }

    /**
     * Sets shipfm
     *
     * @param int $shipfm shipfm
     *
     * @return $this
     */
    public function setShipfm($shipfm)
    {
        $this->container['shipfm'] = $shipfm;

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
     * Gets totcost
     *
     * @return double
     */
    public function getTotcost()
    {
        return $this->container['totcost'];
    }

    /**
     * Sets totcost
     *
     * @param double $totcost totcost
     *
     * @return $this
     */
    public function setTotcost($totcost)
    {
        $this->container['totcost'] = $totcost;

        return $this;
    }

    /**
     * Gets totcostord
     *
     * @return double
     */
    public function getTotcostord()
    {
        return $this->container['totcostord'];
    }

    /**
     * Sets totcostord
     *
     * @param double $totcostord totcostord
     *
     * @return $this
     */
    public function setTotcostord($totcostord)
    {
        $this->container['totcostord'] = $totcostord;

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
     * Gets totinvord
     *
     * @return double
     */
    public function getTotinvord()
    {
        return $this->container['totinvord'];
    }

    /**
     * Sets totinvord
     *
     * @param double $totinvord totinvord
     *
     * @return $this
     */
    public function setTotinvord($totinvord)
    {
        $this->container['totinvord'] = $totinvord;

        return $this;
    }

    /**
     * Gets totqtyord
     *
     * @return double
     */
    public function getTotqtyord()
    {
        return $this->container['totqtyord'];
    }

    /**
     * Sets totqtyord
     *
     * @param double $totqtyord totqtyord
     *
     * @return $this
     */
    public function setTotqtyord($totqtyord)
    {
        $this->container['totqtyord'] = $totqtyord;

        return $this;
    }

    /**
     * Gets totqtyshp
     *
     * @return double
     */
    public function getTotqtyshp()
    {
        return $this->container['totqtyshp'];
    }

    /**
     * Sets totqtyshp
     *
     * @param double $totqtyshp totqtyshp
     *
     * @return $this
     */
    public function setTotqtyshp($totqtyshp)
    {
        $this->container['totqtyshp'] = $totqtyshp;

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
     * Gets vendno
     *
     * @return double
     */
    public function getVendno()
    {
        return $this->container['vendno'];
    }

    /**
     * Sets vendno
     *
     * @param double $vendno vendno
     *
     * @return $this
     */
    public function setVendno($vendno)
    {
        $this->container['vendno'] = $vendno;

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
     * Gets char1
     *
     * @return string
     */
    public function getChar1()
    {
        return $this->container['char1'];
    }

    /**
     * Sets char1
     *
     * @param string $char1 char1
     *
     * @return $this
     */
    public function setChar1($char1)
    {
        $this->container['char1'] = $char1;

        return $this;
    }

    /**
     * Gets char2
     *
     * @return string
     */
    public function getChar2()
    {
        return $this->container['char2'];
    }

    /**
     * Sets char2
     *
     * @param string $char2 char2
     *
     * @return $this
     */
    public function setChar2($char2)
    {
        $this->container['char2'] = $char2;

        return $this;
    }

    /**
     * Gets char3
     *
     * @return string
     */
    public function getChar3()
    {
        return $this->container['char3'];
    }

    /**
     * Sets char3
     *
     * @param string $char3 char3
     *
     * @return $this
     */
    public function setChar3($char3)
    {
        $this->container['char3'] = $char3;

        return $this;
    }

    /**
     * Gets char4
     *
     * @return string
     */
    public function getChar4()
    {
        return $this->container['char4'];
    }

    /**
     * Sets char4
     *
     * @param string $char4 char4
     *
     * @return $this
     */
    public function setChar4($char4)
    {
        $this->container['char4'] = $char4;

        return $this;
    }

    /**
     * Gets char5
     *
     * @return string
     */
    public function getChar5()
    {
        return $this->container['char5'];
    }

    /**
     * Sets char5
     *
     * @param string $char5 char5
     *
     * @return $this
     */
    public function setChar5($char5)
    {
        $this->container['char5'] = $char5;

        return $this;
    }

    /**
     * Gets char6
     *
     * @return string
     */
    public function getChar6()
    {
        return $this->container['char6'];
    }

    /**
     * Sets char6
     *
     * @param string $char6 char6
     *
     * @return $this
     */
    public function setChar6($char6)
    {
        $this->container['char6'] = $char6;

        return $this;
    }

    /**
     * Gets char7
     *
     * @return string
     */
    public function getChar7()
    {
        return $this->container['char7'];
    }

    /**
     * Sets char7
     *
     * @param string $char7 char7
     *
     * @return $this
     */
    public function setChar7($char7)
    {
        $this->container['char7'] = $char7;

        return $this;
    }

    /**
     * Gets char8
     *
     * @return string
     */
    public function getChar8()
    {
        return $this->container['char8'];
    }

    /**
     * Sets char8
     *
     * @param string $char8 char8
     *
     * @return $this
     */
    public function setChar8($char8)
    {
        $this->container['char8'] = $char8;

        return $this;
    }

    /**
     * Gets char9
     *
     * @return string
     */
    public function getChar9()
    {
        return $this->container['char9'];
    }

    /**
     * Sets char9
     *
     * @param string $char9 char9
     *
     * @return $this
     */
    public function setChar9($char9)
    {
        $this->container['char9'] = $char9;

        return $this;
    }

    /**
     * Gets char10
     *
     * @return string
     */
    public function getChar10()
    {
        return $this->container['char10'];
    }

    /**
     * Sets char10
     *
     * @param string $char10 char10
     *
     * @return $this
     */
    public function setChar10($char10)
    {
        $this->container['char10'] = $char10;

        return $this;
    }

    /**
     * Gets dec1
     *
     * @return double
     */
    public function getDec1()
    {
        return $this->container['dec1'];
    }

    /**
     * Sets dec1
     *
     * @param double $dec1 dec1
     *
     * @return $this
     */
    public function setDec1($dec1)
    {
        $this->container['dec1'] = $dec1;

        return $this;
    }

    /**
     * Gets dec2
     *
     * @return double
     */
    public function getDec2()
    {
        return $this->container['dec2'];
    }

    /**
     * Sets dec2
     *
     * @param double $dec2 dec2
     *
     * @return $this
     */
    public function setDec2($dec2)
    {
        $this->container['dec2'] = $dec2;

        return $this;
    }

    /**
     * Gets dec3
     *
     * @return double
     */
    public function getDec3()
    {
        return $this->container['dec3'];
    }

    /**
     * Sets dec3
     *
     * @param double $dec3 dec3
     *
     * @return $this
     */
    public function setDec3($dec3)
    {
        $this->container['dec3'] = $dec3;

        return $this;
    }

    /**
     * Gets dec4
     *
     * @return double
     */
    public function getDec4()
    {
        return $this->container['dec4'];
    }

    /**
     * Sets dec4
     *
     * @param double $dec4 dec4
     *
     * @return $this
     */
    public function setDec4($dec4)
    {
        $this->container['dec4'] = $dec4;

        return $this;
    }

    /**
     * Gets dec5
     *
     * @return double
     */
    public function getDec5()
    {
        return $this->container['dec5'];
    }

    /**
     * Sets dec5
     *
     * @param double $dec5 dec5
     *
     * @return $this
     */
    public function setDec5($dec5)
    {
        $this->container['dec5'] = $dec5;

        return $this;
    }

    /**
     * Gets date1
     *
     * @return \DateTime
     */
    public function getDate1()
    {
        return $this->container['date1'];
    }

    /**
     * Sets date1
     *
     * @param \DateTime $date1 date1
     *
     * @return $this
     */
    public function setDate1($date1)
    {
        $this->container['date1'] = $date1;

        return $this;
    }

    /**
     * Gets date2
     *
     * @return \DateTime
     */
    public function getDate2()
    {
        return $this->container['date2'];
    }

    /**
     * Sets date2
     *
     * @param \DateTime $date2 date2
     *
     * @return $this
     */
    public function setDate2($date2)
    {
        $this->container['date2'] = $date2;

        return $this;
    }

    /**
     * Gets date3
     *
     * @return \DateTime
     */
    public function getDate3()
    {
        return $this->container['date3'];
    }

    /**
     * Sets date3
     *
     * @param \DateTime $date3 date3
     *
     * @return $this
     */
    public function setDate3($date3)
    {
        $this->container['date3'] = $date3;

        return $this;
    }

    /**
     * Gets date4
     *
     * @return \DateTime
     */
    public function getDate4()
    {
        return $this->container['date4'];
    }

    /**
     * Sets date4
     *
     * @param \DateTime $date4 date4
     *
     * @return $this
     */
    public function setDate4($date4)
    {
        $this->container['date4'] = $date4;

        return $this;
    }

    /**
     * Gets date5
     *
     * @return \DateTime
     */
    public function getDate5()
    {
        return $this->container['date5'];
    }

    /**
     * Sets date5
     *
     * @param \DateTime $date5 date5
     *
     * @return $this
     */
    public function setDate5($date5)
    {
        $this->container['date5'] = $date5;

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


