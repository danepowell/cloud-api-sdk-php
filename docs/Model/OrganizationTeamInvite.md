# # OrganizationTeamInvite

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applications** | [**\Acquia\CloudApi\Model\ApplicationStub[]**](ApplicationStub.md) | A array of applications this invite is granting access to. |
**author** | [**\Acquia\CloudApi\Model\UserStub**](UserStub.md) |  |
**organization** | [**\Acquia\CloudApi\Model\OrganizationStub**](OrganizationStub.md) |  |
**uuid** | **string** | The unique identifier of the Invite. |
**email** | **string** | The invitee email address. |
**created_at** | **\DateTime** | The invite creation time. |
**token** | **string** | The invite token. |
**flags** | [**\Acquia\CloudApi\Model\InviteFlags**](InviteFlags.md) |  |
**team** | [**\Acquia\CloudApi\Model\TeamStub**](TeamStub.md) |  |
**roles** | [**\Acquia\CloudApi\Model\RoleStub[]**](RoleStub.md) | List of roles the invite will grant the invitee. |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
