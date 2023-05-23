# # LogForwardingDestination

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | The string representation of the unique identifier of the destination. |
**label** | **string** | The human-friendly identifier of the destination. |
**sources** | **string** | The list of log sources to forward. |
**consumer** | **string** | The application or provider consuming the logs. |
**credentials** | [**\Acquia\CloudApi\Model\LogForwardingDestinationCredentials**](LogForwardingDestinationCredentials.md) |  |
**address** | **string** | The URL or host name and port of the destination. |
**status** | **string** | The current status of the destination. |
**flags** | [**\Acquia\CloudApi\Model\LogForwardingDestinationFlags**](LogForwardingDestinationFlags.md) |  |
**health** | [**\Acquia\CloudApi\Model\Health**](Health.md) |  |
**environment** | [**\Acquia\CloudApi\Model\EnvironmentStub**](EnvironmentStub.md) |  |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
