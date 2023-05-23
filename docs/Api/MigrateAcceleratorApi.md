# Acquia\CloudApi\MigrateAcceleratorApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postMigrateEnvironment()**](MigrateAcceleratorApi.md#postMigrateEnvironment) | **POST** /environments/{environmentId}/actions/migrate | Create a Migrate Environment using the provided environment as its source. |
| [**postPromoteEnvironment()**](MigrateAcceleratorApi.md#postPromoteEnvironment) | **POST** /environments/{environmentId}/actions/promote | Promote a Migrate Environment. |
| [**postRefreshEnvironment()**](MigrateAcceleratorApi.md#postRefreshEnvironment) | **POST** /environments/{environmentId}/actions/refresh | Refreshes a Migrate Environment. |


## `postMigrateEnvironment()`

```php
postMigrateEnvironment($environment_id, $post_migrate_environment_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Create a Migrate Environment using the provided environment as its source.

Create a Migrate Environment using the provided environment as its source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\MigrateAcceleratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_migrate_environment_request = {"label":"Migrate Environment","config":true}; // \Acquia\CloudApi\Model\PostMigrateEnvironmentRequest

try {
    $result = $apiInstance->postMigrateEnvironment($environment_id, $post_migrate_environment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrateAcceleratorApi->postMigrateEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_migrate_environment_request** | [**\Acquia\CloudApi\Model\PostMigrateEnvironmentRequest**](../Model/PostMigrateEnvironmentRequest.md)|  | |

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

## `postPromoteEnvironment()`

```php
postPromoteEnvironment($environment_id, $post_promote_environment_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Promote a Migrate Environment.

Promote a Migrate Environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\MigrateAcceleratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_promote_environment_request = {"target":"6a534a67-2d89-406d-95c8-efb515342983"}; // \Acquia\CloudApi\Model\PostPromoteEnvironmentRequest

try {
    $result = $apiInstance->postPromoteEnvironment($environment_id, $post_promote_environment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrateAcceleratorApi->postPromoteEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_promote_environment_request** | [**\Acquia\CloudApi\Model\PostPromoteEnvironmentRequest**](../Model/PostPromoteEnvironmentRequest.md)|  | |

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

## `postRefreshEnvironment()`

```php
postRefreshEnvironment($environment_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Refreshes a Migrate Environment.

Refreshes a Migrate Environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\MigrateAcceleratorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->postRefreshEnvironment($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MigrateAcceleratorApi->postRefreshEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

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
