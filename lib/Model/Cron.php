<?php
/**
 * Cron
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
 * Cron Class Doc Comment
 *
 * @category Class
 * @package  Acquia\CloudApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Cron implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cron';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'server' => '\Acquia\CloudApi\Model\ServerStub',
        'command' => 'string',
        'minute' => 'string',
        'hour' => 'string',
        'day_month' => 'string',
        'month' => 'string',
        'day_week' => 'string',
        'label' => 'string',
        'flags' => 'array<string,\Acquia\CloudApi\Model\CronFlagsValue>',
        'environment' => '\Acquia\CloudApi\Model\EnvironmentStub',
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
        'id' => 'uuid',
        'server' => null,
        'command' => null,
        'minute' => null,
        'hour' => null,
        'day_month' => null,
        'month' => null,
        'day_week' => null,
        'label' => null,
        'flags' => null,
        'environment' => null,
        '_links' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
		'server' => false,
		'command' => false,
		'minute' => false,
		'hour' => false,
		'day_month' => false,
		'month' => false,
		'day_week' => false,
		'label' => false,
		'flags' => false,
		'environment' => false,
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
        'server' => 'server',
        'command' => 'command',
        'minute' => 'minute',
        'hour' => 'hour',
        'day_month' => 'day_month',
        'month' => 'month',
        'day_week' => 'day_week',
        'label' => 'label',
        'flags' => 'flags',
        'environment' => 'environment',
        '_links' => '_links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'server' => 'setServer',
        'command' => 'setCommand',
        'minute' => 'setMinute',
        'hour' => 'setHour',
        'day_month' => 'setDayMonth',
        'month' => 'setMonth',
        'day_week' => 'setDayWeek',
        'label' => 'setLabel',
        'flags' => 'setFlags',
        'environment' => 'setEnvironment',
        '_links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'server' => 'getServer',
        'command' => 'getCommand',
        'minute' => 'getMinute',
        'hour' => 'getHour',
        'day_month' => 'getDayMonth',
        'month' => 'getMonth',
        'day_week' => 'getDayWeek',
        'label' => 'getLabel',
        'flags' => 'getFlags',
        'environment' => 'getEnvironment',
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
        $this->setIfExists('server', $data ?? [], null);
        $this->setIfExists('command', $data ?? [], null);
        $this->setIfExists('minute', $data ?? [], null);
        $this->setIfExists('hour', $data ?? [], null);
        $this->setIfExists('day_month', $data ?? [], null);
        $this->setIfExists('month', $data ?? [], null);
        $this->setIfExists('day_week', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('flags', $data ?? [], null);
        $this->setIfExists('environment', $data ?? [], null);
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
        if ($this->container['server'] === null) {
            $invalidProperties[] = "'server' can't be null";
        }
        if ($this->container['command'] === null) {
            $invalidProperties[] = "'command' can't be null";
        }
        if ($this->container['minute'] === null) {
            $invalidProperties[] = "'minute' can't be null";
        }
        if ($this->container['hour'] === null) {
            $invalidProperties[] = "'hour' can't be null";
        }
        if ($this->container['day_month'] === null) {
            $invalidProperties[] = "'day_month' can't be null";
        }
        if ($this->container['month'] === null) {
            $invalidProperties[] = "'month' can't be null";
        }
        if ($this->container['day_week'] === null) {
            $invalidProperties[] = "'day_week' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['flags'] === null) {
            $invalidProperties[] = "'flags' can't be null";
        }
        if ($this->container['environment'] === null) {
            $invalidProperties[] = "'environment' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The ID of the cron job.
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
     * Gets server
     *
     * @return \Acquia\CloudApi\Model\ServerStub
     */
    public function getServer()
    {
        return $this->container['server'];
    }

    /**
     * Sets server
     *
     * @param \Acquia\CloudApi\Model\ServerStub $server server
     *
     * @return self
     */
    public function setServer($server)
    {
        if (is_null($server)) {
            throw new \InvalidArgumentException('non-nullable server cannot be null');
        }
        $this->container['server'] = $server;

        return $this;
    }

    /**
     * Gets command
     *
     * @return string
     */
    public function getCommand()
    {
        return $this->container['command'];
    }

    /**
     * Sets command
     *
     * @param string $command The cron command.
     *
     * @return self
     */
    public function setCommand($command)
    {
        if (is_null($command)) {
            throw new \InvalidArgumentException('non-nullable command cannot be null');
        }
        $this->container['command'] = $command;

        return $this;
    }

    /**
     * Gets minute
     *
     * @return string
     */
    public function getMinute()
    {
        return $this->container['minute'];
    }

    /**
     * Sets minute
     *
     * @param string $minute The cron expression minute.
     *
     * @return self
     */
    public function setMinute($minute)
    {
        if (is_null($minute)) {
            throw new \InvalidArgumentException('non-nullable minute cannot be null');
        }
        $this->container['minute'] = $minute;

        return $this;
    }

    /**
     * Gets hour
     *
     * @return string
     */
    public function getHour()
    {
        return $this->container['hour'];
    }

    /**
     * Sets hour
     *
     * @param string $hour The cron expression hour.
     *
     * @return self
     */
    public function setHour($hour)
    {
        if (is_null($hour)) {
            throw new \InvalidArgumentException('non-nullable hour cannot be null');
        }
        $this->container['hour'] = $hour;

        return $this;
    }

    /**
     * Gets day_month
     *
     * @return string
     */
    public function getDayMonth()
    {
        return $this->container['day_month'];
    }

    /**
     * Sets day_month
     *
     * @param string $day_month The cron expression day of the month.
     *
     * @return self
     */
    public function setDayMonth($day_month)
    {
        if (is_null($day_month)) {
            throw new \InvalidArgumentException('non-nullable day_month cannot be null');
        }
        $this->container['day_month'] = $day_month;

        return $this;
    }

    /**
     * Gets month
     *
     * @return string
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param string $month The cron expression month.
     *
     * @return self
     */
    public function setMonth($month)
    {
        if (is_null($month)) {
            throw new \InvalidArgumentException('non-nullable month cannot be null');
        }
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets day_week
     *
     * @return string
     */
    public function getDayWeek()
    {
        return $this->container['day_week'];
    }

    /**
     * Sets day_week
     *
     * @param string $day_week The cron expression day of the week.
     *
     * @return self
     */
    public function setDayWeek($day_week)
    {
        if (is_null($day_week)) {
            throw new \InvalidArgumentException('non-nullable day_week cannot be null');
        }
        $this->container['day_week'] = $day_week;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label The label for the cron.
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return array<string,\Acquia\CloudApi\Model\CronFlagsValue>
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param array<string,\Acquia\CloudApi\Model\CronFlagsValue> $flags An array of various flags that indicate functionality associated with cron jobs.
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
     * Gets environment
     *
     * @return \Acquia\CloudApi\Model\EnvironmentStub
     */
    public function getEnvironment()
    {
        return $this->container['environment'];
    }

    /**
     * Sets environment
     *
     * @param \Acquia\CloudApi\Model\EnvironmentStub $environment environment
     *
     * @return self
     */
    public function setEnvironment($environment)
    {
        if (is_null($environment)) {
            throw new \InvalidArgumentException('non-nullable environment cannot be null');
        }
        $this->container['environment'] = $environment;

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

