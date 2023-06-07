<?php
/**
 * TPolineitem
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
 * TPolineitem Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TPolineitem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-polineitem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'botype' => 'string',
        'commentfl' => 'bool',
        'contno' => 'string',
        'cubes' => 'double',
        'duedt' => '\DateTime',
        'enterdt' => '\DateTime',
        'expshipdt' => '\DateTime',
        'leadoverty' => 'string',
        'lineno' => 'int',
        'netamt' => 'double',
        'netrcv' => 'double',
        'nonstockty' => 'string',
        'price' => 'double',
        'printfl' => 'bool',
        'prodcat' => 'string',
        'prodcatdesc' => 'string',
        'proddesc' => 'string',
        'proddesc2' => 'string',
        'prodline' => 'string',
        'qtyord' => 'double',
        'qtyrcv' => 'double',
        'qtyunavail' => 'double',
        'rcvcost' => 'double',
        'reasunavty' => 'string',
        'reqprod' => 'string',
        'reqshipdt' => '\DateTime',
        'shipprod' => 'string',
        'statustype' => 'string',
        'stkqtyord' => 'double',
        'stkqtyrcv' => 'double',
        'tallyfl' => 'bool',
        'trackno' => 'int',
        'unit' => 'string',
        'unitconv' => 'double',
        'vafakeprodfl' => 'bool',
        'weight' => 'double',
        'sort_fld' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'botype' => null,
        'commentfl' => null,
        'contno' => null,
        'cubes' => 'double',
        'duedt' => 'date',
        'enterdt' => 'date',
        'expshipdt' => 'date',
        'leadoverty' => null,
        'lineno' => 'int64',
        'netamt' => 'double',
        'netrcv' => 'double',
        'nonstockty' => null,
        'price' => 'double',
        'printfl' => null,
        'prodcat' => null,
        'prodcatdesc' => null,
        'proddesc' => null,
        'proddesc2' => null,
        'prodline' => null,
        'qtyord' => 'double',
        'qtyrcv' => 'double',
        'qtyunavail' => 'double',
        'rcvcost' => 'double',
        'reasunavty' => null,
        'reqprod' => null,
        'reqshipdt' => 'date',
        'shipprod' => null,
        'statustype' => null,
        'stkqtyord' => 'double',
        'stkqtyrcv' => 'double',
        'tallyfl' => null,
        'trackno' => 'int64',
        'unit' => null,
        'unitconv' => 'double',
        'vafakeprodfl' => null,
        'weight' => 'double',
        'sort_fld' => null
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
        'botype' => 'botype',
        'commentfl' => 'commentfl',
        'contno' => 'contno',
        'cubes' => 'cubes',
        'duedt' => 'duedt',
        'enterdt' => 'enterdt',
        'expshipdt' => 'expshipdt',
        'leadoverty' => 'leadoverty',
        'lineno' => 'lineno',
        'netamt' => 'netamt',
        'netrcv' => 'netrcv',
        'nonstockty' => 'nonstockty',
        'price' => 'price',
        'printfl' => 'printfl',
        'prodcat' => 'prodcat',
        'prodcatdesc' => 'prodcatdesc',
        'proddesc' => 'proddesc',
        'proddesc2' => 'proddesc2',
        'prodline' => 'prodline',
        'qtyord' => 'qtyord',
        'qtyrcv' => 'qtyrcv',
        'qtyunavail' => 'qtyunavail',
        'rcvcost' => 'rcvcost',
        'reasunavty' => 'reasunavty',
        'reqprod' => 'reqprod',
        'reqshipdt' => 'reqshipdt',
        'shipprod' => 'shipprod',
        'statustype' => 'statustype',
        'stkqtyord' => 'stkqtyord',
        'stkqtyrcv' => 'stkqtyrcv',
        'tallyfl' => 'tallyfl',
        'trackno' => 'trackno',
        'unit' => 'unit',
        'unitconv' => 'unitconv',
        'vafakeprodfl' => 'vafakeprodfl',
        'weight' => 'weight',
        'sort_fld' => 'sortFld'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'botype' => 'setBotype',
        'commentfl' => 'setCommentfl',
        'contno' => 'setContno',
        'cubes' => 'setCubes',
        'duedt' => 'setDuedt',
        'enterdt' => 'setEnterdt',
        'expshipdt' => 'setExpshipdt',
        'leadoverty' => 'setLeadoverty',
        'lineno' => 'setLineno',
        'netamt' => 'setNetamt',
        'netrcv' => 'setNetrcv',
        'nonstockty' => 'setNonstockty',
        'price' => 'setPrice',
        'printfl' => 'setPrintfl',
        'prodcat' => 'setProdcat',
        'prodcatdesc' => 'setProdcatdesc',
        'proddesc' => 'setProddesc',
        'proddesc2' => 'setProddesc2',
        'prodline' => 'setProdline',
        'qtyord' => 'setQtyord',
        'qtyrcv' => 'setQtyrcv',
        'qtyunavail' => 'setQtyunavail',
        'rcvcost' => 'setRcvcost',
        'reasunavty' => 'setReasunavty',
        'reqprod' => 'setReqprod',
        'reqshipdt' => 'setReqshipdt',
        'shipprod' => 'setShipprod',
        'statustype' => 'setStatustype',
        'stkqtyord' => 'setStkqtyord',
        'stkqtyrcv' => 'setStkqtyrcv',
        'tallyfl' => 'setTallyfl',
        'trackno' => 'setTrackno',
        'unit' => 'setUnit',
        'unitconv' => 'setUnitconv',
        'vafakeprodfl' => 'setVafakeprodfl',
        'weight' => 'setWeight',
        'sort_fld' => 'setSortFld'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'botype' => 'getBotype',
        'commentfl' => 'getCommentfl',
        'contno' => 'getContno',
        'cubes' => 'getCubes',
        'duedt' => 'getDuedt',
        'enterdt' => 'getEnterdt',
        'expshipdt' => 'getExpshipdt',
        'leadoverty' => 'getLeadoverty',
        'lineno' => 'getLineno',
        'netamt' => 'getNetamt',
        'netrcv' => 'getNetrcv',
        'nonstockty' => 'getNonstockty',
        'price' => 'getPrice',
        'printfl' => 'getPrintfl',
        'prodcat' => 'getProdcat',
        'prodcatdesc' => 'getProdcatdesc',
        'proddesc' => 'getProddesc',
        'proddesc2' => 'getProddesc2',
        'prodline' => 'getProdline',
        'qtyord' => 'getQtyord',
        'qtyrcv' => 'getQtyrcv',
        'qtyunavail' => 'getQtyunavail',
        'rcvcost' => 'getRcvcost',
        'reasunavty' => 'getReasunavty',
        'reqprod' => 'getReqprod',
        'reqshipdt' => 'getReqshipdt',
        'shipprod' => 'getShipprod',
        'statustype' => 'getStatustype',
        'stkqtyord' => 'getStkqtyord',
        'stkqtyrcv' => 'getStkqtyrcv',
        'tallyfl' => 'getTallyfl',
        'trackno' => 'getTrackno',
        'unit' => 'getUnit',
        'unitconv' => 'getUnitconv',
        'vafakeprodfl' => 'getVafakeprodfl',
        'weight' => 'getWeight',
        'sort_fld' => 'getSortFld'
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
        $this->container['botype'] = isset($data['botype']) ? $data['botype'] : null;
        $this->container['commentfl'] = isset($data['commentfl']) ? $data['commentfl'] : null;
        $this->container['contno'] = isset($data['contno']) ? $data['contno'] : null;
        $this->container['cubes'] = isset($data['cubes']) ? $data['cubes'] : null;
        $this->container['duedt'] = isset($data['duedt']) ? $data['duedt'] : null;
        $this->container['enterdt'] = isset($data['enterdt']) ? $data['enterdt'] : null;
        $this->container['expshipdt'] = isset($data['expshipdt']) ? $data['expshipdt'] : null;
        $this->container['leadoverty'] = isset($data['leadoverty']) ? $data['leadoverty'] : null;
        $this->container['lineno'] = isset($data['lineno']) ? $data['lineno'] : null;
        $this->container['netamt'] = isset($data['netamt']) ? $data['netamt'] : null;
        $this->container['netrcv'] = isset($data['netrcv']) ? $data['netrcv'] : null;
        $this->container['nonstockty'] = isset($data['nonstockty']) ? $data['nonstockty'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['printfl'] = isset($data['printfl']) ? $data['printfl'] : null;
        $this->container['prodcat'] = isset($data['prodcat']) ? $data['prodcat'] : null;
        $this->container['prodcatdesc'] = isset($data['prodcatdesc']) ? $data['prodcatdesc'] : null;
        $this->container['proddesc'] = isset($data['proddesc']) ? $data['proddesc'] : null;
        $this->container['proddesc2'] = isset($data['proddesc2']) ? $data['proddesc2'] : null;
        $this->container['prodline'] = isset($data['prodline']) ? $data['prodline'] : null;
        $this->container['qtyord'] = isset($data['qtyord']) ? $data['qtyord'] : null;
        $this->container['qtyrcv'] = isset($data['qtyrcv']) ? $data['qtyrcv'] : null;
        $this->container['qtyunavail'] = isset($data['qtyunavail']) ? $data['qtyunavail'] : null;
        $this->container['rcvcost'] = isset($data['rcvcost']) ? $data['rcvcost'] : null;
        $this->container['reasunavty'] = isset($data['reasunavty']) ? $data['reasunavty'] : null;
        $this->container['reqprod'] = isset($data['reqprod']) ? $data['reqprod'] : null;
        $this->container['reqshipdt'] = isset($data['reqshipdt']) ? $data['reqshipdt'] : null;
        $this->container['shipprod'] = isset($data['shipprod']) ? $data['shipprod'] : null;
        $this->container['statustype'] = isset($data['statustype']) ? $data['statustype'] : null;
        $this->container['stkqtyord'] = isset($data['stkqtyord']) ? $data['stkqtyord'] : null;
        $this->container['stkqtyrcv'] = isset($data['stkqtyrcv']) ? $data['stkqtyrcv'] : null;
        $this->container['tallyfl'] = isset($data['tallyfl']) ? $data['tallyfl'] : null;
        $this->container['trackno'] = isset($data['trackno']) ? $data['trackno'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['unitconv'] = isset($data['unitconv']) ? $data['unitconv'] : null;
        $this->container['vafakeprodfl'] = isset($data['vafakeprodfl']) ? $data['vafakeprodfl'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['sort_fld'] = isset($data['sort_fld']) ? $data['sort_fld'] : null;
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
     * Gets botype
     *
     * @return string
     */
    public function getBotype()
    {
        return $this->container['botype'];
    }

    /**
     * Sets botype
     *
     * @param string $botype botype
     *
     * @return $this
     */
    public function setBotype($botype)
    {
        $this->container['botype'] = $botype;

        return $this;
    }

    /**
     * Gets commentfl
     *
     * @return bool
     */
    public function getCommentfl()
    {
        return $this->container['commentfl'];
    }

    /**
     * Sets commentfl
     *
     * @param bool $commentfl commentfl
     *
     * @return $this
     */
    public function setCommentfl($commentfl)
    {
        $this->container['commentfl'] = $commentfl;

        return $this;
    }

    /**
     * Gets contno
     *
     * @return string
     */
    public function getContno()
    {
        return $this->container['contno'];
    }

    /**
     * Sets contno
     *
     * @param string $contno contno
     *
     * @return $this
     */
    public function setContno($contno)
    {
        $this->container['contno'] = $contno;

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
     * Gets expshipdt
     *
     * @return \DateTime
     */
    public function getExpshipdt()
    {
        return $this->container['expshipdt'];
    }

    /**
     * Sets expshipdt
     *
     * @param \DateTime $expshipdt expshipdt
     *
     * @return $this
     */
    public function setExpshipdt($expshipdt)
    {
        $this->container['expshipdt'] = $expshipdt;

        return $this;
    }

    /**
     * Gets leadoverty
     *
     * @return string
     */
    public function getLeadoverty()
    {
        return $this->container['leadoverty'];
    }

    /**
     * Sets leadoverty
     *
     * @param string $leadoverty leadoverty
     *
     * @return $this
     */
    public function setLeadoverty($leadoverty)
    {
        $this->container['leadoverty'] = $leadoverty;

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
     * Gets printfl
     *
     * @return bool
     */
    public function getPrintfl()
    {
        return $this->container['printfl'];
    }

    /**
     * Sets printfl
     *
     * @param bool $printfl printfl
     *
     * @return $this
     */
    public function setPrintfl($printfl)
    {
        $this->container['printfl'] = $printfl;

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
     * Gets prodcatdesc
     *
     * @return string
     */
    public function getProdcatdesc()
    {
        return $this->container['prodcatdesc'];
    }

    /**
     * Sets prodcatdesc
     *
     * @param string $prodcatdesc prodcatdesc
     *
     * @return $this
     */
    public function setProdcatdesc($prodcatdesc)
    {
        $this->container['prodcatdesc'] = $prodcatdesc;

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
     * Gets qtyunavail
     *
     * @return double
     */
    public function getQtyunavail()
    {
        return $this->container['qtyunavail'];
    }

    /**
     * Sets qtyunavail
     *
     * @param double $qtyunavail qtyunavail
     *
     * @return $this
     */
    public function setQtyunavail($qtyunavail)
    {
        $this->container['qtyunavail'] = $qtyunavail;

        return $this;
    }

    /**
     * Gets rcvcost
     *
     * @return double
     */
    public function getRcvcost()
    {
        return $this->container['rcvcost'];
    }

    /**
     * Sets rcvcost
     *
     * @param double $rcvcost rcvcost
     *
     * @return $this
     */
    public function setRcvcost($rcvcost)
    {
        $this->container['rcvcost'] = $rcvcost;

        return $this;
    }

    /**
     * Gets reasunavty
     *
     * @return string
     */
    public function getReasunavty()
    {
        return $this->container['reasunavty'];
    }

    /**
     * Sets reasunavty
     *
     * @param string $reasunavty reasunavty
     *
     * @return $this
     */
    public function setReasunavty($reasunavty)
    {
        $this->container['reasunavty'] = $reasunavty;

        return $this;
    }

    /**
     * Gets reqprod
     *
     * @return string
     */
    public function getReqprod()
    {
        return $this->container['reqprod'];
    }

    /**
     * Sets reqprod
     *
     * @param string $reqprod reqprod
     *
     * @return $this
     */
    public function setReqprod($reqprod)
    {
        $this->container['reqprod'] = $reqprod;

        return $this;
    }

    /**
     * Gets reqshipdt
     *
     * @return \DateTime
     */
    public function getReqshipdt()
    {
        return $this->container['reqshipdt'];
    }

    /**
     * Sets reqshipdt
     *
     * @param \DateTime $reqshipdt reqshipdt
     *
     * @return $this
     */
    public function setReqshipdt($reqshipdt)
    {
        $this->container['reqshipdt'] = $reqshipdt;

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
     * Gets tallyfl
     *
     * @return bool
     */
    public function getTallyfl()
    {
        return $this->container['tallyfl'];
    }

    /**
     * Sets tallyfl
     *
     * @param bool $tallyfl tallyfl
     *
     * @return $this
     */
    public function setTallyfl($tallyfl)
    {
        $this->container['tallyfl'] = $tallyfl;

        return $this;
    }

    /**
     * Gets trackno
     *
     * @return int
     */
    public function getTrackno()
    {
        return $this->container['trackno'];
    }

    /**
     * Sets trackno
     *
     * @param int $trackno trackno
     *
     * @return $this
     */
    public function setTrackno($trackno)
    {
        $this->container['trackno'] = $trackno;

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
     * Gets vafakeprodfl
     *
     * @return bool
     */
    public function getVafakeprodfl()
    {
        return $this->container['vafakeprodfl'];
    }

    /**
     * Sets vafakeprodfl
     *
     * @param bool $vafakeprodfl vafakeprodfl
     *
     * @return $this
     */
    public function setVafakeprodfl($vafakeprodfl)
    {
        $this->container['vafakeprodfl'] = $vafakeprodfl;

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

