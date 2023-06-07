<?php
/**
 * ProdActItemIn
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
 * ProdActItemIn Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProdActItemIn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'prodActItemIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vend_catalog_no' => 'string',
        'upc_section1' => 'string',
        'upc_section2' => 'string',
        'upc_section3' => 'string',
        'upc_section4' => 'string',
        'upc_section5' => 'string',
        'upc_section6' => 'string',
        'upc' => 'string',
        'buyer_prod' => 'string',
        'seller_prod' => 'string',
        'line_no' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vend_catalog_no' => null,
        'upc_section1' => null,
        'upc_section2' => null,
        'upc_section3' => null,
        'upc_section4' => null,
        'upc_section5' => null,
        'upc_section6' => null,
        'upc' => null,
        'buyer_prod' => null,
        'seller_prod' => null,
        'line_no' => null
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
        'vend_catalog_no' => 'vendCatalogNo',
        'upc_section1' => 'upcSection1',
        'upc_section2' => 'upcSection2',
        'upc_section3' => 'upcSection3',
        'upc_section4' => 'upcSection4',
        'upc_section5' => 'upcSection5',
        'upc_section6' => 'upcSection6',
        'upc' => 'upc',
        'buyer_prod' => 'buyerProd',
        'seller_prod' => 'sellerProd',
        'line_no' => 'lineNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vend_catalog_no' => 'setVendCatalogNo',
        'upc_section1' => 'setUpcSection1',
        'upc_section2' => 'setUpcSection2',
        'upc_section3' => 'setUpcSection3',
        'upc_section4' => 'setUpcSection4',
        'upc_section5' => 'setUpcSection5',
        'upc_section6' => 'setUpcSection6',
        'upc' => 'setUpc',
        'buyer_prod' => 'setBuyerProd',
        'seller_prod' => 'setSellerProd',
        'line_no' => 'setLineNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vend_catalog_no' => 'getVendCatalogNo',
        'upc_section1' => 'getUpcSection1',
        'upc_section2' => 'getUpcSection2',
        'upc_section3' => 'getUpcSection3',
        'upc_section4' => 'getUpcSection4',
        'upc_section5' => 'getUpcSection5',
        'upc_section6' => 'getUpcSection6',
        'upc' => 'getUpc',
        'buyer_prod' => 'getBuyerProd',
        'seller_prod' => 'getSellerProd',
        'line_no' => 'getLineNo'
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
        $this->container['vend_catalog_no'] = isset($data['vend_catalog_no']) ? $data['vend_catalog_no'] : null;
        $this->container['upc_section1'] = isset($data['upc_section1']) ? $data['upc_section1'] : null;
        $this->container['upc_section2'] = isset($data['upc_section2']) ? $data['upc_section2'] : null;
        $this->container['upc_section3'] = isset($data['upc_section3']) ? $data['upc_section3'] : null;
        $this->container['upc_section4'] = isset($data['upc_section4']) ? $data['upc_section4'] : null;
        $this->container['upc_section5'] = isset($data['upc_section5']) ? $data['upc_section5'] : null;
        $this->container['upc_section6'] = isset($data['upc_section6']) ? $data['upc_section6'] : null;
        $this->container['upc'] = isset($data['upc']) ? $data['upc'] : null;
        $this->container['buyer_prod'] = isset($data['buyer_prod']) ? $data['buyer_prod'] : null;
        $this->container['seller_prod'] = isset($data['seller_prod']) ? $data['seller_prod'] : null;
        $this->container['line_no'] = isset($data['line_no']) ? $data['line_no'] : null;
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
     * Gets vend_catalog_no
     *
     * @return string
     */
    public function getVendCatalogNo()
    {
        return $this->container['vend_catalog_no'];
    }

    /**
     * Sets vend_catalog_no
     *
     * @param string $vend_catalog_no vend_catalog_no
     *
     * @return $this
     */
    public function setVendCatalogNo($vend_catalog_no)
    {
        $this->container['vend_catalog_no'] = $vend_catalog_no;

        return $this;
    }

    /**
     * Gets upc_section1
     *
     * @return string
     */
    public function getUpcSection1()
    {
        return $this->container['upc_section1'];
    }

    /**
     * Sets upc_section1
     *
     * @param string $upc_section1 upc_section1
     *
     * @return $this
     */
    public function setUpcSection1($upc_section1)
    {
        $this->container['upc_section1'] = $upc_section1;

        return $this;
    }

    /**
     * Gets upc_section2
     *
     * @return string
     */
    public function getUpcSection2()
    {
        return $this->container['upc_section2'];
    }

    /**
     * Sets upc_section2
     *
     * @param string $upc_section2 upc_section2
     *
     * @return $this
     */
    public function setUpcSection2($upc_section2)
    {
        $this->container['upc_section2'] = $upc_section2;

        return $this;
    }

    /**
     * Gets upc_section3
     *
     * @return string
     */
    public function getUpcSection3()
    {
        return $this->container['upc_section3'];
    }

    /**
     * Sets upc_section3
     *
     * @param string $upc_section3 upc_section3
     *
     * @return $this
     */
    public function setUpcSection3($upc_section3)
    {
        $this->container['upc_section3'] = $upc_section3;

        return $this;
    }

    /**
     * Gets upc_section4
     *
     * @return string
     */
    public function getUpcSection4()
    {
        return $this->container['upc_section4'];
    }

    /**
     * Sets upc_section4
     *
     * @param string $upc_section4 upc_section4
     *
     * @return $this
     */
    public function setUpcSection4($upc_section4)
    {
        $this->container['upc_section4'] = $upc_section4;

        return $this;
    }

    /**
     * Gets upc_section5
     *
     * @return string
     */
    public function getUpcSection5()
    {
        return $this->container['upc_section5'];
    }

    /**
     * Sets upc_section5
     *
     * @param string $upc_section5 upc_section5
     *
     * @return $this
     */
    public function setUpcSection5($upc_section5)
    {
        $this->container['upc_section5'] = $upc_section5;

        return $this;
    }

    /**
     * Gets upc_section6
     *
     * @return string
     */
    public function getUpcSection6()
    {
        return $this->container['upc_section6'];
    }

    /**
     * Sets upc_section6
     *
     * @param string $upc_section6 upc_section6
     *
     * @return $this
     */
    public function setUpcSection6($upc_section6)
    {
        $this->container['upc_section6'] = $upc_section6;

        return $this;
    }

    /**
     * Gets upc
     *
     * @return string
     */
    public function getUpc()
    {
        return $this->container['upc'];
    }

    /**
     * Sets upc
     *
     * @param string $upc upc
     *
     * @return $this
     */
    public function setUpc($upc)
    {
        $this->container['upc'] = $upc;

        return $this;
    }

    /**
     * Gets buyer_prod
     *
     * @return string
     */
    public function getBuyerProd()
    {
        return $this->container['buyer_prod'];
    }

    /**
     * Sets buyer_prod
     *
     * @param string $buyer_prod buyer_prod
     *
     * @return $this
     */
    public function setBuyerProd($buyer_prod)
    {
        $this->container['buyer_prod'] = $buyer_prod;

        return $this;
    }

    /**
     * Gets seller_prod
     *
     * @return string
     */
    public function getSellerProd()
    {
        return $this->container['seller_prod'];
    }

    /**
     * Sets seller_prod
     *
     * @param string $seller_prod seller_prod
     *
     * @return $this
     */
    public function setSellerProd($seller_prod)
    {
        $this->container['seller_prod'] = $seller_prod;

        return $this;
    }

    /**
     * Gets line_no
     *
     * @return string
     */
    public function getLineNo()
    {
        return $this->container['line_no'];
    }

    /**
     * Sets line_no
     *
     * @param string $line_no line_no
     *
     * @return $this
     */
    public function setLineNo($line_no)
    {
        $this->container['line_no'] = $line_no;

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


