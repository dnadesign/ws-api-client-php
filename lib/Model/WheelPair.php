<?php
/**
 * WheelPair
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
 * WheelPair Class Doc Comment
 *
 * @category Class
 * @package  WsApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WheelPair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WheelPair';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'showing_fp_only' => 'bool',
        'is_stock' => 'bool',
        'front' => '\WsApiClient\Model\Wheel',
        'rear' => '\WsApiClient\Model\Wheel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'showing_fp_only' => null,
        'is_stock' => null,
        'front' => null,
        'rear' => null
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
        'showing_fp_only' => 'showing_fp_only',
        'is_stock' => 'is_stock',
        'front' => 'front',
        'rear' => 'rear'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'showing_fp_only' => 'setShowingFpOnly',
        'is_stock' => 'setIsStock',
        'front' => 'setFront',
        'rear' => 'setRear'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'showing_fp_only' => 'getShowingFpOnly',
        'is_stock' => 'getIsStock',
        'front' => 'getFront',
        'rear' => 'getRear'
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
        $this->container['showing_fp_only'] = isset($data['showing_fp_only']) ? $data['showing_fp_only'] : null;
        $this->container['is_stock'] = isset($data['is_stock']) ? $data['is_stock'] : null;
        $this->container['front'] = isset($data['front']) ? $data['front'] : null;
        $this->container['rear'] = isset($data['rear']) ? $data['rear'] : null;
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
     * Gets showing_fp_only
     *
     * @return bool
     */
    public function getShowingFpOnly()
    {
        return $this->container['showing_fp_only'];
    }

    /**
     * Sets showing_fp_only
     *
     * @param bool $showing_fp_only Show front pair only
     *
     * @return $this
     */
    public function setShowingFpOnly($showing_fp_only)
    {
        $this->container['showing_fp_only'] = $showing_fp_only;

        return $this;
    }

    /**
     * Gets is_stock
     *
     * @return bool
     */
    public function getIsStock()
    {
        return $this->container['is_stock'];
    }

    /**
     * Sets is_stock
     *
     * @param bool $is_stock Original Equipment (OE)
     *
     * @return $this
     */
    public function setIsStock($is_stock)
    {
        $this->container['is_stock'] = $is_stock;

        return $this;
    }

    /**
     * Gets front
     *
     * @return \WsApiClient\Model\Wheel
     */
    public function getFront()
    {
        return $this->container['front'];
    }

    /**
     * Sets front
     *
     * @param \WsApiClient\Model\Wheel $front front
     *
     * @return $this
     */
    public function setFront($front)
    {
        $this->container['front'] = $front;

        return $this;
    }

    /**
     * Gets rear
     *
     * @return \WsApiClient\Model\Wheel
     */
    public function getRear()
    {
        return $this->container['rear'];
    }

    /**
     * Sets rear
     *
     * @param \WsApiClient\Model\Wheel $rear rear
     *
     * @return $this
     */
    public function setRear($rear)
    {
        $this->container['rear'] = $rear;

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


