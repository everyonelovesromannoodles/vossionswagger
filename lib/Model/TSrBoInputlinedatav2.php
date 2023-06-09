<?php
/**
 * TSrBoInputlinedatav2
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
 * TSrBoInputlinedatav2 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TSrBoInputlinedatav2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-sr-bo-inputlinedatav2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'lineno' => 'int',
        'prod' => 'string',
        'linechgtype' => 'string',
        'specnstype' => 'string',
        'qtyord' => 'double',
        'qtyship' => 'double',
        'botype' => 'string',
        'vendno' => 'double',
        'ordertype' => 'string',
        'orderaltno' => 'int',
        'lostbustyl' => 'string',
        'promisedt' => '\DateTime',
        'prodcost' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'lineno' => 'int64',
        'prod' => null,
        'linechgtype' => null,
        'specnstype' => null,
        'qtyord' => 'double',
        'qtyship' => 'double',
        'botype' => null,
        'vendno' => 'double',
        'ordertype' => null,
        'orderaltno' => 'int64',
        'lostbustyl' => null,
        'promisedt' => 'date',
        'prodcost' => 'double'
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
        'lineno' => 'lineno',
        'prod' => 'prod',
        'linechgtype' => 'linechgtype',
        'specnstype' => 'specnstype',
        'qtyord' => 'qtyord',
        'qtyship' => 'qtyship',
        'botype' => 'botype',
        'vendno' => 'vendno',
        'ordertype' => 'ordertype',
        'orderaltno' => 'orderaltno',
        'lostbustyl' => 'lostbustyl',
        'promisedt' => 'promisedt',
        'prodcost' => 'prodcost'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'lineno' => 'setLineno',
        'prod' => 'setProd',
        'linechgtype' => 'setLinechgtype',
        'specnstype' => 'setSpecnstype',
        'qtyord' => 'setQtyord',
        'qtyship' => 'setQtyship',
        'botype' => 'setBotype',
        'vendno' => 'setVendno',
        'ordertype' => 'setOrdertype',
        'orderaltno' => 'setOrderaltno',
        'lostbustyl' => 'setLostbustyl',
        'promisedt' => 'setPromisedt',
        'prodcost' => 'setProdcost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'lineno' => 'getLineno',
        'prod' => 'getProd',
        'linechgtype' => 'getLinechgtype',
        'specnstype' => 'getSpecnstype',
        'qtyord' => 'getQtyord',
        'qtyship' => 'getQtyship',
        'botype' => 'getBotype',
        'vendno' => 'getVendno',
        'ordertype' => 'getOrdertype',
        'orderaltno' => 'getOrderaltno',
        'lostbustyl' => 'getLostbustyl',
        'promisedt' => 'getPromisedt',
        'prodcost' => 'getProdcost'
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
        $this->container['lineno'] = isset($data['lineno']) ? $data['lineno'] : null;
        $this->container['prod'] = isset($data['prod']) ? $data['prod'] : null;
        $this->container['linechgtype'] = isset($data['linechgtype']) ? $data['linechgtype'] : null;
        $this->container['specnstype'] = isset($data['specnstype']) ? $data['specnstype'] : null;
        $this->container['qtyord'] = isset($data['qtyord']) ? $data['qtyord'] : null;
        $this->container['qtyship'] = isset($data['qtyship']) ? $data['qtyship'] : null;
        $this->container['botype'] = isset($data['botype']) ? $data['botype'] : null;
        $this->container['vendno'] = isset($data['vendno']) ? $data['vendno'] : null;
        $this->container['ordertype'] = isset($data['ordertype']) ? $data['ordertype'] : null;
        $this->container['orderaltno'] = isset($data['orderaltno']) ? $data['orderaltno'] : null;
        $this->container['lostbustyl'] = isset($data['lostbustyl']) ? $data['lostbustyl'] : null;
        $this->container['promisedt'] = isset($data['promisedt']) ? $data['promisedt'] : null;
        $this->container['prodcost'] = isset($data['prodcost']) ? $data['prodcost'] : null;
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
     * Gets linechgtype
     *
     * @return string
     */
    public function getLinechgtype()
    {
        return $this->container['linechgtype'];
    }

    /**
     * Sets linechgtype
     *
     * @param string $linechgtype linechgtype
     *
     * @return $this
     */
    public function setLinechgtype($linechgtype)
    {
        $this->container['linechgtype'] = $linechgtype;

        return $this;
    }

    /**
     * Gets specnstype
     *
     * @return string
     */
    public function getSpecnstype()
    {
        return $this->container['specnstype'];
    }

    /**
     * Sets specnstype
     *
     * @param string $specnstype specnstype
     *
     * @return $this
     */
    public function setSpecnstype($specnstype)
    {
        $this->container['specnstype'] = $specnstype;

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
     * Gets lostbustyl
     *
     * @return string
     */
    public function getLostbustyl()
    {
        return $this->container['lostbustyl'];
    }

    /**
     * Sets lostbustyl
     *
     * @param string $lostbustyl lostbustyl
     *
     * @return $this
     */
    public function setLostbustyl($lostbustyl)
    {
        $this->container['lostbustyl'] = $lostbustyl;

        return $this;
    }

    /**
     * Gets promisedt
     *
     * @return \DateTime
     */
    public function getPromisedt()
    {
        return $this->container['promisedt'];
    }

    /**
     * Sets promisedt
     *
     * @param \DateTime $promisedt promisedt
     *
     * @return $this
     */
    public function setPromisedt($promisedt)
    {
        $this->container['promisedt'] = $promisedt;

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


