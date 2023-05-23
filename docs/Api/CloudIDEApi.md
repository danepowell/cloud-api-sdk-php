# Acquia\CloudApi\CloudIDEApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteIde()**](CloudIDEApi.md#deleteIde) | **DELETE** /ides/{ideUuid} | De-provisions a specific Cloud IDE. |
| [**getIde()**](CloudIDEApi.md#getIde) | **GET** /ides/{ideUuid} | Returns Cloud IDE info. |


## `deleteIde()`

```php
deleteIde($ide_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

De-provisions a specific Cloud IDE.

De-provisions a specific Cloud IDE.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\CloudIDEApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ide_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The Cloud IDE universally unique identifier.

try {
    $result = $apiInstance->deleteIde($ide_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudIDEApi->deleteIde: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ide_uuid** | **string**| The Cloud IDE universally unique identifier. | |

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

## `getIde()`

```php
getIde($ide_uuid): \Acquia\CloudApi\Model\Ide
```

Returns Cloud IDE info.

Returns Cloud IDE info.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\CloudIDEApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ide_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The Cloud IDE universally unique identifier.

try {
    $result = $apiInstance->getIde($ide_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CloudIDEApi->getIde: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ide_uuid** | **string**| The Cloud IDE universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Ide**](../Model/Ide.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
