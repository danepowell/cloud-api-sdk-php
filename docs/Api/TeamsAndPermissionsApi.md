# Acquia\CloudApi\TeamsAndPermissionsApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteRole()**](TeamsAndPermissionsApi.md#deleteRole) | **DELETE** /roles/{roleUuid} | Deletes a specific role by its UUID. |
| [**deleteTeam()**](TeamsAndPermissionsApi.md#deleteTeam) | **DELETE** /teams/{teamUuid} | Deletes a specific team by its UUID. |
| [**deleteTeamsRemoveApplication()**](TeamsAndPermissionsApi.md#deleteTeamsRemoveApplication) | **DELETE** /teams/{teamUuid}/applications/{applicationUuid} | Removes the application from this team. |
| [**deleteTeamsRemoveMember()**](TeamsAndPermissionsApi.md#deleteTeamsRemoveMember) | **DELETE** /teams/{teamUuid}/members/{userUuid} | Remove a user from a team. |
| [**getPermissions()**](TeamsAndPermissionsApi.md#getPermissions) | **GET** /permissions | Return a list of permissions. |
| [**getRole()**](TeamsAndPermissionsApi.md#getRole) | **GET** /roles/{roleUuid} | Return details about a specific role. |
| [**getTeam()**](TeamsAndPermissionsApi.md#getTeam) | **GET** /teams/{teamUuid} | Return details about a specific team. |
| [**getTeamApplications()**](TeamsAndPermissionsApi.md#getTeamApplications) | **GET** /teams/{teamUuid}/applications | Returns a list of applications this team has access to. |
| [**getTeamInvites()**](TeamsAndPermissionsApi.md#getTeamInvites) | **GET** /teams/{teamUuid}/invites | Returns a list of invitations to this team. |
| [**getTeamMembers()**](TeamsAndPermissionsApi.md#getTeamMembers) | **GET** /teams/{teamUuid}/members | Returns a list of team members. |
| [**getTeams()**](TeamsAndPermissionsApi.md#getTeams) | **GET** /teams | Return teams the current user has access to. |
| [**postLeaveTeam()**](TeamsAndPermissionsApi.md#postLeaveTeam) | **POST** /teams/{teamUuid}/actions/leave | Removes the current user from a team. |
| [**postTeamAddApplication()**](TeamsAndPermissionsApi.md#postTeamAddApplication) | **POST** /teams/{teamUuid}/applications | Adds an application to this team. |
| [**postTeamsInviteUser()**](TeamsAndPermissionsApi.md#postTeamsInviteUser) | **POST** /teams/{teamUuid}/invites | Invites a user to join a team. |
| [**putRoleByUuid()**](TeamsAndPermissionsApi.md#putRoleByUuid) | **PUT** /roles/{roleUuid} | Updates a role. |
| [**putTeamsMember()**](TeamsAndPermissionsApi.md#putTeamsMember) | **PUT** /teams/{teamUuid}/members/{userUuid} | Grant team roles to a member. |
| [**putTeamsName()**](TeamsAndPermissionsApi.md#putTeamsName) | **PUT** /teams/{teamUuid} | Change the name of a team. |


## `deleteRole()`

```php
deleteRole($role_uuid): \Acquia\CloudApi\Model\Message
```

Deletes a specific role by its UUID.

Deletes a specific role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->deleteRole($role_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->deleteRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTeam()`

```php
deleteTeam($team_uuid): \Acquia\CloudApi\Model\Message
```

Deletes a specific team by its UUID.

Deletes a specific team by its UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->deleteTeam($team_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->deleteTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTeamsRemoveApplication()`

```php
deleteTeamsRemoveApplication($team_uuid, $application_uuid): \Acquia\CloudApi\Model\Message
```

Removes the application from this team.

Removes the application from this team. Team members will immediately lose access to this application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->deleteTeamsRemoveApplication($team_uuid, $application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->deleteTeamsRemoveApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTeamsRemoveMember()`

```php
deleteTeamsRemoveMember($team_uuid, $user_uuid): \Acquia\CloudApi\Model\Message
```

Remove a user from a team.

Remove a user from a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.
$user_uuid = f2daa9cc-e5a0-4036-a5c8-f96e336c62b5; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->deleteTeamsRemoveMember($team_uuid, $user_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->deleteTeamsRemoveMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **user_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPermissions()`

```php
getPermissions(): \Acquia\CloudApi\Model\Permissions
```

Return a list of permissions.

Displays a list of all available permissions currently in the system. This will include permissions that the user may not have access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getPermissions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->getPermissions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\Permissions**](../Model/Permissions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRole()`

```php
getRole($role_uuid): \Acquia\CloudApi\Model\Role
```

Return details about a specific role.

Roles may be assigned to team members, and grant various permissions to the applications that the team is assigned to. Roles are unique within a organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getRole($role_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->getRole: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Role**](../Model/Role.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeam()`

```php
getTeam($team_uuid): \Acquia\CloudApi\Model\Team
```

Return details about a specific team.

Return details about a specific team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getTeam($team_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->getTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Team**](../Model/Team.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeamApplications()`

```php
getTeamApplications($team_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\Applications
```

Returns a list of applications this team has access to.

Returns a list of applications this team has access to.  Filterable fields: * `name`  Sortable fields: * `name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getTeamApplications($team_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->getTeamApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Applications**](../Model/Applications.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeamInvites()`

```php
getTeamInvites($team_uuid, $sort, $filter, $limit, $offset, $range): \Acquia\CloudApi\Model\TeamInvites
```

Returns a list of invitations to this team.

Returns a list of invitations to this team.  Filterable fields: * `mail` * `token` * `author`  Sortable fields: * `mail` * `token` * `author`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.
$range = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | ISO-8601 date/time of invite create date/time.

try {
    $result = $apiInstance->getTeamInvites($team_uuid, $sort, $filter, $limit, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->getTeamInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |
| **range** | **\DateTime**| ISO-8601 date/time of invite create date/time. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\TeamInvites**](../Model/TeamInvites.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeamMembers()`

```php
getTeamMembers($team_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\TeamMembers
```

Returns a list of team members.

Returns a list of team members.  Filterable fields: * `permission` * `first_name` * `last_name` * `user`  Sortable fields: * `permission` * `first_name` * `last_name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getTeamMembers($team_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->getTeamMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\TeamMembers**](../Model/TeamMembers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTeams()`

```php
getTeams($sort, $filter, $limit, $offset, $range): \Acquia\CloudApi\Model\Teams
```

Return teams the current user has access to.

Returns a list of teams the current user has access to.  Filterable fields: * `name`  Sortable fields: * `name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.
$range = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | ISO-8601 date/time of invite create date/time.

try {
    $result = $apiInstance->getTeams($sort, $filter, $limit, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->getTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |
| **range** | **\DateTime**| ISO-8601 date/time of invite create date/time. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Teams**](../Model/Teams.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postLeaveTeam()`

```php
postLeaveTeam($team_uuid): \Acquia\CloudApi\Model\Message
```

Removes the current user from a team.

Removes the current user from a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->postLeaveTeam($team_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->postLeaveTeam: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postTeamAddApplication()`

```php
postTeamAddApplication($team_uuid, $post_team_add_application_request): \Acquia\CloudApi\Model\Message
```

Adds an application to this team.

Adds an application to this team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.
$post_team_add_application_request = {"uuid":"a47ac10b-58cc-4372-a567-0e02b2c3d470"}; // \Acquia\CloudApi\Model\PostTeamAddApplicationRequest

try {
    $result = $apiInstance->postTeamAddApplication($team_uuid, $post_team_add_application_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->postTeamAddApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **post_team_add_application_request** | [**\Acquia\CloudApi\Model\PostTeamAddApplicationRequest**](../Model/PostTeamAddApplicationRequest.md)|  | |

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

## `postTeamsInviteUser()`

```php
postTeamsInviteUser($team_uuid, $post_invite): \Acquia\CloudApi\Model\Message
```

Invites a user to join a team.

Invites a user to join a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.
$post_invite = {"email":"person@example.com","roles":["489efe35-7bb7-48b7-9aa2-f6f8f457c926","8025e9a7-781a-4ad1-b7ea-1f1b732944c2"]}; // \Acquia\CloudApi\Model\PostInvite

try {
    $result = $apiInstance->postTeamsInviteUser($team_uuid, $post_invite);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->postTeamsInviteUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **post_invite** | [**\Acquia\CloudApi\Model\PostInvite**](../Model/PostInvite.md)|  | |

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

## `putRoleByUuid()`

```php
putRoleByUuid($role_uuid, $put_role_by_uuid_request): \Acquia\CloudApi\Model\Message
```

Updates a role.

Modifies a role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$role_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$put_role_by_uuid_request = {"name":"My new role name","description":"My new role description.","permisions":["permission 4","permission 5"]}; // \Acquia\CloudApi\Model\PutRoleByUuidRequest

try {
    $result = $apiInstance->putRoleByUuid($role_uuid, $put_role_by_uuid_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->putRoleByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **role_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **put_role_by_uuid_request** | [**\Acquia\CloudApi\Model\PutRoleByUuidRequest**](../Model/PutRoleByUuidRequest.md)|  | |

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

## `putTeamsMember()`

```php
putTeamsMember($team_uuid, $user_uuid, $put_teams_member_request): \Acquia\CloudApi\Model\Message
```

Grant team roles to a member.

Grant team roles to a member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.
$user_uuid = f2daa9cc-e5a0-4036-a5c8-f96e336c62b5; // string | The entity's universally unique identifier.
$put_teams_member_request = {"roles":["489efe35-7bb7-48b7-9aa2-f6f8f457c926","8025e9a7-781a-4ad1-b7ea-1f1b732944c2"]}; // \Acquia\CloudApi\Model\PutTeamsMemberRequest

try {
    $result = $apiInstance->putTeamsMember($team_uuid, $user_uuid, $put_teams_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->putTeamsMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **user_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **put_teams_member_request** | [**\Acquia\CloudApi\Model\PutTeamsMemberRequest**](../Model/PutTeamsMemberRequest.md)|  | |

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

## `putTeamsName()`

```php
putTeamsName($team_uuid, $put_teams_name_request): \Acquia\CloudApi\Model\Message
```

Change the name of a team.

Change the name of a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\TeamsAndPermissionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.
$put_teams_name_request = {"name":"My new team name"}; // \Acquia\CloudApi\Model\PutTeamsNameRequest

try {
    $result = $apiInstance->putTeamsName($team_uuid, $put_teams_name_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TeamsAndPermissionsApi->putTeamsName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **put_teams_name_request** | [**\Acquia\CloudApi\Model\PutTeamsNameRequest**](../Model/PutTeamsNameRequest.md)|  | |

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
