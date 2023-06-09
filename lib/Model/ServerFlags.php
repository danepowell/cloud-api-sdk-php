<?php
/**
 * ServerFlags
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
 * ServerFlags Class Doc Comment
 *
 * @category Class
 * @description An array of various flags that indicate functionality for the server.
 * @package  Acquia\CloudApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ServerFlags implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ServerFlags';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'elastic_ip' => 'bool',
        'active_web' => 'bool',
        'active_bal' => 'bool',
        'primary_db' => 'bool',
        'web' => 'bool',
        'database' => 'bool',
        'balancer' => 'bool',
        'fs' => 'bool',
        'memcache' => 'bool',
        'dedicated' => 'bool',
        'self_service' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'elastic_ip' => null,
        'active_web' => null,
        'active_bal' => null,
        'primary_db' => null,
        'web' => null,
        'database' => null,
        'balancer' => null,
        'fs' => null,
        'memcache' => null,
        'dedicated' => null,
        'self_service' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'elastic_ip' => false,
		'active_web' => false,
		'active_bal' => false,
		'primary_db' => false,
		'web' => false,
		'database' => false,
		'balancer' => false,
		'fs' => false,
		'memcache' => false,
		'dedicated' => false,
		'self_service' => false
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
        'elastic_ip' => 'elastic_ip',
        'active_web' => 'active_web',
        'active_bal' => 'active_bal',
        'primary_db' => 'primary_db',
        'web' => 'web',
        'database' => 'database',
        'balancer' => 'balancer',
        'fs' => 'fs',
        'memcache' => 'memcache',
        'dedicated' => 'dedicated',
        'self_service' => 'self_service'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'elastic_ip' => 'setElasticIp',
        'active_web' => 'setActiveWeb',
        'active_bal' => 'setActiveBal',
        'primary_db' => 'setPrimaryDb',
        'web' => 'setWeb',
        'database' => 'setDatabase',
        'balancer' => 'setBalancer',
        'fs' => 'setFs',
        'memcache' => 'setMemcache',
        'dedicated' => 'setDedicated',
        'self_service' => 'setSelfService'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'elastic_ip' => 'getElasticIp',
        'active_web' => 'getActiveWeb',
        'active_bal' => 'getActiveBal',
        'primary_db' => 'getPrimaryDb',
        'web' => 'getWeb',
        'database' => 'getDatabase',
        'balancer' => 'getBalancer',
        'fs' => 'getFs',
        'memcache' => 'getMemcache',
        'dedicated' => 'getDedicated',
        'self_service' => 'getSelfService'
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
        $this->setIfExists('elastic_ip', $data ?? [], null);
        $this->setIfExists('active_web', $data ?? [], null);
        $this->setIfExists('active_bal', $data ?? [], null);
        $this->setIfExists('primary_db', $data ?? [], null);
        $this->setIfExists('web', $data ?? [], null);
        $this->setIfExists('database', $data ?? [], null);
        $this->setIfExists('balancer', $data ?? [], null);
        $this->setIfExists('fs', $data ?? [], null);
        $this->setIfExists('memcache', $data ?? [], null);
        $this->setIfExists('dedicated', $data ?? [], null);
        $this->setIfExists('self_service', $data ?? [], null);
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
     * Gets elastic_ip
     *
     * @return bool|null
     */
    public function getElasticIp()
    {
        return $this->container['elastic_ip'];
    }

    /**
     * Sets elastic_ip
     *
     * @param bool|null $elastic_ip Determines if the server has an elastic (static) IP or not.
     *
     * @return self
     */
    public function setElasticIp($elastic_ip)
    {
        if (is_null($elastic_ip)) {
            throw new \InvalidArgumentException('non-nullable elastic_ip cannot be null');
        }
        $this->container['elastic_ip'] = $elastic_ip;

        return $this;
    }

    /**
     * Gets active_web
     *
     * @return bool|null
     */
    public function getActiveWeb()
    {
        return $this->container['active_web'];
    }

    /**
     * Sets active_web
     *
     * @param bool|null $active_web Determines if the server is an active balancer or not.
     *
     * @return self
     */
    public function setActiveWeb($active_web)
    {
        if (is_null($active_web)) {
            throw new \InvalidArgumentException('non-nullable active_web cannot be null');
        }
        $this->container['active_web'] = $active_web;

        return $this;
    }

    /**
     * Gets active_bal
     *
     * @return bool|null
     */
    public function getActiveBal()
    {
        return $this->container['active_bal'];
    }

    /**
     * Sets active_bal
     *
     * @param bool|null $active_bal Determines if the server is an active web server or not.
     *
     * @return self
     */
    public function setActiveBal($active_bal)
    {
        if (is_null($active_bal)) {
            throw new \InvalidArgumentException('non-nullable active_bal cannot be null');
        }
        $this->container['active_bal'] = $active_bal;

        return $this;
    }

    /**
     * Gets primary_db
     *
     * @return bool|null
     */
    public function getPrimaryDb()
    {
        return $this->container['primary_db'];
    }

    /**
     * Sets primary_db
     *
     * @param bool|null $primary_db Determines if the server is the primary database.  Note that \"false\" does not imply that this is the secondary database. The server must be a database, and not primary in order to be the secondary database.
     *
     * @return self
     */
    public function setPrimaryDb($primary_db)
    {
        if (is_null($primary_db)) {
            throw new \InvalidArgumentException('non-nullable primary_db cannot be null');
        }
        $this->container['primary_db'] = $primary_db;

        return $this;
    }

    /**
     * Gets web
     *
     * @return bool|null
     */
    public function getWeb()
    {
        return $this->container['web'];
    }

    /**
     * Sets web
     *
     * @param bool|null $web Determines if the server is a web server.
     *
     * @return self
     */
    public function setWeb($web)
    {
        if (is_null($web)) {
            throw new \InvalidArgumentException('non-nullable web cannot be null');
        }
        $this->container['web'] = $web;

        return $this;
    }

    /**
     * Gets database
     *
     * @return bool|null
     */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
     * Sets database
     *
     * @param bool|null $database Determines if the server is a database server.
     *
     * @return self
     */
    public function setDatabase($database)
    {
        if (is_null($database)) {
            throw new \InvalidArgumentException('non-nullable database cannot be null');
        }
        $this->container['database'] = $database;

        return $this;
    }

    /**
     * Gets balancer
     *
     * @return bool|null
     */
    public function getBalancer()
    {
        return $this->container['balancer'];
    }

    /**
     * Sets balancer
     *
     * @param bool|null $balancer Determines if the server is a balancer.
     *
     * @return self
     */
    public function setBalancer($balancer)
    {
        if (is_null($balancer)) {
            throw new \InvalidArgumentException('non-nullable balancer cannot be null');
        }
        $this->container['balancer'] = $balancer;

        return $this;
    }

    /**
     * Gets fs
     *
     * @return bool|null
     */
    public function getFs()
    {
        return $this->container['fs'];
    }

    /**
     * Sets fs
     *
     * @param bool|null $fs Determines if the server is a file server.
     *
     * @return self
     */
    public function setFs($fs)
    {
        if (is_null($fs)) {
            throw new \InvalidArgumentException('non-nullable fs cannot be null');
        }
        $this->container['fs'] = $fs;

        return $this;
    }

    /**
     * Gets memcache
     *
     * @return bool|null
     */
    public function getMemcache()
    {
        return $this->container['memcache'];
    }

    /**
     * Sets memcache
     *
     * @param bool|null $memcache Determines if the server is a memcache server.
     *
     * @return self
     */
    public function setMemcache($memcache)
    {
        if (is_null($memcache)) {
            throw new \InvalidArgumentException('non-nullable memcache cannot be null');
        }
        $this->container['memcache'] = $memcache;

        return $this;
    }

    /**
     * Gets dedicated
     *
     * @return bool|null
     */
    public function getDedicated()
    {
        return $this->container['dedicated'];
    }

    /**
     * Sets dedicated
     *
     * @param bool|null $dedicated Determines if the server is dedicated or shared.
     *
     * @return self
     */
    public function setDedicated($dedicated)
    {
        if (is_null($dedicated)) {
            throw new \InvalidArgumentException('non-nullable dedicated cannot be null');
        }
        $this->container['dedicated'] = $dedicated;

        return $this;
    }

    /**
     * Gets self_service
     *
     * @return bool|null
     */
    public function getSelfService()
    {
        return $this->container['self_service'];
    }

    /**
     * Sets self_service
     *
     * @param bool|null $self_service Determines if the server is self-service.
     *
     * @return self
     */
    public function setSelfService($self_service)
    {
        if (is_null($self_service)) {
            throw new \InvalidArgumentException('non-nullable self_service cannot be null');
        }
        $this->container['self_service'] = $self_service;

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


