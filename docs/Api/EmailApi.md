# Acquia\CloudApi\EmailApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEmailStatus()**](EmailApi.md#getEmailStatus) | **GET** /environments/{environmentId}/email | Returns the status of Platform Email for an Environment. |


## `getEmailStatus()`

```php
getEmailStatus($environment_id): \Acquia\CloudApi\Model\Email
```

Returns the status of Platform Email for an Environment.

Returns the status of Platform Email for an Environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEmailStatus($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->getEmailStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Email**](../Model/Email.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
