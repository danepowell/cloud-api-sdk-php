# Acquia\CloudApi\NotificationsApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getNotificationByUuid()**](NotificationsApi.md#getNotificationByUuid) | **GET** /notifications/{notificationUuid} | Returns a single notification. |


## `getNotificationByUuid()`

```php
getNotificationByUuid($notification_uuid): \Acquia\CloudApi\Model\Notification
```

Returns a single notification.

Returns a single notification.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_uuid = 2343b683-b194-4217-982a-6a95c72ad9a8; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getNotificationByUuid($notification_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getNotificationByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **notification_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Notification**](../Model/Notification.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
