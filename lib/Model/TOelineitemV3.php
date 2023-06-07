<?php
/**
 * TOelineitemV3
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
 * TOelineitemV3 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TOelineitemV3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-oelineitemV3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_no' => 'int',
        'spec_ns_type' => 'string',
        'prod' => 'string',
        'desc1' => 'string',
        'desc2' => 'string',
        'unit' => 'string',
        'qty_ord' => 'double',
        'qty_ship' => 'double',
        'price' => 'double',
        'disc_amt' => 'double',
        'disc_type' => 'string',
        'net_ord' => 'double',
        'net_amt' => 'double',
        'sort_fld' => 'string',
        'rushfl' => 'bool',
        'botype' => 'string',
        'promisedt' => '\DateTime',
        'reqshipdt' => '\DateTime',
        'ordertype' => 'string',
        'orderaltno' => 'int',
        'tiedorder' => 'string',
        'bono' => 'int',
        'stkqtyord' => 'double',
        'stkqtyship' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_no' => 'int64',
        'spec_ns_type' => null,
        'prod' => null,
        'desc1' => null,
        'desc2' => null,
        'unit' => null,
        'qty_ord' => 'double',
        'qty_ship' => 'double',
        'price' => 'double',
        'disc_amt' => 'double',
        'disc_type' => null,
        'net_ord' => 'double',
        'net_amt' => 'double',
        'sort_fld' => null,
        'rushfl' => null,
        'botype' => null,
        'promisedt' => 'date',
        'reqshipdt' => 'date',
        'ordertype' => null,
        'orderaltno' => 'int64',
        'tiedorder' => null,
        'bono' => 'int64',
        'stkqtyord' => 'double',
        'stkqtyship' => 'double'
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
        'line_no' => 'lineNo',
        'spec_ns_type' => 'specNsType',
        'prod' => 'prod',
        'desc1' => 'desc1',
        'desc2' => 'desc2',
        'unit' => 'unit',
        'qty_ord' => 'qtyOrd',
        'qty_ship' => 'qtyShip',
        'price' => 'price',
        'disc_amt' => 'discAmt',
        'disc_type' => 'discType',
        'net_ord' => 'netOrd',
        'net_amt' => 'netAmt',
        'sort_fld' => 'sortFld',
        'rushfl' => 'rushfl',
        'botype' => 'botype',
        'promisedt' => 'promisedt',
        'reqshipdt' => 'reqshipdt',
        'ordertype' => 'ordertype',
        'orderaltno' => 'orderaltno',
        'tiedorder' => 'tiedorder',
        'bono' => 'bono',
        'stkqtyord' => 'stkqtyord',
        'stkqtyship' => 'stkqtyship'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_no' => 'setLineNo',
        'spec_ns_type' => 'setSpecNsType',
        'prod' => 'setProd',
        'desc1' => 'setDesc1',
        'desc2' => 'setDesc2',
        'unit' => 'setUnit',
        'qty_ord' => 'setQtyOrd',
        'qty_ship' => 'setQtyShip',
        'price' => 'setPrice',
        'disc_amt' => 'setDiscAmt',
        'disc_type' => 'setDiscType',
        'net_ord' => 'setNetOrd',
        'net_amt' => 'setNetAmt',
        'sort_fld' => 'setSortFld',
        'rushfl' => 'setRushfl',
        'botype' => 'setBotype',
        'promisedt' => 'setPromisedt',
        'reqshipdt' => 'setReqshipdt',
        'ordertype' => 'setOrdertype',
        'orderaltno' => 'setOrderaltno',
        'tiedorder' => 'setTiedorder',
        'bono' => 'setBono',
        'stkqtyord' => 'setStkqtyord',
        'stkqtyship' => 'setStkqtyship'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_no' => 'getLineNo',
        'spec_ns_type' => 'getSpecNsType',
        'prod' => 'getProd',
        'desc1' => 'getDesc1',
        'desc2' => 'getDesc2',
        'unit' => 'getUnit',
        'qty_ord' => 'getQtyOrd',
        'qty_ship' => 'getQtyShip',
        'price' => 'getPrice',
        'disc_amt' => 'getDiscAmt',
        'disc_type' => 'getDiscType',
        'net_ord' => 'getNetOrd',
        'net_amt' => 'getNetAmt',
        'sort_fld' => 'getSortFld',
        'rushfl' => 'getRushfl',
        'botype' => 'getBotype',
        'promisedt' => 'getPromisedt',
        'reqshipdt' => 'getReqshipdt',
        'ordertype' => 'getOrdertype',
        'orderaltno' => 'getOrderaltno',
        'tiedorder' => 'getTiedorder',
        'bono' => 'getBono',
        'stkqtyord' => 'getStkqtyord',
        'stkqtyship' => 'getStkqtyship'
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
        $this->container['line_no'] = isset($data['line_no']) ? $data['line_no'] : null;
        $this->container['spec_ns_type'] = isset($data['spec_ns_type']) ? $data['spec_ns_type'] : null;
        $this->container['prod'] = isset($data['prod']) ? $data['prod'] : null;
        $this->container['desc1'] = isset($data['desc1']) ? $data['desc1'] : null;
        $this->container['desc2'] = isset($data['desc2']) ? $data['desc2'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['qty_ord'] = isset($data['qty_ord']) ? $data['qty_ord'] : null;
        $this->container['qty_ship'] = isset($data['qty_ship']) ? $data['qty_ship'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['disc_amt'] = isset($data['disc_amt']) ? $data['disc_amt'] : null;
        $this->container['disc_type'] = isset($data['disc_type']) ? $data['disc_type'] : null;
        $this->container['net_ord'] = isset($data['net_ord']) ? $data['net_ord'] : null;
        $this->container['net_amt'] = isset($data['net_amt']) ? $data['net_amt'] : null;
        $this->container['sort_fld'] = isset($data['sort_fld']) ? $data['sort_fld'] : null;
        $this->container['rushfl'] = isset($data['rushfl']) ? $data['rushfl'] : null;
        $this->container['botype'] = isset($data['botype']) ? $data['botype'] : null;
        $this->container['promisedt'] = isset($data['promisedt']) ? $data['promisedt'] : null;
        $this->container['reqshipdt'] = isset($data['reqshipdt']) ? $data['reqshipdt'] : null;
        $this->container['ordertype'] = isset($data['ordertype']) ? $data['ordertype'] : null;
        $this->container['orderaltno'] = isset($data['orderaltno']) ? $data['orderaltno'] : null;
        $this->container['tiedorder'] = isset($data['tiedorder']) ? $data['tiedorder'] : null;
        $this->container['bono'] = isset($data['bono']) ? $data['bono'] : null;
        $this->container['stkqtyord'] = isset($data['stkqtyord']) ? $data['stkqtyord'] : null;
        $this->container['stkqtyship'] = isset($data['stkqtyship']) ? $data['stkqtyship'] : null;
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
     * Gets line_no
     *
     * @return int
     */
    public function getLineNo()
    {
        return $this->container['line_no'];
    }

    /**
     * Sets line_no
     *
     * @param int $line_no line_no
     *
     * @return $this
     */
    public function setLineNo($line_no)
    {
        $this->container['line_no'] = $line_no;

        return $this;
    }

    /**
     * Gets spec_ns_type
     *
     * @return string
     */
    public function getSpecNsType()
    {
        return $this->container['spec_ns_type'];
    }

    /**
     * Sets spec_ns_type
     *
     * @param string $spec_ns_type spec_ns_type
     *
     * @return $this
     */
    public function setSpecNsType($spec_ns_type)
    {
        $this->container['spec_ns_type'] = $spec_ns_type;

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
     * Gets desc1
     *
     * @return string
     */
    public function getDesc1()
    {
        return $this->container['desc1'];
    }

    /**
     * Sets desc1
     *
     * @param string $desc1 desc1
     *
     * @return $this
     */
    public function setDesc1($desc1)
    {
        $this->container['desc1'] = $desc1;

        return $this;
    }

    /**
     * Gets desc2
     *
     * @return string
     */
    public function getDesc2()
    {
        return $this->container['desc2'];
    }

    /**
     * Sets desc2
     *
     * @param string $desc2 desc2
     *
     * @return $this
     */
    public function setDesc2($desc2)
    {
        $this->container['desc2'] = $desc2;

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
     * Gets qty_ord
     *
     * @return double
     */
    public function getQtyOrd()
    {
        return $this->container['qty_ord'];
    }

    /**
     * Sets qty_ord
     *
     * @param double $qty_ord qty_ord
     *
     * @return $this
     */
    public function setQtyOrd($qty_ord)
    {
        $this->container['qty_ord'] = $qty_ord;

        return $this;
    }

    /**
     * Gets qty_ship
     *
     * @return double
     */
    public function getQtyShip()
    {
        return $this->container['qty_ship'];
    }

    /**
     * Sets qty_ship
     *
     * @param double $qty_ship qty_ship
     *
     * @return $this
     */
    public function setQtyShip($qty_ship)
    {
        $this->container['qty_ship'] = $qty_ship;

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
     * Gets disc_amt
     *
     * @return double
     */
    public function getDiscAmt()
    {
        return $this->container['disc_amt'];
    }

    /**
     * Sets disc_amt
     *
     * @param double $disc_amt disc_amt
     *
     * @return $this
     */
    public function setDiscAmt($disc_amt)
    {
        $this->container['disc_amt'] = $disc_amt;

        return $this;
    }

    /**
     * Gets disc_type
     *
     * @return string
     */
    public function getDiscType()
    {
        return $this->container['disc_type'];
    }

    /**
     * Sets disc_type
     *
     * @param string $disc_type disc_type
     *
     * @return $this
     */
    public function setDiscType($disc_type)
    {
        $this->container['disc_type'] = $disc_type;

        return $this;
    }

    /**
     * Gets net_ord
     *
     * @return double
     */
    public function getNetOrd()
    {
        return $this->container['net_ord'];
    }

    /**
     * Sets net_ord
     *
     * @param double $net_ord net_ord
     *
     * @return $this
     */
    public function setNetOrd($net_ord)
    {
        $this->container['net_ord'] = $net_ord;

        return $this;
    }

    /**
     * Gets net_amt
     *
     * @return double
     */
    public function getNetAmt()
    {
        return $this->container['net_amt'];
    }

    /**
     * Sets net_amt
     *
     * @param double $net_amt net_amt
     *
     * @return $this
     */
    public function setNetAmt($net_amt)
    {
        $this->container['net_amt'] = $net_amt;

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
     * Gets rushfl
     *
     * @return bool
     */
    public function getRushfl()
    {
        return $this->container['rushfl'];
    }

    /**
     * Sets rushfl
     *
     * @param bool $rushfl rushfl
     *
     * @return $this
     */
    public function setRushfl($rushfl)
    {
        $this->container['rushfl'] = $rushfl;

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
     * Gets tiedorder
     *
     * @return string
     */
    public function getTiedorder()
    {
        return $this->container['tiedorder'];
    }

    /**
     * Sets tiedorder
     *
     * @param string $tiedorder tiedorder
     *
     * @return $this
     */
    public function setTiedorder($tiedorder)
    {
        $this->container['tiedorder'] = $tiedorder;

        return $this;
    }

    /**
     * Gets bono
     *
     * @return int
     */
    public function getBono()
    {
        return $this->container['bono'];
    }

    /**
     * Sets bono
     *
     * @param int $bono bono
     *
     * @return $this
     */
    public function setBono($bono)
    {
        $this->container['bono'] = $bono;

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
     * Gets stkqtyship
     *
     * @return double
     */
    public function getStkqtyship()
    {
        return $this->container['stkqtyship'];
    }

    /**
     * Sets stkqtyship
     *
     * @param double $stkqtyship stkqtyship
     *
     * @return $this
     */
    public function setStkqtyship($stkqtyship)
    {
        $this->container['stkqtyship'] = $stkqtyship;

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

