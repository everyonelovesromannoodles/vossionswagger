<?php
/**
 * SxapiargetcustomerlistRequest
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
 * SxapiargetcustomerlistRequest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapiargetcustomerlistRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiargetcustomerlist_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'name' => 'string',
        'lookup_name' => 'string',
        'customer_number' => 'double',
        'city' => 'string',
        'state' => 'string',
        'postal_code' => 'string',
        'phone' => 'string',
        'include_inactive_customers' => 'bool',
        'last_review' => '\DateTime',
        'last_review_comparison' => 'string',
        'next_review' => '\DateTime',
        'next_review_comparison' => 'string',
        'balance' => 'double',
        'balance_comparison' => 'string',
        'sort' => 'string',
        'record_limit' => 'int'
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
        'name' => null,
        'lookup_name' => null,
        'customer_number' => 'double',
        'city' => null,
        'state' => null,
        'postal_code' => null,
        'phone' => null,
        'include_inactive_customers' => null,
        'last_review' => 'date',
        'last_review_comparison' => null,
        'next_review' => 'date',
        'next_review_comparison' => null,
        'balance' => 'double',
        'balance_comparison' => null,
        'sort' => null,
        'record_limit' => 'int64'
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
        'name' => 'name',
        'lookup_name' => 'lookupName',
        'customer_number' => 'customerNumber',
        'city' => 'city',
        'state' => 'state',
        'postal_code' => 'postalCode',
        'phone' => 'phone',
        'include_inactive_customers' => 'includeInactiveCustomers',
        'last_review' => 'lastReview',
        'last_review_comparison' => 'lastReviewComparison',
        'next_review' => 'nextReview',
        'next_review_comparison' => 'nextReviewComparison',
        'balance' => 'balance',
        'balance_comparison' => 'balanceComparison',
        'sort' => 'sort',
        'record_limit' => 'recordLimit'
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
        'name' => 'setName',
        'lookup_name' => 'setLookupName',
        'customer_number' => 'setCustomerNumber',
        'city' => 'setCity',
        'state' => 'setState',
        'postal_code' => 'setPostalCode',
        'phone' => 'setPhone',
        'include_inactive_customers' => 'setIncludeInactiveCustomers',
        'last_review' => 'setLastReview',
        'last_review_comparison' => 'setLastReviewComparison',
        'next_review' => 'setNextReview',
        'next_review_comparison' => 'setNextReviewComparison',
        'balance' => 'setBalance',
        'balance_comparison' => 'setBalanceComparison',
        'sort' => 'setSort',
        'record_limit' => 'setRecordLimit'
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
        'name' => 'getName',
        'lookup_name' => 'getLookupName',
        'customer_number' => 'getCustomerNumber',
        'city' => 'getCity',
        'state' => 'getState',
        'postal_code' => 'getPostalCode',
        'phone' => 'getPhone',
        'include_inactive_customers' => 'getIncludeInactiveCustomers',
        'last_review' => 'getLastReview',
        'last_review_comparison' => 'getLastReviewComparison',
        'next_review' => 'getNextReview',
        'next_review_comparison' => 'getNextReviewComparison',
        'balance' => 'getBalance',
        'balance_comparison' => 'getBalanceComparison',
        'sort' => 'getSort',
        'record_limit' => 'getRecordLimit'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['lookup_name'] = isset($data['lookup_name']) ? $data['lookup_name'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['include_inactive_customers'] = isset($data['include_inactive_customers']) ? $data['include_inactive_customers'] : null;
        $this->container['last_review'] = isset($data['last_review']) ? $data['last_review'] : null;
        $this->container['last_review_comparison'] = isset($data['last_review_comparison']) ? $data['last_review_comparison'] : null;
        $this->container['next_review'] = isset($data['next_review']) ? $data['next_review'] : null;
        $this->container['next_review_comparison'] = isset($data['next_review_comparison']) ? $data['next_review_comparison'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['balance_comparison'] = isset($data['balance_comparison']) ? $data['balance_comparison'] : null;
        $this->container['sort'] = isset($data['sort']) ? $data['sort'] : null;
        $this->container['record_limit'] = isset($data['record_limit']) ? $data['record_limit'] : null;
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets lookup_name
     *
     * @return string
     */
    public function getLookupName()
    {
        return $this->container['lookup_name'];
    }

    /**
     * Sets lookup_name
     *
     * @param string $lookup_name lookup_name
     *
     * @return $this
     */
    public function setLookupName($lookup_name)
    {
        $this->container['lookup_name'] = $lookup_name;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return double
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param double $customer_number customer_number
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

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
     * Gets postal_code
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code
     *
     * @param string $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

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
     * Gets include_inactive_customers
     *
     * @return bool
     */
    public function getIncludeInactiveCustomers()
    {
        return $this->container['include_inactive_customers'];
    }

    /**
     * Sets include_inactive_customers
     *
     * @param bool $include_inactive_customers include_inactive_customers
     *
     * @return $this
     */
    public function setIncludeInactiveCustomers($include_inactive_customers)
    {
        $this->container['include_inactive_customers'] = $include_inactive_customers;

        return $this;
    }

    /**
     * Gets last_review
     *
     * @return \DateTime
     */
    public function getLastReview()
    {
        return $this->container['last_review'];
    }

    /**
     * Sets last_review
     *
     * @param \DateTime $last_review last_review
     *
     * @return $this
     */
    public function setLastReview($last_review)
    {
        $this->container['last_review'] = $last_review;

        return $this;
    }

    /**
     * Gets last_review_comparison
     *
     * @return string
     */
    public function getLastReviewComparison()
    {
        return $this->container['last_review_comparison'];
    }

    /**
     * Sets last_review_comparison
     *
     * @param string $last_review_comparison last_review_comparison
     *
     * @return $this
     */
    public function setLastReviewComparison($last_review_comparison)
    {
        $this->container['last_review_comparison'] = $last_review_comparison;

        return $this;
    }

    /**
     * Gets next_review
     *
     * @return \DateTime
     */
    public function getNextReview()
    {
        return $this->container['next_review'];
    }

    /**
     * Sets next_review
     *
     * @param \DateTime $next_review next_review
     *
     * @return $this
     */
    public function setNextReview($next_review)
    {
        $this->container['next_review'] = $next_review;

        return $this;
    }

    /**
     * Gets next_review_comparison
     *
     * @return string
     */
    public function getNextReviewComparison()
    {
        return $this->container['next_review_comparison'];
    }

    /**
     * Sets next_review_comparison
     *
     * @param string $next_review_comparison next_review_comparison
     *
     * @return $this
     */
    public function setNextReviewComparison($next_review_comparison)
    {
        $this->container['next_review_comparison'] = $next_review_comparison;

        return $this;
    }

    /**
     * Gets balance
     *
     * @return double
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     *
     * @param double $balance balance
     *
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets balance_comparison
     *
     * @return string
     */
    public function getBalanceComparison()
    {
        return $this->container['balance_comparison'];
    }

    /**
     * Sets balance_comparison
     *
     * @param string $balance_comparison balance_comparison
     *
     * @return $this
     */
    public function setBalanceComparison($balance_comparison)
    {
        $this->container['balance_comparison'] = $balance_comparison;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return string
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param string $sort sort
     *
     * @return $this
     */
    public function setSort($sort)
    {
        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets record_limit
     *
     * @return int
     */
    public function getRecordLimit()
    {
        return $this->container['record_limit'];
    }

    /**
     * Sets record_limit
     *
     * @param int $record_limit record_limit
     *
     * @return $this
     */
    public function setRecordLimit($record_limit)
    {
        $this->container['record_limit'] = $record_limit;

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

