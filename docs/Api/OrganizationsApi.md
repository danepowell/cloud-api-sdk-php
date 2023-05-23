# Acquia\CloudApi\OrganizationsApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteOrganization()**](OrganizationsApi.md#deleteOrganization) | **DELETE** /organizations/{organizationUuid} | Deletes a specific organization by its UUID. |
| [**deleteOrganizationAdmin()**](OrganizationsApi.md#deleteOrganizationAdmin) | **DELETE** /organizations/{organizationUuid}/admins/{userUuid} | Removes the user from the list of administrators for the organization. |
| [**deleteOrganizationAvailableTags()**](OrganizationsApi.md#deleteOrganizationAvailableTags) | **DELETE** /organizations/{organizationUuid}/available-tags | Deletes bulk tags from organization resources. |
| [**getOrganizationAdmin()**](OrganizationsApi.md#getOrganizationAdmin) | **GET** /organizations/{organizationUuid}/admins/{userUuid} | Returns the user profile of this organization administrator. |
| [**getOrganizationAdminInvites()**](OrganizationsApi.md#getOrganizationAdminInvites) | **GET** /organizations/{organizationUuid}/admin-invites | Gets a list of invitations of administrators for this organization. |
| [**getOrganizationAdmins()**](OrganizationsApi.md#getOrganizationAdmins) | **GET** /organizations/{organizationUuid}/admins | Returns a list of organization administrators. |
| [**getOrganizationApplications()**](OrganizationsApi.md#getOrganizationApplications) | **GET** /organizations/{organizationUuid}/applications | Returns a list of applications that belong to the organization. |
| [**getOrganizationAvailableTags()**](OrganizationsApi.md#getOrganizationAvailableTags) | **GET** /organizations/{organizationUuid}/available-tags | Returns a list of all available application tags. |
| [**getOrganizationByUuid()**](OrganizationsApi.md#getOrganizationByUuid) | **GET** /organizations/{organizationUuid} | Return details about a specific organization. |
| [**getOrganizationIdentityProvider()**](OrganizationsApi.md#getOrganizationIdentityProvider) | **GET** /organizations/{organizationUuid}/identity-provider | Returns an identity provider for an organization. |
| [**getOrganizationMember()**](OrganizationsApi.md#getOrganizationMember) | **GET** /organizations/{organizationUuid}/members/{userUuid} | Returns the user profile of this organization member. |
| [**getOrganizationMemberApplications()**](OrganizationsApi.md#getOrganizationMemberApplications) | **GET** /organizations/{organizationUuid}/members/{userUuid}/applications | Returns a list of applications that an organization member has access to. |
| [**getOrganizationMembers()**](OrganizationsApi.md#getOrganizationMembers) | **GET** /organizations/{organizationUuid}/members | Returns a list of all organization members. |
| [**getOrganizationNotifications()**](OrganizationsApi.md#getOrganizationNotifications) | **GET** /organizations/{organizationUuid}/notifications | Returns a list of notifications associated with this organization by its UUID. |
| [**getOrganizationRoles()**](OrganizationsApi.md#getOrganizationRoles) | **GET** /organizations/{organizationUuid}/roles | Returns a list of all the canonical roles within the organization. |
| [**getOrganizationSubscriptions()**](OrganizationsApi.md#getOrganizationSubscriptions) | **GET** /organizations/{organizationUuid}/subscriptions | Returns a list of subscriptions that belong to the organization. |
| [**getOrganizationTeamInvites()**](OrganizationsApi.md#getOrganizationTeamInvites) | **GET** /organizations/{organizationUuid}/team-invites | Gets a list of member invitations for all teams in this organization. |
| [**getOrganizationTeams()**](OrganizationsApi.md#getOrganizationTeams) | **GET** /organizations/{organizationUuid}/teams | Returns a list of teams associated with the organization. |
| [**getOrganizations()**](OrganizationsApi.md#getOrganizations) | **GET** /organizations | Return a list of organizations. |
| [**postChangeOrganizationOwner()**](OrganizationsApi.md#postChangeOrganizationOwner) | **POST** /organizations/{organizationUuid}/actions/change-owner | Changes the organization owner. |
| [**postLeaveOrganization()**](OrganizationsApi.md#postLeaveOrganization) | **POST** /organizations/{organizationUuid}/actions/leave | Removes your account from an organization. |
| [**postOrganizationAdminInvite()**](OrganizationsApi.md#postOrganizationAdminInvite) | **POST** /organizations/{organizationUuid}/admin-invites | Invites a user to be an administrator in this organization. |
| [**postOrganizationAvailableTags()**](OrganizationsApi.md#postOrganizationAvailableTags) | **POST** /organizations/{organizationUuid}/available-tags | Adds bulk tags to organization resources. |
| [**postOrganizationMemberDelete()**](OrganizationsApi.md#postOrganizationMemberDelete) | **DELETE** /organizations/{organizationUuid}/members/{userUuid} | Removes the member from the organization. |
| [**postOrganizationRoles()**](OrganizationsApi.md#postOrganizationRoles) | **POST** /organizations/{organizationUuid}/roles | Creates a role. |
| [**postOrganizationTeams()**](OrganizationsApi.md#postOrganizationTeams) | **POST** /organizations/{organizationUuid}/teams | Creates a team. |
| [**postOrganizationsCreate()**](OrganizationsApi.md#postOrganizationsCreate) | **POST** /organizations | Creates a new organization. |
| [**putOrganization()**](OrganizationsApi.md#putOrganization) | **PUT** /organizations/{organizationUuid} | Renames an organization. |


## `deleteOrganization()`

```php
deleteOrganization($organization_uuid): \Acquia\CloudApi\Model\Message
```

Deletes a specific organization by its UUID.

Deletes a specific organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.

try {
    $result = $apiInstance->deleteOrganization($organization_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |

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

## `deleteOrganizationAdmin()`

```php
deleteOrganizationAdmin($organization_uuid, $user_uuid): \Acquia\CloudApi\Model\Message
```

Removes the user from the list of administrators for the organization.

Removes the user from the list of administrators for the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$user_uuid = f2daa9cc-e5a0-4036-a5c8-f96e336c62b5; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->deleteOrganizationAdmin($organization_uuid, $user_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
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

## `deleteOrganizationAvailableTags()`

```php
deleteOrganizationAvailableTags($organization_uuid, $delete_organization_available_tags_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Deletes bulk tags from organization resources.

Deletes bulk tags from organization resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$delete_organization_available_tags_request = {"tags":[{"name":"tag-name-1"},{"name":"tag-name-2"}],"context":{"application":{"uuids":["96e10bfb-1e4f-41c3-9d07-fffe8aba50d5"]}}}; // \Acquia\CloudApi\Model\DeleteOrganizationAvailableTagsRequest

try {
    $result = $apiInstance->deleteOrganizationAvailableTags($organization_uuid, $delete_organization_available_tags_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->deleteOrganizationAvailableTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **delete_organization_available_tags_request** | [**\Acquia\CloudApi\Model\DeleteOrganizationAvailableTagsRequest**](../Model/DeleteOrganizationAvailableTagsRequest.md)|  | |

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

## `getOrganizationAdmin()`

```php
getOrganizationAdmin($organization_uuid, $user_uuid): \Acquia\CloudApi\Model\OrganizationAdminUserProfile
```

Returns the user profile of this organization administrator.

Returns the user profile of this organization administrator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$user_uuid = f2daa9cc-e5a0-4036-a5c8-f96e336c62b5; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getOrganizationAdmin($organization_uuid, $user_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAdmin: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **user_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\OrganizationAdminUserProfile**](../Model/OrganizationAdminUserProfile.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdminInvites()`

```php
getOrganizationAdminInvites($organization_uuid, $sort, $filter, $limit, $offset, $range): \Acquia\CloudApi\Model\OrganizationAdminInvites
```

Gets a list of invitations of administrators for this organization.

Gets a list of invitations of administrators for this organization.  Filterable fields: * `first_name` * `last_name` * `permission`  Sortable fields: * `first_name` * `last_name` * `permission`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.
$range = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | ISO-8601 date/time of invite create date/time.

try {
    $result = $apiInstance->getOrganizationAdminInvites($organization_uuid, $sort, $filter, $limit, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAdminInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |
| **range** | **\DateTime**| ISO-8601 date/time of invite create date/time. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\OrganizationAdminInvites**](../Model/OrganizationAdminInvites.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAdmins()`

```php
getOrganizationAdmins($organization_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\OrganizationAdminUserProfiles
```

Returns a list of organization administrators.

Returns a list of organization administrators.  Filterable fields: * `first_name` * `last_name` * `mail` * `username`  Sortable fields: * `first_name` * `last_name` * `mail` * `username`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getOrganizationAdmins($organization_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAdmins: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\OrganizationAdminUserProfiles**](../Model/OrganizationAdminUserProfiles.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationApplications()`

```php
getOrganizationApplications($organization_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\OrganizationApplications
```

Returns a list of applications that belong to the organization.

Returns a list of applications that belong to the organization.  Filterable fields: * `name` * `organization_name`  Sortable fields: * `name` * `organization_name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getOrganizationApplications($organization_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\OrganizationApplications**](../Model/OrganizationApplications.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationAvailableTags()`

```php
getOrganizationAvailableTags($organization_uuid): \Acquia\CloudApi\Model\OrganizationAvailableTags
```

Returns a list of all available application tags.

Returns a list of all available application tags.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.

try {
    $result = $apiInstance->getOrganizationAvailableTags($organization_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationAvailableTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\OrganizationAvailableTags**](../Model/OrganizationAvailableTags.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationByUuid()`

```php
getOrganizationByUuid($organization_uuid): \Acquia\CloudApi\Model\Organization
```

Return details about a specific organization.

A specific organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.

try {
    $result = $apiInstance->getOrganizationByUuid($organization_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Organization**](../Model/Organization.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationIdentityProvider()`

```php
getOrganizationIdentityProvider($organization_uuid): \Acquia\CloudApi\Model\IdentityProvider
```

Returns an identity provider for an organization.

Returns an identity provider for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.

try {
    $result = $apiInstance->getOrganizationIdentityProvider($organization_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationIdentityProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\IdentityProvider**](../Model/IdentityProvider.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationMember()`

```php
getOrganizationMember($organization_uuid, $user_uuid): \Acquia\CloudApi\Model\OrganizationUserProfile
```

Returns the user profile of this organization member.

Returns the user profile of this organization member.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$user_uuid = f2daa9cc-e5a0-4036-a5c8-f96e336c62b5; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getOrganizationMember($organization_uuid, $user_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationMember: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **user_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\OrganizationUserProfile**](../Model/OrganizationUserProfile.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationMemberApplications()`

```php
getOrganizationMemberApplications($organization_uuid, $user_uuid): \Acquia\CloudApi\Model\Applications
```

Returns a list of applications that an organization member has access to.

Returns a list of applications that an organization member has access to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$user_uuid = f2daa9cc-e5a0-4036-a5c8-f96e336c62b5; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getOrganizationMemberApplications($organization_uuid, $user_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationMemberApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **user_uuid** | **string**| The entity&#39;s universally unique identifier. | |

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

## `getOrganizationMembers()`

```php
getOrganizationMembers($organization_uuid, $sort, $filter, $limit): \Acquia\CloudApi\Model\OrganizationMembers
```

Returns a list of all organization members.

Returns a list of all organization members, from all teams in this organization.  Filterable fields: * `first_name` * `last_name` * `permission`  Sortable fields: * `first_name` * `last_name` * `permission`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.

try {
    $result = $apiInstance->getOrganizationMembers($organization_uuid, $sort, $filter, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationMembers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\OrganizationMembers**](../Model/OrganizationMembers.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationNotifications()`

```php
getOrganizationNotifications($organization_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\OrganizationsNotifications
```

Returns a list of notifications associated with this organization by its UUID.

Returns a list of notifications associated with this organization. A notification represents an item of work to be done, initiated by someone (typically the current user) associated with the organization.  Filterable fields: * `event` * `label` * `description` * `status` * `author` * `created_at` * `completed_at`  Sortable fields: * `event` * `label` * `description` * `status` * `author` * `created_at` * `completed_at`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getOrganizationNotifications($organization_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\OrganizationsNotifications**](../Model/OrganizationsNotifications.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `organization/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationRoles()`

```php
getOrganizationRoles($organization_uuid, $sort, $filter, $limit, $offset, $range): \Acquia\CloudApi\Model\Roles
```

Returns a list of all the canonical roles within the organization.

Returns a list of all the canonical roles within the organization.  Filterable fields: * `name` * `edited_at'  Sortable fields: * `name` * `edited_at`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.
$range = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | ISO-8601 date/time of invite create date/time.

try {
    $result = $apiInstance->getOrganizationRoles($organization_uuid, $sort, $filter, $limit, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |
| **range** | **\DateTime**| ISO-8601 date/time of invite create date/time. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Roles**](../Model/Roles.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationSubscriptions()`

```php
getOrganizationSubscriptions($organization_uuid, $sort, $filter, $limit, $offset, $range): \Acquia\CloudApi\Model\Applications
```

Returns a list of subscriptions that belong to the organization.

Returns a list of subscriptions that belong to the organization.  Filterable fields: * `name`  Sortable fields: * `name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.
$range = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | ISO-8601 date/time of invite create date/time.

try {
    $result = $apiInstance->getOrganizationSubscriptions($organization_uuid, $sort, $filter, $limit, $offset, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |
| **range** | **\DateTime**| ISO-8601 date/time of invite create date/time. | [optional] |

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

## `getOrganizationTeamInvites()`

```php
getOrganizationTeamInvites($organization_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\OrganizationTeamInvites
```

Gets a list of member invitations for all teams in this organization.

Gets a list of member invitations for all teams in this organization.  Filterable fields: * `name`  Sortable fields: * `name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getOrganizationTeamInvites($organization_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationTeamInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\OrganizationTeamInvites**](../Model/OrganizationTeamInvites.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrganizationTeams()`

```php
getOrganizationTeams($organization_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\Teams
```

Returns a list of teams associated with the organization.

Returns a list of teams associated with the organization.  Filterable fields: * `name`  Sortable fields: * `name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getOrganizationTeams($organization_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizationTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

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

## `getOrganizations()`

```php
getOrganizations(): \Acquia\CloudApi\Model\Organizations
```

Return a list of organizations.

An organization is a container for some or all of a customer's subscriptions. The owner of the organization is the main billing contact. The owner, along with organization administrators, can set up teams and roles to grant various permissions to access the applications within each subscription in the organization. Results can be filtered and sorted by name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOrganizations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->getOrganizations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\Organizations**](../Model/Organizations.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postChangeOrganizationOwner()`

```php
postChangeOrganizationOwner($organization_uuid, $post_change_organization_owner_request): \Acquia\CloudApi\Model\Message
```

Changes the organization owner.

Changes the organization owner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$post_change_organization_owner_request = new \Acquia\CloudApi\Model\PostChangeOrganizationOwnerRequest(); // \Acquia\CloudApi\Model\PostChangeOrganizationOwnerRequest

try {
    $result = $apiInstance->postChangeOrganizationOwner($organization_uuid, $post_change_organization_owner_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->postChangeOrganizationOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **post_change_organization_owner_request** | [**\Acquia\CloudApi\Model\PostChangeOrganizationOwnerRequest**](../Model/PostChangeOrganizationOwnerRequest.md)|  | |

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

## `postLeaveOrganization()`

```php
postLeaveOrganization($organization_uuid): \Acquia\CloudApi\Model\Message
```

Removes your account from an organization.

Removes your account from an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.

try {
    $result = $apiInstance->postLeaveOrganization($organization_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->postLeaveOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |

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

## `postOrganizationAdminInvite()`

```php
postOrganizationAdminInvite($organization_uuid, $post_organization_admin_invite_request): \Acquia\CloudApi\Model\Message
```

Invites a user to be an administrator in this organization.

Invites a user to be an administrator in this organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$post_organization_admin_invite_request = {"email":"invitee@example.com"}; // \Acquia\CloudApi\Model\PostOrganizationAdminInviteRequest

try {
    $result = $apiInstance->postOrganizationAdminInvite($organization_uuid, $post_organization_admin_invite_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->postOrganizationAdminInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **post_organization_admin_invite_request** | [**\Acquia\CloudApi\Model\PostOrganizationAdminInviteRequest**](../Model/PostOrganizationAdminInviteRequest.md)|  | |

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

## `postOrganizationAvailableTags()`

```php
postOrganizationAvailableTags($organization_uuid, $post_organization_available_tags_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Adds bulk tags to organization resources.

Adds bulk tags to organization resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$post_organization_available_tags_request = {"tags":[{"name":"tag-name-1","color":"green"},{"name":"tag-name-2","color":"blue"}],"context":{"application":{"uuids":["96e10bfb-1e4f-41c3-9d07-fffe8aba50d5"]}}}; // \Acquia\CloudApi\Model\PostOrganizationAvailableTagsRequest

try {
    $result = $apiInstance->postOrganizationAvailableTags($organization_uuid, $post_organization_available_tags_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->postOrganizationAvailableTags: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **post_organization_available_tags_request** | [**\Acquia\CloudApi\Model\PostOrganizationAvailableTagsRequest**](../Model/PostOrganizationAvailableTagsRequest.md)|  | |

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

## `postOrganizationMemberDelete()`

```php
postOrganizationMemberDelete($organization_uuid, $user_uuid): \Acquia\CloudApi\Model\Message
```

Removes the member from the organization.

Removes the member from the organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$user_uuid = f2daa9cc-e5a0-4036-a5c8-f96e336c62b5; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->postOrganizationMemberDelete($organization_uuid, $user_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->postOrganizationMemberDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
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

## `postOrganizationRoles()`

```php
postOrganizationRoles($organization_uuid, $post_organization_roles_request): \Acquia\CloudApi\Model\Message
```

Creates a role.

Creates a role.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$post_organization_roles_request = {"name":"My new role","description":"My role description","permissions":["permission 1","permission 2"]}; // \Acquia\CloudApi\Model\PostOrganizationRolesRequest

try {
    $result = $apiInstance->postOrganizationRoles($organization_uuid, $post_organization_roles_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->postOrganizationRoles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **post_organization_roles_request** | [**\Acquia\CloudApi\Model\PostOrganizationRolesRequest**](../Model/PostOrganizationRolesRequest.md)|  | |

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

## `postOrganizationTeams()`

```php
postOrganizationTeams($organization_uuid, $post_organization_teams_request): \Acquia\CloudApi\Model\Message
```

Creates a team.

Creates a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$post_organization_teams_request = {"name":"My new team"}; // \Acquia\CloudApi\Model\PostOrganizationTeamsRequest

try {
    $result = $apiInstance->postOrganizationTeams($organization_uuid, $post_organization_teams_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->postOrganizationTeams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **post_organization_teams_request** | [**\Acquia\CloudApi\Model\PostOrganizationTeamsRequest**](../Model/PostOrganizationTeamsRequest.md)|  | |

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

## `postOrganizationsCreate()`

```php
postOrganizationsCreate($post_organizations_create_request): \Acquia\CloudApi\Model\Message
```

Creates a new organization.

Creates a new organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_organizations_create_request = {"name":"My new organization"}; // \Acquia\CloudApi\Model\PostOrganizationsCreateRequest

try {
    $result = $apiInstance->postOrganizationsCreate($post_organizations_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->postOrganizationsCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_organizations_create_request** | [**\Acquia\CloudApi\Model\PostOrganizationsCreateRequest**](../Model/PostOrganizationsCreateRequest.md)|  | |

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

## `putOrganization()`

```php
putOrganization($organization_uuid, $put_organization_request): \Acquia\CloudApi\Model\Message
```

Renames an organization.

Renames an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\OrganizationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.
$put_organization_request = {"name":"My renamed organization"}; // \Acquia\CloudApi\Model\PutOrganizationRequest

try {
    $result = $apiInstance->putOrganization($organization_uuid, $put_organization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrganizationsApi->putOrganization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |
| **put_organization_request** | [**\Acquia\CloudApi\Model\PutOrganizationRequest**](../Model/PutOrganizationRequest.md)|  | |

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
