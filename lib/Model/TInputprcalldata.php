<?php
/**
 * TInputprcalldata
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
 * TInputprcalldata Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TInputprcalldata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-inputprcalldata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'seqno' => 'int',
        'actiontype' => 'string',
        'doctype' => 'string',
        'levelcd' => 'string',
        'whse' => 'string',
        'region' => 'string',
        'divnogroup' => 'string',
        'startdt' => '\DateTime',
        'custno' => 'double',
        'shipto' => 'string',
        'prod' => 'string',
        'custtype' => 'string',
        'prodcat' => 'string',
        'prodline' => 'string',
        'prodprcty' => 'string',
        'rebatety' => 'string',
        'rebsubty' => 'string',
        'units' => 'string',
        'vendno' => 'double',
        'pdrecno' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'seqno' => 'int64',
        'actiontype' => null,
        'doctype' => null,
        'levelcd' => null,
        'whse' => null,
        'region' => null,
        'divnogroup' => null,
        'startdt' => 'date',
        'custno' => 'double',
        'shipto' => null,
        'prod' => null,
        'custtype' => null,
        'prodcat' => null,
        'prodline' => null,
        'prodprcty' => null,
        'rebatety' => null,
        'rebsubty' => null,
        'units' => null,
        'vendno' => 'double',
        'pdrecno' => 'int64'
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
        'actiontype' => 'actiontype',
        'doctype' => 'doctype',
        'levelcd' => 'levelcd',
        'whse' => 'whse',
        'region' => 'region',
        'divnogroup' => 'divnogroup',
        'startdt' => 'startdt',
        'custno' => 'custno',
        'shipto' => 'shipto',
        'prod' => 'prod',
        'custtype' => 'custtype',
        'prodcat' => 'prodcat',
        'prodline' => 'prodline',
        'prodprcty' => 'prodprcty',
        'rebatety' => 'rebatety',
        'rebsubty' => 'rebsubty',
        'units' => 'units',
        'vendno' => 'vendno',
        'pdrecno' => 'pdrecno'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seqno' => 'setSeqno',
        'actiontype' => 'setActiontype',
        'doctype' => 'setDoctype',
        'levelcd' => 'setLevelcd',
        'whse' => 'setWhse',
        'region' => 'setRegion',
        'divnogroup' => 'setDivnogroup',
        'startdt' => 'setStartdt',
        'custno' => 'setCustno',
        'shipto' => 'setShipto',
        'prod' => 'setProd',
        'custtype' => 'setCusttype',
        'prodcat' => 'setProdcat',
        'prodline' => 'setProdline',
        'prodprcty' => 'setProdprcty',
        'rebatety' => 'setRebatety',
        'rebsubty' => 'setRebsubty',
        'units' => 'setUnits',
        'vendno' => 'setVendno',
        'pdrecno' => 'setPdrecno'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seqno' => 'getSeqno',
        'actiontype' => 'getActiontype',
        'doctype' => 'getDoctype',
        'levelcd' => 'getLevelcd',
        'whse' => 'getWhse',
        'region' => 'getRegion',
        'divnogroup' => 'getDivnogroup',
        'startdt' => 'getStartdt',
        'custno' => 'getCustno',
        'shipto' => 'getShipto',
        'prod' => 'getProd',
        'custtype' => 'getCusttype',
        'prodcat' => 'getProdcat',
        'prodline' => 'getProdline',
        'prodprcty' => 'getProdprcty',
        'rebatety' => 'getRebatety',
        'rebsubty' => 'getRebsubty',
        'units' => 'getUnits',
        'vendno' => 'getVendno',
        'pdrecno' => 'getPdrecno'
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
        $this->container['actiontype'] = isset($data['actiontype']) ? $data['actiontype'] : null;
        $this->container['doctype'] = isset($data['doctype']) ? $data['doctype'] : null;
        $this->container['levelcd'] = isset($data['levelcd']) ? $data['levelcd'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['divnogroup'] = isset($data['divnogroup']) ? $data['divnogroup'] : null;
        $this->container['startdt'] = isset($data['startdt']) ? $data['startdt'] : null;
        $this->container['custno'] = isset($data['custno']) ? $data['custno'] : null;
        $this->container['shipto'] = isset($data['shipto']) ? $data['shipto'] : null;
        $this->container['prod'] = isset($data['prod']) ? $data['prod'] : null;
        $this->container['custtype'] = isset($data['custtype']) ? $data['custtype'] : null;
        $this->container['prodcat'] = isset($data['prodcat']) ? $data['prodcat'] : null;
        $this->container['prodline'] = isset($data['prodline']) ? $data['prodline'] : null;
        $this->container['prodprcty'] = isset($data['prodprcty']) ? $data['prodprcty'] : null;
        $this->container['rebatety'] = isset($data['rebatety']) ? $data['rebatety'] : null;
        $this->container['rebsubty'] = isset($data['rebsubty']) ? $data['rebsubty'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
        $this->container['vendno'] = isset($data['vendno']) ? $data['vendno'] : null;
        $this->container['pdrecno'] = isset($data['pdrecno']) ? $data['pdrecno'] : null;
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
     * Gets actiontype
     *
     * @return string
     */
    public function getActiontype()
    {
        return $this->container['actiontype'];
    }

    /**
     * Sets actiontype
     *
     * @param string $actiontype actiontype
     *
     * @return $this
     */
    public function setActiontype($actiontype)
    {
        $this->container['actiontype'] = $actiontype;

        return $this;
    }

    /**
     * Gets doctype
     *
     * @return string
     */
    public function getDoctype()
    {
        return $this->container['doctype'];
    }

    /**
     * Sets doctype
     *
     * @param string $doctype doctype
     *
     * @return $this
     */
    public function setDoctype($doctype)
    {
        $this->container['doctype'] = $doctype;

        return $this;
    }

    /**
     * Gets levelcd
     *
     * @return string
     */
    public function getLevelcd()
    {
        return $this->container['levelcd'];
    }

    /**
     * Sets levelcd
     *
     * @param string $levelcd levelcd
     *
     * @return $this
     */
    public function setLevelcd($levelcd)
    {
        $this->container['levelcd'] = $levelcd;

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
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets divnogroup
     *
     * @return string
     */
    public function getDivnogroup()
    {
        return $this->container['divnogroup'];
    }

    /**
     * Sets divnogroup
     *
     * @param string $divnogroup divnogroup
     *
     * @return $this
     */
    public function setDivnogroup($divnogroup)
    {
        $this->container['divnogroup'] = $divnogroup;

        return $this;
    }

    /**
     * Gets startdt
     *
     * @return \DateTime
     */
    public function getStartdt()
    {
        return $this->container['startdt'];
    }

    /**
     * Sets startdt
     *
     * @param \DateTime $startdt startdt
     *
     * @return $this
     */
    public function setStartdt($startdt)
    {
        $this->container['startdt'] = $startdt;

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
     * Gets custtype
     *
     * @return string
     */
    public function getCusttype()
    {
        return $this->container['custtype'];
    }

    /**
     * Sets custtype
     *
     * @param string $custtype custtype
     *
     * @return $this
     */
    public function setCusttype($custtype)
    {
        $this->container['custtype'] = $custtype;

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
     * Gets prodprcty
     *
     * @return string
     */
    public function getProdprcty()
    {
        return $this->container['prodprcty'];
    }

    /**
     * Sets prodprcty
     *
     * @param string $prodprcty prodprcty
     *
     * @return $this
     */
    public function setProdprcty($prodprcty)
    {
        $this->container['prodprcty'] = $prodprcty;

        return $this;
    }

    /**
     * Gets rebatety
     *
     * @return string
     */
    public function getRebatety()
    {
        return $this->container['rebatety'];
    }

    /**
     * Sets rebatety
     *
     * @param string $rebatety rebatety
     *
     * @return $this
     */
    public function setRebatety($rebatety)
    {
        $this->container['rebatety'] = $rebatety;

        return $this;
    }

    /**
     * Gets rebsubty
     *
     * @return string
     */
    public function getRebsubty()
    {
        return $this->container['rebsubty'];
    }

    /**
     * Sets rebsubty
     *
     * @param string $rebsubty rebsubty
     *
     * @return $this
     */
    public function setRebsubty($rebsubty)
    {
        $this->container['rebsubty'] = $rebsubty;

        return $this;
    }

    /**
     * Gets units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param string $units units
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

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


