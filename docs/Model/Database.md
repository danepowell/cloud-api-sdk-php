# # Database

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the database. |
**name** | **string** | The database name. |
**user_name** | **string** | The database user name. |
**password** | **string** | The password for the database user. |
**url** | **string** | The connection URL. |
**db_host** | **string** | The server the database lives on, relative to the SSH host. |
**ssh_host** | **string** | The server to SSH to, in order to access the database on the CLI. |
**flags** | [**\Acquia\CloudApi\Model\DatabaseFlags**](DatabaseFlags.md) |  |
**environment** | [**\Acquia\CloudApi\Model\EnvironmentStub**](EnvironmentStub.md) |  |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
