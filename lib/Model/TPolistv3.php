<?php
/**
 * TPolistv3
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
 * TPolistv3 Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TPolistv3 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-polistv3';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pono' => 'int',
        'posuf' => 'int',
        'notesfl' => 'string',
        'vendno' => 'double',
        'vendname' => 'string',
        'shipfmno' => 'int',
        'whse' => 'string',
        'transtype' => 'string',
        'stagecd' => 'int',
        'stagecdwords' => 'string',
        'buyer' => 'string',
        'costeddt' => '\DateTime',
        'duedt' => '\DateTime',
        'enterdt' => '\DateTime',
        'orderdt' => '\DateTime',
        'paiddt' => '\DateTime',
        'printeddt' => '\DateTime',
        'receiptdt' => '\DateTime',
        'reqshipdt' => '\DateTime',
        'totqtyord' => 'double',
        'sort_fld' => 'string',
        'user1' => 'string',
        'user2' => 'string',
        'user3' => 'string',
        'user4' => 'string',
        'user5' => 'string',
        'user6' => 'double',
        'user7' => 'double',
        'user8' => '\DateTime',
        'user9' => '\DateTime',
        'user10' => 'string',
        'user11' => 'string',
        'user12' => 'string',
        'user13' => 'string',
        'user14' => 'string',
        'user15' => 'string',
        'user16' => 'string',
        'user17' => 'string',
        'user18' => 'string',
        'user19' => 'string',
        'user20' => 'string',
        'user21' => 'string',
        'user22' => 'string',
        'user23' => 'string',
        'user24' => 'string',
        'userfield' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pono' => 'int64',
        'posuf' => 'int64',
        'notesfl' => null,
        'vendno' => 'double',
        'vendname' => null,
        'shipfmno' => 'int64',
        'whse' => null,
        'transtype' => null,
        'stagecd' => 'int64',
        'stagecdwords' => null,
        'buyer' => null,
        'costeddt' => 'date',
        'duedt' => 'date',
        'enterdt' => 'date',
        'orderdt' => 'date',
        'paiddt' => 'date',
        'printeddt' => 'date',
        'receiptdt' => 'date',
        'reqshipdt' => 'date',
        'totqtyord' => 'double',
        'sort_fld' => null,
        'user1' => null,
        'user2' => null,
        'user3' => null,
        'user4' => null,
        'user5' => null,
        'user6' => 'double',
        'user7' => 'double',
        'user8' => 'date',
        'user9' => 'date',
        'user10' => null,
        'user11' => null,
        'user12' => null,
        'user13' => null,
        'user14' => null,
        'user15' => null,
        'user16' => null,
        'user17' => null,
        'user18' => null,
        'user19' => null,
        'user20' => null,
        'user21' => null,
        'user22' => null,
        'user23' => null,
        'user24' => null,
        'userfield' => null
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
        'pono' => 'pono',
        'posuf' => 'posuf',
        'notesfl' => 'notesfl',
        'vendno' => 'vendno',
        'vendname' => 'vendname',
        'shipfmno' => 'shipfmno',
        'whse' => 'whse',
        'transtype' => 'transtype',
        'stagecd' => 'stagecd',
        'stagecdwords' => 'stagecdwords',
        'buyer' => 'buyer',
        'costeddt' => 'costeddt',
        'duedt' => 'duedt',
        'enterdt' => 'enterdt',
        'orderdt' => 'orderdt',
        'paiddt' => 'paiddt',
        'printeddt' => 'printeddt',
        'receiptdt' => 'receiptdt',
        'reqshipdt' => 'reqshipdt',
        'totqtyord' => 'totqtyord',
        'sort_fld' => 'sortFld',
        'user1' => 'user1',
        'user2' => 'user2',
        'user3' => 'user3',
        'user4' => 'user4',
        'user5' => 'user5',
        'user6' => 'user6',
        'user7' => 'user7',
        'user8' => 'user8',
        'user9' => 'user9',
        'user10' => 'user10',
        'user11' => 'user11',
        'user12' => 'user12',
        'user13' => 'user13',
        'user14' => 'user14',
        'user15' => 'user15',
        'user16' => 'user16',
        'user17' => 'user17',
        'user18' => 'user18',
        'user19' => 'user19',
        'user20' => 'user20',
        'user21' => 'user21',
        'user22' => 'user22',
        'user23' => 'user23',
        'user24' => 'user24',
        'userfield' => 'userfield'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pono' => 'setPono',
        'posuf' => 'setPosuf',
        'notesfl' => 'setNotesfl',
        'vendno' => 'setVendno',
        'vendname' => 'setVendname',
        'shipfmno' => 'setShipfmno',
        'whse' => 'setWhse',
        'transtype' => 'setTranstype',
        'stagecd' => 'setStagecd',
        'stagecdwords' => 'setStagecdwords',
        'buyer' => 'setBuyer',
        'costeddt' => 'setCosteddt',
        'duedt' => 'setDuedt',
        'enterdt' => 'setEnterdt',
        'orderdt' => 'setOrderdt',
        'paiddt' => 'setPaiddt',
        'printeddt' => 'setPrinteddt',
        'receiptdt' => 'setReceiptdt',
        'reqshipdt' => 'setReqshipdt',
        'totqtyord' => 'setTotqtyord',
        'sort_fld' => 'setSortFld',
        'user1' => 'setUser1',
        'user2' => 'setUser2',
        'user3' => 'setUser3',
        'user4' => 'setUser4',
        'user5' => 'setUser5',
        'user6' => 'setUser6',
        'user7' => 'setUser7',
        'user8' => 'setUser8',
        'user9' => 'setUser9',
        'user10' => 'setUser10',
        'user11' => 'setUser11',
        'user12' => 'setUser12',
        'user13' => 'setUser13',
        'user14' => 'setUser14',
        'user15' => 'setUser15',
        'user16' => 'setUser16',
        'user17' => 'setUser17',
        'user18' => 'setUser18',
        'user19' => 'setUser19',
        'user20' => 'setUser20',
        'user21' => 'setUser21',
        'user22' => 'setUser22',
        'user23' => 'setUser23',
        'user24' => 'setUser24',
        'userfield' => 'setUserfield'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pono' => 'getPono',
        'posuf' => 'getPosuf',
        'notesfl' => 'getNotesfl',
        'vendno' => 'getVendno',
        'vendname' => 'getVendname',
        'shipfmno' => 'getShipfmno',
        'whse' => 'getWhse',
        'transtype' => 'getTranstype',
        'stagecd' => 'getStagecd',
        'stagecdwords' => 'getStagecdwords',
        'buyer' => 'getBuyer',
        'costeddt' => 'getCosteddt',
        'duedt' => 'getDuedt',
        'enterdt' => 'getEnterdt',
        'orderdt' => 'getOrderdt',
        'paiddt' => 'getPaiddt',
        'printeddt' => 'getPrinteddt',
        'receiptdt' => 'getReceiptdt',
        'reqshipdt' => 'getReqshipdt',
        'totqtyord' => 'getTotqtyord',
        'sort_fld' => 'getSortFld',
        'user1' => 'getUser1',
        'user2' => 'getUser2',
        'user3' => 'getUser3',
        'user4' => 'getUser4',
        'user5' => 'getUser5',
        'user6' => 'getUser6',
        'user7' => 'getUser7',
        'user8' => 'getUser8',
        'user9' => 'getUser9',
        'user10' => 'getUser10',
        'user11' => 'getUser11',
        'user12' => 'getUser12',
        'user13' => 'getUser13',
        'user14' => 'getUser14',
        'user15' => 'getUser15',
        'user16' => 'getUser16',
        'user17' => 'getUser17',
        'user18' => 'getUser18',
        'user19' => 'getUser19',
        'user20' => 'getUser20',
        'user21' => 'getUser21',
        'user22' => 'getUser22',
        'user23' => 'getUser23',
        'user24' => 'getUser24',
        'userfield' => 'getUserfield'
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
        $this->container['pono'] = isset($data['pono']) ? $data['pono'] : null;
        $this->container['posuf'] = isset($data['posuf']) ? $data['posuf'] : null;
        $this->container['notesfl'] = isset($data['notesfl']) ? $data['notesfl'] : null;
        $this->container['vendno'] = isset($data['vendno']) ? $data['vendno'] : null;
        $this->container['vendname'] = isset($data['vendname']) ? $data['vendname'] : null;
        $this->container['shipfmno'] = isset($data['shipfmno']) ? $data['shipfmno'] : null;
        $this->container['whse'] = isset($data['whse']) ? $data['whse'] : null;
        $this->container['transtype'] = isset($data['transtype']) ? $data['transtype'] : null;
        $this->container['stagecd'] = isset($data['stagecd']) ? $data['stagecd'] : null;
        $this->container['stagecdwords'] = isset($data['stagecdwords']) ? $data['stagecdwords'] : null;
        $this->container['buyer'] = isset($data['buyer']) ? $data['buyer'] : null;
        $this->container['costeddt'] = isset($data['costeddt']) ? $data['costeddt'] : null;
        $this->container['duedt'] = isset($data['duedt']) ? $data['duedt'] : null;
        $this->container['enterdt'] = isset($data['enterdt']) ? $data['enterdt'] : null;
        $this->container['orderdt'] = isset($data['orderdt']) ? $data['orderdt'] : null;
        $this->container['paiddt'] = isset($data['paiddt']) ? $data['paiddt'] : null;
        $this->container['printeddt'] = isset($data['printeddt']) ? $data['printeddt'] : null;
        $this->container['receiptdt'] = isset($data['receiptdt']) ? $data['receiptdt'] : null;
        $this->container['reqshipdt'] = isset($data['reqshipdt']) ? $data['reqshipdt'] : null;
        $this->container['totqtyord'] = isset($data['totqtyord']) ? $data['totqtyord'] : null;
        $this->container['sort_fld'] = isset($data['sort_fld']) ? $data['sort_fld'] : null;
        $this->container['user1'] = isset($data['user1']) ? $data['user1'] : null;
        $this->container['user2'] = isset($data['user2']) ? $data['user2'] : null;
        $this->container['user3'] = isset($data['user3']) ? $data['user3'] : null;
        $this->container['user4'] = isset($data['user4']) ? $data['user4'] : null;
        $this->container['user5'] = isset($data['user5']) ? $data['user5'] : null;
        $this->container['user6'] = isset($data['user6']) ? $data['user6'] : null;
        $this->container['user7'] = isset($data['user7']) ? $data['user7'] : null;
        $this->container['user8'] = isset($data['user8']) ? $data['user8'] : null;
        $this->container['user9'] = isset($data['user9']) ? $data['user9'] : null;
        $this->container['user10'] = isset($data['user10']) ? $data['user10'] : null;
        $this->container['user11'] = isset($data['user11']) ? $data['user11'] : null;
        $this->container['user12'] = isset($data['user12']) ? $data['user12'] : null;
        $this->container['user13'] = isset($data['user13']) ? $data['user13'] : null;
        $this->container['user14'] = isset($data['user14']) ? $data['user14'] : null;
        $this->container['user15'] = isset($data['user15']) ? $data['user15'] : null;
        $this->container['user16'] = isset($data['user16']) ? $data['user16'] : null;
        $this->container['user17'] = isset($data['user17']) ? $data['user17'] : null;
        $this->container['user18'] = isset($data['user18']) ? $data['user18'] : null;
        $this->container['user19'] = isset($data['user19']) ? $data['user19'] : null;
        $this->container['user20'] = isset($data['user20']) ? $data['user20'] : null;
        $this->container['user21'] = isset($data['user21']) ? $data['user21'] : null;
        $this->container['user22'] = isset($data['user22']) ? $data['user22'] : null;
        $this->container['user23'] = isset($data['user23']) ? $data['user23'] : null;
        $this->container['user24'] = isset($data['user24']) ? $data['user24'] : null;
        $this->container['userfield'] = isset($data['userfield']) ? $data['userfield'] : null;
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
     * Gets pono
     *
     * @return int
     */
    public function getPono()
    {
        return $this->container['pono'];
    }

    /**
     * Sets pono
     *
     * @param int $pono pono
     *
     * @return $this
     */
    public function setPono($pono)
    {
        $this->container['pono'] = $pono;

        return $this;
    }

    /**
     * Gets posuf
     *
     * @return int
     */
    public function getPosuf()
    {
        return $this->container['posuf'];
    }

    /**
     * Sets posuf
     *
     * @param int $posuf posuf
     *
     * @return $this
     */
    public function setPosuf($posuf)
    {
        $this->container['posuf'] = $posuf;

        return $this;
    }

    /**
     * Gets notesfl
     *
     * @return string
     */
    public function getNotesfl()
    {
        return $this->container['notesfl'];
    }

    /**
     * Sets notesfl
     *
     * @param string $notesfl notesfl
     *
     * @return $this
     */
    public function setNotesfl($notesfl)
    {
        $this->container['notesfl'] = $notesfl;

        return $this;
    }

    /**
     * Gets vendno
     *
     * @return double
     */
    public function getVendno()
    {
        return $this->container['vendno'];
    }

    /**
     * Sets vendno
     *
     * @param double $vendno vendno
     *
     * @return $this
     */
    public function setVendno($vendno)
    {
        $this->container['vendno'] = $vendno;

        return $this;
    }

    /**
     * Gets vendname
     *
     * @return string
     */
    public function getVendname()
    {
        return $this->container['vendname'];
    }

    /**
     * Sets vendname
     *
     * @param string $vendname vendname
     *
     * @return $this
     */
    public function setVendname($vendname)
    {
        $this->container['vendname'] = $vendname;

        return $this;
    }

    /**
     * Gets shipfmno
     *
     * @return int
     */
    public function getShipfmno()
    {
        return $this->container['shipfmno'];
    }

    /**
     * Sets shipfmno
     *
     * @param int $shipfmno shipfmno
     *
     * @return $this
     */
    public function setShipfmno($shipfmno)
    {
        $this->container['shipfmno'] = $shipfmno;

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
     * Gets transtype
     *
     * @return string
     */
    public function getTranstype()
    {
        return $this->container['transtype'];
    }

    /**
     * Sets transtype
     *
     * @param string $transtype transtype
     *
     * @return $this
     */
    public function setTranstype($transtype)
    {
        $this->container['transtype'] = $transtype;

        return $this;
    }

    /**
     * Gets stagecd
     *
     * @return int
     */
    public function getStagecd()
    {
        return $this->container['stagecd'];
    }

    /**
     * Sets stagecd
     *
     * @param int $stagecd stagecd
     *
     * @return $this
     */
    public function setStagecd($stagecd)
    {
        $this->container['stagecd'] = $stagecd;

        return $this;
    }

    /**
     * Gets stagecdwords
     *
     * @return string
     */
    public function getStagecdwords()
    {
        return $this->container['stagecdwords'];
    }

    /**
     * Sets stagecdwords
     *
     * @param string $stagecdwords stagecdwords
     *
     * @return $this
     */
    public function setStagecdwords($stagecdwords)
    {
        $this->container['stagecdwords'] = $stagecdwords;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return string
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param string $buyer buyer
     *
     * @return $this
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets costeddt
     *
     * @return \DateTime
     */
    public function getCosteddt()
    {
        return $this->container['costeddt'];
    }

    /**
     * Sets costeddt
     *
     * @param \DateTime $costeddt costeddt
     *
     * @return $this
     */
    public function setCosteddt($costeddt)
    {
        $this->container['costeddt'] = $costeddt;

        return $this;
    }

    /**
     * Gets duedt
     *
     * @return \DateTime
     */
    public function getDuedt()
    {
        return $this->container['duedt'];
    }

    /**
     * Sets duedt
     *
     * @param \DateTime $duedt duedt
     *
     * @return $this
     */
    public function setDuedt($duedt)
    {
        $this->container['duedt'] = $duedt;

        return $this;
    }

    /**
     * Gets enterdt
     *
     * @return \DateTime
     */
    public function getEnterdt()
    {
        return $this->container['enterdt'];
    }

    /**
     * Sets enterdt
     *
     * @param \DateTime $enterdt enterdt
     *
     * @return $this
     */
    public function setEnterdt($enterdt)
    {
        $this->container['enterdt'] = $enterdt;

        return $this;
    }

    /**
     * Gets orderdt
     *
     * @return \DateTime
     */
    public function getOrderdt()
    {
        return $this->container['orderdt'];
    }

    /**
     * Sets orderdt
     *
     * @param \DateTime $orderdt orderdt
     *
     * @return $this
     */
    public function setOrderdt($orderdt)
    {
        $this->container['orderdt'] = $orderdt;

        return $this;
    }

    /**
     * Gets paiddt
     *
     * @return \DateTime
     */
    public function getPaiddt()
    {
        return $this->container['paiddt'];
    }

    /**
     * Sets paiddt
     *
     * @param \DateTime $paiddt paiddt
     *
     * @return $this
     */
    public function setPaiddt($paiddt)
    {
        $this->container['paiddt'] = $paiddt;

        return $this;
    }

    /**
     * Gets printeddt
     *
     * @return \DateTime
     */
    public function getPrinteddt()
    {
        return $this->container['printeddt'];
    }

    /**
     * Sets printeddt
     *
     * @param \DateTime $printeddt printeddt
     *
     * @return $this
     */
    public function setPrinteddt($printeddt)
    {
        $this->container['printeddt'] = $printeddt;

        return $this;
    }

    /**
     * Gets receiptdt
     *
     * @return \DateTime
     */
    public function getReceiptdt()
    {
        return $this->container['receiptdt'];
    }

    /**
     * Sets receiptdt
     *
     * @param \DateTime $receiptdt receiptdt
     *
     * @return $this
     */
    public function setReceiptdt($receiptdt)
    {
        $this->container['receiptdt'] = $receiptdt;

        return $this;
    }

    /**
     * Gets reqshipdt
     *
     * @return \DateTime
     */
    public function getReqshipdt()
    {
        return $this->container['reqshipdt'];
    }

    /**
     * Sets reqshipdt
     *
     * @param \DateTime $reqshipdt reqshipdt
     *
     * @return $this
     */
    public function setReqshipdt($reqshipdt)
    {
        $this->container['reqshipdt'] = $reqshipdt;

        return $this;
    }

    /**
     * Gets totqtyord
     *
     * @return double
     */
    public function getTotqtyord()
    {
        return $this->container['totqtyord'];
    }

    /**
     * Sets totqtyord
     *
     * @param double $totqtyord totqtyord
     *
     * @return $this
     */
    public function setTotqtyord($totqtyord)
    {
        $this->container['totqtyord'] = $totqtyord;

        return $this;
    }

    /**
     * Gets sort_fld
     *
     * @return string
     */
    public function getSortFld()
    {
        return $this->container['sort_fld'];
    }

    /**
     * Sets sort_fld
     *
     * @param string $sort_fld sort_fld
     *
     * @return $this
     */
    public function setSortFld($sort_fld)
    {
        $this->container['sort_fld'] = $sort_fld;

        return $this;
    }

    /**
     * Gets user1
     *
     * @return string
     */
    public function getUser1()
    {
        return $this->container['user1'];
    }

    /**
     * Sets user1
     *
     * @param string $user1 user1
     *
     * @return $this
     */
    public function setUser1($user1)
    {
        $this->container['user1'] = $user1;

        return $this;
    }

    /**
     * Gets user2
     *
     * @return string
     */
    public function getUser2()
    {
        return $this->container['user2'];
    }

    /**
     * Sets user2
     *
     * @param string $user2 user2
     *
     * @return $this
     */
    public function setUser2($user2)
    {
        $this->container['user2'] = $user2;

        return $this;
    }

    /**
     * Gets user3
     *
     * @return string
     */
    public function getUser3()
    {
        return $this->container['user3'];
    }

    /**
     * Sets user3
     *
     * @param string $user3 user3
     *
     * @return $this
     */
    public function setUser3($user3)
    {
        $this->container['user3'] = $user3;

        return $this;
    }

    /**
     * Gets user4
     *
     * @return string
     */
    public function getUser4()
    {
        return $this->container['user4'];
    }

    /**
     * Sets user4
     *
     * @param string $user4 user4
     *
     * @return $this
     */
    public function setUser4($user4)
    {
        $this->container['user4'] = $user4;

        return $this;
    }

    /**
     * Gets user5
     *
     * @return string
     */
    public function getUser5()
    {
        return $this->container['user5'];
    }

    /**
     * Sets user5
     *
     * @param string $user5 user5
     *
     * @return $this
     */
    public function setUser5($user5)
    {
        $this->container['user5'] = $user5;

        return $this;
    }

    /**
     * Gets user6
     *
     * @return double
     */
    public function getUser6()
    {
        return $this->container['user6'];
    }

    /**
     * Sets user6
     *
     * @param double $user6 user6
     *
     * @return $this
     */
    public function setUser6($user6)
    {
        $this->container['user6'] = $user6;

        return $this;
    }

    /**
     * Gets user7
     *
     * @return double
     */
    public function getUser7()
    {
        return $this->container['user7'];
    }

    /**
     * Sets user7
     *
     * @param double $user7 user7
     *
     * @return $this
     */
    public function setUser7($user7)
    {
        $this->container['user7'] = $user7;

        return $this;
    }

    /**
     * Gets user8
     *
     * @return \DateTime
     */
    public function getUser8()
    {
        return $this->container['user8'];
    }

    /**
     * Sets user8
     *
     * @param \DateTime $user8 user8
     *
     * @return $this
     */
    public function setUser8($user8)
    {
        $this->container['user8'] = $user8;

        return $this;
    }

    /**
     * Gets user9
     *
     * @return \DateTime
     */
    public function getUser9()
    {
        return $this->container['user9'];
    }

    /**
     * Sets user9
     *
     * @param \DateTime $user9 user9
     *
     * @return $this
     */
    public function setUser9($user9)
    {
        $this->container['user9'] = $user9;

        return $this;
    }

    /**
     * Gets user10
     *
     * @return string
     */
    public function getUser10()
    {
        return $this->container['user10'];
    }

    /**
     * Sets user10
     *
     * @param string $user10 user10
     *
     * @return $this
     */
    public function setUser10($user10)
    {
        $this->container['user10'] = $user10;

        return $this;
    }

    /**
     * Gets user11
     *
     * @return string
     */
    public function getUser11()
    {
        return $this->container['user11'];
    }

    /**
     * Sets user11
     *
     * @param string $user11 user11
     *
     * @return $this
     */
    public function setUser11($user11)
    {
        $this->container['user11'] = $user11;

        return $this;
    }

    /**
     * Gets user12
     *
     * @return string
     */
    public function getUser12()
    {
        return $this->container['user12'];
    }

    /**
     * Sets user12
     *
     * @param string $user12 user12
     *
     * @return $this
     */
    public function setUser12($user12)
    {
        $this->container['user12'] = $user12;

        return $this;
    }

    /**
     * Gets user13
     *
     * @return string
     */
    public function getUser13()
    {
        return $this->container['user13'];
    }

    /**
     * Sets user13
     *
     * @param string $user13 user13
     *
     * @return $this
     */
    public function setUser13($user13)
    {
        $this->container['user13'] = $user13;

        return $this;
    }

    /**
     * Gets user14
     *
     * @return string
     */
    public function getUser14()
    {
        return $this->container['user14'];
    }

    /**
     * Sets user14
     *
     * @param string $user14 user14
     *
     * @return $this
     */
    public function setUser14($user14)
    {
        $this->container['user14'] = $user14;

        return $this;
    }

    /**
     * Gets user15
     *
     * @return string
     */
    public function getUser15()
    {
        return $this->container['user15'];
    }

    /**
     * Sets user15
     *
     * @param string $user15 user15
     *
     * @return $this
     */
    public function setUser15($user15)
    {
        $this->container['user15'] = $user15;

        return $this;
    }

    /**
     * Gets user16
     *
     * @return string
     */
    public function getUser16()
    {
        return $this->container['user16'];
    }

    /**
     * Sets user16
     *
     * @param string $user16 user16
     *
     * @return $this
     */
    public function setUser16($user16)
    {
        $this->container['user16'] = $user16;

        return $this;
    }

    /**
     * Gets user17
     *
     * @return string
     */
    public function getUser17()
    {
        return $this->container['user17'];
    }

    /**
     * Sets user17
     *
     * @param string $user17 user17
     *
     * @return $this
     */
    public function setUser17($user17)
    {
        $this->container['user17'] = $user17;

        return $this;
    }

    /**
     * Gets user18
     *
     * @return string
     */
    public function getUser18()
    {
        return $this->container['user18'];
    }

    /**
     * Sets user18
     *
     * @param string $user18 user18
     *
     * @return $this
     */
    public function setUser18($user18)
    {
        $this->container['user18'] = $user18;

        return $this;
    }

    /**
     * Gets user19
     *
     * @return string
     */
    public function getUser19()
    {
        return $this->container['user19'];
    }

    /**
     * Sets user19
     *
     * @param string $user19 user19
     *
     * @return $this
     */
    public function setUser19($user19)
    {
        $this->container['user19'] = $user19;

        return $this;
    }

    /**
     * Gets user20
     *
     * @return string
     */
    public function getUser20()
    {
        return $this->container['user20'];
    }

    /**
     * Sets user20
     *
     * @param string $user20 user20
     *
     * @return $this
     */
    public function setUser20($user20)
    {
        $this->container['user20'] = $user20;

        return $this;
    }

    /**
     * Gets user21
     *
     * @return string
     */
    public function getUser21()
    {
        return $this->container['user21'];
    }

    /**
     * Sets user21
     *
     * @param string $user21 user21
     *
     * @return $this
     */
    public function setUser21($user21)
    {
        $this->container['user21'] = $user21;

        return $this;
    }

    /**
     * Gets user22
     *
     * @return string
     */
    public function getUser22()
    {
        return $this->container['user22'];
    }

    /**
     * Sets user22
     *
     * @param string $user22 user22
     *
     * @return $this
     */
    public function setUser22($user22)
    {
        $this->container['user22'] = $user22;

        return $this;
    }

    /**
     * Gets user23
     *
     * @return string
     */
    public function getUser23()
    {
        return $this->container['user23'];
    }

    /**
     * Sets user23
     *
     * @param string $user23 user23
     *
     * @return $this
     */
    public function setUser23($user23)
    {
        $this->container['user23'] = $user23;

        return $this;
    }

    /**
     * Gets user24
     *
     * @return string
     */
    public function getUser24()
    {
        return $this->container['user24'];
    }

    /**
     * Sets user24
     *
     * @param string $user24 user24
     *
     * @return $this
     */
    public function setUser24($user24)
    {
        $this->container['user24'] = $user24;

        return $this;
    }

    /**
     * Gets userfield
     *
     * @return string
     */
    public function getUserfield()
    {
        return $this->container['userfield'];
    }

    /**
     * Sets userfield
     *
     * @param string $userfield userfield
     *
     * @return $this
     */
    public function setUserfield($userfield)
    {
        $this->container['userfield'] = $userfield;

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


