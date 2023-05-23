# Acquia\CloudApi\MessagesApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getMessageFollow()**](MessagesApi.md#getMessageFollow) | **GET** /messages/{messageUuid}/actions/follow | Follows an in-product message link. |
| [**postDismissMessage()**](MessagesApi.md#postDismissMessage) | **POST** /messages/{messageUuid}/actions/dismiss | Dismisses a message. |


## `getMessageFollow()`

```php
getMessageFollow($message_uuid)
```

Follows an in-product message link.

Follows an in-product message link.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $apiInstance->getMessageFollow($message_uuid);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->getMessageFollow: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDismissMessage()`

```php
postDismissMessage($message_uuid): \Acquia\CloudApi\Model\Message
```

Dismisses a message.

Dismisses a message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\MessagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$message_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->postDismissMessage($message_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessagesApi->postDismissMessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **message_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
