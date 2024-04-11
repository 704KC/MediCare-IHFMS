<?php
/**
 * PageSentEmailWithQueueProjection
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
 * PageSentEmailWithQueueProjection Class Doc Comment
 *
 * @category Class
 * @description Paginated sent email results for emails sent with queue. Page index starts at zero. Projection results may omit larger entity fields. For fetching a full sent email entity use the projection ID with individual method calls.
 * @package  MailSlurp
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PageSentEmailWithQueueProjection implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PageSentEmailWithQueueProjection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content' => '\MailSlurp\Models\SendWithQueueResult[]',
        'pageable' => '\MailSlurp\Models\PageableObject',
        'total_pages' => 'int',
        'total_elements' => 'int',
        'last' => 'bool',
        'number_of_elements' => 'int',
        'first' => 'bool',
        'size' => 'int',
        'number' => 'int',
        'sort' => '\MailSlurp\Models\SortObject',
        'empty' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'content' => null,
        'pageable' => null,
        'total_pages' => 'int32',
        'total_elements' => 'int64',
        'last' => null,
        'number_of_elements' => 'int32',
        'first' => null,
        'size' => 'int32',
        'number' => 'int32',
        'sort' => null,
        'empty' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'content' => false,
		'pageable' => false,
		'total_pages' => false,
		'total_elements' => false,
		'last' => false,
		'number_of_elements' => false,
		'first' => false,
		'size' => false,
		'number' => false,
		'sort' => false,
		'empty' => false
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
        'content' => 'content',
        'pageable' => 'pageable',
        'total_pages' => 'totalPages',
        'total_elements' => 'totalElements',
        'last' => 'last',
        'number_of_elements' => 'numberOfElements',
        'first' => 'first',
        'size' => 'size',
        'number' => 'number',
        'sort' => 'sort',
        'empty' => 'empty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content' => 'setContent',
        'pageable' => 'setPageable',
        'total_pages' => 'setTotalPages',
        'total_elements' => 'setTotalElements',
        'last' => 'setLast',
        'number_of_elements' => 'setNumberOfElements',
        'first' => 'setFirst',
        'size' => 'setSize',
        'number' => 'setNumber',
        'sort' => 'setSort',
        'empty' => 'setEmpty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content' => 'getContent',
        'pageable' => 'getPageable',
        'total_pages' => 'getTotalPages',
        'total_elements' => 'getTotalElements',
        'last' => 'getLast',
        'number_of_elements' => 'getNumberOfElements',
        'first' => 'getFirst',
        'size' => 'getSize',
        'number' => 'getNumber',
        'sort' => 'getSort',
        'empty' => 'getEmpty'
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
        $this->setIfExists('content', $data ?? [], null);
        $this->setIfExists('pageable', $data ?? [], null);
        $this->setIfExists('total_pages', $data ?? [], null);
        $this->setIfExists('total_elements', $data ?? [], null);
        $this->setIfExists('last', $data ?? [], null);
        $this->setIfExists('number_of_elements', $data ?? [], null);
        $this->setIfExists('first', $data ?? [], null);
        $this->setIfExists('size', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('sort', $data ?? [], null);
        $this->setIfExists('empty', $data ?? [], null);
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

        if ($this->container['total_pages'] === null) {
            $invalidProperties[] = "'total_pages' can't be null";
        }
        if ($this->container['total_elements'] === null) {
            $invalidProperties[] = "'total_elements' can't be null";
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
     * Gets content
     *
     * @return \MailSlurp\Models\SendWithQueueResult[]|null
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param \MailSlurp\Models\SendWithQueueResult[]|null $content content
     *
     * @return self
     */
    public function setContent($content)
    {

        if (is_null($content)) {
            throw new \InvalidArgumentException('non-nullable content cannot be null');
        }

        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets pageable
     *
     * @return \MailSlurp\Models\PageableObject|null
     */
    public function getPageable()
    {
        return $this->container['pageable'];
    }

    /**
     * Sets pageable
     *
     * @param \MailSlurp\Models\PageableObject|null $pageable pageable
     *
     * @return self
     */
    public function setPageable($pageable)
    {

        if (is_null($pageable)) {
            throw new \InvalidArgumentException('non-nullable pageable cannot be null');
        }

        $this->container['pageable'] = $pageable;

        return $this;
    }

    /**
     * Gets total_pages
     *
     * @return int
     */
    public function getTotalPages()
    {
        return $this->container['total_pages'];
    }

    /**
     * Sets total_pages
     *
     * @param int $total_pages total_pages
     *
     * @return self
     */
    public function setTotalPages($total_pages)
    {

        if (is_null($total_pages)) {
            throw new \InvalidArgumentException('non-nullable total_pages cannot be null');
        }

        $this->container['total_pages'] = $total_pages;

        return $this;
    }

    /**
     * Gets total_elements
     *
     * @return int
     */
    public function getTotalElements()
    {
        return $this->container['total_elements'];
    }

    /**
     * Sets total_elements
     *
     * @param int $total_elements total_elements
     *
     * @return self
     */
    public function setTotalElements($total_elements)
    {

        if (is_null($total_elements)) {
            throw new \InvalidArgumentException('non-nullable total_elements cannot be null');
        }

        $this->container['total_elements'] = $total_elements;

        return $this;
    }

    /**
     * Gets last
     *
     * @return bool|null
     */
    public function getLast()
    {
        return $this->container['last'];
    }

    /**
     * Sets last
     *
     * @param bool|null $last last
     *
     * @return self
     */
    public function setLast($last)
    {

        if (is_null($last)) {
            throw new \InvalidArgumentException('non-nullable last cannot be null');
        }

        $this->container['last'] = $last;

        return $this;
    }

    /**
     * Gets number_of_elements
     *
     * @return int|null
     */
    public function getNumberOfElements()
    {
        return $this->container['number_of_elements'];
    }

    /**
     * Sets number_of_elements
     *
     * @param int|null $number_of_elements number_of_elements
     *
     * @return self
     */
    public function setNumberOfElements($number_of_elements)
    {

        if (is_null($number_of_elements)) {
            throw new \InvalidArgumentException('non-nullable number_of_elements cannot be null');
        }

        $this->container['number_of_elements'] = $number_of_elements;

        return $this;
    }

    /**
     * Gets first
     *
     * @return bool|null
     */
    public function getFirst()
    {
        return $this->container['first'];
    }

    /**
     * Sets first
     *
     * @param bool|null $first first
     *
     * @return self
     */
    public function setFirst($first)
    {

        if (is_null($first)) {
            throw new \InvalidArgumentException('non-nullable first cannot be null');
        }

        $this->container['first'] = $first;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return self
     */
    public function setSize($size)
    {

        if (is_null($size)) {
            throw new \InvalidArgumentException('non-nullable size cannot be null');
        }

        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int|null $number number
     *
     * @return self
     */
    public function setNumber($number)
    {

        if (is_null($number)) {
            throw new \InvalidArgumentException('non-nullable number cannot be null');
        }

        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets sort
     *
     * @return \MailSlurp\Models\SortObject|null
     */
    public function getSort()
    {
        return $this->container['sort'];
    }

    /**
     * Sets sort
     *
     * @param \MailSlurp\Models\SortObject|null $sort sort
     *
     * @return self
     */
    public function setSort($sort)
    {

        if (is_null($sort)) {
            throw new \InvalidArgumentException('non-nullable sort cannot be null');
        }

        $this->container['sort'] = $sort;

        return $this;
    }

    /**
     * Gets empty
     *
     * @return bool|null
     */
    public function getEmpty()
    {
        return $this->container['empty'];
    }

    /**
     * Sets empty
     *
     * @param bool|null $empty empty
     *
     * @return self
     */
    public function setEmpty($empty)
    {

        if (is_null($empty)) {
            throw new \InvalidArgumentException('non-nullable empty cannot be null');
        }

        $this->container['empty'] = $empty;

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


