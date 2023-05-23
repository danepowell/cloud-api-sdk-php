# Acquia\CloudApi\SubscriptionsApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteShieldAcl()**](SubscriptionsApi.md#deleteShieldAcl) | **DELETE** /subscriptions/{subscriptionUuid}/shield-acl/{shieldAclUuid} | Deletes a Shield ACL rule. |
| [**deleteSubscriptionDomainRegistration()**](SubscriptionsApi.md#deleteSubscriptionDomainRegistration) | **DELETE** /subscriptions/{subscriptionUuid}/domains/{domainRegistrationUuid} | Unregisters a Domain registered with this subscription. |
| [**getShieldAcl()**](SubscriptionsApi.md#getShieldAcl) | **GET** /subscriptions/{subscriptionUuid}/shield-acl | Provides a list of Shield ACL rules. |
| [**getShieldAclRuleByUuid()**](SubscriptionsApi.md#getShieldAclRuleByUuid) | **GET** /subscriptions/{subscriptionUuid}/shield-acl/{shieldAclUuid} | Returns the specified Shield ACL rule. |
| [**getSubscription()**](SubscriptionsApi.md#getSubscription) | **GET** /subscriptions/{subscriptionUuid} | Return details about a specific subscription. |
| [**getSubscriptionApplications()**](SubscriptionsApi.md#getSubscriptionApplications) | **GET** /subscriptions/{subscriptionUuid}/applications | Provides a list of applications that are a part of the subscription. |
| [**getSubscriptionDomainRegistration()**](SubscriptionsApi.md#getSubscriptionDomainRegistration) | **GET** /subscriptions/{subscriptionUuid}/domains/{domainRegistrationUuid} | Returns a speicific Domain registered with this subscription. |
| [**getSubscriptionDomainRegistrations()**](SubscriptionsApi.md#getSubscriptionDomainRegistrations) | **GET** /subscriptions/{subscriptionUuid}/domains | Returns a list of Domains registered with this subscription. |
| [**getSubscriptionEntitlements()**](SubscriptionsApi.md#getSubscriptionEntitlements) | **GET** /subscriptions/{subscriptionUuid}/entitlements | Provides a list of entitlements that are a part of the subscription. |
| [**getSubscriptionIdes()**](SubscriptionsApi.md#getSubscriptionIdes) | **GET** /subscriptions/{subscriptionUuid}/ides | Returns a list of Cloud IDEs associated with this subscription. |
| [**getSubscriptions()**](SubscriptionsApi.md#getSubscriptions) | **GET** /subscriptions | Return a list of subscription. |
| [**getSubscriptionsUsageData()**](SubscriptionsApi.md#getSubscriptionsUsageData) | **GET** /subscriptions/{subscriptionUuid}/metrics/usage/data | Retrieves aggregate usage data for a subscription. |
| [**getSubscriptionsUsageDataByApplication()**](SubscriptionsApi.md#getSubscriptionsUsageDataByApplication) | **GET** /subscriptions/{subscriptionUuid}/metrics/usage/data-by-application | Retrieves usage data for a subscription, broken down by application. |
| [**getSubscriptionsUsageLinks()**](SubscriptionsApi.md#getSubscriptionsUsageLinks) | **GET** /subscriptions/{subscriptionUuid}/metrics/usage | Retrieves traversal links for a subscription&#39;s usage data. |
| [**getSubscriptionsUsageMetricData()**](SubscriptionsApi.md#getSubscriptionsUsageMetricData) | **GET** /subscriptions/{subscriptionUuid}/metrics/usage/{usageMetric} | Retrieves aggregate usage metric data for a subscription. |
| [**getSubscriptionsUsageViewsDataByApplication()**](SubscriptionsApi.md#getSubscriptionsUsageViewsDataByApplication) | **GET** /subscriptions/{subscriptionUuid}/metrics/usage/views-by-application | Retrieves views data for a subscription, broken down by application. |
| [**getSubscriptionsUsageVisitsDataByApplication()**](SubscriptionsApi.md#getSubscriptionsUsageVisitsDataByApplication) | **GET** /subscriptions/{subscriptionUuid}/metrics/usage/visits-by-application | Retrieves visits data for a subscription, broken down by application. |
| [**postResetShieldAcl()**](SubscriptionsApi.md#postResetShieldAcl) | **POST** /subscriptions/{subscriptionUuid}/shield-acl/actions/reset | Resets Shield ACL rules to default settings. |
| [**postShieldAcl()**](SubscriptionsApi.md#postShieldAcl) | **POST** /subscriptions/{subscriptionUuid}/shield-acl | Creates a Shield ACL rule. |
| [**postSubscriptionDomainRegistration()**](SubscriptionsApi.md#postSubscriptionDomainRegistration) | **POST** /subscriptions/{subscriptionUuid}/domains | Registers a Domain with this subscription. |
| [**postSubscriptionVerifyDomainRegistration()**](SubscriptionsApi.md#postSubscriptionVerifyDomainRegistration) | **POST** /subscriptions/{subscriptionUuid}/domains/{domainRegistrationUuid}/actions/verify | Triggers re-verification and update to the domain verification status. |
| [**putShieldAcl()**](SubscriptionsApi.md#putShieldAcl) | **PUT** /subscriptions/{subscriptionUuid}/shield-acl/{shieldAclUuid} | Updates a Shield ACL rule. |
| [**putSubscription()**](SubscriptionsApi.md#putSubscription) | **PUT** /subscriptions/{subscriptionUuid} | Modifies a subscription. |


## `deleteShieldAcl()`

```php
deleteShieldAcl($subscription_uuid, $shield_acl_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Deletes a Shield ACL rule.

Deletes a Shield ACL rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$shield_acl_uuid = a1234567-1234-123a-abc1-12ab345cd678; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->deleteShieldAcl($subscription_uuid, $shield_acl_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteShieldAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **shield_acl_uuid** | **string**| The entity&#39;s universally unique identifier. | |

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

## `deleteSubscriptionDomainRegistration()`

```php
deleteSubscriptionDomainRegistration($subscription_uuid, $domain_registration_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Unregisters a Domain registered with this subscription.

Unregisters a Domain registered with this subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$domain_registration_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The Domain Registration universally unique identifier.

try {
    $result = $apiInstance->deleteSubscriptionDomainRegistration($subscription_uuid, $domain_registration_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteSubscriptionDomainRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **domain_registration_uuid** | **string**| The Domain Registration universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShieldAcl()`

```php
getShieldAcl($subscription_uuid, $limit, $offset): \Acquia\CloudApi\Model\ShieldAclCollection
```

Provides a list of Shield ACL rules.

Provides a list of Shield ACL rules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getShieldAcl($subscription_uuid, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getShieldAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\ShieldAclCollection**](../Model/ShieldAclCollection.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getShieldAclRuleByUuid()`

```php
getShieldAclRuleByUuid($subscription_uuid, $shield_acl_uuid): \Acquia\CloudApi\Model\ShieldAcl
```

Returns the specified Shield ACL rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$shield_acl_uuid = a1234567-1234-123a-abc1-12ab345cd678; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getShieldAclRuleByUuid($subscription_uuid, $shield_acl_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getShieldAclRuleByUuid: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **shield_acl_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\ShieldAcl**](../Model/ShieldAcl.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscription()`

```php
getSubscription($subscription_uuid): \Acquia\CloudApi\Model\Subscription
```

Return details about a specific subscription.

Return details about a specific subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.

try {
    $result = $apiInstance->getSubscription($subscription_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Subscription**](../Model/Subscription.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionApplications()`

```php
getSubscriptionApplications($subscription_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\Applications
```

Provides a list of applications that are a part of the subscription.

Filterable fields: * `from` * `to` * `sort` * `filter` * `limit` * `offset`  Sortable fields: * `from` * `to` * `sort` * `filter` * `limit` * `offset`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getSubscriptionApplications($subscription_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionApplications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Applications**](../Model/Applications.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionDomainRegistration()`

```php
getSubscriptionDomainRegistration($subscription_uuid, $domain_registration_uuid): \Acquia\CloudApi\Model\DomainRegistration
```

Returns a speicific Domain registered with this subscription.

Returns a speicific Domain registered with this subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$domain_registration_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The Domain Registration universally unique identifier.

try {
    $result = $apiInstance->getSubscriptionDomainRegistration($subscription_uuid, $domain_registration_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionDomainRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **domain_registration_uuid** | **string**| The Domain Registration universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\DomainRegistration**](../Model/DomainRegistration.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionDomainRegistrations()`

```php
getSubscriptionDomainRegistrations($subscription_uuid, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\DomainRegistrations
```

Returns a list of Domains registered with this subscription.

Returns a list of Domains registered with this subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getSubscriptionDomainRegistrations($subscription_uuid, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionDomainRegistrations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\DomainRegistrations**](../Model/DomainRegistrations.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionEntitlements()`

```php
getSubscriptionEntitlements($subscription_uuid): \Acquia\CloudApi\Model\Entitlements
```

Provides a list of entitlements that are a part of the subscription.

Provides a list of entitlements that are a part of the subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.

try {
    $result = $apiInstance->getSubscriptionEntitlements($subscription_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionEntitlements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Entitlements**](../Model/Entitlements.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionIdes()`

```php
getSubscriptionIdes($subscription_uuid): \Acquia\CloudApi\Model\Ides
```

Returns a list of Cloud IDEs associated with this subscription.

Returns a list of Cloud IDEs associated with this subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.

try {
    $result = $apiInstance->getSubscriptionIdes($subscription_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionIdes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Ides**](../Model/Ides.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptions()`

```php
getSubscriptions($from, $to, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\Subscriptions
```

Return a list of subscription.

Filterable fields: * `from` * `to` * `sort` * `filter` * `limit` * `offset`  Sortable fields: * `from` * `to` * `sort` * `filter` * `limit` * `offset`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getSubscriptions($from, $to, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Subscriptions**](../Model/Subscriptions.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionsUsageData()`

```php
getSubscriptionsUsageData($subscription_uuid, $filter, $resolution): \Acquia\CloudApi\Model\SubscriptionUsageMetrics
```

Retrieves aggregate usage data for a subscription.

Filterable fields: * `metric` - One of: {`views`, `visits`} * `application` * `from` * `to`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$resolution = 'resolution_example'; // string | Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \"week\" resolution - 3 year limit for “month” resolution

try {
    $result = $apiInstance->getSubscriptionsUsageData($subscription_uuid, $filter, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionsUsageData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **resolution** | **string**| Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \&quot;week\&quot; resolution - 3 year limit for “month” resolution | [optional] |

### Return type

[**\Acquia\CloudApi\Model\SubscriptionUsageMetrics**](../Model/SubscriptionUsageMetrics.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionsUsageDataByApplication()`

```php
getSubscriptionsUsageDataByApplication($subscription_uuid, $from, $to, $filter, $resolution): \Acquia\CloudApi\Model\SubscriptionUsageMetrics
```

Retrieves usage data for a subscription, broken down by application.

Filterable fields: * `metric` - One of: {`views`, `visits`} * `application`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$resolution = 'resolution_example'; // string | Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \"week\" resolution - 3 year limit for “month” resolution

try {
    $result = $apiInstance->getSubscriptionsUsageDataByApplication($subscription_uuid, $from, $to, $filter, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionsUsageDataByApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **resolution** | **string**| Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \&quot;week\&quot; resolution - 3 year limit for “month” resolution | [optional] |

### Return type

[**\Acquia\CloudApi\Model\SubscriptionUsageMetrics**](../Model/SubscriptionUsageMetrics.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionsUsageLinks()`

```php
getSubscriptionsUsageLinks($subscription_uuid): \Acquia\CloudApi\Model\Usage
```

Retrieves traversal links for a subscription's usage data.

Retrieves traversal links for a subscription's usage data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.

try {
    $result = $apiInstance->getSubscriptionsUsageLinks($subscription_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionsUsageLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Usage**](../Model/Usage.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionsUsageMetricData()`

```php
getSubscriptionsUsageMetricData($usage_metric, $subscription_uuid, $from, $to): \Acquia\CloudApi\Model\SubscriptionUsageMetric
```

Retrieves aggregate usage metric data for a subscription.

Filterable fields: * `application`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usage_metric = ["views"]; // string | A usage data metric type.
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.

try {
    $result = $apiInstance->getSubscriptionsUsageMetricData($usage_metric, $subscription_uuid, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionsUsageMetricData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **usage_metric** | **string**| A usage data metric type. | |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\SubscriptionUsageMetric**](../Model/SubscriptionUsageMetric.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionsUsageViewsDataByApplication()`

```php
getSubscriptionsUsageViewsDataByApplication($subscription_uuid, $from, $to, $filter, $resolution): \Acquia\CloudApi\Model\SubscriptionUsageMetrics
```

Retrieves views data for a subscription, broken down by application.

Filterable fields: * `application`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$resolution = 'resolution_example'; // string | Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \"week\" resolution - 3 year limit for “month” resolution

try {
    $result = $apiInstance->getSubscriptionsUsageViewsDataByApplication($subscription_uuid, $from, $to, $filter, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionsUsageViewsDataByApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **resolution** | **string**| Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \&quot;week\&quot; resolution - 3 year limit for “month” resolution | [optional] |

### Return type

[**\Acquia\CloudApi\Model\SubscriptionUsageMetrics**](../Model/SubscriptionUsageMetrics.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionsUsageVisitsDataByApplication()`

```php
getSubscriptionsUsageVisitsDataByApplication($subscription_uuid, $from, $to, $filter, $resolution): \Acquia\CloudApi\Model\SubscriptionUsageMetrics
```

Retrieves visits data for a subscription, broken down by application.

Filterable fields: * `application`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$resolution = 'resolution_example'; // string | Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \"week\" resolution - 3 year limit for “month” resolution

try {
    $result = $apiInstance->getSubscriptionsUsageVisitsDataByApplication($subscription_uuid, $from, $to, $filter, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionsUsageVisitsDataByApplication: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **resolution** | **string**| Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \&quot;week\&quot; resolution - 3 year limit for “month” resolution | [optional] |

### Return type

[**\Acquia\CloudApi\Model\SubscriptionUsageMetrics**](../Model/SubscriptionUsageMetrics.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postResetShieldAcl()`

```php
postResetShieldAcl($subscription_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Resets Shield ACL rules to default settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.

try {
    $result = $apiInstance->postResetShieldAcl($subscription_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postResetShieldAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postShieldAcl()`

```php
postShieldAcl($subscription_uuid, $description, $addresses): \Acquia\CloudApi\Model\MessageWithLinks
```

Creates a Shield ACL rule.

Creates a Shield ACL rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$description = 'description_example'; // string | The description of the new Shield ACL rule.
$addresses = array('addresses_example'); // string[] | A list of IP addresses and/or CIDRs for this Shield ACL rule.

try {
    $result = $apiInstance->postShieldAcl($subscription_uuid, $description, $addresses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postShieldAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **description** | **string**| The description of the new Shield ACL rule. | [optional] |
| **addresses** | [**string[]**](../Model/string.md)| A list of IP addresses and/or CIDRs for this Shield ACL rule. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSubscriptionDomainRegistration()`

```php
postSubscriptionDomainRegistration($subscription_uuid, $post_subscription_domain_registration_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Registers a Domain with this subscription.

Registers a Domain with this subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$post_subscription_domain_registration_request = {"domain":"example.com"}; // \Acquia\CloudApi\Model\PostSubscriptionDomainRegistrationRequest

try {
    $result = $apiInstance->postSubscriptionDomainRegistration($subscription_uuid, $post_subscription_domain_registration_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postSubscriptionDomainRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **post_subscription_domain_registration_request** | [**\Acquia\CloudApi\Model\PostSubscriptionDomainRegistrationRequest**](../Model/PostSubscriptionDomainRegistrationRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSubscriptionVerifyDomainRegistration()`

```php
postSubscriptionVerifyDomainRegistration($subscription_uuid, $domain_registration_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Triggers re-verification and update to the domain verification status.

Triggers re-verification and update to the domain verification status.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$domain_registration_uuid = da1c0a8e-ff69-45db-88fc-acd6d2affbb7; // string | The Domain Registration universally unique identifier.

try {
    $result = $apiInstance->postSubscriptionVerifyDomainRegistration($subscription_uuid, $domain_registration_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->postSubscriptionVerifyDomainRegistration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **domain_registration_uuid** | **string**| The Domain Registration universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putShieldAcl()`

```php
putShieldAcl($subscription_uuid, $shield_acl_uuid, $description, $addresses): \Acquia\CloudApi\Model\MessageWithLinks
```

Updates a Shield ACL rule.

Updates a Shield ACL rule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$shield_acl_uuid = a1234567-1234-123a-abc1-12ab345cd678; // string | The entity's universally unique identifier.
$description = 'description_example'; // string | The description of the new Shield ACL rule.
$addresses = array('addresses_example'); // string[] | A list of IP addresses and/or CIDRs for this Shield ACL rule.

try {
    $result = $apiInstance->putShieldAcl($subscription_uuid, $shield_acl_uuid, $description, $addresses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->putShieldAcl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **shield_acl_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **description** | **string**| The description of the new Shield ACL rule. | [optional] |
| **addresses** | [**string[]**](../Model/string.md)| A list of IP addresses and/or CIDRs for this Shield ACL rule. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putSubscription()`

```php
putSubscription($subscription_uuid, $name): \Acquia\CloudApi\Model\Message
```

Modifies a subscription.

Modifies a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_uuid = 0f3ad33e-2fe4-11e9-b210-d663bd873d93; // string | The subscription entity's universally unique identifier.
$name = 'name_example'; // string | The new subscription name.

try {
    $result = $apiInstance->putSubscription($subscription_uuid, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->putSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_uuid** | **string**| The subscription entity&#39;s universally unique identifier. | |
| **name** | **string**| The new subscription name. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
