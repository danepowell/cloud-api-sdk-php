# # IdentityProvider

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | The unique identifier of the identity provider. |
**label** | **string** | The human-friendly label of the identity provider. |
**idp_entity_id** | **string** | The SAML entity ID of the identity provider. |
**sp_entity_id** | **string** | The SAML entity ID of the service provider. |
**sso_url** | **string** | The URL of the SAML POST Binding / SP-initiated SSO. |
**certificate** | **string** | The PEM-encoded X.509 certificate used to sign assertions. |
**status** | **string** | The current state of the identity provider. |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
