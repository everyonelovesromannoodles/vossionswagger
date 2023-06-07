<?php
/**
 * Sxapisfgetgenericdatav2Request
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
 * Sxapisfgetgenericdatav2Request Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sxapisfgetgenericdatav2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapisfgetgenericdatav2_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'environment_id' => 'string',
        'get_companies' => 'string',
        'get_warehoues' => 'string',
        'get_countries' => 'string',
        'get_states' => 'string',
        'get_carrier_codes' => 'string',
        'get_payment_codes' => 'string',
        'get_hold_codes' => 'string',
        'get_corporate_groups' => 'string',
        'get_freight_rates' => 'string',
        'get_postal_zones' => 'string',
        'get_alternate_warehouses' => 'string',
        'get_currency_codes' => 'string'
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
        'environment_id' => null,
        'get_companies' => null,
        'get_warehoues' => null,
        'get_countries' => null,
        'get_states' => null,
        'get_carrier_codes' => null,
        'get_payment_codes' => null,
        'get_hold_codes' => null,
        'get_corporate_groups' => null,
        'get_freight_rates' => null,
        'get_postal_zones' => null,
        'get_alternate_warehouses' => null,
        'get_currency_codes' => null
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
        'environment_id' => 'environmentID',
        'get_companies' => 'getCompanies',
        'get_warehoues' => 'getWarehoues',
        'get_countries' => 'getCountries',
        'get_states' => 'getStates',
        'get_carrier_codes' => 'getCarrierCodes',
        'get_payment_codes' => 'getPaymentCodes',
        'get_hold_codes' => 'getHoldCodes',
        'get_corporate_groups' => 'getCorporateGroups',
        'get_freight_rates' => 'getFreightRates',
        'get_postal_zones' => 'getPostalZones',
        'get_alternate_warehouses' => 'getAlternateWarehouses',
        'get_currency_codes' => 'getCurrencyCodes'
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
        'environment_id' => 'setEnvironmentId',
        'get_companies' => 'setGetCompanies',
        'get_warehoues' => 'setGetWarehoues',
        'get_countries' => 'setGetCountries',
        'get_states' => 'setGetStates',
        'get_carrier_codes' => 'setGetCarrierCodes',
        'get_payment_codes' => 'setGetPaymentCodes',
        'get_hold_codes' => 'setGetHoldCodes',
        'get_corporate_groups' => 'setGetCorporateGroups',
        'get_freight_rates' => 'setGetFreightRates',
        'get_postal_zones' => 'setGetPostalZones',
        'get_alternate_warehouses' => 'setGetAlternateWarehouses',
        'get_currency_codes' => 'setGetCurrencyCodes'
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
        'environment_id' => 'getEnvironmentId',
        'get_companies' => 'getGetCompanies',
        'get_warehoues' => 'getGetWarehoues',
        'get_countries' => 'getGetCountries',
        'get_states' => 'getGetStates',
        'get_carrier_codes' => 'getGetCarrierCodes',
        'get_payment_codes' => 'getGetPaymentCodes',
        'get_hold_codes' => 'getGetHoldCodes',
        'get_corporate_groups' => 'getGetCorporateGroups',
        'get_freight_rates' => 'getGetFreightRates',
        'get_postal_zones' => 'getGetPostalZones',
        'get_alternate_warehouses' => 'getGetAlternateWarehouses',
        'get_currency_codes' => 'getGetCurrencyCodes'
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
        $this->container['environment_id'] = isset($data['environment_id']) ? $data['environment_id'] : null;
        $this->container['get_companies'] = isset($data['get_companies']) ? $data['get_companies'] : null;
        $this->container['get_warehoues'] = isset($data['get_warehoues']) ? $data['get_warehoues'] : null;
        $this->container['get_countries'] = isset($data['get_countries']) ? $data['get_countries'] : null;
        $this->container['get_states'] = isset($data['get_states']) ? $data['get_states'] : null;
        $this->container['get_carrier_codes'] = isset($data['get_carrier_codes']) ? $data['get_carrier_codes'] : null;
        $this->container['get_payment_codes'] = isset($data['get_payment_codes']) ? $data['get_payment_codes'] : null;
        $this->container['get_hold_codes'] = isset($data['get_hold_codes']) ? $data['get_hold_codes'] : null;
        $this->container['get_corporate_groups'] = isset($data['get_corporate_groups']) ? $data['get_corporate_groups'] : null;
        $this->container['get_freight_rates'] = isset($data['get_freight_rates']) ? $data['get_freight_rates'] : null;
        $this->container['get_postal_zones'] = isset($data['get_postal_zones']) ? $data['get_postal_zones'] : null;
        $this->container['get_alternate_warehouses'] = isset($data['get_alternate_warehouses']) ? $data['get_alternate_warehouses'] : null;
        $this->container['get_currency_codes'] = isset($data['get_currency_codes']) ? $data['get_currency_codes'] : null;
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
     * Gets environment_id
     *
     * @return string
     */
    public function getEnvironmentId()
    {
        return $this->container['environment_id'];
    }

    /**
     * Sets environment_id
     *
     * @param string $environment_id environment_id
     *
     * @return $this
     */
    public function setEnvironmentId($environment_id)
    {
        $this->container['environment_id'] = $environment_id;

        return $this;
    }

    /**
     * Gets get_companies
     *
     * @return string
     */
    public function getGetCompanies()
    {
        return $this->container['get_companies'];
    }

    /**
     * Sets get_companies
     *
     * @param string $get_companies get_companies
     *
     * @return $this
     */
    public function setGetCompanies($get_companies)
    {
        $this->container['get_companies'] = $get_companies;

        return $this;
    }

    /**
     * Gets get_warehoues
     *
     * @return string
     */
    public function getGetWarehoues()
    {
        return $this->container['get_warehoues'];
    }

    /**
     * Sets get_warehoues
     *
     * @param string $get_warehoues get_warehoues
     *
     * @return $this
     */
    public function setGetWarehoues($get_warehoues)
    {
        $this->container['get_warehoues'] = $get_warehoues;

        return $this;
    }

    /**
     * Gets get_countries
     *
     * @return string
     */
    public function getGetCountries()
    {
        return $this->container['get_countries'];
    }

    /**
     * Sets get_countries
     *
     * @param string $get_countries get_countries
     *
     * @return $this
     */
    public function setGetCountries($get_countries)
    {
        $this->container['get_countries'] = $get_countries;

        return $this;
    }

    /**
     * Gets get_states
     *
     * @return string
     */
    public function getGetStates()
    {
        return $this->container['get_states'];
    }

    /**
     * Sets get_states
     *
     * @param string $get_states get_states
     *
     * @return $this
     */
    public function setGetStates($get_states)
    {
        $this->container['get_states'] = $get_states;

        return $this;
    }

    /**
     * Gets get_carrier_codes
     *
     * @return string
     */
    public function getGetCarrierCodes()
    {
        return $this->container['get_carrier_codes'];
    }

    /**
     * Sets get_carrier_codes
     *
     * @param string $get_carrier_codes get_carrier_codes
     *
     * @return $this
     */
    public function setGetCarrierCodes($get_carrier_codes)
    {
        $this->container['get_carrier_codes'] = $get_carrier_codes;

        return $this;
    }

    /**
     * Gets get_payment_codes
     *
     * @return string
     */
    public function getGetPaymentCodes()
    {
        return $this->container['get_payment_codes'];
    }

    /**
     * Sets get_payment_codes
     *
     * @param string $get_payment_codes get_payment_codes
     *
     * @return $this
     */
    public function setGetPaymentCodes($get_payment_codes)
    {
        $this->container['get_payment_codes'] = $get_payment_codes;

        return $this;
    }

    /**
     * Gets get_hold_codes
     *
     * @return string
     */
    public function getGetHoldCodes()
    {
        return $this->container['get_hold_codes'];
    }

    /**
     * Sets get_hold_codes
     *
     * @param string $get_hold_codes get_hold_codes
     *
     * @return $this
     */
    public function setGetHoldCodes($get_hold_codes)
    {
        $this->container['get_hold_codes'] = $get_hold_codes;

        return $this;
    }

    /**
     * Gets get_corporate_groups
     *
     * @return string
     */
    public function getGetCorporateGroups()
    {
        return $this->container['get_corporate_groups'];
    }

    /**
     * Sets get_corporate_groups
     *
     * @param string $get_corporate_groups get_corporate_groups
     *
     * @return $this
     */
    public function setGetCorporateGroups($get_corporate_groups)
    {
        $this->container['get_corporate_groups'] = $get_corporate_groups;

        return $this;
    }

    /**
     * Gets get_freight_rates
     *
     * @return string
     */
    public function getGetFreightRates()
    {
        return $this->container['get_freight_rates'];
    }

    /**
     * Sets get_freight_rates
     *
     * @param string $get_freight_rates get_freight_rates
     *
     * @return $this
     */
    public function setGetFreightRates($get_freight_rates)
    {
        $this->container['get_freight_rates'] = $get_freight_rates;

        return $this;
    }

    /**
     * Gets get_postal_zones
     *
     * @return string
     */
    public function getGetPostalZones()
    {
        return $this->container['get_postal_zones'];
    }

    /**
     * Sets get_postal_zones
     *
     * @param string $get_postal_zones get_postal_zones
     *
     * @return $this
     */
    public function setGetPostalZones($get_postal_zones)
    {
        $this->container['get_postal_zones'] = $get_postal_zones;

        return $this;
    }

    /**
     * Gets get_alternate_warehouses
     *
     * @return string
     */
    public function getGetAlternateWarehouses()
    {
        return $this->container['get_alternate_warehouses'];
    }

    /**
     * Sets get_alternate_warehouses
     *
     * @param string $get_alternate_warehouses get_alternate_warehouses
     *
     * @return $this
     */
    public function setGetAlternateWarehouses($get_alternate_warehouses)
    {
        $this->container['get_alternate_warehouses'] = $get_alternate_warehouses;

        return $this;
    }

    /**
     * Gets get_currency_codes
     *
     * @return string
     */
    public function getGetCurrencyCodes()
    {
        return $this->container['get_currency_codes'];
    }

    /**
     * Sets get_currency_codes
     *
     * @param string $get_currency_codes get_currency_codes
     *
     * @return $this
     */
    public function setGetCurrencyCodes($get_currency_codes)
    {
        $this->container['get_currency_codes'] = $get_currency_codes;

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


