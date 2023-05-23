# # Environment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | The ID of the environment. The ID is a compound key consisting of the internal database ID of the environment and the application UUID. |
**label** | **string** | The human-readable name of the environment. |
**name** | **string** | The stage name of the environment. |
**application** | [**\Acquia\CloudApi\Model\ApplicationStub**](ApplicationStub.md) |  |
**domains** | **string[]** | An array of domain names attached to this environment. |
**active_domain** | **string** | The active domain name for this environment. |
**default_domain** | **string** | The default domain name for this environment. |
**image_url** | **string** | The URL to the image for this environment. |
**ssh_url** | **string** | The URL used to SSH into the environment. |
**ips** | **string[]** | An array of IP addresses attached to this environment. |
**region** | **string** | The region the environment resides in. |
**balancer** | **string** | The balancer type. - balancers: The environment is behind a Legacy balancer. - elb: The environment is behind an ELB balancer. - cluster: The environment is behind an Edge Cluster balancer. |
**platform** | **string** | The platform type. - cloud: The environment is hosted on a Cloud Classic Platform. - cloud-next: The environment is hosted on a Cloud Next Platform. - unknown:  The host information is not available for the environment. |
**status** | **string** | The status of this environment. |
**type** | **string** | The type of environment. - node: A NodeJS environment. - drupal: A Drupal environment. - unknown: We were unable to determine the environment type. |
**size** | **string** | The size of the environment. Will be null if the environment type does not support sizes. |
**weight** | **int** | The environment weight for display purposes. |
**vcs** | [**\Acquia\CloudApi\Model\Vcs**](Vcs.md) |  |
**flags** | [**array<string,\Acquia\CloudApi\Model\EnvironmentFlagsValue>**](EnvironmentFlagsValue.md) | An array of various flags that indicate functionality associated with the environment. |
**configuration** | [**\Acquia\CloudApi\Model\EnvironmentConfiguration**](EnvironmentConfiguration.md) |  |
**artifact** | [**\Acquia\CloudApi\Model\ArtifactStub**](ArtifactStub.md) |  |
**_links** | [**\Acquia\CloudApi\Model\Links**](Links.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
