<?php
/**
 * TInputlinedata
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
 * TInputlinedata Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TInputlinedata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-inputlinedata';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'itemnumber' => 'string',
        'orderqty' => 'double',
        'unitofmeasure' => 'string',
        'warehouseid' => 'string',
        'lineitemtype' => 'string',
        'itemdesc1' => 'string',
        'itemdesc2' => 'string',
        'actualsellprice' => 'double',
        'cost' => 'double',
        'nonstockflag' => 'string',
        'chargetype' => 'string',
        'dropship' => 'string',
        'duedate' => 'string',
        'extendedweight' => 'double',
        'listprice' => 'string',
        'itemid' => 'int',
        'seqno' => 'int',
        'shipinstrty' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'itemnumber' => null,
        'orderqty' => 'double',
        'unitofmeasure' => null,
        'warehouseid' => null,
        'lineitemtype' => null,
        'itemdesc1' => null,
        'itemdesc2' => null,
        'actualsellprice' => 'double',
        'cost' => 'double',
        'nonstockflag' => null,
        'chargetype' => null,
        'dropship' => null,
        'duedate' => null,
        'extendedweight' => 'double',
        'listprice' => null,
        'itemid' => 'int64',
        'seqno' => 'int64',
        'shipinstrty' => null
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
        'itemnumber' => 'itemnumber',
        'orderqty' => 'orderqty',
        'unitofmeasure' => 'unitofmeasure',
        'warehouseid' => 'warehouseid',
        'lineitemtype' => 'lineitemtype',
        'itemdesc1' => 'itemdesc1',
        'itemdesc2' => 'itemdesc2',
        'actualsellprice' => 'actualsellprice',
        'cost' => 'cost',
        'nonstockflag' => 'nonstockflag',
        'chargetype' => 'chargetype',
        'dropship' => 'dropship',
        'duedate' => 'duedate',
        'extendedweight' => 'extendedweight',
        'listprice' => 'listprice',
        'itemid' => 'itemid',
        'seqno' => 'seqno',
        'shipinstrty' => 'shipinstrty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemnumber' => 'setItemnumber',
        'orderqty' => 'setOrderqty',
        'unitofmeasure' => 'setUnitofmeasure',
        'warehouseid' => 'setWarehouseid',
        'lineitemtype' => 'setLineitemtype',
        'itemdesc1' => 'setItemdesc1',
        'itemdesc2' => 'setItemdesc2',
        'actualsellprice' => 'setActualsellprice',
        'cost' => 'setCost',
        'nonstockflag' => 'setNonstockflag',
        'chargetype' => 'setChargetype',
        'dropship' => 'setDropship',
        'duedate' => 'setDuedate',
        'extendedweight' => 'setExtendedweight',
        'listprice' => 'setListprice',
        'itemid' => 'setItemid',
        'seqno' => 'setSeqno',
        'shipinstrty' => 'setShipinstrty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemnumber' => 'getItemnumber',
        'orderqty' => 'getOrderqty',
        'unitofmeasure' => 'getUnitofmeasure',
        'warehouseid' => 'getWarehouseid',
        'lineitemtype' => 'getLineitemtype',
        'itemdesc1' => 'getItemdesc1',
        'itemdesc2' => 'getItemdesc2',
        'actualsellprice' => 'getActualsellprice',
        'cost' => 'getCost',
        'nonstockflag' => 'getNonstockflag',
        'chargetype' => 'getChargetype',
        'dropship' => 'getDropship',
        'duedate' => 'getDuedate',
        'extendedweight' => 'getExtendedweight',
        'listprice' => 'getListprice',
        'itemid' => 'getItemid',
        'seqno' => 'getSeqno',
        'shipinstrty' => 'getShipinstrty'
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
        $this->container['itemnumber'] = isset($data['itemnumber']) ? $data['itemnumber'] : null;
        $this->container['orderqty'] = isset($data['orderqty']) ? $data['orderqty'] : null;
        $this->container['unitofmeasure'] = isset($data['unitofmeasure']) ? $data['unitofmeasure'] : null;
        $this->container['warehouseid'] = isset($data['warehouseid']) ? $data['warehouseid'] : null;
        $this->container['lineitemtype'] = isset($data['lineitemtype']) ? $data['lineitemtype'] : null;
        $this->container['itemdesc1'] = isset($data['itemdesc1']) ? $data['itemdesc1'] : null;
        $this->container['itemdesc2'] = isset($data['itemdesc2']) ? $data['itemdesc2'] : null;
        $this->container['actualsellprice'] = isset($data['actualsellprice']) ? $data['actualsellprice'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['nonstockflag'] = isset($data['nonstockflag']) ? $data['nonstockflag'] : null;
        $this->container['chargetype'] = isset($data['chargetype']) ? $data['chargetype'] : null;
        $this->container['dropship'] = isset($data['dropship']) ? $data['dropship'] : null;
        $this->container['duedate'] = isset($data['duedate']) ? $data['duedate'] : null;
        $this->container['extendedweight'] = isset($data['extendedweight']) ? $data['extendedweight'] : null;
        $this->container['listprice'] = isset($data['listprice']) ? $data['listprice'] : null;
        $this->container['itemid'] = isset($data['itemid']) ? $data['itemid'] : null;
        $this->container['seqno'] = isset($data['seqno']) ? $data['seqno'] : null;
        $this->container['shipinstrty'] = isset($data['shipinstrty']) ? $data['shipinstrty'] : null;
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
     * Gets itemnumber
     *
     * @return string
     */
    public function getItemnumber()
    {
        return $this->container['itemnumber'];
    }

    /**
     * Sets itemnumber
     *
     * @param string $itemnumber itemnumber
     *
     * @return $this
     */
    public function setItemnumber($itemnumber)
    {
        $this->container['itemnumber'] = $itemnumber;

        return $this;
    }

    /**
     * Gets orderqty
     *
     * @return double
     */
    public function getOrderqty()
    {
        return $this->container['orderqty'];
    }

    /**
     * Sets orderqty
     *
     * @param double $orderqty orderqty
     *
     * @return $this
     */
    public function setOrderqty($orderqty)
    {
        $this->container['orderqty'] = $orderqty;

        return $this;
    }

    /**
     * Gets unitofmeasure
     *
     * @return string
     */
    public function getUnitofmeasure()
    {
        return $this->container['unitofmeasure'];
    }

    /**
     * Sets unitofmeasure
     *
     * @param string $unitofmeasure unitofmeasure
     *
     * @return $this
     */
    public function setUnitofmeasure($unitofmeasure)
    {
        $this->container['unitofmeasure'] = $unitofmeasure;

        return $this;
    }

    /**
     * Gets warehouseid
     *
     * @return string
     */
    public function getWarehouseid()
    {
        return $this->container['warehouseid'];
    }

    /**
     * Sets warehouseid
     *
     * @param string $warehouseid warehouseid
     *
     * @return $this
     */
    public function setWarehouseid($warehouseid)
    {
        $this->container['warehouseid'] = $warehouseid;

        return $this;
    }

    /**
     * Gets lineitemtype
     *
     * @return string
     */
    public function getLineitemtype()
    {
        return $this->container['lineitemtype'];
    }

    /**
     * Sets lineitemtype
     *
     * @param string $lineitemtype lineitemtype
     *
     * @return $this
     */
    public function setLineitemtype($lineitemtype)
    {
        $this->container['lineitemtype'] = $lineitemtype;

        return $this;
    }

    /**
     * Gets itemdesc1
     *
     * @return string
     */
    public function getItemdesc1()
    {
        return $this->container['itemdesc1'];
    }

    /**
     * Sets itemdesc1
     *
     * @param string $itemdesc1 itemdesc1
     *
     * @return $this
     */
    public function setItemdesc1($itemdesc1)
    {
        $this->container['itemdesc1'] = $itemdesc1;

        return $this;
    }

    /**
     * Gets itemdesc2
     *
     * @return string
     */
    public function getItemdesc2()
    {
        return $this->container['itemdesc2'];
    }

    /**
     * Sets itemdesc2
     *
     * @param string $itemdesc2 itemdesc2
     *
     * @return $this
     */
    public function setItemdesc2($itemdesc2)
    {
        $this->container['itemdesc2'] = $itemdesc2;

        return $this;
    }

    /**
     * Gets actualsellprice
     *
     * @return double
     */
    public function getActualsellprice()
    {
        return $this->container['actualsellprice'];
    }

    /**
     * Sets actualsellprice
     *
     * @param double $actualsellprice actualsellprice
     *
     * @return $this
     */
    public function setActualsellprice($actualsellprice)
    {
        $this->container['actualsellprice'] = $actualsellprice;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return double
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param double $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets nonstockflag
     *
     * @return string
     */
    public function getNonstockflag()
    {
        return $this->container['nonstockflag'];
    }

    /**
     * Sets nonstockflag
     *
     * @param string $nonstockflag nonstockflag
     *
     * @return $this
     */
    public function setNonstockflag($nonstockflag)
    {
        $this->container['nonstockflag'] = $nonstockflag;

        return $this;
    }

    /**
     * Gets chargetype
     *
     * @return string
     */
    public function getChargetype()
    {
        return $this->container['chargetype'];
    }

    /**
     * Sets chargetype
     *
     * @param string $chargetype chargetype
     *
     * @return $this
     */
    public function setChargetype($chargetype)
    {
        $this->container['chargetype'] = $chargetype;

        return $this;
    }

    /**
     * Gets dropship
     *
     * @return string
     */
    public function getDropship()
    {
        return $this->container['dropship'];
    }

    /**
     * Sets dropship
     *
     * @param string $dropship dropship
     *
     * @return $this
     */
    public function setDropship($dropship)
    {
        $this->container['dropship'] = $dropship;

        return $this;
    }

    /**
     * Gets duedate
     *
     * @return string
     */
    public function getDuedate()
    {
        return $this->container['duedate'];
    }

    /**
     * Sets duedate
     *
     * @param string $duedate duedate
     *
     * @return $this
     */
    public function setDuedate($duedate)
    {
        $this->container['duedate'] = $duedate;

        return $this;
    }

    /**
     * Gets extendedweight
     *
     * @return double
     */
    public function getExtendedweight()
    {
        return $this->container['extendedweight'];
    }

    /**
     * Sets extendedweight
     *
     * @param double $extendedweight extendedweight
     *
     * @return $this
     */
    public function setExtendedweight($extendedweight)
    {
        $this->container['extendedweight'] = $extendedweight;

        return $this;
    }

    /**
     * Gets listprice
     *
     * @return string
     */
    public function getListprice()
    {
        return $this->container['listprice'];
    }

    /**
     * Sets listprice
     *
     * @param string $listprice listprice
     *
     * @return $this
     */
    public function setListprice($listprice)
    {
        $this->container['listprice'] = $listprice;

        return $this;
    }

    /**
     * Gets itemid
     *
     * @return int
     */
    public function getItemid()
    {
        return $this->container['itemid'];
    }

    /**
     * Sets itemid
     *
     * @param int $itemid itemid
     *
     * @return $this
     */
    public function setItemid($itemid)
    {
        $this->container['itemid'] = $itemid;

        return $this;
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
     * Gets shipinstrty
     *
     * @return string
     */
    public function getShipinstrty()
    {
        return $this->container['shipinstrty'];
    }

    /**
     * Sets shipinstrty
     *
     * @param string $shipinstrty shipinstrty
     *
     * @return $this
     */
    public function setShipinstrty($shipinstrty)
    {
        $this->container['shipinstrty'] = $shipinstrty;

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


