<?php
/**
 * Sxapisasubmitreportv2Request
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
 * Sxapisasubmitreportv2Request Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Sxapisasubmitreportv2Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sxapisasubmitreportv2_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'company_number' => 'int',
        'operator_init' => 'string',
        'operator_password' => 'string',
        'report_name' => 'string',
        'output_type' => 'string',
        'output_name' => 'string',
        'print_ranges_and_options' => 'bool',
        'demand_flag' => 'bool',
        'fax_to1' => 'string',
        'fax_to2' => 'string',
        'fax_from' => 'string',
        'fax_comment' => 'string',
        'fax_phone_number' => 'string',
        't_rptrange' => '\Swagger\Client\Model\TRptrangeReq',
        't_rptoptions_v2' => '\Swagger\Client\Model\TRptoptionsV2Req',
        't_sapblist' => '\Swagger\Client\Model\TSapblistReq',
        't_infieldvalue' => '\Swagger\Client\Model\TInfieldvalueReq'
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
        'report_name' => null,
        'output_type' => null,
        'output_name' => null,
        'print_ranges_and_options' => null,
        'demand_flag' => null,
        'fax_to1' => null,
        'fax_to2' => null,
        'fax_from' => null,
        'fax_comment' => null,
        'fax_phone_number' => null,
        't_rptrange' => null,
        't_rptoptions_v2' => null,
        't_sapblist' => null,
        't_infieldvalue' => null
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
        'report_name' => 'reportName',
        'output_type' => 'outputType',
        'output_name' => 'outputName',
        'print_ranges_and_options' => 'printRangesAndOptions',
        'demand_flag' => 'demandFlag',
        'fax_to1' => 'faxTo1',
        'fax_to2' => 'faxTo2',
        'fax_from' => 'faxFrom',
        'fax_comment' => 'faxComment',
        'fax_phone_number' => 'faxPhoneNumber',
        't_rptrange' => 'tRptrange',
        't_rptoptions_v2' => 'tRptoptionsV2',
        't_sapblist' => 'tSapblist',
        't_infieldvalue' => 'tInfieldvalue'
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
        'report_name' => 'setReportName',
        'output_type' => 'setOutputType',
        'output_name' => 'setOutputName',
        'print_ranges_and_options' => 'setPrintRangesAndOptions',
        'demand_flag' => 'setDemandFlag',
        'fax_to1' => 'setFaxTo1',
        'fax_to2' => 'setFaxTo2',
        'fax_from' => 'setFaxFrom',
        'fax_comment' => 'setFaxComment',
        'fax_phone_number' => 'setFaxPhoneNumber',
        't_rptrange' => 'setTRptrange',
        't_rptoptions_v2' => 'setTRptoptionsV2',
        't_sapblist' => 'setTSapblist',
        't_infieldvalue' => 'setTInfieldvalue'
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
        'report_name' => 'getReportName',
        'output_type' => 'getOutputType',
        'output_name' => 'getOutputName',
        'print_ranges_and_options' => 'getPrintRangesAndOptions',
        'demand_flag' => 'getDemandFlag',
        'fax_to1' => 'getFaxTo1',
        'fax_to2' => 'getFaxTo2',
        'fax_from' => 'getFaxFrom',
        'fax_comment' => 'getFaxComment',
        'fax_phone_number' => 'getFaxPhoneNumber',
        't_rptrange' => 'getTRptrange',
        't_rptoptions_v2' => 'getTRptoptionsV2',
        't_sapblist' => 'getTSapblist',
        't_infieldvalue' => 'getTInfieldvalue'
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
        $this->container['report_name'] = isset($data['report_name']) ? $data['report_name'] : null;
        $this->container['output_type'] = isset($data['output_type']) ? $data['output_type'] : null;
        $this->container['output_name'] = isset($data['output_name']) ? $data['output_name'] : null;
        $this->container['print_ranges_and_options'] = isset($data['print_ranges_and_options']) ? $data['print_ranges_and_options'] : null;
        $this->container['demand_flag'] = isset($data['demand_flag']) ? $data['demand_flag'] : null;
        $this->container['fax_to1'] = isset($data['fax_to1']) ? $data['fax_to1'] : null;
        $this->container['fax_to2'] = isset($data['fax_to2']) ? $data['fax_to2'] : null;
        $this->container['fax_from'] = isset($data['fax_from']) ? $data['fax_from'] : null;
        $this->container['fax_comment'] = isset($data['fax_comment']) ? $data['fax_comment'] : null;
        $this->container['fax_phone_number'] = isset($data['fax_phone_number']) ? $data['fax_phone_number'] : null;
        $this->container['t_rptrange'] = isset($data['t_rptrange']) ? $data['t_rptrange'] : null;
        $this->container['t_rptoptions_v2'] = isset($data['t_rptoptions_v2']) ? $data['t_rptoptions_v2'] : null;
        $this->container['t_sapblist'] = isset($data['t_sapblist']) ? $data['t_sapblist'] : null;
        $this->container['t_infieldvalue'] = isset($data['t_infieldvalue']) ? $data['t_infieldvalue'] : null;
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
     * Gets report_name
     *
     * @return string
     */
    public function getReportName()
    {
        return $this->container['report_name'];
    }

    /**
     * Sets report_name
     *
     * @param string $report_name report_name
     *
     * @return $this
     */
    public function setReportName($report_name)
    {
        $this->container['report_name'] = $report_name;

        return $this;
    }

    /**
     * Gets output_type
     *
     * @return string
     */
    public function getOutputType()
    {
        return $this->container['output_type'];
    }

    /**
     * Sets output_type
     *
     * @param string $output_type output_type
     *
     * @return $this
     */
    public function setOutputType($output_type)
    {
        $this->container['output_type'] = $output_type;

        return $this;
    }

    /**
     * Gets output_name
     *
     * @return string
     */
    public function getOutputName()
    {
        return $this->container['output_name'];
    }

    /**
     * Sets output_name
     *
     * @param string $output_name output_name
     *
     * @return $this
     */
    public function setOutputName($output_name)
    {
        $this->container['output_name'] = $output_name;

        return $this;
    }

    /**
     * Gets print_ranges_and_options
     *
     * @return bool
     */
    public function getPrintRangesAndOptions()
    {
        return $this->container['print_ranges_and_options'];
    }

    /**
     * Sets print_ranges_and_options
     *
     * @param bool $print_ranges_and_options print_ranges_and_options
     *
     * @return $this
     */
    public function setPrintRangesAndOptions($print_ranges_and_options)
    {
        $this->container['print_ranges_and_options'] = $print_ranges_and_options;

        return $this;
    }

    /**
     * Gets demand_flag
     *
     * @return bool
     */
    public function getDemandFlag()
    {
        return $this->container['demand_flag'];
    }

    /**
     * Sets demand_flag
     *
     * @param bool $demand_flag demand_flag
     *
     * @return $this
     */
    public function setDemandFlag($demand_flag)
    {
        $this->container['demand_flag'] = $demand_flag;

        return $this;
    }

    /**
     * Gets fax_to1
     *
     * @return string
     */
    public function getFaxTo1()
    {
        return $this->container['fax_to1'];
    }

    /**
     * Sets fax_to1
     *
     * @param string $fax_to1 fax_to1
     *
     * @return $this
     */
    public function setFaxTo1($fax_to1)
    {
        $this->container['fax_to1'] = $fax_to1;

        return $this;
    }

    /**
     * Gets fax_to2
     *
     * @return string
     */
    public function getFaxTo2()
    {
        return $this->container['fax_to2'];
    }

    /**
     * Sets fax_to2
     *
     * @param string $fax_to2 fax_to2
     *
     * @return $this
     */
    public function setFaxTo2($fax_to2)
    {
        $this->container['fax_to2'] = $fax_to2;

        return $this;
    }

    /**
     * Gets fax_from
     *
     * @return string
     */
    public function getFaxFrom()
    {
        return $this->container['fax_from'];
    }

    /**
     * Sets fax_from
     *
     * @param string $fax_from fax_from
     *
     * @return $this
     */
    public function setFaxFrom($fax_from)
    {
        $this->container['fax_from'] = $fax_from;

        return $this;
    }

    /**
     * Gets fax_comment
     *
     * @return string
     */
    public function getFaxComment()
    {
        return $this->container['fax_comment'];
    }

    /**
     * Sets fax_comment
     *
     * @param string $fax_comment fax_comment
     *
     * @return $this
     */
    public function setFaxComment($fax_comment)
    {
        $this->container['fax_comment'] = $fax_comment;

        return $this;
    }

    /**
     * Gets fax_phone_number
     *
     * @return string
     */
    public function getFaxPhoneNumber()
    {
        return $this->container['fax_phone_number'];
    }

    /**
     * Sets fax_phone_number
     *
     * @param string $fax_phone_number fax_phone_number
     *
     * @return $this
     */
    public function setFaxPhoneNumber($fax_phone_number)
    {
        $this->container['fax_phone_number'] = $fax_phone_number;

        return $this;
    }

    /**
     * Gets t_rptrange
     *
     * @return \Swagger\Client\Model\TRptrangeReq
     */
    public function getTRptrange()
    {
        return $this->container['t_rptrange'];
    }

    /**
     * Sets t_rptrange
     *
     * @param \Swagger\Client\Model\TRptrangeReq $t_rptrange t_rptrange
     *
     * @return $this
     */
    public function setTRptrange($t_rptrange)
    {
        $this->container['t_rptrange'] = $t_rptrange;

        return $this;
    }

    /**
     * Gets t_rptoptions_v2
     *
     * @return \Swagger\Client\Model\TRptoptionsV2Req
     */
    public function getTRptoptionsV2()
    {
        return $this->container['t_rptoptions_v2'];
    }

    /**
     * Sets t_rptoptions_v2
     *
     * @param \Swagger\Client\Model\TRptoptionsV2Req $t_rptoptions_v2 t_rptoptions_v2
     *
     * @return $this
     */
    public function setTRptoptionsV2($t_rptoptions_v2)
    {
        $this->container['t_rptoptions_v2'] = $t_rptoptions_v2;

        return $this;
    }

    /**
     * Gets t_sapblist
     *
     * @return \Swagger\Client\Model\TSapblistReq
     */
    public function getTSapblist()
    {
        return $this->container['t_sapblist'];
    }

    /**
     * Sets t_sapblist
     *
     * @param \Swagger\Client\Model\TSapblistReq $t_sapblist t_sapblist
     *
     * @return $this
     */
    public function setTSapblist($t_sapblist)
    {
        $this->container['t_sapblist'] = $t_sapblist;

        return $this;
    }

    /**
     * Gets t_infieldvalue
     *
     * @return \Swagger\Client\Model\TInfieldvalueReq
     */
    public function getTInfieldvalue()
    {
        return $this->container['t_infieldvalue'];
    }

    /**
     * Sets t_infieldvalue
     *
     * @param \Swagger\Client\Model\TInfieldvalueReq $t_infieldvalue t_infieldvalue
     *
     * @return $this
     */
    public function setTInfieldvalue($t_infieldvalue)
    {
        $this->container['t_infieldvalue'] = $t_infieldvalue;

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


