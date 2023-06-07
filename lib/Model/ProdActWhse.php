<?php
/**
 * ProdActWhse
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
 * ProdActWhse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProdActWhse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'prodActWhse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'co_no' => 'string',
        'company_name' => 'string',
        'whse' => 'string',
        'address1' => 'string',
        'address2' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zipcd' => 'string',
        'phone' => 'string',
        'fax' => 'string',
        'shipvia' => 'string',
        'ship_instructions' => 'string',
        'back_order_flag' => 'string',
        'substitute_flag' => 'string',
        'dist_duns_no' => 'string',
        'whse_duns_no' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'co_no' => null,
        'company_name' => null,
        'whse' => null,
        'address1' => null,
        'address2' => null,
        'city' => null,
        'state' => null,
        'zipcd' => null,
        'phone' => null,
        'fax' => null,
        'shipvia' => null,
        'ship_instructions' => null,
        'back_order_flag' => null,
        'substitute_flag' => null,
        'dist_duns_no' => null,
        'whse_duns_no' => null
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
        'co_no' => 'coNo',
        'company_name' => 'companyName',
        'whse' => 'whse',
        'address1' => 'address1',
        'address2' => 'address2',
        'city' => 'city',
        'state' => 'state',
        'zipcd' => 'zipcd',
        'phone' => 'phone',
        'fax' => 'fax',
        'shipvia' => 'shipvia',
        'ship_instructions' => 'shipInstructions',
        'back_order_flag' => 'backOrderFlag',
        'substitute_flag' => 'substituteFlag',
        'dist_duns_no' => 'distDunsNo',
        'whse_duns_no' => 'whseDunsNo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'co_no' => 'setCoNo',
        'company_name' => 'setCompanyName',
        'whse' => 'setWhse',
        'address1' => 'setAddress1',
        'address2' => 'setAddress2',
        'city' => 'setCity',
        'state' => 'setState',
        'zipcd' => 'setZipcd',
        'phone' => 'setPhone',
        'fax' => 'setFax',
        'shipvia' => 'setShipvia',
        'ship_instructions' => 'setShipInstructions',
        'back_order_flag' => 'setBackOrderFlag',
        'substitute_flag' => 'setSubstituteFlag',
        'dist_duns_no' => 'setDistDunsNo',
        'whse_duns_no' => 'setWhseDunsNo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'co_no' => 'getCoNo',
        'company_name' => 'getCompanyName',
        'whse' => 'getWhse',
        'address1' => 'getAddress1',
        'address2' => 'getAddress2',
        'city' => 'getCity',
        'state' => 'getState',
        'zipcd' => 'getZipcd',
        'phone' => 'getPhone',
        'fax' => 'getFax',
        'shipvia' => 'getShipvia',
        'ship_instructions' => 'getShipInstructions',
        'back_order_flag' => 'getBackOrderFlag',
        'substitute_flag' => 'getSubstituteFlag',
        'dist_duns_no' => 'getDistDunsNo',
        'whse_duns_no' => 'getWhseDunsNo'
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
        $this->container['co_no'] = isset($data['co_no']) ? $data['co_no'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['address1'] = isset($data['address1']) ? $data['address1'] : null;
        $this->container['address2'] = isset($data['address2']) ? $data['address2'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['zipcd'] = isset($data['zipcd']) ? $data['zipcd'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
        $this->container['shipvia'] = isset($data['shipvia']) ? $data['shipvia'] : null;
        $this->container['ship_instructions'] = isset($data['ship_instructions']) ? $data['ship_instructions'] : null;
        $this->container['back_order_flag'] = isset($data['back_order_flag']) ? $data['back_order_flag'] : null;
        $this->container['substitute_flag'] = isset($data['substitute_flag']) ? $data['substitute_flag'] : null;
        $this->container['dist_duns_no'] = isset($data['dist_duns_no']) ? $data['dist_duns_no'] : null;
        $this->container['whse_duns_no'] = isset($data['whse_duns_no']) ? $data['whse_duns_no'] : null;
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
     * Gets co_no
     *
     * @return string
     */
    public function getCoNo()
    {
        return $this->container['co_no'];
    }

    /**
     * Sets co_no
     *
     * @param string $co_no co_no
     *
     * @return $this
     */
    public function setCoNo($co_no)
    {
        $this->container['co_no'] = $co_no;

        return $this;
    }

    /**
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name company_name
     *
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

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
     * Gets address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->container['address1'];
    }

    /**
     * Sets address1
     *
     * @param string $address1 address1
     *
     * @return $this
     */
    public function setAddress1($address1)
    {
        $this->container['address1'] = $address1;

        return $this;
    }

    /**
     * Gets address2
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->container['address2'];
    }

    /**
     * Sets address2
     *
     * @param string $address2 address2
     *
     * @return $this
     */
    public function setAddress2($address2)
    {
        $this->container['address2'] = $address2;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets zipcd
     *
     * @return string
     */
    public function getZipcd()
    {
        return $this->container['zipcd'];
    }

    /**
     * Sets zipcd
     *
     * @param string $zipcd zipcd
     *
     * @return $this
     */
    public function setZipcd($zipcd)
    {
        $this->container['zipcd'] = $zipcd;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->container['fax'];
    }

    /**
     * Sets fax
     *
     * @param string $fax fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->container['fax'] = $fax;

        return $this;
    }

    /**
     * Gets shipvia
     *
     * @return string
     */
    public function getShipvia()
    {
        return $this->container['shipvia'];
    }

    /**
     * Sets shipvia
     *
     * @param string $shipvia shipvia
     *
     * @return $this
     */
    public function setShipvia($shipvia)
    {
        $this->container['shipvia'] = $shipvia;

        return $this;
    }

    /**
     * Gets ship_instructions
     *
     * @return string
     */
    public function getShipInstructions()
    {
        return $this->container['ship_instructions'];
    }

    /**
     * Sets ship_instructions
     *
     * @param string $ship_instructions ship_instructions
     *
     * @return $this
     */
    public function setShipInstructions($ship_instructions)
    {
        $this->container['ship_instructions'] = $ship_instructions;

        return $this;
    }

    /**
     * Gets back_order_flag
     *
     * @return string
     */
    public function getBackOrderFlag()
    {
        return $this->container['back_order_flag'];
    }

    /**
     * Sets back_order_flag
     *
     * @param string $back_order_flag back_order_flag
     *
     * @return $this
     */
    public function setBackOrderFlag($back_order_flag)
    {
        $this->container['back_order_flag'] = $back_order_flag;

        return $this;
    }

    /**
     * Gets substitute_flag
     *
     * @return string
     */
    public function getSubstituteFlag()
    {
        return $this->container['substitute_flag'];
    }

    /**
     * Sets substitute_flag
     *
     * @param string $substitute_flag substitute_flag
     *
     * @return $this
     */
    public function setSubstituteFlag($substitute_flag)
    {
        $this->container['substitute_flag'] = $substitute_flag;

        return $this;
    }

    /**
     * Gets dist_duns_no
     *
     * @return string
     */
    public function getDistDunsNo()
    {
        return $this->container['dist_duns_no'];
    }

    /**
     * Sets dist_duns_no
     *
     * @param string $dist_duns_no dist_duns_no
     *
     * @return $this
     */
    public function setDistDunsNo($dist_duns_no)
    {
        $this->container['dist_duns_no'] = $dist_duns_no;

        return $this;
    }

    /**
     * Gets whse_duns_no
     *
     * @return string
     */
    public function getWhseDunsNo()
    {
        return $this->container['whse_duns_no'];
    }

    /**
     * Sets whse_duns_no
     *
     * @param string $whse_duns_no whse_duns_no
     *
     * @return $this
     */
    public function setWhseDunsNo($whse_duns_no)
    {
        $this->container['whse_duns_no'] = $whse_duns_no;

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


