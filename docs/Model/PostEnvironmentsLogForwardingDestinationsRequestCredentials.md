# # PostEnvironmentsLogForwardingDestinationsRequestCredentials

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**certificate** | **string** | A public X.509 certificate in PEM format. Required for Splunk, Sumologic, and Syslog. Not supported by Loggly. |
**key** | **string** | A certificate private key associated with the consumer. Optional for Splunk, Sumologic, and Syslog.  Not supported by Loggly | [optional]
**token** | **string** | An API token associated with the consumer. Required by Logly and Sumologic. Optional for Syslog. Not supported by Splunk. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
