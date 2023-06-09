<?php
/**
 * TOptnprod
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
 * TOptnprod Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TOptnprod implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-optnprod';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'seqno' => 'double',
        'prod' => 'string',
        'notesfl' => 'string',
        'proddesc' => 'string',
        'proddesc2' => 'string',
        'qtyship' => 'double',
        'unit' => 'string',
        'chrg' => 'string',
        'qtyavail' => 'double',
        'qtyavaild' => 'double',
        'conv' => 'double',
        'price' => 'double',
        'priceoverfl' => 'bool',
        'discoverfl' => 'bool',
        'discamt' => 'double',
        'disctype' => 'bool',
        'addswoptprodfl' => 'bool',
        'prodcat' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'seqno' => 'double',
        'prod' => null,
        'notesfl' => null,
        'proddesc' => null,
        'proddesc2' => null,
        'qtyship' => 'double',
        'unit' => null,
        'chrg' => null,
        'qtyavail' => 'double',
        'qtyavaild' => 'double',
        'conv' => 'double',
        'price' => 'double',
        'priceoverfl' => null,
        'discoverfl' => null,
        'discamt' => 'double',
        'disctype' => null,
        'addswoptprodfl' => null,
        'prodcat' => null
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
        'prod' => 'prod',
        'notesfl' => 'notesfl',
        'proddesc' => 'proddesc',
        'proddesc2' => 'proddesc2',
        'qtyship' => 'qtyship',
        'unit' => 'unit',
        'chrg' => 'chrg',
        'qtyavail' => 'qtyavail',
        'qtyavaild' => 'qtyavaild',
        'conv' => 'conv',
        'price' => 'price',
        'priceoverfl' => 'priceoverfl',
        'discoverfl' => 'discoverfl',
        'discamt' => 'discamt',
        'disctype' => 'disctype',
        'addswoptprodfl' => 'addswoptprodfl',
        'prodcat' => 'prodcat'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'seqno' => 'setSeqno',
        'prod' => 'setProd',
        'notesfl' => 'setNotesfl',
        'proddesc' => 'setProddesc',
        'proddesc2' => 'setProddesc2',
        'qtyship' => 'setQtyship',
        'unit' => 'setUnit',
        'chrg' => 'setChrg',
        'qtyavail' => 'setQtyavail',
        'qtyavaild' => 'setQtyavaild',
        'conv' => 'setConv',
        'price' => 'setPrice',
        'priceoverfl' => 'setPriceoverfl',
        'discoverfl' => 'setDiscoverfl',
        'discamt' => 'setDiscamt',
        'disctype' => 'setDisctype',
        'addswoptprodfl' => 'setAddswoptprodfl',
        'prodcat' => 'setProdcat'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'seqno' => 'getSeqno',
        'prod' => 'getProd',
        'notesfl' => 'getNotesfl',
        'proddesc' => 'getProddesc',
        'proddesc2' => 'getProddesc2',
        'qtyship' => 'getQtyship',
        'unit' => 'getUnit',
        'chrg' => 'getChrg',
        'qtyavail' => 'getQtyavail',
        'qtyavaild' => 'getQtyavaild',
        'conv' => 'getConv',
        'price' => 'getPrice',
        'priceoverfl' => 'getPriceoverfl',
        'discoverfl' => 'getDiscoverfl',
        'discamt' => 'getDiscamt',
        'disctype' => 'getDisctype',
        'addswoptprodfl' => 'getAddswoptprodfl',
        'prodcat' => 'getProdcat'
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
        $this->container['prod'] = isset($data['prod']) ? $data['prod'] : null;
        $this->container['notesfl'] = isset($data['notesfl']) ? $data['notesfl'] : null;
        $this->container['proddesc'] = isset($data['proddesc']) ? $data['proddesc'] : null;
        $this->container['proddesc2'] = isset($data['proddesc2']) ? $data['proddesc2'] : null;
        $this->container['qtyship'] = isset($data['qtyship']) ? $data['qtyship'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['chrg'] = isset($data['chrg']) ? $data['chrg'] : null;
        $this->container['qtyavail'] = isset($data['qtyavail']) ? $data['qtyavail'] : null;
        $this->container['qtyavaild'] = isset($data['qtyavaild']) ? $data['qtyavaild'] : null;
        $this->container['conv'] = isset($data['conv']) ? $data['conv'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['priceoverfl'] = isset($data['priceoverfl']) ? $data['priceoverfl'] : null;
        $this->container['discoverfl'] = isset($data['discoverfl']) ? $data['discoverfl'] : null;
        $this->container['discamt'] = isset($data['discamt']) ? $data['discamt'] : null;
        $this->container['disctype'] = isset($data['disctype']) ? $data['disctype'] : null;
        $this->container['addswoptprodfl'] = isset($data['addswoptprodfl']) ? $data['addswoptprodfl'] : null;
        $this->container['prodcat'] = isset($data['prodcat']) ? $data['prodcat'] : null;
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
     * @return double
     */
    public function getSeqno()
    {
        return $this->container['seqno'];
    }

    /**
     * Sets seqno
     *
     * @param double $seqno seqno
     *
     * @return $this
     */
    public function setSeqno($seqno)
    {
        $this->container['seqno'] = $seqno;

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
     * Gets proddesc
     *
     * @return string
     */
    public function getProddesc()
    {
        return $this->container['proddesc'];
    }

    /**
     * Sets proddesc
     *
     * @param string $proddesc proddesc
     *
     * @return $this
     */
    public function setProddesc($proddesc)
    {
        $this->container['proddesc'] = $proddesc;

        return $this;
    }

    /**
     * Gets proddesc2
     *
     * @return string
     */
    public function getProddesc2()
    {
        return $this->container['proddesc2'];
    }

    /**
     * Sets proddesc2
     *
     * @param string $proddesc2 proddesc2
     *
     * @return $this
     */
    public function setProddesc2($proddesc2)
    {
        $this->container['proddesc2'] = $proddesc2;

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
     * Gets chrg
     *
     * @return string
     */
    public function getChrg()
    {
        return $this->container['chrg'];
    }

    /**
     * Sets chrg
     *
     * @param string $chrg chrg
     *
     * @return $this
     */
    public function setChrg($chrg)
    {
        $this->container['chrg'] = $chrg;

        return $this;
    }

    /**
     * Gets qtyavail
     *
     * @return double
     */
    public function getQtyavail()
    {
        return $this->container['qtyavail'];
    }

    /**
     * Sets qtyavail
     *
     * @param double $qtyavail qtyavail
     *
     * @return $this
     */
    public function setQtyavail($qtyavail)
    {
        $this->container['qtyavail'] = $qtyavail;

        return $this;
    }

    /**
     * Gets qtyavaild
     *
     * @return double
     */
    public function getQtyavaild()
    {
        return $this->container['qtyavaild'];
    }

    /**
     * Sets qtyavaild
     *
     * @param double $qtyavaild qtyavaild
     *
     * @return $this
     */
    public function setQtyavaild($qtyavaild)
    {
        $this->container['qtyavaild'] = $qtyavaild;

        return $this;
    }

    /**
     * Gets conv
     *
     * @return double
     */
    public function getConv()
    {
        return $this->container['conv'];
    }

    /**
     * Sets conv
     *
     * @param double $conv conv
     *
     * @return $this
     */
    public function setConv($conv)
    {
        $this->container['conv'] = $conv;

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
     * Gets priceoverfl
     *
     * @return bool
     */
    public function getPriceoverfl()
    {
        return $this->container['priceoverfl'];
    }

    /**
     * Sets priceoverfl
     *
     * @param bool $priceoverfl priceoverfl
     *
     * @return $this
     */
    public function setPriceoverfl($priceoverfl)
    {
        $this->container['priceoverfl'] = $priceoverfl;

        return $this;
    }

    /**
     * Gets discoverfl
     *
     * @return bool
     */
    public function getDiscoverfl()
    {
        return $this->container['discoverfl'];
    }

    /**
     * Sets discoverfl
     *
     * @param bool $discoverfl discoverfl
     *
     * @return $this
     */
    public function setDiscoverfl($discoverfl)
    {
        $this->container['discoverfl'] = $discoverfl;

        return $this;
    }

    /**
     * Gets discamt
     *
     * @return double
     */
    public function getDiscamt()
    {
        return $this->container['discamt'];
    }

    /**
     * Sets discamt
     *
     * @param double $discamt discamt
     *
     * @return $this
     */
    public function setDiscamt($discamt)
    {
        $this->container['discamt'] = $discamt;

        return $this;
    }

    /**
     * Gets disctype
     *
     * @return bool
     */
    public function getDisctype()
    {
        return $this->container['disctype'];
    }

    /**
     * Sets disctype
     *
     * @param bool $disctype disctype
     *
     * @return $this
     */
    public function setDisctype($disctype)
    {
        $this->container['disctype'] = $disctype;

        return $this;
    }

    /**
     * Gets addswoptprodfl
     *
     * @return bool
     */
    public function getAddswoptprodfl()
    {
        return $this->container['addswoptprodfl'];
    }

    /**
     * Sets addswoptprodfl
     *
     * @param bool $addswoptprodfl addswoptprodfl
     *
     * @return $this
     */
    public function setAddswoptprodfl($addswoptprodfl)
    {
        $this->container['addswoptprodfl'] = $addswoptprodfl;

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


