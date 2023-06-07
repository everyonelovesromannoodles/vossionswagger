<?php
/**
 * Sxapiicgetwhseproductdatageneralv2Response
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
 * Sxapiicgetwhseproductdatageneralv2Response Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sxapiicgetwhseproductdatageneralv2Response implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiicgetwhseproductdatageneralv2_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'c_error_message' => 'string',
        'cross_reference_product' => 'string',
        'cross_reference_type' => 'string',
        'status_type' => 'string',
        'serial_lot_type' => 'string',
        'reserve_type' => 'string',
        'reserve_days' => 'int',
        'price_type' => 'string',
        'price_type_desc' => 'string',
        'product_line' => 'string',
        'base_price' => 'double',
        'list_price' => 'double',
        'arp_type' => 'string',
        'vendor_number' => 'double',
        'arp_whse' => 'string',
        'bin_location1' => 'string',
        'bin_location2' => 'string',
        'lead_time' => 'double',
        'arp_push_flag' => 'bool',
        'bin_type' => 'string',
        'backorder_short_flag' => 'bool',
        'entered_date' => '\DateTime',
        'family_group_type' => 'string',
        'freight_extra1' => 'double',
        'freight_extra2' => 'double',
        'freight_free_flag' => 'bool',
        'last_powt_date' => '\DateTime',
        'vendor_product' => 'string',
        'last_update' => 'string'
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
        'status_type' => null,
        'serial_lot_type' => null,
        'reserve_type' => null,
        'reserve_days' => 'int64',
        'price_type' => null,
        'price_type_desc' => null,
        'product_line' => null,
        'base_price' => 'double',
        'list_price' => 'double',
        'arp_type' => null,
        'vendor_number' => 'double',
        'arp_whse' => null,
        'bin_location1' => null,
        'bin_location2' => null,
        'lead_time' => 'double',
        'arp_push_flag' => null,
        'bin_type' => null,
        'backorder_short_flag' => null,
        'entered_date' => 'date',
        'family_group_type' => null,
        'freight_extra1' => 'double',
        'freight_extra2' => 'double',
        'freight_free_flag' => null,
        'last_powt_date' => 'date',
        'vendor_product' => null,
        'last_update' => null
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
        'status_type' => 'statusType',
        'serial_lot_type' => 'serialLotType',
        'reserve_type' => 'reserveType',
        'reserve_days' => 'reserveDays',
        'price_type' => 'priceType',
        'price_type_desc' => 'priceTypeDesc',
        'product_line' => 'productLine',
        'base_price' => 'basePrice',
        'list_price' => 'listPrice',
        'arp_type' => 'arpType',
        'vendor_number' => 'vendorNumber',
        'arp_whse' => 'arpWhse',
        'bin_location1' => 'binLocation1',
        'bin_location2' => 'binLocation2',
        'lead_time' => 'leadTime',
        'arp_push_flag' => 'arpPushFlag',
        'bin_type' => 'binType',
        'backorder_short_flag' => 'backorderShortFlag',
        'entered_date' => 'enteredDate',
        'family_group_type' => 'familyGroupType',
        'freight_extra1' => 'freightExtra1',
        'freight_extra2' => 'freightExtra2',
        'freight_free_flag' => 'freightFreeFlag',
        'last_powt_date' => 'lastPOWTDate',
        'vendor_product' => 'vendorProduct',
        'last_update' => 'lastUpdate'
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
        'status_type' => 'setStatusType',
        'serial_lot_type' => 'setSerialLotType',
        'reserve_type' => 'setReserveType',
        'reserve_days' => 'setReserveDays',
        'price_type' => 'setPriceType',
        'price_type_desc' => 'setPriceTypeDesc',
        'product_line' => 'setProductLine',
        'base_price' => 'setBasePrice',
        'list_price' => 'setListPrice',
        'arp_type' => 'setArpType',
        'vendor_number' => 'setVendorNumber',
        'arp_whse' => 'setArpWhse',
        'bin_location1' => 'setBinLocation1',
        'bin_location2' => 'setBinLocation2',
        'lead_time' => 'setLeadTime',
        'arp_push_flag' => 'setArpPushFlag',
        'bin_type' => 'setBinType',
        'backorder_short_flag' => 'setBackorderShortFlag',
        'entered_date' => 'setEnteredDate',
        'family_group_type' => 'setFamilyGroupType',
        'freight_extra1' => 'setFreightExtra1',
        'freight_extra2' => 'setFreightExtra2',
        'freight_free_flag' => 'setFreightFreeFlag',
        'last_powt_date' => 'setLastPowtDate',
        'vendor_product' => 'setVendorProduct',
        'last_update' => 'setLastUpdate'
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
        'status_type' => 'getStatusType',
        'serial_lot_type' => 'getSerialLotType',
        'reserve_type' => 'getReserveType',
        'reserve_days' => 'getReserveDays',
        'price_type' => 'getPriceType',
        'price_type_desc' => 'getPriceTypeDesc',
        'product_line' => 'getProductLine',
        'base_price' => 'getBasePrice',
        'list_price' => 'getListPrice',
        'arp_type' => 'getArpType',
        'vendor_number' => 'getVendorNumber',
        'arp_whse' => 'getArpWhse',
        'bin_location1' => 'getBinLocation1',
        'bin_location2' => 'getBinLocation2',
        'lead_time' => 'getLeadTime',
        'arp_push_flag' => 'getArpPushFlag',
        'bin_type' => 'getBinType',
        'backorder_short_flag' => 'getBackorderShortFlag',
        'entered_date' => 'getEnteredDate',
        'family_group_type' => 'getFamilyGroupType',
        'freight_extra1' => 'getFreightExtra1',
        'freight_extra2' => 'getFreightExtra2',
        'freight_free_flag' => 'getFreightFreeFlag',
        'last_powt_date' => 'getLastPowtDate',
        'vendor_product' => 'getVendorProduct',
        'last_update' => 'getLastUpdate'
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
        $this->container['status_type'] = isset($data['status_type']) ? $data['status_type'] : null;
        $this->container['serial_lot_type'] = isset($data['serial_lot_type']) ? $data['serial_lot_type'] : null;
        $this->container['reserve_type'] = isset($data['reserve_type']) ? $data['reserve_type'] : null;
        $this->container['reserve_days'] = isset($data['reserve_days']) ? $data['reserve_days'] : null;
        $this->container['price_type'] = isset($data['price_type']) ? $data['price_type'] : null;
        $this->container['price_type_desc'] = isset($data['price_type_desc']) ? $data['price_type_desc'] : null;
        $this->container['product_line'] = isset($data['product_line']) ? $data['product_line'] : null;
        $this->container['base_price'] = isset($data['base_price']) ? $data['base_price'] : null;
        $this->container['list_price'] = isset($data['list_price']) ? $data['list_price'] : null;
        $this->container['arp_type'] = isset($data['arp_type']) ? $data['arp_type'] : null;
        $this->container['vendor_number'] = isset($data['vendor_number']) ? $data['vendor_number'] : null;
        $this->container['arp_whse'] = isset($data['arp_whse']) ? $data['arp_whse'] : null;
        $this->container['bin_location1'] = isset($data['bin_location1']) ? $data['bin_location1'] : null;
        $this->container['bin_location2'] = isset($data['bin_location2']) ? $data['bin_location2'] : null;
        $this->container['lead_time'] = isset($data['lead_time']) ? $data['lead_time'] : null;
        $this->container['arp_push_flag'] = isset($data['arp_push_flag']) ? $data['arp_push_flag'] : null;
        $this->container['bin_type'] = isset($data['bin_type']) ? $data['bin_type'] : null;
        $this->container['backorder_short_flag'] = isset($data['backorder_short_flag']) ? $data['backorder_short_flag'] : null;
        $this->container['entered_date'] = isset($data['entered_date']) ? $data['entered_date'] : null;
        $this->container['family_group_type'] = isset($data['family_group_type']) ? $data['family_group_type'] : null;
        $this->container['freight_extra1'] = isset($data['freight_extra1']) ? $data['freight_extra1'] : null;
        $this->container['freight_extra2'] = isset($data['freight_extra2']) ? $data['freight_extra2'] : null;
        $this->container['freight_free_flag'] = isset($data['freight_free_flag']) ? $data['freight_free_flag'] : null;
        $this->container['last_powt_date'] = isset($data['last_powt_date']) ? $data['last_powt_date'] : null;
        $this->container['vendor_product'] = isset($data['vendor_product']) ? $data['vendor_product'] : null;
        $this->container['last_update'] = isset($data['last_update']) ? $data['last_update'] : null;
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
     * Gets status_type
     *
     * @return string
     */
    public function getStatusType()
    {
        return $this->container['status_type'];
    }

    /**
     * Sets status_type
     *
     * @param string $status_type status_type
     *
     * @return $this
     */
    public function setStatusType($status_type)
    {
        $this->container['status_type'] = $status_type;

        return $this;
    }

    /**
     * Gets serial_lot_type
     *
     * @return string
     */
    public function getSerialLotType()
    {
        return $this->container['serial_lot_type'];
    }

    /**
     * Sets serial_lot_type
     *
     * @param string $serial_lot_type serial_lot_type
     *
     * @return $this
     */
    public function setSerialLotType($serial_lot_type)
    {
        $this->container['serial_lot_type'] = $serial_lot_type;

        return $this;
    }

    /**
     * Gets reserve_type
     *
     * @return string
     */
    public function getReserveType()
    {
        return $this->container['reserve_type'];
    }

    /**
     * Sets reserve_type
     *
     * @param string $reserve_type reserve_type
     *
     * @return $this
     */
    public function setReserveType($reserve_type)
    {
        $this->container['reserve_type'] = $reserve_type;

        return $this;
    }

    /**
     * Gets reserve_days
     *
     * @return int
     */
    public function getReserveDays()
    {
        return $this->container['reserve_days'];
    }

    /**
     * Sets reserve_days
     *
     * @param int $reserve_days reserve_days
     *
     * @return $this
     */
    public function setReserveDays($reserve_days)
    {
        $this->container['reserve_days'] = $reserve_days;

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
     * Gets product_line
     *
     * @return string
     */
    public function getProductLine()
    {
        return $this->container['product_line'];
    }

    /**
     * Sets product_line
     *
     * @param string $product_line product_line
     *
     * @return $this
     */
    public function setProductLine($product_line)
    {
        $this->container['product_line'] = $product_line;

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
     * Gets arp_type
     *
     * @return string
     */
    public function getArpType()
    {
        return $this->container['arp_type'];
    }

    /**
     * Sets arp_type
     *
     * @param string $arp_type arp_type
     *
     * @return $this
     */
    public function setArpType($arp_type)
    {
        $this->container['arp_type'] = $arp_type;

        return $this;
    }

    /**
     * Gets vendor_number
     *
     * @return double
     */
    public function getVendorNumber()
    {
        return $this->container['vendor_number'];
    }

    /**
     * Sets vendor_number
     *
     * @param double $vendor_number vendor_number
     *
     * @return $this
     */
    public function setVendorNumber($vendor_number)
    {
        $this->container['vendor_number'] = $vendor_number;

        return $this;
    }

    /**
     * Gets arp_whse
     *
     * @return string
     */
    public function getArpWhse()
    {
        return $this->container['arp_whse'];
    }

    /**
     * Sets arp_whse
     *
     * @param string $arp_whse arp_whse
     *
     * @return $this
     */
    public function setArpWhse($arp_whse)
    {
        $this->container['arp_whse'] = $arp_whse;

        return $this;
    }

    /**
     * Gets bin_location1
     *
     * @return string
     */
    public function getBinLocation1()
    {
        return $this->container['bin_location1'];
    }

    /**
     * Sets bin_location1
     *
     * @param string $bin_location1 bin_location1
     *
     * @return $this
     */
    public function setBinLocation1($bin_location1)
    {
        $this->container['bin_location1'] = $bin_location1;

        return $this;
    }

    /**
     * Gets bin_location2
     *
     * @return string
     */
    public function getBinLocation2()
    {
        return $this->container['bin_location2'];
    }

    /**
     * Sets bin_location2
     *
     * @param string $bin_location2 bin_location2
     *
     * @return $this
     */
    public function setBinLocation2($bin_location2)
    {
        $this->container['bin_location2'] = $bin_location2;

        return $this;
    }

    /**
     * Gets lead_time
     *
     * @return double
     */
    public function getLeadTime()
    {
        return $this->container['lead_time'];
    }

    /**
     * Sets lead_time
     *
     * @param double $lead_time lead_time
     *
     * @return $this
     */
    public function setLeadTime($lead_time)
    {
        $this->container['lead_time'] = $lead_time;

        return $this;
    }

    /**
     * Gets arp_push_flag
     *
     * @return bool
     */
    public function getArpPushFlag()
    {
        return $this->container['arp_push_flag'];
    }

    /**
     * Sets arp_push_flag
     *
     * @param bool $arp_push_flag arp_push_flag
     *
     * @return $this
     */
    public function setArpPushFlag($arp_push_flag)
    {
        $this->container['arp_push_flag'] = $arp_push_flag;

        return $this;
    }

    /**
     * Gets bin_type
     *
     * @return string
     */
    public function getBinType()
    {
        return $this->container['bin_type'];
    }

    /**
     * Sets bin_type
     *
     * @param string $bin_type bin_type
     *
     * @return $this
     */
    public function setBinType($bin_type)
    {
        $this->container['bin_type'] = $bin_type;

        return $this;
    }

    /**
     * Gets backorder_short_flag
     *
     * @return bool
     */
    public function getBackorderShortFlag()
    {
        return $this->container['backorder_short_flag'];
    }

    /**
     * Sets backorder_short_flag
     *
     * @param bool $backorder_short_flag backorder_short_flag
     *
     * @return $this
     */
    public function setBackorderShortFlag($backorder_short_flag)
    {
        $this->container['backorder_short_flag'] = $backorder_short_flag;

        return $this;
    }

    /**
     * Gets entered_date
     *
     * @return \DateTime
     */
    public function getEnteredDate()
    {
        return $this->container['entered_date'];
    }

    /**
     * Sets entered_date
     *
     * @param \DateTime $entered_date entered_date
     *
     * @return $this
     */
    public function setEnteredDate($entered_date)
    {
        $this->container['entered_date'] = $entered_date;

        return $this;
    }

    /**
     * Gets family_group_type
     *
     * @return string
     */
    public function getFamilyGroupType()
    {
        return $this->container['family_group_type'];
    }

    /**
     * Sets family_group_type
     *
     * @param string $family_group_type family_group_type
     *
     * @return $this
     */
    public function setFamilyGroupType($family_group_type)
    {
        $this->container['family_group_type'] = $family_group_type;

        return $this;
    }

    /**
     * Gets freight_extra1
     *
     * @return double
     */
    public function getFreightExtra1()
    {
        return $this->container['freight_extra1'];
    }

    /**
     * Sets freight_extra1
     *
     * @param double $freight_extra1 freight_extra1
     *
     * @return $this
     */
    public function setFreightExtra1($freight_extra1)
    {
        $this->container['freight_extra1'] = $freight_extra1;

        return $this;
    }

    /**
     * Gets freight_extra2
     *
     * @return double
     */
    public function getFreightExtra2()
    {
        return $this->container['freight_extra2'];
    }

    /**
     * Sets freight_extra2
     *
     * @param double $freight_extra2 freight_extra2
     *
     * @return $this
     */
    public function setFreightExtra2($freight_extra2)
    {
        $this->container['freight_extra2'] = $freight_extra2;

        return $this;
    }

    /**
     * Gets freight_free_flag
     *
     * @return bool
     */
    public function getFreightFreeFlag()
    {
        return $this->container['freight_free_flag'];
    }

    /**
     * Sets freight_free_flag
     *
     * @param bool $freight_free_flag freight_free_flag
     *
     * @return $this
     */
    public function setFreightFreeFlag($freight_free_flag)
    {
        $this->container['freight_free_flag'] = $freight_free_flag;

        return $this;
    }

    /**
     * Gets last_powt_date
     *
     * @return \DateTime
     */
    public function getLastPowtDate()
    {
        return $this->container['last_powt_date'];
    }

    /**
     * Sets last_powt_date
     *
     * @param \DateTime $last_powt_date last_powt_date
     *
     * @return $this
     */
    public function setLastPowtDate($last_powt_date)
    {
        $this->container['last_powt_date'] = $last_powt_date;

        return $this;
    }

    /**
     * Gets vendor_product
     *
     * @return string
     */
    public function getVendorProduct()
    {
        return $this->container['vendor_product'];
    }

    /**
     * Sets vendor_product
     *
     * @param string $vendor_product vendor_product
     *
     * @return $this
     */
    public function setVendorProduct($vendor_product)
    {
        $this->container['vendor_product'] = $vendor_product;

        return $this;
    }

    /**
     * Gets last_update
     *
     * @return string
     */
    public function getLastUpdate()
    {
        return $this->container['last_update'];
    }

    /**
     * Sets last_update
     *
     * @param string $last_update last_update
     *
     * @return $this
     */
    public function setLastUpdate($last_update)
    {
        $this->container['last_update'] = $last_update;

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


