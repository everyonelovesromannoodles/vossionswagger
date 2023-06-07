<?php
/**
 * TPolist
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
 * TPolist Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TPolist implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-polist';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pono' => 'int',
        'posuf' => 'int',
        'notesfl' => 'string',
        'vendno' => 'double',
        'shipfmno' => 'int',
        'whse' => 'string',
        'transtype' => 'string',
        'stagecd' => 'int',
        'stagecdwords' => 'string',
        'buyer' => 'string',
        'costeddt' => '\DateTime',
        'duedt' => '\DateTime',
        'enterdt' => '\DateTime',
        'orderdt' => '\DateTime',
        'paiddt' => '\DateTime',
        'printeddt' => '\DateTime',
        'receiptdt' => '\DateTime',
        'reqshipdt' => '\DateTime',
        'totqtyord' => 'double',
        'sort_fld' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pono' => 'int64',
        'posuf' => 'int64',
        'notesfl' => null,
        'vendno' => 'double',
        'shipfmno' => 'int64',
        'whse' => null,
        'transtype' => null,
        'stagecd' => 'int64',
        'stagecdwords' => null,
        'buyer' => null,
        'costeddt' => 'date',
        'duedt' => 'date',
        'enterdt' => 'date',
        'orderdt' => 'date',
        'paiddt' => 'date',
        'printeddt' => 'date',
        'receiptdt' => 'date',
        'reqshipdt' => 'date',
        'totqtyord' => 'double',
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
        'pono' => 'pono',
        'posuf' => 'posuf',
        'notesfl' => 'notesfl',
        'vendno' => 'vendno',
        'shipfmno' => 'shipfmno',
        'whse' => 'whse',
        'transtype' => 'transtype',
        'stagecd' => 'stagecd',
        'stagecdwords' => 'stagecdwords',
        'buyer' => 'buyer',
        'costeddt' => 'costeddt',
        'duedt' => 'duedt',
        'enterdt' => 'enterdt',
        'orderdt' => 'orderdt',
        'paiddt' => 'paiddt',
        'printeddt' => 'printeddt',
        'receiptdt' => 'receiptdt',
        'reqshipdt' => 'reqshipdt',
        'totqtyord' => 'totqtyord',
        'sort_fld' => 'sortFld'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pono' => 'setPono',
        'posuf' => 'setPosuf',
        'notesfl' => 'setNotesfl',
        'vendno' => 'setVendno',
        'shipfmno' => 'setShipfmno',
        'whse' => 'setWhse',
        'transtype' => 'setTranstype',
        'stagecd' => 'setStagecd',
        'stagecdwords' => 'setStagecdwords',
        'buyer' => 'setBuyer',
        'costeddt' => 'setCosteddt',
        'duedt' => 'setDuedt',
        'enterdt' => 'setEnterdt',
        'orderdt' => 'setOrderdt',
        'paiddt' => 'setPaiddt',
        'printeddt' => 'setPrinteddt',
        'receiptdt' => 'setReceiptdt',
        'reqshipdt' => 'setReqshipdt',
        'totqtyord' => 'setTotqtyord',
        'sort_fld' => 'setSortFld'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pono' => 'getPono',
        'posuf' => 'getPosuf',
        'notesfl' => 'getNotesfl',
        'vendno' => 'getVendno',
        'shipfmno' => 'getShipfmno',
        'whse' => 'getWhse',
        'transtype' => 'getTranstype',
        'stagecd' => 'getStagecd',
        'stagecdwords' => 'getStagecdwords',
        'buyer' => 'getBuyer',
        'costeddt' => 'getCosteddt',
        'duedt' => 'getDuedt',
        'enterdt' => 'getEnterdt',
        'orderdt' => 'getOrderdt',
        'paiddt' => 'getPaiddt',
        'printeddt' => 'getPrinteddt',
        'receiptdt' => 'getReceiptdt',
        'reqshipdt' => 'getReqshipdt',
        'totqtyord' => 'getTotqtyord',
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
        $this->container['pono'] = isset($data['pono']) ? $data['pono'] : null;
        $this->container['posuf'] = isset($data['posuf']) ? $data['posuf'] : null;
        $this->container['notesfl'] = isset($data['notesfl']) ? $data['notesfl'] : null;
        $this->container['vendno'] = isset($data['vendno']) ? $data['vendno'] : null;
        $this->container['shipfmno'] = isset($data['shipfmno']) ? $data['shipfmno'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['transtype'] = isset($data['transtype']) ? $data['transtype'] : null;
        $this->container['stagecd'] = isset($data['stagecd']) ? $data['stagecd'] : null;
        $this->container['stagecdwords'] = isset($data['stagecdwords']) ? $data['stagecdwords'] : null;
        $this->container['buyer'] = isset($data['buyer']) ? $data['buyer'] : null;
        $this->container['costeddt'] = isset($data['costeddt']) ? $data['costeddt'] : null;
        $this->container['duedt'] = isset($data['duedt']) ? $data['duedt'] : null;
        $this->container['enterdt'] = isset($data['enterdt']) ? $data['enterdt'] : null;
        $this->container['orderdt'] = isset($data['orderdt']) ? $data['orderdt'] : null;
        $this->container['paiddt'] = isset($data['paiddt']) ? $data['paiddt'] : null;
        $this->container['printeddt'] = isset($data['printeddt']) ? $data['printeddt'] : null;
        $this->container['receiptdt'] = isset($data['receiptdt']) ? $data['receiptdt'] : null;
        $this->container['reqshipdt'] = isset($data['reqshipdt']) ? $data['reqshipdt'] : null;
        $this->container['totqtyord'] = isset($data['totqtyord']) ? $data['totqtyord'] : null;
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
     * Gets pono
     *
     * @return int
     */
    public function getPono()
    {
        return $this->container['pono'];
    }

    /**
     * Sets pono
     *
     * @param int $pono pono
     *
     * @return $this
     */
    public function setPono($pono)
    {
        $this->container['pono'] = $pono;

        return $this;
    }

    /**
     * Gets posuf
     *
     * @return int
     */
    public function getPosuf()
    {
        return $this->container['posuf'];
    }

    /**
     * Sets posuf
     *
     * @param int $posuf posuf
     *
     * @return $this
     */
    public function setPosuf($posuf)
    {
        $this->container['posuf'] = $posuf;

        return $this;
    }

    /**
     * Gets notesfl
     *
     * @return string
     */
    public function getNotesfl()
    {
        return $this->container['notesfl'];
    }

    /**
     * Sets notesfl
     *
     * @param string $notesfl notesfl
     *
     * @return $this
     */
    public function setNotesfl($notesfl)
    {
        $this->container['notesfl'] = $notesfl;

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
     * Gets shipfmno
     *
     * @return int
     */
    public function getShipfmno()
    {
        return $this->container['shipfmno'];
    }

    /**
     * Sets shipfmno
     *
     * @param int $shipfmno shipfmno
     *
     * @return $this
     */
    public function setShipfmno($shipfmno)
    {
        $this->container['shipfmno'] = $shipfmno;

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
     * Gets transtype
     *
     * @return string
     */
    public function getTranstype()
    {
        return $this->container['transtype'];
    }

    /**
     * Sets transtype
     *
     * @param string $transtype transtype
     *
     * @return $this
     */
    public function setTranstype($transtype)
    {
        $this->container['transtype'] = $transtype;

        return $this;
    }

    /**
     * Gets stagecd
     *
     * @return int
     */
    public function getStagecd()
    {
        return $this->container['stagecd'];
    }

    /**
     * Sets stagecd
     *
     * @param int $stagecd stagecd
     *
     * @return $this
     */
    public function setStagecd($stagecd)
    {
        $this->container['stagecd'] = $stagecd;

        return $this;
    }

    /**
     * Gets stagecdwords
     *
     * @return string
     */
    public function getStagecdwords()
    {
        return $this->container['stagecdwords'];
    }

    /**
     * Sets stagecdwords
     *
     * @param string $stagecdwords stagecdwords
     *
     * @return $this
     */
    public function setStagecdwords($stagecdwords)
    {
        $this->container['stagecdwords'] = $stagecdwords;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return string
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param string $buyer buyer
     *
     * @return $this
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets costeddt
     *
     * @return \DateTime
     */
    public function getCosteddt()
    {
        return $this->container['costeddt'];
    }

    /**
     * Sets costeddt
     *
     * @param \DateTime $costeddt costeddt
     *
     * @return $this
     */
    public function setCosteddt($costeddt)
    {
        $this->container['costeddt'] = $costeddt;

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
     * Gets orderdt
     *
     * @return \DateTime
     */
    public function getOrderdt()
    {
        return $this->container['orderdt'];
    }

    /**
     * Sets orderdt
     *
     * @param \DateTime $orderdt orderdt
     *
     * @return $this
     */
    public function setOrderdt($orderdt)
    {
        $this->container['orderdt'] = $orderdt;

        return $this;
    }

    /**
     * Gets paiddt
     *
     * @return \DateTime
     */
    public function getPaiddt()
    {
        return $this->container['paiddt'];
    }

    /**
     * Sets paiddt
     *
     * @param \DateTime $paiddt paiddt
     *
     * @return $this
     */
    public function setPaiddt($paiddt)
    {
        $this->container['paiddt'] = $paiddt;

        return $this;
    }

    /**
     * Gets printeddt
     *
     * @return \DateTime
     */
    public function getPrinteddt()
    {
        return $this->container['printeddt'];
    }

    /**
     * Sets printeddt
     *
     * @param \DateTime $printeddt printeddt
     *
     * @return $this
     */
    public function setPrinteddt($printeddt)
    {
        $this->container['printeddt'] = $printeddt;

        return $this;
    }

    /**
     * Gets receiptdt
     *
     * @return \DateTime
     */
    public function getReceiptdt()
    {
        return $this->container['receiptdt'];
    }

    /**
     * Sets receiptdt
     *
     * @param \DateTime $receiptdt receiptdt
     *
     * @return $this
     */
    public function setReceiptdt($receiptdt)
    {
        $this->container['receiptdt'] = $receiptdt;

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
     * Gets totqtyord
     *
     * @return double
     */
    public function getTotqtyord()
    {
        return $this->container['totqtyord'];
    }

    /**
     * Sets totqtyord
     *
     * @param double $totqtyord totqtyord
     *
     * @return $this
     */
    public function setTotqtyord($totqtyord)
    {
        $this->container['totqtyord'] = $totqtyord;

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


