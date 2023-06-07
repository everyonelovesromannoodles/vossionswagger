<?php
/**
 * SxapiargetcustomerdatacreditrestResponse
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
 * SxapiargetcustomerdatacreditrestResponse Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxapiargetcustomerdatacreditrestResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapiargetcustomerdatacreditrest_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'c_error_message' => 'string',
        'accounts_payable_manager' => 'string',
        'accounts_payable_phone_number' => 'string',
        'bank_account' => 'string',
        'bank_manager' => 'string',
        'bank_name' => 'string',
        'bank_phone_number' => 'string',
        'credit_reference1' => 'string',
        'credit_reference2' => 'string',
        'credit_service_name' => 'string',
        'duns_number' => 'string',
        'entered_date' => '\DateTime',
        'last_rating1' => 'string',
        'last_rating2' => 'string',
        'last_rating_date1' => '\DateTime',
        'last_rating_date2' => '\DateTime',
        'past_due_date' => '\DateTime',
        'pm_cash_flag' => 'bool',
        'security_agreement' => 'bool',
        'status_date' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'c_error_message' => null,
        'accounts_payable_manager' => null,
        'accounts_payable_phone_number' => null,
        'bank_account' => null,
        'bank_manager' => null,
        'bank_name' => null,
        'bank_phone_number' => null,
        'credit_reference1' => null,
        'credit_reference2' => null,
        'credit_service_name' => null,
        'duns_number' => null,
        'entered_date' => 'date',
        'last_rating1' => null,
        'last_rating2' => null,
        'last_rating_date1' => 'date',
        'last_rating_date2' => 'date',
        'past_due_date' => 'date',
        'pm_cash_flag' => null,
        'security_agreement' => null,
        'status_date' => 'date'
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
        'accounts_payable_manager' => 'accountsPayableManager',
        'accounts_payable_phone_number' => 'accountsPayablePhoneNumber',
        'bank_account' => 'bankAccount',
        'bank_manager' => 'bankManager',
        'bank_name' => 'bankName',
        'bank_phone_number' => 'bankPhoneNumber',
        'credit_reference1' => 'creditReference1',
        'credit_reference2' => 'creditReference2',
        'credit_service_name' => 'creditServiceName',
        'duns_number' => 'dunsNumber',
        'entered_date' => 'enteredDate',
        'last_rating1' => 'lastRating1',
        'last_rating2' => 'lastRating2',
        'last_rating_date1' => 'lastRatingDate1',
        'last_rating_date2' => 'lastRatingDate2',
        'past_due_date' => 'pastDueDate',
        'pm_cash_flag' => 'pmCashFlag',
        'security_agreement' => 'securityAgreement',
        'status_date' => 'statusDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c_error_message' => 'setCErrorMessage',
        'accounts_payable_manager' => 'setAccountsPayableManager',
        'accounts_payable_phone_number' => 'setAccountsPayablePhoneNumber',
        'bank_account' => 'setBankAccount',
        'bank_manager' => 'setBankManager',
        'bank_name' => 'setBankName',
        'bank_phone_number' => 'setBankPhoneNumber',
        'credit_reference1' => 'setCreditReference1',
        'credit_reference2' => 'setCreditReference2',
        'credit_service_name' => 'setCreditServiceName',
        'duns_number' => 'setDunsNumber',
        'entered_date' => 'setEnteredDate',
        'last_rating1' => 'setLastRating1',
        'last_rating2' => 'setLastRating2',
        'last_rating_date1' => 'setLastRatingDate1',
        'last_rating_date2' => 'setLastRatingDate2',
        'past_due_date' => 'setPastDueDate',
        'pm_cash_flag' => 'setPmCashFlag',
        'security_agreement' => 'setSecurityAgreement',
        'status_date' => 'setStatusDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c_error_message' => 'getCErrorMessage',
        'accounts_payable_manager' => 'getAccountsPayableManager',
        'accounts_payable_phone_number' => 'getAccountsPayablePhoneNumber',
        'bank_account' => 'getBankAccount',
        'bank_manager' => 'getBankManager',
        'bank_name' => 'getBankName',
        'bank_phone_number' => 'getBankPhoneNumber',
        'credit_reference1' => 'getCreditReference1',
        'credit_reference2' => 'getCreditReference2',
        'credit_service_name' => 'getCreditServiceName',
        'duns_number' => 'getDunsNumber',
        'entered_date' => 'getEnteredDate',
        'last_rating1' => 'getLastRating1',
        'last_rating2' => 'getLastRating2',
        'last_rating_date1' => 'getLastRatingDate1',
        'last_rating_date2' => 'getLastRatingDate2',
        'past_due_date' => 'getPastDueDate',
        'pm_cash_flag' => 'getPmCashFlag',
        'security_agreement' => 'getSecurityAgreement',
        'status_date' => 'getStatusDate'
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
        $this->container['accounts_payable_manager'] = isset($data['accounts_payable_manager']) ? $data['accounts_payable_manager'] : null;
        $this->container['accounts_payable_phone_number'] = isset($data['accounts_payable_phone_number']) ? $data['accounts_payable_phone_number'] : null;
        $this->container['bank_account'] = isset($data['bank_account']) ? $data['bank_account'] : null;
        $this->container['bank_manager'] = isset($data['bank_manager']) ? $data['bank_manager'] : null;
        $this->container['bank_name'] = isset($data['bank_name']) ? $data['bank_name'] : null;
        $this->container['bank_phone_number'] = isset($data['bank_phone_number']) ? $data['bank_phone_number'] : null;
        $this->container['credit_reference1'] = isset($data['credit_reference1']) ? $data['credit_reference1'] : null;
        $this->container['credit_reference2'] = isset($data['credit_reference2']) ? $data['credit_reference2'] : null;
        $this->container['credit_service_name'] = isset($data['credit_service_name']) ? $data['credit_service_name'] : null;
        $this->container['duns_number'] = isset($data['duns_number']) ? $data['duns_number'] : null;
        $this->container['entered_date'] = isset($data['entered_date']) ? $data['entered_date'] : null;
        $this->container['last_rating1'] = isset($data['last_rating1']) ? $data['last_rating1'] : null;
        $this->container['last_rating2'] = isset($data['last_rating2']) ? $data['last_rating2'] : null;
        $this->container['last_rating_date1'] = isset($data['last_rating_date1']) ? $data['last_rating_date1'] : null;
        $this->container['last_rating_date2'] = isset($data['last_rating_date2']) ? $data['last_rating_date2'] : null;
        $this->container['past_due_date'] = isset($data['past_due_date']) ? $data['past_due_date'] : null;
        $this->container['pm_cash_flag'] = isset($data['pm_cash_flag']) ? $data['pm_cash_flag'] : null;
        $this->container['security_agreement'] = isset($data['security_agreement']) ? $data['security_agreement'] : null;
        $this->container['status_date'] = isset($data['status_date']) ? $data['status_date'] : null;
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
     * Gets accounts_payable_manager
     *
     * @return string
     */
    public function getAccountsPayableManager()
    {
        return $this->container['accounts_payable_manager'];
    }

    /**
     * Sets accounts_payable_manager
     *
     * @param string $accounts_payable_manager accounts_payable_manager
     *
     * @return $this
     */
    public function setAccountsPayableManager($accounts_payable_manager)
    {
        $this->container['accounts_payable_manager'] = $accounts_payable_manager;

        return $this;
    }

    /**
     * Gets accounts_payable_phone_number
     *
     * @return string
     */
    public function getAccountsPayablePhoneNumber()
    {
        return $this->container['accounts_payable_phone_number'];
    }

    /**
     * Sets accounts_payable_phone_number
     *
     * @param string $accounts_payable_phone_number accounts_payable_phone_number
     *
     * @return $this
     */
    public function setAccountsPayablePhoneNumber($accounts_payable_phone_number)
    {
        $this->container['accounts_payable_phone_number'] = $accounts_payable_phone_number;

        return $this;
    }

    /**
     * Gets bank_account
     *
     * @return string
     */
    public function getBankAccount()
    {
        return $this->container['bank_account'];
    }

    /**
     * Sets bank_account
     *
     * @param string $bank_account bank_account
     *
     * @return $this
     */
    public function setBankAccount($bank_account)
    {
        $this->container['bank_account'] = $bank_account;

        return $this;
    }

    /**
     * Gets bank_manager
     *
     * @return string
     */
    public function getBankManager()
    {
        return $this->container['bank_manager'];
    }

    /**
     * Sets bank_manager
     *
     * @param string $bank_manager bank_manager
     *
     * @return $this
     */
    public function setBankManager($bank_manager)
    {
        $this->container['bank_manager'] = $bank_manager;

        return $this;
    }

    /**
     * Gets bank_name
     *
     * @return string
     */
    public function getBankName()
    {
        return $this->container['bank_name'];
    }

    /**
     * Sets bank_name
     *
     * @param string $bank_name bank_name
     *
     * @return $this
     */
    public function setBankName($bank_name)
    {
        $this->container['bank_name'] = $bank_name;

        return $this;
    }

    /**
     * Gets bank_phone_number
     *
     * @return string
     */
    public function getBankPhoneNumber()
    {
        return $this->container['bank_phone_number'];
    }

    /**
     * Sets bank_phone_number
     *
     * @param string $bank_phone_number bank_phone_number
     *
     * @return $this
     */
    public function setBankPhoneNumber($bank_phone_number)
    {
        $this->container['bank_phone_number'] = $bank_phone_number;

        return $this;
    }

    /**
     * Gets credit_reference1
     *
     * @return string
     */
    public function getCreditReference1()
    {
        return $this->container['credit_reference1'];
    }

    /**
     * Sets credit_reference1
     *
     * @param string $credit_reference1 credit_reference1
     *
     * @return $this
     */
    public function setCreditReference1($credit_reference1)
    {
        $this->container['credit_reference1'] = $credit_reference1;

        return $this;
    }

    /**
     * Gets credit_reference2
     *
     * @return string
     */
    public function getCreditReference2()
    {
        return $this->container['credit_reference2'];
    }

    /**
     * Sets credit_reference2
     *
     * @param string $credit_reference2 credit_reference2
     *
     * @return $this
     */
    public function setCreditReference2($credit_reference2)
    {
        $this->container['credit_reference2'] = $credit_reference2;

        return $this;
    }

    /**
     * Gets credit_service_name
     *
     * @return string
     */
    public function getCreditServiceName()
    {
        return $this->container['credit_service_name'];
    }

    /**
     * Sets credit_service_name
     *
     * @param string $credit_service_name credit_service_name
     *
     * @return $this
     */
    public function setCreditServiceName($credit_service_name)
    {
        $this->container['credit_service_name'] = $credit_service_name;

        return $this;
    }

    /**
     * Gets duns_number
     *
     * @return string
     */
    public function getDunsNumber()
    {
        return $this->container['duns_number'];
    }

    /**
     * Sets duns_number
     *
     * @param string $duns_number duns_number
     *
     * @return $this
     */
    public function setDunsNumber($duns_number)
    {
        $this->container['duns_number'] = $duns_number;

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
     * Gets last_rating1
     *
     * @return string
     */
    public function getLastRating1()
    {
        return $this->container['last_rating1'];
    }

    /**
     * Sets last_rating1
     *
     * @param string $last_rating1 last_rating1
     *
     * @return $this
     */
    public function setLastRating1($last_rating1)
    {
        $this->container['last_rating1'] = $last_rating1;

        return $this;
    }

    /**
     * Gets last_rating2
     *
     * @return string
     */
    public function getLastRating2()
    {
        return $this->container['last_rating2'];
    }

    /**
     * Sets last_rating2
     *
     * @param string $last_rating2 last_rating2
     *
     * @return $this
     */
    public function setLastRating2($last_rating2)
    {
        $this->container['last_rating2'] = $last_rating2;

        return $this;
    }

    /**
     * Gets last_rating_date1
     *
     * @return \DateTime
     */
    public function getLastRatingDate1()
    {
        return $this->container['last_rating_date1'];
    }

    /**
     * Sets last_rating_date1
     *
     * @param \DateTime $last_rating_date1 last_rating_date1
     *
     * @return $this
     */
    public function setLastRatingDate1($last_rating_date1)
    {
        $this->container['last_rating_date1'] = $last_rating_date1;

        return $this;
    }

    /**
     * Gets last_rating_date2
     *
     * @return \DateTime
     */
    public function getLastRatingDate2()
    {
        return $this->container['last_rating_date2'];
    }

    /**
     * Sets last_rating_date2
     *
     * @param \DateTime $last_rating_date2 last_rating_date2
     *
     * @return $this
     */
    public function setLastRatingDate2($last_rating_date2)
    {
        $this->container['last_rating_date2'] = $last_rating_date2;

        return $this;
    }

    /**
     * Gets past_due_date
     *
     * @return \DateTime
     */
    public function getPastDueDate()
    {
        return $this->container['past_due_date'];
    }

    /**
     * Sets past_due_date
     *
     * @param \DateTime $past_due_date past_due_date
     *
     * @return $this
     */
    public function setPastDueDate($past_due_date)
    {
        $this->container['past_due_date'] = $past_due_date;

        return $this;
    }

    /**
     * Gets pm_cash_flag
     *
     * @return bool
     */
    public function getPmCashFlag()
    {
        return $this->container['pm_cash_flag'];
    }

    /**
     * Sets pm_cash_flag
     *
     * @param bool $pm_cash_flag pm_cash_flag
     *
     * @return $this
     */
    public function setPmCashFlag($pm_cash_flag)
    {
        $this->container['pm_cash_flag'] = $pm_cash_flag;

        return $this;
    }

    /**
     * Gets security_agreement
     *
     * @return bool
     */
    public function getSecurityAgreement()
    {
        return $this->container['security_agreement'];
    }

    /**
     * Sets security_agreement
     *
     * @param bool $security_agreement security_agreement
     *
     * @return $this
     */
    public function setSecurityAgreement($security_agreement)
    {
        $this->container['security_agreement'] = $security_agreement;

        return $this;
    }

    /**
     * Gets status_date
     *
     * @return \DateTime
     */
    public function getStatusDate()
    {
        return $this->container['status_date'];
    }

    /**
     * Sets status_date
     *
     * @param \DateTime $status_date status_date
     *
     * @return $this
     */
    public function setStatusDate($status_date)
    {
        $this->container['status_date'] = $status_date;

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


