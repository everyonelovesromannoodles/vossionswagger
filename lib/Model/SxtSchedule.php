<?php
/**
 * SxtSchedule
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
 * SxtSchedule Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SxtSchedule implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxt_schedule';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'line_iden' => 'string',
        'sched_dt' => 'string',
        'schedule_cd' => 'string',
        'seq_no' => 'int',
        'ship_to_addr1' => 'string',
        'ship_to_addr2' => 'string',
        'ship_to_city' => 'string',
        'ship_to_contact' => 'string',
        'ship_to_country_cd' => 'string',
        'ship_to_duns_nr' => 'string',
        'ship_to_nm' => 'string',
        'ship_to_phone' => 'string',
        'ship_to_postal_cd' => 'string',
        'ship_to_state' => 'string',
        'ship_via' => 'string',
        'sx_line_no' => 'string',
        'unit' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'line_iden' => null,
        'sched_dt' => null,
        'schedule_cd' => null,
        'seq_no' => 'int64',
        'ship_to_addr1' => null,
        'ship_to_addr2' => null,
        'ship_to_city' => null,
        'ship_to_contact' => null,
        'ship_to_country_cd' => null,
        'ship_to_duns_nr' => null,
        'ship_to_nm' => null,
        'ship_to_phone' => null,
        'ship_to_postal_cd' => null,
        'ship_to_state' => null,
        'ship_via' => null,
        'sx_line_no' => null,
        'unit' => null
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
        'line_iden' => 'lineIden',
        'sched_dt' => 'schedDt',
        'schedule_cd' => 'scheduleCd',
        'seq_no' => 'seqNo',
        'ship_to_addr1' => 'shipToAddr1',
        'ship_to_addr2' => 'shipToAddr2',
        'ship_to_city' => 'shipToCity',
        'ship_to_contact' => 'shipToContact',
        'ship_to_country_cd' => 'shipToCountryCd',
        'ship_to_duns_nr' => 'shipToDunsNr',
        'ship_to_nm' => 'shipToNm',
        'ship_to_phone' => 'shipToPhone',
        'ship_to_postal_cd' => 'shipToPostalCd',
        'ship_to_state' => 'shipToState',
        'ship_via' => 'shipVia',
        'sx_line_no' => 'sxLineNo',
        'unit' => 'unit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'line_iden' => 'setLineIden',
        'sched_dt' => 'setSchedDt',
        'schedule_cd' => 'setScheduleCd',
        'seq_no' => 'setSeqNo',
        'ship_to_addr1' => 'setShipToAddr1',
        'ship_to_addr2' => 'setShipToAddr2',
        'ship_to_city' => 'setShipToCity',
        'ship_to_contact' => 'setShipToContact',
        'ship_to_country_cd' => 'setShipToCountryCd',
        'ship_to_duns_nr' => 'setShipToDunsNr',
        'ship_to_nm' => 'setShipToNm',
        'ship_to_phone' => 'setShipToPhone',
        'ship_to_postal_cd' => 'setShipToPostalCd',
        'ship_to_state' => 'setShipToState',
        'ship_via' => 'setShipVia',
        'sx_line_no' => 'setSxLineNo',
        'unit' => 'setUnit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'line_iden' => 'getLineIden',
        'sched_dt' => 'getSchedDt',
        'schedule_cd' => 'getScheduleCd',
        'seq_no' => 'getSeqNo',
        'ship_to_addr1' => 'getShipToAddr1',
        'ship_to_addr2' => 'getShipToAddr2',
        'ship_to_city' => 'getShipToCity',
        'ship_to_contact' => 'getShipToContact',
        'ship_to_country_cd' => 'getShipToCountryCd',
        'ship_to_duns_nr' => 'getShipToDunsNr',
        'ship_to_nm' => 'getShipToNm',
        'ship_to_phone' => 'getShipToPhone',
        'ship_to_postal_cd' => 'getShipToPostalCd',
        'ship_to_state' => 'getShipToState',
        'ship_via' => 'getShipVia',
        'sx_line_no' => 'getSxLineNo',
        'unit' => 'getUnit'
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
        $this->container['line_iden'] = isset($data['line_iden']) ? $data['line_iden'] : null;
        $this->container['sched_dt'] = isset($data['sched_dt']) ? $data['sched_dt'] : null;
        $this->container['schedule_cd'] = isset($data['schedule_cd']) ? $data['schedule_cd'] : null;
        $this->container['seq_no'] = isset($data['seq_no']) ? $data['seq_no'] : null;
        $this->container['ship_to_addr1'] = isset($data['ship_to_addr1']) ? $data['ship_to_addr1'] : null;
        $this->container['ship_to_addr2'] = isset($data['ship_to_addr2']) ? $data['ship_to_addr2'] : null;
        $this->container['ship_to_city'] = isset($data['ship_to_city']) ? $data['ship_to_city'] : null;
        $this->container['ship_to_contact'] = isset($data['ship_to_contact']) ? $data['ship_to_contact'] : null;
        $this->container['ship_to_country_cd'] = isset($data['ship_to_country_cd']) ? $data['ship_to_country_cd'] : null;
        $this->container['ship_to_duns_nr'] = isset($data['ship_to_duns_nr']) ? $data['ship_to_duns_nr'] : null;
        $this->container['ship_to_nm'] = isset($data['ship_to_nm']) ? $data['ship_to_nm'] : null;
        $this->container['ship_to_phone'] = isset($data['ship_to_phone']) ? $data['ship_to_phone'] : null;
        $this->container['ship_to_postal_cd'] = isset($data['ship_to_postal_cd']) ? $data['ship_to_postal_cd'] : null;
        $this->container['ship_to_state'] = isset($data['ship_to_state']) ? $data['ship_to_state'] : null;
        $this->container['ship_via'] = isset($data['ship_via']) ? $data['ship_via'] : null;
        $this->container['sx_line_no'] = isset($data['sx_line_no']) ? $data['sx_line_no'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
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
     * Gets line_iden
     *
     * @return string
     */
    public function getLineIden()
    {
        return $this->container['line_iden'];
    }

    /**
     * Sets line_iden
     *
     * @param string $line_iden line_iden
     *
     * @return $this
     */
    public function setLineIden($line_iden)
    {
        $this->container['line_iden'] = $line_iden;

        return $this;
    }

    /**
     * Gets sched_dt
     *
     * @return string
     */
    public function getSchedDt()
    {
        return $this->container['sched_dt'];
    }

    /**
     * Sets sched_dt
     *
     * @param string $sched_dt sched_dt
     *
     * @return $this
     */
    public function setSchedDt($sched_dt)
    {
        $this->container['sched_dt'] = $sched_dt;

        return $this;
    }

    /**
     * Gets schedule_cd
     *
     * @return string
     */
    public function getScheduleCd()
    {
        return $this->container['schedule_cd'];
    }

    /**
     * Sets schedule_cd
     *
     * @param string $schedule_cd schedule_cd
     *
     * @return $this
     */
    public function setScheduleCd($schedule_cd)
    {
        $this->container['schedule_cd'] = $schedule_cd;

        return $this;
    }

    /**
     * Gets seq_no
     *
     * @return int
     */
    public function getSeqNo()
    {
        return $this->container['seq_no'];
    }

    /**
     * Sets seq_no
     *
     * @param int $seq_no seq_no
     *
     * @return $this
     */
    public function setSeqNo($seq_no)
    {
        $this->container['seq_no'] = $seq_no;

        return $this;
    }

    /**
     * Gets ship_to_addr1
     *
     * @return string
     */
    public function getShipToAddr1()
    {
        return $this->container['ship_to_addr1'];
    }

    /**
     * Sets ship_to_addr1
     *
     * @param string $ship_to_addr1 ship_to_addr1
     *
     * @return $this
     */
    public function setShipToAddr1($ship_to_addr1)
    {
        $this->container['ship_to_addr1'] = $ship_to_addr1;

        return $this;
    }

    /**
     * Gets ship_to_addr2
     *
     * @return string
     */
    public function getShipToAddr2()
    {
        return $this->container['ship_to_addr2'];
    }

    /**
     * Sets ship_to_addr2
     *
     * @param string $ship_to_addr2 ship_to_addr2
     *
     * @return $this
     */
    public function setShipToAddr2($ship_to_addr2)
    {
        $this->container['ship_to_addr2'] = $ship_to_addr2;

        return $this;
    }

    /**
     * Gets ship_to_city
     *
     * @return string
     */
    public function getShipToCity()
    {
        return $this->container['ship_to_city'];
    }

    /**
     * Sets ship_to_city
     *
     * @param string $ship_to_city ship_to_city
     *
     * @return $this
     */
    public function setShipToCity($ship_to_city)
    {
        $this->container['ship_to_city'] = $ship_to_city;

        return $this;
    }

    /**
     * Gets ship_to_contact
     *
     * @return string
     */
    public function getShipToContact()
    {
        return $this->container['ship_to_contact'];
    }

    /**
     * Sets ship_to_contact
     *
     * @param string $ship_to_contact ship_to_contact
     *
     * @return $this
     */
    public function setShipToContact($ship_to_contact)
    {
        $this->container['ship_to_contact'] = $ship_to_contact;

        return $this;
    }

    /**
     * Gets ship_to_country_cd
     *
     * @return string
     */
    public function getShipToCountryCd()
    {
        return $this->container['ship_to_country_cd'];
    }

    /**
     * Sets ship_to_country_cd
     *
     * @param string $ship_to_country_cd ship_to_country_cd
     *
     * @return $this
     */
    public function setShipToCountryCd($ship_to_country_cd)
    {
        $this->container['ship_to_country_cd'] = $ship_to_country_cd;

        return $this;
    }

    /**
     * Gets ship_to_duns_nr
     *
     * @return string
     */
    public function getShipToDunsNr()
    {
        return $this->container['ship_to_duns_nr'];
    }

    /**
     * Sets ship_to_duns_nr
     *
     * @param string $ship_to_duns_nr ship_to_duns_nr
     *
     * @return $this
     */
    public function setShipToDunsNr($ship_to_duns_nr)
    {
        $this->container['ship_to_duns_nr'] = $ship_to_duns_nr;

        return $this;
    }

    /**
     * Gets ship_to_nm
     *
     * @return string
     */
    public function getShipToNm()
    {
        return $this->container['ship_to_nm'];
    }

    /**
     * Sets ship_to_nm
     *
     * @param string $ship_to_nm ship_to_nm
     *
     * @return $this
     */
    public function setShipToNm($ship_to_nm)
    {
        $this->container['ship_to_nm'] = $ship_to_nm;

        return $this;
    }

    /**
     * Gets ship_to_phone
     *
     * @return string
     */
    public function getShipToPhone()
    {
        return $this->container['ship_to_phone'];
    }

    /**
     * Sets ship_to_phone
     *
     * @param string $ship_to_phone ship_to_phone
     *
     * @return $this
     */
    public function setShipToPhone($ship_to_phone)
    {
        $this->container['ship_to_phone'] = $ship_to_phone;

        return $this;
    }

    /**
     * Gets ship_to_postal_cd
     *
     * @return string
     */
    public function getShipToPostalCd()
    {
        return $this->container['ship_to_postal_cd'];
    }

    /**
     * Sets ship_to_postal_cd
     *
     * @param string $ship_to_postal_cd ship_to_postal_cd
     *
     * @return $this
     */
    public function setShipToPostalCd($ship_to_postal_cd)
    {
        $this->container['ship_to_postal_cd'] = $ship_to_postal_cd;

        return $this;
    }

    /**
     * Gets ship_to_state
     *
     * @return string
     */
    public function getShipToState()
    {
        return $this->container['ship_to_state'];
    }

    /**
     * Sets ship_to_state
     *
     * @param string $ship_to_state ship_to_state
     *
     * @return $this
     */
    public function setShipToState($ship_to_state)
    {
        $this->container['ship_to_state'] = $ship_to_state;

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
     * Gets sx_line_no
     *
     * @return string
     */
    public function getSxLineNo()
    {
        return $this->container['sx_line_no'];
    }

    /**
     * Sets sx_line_no
     *
     * @param string $sx_line_no sx_line_no
     *
     * @return $this
     */
    public function setSxLineNo($sx_line_no)
    {
        $this->container['sx_line_no'] = $sx_line_no;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

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


