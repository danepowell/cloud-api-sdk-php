# # Task

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**progress** | **int** | The progress of the event, from 0 to 100. |
**user** | [**\Acquia\CloudApi\Model\UserStub**](UserStub.md) |  |
**uuid** | **string** | The UUID of the task. |
**name** | **string** | The machine name of the task. |
**title** | **string** | The title of the task. |
**description** | **string** | The description of the task. |
**created_at** | **\DateTime** | The date that this task was created. |
**started_at** | **\DateTime** | The date that the task was started. |
**completed_at** | **\DateTime** | The date that the task was completed. | [optional]
**status** | **string** | The status of the task. |
**type** | **string** | The type of task. |
**metadata** | [**\Acquia\CloudApi\Model\TaskMetadataInner[]**](TaskMetadataInner.md) | Metadata for the task. |
**labels** | **string[]** | Categorization labels associated with the task |
**reference_uuid** | **string** | The UUID of the parent task. If there is no parent, this will be the task UUID. |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
