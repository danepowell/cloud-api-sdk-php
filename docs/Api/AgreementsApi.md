# Acquia\CloudApi\AgreementsApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getAgreement()**](AgreementsApi.md#getAgreement) | **GET** /agreements/{agreementUuid} | Return a specific agreement by a provided UUID. |
| [**getAgreements()**](AgreementsApi.md#getAgreements) | **GET** /agreements | Return a list of agreements. |
| [**getInvitees()**](AgreementsApi.md#getInvitees) | **GET** /agreements/{agreementUuid}/invitees | Returns a list of users invited to action this agreement. |
| [**postAcceptAgreement()**](AgreementsApi.md#postAcceptAgreement) | **POST** /agreements/{agreementUuid}/actions/accept | Accepts a legal agreement by UUID. |
| [**postDeclineAgreement()**](AgreementsApi.md#postDeclineAgreement) | **POST** /agreements/{agreementUuid}/actions/decline | Declines a legal agreement by UUID. |


## `getAgreement()`

```php
getAgreement($agreement_uuid): \Acquia\CloudApi\Model\Agreement
```

Return a specific agreement by a provided UUID.

Return a specific agreement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agreement_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getAgreement($agreement_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agreement_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Agreement**](../Model/Agreement.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAgreements()`

```php
getAgreements(): \Acquia\CloudApi\Model\Agreements
```

Return a list of agreements.

Returns a list of agreements you have been invited to accept or decline.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAgreements();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAgreements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Acquia\CloudApi\Model\Agreements**](../Model/Agreements.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInvitees()`

```php
getInvitees($agreement_uuid): \Acquia\CloudApi\Model\Invitees
```

Returns a list of users invited to action this agreement.

Returns a list of users invited to action this agreement by UUID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agreement_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getInvitees($agreement_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getInvitees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agreement_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Invitees**](../Model/Invitees.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postAcceptAgreement()`

```php
postAcceptAgreement($agreement_uuid): \Acquia\CloudApi\Model\Message
```

Accepts a legal agreement by UUID.

Accepts a legal agreement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agreement_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->postAcceptAgreement($agreement_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->postAcceptAgreement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agreement_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDeclineAgreement()`

```php
postDeclineAgreement($agreement_uuid): \Acquia\CloudApi\Model\Message
```

Declines a legal agreement by UUID.

Declines a legal agreement.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agreement_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->postDeclineAgreement($agreement_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->postDeclineAgreement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **agreement_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
