<?php
/**
 * TSapblist
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
 * TSapblist Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TSapblist implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 't-sapblist';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'listtype' => 'string',
        'seqno' => 'int',
        'custno' => 'double',
        'amount' => 'double',
        'checkno' => 'double',
        'jrnlno' => 'int',
        'orderno' => 'int',
        'ordersuf' => 'int',
        'route' => 'string',
        'reprintfl' => 'bool',
        'outputty' => 'string',
        'shipto' => 'string',
        'operator' => 'string',
        'prodcat' => 'string',
        'vendno' => 'double',
        'apinvno' => 'string',
        'type' => 'bool',
        'allfl' => 'bool',
        'seqno2' => 'double',
        'name' => 'string',
        'selecttype' => 'string',
        'transtype' => 'string',
        'sortno' => 'int',
        'payallfl' => 'bool',
        'user1' => 'string',
        'user2' => 'string',
        'user3' => 'string',
        'user4' => 'string',
        'user5' => 'string',
        'user6' => 'double',
        'user7' => 'double',
        'user8' => '\DateTime',
        'user9' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'listtype' => null,
        'seqno' => 'int64',
        'custno' => 'double',
        'amount' => 'double',
        'checkno' => 'double',
        'jrnlno' => 'int64',
        'orderno' => 'int64',
        'ordersuf' => 'int64',
        'route' => null,
        'reprintfl' => null,
        'outputty' => null,
        'shipto' => null,
        'operator' => null,
        'prodcat' => null,
        'vendno' => 'double',
        'apinvno' => null,
        'type' => null,
        'allfl' => null,
        'seqno2' => 'double',
        'name' => null,
        'selecttype' => null,
        'transtype' => null,
        'sortno' => 'int64',
        'payallfl' => null,
        'user1' => null,
        'user2' => null,
        'user3' => null,
        'user4' => null,
        'user5' => null,
        'user6' => 'double',
        'user7' => 'double',
        'user8' => 'date',
        'user9' => 'date'
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
        'listtype' => 'listtype',
        'seqno' => 'seqno',
        'custno' => 'custno',
        'amount' => 'amount',
        'checkno' => 'checkno',
        'jrnlno' => 'jrnlno',
        'orderno' => 'orderno',
        'ordersuf' => 'ordersuf',
        'route' => 'route',
        'reprintfl' => 'reprintfl',
        'outputty' => 'outputty',
        'shipto' => 'shipto',
        'operator' => 'operator',
        'prodcat' => 'prodcat',
        'vendno' => 'vendno',
        'apinvno' => 'apinvno',
        'type' => 'type',
        'allfl' => 'allfl',
        'seqno2' => 'seqno2',
        'name' => 'name',
        'selecttype' => 'selecttype',
        'transtype' => 'transtype',
        'sortno' => 'sortno',
        'payallfl' => 'payallfl',
        'user1' => 'user1',
        'user2' => 'user2',
        'user3' => 'user3',
        'user4' => 'user4',
        'user5' => 'user5',
        'user6' => 'user6',
        'user7' => 'user7',
        'user8' => 'user8',
        'user9' => 'user9'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'listtype' => 'setListtype',
        'seqno' => 'setSeqno',
        'custno' => 'setCustno',
        'amount' => 'setAmount',
        'checkno' => 'setCheckno',
        'jrnlno' => 'setJrnlno',
        'orderno' => 'setOrderno',
        'ordersuf' => 'setOrdersuf',
        'route' => 'setRoute',
        'reprintfl' => 'setReprintfl',
        'outputty' => 'setOutputty',
        'shipto' => 'setShipto',
        'operator' => 'setOperator',
        'prodcat' => 'setProdcat',
        'vendno' => 'setVendno',
        'apinvno' => 'setApinvno',
        'type' => 'setType',
        'allfl' => 'setAllfl',
        'seqno2' => 'setSeqno2',
        'name' => 'setName',
        'selecttype' => 'setSelecttype',
        'transtype' => 'setTranstype',
        'sortno' => 'setSortno',
        'payallfl' => 'setPayallfl',
        'user1' => 'setUser1',
        'user2' => 'setUser2',
        'user3' => 'setUser3',
        'user4' => 'setUser4',
        'user5' => 'setUser5',
        'user6' => 'setUser6',
        'user7' => 'setUser7',
        'user8' => 'setUser8',
        'user9' => 'setUser9'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'listtype' => 'getListtype',
        'seqno' => 'getSeqno',
        'custno' => 'getCustno',
        'amount' => 'getAmount',
        'checkno' => 'getCheckno',
        'jrnlno' => 'getJrnlno',
        'orderno' => 'getOrderno',
        'ordersuf' => 'getOrdersuf',
        'route' => 'getRoute',
        'reprintfl' => 'getReprintfl',
        'outputty' => 'getOutputty',
        'shipto' => 'getShipto',
        'operator' => 'getOperator',
        'prodcat' => 'getProdcat',
        'vendno' => 'getVendno',
        'apinvno' => 'getApinvno',
        'type' => 'getType',
        'allfl' => 'getAllfl',
        'seqno2' => 'getSeqno2',
        'name' => 'getName',
        'selecttype' => 'getSelecttype',
        'transtype' => 'getTranstype',
        'sortno' => 'getSortno',
        'payallfl' => 'getPayallfl',
        'user1' => 'getUser1',
        'user2' => 'getUser2',
        'user3' => 'getUser3',
        'user4' => 'getUser4',
        'user5' => 'getUser5',
        'user6' => 'getUser6',
        'user7' => 'getUser7',
        'user8' => 'getUser8',
        'user9' => 'getUser9'
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
        $this->container['listtype'] = isset($data['listtype']) ? $data['listtype'] : null;
        $this->container['seqno'] = isset($data['seqno']) ? $data['seqno'] : null;
        $this->container['custno'] = isset($data['custno']) ? $data['custno'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['checkno'] = isset($data['checkno']) ? $data['checkno'] : null;
        $this->container['jrnlno'] = isset($data['jrnlno']) ? $data['jrnlno'] : null;
        $this->container['orderno'] = isset($data['orderno']) ? $data['orderno'] : null;
        $this->container['ordersuf'] = isset($data['ordersuf']) ? $data['ordersuf'] : null;
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
        $this->container['reprintfl'] = isset($data['reprintfl']) ? $data['reprintfl'] : null;
        $this->container['outputty'] = isset($data['outputty']) ? $data['outputty'] : null;
        $this->container['shipto'] = isset($data['shipto']) ? $data['shipto'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['prodcat'] = isset($data['prodcat']) ? $data['prodcat'] : null;
        $this->container['vendno'] = isset($data['vendno']) ? $data['vendno'] : null;
        $this->container['apinvno'] = isset($data['apinvno']) ? $data['apinvno'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['allfl'] = isset($data['allfl']) ? $data['allfl'] : null;
        $this->container['seqno2'] = isset($data['seqno2']) ? $data['seqno2'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['selecttype'] = isset($data['selecttype']) ? $data['selecttype'] : null;
        $this->container['transtype'] = isset($data['transtype']) ? $data['transtype'] : null;
        $this->container['sortno'] = isset($data['sortno']) ? $data['sortno'] : null;
        $this->container['payallfl'] = isset($data['payallfl']) ? $data['payallfl'] : null;
        $this->container['user1'] = isset($data['user1']) ? $data['user1'] : null;
        $this->container['user2'] = isset($data['user2']) ? $data['user2'] : null;
        $this->container['user3'] = isset($data['user3']) ? $data['user3'] : null;
        $this->container['user4'] = isset($data['user4']) ? $data['user4'] : null;
        $this->container['user5'] = isset($data['user5']) ? $data['user5'] : null;
        $this->container['user6'] = isset($data['user6']) ? $data['user6'] : null;
        $this->container['user7'] = isset($data['user7']) ? $data['user7'] : null;
        $this->container['user8'] = isset($data['user8']) ? $data['user8'] : null;
        $this->container['user9'] = isset($data['user9']) ? $data['user9'] : null;
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
     * Gets listtype
     *
     * @return string
     */
    public function getListtype()
    {
        return $this->container['listtype'];
    }

    /**
     * Sets listtype
     *
     * @param string $listtype listtype
     *
     * @return $this
     */
    public function setListtype($listtype)
    {
        $this->container['listtype'] = $listtype;

        return $this;
    }

    /**
     * Gets seqno
     *
     * @return int
     */
    public function getSeqno()
    {
        return $this->container['seqno'];
    }

    /**
     * Sets seqno
     *
     * @param int $seqno seqno
     *
     * @return $this
     */
    public function setSeqno($seqno)
    {
        $this->container['seqno'] = $seqno;

        return $this;
    }

    /**
     * Gets custno
     *
     * @return double
     */
    public function getCustno()
    {
        return $this->container['custno'];
    }

    /**
     * Sets custno
     *
     * @param double $custno custno
     *
     * @return $this
     */
    public function setCustno($custno)
    {
        $this->container['custno'] = $custno;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets checkno
     *
     * @return double
     */
    public function getCheckno()
    {
        return $this->container['checkno'];
    }

    /**
     * Sets checkno
     *
     * @param double $checkno checkno
     *
     * @return $this
     */
    public function setCheckno($checkno)
    {
        $this->container['checkno'] = $checkno;

        return $this;
    }

    /**
     * Gets jrnlno
     *
     * @return int
     */
    public function getJrnlno()
    {
        return $this->container['jrnlno'];
    }

    /**
     * Sets jrnlno
     *
     * @param int $jrnlno jrnlno
     *
     * @return $this
     */
    public function setJrnlno($jrnlno)
    {
        $this->container['jrnlno'] = $jrnlno;

        return $this;
    }

    /**
     * Gets orderno
     *
     * @return int
     */
    public function getOrderno()
    {
        return $this->container['orderno'];
    }

    /**
     * Sets orderno
     *
     * @param int $orderno orderno
     *
     * @return $this
     */
    public function setOrderno($orderno)
    {
        $this->container['orderno'] = $orderno;

        return $this;
    }

    /**
     * Gets ordersuf
     *
     * @return int
     */
    public function getOrdersuf()
    {
        return $this->container['ordersuf'];
    }

    /**
     * Sets ordersuf
     *
     * @param int $ordersuf ordersuf
     *
     * @return $this
     */
    public function setOrdersuf($ordersuf)
    {
        $this->container['ordersuf'] = $ordersuf;

        return $this;
    }

    /**
     * Gets route
     *
     * @return string
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     *
     * @param string $route route
     *
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

        return $this;
    }

    /**
     * Gets reprintfl
     *
     * @return bool
     */
    public function getReprintfl()
    {
        return $this->container['reprintfl'];
    }

    /**
     * Sets reprintfl
     *
     * @param bool $reprintfl reprintfl
     *
     * @return $this
     */
    public function setReprintfl($reprintfl)
    {
        $this->container['reprintfl'] = $reprintfl;

        return $this;
    }

    /**
     * Gets outputty
     *
     * @return string
     */
    public function getOutputty()
    {
        return $this->container['outputty'];
    }

    /**
     * Sets outputty
     *
     * @param string $outputty outputty
     *
     * @return $this
     */
    public function setOutputty($outputty)
    {
        $this->container['outputty'] = $outputty;

        return $this;
    }

    /**
     * Gets shipto
     *
     * @return string
     */
    public function getShipto()
    {
        return $this->container['shipto'];
    }

    /**
     * Sets shipto
     *
     * @param string $shipto shipto
     *
     * @return $this
     */
    public function setShipto($shipto)
    {
        $this->container['shipto'] = $shipto;

        return $this;
    }

    /**
     * Gets operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
     * Sets operator
     *
     * @param string $operator operator
     *
     * @return $this
     */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;

        return $this;
    }

    /**
     * Gets prodcat
     *
     * @return string
     */
    public function getProdcat()
    {
        return $this->container['prodcat'];
    }

    /**
     * Sets prodcat
     *
     * @param string $prodcat prodcat
     *
     * @return $this
     */
    public function setProdcat($prodcat)
    {
        $this->container['prodcat'] = $prodcat;

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
     * Gets apinvno
     *
     * @return string
     */
    public function getApinvno()
    {
        return $this->container['apinvno'];
    }

    /**
     * Sets apinvno
     *
     * @param string $apinvno apinvno
     *
     * @return $this
     */
    public function setApinvno($apinvno)
    {
        $this->container['apinvno'] = $apinvno;

        return $this;
    }

    /**
     * Gets type
     *
     * @return bool
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param bool $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets allfl
     *
     * @return bool
     */
    public function getAllfl()
    {
        return $this->container['allfl'];
    }

    /**
     * Sets allfl
     *
     * @param bool $allfl allfl
     *
     * @return $this
     */
    public function setAllfl($allfl)
    {
        $this->container['allfl'] = $allfl;

        return $this;
    }

    /**
     * Gets seqno2
     *
     * @return double
     */
    public function getSeqno2()
    {
        return $this->container['seqno2'];
    }

    /**
     * Sets seqno2
     *
     * @param double $seqno2 seqno2
     *
     * @return $this
     */
    public function setSeqno2($seqno2)
    {
        $this->container['seqno2'] = $seqno2;

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
     * Gets selecttype
     *
     * @return string
     */
    public function getSelecttype()
    {
        return $this->container['selecttype'];
    }

    /**
     * Sets selecttype
     *
     * @param string $selecttype selecttype
     *
     * @return $this
     */
    public function setSelecttype($selecttype)
    {
        $this->container['selecttype'] = $selecttype;

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
     * Gets sortno
     *
     * @return int
     */
    public function getSortno()
    {
        return $this->container['sortno'];
    }

    /**
     * Sets sortno
     *
     * @param int $sortno sortno
     *
     * @return $this
     */
    public function setSortno($sortno)
    {
        $this->container['sortno'] = $sortno;

        return $this;
    }

    /**
     * Gets payallfl
     *
     * @return bool
     */
    public function getPayallfl()
    {
        return $this->container['payallfl'];
    }

    /**
     * Sets payallfl
     *
     * @param bool $payallfl payallfl
     *
     * @return $this
     */
    public function setPayallfl($payallfl)
    {
        $this->container['payallfl'] = $payallfl;

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


