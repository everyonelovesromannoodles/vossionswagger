<?php
/**
 * SxapiargetcustomerdataorderingResponse
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
 * SxapiargetcustomerdataorderingResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapiargetcustomerdataorderingResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiargetcustomerdataordering_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'c_error_message' => 'string',
        'ship_via' => 'string',
        'ship_via_desc' => 'string',
        'ship_to_required_flag' => 'bool',
        'shipping_instructions' => 'string',
        'default_ship_to' => 'string',
        'po_required_flag' => 'bool',
        'customer_po_no' => 'string',
        'backorder_flag' => 'bool',
        'substitutes_flag' => 'bool',
        'sls_rep_out' => 'string',
        'sls_rep_in' => 'string',
        'order_disposition' => 'string',
        'price_type' => 'string',
        'price_type_desc' => 'string',
        'min_order' => 'double',
        'max_order' => 'double',
        'sales_territory' => 'string',
        'route' => 'string',
        'whse' => 'string',
        'fp_customer_number' => 'double',
        'fp_customer_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'c_error_message' => null,
        'ship_via' => null,
        'ship_via_desc' => null,
        'ship_to_required_flag' => null,
        'shipping_instructions' => null,
        'default_ship_to' => null,
        'po_required_flag' => null,
        'customer_po_no' => null,
        'backorder_flag' => null,
        'substitutes_flag' => null,
        'sls_rep_out' => null,
        'sls_rep_in' => null,
        'order_disposition' => null,
        'price_type' => null,
        'price_type_desc' => null,
        'min_order' => 'double',
        'max_order' => 'double',
        'sales_territory' => null,
        'route' => null,
        'whse' => null,
        'fp_customer_number' => 'double',
        'fp_customer_name' => null
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
        'c_error_message' => 'cErrorMessage',
        'ship_via' => 'shipVia',
        'ship_via_desc' => 'shipViaDesc',
        'ship_to_required_flag' => 'shipToRequiredFlag',
        'shipping_instructions' => 'shippingInstructions',
        'default_ship_to' => 'defaultShipTo',
        'po_required_flag' => 'poRequiredFlag',
        'customer_po_no' => 'customerPoNo',
        'backorder_flag' => 'backorderFlag',
        'substitutes_flag' => 'substitutesFlag',
        'sls_rep_out' => 'slsRepOut',
        'sls_rep_in' => 'slsRepIn',
        'order_disposition' => 'orderDisposition',
        'price_type' => 'priceType',
        'price_type_desc' => 'priceTypeDesc',
        'min_order' => 'minOrder',
        'max_order' => 'maxOrder',
        'sales_territory' => 'salesTerritory',
        'route' => 'route',
        'whse' => 'whse',
        'fp_customer_number' => 'fpCustomerNumber',
        'fp_customer_name' => 'fpCustomerName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_error_message' => 'setCErrorMessage',
        'ship_via' => 'setShipVia',
        'ship_via_desc' => 'setShipViaDesc',
        'ship_to_required_flag' => 'setShipToRequiredFlag',
        'shipping_instructions' => 'setShippingInstructions',
        'default_ship_to' => 'setDefaultShipTo',
        'po_required_flag' => 'setPoRequiredFlag',
        'customer_po_no' => 'setCustomerPoNo',
        'backorder_flag' => 'setBackorderFlag',
        'substitutes_flag' => 'setSubstitutesFlag',
        'sls_rep_out' => 'setSlsRepOut',
        'sls_rep_in' => 'setSlsRepIn',
        'order_disposition' => 'setOrderDisposition',
        'price_type' => 'setPriceType',
        'price_type_desc' => 'setPriceTypeDesc',
        'min_order' => 'setMinOrder',
        'max_order' => 'setMaxOrder',
        'sales_territory' => 'setSalesTerritory',
        'route' => 'setRoute',
        'whse' => 'setWhse',
        'fp_customer_number' => 'setFpCustomerNumber',
        'fp_customer_name' => 'setFpCustomerName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_error_message' => 'getCErrorMessage',
        'ship_via' => 'getShipVia',
        'ship_via_desc' => 'getShipViaDesc',
        'ship_to_required_flag' => 'getShipToRequiredFlag',
        'shipping_instructions' => 'getShippingInstructions',
        'default_ship_to' => 'getDefaultShipTo',
        'po_required_flag' => 'getPoRequiredFlag',
        'customer_po_no' => 'getCustomerPoNo',
        'backorder_flag' => 'getBackorderFlag',
        'substitutes_flag' => 'getSubstitutesFlag',
        'sls_rep_out' => 'getSlsRepOut',
        'sls_rep_in' => 'getSlsRepIn',
        'order_disposition' => 'getOrderDisposition',
        'price_type' => 'getPriceType',
        'price_type_desc' => 'getPriceTypeDesc',
        'min_order' => 'getMinOrder',
        'max_order' => 'getMaxOrder',
        'sales_territory' => 'getSalesTerritory',
        'route' => 'getRoute',
        'whse' => 'getWhse',
        'fp_customer_number' => 'getFpCustomerNumber',
        'fp_customer_name' => 'getFpCustomerName'
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
        $this->container['c_error_message'] = isset($data['c_error_message']) ? $data['c_error_message'] : null;
        $this->container['ship_via'] = isset($data['ship_via']) ? $data['ship_via'] : null;
        $this->container['ship_via_desc'] = isset($data['ship_via_desc']) ? $data['ship_via_desc'] : null;
        $this->container['ship_to_required_flag'] = isset($data['ship_to_required_flag']) ? $data['ship_to_required_flag'] : null;
        $this->container['shipping_instructions'] = isset($data['shipping_instructions']) ? $data['shipping_instructions'] : null;
        $this->container['default_ship_to'] = isset($data['default_ship_to']) ? $data['default_ship_to'] : null;
        $this->container['po_required_flag'] = isset($data['po_required_flag']) ? $data['po_required_flag'] : null;
        $this->container['customer_po_no'] = isset($data['customer_po_no']) ? $data['customer_po_no'] : null;
        $this->container['backorder_flag'] = isset($data['backorder_flag']) ? $data['backorder_flag'] : null;
        $this->container['substitutes_flag'] = isset($data['substitutes_flag']) ? $data['substitutes_flag'] : null;
        $this->container['sls_rep_out'] = isset($data['sls_rep_out']) ? $data['sls_rep_out'] : null;
        $this->container['sls_rep_in'] = isset($data['sls_rep_in']) ? $data['sls_rep_in'] : null;
        $this->container['order_disposition'] = isset($data['order_disposition']) ? $data['order_disposition'] : null;
        $this->container['price_type'] = isset($data['price_type']) ? $data['price_type'] : null;
        $this->container['price_type_desc'] = isset($data['price_type_desc']) ? $data['price_type_desc'] : null;
        $this->container['min_order'] = isset($data['min_order']) ? $data['min_order'] : null;
        $this->container['max_order'] = isset($data['max_order']) ? $data['max_order'] : null;
        $this->container['sales_territory'] = isset($data['sales_territory']) ? $data['sales_territory'] : null;
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['fp_customer_number'] = isset($data['fp_customer_number']) ? $data['fp_customer_number'] : null;
        $this->container['fp_customer_name'] = isset($data['fp_customer_name']) ? $data['fp_customer_name'] : null;
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
     * Gets c_error_message
     *
     * @return string
     */
    public function getCErrorMessage()
    {
        return $this->container['c_error_message'];
    }

    /**
     * Sets c_error_message
     *
     * @param string $c_error_message c_error_message
     *
     * @return $this
     */
    public function setCErrorMessage($c_error_message)
    {
        $this->container['c_error_message'] = $c_error_message;

        return $this;
    }

    /**
     * Gets ship_via
     *
     * @return string
     */
    public function getShipVia()
    {
        return $this->container['ship_via'];
    }

    /**
     * Sets ship_via
     *
     * @param string $ship_via ship_via
     *
     * @return $this
     */
    public function setShipVia($ship_via)
    {
        $this->container['ship_via'] = $ship_via;

        return $this;
    }

    /**
     * Gets ship_via_desc
     *
     * @return string
     */
    public function getShipViaDesc()
    {
        return $this->container['ship_via_desc'];
    }

    /**
     * Sets ship_via_desc
     *
     * @param string $ship_via_desc ship_via_desc
     *
     * @return $this
     */
    public function setShipViaDesc($ship_via_desc)
    {
        $this->container['ship_via_desc'] = $ship_via_desc;

        return $this;
    }

    /**
     * Gets ship_to_required_flag
     *
     * @return bool
     */
    public function getShipToRequiredFlag()
    {
        return $this->container['ship_to_required_flag'];
    }

    /**
     * Sets ship_to_required_flag
     *
     * @param bool $ship_to_required_flag ship_to_required_flag
     *
     * @return $this
     */
    public function setShipToRequiredFlag($ship_to_required_flag)
    {
        $this->container['ship_to_required_flag'] = $ship_to_required_flag;

        return $this;
    }

    /**
     * Gets shipping_instructions
     *
     * @return string
     */
    public function getShippingInstructions()
    {
        return $this->container['shipping_instructions'];
    }

    /**
     * Sets shipping_instructions
     *
     * @param string $shipping_instructions shipping_instructions
     *
     * @return $this
     */
    public function setShippingInstructions($shipping_instructions)
    {
        $this->container['shipping_instructions'] = $shipping_instructions;

        return $this;
    }

    /**
     * Gets default_ship_to
     *
     * @return string
     */
    public function getDefaultShipTo()
    {
        return $this->container['default_ship_to'];
    }

    /**
     * Sets default_ship_to
     *
     * @param string $default_ship_to default_ship_to
     *
     * @return $this
     */
    public function setDefaultShipTo($default_ship_to)
    {
        $this->container['default_ship_to'] = $default_ship_to;

        return $this;
    }

    /**
     * Gets po_required_flag
     *
     * @return bool
     */
    public function getPoRequiredFlag()
    {
        return $this->container['po_required_flag'];
    }

    /**
     * Sets po_required_flag
     *
     * @param bool $po_required_flag po_required_flag
     *
     * @return $this
     */
    public function setPoRequiredFlag($po_required_flag)
    {
        $this->container['po_required_flag'] = $po_required_flag;

        return $this;
    }

    /**
     * Gets customer_po_no
     *
     * @return string
     */
    public function getCustomerPoNo()
    {
        return $this->container['customer_po_no'];
    }

    /**
     * Sets customer_po_no
     *
     * @param string $customer_po_no customer_po_no
     *
     * @return $this
     */
    public function setCustomerPoNo($customer_po_no)
    {
        $this->container['customer_po_no'] = $customer_po_no;

        return $this;
    }

    /**
     * Gets backorder_flag
     *
     * @return bool
     */
    public function getBackorderFlag()
    {
        return $this->container['backorder_flag'];
    }

    /**
     * Sets backorder_flag
     *
     * @param bool $backorder_flag backorder_flag
     *
     * @return $this
     */
    public function setBackorderFlag($backorder_flag)
    {
        $this->container['backorder_flag'] = $backorder_flag;

        return $this;
    }

    /**
     * Gets substitutes_flag
     *
     * @return bool
     */
    public function getSubstitutesFlag()
    {
        return $this->container['substitutes_flag'];
    }

    /**
     * Sets substitutes_flag
     *
     * @param bool $substitutes_flag substitutes_flag
     *
     * @return $this
     */
    public function setSubstitutesFlag($substitutes_flag)
    {
        $this->container['substitutes_flag'] = $substitutes_flag;

        return $this;
    }

    /**
     * Gets sls_rep_out
     *
     * @return string
     */
    public function getSlsRepOut()
    {
        return $this->container['sls_rep_out'];
    }

    /**
     * Sets sls_rep_out
     *
     * @param string $sls_rep_out sls_rep_out
     *
     * @return $this
     */
    public function setSlsRepOut($sls_rep_out)
    {
        $this->container['sls_rep_out'] = $sls_rep_out;

        return $this;
    }

    /**
     * Gets sls_rep_in
     *
     * @return string
     */
    public function getSlsRepIn()
    {
        return $this->container['sls_rep_in'];
    }

    /**
     * Sets sls_rep_in
     *
     * @param string $sls_rep_in sls_rep_in
     *
     * @return $this
     */
    public function setSlsRepIn($sls_rep_in)
    {
        $this->container['sls_rep_in'] = $sls_rep_in;

        return $this;
    }

    /**
     * Gets order_disposition
     *
     * @return string
     */
    public function getOrderDisposition()
    {
        return $this->container['order_disposition'];
    }

    /**
     * Sets order_disposition
     *
     * @param string $order_disposition order_disposition
     *
     * @return $this
     */
    public function setOrderDisposition($order_disposition)
    {
        $this->container['order_disposition'] = $order_disposition;

        return $this;
    }

    /**
     * Gets price_type
     *
     * @return string
     */
    public function getPriceType()
    {
        return $this->container['price_type'];
    }

    /**
     * Sets price_type
     *
     * @param string $price_type price_type
     *
     * @return $this
     */
    public function setPriceType($price_type)
    {
        $this->container['price_type'] = $price_type;

        return $this;
    }

    /**
     * Gets price_type_desc
     *
     * @return string
     */
    public function getPriceTypeDesc()
    {
        return $this->container['price_type_desc'];
    }

    /**
     * Sets price_type_desc
     *
     * @param string $price_type_desc price_type_desc
     *
     * @return $this
     */
    public function setPriceTypeDesc($price_type_desc)
    {
        $this->container['price_type_desc'] = $price_type_desc;

        return $this;
    }

    /**
     * Gets min_order
     *
     * @return double
     */
    public function getMinOrder()
    {
        return $this->container['min_order'];
    }

    /**
     * Sets min_order
     *
     * @param double $min_order min_order
     *
     * @return $this
     */
    public function setMinOrder($min_order)
    {
        $this->container['min_order'] = $min_order;

        return $this;
    }

    /**
     * Gets max_order
     *
     * @return double
     */
    public function getMaxOrder()
    {
        return $this->container['max_order'];
    }

    /**
     * Sets max_order
     *
     * @param double $max_order max_order
     *
     * @return $this
     */
    public function setMaxOrder($max_order)
    {
        $this->container['max_order'] = $max_order;

        return $this;
    }

    /**
     * Gets sales_territory
     *
     * @return string
     */
    public function getSalesTerritory()
    {
        return $this->container['sales_territory'];
    }

    /**
     * Sets sales_territory
     *
     * @param string $sales_territory sales_territory
     *
     * @return $this
     */
    public function setSalesTerritory($sales_territory)
    {
        $this->container['sales_territory'] = $sales_territory;

        return $this;
    }

    /**
     * Gets route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     *
     * @param string $route route
     *
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

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
     * Gets fp_customer_number
     *
     * @return double
     */
    public function getFpCustomerNumber()
    {
        return $this->container['fp_customer_number'];
    }

    /**
     * Sets fp_customer_number
     *
     * @param double $fp_customer_number fp_customer_number
     *
     * @return $this
     */
    public function setFpCustomerNumber($fp_customer_number)
    {
        $this->container['fp_customer_number'] = $fp_customer_number;

        return $this;
    }

    /**
     * Gets fp_customer_name
     *
     * @return string
     */
    public function getFpCustomerName()
    {
        return $this->container['fp_customer_name'];
    }

    /**
     * Sets fp_customer_name
     *
     * @param string $fp_customer_name fp_customer_name
     *
     * @return $this
     */
    public function setFpCustomerName($fp_customer_name)
    {
        $this->container['fp_customer_name'] = $fp_customer_name;

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


