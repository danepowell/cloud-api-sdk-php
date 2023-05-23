# # Application

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique internal ID of the application. |
**uuid** | **string** | The UUID of the application. |
**name** | **string** | The name of the application. |
**hosting** | [**\Acquia\CloudApi\Model\ApplicationHosting**](ApplicationHosting.md) |  |
**subscription** | [**\Acquia\CloudApi\Model\SubscriptionStub**](SubscriptionStub.md) |  |
**organization** | [**\Acquia\CloudApi\Model\OrganizationStub**](OrganizationStub.md) |  |
**flags** | [**array<string,\Acquia\CloudApi\Model\ApplicationFlagsValue>**](ApplicationFlagsValue.md) | An array of various flags that indicate functionality associated with applications. |
**type** | **string** | The type of application supported. |
**status** | **string** | The current application status. |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |
**_embedded** | [**\Acquia\CloudApi\Model\ApplicationEmbedded**](ApplicationEmbedded.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
