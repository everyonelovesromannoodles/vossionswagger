<?php
/**
 * TBoxheader
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
 * TBoxheader Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TBoxheader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-boxheader';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shipcd' => 'string',
        'shipdt' => '\DateTime',
        'shiptm' => 'int',
        'cartonno' => 'int',
        'shipviaty' => 'string',
        'cube' => 'double',
        'weight' => 'double',
        'dimweight' => 'double',
        'shipcharge' => 'double',
        'trackingid' => 'string',
        'boxid' => 'string',
        'boxdesc' => 'string',
        'billoflading' => 'string',
        'ordhistcd' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shipcd' => null,
        'shipdt' => 'date',
        'shiptm' => 'int64',
        'cartonno' => 'int64',
        'shipviaty' => null,
        'cube' => 'double',
        'weight' => 'double',
        'dimweight' => 'double',
        'shipcharge' => 'double',
        'trackingid' => null,
        'boxid' => null,
        'boxdesc' => null,
        'billoflading' => null,
        'ordhistcd' => null
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
        'shipcd' => 'shipcd',
        'shipdt' => 'shipdt',
        'shiptm' => 'shiptm',
        'cartonno' => 'cartonno',
        'shipviaty' => 'shipviaty',
        'cube' => 'cube',
        'weight' => 'weight',
        'dimweight' => 'dimweight',
        'shipcharge' => 'shipcharge',
        'trackingid' => 'trackingid',
        'boxid' => 'boxid',
        'boxdesc' => 'boxdesc',
        'billoflading' => 'billoflading',
        'ordhistcd' => 'ordhistcd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shipcd' => 'setShipcd',
        'shipdt' => 'setShipdt',
        'shiptm' => 'setShiptm',
        'cartonno' => 'setCartonno',
        'shipviaty' => 'setShipviaty',
        'cube' => 'setCube',
        'weight' => 'setWeight',
        'dimweight' => 'setDimweight',
        'shipcharge' => 'setShipcharge',
        'trackingid' => 'setTrackingid',
        'boxid' => 'setBoxid',
        'boxdesc' => 'setBoxdesc',
        'billoflading' => 'setBilloflading',
        'ordhistcd' => 'setOrdhistcd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shipcd' => 'getShipcd',
        'shipdt' => 'getShipdt',
        'shiptm' => 'getShiptm',
        'cartonno' => 'getCartonno',
        'shipviaty' => 'getShipviaty',
        'cube' => 'getCube',
        'weight' => 'getWeight',
        'dimweight' => 'getDimweight',
        'shipcharge' => 'getShipcharge',
        'trackingid' => 'getTrackingid',
        'boxid' => 'getBoxid',
        'boxdesc' => 'getBoxdesc',
        'billoflading' => 'getBilloflading',
        'ordhistcd' => 'getOrdhistcd'
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
        $this->container['shipcd'] = isset($data['shipcd']) ? $data['shipcd'] : null;
        $this->container['shipdt'] = isset($data['shipdt']) ? $data['shipdt'] : null;
        $this->container['shiptm'] = isset($data['shiptm']) ? $data['shiptm'] : null;
        $this->container['cartonno'] = isset($data['cartonno']) ? $data['cartonno'] : null;
        $this->container['shipviaty'] = isset($data['shipviaty']) ? $data['shipviaty'] : null;
        $this->container['cube'] = isset($data['cube']) ? $data['cube'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['dimweight'] = isset($data['dimweight']) ? $data['dimweight'] : null;
        $this->container['shipcharge'] = isset($data['shipcharge']) ? $data['shipcharge'] : null;
        $this->container['trackingid'] = isset($data['trackingid']) ? $data['trackingid'] : null;
        $this->container['boxid'] = isset($data['boxid']) ? $data['boxid'] : null;
        $this->container['boxdesc'] = isset($data['boxdesc']) ? $data['boxdesc'] : null;
        $this->container['billoflading'] = isset($data['billoflading']) ? $data['billoflading'] : null;
        $this->container['ordhistcd'] = isset($data['ordhistcd']) ? $data['ordhistcd'] : null;
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
     * Gets shipcd
     *
     * @return string
     */
    public function getShipcd()
    {
        return $this->container['shipcd'];
    }

    /**
     * Sets shipcd
     *
     * @param string $shipcd shipcd
     *
     * @return $this
     */
    public function setShipcd($shipcd)
    {
        $this->container['shipcd'] = $shipcd;

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
     * Gets shiptm
     *
     * @return int
     */
    public function getShiptm()
    {
        return $this->container['shiptm'];
    }

    /**
     * Sets shiptm
     *
     * @param int $shiptm shiptm
     *
     * @return $this
     */
    public function setShiptm($shiptm)
    {
        $this->container['shiptm'] = $shiptm;

        return $this;
    }

    /**
     * Gets cartonno
     *
     * @return int
     */
    public function getCartonno()
    {
        return $this->container['cartonno'];
    }

    /**
     * Sets cartonno
     *
     * @param int $cartonno cartonno
     *
     * @return $this
     */
    public function setCartonno($cartonno)
    {
        $this->container['cartonno'] = $cartonno;

        return $this;
    }

    /**
     * Gets shipviaty
     *
     * @return string
     */
    public function getShipviaty()
    {
        return $this->container['shipviaty'];
    }

    /**
     * Sets shipviaty
     *
     * @param string $shipviaty shipviaty
     *
     * @return $this
     */
    public function setShipviaty($shipviaty)
    {
        $this->container['shipviaty'] = $shipviaty;

        return $this;
    }

    /**
     * Gets cube
     *
     * @return double
     */
    public function getCube()
    {
        return $this->container['cube'];
    }

    /**
     * Sets cube
     *
     * @param double $cube cube
     *
     * @return $this
     */
    public function setCube($cube)
    {
        $this->container['cube'] = $cube;

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
     * Gets dimweight
     *
     * @return double
     */
    public function getDimweight()
    {
        return $this->container['dimweight'];
    }

    /**
     * Sets dimweight
     *
     * @param double $dimweight dimweight
     *
     * @return $this
     */
    public function setDimweight($dimweight)
    {
        $this->container['dimweight'] = $dimweight;

        return $this;
    }

    /**
     * Gets shipcharge
     *
     * @return double
     */
    public function getShipcharge()
    {
        return $this->container['shipcharge'];
    }

    /**
     * Sets shipcharge
     *
     * @param double $shipcharge shipcharge
     *
     * @return $this
     */
    public function setShipcharge($shipcharge)
    {
        $this->container['shipcharge'] = $shipcharge;

        return $this;
    }

    /**
     * Gets trackingid
     *
     * @return string
     */
    public function getTrackingid()
    {
        return $this->container['trackingid'];
    }

    /**
     * Sets trackingid
     *
     * @param string $trackingid trackingid
     *
     * @return $this
     */
    public function setTrackingid($trackingid)
    {
        $this->container['trackingid'] = $trackingid;

        return $this;
    }

    /**
     * Gets boxid
     *
     * @return string
     */
    public function getBoxid()
    {
        return $this->container['boxid'];
    }

    /**
     * Sets boxid
     *
     * @param string $boxid boxid
     *
     * @return $this
     */
    public function setBoxid($boxid)
    {
        $this->container['boxid'] = $boxid;

        return $this;
    }

    /**
     * Gets boxdesc
     *
     * @return string
     */
    public function getBoxdesc()
    {
        return $this->container['boxdesc'];
    }

    /**
     * Sets boxdesc
     *
     * @param string $boxdesc boxdesc
     *
     * @return $this
     */
    public function setBoxdesc($boxdesc)
    {
        $this->container['boxdesc'] = $boxdesc;

        return $this;
    }

    /**
     * Gets billoflading
     *
     * @return string
     */
    public function getBilloflading()
    {
        return $this->container['billoflading'];
    }

    /**
     * Sets billoflading
     *
     * @param string $billoflading billoflading
     *
     * @return $this
     */
    public function setBilloflading($billoflading)
    {
        $this->container['billoflading'] = $billoflading;

        return $this;
    }

    /**
     * Gets ordhistcd
     *
     * @return string
     */
    public function getOrdhistcd()
    {
        return $this->container['ordhistcd'];
    }

    /**
     * Sets ordhistcd
     *
     * @param string $ordhistcd ordhistcd
     *
     * @return $this
     */
    public function setOrdhistcd($ordhistcd)
    {
        $this->container['ordhistcd'] = $ordhistcd;

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


