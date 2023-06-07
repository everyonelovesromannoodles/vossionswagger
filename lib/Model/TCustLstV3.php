<?php
/**
 * TCustLstV3
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
 * TCustLstV3 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TCustLstV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-custLstV3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cust_no' => 'double',
        'ship_to' => 'string',
        'name' => 'string',
        'addr1' => 'string',
        'addr2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip_cd' => 'string',
        'ord_bal' => 'double',
        'total_bal' => 'double',
        'sort_fld' => 'string',
        'salesytd' => 'double',
        'costytd' => 'double',
        'marginytd' => 'double',
        'lastsalesytd' => 'double',
        'lastcostytd' => 'double',
        'lastmarginytd' => 'double',
        'periodbal1' => 'double',
        'periodbal2' => 'double',
        'periodbal3' => 'double',
        'periodbal4' => 'double',
        'periodbal5' => 'double',
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
        'cust_no' => 'double',
        'ship_to' => null,
        'name' => null,
        'addr1' => null,
        'addr2' => null,
        'city' => null,
        'state' => null,
        'zip_cd' => null,
        'ord_bal' => 'double',
        'total_bal' => 'double',
        'sort_fld' => null,
        'salesytd' => 'double',
        'costytd' => 'double',
        'marginytd' => 'double',
        'lastsalesytd' => 'double',
        'lastcostytd' => 'double',
        'lastmarginytd' => 'double',
        'periodbal1' => 'double',
        'periodbal2' => 'double',
        'periodbal3' => 'double',
        'periodbal4' => 'double',
        'periodbal5' => 'double',
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
        'cust_no' => 'custNo',
        'ship_to' => 'shipTo',
        'name' => 'name',
        'addr1' => 'addr1',
        'addr2' => 'addr2',
        'city' => 'city',
        'state' => 'state',
        'zip_cd' => 'zipCd',
        'ord_bal' => 'ordBal',
        'total_bal' => 'totalBal',
        'sort_fld' => 'sortFld',
        'salesytd' => 'salesytd',
        'costytd' => 'costytd',
        'marginytd' => 'marginytd',
        'lastsalesytd' => 'lastsalesytd',
        'lastcostytd' => 'lastcostytd',
        'lastmarginytd' => 'lastmarginytd',
        'periodbal1' => 'periodbal1',
        'periodbal2' => 'periodbal2',
        'periodbal3' => 'periodbal3',
        'periodbal4' => 'periodbal4',
        'periodbal5' => 'periodbal5',
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
        'cust_no' => 'setCustNo',
        'ship_to' => 'setShipTo',
        'name' => 'setName',
        'addr1' => 'setAddr1',
        'addr2' => 'setAddr2',
        'city' => 'setCity',
        'state' => 'setState',
        'zip_cd' => 'setZipCd',
        'ord_bal' => 'setOrdBal',
        'total_bal' => 'setTotalBal',
        'sort_fld' => 'setSortFld',
        'salesytd' => 'setSalesytd',
        'costytd' => 'setCostytd',
        'marginytd' => 'setMarginytd',
        'lastsalesytd' => 'setLastsalesytd',
        'lastcostytd' => 'setLastcostytd',
        'lastmarginytd' => 'setLastmarginytd',
        'periodbal1' => 'setPeriodbal1',
        'periodbal2' => 'setPeriodbal2',
        'periodbal3' => 'setPeriodbal3',
        'periodbal4' => 'setPeriodbal4',
        'periodbal5' => 'setPeriodbal5',
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
        'cust_no' => 'getCustNo',
        'ship_to' => 'getShipTo',
        'name' => 'getName',
        'addr1' => 'getAddr1',
        'addr2' => 'getAddr2',
        'city' => 'getCity',
        'state' => 'getState',
        'zip_cd' => 'getZipCd',
        'ord_bal' => 'getOrdBal',
        'total_bal' => 'getTotalBal',
        'sort_fld' => 'getSortFld',
        'salesytd' => 'getSalesytd',
        'costytd' => 'getCostytd',
        'marginytd' => 'getMarginytd',
        'lastsalesytd' => 'getLastsalesytd',
        'lastcostytd' => 'getLastcostytd',
        'lastmarginytd' => 'getLastmarginytd',
        'periodbal1' => 'getPeriodbal1',
        'periodbal2' => 'getPeriodbal2',
        'periodbal3' => 'getPeriodbal3',
        'periodbal4' => 'getPeriodbal4',
        'periodbal5' => 'getPeriodbal5',
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
        $this->container['cust_no'] = isset($data['cust_no']) ? $data['cust_no'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['addr1'] = isset($data['addr1']) ? $data['addr1'] : null;
        $this->container['addr2'] = isset($data['addr2']) ? $data['addr2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['zip_cd'] = isset($data['zip_cd']) ? $data['zip_cd'] : null;
        $this->container['ord_bal'] = isset($data['ord_bal']) ? $data['ord_bal'] : null;
        $this->container['total_bal'] = isset($data['total_bal']) ? $data['total_bal'] : null;
        $this->container['sort_fld'] = isset($data['sort_fld']) ? $data['sort_fld'] : null;
        $this->container['salesytd'] = isset($data['salesytd']) ? $data['salesytd'] : null;
        $this->container['costytd'] = isset($data['costytd']) ? $data['costytd'] : null;
        $this->container['marginytd'] = isset($data['marginytd']) ? $data['marginytd'] : null;
        $this->container['lastsalesytd'] = isset($data['lastsalesytd']) ? $data['lastsalesytd'] : null;
        $this->container['lastcostytd'] = isset($data['lastcostytd']) ? $data['lastcostytd'] : null;
        $this->container['lastmarginytd'] = isset($data['lastmarginytd']) ? $data['lastmarginytd'] : null;
        $this->container['periodbal1'] = isset($data['periodbal1']) ? $data['periodbal1'] : null;
        $this->container['periodbal2'] = isset($data['periodbal2']) ? $data['periodbal2'] : null;
        $this->container['periodbal3'] = isset($data['periodbal3']) ? $data['periodbal3'] : null;
        $this->container['periodbal4'] = isset($data['periodbal4']) ? $data['periodbal4'] : null;
        $this->container['periodbal5'] = isset($data['periodbal5']) ? $data['periodbal5'] : null;
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
     * Gets addr1
     *
     * @return string
     */
    public function getAddr1()
    {
        return $this->container['addr1'];
    }

    /**
     * Sets addr1
     *
     * @param string $addr1 addr1
     *
     * @return $this
     */
    public function setAddr1($addr1)
    {
        $this->container['addr1'] = $addr1;

        return $this;
    }

    /**
     * Gets addr2
     *
     * @return string
     */
    public function getAddr2()
    {
        return $this->container['addr2'];
    }

    /**
     * Sets addr2
     *
     * @param string $addr2 addr2
     *
     * @return $this
     */
    public function setAddr2($addr2)
    {
        $this->container['addr2'] = $addr2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zip_cd
     *
     * @return string
     */
    public function getZipCd()
    {
        return $this->container['zip_cd'];
    }

    /**
     * Sets zip_cd
     *
     * @param string $zip_cd zip_cd
     *
     * @return $this
     */
    public function setZipCd($zip_cd)
    {
        $this->container['zip_cd'] = $zip_cd;

        return $this;
    }

    /**
     * Gets ord_bal
     *
     * @return double
     */
    public function getOrdBal()
    {
        return $this->container['ord_bal'];
    }

    /**
     * Sets ord_bal
     *
     * @param double $ord_bal ord_bal
     *
     * @return $this
     */
    public function setOrdBal($ord_bal)
    {
        $this->container['ord_bal'] = $ord_bal;

        return $this;
    }

    /**
     * Gets total_bal
     *
     * @return double
     */
    public function getTotalBal()
    {
        return $this->container['total_bal'];
    }

    /**
     * Sets total_bal
     *
     * @param double $total_bal total_bal
     *
     * @return $this
     */
    public function setTotalBal($total_bal)
    {
        $this->container['total_bal'] = $total_bal;

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
     * Gets salesytd
     *
     * @return double
     */
    public function getSalesytd()
    {
        return $this->container['salesytd'];
    }

    /**
     * Sets salesytd
     *
     * @param double $salesytd salesytd
     *
     * @return $this
     */
    public function setSalesytd($salesytd)
    {
        $this->container['salesytd'] = $salesytd;

        return $this;
    }

    /**
     * Gets costytd
     *
     * @return double
     */
    public function getCostytd()
    {
        return $this->container['costytd'];
    }

    /**
     * Sets costytd
     *
     * @param double $costytd costytd
     *
     * @return $this
     */
    public function setCostytd($costytd)
    {
        $this->container['costytd'] = $costytd;

        return $this;
    }

    /**
     * Gets marginytd
     *
     * @return double
     */
    public function getMarginytd()
    {
        return $this->container['marginytd'];
    }

    /**
     * Sets marginytd
     *
     * @param double $marginytd marginytd
     *
     * @return $this
     */
    public function setMarginytd($marginytd)
    {
        $this->container['marginytd'] = $marginytd;

        return $this;
    }

    /**
     * Gets lastsalesytd
     *
     * @return double
     */
    public function getLastsalesytd()
    {
        return $this->container['lastsalesytd'];
    }

    /**
     * Sets lastsalesytd
     *
     * @param double $lastsalesytd lastsalesytd
     *
     * @return $this
     */
    public function setLastsalesytd($lastsalesytd)
    {
        $this->container['lastsalesytd'] = $lastsalesytd;

        return $this;
    }

    /**
     * Gets lastcostytd
     *
     * @return double
     */
    public function getLastcostytd()
    {
        return $this->container['lastcostytd'];
    }

    /**
     * Sets lastcostytd
     *
     * @param double $lastcostytd lastcostytd
     *
     * @return $this
     */
    public function setLastcostytd($lastcostytd)
    {
        $this->container['lastcostytd'] = $lastcostytd;

        return $this;
    }

    /**
     * Gets lastmarginytd
     *
     * @return double
     */
    public function getLastmarginytd()
    {
        return $this->container['lastmarginytd'];
    }

    /**
     * Sets lastmarginytd
     *
     * @param double $lastmarginytd lastmarginytd
     *
     * @return $this
     */
    public function setLastmarginytd($lastmarginytd)
    {
        $this->container['lastmarginytd'] = $lastmarginytd;

        return $this;
    }

    /**
     * Gets periodbal1
     *
     * @return double
     */
    public function getPeriodbal1()
    {
        return $this->container['periodbal1'];
    }

    /**
     * Sets periodbal1
     *
     * @param double $periodbal1 periodbal1
     *
     * @return $this
     */
    public function setPeriodbal1($periodbal1)
    {
        $this->container['periodbal1'] = $periodbal1;

        return $this;
    }

    /**
     * Gets periodbal2
     *
     * @return double
     */
    public function getPeriodbal2()
    {
        return $this->container['periodbal2'];
    }

    /**
     * Sets periodbal2
     *
     * @param double $periodbal2 periodbal2
     *
     * @return $this
     */
    public function setPeriodbal2($periodbal2)
    {
        $this->container['periodbal2'] = $periodbal2;

        return $this;
    }

    /**
     * Gets periodbal3
     *
     * @return double
     */
    public function getPeriodbal3()
    {
        return $this->container['periodbal3'];
    }

    /**
     * Sets periodbal3
     *
     * @param double $periodbal3 periodbal3
     *
     * @return $this
     */
    public function setPeriodbal3($periodbal3)
    {
        $this->container['periodbal3'] = $periodbal3;

        return $this;
    }

    /**
     * Gets periodbal4
     *
     * @return double
     */
    public function getPeriodbal4()
    {
        return $this->container['periodbal4'];
    }

    /**
     * Sets periodbal4
     *
     * @param double $periodbal4 periodbal4
     *
     * @return $this
     */
    public function setPeriodbal4($periodbal4)
    {
        $this->container['periodbal4'] = $periodbal4;

        return $this;
    }

    /**
     * Gets periodbal5
     *
     * @return double
     */
    public function getPeriodbal5()
    {
        return $this->container['periodbal5'];
    }

    /**
     * Sets periodbal5
     *
     * @param double $periodbal5 periodbal5
     *
     * @return $this
     */
    public function setPeriodbal5($periodbal5)
    {
        $this->container['periodbal5'] = $periodbal5;

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

