# # LogForwardingDestinationCredentials

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**certificate** | **string** | A public X.509 certificate in PEM format. Required for Splunk, Sumologic, and Syslog. Not supported by Loggly. |
**key** | **string** | The certificate private key, in PEM format, used to encrypt the log traffic. Optional for Splunk, Sumologic, and Syslog.  Not supported by Loggly |
**expires_at** | **\DateTime** | The ISO-8601 date the certificate will expire at. Required by Logly and Sumologic. Optional for Syslog. Not supported by Splunk. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
