<?php
/**
 * ItemDataInput
 *
 * PHP version 5
 *
 * @category Class
 * @package  RadioManager
 * @author   Swaagger Codegen team
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
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RadioManager\RadioManagerModels;

use \ArrayAccess;

/**
 * ItemDataInput Class Doc Comment
 *
 * @category    Class
 * @package     RadioManager
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ItemDataInput implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ItemDataInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'model_type_id' => 'int',
        'block_id' => 'int',
        'external_id' => 'int',
        'field_values' => '\RadioManager\RadioManagerModels\ImportItemFieldValues',
        'title' => 'string',
        'duration' => 'int',
        'start' => '\DateTime',
        'status' => 'string',
        'import' => 'int',
        'campaign_id' => 'int',
        'recommended' => 'bool',
        'station_draft_id' => 'int',
        'program_draft_id' => 'int',
        'user_draft_id' => 'int',
        'static_start' => 'bool',
        'details' => 'string',
        'previous_id' => 'int',
        'contacts' => 'int[]',
        'tags' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'model_type_id' => 'int64',
        'block_id' => 'int64',
        'external_id' => 'int64',
        'field_values' => null,
        'title' => null,
        'duration' => 'int64',
        'start' => 'date-time',
        'status' => null,
        'import' => 'int64',
        'campaign_id' => 'int64',
        'recommended' => null,
        'station_draft_id' => 'int64',
        'program_draft_id' => 'int64',
        'user_draft_id' => 'int64',
        'static_start' => null,
        'details' => null,
        'previous_id' => 'int64',
        'contacts' => null,
        'tags' => null
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
        'model_type_id' => 'model_type_id',
        'block_id' => 'block_id',
        'external_id' => 'external_id',
        'field_values' => 'field_values',
        'title' => 'title',
        'duration' => 'duration',
        'start' => 'start',
        'status' => 'status',
        'import' => 'import',
        'campaign_id' => 'campaign_id',
        'recommended' => 'recommended',
        'station_draft_id' => 'station_draft_id',
        'program_draft_id' => 'program_draft_id',
        'user_draft_id' => 'user_draft_id',
        'static_start' => 'static_start',
        'details' => 'details',
        'previous_id' => 'previous_id',
        'contacts' => 'contacts',
        'tags' => 'tags'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'model_type_id' => 'setModelTypeId',
        'block_id' => 'setBlockId',
        'external_id' => 'setExternalId',
        'field_values' => 'setFieldValues',
        'title' => 'setTitle',
        'duration' => 'setDuration',
        'start' => 'setStart',
        'status' => 'setStatus',
        'import' => 'setImport',
        'campaign_id' => 'setCampaignId',
        'recommended' => 'setRecommended',
        'station_draft_id' => 'setStationDraftId',
        'program_draft_id' => 'setProgramDraftId',
        'user_draft_id' => 'setUserDraftId',
        'static_start' => 'setStaticStart',
        'details' => 'setDetails',
        'previous_id' => 'setPreviousId',
        'contacts' => 'setContacts',
        'tags' => 'setTags'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'model_type_id' => 'getModelTypeId',
        'block_id' => 'getBlockId',
        'external_id' => 'getExternalId',
        'field_values' => 'getFieldValues',
        'title' => 'getTitle',
        'duration' => 'getDuration',
        'start' => 'getStart',
        'status' => 'getStatus',
        'import' => 'getImport',
        'campaign_id' => 'getCampaignId',
        'recommended' => 'getRecommended',
        'station_draft_id' => 'getStationDraftId',
        'program_draft_id' => 'getProgramDraftId',
        'user_draft_id' => 'getUserDraftId',
        'static_start' => 'getStaticStart',
        'details' => 'getDetails',
        'previous_id' => 'getPreviousId',
        'contacts' => 'getContacts',
        'tags' => 'getTags'
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

    const STATUS_SCHEDULED = 'scheduled';
    const STATUS_PLAYING = 'playing';
    const STATUS_PLAYED = 'played';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SCHEDULED,
            self::STATUS_PLAYING,
            self::STATUS_PLAYED,
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
        $this->container['model_type_id'] = isset($data['model_type_id']) ? $data['model_type_id'] : null;
        $this->container['block_id'] = isset($data['block_id']) ? $data['block_id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['field_values'] = isset($data['field_values']) ? $data['field_values'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['start'] = isset($data['start']) ? $data['start'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['import'] = isset($data['import']) ? $data['import'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['recommended'] = isset($data['recommended']) ? $data['recommended'] : null;
        $this->container['station_draft_id'] = isset($data['station_draft_id']) ? $data['station_draft_id'] : null;
        $this->container['program_draft_id'] = isset($data['program_draft_id']) ? $data['program_draft_id'] : null;
        $this->container['user_draft_id'] = isset($data['user_draft_id']) ? $data['user_draft_id'] : null;
        $this->container['static_start'] = isset($data['static_start']) ? $data['static_start'] : null;
        $this->container['details'] = isset($data['details']) ? $data['details'] : null;
        $this->container['previous_id'] = isset($data['previous_id']) ? $data['previous_id'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['model_type_id'] === null) {
            $invalid_properties[] = "'model_type_id' can't be null";
        }
        if ($this->container['external_id'] === null) {
            $invalid_properties[] = "'external_id' can't be null";
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowed_values)
            );
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

        if ($this->container['model_type_id'] === null) {
            return false;
        }
        if ($this->container['external_id'] === null) {
            return false;
        }
        $allowed_values = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
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
     * Gets block_id
     * @return int
     */
    public function getBlockId()
    {
        return $this->container['block_id'];
    }

    /**
     * Sets block_id
     * @param int $block_id
     * @return $this
     */
    public function setBlockId($block_id)
    {
        $this->container['block_id'] = $block_id;

        return $this;
    }

    /**
     * Gets external_id
     * @return int
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     * @param int $external_id
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets field_values
     * @return \RadioManager\RadioManagerModels\ImportItemFieldValues
     */
    public function getFieldValues()
    {
        return $this->container['field_values'];
    }

    /**
     * Sets field_values
     * @param \RadioManager\RadioManagerModels\ImportItemFieldValues $field_values
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
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

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
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowed_values)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets import
     * @return int
     */
    public function getImport()
    {
        return $this->container['import'];
    }

    /**
     * Sets import
     * @param int $import
     * @return $this
     */
    public function setImport($import)
    {
        $this->container['import'] = $import;

        return $this;
    }

    /**
     * Gets campaign_id
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     * @param int $campaign_id
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

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
     * Gets station_draft_id
     * @return int
     */
    public function getStationDraftId()
    {
        return $this->container['station_draft_id'];
    }

    /**
     * Sets station_draft_id
     * @param int $station_draft_id
     * @return $this
     */
    public function setStationDraftId($station_draft_id)
    {
        $this->container['station_draft_id'] = $station_draft_id;

        return $this;
    }

    /**
     * Gets program_draft_id
     * @return int
     */
    public function getProgramDraftId()
    {
        return $this->container['program_draft_id'];
    }

    /**
     * Sets program_draft_id
     * @param int $program_draft_id
     * @return $this
     */
    public function setProgramDraftId($program_draft_id)
    {
        $this->container['program_draft_id'] = $program_draft_id;

        return $this;
    }

    /**
     * Gets user_draft_id
     * @return int
     */
    public function getUserDraftId()
    {
        return $this->container['user_draft_id'];
    }

    /**
     * Sets user_draft_id
     * @param int $user_draft_id
     * @return $this
     */
    public function setUserDraftId($user_draft_id)
    {
        $this->container['user_draft_id'] = $user_draft_id;

        return $this;
    }

    /**
     * Gets static_start
     * @return bool
     */
    public function getStaticStart()
    {
        return $this->container['static_start'];
    }

    /**
     * Sets static_start
     * @param bool $static_start
     * @return $this
     */
    public function setStaticStart($static_start)
    {
        $this->container['static_start'] = $static_start;

        return $this;
    }

    /**
     * Gets details
     * @return string
     */
    public function getDetails()
    {
        return $this->container['details'];
    }

    /**
     * Sets details
     * @param string $details
     * @return $this
     */
    public function setDetails($details)
    {
        $this->container['details'] = $details;

        return $this;
    }

    /**
     * Gets previous_id
     * @return int
     */
    public function getPreviousId()
    {
        return $this->container['previous_id'];
    }

    /**
     * Sets previous_id
     * @param int $previous_id
     * @return $this
     */
    public function setPreviousId($previous_id)
    {
        $this->container['previous_id'] = $previous_id;

        return $this;
    }

    /**
     * Gets contacts
     * @return int[]
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     * @param int[] $contacts
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets tags
     * @return int[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     * @param int[] $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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

