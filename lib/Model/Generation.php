<?php
/**
 * Generation
 *
 * PHP version 5
 *
 * @category Class
 * @package  WsApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wheel Fitment API
 *
 * The Wheel Fitment API allows for programmatic access to the database of www.wheel-size.com and its services. Use this API to retrieve information about vehicle fitment database for rims and tires, including OE and option fitments, and plus/minus sizing fitment information. A variety of country and language specific options are available. The coverage of fitment data for vehicles manufactured since 2000 is nearly 100%.  The information about fitment data is updated on a daily basis.
 *
 * OpenAPI spec version: v1
 * Contact: info@wheel-size.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WsApiClient\Model;

use \ArrayAccess;
use \WsApiClient\ObjectSerializer;

/**
 * Generation Class Doc Comment
 *
 * @category Class
 * @package  WsApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Generation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Generation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'name' => 'string',
        'bodies' => '\WsApiClient\Model\Body[]',
        'start_year' => 'int',
        'end_year' => 'int',
        'years' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'name' => null,
        'bodies' => null,
        'start_year' => null,
        'end_year' => null,
        'years' => null
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
        'name' => 'name',
        'bodies' => 'bodies',
        'start_year' => 'start_year',
        'end_year' => 'end_year',
        'years' => 'years'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'bodies' => 'setBodies',
        'start_year' => 'setStartYear',
        'end_year' => 'setEndYear',
        'years' => 'setYears'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'bodies' => 'getBodies',
        'start_year' => 'getStartYear',
        'end_year' => 'getEndYear',
        'years' => 'getYears'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['bodies'] = isset($data['bodies']) ? $data['bodies'] : null;
        $this->container['start_year'] = isset($data['start_year']) ? $data['start_year'] : null;
        $this->container['end_year'] = isset($data['end_year']) ? $data['end_year'] : null;
        $this->container['years'] = isset($data['years']) ? $data['years'] : null;
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

        return true;
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
     * @param string $name Generation name (e.g. `III Restyling`)
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets bodies
     *
     * @return \WsApiClient\Model\Body[]
     */
    public function getBodies()
    {
        return $this->container['bodies'];
    }

    /**
     * Sets bodies
     *
     * @param \WsApiClient\Model\Body[] $bodies bodies
     *
     * @return $this
     */
    public function setBodies($bodies)
    {
        $this->container['bodies'] = $bodies;

        return $this;
    }

    /**
     * Gets start_year
     *
     * @return int
     */
    public function getStartYear()
    {
        return $this->container['start_year'];
    }

    /**
     * Sets start_year
     *
     * @param int $start_year Generation start year
     *
     * @return $this
     */
    public function setStartYear($start_year)
    {
        $this->container['start_year'] = $start_year;

        return $this;
    }

    /**
     * Gets end_year
     *
     * @return int
     */
    public function getEndYear()
    {
        return $this->container['end_year'];
    }

    /**
     * Sets end_year
     *
     * @param int $end_year Generation end year. It equals to the __*`current year + 1`*__ if it is still in production.
     *
     * @return $this
     */
    public function setEndYear($end_year)
    {
        $this->container['end_year'] = $end_year;

        return $this;
    }

    /**
     * Gets years
     *
     * @return int[]
     */
    public function getYears()
    {
        return $this->container['years'];
    }

    /**
     * Sets years
     *
     * @param int[] $years Generation production years
     *
     * @return $this
     */
    public function setYears($years)
    {
        $this->container['years'] = $years;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


