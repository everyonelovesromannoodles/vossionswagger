<?php
/**
 * TOebtchln
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
 * TOebtchln Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TOebtchln implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-oebtchln';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'batchnm' => 'string',
        'seqno' => 'int',
        'lineno' => 'int',
        'specnstype' => 'string',
        'shipprod' => 'string',
        'proddesc' => 'string',
        'prodnotesfl' => 'string',
        'commentfl' => 'string',
        'qtyord' => 'double',
        'stkqtyord' => 'double',
        'unit' => 'string',
        'oeelbrecid' => 'string',
        'csunperstk' => 'double',
        'specconv' => 'int',
        'prccostper' => 'string',
        'speccostty' => 'string',
        'icspecrecno' => 'int',
        'price' => 'double',
        'prodcost' => 'double',
        'discamt' => 'double',
        'netamt' => 'double',
        'dsplprice' => 'string',
        'dspldiscamt' => 'string',
        'dsplnetamt' => 'string',
        'sortfld' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'batchnm' => null,
        'seqno' => 'int64',
        'lineno' => 'int64',
        'specnstype' => null,
        'shipprod' => null,
        'proddesc' => null,
        'prodnotesfl' => null,
        'commentfl' => null,
        'qtyord' => 'double',
        'stkqtyord' => 'double',
        'unit' => null,
        'oeelbrecid' => null,
        'csunperstk' => 'double',
        'specconv' => 'int64',
        'prccostper' => null,
        'speccostty' => null,
        'icspecrecno' => 'int64',
        'price' => 'double',
        'prodcost' => 'double',
        'discamt' => 'double',
        'netamt' => 'double',
        'dsplprice' => null,
        'dspldiscamt' => null,
        'dsplnetamt' => null,
        'sortfld' => null
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
        'batchnm' => 'batchnm',
        'seqno' => 'seqno',
        'lineno' => 'lineno',
        'specnstype' => 'specnstype',
        'shipprod' => 'shipprod',
        'proddesc' => 'proddesc',
        'prodnotesfl' => 'prodnotesfl',
        'commentfl' => 'commentfl',
        'qtyord' => 'qtyord',
        'stkqtyord' => 'stkqtyord',
        'unit' => 'unit',
        'oeelbrecid' => 'oeelbrecid',
        'csunperstk' => 'csunperstk',
        'specconv' => 'specconv',
        'prccostper' => 'prccostper',
        'speccostty' => 'speccostty',
        'icspecrecno' => 'icspecrecno',
        'price' => 'price',
        'prodcost' => 'prodcost',
        'discamt' => 'discamt',
        'netamt' => 'netamt',
        'dsplprice' => 'dsplprice',
        'dspldiscamt' => 'dspldiscamt',
        'dsplnetamt' => 'dsplnetamt',
        'sortfld' => 'sortfld'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'batchnm' => 'setBatchnm',
        'seqno' => 'setSeqno',
        'lineno' => 'setLineno',
        'specnstype' => 'setSpecnstype',
        'shipprod' => 'setShipprod',
        'proddesc' => 'setProddesc',
        'prodnotesfl' => 'setProdnotesfl',
        'commentfl' => 'setCommentfl',
        'qtyord' => 'setQtyord',
        'stkqtyord' => 'setStkqtyord',
        'unit' => 'setUnit',
        'oeelbrecid' => 'setOeelbrecid',
        'csunperstk' => 'setCsunperstk',
        'specconv' => 'setSpecconv',
        'prccostper' => 'setPrccostper',
        'speccostty' => 'setSpeccostty',
        'icspecrecno' => 'setIcspecrecno',
        'price' => 'setPrice',
        'prodcost' => 'setProdcost',
        'discamt' => 'setDiscamt',
        'netamt' => 'setNetamt',
        'dsplprice' => 'setDsplprice',
        'dspldiscamt' => 'setDspldiscamt',
        'dsplnetamt' => 'setDsplnetamt',
        'sortfld' => 'setSortfld'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'batchnm' => 'getBatchnm',
        'seqno' => 'getSeqno',
        'lineno' => 'getLineno',
        'specnstype' => 'getSpecnstype',
        'shipprod' => 'getShipprod',
        'proddesc' => 'getProddesc',
        'prodnotesfl' => 'getProdnotesfl',
        'commentfl' => 'getCommentfl',
        'qtyord' => 'getQtyord',
        'stkqtyord' => 'getStkqtyord',
        'unit' => 'getUnit',
        'oeelbrecid' => 'getOeelbrecid',
        'csunperstk' => 'getCsunperstk',
        'specconv' => 'getSpecconv',
        'prccostper' => 'getPrccostper',
        'speccostty' => 'getSpeccostty',
        'icspecrecno' => 'getIcspecrecno',
        'price' => 'getPrice',
        'prodcost' => 'getProdcost',
        'discamt' => 'getDiscamt',
        'netamt' => 'getNetamt',
        'dsplprice' => 'getDsplprice',
        'dspldiscamt' => 'getDspldiscamt',
        'dsplnetamt' => 'getDsplnetamt',
        'sortfld' => 'getSortfld'
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
        $this->container['batchnm'] = isset($data['batchnm']) ? $data['batchnm'] : null;
        $this->container['seqno'] = isset($data['seqno']) ? $data['seqno'] : null;
        $this->container['lineno'] = isset($data['lineno']) ? $data['lineno'] : null;
        $this->container['specnstype'] = isset($data['specnstype']) ? $data['specnstype'] : null;
        $this->container['shipprod'] = isset($data['shipprod']) ? $data['shipprod'] : null;
        $this->container['proddesc'] = isset($data['proddesc']) ? $data['proddesc'] : null;
        $this->container['prodnotesfl'] = isset($data['prodnotesfl']) ? $data['prodnotesfl'] : null;
        $this->container['commentfl'] = isset($data['commentfl']) ? $data['commentfl'] : null;
        $this->container['qtyord'] = isset($data['qtyord']) ? $data['qtyord'] : null;
        $this->container['stkqtyord'] = isset($data['stkqtyord']) ? $data['stkqtyord'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['oeelbrecid'] = isset($data['oeelbrecid']) ? $data['oeelbrecid'] : null;
        $this->container['csunperstk'] = isset($data['csunperstk']) ? $data['csunperstk'] : null;
        $this->container['specconv'] = isset($data['specconv']) ? $data['specconv'] : null;
        $this->container['prccostper'] = isset($data['prccostper']) ? $data['prccostper'] : null;
        $this->container['speccostty'] = isset($data['speccostty']) ? $data['speccostty'] : null;
        $this->container['icspecrecno'] = isset($data['icspecrecno']) ? $data['icspecrecno'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['prodcost'] = isset($data['prodcost']) ? $data['prodcost'] : null;
        $this->container['discamt'] = isset($data['discamt']) ? $data['discamt'] : null;
        $this->container['netamt'] = isset($data['netamt']) ? $data['netamt'] : null;
        $this->container['dsplprice'] = isset($data['dsplprice']) ? $data['dsplprice'] : null;
        $this->container['dspldiscamt'] = isset($data['dspldiscamt']) ? $data['dspldiscamt'] : null;
        $this->container['dsplnetamt'] = isset($data['dsplnetamt']) ? $data['dsplnetamt'] : null;
        $this->container['sortfld'] = isset($data['sortfld']) ? $data['sortfld'] : null;
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
     * Gets batchnm
     *
     * @return string
     */
    public function getBatchnm()
    {
        return $this->container['batchnm'];
    }

    /**
     * Sets batchnm
     *
     * @param string $batchnm batchnm
     *
     * @return $this
     */
    public function setBatchnm($batchnm)
    {
        $this->container['batchnm'] = $batchnm;

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
     * Gets shipprod
     *
     * @return string
     */
    public function getShipprod()
    {
        return $this->container['shipprod'];
    }

    /**
     * Sets shipprod
     *
     * @param string $shipprod shipprod
     *
     * @return $this
     */
    public function setShipprod($shipprod)
    {
        $this->container['shipprod'] = $shipprod;

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
     * Gets prodnotesfl
     *
     * @return string
     */
    public function getProdnotesfl()
    {
        return $this->container['prodnotesfl'];
    }

    /**
     * Sets prodnotesfl
     *
     * @param string $prodnotesfl prodnotesfl
     *
     * @return $this
     */
    public function setProdnotesfl($prodnotesfl)
    {
        $this->container['prodnotesfl'] = $prodnotesfl;

        return $this;
    }

    /**
     * Gets commentfl
     *
     * @return string
     */
    public function getCommentfl()
    {
        return $this->container['commentfl'];
    }

    /**
     * Sets commentfl
     *
     * @param string $commentfl commentfl
     *
     * @return $this
     */
    public function setCommentfl($commentfl)
    {
        $this->container['commentfl'] = $commentfl;

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
     * Gets oeelbrecid
     *
     * @return string
     */
    public function getOeelbrecid()
    {
        return $this->container['oeelbrecid'];
    }

    /**
     * Sets oeelbrecid
     *
     * @param string $oeelbrecid oeelbrecid
     *
     * @return $this
     */
    public function setOeelbrecid($oeelbrecid)
    {
        $this->container['oeelbrecid'] = $oeelbrecid;

        return $this;
    }

    /**
     * Gets csunperstk
     *
     * @return double
     */
    public function getCsunperstk()
    {
        return $this->container['csunperstk'];
    }

    /**
     * Sets csunperstk
     *
     * @param double $csunperstk csunperstk
     *
     * @return $this
     */
    public function setCsunperstk($csunperstk)
    {
        $this->container['csunperstk'] = $csunperstk;

        return $this;
    }

    /**
     * Gets specconv
     *
     * @return int
     */
    public function getSpecconv()
    {
        return $this->container['specconv'];
    }

    /**
     * Sets specconv
     *
     * @param int $specconv specconv
     *
     * @return $this
     */
    public function setSpecconv($specconv)
    {
        $this->container['specconv'] = $specconv;

        return $this;
    }

    /**
     * Gets prccostper
     *
     * @return string
     */
    public function getPrccostper()
    {
        return $this->container['prccostper'];
    }

    /**
     * Sets prccostper
     *
     * @param string $prccostper prccostper
     *
     * @return $this
     */
    public function setPrccostper($prccostper)
    {
        $this->container['prccostper'] = $prccostper;

        return $this;
    }

    /**
     * Gets speccostty
     *
     * @return string
     */
    public function getSpeccostty()
    {
        return $this->container['speccostty'];
    }

    /**
     * Sets speccostty
     *
     * @param string $speccostty speccostty
     *
     * @return $this
     */
    public function setSpeccostty($speccostty)
    {
        $this->container['speccostty'] = $speccostty;

        return $this;
    }

    /**
     * Gets icspecrecno
     *
     * @return int
     */
    public function getIcspecrecno()
    {
        return $this->container['icspecrecno'];
    }

    /**
     * Sets icspecrecno
     *
     * @param int $icspecrecno icspecrecno
     *
     * @return $this
     */
    public function setIcspecrecno($icspecrecno)
    {
        $this->container['icspecrecno'] = $icspecrecno;

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
     * Gets netamt
     *
     * @return double
     */
    public function getNetamt()
    {
        return $this->container['netamt'];
    }

    /**
     * Sets netamt
     *
     * @param double $netamt netamt
     *
     * @return $this
     */
    public function setNetamt($netamt)
    {
        $this->container['netamt'] = $netamt;

        return $this;
    }

    /**
     * Gets dsplprice
     *
     * @return string
     */
    public function getDsplprice()
    {
        return $this->container['dsplprice'];
    }

    /**
     * Sets dsplprice
     *
     * @param string $dsplprice dsplprice
     *
     * @return $this
     */
    public function setDsplprice($dsplprice)
    {
        $this->container['dsplprice'] = $dsplprice;

        return $this;
    }

    /**
     * Gets dspldiscamt
     *
     * @return string
     */
    public function getDspldiscamt()
    {
        return $this->container['dspldiscamt'];
    }

    /**
     * Sets dspldiscamt
     *
     * @param string $dspldiscamt dspldiscamt
     *
     * @return $this
     */
    public function setDspldiscamt($dspldiscamt)
    {
        $this->container['dspldiscamt'] = $dspldiscamt;

        return $this;
    }

    /**
     * Gets dsplnetamt
     *
     * @return string
     */
    public function getDsplnetamt()
    {
        return $this->container['dsplnetamt'];
    }

    /**
     * Sets dsplnetamt
     *
     * @param string $dsplnetamt dsplnetamt
     *
     * @return $this
     */
    public function setDsplnetamt($dsplnetamt)
    {
        $this->container['dsplnetamt'] = $dsplnetamt;

        return $this;
    }

    /**
     * Gets sortfld
     *
     * @return string
     */
    public function getSortfld()
    {
        return $this->container['sortfld'];
    }

    /**
     * Sets sortfld
     *
     * @param string $sortfld sortfld
     *
     * @return $this
     */
    public function setSortfld($sortfld)
    {
        $this->container['sortfld'] = $sortfld;

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


