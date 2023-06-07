<?php
/**
 * Sxapioepricingv5Response
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
 * Sxapioepricingv5Response Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sxapioepricingv5Response implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapioepricingv5_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'c_error_message' => 'string',
        'price' => 'double',
        'discount_amount' => 'double',
        'discount_type' => 'string',
        'net_available' => 'double',
        'special_cost_type' => 'string',
        'price_cost_per' => 'string',
        'units_per_stocking' => 'double',
        'special_conversion' => 'int',
        'special_cost_record_number' => 'int',
        'stocking_quantity_ordered' => 'double',
        'unit_conversion' => 'double',
        'pricing_record_number' => 'int',
        'promotional_flag' => 'bool',
        'price_origin_code' => 'string',
        'units_per_stocking_text' => 'string',
        'extended_amount' => 'double',
        'extended_discount_amount' => 'double',
        'base_price' => 'double',
        'list_price' => 'double',
        'price_on_type' => 'string',
        't_outfieldvalue' => '\Swagger\Client\Model\TOutfieldvalueResp'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'c_error_message' => null,
        'price' => 'double',
        'discount_amount' => 'double',
        'discount_type' => null,
        'net_available' => 'double',
        'special_cost_type' => null,
        'price_cost_per' => null,
        'units_per_stocking' => 'double',
        'special_conversion' => 'int64',
        'special_cost_record_number' => 'int64',
        'stocking_quantity_ordered' => 'double',
        'unit_conversion' => 'double',
        'pricing_record_number' => 'int64',
        'promotional_flag' => null,
        'price_origin_code' => null,
        'units_per_stocking_text' => null,
        'extended_amount' => 'double',
        'extended_discount_amount' => 'double',
        'base_price' => 'double',
        'list_price' => 'double',
        'price_on_type' => null,
        't_outfieldvalue' => null
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
        'price' => 'price',
        'discount_amount' => 'discountAmount',
        'discount_type' => 'discountType',
        'net_available' => 'netAvailable',
        'special_cost_type' => 'specialCostType',
        'price_cost_per' => 'priceCostPer',
        'units_per_stocking' => 'unitsPerStocking',
        'special_conversion' => 'specialConversion',
        'special_cost_record_number' => 'specialCostRecordNumber',
        'stocking_quantity_ordered' => 'stockingQuantityOrdered',
        'unit_conversion' => 'unitConversion',
        'pricing_record_number' => 'pricingRecordNumber',
        'promotional_flag' => 'promotionalFlag',
        'price_origin_code' => 'priceOriginCode',
        'units_per_stocking_text' => 'unitsPerStockingText',
        'extended_amount' => 'extendedAmount',
        'extended_discount_amount' => 'extendedDiscountAmount',
        'base_price' => 'basePrice',
        'list_price' => 'listPrice',
        'price_on_type' => 'priceOnType',
        't_outfieldvalue' => 'tOutfieldvalue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_error_message' => 'setCErrorMessage',
        'price' => 'setPrice',
        'discount_amount' => 'setDiscountAmount',
        'discount_type' => 'setDiscountType',
        'net_available' => 'setNetAvailable',
        'special_cost_type' => 'setSpecialCostType',
        'price_cost_per' => 'setPriceCostPer',
        'units_per_stocking' => 'setUnitsPerStocking',
        'special_conversion' => 'setSpecialConversion',
        'special_cost_record_number' => 'setSpecialCostRecordNumber',
        'stocking_quantity_ordered' => 'setStockingQuantityOrdered',
        'unit_conversion' => 'setUnitConversion',
        'pricing_record_number' => 'setPricingRecordNumber',
        'promotional_flag' => 'setPromotionalFlag',
        'price_origin_code' => 'setPriceOriginCode',
        'units_per_stocking_text' => 'setUnitsPerStockingText',
        'extended_amount' => 'setExtendedAmount',
        'extended_discount_amount' => 'setExtendedDiscountAmount',
        'base_price' => 'setBasePrice',
        'list_price' => 'setListPrice',
        'price_on_type' => 'setPriceOnType',
        't_outfieldvalue' => 'setTOutfieldvalue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_error_message' => 'getCErrorMessage',
        'price' => 'getPrice',
        'discount_amount' => 'getDiscountAmount',
        'discount_type' => 'getDiscountType',
        'net_available' => 'getNetAvailable',
        'special_cost_type' => 'getSpecialCostType',
        'price_cost_per' => 'getPriceCostPer',
        'units_per_stocking' => 'getUnitsPerStocking',
        'special_conversion' => 'getSpecialConversion',
        'special_cost_record_number' => 'getSpecialCostRecordNumber',
        'stocking_quantity_ordered' => 'getStockingQuantityOrdered',
        'unit_conversion' => 'getUnitConversion',
        'pricing_record_number' => 'getPricingRecordNumber',
        'promotional_flag' => 'getPromotionalFlag',
        'price_origin_code' => 'getPriceOriginCode',
        'units_per_stocking_text' => 'getUnitsPerStockingText',
        'extended_amount' => 'getExtendedAmount',
        'extended_discount_amount' => 'getExtendedDiscountAmount',
        'base_price' => 'getBasePrice',
        'list_price' => 'getListPrice',
        'price_on_type' => 'getPriceOnType',
        't_outfieldvalue' => 'getTOutfieldvalue'
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
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['discount_amount'] = isset($data['discount_amount']) ? $data['discount_amount'] : null;
        $this->container['discount_type'] = isset($data['discount_type']) ? $data['discount_type'] : null;
        $this->container['net_available'] = isset($data['net_available']) ? $data['net_available'] : null;
        $this->container['special_cost_type'] = isset($data['special_cost_type']) ? $data['special_cost_type'] : null;
        $this->container['price_cost_per'] = isset($data['price_cost_per']) ? $data['price_cost_per'] : null;
        $this->container['units_per_stocking'] = isset($data['units_per_stocking']) ? $data['units_per_stocking'] : null;
        $this->container['special_conversion'] = isset($data['special_conversion']) ? $data['special_conversion'] : null;
        $this->container['special_cost_record_number'] = isset($data['special_cost_record_number']) ? $data['special_cost_record_number'] : null;
        $this->container['stocking_quantity_ordered'] = isset($data['stocking_quantity_ordered']) ? $data['stocking_quantity_ordered'] : null;
        $this->container['unit_conversion'] = isset($data['unit_conversion']) ? $data['unit_conversion'] : null;
        $this->container['pricing_record_number'] = isset($data['pricing_record_number']) ? $data['pricing_record_number'] : null;
        $this->container['promotional_flag'] = isset($data['promotional_flag']) ? $data['promotional_flag'] : null;
        $this->container['price_origin_code'] = isset($data['price_origin_code']) ? $data['price_origin_code'] : null;
        $this->container['units_per_stocking_text'] = isset($data['units_per_stocking_text']) ? $data['units_per_stocking_text'] : null;
        $this->container['extended_amount'] = isset($data['extended_amount']) ? $data['extended_amount'] : null;
        $this->container['extended_discount_amount'] = isset($data['extended_discount_amount']) ? $data['extended_discount_amount'] : null;
        $this->container['base_price'] = isset($data['base_price']) ? $data['base_price'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
        $this->container['price_on_type'] = isset($data['price_on_type']) ? $data['price_on_type'] : null;
        $this->container['t_outfieldvalue'] = isset($data['t_outfieldvalue']) ? $data['t_outfieldvalue'] : null;
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
     * Gets discount_amount
     *
     * @return double
     */
    public function getDiscountAmount()
    {
        return $this->container['discount_amount'];
    }

    /**
     * Sets discount_amount
     *
     * @param double $discount_amount discount_amount
     *
     * @return $this
     */
    public function setDiscountAmount($discount_amount)
    {
        $this->container['discount_amount'] = $discount_amount;

        return $this;
    }

    /**
     * Gets discount_type
     *
     * @return string
     */
    public function getDiscountType()
    {
        return $this->container['discount_type'];
    }

    /**
     * Sets discount_type
     *
     * @param string $discount_type discount_type
     *
     * @return $this
     */
    public function setDiscountType($discount_type)
    {
        $this->container['discount_type'] = $discount_type;

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
     * Gets special_cost_type
     *
     * @return string
     */
    public function getSpecialCostType()
    {
        return $this->container['special_cost_type'];
    }

    /**
     * Sets special_cost_type
     *
     * @param string $special_cost_type special_cost_type
     *
     * @return $this
     */
    public function setSpecialCostType($special_cost_type)
    {
        $this->container['special_cost_type'] = $special_cost_type;

        return $this;
    }

    /**
     * Gets price_cost_per
     *
     * @return string
     */
    public function getPriceCostPer()
    {
        return $this->container['price_cost_per'];
    }

    /**
     * Sets price_cost_per
     *
     * @param string $price_cost_per price_cost_per
     *
     * @return $this
     */
    public function setPriceCostPer($price_cost_per)
    {
        $this->container['price_cost_per'] = $price_cost_per;

        return $this;
    }

    /**
     * Gets units_per_stocking
     *
     * @return double
     */
    public function getUnitsPerStocking()
    {
        return $this->container['units_per_stocking'];
    }

    /**
     * Sets units_per_stocking
     *
     * @param double $units_per_stocking units_per_stocking
     *
     * @return $this
     */
    public function setUnitsPerStocking($units_per_stocking)
    {
        $this->container['units_per_stocking'] = $units_per_stocking;

        return $this;
    }

    /**
     * Gets special_conversion
     *
     * @return int
     */
    public function getSpecialConversion()
    {
        return $this->container['special_conversion'];
    }

    /**
     * Sets special_conversion
     *
     * @param int $special_conversion special_conversion
     *
     * @return $this
     */
    public function setSpecialConversion($special_conversion)
    {
        $this->container['special_conversion'] = $special_conversion;

        return $this;
    }

    /**
     * Gets special_cost_record_number
     *
     * @return int
     */
    public function getSpecialCostRecordNumber()
    {
        return $this->container['special_cost_record_number'];
    }

    /**
     * Sets special_cost_record_number
     *
     * @param int $special_cost_record_number special_cost_record_number
     *
     * @return $this
     */
    public function setSpecialCostRecordNumber($special_cost_record_number)
    {
        $this->container['special_cost_record_number'] = $special_cost_record_number;

        return $this;
    }

    /**
     * Gets stocking_quantity_ordered
     *
     * @return double
     */
    public function getStockingQuantityOrdered()
    {
        return $this->container['stocking_quantity_ordered'];
    }

    /**
     * Sets stocking_quantity_ordered
     *
     * @param double $stocking_quantity_ordered stocking_quantity_ordered
     *
     * @return $this
     */
    public function setStockingQuantityOrdered($stocking_quantity_ordered)
    {
        $this->container['stocking_quantity_ordered'] = $stocking_quantity_ordered;

        return $this;
    }

    /**
     * Gets unit_conversion
     *
     * @return double
     */
    public function getUnitConversion()
    {
        return $this->container['unit_conversion'];
    }

    /**
     * Sets unit_conversion
     *
     * @param double $unit_conversion unit_conversion
     *
     * @return $this
     */
    public function setUnitConversion($unit_conversion)
    {
        $this->container['unit_conversion'] = $unit_conversion;

        return $this;
    }

    /**
     * Gets pricing_record_number
     *
     * @return int
     */
    public function getPricingRecordNumber()
    {
        return $this->container['pricing_record_number'];
    }

    /**
     * Sets pricing_record_number
     *
     * @param int $pricing_record_number pricing_record_number
     *
     * @return $this
     */
    public function setPricingRecordNumber($pricing_record_number)
    {
        $this->container['pricing_record_number'] = $pricing_record_number;

        return $this;
    }

    /**
     * Gets promotional_flag
     *
     * @return bool
     */
    public function getPromotionalFlag()
    {
        return $this->container['promotional_flag'];
    }

    /**
     * Sets promotional_flag
     *
     * @param bool $promotional_flag promotional_flag
     *
     * @return $this
     */
    public function setPromotionalFlag($promotional_flag)
    {
        $this->container['promotional_flag'] = $promotional_flag;

        return $this;
    }

    /**
     * Gets price_origin_code
     *
     * @return string
     */
    public function getPriceOriginCode()
    {
        return $this->container['price_origin_code'];
    }

    /**
     * Sets price_origin_code
     *
     * @param string $price_origin_code price_origin_code
     *
     * @return $this
     */
    public function setPriceOriginCode($price_origin_code)
    {
        $this->container['price_origin_code'] = $price_origin_code;

        return $this;
    }

    /**
     * Gets units_per_stocking_text
     *
     * @return string
     */
    public function getUnitsPerStockingText()
    {
        return $this->container['units_per_stocking_text'];
    }

    /**
     * Sets units_per_stocking_text
     *
     * @param string $units_per_stocking_text units_per_stocking_text
     *
     * @return $this
     */
    public function setUnitsPerStockingText($units_per_stocking_text)
    {
        $this->container['units_per_stocking_text'] = $units_per_stocking_text;

        return $this;
    }

    /**
     * Gets extended_amount
     *
     * @return double
     */
    public function getExtendedAmount()
    {
        return $this->container['extended_amount'];
    }

    /**
     * Sets extended_amount
     *
     * @param double $extended_amount extended_amount
     *
     * @return $this
     */
    public function setExtendedAmount($extended_amount)
    {
        $this->container['extended_amount'] = $extended_amount;

        return $this;
    }

    /**
     * Gets extended_discount_amount
     *
     * @return double
     */
    public function getExtendedDiscountAmount()
    {
        return $this->container['extended_discount_amount'];
    }

    /**
     * Sets extended_discount_amount
     *
     * @param double $extended_discount_amount extended_discount_amount
     *
     * @return $this
     */
    public function setExtendedDiscountAmount($extended_discount_amount)
    {
        $this->container['extended_discount_amount'] = $extended_discount_amount;

        return $this;
    }

    /**
     * Gets base_price
     *
     * @return double
     */
    public function getBasePrice()
    {
        return $this->container['base_price'];
    }

    /**
     * Sets base_price
     *
     * @param double $base_price base_price
     *
     * @return $this
     */
    public function setBasePrice($base_price)
    {
        $this->container['base_price'] = $base_price;

        return $this;
    }

    /**
     * Gets list_price
     *
     * @return double
     */
    public function getListPrice()
    {
        return $this->container['list_price'];
    }

    /**
     * Sets list_price
     *
     * @param double $list_price list_price
     *
     * @return $this
     */
    public function setListPrice($list_price)
    {
        $this->container['list_price'] = $list_price;

        return $this;
    }

    /**
     * Gets price_on_type
     *
     * @return string
     */
    public function getPriceOnType()
    {
        return $this->container['price_on_type'];
    }

    /**
     * Sets price_on_type
     *
     * @param string $price_on_type price_on_type
     *
     * @return $this
     */
    public function setPriceOnType($price_on_type)
    {
        $this->container['price_on_type'] = $price_on_type;

        return $this;
    }

    /**
     * Gets t_outfieldvalue
     *
     * @return \Swagger\Client\Model\TOutfieldvalueResp
     */
    public function getTOutfieldvalue()
    {
        return $this->container['t_outfieldvalue'];
    }

    /**
     * Sets t_outfieldvalue
     *
     * @param \Swagger\Client\Model\TOutfieldvalueResp $t_outfieldvalue t_outfieldvalue
     *
     * @return $this
     */
    public function setTOutfieldvalue($t_outfieldvalue)
    {
        $this->container['t_outfieldvalue'] = $t_outfieldvalue;

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

