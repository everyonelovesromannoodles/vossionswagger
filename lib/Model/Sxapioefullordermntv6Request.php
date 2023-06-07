<?php
/**
 * Sxapioefullordermntv6Request
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
 * Sxapioefullordermntv6Request Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sxapioefullordermntv6Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapioefullordermntv6_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'sxt_order_v4' => '\Swagger\Client\Model\SxtOrderV4Req',
        'sxt_customer' => '\Swagger\Client\Model\SxtCustomerReq',
        'sxt_item_v4' => '\Swagger\Client\Model\SxtItemV4Req',
        'sxt_shipfm' => '\Swagger\Client\Model\SxtShipfmReq',
        'sxt_shipto' => '\Swagger\Client\Model\SxtShiptoReq',
        'sxt_billto' => '\Swagger\Client\Model\SxtBilltoReq',
        'sxt_terms' => '\Swagger\Client\Model\SxtTermsReq',
        'sxt_schedule' => '\Swagger\Client\Model\SxtScheduleReq',
        'sxt_total' => '\Swagger\Client\Model\SxtTotalReq',
        'sxt_header_extra' => '\Swagger\Client\Model\SxtHeaderExtraReq',
        'sxt_line_extra' => '\Swagger\Client\Model\SxtLineExtraReq',
        'sxt_line_component' => '\Swagger\Client\Model\SxtLineComponentReq'
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
        'sxt_order_v4' => null,
        'sxt_customer' => null,
        'sxt_item_v4' => null,
        'sxt_shipfm' => null,
        'sxt_shipto' => null,
        'sxt_billto' => null,
        'sxt_terms' => null,
        'sxt_schedule' => null,
        'sxt_total' => null,
        'sxt_header_extra' => null,
        'sxt_line_extra' => null,
        'sxt_line_component' => null
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
        'sxt_order_v4' => 'sxt_orderV4',
        'sxt_customer' => 'sxt_customer',
        'sxt_item_v4' => 'sxt_itemV4',
        'sxt_shipfm' => 'sxt_shipfm',
        'sxt_shipto' => 'sxt_shipto',
        'sxt_billto' => 'sxt_billto',
        'sxt_terms' => 'sxt_terms',
        'sxt_schedule' => 'sxt_schedule',
        'sxt_total' => 'sxt_total',
        'sxt_header_extra' => 'sxt_header_extra',
        'sxt_line_extra' => 'sxt_line_extra',
        'sxt_line_component' => 'sxt_line_component'
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
        'sxt_order_v4' => 'setSxtOrderV4',
        'sxt_customer' => 'setSxtCustomer',
        'sxt_item_v4' => 'setSxtItemV4',
        'sxt_shipfm' => 'setSxtShipfm',
        'sxt_shipto' => 'setSxtShipto',
        'sxt_billto' => 'setSxtBillto',
        'sxt_terms' => 'setSxtTerms',
        'sxt_schedule' => 'setSxtSchedule',
        'sxt_total' => 'setSxtTotal',
        'sxt_header_extra' => 'setSxtHeaderExtra',
        'sxt_line_extra' => 'setSxtLineExtra',
        'sxt_line_component' => 'setSxtLineComponent'
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
        'sxt_order_v4' => 'getSxtOrderV4',
        'sxt_customer' => 'getSxtCustomer',
        'sxt_item_v4' => 'getSxtItemV4',
        'sxt_shipfm' => 'getSxtShipfm',
        'sxt_shipto' => 'getSxtShipto',
        'sxt_billto' => 'getSxtBillto',
        'sxt_terms' => 'getSxtTerms',
        'sxt_schedule' => 'getSxtSchedule',
        'sxt_total' => 'getSxtTotal',
        'sxt_header_extra' => 'getSxtHeaderExtra',
        'sxt_line_extra' => 'getSxtLineExtra',
        'sxt_line_component' => 'getSxtLineComponent'
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
        $this->container['sxt_order_v4'] = isset($data['sxt_order_v4']) ? $data['sxt_order_v4'] : null;
        $this->container['sxt_customer'] = isset($data['sxt_customer']) ? $data['sxt_customer'] : null;
        $this->container['sxt_item_v4'] = isset($data['sxt_item_v4']) ? $data['sxt_item_v4'] : null;
        $this->container['sxt_shipfm'] = isset($data['sxt_shipfm']) ? $data['sxt_shipfm'] : null;
        $this->container['sxt_shipto'] = isset($data['sxt_shipto']) ? $data['sxt_shipto'] : null;
        $this->container['sxt_billto'] = isset($data['sxt_billto']) ? $data['sxt_billto'] : null;
        $this->container['sxt_terms'] = isset($data['sxt_terms']) ? $data['sxt_terms'] : null;
        $this->container['sxt_schedule'] = isset($data['sxt_schedule']) ? $data['sxt_schedule'] : null;
        $this->container['sxt_total'] = isset($data['sxt_total']) ? $data['sxt_total'] : null;
        $this->container['sxt_header_extra'] = isset($data['sxt_header_extra']) ? $data['sxt_header_extra'] : null;
        $this->container['sxt_line_extra'] = isset($data['sxt_line_extra']) ? $data['sxt_line_extra'] : null;
        $this->container['sxt_line_component'] = isset($data['sxt_line_component']) ? $data['sxt_line_component'] : null;
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
     * Gets sxt_order_v4
     *
     * @return \Swagger\Client\Model\SxtOrderV4Req
     */
    public function getSxtOrderV4()
    {
        return $this->container['sxt_order_v4'];
    }

    /**
     * Sets sxt_order_v4
     *
     * @param \Swagger\Client\Model\SxtOrderV4Req $sxt_order_v4 sxt_order_v4
     *
     * @return $this
     */
    public function setSxtOrderV4($sxt_order_v4)
    {
        $this->container['sxt_order_v4'] = $sxt_order_v4;

        return $this;
    }

    /**
     * Gets sxt_customer
     *
     * @return \Swagger\Client\Model\SxtCustomerReq
     */
    public function getSxtCustomer()
    {
        return $this->container['sxt_customer'];
    }

    /**
     * Sets sxt_customer
     *
     * @param \Swagger\Client\Model\SxtCustomerReq $sxt_customer sxt_customer
     *
     * @return $this
     */
    public function setSxtCustomer($sxt_customer)
    {
        $this->container['sxt_customer'] = $sxt_customer;

        return $this;
    }

    /**
     * Gets sxt_item_v4
     *
     * @return \Swagger\Client\Model\SxtItemV4Req
     */
    public function getSxtItemV4()
    {
        return $this->container['sxt_item_v4'];
    }

    /**
     * Sets sxt_item_v4
     *
     * @param \Swagger\Client\Model\SxtItemV4Req $sxt_item_v4 sxt_item_v4
     *
     * @return $this
     */
    public function setSxtItemV4($sxt_item_v4)
    {
        $this->container['sxt_item_v4'] = $sxt_item_v4;

        return $this;
    }

    /**
     * Gets sxt_shipfm
     *
     * @return \Swagger\Client\Model\SxtShipfmReq
     */
    public function getSxtShipfm()
    {
        return $this->container['sxt_shipfm'];
    }

    /**
     * Sets sxt_shipfm
     *
     * @param \Swagger\Client\Model\SxtShipfmReq $sxt_shipfm sxt_shipfm
     *
     * @return $this
     */
    public function setSxtShipfm($sxt_shipfm)
    {
        $this->container['sxt_shipfm'] = $sxt_shipfm;

        return $this;
    }

    /**
     * Gets sxt_shipto
     *
     * @return \Swagger\Client\Model\SxtShiptoReq
     */
    public function getSxtShipto()
    {
        return $this->container['sxt_shipto'];
    }

    /**
     * Sets sxt_shipto
     *
     * @param \Swagger\Client\Model\SxtShiptoReq $sxt_shipto sxt_shipto
     *
     * @return $this
     */
    public function setSxtShipto($sxt_shipto)
    {
        $this->container['sxt_shipto'] = $sxt_shipto;

        return $this;
    }

    /**
     * Gets sxt_billto
     *
     * @return \Swagger\Client\Model\SxtBilltoReq
     */
    public function getSxtBillto()
    {
        return $this->container['sxt_billto'];
    }

    /**
     * Sets sxt_billto
     *
     * @param \Swagger\Client\Model\SxtBilltoReq $sxt_billto sxt_billto
     *
     * @return $this
     */
    public function setSxtBillto($sxt_billto)
    {
        $this->container['sxt_billto'] = $sxt_billto;

        return $this;
    }

    /**
     * Gets sxt_terms
     *
     * @return \Swagger\Client\Model\SxtTermsReq
     */
    public function getSxtTerms()
    {
        return $this->container['sxt_terms'];
    }

    /**
     * Sets sxt_terms
     *
     * @param \Swagger\Client\Model\SxtTermsReq $sxt_terms sxt_terms
     *
     * @return $this
     */
    public function setSxtTerms($sxt_terms)
    {
        $this->container['sxt_terms'] = $sxt_terms;

        return $this;
    }

    /**
     * Gets sxt_schedule
     *
     * @return \Swagger\Client\Model\SxtScheduleReq
     */
    public function getSxtSchedule()
    {
        return $this->container['sxt_schedule'];
    }

    /**
     * Sets sxt_schedule
     *
     * @param \Swagger\Client\Model\SxtScheduleReq $sxt_schedule sxt_schedule
     *
     * @return $this
     */
    public function setSxtSchedule($sxt_schedule)
    {
        $this->container['sxt_schedule'] = $sxt_schedule;

        return $this;
    }

    /**
     * Gets sxt_total
     *
     * @return \Swagger\Client\Model\SxtTotalReq
     */
    public function getSxtTotal()
    {
        return $this->container['sxt_total'];
    }

    /**
     * Sets sxt_total
     *
     * @param \Swagger\Client\Model\SxtTotalReq $sxt_total sxt_total
     *
     * @return $this
     */
    public function setSxtTotal($sxt_total)
    {
        $this->container['sxt_total'] = $sxt_total;

        return $this;
    }

    /**
     * Gets sxt_header_extra
     *
     * @return \Swagger\Client\Model\SxtHeaderExtraReq
     */
    public function getSxtHeaderExtra()
    {
        return $this->container['sxt_header_extra'];
    }

    /**
     * Sets sxt_header_extra
     *
     * @param \Swagger\Client\Model\SxtHeaderExtraReq $sxt_header_extra sxt_header_extra
     *
     * @return $this
     */
    public function setSxtHeaderExtra($sxt_header_extra)
    {
        $this->container['sxt_header_extra'] = $sxt_header_extra;

        return $this;
    }

    /**
     * Gets sxt_line_extra
     *
     * @return \Swagger\Client\Model\SxtLineExtraReq
     */
    public function getSxtLineExtra()
    {
        return $this->container['sxt_line_extra'];
    }

    /**
     * Sets sxt_line_extra
     *
     * @param \Swagger\Client\Model\SxtLineExtraReq $sxt_line_extra sxt_line_extra
     *
     * @return $this
     */
    public function setSxtLineExtra($sxt_line_extra)
    {
        $this->container['sxt_line_extra'] = $sxt_line_extra;

        return $this;
    }

    /**
     * Gets sxt_line_component
     *
     * @return \Swagger\Client\Model\SxtLineComponentReq
     */
    public function getSxtLineComponent()
    {
        return $this->container['sxt_line_component'];
    }

    /**
     * Sets sxt_line_component
     *
     * @param \Swagger\Client\Model\SxtLineComponentReq $sxt_line_component sxt_line_component
     *
     * @return $this
     */
    public function setSxtLineComponent($sxt_line_component)
    {
        $this->container['sxt_line_component'] = $sxt_line_component;

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


