# Acquia\CloudApi\OptionsApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getCdeSizes()**](OptionsApi.md#getCdeSizes) | **GET** /options/cde-sizes | Displays the various CD Environment size options. |
| [**getColors()**](OptionsApi.md#getColors) | **GET** /options/colors | Displays the various color options. |
| [**getLogForwarding()**](OptionsApi.md#getLogForwarding) | **GET** /options/log-forwarding | Does not return any data. Allows traversal of options groups endpoints. |
| [**getLogForwardingConsumers()**](OptionsApi.md#getLogForwardingConsumers) | **GET** /options/log-forwarding/consumers | Displays available log forwarding consumers. |
| [**getLogForwardingSources()**](OptionsApi.md#getLogForwardingSources) | **GET** /options/log-forwarding/sources | Displays available log forwarding sources. |
| [**getOptions()**](OptionsApi.md#getOptions) | **GET** /options | Does not return any data. Allows traversal of options groups endpoints. |


## `getCdeSizes()`

```php
getCdeSizes(): \Acquia\CloudApi\Model\CdeSizes
```

Displays the various CD Environment size options.

Displays the various CD Environment size options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCdeSizes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getCdeSizes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\CdeSizes**](../Model/CdeSizes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getColors()`

```php
getColors(): \Acquia\CloudApi\Model\Colors
```

Displays the various color options.

Displays the various color options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getColors();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getColors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\Colors**](../Model/Colors.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogForwarding()`

```php
getLogForwarding(): \Acquia\CloudApi\Model\GetOptions200Response
```

Does not return any data. Allows traversal of options groups endpoints.

Does not return any data. Allows traversal of options groups endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLogForwarding();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getLogForwarding: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\GetOptions200Response**](../Model/GetOptions200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogForwardingConsumers()`

```php
getLogForwardingConsumers(): \Acquia\CloudApi\Model\LogForwardingConsumers
```

Displays available log forwarding consumers.

Displays available log forwarding consumers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLogForwardingConsumers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getLogForwardingConsumers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\LogForwardingConsumers**](../Model/LogForwardingConsumers.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLogForwardingSources()`

```php
getLogForwardingSources(): \Acquia\CloudApi\Model\LogForwardingSources
```

Displays available log forwarding sources.

Displays available log forwarding sources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLogForwardingSources();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getLogForwardingSources: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\LogForwardingSources**](../Model/LogForwardingSources.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOptions()`

```php
getOptions(): \Acquia\CloudApi\Model\GetOptions200Response
```

Does not return any data. Allows traversal of options groups endpoints.

Does not return any data. Allows traversal of options groups endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\OptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getOptions();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OptionsApi->getOptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\GetOptions200Response**](../Model/GetOptions200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
