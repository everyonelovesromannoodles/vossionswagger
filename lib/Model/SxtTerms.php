<?php
/**
 * SxtTerms
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
 * SxtTerms Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxtTerms implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxt_terms';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'basis_dt_cd' => 'string',
        'card_acct_no' => 'string',
        'card_exp_dt' => 'string',
        'card_pre_auth_dt' => 'string',
        'card_pre_auth_no' => 'string',
        'card_type' => 'string',
        'descrip' => 'string',
        'disc_days' => 'string',
        'disc_dt' => 'string',
        'disc_pct' => 'string',
        'disc_prox_day' => 'string',
        'due_days' => 'string',
        'due_dt' => 'string',
        'sx_terms_cd' => 'string',
        'type_cd' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'basis_dt_cd' => null,
        'card_acct_no' => null,
        'card_exp_dt' => null,
        'card_pre_auth_dt' => null,
        'card_pre_auth_no' => null,
        'card_type' => null,
        'descrip' => null,
        'disc_days' => null,
        'disc_dt' => null,
        'disc_pct' => null,
        'disc_prox_day' => null,
        'due_days' => null,
        'due_dt' => null,
        'sx_terms_cd' => null,
        'type_cd' => null
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
        'basis_dt_cd' => 'basisDtCd',
        'card_acct_no' => 'cardAcctNo',
        'card_exp_dt' => 'cardExpDt',
        'card_pre_auth_dt' => 'cardPreAuthDt',
        'card_pre_auth_no' => 'cardPreAuthNo',
        'card_type' => 'cardType',
        'descrip' => 'descrip',
        'disc_days' => 'discDays',
        'disc_dt' => 'discDt',
        'disc_pct' => 'discPct',
        'disc_prox_day' => 'discProxDay',
        'due_days' => 'dueDays',
        'due_dt' => 'dueDt',
        'sx_terms_cd' => 'sxTermsCd',
        'type_cd' => 'typeCd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'basis_dt_cd' => 'setBasisDtCd',
        'card_acct_no' => 'setCardAcctNo',
        'card_exp_dt' => 'setCardExpDt',
        'card_pre_auth_dt' => 'setCardPreAuthDt',
        'card_pre_auth_no' => 'setCardPreAuthNo',
        'card_type' => 'setCardType',
        'descrip' => 'setDescrip',
        'disc_days' => 'setDiscDays',
        'disc_dt' => 'setDiscDt',
        'disc_pct' => 'setDiscPct',
        'disc_prox_day' => 'setDiscProxDay',
        'due_days' => 'setDueDays',
        'due_dt' => 'setDueDt',
        'sx_terms_cd' => 'setSxTermsCd',
        'type_cd' => 'setTypeCd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'basis_dt_cd' => 'getBasisDtCd',
        'card_acct_no' => 'getCardAcctNo',
        'card_exp_dt' => 'getCardExpDt',
        'card_pre_auth_dt' => 'getCardPreAuthDt',
        'card_pre_auth_no' => 'getCardPreAuthNo',
        'card_type' => 'getCardType',
        'descrip' => 'getDescrip',
        'disc_days' => 'getDiscDays',
        'disc_dt' => 'getDiscDt',
        'disc_pct' => 'getDiscPct',
        'disc_prox_day' => 'getDiscProxDay',
        'due_days' => 'getDueDays',
        'due_dt' => 'getDueDt',
        'sx_terms_cd' => 'getSxTermsCd',
        'type_cd' => 'getTypeCd'
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
        $this->container['basis_dt_cd'] = isset($data['basis_dt_cd']) ? $data['basis_dt_cd'] : null;
        $this->container['card_acct_no'] = isset($data['card_acct_no']) ? $data['card_acct_no'] : null;
        $this->container['card_exp_dt'] = isset($data['card_exp_dt']) ? $data['card_exp_dt'] : null;
        $this->container['card_pre_auth_dt'] = isset($data['card_pre_auth_dt']) ? $data['card_pre_auth_dt'] : null;
        $this->container['card_pre_auth_no'] = isset($data['card_pre_auth_no']) ? $data['card_pre_auth_no'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['descrip'] = isset($data['descrip']) ? $data['descrip'] : null;
        $this->container['disc_days'] = isset($data['disc_days']) ? $data['disc_days'] : null;
        $this->container['disc_dt'] = isset($data['disc_dt']) ? $data['disc_dt'] : null;
        $this->container['disc_pct'] = isset($data['disc_pct']) ? $data['disc_pct'] : null;
        $this->container['disc_prox_day'] = isset($data['disc_prox_day']) ? $data['disc_prox_day'] : null;
        $this->container['due_days'] = isset($data['due_days']) ? $data['due_days'] : null;
        $this->container['due_dt'] = isset($data['due_dt']) ? $data['due_dt'] : null;
        $this->container['sx_terms_cd'] = isset($data['sx_terms_cd']) ? $data['sx_terms_cd'] : null;
        $this->container['type_cd'] = isset($data['type_cd']) ? $data['type_cd'] : null;
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
     * Gets basis_dt_cd
     *
     * @return string
     */
    public function getBasisDtCd()
    {
        return $this->container['basis_dt_cd'];
    }

    /**
     * Sets basis_dt_cd
     *
     * @param string $basis_dt_cd basis_dt_cd
     *
     * @return $this
     */
    public function setBasisDtCd($basis_dt_cd)
    {
        $this->container['basis_dt_cd'] = $basis_dt_cd;

        return $this;
    }

    /**
     * Gets card_acct_no
     *
     * @return string
     */
    public function getCardAcctNo()
    {
        return $this->container['card_acct_no'];
    }

    /**
     * Sets card_acct_no
     *
     * @param string $card_acct_no card_acct_no
     *
     * @return $this
     */
    public function setCardAcctNo($card_acct_no)
    {
        $this->container['card_acct_no'] = $card_acct_no;

        return $this;
    }

    /**
     * Gets card_exp_dt
     *
     * @return string
     */
    public function getCardExpDt()
    {
        return $this->container['card_exp_dt'];
    }

    /**
     * Sets card_exp_dt
     *
     * @param string $card_exp_dt card_exp_dt
     *
     * @return $this
     */
    public function setCardExpDt($card_exp_dt)
    {
        $this->container['card_exp_dt'] = $card_exp_dt;

        return $this;
    }

    /**
     * Gets card_pre_auth_dt
     *
     * @return string
     */
    public function getCardPreAuthDt()
    {
        return $this->container['card_pre_auth_dt'];
    }

    /**
     * Sets card_pre_auth_dt
     *
     * @param string $card_pre_auth_dt card_pre_auth_dt
     *
     * @return $this
     */
    public function setCardPreAuthDt($card_pre_auth_dt)
    {
        $this->container['card_pre_auth_dt'] = $card_pre_auth_dt;

        return $this;
    }

    /**
     * Gets card_pre_auth_no
     *
     * @return string
     */
    public function getCardPreAuthNo()
    {
        return $this->container['card_pre_auth_no'];
    }

    /**
     * Sets card_pre_auth_no
     *
     * @param string $card_pre_auth_no card_pre_auth_no
     *
     * @return $this
     */
    public function setCardPreAuthNo($card_pre_auth_no)
    {
        $this->container['card_pre_auth_no'] = $card_pre_auth_no;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string $card_type card_type
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets descrip
     *
     * @return string
     */
    public function getDescrip()
    {
        return $this->container['descrip'];
    }

    /**
     * Sets descrip
     *
     * @param string $descrip descrip
     *
     * @return $this
     */
    public function setDescrip($descrip)
    {
        $this->container['descrip'] = $descrip;

        return $this;
    }

    /**
     * Gets disc_days
     *
     * @return string
     */
    public function getDiscDays()
    {
        return $this->container['disc_days'];
    }

    /**
     * Sets disc_days
     *
     * @param string $disc_days disc_days
     *
     * @return $this
     */
    public function setDiscDays($disc_days)
    {
        $this->container['disc_days'] = $disc_days;

        return $this;
    }

    /**
     * Gets disc_dt
     *
     * @return string
     */
    public function getDiscDt()
    {
        return $this->container['disc_dt'];
    }

    /**
     * Sets disc_dt
     *
     * @param string $disc_dt disc_dt
     *
     * @return $this
     */
    public function setDiscDt($disc_dt)
    {
        $this->container['disc_dt'] = $disc_dt;

        return $this;
    }

    /**
     * Gets disc_pct
     *
     * @return string
     */
    public function getDiscPct()
    {
        return $this->container['disc_pct'];
    }

    /**
     * Sets disc_pct
     *
     * @param string $disc_pct disc_pct
     *
     * @return $this
     */
    public function setDiscPct($disc_pct)
    {
        $this->container['disc_pct'] = $disc_pct;

        return $this;
    }

    /**
     * Gets disc_prox_day
     *
     * @return string
     */
    public function getDiscProxDay()
    {
        return $this->container['disc_prox_day'];
    }

    /**
     * Sets disc_prox_day
     *
     * @param string $disc_prox_day disc_prox_day
     *
     * @return $this
     */
    public function setDiscProxDay($disc_prox_day)
    {
        $this->container['disc_prox_day'] = $disc_prox_day;

        return $this;
    }

    /**
     * Gets due_days
     *
     * @return string
     */
    public function getDueDays()
    {
        return $this->container['due_days'];
    }

    /**
     * Sets due_days
     *
     * @param string $due_days due_days
     *
     * @return $this
     */
    public function setDueDays($due_days)
    {
        $this->container['due_days'] = $due_days;

        return $this;
    }

    /**
     * Gets due_dt
     *
     * @return string
     */
    public function getDueDt()
    {
        return $this->container['due_dt'];
    }

    /**
     * Sets due_dt
     *
     * @param string $due_dt due_dt
     *
     * @return $this
     */
    public function setDueDt($due_dt)
    {
        $this->container['due_dt'] = $due_dt;

        return $this;
    }

    /**
     * Gets sx_terms_cd
     *
     * @return string
     */
    public function getSxTermsCd()
    {
        return $this->container['sx_terms_cd'];
    }

    /**
     * Sets sx_terms_cd
     *
     * @param string $sx_terms_cd sx_terms_cd
     *
     * @return $this
     */
    public function setSxTermsCd($sx_terms_cd)
    {
        $this->container['sx_terms_cd'] = $sx_terms_cd;

        return $this;
    }

    /**
     * Gets type_cd
     *
     * @return string
     */
    public function getTypeCd()
    {
        return $this->container['type_cd'];
    }

    /**
     * Sets type_cd
     *
     * @param string $type_cd type_cd
     *
     * @return $this
     */
    public function setTypeCd($type_cd)
    {
        $this->container['type_cd'] = $type_cd;

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


