<?php
/**
 * TRptStatus
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
 * TRptStatus Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TRptStatus implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-rptStatus';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'report_nm' => 'string',
        'curr_proc' => 'string',
        'rpt_title' => 'string',
        'printer_nm' => 'string',
        'scheduled' => 'string',
        'last_run' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'report_nm' => null,
        'curr_proc' => null,
        'rpt_title' => null,
        'printer_nm' => null,
        'scheduled' => null,
        'last_run' => null
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
        'report_nm' => 'reportNm',
        'curr_proc' => 'currProc',
        'rpt_title' => 'rptTitle',
        'printer_nm' => 'printerNm',
        'scheduled' => 'scheduled',
        'last_run' => 'lastRun'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'report_nm' => 'setReportNm',
        'curr_proc' => 'setCurrProc',
        'rpt_title' => 'setRptTitle',
        'printer_nm' => 'setPrinterNm',
        'scheduled' => 'setScheduled',
        'last_run' => 'setLastRun'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'report_nm' => 'getReportNm',
        'curr_proc' => 'getCurrProc',
        'rpt_title' => 'getRptTitle',
        'printer_nm' => 'getPrinterNm',
        'scheduled' => 'getScheduled',
        'last_run' => 'getLastRun'
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
        $this->container['report_nm'] = isset($data['report_nm']) ? $data['report_nm'] : null;
        $this->container['curr_proc'] = isset($data['curr_proc']) ? $data['curr_proc'] : null;
        $this->container['rpt_title'] = isset($data['rpt_title']) ? $data['rpt_title'] : null;
        $this->container['printer_nm'] = isset($data['printer_nm']) ? $data['printer_nm'] : null;
        $this->container['scheduled'] = isset($data['scheduled']) ? $data['scheduled'] : null;
        $this->container['last_run'] = isset($data['last_run']) ? $data['last_run'] : null;
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
     * Gets report_nm
     *
     * @return string
     */
    public function getReportNm()
    {
        return $this->container['report_nm'];
    }

    /**
     * Sets report_nm
     *
     * @param string $report_nm report_nm
     *
     * @return $this
     */
    public function setReportNm($report_nm)
    {
        $this->container['report_nm'] = $report_nm;

        return $this;
    }

    /**
     * Gets curr_proc
     *
     * @return string
     */
    public function getCurrProc()
    {
        return $this->container['curr_proc'];
    }

    /**
     * Sets curr_proc
     *
     * @param string $curr_proc curr_proc
     *
     * @return $this
     */
    public function setCurrProc($curr_proc)
    {
        $this->container['curr_proc'] = $curr_proc;

        return $this;
    }

    /**
     * Gets rpt_title
     *
     * @return string
     */
    public function getRptTitle()
    {
        return $this->container['rpt_title'];
    }

    /**
     * Sets rpt_title
     *
     * @param string $rpt_title rpt_title
     *
     * @return $this
     */
    public function setRptTitle($rpt_title)
    {
        $this->container['rpt_title'] = $rpt_title;

        return $this;
    }

    /**
     * Gets printer_nm
     *
     * @return string
     */
    public function getPrinterNm()
    {
        return $this->container['printer_nm'];
    }

    /**
     * Sets printer_nm
     *
     * @param string $printer_nm printer_nm
     *
     * @return $this
     */
    public function setPrinterNm($printer_nm)
    {
        $this->container['printer_nm'] = $printer_nm;

        return $this;
    }

    /**
     * Gets scheduled
     *
     * @return string
     */
    public function getScheduled()
    {
        return $this->container['scheduled'];
    }

    /**
     * Sets scheduled
     *
     * @param string $scheduled scheduled
     *
     * @return $this
     */
    public function setScheduled($scheduled)
    {
        $this->container['scheduled'] = $scheduled;

        return $this;
    }

    /**
     * Gets last_run
     *
     * @return string
     */
    public function getLastRun()
    {
        return $this->container['last_run'];
    }

    /**
     * Sets last_run
     *
     * @param string $last_run last_run
     *
     * @return $this
     */
    public function setLastRun($last_run)
    {
        $this->container['last_run'] = $last_run;

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


