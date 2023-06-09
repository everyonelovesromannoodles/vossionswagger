<?php
/**
 * TProdxreflst
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
 * TProdxreflst Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TProdxreflst implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-prodxreflst';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'rectype' => 'string',
        'rectypedesc' => 'string',
        'prod' => 'string',
        'descrip1' => 'string',
        'descrip2' => 'string',
        'xrefprod' => 'string',
        'xrefdescrip1' => 'string',
        'xrefdescrip2' => 'string',
        'netavail' => 'double',
        'foundinwhsefl' => 'bool',
        'seqno' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'rectype' => null,
        'rectypedesc' => null,
        'prod' => null,
        'descrip1' => null,
        'descrip2' => null,
        'xrefprod' => null,
        'xrefdescrip1' => null,
        'xrefdescrip2' => null,
        'netavail' => 'double',
        'foundinwhsefl' => null,
        'seqno' => 'int64'
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
        'rectype' => 'rectype',
        'rectypedesc' => 'rectypedesc',
        'prod' => 'prod',
        'descrip1' => 'descrip1',
        'descrip2' => 'descrip2',
        'xrefprod' => 'xrefprod',
        'xrefdescrip1' => 'xrefdescrip1',
        'xrefdescrip2' => 'xrefdescrip2',
        'netavail' => 'netavail',
        'foundinwhsefl' => 'foundinwhsefl',
        'seqno' => 'seqno'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'rectype' => 'setRectype',
        'rectypedesc' => 'setRectypedesc',
        'prod' => 'setProd',
        'descrip1' => 'setDescrip1',
        'descrip2' => 'setDescrip2',
        'xrefprod' => 'setXrefprod',
        'xrefdescrip1' => 'setXrefdescrip1',
        'xrefdescrip2' => 'setXrefdescrip2',
        'netavail' => 'setNetavail',
        'foundinwhsefl' => 'setFoundinwhsefl',
        'seqno' => 'setSeqno'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'rectype' => 'getRectype',
        'rectypedesc' => 'getRectypedesc',
        'prod' => 'getProd',
        'descrip1' => 'getDescrip1',
        'descrip2' => 'getDescrip2',
        'xrefprod' => 'getXrefprod',
        'xrefdescrip1' => 'getXrefdescrip1',
        'xrefdescrip2' => 'getXrefdescrip2',
        'netavail' => 'getNetavail',
        'foundinwhsefl' => 'getFoundinwhsefl',
        'seqno' => 'getSeqno'
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
        $this->container['rectype'] = isset($data['rectype']) ? $data['rectype'] : null;
        $this->container['rectypedesc'] = isset($data['rectypedesc']) ? $data['rectypedesc'] : null;
        $this->container['prod'] = isset($data['prod']) ? $data['prod'] : null;
        $this->container['descrip1'] = isset($data['descrip1']) ? $data['descrip1'] : null;
        $this->container['descrip2'] = isset($data['descrip2']) ? $data['descrip2'] : null;
        $this->container['xrefprod'] = isset($data['xrefprod']) ? $data['xrefprod'] : null;
        $this->container['xrefdescrip1'] = isset($data['xrefdescrip1']) ? $data['xrefdescrip1'] : null;
        $this->container['xrefdescrip2'] = isset($data['xrefdescrip2']) ? $data['xrefdescrip2'] : null;
        $this->container['netavail'] = isset($data['netavail']) ? $data['netavail'] : null;
        $this->container['foundinwhsefl'] = isset($data['foundinwhsefl']) ? $data['foundinwhsefl'] : null;
        $this->container['seqno'] = isset($data['seqno']) ? $data['seqno'] : null;
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
     * Gets rectype
     *
     * @return string
     */
    public function getRectype()
    {
        return $this->container['rectype'];
    }

    /**
     * Sets rectype
     *
     * @param string $rectype rectype
     *
     * @return $this
     */
    public function setRectype($rectype)
    {
        $this->container['rectype'] = $rectype;

        return $this;
    }

    /**
     * Gets rectypedesc
     *
     * @return string
     */
    public function getRectypedesc()
    {
        return $this->container['rectypedesc'];
    }

    /**
     * Sets rectypedesc
     *
     * @param string $rectypedesc rectypedesc
     *
     * @return $this
     */
    public function setRectypedesc($rectypedesc)
    {
        $this->container['rectypedesc'] = $rectypedesc;

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
     * Gets descrip1
     *
     * @return string
     */
    public function getDescrip1()
    {
        return $this->container['descrip1'];
    }

    /**
     * Sets descrip1
     *
     * @param string $descrip1 descrip1
     *
     * @return $this
     */
    public function setDescrip1($descrip1)
    {
        $this->container['descrip1'] = $descrip1;

        return $this;
    }

    /**
     * Gets descrip2
     *
     * @return string
     */
    public function getDescrip2()
    {
        return $this->container['descrip2'];
    }

    /**
     * Sets descrip2
     *
     * @param string $descrip2 descrip2
     *
     * @return $this
     */
    public function setDescrip2($descrip2)
    {
        $this->container['descrip2'] = $descrip2;

        return $this;
    }

    /**
     * Gets xrefprod
     *
     * @return string
     */
    public function getXrefprod()
    {
        return $this->container['xrefprod'];
    }

    /**
     * Sets xrefprod
     *
     * @param string $xrefprod xrefprod
     *
     * @return $this
     */
    public function setXrefprod($xrefprod)
    {
        $this->container['xrefprod'] = $xrefprod;

        return $this;
    }

    /**
     * Gets xrefdescrip1
     *
     * @return string
     */
    public function getXrefdescrip1()
    {
        return $this->container['xrefdescrip1'];
    }

    /**
     * Sets xrefdescrip1
     *
     * @param string $xrefdescrip1 xrefdescrip1
     *
     * @return $this
     */
    public function setXrefdescrip1($xrefdescrip1)
    {
        $this->container['xrefdescrip1'] = $xrefdescrip1;

        return $this;
    }

    /**
     * Gets xrefdescrip2
     *
     * @return string
     */
    public function getXrefdescrip2()
    {
        return $this->container['xrefdescrip2'];
    }

    /**
     * Sets xrefdescrip2
     *
     * @param string $xrefdescrip2 xrefdescrip2
     *
     * @return $this
     */
    public function setXrefdescrip2($xrefdescrip2)
    {
        $this->container['xrefdescrip2'] = $xrefdescrip2;

        return $this;
    }

    /**
     * Gets netavail
     *
     * @return double
     */
    public function getNetavail()
    {
        return $this->container['netavail'];
    }

    /**
     * Sets netavail
     *
     * @param double $netavail netavail
     *
     * @return $this
     */
    public function setNetavail($netavail)
    {
        $this->container['netavail'] = $netavail;

        return $this;
    }

    /**
     * Gets foundinwhsefl
     *
     * @return bool
     */
    public function getFoundinwhsefl()
    {
        return $this->container['foundinwhsefl'];
    }

    /**
     * Sets foundinwhsefl
     *
     * @param bool $foundinwhsefl foundinwhsefl
     *
     * @return $this
     */
    public function setFoundinwhsefl($foundinwhsefl)
    {
        $this->container['foundinwhsefl'] = $foundinwhsefl;

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


