# # Subscription

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The subscription ID. |
**uuid** | **string** | The subscription UUID. |
**name** | **string** | The subscription name. |
**start_at** | **\DateTime** | The time when the service defined by the subscription becomes available. |
**expire_at** | **\DateTime** | The time when the service expires. |
**product** | [**\Acquia\CloudApi\Model\SubscriptionProduct**](SubscriptionProduct.md) |  |
**applications_total** | **int** | The number of applications this subscription is entitled to. |
**applications_used** | **int** | The number of applications used. |
**organization** | [**\Acquia\CloudApi\Model\SubscriptionOrganization**](SubscriptionOrganization.md) |  |
**flags** | [**array<string,\Acquia\CloudApi\Model\SubscriptionFlagsValue>**](SubscriptionFlagsValue.md) | An array of various flags that indicate functionality associated with subscription. |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |
**_embedded** | [**\Acquia\CloudApi\Model\SubscriptionEmbedded**](SubscriptionEmbedded.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
