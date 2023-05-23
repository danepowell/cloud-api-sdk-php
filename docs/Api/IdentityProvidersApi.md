# Acquia\CloudApi\IdentityProvidersApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteIdentityProvider()**](IdentityProvidersApi.md#deleteIdentityProvider) | **DELETE** /identity-providers/{identityProviderUuid} | Deletes a specific identity provider by its UUID. |
| [**getIdentityProvider()**](IdentityProvidersApi.md#getIdentityProvider) | **GET** /identity-providers/{identityProviderUuid} | Returns a specific identity provider by UUID. |
| [**getIdentityProviders()**](IdentityProvidersApi.md#getIdentityProviders) | **GET** /identity-providers | Returns a list of identity providers for a user. |
| [**postDisableIdentityProvider()**](IdentityProvidersApi.md#postDisableIdentityProvider) | **POST** /identity-providers/{identityProviderUuid}/actions/disable | Disables an identity provider by its UUID. |
| [**postEnableIdentityProvider()**](IdentityProvidersApi.md#postEnableIdentityProvider) | **POST** /identity-providers/{identityProviderUuid}/actions/enable | Enables an identity provider by its UUID. |
| [**putIdentityProvider()**](IdentityProvidersApi.md#putIdentityProvider) | **PUT** /identity-providers/{identityProviderUuid} | Modifies an identity provider by its UUID. |


## `deleteIdentityProvider()`

```php
deleteIdentityProvider($identity_provider_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Deletes a specific identity provider by its UUID.

Deletes a specific identity provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identity_provider_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->deleteIdentityProvider($identity_provider_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->deleteIdentityProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identity_provider_uuid** | **string**| The entity&#39;s universally unique identifier. | |

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

## `getIdentityProvider()`

```php
getIdentityProvider($identity_provider_uuid): \Acquia\CloudApi\Model\IdentityProvider
```

Returns a specific identity provider by UUID.

Returns a specific identity provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identity_provider_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getIdentityProvider($identity_provider_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->getIdentityProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identity_provider_uuid** | **string**| The entity&#39;s universally unique identifier. | |

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

## `getIdentityProviders()`

```php
getIdentityProviders($sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\IdentityProviders
```

Returns a list of identity providers for a user.

Returns a list of identity providers you have access to.  Filterable fields: * `label`  Sortable fields: * `label`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\IdentityProvidersApi(
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
    $result = $apiInstance->getIdentityProviders($sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->getIdentityProviders: ', $e->getMessage(), PHP_EOL;
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

[**\Acquia\CloudApi\Model\IdentityProviders**](../Model/IdentityProviders.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDisableIdentityProvider()`

```php
postDisableIdentityProvider($identity_provider_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Disables an identity provider by its UUID.

Disables an identity provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identity_provider_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->postDisableIdentityProvider($identity_provider_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->postDisableIdentityProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identity_provider_uuid** | **string**| The entity&#39;s universally unique identifier. | |

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

## `postEnableIdentityProvider()`

```php
postEnableIdentityProvider($identity_provider_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Enables an identity provider by its UUID.

Enables an identity provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identity_provider_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->postEnableIdentityProvider($identity_provider_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->postEnableIdentityProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identity_provider_uuid** | **string**| The entity&#39;s universally unique identifier. | |

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

## `putIdentityProvider()`

```php
putIdentityProvider($identity_provider_uuid, $put_identity_provider_request): \Acquia\CloudApi\Model\Message
```

Modifies an identity provider by its UUID.

Modifies an identity provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\IdentityProvidersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identity_provider_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.
$put_identity_provider_request = {"label":"New label","entity_id":"entity-id","sso_url":"https://idp.example.com","certificate":"-----BEGIN CERTIFICATE-----...-----END CERTIFICATE-----"}; // \Acquia\CloudApi\Model\PutIdentityProviderRequest

try {
    $result = $apiInstance->putIdentityProvider($identity_provider_uuid, $put_identity_provider_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityProvidersApi->putIdentityProvider: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identity_provider_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **put_identity_provider_request** | [**\Acquia\CloudApi\Model\PutIdentityProviderRequest**](../Model/PutIdentityProviderRequest.md)|  | |

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
