<?php
/**
 * CampaignDataInput
 *
 * PHP version 5
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * RadioManager
 *
 * RadioManager
 *
 * OpenAPI spec version: 2.0
 * Contact: support@pluxbox.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.0
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RadioManager\Model;

use \ArrayAccess;
use \RadioManager\ObjectSerializer;

/**
 * CampaignDataInput Class Doc Comment
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignDataInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CampaignDataInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'model_type_id' => 'int',
        'field_values' => 'object',
        'title' => 'string',
        'start' => '\DateTime',
        'stop' => '\DateTime',
        'recommended' => 'bool',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'model_type_id' => 'int64',
        'field_values' => null,
        'title' => null,
        'start' => 'date-time',
        'stop' => 'date-time',
        'recommended' => null,
        'description' => null
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
        'model_type_id' => 'model_type_id',
        'field_values' => 'field_values',
        'title' => 'title',
        'start' => 'start',
        'stop' => 'stop',
        'recommended' => 'recommended',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'model_type_id' => 'setModelTypeId',
        'field_values' => 'setFieldValues',
        'title' => 'setTitle',
        'start' => 'setStart',
        'stop' => 'setStop',
        'recommended' => 'setRecommended',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'model_type_id' => 'getModelTypeId',
        'field_values' => 'getFieldValues',
        'title' => 'getTitle',
        'start' => 'getStart',
        'stop' => 'getStop',
        'recommended' => 'getRecommended',
        'description' => 'getDescription'
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
        $this->container['model_type_id'] = isset($data['model_type_id']) ? $data['model_type_id'] : null;
        $this->container['field_values'] = isset($data['field_values']) ? $data['field_values'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['stop'] = isset($data['stop']) ? $data['stop'] : null;
        $this->container['recommended'] = isset($data['recommended']) ? $data['recommended'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['model_type_id'] === null) {
            $invalidProperties[] = "'model_type_id' can't be null";
        }
        if ($this->container['start'] === null) {
            $invalidProperties[] = "'start' can't be null";
        }
        if ($this->container['stop'] === null) {
            $invalidProperties[] = "'stop' can't be null";
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

        if ($this->container['model_type_id'] === null) {
            return false;
        }
        if ($this->container['start'] === null) {
            return false;
        }
        if ($this->container['stop'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets model_type_id
     *
     * @return int
     */
    public function getModelTypeId()
    {
        return $this->container['model_type_id'];
    }

    /**
     * Sets model_type_id
     *
     * @param int $model_type_id model_type_id
     *
     * @return $this
     */
    public function setModelTypeId($model_type_id)
    {
        $this->container['model_type_id'] = $model_type_id;

        return $this;
    }

    /**
     * Gets field_values
     *
     * @return object
     */
    public function getFieldValues()
    {
        return $this->container['field_values'];
    }

    /**
     * Sets field_values
     *
     * @param object $field_values field_values
     *
     * @return $this
     */
    public function setFieldValues($field_values)
    {
        $this->container['field_values'] = $field_values;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     *
     * @param \DateTime $start start
     *
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets stop
     *
     * @return \DateTime
     */
    public function getStop()
    {
        return $this->container['stop'];
    }

    /**
     * Sets stop
     *
     * @param \DateTime $stop stop
     *
     * @return $this
     */
    public function setStop($stop)
    {
        $this->container['stop'] = $stop;

        return $this;
    }

    /**
     * Gets recommended
     *
     * @return bool
     */
    public function getRecommended()
    {
        return $this->container['recommended'];
    }

    /**
     * Sets recommended
     *
     * @param bool $recommended recommended
     *
     * @return $this
     */
    public function setRecommended($recommended)
    {
        $this->container['recommended'] = $recommended;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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


