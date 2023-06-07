<?php
/**
 * SxapisfgettrackingnumRequest
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
 * SxapisfgettrackingnumRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapisfgettrackingnumRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapisfgettrackingnum_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'order_number' => 'int',
        'order_suffix' => 'int',
        'history_sequence_number' => 'int',
        'entry_sequence_number' => 'int',
        'order_seqence_number' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'company_number' => 'int64',
        'operator_init' => null,
        'operator_password' => null,
        'order_number' => 'int64',
        'order_suffix' => 'int64',
        'history_sequence_number' => 'int64',
        'entry_sequence_number' => 'int64',
        'order_seqence_number' => 'int64'
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
        'company_number' => 'companyNumber',
        'operator_init' => 'operatorInit',
        'operator_password' => 'operatorPassword',
        'order_number' => 'orderNumber',
        'order_suffix' => 'orderSuffix',
        'history_sequence_number' => 'historySequenceNumber',
        'entry_sequence_number' => 'entrySequenceNumber',
        'order_seqence_number' => 'orderSeqenceNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_number' => 'setCompanyNumber',
        'operator_init' => 'setOperatorInit',
        'operator_password' => 'setOperatorPassword',
        'order_number' => 'setOrderNumber',
        'order_suffix' => 'setOrderSuffix',
        'history_sequence_number' => 'setHistorySequenceNumber',
        'entry_sequence_number' => 'setEntrySequenceNumber',
        'order_seqence_number' => 'setOrderSeqenceNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_number' => 'getCompanyNumber',
        'operator_init' => 'getOperatorInit',
        'operator_password' => 'getOperatorPassword',
        'order_number' => 'getOrderNumber',
        'order_suffix' => 'getOrderSuffix',
        'history_sequence_number' => 'getHistorySequenceNumber',
        'entry_sequence_number' => 'getEntrySequenceNumber',
        'order_seqence_number' => 'getOrderSeqenceNumber'
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
        $this->container['company_number'] = isset($data['company_number']) ? $data['company_number'] : null;
        $this->container['operator_init'] = isset($data['operator_init']) ? $data['operator_init'] : null;
        $this->container['operator_password'] = isset($data['operator_password']) ? $data['operator_password'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['order_suffix'] = isset($data['order_suffix']) ? $data['order_suffix'] : null;
        $this->container['history_sequence_number'] = isset($data['history_sequence_number']) ? $data['history_sequence_number'] : null;
        $this->container['entry_sequence_number'] = isset($data['entry_sequence_number']) ? $data['entry_sequence_number'] : null;
        $this->container['order_seqence_number'] = isset($data['order_seqence_number']) ? $data['order_seqence_number'] : null;
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
     * Gets company_number
     *
     * @return int
     */
    public function getCompanyNumber()
    {
        return $this->container['company_number'];
    }

    /**
     * Sets company_number
     *
     * @param int $company_number company_number
     *
     * @return $this
     */
    public function setCompanyNumber($company_number)
    {
        $this->container['company_number'] = $company_number;

        return $this;
    }

    /**
     * Gets operator_init
     *
     * @return string
     */
    public function getOperatorInit()
    {
        return $this->container['operator_init'];
    }

    /**
     * Sets operator_init
     *
     * @param string $operator_init operator_init
     *
     * @return $this
     */
    public function setOperatorInit($operator_init)
    {
        $this->container['operator_init'] = $operator_init;

        return $this;
    }

    /**
     * Gets operator_password
     *
     * @return string
     */
    public function getOperatorPassword()
    {
        return $this->container['operator_password'];
    }

    /**
     * Sets operator_password
     *
     * @param string $operator_password operator_password
     *
     * @return $this
     */
    public function setOperatorPassword($operator_password)
    {
        $this->container['operator_password'] = $operator_password;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param int $order_number order_number
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets order_suffix
     *
     * @return int
     */
    public function getOrderSuffix()
    {
        return $this->container['order_suffix'];
    }

    /**
     * Sets order_suffix
     *
     * @param int $order_suffix order_suffix
     *
     * @return $this
     */
    public function setOrderSuffix($order_suffix)
    {
        $this->container['order_suffix'] = $order_suffix;

        return $this;
    }

    /**
     * Gets history_sequence_number
     *
     * @return int
     */
    public function getHistorySequenceNumber()
    {
        return $this->container['history_sequence_number'];
    }

    /**
     * Sets history_sequence_number
     *
     * @param int $history_sequence_number history_sequence_number
     *
     * @return $this
     */
    public function setHistorySequenceNumber($history_sequence_number)
    {
        $this->container['history_sequence_number'] = $history_sequence_number;

        return $this;
    }

    /**
     * Gets entry_sequence_number
     *
     * @return int
     */
    public function getEntrySequenceNumber()
    {
        return $this->container['entry_sequence_number'];
    }

    /**
     * Sets entry_sequence_number
     *
     * @param int $entry_sequence_number entry_sequence_number
     *
     * @return $this
     */
    public function setEntrySequenceNumber($entry_sequence_number)
    {
        $this->container['entry_sequence_number'] = $entry_sequence_number;

        return $this;
    }

    /**
     * Gets order_seqence_number
     *
     * @return int
     */
    public function getOrderSeqenceNumber()
    {
        return $this->container['order_seqence_number'];
    }

    /**
     * Sets order_seqence_number
     *
     * @param int $order_seqence_number order_seqence_number
     *
     * @return $this
     */
    public function setOrderSeqenceNumber($order_seqence_number)
    {
        $this->container['order_seqence_number'] = $order_seqence_number;

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


