# # RemoteAdministrationSettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_uuid** | **string** | The application UUID. | [optional]
**update_mode** | **string** | The remote administration update setting. | [optional]
**update_type** | **string** | The remote administration update type (i.e. what to update). | [optional]
**pause_until** | **\DateTime** | The ISO-8601 formatted date/time to pause RA until. Only applicable for &#39;full&#39; and &#39;inform&#39; update modes and when it is in future. | [optional]
**deploy_at** | **\DateTime** | The ISO-8601 formatted date/time to deploy RA at. Only applicable for &#39;full&#39; and &#39;inform&#39; update modes and when it is in future. | [optional]
**deploy_environment** | **string** | The environment to deploy the code and production database to for testing. | [optional]
**source_environment** | **string** | The update source environment. Only applicable for &#39;full&#39; mode. | [optional]
**merge_branch** | **string** | The development branch into which the update tag will be merged. | [optional]
**flags** | [**\Acquia\CloudApi\Model\RemoteAdministrationSettingsFlags**](RemoteAdministrationSettingsFlags.md) |  | [optional]
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
