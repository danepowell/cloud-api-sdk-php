# # Certificate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the certificate. |
**label** | **string** | The certificate label (SNI only). | [optional]
**certificate** | **string** | Returns the PEM encoded certificate. |
**private_key** | **string** | The PEM encoded private key. |
**ca** | **string** | The CA intermediary chain. |
**flags** | [**array<string,\Acquia\CloudApi\Model\CertificateFlagsValue>**](CertificateFlagsValue.md) | An array of various flags that indicate functionality associated with the certificate. |
**expires_at** | **\DateTime** | The ISO-8601 formatted date/time of the certificates expiration date. |
**domains** | **string[]** | The domain names that this certificate is covering. |
**environment** | [**\Acquia\CloudApi\Model\EnvironmentStub**](EnvironmentStub.md) |  |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
