# # Backup

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the database backup. |
**database** | [**\Acquia\CloudApi\Model\DatabaseStub**](DatabaseStub.md) |  |
**type** | **string** | The type of backup this is. |
**started_at** | **\DateTime** | The ISO-8601 formatted date/time of when the backup process was started. |
**completed_at** | **\DateTime** | The ISO-8601 formatted date/time of when the backup process was completed. |
**flags** | [**\Acquia\CloudApi\Model\BackupFlags**](BackupFlags.md) |  |
**environment** | [**\Acquia\CloudApi\Model\EnvironmentStub**](EnvironmentStub.md) |  |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |
**_embedded** | [**\Acquia\CloudApi\Model\BackupEmbedded**](BackupEmbedded.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
