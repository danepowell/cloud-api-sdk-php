# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal database ID (uid) of the user. |
**uuid** | **string** | The UUID for the user. |
**name** | **string** | The user name. |
**first_name** | **string** | The first name of the user. |
**last_name** | **string** | The last name of the user. |
**last_login_at** | **\DateTime** | The date/time of the last login for the user. |
**created_at** | **\DateTime** | The date/time when the user was created. |
**mail** | **string** | The e-mail address of the user. |
**phone** | [**\Acquia\CloudApi\Model\UserPhone**](UserPhone.md) |  |
**job_title** | **string** | The job title of the user. |
**job_function** | **string** | The job function of the user. |
**company** | **string** | The company of the user. |
**country** | **string** | The country of the user. |
**state** | **string** | The state of the user, if in the United States. | [optional]
**timezone** | **string** | The timezone of the user. |
**picture_url** | **string** | The user&#39;s picture url. |
**features** | **string[]** | The various feature flags for the user. |
**flags** | [**array<string,\Acquia\CloudApi\Model\UserFlagsValue>**](UserFlagsValue.md) | The various flags for the user. |
**metadata** | [**\Acquia\CloudApi\Model\UserMetadata**](UserMetadata.md) |  |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
