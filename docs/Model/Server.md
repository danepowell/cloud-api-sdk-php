# # Server

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the server. |
**name** | **string** | The machine name of the server. |
**hostname** | **string** | The hostname for the server. |
**ssh_user** | **string** | The name of the SSH user for this environment. |
**ip** | **string** | The IP address of the server. |
**status** | **string** | The status of the server. |
**region** | **string** | The Amazon region the server is in. |
**roles** | **string[]** | The roles the server has, for its environment. |
**ami_type** | **string** | The Amazon AMI type. |
**operating_system** | **string** | The operating system running on the server. |
**configuration** | [**\Acquia\CloudApi\Model\ServerConfiguration**](ServerConfiguration.md) |  |
**flags** | [**\Acquia\CloudApi\Model\ServerFlags**](ServerFlags.md) |  |
**environment** | [**\Acquia\CloudApi\Model\EnvironmentStub**](EnvironmentStub.md) |  |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
