<?php
/**
 * TWtlineitem
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
 * TWtlineitem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TWtlineitem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-wtlineitem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'approvety' => 'string',
        'bono' => 'int',
        'duedt' => '\DateTime',
        'lineno' => 'int',
        'netamt' => 'double',
        'netord' => 'double',
        'netrcv' => 'double',
        'nonstockty' => 'string',
        'ordertype' => 'string',
        'orderaltno' => 'int',
        'tiedorder' => 'string',
        'prodcost' => 'double',
        'proddesc' => 'string',
        'proddesc2' => 'string',
        'qtyord' => 'double',
        'qtyrcv' => 'double',
        'qtyship' => 'double',
        'shipprod' => 'string',
        'stkqtyord' => 'double',
        'stkqtyrcv' => 'double',
        'stkqtyship' => 'double',
        'unit' => 'string',
        'unitconv' => 'double',
        'sort_fld' => 'string',
        'cubes' => 'double',
        'weight' => 'double',
        'bolclass' => 'string',
        'serlottype' => 'string',
        'binloc1' => 'string',
        'binloc2' => 'string',
        'binloc3' => 'string',
        'binloc4' => 'string',
        'upccode' => 'string',
        'brandmsg' => 'string',
        'arpvendno' => 'double',
        'prodcat' => 'string',
        'icspstatustype' => 'string',
        'vendprod' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'approvety' => null,
        'bono' => 'int64',
        'duedt' => 'date',
        'lineno' => 'int64',
        'netamt' => 'double',
        'netord' => 'double',
        'netrcv' => 'double',
        'nonstockty' => null,
        'ordertype' => null,
        'orderaltno' => 'int64',
        'tiedorder' => null,
        'prodcost' => 'double',
        'proddesc' => null,
        'proddesc2' => null,
        'qtyord' => 'double',
        'qtyrcv' => 'double',
        'qtyship' => 'double',
        'shipprod' => null,
        'stkqtyord' => 'double',
        'stkqtyrcv' => 'double',
        'stkqtyship' => 'double',
        'unit' => null,
        'unitconv' => 'double',
        'sort_fld' => null,
        'cubes' => 'double',
        'weight' => 'double',
        'bolclass' => null,
        'serlottype' => null,
        'binloc1' => null,
        'binloc2' => null,
        'binloc3' => null,
        'binloc4' => null,
        'upccode' => null,
        'brandmsg' => null,
        'arpvendno' => 'double',
        'prodcat' => null,
        'icspstatustype' => null,
        'vendprod' => null
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
        'approvety' => 'approvety',
        'bono' => 'bono',
        'duedt' => 'duedt',
        'lineno' => 'lineno',
        'netamt' => 'netamt',
        'netord' => 'netord',
        'netrcv' => 'netrcv',
        'nonstockty' => 'nonstockty',
        'ordertype' => 'ordertype',
        'orderaltno' => 'orderaltno',
        'tiedorder' => 'tiedorder',
        'prodcost' => 'prodcost',
        'proddesc' => 'proddesc',
        'proddesc2' => 'proddesc2',
        'qtyord' => 'qtyord',
        'qtyrcv' => 'qtyrcv',
        'qtyship' => 'qtyship',
        'shipprod' => 'shipprod',
        'stkqtyord' => 'stkqtyord',
        'stkqtyrcv' => 'stkqtyrcv',
        'stkqtyship' => 'stkqtyship',
        'unit' => 'unit',
        'unitconv' => 'unitconv',
        'sort_fld' => 'sortFld',
        'cubes' => 'cubes',
        'weight' => 'weight',
        'bolclass' => 'bolclass',
        'serlottype' => 'serlottype',
        'binloc1' => 'binloc1',
        'binloc2' => 'binloc2',
        'binloc3' => 'binloc3',
        'binloc4' => 'binloc4',
        'upccode' => 'upccode',
        'brandmsg' => 'brandmsg',
        'arpvendno' => 'arpvendno',
        'prodcat' => 'prodcat',
        'icspstatustype' => 'icspstatustype',
        'vendprod' => 'vendprod'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'approvety' => 'setApprovety',
        'bono' => 'setBono',
        'duedt' => 'setDuedt',
        'lineno' => 'setLineno',
        'netamt' => 'setNetamt',
        'netord' => 'setNetord',
        'netrcv' => 'setNetrcv',
        'nonstockty' => 'setNonstockty',
        'ordertype' => 'setOrdertype',
        'orderaltno' => 'setOrderaltno',
        'tiedorder' => 'setTiedorder',
        'prodcost' => 'setProdcost',
        'proddesc' => 'setProddesc',
        'proddesc2' => 'setProddesc2',
        'qtyord' => 'setQtyord',
        'qtyrcv' => 'setQtyrcv',
        'qtyship' => 'setQtyship',
        'shipprod' => 'setShipprod',
        'stkqtyord' => 'setStkqtyord',
        'stkqtyrcv' => 'setStkqtyrcv',
        'stkqtyship' => 'setStkqtyship',
        'unit' => 'setUnit',
        'unitconv' => 'setUnitconv',
        'sort_fld' => 'setSortFld',
        'cubes' => 'setCubes',
        'weight' => 'setWeight',
        'bolclass' => 'setBolclass',
        'serlottype' => 'setSerlottype',
        'binloc1' => 'setBinloc1',
        'binloc2' => 'setBinloc2',
        'binloc3' => 'setBinloc3',
        'binloc4' => 'setBinloc4',
        'upccode' => 'setUpccode',
        'brandmsg' => 'setBrandmsg',
        'arpvendno' => 'setArpvendno',
        'prodcat' => 'setProdcat',
        'icspstatustype' => 'setIcspstatustype',
        'vendprod' => 'setVendprod'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'approvety' => 'getApprovety',
        'bono' => 'getBono',
        'duedt' => 'getDuedt',
        'lineno' => 'getLineno',
        'netamt' => 'getNetamt',
        'netord' => 'getNetord',
        'netrcv' => 'getNetrcv',
        'nonstockty' => 'getNonstockty',
        'ordertype' => 'getOrdertype',
        'orderaltno' => 'getOrderaltno',
        'tiedorder' => 'getTiedorder',
        'prodcost' => 'getProdcost',
        'proddesc' => 'getProddesc',
        'proddesc2' => 'getProddesc2',
        'qtyord' => 'getQtyord',
        'qtyrcv' => 'getQtyrcv',
        'qtyship' => 'getQtyship',
        'shipprod' => 'getShipprod',
        'stkqtyord' => 'getStkqtyord',
        'stkqtyrcv' => 'getStkqtyrcv',
        'stkqtyship' => 'getStkqtyship',
        'unit' => 'getUnit',
        'unitconv' => 'getUnitconv',
        'sort_fld' => 'getSortFld',
        'cubes' => 'getCubes',
        'weight' => 'getWeight',
        'bolclass' => 'getBolclass',
        'serlottype' => 'getSerlottype',
        'binloc1' => 'getBinloc1',
        'binloc2' => 'getBinloc2',
        'binloc3' => 'getBinloc3',
        'binloc4' => 'getBinloc4',
        'upccode' => 'getUpccode',
        'brandmsg' => 'getBrandmsg',
        'arpvendno' => 'getArpvendno',
        'prodcat' => 'getProdcat',
        'icspstatustype' => 'getIcspstatustype',
        'vendprod' => 'getVendprod'
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
        $this->container['approvety'] = isset($data['approvety']) ? $data['approvety'] : null;
        $this->container['bono'] = isset($data['bono']) ? $data['bono'] : null;
        $this->container['duedt'] = isset($data['duedt']) ? $data['duedt'] : null;
        $this->container['lineno'] = isset($data['lineno']) ? $data['lineno'] : null;
        $this->container['netamt'] = isset($data['netamt']) ? $data['netamt'] : null;
        $this->container['netord'] = isset($data['netord']) ? $data['netord'] : null;
        $this->container['netrcv'] = isset($data['netrcv']) ? $data['netrcv'] : null;
        $this->container['nonstockty'] = isset($data['nonstockty']) ? $data['nonstockty'] : null;
        $this->container['ordertype'] = isset($data['ordertype']) ? $data['ordertype'] : null;
        $this->container['orderaltno'] = isset($data['orderaltno']) ? $data['orderaltno'] : null;
        $this->container['tiedorder'] = isset($data['tiedorder']) ? $data['tiedorder'] : null;
        $this->container['prodcost'] = isset($data['prodcost']) ? $data['prodcost'] : null;
        $this->container['proddesc'] = isset($data['proddesc']) ? $data['proddesc'] : null;
        $this->container['proddesc2'] = isset($data['proddesc2']) ? $data['proddesc2'] : null;
        $this->container['qtyord'] = isset($data['qtyord']) ? $data['qtyord'] : null;
        $this->container['qtyrcv'] = isset($data['qtyrcv']) ? $data['qtyrcv'] : null;
        $this->container['qtyship'] = isset($data['qtyship']) ? $data['qtyship'] : null;
        $this->container['shipprod'] = isset($data['shipprod']) ? $data['shipprod'] : null;
        $this->container['stkqtyord'] = isset($data['stkqtyord']) ? $data['stkqtyord'] : null;
        $this->container['stkqtyrcv'] = isset($data['stkqtyrcv']) ? $data['stkqtyrcv'] : null;
        $this->container['stkqtyship'] = isset($data['stkqtyship']) ? $data['stkqtyship'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['unitconv'] = isset($data['unitconv']) ? $data['unitconv'] : null;
        $this->container['sort_fld'] = isset($data['sort_fld']) ? $data['sort_fld'] : null;
        $this->container['cubes'] = isset($data['cubes']) ? $data['cubes'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['bolclass'] = isset($data['bolclass']) ? $data['bolclass'] : null;
        $this->container['serlottype'] = isset($data['serlottype']) ? $data['serlottype'] : null;
        $this->container['binloc1'] = isset($data['binloc1']) ? $data['binloc1'] : null;
        $this->container['binloc2'] = isset($data['binloc2']) ? $data['binloc2'] : null;
        $this->container['binloc3'] = isset($data['binloc3']) ? $data['binloc3'] : null;
        $this->container['binloc4'] = isset($data['binloc4']) ? $data['binloc4'] : null;
        $this->container['upccode'] = isset($data['upccode']) ? $data['upccode'] : null;
        $this->container['brandmsg'] = isset($data['brandmsg']) ? $data['brandmsg'] : null;
        $this->container['arpvendno'] = isset($data['arpvendno']) ? $data['arpvendno'] : null;
        $this->container['prodcat'] = isset($data['prodcat']) ? $data['prodcat'] : null;
        $this->container['icspstatustype'] = isset($data['icspstatustype']) ? $data['icspstatustype'] : null;
        $this->container['vendprod'] = isset($data['vendprod']) ? $data['vendprod'] : null;
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
     * Gets approvety
     *
     * @return string
     */
    public function getApprovety()
    {
        return $this->container['approvety'];
    }

    /**
     * Sets approvety
     *
     * @param string $approvety approvety
     *
     * @return $this
     */
    public function setApprovety($approvety)
    {
        $this->container['approvety'] = $approvety;

        return $this;
    }

    /**
     * Gets bono
     *
     * @return int
     */
    public function getBono()
    {
        return $this->container['bono'];
    }

    /**
     * Sets bono
     *
     * @param int $bono bono
     *
     * @return $this
     */
    public function setBono($bono)
    {
        $this->container['bono'] = $bono;

        return $this;
    }

    /**
     * Gets duedt
     *
     * @return \DateTime
     */
    public function getDuedt()
    {
        return $this->container['duedt'];
    }

    /**
     * Sets duedt
     *
     * @param \DateTime $duedt duedt
     *
     * @return $this
     */
    public function setDuedt($duedt)
    {
        $this->container['duedt'] = $duedt;

        return $this;
    }

    /**
     * Gets lineno
     *
     * @return int
     */
    public function getLineno()
    {
        return $this->container['lineno'];
    }

    /**
     * Sets lineno
     *
     * @param int $lineno lineno
     *
     * @return $this
     */
    public function setLineno($lineno)
    {
        $this->container['lineno'] = $lineno;

        return $this;
    }

    /**
     * Gets netamt
     *
     * @return double
     */
    public function getNetamt()
    {
        return $this->container['netamt'];
    }

    /**
     * Sets netamt
     *
     * @param double $netamt netamt
     *
     * @return $this
     */
    public function setNetamt($netamt)
    {
        $this->container['netamt'] = $netamt;

        return $this;
    }

    /**
     * Gets netord
     *
     * @return double
     */
    public function getNetord()
    {
        return $this->container['netord'];
    }

    /**
     * Sets netord
     *
     * @param double $netord netord
     *
     * @return $this
     */
    public function setNetord($netord)
    {
        $this->container['netord'] = $netord;

        return $this;
    }

    /**
     * Gets netrcv
     *
     * @return double
     */
    public function getNetrcv()
    {
        return $this->container['netrcv'];
    }

    /**
     * Sets netrcv
     *
     * @param double $netrcv netrcv
     *
     * @return $this
     */
    public function setNetrcv($netrcv)
    {
        $this->container['netrcv'] = $netrcv;

        return $this;
    }

    /**
     * Gets nonstockty
     *
     * @return string
     */
    public function getNonstockty()
    {
        return $this->container['nonstockty'];
    }

    /**
     * Sets nonstockty
     *
     * @param string $nonstockty nonstockty
     *
     * @return $this
     */
    public function setNonstockty($nonstockty)
    {
        $this->container['nonstockty'] = $nonstockty;

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
     * Gets orderaltno
     *
     * @return int
     */
    public function getOrderaltno()
    {
        return $this->container['orderaltno'];
    }

    /**
     * Sets orderaltno
     *
     * @param int $orderaltno orderaltno
     *
     * @return $this
     */
    public function setOrderaltno($orderaltno)
    {
        $this->container['orderaltno'] = $orderaltno;

        return $this;
    }

    /**
     * Gets tiedorder
     *
     * @return string
     */
    public function getTiedorder()
    {
        return $this->container['tiedorder'];
    }

    /**
     * Sets tiedorder
     *
     * @param string $tiedorder tiedorder
     *
     * @return $this
     */
    public function setTiedorder($tiedorder)
    {
        $this->container['tiedorder'] = $tiedorder;

        return $this;
    }

    /**
     * Gets prodcost
     *
     * @return double
     */
    public function getProdcost()
    {
        return $this->container['prodcost'];
    }

    /**
     * Sets prodcost
     *
     * @param double $prodcost prodcost
     *
     * @return $this
     */
    public function setProdcost($prodcost)
    {
        $this->container['prodcost'] = $prodcost;

        return $this;
    }

    /**
     * Gets proddesc
     *
     * @return string
     */
    public function getProddesc()
    {
        return $this->container['proddesc'];
    }

    /**
     * Sets proddesc
     *
     * @param string $proddesc proddesc
     *
     * @return $this
     */
    public function setProddesc($proddesc)
    {
        $this->container['proddesc'] = $proddesc;

        return $this;
    }

    /**
     * Gets proddesc2
     *
     * @return string
     */
    public function getProddesc2()
    {
        return $this->container['proddesc2'];
    }

    /**
     * Sets proddesc2
     *
     * @param string $proddesc2 proddesc2
     *
     * @return $this
     */
    public function setProddesc2($proddesc2)
    {
        $this->container['proddesc2'] = $proddesc2;

        return $this;
    }

    /**
     * Gets qtyord
     *
     * @return double
     */
    public function getQtyord()
    {
        return $this->container['qtyord'];
    }

    /**
     * Sets qtyord
     *
     * @param double $qtyord qtyord
     *
     * @return $this
     */
    public function setQtyord($qtyord)
    {
        $this->container['qtyord'] = $qtyord;

        return $this;
    }

    /**
     * Gets qtyrcv
     *
     * @return double
     */
    public function getQtyrcv()
    {
        return $this->container['qtyrcv'];
    }

    /**
     * Sets qtyrcv
     *
     * @param double $qtyrcv qtyrcv
     *
     * @return $this
     */
    public function setQtyrcv($qtyrcv)
    {
        $this->container['qtyrcv'] = $qtyrcv;

        return $this;
    }

    /**
     * Gets qtyship
     *
     * @return double
     */
    public function getQtyship()
    {
        return $this->container['qtyship'];
    }

    /**
     * Sets qtyship
     *
     * @param double $qtyship qtyship
     *
     * @return $this
     */
    public function setQtyship($qtyship)
    {
        $this->container['qtyship'] = $qtyship;

        return $this;
    }

    /**
     * Gets shipprod
     *
     * @return string
     */
    public function getShipprod()
    {
        return $this->container['shipprod'];
    }

    /**
     * Sets shipprod
     *
     * @param string $shipprod shipprod
     *
     * @return $this
     */
    public function setShipprod($shipprod)
    {
        $this->container['shipprod'] = $shipprod;

        return $this;
    }

    /**
     * Gets stkqtyord
     *
     * @return double
     */
    public function getStkqtyord()
    {
        return $this->container['stkqtyord'];
    }

    /**
     * Sets stkqtyord
     *
     * @param double $stkqtyord stkqtyord
     *
     * @return $this
     */
    public function setStkqtyord($stkqtyord)
    {
        $this->container['stkqtyord'] = $stkqtyord;

        return $this;
    }

    /**
     * Gets stkqtyrcv
     *
     * @return double
     */
    public function getStkqtyrcv()
    {
        return $this->container['stkqtyrcv'];
    }

    /**
     * Sets stkqtyrcv
     *
     * @param double $stkqtyrcv stkqtyrcv
     *
     * @return $this
     */
    public function setStkqtyrcv($stkqtyrcv)
    {
        $this->container['stkqtyrcv'] = $stkqtyrcv;

        return $this;
    }

    /**
     * Gets stkqtyship
     *
     * @return double
     */
    public function getStkqtyship()
    {
        return $this->container['stkqtyship'];
    }

    /**
     * Sets stkqtyship
     *
     * @param double $stkqtyship stkqtyship
     *
     * @return $this
     */
    public function setStkqtyship($stkqtyship)
    {
        $this->container['stkqtyship'] = $stkqtyship;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets unitconv
     *
     * @return double
     */
    public function getUnitconv()
    {
        return $this->container['unitconv'];
    }

    /**
     * Sets unitconv
     *
     * @param double $unitconv unitconv
     *
     * @return $this
     */
    public function setUnitconv($unitconv)
    {
        $this->container['unitconv'] = $unitconv;

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
     * Gets cubes
     *
     * @return double
     */
    public function getCubes()
    {
        return $this->container['cubes'];
    }

    /**
     * Sets cubes
     *
     * @param double $cubes cubes
     *
     * @return $this
     */
    public function setCubes($cubes)
    {
        $this->container['cubes'] = $cubes;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return double
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param double $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets bolclass
     *
     * @return string
     */
    public function getBolclass()
    {
        return $this->container['bolclass'];
    }

    /**
     * Sets bolclass
     *
     * @param string $bolclass bolclass
     *
     * @return $this
     */
    public function setBolclass($bolclass)
    {
        $this->container['bolclass'] = $bolclass;

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
     * Gets binloc1
     *
     * @return string
     */
    public function getBinloc1()
    {
        return $this->container['binloc1'];
    }

    /**
     * Sets binloc1
     *
     * @param string $binloc1 binloc1
     *
     * @return $this
     */
    public function setBinloc1($binloc1)
    {
        $this->container['binloc1'] = $binloc1;

        return $this;
    }

    /**
     * Gets binloc2
     *
     * @return string
     */
    public function getBinloc2()
    {
        return $this->container['binloc2'];
    }

    /**
     * Sets binloc2
     *
     * @param string $binloc2 binloc2
     *
     * @return $this
     */
    public function setBinloc2($binloc2)
    {
        $this->container['binloc2'] = $binloc2;

        return $this;
    }

    /**
     * Gets binloc3
     *
     * @return string
     */
    public function getBinloc3()
    {
        return $this->container['binloc3'];
    }

    /**
     * Sets binloc3
     *
     * @param string $binloc3 binloc3
     *
     * @return $this
     */
    public function setBinloc3($binloc3)
    {
        $this->container['binloc3'] = $binloc3;

        return $this;
    }

    /**
     * Gets binloc4
     *
     * @return string
     */
    public function getBinloc4()
    {
        return $this->container['binloc4'];
    }

    /**
     * Sets binloc4
     *
     * @param string $binloc4 binloc4
     *
     * @return $this
     */
    public function setBinloc4($binloc4)
    {
        $this->container['binloc4'] = $binloc4;

        return $this;
    }

    /**
     * Gets upccode
     *
     * @return string
     */
    public function getUpccode()
    {
        return $this->container['upccode'];
    }

    /**
     * Sets upccode
     *
     * @param string $upccode upccode
     *
     * @return $this
     */
    public function setUpccode($upccode)
    {
        $this->container['upccode'] = $upccode;

        return $this;
    }

    /**
     * Gets brandmsg
     *
     * @return string
     */
    public function getBrandmsg()
    {
        return $this->container['brandmsg'];
    }

    /**
     * Sets brandmsg
     *
     * @param string $brandmsg brandmsg
     *
     * @return $this
     */
    public function setBrandmsg($brandmsg)
    {
        $this->container['brandmsg'] = $brandmsg;

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
     * Gets prodcat
     *
     * @return string
     */
    public function getProdcat()
    {
        return $this->container['prodcat'];
    }

    /**
     * Sets prodcat
     *
     * @param string $prodcat prodcat
     *
     * @return $this
     */
    public function setProdcat($prodcat)
    {
        $this->container['prodcat'] = $prodcat;

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
     * Gets vendprod
     *
     * @return string
     */
    public function getVendprod()
    {
        return $this->container['vendprod'];
    }

    /**
     * Sets vendprod
     *
     * @param string $vendprod vendprod
     *
     * @return $this
     */
    public function setVendprod($vendprod)
    {
        $this->container['vendprod'] = $vendprod;

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


