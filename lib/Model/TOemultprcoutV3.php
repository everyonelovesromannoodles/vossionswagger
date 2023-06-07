<?php
/**
 * TOemultprcoutV3
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
 * TOemultprcoutV3 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TOemultprcoutV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-oemultprcoutV3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'seqno' => 'int',
        'whse' => 'string',
        'prod' => 'string',
        'qtyord' => 'double',
        'stkqtyord' => 'double',
        'unit' => 'string',
        'unitconv' => 'double',
        'baseprice' => 'double',
        'listprice' => 'double',
        'priceonty' => 'string',
        'user1' => 'string',
        'user2' => 'string',
        'user3' => 'string',
        'user4' => 'string',
        'user5' => 'string',
        'errormess' => 'string',
        'price' => 'double',
        'discamt' => 'double',
        'disctype' => 'string',
        'extamt' => 'double',
        'extdiscount' => 'double',
        'netavail' => 'double',
        'vcspeccostty' => 'string',
        'vcprccostper' => 'string',
        'vccsunperstk' => 'double',
        'vcspecconv' => 'int',
        'vcspecrecno' => 'int',
        'pdrecno' => 'int',
        'promofl' => 'bool',
        'priceorigcd' => 'string',
        'cstpertext' => 'string',
        'qtyonorder' => 'double',
        'duedt' => '\DateTime',
        'freightamount' => 'double',
        'freightdiscfl' => 'bool',
        'qtybreakexistfl' => 'bool',
        'spiffamount' => 'double',
        'otherwhseinvfl' => 'bool',
        'commission' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'seqno' => 'int64',
        'whse' => null,
        'prod' => null,
        'qtyord' => 'double',
        'stkqtyord' => 'double',
        'unit' => null,
        'unitconv' => 'double',
        'baseprice' => 'double',
        'listprice' => 'double',
        'priceonty' => null,
        'user1' => null,
        'user2' => null,
        'user3' => null,
        'user4' => null,
        'user5' => null,
        'errormess' => null,
        'price' => 'double',
        'discamt' => 'double',
        'disctype' => null,
        'extamt' => 'double',
        'extdiscount' => 'double',
        'netavail' => 'double',
        'vcspeccostty' => null,
        'vcprccostper' => null,
        'vccsunperstk' => 'double',
        'vcspecconv' => 'int64',
        'vcspecrecno' => 'int64',
        'pdrecno' => 'int64',
        'promofl' => null,
        'priceorigcd' => null,
        'cstpertext' => null,
        'qtyonorder' => 'double',
        'duedt' => 'date',
        'freightamount' => 'double',
        'freightdiscfl' => null,
        'qtybreakexistfl' => null,
        'spiffamount' => 'double',
        'otherwhseinvfl' => null,
        'commission' => 'double'
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
        'seqno' => 'seqno',
        'whse' => 'whse',
        'prod' => 'prod',
        'qtyord' => 'qtyord',
        'stkqtyord' => 'stkqtyord',
        'unit' => 'unit',
        'unitconv' => 'unitconv',
        'baseprice' => 'baseprice',
        'listprice' => 'listprice',
        'priceonty' => 'priceonty',
        'user1' => 'user1',
        'user2' => 'user2',
        'user3' => 'user3',
        'user4' => 'user4',
        'user5' => 'user5',
        'errormess' => 'errormess',
        'price' => 'price',
        'discamt' => 'discamt',
        'disctype' => 'disctype',
        'extamt' => 'extamt',
        'extdiscount' => 'extdiscount',
        'netavail' => 'netavail',
        'vcspeccostty' => 'vcspeccostty',
        'vcprccostper' => 'vcprccostper',
        'vccsunperstk' => 'vccsunperstk',
        'vcspecconv' => 'vcspecconv',
        'vcspecrecno' => 'vcspecrecno',
        'pdrecno' => 'pdrecno',
        'promofl' => 'promofl',
        'priceorigcd' => 'priceorigcd',
        'cstpertext' => 'cstpertext',
        'qtyonorder' => 'qtyonorder',
        'duedt' => 'duedt',
        'freightamount' => 'freightamount',
        'freightdiscfl' => 'freightdiscfl',
        'qtybreakexistfl' => 'qtybreakexistfl',
        'spiffamount' => 'spiffamount',
        'otherwhseinvfl' => 'otherwhseinvfl',
        'commission' => 'commission'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seqno' => 'setSeqno',
        'whse' => 'setWhse',
        'prod' => 'setProd',
        'qtyord' => 'setQtyord',
        'stkqtyord' => 'setStkqtyord',
        'unit' => 'setUnit',
        'unitconv' => 'setUnitconv',
        'baseprice' => 'setBaseprice',
        'listprice' => 'setListprice',
        'priceonty' => 'setPriceonty',
        'user1' => 'setUser1',
        'user2' => 'setUser2',
        'user3' => 'setUser3',
        'user4' => 'setUser4',
        'user5' => 'setUser5',
        'errormess' => 'setErrormess',
        'price' => 'setPrice',
        'discamt' => 'setDiscamt',
        'disctype' => 'setDisctype',
        'extamt' => 'setExtamt',
        'extdiscount' => 'setExtdiscount',
        'netavail' => 'setNetavail',
        'vcspeccostty' => 'setVcspeccostty',
        'vcprccostper' => 'setVcprccostper',
        'vccsunperstk' => 'setVccsunperstk',
        'vcspecconv' => 'setVcspecconv',
        'vcspecrecno' => 'setVcspecrecno',
        'pdrecno' => 'setPdrecno',
        'promofl' => 'setPromofl',
        'priceorigcd' => 'setPriceorigcd',
        'cstpertext' => 'setCstpertext',
        'qtyonorder' => 'setQtyonorder',
        'duedt' => 'setDuedt',
        'freightamount' => 'setFreightamount',
        'freightdiscfl' => 'setFreightdiscfl',
        'qtybreakexistfl' => 'setQtybreakexistfl',
        'spiffamount' => 'setSpiffamount',
        'otherwhseinvfl' => 'setOtherwhseinvfl',
        'commission' => 'setCommission'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seqno' => 'getSeqno',
        'whse' => 'getWhse',
        'prod' => 'getProd',
        'qtyord' => 'getQtyord',
        'stkqtyord' => 'getStkqtyord',
        'unit' => 'getUnit',
        'unitconv' => 'getUnitconv',
        'baseprice' => 'getBaseprice',
        'listprice' => 'getListprice',
        'priceonty' => 'getPriceonty',
        'user1' => 'getUser1',
        'user2' => 'getUser2',
        'user3' => 'getUser3',
        'user4' => 'getUser4',
        'user5' => 'getUser5',
        'errormess' => 'getErrormess',
        'price' => 'getPrice',
        'discamt' => 'getDiscamt',
        'disctype' => 'getDisctype',
        'extamt' => 'getExtamt',
        'extdiscount' => 'getExtdiscount',
        'netavail' => 'getNetavail',
        'vcspeccostty' => 'getVcspeccostty',
        'vcprccostper' => 'getVcprccostper',
        'vccsunperstk' => 'getVccsunperstk',
        'vcspecconv' => 'getVcspecconv',
        'vcspecrecno' => 'getVcspecrecno',
        'pdrecno' => 'getPdrecno',
        'promofl' => 'getPromofl',
        'priceorigcd' => 'getPriceorigcd',
        'cstpertext' => 'getCstpertext',
        'qtyonorder' => 'getQtyonorder',
        'duedt' => 'getDuedt',
        'freightamount' => 'getFreightamount',
        'freightdiscfl' => 'getFreightdiscfl',
        'qtybreakexistfl' => 'getQtybreakexistfl',
        'spiffamount' => 'getSpiffamount',
        'otherwhseinvfl' => 'getOtherwhseinvfl',
        'commission' => 'getCommission'
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
        $this->container['seqno'] = isset($data['seqno']) ? $data['seqno'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['prod'] = isset($data['prod']) ? $data['prod'] : null;
        $this->container['qtyord'] = isset($data['qtyord']) ? $data['qtyord'] : null;
        $this->container['stkqtyord'] = isset($data['stkqtyord']) ? $data['stkqtyord'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['unitconv'] = isset($data['unitconv']) ? $data['unitconv'] : null;
        $this->container['baseprice'] = isset($data['baseprice']) ? $data['baseprice'] : null;
        $this->container['listprice'] = isset($data['listprice']) ? $data['listprice'] : null;
        $this->container['priceonty'] = isset($data['priceonty']) ? $data['priceonty'] : null;
        $this->container['user1'] = isset($data['user1']) ? $data['user1'] : null;
        $this->container['user2'] = isset($data['user2']) ? $data['user2'] : null;
        $this->container['user3'] = isset($data['user3']) ? $data['user3'] : null;
        $this->container['user4'] = isset($data['user4']) ? $data['user4'] : null;
        $this->container['user5'] = isset($data['user5']) ? $data['user5'] : null;
        $this->container['errormess'] = isset($data['errormess']) ? $data['errormess'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['discamt'] = isset($data['discamt']) ? $data['discamt'] : null;
        $this->container['disctype'] = isset($data['disctype']) ? $data['disctype'] : null;
        $this->container['extamt'] = isset($data['extamt']) ? $data['extamt'] : null;
        $this->container['extdiscount'] = isset($data['extdiscount']) ? $data['extdiscount'] : null;
        $this->container['netavail'] = isset($data['netavail']) ? $data['netavail'] : null;
        $this->container['vcspeccostty'] = isset($data['vcspeccostty']) ? $data['vcspeccostty'] : null;
        $this->container['vcprccostper'] = isset($data['vcprccostper']) ? $data['vcprccostper'] : null;
        $this->container['vccsunperstk'] = isset($data['vccsunperstk']) ? $data['vccsunperstk'] : null;
        $this->container['vcspecconv'] = isset($data['vcspecconv']) ? $data['vcspecconv'] : null;
        $this->container['vcspecrecno'] = isset($data['vcspecrecno']) ? $data['vcspecrecno'] : null;
        $this->container['pdrecno'] = isset($data['pdrecno']) ? $data['pdrecno'] : null;
        $this->container['promofl'] = isset($data['promofl']) ? $data['promofl'] : null;
        $this->container['priceorigcd'] = isset($data['priceorigcd']) ? $data['priceorigcd'] : null;
        $this->container['cstpertext'] = isset($data['cstpertext']) ? $data['cstpertext'] : null;
        $this->container['qtyonorder'] = isset($data['qtyonorder']) ? $data['qtyonorder'] : null;
        $this->container['duedt'] = isset($data['duedt']) ? $data['duedt'] : null;
        $this->container['freightamount'] = isset($data['freightamount']) ? $data['freightamount'] : null;
        $this->container['freightdiscfl'] = isset($data['freightdiscfl']) ? $data['freightdiscfl'] : null;
        $this->container['qtybreakexistfl'] = isset($data['qtybreakexistfl']) ? $data['qtybreakexistfl'] : null;
        $this->container['spiffamount'] = isset($data['spiffamount']) ? $data['spiffamount'] : null;
        $this->container['otherwhseinvfl'] = isset($data['otherwhseinvfl']) ? $data['otherwhseinvfl'] : null;
        $this->container['commission'] = isset($data['commission']) ? $data['commission'] : null;
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
     * Gets seqno
     *
     * @return int
     */
    public function getSeqno()
    {
        return $this->container['seqno'];
    }

    /**
     * Sets seqno
     *
     * @param int $seqno seqno
     *
     * @return $this
     */
    public function setSeqno($seqno)
    {
        $this->container['seqno'] = $seqno;

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
     * Gets errormess
     *
     * @return string
     */
    public function getErrormess()
    {
        return $this->container['errormess'];
    }

    /**
     * Sets errormess
     *
     * @param string $errormess errormess
     *
     * @return $this
     */
    public function setErrormess($errormess)
    {
        $this->container['errormess'] = $errormess;

        return $this;
    }

    /**
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets discamt
     *
     * @return double
     */
    public function getDiscamt()
    {
        return $this->container['discamt'];
    }

    /**
     * Sets discamt
     *
     * @param double $discamt discamt
     *
     * @return $this
     */
    public function setDiscamt($discamt)
    {
        $this->container['discamt'] = $discamt;

        return $this;
    }

    /**
     * Gets disctype
     *
     * @return string
     */
    public function getDisctype()
    {
        return $this->container['disctype'];
    }

    /**
     * Sets disctype
     *
     * @param string $disctype disctype
     *
     * @return $this
     */
    public function setDisctype($disctype)
    {
        $this->container['disctype'] = $disctype;

        return $this;
    }

    /**
     * Gets extamt
     *
     * @return double
     */
    public function getExtamt()
    {
        return $this->container['extamt'];
    }

    /**
     * Sets extamt
     *
     * @param double $extamt extamt
     *
     * @return $this
     */
    public function setExtamt($extamt)
    {
        $this->container['extamt'] = $extamt;

        return $this;
    }

    /**
     * Gets extdiscount
     *
     * @return double
     */
    public function getExtdiscount()
    {
        return $this->container['extdiscount'];
    }

    /**
     * Sets extdiscount
     *
     * @param double $extdiscount extdiscount
     *
     * @return $this
     */
    public function setExtdiscount($extdiscount)
    {
        $this->container['extdiscount'] = $extdiscount;

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
     * Gets vcspeccostty
     *
     * @return string
     */
    public function getVcspeccostty()
    {
        return $this->container['vcspeccostty'];
    }

    /**
     * Sets vcspeccostty
     *
     * @param string $vcspeccostty vcspeccostty
     *
     * @return $this
     */
    public function setVcspeccostty($vcspeccostty)
    {
        $this->container['vcspeccostty'] = $vcspeccostty;

        return $this;
    }

    /**
     * Gets vcprccostper
     *
     * @return string
     */
    public function getVcprccostper()
    {
        return $this->container['vcprccostper'];
    }

    /**
     * Sets vcprccostper
     *
     * @param string $vcprccostper vcprccostper
     *
     * @return $this
     */
    public function setVcprccostper($vcprccostper)
    {
        $this->container['vcprccostper'] = $vcprccostper;

        return $this;
    }

    /**
     * Gets vccsunperstk
     *
     * @return double
     */
    public function getVccsunperstk()
    {
        return $this->container['vccsunperstk'];
    }

    /**
     * Sets vccsunperstk
     *
     * @param double $vccsunperstk vccsunperstk
     *
     * @return $this
     */
    public function setVccsunperstk($vccsunperstk)
    {
        $this->container['vccsunperstk'] = $vccsunperstk;

        return $this;
    }

    /**
     * Gets vcspecconv
     *
     * @return int
     */
    public function getVcspecconv()
    {
        return $this->container['vcspecconv'];
    }

    /**
     * Sets vcspecconv
     *
     * @param int $vcspecconv vcspecconv
     *
     * @return $this
     */
    public function setVcspecconv($vcspecconv)
    {
        $this->container['vcspecconv'] = $vcspecconv;

        return $this;
    }

    /**
     * Gets vcspecrecno
     *
     * @return int
     */
    public function getVcspecrecno()
    {
        return $this->container['vcspecrecno'];
    }

    /**
     * Sets vcspecrecno
     *
     * @param int $vcspecrecno vcspecrecno
     *
     * @return $this
     */
    public function setVcspecrecno($vcspecrecno)
    {
        $this->container['vcspecrecno'] = $vcspecrecno;

        return $this;
    }

    /**
     * Gets pdrecno
     *
     * @return int
     */
    public function getPdrecno()
    {
        return $this->container['pdrecno'];
    }

    /**
     * Sets pdrecno
     *
     * @param int $pdrecno pdrecno
     *
     * @return $this
     */
    public function setPdrecno($pdrecno)
    {
        $this->container['pdrecno'] = $pdrecno;

        return $this;
    }

    /**
     * Gets promofl
     *
     * @return bool
     */
    public function getPromofl()
    {
        return $this->container['promofl'];
    }

    /**
     * Sets promofl
     *
     * @param bool $promofl promofl
     *
     * @return $this
     */
    public function setPromofl($promofl)
    {
        $this->container['promofl'] = $promofl;

        return $this;
    }

    /**
     * Gets priceorigcd
     *
     * @return string
     */
    public function getPriceorigcd()
    {
        return $this->container['priceorigcd'];
    }

    /**
     * Sets priceorigcd
     *
     * @param string $priceorigcd priceorigcd
     *
     * @return $this
     */
    public function setPriceorigcd($priceorigcd)
    {
        $this->container['priceorigcd'] = $priceorigcd;

        return $this;
    }

    /**
     * Gets cstpertext
     *
     * @return string
     */
    public function getCstpertext()
    {
        return $this->container['cstpertext'];
    }

    /**
     * Sets cstpertext
     *
     * @param string $cstpertext cstpertext
     *
     * @return $this
     */
    public function setCstpertext($cstpertext)
    {
        $this->container['cstpertext'] = $cstpertext;

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
     * Gets freightamount
     *
     * @return double
     */
    public function getFreightamount()
    {
        return $this->container['freightamount'];
    }

    /**
     * Sets freightamount
     *
     * @param double $freightamount freightamount
     *
     * @return $this
     */
    public function setFreightamount($freightamount)
    {
        $this->container['freightamount'] = $freightamount;

        return $this;
    }

    /**
     * Gets freightdiscfl
     *
     * @return bool
     */
    public function getFreightdiscfl()
    {
        return $this->container['freightdiscfl'];
    }

    /**
     * Sets freightdiscfl
     *
     * @param bool $freightdiscfl freightdiscfl
     *
     * @return $this
     */
    public function setFreightdiscfl($freightdiscfl)
    {
        $this->container['freightdiscfl'] = $freightdiscfl;

        return $this;
    }

    /**
     * Gets qtybreakexistfl
     *
     * @return bool
     */
    public function getQtybreakexistfl()
    {
        return $this->container['qtybreakexistfl'];
    }

    /**
     * Sets qtybreakexistfl
     *
     * @param bool $qtybreakexistfl qtybreakexistfl
     *
     * @return $this
     */
    public function setQtybreakexistfl($qtybreakexistfl)
    {
        $this->container['qtybreakexistfl'] = $qtybreakexistfl;

        return $this;
    }

    /**
     * Gets spiffamount
     *
     * @return double
     */
    public function getSpiffamount()
    {
        return $this->container['spiffamount'];
    }

    /**
     * Sets spiffamount
     *
     * @param double $spiffamount spiffamount
     *
     * @return $this
     */
    public function setSpiffamount($spiffamount)
    {
        $this->container['spiffamount'] = $spiffamount;

        return $this;
    }

    /**
     * Gets otherwhseinvfl
     *
     * @return bool
     */
    public function getOtherwhseinvfl()
    {
        return $this->container['otherwhseinvfl'];
    }

    /**
     * Sets otherwhseinvfl
     *
     * @param bool $otherwhseinvfl otherwhseinvfl
     *
     * @return $this
     */
    public function setOtherwhseinvfl($otherwhseinvfl)
    {
        $this->container['otherwhseinvfl'] = $otherwhseinvfl;

        return $this;
    }

    /**
     * Gets commission
     *
     * @return double
     */
    public function getCommission()
    {
        return $this->container['commission'];
    }

    /**
     * Sets commission
     *
     * @param double $commission commission
     *
     * @return $this
     */
    public function setCommission($commission)
    {
        $this->container['commission'] = $commission;

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


