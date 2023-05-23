# # PutEnvironmentsApmSettingRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **bool** | Whether the APM tool should be enabled or disabled. If updating an existing install, this value does not need to be provided. | [optional]
**type** | **string** | The APM tool to install. Required if installing or updating a configuration. | [optional]
**key** | **string** | The key for the APM tool. Required if installing or updating a configuration. This value should be available from your APM provider. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
