# Acquia\CloudApi\CurrentSystemHealthApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getSystemHealthStatus()**](CurrentSystemHealthApi.md#getSystemHealthStatus) | **GET** / | Return the current system health status. |


## `getSystemHealthStatus()`

```php
getSystemHealthStatus(): \Acquia\CloudApi\Model\Root
```

Return the current system health status.

Returns status checks for system database, configuration and registry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\CurrentSystemHealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getSystemHealthStatus();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrentSystemHealthApi->getSystemHealthStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\Root**](../Model/Root.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
