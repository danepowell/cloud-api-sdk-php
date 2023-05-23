# Acquia\CloudApi\ApplicationsApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteApplicationSearchConfigurationSet()**](ApplicationsApi.md#deleteApplicationSearchConfigurationSet) | **DELETE** /applications/{applicationUuid}/search/config-sets/{configurationSetId} | Removes and deletes a specific search configuration set from an application. |
| [**deleteApplicationTags()**](ApplicationsApi.md#deleteApplicationTags) | **DELETE** /applications/{applicationUuid}/tags/{tagName} | Deletes an application tag. |
| [**getApplicationByUuid()**](ApplicationsApi.md#getApplicationByUuid) | **GET** /applications/{applicationUuid} | Return details about a specific application. |
| [**getApplicationDatabases()**](ApplicationsApi.md#getApplicationDatabases) | **GET** /applications/{applicationUuid}/databases | Returns a list database names for the application. |
| [**getApplicationEmailDomains()**](ApplicationsApi.md#getApplicationEmailDomains) | **GET** /applications/{applicationUuid}/email/domains | Returns a list of email domains associated with the application. |
| [**getApplicationEnvironments()**](ApplicationsApi.md#getApplicationEnvironments) | **GET** /applications/{applicationUuid}/environments | Returns a list of environments within this application by its UUID. |
| [**getApplicationFeatures()**](ApplicationsApi.md#getApplicationFeatures) | **GET** /applications/{applicationUuid}/features | Return application features. |
| [**getApplicationHostingSettings()**](ApplicationsApi.md#getApplicationHostingSettings) | **GET** /applications/{applicationUuid}/settings/hosting | Returns the hosting settings for this application. |
| [**getApplicationIdes()**](ApplicationsApi.md#getApplicationIdes) | **GET** /applications/{applicationUuid}/ides | Returns a list of Cloud IDEs associated with this application. |
| [**getApplicationLegacyProductKeysSettings()**](ApplicationsApi.md#getApplicationLegacyProductKeysSettings) | **GET** /applications/{applicationUuid}/settings/keys | Returns the legacy product keys for this application. |
| [**getApplicationMessages()**](ApplicationsApi.md#getApplicationMessages) | **GET** /applications/{applicationUuid}/messages | Returns a list of messages associated with this application. |
| [**getApplicationNotificationByUuid()**](ApplicationsApi.md#getApplicationNotificationByUuid) | **GET** /applications/{applicationUuid}/notifications/{notificationUuid} | Returns a single notification. |
| [**getApplicationNotifications()**](ApplicationsApi.md#getApplicationNotifications) | **GET** /applications/{applicationUuid}/notifications | Returns a list of notifications associated with this application by its UUID. |
| [**getApplicationPermissions()**](ApplicationsApi.md#getApplicationPermissions) | **GET** /applications/{applicationUuid}/permissions | Returns a list of permissions the user has for this application by its UUID. |
| [**getApplicationRemoteAdministrationSettings()**](ApplicationsApi.md#getApplicationRemoteAdministrationSettings) | **GET** /applications/{applicationUuid}/settings/ra | Returns the remote administration settings for this application. |
| [**getApplicationSearchConfigurationSet()**](ApplicationsApi.md#getApplicationSearchConfigurationSet) | **GET** /applications/{applicationUuid}/search/config-sets/{configurationSetId} | Returns a search configuration set for an application |
| [**getApplicationSearchConfigurationSets()**](ApplicationsApi.md#getApplicationSearchConfigurationSets) | **GET** /applications/{applicationUuid}/search/config-sets | Returns a collection of search configuration sets for an application |
| [**getApplicationSearchList()**](ApplicationsApi.md#getApplicationSearchList) | **GET** /applications/{applicationUuid}/search | Returns a traversal endpoint for search entities for the application. |
| [**getApplicationSecuritySettings()**](ApplicationsApi.md#getApplicationSecuritySettings) | **GET** /applications/{applicationUuid}/settings/security | Returns the security policy settings for this application. |
| [**getApplicationSettings()**](ApplicationsApi.md#getApplicationSettings) | **GET** /applications/{applicationUuid}/settings | Returns available settings for this application. |
| [**getApplicationTags()**](ApplicationsApi.md#getApplicationTags) | **GET** /applications/{applicationUuid}/tags | Returns a list of application tags associated with this application. |
| [**getApplicationTasks()**](ApplicationsApi.md#getApplicationTasks) | **GET** /applications/{applicationUuid}/tasks | Returns a list of tasks associated with this application by its UUID. |
| [**getApplicationTeams()**](ApplicationsApi.md#getApplicationTeams) | **GET** /applications/{applicationUuid}/teams | Returns a list of teams associated with this application. |
| [**getApplications()**](ApplicationsApi.md#getApplications) | **GET** /applications | Return a list of applications the current user has access to. |
| [**getApplicationsUsageData()**](ApplicationsApi.md#getApplicationsUsageData) | **GET** /applications/{applicationUuid}/metrics/usage/data | Retrieves aggregate usage data for an application, filterable by views or visits and by environment. |
| [**getApplicationsUsageDataByEnvironment()**](ApplicationsApi.md#getApplicationsUsageDataByEnvironment) | **GET** /applications/{applicationUuid}/metrics/usage/data-by-environment | Retrieves usage data (views or visits) for an application, broken down by environment. |
| [**getApplicationsUsageLinks()**](ApplicationsApi.md#getApplicationsUsageLinks) | **GET** /applications/{applicationUuid}/metrics/usage | Retrieves traversal links for detailed metrics on usage (views and visits) of your application. |
| [**getApplicationsUsageMetricData()**](ApplicationsApi.md#getApplicationsUsageMetricData) | **GET** /applications/{applicationUuid}/metrics/usage/{usageMetric} | Retrieves aggregate usage metric data (views or visits) for an application.. |
| [**getApplicationsUsageViewsDataByEnvironment()**](ApplicationsApi.md#getApplicationsUsageViewsDataByEnvironment) | **GET** /applications/{applicationUuid}/metrics/usage/views-by-environment | Retrieves views data for an application, broken down by environment. |
| [**getApplicationsUsageVisitsDataByEnvironment()**](ApplicationsApi.md#getApplicationsUsageVisitsDataByEnvironment) | **GET** /applications/{applicationUuid}/metrics/usage/visits-by-environment | Retrieves visits data for an application, broken down by environment. |
| [**getArtifactByApplicationUuidAndId()**](ApplicationsApi.md#getArtifactByApplicationUuidAndId) | **GET** /applications/{applicationUuid}/artifacts/{artifactId} | Return details about a specific artifact. |
| [**getArtifactsByApplicationUuid()**](ApplicationsApi.md#getArtifactsByApplicationUuid) | **GET** /applications/{applicationUuid}/artifacts | Return application artifacts. |
| [**getCodeByApplicationUuid()**](ApplicationsApi.md#getCodeByApplicationUuid) | **GET** /applications/{applicationUuid}/code | Return application branches and release tags. |
| [**postApplicationAssociateEmailDomain()**](ApplicationsApi.md#postApplicationAssociateEmailDomain) | **POST** /applications/{applicationUuid}/email/domains/{domainRegistrationUuid}/actions/associate | Associates an email domain with an Application. |
| [**postApplicationDatabaseCreate()**](ApplicationsApi.md#postApplicationDatabaseCreate) | **POST** /applications/{applicationUuid}/databases | Creates a database. |
| [**postApplicationDatabaseDelete()**](ApplicationsApi.md#postApplicationDatabaseDelete) | **DELETE** /applications/{applicationUuid}/databases/{name} | Drops (deletes) a database. |
| [**postApplicationDatabaseErase()**](ApplicationsApi.md#postApplicationDatabaseErase) | **POST** /applications/{applicationUuid}/databases/{name}/actions/erase | Erases (truncates) a database. |
| [**postApplicationDisassociateEmailDomain()**](ApplicationsApi.md#postApplicationDisassociateEmailDomain) | **POST** /applications/{applicationUuid}/email/domains/{domainRegistrationUuid}/actions/disassociate | Disassociates an email domain with an Application. |
| [**postApplicationEnvironments()**](ApplicationsApi.md#postApplicationEnvironments) | **POST** /applications/{applicationUuid}/environments | Add a new continuous delivery environment to an application by the application UUID. |
| [**postApplicationSearchConfigurationSets()**](ApplicationsApi.md#postApplicationSearchConfigurationSets) | **POST** /applications/{applicationUuid}/search/config-sets | Creates a search configuration set for an application. |
| [**postApplicationsIde()**](ApplicationsApi.md#postApplicationsIde) | **POST** /applications/{applicationUuid}/ides | Creates a new Cloud IDE. |
| [**postApplicationsTags()**](ApplicationsApi.md#postApplicationsTags) | **POST** /applications/{applicationUuid}/tags | Creates a new application tag. |
| [**putApplicationByUuid()**](ApplicationsApi.md#putApplicationByUuid) | **PUT** /applications/{applicationUuid} | Renames an application. |
| [**putApplicationRemoteAdministrationSettings()**](ApplicationsApi.md#putApplicationRemoteAdministrationSettings) | **PUT** /applications/{applicationUuid}/settings/ra | Modifies the remote administration settings for an application. |
| [**putApplicationSecuritySettings()**](ApplicationsApi.md#putApplicationSecuritySettings) | **PUT** /applications/{applicationUuid}/settings/security | Modifies the security policy settings for an application. |


## `deleteApplicationSearchConfigurationSet()`

```php
deleteApplicationSearchConfigurationSet($application_uuid, $configuration_set_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Removes and deletes a specific search configuration set from an application.

Removes and deletes a specific search configuration set from an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$configuration_set_id = ABCDE-1234.12345ab6c7e8f90g12i1jk234l56mn78; // string | An ID that uniquely identifies a configuration set.

try {
    $result = $apiInstance->deleteApplicationSearchConfigurationSet($application_uuid, $configuration_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->deleteApplicationSearchConfigurationSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **configuration_set_id** | **string**| An ID that uniquely identifies a configuration set. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApplicationTags()`

```php
deleteApplicationTags($application_uuid, $tag_name): \Acquia\CloudApi\Model\MessageWithLinks
```

Deletes an application tag.

Deletes an application tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$tag_name = green; // string | The name of the application tag.

try {
    $result = $apiInstance->deleteApplicationTags($application_uuid, $tag_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->deleteApplicationTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **tag_name** | **string**| The name of the application tag. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationByUuid()`

```php
getApplicationByUuid($application_uuid): \Acquia\CloudApi\Model\Application
```

Return details about a specific application.

A specific application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationByUuid($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Application**](../Model/Application.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationDatabases()`

```php
getApplicationDatabases($application_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\ApplicationDatabases
```

Returns a list database names for the application.

Filterable fields: * `name`  Sortable fields: * `name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getApplicationDatabases($application_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationDatabases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\ApplicationDatabases**](../Model/ApplicationDatabases.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationEmailDomains()`

```php
getApplicationEmailDomains($application_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\EmailDomains
```

Returns a list of email domains associated with the application.

Returns a list of email domains associated with the application and domains that have been verified at the subscription level.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getApplicationEmailDomains($application_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationEmailDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\EmailDomains**](../Model/EmailDomains.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationEnvironments()`

```php
getApplicationEnvironments($application_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\Environments
```

Returns a list of environments within this application by its UUID.

Returns a list of environments within this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getApplicationEnvironments($application_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationEnvironments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Environments**](../Model/Environments.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationFeatures()`

```php
getApplicationFeatures($application_uuid): \Acquia\CloudApi\Model\ApplicationFeatures
```

Return application features.

Returns a list of feature flags for this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationFeatures($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationFeatures: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\ApplicationFeatures**](../Model/ApplicationFeatures.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationHostingSettings()`

```php
getApplicationHostingSettings($application_uuid): \Acquia\CloudApi\Model\HostingSettings
```

Returns the hosting settings for this application.

Returns the hosting settings for this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationHostingSettings($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationHostingSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\HostingSettings**](../Model/HostingSettings.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationIdes()`

```php
getApplicationIdes($application_uuid): \Acquia\CloudApi\Model\Ides
```

Returns a list of Cloud IDEs associated with this application.

Returns a list of Cloud IDEs associated with this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationIdes($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationIdes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Ides**](../Model/Ides.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationLegacyProductKeysSettings()`

```php
getApplicationLegacyProductKeysSettings($application_uuid): \Acquia\CloudApi\Model\LegacyProductKeysSettings
```

Returns the legacy product keys for this application.

Returns the legacy product keys for this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationLegacyProductKeysSettings($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationLegacyProductKeysSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\LegacyProductKeysSettings**](../Model/LegacyProductKeysSettings.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationMessages()`

```php
getApplicationMessages($application_uuid, $from, $to, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\UxMessages
```

Returns a list of messages associated with this application.

Filterable fields: * `title` * `message_type` * `display_mode`  Sortable fields: * `title` * `message_type` * `display_mode`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getApplicationMessages($application_uuid, $from, $to, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\UxMessages**](../Model/UxMessages.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationNotificationByUuid()`

```php
getApplicationNotificationByUuid($application_uuid, $notification_uuid): \Acquia\CloudApi\Model\Notification
```

Returns a single notification.

Returns a single notification. This could be either an event or a task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$notification_uuid = 2343b683-b194-4217-982a-6a95c72ad9a8; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationNotificationByUuid($application_uuid, $notification_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationNotificationByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **notification_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Notification**](../Model/Notification.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationNotifications()`

```php
getApplicationNotifications($application_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\ApplicationsNotifications
```

Returns a list of notifications associated with this application by its UUID.

Returns a list of notifications associated with this application. A notification represents an item of work to be done, initiated by someone (typically the current user) associated with the application.  Filterable fields: * `event` * `label` * `description` * `status` * `author` * `created_at` * `completed_at`  Sortable fields: * `event` * `label` * `description` * `status` * `author` * `created_at` * `completed_at`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getApplicationNotifications($application_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\ApplicationsNotifications**](../Model/ApplicationsNotifications.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationPermissions()`

```php
getApplicationPermissions($application_uuid): \Acquia\CloudApi\Model\ApplicationsPermissions
```

Returns a list of permissions the user has for this application by its UUID.

Returns a list of permissions the user has for this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationPermissions($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\ApplicationsPermissions**](../Model/ApplicationsPermissions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationRemoteAdministrationSettings()`

```php
getApplicationRemoteAdministrationSettings($application_uuid): \Acquia\CloudApi\Model\RemoteAdministrationSettings
```

Returns the remote administration settings for this application.

Returns the remote administration settings for this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationRemoteAdministrationSettings($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationRemoteAdministrationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\RemoteAdministrationSettings**](../Model/RemoteAdministrationSettings.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationSearchConfigurationSet()`

```php
getApplicationSearchConfigurationSet($application_uuid, $configuration_set_id): \Acquia\CloudApi\Model\ConfigurationSet
```

Returns a search configuration set for an application

A specific search configuration set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$configuration_set_id = ABCDE-1234.12345ab6c7e8f90g12i1jk234l56mn78; // string | An ID that uniquely identifies a configuration set.

try {
    $result = $apiInstance->getApplicationSearchConfigurationSet($application_uuid, $configuration_set_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationSearchConfigurationSet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **configuration_set_id** | **string**| An ID that uniquely identifies a configuration set. | |

### Return type

[**\Acquia\CloudApi\Model\ConfigurationSet**](../Model/ConfigurationSet.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationSearchConfigurationSets()`

```php
getApplicationSearchConfigurationSets($application_uuid): \Acquia\CloudApi\Model\ConfigurationSets
```

Returns a collection of search configuration sets for an application

A collection of search configuration sets for an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationSearchConfigurationSets($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationSearchConfigurationSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\ConfigurationSets**](../Model/ConfigurationSets.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationSearchList()`

```php
getApplicationSearchList($application_uuid): \Acquia\CloudApi\Model\Search
```

Returns a traversal endpoint for search entities for the application.

Does not return any data. Allows traversal to search entity endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationSearchList($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationSearchList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Search**](../Model/Search.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationSecuritySettings()`

```php
getApplicationSecuritySettings($application_uuid): \Acquia\CloudApi\Model\SecuritySettings
```

Returns the security policy settings for this application.

Returns the security policy settings for this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationSecuritySettings($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationSecuritySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\SecuritySettings**](../Model/SecuritySettings.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationSettings()`

```php
getApplicationSettings($application_uuid): \Acquia\CloudApi\Model\Settings
```

Returns available settings for this application.

Does not return any data. Allows traversal to settings groups endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationSettings($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Settings**](../Model/Settings.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationTags()`

```php
getApplicationTags($application_uuid): \Acquia\CloudApi\Model\ResourceTags
```

Returns a list of application tags associated with this application.

Returns a list of application tags associated with this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationTags($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\ResourceTags**](../Model/ResourceTags.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationTasks()`

```php
getApplicationTasks($application_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\ApplicationsTasks
```

Returns a list of tasks associated with this application by its UUID.

Returns a list of tasks associated with this application. A task represents an item of work to be done, initiated by someone (typically the current user) associated with the application.  Filterable fields: * `name` * `title` * `created` * `completed` * `started`  Sortable fields: * `name` * `title` * `created` * `completed` * `started`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getApplicationTasks($application_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationTasks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\ApplicationsTasks**](../Model/ApplicationsTasks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationTeams()`

```php
getApplicationTeams($application_uuid, $from, $to, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\ApplicationsTeams
```

Returns a list of teams associated with this application.

Returns a list of teams associated with this application by its UUID.  Filterable fields: * `name`  Sortable fields: * `name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getApplicationTeams($application_uuid, $from, $to, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\ApplicationsTeams**](../Model/ApplicationsTeams.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplications()`

```php
getApplications($sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\Applications
```

Return a list of applications the current user has access to.

Applications contains the code, files, and databases required to run sites. You have access to an application if you are a member of a team that has access to an application, or if you are an administrator or owner of the organization that the application belongs to. A subscription may contain one or more applications.  Filterable fields: * `label` * <s>`name`</s> (Deprecated) * `organization_name` * <s>`hosting`</s> (Deprecated) Use URL encoded colon (%3A) to separate realm and sitegroup, e.g. network%3An3 instead of network:n3  Sortable fields: * `label` * <s>`name`</s>  (Deprecated) * `organization_name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getApplications($sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Applications**](../Model/Applications.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationsUsageData()`

```php
getApplicationsUsageData($application_uuid, $from, $to, $filter, $resolution): \Acquia\CloudApi\Model\ApplicationUsageMetrics
```

Retrieves aggregate usage data for an application, filterable by views or visits and by environment.

Filterable fields: * `metric` - One of: {`views`, `visits`} * `environment`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$resolution = 'resolution_example'; // string | Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \"week\" resolution - 3 year limit for “month” resolution

try {
    $result = $apiInstance->getApplicationsUsageData($application_uuid, $from, $to, $filter, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationsUsageData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **resolution** | **string**| Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \&quot;week\&quot; resolution - 3 year limit for “month” resolution | [optional] |

### Return type

[**\Acquia\CloudApi\Model\ApplicationUsageMetrics**](../Model/ApplicationUsageMetrics.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationsUsageDataByEnvironment()`

```php
getApplicationsUsageDataByEnvironment($application_uuid, $from, $to, $filter, $resolution): \Acquia\CloudApi\Model\ApplicationUsageMetric
```

Retrieves usage data (views or visits) for an application, broken down by environment.

Filterable fields: * `metric` - One of: {`views`, `visits`} * `environment`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$resolution = 'resolution_example'; // string | Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \"week\" resolution - 3 year limit for “month” resolution

try {
    $result = $apiInstance->getApplicationsUsageDataByEnvironment($application_uuid, $from, $to, $filter, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationsUsageDataByEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **resolution** | **string**| Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \&quot;week\&quot; resolution - 3 year limit for “month” resolution | [optional] |

### Return type

[**\Acquia\CloudApi\Model\ApplicationUsageMetric**](../Model/ApplicationUsageMetric.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationsUsageLinks()`

```php
getApplicationsUsageLinks($application_uuid): \Acquia\CloudApi\Model\Usage
```

Retrieves traversal links for detailed metrics on usage (views and visits) of your application.

Retrieves traversal links for an application's usage data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getApplicationsUsageLinks($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationsUsageLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Usage**](../Model/Usage.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationsUsageMetricData()`

```php
getApplicationsUsageMetricData($usage_metric, $application_uuid, $from, $to): \Acquia\CloudApi\Model\ApplicationUsageMetric
```

Retrieves aggregate usage metric data (views or visits) for an application..

Filterable fields: * `environment`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usage_metric = ["views"]; // string | A usage data metric type.
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.

try {
    $result = $apiInstance->getApplicationsUsageMetricData($usage_metric, $application_uuid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationsUsageMetricData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **usage_metric** | **string**| A usage data metric type. | |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\ApplicationUsageMetric**](../Model/ApplicationUsageMetric.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationsUsageViewsDataByEnvironment()`

```php
getApplicationsUsageViewsDataByEnvironment($application_uuid, $from, $to, $filter, $resolution): \Acquia\CloudApi\Model\ApplicationUsageMetric
```

Retrieves views data for an application, broken down by environment.

Filterable fields: * `environment`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$resolution = 'resolution_example'; // string | Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \"week\" resolution - 3 year limit for “month” resolution

try {
    $result = $apiInstance->getApplicationsUsageViewsDataByEnvironment($application_uuid, $from, $to, $filter, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationsUsageViewsDataByEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **resolution** | **string**| Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \&quot;week\&quot; resolution - 3 year limit for “month” resolution | [optional] |

### Return type

[**\Acquia\CloudApi\Model\ApplicationUsageMetric**](../Model/ApplicationUsageMetric.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getApplicationsUsageVisitsDataByEnvironment()`

```php
getApplicationsUsageVisitsDataByEnvironment($application_uuid, $from, $to, $filter, $resolution): \Acquia\CloudApi\Model\ApplicationUsageMetric
```

Retrieves visits data for an application, broken down by environment.

Filterable fields: * `environment`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$resolution = 'resolution_example'; // string | Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \"week\" resolution - 3 year limit for “month” resolution

try {
    $result = $apiInstance->getApplicationsUsageVisitsDataByEnvironment($application_uuid, $from, $to, $filter, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getApplicationsUsageVisitsDataByEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **resolution** | **string**| Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \&quot;week\&quot; resolution - 3 year limit for “month” resolution | [optional] |

### Return type

[**\Acquia\CloudApi\Model\ApplicationUsageMetric**](../Model/ApplicationUsageMetric.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArtifactByApplicationUuidAndId()`

```php
getArtifactByApplicationUuidAndId($application_uuid, $artifact_id): \Acquia\CloudApi\Model\Artifact
```

Return details about a specific artifact.

A specific artifact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$artifact_id = drupal8; // string | An ID that uniquely identifies an artifact.

try {
    $result = $apiInstance->getArtifactByApplicationUuidAndId($application_uuid, $artifact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getArtifactByApplicationUuidAndId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **artifact_id** | **string**| An ID that uniquely identifies an artifact. | |

### Return type

[**\Acquia\CloudApi\Model\Artifact**](../Model/Artifact.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getArtifactsByApplicationUuid()`

```php
getArtifactsByApplicationUuid($application_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\Artifacts
```

Return application artifacts.

Returns a list of this application's build artifacts. Only available for Node.js applications.  Filterable fields: * `created` * `name`  Sortable fields: * `created` * `name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getArtifactsByApplicationUuid($application_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getArtifactsByApplicationUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Artifacts**](../Model/Artifacts.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCodeByApplicationUuid()`

```php
getCodeByApplicationUuid($application_uuid, $sort, $filter): \Acquia\CloudApi\Model\Code
```

Return application branches and release tags.

Returns a list of branches and release (repository) tags in this application's version control system.  Filterable fields: * `name`  Sortable fields: * `name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)

try {
    $result = $apiInstance->getCodeByApplicationUuid($application_uuid, $sort, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->getCodeByApplicationUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Code**](../Model/Code.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApplicationAssociateEmailDomain()`

```php
postApplicationAssociateEmailDomain($application_uuid, $domain_registration_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Associates an email domain with an Application.

Associates an email domain with an Application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$domain_registration_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The Domain Registration universally unique identifier.

try {
    $result = $apiInstance->postApplicationAssociateEmailDomain($application_uuid, $domain_registration_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->postApplicationAssociateEmailDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **domain_registration_uuid** | **string**| The Domain Registration universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApplicationDatabaseCreate()`

```php
postApplicationDatabaseCreate($application_uuid, $post_application_database_create_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Creates a database.

This action will create a new database within each environment of the application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$post_application_database_create_request = {"name":"my_db_name"}; // \Acquia\CloudApi\Model\PostApplicationDatabaseCreateRequest

try {
    $result = $apiInstance->postApplicationDatabaseCreate($application_uuid, $post_application_database_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->postApplicationDatabaseCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **post_application_database_create_request** | [**\Acquia\CloudApi\Model\PostApplicationDatabaseCreateRequest**](../Model/PostApplicationDatabaseCreateRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApplicationDatabaseDelete()`

```php
postApplicationDatabaseDelete($application_uuid, $name): \Acquia\CloudApi\Model\MessageWithLinks
```

Drops (deletes) a database.

This action will delete the database in ALL environments within this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$name = drupal8; // string | A name that uniquely identifies an entity.

try {
    $result = $apiInstance->postApplicationDatabaseDelete($application_uuid, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->postApplicationDatabaseDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **name** | **string**| A name that uniquely identifies an entity. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApplicationDatabaseErase()`

```php
postApplicationDatabaseErase($application_uuid, $name): \Acquia\CloudApi\Model\MessageWithLinks
```

Erases (truncates) a database.

This action will delete all tables of the database in ALL environments within this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$name = drupal8; // string | A name that uniquely identifies an entity.

try {
    $result = $apiInstance->postApplicationDatabaseErase($application_uuid, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->postApplicationDatabaseErase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **name** | **string**| A name that uniquely identifies an entity. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApplicationDisassociateEmailDomain()`

```php
postApplicationDisassociateEmailDomain($application_uuid, $domain_registration_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Disassociates an email domain with an Application.

Disassociates an email domain with an Application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$domain_registration_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The Domain Registration universally unique identifier.

try {
    $result = $apiInstance->postApplicationDisassociateEmailDomain($application_uuid, $domain_registration_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->postApplicationDisassociateEmailDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **domain_registration_uuid** | **string**| The Domain Registration universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApplicationEnvironments()`

```php
postApplicationEnvironments($application_uuid, $post_application_environments_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Add a new continuous delivery environment to an application by the application UUID.

Add a new continuous delivery environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$post_application_environments_request = {"label":"CD label","branch":"my-feature-branch","databases":["database1","database2"]}; // \Acquia\CloudApi\Model\PostApplicationEnvironmentsRequest

try {
    $result = $apiInstance->postApplicationEnvironments($application_uuid, $post_application_environments_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->postApplicationEnvironments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **post_application_environments_request** | [**\Acquia\CloudApi\Model\PostApplicationEnvironmentsRequest**](../Model/PostApplicationEnvironmentsRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApplicationSearchConfigurationSets()`

```php
postApplicationSearchConfigurationSets($application_uuid, $archive): \Acquia\CloudApi\Model\MessageWithLinks
```

Creates a search configuration set for an application.

Creates a search configuration set for an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$archive = "/path/to/file.txt"; // \SplFileObject | A binary file response

try {
    $result = $apiInstance->postApplicationSearchConfigurationSets($application_uuid, $archive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->postApplicationSearchConfigurationSets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **archive** | **\SplFileObject****\SplFileObject**| A binary file response | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApplicationsIde()`

```php
postApplicationsIde($application_uuid, $post_applications_ide_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Creates a new Cloud IDE.

Creates a new Cloud IDE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$post_applications_ide_request = {"label":"My new IDE"}; // \Acquia\CloudApi\Model\PostApplicationsIdeRequest

try {
    $result = $apiInstance->postApplicationsIde($application_uuid, $post_applications_ide_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->postApplicationsIde: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **post_applications_ide_request** | [**\Acquia\CloudApi\Model\PostApplicationsIdeRequest**](../Model/PostApplicationsIdeRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postApplicationsTags()`

```php
postApplicationsTags($application_uuid, $post_applications_tags_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Creates a new application tag.

Creates a new application tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$post_applications_tags_request = {"name":"Dev","color":"green"}; // \Acquia\CloudApi\Model\PostApplicationsTagsRequest

try {
    $result = $apiInstance->postApplicationsTags($application_uuid, $post_applications_tags_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->postApplicationsTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **post_applications_tags_request** | [**\Acquia\CloudApi\Model\PostApplicationsTagsRequest**](../Model/PostApplicationsTagsRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApplicationByUuid()`

```php
putApplicationByUuid($application_uuid, $put_application_by_uuid_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Renames an application.

Renames a specific application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$put_application_by_uuid_request = {"name":"My new application name"}; // \Acquia\CloudApi\Model\PutApplicationByUuidRequest

try {
    $result = $apiInstance->putApplicationByUuid($application_uuid, $put_application_by_uuid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->putApplicationByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **put_application_by_uuid_request** | [**\Acquia\CloudApi\Model\PutApplicationByUuidRequest**](../Model/PutApplicationByUuidRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApplicationRemoteAdministrationSettings()`

```php
putApplicationRemoteAdministrationSettings($application_uuid, $remote_administration): \Acquia\CloudApi\Model\Message
```

Modifies the remote administration settings for an application.

Modifies the remote administration settings for an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$remote_administration = {"update_mode":"update","update_type":"core_contrib","pause_until":"2021-10-10 13:00:00","deploy_at":"2020-10-13 13:00:00","deploy_environment":"test","source_environment":"prod","copy_files":false,"copy_database":true,"merge_tag":false,"merge_branch":"master"}; // \Acquia\CloudApi\Model\RemoteAdministration

try {
    $result = $apiInstance->putApplicationRemoteAdministrationSettings($application_uuid, $remote_administration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->putApplicationRemoteAdministrationSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **remote_administration** | [**\Acquia\CloudApi\Model\RemoteAdministration**](../Model/RemoteAdministration.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putApplicationSecuritySettings()`

```php
putApplicationSecuritySettings($application_uuid, $put_application_security_settings_request): \Acquia\CloudApi\Model\Message
```

Modifies the security policy settings for an application.

Modifies the security policy settings for an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$put_application_security_settings_request = {"status":["127.0.0.1","0.0.0.0"],"configuration_set":true}; // \Acquia\CloudApi\Model\PutApplicationSecuritySettingsRequest

try {
    $result = $apiInstance->putApplicationSecuritySettings($application_uuid, $put_application_security_settings_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationsApi->putApplicationSecuritySettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **put_application_security_settings_request** | [**\Acquia\CloudApi\Model\PutApplicationSecuritySettingsRequest**](../Model/PutApplicationSecuritySettingsRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
