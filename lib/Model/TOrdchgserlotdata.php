<?php
/**
 * TOrdchgserlotdata
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
 * TOrdchgserlotdata Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TOrdchgserlotdata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-ordchgserlotdata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'serlotno' => 'string',
        'returnfl' => 'bool',
        'quantity' => 'double',
        'binloc' => 'string',
        'comment' => 'string',
        'qtyunavail' => 'double',
        'opendt' => '\DateTime',
        'expiredt' => '\DateTime',
        'reasunavty' => 'string',
        'retorderno' => 'int',
        'retordersuf' => 'int',
        'retlineno' => 'int',
        'retseqno' => 'int',
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
        'serlotno' => null,
        'returnfl' => null,
        'quantity' => 'double',
        'binloc' => null,
        'comment' => null,
        'qtyunavail' => 'double',
        'opendt' => 'date',
        'expiredt' => 'date',
        'reasunavty' => null,
        'retorderno' => 'int64',
        'retordersuf' => 'int64',
        'retlineno' => 'int64',
        'retseqno' => 'int64',
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
        'serlotno' => 'serlotno',
        'returnfl' => 'returnfl',
        'quantity' => 'quantity',
        'binloc' => 'binloc',
        'comment' => 'comment',
        'qtyunavail' => 'qtyunavail',
        'opendt' => 'opendt',
        'expiredt' => 'expiredt',
        'reasunavty' => 'reasunavty',
        'retorderno' => 'retorderno',
        'retordersuf' => 'retordersuf',
        'retlineno' => 'retlineno',
        'retseqno' => 'retseqno',
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
        'serlotno' => 'setSerlotno',
        'returnfl' => 'setReturnfl',
        'quantity' => 'setQuantity',
        'binloc' => 'setBinloc',
        'comment' => 'setComment',
        'qtyunavail' => 'setQtyunavail',
        'opendt' => 'setOpendt',
        'expiredt' => 'setExpiredt',
        'reasunavty' => 'setReasunavty',
        'retorderno' => 'setRetorderno',
        'retordersuf' => 'setRetordersuf',
        'retlineno' => 'setRetlineno',
        'retseqno' => 'setRetseqno',
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
        'serlotno' => 'getSerlotno',
        'returnfl' => 'getReturnfl',
        'quantity' => 'getQuantity',
        'binloc' => 'getBinloc',
        'comment' => 'getComment',
        'qtyunavail' => 'getQtyunavail',
        'opendt' => 'getOpendt',
        'expiredt' => 'getExpiredt',
        'reasunavty' => 'getReasunavty',
        'retorderno' => 'getRetorderno',
        'retordersuf' => 'getRetordersuf',
        'retlineno' => 'getRetlineno',
        'retseqno' => 'getRetseqno',
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
        $this->container['serlotno'] = isset($data['serlotno']) ? $data['serlotno'] : null;
        $this->container['returnfl'] = isset($data['returnfl']) ? $data['returnfl'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['binloc'] = isset($data['binloc']) ? $data['binloc'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['qtyunavail'] = isset($data['qtyunavail']) ? $data['qtyunavail'] : null;
        $this->container['opendt'] = isset($data['opendt']) ? $data['opendt'] : null;
        $this->container['expiredt'] = isset($data['expiredt']) ? $data['expiredt'] : null;
        $this->container['reasunavty'] = isset($data['reasunavty']) ? $data['reasunavty'] : null;
        $this->container['retorderno'] = isset($data['retorderno']) ? $data['retorderno'] : null;
        $this->container['retordersuf'] = isset($data['retordersuf']) ? $data['retordersuf'] : null;
        $this->container['retlineno'] = isset($data['retlineno']) ? $data['retlineno'] : null;
        $this->container['retseqno'] = isset($data['retseqno']) ? $data['retseqno'] : null;
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
     * Gets serlotno
     *
     * @return string
     */
    public function getSerlotno()
    {
        return $this->container['serlotno'];
    }

    /**
     * Sets serlotno
     *
     * @param string $serlotno serlotno
     *
     * @return $this
     */
    public function setSerlotno($serlotno)
    {
        $this->container['serlotno'] = $serlotno;

        return $this;
    }

    /**
     * Gets returnfl
     *
     * @return bool
     */
    public function getReturnfl()
    {
        return $this->container['returnfl'];
    }

    /**
     * Sets returnfl
     *
     * @param bool $returnfl returnfl
     *
     * @return $this
     */
    public function setReturnfl($returnfl)
    {
        $this->container['returnfl'] = $returnfl;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets binloc
     *
     * @return string
     */
    public function getBinloc()
    {
        return $this->container['binloc'];
    }

    /**
     * Sets binloc
     *
     * @param string $binloc binloc
     *
     * @return $this
     */
    public function setBinloc($binloc)
    {
        $this->container['binloc'] = $binloc;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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
     * Gets opendt
     *
     * @return \DateTime
     */
    public function getOpendt()
    {
        return $this->container['opendt'];
    }

    /**
     * Sets opendt
     *
     * @param \DateTime $opendt opendt
     *
     * @return $this
     */
    public function setOpendt($opendt)
    {
        $this->container['opendt'] = $opendt;

        return $this;
    }

    /**
     * Gets expiredt
     *
     * @return \DateTime
     */
    public function getExpiredt()
    {
        return $this->container['expiredt'];
    }

    /**
     * Sets expiredt
     *
     * @param \DateTime $expiredt expiredt
     *
     * @return $this
     */
    public function setExpiredt($expiredt)
    {
        $this->container['expiredt'] = $expiredt;

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
     * Gets retorderno
     *
     * @return int
     */
    public function getRetorderno()
    {
        return $this->container['retorderno'];
    }

    /**
     * Sets retorderno
     *
     * @param int $retorderno retorderno
     *
     * @return $this
     */
    public function setRetorderno($retorderno)
    {
        $this->container['retorderno'] = $retorderno;

        return $this;
    }

    /**
     * Gets retordersuf
     *
     * @return int
     */
    public function getRetordersuf()
    {
        return $this->container['retordersuf'];
    }

    /**
     * Sets retordersuf
     *
     * @param int $retordersuf retordersuf
     *
     * @return $this
     */
    public function setRetordersuf($retordersuf)
    {
        $this->container['retordersuf'] = $retordersuf;

        return $this;
    }

    /**
     * Gets retlineno
     *
     * @return int
     */
    public function getRetlineno()
    {
        return $this->container['retlineno'];
    }

    /**
     * Sets retlineno
     *
     * @param int $retlineno retlineno
     *
     * @return $this
     */
    public function setRetlineno($retlineno)
    {
        $this->container['retlineno'] = $retlineno;

        return $this;
    }

    /**
     * Gets retseqno
     *
     * @return int
     */
    public function getRetseqno()
    {
        return $this->container['retseqno'];
    }

    /**
     * Sets retseqno
     *
     * @param int $retseqno retseqno
     *
     * @return $this
     */
    public function setRetseqno($retseqno)
    {
        $this->container['retseqno'] = $retseqno;

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


