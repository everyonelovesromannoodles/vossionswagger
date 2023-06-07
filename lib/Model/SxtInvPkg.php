<?php
/**
 * SxtInvPkg
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
 * SxtInvPkg Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxtInvPkg implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxt_inv_pkg';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pkgn' => 'string',
        'trackerno' => 'string',
        'actweight' => 'string',
        'shipdt' => 'string',
        'shiptm' => 'string',
        'actcodamt' => 'string',
        'freightamt' => 'string',
        'user1' => 'string',
        'user2' => 'string',
        'user3' => 'string',
        'user4' => 'string',
        'user5' => 'string',
        'user6' => 'string',
        'user7' => 'string',
        'user8' => 'string',
        'user9' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pkgn' => null,
        'trackerno' => null,
        'actweight' => null,
        'shipdt' => null,
        'shiptm' => null,
        'actcodamt' => null,
        'freightamt' => null,
        'user1' => null,
        'user2' => null,
        'user3' => null,
        'user4' => null,
        'user5' => null,
        'user6' => null,
        'user7' => null,
        'user8' => null,
        'user9' => null
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
        'pkgn' => 'pkgn',
        'trackerno' => 'trackerno',
        'actweight' => 'actweight',
        'shipdt' => 'shipdt',
        'shiptm' => 'shiptm',
        'actcodamt' => 'actcodamt',
        'freightamt' => 'freightamt',
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
        'pkgn' => 'setPkgn',
        'trackerno' => 'setTrackerno',
        'actweight' => 'setActweight',
        'shipdt' => 'setShipdt',
        'shiptm' => 'setShiptm',
        'actcodamt' => 'setActcodamt',
        'freightamt' => 'setFreightamt',
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
        'pkgn' => 'getPkgn',
        'trackerno' => 'getTrackerno',
        'actweight' => 'getActweight',
        'shipdt' => 'getShipdt',
        'shiptm' => 'getShiptm',
        'actcodamt' => 'getActcodamt',
        'freightamt' => 'getFreightamt',
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
        $this->container['pkgn'] = isset($data['pkgn']) ? $data['pkgn'] : null;
        $this->container['trackerno'] = isset($data['trackerno']) ? $data['trackerno'] : null;
        $this->container['actweight'] = isset($data['actweight']) ? $data['actweight'] : null;
        $this->container['shipdt'] = isset($data['shipdt']) ? $data['shipdt'] : null;
        $this->container['shiptm'] = isset($data['shiptm']) ? $data['shiptm'] : null;
        $this->container['actcodamt'] = isset($data['actcodamt']) ? $data['actcodamt'] : null;
        $this->container['freightamt'] = isset($data['freightamt']) ? $data['freightamt'] : null;
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
     * Gets pkgn
     *
     * @return string
     */
    public function getPkgn()
    {
        return $this->container['pkgn'];
    }

    /**
     * Sets pkgn
     *
     * @param string $pkgn pkgn
     *
     * @return $this
     */
    public function setPkgn($pkgn)
    {
        $this->container['pkgn'] = $pkgn;

        return $this;
    }

    /**
     * Gets trackerno
     *
     * @return string
     */
    public function getTrackerno()
    {
        return $this->container['trackerno'];
    }

    /**
     * Sets trackerno
     *
     * @param string $trackerno trackerno
     *
     * @return $this
     */
    public function setTrackerno($trackerno)
    {
        $this->container['trackerno'] = $trackerno;

        return $this;
    }

    /**
     * Gets actweight
     *
     * @return string
     */
    public function getActweight()
    {
        return $this->container['actweight'];
    }

    /**
     * Sets actweight
     *
     * @param string $actweight actweight
     *
     * @return $this
     */
    public function setActweight($actweight)
    {
        $this->container['actweight'] = $actweight;

        return $this;
    }

    /**
     * Gets shipdt
     *
     * @return string
     */
    public function getShipdt()
    {
        return $this->container['shipdt'];
    }

    /**
     * Sets shipdt
     *
     * @param string $shipdt shipdt
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
     * @return string
     */
    public function getShiptm()
    {
        return $this->container['shiptm'];
    }

    /**
     * Sets shiptm
     *
     * @param string $shiptm shiptm
     *
     * @return $this
     */
    public function setShiptm($shiptm)
    {
        $this->container['shiptm'] = $shiptm;

        return $this;
    }

    /**
     * Gets actcodamt
     *
     * @return string
     */
    public function getActcodamt()
    {
        return $this->container['actcodamt'];
    }

    /**
     * Sets actcodamt
     *
     * @param string $actcodamt actcodamt
     *
     * @return $this
     */
    public function setActcodamt($actcodamt)
    {
        $this->container['actcodamt'] = $actcodamt;

        return $this;
    }

    /**
     * Gets freightamt
     *
     * @return string
     */
    public function getFreightamt()
    {
        return $this->container['freightamt'];
    }

    /**
     * Sets freightamt
     *
     * @param string $freightamt freightamt
     *
     * @return $this
     */
    public function setFreightamt($freightamt)
    {
        $this->container['freightamt'] = $freightamt;

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
     * @return string
     */
    public function getUser6()
    {
        return $this->container['user6'];
    }

    /**
     * Sets user6
     *
     * @param string $user6 user6
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
     * @return string
     */
    public function getUser7()
    {
        return $this->container['user7'];
    }

    /**
     * Sets user7
     *
     * @param string $user7 user7
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
     * @return string
     */
    public function getUser8()
    {
        return $this->container['user8'];
    }

    /**
     * Sets user8
     *
     * @param string $user8 user8
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
     * @return string
     */
    public function getUser9()
    {
        return $this->container['user9'];
    }

    /**
     * Sets user9
     *
     * @param string $user9 user9
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

