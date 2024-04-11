<?php
/**
 * ConnectorProjection
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * MailSlurp API
 *
 * MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more.  ## Resources  - [Homepage](https://www.mailslurp.com) - Get an [API KEY](https://app.mailslurp.com/sign-up/) - Generated [SDK Clients](https://docs.mailslurp.com/) - [Examples](https://github.com/mailslurp/examples) repository
 *
 * The version of the OpenAPI document: 6.5.2
 * Contact: contact@mailslurp.dev
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.2.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace MailSlurp\Models;

use \ArrayAccess;
use \MailSlurp\ObjectSerializer;

/**
 * ConnectorProjection Class Doc Comment
 *
 * @category Class
 * @description Connector
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ConnectorProjection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConnectorProjection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_at' => '\DateTime',
        'inbox_id' => 'string',
        'user_id' => 'string',
        'sync_enabled' => 'bool',
        'connector_type' => 'string',
        'sync_schedule_type' => 'string',
        'sync_interval' => 'int',
        'id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created_at' => 'date-time',
        'inbox_id' => 'uuid',
        'user_id' => 'uuid',
        'sync_enabled' => null,
        'connector_type' => null,
        'sync_schedule_type' => null,
        'sync_interval' => 'int32',
        'id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'created_at' => false,
		'inbox_id' => false,
		'user_id' => false,
		'sync_enabled' => false,
		'connector_type' => false,
		'sync_schedule_type' => false,
		'sync_interval' => false,
		'id' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created_at' => 'createdAt',
        'inbox_id' => 'inboxId',
        'user_id' => 'userId',
        'sync_enabled' => 'syncEnabled',
        'connector_type' => 'connectorType',
        'sync_schedule_type' => 'syncScheduleType',
        'sync_interval' => 'syncInterval',
        'id' => 'id'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'inbox_id' => 'setInboxId',
        'user_id' => 'setUserId',
        'sync_enabled' => 'setSyncEnabled',
        'connector_type' => 'setConnectorType',
        'sync_schedule_type' => 'setSyncScheduleType',
        'sync_interval' => 'setSyncInterval',
        'id' => 'setId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'inbox_id' => 'getInboxId',
        'user_id' => 'getUserId',
        'sync_enabled' => 'getSyncEnabled',
        'connector_type' => 'getConnectorType',
        'sync_schedule_type' => 'getSyncScheduleType',
        'sync_interval' => 'getSyncInterval',
        'id' => 'getId'
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
        return self::$openAPIModelName;
    }

    public const CONNECTOR_TYPE_IMAP = 'IMAP';
    public const SYNC_SCHEDULE_TYPE_INTERVAL = 'INTERVAL';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConnectorTypeAllowableValues()
    {
        return [
            self::CONNECTOR_TYPE_IMAP,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSyncScheduleTypeAllowableValues()
    {
        return [
            self::SYNC_SCHEDULE_TYPE_INTERVAL,
        ];
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
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('inbox_id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('sync_enabled', $data ?? [], null);
        $this->setIfExists('connector_type', $data ?? [], null);
        $this->setIfExists('sync_schedule_type', $data ?? [], null);
        $this->setIfExists('sync_interval', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['inbox_id'] === null) {
            $invalidProperties[] = "'inbox_id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['sync_enabled'] === null) {
            $invalidProperties[] = "'sync_enabled' can't be null";
        }
        if ($this->container['connector_type'] === null) {
            $invalidProperties[] = "'connector_type' can't be null";
        }
        $allowedValues = $this->getConnectorTypeAllowableValues();
        if (!is_null($this->container['connector_type']) && !in_array($this->container['connector_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'connector_type', must be one of '%s'",
                $this->container['connector_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['sync_schedule_type'] === null) {
            $invalidProperties[] = "'sync_schedule_type' can't be null";
        }
        $allowedValues = $this->getSyncScheduleTypeAllowableValues();
        if (!is_null($this->container['sync_schedule_type']) && !in_array($this->container['sync_schedule_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sync_schedule_type', must be one of '%s'",
                $this->container['sync_schedule_type'],
                implode("', '", $allowedValues)
            );
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {

        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }

        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets inbox_id
     *
     * @return string
     */
    public function getInboxId()
    {
        return $this->container['inbox_id'];
    }

    /**
     * Sets inbox_id
     *
     * @param string $inbox_id inbox_id
     *
     * @return self
     */
    public function setInboxId($inbox_id)
    {

        if (is_null($inbox_id)) {
            throw new \InvalidArgumentException('non-nullable inbox_id cannot be null');
        }

        $this->container['inbox_id'] = $inbox_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param string $user_id user_id
     *
     * @return self
     */
    public function setUserId($user_id)
    {

        if (is_null($user_id)) {
            throw new \InvalidArgumentException('non-nullable user_id cannot be null');
        }

        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets sync_enabled
     *
     * @return bool
     */
    public function getSyncEnabled()
    {
        return $this->container['sync_enabled'];
    }

    /**
     * Sets sync_enabled
     *
     * @param bool $sync_enabled sync_enabled
     *
     * @return self
     */
    public function setSyncEnabled($sync_enabled)
    {

        if (is_null($sync_enabled)) {
            throw new \InvalidArgumentException('non-nullable sync_enabled cannot be null');
        }

        $this->container['sync_enabled'] = $sync_enabled;

        return $this;
    }

    /**
     * Gets connector_type
     *
     * @return string
     */
    public function getConnectorType()
    {
        return $this->container['connector_type'];
    }

    /**
     * Sets connector_type
     *
     * @param string $connector_type connector_type
     *
     * @return self
     */
    public function setConnectorType($connector_type)
    {
        $allowedValues = $this->getConnectorTypeAllowableValues();
        if (!in_array($connector_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'connector_type', must be one of '%s'",
                    $connector_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($connector_type)) {
            throw new \InvalidArgumentException('non-nullable connector_type cannot be null');
        }

        $this->container['connector_type'] = $connector_type;

        return $this;
    }

    /**
     * Gets sync_schedule_type
     *
     * @return string
     */
    public function getSyncScheduleType()
    {
        return $this->container['sync_schedule_type'];
    }

    /**
     * Sets sync_schedule_type
     *
     * @param string $sync_schedule_type sync_schedule_type
     *
     * @return self
     */
    public function setSyncScheduleType($sync_schedule_type)
    {
        $allowedValues = $this->getSyncScheduleTypeAllowableValues();
        if (!in_array($sync_schedule_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sync_schedule_type', must be one of '%s'",
                    $sync_schedule_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($sync_schedule_type)) {
            throw new \InvalidArgumentException('non-nullable sync_schedule_type cannot be null');
        }

        $this->container['sync_schedule_type'] = $sync_schedule_type;

        return $this;
    }

    /**
     * Gets sync_interval
     *
     * @return int|null
     */
    public function getSyncInterval()
    {
        return $this->container['sync_interval'];
    }

    /**
     * Sets sync_interval
     *
     * @param int|null $sync_interval sync_interval
     *
     * @return self
     */
    public function setSyncInterval($sync_interval)
    {

        if (is_null($sync_interval)) {
            throw new \InvalidArgumentException('non-nullable sync_interval cannot be null');
        }

        $this->container['sync_interval'] = $sync_interval;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id id
     *
     * @return self
     */
    public function setId($id)
    {

        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }

        $this->container['id'] = $id;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


