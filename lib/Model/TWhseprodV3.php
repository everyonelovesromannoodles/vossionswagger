<?php
/**
 * TWhseprodV3
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
 * TWhseprodV3 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TWhseprodV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-whseprodV3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'prod' => 'string',
        'whse' => 'string',
        'arpvendno' => 'double',
        'prodline' => 'string',
        'lookupnm' => 'string',
        'statustype' => 'string',
        'serlottype' => 'string',
        'netavail' => 'double',
        'leadtmavg' => 'int',
        'descrip1' => 'string',
        'descrip2' => 'string',
        'prod_cat' => 'string',
        'listprice' => 'double',
        'baseprice' => 'double',
        'priceonty' => 'string',
        'glcost' => 'double',
        'pdcost' => 'double',
        'pocost' => 'double',
        'smcost' => 'double',
        'icspstatustype' => 'string',
        'pricetype' => 'string',
        'qtyonorder' => 'double',
        'lastpowtdt' => '\DateTime',
        'unitstock' => 'string',
        'user1' => 'string',
        'user2' => 'string',
        'user3' => 'string',
        'user4' => 'string',
        'user5' => 'string',
        'user6' => 'double',
        'user7' => 'double',
        'user8' => '\DateTime',
        'user9' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'prod' => null,
        'whse' => null,
        'arpvendno' => 'double',
        'prodline' => null,
        'lookupnm' => null,
        'statustype' => null,
        'serlottype' => null,
        'netavail' => 'double',
        'leadtmavg' => 'int64',
        'descrip1' => null,
        'descrip2' => null,
        'prod_cat' => null,
        'listprice' => 'double',
        'baseprice' => 'double',
        'priceonty' => null,
        'glcost' => 'double',
        'pdcost' => 'double',
        'pocost' => 'double',
        'smcost' => 'double',
        'icspstatustype' => null,
        'pricetype' => null,
        'qtyonorder' => 'double',
        'lastpowtdt' => 'date',
        'unitstock' => null,
        'user1' => null,
        'user2' => null,
        'user3' => null,
        'user4' => null,
        'user5' => null,
        'user6' => 'double',
        'user7' => 'double',
        'user8' => 'date',
        'user9' => 'date'
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
        'prod' => 'prod',
        'whse' => 'whse',
        'arpvendno' => 'arpvendno',
        'prodline' => 'prodline',
        'lookupnm' => 'lookupnm',
        'statustype' => 'statustype',
        'serlottype' => 'serlottype',
        'netavail' => 'netavail',
        'leadtmavg' => 'leadtmavg',
        'descrip1' => 'descrip1',
        'descrip2' => 'descrip2',
        'prod_cat' => 'prodCat',
        'listprice' => 'listprice',
        'baseprice' => 'baseprice',
        'priceonty' => 'priceonty',
        'glcost' => 'glcost',
        'pdcost' => 'pdcost',
        'pocost' => 'pocost',
        'smcost' => 'smcost',
        'icspstatustype' => 'icspstatustype',
        'pricetype' => 'pricetype',
        'qtyonorder' => 'qtyonorder',
        'lastpowtdt' => 'lastpowtdt',
        'unitstock' => 'unitstock',
        'user1' => 'user1',
        'user2' => 'user2',
        'user3' => 'user3',
        'user4' => 'user4',
        'user5' => 'user5',
        'user6' => 'user6',
        'user7' => 'user7',
        'user8' => 'user8',
        'user9' => 'user9'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'prod' => 'setProd',
        'whse' => 'setWhse',
        'arpvendno' => 'setArpvendno',
        'prodline' => 'setProdline',
        'lookupnm' => 'setLookupnm',
        'statustype' => 'setStatustype',
        'serlottype' => 'setSerlottype',
        'netavail' => 'setNetavail',
        'leadtmavg' => 'setLeadtmavg',
        'descrip1' => 'setDescrip1',
        'descrip2' => 'setDescrip2',
        'prod_cat' => 'setProdCat',
        'listprice' => 'setListprice',
        'baseprice' => 'setBaseprice',
        'priceonty' => 'setPriceonty',
        'glcost' => 'setGlcost',
        'pdcost' => 'setPdcost',
        'pocost' => 'setPocost',
        'smcost' => 'setSmcost',
        'icspstatustype' => 'setIcspstatustype',
        'pricetype' => 'setPricetype',
        'qtyonorder' => 'setQtyonorder',
        'lastpowtdt' => 'setLastpowtdt',
        'unitstock' => 'setUnitstock',
        'user1' => 'setUser1',
        'user2' => 'setUser2',
        'user3' => 'setUser3',
        'user4' => 'setUser4',
        'user5' => 'setUser5',
        'user6' => 'setUser6',
        'user7' => 'setUser7',
        'user8' => 'setUser8',
        'user9' => 'setUser9'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'prod' => 'getProd',
        'whse' => 'getWhse',
        'arpvendno' => 'getArpvendno',
        'prodline' => 'getProdline',
        'lookupnm' => 'getLookupnm',
        'statustype' => 'getStatustype',
        'serlottype' => 'getSerlottype',
        'netavail' => 'getNetavail',
        'leadtmavg' => 'getLeadtmavg',
        'descrip1' => 'getDescrip1',
        'descrip2' => 'getDescrip2',
        'prod_cat' => 'getProdCat',
        'listprice' => 'getListprice',
        'baseprice' => 'getBaseprice',
        'priceonty' => 'getPriceonty',
        'glcost' => 'getGlcost',
        'pdcost' => 'getPdcost',
        'pocost' => 'getPocost',
        'smcost' => 'getSmcost',
        'icspstatustype' => 'getIcspstatustype',
        'pricetype' => 'getPricetype',
        'qtyonorder' => 'getQtyonorder',
        'lastpowtdt' => 'getLastpowtdt',
        'unitstock' => 'getUnitstock',
        'user1' => 'getUser1',
        'user2' => 'getUser2',
        'user3' => 'getUser3',
        'user4' => 'getUser4',
        'user5' => 'getUser5',
        'user6' => 'getUser6',
        'user7' => 'getUser7',
        'user8' => 'getUser8',
        'user9' => 'getUser9'
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
        $this->container['prod'] = isset($data['prod']) ? $data['prod'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['arpvendno'] = isset($data['arpvendno']) ? $data['arpvendno'] : null;
        $this->container['prodline'] = isset($data['prodline']) ? $data['prodline'] : null;
        $this->container['lookupnm'] = isset($data['lookupnm']) ? $data['lookupnm'] : null;
        $this->container['statustype'] = isset($data['statustype']) ? $data['statustype'] : null;
        $this->container['serlottype'] = isset($data['serlottype']) ? $data['serlottype'] : null;
        $this->container['netavail'] = isset($data['netavail']) ? $data['netavail'] : null;
        $this->container['leadtmavg'] = isset($data['leadtmavg']) ? $data['leadtmavg'] : null;
        $this->container['descrip1'] = isset($data['descrip1']) ? $data['descrip1'] : null;
        $this->container['descrip2'] = isset($data['descrip2']) ? $data['descrip2'] : null;
        $this->container['prod_cat'] = isset($data['prod_cat']) ? $data['prod_cat'] : null;
        $this->container['listprice'] = isset($data['listprice']) ? $data['listprice'] : null;
        $this->container['baseprice'] = isset($data['baseprice']) ? $data['baseprice'] : null;
        $this->container['priceonty'] = isset($data['priceonty']) ? $data['priceonty'] : null;
        $this->container['glcost'] = isset($data['glcost']) ? $data['glcost'] : null;
        $this->container['pdcost'] = isset($data['pdcost']) ? $data['pdcost'] : null;
        $this->container['pocost'] = isset($data['pocost']) ? $data['pocost'] : null;
        $this->container['smcost'] = isset($data['smcost']) ? $data['smcost'] : null;
        $this->container['icspstatustype'] = isset($data['icspstatustype']) ? $data['icspstatustype'] : null;
        $this->container['pricetype'] = isset($data['pricetype']) ? $data['pricetype'] : null;
        $this->container['qtyonorder'] = isset($data['qtyonorder']) ? $data['qtyonorder'] : null;
        $this->container['lastpowtdt'] = isset($data['lastpowtdt']) ? $data['lastpowtdt'] : null;
        $this->container['unitstock'] = isset($data['unitstock']) ? $data['unitstock'] : null;
        $this->container['user1'] = isset($data['user1']) ? $data['user1'] : null;
        $this->container['user2'] = isset($data['user2']) ? $data['user2'] : null;
        $this->container['user3'] = isset($data['user3']) ? $data['user3'] : null;
        $this->container['user4'] = isset($data['user4']) ? $data['user4'] : null;
        $this->container['user5'] = isset($data['user5']) ? $data['user5'] : null;
        $this->container['user6'] = isset($data['user6']) ? $data['user6'] : null;
        $this->container['user7'] = isset($data['user7']) ? $data['user7'] : null;
        $this->container['user8'] = isset($data['user8']) ? $data['user8'] : null;
        $this->container['user9'] = isset($data['user9']) ? $data['user9'] : null;
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
     * Gets arpvendno
     *
     * @return double
     */
    public function getArpvendno()
    {
        return $this->container['arpvendno'];
    }

    /**
     * Sets arpvendno
     *
     * @param double $arpvendno arpvendno
     *
     * @return $this
     */
    public function setArpvendno($arpvendno)
    {
        $this->container['arpvendno'] = $arpvendno;

        return $this;
    }

    /**
     * Gets prodline
     *
     * @return string
     */
    public function getProdline()
    {
        return $this->container['prodline'];
    }

    /**
     * Sets prodline
     *
     * @param string $prodline prodline
     *
     * @return $this
     */
    public function setProdline($prodline)
    {
        $this->container['prodline'] = $prodline;

        return $this;
    }

    /**
     * Gets lookupnm
     *
     * @return string
     */
    public function getLookupnm()
    {
        return $this->container['lookupnm'];
    }

    /**
     * Sets lookupnm
     *
     * @param string $lookupnm lookupnm
     *
     * @return $this
     */
    public function setLookupnm($lookupnm)
    {
        $this->container['lookupnm'] = $lookupnm;

        return $this;
    }

    /**
     * Gets statustype
     *
     * @return string
     */
    public function getStatustype()
    {
        return $this->container['statustype'];
    }

    /**
     * Sets statustype
     *
     * @param string $statustype statustype
     *
     * @return $this
     */
    public function setStatustype($statustype)
    {
        $this->container['statustype'] = $statustype;

        return $this;
    }

    /**
     * Gets serlottype
     *
     * @return string
     */
    public function getSerlottype()
    {
        return $this->container['serlottype'];
    }

    /**
     * Sets serlottype
     *
     * @param string $serlottype serlottype
     *
     * @return $this
     */
    public function setSerlottype($serlottype)
    {
        $this->container['serlottype'] = $serlottype;

        return $this;
    }

    /**
     * Gets netavail
     *
     * @return double
     */
    public function getNetavail()
    {
        return $this->container['netavail'];
    }

    /**
     * Sets netavail
     *
     * @param double $netavail netavail
     *
     * @return $this
     */
    public function setNetavail($netavail)
    {
        $this->container['netavail'] = $netavail;

        return $this;
    }

    /**
     * Gets leadtmavg
     *
     * @return int
     */
    public function getLeadtmavg()
    {
        return $this->container['leadtmavg'];
    }

    /**
     * Sets leadtmavg
     *
     * @param int $leadtmavg leadtmavg
     *
     * @return $this
     */
    public function setLeadtmavg($leadtmavg)
    {
        $this->container['leadtmavg'] = $leadtmavg;

        return $this;
    }

    /**
     * Gets descrip1
     *
     * @return string
     */
    public function getDescrip1()
    {
        return $this->container['descrip1'];
    }

    /**
     * Sets descrip1
     *
     * @param string $descrip1 descrip1
     *
     * @return $this
     */
    public function setDescrip1($descrip1)
    {
        $this->container['descrip1'] = $descrip1;

        return $this;
    }

    /**
     * Gets descrip2
     *
     * @return string
     */
    public function getDescrip2()
    {
        return $this->container['descrip2'];
    }

    /**
     * Sets descrip2
     *
     * @param string $descrip2 descrip2
     *
     * @return $this
     */
    public function setDescrip2($descrip2)
    {
        $this->container['descrip2'] = $descrip2;

        return $this;
    }

    /**
     * Gets prod_cat
     *
     * @return string
     */
    public function getProdCat()
    {
        return $this->container['prod_cat'];
    }

    /**
     * Sets prod_cat
     *
     * @param string $prod_cat prod_cat
     *
     * @return $this
     */
    public function setProdCat($prod_cat)
    {
        $this->container['prod_cat'] = $prod_cat;

        return $this;
    }

    /**
     * Gets listprice
     *
     * @return double
     */
    public function getListprice()
    {
        return $this->container['listprice'];
    }

    /**
     * Sets listprice
     *
     * @param double $listprice listprice
     *
     * @return $this
     */
    public function setListprice($listprice)
    {
        $this->container['listprice'] = $listprice;

        return $this;
    }

    /**
     * Gets baseprice
     *
     * @return double
     */
    public function getBaseprice()
    {
        return $this->container['baseprice'];
    }

    /**
     * Sets baseprice
     *
     * @param double $baseprice baseprice
     *
     * @return $this
     */
    public function setBaseprice($baseprice)
    {
        $this->container['baseprice'] = $baseprice;

        return $this;
    }

    /**
     * Gets priceonty
     *
     * @return string
     */
    public function getPriceonty()
    {
        return $this->container['priceonty'];
    }

    /**
     * Sets priceonty
     *
     * @param string $priceonty priceonty
     *
     * @return $this
     */
    public function setPriceonty($priceonty)
    {
        $this->container['priceonty'] = $priceonty;

        return $this;
    }

    /**
     * Gets glcost
     *
     * @return double
     */
    public function getGlcost()
    {
        return $this->container['glcost'];
    }

    /**
     * Sets glcost
     *
     * @param double $glcost glcost
     *
     * @return $this
     */
    public function setGlcost($glcost)
    {
        $this->container['glcost'] = $glcost;

        return $this;
    }

    /**
     * Gets pdcost
     *
     * @return double
     */
    public function getPdcost()
    {
        return $this->container['pdcost'];
    }

    /**
     * Sets pdcost
     *
     * @param double $pdcost pdcost
     *
     * @return $this
     */
    public function setPdcost($pdcost)
    {
        $this->container['pdcost'] = $pdcost;

        return $this;
    }

    /**
     * Gets pocost
     *
     * @return double
     */
    public function getPocost()
    {
        return $this->container['pocost'];
    }

    /**
     * Sets pocost
     *
     * @param double $pocost pocost
     *
     * @return $this
     */
    public function setPocost($pocost)
    {
        $this->container['pocost'] = $pocost;

        return $this;
    }

    /**
     * Gets smcost
     *
     * @return double
     */
    public function getSmcost()
    {
        return $this->container['smcost'];
    }

    /**
     * Sets smcost
     *
     * @param double $smcost smcost
     *
     * @return $this
     */
    public function setSmcost($smcost)
    {
        $this->container['smcost'] = $smcost;

        return $this;
    }

    /**
     * Gets icspstatustype
     *
     * @return string
     */
    public function getIcspstatustype()
    {
        return $this->container['icspstatustype'];
    }

    /**
     * Sets icspstatustype
     *
     * @param string $icspstatustype icspstatustype
     *
     * @return $this
     */
    public function setIcspstatustype($icspstatustype)
    {
        $this->container['icspstatustype'] = $icspstatustype;

        return $this;
    }

    /**
     * Gets pricetype
     *
     * @return string
     */
    public function getPricetype()
    {
        return $this->container['pricetype'];
    }

    /**
     * Sets pricetype
     *
     * @param string $pricetype pricetype
     *
     * @return $this
     */
    public function setPricetype($pricetype)
    {
        $this->container['pricetype'] = $pricetype;

        return $this;
    }

    /**
     * Gets qtyonorder
     *
     * @return double
     */
    public function getQtyonorder()
    {
        return $this->container['qtyonorder'];
    }

    /**
     * Sets qtyonorder
     *
     * @param double $qtyonorder qtyonorder
     *
     * @return $this
     */
    public function setQtyonorder($qtyonorder)
    {
        $this->container['qtyonorder'] = $qtyonorder;

        return $this;
    }

    /**
     * Gets lastpowtdt
     *
     * @return \DateTime
     */
    public function getLastpowtdt()
    {
        return $this->container['lastpowtdt'];
    }

    /**
     * Sets lastpowtdt
     *
     * @param \DateTime $lastpowtdt lastpowtdt
     *
     * @return $this
     */
    public function setLastpowtdt($lastpowtdt)
    {
        $this->container['lastpowtdt'] = $lastpowtdt;

        return $this;
    }

    /**
     * Gets unitstock
     *
     * @return string
     */
    public function getUnitstock()
    {
        return $this->container['unitstock'];
    }

    /**
     * Sets unitstock
     *
     * @param string $unitstock unitstock
     *
     * @return $this
     */
    public function setUnitstock($unitstock)
    {
        $this->container['unitstock'] = $unitstock;

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


