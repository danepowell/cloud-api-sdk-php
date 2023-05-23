# Acquia\CloudApi\DistributionsApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDistributionByName()**](DistributionsApi.md#getDistributionByName) | **GET** /distributions/{name} | Return details about a specific Drupal distribution. |
| [**getDistributions()**](DistributionsApi.md#getDistributions) | **GET** /distributions | Return a list of Drupal distributions. |


## `getDistributionByName()`

```php
getDistributionByName($name): \Acquia\CloudApi\Model\Distribution
```

Return details about a specific Drupal distribution.

A specific distribution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\DistributionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = drupal8; // string | A name that uniquely identifies an entity.

try {
    $result = $apiInstance->getDistributionByName($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionsApi->getDistributionByName: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| A name that uniquely identifies an entity. | |

### Return type

[**\Acquia\CloudApi\Model\Distribution**](../Model/Distribution.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDistributions()`

```php
getDistributions(): \Acquia\CloudApi\Model\Distributions
```

Return a list of Drupal distributions.

Returns a list of Drupal distributions that are available for installation in an Acquia Cloud environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\DistributionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDistributions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DistributionsApi->getDistributions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\Distributions**](../Model/Distributions.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
