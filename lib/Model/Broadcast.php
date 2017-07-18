<?php
/**
 * Broadcast
 *
 * PHP version 5
 *
 * @category Class
 * @package  RadioManager
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Pluxbox Radiomanager Client
 *
 * Pluxbox RadioManager gives you the power, flexibility and speed you always wanted in a lightweight and easy-to-use web-based radio solution. With Pluxbox RadioManager you can organise your radio workflow and automate your omnichannel communication with your listeners. We offer wide range specialised services for the radio and connections like Hybrid Radio, Visual Radio, your website and social media without losing focus on your broadcast. For more information visit https://pluxbox.com
 *
 * OpenAPI spec version: 2.0
 * Contact: support@pluxbox.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RadioManager\Model;

use \ArrayAccess;

/**
 * Broadcast Class Doc Comment
 *
 * @category    Class
 * @package     RadioManager
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Broadcast implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Broadcast';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'program_id' => 'int',
        'model_type_id' => 'int',
        'station_id' => 'int',
        'field_values' => '\RadioManager\Model\BroadcastFieldValues',
        'title' => 'string',
        'start' => '\DateTime',
        'stop' => '\DateTime',
        'genre_id' => 'int',
        'description' => 'string',
        'short_name' => 'string',
        'medium_name' => 'string',
        'website' => 'string',
        'email' => 'string',
        'recommended' => 'bool',
        'language' => 'string',
        'published' => 'bool',
        'repetition_uid' => 'string',
        'repetition_type' => 'string',
        'repetition_end' => '\DateTime',
        'repetition_start' => '\DateTime',
        'repetition_days' => 'bool[]',
        'pty_code_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'program_id' => 'int64',
        'model_type_id' => 'int64',
        'station_id' => 'int64',
        'field_values' => null,
        'title' => null,
        'start' => 'date-time',
        'stop' => 'date-time',
        'genre_id' => 'int64',
        'description' => null,
        'short_name' => null,
        'medium_name' => null,
        'website' => null,
        'email' => null,
        'recommended' => null,
        'language' => null,
        'published' => null,
        'repetition_uid' => 'uuid',
        'repetition_type' => null,
        'repetition_end' => 'date-time',
        'repetition_start' => 'date-time',
        'repetition_days' => null,
        'pty_code_id' => 'int64'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'program_id' => 'program_id',
        'model_type_id' => 'model_type_id',
        'station_id' => 'station_id',
        'field_values' => 'field_values',
        'title' => 'title',
        'start' => 'start',
        'stop' => 'stop',
        'genre_id' => 'genre_id',
        'description' => 'description',
        'short_name' => 'short_name',
        'medium_name' => 'medium_name',
        'website' => 'website',
        'email' => 'email',
        'recommended' => 'recommended',
        'language' => 'language',
        'published' => 'published',
        'repetition_uid' => 'repetition_uid',
        'repetition_type' => 'repetition_type',
        'repetition_end' => 'repetition_end',
        'repetition_start' => 'repetition_start',
        'repetition_days' => 'repetition_days',
        'pty_code_id' => 'pty_code_id'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'program_id' => 'setProgramId',
        'model_type_id' => 'setModelTypeId',
        'station_id' => 'setStationId',
        'field_values' => 'setFieldValues',
        'title' => 'setTitle',
        'start' => 'setStart',
        'stop' => 'setStop',
        'genre_id' => 'setGenreId',
        'description' => 'setDescription',
        'short_name' => 'setShortName',
        'medium_name' => 'setMediumName',
        'website' => 'setWebsite',
        'email' => 'setEmail',
        'recommended' => 'setRecommended',
        'language' => 'setLanguage',
        'published' => 'setPublished',
        'repetition_uid' => 'setRepetitionUid',
        'repetition_type' => 'setRepetitionType',
        'repetition_end' => 'setRepetitionEnd',
        'repetition_start' => 'setRepetitionStart',
        'repetition_days' => 'setRepetitionDays',
        'pty_code_id' => 'setPtyCodeId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'program_id' => 'getProgramId',
        'model_type_id' => 'getModelTypeId',
        'station_id' => 'getStationId',
        'field_values' => 'getFieldValues',
        'title' => 'getTitle',
        'start' => 'getStart',
        'stop' => 'getStop',
        'genre_id' => 'getGenreId',
        'description' => 'getDescription',
        'short_name' => 'getShortName',
        'medium_name' => 'getMediumName',
        'website' => 'getWebsite',
        'email' => 'getEmail',
        'recommended' => 'getRecommended',
        'language' => 'getLanguage',
        'published' => 'getPublished',
        'repetition_uid' => 'getRepetitionUid',
        'repetition_type' => 'getRepetitionType',
        'repetition_end' => 'getRepetitionEnd',
        'repetition_start' => 'getRepetitionStart',
        'repetition_days' => 'getRepetitionDays',
        'pty_code_id' => 'getPtyCodeId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const REPETITION_TYPE__1_WEEK = '1 week';
    const REPETITION_TYPE__2_WEEKS = '2 weeks';
    const REPETITION_TYPE__4_WEEKS = '4 weeks';
    const REPETITION_TYPE__1_MONTH = '1 month';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getRepetitionTypeAllowableValues()
    {
        return [
            self::REPETITION_TYPE__1_WEEK,
            self::REPETITION_TYPE__2_WEEKS,
            self::REPETITION_TYPE__4_WEEKS,
            self::REPETITION_TYPE__1_MONTH,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['program_id'] = isset($data['program_id']) ? $data['program_id'] : null;
        $this->container['model_type_id'] = isset($data['model_type_id']) ? $data['model_type_id'] : null;
        $this->container['station_id'] = isset($data['station_id']) ? $data['station_id'] : null;
        $this->container['field_values'] = isset($data['field_values']) ? $data['field_values'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['stop'] = isset($data['stop']) ? $data['stop'] : null;
        $this->container['genre_id'] = isset($data['genre_id']) ? $data['genre_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['short_name'] = isset($data['short_name']) ? $data['short_name'] : null;
        $this->container['medium_name'] = isset($data['medium_name']) ? $data['medium_name'] : null;
        $this->container['website'] = isset($data['website']) ? $data['website'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['recommended'] = isset($data['recommended']) ? $data['recommended'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['published'] = isset($data['published']) ? $data['published'] : null;
        $this->container['repetition_uid'] = isset($data['repetition_uid']) ? $data['repetition_uid'] : null;
        $this->container['repetition_type'] = isset($data['repetition_type']) ? $data['repetition_type'] : null;
        $this->container['repetition_end'] = isset($data['repetition_end']) ? $data['repetition_end'] : null;
        $this->container['repetition_start'] = isset($data['repetition_start']) ? $data['repetition_start'] : null;
        $this->container['repetition_days'] = isset($data['repetition_days']) ? $data['repetition_days'] : null;
        $this->container['pty_code_id'] = isset($data['pty_code_id']) ? $data['pty_code_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        $allowed_values = $this->getRepetitionTypeAllowableValues();
        if (!in_array($this->container['repetition_type'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'repetition_type', must be one of '%s'",
                implode("', '", $allowed_values)
            );
        }

        if (!is_null($this->container['pty_code_id']) && ($this->container['pty_code_id'] < 1)) {
            $invalid_properties[] = "invalid value for 'pty_code_id', must be bigger than or equal to 1.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        $allowed_values = $this->getRepetitionTypeAllowableValues();
        if (!in_array($this->container['repetition_type'], $allowed_values)) {
            return false;
        }
        if ($this->container['pty_code_id'] < 1) {
            return false;
        }
        return true;
    }


    /**
     * Gets program_id
     * @return int
     */
    public function getProgramId()
    {
        return $this->container['program_id'];
    }

    /**
     * Sets program_id
     * @param int $program_id
     * @return $this
     */
    public function setProgramId($program_id)
    {
        $this->container['program_id'] = $program_id;

        return $this;
    }

    /**
     * Gets model_type_id
     * @return int
     */
    public function getModelTypeId()
    {
        return $this->container['model_type_id'];
    }

    /**
     * Sets model_type_id
     * @param int $model_type_id
     * @return $this
     */
    public function setModelTypeId($model_type_id)
    {
        $this->container['model_type_id'] = $model_type_id;

        return $this;
    }

    /**
     * Gets station_id
     * @return int
     */
    public function getStationId()
    {
        return $this->container['station_id'];
    }

    /**
     * Sets station_id
     * @param int $station_id
     * @return $this
     */
    public function setStationId($station_id)
    {
        $this->container['station_id'] = $station_id;

        return $this;
    }

    /**
     * Gets field_values
     * @return \RadioManager\Model\BroadcastFieldValues
     */
    public function getFieldValues()
    {
        return $this->container['field_values'];
    }

    /**
     * Sets field_values
     * @param \RadioManager\Model\BroadcastFieldValues $field_values
     * @return $this
     */
    public function setFieldValues($field_values)
    {
        $this->container['field_values'] = $field_values;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets start
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->container['start'];
    }

    /**
     * Sets start
     * @param \DateTime $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->container['start'] = $start;

        return $this;
    }

    /**
     * Gets stop
     * @return \DateTime
     */
    public function getStop()
    {
        return $this->container['stop'];
    }

    /**
     * Sets stop
     * @param \DateTime $stop
     * @return $this
     */
    public function setStop($stop)
    {
        $this->container['stop'] = $stop;

        return $this;
    }

    /**
     * Gets genre_id
     * @return int
     */
    public function getGenreId()
    {
        return $this->container['genre_id'];
    }

    /**
     * Sets genre_id
     * @param int $genre_id
     * @return $this
     */
    public function setGenreId($genre_id)
    {
        $this->container['genre_id'] = $genre_id;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets short_name
     * @return string
     */
    public function getShortName()
    {
        return $this->container['short_name'];
    }

    /**
     * Sets short_name
     * @param string $short_name
     * @return $this
     */
    public function setShortName($short_name)
    {
        $this->container['short_name'] = $short_name;

        return $this;
    }

    /**
     * Gets medium_name
     * @return string
     */
    public function getMediumName()
    {
        return $this->container['medium_name'];
    }

    /**
     * Sets medium_name
     * @param string $medium_name
     * @return $this
     */
    public function setMediumName($medium_name)
    {
        $this->container['medium_name'] = $medium_name;

        return $this;
    }

    /**
     * Gets website
     * @return string
     */
    public function getWebsite()
    {
        return $this->container['website'];
    }

    /**
     * Sets website
     * @param string $website
     * @return $this
     */
    public function setWebsite($website)
    {
        $this->container['website'] = $website;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets recommended
     * @return bool
     */
    public function getRecommended()
    {
        return $this->container['recommended'];
    }

    /**
     * Sets recommended
     * @param bool $recommended
     * @return $this
     */
    public function setRecommended($recommended)
    {
        $this->container['recommended'] = $recommended;

        return $this;
    }

    /**
     * Gets language
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     * @param string $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets published
     * @return bool
     */
    public function getPublished()
    {
        return $this->container['published'];
    }

    /**
     * Sets published
     * @param bool $published
     * @return $this
     */
    public function setPublished($published)
    {
        $this->container['published'] = $published;

        return $this;
    }

    /**
     * Gets repetition_uid
     * @return string
     */
    public function getRepetitionUid()
    {
        return $this->container['repetition_uid'];
    }

    /**
     * Sets repetition_uid
     * @param string $repetition_uid
     * @return $this
     */
    public function setRepetitionUid($repetition_uid)
    {
        $this->container['repetition_uid'] = $repetition_uid;

        return $this;
    }

    /**
     * Gets repetition_type
     * @return string
     */
    public function getRepetitionType()
    {
        return $this->container['repetition_type'];
    }

    /**
     * Sets repetition_type
     * @param string $repetition_type
     * @return $this
     */
    public function setRepetitionType($repetition_type)
    {
        $allowed_values = $this->getRepetitionTypeAllowableValues();
        if (!is_null($repetition_type) && !in_array($repetition_type, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'repetition_type', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['repetition_type'] = $repetition_type;

        return $this;
    }

    /**
     * Gets repetition_end
     * @return \DateTime
     */
    public function getRepetitionEnd()
    {
        return $this->container['repetition_end'];
    }

    /**
     * Sets repetition_end
     * @param \DateTime $repetition_end
     * @return $this
     */
    public function setRepetitionEnd($repetition_end)
    {
        $this->container['repetition_end'] = $repetition_end;

        return $this;
    }

    /**
     * Gets repetition_start
     * @return \DateTime
     */
    public function getRepetitionStart()
    {
        return $this->container['repetition_start'];
    }

    /**
     * Sets repetition_start
     * @param \DateTime $repetition_start
     * @return $this
     */
    public function setRepetitionStart($repetition_start)
    {
        $this->container['repetition_start'] = $repetition_start;

        return $this;
    }

    /**
     * Gets repetition_days
     * @return bool[]
     */
    public function getRepetitionDays()
    {
        return $this->container['repetition_days'];
    }

    /**
     * Sets repetition_days
     * @param bool[] $repetition_days
     * @return $this
     */
    public function setRepetitionDays($repetition_days)
    {
        $this->container['repetition_days'] = $repetition_days;

        return $this;
    }

    /**
     * Gets pty_code_id
     * @return int
     */
    public function getPtyCodeId()
    {
        return $this->container['pty_code_id'];
    }

    /**
     * Sets pty_code_id
     * @param int $pty_code_id
     * @return $this
     */
    public function setPtyCodeId($pty_code_id)
    {

        if (!is_null($pty_code_id) && ($pty_code_id < 1)) {
            throw new \InvalidArgumentException('invalid value for $pty_code_id when calling Broadcast., must be bigger than or equal to 1.');
        }

        $this->container['pty_code_id'] = $pty_code_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\RadioManager\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\RadioManager\ObjectSerializer::sanitizeForSerialization($this));
    }
}


