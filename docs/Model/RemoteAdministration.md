# # RemoteAdministration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**update_mode** | **string** | The update mode to select. |
**update_type** | **string** | What components to update (core only or core and contrib modules). | [optional]
**pause_until** | **\DateTime** | What date/time to pause RA updates until (if applicable). | [optional]
**deploy_at** | **\DateTime** | What date/time to deploy RA updates at (if applicable). | [optional]
**deploy_environment** | **string** | The environment id of the environment to deploy to. | [optional]
**source_environment** | **string** | The environment id of the environment to use as a starting point for testing. | [optional]
**copy_files** | **bool** | Whether to copy files from production to testing environment. | [optional]
**copy_database** | **bool** | Whether to copy database from production to testing environment. | [optional]
**merge_tag** | **bool** | Whether to automatically merge the approved code into your development branch. | [optional]
**merge_branch** | **string** | The development branch into which to merge the update tag. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
