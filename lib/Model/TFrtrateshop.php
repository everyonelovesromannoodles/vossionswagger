<?php
/**
 * TFrtrateshop
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
 * TFrtrateshop Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TFrtrateshop implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-frtrateshop';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cono' => 'int',
        'whse' => 'string',
        'shipvia' => 'string',
        'shipviadesc' => 'string',
        'zone' => 'string',
        'overmaxrate' => 'double',
        'orderwghtlim' => 'double',
        'shipwghtlim' => 'double',
        'orderwght' => 'double',
        'shipwght' => 'double',
        'orderfrt' => 'double',
        'shipfrt' => 'double',
        'ordfrtextra1' => 'double',
        'ordfrtextra2' => 'double',
        'shipfrtextra1' => 'double',
        'shipfrtextra2' => 'double',
        'xxc1' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cono' => 'int64',
        'whse' => null,
        'shipvia' => null,
        'shipviadesc' => null,
        'zone' => null,
        'overmaxrate' => 'double',
        'orderwghtlim' => 'double',
        'shipwghtlim' => 'double',
        'orderwght' => 'double',
        'shipwght' => 'double',
        'orderfrt' => 'double',
        'shipfrt' => 'double',
        'ordfrtextra1' => 'double',
        'ordfrtextra2' => 'double',
        'shipfrtextra1' => 'double',
        'shipfrtextra2' => 'double',
        'xxc1' => null
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
        'cono' => 'cono',
        'whse' => 'whse',
        'shipvia' => 'shipvia',
        'shipviadesc' => 'shipviadesc',
        'zone' => 'zone',
        'overmaxrate' => 'overmaxrate',
        'orderwghtlim' => 'orderwghtlim',
        'shipwghtlim' => 'shipwghtlim',
        'orderwght' => 'orderwght',
        'shipwght' => 'shipwght',
        'orderfrt' => 'orderfrt',
        'shipfrt' => 'shipfrt',
        'ordfrtextra1' => 'ordfrtextra1',
        'ordfrtextra2' => 'ordfrtextra2',
        'shipfrtextra1' => 'shipfrtextra1',
        'shipfrtextra2' => 'shipfrtextra2',
        'xxc1' => 'xxc1'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cono' => 'setCono',
        'whse' => 'setWhse',
        'shipvia' => 'setShipvia',
        'shipviadesc' => 'setShipviadesc',
        'zone' => 'setZone',
        'overmaxrate' => 'setOvermaxrate',
        'orderwghtlim' => 'setOrderwghtlim',
        'shipwghtlim' => 'setShipwghtlim',
        'orderwght' => 'setOrderwght',
        'shipwght' => 'setShipwght',
        'orderfrt' => 'setOrderfrt',
        'shipfrt' => 'setShipfrt',
        'ordfrtextra1' => 'setOrdfrtextra1',
        'ordfrtextra2' => 'setOrdfrtextra2',
        'shipfrtextra1' => 'setShipfrtextra1',
        'shipfrtextra2' => 'setShipfrtextra2',
        'xxc1' => 'setXxc1'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cono' => 'getCono',
        'whse' => 'getWhse',
        'shipvia' => 'getShipvia',
        'shipviadesc' => 'getShipviadesc',
        'zone' => 'getZone',
        'overmaxrate' => 'getOvermaxrate',
        'orderwghtlim' => 'getOrderwghtlim',
        'shipwghtlim' => 'getShipwghtlim',
        'orderwght' => 'getOrderwght',
        'shipwght' => 'getShipwght',
        'orderfrt' => 'getOrderfrt',
        'shipfrt' => 'getShipfrt',
        'ordfrtextra1' => 'getOrdfrtextra1',
        'ordfrtextra2' => 'getOrdfrtextra2',
        'shipfrtextra1' => 'getShipfrtextra1',
        'shipfrtextra2' => 'getShipfrtextra2',
        'xxc1' => 'getXxc1'
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
        $this->container['cono'] = isset($data['cono']) ? $data['cono'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['shipvia'] = isset($data['shipvia']) ? $data['shipvia'] : null;
        $this->container['shipviadesc'] = isset($data['shipviadesc']) ? $data['shipviadesc'] : null;
        $this->container['zone'] = isset($data['zone']) ? $data['zone'] : null;
        $this->container['overmaxrate'] = isset($data['overmaxrate']) ? $data['overmaxrate'] : null;
        $this->container['orderwghtlim'] = isset($data['orderwghtlim']) ? $data['orderwghtlim'] : null;
        $this->container['shipwghtlim'] = isset($data['shipwghtlim']) ? $data['shipwghtlim'] : null;
        $this->container['orderwght'] = isset($data['orderwght']) ? $data['orderwght'] : null;
        $this->container['shipwght'] = isset($data['shipwght']) ? $data['shipwght'] : null;
        $this->container['orderfrt'] = isset($data['orderfrt']) ? $data['orderfrt'] : null;
        $this->container['shipfrt'] = isset($data['shipfrt']) ? $data['shipfrt'] : null;
        $this->container['ordfrtextra1'] = isset($data['ordfrtextra1']) ? $data['ordfrtextra1'] : null;
        $this->container['ordfrtextra2'] = isset($data['ordfrtextra2']) ? $data['ordfrtextra2'] : null;
        $this->container['shipfrtextra1'] = isset($data['shipfrtextra1']) ? $data['shipfrtextra1'] : null;
        $this->container['shipfrtextra2'] = isset($data['shipfrtextra2']) ? $data['shipfrtextra2'] : null;
        $this->container['xxc1'] = isset($data['xxc1']) ? $data['xxc1'] : null;
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
     * Gets cono
     *
     * @return int
     */
    public function getCono()
    {
        return $this->container['cono'];
    }

    /**
     * Sets cono
     *
     * @param int $cono cono
     *
     * @return $this
     */
    public function setCono($cono)
    {
        $this->container['cono'] = $cono;

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
     * Gets shipvia
     *
     * @return string
     */
    public function getShipvia()
    {
        return $this->container['shipvia'];
    }

    /**
     * Sets shipvia
     *
     * @param string $shipvia shipvia
     *
     * @return $this
     */
    public function setShipvia($shipvia)
    {
        $this->container['shipvia'] = $shipvia;

        return $this;
    }

    /**
     * Gets shipviadesc
     *
     * @return string
     */
    public function getShipviadesc()
    {
        return $this->container['shipviadesc'];
    }

    /**
     * Sets shipviadesc
     *
     * @param string $shipviadesc shipviadesc
     *
     * @return $this
     */
    public function setShipviadesc($shipviadesc)
    {
        $this->container['shipviadesc'] = $shipviadesc;

        return $this;
    }

    /**
     * Gets zone
     *
     * @return string
     */
    public function getZone()
    {
        return $this->container['zone'];
    }

    /**
     * Sets zone
     *
     * @param string $zone zone
     *
     * @return $this
     */
    public function setZone($zone)
    {
        $this->container['zone'] = $zone;

        return $this;
    }

    /**
     * Gets overmaxrate
     *
     * @return double
     */
    public function getOvermaxrate()
    {
        return $this->container['overmaxrate'];
    }

    /**
     * Sets overmaxrate
     *
     * @param double $overmaxrate overmaxrate
     *
     * @return $this
     */
    public function setOvermaxrate($overmaxrate)
    {
        $this->container['overmaxrate'] = $overmaxrate;

        return $this;
    }

    /**
     * Gets orderwghtlim
     *
     * @return double
     */
    public function getOrderwghtlim()
    {
        return $this->container['orderwghtlim'];
    }

    /**
     * Sets orderwghtlim
     *
     * @param double $orderwghtlim orderwghtlim
     *
     * @return $this
     */
    public function setOrderwghtlim($orderwghtlim)
    {
        $this->container['orderwghtlim'] = $orderwghtlim;

        return $this;
    }

    /**
     * Gets shipwghtlim
     *
     * @return double
     */
    public function getShipwghtlim()
    {
        return $this->container['shipwghtlim'];
    }

    /**
     * Sets shipwghtlim
     *
     * @param double $shipwghtlim shipwghtlim
     *
     * @return $this
     */
    public function setShipwghtlim($shipwghtlim)
    {
        $this->container['shipwghtlim'] = $shipwghtlim;

        return $this;
    }

    /**
     * Gets orderwght
     *
     * @return double
     */
    public function getOrderwght()
    {
        return $this->container['orderwght'];
    }

    /**
     * Sets orderwght
     *
     * @param double $orderwght orderwght
     *
     * @return $this
     */
    public function setOrderwght($orderwght)
    {
        $this->container['orderwght'] = $orderwght;

        return $this;
    }

    /**
     * Gets shipwght
     *
     * @return double
     */
    public function getShipwght()
    {
        return $this->container['shipwght'];
    }

    /**
     * Sets shipwght
     *
     * @param double $shipwght shipwght
     *
     * @return $this
     */
    public function setShipwght($shipwght)
    {
        $this->container['shipwght'] = $shipwght;

        return $this;
    }

    /**
     * Gets orderfrt
     *
     * @return double
     */
    public function getOrderfrt()
    {
        return $this->container['orderfrt'];
    }

    /**
     * Sets orderfrt
     *
     * @param double $orderfrt orderfrt
     *
     * @return $this
     */
    public function setOrderfrt($orderfrt)
    {
        $this->container['orderfrt'] = $orderfrt;

        return $this;
    }

    /**
     * Gets shipfrt
     *
     * @return double
     */
    public function getShipfrt()
    {
        return $this->container['shipfrt'];
    }

    /**
     * Sets shipfrt
     *
     * @param double $shipfrt shipfrt
     *
     * @return $this
     */
    public function setShipfrt($shipfrt)
    {
        $this->container['shipfrt'] = $shipfrt;

        return $this;
    }

    /**
     * Gets ordfrtextra1
     *
     * @return double
     */
    public function getOrdfrtextra1()
    {
        return $this->container['ordfrtextra1'];
    }

    /**
     * Sets ordfrtextra1
     *
     * @param double $ordfrtextra1 ordfrtextra1
     *
     * @return $this
     */
    public function setOrdfrtextra1($ordfrtextra1)
    {
        $this->container['ordfrtextra1'] = $ordfrtextra1;

        return $this;
    }

    /**
     * Gets ordfrtextra2
     *
     * @return double
     */
    public function getOrdfrtextra2()
    {
        return $this->container['ordfrtextra2'];
    }

    /**
     * Sets ordfrtextra2
     *
     * @param double $ordfrtextra2 ordfrtextra2
     *
     * @return $this
     */
    public function setOrdfrtextra2($ordfrtextra2)
    {
        $this->container['ordfrtextra2'] = $ordfrtextra2;

        return $this;
    }

    /**
     * Gets shipfrtextra1
     *
     * @return double
     */
    public function getShipfrtextra1()
    {
        return $this->container['shipfrtextra1'];
    }

    /**
     * Sets shipfrtextra1
     *
     * @param double $shipfrtextra1 shipfrtextra1
     *
     * @return $this
     */
    public function setShipfrtextra1($shipfrtextra1)
    {
        $this->container['shipfrtextra1'] = $shipfrtextra1;

        return $this;
    }

    /**
     * Gets shipfrtextra2
     *
     * @return double
     */
    public function getShipfrtextra2()
    {
        return $this->container['shipfrtextra2'];
    }

    /**
     * Sets shipfrtextra2
     *
     * @param double $shipfrtextra2 shipfrtextra2
     *
     * @return $this
     */
    public function setShipfrtextra2($shipfrtextra2)
    {
        $this->container['shipfrtextra2'] = $shipfrtextra2;

        return $this;
    }

    /**
     * Gets xxc1
     *
     * @return string
     */
    public function getXxc1()
    {
        return $this->container['xxc1'];
    }

    /**
     * Sets xxc1
     *
     * @param string $xxc1 xxc1
     *
     * @return $this
     */
    public function setXxc1($xxc1)
    {
        $this->container['xxc1'] = $xxc1;

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


