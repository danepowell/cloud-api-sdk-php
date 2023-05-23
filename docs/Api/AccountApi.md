# Acquia\CloudApi\AccountApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteAccountSshKey()**](AccountApi.md#deleteAccountSshKey) | **DELETE** /account/ssh-keys/{sshKeyUuid} | Deletes an SSH key. |
| [**deleteAccountToken()**](AccountApi.md#deleteAccountToken) | **DELETE** /account/tokens/{tokenUuid} | Revokes an access token. |
| [**getAccount()**](AccountApi.md#getAccount) | **GET** /account | Returns details about your account. |
| [**getAccountApplicationHasPermission()**](AccountApi.md#getAccountApplicationHasPermission) | **GET** /account/applications/{applicationUuid}/has-permission | Returns whether your account has access to a specific application permission. |
| [**getAccountApplicationIsAdministrator()**](AccountApi.md#getAccountApplicationIsAdministrator) | **GET** /account/applications/{applicationUuid}/is-admin | Returns whether your account is an administrator for an application. |
| [**getAccountApplicationIsOwner()**](AccountApi.md#getAccountApplicationIsOwner) | **GET** /account/applications/{applicationUuid}/is-owner | Returns whether your account is the owner for an application. |
| [**getAccountDrushAliasesDownload()**](AccountApi.md#getAccountDrushAliasesDownload) | **GET** /account/drush-aliases/download | Returns the drush aliases as a compressed archive download. |
| [**getAccountIdes()**](AccountApi.md#getAccountIdes) | **GET** /account/ides | Returns a list of Cloud IDEs associated with the current user. |
| [**getAccountInvites()**](AccountApi.md#getAccountInvites) | **GET** /account/invites | Gets a list of all organization admin and team invites that are pending for the current user. |
| [**getAccountMessages()**](AccountApi.md#getAccountMessages) | **GET** /account/messages | Returns a list of messages associated with the current user. |
| [**getAccountOrganizationIsAdministrator()**](AccountApi.md#getAccountOrganizationIsAdministrator) | **GET** /account/organizations/{organizationUuid}/is-admin | Returns whether your account is an administrator for an organization. |
| [**getAccountOrganizationIsOwner()**](AccountApi.md#getAccountOrganizationIsOwner) | **GET** /account/organizations/{organizationUuid}/is-owner | Returns whether your account is the owner for an organization. |
| [**getAccountSshKey()**](AccountApi.md#getAccountSshKey) | **GET** /account/ssh-keys/{sshKeyUuid} | Get an SSH key associated with the currently-logged in user. |
| [**getAccountSshKeys()**](AccountApi.md#getAccountSshKeys) | **GET** /account/ssh-keys | Gets a list of SSH keys associated with the current user. |
| [**getAccountSubscriptionIsAdministrator()**](AccountApi.md#getAccountSubscriptionIsAdministrator) | **GET** /account/subscriptions/{subscriptionUuid}/is-admin | Returns whether your account is an administrator for a subscription. |
| [**getAccountSubscriptionIsOwner()**](AccountApi.md#getAccountSubscriptionIsOwner) | **GET** /account/subscriptions/{subscriptionUuid}/is-owner | Returns whether your account is the owner for a subscription. |
| [**getAccountTeamHasPermission()**](AccountApi.md#getAccountTeamHasPermission) | **GET** /account/teams/{teamUuid}/has-permission | Returns whether your account has access to a specific team permission. |
| [**getAccountTeamIsAdministrator()**](AccountApi.md#getAccountTeamIsAdministrator) | **GET** /account/teams/{teamUuid}/is-admin | Returns whether your account is an administrator for a team. |
| [**getAccountTeamIsOwner()**](AccountApi.md#getAccountTeamIsOwner) | **GET** /account/teams/{teamUuid}/is-owner | Returns whether your account is the owner for a team. |
| [**getAccountToken()**](AccountApi.md#getAccountToken) | **GET** /account/tokens/{tokenUuid} | Return details about a specific token. |
| [**getAccountTokens()**](AccountApi.md#getAccountTokens) | **GET** /account/tokens | Returns a list of metadata for API access tokens tied to your account. |
| [**postAccountApplicationMarkRecent()**](AccountApi.md#postAccountApplicationMarkRecent) | **POST** /account/applications/{applicationUuid}/actions/mark-recent | Marks an application as recently viewed. |
| [**postAccountApplicationStar()**](AccountApi.md#postAccountApplicationStar) | **POST** /account/applications/{applicationUuid}/actions/star | Stars an application. |
| [**postAccountApplicationUnstar()**](AccountApi.md#postAccountApplicationUnstar) | **POST** /account/applications/{applicationUuid}/actions/unstar | Removes an application from the user&#39;s starred list. |
| [**postAccountPassword()**](AccountApi.md#postAccountPassword) | **POST** /account/password | Verifies that the supplied password matches the current user&#39;s password. |
| [**postAccountSshKeys()**](AccountApi.md#postAccountSshKeys) | **POST** /account/ssh-keys | Installs a new SSH key for the current user. |
| [**postAccountTokens()**](AccountApi.md#postAccountTokens) | **POST** /account/tokens | Creates an API access token tied to your account. |


## `deleteAccountSshKey()`

```php
deleteAccountSshKey($ssh_key_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Deletes an SSH key.

Deletes an SSH key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssh_key_uuid = 981b7910-2fe9-11e9-b210-d663bd873d93; // string | The SSH key entity's universally unique identifier.

try {
    $result = $apiInstance->deleteAccountSshKey($ssh_key_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->deleteAccountSshKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssh_key_uuid** | **string**| The SSH key entity&#39;s universally unique identifier. | |

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

## `deleteAccountToken()`

```php
deleteAccountToken($token_uuid, $token_delete_reason): \Acquia\CloudApi\Model\MessageWithLinks
```

Revokes an access token.

Revokes an access token. This action will prevent the access token from being able to authorize access to the API in the future.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_uuid = 882f3258-2fe9-11e9-b210-d663bd873d93; // string | The token entity's universally unique identifier.
$token_delete_reason = The quick brown fox jumped over the lazy dog.; // string | Specifies the reason for the token revocation for future reference.

try {
    $result = $apiInstance->deleteAccountToken($token_uuid, $token_delete_reason);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->deleteAccountToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_uuid** | **string**| The token entity&#39;s universally unique identifier. | |
| **token_delete_reason** | **string**| Specifies the reason for the token revocation for future reference. | [optional] |

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

## `getAccount()`

```php
getAccount(): \Acquia\CloudApi\Model\User
```

Returns details about your account.

Returns details about your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAccount();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\User**](../Model/User.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountApplicationHasPermission()`

```php
getAccountApplicationHasPermission($application_uuid, $permission): \Acquia\CloudApi\Model\HasPermission
```

Returns whether your account has access to a specific application permission.

Returns whether your account has access to a specific application permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$permission = deploy to prod; // string | Specifies the permission you wish to check access for.

try {
    $result = $apiInstance->getAccountApplicationHasPermission($application_uuid, $permission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountApplicationHasPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **permission** | **string**| Specifies the permission you wish to check access for. | |

### Return type

[**\Acquia\CloudApi\Model\HasPermission**](../Model/HasPermission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountApplicationIsAdministrator()`

```php
getAccountApplicationIsAdministrator($application_uuid): \Acquia\CloudApi\Model\IsAdministrator
```

Returns whether your account is an administrator for an application.

Returns whether your account is an administrator for an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getAccountApplicationIsAdministrator($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountApplicationIsAdministrator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\IsAdministrator**](../Model/IsAdministrator.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountApplicationIsOwner()`

```php
getAccountApplicationIsOwner($application_uuid): \Acquia\CloudApi\Model\IsOwner
```

Returns whether your account is the owner for an application.

Returns whether your account is the owner for an application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getAccountApplicationIsOwner($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountApplicationIsOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **application_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\IsOwner**](../Model/IsOwner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountDrushAliasesDownload()`

```php
getAccountDrushAliasesDownload($version): \SplFileObject
```

Returns the drush aliases as a compressed archive download.

Returns the drush aliases as a compressed archive download.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$version = 8; // int | Specifies the drush aliases formatting, either 8 (example.aliases.drushrc.php) or 9 (example.site.yaml)

try {
    $result = $apiInstance->getAccountDrushAliasesDownload($version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountDrushAliasesDownload: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **version** | **int**| Specifies the drush aliases formatting, either 8 (example.aliases.drushrc.php) or 9 (example.site.yaml) | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/gzip`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountIdes()`

```php
getAccountIdes(): \Acquia\CloudApi\Model\Ides
```

Returns a list of Cloud IDEs associated with the current user.

Returns a list of Cloud IDEs associated with the current user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAccountIdes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountIdes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

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

## `getAccountInvites()`

```php
getAccountInvites($from, $to, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\AccountInvites
```

Gets a list of all organization admin and team invites that are pending for the current user.

Gets a list of all organization admin and team invites that are pending for the current user.  Filterable fields: * `mail` * `token` * `author`  Sortable fields: * `mail` * `token` * `author`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getAccountInvites($from, $to, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountInvites: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\AccountInvites**](../Model/AccountInvites.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountMessages()`

```php
getAccountMessages($from, $to, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\UxMessages
```

Returns a list of messages associated with the current user.

Returns a list of messages associated with the current user.  Filterable fields: * `title` * `message_type` * `display_mode`  Sortable fields: * `title` * `message_type` * `display_mode`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getAccountMessages($from, $to, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountMessages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\UxMessages**](../Model/UxMessages.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountOrganizationIsAdministrator()`

```php
getAccountOrganizationIsAdministrator($organization_uuid): \Acquia\CloudApi\Model\IsAdministrator
```

Returns whether your account is an administrator for an organization.

Returns whether your account is an administrator for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.

try {
    $result = $apiInstance->getAccountOrganizationIsAdministrator($organization_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountOrganizationIsAdministrator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\IsAdministrator**](../Model/IsAdministrator.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountOrganizationIsOwner()`

```php
getAccountOrganizationIsOwner($organization_uuid): \Acquia\CloudApi\Model\IsAdministrator
```

Returns whether your account is the owner for an organization.

Returns whether your account is the owner for an organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_uuid = 1e7efab9-0fac-4a2c-ad94-61efc78623ba; // string | The organization entity's universally unique identifier.

try {
    $result = $apiInstance->getAccountOrganizationIsOwner($organization_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountOrganizationIsOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **organization_uuid** | **string**| The organization entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\IsAdministrator**](../Model/IsAdministrator.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountSshKey()`

```php
getAccountSshKey($ssh_key_uuid): \Acquia\CloudApi\Model\SshKey
```

Get an SSH key associated with the currently-logged in user.

Get an SSH key associated with the currently-logged in user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssh_key_uuid = 981b7910-2fe9-11e9-b210-d663bd873d93; // string | The SSH key entity's universally unique identifier.

try {
    $result = $apiInstance->getAccountSshKey($ssh_key_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountSshKey: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssh_key_uuid** | **string**| The SSH key entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\SshKey**](../Model/SshKey.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountSshKeys()`

```php
getAccountSshKeys($from, $to, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\SshKeys
```

Gets a list of SSH keys associated with the current user.

Gets a list of SSH keys associated with the current user.  Filterable fields: * `label`  Sortable fields: * `label`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getAccountSshKeys($from, $to, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountSshKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\SshKeys**](../Model/SshKeys.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountSubscriptionIsAdministrator()`

```php
getAccountSubscriptionIsAdministrator($subscription_uuid): \Acquia\CloudApi\Model\IsAdministrator
```

Returns whether your account is an administrator for a subscription.

Returns whether your account is an administrator for a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.

try {
    $result = $apiInstance->getAccountSubscriptionIsAdministrator($subscription_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountSubscriptionIsAdministrator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\IsAdministrator**](../Model/IsAdministrator.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountSubscriptionIsOwner()`

```php
getAccountSubscriptionIsOwner($subscription_uuid): \Acquia\CloudApi\Model\IsOwner
```

Returns whether your account is the owner for a subscription.

Returns whether your account is the owner for a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.

try {
    $result = $apiInstance->getAccountSubscriptionIsOwner($subscription_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountSubscriptionIsOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\IsOwner**](../Model/IsOwner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountTeamHasPermission()`

```php
getAccountTeamHasPermission($team_uuid, $permission): \Acquia\CloudApi\Model\HasPermission
```

Returns whether your account has access to a specific team permission.

Returns whether your account has access to a specific team permission.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.
$permission = deploy to prod; // string | Specifies the permission you wish to check access for.

try {
    $result = $apiInstance->getAccountTeamHasPermission($team_uuid, $permission);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountTeamHasPermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **permission** | **string**| Specifies the permission you wish to check access for. | |

### Return type

[**\Acquia\CloudApi\Model\HasPermission**](../Model/HasPermission.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountTeamIsAdministrator()`

```php
getAccountTeamIsAdministrator($team_uuid): \Acquia\CloudApi\Model\IsAdministrator
```

Returns whether your account is an administrator for a team.

Returns whether your account is an administrator for a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getAccountTeamIsAdministrator($team_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountTeamIsAdministrator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\IsAdministrator**](../Model/IsAdministrator.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountTeamIsOwner()`

```php
getAccountTeamIsOwner($team_uuid): \Acquia\CloudApi\Model\IsOwner
```

Returns whether your account is the owner for a team.

Returns whether your account is the owner for a team.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$team_uuid = 3eef5d81-62f4-429c-aa94-e17d05ab4740; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getAccountTeamIsOwner($team_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountTeamIsOwner: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **team_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\IsOwner**](../Model/IsOwner.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountToken()`

```php
getAccountToken($token_uuid): \Acquia\CloudApi\Model\Token
```

Return details about a specific token.

Return details about a specific token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_uuid = 882f3258-2fe9-11e9-b210-d663bd873d93; // string | The token entity's universally unique identifier.

try {
    $result = $apiInstance->getAccountToken($token_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountToken: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_uuid** | **string**| The token entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Token**](../Model/Token.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAccountTokens()`

```php
getAccountTokens(): \Acquia\CloudApi\Model\Tokens
```

Returns a list of metadata for API access tokens tied to your account.

Returns a list of metadata for API access tokens tied to your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAccountTokens();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->getAccountTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\Tokens**](../Model/Tokens.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAccountApplicationMarkRecent()`

```php
postAccountApplicationMarkRecent($application_uuid): \Acquia\CloudApi\Model\Message
```

Marks an application as recently viewed.

Marks an application as recently viewed. UUIDs and timestamps of recent applications are present in the \"account\" endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->postAccountApplicationMarkRecent($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->postAccountApplicationMarkRecent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `postAccountApplicationStar()`

```php
postAccountApplicationStar($application_uuid): \Acquia\CloudApi\Model\Message
```

Stars an application.

Stars an application. UUIDs of starred applications are present in the \"account\" endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->postAccountApplicationStar($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->postAccountApplicationStar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `postAccountApplicationUnstar()`

```php
postAccountApplicationUnstar($application_uuid): \Acquia\CloudApi\Model\Message
```

Removes an application from the user's starred list.

Removes an application from the user's starred list. UUIDs of starred applications are present in the \"account\" endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$application_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->postAccountApplicationUnstar($application_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->postAccountApplicationUnstar: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
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

## `postAccountPassword()`

```php
postAccountPassword($password_request): \Acquia\CloudApi\Model\PasswordValidation
```

Verifies that the supplied password matches the current user's password.

Verifies that the supplied password matches the current user's password.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$password_request = {"password":"mysupersecretpassword"}; // \Acquia\CloudApi\Model\PasswordRequest

try {
    $result = $apiInstance->postAccountPassword($password_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->postAccountPassword: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **password_request** | [**\Acquia\CloudApi\Model\PasswordRequest**](../Model/PasswordRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\PasswordValidation**](../Model/PasswordValidation.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAccountSshKeys()`

```php
postAccountSshKeys($ssh_key_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Installs a new SSH key for the current user.

Installs a new SSH key for the current user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssh_key_request = {"label":"mykey","public_key":"ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAACAQChwPHzTTDKDpSbpa2+d22LcbQmsw92eLsUK3Fmei1fiGDkd34NsYCN8m7lsi3NbvdMS83CtPQPWiCveYPzFs1/hHc4PYj8opD2CNnr5iWVVbyaulCYHCgVv4aB/ojcexg8q483A4xJeF15TiCr/gu34rK6ucTvC/tn/rCwJBudczvEwt0klqYwv8Cl/ytaQboSuem5KgSjO3lMrb6CWtfSNhE43ZOw+UBFBqxIninN868vGMkIv9VY34Pwj54rPn/ItQd6Ef4B0KHHaGmzK0vfP+AK7FxNMoHnj3iYT33KZNqtDozdn5tYyH/bThPebEtgqUn+/w5l6wZIC/8zzvls/127ngHk+jNa0PlNyS2TxhPUK4NaPHIEnnrlp07JEYC4ImcBjaYCWAdcTcUkcJjwZQkN4bGmyO9cjICH98SdLD/HxqzTHeaYDbAX/Hu9HfaBb5dXLWsjw3Xc6hoVnUUZbMQyfgb0KgxDLh92eNGxJkpZiL0VDNOWCxDWsNpzwhLNkLqCvI6lyxiLaUzvJAk6dPaRhExmCbU1lDO2eR0FdSwC1TEhJOT9eDIK1r2hztZKs2oa5FNFfB/IFHVWasVFC9N2h/r/egB5zsRxC9MqBLRBq95NBxaRSFng6ML5WZSw41Qi4C/JWVm89rdj2WqScDHYyAdwyyppWU4T5c9Fmw== example@example.com"}; // \Acquia\CloudApi\Model\SshKeyRequest

try {
    $result = $apiInstance->postAccountSshKeys($ssh_key_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->postAccountSshKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ssh_key_request** | [**\Acquia\CloudApi\Model\SshKeyRequest**](../Model/SshKeyRequest.md)|  | |

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

## `postAccountTokens()`

```php
postAccountTokens($token_request): \Acquia\CloudApi\Model\TokenCreation
```

Creates an API access token tied to your account.

Creates an API access token tied to your account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token_request = {"label":"API token for My App"}; // \Acquia\CloudApi\Model\TokenRequest

try {
    $result = $apiInstance->postAccountTokens($token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->postAccountTokens: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **token_request** | [**\Acquia\CloudApi\Model\TokenRequest**](../Model/TokenRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\TokenCreation**](../Model/TokenCreation.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
