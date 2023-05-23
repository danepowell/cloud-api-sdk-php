# Acquia\CloudApi\ApplicationPerformanceMonitoringServicesApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getEnvironmentsApmSetting()**](ApplicationPerformanceMonitoringServicesApi.md#getEnvironmentsApmSetting) | **GET** /environments/{environmentId}/settings/apm | Returns a list of Application Performance Monitoring services associated with the environment. |
| [**getSubscriptionApmType()**](ApplicationPerformanceMonitoringServicesApi.md#getSubscriptionApmType) | **GET** /subscriptions/{subscriptionUuid}/apm/{apmType} | Returns the Application Performance Monitoring service type associated with the subscription. |
| [**getSubscriptionApmTypes()**](ApplicationPerformanceMonitoringServicesApi.md#getSubscriptionApmTypes) | **GET** /subscriptions/{subscriptionUuid}/apm | Returns a list of Application Performance Monitoring services associated with the subscription. |
| [**postSubscriptionApmOptIn()**](ApplicationPerformanceMonitoringServicesApi.md#postSubscriptionApmOptIn) | **POST** /subscriptions/{subscriptionUuid}/apm/{apmType}/actions/opt-in | Enables New Relic Pro APM license for all applications on a subscription. |
| [**putEnvironmentsApmSetting()**](ApplicationPerformanceMonitoringServicesApi.md#putEnvironmentsApmSetting) | **PUT** /environments/{environmentId}/settings/apm | Update configuration for an Application Performance Monitoring tool. |


## `getEnvironmentsApmSetting()`

```php
getEnvironmentsApmSetting($environment_id): \Acquia\CloudApi\Model\Apm
```

Returns a list of Application Performance Monitoring services associated with the environment.

Returns a list of Application Performance Monitoring services associated with the environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationPerformanceMonitoringServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEnvironmentsApmSetting($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPerformanceMonitoringServicesApi->getEnvironmentsApmSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Apm**](../Model/Apm.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionApmType()`

```php
getSubscriptionApmType($subscription_uuid, $apm_type): \Acquia\CloudApi\Model\ApmType
```

Returns the Application Performance Monitoring service type associated with the subscription.

Returns the Application Performance Monitoring service type associated with the subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationPerformanceMonitoringServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$apm_type = newrelic; // string | The APM type.

try {
    $result = $apiInstance->getSubscriptionApmType($subscription_uuid, $apm_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPerformanceMonitoringServicesApi->getSubscriptionApmType: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **apm_type** | **string**| The APM type. | |

### Return type

[**\Acquia\CloudApi\Model\ApmType**](../Model/ApmType.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionApmTypes()`

```php
getSubscriptionApmTypes($subscription_uuid): \Acquia\CloudApi\Model\ApmTypes
```

Returns a list of Application Performance Monitoring services associated with the subscription.

Returns a list of Application Performance Monitoring services associated with the subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationPerformanceMonitoringServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.

try {
    $result = $apiInstance->getSubscriptionApmTypes($subscription_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPerformanceMonitoringServicesApi->getSubscriptionApmTypes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\ApmTypes**](../Model/ApmTypes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSubscriptionApmOptIn()`

```php
postSubscriptionApmOptIn($subscription_uuid, $apm_type): \Acquia\CloudApi\Model\MessageWithLinks
```

Enables New Relic Pro APM license for all applications on a subscription.

Enables New Relic Pro APM license for all applications on a subscription. This authorizes Acquia to create a new user account on the third-party New Relic platform using the name and e-mail address of the organization owner.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\ApplicationPerformanceMonitoringServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$apm_type = newrelic; // string | The APM type.

try {
    $result = $apiInstance->postSubscriptionApmOptIn($subscription_uuid, $apm_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPerformanceMonitoringServicesApi->postSubscriptionApmOptIn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **apm_type** | **string**| The APM type. | |

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

## `putEnvironmentsApmSetting()`

```php
putEnvironmentsApmSetting($environment_id, $put_environments_apm_setting_request): \Acquia\CloudApi\Model\Message
```

Update configuration for an Application Performance Monitoring tool.

Update configuration for an Application Performance Monitoring tool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\ApplicationPerformanceMonitoringServicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$put_environments_apm_setting_request = {"type":"newrelic","key":"Some New Relic key"}; // \Acquia\CloudApi\Model\PutEnvironmentsApmSettingRequest

try {
    $result = $apiInstance->putEnvironmentsApmSetting($environment_id, $put_environments_apm_setting_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicationPerformanceMonitoringServicesApi->putEnvironmentsApmSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **put_environments_apm_setting_request** | [**\Acquia\CloudApi\Model\PutEnvironmentsApmSettingRequest**](../Model/PutEnvironmentsApmSettingRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
