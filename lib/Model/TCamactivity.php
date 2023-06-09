<?php
/**
 * TCamactivity
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
 * TCamactivity Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TCamactivity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-camactivity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activitycd' => 'string',
        'activitycddesc' => 'string',
        'activityid' => 'double',
        'comment' => 'string',
        'contactid' => 'double',
        'contactname' => 'string',
        'docorderno' => 'int',
        'docordersuf' => 'int',
        'doctype' => 'string',
        'docorderstring' => 'string',
        'groupnm' => 'string',
        'notesdata' => 'string',
        'oper2' => 'string',
        'oper2emailaddr' => 'string',
        'parentactvid' => 'double',
        'priority' => 'int',
        'schstartdt' => '\DateTime',
        'schstarttm' => 'string',
        'statuscd' => 'string',
        'subjectprimarykey' => 'string',
        'subjectsecondkey' => 'string',
        'subjecttype' => 'string',
        'subjectname' => 'string',
        'whse' => 'string',
        'sortfield' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activitycd' => null,
        'activitycddesc' => null,
        'activityid' => 'double',
        'comment' => null,
        'contactid' => 'double',
        'contactname' => null,
        'docorderno' => 'int64',
        'docordersuf' => 'int64',
        'doctype' => null,
        'docorderstring' => null,
        'groupnm' => null,
        'notesdata' => null,
        'oper2' => null,
        'oper2emailaddr' => null,
        'parentactvid' => 'double',
        'priority' => 'int64',
        'schstartdt' => 'date',
        'schstarttm' => null,
        'statuscd' => null,
        'subjectprimarykey' => null,
        'subjectsecondkey' => null,
        'subjecttype' => null,
        'subjectname' => null,
        'whse' => null,
        'sortfield' => null
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
        'activitycd' => 'activitycd',
        'activitycddesc' => 'activitycddesc',
        'activityid' => 'activityid',
        'comment' => 'comment',
        'contactid' => 'contactid',
        'contactname' => 'contactname',
        'docorderno' => 'docorderno',
        'docordersuf' => 'docordersuf',
        'doctype' => 'doctype',
        'docorderstring' => 'docorderstring',
        'groupnm' => 'groupnm',
        'notesdata' => 'notesdata',
        'oper2' => 'oper2',
        'oper2emailaddr' => 'oper2emailaddr',
        'parentactvid' => 'parentactvid',
        'priority' => 'priority',
        'schstartdt' => 'schstartdt',
        'schstarttm' => 'schstarttm',
        'statuscd' => 'statuscd',
        'subjectprimarykey' => 'subjectprimarykey',
        'subjectsecondkey' => 'subjectsecondkey',
        'subjecttype' => 'subjecttype',
        'subjectname' => 'subjectname',
        'whse' => 'whse',
        'sortfield' => 'sortfield'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activitycd' => 'setActivitycd',
        'activitycddesc' => 'setActivitycddesc',
        'activityid' => 'setActivityid',
        'comment' => 'setComment',
        'contactid' => 'setContactid',
        'contactname' => 'setContactname',
        'docorderno' => 'setDocorderno',
        'docordersuf' => 'setDocordersuf',
        'doctype' => 'setDoctype',
        'docorderstring' => 'setDocorderstring',
        'groupnm' => 'setGroupnm',
        'notesdata' => 'setNotesdata',
        'oper2' => 'setOper2',
        'oper2emailaddr' => 'setOper2emailaddr',
        'parentactvid' => 'setParentactvid',
        'priority' => 'setPriority',
        'schstartdt' => 'setSchstartdt',
        'schstarttm' => 'setSchstarttm',
        'statuscd' => 'setStatuscd',
        'subjectprimarykey' => 'setSubjectprimarykey',
        'subjectsecondkey' => 'setSubjectsecondkey',
        'subjecttype' => 'setSubjecttype',
        'subjectname' => 'setSubjectname',
        'whse' => 'setWhse',
        'sortfield' => 'setSortfield'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activitycd' => 'getActivitycd',
        'activitycddesc' => 'getActivitycddesc',
        'activityid' => 'getActivityid',
        'comment' => 'getComment',
        'contactid' => 'getContactid',
        'contactname' => 'getContactname',
        'docorderno' => 'getDocorderno',
        'docordersuf' => 'getDocordersuf',
        'doctype' => 'getDoctype',
        'docorderstring' => 'getDocorderstring',
        'groupnm' => 'getGroupnm',
        'notesdata' => 'getNotesdata',
        'oper2' => 'getOper2',
        'oper2emailaddr' => 'getOper2emailaddr',
        'parentactvid' => 'getParentactvid',
        'priority' => 'getPriority',
        'schstartdt' => 'getSchstartdt',
        'schstarttm' => 'getSchstarttm',
        'statuscd' => 'getStatuscd',
        'subjectprimarykey' => 'getSubjectprimarykey',
        'subjectsecondkey' => 'getSubjectsecondkey',
        'subjecttype' => 'getSubjecttype',
        'subjectname' => 'getSubjectname',
        'whse' => 'getWhse',
        'sortfield' => 'getSortfield'
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
        $this->container['activitycd'] = isset($data['activitycd']) ? $data['activitycd'] : null;
        $this->container['activitycddesc'] = isset($data['activitycddesc']) ? $data['activitycddesc'] : null;
        $this->container['activityid'] = isset($data['activityid']) ? $data['activityid'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['contactid'] = isset($data['contactid']) ? $data['contactid'] : null;
        $this->container['contactname'] = isset($data['contactname']) ? $data['contactname'] : null;
        $this->container['docorderno'] = isset($data['docorderno']) ? $data['docorderno'] : null;
        $this->container['docordersuf'] = isset($data['docordersuf']) ? $data['docordersuf'] : null;
        $this->container['doctype'] = isset($data['doctype']) ? $data['doctype'] : null;
        $this->container['docorderstring'] = isset($data['docorderstring']) ? $data['docorderstring'] : null;
        $this->container['groupnm'] = isset($data['groupnm']) ? $data['groupnm'] : null;
        $this->container['notesdata'] = isset($data['notesdata']) ? $data['notesdata'] : null;
        $this->container['oper2'] = isset($data['oper2']) ? $data['oper2'] : null;
        $this->container['oper2emailaddr'] = isset($data['oper2emailaddr']) ? $data['oper2emailaddr'] : null;
        $this->container['parentactvid'] = isset($data['parentactvid']) ? $data['parentactvid'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['schstartdt'] = isset($data['schstartdt']) ? $data['schstartdt'] : null;
        $this->container['schstarttm'] = isset($data['schstarttm']) ? $data['schstarttm'] : null;
        $this->container['statuscd'] = isset($data['statuscd']) ? $data['statuscd'] : null;
        $this->container['subjectprimarykey'] = isset($data['subjectprimarykey']) ? $data['subjectprimarykey'] : null;
        $this->container['subjectsecondkey'] = isset($data['subjectsecondkey']) ? $data['subjectsecondkey'] : null;
        $this->container['subjecttype'] = isset($data['subjecttype']) ? $data['subjecttype'] : null;
        $this->container['subjectname'] = isset($data['subjectname']) ? $data['subjectname'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['sortfield'] = isset($data['sortfield']) ? $data['sortfield'] : null;
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
     * Gets activitycd
     *
     * @return string
     */
    public function getActivitycd()
    {
        return $this->container['activitycd'];
    }

    /**
     * Sets activitycd
     *
     * @param string $activitycd activitycd
     *
     * @return $this
     */
    public function setActivitycd($activitycd)
    {
        $this->container['activitycd'] = $activitycd;

        return $this;
    }

    /**
     * Gets activitycddesc
     *
     * @return string
     */
    public function getActivitycddesc()
    {
        return $this->container['activitycddesc'];
    }

    /**
     * Sets activitycddesc
     *
     * @param string $activitycddesc activitycddesc
     *
     * @return $this
     */
    public function setActivitycddesc($activitycddesc)
    {
        $this->container['activitycddesc'] = $activitycddesc;

        return $this;
    }

    /**
     * Gets activityid
     *
     * @return double
     */
    public function getActivityid()
    {
        return $this->container['activityid'];
    }

    /**
     * Sets activityid
     *
     * @param double $activityid activityid
     *
     * @return $this
     */
    public function setActivityid($activityid)
    {
        $this->container['activityid'] = $activityid;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets contactid
     *
     * @return double
     */
    public function getContactid()
    {
        return $this->container['contactid'];
    }

    /**
     * Sets contactid
     *
     * @param double $contactid contactid
     *
     * @return $this
     */
    public function setContactid($contactid)
    {
        $this->container['contactid'] = $contactid;

        return $this;
    }

    /**
     * Gets contactname
     *
     * @return string
     */
    public function getContactname()
    {
        return $this->container['contactname'];
    }

    /**
     * Sets contactname
     *
     * @param string $contactname contactname
     *
     * @return $this
     */
    public function setContactname($contactname)
    {
        $this->container['contactname'] = $contactname;

        return $this;
    }

    /**
     * Gets docorderno
     *
     * @return int
     */
    public function getDocorderno()
    {
        return $this->container['docorderno'];
    }

    /**
     * Sets docorderno
     *
     * @param int $docorderno docorderno
     *
     * @return $this
     */
    public function setDocorderno($docorderno)
    {
        $this->container['docorderno'] = $docorderno;

        return $this;
    }

    /**
     * Gets docordersuf
     *
     * @return int
     */
    public function getDocordersuf()
    {
        return $this->container['docordersuf'];
    }

    /**
     * Sets docordersuf
     *
     * @param int $docordersuf docordersuf
     *
     * @return $this
     */
    public function setDocordersuf($docordersuf)
    {
        $this->container['docordersuf'] = $docordersuf;

        return $this;
    }

    /**
     * Gets doctype
     *
     * @return string
     */
    public function getDoctype()
    {
        return $this->container['doctype'];
    }

    /**
     * Sets doctype
     *
     * @param string $doctype doctype
     *
     * @return $this
     */
    public function setDoctype($doctype)
    {
        $this->container['doctype'] = $doctype;

        return $this;
    }

    /**
     * Gets docorderstring
     *
     * @return string
     */
    public function getDocorderstring()
    {
        return $this->container['docorderstring'];
    }

    /**
     * Sets docorderstring
     *
     * @param string $docorderstring docorderstring
     *
     * @return $this
     */
    public function setDocorderstring($docorderstring)
    {
        $this->container['docorderstring'] = $docorderstring;

        return $this;
    }

    /**
     * Gets groupnm
     *
     * @return string
     */
    public function getGroupnm()
    {
        return $this->container['groupnm'];
    }

    /**
     * Sets groupnm
     *
     * @param string $groupnm groupnm
     *
     * @return $this
     */
    public function setGroupnm($groupnm)
    {
        $this->container['groupnm'] = $groupnm;

        return $this;
    }

    /**
     * Gets notesdata
     *
     * @return string
     */
    public function getNotesdata()
    {
        return $this->container['notesdata'];
    }

    /**
     * Sets notesdata
     *
     * @param string $notesdata notesdata
     *
     * @return $this
     */
    public function setNotesdata($notesdata)
    {
        $this->container['notesdata'] = $notesdata;

        return $this;
    }

    /**
     * Gets oper2
     *
     * @return string
     */
    public function getOper2()
    {
        return $this->container['oper2'];
    }

    /**
     * Sets oper2
     *
     * @param string $oper2 oper2
     *
     * @return $this
     */
    public function setOper2($oper2)
    {
        $this->container['oper2'] = $oper2;

        return $this;
    }

    /**
     * Gets oper2emailaddr
     *
     * @return string
     */
    public function getOper2emailaddr()
    {
        return $this->container['oper2emailaddr'];
    }

    /**
     * Sets oper2emailaddr
     *
     * @param string $oper2emailaddr oper2emailaddr
     *
     * @return $this
     */
    public function setOper2emailaddr($oper2emailaddr)
    {
        $this->container['oper2emailaddr'] = $oper2emailaddr;

        return $this;
    }

    /**
     * Gets parentactvid
     *
     * @return double
     */
    public function getParentactvid()
    {
        return $this->container['parentactvid'];
    }

    /**
     * Sets parentactvid
     *
     * @param double $parentactvid parentactvid
     *
     * @return $this
     */
    public function setParentactvid($parentactvid)
    {
        $this->container['parentactvid'] = $parentactvid;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets schstartdt
     *
     * @return \DateTime
     */
    public function getSchstartdt()
    {
        return $this->container['schstartdt'];
    }

    /**
     * Sets schstartdt
     *
     * @param \DateTime $schstartdt schstartdt
     *
     * @return $this
     */
    public function setSchstartdt($schstartdt)
    {
        $this->container['schstartdt'] = $schstartdt;

        return $this;
    }

    /**
     * Gets schstarttm
     *
     * @return string
     */
    public function getSchstarttm()
    {
        return $this->container['schstarttm'];
    }

    /**
     * Sets schstarttm
     *
     * @param string $schstarttm schstarttm
     *
     * @return $this
     */
    public function setSchstarttm($schstarttm)
    {
        $this->container['schstarttm'] = $schstarttm;

        return $this;
    }

    /**
     * Gets statuscd
     *
     * @return string
     */
    public function getStatuscd()
    {
        return $this->container['statuscd'];
    }

    /**
     * Sets statuscd
     *
     * @param string $statuscd statuscd
     *
     * @return $this
     */
    public function setStatuscd($statuscd)
    {
        $this->container['statuscd'] = $statuscd;

        return $this;
    }

    /**
     * Gets subjectprimarykey
     *
     * @return string
     */
    public function getSubjectprimarykey()
    {
        return $this->container['subjectprimarykey'];
    }

    /**
     * Sets subjectprimarykey
     *
     * @param string $subjectprimarykey subjectprimarykey
     *
     * @return $this
     */
    public function setSubjectprimarykey($subjectprimarykey)
    {
        $this->container['subjectprimarykey'] = $subjectprimarykey;

        return $this;
    }

    /**
     * Gets subjectsecondkey
     *
     * @return string
     */
    public function getSubjectsecondkey()
    {
        return $this->container['subjectsecondkey'];
    }

    /**
     * Sets subjectsecondkey
     *
     * @param string $subjectsecondkey subjectsecondkey
     *
     * @return $this
     */
    public function setSubjectsecondkey($subjectsecondkey)
    {
        $this->container['subjectsecondkey'] = $subjectsecondkey;

        return $this;
    }

    /**
     * Gets subjecttype
     *
     * @return string
     */
    public function getSubjecttype()
    {
        return $this->container['subjecttype'];
    }

    /**
     * Sets subjecttype
     *
     * @param string $subjecttype subjecttype
     *
     * @return $this
     */
    public function setSubjecttype($subjecttype)
    {
        $this->container['subjecttype'] = $subjecttype;

        return $this;
    }

    /**
     * Gets subjectname
     *
     * @return string
     */
    public function getSubjectname()
    {
        return $this->container['subjectname'];
    }

    /**
     * Sets subjectname
     *
     * @param string $subjectname subjectname
     *
     * @return $this
     */
    public function setSubjectname($subjectname)
    {
        $this->container['subjectname'] = $subjectname;

        return $this;
    }

    /**
     * Gets whse
     *
     * @return string
     */
    public function getWhse()
    {
        return $this->container['whse'];
    }

    /**
     * Sets whse
     *
     * @param string $whse whse
     *
     * @return $this
     */
    public function setWhse($whse)
    {
        $this->container['whse'] = $whse;

        return $this;
    }

    /**
     * Gets sortfield
     *
     * @return string
     */
    public function getSortfield()
    {
        return $this->container['sortfield'];
    }

    /**
     * Sets sortfield
     *
     * @param string $sortfield sortfield
     *
     * @return $this
     */
    public function setSortfield($sortfield)
    {
        $this->container['sortfield'] = $sortfield;

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


