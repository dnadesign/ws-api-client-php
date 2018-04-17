<?php
/**
 * Market
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
 * Market Class Doc Comment
 *
 * @category Class
 * @package  WsApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Market implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Market';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'slug' => 'string',
        'abbr' => 'string',
        'name' => 'string',
        'name_en' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'slug' => 'slug',
        'abbr' => null,
        'name' => null,
        'name_en' => null
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
        'slug' => 'slug',
        'abbr' => 'abbr',
        'name' => 'name',
        'name_en' => 'name_en'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'slug' => 'setSlug',
        'abbr' => 'setAbbr',
        'name' => 'setName',
        'name_en' => 'setNameEn'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'slug' => 'getSlug',
        'abbr' => 'getAbbr',
        'name' => 'getName',
        'name_en' => 'getNameEn'
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
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['abbr'] = isset($data['abbr']) ? $data['abbr'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['name_en'] = isset($data['name_en']) ? $data['name_en'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['slug'] === null) {
            $invalidProperties[] = "'slug' can't be null";
        }
        if (!preg_match("/^[-a-zA-Z0-9_]+$/", $this->container['slug'])) {
            $invalidProperties[] = "invalid value for 'slug', must be conform to the pattern /^[-a-zA-Z0-9_]+$/.";
        }

        if ($this->container['abbr'] === null) {
            $invalidProperties[] = "'abbr' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['name_en'] === null) {
            $invalidProperties[] = "'name_en' can't be null";
        }
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

        if ($this->container['slug'] === null) {
            return false;
        }
        if (!preg_match("/^[-a-zA-Z0-9_]+$/", $this->container['slug'])) {
            return false;
        }
        if ($this->container['abbr'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['name_en'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug Market slug name (e.g. `eudm`)
     *
     * @return $this
     */
    public function setSlug($slug)
    {

        if ((!preg_match("/^[-a-zA-Z0-9_]+$/", $slug))) {
            throw new \InvalidArgumentException("invalid value for $slug when calling Market., must conform to the pattern /^[-a-zA-Z0-9_]+$/.");
        }

        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets abbr
     *
     * @return string
     */
    public function getAbbr()
    {
        return $this->container['abbr'];
    }

    /**
     * Sets abbr
     *
     * @param string $abbr Market abbreviation (e.g. `EUDM`)
     *
     * @return $this
     */
    public function setAbbr($abbr)
    {
        $this->container['abbr'] = $abbr;

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
     * @param string $name Market name (e.g. `European domestic market`)
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets name_en
     *
     * @return string
     */
    public function getNameEn()
    {
        return $this->container['name_en'];
    }

    /**
     * Sets name_en
     *
     * @param string $name_en Original english name. Use it along with _**`lang`**_ query parameter
     *
     * @return $this
     */
    public function setNameEn($name_en)
    {
        $this->container['name_en'] = $name_en;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
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


