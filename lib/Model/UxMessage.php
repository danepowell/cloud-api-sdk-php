<?php
/**
 * UxMessage
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Acquia\CloudApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Acquia Cloud API Documentation
 *
 * Acquia Cloud API  # Compatibility  ## Stability  The response for all resource endpoints includes an `X-CloudAPI-Stability` header that indicates what changes, if any, Acquia will make to the resource and how changes will be communicated.  There are three levels of stability:  * `prototype`: A prototype resource is experimental and major changes are likely. A prototype resource may not reach production.     * Compatible and emergency changes may be made with no advance notice     * Disruptive changes may be made with one week notice     * Deprecated resources will remain available for at least one month after deprecation * `development`: A resource that is unlikely to change, but is still being worked on, will be marked as in development. These resources are very likely to reach production.     * Compatible and emergency changes may be made with no advance notice     * Disruptive changes may be made with one month notice     * Deprecated resources will remain available for at least six months after deprecation * `production`: A production resource will not introduce breaking changes within a version, and any breaking changes between versions will be communicated ahead of time.  ## Deprecation  Over time, endpoints may become obsolete and will be removed in the future. These endpoints will be marked with an `X-CloudAPI-Deprecated` header indicating the version in which they were deprecated and the reason for the deprecation. Deprecated endpoints may be removed in the next version of the resource.  ## Versioning  All resource endpoints are versioned within the API. Endpoints that have reached production will not introduce breaking changes between versions. Non-production endpoints will not version for changes.  A specific version of an endpoint can be requested via the `Accept` header:      Accept: application/json, version=2  If the version is not specified, the latest version of the endpoint will be used.  Starting with version 3, we will support the current version of an endpoint and the previous version. Version 1 of the API is [provided elsewhere](https://cloudapi.acquia.com/).  ## Errors  Some endpoints will return a 503 status when dependent services are unavailable:      application/json     {         \"error\": \"system\",         \"message\": \"This action is currently unavailable. Please try again later.\"     }  ## Authentication  All Acquia Cloud API calls require authentication to work properly.  Learn more: <a href='https://docs.acquia.com/acquia-cloud/develop/api/auth/' target='_blank'>https://docs.acquia.com/acquia-cloud/develop/api/auth/</a>  ### Example implementation  An example PHP script for making authenticated API requests can be found at <a href='https://docs.acquia.com/_downloads/api-v2-auth.php' target='_blank'>https://docs.acquia.com/_downloads/api-v2-auth.php</a>. This script uses the <a href='https://oauth2-client.thephpleague.com/' target='_blank'>League/oauth2-client</a> library, installed via Composer.
 *
 * The version of the OpenAPI document: 2.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Acquia\CloudApi\Model;

use \ArrayAccess;
use \Acquia\CloudApi\ObjectSerializer;

/**
 * UxMessage Class Doc Comment
 *
 * @category Class
 * @package  Acquia\CloudApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UxMessage implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UxMessage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'uuid' => 'string',
        'title' => 'string',
        'body' => 'string',
        'url' => 'string',
        'filters' => '\Acquia\CloudApi\Model\UxMessageFilters',
        'flags' => '\Acquia\CloudApi\Model\UxMessageFlags',
        'weight' => 'int',
        'start_at' => '\DateTime',
        'expire_at' => '\DateTime',
        '_links' => '\Acquia\CloudApi\Model\Links'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => null,
        'uuid' => 'uuid',
        'title' => null,
        'body' => null,
        'url' => 'uri',
        'filters' => null,
        'flags' => null,
        'weight' => null,
        'start_at' => 'date-time',
        'expire_at' => 'date-time',
        '_links' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'uuid' => false,
		'title' => false,
		'body' => false,
		'url' => false,
		'filters' => false,
		'flags' => false,
		'weight' => false,
		'start_at' => false,
		'expire_at' => false,
		'_links' => false
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
        'uuid' => 'uuid',
        'title' => 'title',
        'body' => 'body',
        'url' => 'url',
        'filters' => 'filters',
        'flags' => 'flags',
        'weight' => 'weight',
        'start_at' => 'start_at',
        'expire_at' => 'expire_at',
        '_links' => '_links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'uuid' => 'setUuid',
        'title' => 'setTitle',
        'body' => 'setBody',
        'url' => 'setUrl',
        'filters' => 'setFilters',
        'flags' => 'setFlags',
        'weight' => 'setWeight',
        'start_at' => 'setStartAt',
        'expire_at' => 'setExpireAt',
        '_links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'uuid' => 'getUuid',
        'title' => 'getTitle',
        'body' => 'getBody',
        'url' => 'getUrl',
        'filters' => 'getFilters',
        'flags' => 'getFlags',
        'weight' => 'getWeight',
        'start_at' => 'getStartAt',
        'expire_at' => 'getExpireAt',
        '_links' => 'getLinks'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('uuid', $data ?? [], null);
        $this->setIfExists('title', $data ?? [], null);
        $this->setIfExists('body', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('filters', $data ?? [], null);
        $this->setIfExists('flags', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('start_at', $data ?? [], null);
        $this->setIfExists('expire_at', $data ?? [], null);
        $this->setIfExists('_links', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['body'] === null) {
            $invalidProperties[] = "'body' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['filters'] === null) {
            $invalidProperties[] = "'filters' can't be null";
        }
        if ($this->container['flags'] === null) {
            $invalidProperties[] = "'flags' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['start_at'] === null) {
            $invalidProperties[] = "'start_at' can't be null";
        }
        if ($this->container['expire_at'] === null) {
            $invalidProperties[] = "'expire_at' can't be null";
        }
        if ($this->container['_links'] === null) {
            $invalidProperties[] = "'_links' can't be null";
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id The message identifier.
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
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid The message unique identifier.
     *
     * @return self
     */
    public function setUuid($uuid)
    {
        if (is_null($uuid)) {
            throw new \InvalidArgumentException('non-nullable uuid cannot be null');
        }
        $this->container['uuid'] = $uuid;

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
     * @param string $title The message title.
     *
     * @return self
     */
    public function setTitle($title)
    {
        if (is_null($title)) {
            throw new \InvalidArgumentException('non-nullable title cannot be null');
        }
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body The message body.
     *
     * @return self
     */
    public function setBody($body)
    {
        if (is_null($body)) {
            throw new \InvalidArgumentException('non-nullable body cannot be null');
        }
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url The message url.
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets filters
     *
     * @return \Acquia\CloudApi\Model\UxMessageFilters
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     *
     * @param \Acquia\CloudApi\Model\UxMessageFilters $filters filters
     *
     * @return self
     */
    public function setFilters($filters)
    {
        if (is_null($filters)) {
            throw new \InvalidArgumentException('non-nullable filters cannot be null');
        }
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return \Acquia\CloudApi\Model\UxMessageFlags
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param \Acquia\CloudApi\Model\UxMessageFlags $flags flags
     *
     * @return self
     */
    public function setFlags($flags)
    {
        if (is_null($flags)) {
            throw new \InvalidArgumentException('non-nullable flags cannot be null');
        }
        $this->container['flags'] = $flags;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param int $weight The message priority weight.
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets start_at
     *
     * @return \DateTime
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param \DateTime $start_at The UTC timestamp of when the message started.
     *
     * @return self
     */
    public function setStartAt($start_at)
    {
        if (is_null($start_at)) {
            throw new \InvalidArgumentException('non-nullable start_at cannot be null');
        }
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets expire_at
     *
     * @return \DateTime
     */
    public function getExpireAt()
    {
        return $this->container['expire_at'];
    }

    /**
     * Sets expire_at
     *
     * @param \DateTime $expire_at The UTC timestamp of when the message expires.
     *
     * @return self
     */
    public function setExpireAt($expire_at)
    {
        if (is_null($expire_at)) {
            throw new \InvalidArgumentException('non-nullable expire_at cannot be null');
        }
        $this->container['expire_at'] = $expire_at;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \Acquia\CloudApi\Model\Links
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Acquia\CloudApi\Model\Links $_links _links
     *
     * @return self
     */
    public function setLinks($_links)
    {
        if (is_null($_links)) {
            throw new \InvalidArgumentException('non-nullable _links cannot be null');
        }
        $this->container['_links'] = $_links;

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


