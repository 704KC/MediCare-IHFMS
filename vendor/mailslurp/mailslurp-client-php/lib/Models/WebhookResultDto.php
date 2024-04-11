<?php
/**
 * WebhookResultDto
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
 * WebhookResultDto Class Doc Comment
 *
 * @category Class
 * @description Result of a webhook notification
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebhookResultDto implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebhookResultDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'user_id' => 'string',
        'webhook_id' => 'string',
        'webhook_url' => 'string',
        'message_id' => 'string',
        'redrive_id' => 'string',
        'http_method' => 'string',
        'webhook_event' => 'string',
        'response_status' => 'int',
        'response_time_millis' => 'int',
        'response_body_extract' => 'string',
        'result_type' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'seen' => 'bool',
        'inbox_id' => 'string',
        'email_id' => 'string',
        'attachment_id' => 'string',
        'phone_id' => 'string',
        'sms_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'user_id' => 'uuid',
        'webhook_id' => 'uuid',
        'webhook_url' => null,
        'message_id' => null,
        'redrive_id' => 'uuid',
        'http_method' => null,
        'webhook_event' => null,
        'response_status' => 'int32',
        'response_time_millis' => 'int64',
        'response_body_extract' => null,
        'result_type' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'seen' => null,
        'inbox_id' => 'uuid',
        'email_id' => 'uuid',
        'attachment_id' => 'uuid',
        'phone_id' => 'uuid',
        'sms_id' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'user_id' => false,
		'webhook_id' => false,
		'webhook_url' => false,
		'message_id' => false,
		'redrive_id' => true,
		'http_method' => false,
		'webhook_event' => false,
		'response_status' => true,
		'response_time_millis' => false,
		'response_body_extract' => true,
		'result_type' => true,
		'created_at' => false,
		'updated_at' => false,
		'seen' => false,
		'inbox_id' => true,
		'email_id' => true,
		'attachment_id' => true,
		'phone_id' => true,
		'sms_id' => true
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
        'id' => 'id',
        'user_id' => 'userId',
        'webhook_id' => 'webhookId',
        'webhook_url' => 'webhookUrl',
        'message_id' => 'messageId',
        'redrive_id' => 'redriveId',
        'http_method' => 'httpMethod',
        'webhook_event' => 'webhookEvent',
        'response_status' => 'responseStatus',
        'response_time_millis' => 'responseTimeMillis',
        'response_body_extract' => 'responseBodyExtract',
        'result_type' => 'resultType',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'seen' => 'seen',
        'inbox_id' => 'inboxId',
        'email_id' => 'emailId',
        'attachment_id' => 'attachmentId',
        'phone_id' => 'phoneId',
        'sms_id' => 'smsId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'webhook_id' => 'setWebhookId',
        'webhook_url' => 'setWebhookUrl',
        'message_id' => 'setMessageId',
        'redrive_id' => 'setRedriveId',
        'http_method' => 'setHttpMethod',
        'webhook_event' => 'setWebhookEvent',
        'response_status' => 'setResponseStatus',
        'response_time_millis' => 'setResponseTimeMillis',
        'response_body_extract' => 'setResponseBodyExtract',
        'result_type' => 'setResultType',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'seen' => 'setSeen',
        'inbox_id' => 'setInboxId',
        'email_id' => 'setEmailId',
        'attachment_id' => 'setAttachmentId',
        'phone_id' => 'setPhoneId',
        'sms_id' => 'setSmsId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'webhook_id' => 'getWebhookId',
        'webhook_url' => 'getWebhookUrl',
        'message_id' => 'getMessageId',
        'redrive_id' => 'getRedriveId',
        'http_method' => 'getHttpMethod',
        'webhook_event' => 'getWebhookEvent',
        'response_status' => 'getResponseStatus',
        'response_time_millis' => 'getResponseTimeMillis',
        'response_body_extract' => 'getResponseBodyExtract',
        'result_type' => 'getResultType',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'seen' => 'getSeen',
        'inbox_id' => 'getInboxId',
        'email_id' => 'getEmailId',
        'attachment_id' => 'getAttachmentId',
        'phone_id' => 'getPhoneId',
        'sms_id' => 'getSmsId'
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

    public const HTTP_METHOD_POST = 'POST';
    public const HTTP_METHOD_DELETE = 'DELETE';
    public const HTTP_METHOD_GET = 'GET';
    public const HTTP_METHOD_PUT = 'PUT';
    public const HTTP_METHOD_PATCH = 'PATCH';
    public const HTTP_METHOD_HEAD = 'HEAD';
    public const HTTP_METHOD_OPTIONS = 'OPTIONS';
    public const HTTP_METHOD_TRACE = 'TRACE';
    public const WEBHOOK_EVENT_EMAIL_RECEIVED = 'EMAIL_RECEIVED';
    public const WEBHOOK_EVENT_NEW_EMAIL = 'NEW_EMAIL';
    public const WEBHOOK_EVENT_NEW_CONTACT = 'NEW_CONTACT';
    public const WEBHOOK_EVENT_NEW_ATTACHMENT = 'NEW_ATTACHMENT';
    public const WEBHOOK_EVENT_EMAIL_OPENED = 'EMAIL_OPENED';
    public const WEBHOOK_EVENT_EMAIL_READ = 'EMAIL_READ';
    public const WEBHOOK_EVENT_DELIVERY_STATUS = 'DELIVERY_STATUS';
    public const WEBHOOK_EVENT_BOUNCE = 'BOUNCE';
    public const WEBHOOK_EVENT_BOUNCE_RECIPIENT = 'BOUNCE_RECIPIENT';
    public const WEBHOOK_EVENT_NEW_SMS = 'NEW_SMS';
    public const RESULT_TYPE_BAD_RESPONSE = 'BAD_RESPONSE';
    public const RESULT_TYPE_EXCEPTION = 'EXCEPTION';
    public const RESULT_TYPE_SUCCESS = 'SUCCESS';
    public const RESULT_TYPE_REDRIVEN = 'REDRIVEN';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHttpMethodAllowableValues()
    {
        return [
            self::HTTP_METHOD_POST,
            self::HTTP_METHOD_DELETE,
            self::HTTP_METHOD_GET,
            self::HTTP_METHOD_PUT,
            self::HTTP_METHOD_PATCH,
            self::HTTP_METHOD_HEAD,
            self::HTTP_METHOD_OPTIONS,
            self::HTTP_METHOD_TRACE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWebhookEventAllowableValues()
    {
        return [
            self::WEBHOOK_EVENT_EMAIL_RECEIVED,
            self::WEBHOOK_EVENT_NEW_EMAIL,
            self::WEBHOOK_EVENT_NEW_CONTACT,
            self::WEBHOOK_EVENT_NEW_ATTACHMENT,
            self::WEBHOOK_EVENT_EMAIL_OPENED,
            self::WEBHOOK_EVENT_EMAIL_READ,
            self::WEBHOOK_EVENT_DELIVERY_STATUS,
            self::WEBHOOK_EVENT_BOUNCE,
            self::WEBHOOK_EVENT_BOUNCE_RECIPIENT,
            self::WEBHOOK_EVENT_NEW_SMS,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResultTypeAllowableValues()
    {
        return [
            self::RESULT_TYPE_BAD_RESPONSE,
            self::RESULT_TYPE_EXCEPTION,
            self::RESULT_TYPE_SUCCESS,
            self::RESULT_TYPE_REDRIVEN,
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('user_id', $data ?? [], null);
        $this->setIfExists('webhook_id', $data ?? [], null);
        $this->setIfExists('webhook_url', $data ?? [], null);
        $this->setIfExists('message_id', $data ?? [], null);
        $this->setIfExists('redrive_id', $data ?? [], null);
        $this->setIfExists('http_method', $data ?? [], null);
        $this->setIfExists('webhook_event', $data ?? [], null);
        $this->setIfExists('response_status', $data ?? [], null);
        $this->setIfExists('response_time_millis', $data ?? [], null);
        $this->setIfExists('response_body_extract', $data ?? [], null);
        $this->setIfExists('result_type', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('seen', $data ?? [], null);
        $this->setIfExists('inbox_id', $data ?? [], null);
        $this->setIfExists('email_id', $data ?? [], null);
        $this->setIfExists('attachment_id', $data ?? [], null);
        $this->setIfExists('phone_id', $data ?? [], null);
        $this->setIfExists('sms_id', $data ?? [], null);
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

        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['webhook_id'] === null) {
            $invalidProperties[] = "'webhook_id' can't be null";
        }
        if ($this->container['webhook_url'] === null) {
            $invalidProperties[] = "'webhook_url' can't be null";
        }
        if ($this->container['message_id'] === null) {
            $invalidProperties[] = "'message_id' can't be null";
        }
        if ($this->container['http_method'] === null) {
            $invalidProperties[] = "'http_method' can't be null";
        }
        $allowedValues = $this->getHttpMethodAllowableValues();
        if (!is_null($this->container['http_method']) && !in_array($this->container['http_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'http_method', must be one of '%s'",
                $this->container['http_method'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['webhook_event'] === null) {
            $invalidProperties[] = "'webhook_event' can't be null";
        }
        $allowedValues = $this->getWebhookEventAllowableValues();
        if (!is_null($this->container['webhook_event']) && !in_array($this->container['webhook_event'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'webhook_event', must be one of '%s'",
                $this->container['webhook_event'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['response_time_millis'] === null) {
            $invalidProperties[] = "'response_time_millis' can't be null";
        }
        $allowedValues = $this->getResultTypeAllowableValues();
        if (!is_null($this->container['result_type']) && !in_array($this->container['result_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'result_type', must be one of '%s'",
                $this->container['result_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['seen'] === null) {
            $invalidProperties[] = "'seen' can't be null";
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
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['id'] = $id;

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
     * Gets webhook_id
     *
     * @return string
     */
    public function getWebhookId()
    {
        return $this->container['webhook_id'];
    }

    /**
     * Sets webhook_id
     *
     * @param string $webhook_id webhook_id
     *
     * @return self
     */
    public function setWebhookId($webhook_id)
    {

        if (is_null($webhook_id)) {
            throw new \InvalidArgumentException('non-nullable webhook_id cannot be null');
        }

        $this->container['webhook_id'] = $webhook_id;

        return $this;
    }

    /**
     * Gets webhook_url
     *
     * @return string
     */
    public function getWebhookUrl()
    {
        return $this->container['webhook_url'];
    }

    /**
     * Sets webhook_url
     *
     * @param string $webhook_url webhook_url
     *
     * @return self
     */
    public function setWebhookUrl($webhook_url)
    {

        if (is_null($webhook_url)) {
            throw new \InvalidArgumentException('non-nullable webhook_url cannot be null');
        }

        $this->container['webhook_url'] = $webhook_url;

        return $this;
    }

    /**
     * Gets message_id
     *
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['message_id'];
    }

    /**
     * Sets message_id
     *
     * @param string $message_id message_id
     *
     * @return self
     */
    public function setMessageId($message_id)
    {

        if (is_null($message_id)) {
            throw new \InvalidArgumentException('non-nullable message_id cannot be null');
        }

        $this->container['message_id'] = $message_id;

        return $this;
    }

    /**
     * Gets redrive_id
     *
     * @return string|null
     */
    public function getRedriveId()
    {
        return $this->container['redrive_id'];
    }

    /**
     * Sets redrive_id
     *
     * @param string|null $redrive_id redrive_id
     *
     * @return self
     */
    public function setRedriveId($redrive_id)
    {

        if (is_null($redrive_id)) {
            array_push($this->openAPINullablesSetToNull, 'redrive_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('redrive_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['redrive_id'] = $redrive_id;

        return $this;
    }

    /**
     * Gets http_method
     *
     * @return string
     */
    public function getHttpMethod()
    {
        return $this->container['http_method'];
    }

    /**
     * Sets http_method
     *
     * @param string $http_method http_method
     *
     * @return self
     */
    public function setHttpMethod($http_method)
    {
        $allowedValues = $this->getHttpMethodAllowableValues();
        if (!in_array($http_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'http_method', must be one of '%s'",
                    $http_method,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($http_method)) {
            throw new \InvalidArgumentException('non-nullable http_method cannot be null');
        }

        $this->container['http_method'] = $http_method;

        return $this;
    }

    /**
     * Gets webhook_event
     *
     * @return string
     */
    public function getWebhookEvent()
    {
        return $this->container['webhook_event'];
    }

    /**
     * Sets webhook_event
     *
     * @param string $webhook_event webhook_event
     *
     * @return self
     */
    public function setWebhookEvent($webhook_event)
    {
        $allowedValues = $this->getWebhookEventAllowableValues();
        if (!in_array($webhook_event, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'webhook_event', must be one of '%s'",
                    $webhook_event,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($webhook_event)) {
            throw new \InvalidArgumentException('non-nullable webhook_event cannot be null');
        }

        $this->container['webhook_event'] = $webhook_event;

        return $this;
    }

    /**
     * Gets response_status
     *
     * @return int|null
     */
    public function getResponseStatus()
    {
        return $this->container['response_status'];
    }

    /**
     * Sets response_status
     *
     * @param int|null $response_status response_status
     *
     * @return self
     */
    public function setResponseStatus($response_status)
    {

        if (is_null($response_status)) {
            array_push($this->openAPINullablesSetToNull, 'response_status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('response_status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['response_status'] = $response_status;

        return $this;
    }

    /**
     * Gets response_time_millis
     *
     * @return int
     */
    public function getResponseTimeMillis()
    {
        return $this->container['response_time_millis'];
    }

    /**
     * Sets response_time_millis
     *
     * @param int $response_time_millis response_time_millis
     *
     * @return self
     */
    public function setResponseTimeMillis($response_time_millis)
    {

        if (is_null($response_time_millis)) {
            throw new \InvalidArgumentException('non-nullable response_time_millis cannot be null');
        }

        $this->container['response_time_millis'] = $response_time_millis;

        return $this;
    }

    /**
     * Gets response_body_extract
     *
     * @return string|null
     */
    public function getResponseBodyExtract()
    {
        return $this->container['response_body_extract'];
    }

    /**
     * Sets response_body_extract
     *
     * @param string|null $response_body_extract response_body_extract
     *
     * @return self
     */
    public function setResponseBodyExtract($response_body_extract)
    {

        if (is_null($response_body_extract)) {
            array_push($this->openAPINullablesSetToNull, 'response_body_extract');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('response_body_extract', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['response_body_extract'] = $response_body_extract;

        return $this;
    }

    /**
     * Gets result_type
     *
     * @return string|null
     */
    public function getResultType()
    {
        return $this->container['result_type'];
    }

    /**
     * Sets result_type
     *
     * @param string|null $result_type result_type
     *
     * @return self
     */
    public function setResultType($result_type)
    {
        $allowedValues = $this->getResultTypeAllowableValues();
        if (!is_null($result_type) && !in_array($result_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'result_type', must be one of '%s'",
                    $result_type,
                    implode("', '", $allowedValues)
                )
            );
        }

        if (is_null($result_type)) {
            array_push($this->openAPINullablesSetToNull, 'result_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('result_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['result_type'] = $result_type;

        return $this;
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
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {

        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }

        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets seen
     *
     * @return bool
     */
    public function getSeen()
    {
        return $this->container['seen'];
    }

    /**
     * Sets seen
     *
     * @param bool $seen seen
     *
     * @return self
     */
    public function setSeen($seen)
    {

        if (is_null($seen)) {
            throw new \InvalidArgumentException('non-nullable seen cannot be null');
        }

        $this->container['seen'] = $seen;

        return $this;
    }

    /**
     * Gets inbox_id
     *
     * @return string|null
     */
    public function getInboxId()
    {
        return $this->container['inbox_id'];
    }

    /**
     * Sets inbox_id
     *
     * @param string|null $inbox_id inbox_id
     *
     * @return self
     */
    public function setInboxId($inbox_id)
    {

        if (is_null($inbox_id)) {
            array_push($this->openAPINullablesSetToNull, 'inbox_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('inbox_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['inbox_id'] = $inbox_id;

        return $this;
    }

    /**
     * Gets email_id
     *
     * @return string|null
     */
    public function getEmailId()
    {
        return $this->container['email_id'];
    }

    /**
     * Sets email_id
     *
     * @param string|null $email_id email_id
     *
     * @return self
     */
    public function setEmailId($email_id)
    {

        if (is_null($email_id)) {
            array_push($this->openAPINullablesSetToNull, 'email_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('email_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['email_id'] = $email_id;

        return $this;
    }

    /**
     * Gets attachment_id
     *
     * @return string|null
     */
    public function getAttachmentId()
    {
        return $this->container['attachment_id'];
    }

    /**
     * Sets attachment_id
     *
     * @param string|null $attachment_id attachment_id
     *
     * @return self
     */
    public function setAttachmentId($attachment_id)
    {

        if (is_null($attachment_id)) {
            array_push($this->openAPINullablesSetToNull, 'attachment_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('attachment_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['attachment_id'] = $attachment_id;

        return $this;
    }

    /**
     * Gets phone_id
     *
     * @return string|null
     */
    public function getPhoneId()
    {
        return $this->container['phone_id'];
    }

    /**
     * Sets phone_id
     *
     * @param string|null $phone_id phone_id
     *
     * @return self
     */
    public function setPhoneId($phone_id)
    {

        if (is_null($phone_id)) {
            array_push($this->openAPINullablesSetToNull, 'phone_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phone_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['phone_id'] = $phone_id;

        return $this;
    }

    /**
     * Gets sms_id
     *
     * @return string|null
     */
    public function getSmsId()
    {
        return $this->container['sms_id'];
    }

    /**
     * Sets sms_id
     *
     * @param string|null $sms_id sms_id
     *
     * @return self
     */
    public function setSmsId($sms_id)
    {

        if (is_null($sms_id)) {
            array_push($this->openAPINullablesSetToNull, 'sms_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sms_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        $this->container['sms_id'] = $sms_id;

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

