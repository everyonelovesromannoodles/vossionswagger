<?php
/**
 * SxapiicgetwhseproductdatacostsResponse
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
 * SxapiicgetwhseproductdatacostsResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapiicgetwhseproductdatacostsResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiicgetwhseproductdatacosts_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'c_error_message' => 'string',
        'cross_reference_product' => 'string',
        'cross_reference_type' => 'string',
        'average_cost' => 'double',
        'last_cost' => 'double',
        'replacement_cost' => 'double',
        'replacement_cost_date' => '\DateTime',
        'standard_cost' => 'double',
        'standard_cost_date' => '\DateTime',
        'rebate_cost' => 'double',
        'addon_cost' => 'double',
        'datc_cost' => 'double',
        'base_year_cost' => 'double',
        'last_cost_foreign' => 'double',
        'general_ledger_cost' => 'double',
        'sales_manager_cost' => 'double',
        'price_discounting_cost' => 'double',
        'purchasing_cost' => 'double'
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
        'average_cost' => 'double',
        'last_cost' => 'double',
        'replacement_cost' => 'double',
        'replacement_cost_date' => 'date',
        'standard_cost' => 'double',
        'standard_cost_date' => 'date',
        'rebate_cost' => 'double',
        'addon_cost' => 'double',
        'datc_cost' => 'double',
        'base_year_cost' => 'double',
        'last_cost_foreign' => 'double',
        'general_ledger_cost' => 'double',
        'sales_manager_cost' => 'double',
        'price_discounting_cost' => 'double',
        'purchasing_cost' => 'double'
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
        'average_cost' => 'averageCost',
        'last_cost' => 'lastCost',
        'replacement_cost' => 'replacementCost',
        'replacement_cost_date' => 'replacementCostDate',
        'standard_cost' => 'standardCost',
        'standard_cost_date' => 'standardCostDate',
        'rebate_cost' => 'rebateCost',
        'addon_cost' => 'addonCost',
        'datc_cost' => 'datcCost',
        'base_year_cost' => 'baseYearCost',
        'last_cost_foreign' => 'lastCostForeign',
        'general_ledger_cost' => 'generalLedgerCost',
        'sales_manager_cost' => 'salesManagerCost',
        'price_discounting_cost' => 'priceDiscountingCost',
        'purchasing_cost' => 'purchasingCost'
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
        'average_cost' => 'setAverageCost',
        'last_cost' => 'setLastCost',
        'replacement_cost' => 'setReplacementCost',
        'replacement_cost_date' => 'setReplacementCostDate',
        'standard_cost' => 'setStandardCost',
        'standard_cost_date' => 'setStandardCostDate',
        'rebate_cost' => 'setRebateCost',
        'addon_cost' => 'setAddonCost',
        'datc_cost' => 'setDatcCost',
        'base_year_cost' => 'setBaseYearCost',
        'last_cost_foreign' => 'setLastCostForeign',
        'general_ledger_cost' => 'setGeneralLedgerCost',
        'sales_manager_cost' => 'setSalesManagerCost',
        'price_discounting_cost' => 'setPriceDiscountingCost',
        'purchasing_cost' => 'setPurchasingCost'
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
        'average_cost' => 'getAverageCost',
        'last_cost' => 'getLastCost',
        'replacement_cost' => 'getReplacementCost',
        'replacement_cost_date' => 'getReplacementCostDate',
        'standard_cost' => 'getStandardCost',
        'standard_cost_date' => 'getStandardCostDate',
        'rebate_cost' => 'getRebateCost',
        'addon_cost' => 'getAddonCost',
        'datc_cost' => 'getDatcCost',
        'base_year_cost' => 'getBaseYearCost',
        'last_cost_foreign' => 'getLastCostForeign',
        'general_ledger_cost' => 'getGeneralLedgerCost',
        'sales_manager_cost' => 'getSalesManagerCost',
        'price_discounting_cost' => 'getPriceDiscountingCost',
        'purchasing_cost' => 'getPurchasingCost'
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
        $this->container['average_cost'] = isset($data['average_cost']) ? $data['average_cost'] : null;
        $this->container['last_cost'] = isset($data['last_cost']) ? $data['last_cost'] : null;
        $this->container['replacement_cost'] = isset($data['replacement_cost']) ? $data['replacement_cost'] : null;
        $this->container['replacement_cost_date'] = isset($data['replacement_cost_date']) ? $data['replacement_cost_date'] : null;
        $this->container['standard_cost'] = isset($data['standard_cost']) ? $data['standard_cost'] : null;
        $this->container['standard_cost_date'] = isset($data['standard_cost_date']) ? $data['standard_cost_date'] : null;
        $this->container['rebate_cost'] = isset($data['rebate_cost']) ? $data['rebate_cost'] : null;
        $this->container['addon_cost'] = isset($data['addon_cost']) ? $data['addon_cost'] : null;
        $this->container['datc_cost'] = isset($data['datc_cost']) ? $data['datc_cost'] : null;
        $this->container['base_year_cost'] = isset($data['base_year_cost']) ? $data['base_year_cost'] : null;
        $this->container['last_cost_foreign'] = isset($data['last_cost_foreign']) ? $data['last_cost_foreign'] : null;
        $this->container['general_ledger_cost'] = isset($data['general_ledger_cost']) ? $data['general_ledger_cost'] : null;
        $this->container['sales_manager_cost'] = isset($data['sales_manager_cost']) ? $data['sales_manager_cost'] : null;
        $this->container['price_discounting_cost'] = isset($data['price_discounting_cost']) ? $data['price_discounting_cost'] : null;
        $this->container['purchasing_cost'] = isset($data['purchasing_cost']) ? $data['purchasing_cost'] : null;
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
     * Gets average_cost
     *
     * @return double
     */
    public function getAverageCost()
    {
        return $this->container['average_cost'];
    }

    /**
     * Sets average_cost
     *
     * @param double $average_cost average_cost
     *
     * @return $this
     */
    public function setAverageCost($average_cost)
    {
        $this->container['average_cost'] = $average_cost;

        return $this;
    }

    /**
     * Gets last_cost
     *
     * @return double
     */
    public function getLastCost()
    {
        return $this->container['last_cost'];
    }

    /**
     * Sets last_cost
     *
     * @param double $last_cost last_cost
     *
     * @return $this
     */
    public function setLastCost($last_cost)
    {
        $this->container['last_cost'] = $last_cost;

        return $this;
    }

    /**
     * Gets replacement_cost
     *
     * @return double
     */
    public function getReplacementCost()
    {
        return $this->container['replacement_cost'];
    }

    /**
     * Sets replacement_cost
     *
     * @param double $replacement_cost replacement_cost
     *
     * @return $this
     */
    public function setReplacementCost($replacement_cost)
    {
        $this->container['replacement_cost'] = $replacement_cost;

        return $this;
    }

    /**
     * Gets replacement_cost_date
     *
     * @return \DateTime
     */
    public function getReplacementCostDate()
    {
        return $this->container['replacement_cost_date'];
    }

    /**
     * Sets replacement_cost_date
     *
     * @param \DateTime $replacement_cost_date replacement_cost_date
     *
     * @return $this
     */
    public function setReplacementCostDate($replacement_cost_date)
    {
        $this->container['replacement_cost_date'] = $replacement_cost_date;

        return $this;
    }

    /**
     * Gets standard_cost
     *
     * @return double
     */
    public function getStandardCost()
    {
        return $this->container['standard_cost'];
    }

    /**
     * Sets standard_cost
     *
     * @param double $standard_cost standard_cost
     *
     * @return $this
     */
    public function setStandardCost($standard_cost)
    {
        $this->container['standard_cost'] = $standard_cost;

        return $this;
    }

    /**
     * Gets standard_cost_date
     *
     * @return \DateTime
     */
    public function getStandardCostDate()
    {
        return $this->container['standard_cost_date'];
    }

    /**
     * Sets standard_cost_date
     *
     * @param \DateTime $standard_cost_date standard_cost_date
     *
     * @return $this
     */
    public function setStandardCostDate($standard_cost_date)
    {
        $this->container['standard_cost_date'] = $standard_cost_date;

        return $this;
    }

    /**
     * Gets rebate_cost
     *
     * @return double
     */
    public function getRebateCost()
    {
        return $this->container['rebate_cost'];
    }

    /**
     * Sets rebate_cost
     *
     * @param double $rebate_cost rebate_cost
     *
     * @return $this
     */
    public function setRebateCost($rebate_cost)
    {
        $this->container['rebate_cost'] = $rebate_cost;

        return $this;
    }

    /**
     * Gets addon_cost
     *
     * @return double
     */
    public function getAddonCost()
    {
        return $this->container['addon_cost'];
    }

    /**
     * Sets addon_cost
     *
     * @param double $addon_cost addon_cost
     *
     * @return $this
     */
    public function setAddonCost($addon_cost)
    {
        $this->container['addon_cost'] = $addon_cost;

        return $this;
    }

    /**
     * Gets datc_cost
     *
     * @return double
     */
    public function getDatcCost()
    {
        return $this->container['datc_cost'];
    }

    /**
     * Sets datc_cost
     *
     * @param double $datc_cost datc_cost
     *
     * @return $this
     */
    public function setDatcCost($datc_cost)
    {
        $this->container['datc_cost'] = $datc_cost;

        return $this;
    }

    /**
     * Gets base_year_cost
     *
     * @return double
     */
    public function getBaseYearCost()
    {
        return $this->container['base_year_cost'];
    }

    /**
     * Sets base_year_cost
     *
     * @param double $base_year_cost base_year_cost
     *
     * @return $this
     */
    public function setBaseYearCost($base_year_cost)
    {
        $this->container['base_year_cost'] = $base_year_cost;

        return $this;
    }

    /**
     * Gets last_cost_foreign
     *
     * @return double
     */
    public function getLastCostForeign()
    {
        return $this->container['last_cost_foreign'];
    }

    /**
     * Sets last_cost_foreign
     *
     * @param double $last_cost_foreign last_cost_foreign
     *
     * @return $this
     */
    public function setLastCostForeign($last_cost_foreign)
    {
        $this->container['last_cost_foreign'] = $last_cost_foreign;

        return $this;
    }

    /**
     * Gets general_ledger_cost
     *
     * @return double
     */
    public function getGeneralLedgerCost()
    {
        return $this->container['general_ledger_cost'];
    }

    /**
     * Sets general_ledger_cost
     *
     * @param double $general_ledger_cost general_ledger_cost
     *
     * @return $this
     */
    public function setGeneralLedgerCost($general_ledger_cost)
    {
        $this->container['general_ledger_cost'] = $general_ledger_cost;

        return $this;
    }

    /**
     * Gets sales_manager_cost
     *
     * @return double
     */
    public function getSalesManagerCost()
    {
        return $this->container['sales_manager_cost'];
    }

    /**
     * Sets sales_manager_cost
     *
     * @param double $sales_manager_cost sales_manager_cost
     *
     * @return $this
     */
    public function setSalesManagerCost($sales_manager_cost)
    {
        $this->container['sales_manager_cost'] = $sales_manager_cost;

        return $this;
    }

    /**
     * Gets price_discounting_cost
     *
     * @return double
     */
    public function getPriceDiscountingCost()
    {
        return $this->container['price_discounting_cost'];
    }

    /**
     * Sets price_discounting_cost
     *
     * @param double $price_discounting_cost price_discounting_cost
     *
     * @return $this
     */
    public function setPriceDiscountingCost($price_discounting_cost)
    {
        $this->container['price_discounting_cost'] = $price_discounting_cost;

        return $this;
    }

    /**
     * Gets purchasing_cost
     *
     * @return double
     */
    public function getPurchasingCost()
    {
        return $this->container['purchasing_cost'];
    }

    /**
     * Sets purchasing_cost
     *
     * @param double $purchasing_cost purchasing_cost
     *
     * @return $this
     */
    public function setPurchasingCost($purchasing_cost)
    {
        $this->container['purchasing_cost'] = $purchasing_cost;

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


