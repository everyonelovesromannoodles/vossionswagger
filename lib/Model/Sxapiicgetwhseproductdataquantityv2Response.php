<?php
/**
 * Sxapiicgetwhseproductdataquantityv2Response
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
 * Sxapiicgetwhseproductdataquantityv2Response Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sxapiicgetwhseproductdataquantityv2Response implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiicgetwhseproductdataquantityv2_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'c_error_message' => 'string',
        'cross_reference_product' => 'string',
        'cross_reference_type' => 'string',
        'quantity_on_hand' => 'double',
        'quantity_reserved' => 'double',
        'quantity_committed' => 'double',
        'net_available' => 'double',
        'quantity_backorder' => 'double',
        'quantity_on_order' => 'double',
        'quantity_received' => 'double',
        'quantity_un_available' => 'double',
        'quantity_in_transit' => 'double',
        'quantity_requested_received' => 'double',
        'quantity_requested_shipped' => 'double',
        'quantity_demand' => 'double',
        'surplus' => 'double',
        'purchasing_net_available' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'c_error_message' => null,
        'cross_reference_product' => null,
        'cross_reference_type' => null,
        'quantity_on_hand' => 'double',
        'quantity_reserved' => 'double',
        'quantity_committed' => 'double',
        'net_available' => 'double',
        'quantity_backorder' => 'double',
        'quantity_on_order' => 'double',
        'quantity_received' => 'double',
        'quantity_un_available' => 'double',
        'quantity_in_transit' => 'double',
        'quantity_requested_received' => 'double',
        'quantity_requested_shipped' => 'double',
        'quantity_demand' => 'double',
        'surplus' => 'double',
        'purchasing_net_available' => 'double'
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
        'cross_reference_product' => 'crossReferenceProduct',
        'cross_reference_type' => 'crossReferenceType',
        'quantity_on_hand' => 'quantityOnHand',
        'quantity_reserved' => 'quantityReserved',
        'quantity_committed' => 'quantityCommitted',
        'net_available' => 'netAvailable',
        'quantity_backorder' => 'quantityBackorder',
        'quantity_on_order' => 'quantityOnOrder',
        'quantity_received' => 'quantityReceived',
        'quantity_un_available' => 'quantityUnAvailable',
        'quantity_in_transit' => 'quantityInTransit',
        'quantity_requested_received' => 'quantityRequestedReceived',
        'quantity_requested_shipped' => 'quantityRequestedShipped',
        'quantity_demand' => 'quantityDemand',
        'surplus' => 'surplus',
        'purchasing_net_available' => 'purchasingNetAvailable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_error_message' => 'setCErrorMessage',
        'cross_reference_product' => 'setCrossReferenceProduct',
        'cross_reference_type' => 'setCrossReferenceType',
        'quantity_on_hand' => 'setQuantityOnHand',
        'quantity_reserved' => 'setQuantityReserved',
        'quantity_committed' => 'setQuantityCommitted',
        'net_available' => 'setNetAvailable',
        'quantity_backorder' => 'setQuantityBackorder',
        'quantity_on_order' => 'setQuantityOnOrder',
        'quantity_received' => 'setQuantityReceived',
        'quantity_un_available' => 'setQuantityUnAvailable',
        'quantity_in_transit' => 'setQuantityInTransit',
        'quantity_requested_received' => 'setQuantityRequestedReceived',
        'quantity_requested_shipped' => 'setQuantityRequestedShipped',
        'quantity_demand' => 'setQuantityDemand',
        'surplus' => 'setSurplus',
        'purchasing_net_available' => 'setPurchasingNetAvailable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_error_message' => 'getCErrorMessage',
        'cross_reference_product' => 'getCrossReferenceProduct',
        'cross_reference_type' => 'getCrossReferenceType',
        'quantity_on_hand' => 'getQuantityOnHand',
        'quantity_reserved' => 'getQuantityReserved',
        'quantity_committed' => 'getQuantityCommitted',
        'net_available' => 'getNetAvailable',
        'quantity_backorder' => 'getQuantityBackorder',
        'quantity_on_order' => 'getQuantityOnOrder',
        'quantity_received' => 'getQuantityReceived',
        'quantity_un_available' => 'getQuantityUnAvailable',
        'quantity_in_transit' => 'getQuantityInTransit',
        'quantity_requested_received' => 'getQuantityRequestedReceived',
        'quantity_requested_shipped' => 'getQuantityRequestedShipped',
        'quantity_demand' => 'getQuantityDemand',
        'surplus' => 'getSurplus',
        'purchasing_net_available' => 'getPurchasingNetAvailable'
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
        $this->container['cross_reference_product'] = isset($data['cross_reference_product']) ? $data['cross_reference_product'] : null;
        $this->container['cross_reference_type'] = isset($data['cross_reference_type']) ? $data['cross_reference_type'] : null;
        $this->container['quantity_on_hand'] = isset($data['quantity_on_hand']) ? $data['quantity_on_hand'] : null;
        $this->container['quantity_reserved'] = isset($data['quantity_reserved']) ? $data['quantity_reserved'] : null;
        $this->container['quantity_committed'] = isset($data['quantity_committed']) ? $data['quantity_committed'] : null;
        $this->container['net_available'] = isset($data['net_available']) ? $data['net_available'] : null;
        $this->container['quantity_backorder'] = isset($data['quantity_backorder']) ? $data['quantity_backorder'] : null;
        $this->container['quantity_on_order'] = isset($data['quantity_on_order']) ? $data['quantity_on_order'] : null;
        $this->container['quantity_received'] = isset($data['quantity_received']) ? $data['quantity_received'] : null;
        $this->container['quantity_un_available'] = isset($data['quantity_un_available']) ? $data['quantity_un_available'] : null;
        $this->container['quantity_in_transit'] = isset($data['quantity_in_transit']) ? $data['quantity_in_transit'] : null;
        $this->container['quantity_requested_received'] = isset($data['quantity_requested_received']) ? $data['quantity_requested_received'] : null;
        $this->container['quantity_requested_shipped'] = isset($data['quantity_requested_shipped']) ? $data['quantity_requested_shipped'] : null;
        $this->container['quantity_demand'] = isset($data['quantity_demand']) ? $data['quantity_demand'] : null;
        $this->container['surplus'] = isset($data['surplus']) ? $data['surplus'] : null;
        $this->container['purchasing_net_available'] = isset($data['purchasing_net_available']) ? $data['purchasing_net_available'] : null;
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
     * Gets cross_reference_product
     *
     * @return string
     */
    public function getCrossReferenceProduct()
    {
        return $this->container['cross_reference_product'];
    }

    /**
     * Sets cross_reference_product
     *
     * @param string $cross_reference_product cross_reference_product
     *
     * @return $this
     */
    public function setCrossReferenceProduct($cross_reference_product)
    {
        $this->container['cross_reference_product'] = $cross_reference_product;

        return $this;
    }

    /**
     * Gets cross_reference_type
     *
     * @return string
     */
    public function getCrossReferenceType()
    {
        return $this->container['cross_reference_type'];
    }

    /**
     * Sets cross_reference_type
     *
     * @param string $cross_reference_type cross_reference_type
     *
     * @return $this
     */
    public function setCrossReferenceType($cross_reference_type)
    {
        $this->container['cross_reference_type'] = $cross_reference_type;

        return $this;
    }

    /**
     * Gets quantity_on_hand
     *
     * @return double
     */
    public function getQuantityOnHand()
    {
        return $this->container['quantity_on_hand'];
    }

    /**
     * Sets quantity_on_hand
     *
     * @param double $quantity_on_hand quantity_on_hand
     *
     * @return $this
     */
    public function setQuantityOnHand($quantity_on_hand)
    {
        $this->container['quantity_on_hand'] = $quantity_on_hand;

        return $this;
    }

    /**
     * Gets quantity_reserved
     *
     * @return double
     */
    public function getQuantityReserved()
    {
        return $this->container['quantity_reserved'];
    }

    /**
     * Sets quantity_reserved
     *
     * @param double $quantity_reserved quantity_reserved
     *
     * @return $this
     */
    public function setQuantityReserved($quantity_reserved)
    {
        $this->container['quantity_reserved'] = $quantity_reserved;

        return $this;
    }

    /**
     * Gets quantity_committed
     *
     * @return double
     */
    public function getQuantityCommitted()
    {
        return $this->container['quantity_committed'];
    }

    /**
     * Sets quantity_committed
     *
     * @param double $quantity_committed quantity_committed
     *
     * @return $this
     */
    public function setQuantityCommitted($quantity_committed)
    {
        $this->container['quantity_committed'] = $quantity_committed;

        return $this;
    }

    /**
     * Gets net_available
     *
     * @return double
     */
    public function getNetAvailable()
    {
        return $this->container['net_available'];
    }

    /**
     * Sets net_available
     *
     * @param double $net_available net_available
     *
     * @return $this
     */
    public function setNetAvailable($net_available)
    {
        $this->container['net_available'] = $net_available;

        return $this;
    }

    /**
     * Gets quantity_backorder
     *
     * @return double
     */
    public function getQuantityBackorder()
    {
        return $this->container['quantity_backorder'];
    }

    /**
     * Sets quantity_backorder
     *
     * @param double $quantity_backorder quantity_backorder
     *
     * @return $this
     */
    public function setQuantityBackorder($quantity_backorder)
    {
        $this->container['quantity_backorder'] = $quantity_backorder;

        return $this;
    }

    /**
     * Gets quantity_on_order
     *
     * @return double
     */
    public function getQuantityOnOrder()
    {
        return $this->container['quantity_on_order'];
    }

    /**
     * Sets quantity_on_order
     *
     * @param double $quantity_on_order quantity_on_order
     *
     * @return $this
     */
    public function setQuantityOnOrder($quantity_on_order)
    {
        $this->container['quantity_on_order'] = $quantity_on_order;

        return $this;
    }

    /**
     * Gets quantity_received
     *
     * @return double
     */
    public function getQuantityReceived()
    {
        return $this->container['quantity_received'];
    }

    /**
     * Sets quantity_received
     *
     * @param double $quantity_received quantity_received
     *
     * @return $this
     */
    public function setQuantityReceived($quantity_received)
    {
        $this->container['quantity_received'] = $quantity_received;

        return $this;
    }

    /**
     * Gets quantity_un_available
     *
     * @return double
     */
    public function getQuantityUnAvailable()
    {
        return $this->container['quantity_un_available'];
    }

    /**
     * Sets quantity_un_available
     *
     * @param double $quantity_un_available quantity_un_available
     *
     * @return $this
     */
    public function setQuantityUnAvailable($quantity_un_available)
    {
        $this->container['quantity_un_available'] = $quantity_un_available;

        return $this;
    }

    /**
     * Gets quantity_in_transit
     *
     * @return double
     */
    public function getQuantityInTransit()
    {
        return $this->container['quantity_in_transit'];
    }

    /**
     * Sets quantity_in_transit
     *
     * @param double $quantity_in_transit quantity_in_transit
     *
     * @return $this
     */
    public function setQuantityInTransit($quantity_in_transit)
    {
        $this->container['quantity_in_transit'] = $quantity_in_transit;

        return $this;
    }

    /**
     * Gets quantity_requested_received
     *
     * @return double
     */
    public function getQuantityRequestedReceived()
    {
        return $this->container['quantity_requested_received'];
    }

    /**
     * Sets quantity_requested_received
     *
     * @param double $quantity_requested_received quantity_requested_received
     *
     * @return $this
     */
    public function setQuantityRequestedReceived($quantity_requested_received)
    {
        $this->container['quantity_requested_received'] = $quantity_requested_received;

        return $this;
    }

    /**
     * Gets quantity_requested_shipped
     *
     * @return double
     */
    public function getQuantityRequestedShipped()
    {
        return $this->container['quantity_requested_shipped'];
    }

    /**
     * Sets quantity_requested_shipped
     *
     * @param double $quantity_requested_shipped quantity_requested_shipped
     *
     * @return $this
     */
    public function setQuantityRequestedShipped($quantity_requested_shipped)
    {
        $this->container['quantity_requested_shipped'] = $quantity_requested_shipped;

        return $this;
    }

    /**
     * Gets quantity_demand
     *
     * @return double
     */
    public function getQuantityDemand()
    {
        return $this->container['quantity_demand'];
    }

    /**
     * Sets quantity_demand
     *
     * @param double $quantity_demand quantity_demand
     *
     * @return $this
     */
    public function setQuantityDemand($quantity_demand)
    {
        $this->container['quantity_demand'] = $quantity_demand;

        return $this;
    }

    /**
     * Gets surplus
     *
     * @return double
     */
    public function getSurplus()
    {
        return $this->container['surplus'];
    }

    /**
     * Sets surplus
     *
     * @param double $surplus surplus
     *
     * @return $this
     */
    public function setSurplus($surplus)
    {
        $this->container['surplus'] = $surplus;

        return $this;
    }

    /**
     * Gets purchasing_net_available
     *
     * @return double
     */
    public function getPurchasingNetAvailable()
    {
        return $this->container['purchasing_net_available'];
    }

    /**
     * Sets purchasing_net_available
     *
     * @param double $purchasing_net_available purchasing_net_available
     *
     * @return $this
     */
    public function setPurchasingNetAvailable($purchasing_net_available)
    {
        $this->container['purchasing_net_available'] = $purchasing_net_available;

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


