# # PostCertificate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legacy** | **bool** | Must be set to true for legacy certificates. | [optional]
**certificate** | **string** | The SSL certificate being installed. |
**private_key** | **string** | The SSL private key. |
**ca_certificates** | **string** | The CA intermediary certificates. | [optional]
**csr_id** | **int** | The CSR (certificate signing request) to associate with this certificate. Optional. | [optional]
**label** | **string** | The label for this certificate. Required for standard certificates. Optional for legacy certificates. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
