<?php
/**
 * TOutnotes
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
 * TOutnotes Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TOutnotes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-outnotes';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'notestype' => 'string',
        'pageno' => 'int',
        'primarykey' => 'string',
        'secondarykey' => 'string',
        'newrecordfl' => 'bool',
        'newrecordglobalfl' => 'bool',
        'deleterecordfl' => 'bool',
        'changerecordfl' => 'bool',
        'forcerefreshallpagesfl' => 'bool',
        'securefl' => 'bool',
        'notedata' => 'string',
        'printfl' => 'bool',
        'printfl2' => 'bool',
        'printfl3' => 'bool',
        'printfl4' => 'bool',
        'printfl5' => 'bool',
        'requirefl' => 'bool',
        'extradata' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'notestype' => null,
        'pageno' => 'int64',
        'primarykey' => null,
        'secondarykey' => null,
        'newrecordfl' => null,
        'newrecordglobalfl' => null,
        'deleterecordfl' => null,
        'changerecordfl' => null,
        'forcerefreshallpagesfl' => null,
        'securefl' => null,
        'notedata' => null,
        'printfl' => null,
        'printfl2' => null,
        'printfl3' => null,
        'printfl4' => null,
        'printfl5' => null,
        'requirefl' => null,
        'extradata' => null
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
        'notestype' => 'notestype',
        'pageno' => 'pageno',
        'primarykey' => 'primarykey',
        'secondarykey' => 'secondarykey',
        'newrecordfl' => 'newrecordfl',
        'newrecordglobalfl' => 'newrecordglobalfl',
        'deleterecordfl' => 'deleterecordfl',
        'changerecordfl' => 'changerecordfl',
        'forcerefreshallpagesfl' => 'forcerefreshallpagesfl',
        'securefl' => 'securefl',
        'notedata' => 'notedata',
        'printfl' => 'printfl',
        'printfl2' => 'printfl2',
        'printfl3' => 'printfl3',
        'printfl4' => 'printfl4',
        'printfl5' => 'printfl5',
        'requirefl' => 'requirefl',
        'extradata' => 'extradata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'notestype' => 'setNotestype',
        'pageno' => 'setPageno',
        'primarykey' => 'setPrimarykey',
        'secondarykey' => 'setSecondarykey',
        'newrecordfl' => 'setNewrecordfl',
        'newrecordglobalfl' => 'setNewrecordglobalfl',
        'deleterecordfl' => 'setDeleterecordfl',
        'changerecordfl' => 'setChangerecordfl',
        'forcerefreshallpagesfl' => 'setForcerefreshallpagesfl',
        'securefl' => 'setSecurefl',
        'notedata' => 'setNotedata',
        'printfl' => 'setPrintfl',
        'printfl2' => 'setPrintfl2',
        'printfl3' => 'setPrintfl3',
        'printfl4' => 'setPrintfl4',
        'printfl5' => 'setPrintfl5',
        'requirefl' => 'setRequirefl',
        'extradata' => 'setExtradata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'notestype' => 'getNotestype',
        'pageno' => 'getPageno',
        'primarykey' => 'getPrimarykey',
        'secondarykey' => 'getSecondarykey',
        'newrecordfl' => 'getNewrecordfl',
        'newrecordglobalfl' => 'getNewrecordglobalfl',
        'deleterecordfl' => 'getDeleterecordfl',
        'changerecordfl' => 'getChangerecordfl',
        'forcerefreshallpagesfl' => 'getForcerefreshallpagesfl',
        'securefl' => 'getSecurefl',
        'notedata' => 'getNotedata',
        'printfl' => 'getPrintfl',
        'printfl2' => 'getPrintfl2',
        'printfl3' => 'getPrintfl3',
        'printfl4' => 'getPrintfl4',
        'printfl5' => 'getPrintfl5',
        'requirefl' => 'getRequirefl',
        'extradata' => 'getExtradata'
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
        $this->container['notestype'] = isset($data['notestype']) ? $data['notestype'] : null;
        $this->container['pageno'] = isset($data['pageno']) ? $data['pageno'] : null;
        $this->container['primarykey'] = isset($data['primarykey']) ? $data['primarykey'] : null;
        $this->container['secondarykey'] = isset($data['secondarykey']) ? $data['secondarykey'] : null;
        $this->container['newrecordfl'] = isset($data['newrecordfl']) ? $data['newrecordfl'] : null;
        $this->container['newrecordglobalfl'] = isset($data['newrecordglobalfl']) ? $data['newrecordglobalfl'] : null;
        $this->container['deleterecordfl'] = isset($data['deleterecordfl']) ? $data['deleterecordfl'] : null;
        $this->container['changerecordfl'] = isset($data['changerecordfl']) ? $data['changerecordfl'] : null;
        $this->container['forcerefreshallpagesfl'] = isset($data['forcerefreshallpagesfl']) ? $data['forcerefreshallpagesfl'] : null;
        $this->container['securefl'] = isset($data['securefl']) ? $data['securefl'] : null;
        $this->container['notedata'] = isset($data['notedata']) ? $data['notedata'] : null;
        $this->container['printfl'] = isset($data['printfl']) ? $data['printfl'] : null;
        $this->container['printfl2'] = isset($data['printfl2']) ? $data['printfl2'] : null;
        $this->container['printfl3'] = isset($data['printfl3']) ? $data['printfl3'] : null;
        $this->container['printfl4'] = isset($data['printfl4']) ? $data['printfl4'] : null;
        $this->container['printfl5'] = isset($data['printfl5']) ? $data['printfl5'] : null;
        $this->container['requirefl'] = isset($data['requirefl']) ? $data['requirefl'] : null;
        $this->container['extradata'] = isset($data['extradata']) ? $data['extradata'] : null;
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
     * Gets notestype
     *
     * @return string
     */
    public function getNotestype()
    {
        return $this->container['notestype'];
    }

    /**
     * Sets notestype
     *
     * @param string $notestype notestype
     *
     * @return $this
     */
    public function setNotestype($notestype)
    {
        $this->container['notestype'] = $notestype;

        return $this;
    }

    /**
     * Gets pageno
     *
     * @return int
     */
    public function getPageno()
    {
        return $this->container['pageno'];
    }

    /**
     * Sets pageno
     *
     * @param int $pageno pageno
     *
     * @return $this
     */
    public function setPageno($pageno)
    {
        $this->container['pageno'] = $pageno;

        return $this;
    }

    /**
     * Gets primarykey
     *
     * @return string
     */
    public function getPrimarykey()
    {
        return $this->container['primarykey'];
    }

    /**
     * Sets primarykey
     *
     * @param string $primarykey primarykey
     *
     * @return $this
     */
    public function setPrimarykey($primarykey)
    {
        $this->container['primarykey'] = $primarykey;

        return $this;
    }

    /**
     * Gets secondarykey
     *
     * @return string
     */
    public function getSecondarykey()
    {
        return $this->container['secondarykey'];
    }

    /**
     * Sets secondarykey
     *
     * @param string $secondarykey secondarykey
     *
     * @return $this
     */
    public function setSecondarykey($secondarykey)
    {
        $this->container['secondarykey'] = $secondarykey;

        return $this;
    }

    /**
     * Gets newrecordfl
     *
     * @return bool
     */
    public function getNewrecordfl()
    {
        return $this->container['newrecordfl'];
    }

    /**
     * Sets newrecordfl
     *
     * @param bool $newrecordfl newrecordfl
     *
     * @return $this
     */
    public function setNewrecordfl($newrecordfl)
    {
        $this->container['newrecordfl'] = $newrecordfl;

        return $this;
    }

    /**
     * Gets newrecordglobalfl
     *
     * @return bool
     */
    public function getNewrecordglobalfl()
    {
        return $this->container['newrecordglobalfl'];
    }

    /**
     * Sets newrecordglobalfl
     *
     * @param bool $newrecordglobalfl newrecordglobalfl
     *
     * @return $this
     */
    public function setNewrecordglobalfl($newrecordglobalfl)
    {
        $this->container['newrecordglobalfl'] = $newrecordglobalfl;

        return $this;
    }

    /**
     * Gets deleterecordfl
     *
     * @return bool
     */
    public function getDeleterecordfl()
    {
        return $this->container['deleterecordfl'];
    }

    /**
     * Sets deleterecordfl
     *
     * @param bool $deleterecordfl deleterecordfl
     *
     * @return $this
     */
    public function setDeleterecordfl($deleterecordfl)
    {
        $this->container['deleterecordfl'] = $deleterecordfl;

        return $this;
    }

    /**
     * Gets changerecordfl
     *
     * @return bool
     */
    public function getChangerecordfl()
    {
        return $this->container['changerecordfl'];
    }

    /**
     * Sets changerecordfl
     *
     * @param bool $changerecordfl changerecordfl
     *
     * @return $this
     */
    public function setChangerecordfl($changerecordfl)
    {
        $this->container['changerecordfl'] = $changerecordfl;

        return $this;
    }

    /**
     * Gets forcerefreshallpagesfl
     *
     * @return bool
     */
    public function getForcerefreshallpagesfl()
    {
        return $this->container['forcerefreshallpagesfl'];
    }

    /**
     * Sets forcerefreshallpagesfl
     *
     * @param bool $forcerefreshallpagesfl forcerefreshallpagesfl
     *
     * @return $this
     */
    public function setForcerefreshallpagesfl($forcerefreshallpagesfl)
    {
        $this->container['forcerefreshallpagesfl'] = $forcerefreshallpagesfl;

        return $this;
    }

    /**
     * Gets securefl
     *
     * @return bool
     */
    public function getSecurefl()
    {
        return $this->container['securefl'];
    }

    /**
     * Sets securefl
     *
     * @param bool $securefl securefl
     *
     * @return $this
     */
    public function setSecurefl($securefl)
    {
        $this->container['securefl'] = $securefl;

        return $this;
    }

    /**
     * Gets notedata
     *
     * @return string
     */
    public function getNotedata()
    {
        return $this->container['notedata'];
    }

    /**
     * Sets notedata
     *
     * @param string $notedata notedata
     *
     * @return $this
     */
    public function setNotedata($notedata)
    {
        $this->container['notedata'] = $notedata;

        return $this;
    }

    /**
     * Gets printfl
     *
     * @return bool
     */
    public function getPrintfl()
    {
        return $this->container['printfl'];
    }

    /**
     * Sets printfl
     *
     * @param bool $printfl printfl
     *
     * @return $this
     */
    public function setPrintfl($printfl)
    {
        $this->container['printfl'] = $printfl;

        return $this;
    }

    /**
     * Gets printfl2
     *
     * @return bool
     */
    public function getPrintfl2()
    {
        return $this->container['printfl2'];
    }

    /**
     * Sets printfl2
     *
     * @param bool $printfl2 printfl2
     *
     * @return $this
     */
    public function setPrintfl2($printfl2)
    {
        $this->container['printfl2'] = $printfl2;

        return $this;
    }

    /**
     * Gets printfl3
     *
     * @return bool
     */
    public function getPrintfl3()
    {
        return $this->container['printfl3'];
    }

    /**
     * Sets printfl3
     *
     * @param bool $printfl3 printfl3
     *
     * @return $this
     */
    public function setPrintfl3($printfl3)
    {
        $this->container['printfl3'] = $printfl3;

        return $this;
    }

    /**
     * Gets printfl4
     *
     * @return bool
     */
    public function getPrintfl4()
    {
        return $this->container['printfl4'];
    }

    /**
     * Sets printfl4
     *
     * @param bool $printfl4 printfl4
     *
     * @return $this
     */
    public function setPrintfl4($printfl4)
    {
        $this->container['printfl4'] = $printfl4;

        return $this;
    }

    /**
     * Gets printfl5
     *
     * @return bool
     */
    public function getPrintfl5()
    {
        return $this->container['printfl5'];
    }

    /**
     * Sets printfl5
     *
     * @param bool $printfl5 printfl5
     *
     * @return $this
     */
    public function setPrintfl5($printfl5)
    {
        $this->container['printfl5'] = $printfl5;

        return $this;
    }

    /**
     * Gets requirefl
     *
     * @return bool
     */
    public function getRequirefl()
    {
        return $this->container['requirefl'];
    }

    /**
     * Sets requirefl
     *
     * @param bool $requirefl requirefl
     *
     * @return $this
     */
    public function setRequirefl($requirefl)
    {
        $this->container['requirefl'] = $requirefl;

        return $this;
    }

    /**
     * Gets extradata
     *
     * @return string
     */
    public function getExtradata()
    {
        return $this->container['extradata'];
    }

    /**
     * Sets extradata
     *
     * @param string $extradata extradata
     *
     * @return $this
     */
    public function setExtradata($extradata)
    {
        $this->container['extradata'] = $extradata;

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


