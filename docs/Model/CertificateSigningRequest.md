# # CertificateSigningRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The hosting ID of the CSR/SSL Certificate (0 for &#39;elb&#39; type). |
**csr** | **string** | The PEM encoded string containing the entire CSR. |
**private_key** | **string** | The PEM encoded private key. |
**country** | **string** | The ISO-3166 country code. |
**state** | **string** | The state/province. |
**locality** | **string** | The locality (city/town/township). |
**organization** | **string** | The organization name. |
**organizational_unit** | **string** | The organizational unit (department). |
**common_name** | **string** | The common name (host and domain name). |
**alternate_names** | **string[]** | The subject alternate names (sni only). |
**flags** | [**array<string,\Acquia\CloudApi\Model\CertificateSigningRequestFlagsValue>**](CertificateSigningRequestFlagsValue.md) | An array of various flags that indicate functionality associated with the CSR. |
**environment** | [**\Acquia\CloudApi\Model\EnvironmentStub**](EnvironmentStub.md) |  |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
