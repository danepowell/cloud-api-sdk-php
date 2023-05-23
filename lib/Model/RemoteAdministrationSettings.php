<?php
/**
 * RemoteAdministrationSettings
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
 * RemoteAdministrationSettings Class Doc Comment
 *
 * @category Class
 * @package  Acquia\CloudApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RemoteAdministrationSettings implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RemoteAdministrationSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'application_uuid' => 'string',
        'update_mode' => 'string',
        'update_type' => 'string',
        'pause_until' => '\DateTime',
        'deploy_at' => '\DateTime',
        'deploy_environment' => 'string',
        'source_environment' => 'string',
        'merge_branch' => 'string',
        'flags' => '\Acquia\CloudApi\Model\RemoteAdministrationSettingsFlags',
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
        'application_uuid' => 'uuid',
        'update_mode' => null,
        'update_type' => null,
        'pause_until' => 'date-time',
        'deploy_at' => 'date-time',
        'deploy_environment' => null,
        'source_environment' => null,
        'merge_branch' => null,
        'flags' => null,
        '_links' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'application_uuid' => false,
		'update_mode' => false,
		'update_type' => false,
		'pause_until' => false,
		'deploy_at' => false,
		'deploy_environment' => false,
		'source_environment' => false,
		'merge_branch' => true,
		'flags' => false,
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
        'application_uuid' => 'application_uuid',
        'update_mode' => 'update_mode',
        'update_type' => 'update_type',
        'pause_until' => 'pause_until',
        'deploy_at' => 'deploy_at',
        'deploy_environment' => 'deploy_environment',
        'source_environment' => 'source_environment',
        'merge_branch' => 'merge_branch',
        'flags' => 'flags',
        '_links' => '_links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application_uuid' => 'setApplicationUuid',
        'update_mode' => 'setUpdateMode',
        'update_type' => 'setUpdateType',
        'pause_until' => 'setPauseUntil',
        'deploy_at' => 'setDeployAt',
        'deploy_environment' => 'setDeployEnvironment',
        'source_environment' => 'setSourceEnvironment',
        'merge_branch' => 'setMergeBranch',
        'flags' => 'setFlags',
        '_links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application_uuid' => 'getApplicationUuid',
        'update_mode' => 'getUpdateMode',
        'update_type' => 'getUpdateType',
        'pause_until' => 'getPauseUntil',
        'deploy_at' => 'getDeployAt',
        'deploy_environment' => 'getDeployEnvironment',
        'source_environment' => 'getSourceEnvironment',
        'merge_branch' => 'getMergeBranch',
        'flags' => 'getFlags',
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

    public const UPDATE_MODE_FULL = 'full';
    public const UPDATE_MODE_INFORM = 'inform';
    public const UPDATE_MODE_NONE = 'none';
    public const UPDATE_TYPE_CORE = 'core';
    public const UPDATE_TYPE_CORE_CONTRIB = 'core_contrib';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUpdateModeAllowableValues()
    {
        return [
            self::UPDATE_MODE_FULL,
            self::UPDATE_MODE_INFORM,
            self::UPDATE_MODE_NONE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUpdateTypeAllowableValues()
    {
        return [
            self::UPDATE_TYPE_CORE,
            self::UPDATE_TYPE_CORE_CONTRIB,
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
        $this->setIfExists('application_uuid', $data ?? [], null);
        $this->setIfExists('update_mode', $data ?? [], null);
        $this->setIfExists('update_type', $data ?? [], null);
        $this->setIfExists('pause_until', $data ?? [], null);
        $this->setIfExists('deploy_at', $data ?? [], null);
        $this->setIfExists('deploy_environment', $data ?? [], null);
        $this->setIfExists('source_environment', $data ?? [], null);
        $this->setIfExists('merge_branch', $data ?? [], null);
        $this->setIfExists('flags', $data ?? [], null);
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

        $allowedValues = $this->getUpdateModeAllowableValues();
        if (!is_null($this->container['update_mode']) && !in_array($this->container['update_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'update_mode', must be one of '%s'",
                $this->container['update_mode'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getUpdateTypeAllowableValues();
        if (!is_null($this->container['update_type']) && !in_array($this->container['update_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'update_type', must be one of '%s'",
                $this->container['update_type'],
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
     * Gets application_uuid
     *
     * @return string|null
     */
    public function getApplicationUuid()
    {
        return $this->container['application_uuid'];
    }

    /**
     * Sets application_uuid
     *
     * @param string|null $application_uuid The application UUID.
     *
     * @return self
     */
    public function setApplicationUuid($application_uuid)
    {
        if (is_null($application_uuid)) {
            throw new \InvalidArgumentException('non-nullable application_uuid cannot be null');
        }
        $this->container['application_uuid'] = $application_uuid;

        return $this;
    }

    /**
     * Gets update_mode
     *
     * @return string|null
     */
    public function getUpdateMode()
    {
        return $this->container['update_mode'];
    }

    /**
     * Sets update_mode
     *
     * @param string|null $update_mode The remote administration update setting.
     *
     * @return self
     */
    public function setUpdateMode($update_mode)
    {
        if (is_null($update_mode)) {
            throw new \InvalidArgumentException('non-nullable update_mode cannot be null');
        }
        $allowedValues = $this->getUpdateModeAllowableValues();
        if (!in_array($update_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'update_mode', must be one of '%s'",
                    $update_mode,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['update_mode'] = $update_mode;

        return $this;
    }

    /**
     * Gets update_type
     *
     * @return string|null
     */
    public function getUpdateType()
    {
        return $this->container['update_type'];
    }

    /**
     * Sets update_type
     *
     * @param string|null $update_type The remote administration update type (i.e. what to update).
     *
     * @return self
     */
    public function setUpdateType($update_type)
    {
        if (is_null($update_type)) {
            throw new \InvalidArgumentException('non-nullable update_type cannot be null');
        }
        $allowedValues = $this->getUpdateTypeAllowableValues();
        if (!in_array($update_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'update_type', must be one of '%s'",
                    $update_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['update_type'] = $update_type;

        return $this;
    }

    /**
     * Gets pause_until
     *
     * @return \DateTime|null
     */
    public function getPauseUntil()
    {
        return $this->container['pause_until'];
    }

    /**
     * Sets pause_until
     *
     * @param \DateTime|null $pause_until The ISO-8601 formatted date/time to pause RA until. Only applicable for 'full' and 'inform' update modes and when it is in future.
     *
     * @return self
     */
    public function setPauseUntil($pause_until)
    {
        if (is_null($pause_until)) {
            throw new \InvalidArgumentException('non-nullable pause_until cannot be null');
        }
        $this->container['pause_until'] = $pause_until;

        return $this;
    }

    /**
     * Gets deploy_at
     *
     * @return \DateTime|null
     */
    public function getDeployAt()
    {
        return $this->container['deploy_at'];
    }

    /**
     * Sets deploy_at
     *
     * @param \DateTime|null $deploy_at The ISO-8601 formatted date/time to deploy RA at. Only applicable for 'full' and 'inform' update modes and when it is in future.
     *
     * @return self
     */
    public function setDeployAt($deploy_at)
    {
        if (is_null($deploy_at)) {
            throw new \InvalidArgumentException('non-nullable deploy_at cannot be null');
        }
        $this->container['deploy_at'] = $deploy_at;

        return $this;
    }

    /**
     * Gets deploy_environment
     *
     * @return string|null
     */
    public function getDeployEnvironment()
    {
        return $this->container['deploy_environment'];
    }

    /**
     * Sets deploy_environment
     *
     * @param string|null $deploy_environment The environment to deploy the code and production database to for testing.
     *
     * @return self
     */
    public function setDeployEnvironment($deploy_environment)
    {
        if (is_null($deploy_environment)) {
            throw new \InvalidArgumentException('non-nullable deploy_environment cannot be null');
        }
        $this->container['deploy_environment'] = $deploy_environment;

        return $this;
    }

    /**
     * Gets source_environment
     *
     * @return string|null
     */
    public function getSourceEnvironment()
    {
        return $this->container['source_environment'];
    }

    /**
     * Sets source_environment
     *
     * @param string|null $source_environment The update source environment. Only applicable for 'full' mode.
     *
     * @return self
     */
    public function setSourceEnvironment($source_environment)
    {
        if (is_null($source_environment)) {
            throw new \InvalidArgumentException('non-nullable source_environment cannot be null');
        }
        $this->container['source_environment'] = $source_environment;

        return $this;
    }

    /**
     * Gets merge_branch
     *
     * @return string|null
     */
    public function getMergeBranch()
    {
        return $this->container['merge_branch'];
    }

    /**
     * Sets merge_branch
     *
     * @param string|null $merge_branch The development branch into which the update tag will be merged.
     *
     * @return self
     */
    public function setMergeBranch($merge_branch)
    {
        if (is_null($merge_branch)) {
            array_push($this->openAPINullablesSetToNull, 'merge_branch');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merge_branch', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merge_branch'] = $merge_branch;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return \Acquia\CloudApi\Model\RemoteAdministrationSettingsFlags|null
     */
    public function getFlags()
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param \Acquia\CloudApi\Model\RemoteAdministrationSettingsFlags|null $flags flags
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
     * Gets _links
     *
     * @return \Acquia\CloudApi\Model\Links|null
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \Acquia\CloudApi\Model\Links|null $_links _links
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

