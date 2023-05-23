# CloudApiSdkPhp

Acquia Cloud API

# Compatibility

## Stability

The response for all resource endpoints includes an `X-CloudAPI-Stability` header that indicates what changes, if any, Acquia will make to the resource and how changes will be communicated.

There are three levels of stability:

* `prototype`: A prototype resource is experimental and major changes are likely. A prototype resource may not reach production.
    * Compatible and emergency changes may be made with no advance notice
    * Disruptive changes may be made with one week notice
    * Deprecated resources will remain available for at least one month after deprecation
* `development`: A resource that is unlikely to change, but is still being worked on, will be marked as in development. These resources are very likely to reach production.
    * Compatible and emergency changes may be made with no advance notice
    * Disruptive changes may be made with one month notice
    * Deprecated resources will remain available for at least six months after deprecation
* `production`: A production resource will not introduce breaking changes within a version, and any breaking changes between versions will be communicated ahead of time.

## Deprecation

Over time, endpoints may become obsolete and will be removed in the future. These endpoints will be marked with an `X-CloudAPI-Deprecated` header indicating the version in which they were deprecated and the reason for the deprecation. Deprecated endpoints may be removed in the next version of the resource.

## Versioning

All resource endpoints are versioned within the API. Endpoints that have reached production will not introduce breaking changes between versions. Non-production endpoints will not version for changes.

A specific version of an endpoint can be requested via the `Accept` header:

    Accept: application/json, version=2

If the version is not specified, the latest version of the endpoint will be used.

Starting with version 3, we will support the current version of an endpoint and the previous version. Version 1 of the API is [provided elsewhere](https://cloudapi.acquia.com/).

## Errors

Some endpoints will return a 503 status when dependent services are unavailable:

    application/json
    {
        \"error\": \"system\",
        \"message\": \"This action is currently unavailable. Please try again later.\"
    }

## Authentication

All Acquia Cloud API calls require authentication to work properly.

Learn more: <a href='https://docs.acquia.com/acquia-cloud/develop/api/auth/' target='_blank'>https://docs.acquia.com/acquia-cloud/develop/api/auth/</a>

### Example implementation

An example PHP script for making authenticated API requests can be found at <a href='https://docs.acquia.com/_downloads/api-v2-auth.php' target='_blank'>https://docs.acquia.com/_downloads/api-v2-auth.php</a>. This script uses the <a href='https://oauth2-client.thephpleague.com/' target='_blank'>League/oauth2-client</a> library, installed via Composer.


For more information, please visit [https://www.acquia.com](https://www.acquia.com).

## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/CloudApiSdkPhp/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ssh_key_uuid = 981b7910-2fe9-11e9-b210-d663bd873d93; // string | The SSH key entity's universally unique identifier.

try {
    $result = $apiInstance->deleteAccountSshKey($ssh_key_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->deleteAccountSshKey: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://cloud.acquia.com/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AccountApi* | [**deleteAccountSshKey**](docs/Api/AccountApi.md#deleteaccountsshkey) | **DELETE** /account/ssh-keys/{sshKeyUuid} | Deletes an SSH key.
*AccountApi* | [**deleteAccountToken**](docs/Api/AccountApi.md#deleteaccounttoken) | **DELETE** /account/tokens/{tokenUuid} | Revokes an access token.
*AccountApi* | [**getAccount**](docs/Api/AccountApi.md#getaccount) | **GET** /account | Returns details about your account.
*AccountApi* | [**getAccountApplicationHasPermission**](docs/Api/AccountApi.md#getaccountapplicationhaspermission) | **GET** /account/applications/{applicationUuid}/has-permission | Returns whether your account has access to a specific application permission.
*AccountApi* | [**getAccountApplicationIsAdministrator**](docs/Api/AccountApi.md#getaccountapplicationisadministrator) | **GET** /account/applications/{applicationUuid}/is-admin | Returns whether your account is an administrator for an application.
*AccountApi* | [**getAccountApplicationIsOwner**](docs/Api/AccountApi.md#getaccountapplicationisowner) | **GET** /account/applications/{applicationUuid}/is-owner | Returns whether your account is the owner for an application.
*AccountApi* | [**getAccountDrushAliasesDownload**](docs/Api/AccountApi.md#getaccountdrushaliasesdownload) | **GET** /account/drush-aliases/download | Returns the drush aliases as a compressed archive download.
*AccountApi* | [**getAccountIdes**](docs/Api/AccountApi.md#getaccountides) | **GET** /account/ides | Returns a list of Cloud IDEs associated with the current user.
*AccountApi* | [**getAccountInvites**](docs/Api/AccountApi.md#getaccountinvites) | **GET** /account/invites | Gets a list of all organization admin and team invites that are pending for the current user.
*AccountApi* | [**getAccountMessages**](docs/Api/AccountApi.md#getaccountmessages) | **GET** /account/messages | Returns a list of messages associated with the current user.
*AccountApi* | [**getAccountOrganizationIsAdministrator**](docs/Api/AccountApi.md#getaccountorganizationisadministrator) | **GET** /account/organizations/{organizationUuid}/is-admin | Returns whether your account is an administrator for an organization.
*AccountApi* | [**getAccountOrganizationIsOwner**](docs/Api/AccountApi.md#getaccountorganizationisowner) | **GET** /account/organizations/{organizationUuid}/is-owner | Returns whether your account is the owner for an organization.
*AccountApi* | [**getAccountSshKey**](docs/Api/AccountApi.md#getaccountsshkey) | **GET** /account/ssh-keys/{sshKeyUuid} | Get an SSH key associated with the currently-logged in user.
*AccountApi* | [**getAccountSshKeys**](docs/Api/AccountApi.md#getaccountsshkeys) | **GET** /account/ssh-keys | Gets a list of SSH keys associated with the current user.
*AccountApi* | [**getAccountSubscriptionIsAdministrator**](docs/Api/AccountApi.md#getaccountsubscriptionisadministrator) | **GET** /account/subscriptions/{subscriptionUuid}/is-admin | Returns whether your account is an administrator for a subscription.
*AccountApi* | [**getAccountSubscriptionIsOwner**](docs/Api/AccountApi.md#getaccountsubscriptionisowner) | **GET** /account/subscriptions/{subscriptionUuid}/is-owner | Returns whether your account is the owner for a subscription.
*AccountApi* | [**getAccountTeamHasPermission**](docs/Api/AccountApi.md#getaccountteamhaspermission) | **GET** /account/teams/{teamUuid}/has-permission | Returns whether your account has access to a specific team permission.
*AccountApi* | [**getAccountTeamIsAdministrator**](docs/Api/AccountApi.md#getaccountteamisadministrator) | **GET** /account/teams/{teamUuid}/is-admin | Returns whether your account is an administrator for a team.
*AccountApi* | [**getAccountTeamIsOwner**](docs/Api/AccountApi.md#getaccountteamisowner) | **GET** /account/teams/{teamUuid}/is-owner | Returns whether your account is the owner for a team.
*AccountApi* | [**getAccountToken**](docs/Api/AccountApi.md#getaccounttoken) | **GET** /account/tokens/{tokenUuid} | Return details about a specific token.
*AccountApi* | [**getAccountTokens**](docs/Api/AccountApi.md#getaccounttokens) | **GET** /account/tokens | Returns a list of metadata for API access tokens tied to your account.
*AccountApi* | [**postAccountApplicationMarkRecent**](docs/Api/AccountApi.md#postaccountapplicationmarkrecent) | **POST** /account/applications/{applicationUuid}/actions/mark-recent | Marks an application as recently viewed.
*AccountApi* | [**postAccountApplicationStar**](docs/Api/AccountApi.md#postaccountapplicationstar) | **POST** /account/applications/{applicationUuid}/actions/star | Stars an application.
*AccountApi* | [**postAccountApplicationUnstar**](docs/Api/AccountApi.md#postaccountapplicationunstar) | **POST** /account/applications/{applicationUuid}/actions/unstar | Removes an application from the user&#39;s starred list.
*AccountApi* | [**postAccountPassword**](docs/Api/AccountApi.md#postaccountpassword) | **POST** /account/password | Verifies that the supplied password matches the current user&#39;s password.
*AccountApi* | [**postAccountSshKeys**](docs/Api/AccountApi.md#postaccountsshkeys) | **POST** /account/ssh-keys | Installs a new SSH key for the current user.
*AccountApi* | [**postAccountTokens**](docs/Api/AccountApi.md#postaccounttokens) | **POST** /account/tokens | Creates an API access token tied to your account.
*AgreementsApi* | [**getAgreement**](docs/Api/AgreementsApi.md#getagreement) | **GET** /agreements/{agreementUuid} | Return a specific agreement by a provided UUID.
*AgreementsApi* | [**getAgreements**](docs/Api/AgreementsApi.md#getagreements) | **GET** /agreements | Return a list of agreements.
*AgreementsApi* | [**getInvitees**](docs/Api/AgreementsApi.md#getinvitees) | **GET** /agreements/{agreementUuid}/invitees | Returns a list of users invited to action this agreement.
*AgreementsApi* | [**postAcceptAgreement**](docs/Api/AgreementsApi.md#postacceptagreement) | **POST** /agreements/{agreementUuid}/actions/accept | Accepts a legal agreement by UUID.
*AgreementsApi* | [**postDeclineAgreement**](docs/Api/AgreementsApi.md#postdeclineagreement) | **POST** /agreements/{agreementUuid}/actions/decline | Declines a legal agreement by UUID.
*ApplicationPerformanceMonitoringServicesApi* | [**getEnvironmentsApmSetting**](docs/Api/ApplicationPerformanceMonitoringServicesApi.md#getenvironmentsapmsetting) | **GET** /environments/{environmentId}/settings/apm | Returns a list of Application Performance Monitoring services associated with the environment.
*ApplicationPerformanceMonitoringServicesApi* | [**getSubscriptionApmType**](docs/Api/ApplicationPerformanceMonitoringServicesApi.md#getsubscriptionapmtype) | **GET** /subscriptions/{subscriptionUuid}/apm/{apmType} | Returns the Application Performance Monitoring service type associated with the subscription.
*ApplicationPerformanceMonitoringServicesApi* | [**getSubscriptionApmTypes**](docs/Api/ApplicationPerformanceMonitoringServicesApi.md#getsubscriptionapmtypes) | **GET** /subscriptions/{subscriptionUuid}/apm | Returns a list of Application Performance Monitoring services associated with the subscription.
*ApplicationPerformanceMonitoringServicesApi* | [**postSubscriptionApmOptIn**](docs/Api/ApplicationPerformanceMonitoringServicesApi.md#postsubscriptionapmoptin) | **POST** /subscriptions/{subscriptionUuid}/apm/{apmType}/actions/opt-in | Enables New Relic Pro APM license for all applications on a subscription.
*ApplicationPerformanceMonitoringServicesApi* | [**putEnvironmentsApmSetting**](docs/Api/ApplicationPerformanceMonitoringServicesApi.md#putenvironmentsapmsetting) | **PUT** /environments/{environmentId}/settings/apm | Update configuration for an Application Performance Monitoring tool.
*ApplicationsApi* | [**deleteApplicationSearchConfigurationSet**](docs/Api/ApplicationsApi.md#deleteapplicationsearchconfigurationset) | **DELETE** /applications/{applicationUuid}/search/config-sets/{configurationSetId} | Removes and deletes a specific search configuration set from an application.
*ApplicationsApi* | [**deleteApplicationTags**](docs/Api/ApplicationsApi.md#deleteapplicationtags) | **DELETE** /applications/{applicationUuid}/tags/{tagName} | Deletes an application tag.
*ApplicationsApi* | [**getApplicationByUuid**](docs/Api/ApplicationsApi.md#getapplicationbyuuid) | **GET** /applications/{applicationUuid} | Return details about a specific application.
*ApplicationsApi* | [**getApplicationDatabases**](docs/Api/ApplicationsApi.md#getapplicationdatabases) | **GET** /applications/{applicationUuid}/databases | Returns a list database names for the application.
*ApplicationsApi* | [**getApplicationEmailDomains**](docs/Api/ApplicationsApi.md#getapplicationemaildomains) | **GET** /applications/{applicationUuid}/email/domains | Returns a list of email domains associated with the application.
*ApplicationsApi* | [**getApplicationEnvironments**](docs/Api/ApplicationsApi.md#getapplicationenvironments) | **GET** /applications/{applicationUuid}/environments | Returns a list of environments within this application by its UUID.
*ApplicationsApi* | [**getApplicationFeatures**](docs/Api/ApplicationsApi.md#getapplicationfeatures) | **GET** /applications/{applicationUuid}/features | Return application features.
*ApplicationsApi* | [**getApplicationHostingSettings**](docs/Api/ApplicationsApi.md#getapplicationhostingsettings) | **GET** /applications/{applicationUuid}/settings/hosting | Returns the hosting settings for this application.
*ApplicationsApi* | [**getApplicationIdes**](docs/Api/ApplicationsApi.md#getapplicationides) | **GET** /applications/{applicationUuid}/ides | Returns a list of Cloud IDEs associated with this application.
*ApplicationsApi* | [**getApplicationLegacyProductKeysSettings**](docs/Api/ApplicationsApi.md#getapplicationlegacyproductkeyssettings) | **GET** /applications/{applicationUuid}/settings/keys | Returns the legacy product keys for this application.
*ApplicationsApi* | [**getApplicationMessages**](docs/Api/ApplicationsApi.md#getapplicationmessages) | **GET** /applications/{applicationUuid}/messages | Returns a list of messages associated with this application.
*ApplicationsApi* | [**getApplicationNotificationByUuid**](docs/Api/ApplicationsApi.md#getapplicationnotificationbyuuid) | **GET** /applications/{applicationUuid}/notifications/{notificationUuid} | Returns a single notification.
*ApplicationsApi* | [**getApplicationNotifications**](docs/Api/ApplicationsApi.md#getapplicationnotifications) | **GET** /applications/{applicationUuid}/notifications | Returns a list of notifications associated with this application by its UUID.
*ApplicationsApi* | [**getApplicationPermissions**](docs/Api/ApplicationsApi.md#getapplicationpermissions) | **GET** /applications/{applicationUuid}/permissions | Returns a list of permissions the user has for this application by its UUID.
*ApplicationsApi* | [**getApplicationRemoteAdministrationSettings**](docs/Api/ApplicationsApi.md#getapplicationremoteadministrationsettings) | **GET** /applications/{applicationUuid}/settings/ra | Returns the remote administration settings for this application.
*ApplicationsApi* | [**getApplicationSearchConfigurationSet**](docs/Api/ApplicationsApi.md#getapplicationsearchconfigurationset) | **GET** /applications/{applicationUuid}/search/config-sets/{configurationSetId} | Returns a search configuration set for an application
*ApplicationsApi* | [**getApplicationSearchConfigurationSets**](docs/Api/ApplicationsApi.md#getapplicationsearchconfigurationsets) | **GET** /applications/{applicationUuid}/search/config-sets | Returns a collection of search configuration sets for an application
*ApplicationsApi* | [**getApplicationSearchList**](docs/Api/ApplicationsApi.md#getapplicationsearchlist) | **GET** /applications/{applicationUuid}/search | Returns a traversal endpoint for search entities for the application.
*ApplicationsApi* | [**getApplicationSecuritySettings**](docs/Api/ApplicationsApi.md#getapplicationsecuritysettings) | **GET** /applications/{applicationUuid}/settings/security | Returns the security policy settings for this application.
*ApplicationsApi* | [**getApplicationSettings**](docs/Api/ApplicationsApi.md#getapplicationsettings) | **GET** /applications/{applicationUuid}/settings | Returns available settings for this application.
*ApplicationsApi* | [**getApplicationTags**](docs/Api/ApplicationsApi.md#getapplicationtags) | **GET** /applications/{applicationUuid}/tags | Returns a list of application tags associated with this application.
*ApplicationsApi* | [**getApplicationTasks**](docs/Api/ApplicationsApi.md#getapplicationtasks) | **GET** /applications/{applicationUuid}/tasks | Returns a list of tasks associated with this application by its UUID.
*ApplicationsApi* | [**getApplicationTeams**](docs/Api/ApplicationsApi.md#getapplicationteams) | **GET** /applications/{applicationUuid}/teams | Returns a list of teams associated with this application.
*ApplicationsApi* | [**getApplications**](docs/Api/ApplicationsApi.md#getapplications) | **GET** /applications | Return a list of applications the current user has access to.
*ApplicationsApi* | [**getApplicationsUsageData**](docs/Api/ApplicationsApi.md#getapplicationsusagedata) | **GET** /applications/{applicationUuid}/metrics/usage/data | Retrieves aggregate usage data for an application, filterable by views or visits and by environment.
*ApplicationsApi* | [**getApplicationsUsageDataByEnvironment**](docs/Api/ApplicationsApi.md#getapplicationsusagedatabyenvironment) | **GET** /applications/{applicationUuid}/metrics/usage/data-by-environment | Retrieves usage data (views or visits) for an application, broken down by environment.
*ApplicationsApi* | [**getApplicationsUsageLinks**](docs/Api/ApplicationsApi.md#getapplicationsusagelinks) | **GET** /applications/{applicationUuid}/metrics/usage | Retrieves traversal links for detailed metrics on usage (views and visits) of your application.
*ApplicationsApi* | [**getApplicationsUsageMetricData**](docs/Api/ApplicationsApi.md#getapplicationsusagemetricdata) | **GET** /applications/{applicationUuid}/metrics/usage/{usageMetric} | Retrieves aggregate usage metric data (views or visits) for an application..
*ApplicationsApi* | [**getApplicationsUsageViewsDataByEnvironment**](docs/Api/ApplicationsApi.md#getapplicationsusageviewsdatabyenvironment) | **GET** /applications/{applicationUuid}/metrics/usage/views-by-environment | Retrieves views data for an application, broken down by environment.
*ApplicationsApi* | [**getApplicationsUsageVisitsDataByEnvironment**](docs/Api/ApplicationsApi.md#getapplicationsusagevisitsdatabyenvironment) | **GET** /applications/{applicationUuid}/metrics/usage/visits-by-environment | Retrieves visits data for an application, broken down by environment.
*ApplicationsApi* | [**getArtifactByApplicationUuidAndId**](docs/Api/ApplicationsApi.md#getartifactbyapplicationuuidandid) | **GET** /applications/{applicationUuid}/artifacts/{artifactId} | Return details about a specific artifact.
*ApplicationsApi* | [**getArtifactsByApplicationUuid**](docs/Api/ApplicationsApi.md#getartifactsbyapplicationuuid) | **GET** /applications/{applicationUuid}/artifacts | Return application artifacts.
*ApplicationsApi* | [**getCodeByApplicationUuid**](docs/Api/ApplicationsApi.md#getcodebyapplicationuuid) | **GET** /applications/{applicationUuid}/code | Return application branches and release tags.
*ApplicationsApi* | [**postApplicationAssociateEmailDomain**](docs/Api/ApplicationsApi.md#postapplicationassociateemaildomain) | **POST** /applications/{applicationUuid}/email/domains/{domainRegistrationUuid}/actions/associate | Associates an email domain with an Application.
*ApplicationsApi* | [**postApplicationDatabaseCreate**](docs/Api/ApplicationsApi.md#postapplicationdatabasecreate) | **POST** /applications/{applicationUuid}/databases | Creates a database.
*ApplicationsApi* | [**postApplicationDatabaseDelete**](docs/Api/ApplicationsApi.md#postapplicationdatabasedelete) | **DELETE** /applications/{applicationUuid}/databases/{name} | Drops (deletes) a database.
*ApplicationsApi* | [**postApplicationDatabaseErase**](docs/Api/ApplicationsApi.md#postapplicationdatabaseerase) | **POST** /applications/{applicationUuid}/databases/{name}/actions/erase | Erases (truncates) a database.
*ApplicationsApi* | [**postApplicationDisassociateEmailDomain**](docs/Api/ApplicationsApi.md#postapplicationdisassociateemaildomain) | **POST** /applications/{applicationUuid}/email/domains/{domainRegistrationUuid}/actions/disassociate | Disassociates an email domain with an Application.
*ApplicationsApi* | [**postApplicationEnvironments**](docs/Api/ApplicationsApi.md#postapplicationenvironments) | **POST** /applications/{applicationUuid}/environments | Add a new continuous delivery environment to an application by the application UUID.
*ApplicationsApi* | [**postApplicationSearchConfigurationSets**](docs/Api/ApplicationsApi.md#postapplicationsearchconfigurationsets) | **POST** /applications/{applicationUuid}/search/config-sets | Creates a search configuration set for an application.
*ApplicationsApi* | [**postApplicationsIde**](docs/Api/ApplicationsApi.md#postapplicationside) | **POST** /applications/{applicationUuid}/ides | Creates a new Cloud IDE.
*ApplicationsApi* | [**postApplicationsTags**](docs/Api/ApplicationsApi.md#postapplicationstags) | **POST** /applications/{applicationUuid}/tags | Creates a new application tag.
*ApplicationsApi* | [**putApplicationByUuid**](docs/Api/ApplicationsApi.md#putapplicationbyuuid) | **PUT** /applications/{applicationUuid} | Renames an application.
*ApplicationsApi* | [**putApplicationRemoteAdministrationSettings**](docs/Api/ApplicationsApi.md#putapplicationremoteadministrationsettings) | **PUT** /applications/{applicationUuid}/settings/ra | Modifies the remote administration settings for an application.
*ApplicationsApi* | [**putApplicationSecuritySettings**](docs/Api/ApplicationsApi.md#putapplicationsecuritysettings) | **PUT** /applications/{applicationUuid}/settings/security | Modifies the security policy settings for an application.
*CloudIDEApi* | [**deleteIde**](docs/Api/CloudIDEApi.md#deleteide) | **DELETE** /ides/{ideUuid} | De-provisions a specific Cloud IDE.
*CloudIDEApi* | [**getIde**](docs/Api/CloudIDEApi.md#getide) | **GET** /ides/{ideUuid} | Returns Cloud IDE info.
*CurrentSystemHealthApi* | [**getSystemHealthStatus**](docs/Api/CurrentSystemHealthApi.md#getsystemhealthstatus) | **GET** / | Return the current system health status.
*DistributionsApi* | [**getDistributionByName**](docs/Api/DistributionsApi.md#getdistributionbyname) | **GET** /distributions/{name} | Return details about a specific Drupal distribution.
*DistributionsApi* | [**getDistributions**](docs/Api/DistributionsApi.md#getdistributions) | **GET** /distributions | Return a list of Drupal distributions.
*EmailApi* | [**getEmailStatus**](docs/Api/EmailApi.md#getemailstatus) | **GET** /environments/{environmentId}/email | Returns the status of Platform Email for an Environment.
*EnvironmentsApi* | [**deleteCdnByEnvironmentId**](docs/Api/EnvironmentsApi.md#deletecdnbyenvironmentid) | **DELETE** /environments/{environmentId}/cdn | Disables a CDN for an environment.
*EnvironmentsApi* | [**deleteCertificate**](docs/Api/EnvironmentsApi.md#deletecertificate) | **DELETE** /environments/{environmentId}/ssl/certificates/{certificateId} | Deletes a specific certificate by its ID.
*EnvironmentsApi* | [**deleteCertificateSigningRequest**](docs/Api/EnvironmentsApi.md#deletecertificatesigningrequest) | **DELETE** /environments/{environmentId}/ssl/csrs/{certificateId} | Deletes the certificate signing request.
*EnvironmentsApi* | [**deleteEnvironment**](docs/Api/EnvironmentsApi.md#deleteenvironment) | **DELETE** /environments/{environmentId} | Deletes a CD environment.
*EnvironmentsApi* | [**deleteEnvironmentSearchIndex**](docs/Api/EnvironmentsApi.md#deleteenvironmentsearchindex) | **DELETE** /environments/{environmentId}/search/indexes/{indexId} | Removes and deletes a specific search index from an environment
*EnvironmentsApi* | [**deleteEnvironmentsDatabaseBackup**](docs/Api/EnvironmentsApi.md#deleteenvironmentsdatabasebackup) | **DELETE** /environments/{environmentId}/databases/{databaseName}/backups/{backupId} | Deletes a database backup.
*EnvironmentsApi* | [**deleteEnvironmentsDomain**](docs/Api/EnvironmentsApi.md#deleteenvironmentsdomain) | **DELETE** /environments/{environmentId}/domains/{domain} | Removes the domain from this environment.
*EnvironmentsApi* | [**deleteEnvironmentsLogForwardingDestination**](docs/Api/EnvironmentsApi.md#deleteenvironmentslogforwardingdestination) | **DELETE** /environments/{environmentId}/log-forwarding-destinations/{logForwardingDestinationUuid} | Deletes the specified log forwarding destination.
*EnvironmentsApi* | [**deleteEnvironmentsVariable**](docs/Api/EnvironmentsApi.md#deleteenvironmentsvariable) | **DELETE** /environments/{environmentId}/variables/{environmentVariableName} | Removes an environment variable from an environment.
*EnvironmentsApi* | [**getAvailableRuntimes**](docs/Api/EnvironmentsApi.md#getavailableruntimes) | **GET** /environments/{environmentId}/available-runtimes | Return a list of runtimes.
*EnvironmentsApi* | [**getCdnByEnvironmentId**](docs/Api/EnvironmentsApi.md#getcdnbyenvironmentid) | **GET** /environments/{environmentId}/cdn | Returns the CDN status for an environment.
*EnvironmentsApi* | [**getCertificate**](docs/Api/EnvironmentsApi.md#getcertificate) | **GET** /environments/{environmentId}/ssl/certificates/{certificateId} | Returns a specific certificate by certificate id.
*EnvironmentsApi* | [**getCertificateSigningRequest**](docs/Api/EnvironmentsApi.md#getcertificatesigningrequest) | **GET** /environments/{environmentId}/ssl/csrs/{certificateId} | Returns the certificate signing request for the certificate specified by id.
*EnvironmentsApi* | [**getCertificateSigningRequests**](docs/Api/EnvironmentsApi.md#getcertificatesigningrequests) | **GET** /environments/{environmentId}/ssl/csrs | Returns certificate signing requests.
*EnvironmentsApi* | [**getCertificates**](docs/Api/EnvironmentsApi.md#getcertificates) | **GET** /environments/{environmentId}/ssl/certificates | Return a list of SSL certificates.
*EnvironmentsApi* | [**getCron**](docs/Api/EnvironmentsApi.md#getcron) | **GET** /environments/{environmentId}/crons/{cronId} | Return details about a specific cron job.
*EnvironmentsApi* | [**getCronJobsByEnvironmentId**](docs/Api/EnvironmentsApi.md#getcronjobsbyenvironmentid) | **GET** /environments/{environmentId}/crons | Return environment cron jobs.
*EnvironmentsApi* | [**getEIPs**](docs/Api/EnvironmentsApi.md#geteips) | **GET** /environments/{environmentId}/eips | Return a list of Web EIPs.
*EnvironmentsApi* | [**getEnvironment**](docs/Api/EnvironmentsApi.md#getenvironment) | **GET** /environments/{environmentId} | Return details about a specific environment.
*EnvironmentsApi* | [**getEnvironmentCloudActions**](docs/Api/EnvironmentsApi.md#getenvironmentcloudactions) | **GET** /environments/{environmentId}/cloud-actions | Returns a list of Cloud Actions.
*EnvironmentsApi* | [**getEnvironmentSearchIndex**](docs/Api/EnvironmentsApi.md#getenvironmentsearchindex) | **GET** /environments/{environmentId}/search/indexes/{indexId} | Returns a search configuration set for an application
*EnvironmentsApi* | [**getEnvironmentSearchIndexes**](docs/Api/EnvironmentsApi.md#getenvironmentsearchindexes) | **GET** /environments/{environmentId}/search/indexes | Returns a collection of search indexes for an environment.
*EnvironmentsApi* | [**getEnvironmentSearchList**](docs/Api/EnvironmentsApi.md#getenvironmentsearchlist) | **GET** /environments/{environmentId}/search | Returns a traversal endpoint for search entities for the environment.
*EnvironmentsApi* | [**getEnvironmentsDatabase**](docs/Api/EnvironmentsApi.md#getenvironmentsdatabase) | **GET** /environments/{environmentId}/databases/{databaseName} | Return details about a specific database.
*EnvironmentsApi* | [**getEnvironmentsDatabaseBackup**](docs/Api/EnvironmentsApi.md#getenvironmentsdatabasebackup) | **GET** /environments/{environmentId}/databases/{databaseName}/backups/{backupId} | Return details about a specific backup.
*EnvironmentsApi* | [**getEnvironmentsDatabaseBackups**](docs/Api/EnvironmentsApi.md#getenvironmentsdatabasebackups) | **GET** /environments/{environmentId}/databases/{databaseName}/backups | Returns a list of backups.
*EnvironmentsApi* | [**getEnvironmentsDatabaseDownloadBackup**](docs/Api/EnvironmentsApi.md#getenvironmentsdatabasedownloadbackup) | **GET** /environments/{environmentId}/databases/{databaseName}/backups/{backupId}/actions/download | Downloads the database backup file.
*EnvironmentsApi* | [**getEnvironmentsDatabasePhpConfig**](docs/Api/EnvironmentsApi.md#getenvironmentsdatabasephpconfig) | **GET** /environments/{environmentId}/databases/{databaseName}/php-config | Returns PHP configuration details for this database.
*EnvironmentsApi* | [**getEnvironmentsDatabases**](docs/Api/EnvironmentsApi.md#getenvironmentsdatabases) | **GET** /environments/{environmentId}/databases | Returns a list of databases.
*EnvironmentsApi* | [**getEnvironmentsDns**](docs/Api/EnvironmentsApi.md#getenvironmentsdns) | **GET** /environments/{environmentId}/dns | Returns DNS configuration details for an environment.
*EnvironmentsApi* | [**getEnvironmentsDomain**](docs/Api/EnvironmentsApi.md#getenvironmentsdomain) | **GET** /environments/{environmentId}/domains/{domain} | Return details about a specific domain.
*EnvironmentsApi* | [**getEnvironmentsDomainStatus**](docs/Api/EnvironmentsApi.md#getenvironmentsdomainstatus) | **GET** /environments/{environmentId}/domains/{domain}/status | Returns details about the domain.
*EnvironmentsApi* | [**getEnvironmentsDomains**](docs/Api/EnvironmentsApi.md#getenvironmentsdomains) | **GET** /environments/{environmentId}/domains | Returns a list of domains.
*EnvironmentsApi* | [**getEnvironmentsLog**](docs/Api/EnvironmentsApi.md#getenvironmentslog) | **GET** /environments/{environmentId}/logs/{logType} | Downloads the log file.
*EnvironmentsApi* | [**getEnvironmentsLogForwardingDestination**](docs/Api/EnvironmentsApi.md#getenvironmentslogforwardingdestination) | **GET** /environments/{environmentId}/log-forwarding-destinations/{logForwardingDestinationUuid} | Returns the specified log forwarding destination.
*EnvironmentsApi* | [**getEnvironmentsLogForwardingDestinations**](docs/Api/EnvironmentsApi.md#getenvironmentslogforwardingdestinations) | **GET** /environments/{environmentId}/log-forwarding-destinations | Returns a collection of log forwarding destinations for this environment.
*EnvironmentsApi* | [**getEnvironmentsLogs**](docs/Api/EnvironmentsApi.md#getenvironmentslogs) | **GET** /environments/{environmentId}/logs | Returns a list of log files for this environment available for download.
*EnvironmentsApi* | [**getEnvironmentsLogstream**](docs/Api/EnvironmentsApi.md#getenvironmentslogstream) | **GET** /environments/{environmentId}/logstream | Returns a logstream url and metadata.
*EnvironmentsApi* | [**getEnvironmentsMetrics**](docs/Api/EnvironmentsApi.md#getenvironmentsmetrics) | **GET** /environments/{environmentId}/metrics | Does not return any data. Allows traversal to metrics groups endpoints.
*EnvironmentsApi* | [**getEnvironmentsServer**](docs/Api/EnvironmentsApi.md#getenvironmentsserver) | **GET** /environments/{environmentId}/servers/{serverId} | Return details about a specific server.
*EnvironmentsApi* | [**getEnvironmentsServers**](docs/Api/EnvironmentsApi.md#getenvironmentsservers) | **GET** /environments/{environmentId}/servers | Returns a list of servers.
*EnvironmentsApi* | [**getEnvironmentsSettings**](docs/Api/EnvironmentsApi.md#getenvironmentssettings) | **GET** /environments/{environmentId}/settings | Provides links to environment settings.
*EnvironmentsApi* | [**getEnvironmentsStackMetrics**](docs/Api/EnvironmentsApi.md#getenvironmentsstackmetrics) | **GET** /environments/{environmentId}/metrics/stackmetrics | Does not return any data. Allows traversal to StackMetrics endpoints.
*EnvironmentsApi* | [**getEnvironmentsStackMetricsData**](docs/Api/EnvironmentsApi.md#getenvironmentsstackmetricsdata) | **GET** /environments/{environmentId}/metrics/stackmetrics/data | Returns StackMetrics data for the metrics specified in the filter paramater (e.g., apache-access, web-cpu).
*EnvironmentsApi* | [**getEnvironmentsUsageData**](docs/Api/EnvironmentsApi.md#getenvironmentsusagedata) | **GET** /environments/{environmentId}/metrics/usage/data | Retrieves usage data for an environment.
*EnvironmentsApi* | [**getEnvironmentsUsageLinks**](docs/Api/EnvironmentsApi.md#getenvironmentsusagelinks) | **GET** /environments/{environmentId}/metrics/usage | Retrieves traversal links for an environment&#39;s usage data.
*EnvironmentsApi* | [**getEnvironmentsUsageMetricData**](docs/Api/EnvironmentsApi.md#getenvironmentsusagemetricdata) | **GET** /environments/{environmentId}/metrics/usage/{usageMetric} | Retrieves usage metric data for an environment.
*EnvironmentsApi* | [**getEnvironmentsVariable**](docs/Api/EnvironmentsApi.md#getenvironmentsvariable) | **GET** /environments/{environmentId}/variables/{environmentVariableName} | Get an environment variable associated with this environment.
*EnvironmentsApi* | [**getEnvironmentsVariables**](docs/Api/EnvironmentsApi.md#getenvironmentsvariables) | **GET** /environments/{environmentId}/variables | Returns a list of environment variables associated with this environment.
*EnvironmentsApi* | [**getSsl**](docs/Api/EnvironmentsApi.md#getssl) | **GET** /environments/{environmentId}/ssl | Returns the SSL settings for this environment.
*EnvironmentsApi* | [**postActivateCertificate**](docs/Api/EnvironmentsApi.md#postactivatecertificate) | **POST** /environments/{environmentId}/ssl/certificates/{certificateId}/actions/activate | Activates an SSL certificate.
*EnvironmentsApi* | [**postCdnByEnvironmentId**](docs/Api/EnvironmentsApi.md#postcdnbyenvironmentid) | **POST** /environments/{environmentId}/cdn | Enables a CDN for an environment.
*EnvironmentsApi* | [**postCertificate**](docs/Api/EnvironmentsApi.md#postcertificate) | **POST** /environments/{environmentId}/ssl/certificates | Install an SSL certificate.
*EnvironmentsApi* | [**postCertificateSigningRequest**](docs/Api/EnvironmentsApi.md#postcertificatesigningrequest) | **POST** /environments/{environmentId}/ssl/csrs | Generates a certificate signing request (CSR) for one or more domains.
*EnvironmentsApi* | [**postChangeEnvironmentLabel**](docs/Api/EnvironmentsApi.md#postchangeenvironmentlabel) | **POST** /environments/{environmentId}/actions/change-label | Change the label for an environment.
*EnvironmentsApi* | [**postDeactivateCertificate**](docs/Api/EnvironmentsApi.md#postdeactivatecertificate) | **POST** /environments/{environmentId}/ssl/certificates/{certificateId}/actions/deactivate | Deactivates an active SSL certificate.
*EnvironmentsApi* | [**postDeployArtifact**](docs/Api/EnvironmentsApi.md#postdeployartifact) | **POST** /environments/{environmentId}/artifacts/actions/switch | Deploys an artifact to this environment.
*EnvironmentsApi* | [**postEnvironmentCloudActionsDisable**](docs/Api/EnvironmentsApi.md#postenvironmentcloudactionsdisable) | **POST** /environments/{environmentId}/cloud-actions/actions/disable | Disables Cloud Actions.
*EnvironmentsApi* | [**postEnvironmentCloudActionsEnable**](docs/Api/EnvironmentsApi.md#postenvironmentcloudactionsenable) | **POST** /environments/{environmentId}/cloud-actions/actions/enable | Enables Cloud Actions.
*EnvironmentsApi* | [**postEnvironmentCloudActionsReset**](docs/Api/EnvironmentsApi.md#postenvironmentcloudactionsreset) | **POST** /environments/{environmentId}/cloud-actions/actions/reset | Resets Cloud Actions.
*EnvironmentsApi* | [**postEnvironmentCronDelete**](docs/Api/EnvironmentsApi.md#postenvironmentcrondelete) | **DELETE** /environments/{environmentId}/crons/{cronId} | Deletes a cron job.
*EnvironmentsApi* | [**postEnvironmentCronDisable**](docs/Api/EnvironmentsApi.md#postenvironmentcrondisable) | **POST** /environments/{environmentId}/crons/{cronId}/actions/disable | Disables a cron job.
*EnvironmentsApi* | [**postEnvironmentCronEnable**](docs/Api/EnvironmentsApi.md#postenvironmentcronenable) | **POST** /environments/{environmentId}/crons/{cronId}/actions/enable | Enables a cron job.
*EnvironmentsApi* | [**postEnvironmentCrons**](docs/Api/EnvironmentsApi.md#postenvironmentcrons) | **POST** /environments/{environmentId}/crons | Creates a scheduled job with cron.
*EnvironmentsApi* | [**postEnvironmentEmailDisable**](docs/Api/EnvironmentsApi.md#postenvironmentemaildisable) | **POST** /environments/{environmentId}/email/actions/disable | Disables email for an environment.
*EnvironmentsApi* | [**postEnvironmentEmailEnable**](docs/Api/EnvironmentsApi.md#postenvironmentemailenable) | **POST** /environments/{environmentId}/email/actions/enable | Enables email for an environment.
*EnvironmentsApi* | [**postEnvironmentSearchIndexes**](docs/Api/EnvironmentsApi.md#postenvironmentsearchindexes) | **POST** /environments/{environmentId}/search/indexes | Creates a search index for an environment.
*EnvironmentsApi* | [**postEnvironmentsClearCaches**](docs/Api/EnvironmentsApi.md#postenvironmentsclearcaches) | **POST** /environments/{environmentId}/actions/clear-caches | Clears the caches for one or more domains attached to this environment.
*EnvironmentsApi* | [**postEnvironmentsDatabaseBackups**](docs/Api/EnvironmentsApi.md#postenvironmentsdatabasebackups) | **POST** /environments/{environmentId}/databases/{databaseName}/backups | Create a backup.
*EnvironmentsApi* | [**postEnvironmentsDatabaseRestoreBackup**](docs/Api/EnvironmentsApi.md#postenvironmentsdatabaserestorebackup) | **POST** /environments/{environmentId}/databases/{databaseName}/backups/{backupId}/actions/restore | Restores this backup to the appropriate environment&#39;s database.
*EnvironmentsApi* | [**postEnvironmentsDatabases**](docs/Api/EnvironmentsApi.md#postenvironmentsdatabases) | **POST** /environments/{environmentId}/databases | Copies a database to this environment.
*EnvironmentsApi* | [**postEnvironmentsDeployCode**](docs/Api/EnvironmentsApi.md#postenvironmentsdeploycode) | **POST** /environments/{environmentId}/code | Deploys code to this environment.
*EnvironmentsApi* | [**postEnvironmentsDisableLiveDev**](docs/Api/EnvironmentsApi.md#postenvironmentsdisablelivedev) | **POST** /environments/{environmentId}/livedev/actions/disable | Disable Live Development on this environment.
*EnvironmentsApi* | [**postEnvironmentsDisableLogForwardingDestination**](docs/Api/EnvironmentsApi.md#postenvironmentsdisablelogforwardingdestination) | **POST** /environments/{environmentId}/log-forwarding-destinations/{logForwardingDestinationUuid}/actions/disable | Disables the specified log forwarding destination.
*EnvironmentsApi* | [**postEnvironmentsDisableProductionMode**](docs/Api/EnvironmentsApi.md#postenvironmentsdisableproductionmode) | **POST** /environments/{environmentId}/production-mode/actions/disable | Disables production mode for an environment.
*EnvironmentsApi* | [**postEnvironmentsDomainClearCaches**](docs/Api/EnvironmentsApi.md#postenvironmentsdomainclearcaches) | **POST** /environments/{environmentId}/domains/{domain}/actions/clear-caches | Clears the caches for the specified domain.
*EnvironmentsApi* | [**postEnvironmentsDomainClearVarnish**](docs/Api/EnvironmentsApi.md#postenvironmentsdomainclearvarnish) | **POST** /environments/{environmentId}/domains/{domain}/actions/clear-varnish | Clears the Varnish cache for the specified domain.
*EnvironmentsApi* | [**postEnvironmentsDomains**](docs/Api/EnvironmentsApi.md#postenvironmentsdomains) | **POST** /environments/{environmentId}/domains | Adds a domain to the environment.
*EnvironmentsApi* | [**postEnvironmentsDomainsClearVarnish**](docs/Api/EnvironmentsApi.md#postenvironmentsdomainsclearvarnish) | **POST** /environments/{environmentId}/domains/actions/clear-varnish | Clears the Varnish cache for one or more domains attached to this environment.
*EnvironmentsApi* | [**postEnvironmentsEnableLiveDev**](docs/Api/EnvironmentsApi.md#postenvironmentsenablelivedev) | **POST** /environments/{environmentId}/livedev/actions/enable | Enable Live Development on this environment.
*EnvironmentsApi* | [**postEnvironmentsEnableLogForwardingDestination**](docs/Api/EnvironmentsApi.md#postenvironmentsenablelogforwardingdestination) | **POST** /environments/{environmentId}/log-forwarding-destinations/{logForwardingDestinationUuid}/actions/enable | Enables the specified log forwarding destination.
*EnvironmentsApi* | [**postEnvironmentsEnableProductionMode**](docs/Api/EnvironmentsApi.md#postenvironmentsenableproductionmode) | **POST** /environments/{environmentId}/production-mode/actions/enable | Enables production mode for an environment.
*EnvironmentsApi* | [**postEnvironmentsFiles**](docs/Api/EnvironmentsApi.md#postenvironmentsfiles) | **POST** /environments/{environmentId}/files | Copies files to this environment.
*EnvironmentsApi* | [**postEnvironmentsImportSite**](docs/Api/EnvironmentsApi.md#postenvironmentsimportsite) | **POST** /environments/{environmentId}/code/actions/import | Imports a site to this environment.
*EnvironmentsApi* | [**postEnvironmentsLog**](docs/Api/EnvironmentsApi.md#postenvironmentslog) | **POST** /environments/{environmentId}/logs/{logType} | Creates a log file snapshot.
*EnvironmentsApi* | [**postEnvironmentsLogForwardingDestinations**](docs/Api/EnvironmentsApi.md#postenvironmentslogforwardingdestinations) | **POST** /environments/{environmentId}/log-forwarding-destinations | Creates a log forwarding destination.
*EnvironmentsApi* | [**postEnvironmentsServerReboot**](docs/Api/EnvironmentsApi.md#postenvironmentsserverreboot) | **POST** /environments/{environmentId}/servers/{serverId}/actions/reboot | Reboots a server.
*EnvironmentsApi* | [**postEnvironmentsServerRelaunch**](docs/Api/EnvironmentsApi.md#postenvironmentsserverrelaunch) | **POST** /environments/{environmentId}/servers/{serverId}/actions/relaunch | Relaunches a server.
*EnvironmentsApi* | [**postEnvironmentsServerSuspend**](docs/Api/EnvironmentsApi.md#postenvironmentsserversuspend) | **POST** /environments/{environmentId}/servers/{serverId}/actions/suspend | Suspends a server.
*EnvironmentsApi* | [**postEnvironmentsServerUpgrade**](docs/Api/EnvironmentsApi.md#postenvironmentsserverupgrade) | **POST** /environments/{environmentId}/servers/{serverId}/actions/upgrade | Upgrades a server from \&quot;precise\&quot; to \&quot;xenial\&quot;.
*EnvironmentsApi* | [**postEnvironmentsSwitchCode**](docs/Api/EnvironmentsApi.md#postenvironmentsswitchcode) | **POST** /environments/{environmentId}/code/actions/switch | Switches code on this environment to a different branch or release tag.
*EnvironmentsApi* | [**postEnvironmentsVariables**](docs/Api/EnvironmentsApi.md#postenvironmentsvariables) | **POST** /environments/{environmentId}/variables | Adds a new environment variable to an environment.
*EnvironmentsApi* | [**postMigrateEnvironment**](docs/Api/EnvironmentsApi.md#postmigrateenvironment) | **POST** /environments/{environmentId}/actions/migrate | Create a Migrate Environment using the provided environment as its source.
*EnvironmentsApi* | [**postPromoteEnvironment**](docs/Api/EnvironmentsApi.md#postpromoteenvironment) | **POST** /environments/{environmentId}/actions/promote | Promote a Migrate Environment.
*EnvironmentsApi* | [**postRefreshEnvironment**](docs/Api/EnvironmentsApi.md#postrefreshenvironment) | **POST** /environments/{environmentId}/actions/refresh | Refreshes a Migrate Environment.
*EnvironmentsApi* | [**putCron**](docs/Api/EnvironmentsApi.md#putcron) | **PUT** /environments/{environmentId}/crons/{cronId} | Modify an existing scheduled job.
*EnvironmentsApi* | [**putEnvironment**](docs/Api/EnvironmentsApi.md#putenvironment) | **PUT** /environments/{environmentId} | Modifies configuration settings for an environment.
*EnvironmentsApi* | [**putEnvironmentCloudActions**](docs/Api/EnvironmentsApi.md#putenvironmentcloudactions) | **PUT** /environments/{environmentId}/cloud-actions | Modifies an existing list of Cloud Actions.
*EnvironmentsApi* | [**putEnvironmentSearchIndex**](docs/Api/EnvironmentsApi.md#putenvironmentsearchindex) | **PUT** /environments/{environmentId}/search/indexes/{indexId} | Updates a search index on an environment.
*EnvironmentsApi* | [**putEnvironmentsLogForwardingDestination**](docs/Api/EnvironmentsApi.md#putenvironmentslogforwardingdestination) | **PUT** /environments/{environmentId}/log-forwarding-destinations/{logForwardingDestinationUuid} | Updates an environment&#39;s log forwarding destination.
*EnvironmentsApi* | [**putEnvironmentsServer**](docs/Api/EnvironmentsApi.md#putenvironmentsserver) | **PUT** /environments/{environmentId}/servers/{serverId} | Modifies configuration settings for a server.
*EnvironmentsApi* | [**putEnvironmentsVariable**](docs/Api/EnvironmentsApi.md#putenvironmentsvariable) | **PUT** /environments/{environmentId}/variables/{environmentVariableName} | Updates an environment variable on an environment.
*IdentityProvidersApi* | [**deleteIdentityProvider**](docs/Api/IdentityProvidersApi.md#deleteidentityprovider) | **DELETE** /identity-providers/{identityProviderUuid} | Deletes a specific identity provider by its UUID.
*IdentityProvidersApi* | [**getIdentityProvider**](docs/Api/IdentityProvidersApi.md#getidentityprovider) | **GET** /identity-providers/{identityProviderUuid} | Returns a specific identity provider by UUID.
*IdentityProvidersApi* | [**getIdentityProviders**](docs/Api/IdentityProvidersApi.md#getidentityproviders) | **GET** /identity-providers | Returns a list of identity providers for a user.
*IdentityProvidersApi* | [**postDisableIdentityProvider**](docs/Api/IdentityProvidersApi.md#postdisableidentityprovider) | **POST** /identity-providers/{identityProviderUuid}/actions/disable | Disables an identity provider by its UUID.
*IdentityProvidersApi* | [**postEnableIdentityProvider**](docs/Api/IdentityProvidersApi.md#postenableidentityprovider) | **POST** /identity-providers/{identityProviderUuid}/actions/enable | Enables an identity provider by its UUID.
*IdentityProvidersApi* | [**putIdentityProvider**](docs/Api/IdentityProvidersApi.md#putidentityprovider) | **PUT** /identity-providers/{identityProviderUuid} | Modifies an identity provider by its UUID.
*InviteApi* | [**getInviteByToken**](docs/Api/InviteApi.md#getinvitebytoken) | **GET** /invites/{token} | Returns details about an invitation.
*InviteApi* | [**postInviteAcceptByToken**](docs/Api/InviteApi.md#postinviteacceptbytoken) | **POST** /invites/{token}/actions/accept | Accepts an invite.
*InviteApi* | [**postInviteCancel**](docs/Api/InviteApi.md#postinvitecancel) | **DELETE** /invites/{token} | Cancels an invitation.
*InviteApi* | [**postInviteDecline**](docs/Api/InviteApi.md#postinvitedecline) | **POST** /invites/{token}/actions/decline | Declines an invite.
*InviteApi* | [**postInviteResend**](docs/Api/InviteApi.md#postinviteresend) | **POST** /invites/{token}/actions/resend | Resend an invite.
*MessagesApi* | [**getMessageFollow**](docs/Api/MessagesApi.md#getmessagefollow) | **GET** /messages/{messageUuid}/actions/follow | Follows an in-product message link.
*MessagesApi* | [**postDismissMessage**](docs/Api/MessagesApi.md#postdismissmessage) | **POST** /messages/{messageUuid}/actions/dismiss | Dismisses a message.
*MigrateAcceleratorApi* | [**postMigrateEnvironment**](docs/Api/MigrateAcceleratorApi.md#postmigrateenvironment) | **POST** /environments/{environmentId}/actions/migrate | Create a Migrate Environment using the provided environment as its source.
*MigrateAcceleratorApi* | [**postPromoteEnvironment**](docs/Api/MigrateAcceleratorApi.md#postpromoteenvironment) | **POST** /environments/{environmentId}/actions/promote | Promote a Migrate Environment.
*MigrateAcceleratorApi* | [**postRefreshEnvironment**](docs/Api/MigrateAcceleratorApi.md#postrefreshenvironment) | **POST** /environments/{environmentId}/actions/refresh | Refreshes a Migrate Environment.
*NotificationsApi* | [**getNotificationByUuid**](docs/Api/NotificationsApi.md#getnotificationbyuuid) | **GET** /notifications/{notificationUuid} | Returns a single notification.
*OptionsApi* | [**getCdeSizes**](docs/Api/OptionsApi.md#getcdesizes) | **GET** /options/cde-sizes | Displays the various CD Environment size options.
*OptionsApi* | [**getColors**](docs/Api/OptionsApi.md#getcolors) | **GET** /options/colors | Displays the various color options.
*OptionsApi* | [**getLogForwarding**](docs/Api/OptionsApi.md#getlogforwarding) | **GET** /options/log-forwarding | Does not return any data. Allows traversal of options groups endpoints.
*OptionsApi* | [**getLogForwardingConsumers**](docs/Api/OptionsApi.md#getlogforwardingconsumers) | **GET** /options/log-forwarding/consumers | Displays available log forwarding consumers.
*OptionsApi* | [**getLogForwardingSources**](docs/Api/OptionsApi.md#getlogforwardingsources) | **GET** /options/log-forwarding/sources | Displays available log forwarding sources.
*OptionsApi* | [**getOptions**](docs/Api/OptionsApi.md#getoptions) | **GET** /options | Does not return any data. Allows traversal of options groups endpoints.
*OrganizationsApi* | [**deleteOrganization**](docs/Api/OrganizationsApi.md#deleteorganization) | **DELETE** /organizations/{organizationUuid} | Deletes a specific organization by its UUID.
*OrganizationsApi* | [**deleteOrganizationAdmin**](docs/Api/OrganizationsApi.md#deleteorganizationadmin) | **DELETE** /organizations/{organizationUuid}/admins/{userUuid} | Removes the user from the list of administrators for the organization.
*OrganizationsApi* | [**deleteOrganizationAvailableTags**](docs/Api/OrganizationsApi.md#deleteorganizationavailabletags) | **DELETE** /organizations/{organizationUuid}/available-tags | Deletes bulk tags from organization resources.
*OrganizationsApi* | [**getOrganizationAdmin**](docs/Api/OrganizationsApi.md#getorganizationadmin) | **GET** /organizations/{organizationUuid}/admins/{userUuid} | Returns the user profile of this organization administrator.
*OrganizationsApi* | [**getOrganizationAdminInvites**](docs/Api/OrganizationsApi.md#getorganizationadmininvites) | **GET** /organizations/{organizationUuid}/admin-invites | Gets a list of invitations of administrators for this organization.
*OrganizationsApi* | [**getOrganizationAdmins**](docs/Api/OrganizationsApi.md#getorganizationadmins) | **GET** /organizations/{organizationUuid}/admins | Returns a list of organization administrators.
*OrganizationsApi* | [**getOrganizationApplications**](docs/Api/OrganizationsApi.md#getorganizationapplications) | **GET** /organizations/{organizationUuid}/applications | Returns a list of applications that belong to the organization.
*OrganizationsApi* | [**getOrganizationAvailableTags**](docs/Api/OrganizationsApi.md#getorganizationavailabletags) | **GET** /organizations/{organizationUuid}/available-tags | Returns a list of all available application tags.
*OrganizationsApi* | [**getOrganizationByUuid**](docs/Api/OrganizationsApi.md#getorganizationbyuuid) | **GET** /organizations/{organizationUuid} | Return details about a specific organization.
*OrganizationsApi* | [**getOrganizationIdentityProvider**](docs/Api/OrganizationsApi.md#getorganizationidentityprovider) | **GET** /organizations/{organizationUuid}/identity-provider | Returns an identity provider for an organization.
*OrganizationsApi* | [**getOrganizationMember**](docs/Api/OrganizationsApi.md#getorganizationmember) | **GET** /organizations/{organizationUuid}/members/{userUuid} | Returns the user profile of this organization member.
*OrganizationsApi* | [**getOrganizationMemberApplications**](docs/Api/OrganizationsApi.md#getorganizationmemberapplications) | **GET** /organizations/{organizationUuid}/members/{userUuid}/applications | Returns a list of applications that an organization member has access to.
*OrganizationsApi* | [**getOrganizationMembers**](docs/Api/OrganizationsApi.md#getorganizationmembers) | **GET** /organizations/{organizationUuid}/members | Returns a list of all organization members.
*OrganizationsApi* | [**getOrganizationNotifications**](docs/Api/OrganizationsApi.md#getorganizationnotifications) | **GET** /organizations/{organizationUuid}/notifications | Returns a list of notifications associated with this organization by its UUID.
*OrganizationsApi* | [**getOrganizationRoles**](docs/Api/OrganizationsApi.md#getorganizationroles) | **GET** /organizations/{organizationUuid}/roles | Returns a list of all the canonical roles within the organization.
*OrganizationsApi* | [**getOrganizationSubscriptions**](docs/Api/OrganizationsApi.md#getorganizationsubscriptions) | **GET** /organizations/{organizationUuid}/subscriptions | Returns a list of subscriptions that belong to the organization.
*OrganizationsApi* | [**getOrganizationTeamInvites**](docs/Api/OrganizationsApi.md#getorganizationteaminvites) | **GET** /organizations/{organizationUuid}/team-invites | Gets a list of member invitations for all teams in this organization.
*OrganizationsApi* | [**getOrganizationTeams**](docs/Api/OrganizationsApi.md#getorganizationteams) | **GET** /organizations/{organizationUuid}/teams | Returns a list of teams associated with the organization.
*OrganizationsApi* | [**getOrganizations**](docs/Api/OrganizationsApi.md#getorganizations) | **GET** /organizations | Return a list of organizations.
*OrganizationsApi* | [**postChangeOrganizationOwner**](docs/Api/OrganizationsApi.md#postchangeorganizationowner) | **POST** /organizations/{organizationUuid}/actions/change-owner | Changes the organization owner.
*OrganizationsApi* | [**postLeaveOrganization**](docs/Api/OrganizationsApi.md#postleaveorganization) | **POST** /organizations/{organizationUuid}/actions/leave | Removes your account from an organization.
*OrganizationsApi* | [**postOrganizationAdminInvite**](docs/Api/OrganizationsApi.md#postorganizationadmininvite) | **POST** /organizations/{organizationUuid}/admin-invites | Invites a user to be an administrator in this organization.
*OrganizationsApi* | [**postOrganizationAvailableTags**](docs/Api/OrganizationsApi.md#postorganizationavailabletags) | **POST** /organizations/{organizationUuid}/available-tags | Adds bulk tags to organization resources.
*OrganizationsApi* | [**postOrganizationMemberDelete**](docs/Api/OrganizationsApi.md#postorganizationmemberdelete) | **DELETE** /organizations/{organizationUuid}/members/{userUuid} | Removes the member from the organization.
*OrganizationsApi* | [**postOrganizationRoles**](docs/Api/OrganizationsApi.md#postorganizationroles) | **POST** /organizations/{organizationUuid}/roles | Creates a role.
*OrganizationsApi* | [**postOrganizationTeams**](docs/Api/OrganizationsApi.md#postorganizationteams) | **POST** /organizations/{organizationUuid}/teams | Creates a team.
*OrganizationsApi* | [**postOrganizationsCreate**](docs/Api/OrganizationsApi.md#postorganizationscreate) | **POST** /organizations | Creates a new organization.
*OrganizationsApi* | [**putOrganization**](docs/Api/OrganizationsApi.md#putorganization) | **PUT** /organizations/{organizationUuid} | Renames an organization.
*SubscriptionsApi* | [**deleteShieldAcl**](docs/Api/SubscriptionsApi.md#deleteshieldacl) | **DELETE** /subscriptions/{subscriptionUuid}/shield-acl/{shieldAclUuid} | Deletes a Shield ACL rule.
*SubscriptionsApi* | [**deleteSubscriptionDomainRegistration**](docs/Api/SubscriptionsApi.md#deletesubscriptiondomainregistration) | **DELETE** /subscriptions/{subscriptionUuid}/domains/{domainRegistrationUuid} | Unregisters a Domain registered with this subscription.
*SubscriptionsApi* | [**getShieldAcl**](docs/Api/SubscriptionsApi.md#getshieldacl) | **GET** /subscriptions/{subscriptionUuid}/shield-acl | Provides a list of Shield ACL rules.
*SubscriptionsApi* | [**getShieldAclRuleByUuid**](docs/Api/SubscriptionsApi.md#getshieldaclrulebyuuid) | **GET** /subscriptions/{subscriptionUuid}/shield-acl/{shieldAclUuid} | Returns the specified Shield ACL rule.
*SubscriptionsApi* | [**getSubscription**](docs/Api/SubscriptionsApi.md#getsubscription) | **GET** /subscriptions/{subscriptionUuid} | Return details about a specific subscription.
*SubscriptionsApi* | [**getSubscriptionApplications**](docs/Api/SubscriptionsApi.md#getsubscriptionapplications) | **GET** /subscriptions/{subscriptionUuid}/applications | Provides a list of applications that are a part of the subscription.
*SubscriptionsApi* | [**getSubscriptionDomainRegistration**](docs/Api/SubscriptionsApi.md#getsubscriptiondomainregistration) | **GET** /subscriptions/{subscriptionUuid}/domains/{domainRegistrationUuid} | Returns a speicific Domain registered with this subscription.
*SubscriptionsApi* | [**getSubscriptionDomainRegistrations**](docs/Api/SubscriptionsApi.md#getsubscriptiondomainregistrations) | **GET** /subscriptions/{subscriptionUuid}/domains | Returns a list of Domains registered with this subscription.
*SubscriptionsApi* | [**getSubscriptionEntitlements**](docs/Api/SubscriptionsApi.md#getsubscriptionentitlements) | **GET** /subscriptions/{subscriptionUuid}/entitlements | Provides a list of entitlements that are a part of the subscription.
*SubscriptionsApi* | [**getSubscriptionIdes**](docs/Api/SubscriptionsApi.md#getsubscriptionides) | **GET** /subscriptions/{subscriptionUuid}/ides | Returns a list of Cloud IDEs associated with this subscription.
*SubscriptionsApi* | [**getSubscriptions**](docs/Api/SubscriptionsApi.md#getsubscriptions) | **GET** /subscriptions | Return a list of subscription.
*SubscriptionsApi* | [**getSubscriptionsUsageData**](docs/Api/SubscriptionsApi.md#getsubscriptionsusagedata) | **GET** /subscriptions/{subscriptionUuid}/metrics/usage/data | Retrieves aggregate usage data for a subscription.
*SubscriptionsApi* | [**getSubscriptionsUsageDataByApplication**](docs/Api/SubscriptionsApi.md#getsubscriptionsusagedatabyapplication) | **GET** /subscriptions/{subscriptionUuid}/metrics/usage/data-by-application | Retrieves usage data for a subscription, broken down by application.
*SubscriptionsApi* | [**getSubscriptionsUsageLinks**](docs/Api/SubscriptionsApi.md#getsubscriptionsusagelinks) | **GET** /subscriptions/{subscriptionUuid}/metrics/usage | Retrieves traversal links for a subscription&#39;s usage data.
*SubscriptionsApi* | [**getSubscriptionsUsageMetricData**](docs/Api/SubscriptionsApi.md#getsubscriptionsusagemetricdata) | **GET** /subscriptions/{subscriptionUuid}/metrics/usage/{usageMetric} | Retrieves aggregate usage metric data for a subscription.
*SubscriptionsApi* | [**getSubscriptionsUsageViewsDataByApplication**](docs/Api/SubscriptionsApi.md#getsubscriptionsusageviewsdatabyapplication) | **GET** /subscriptions/{subscriptionUuid}/metrics/usage/views-by-application | Retrieves views data for a subscription, broken down by application.
*SubscriptionsApi* | [**getSubscriptionsUsageVisitsDataByApplication**](docs/Api/SubscriptionsApi.md#getsubscriptionsusagevisitsdatabyapplication) | **GET** /subscriptions/{subscriptionUuid}/metrics/usage/visits-by-application | Retrieves visits data for a subscription, broken down by application.
*SubscriptionsApi* | [**postResetShieldAcl**](docs/Api/SubscriptionsApi.md#postresetshieldacl) | **POST** /subscriptions/{subscriptionUuid}/shield-acl/actions/reset | Resets Shield ACL rules to default settings.
*SubscriptionsApi* | [**postShieldAcl**](docs/Api/SubscriptionsApi.md#postshieldacl) | **POST** /subscriptions/{subscriptionUuid}/shield-acl | Creates a Shield ACL rule.
*SubscriptionsApi* | [**postSubscriptionDomainRegistration**](docs/Api/SubscriptionsApi.md#postsubscriptiondomainregistration) | **POST** /subscriptions/{subscriptionUuid}/domains | Registers a Domain with this subscription.
*SubscriptionsApi* | [**postSubscriptionVerifyDomainRegistration**](docs/Api/SubscriptionsApi.md#postsubscriptionverifydomainregistration) | **POST** /subscriptions/{subscriptionUuid}/domains/{domainRegistrationUuid}/actions/verify | Triggers re-verification and update to the domain verification status.
*SubscriptionsApi* | [**putShieldAcl**](docs/Api/SubscriptionsApi.md#putshieldacl) | **PUT** /subscriptions/{subscriptionUuid}/shield-acl/{shieldAclUuid} | Updates a Shield ACL rule.
*SubscriptionsApi* | [**putSubscription**](docs/Api/SubscriptionsApi.md#putsubscription) | **PUT** /subscriptions/{subscriptionUuid} | Modifies a subscription.
*TeamsAndPermissionsApi* | [**deleteRole**](docs/Api/TeamsAndPermissionsApi.md#deleterole) | **DELETE** /roles/{roleUuid} | Deletes a specific role by its UUID.
*TeamsAndPermissionsApi* | [**deleteTeam**](docs/Api/TeamsAndPermissionsApi.md#deleteteam) | **DELETE** /teams/{teamUuid} | Deletes a specific team by its UUID.
*TeamsAndPermissionsApi* | [**deleteTeamsRemoveApplication**](docs/Api/TeamsAndPermissionsApi.md#deleteteamsremoveapplication) | **DELETE** /teams/{teamUuid}/applications/{applicationUuid} | Removes the application from this team.
*TeamsAndPermissionsApi* | [**deleteTeamsRemoveMember**](docs/Api/TeamsAndPermissionsApi.md#deleteteamsremovemember) | **DELETE** /teams/{teamUuid}/members/{userUuid} | Remove a user from a team.
*TeamsAndPermissionsApi* | [**getPermissions**](docs/Api/TeamsAndPermissionsApi.md#getpermissions) | **GET** /permissions | Return a list of permissions.
*TeamsAndPermissionsApi* | [**getRole**](docs/Api/TeamsAndPermissionsApi.md#getrole) | **GET** /roles/{roleUuid} | Return details about a specific role.
*TeamsAndPermissionsApi* | [**getTeam**](docs/Api/TeamsAndPermissionsApi.md#getteam) | **GET** /teams/{teamUuid} | Return details about a specific team.
*TeamsAndPermissionsApi* | [**getTeamApplications**](docs/Api/TeamsAndPermissionsApi.md#getteamapplications) | **GET** /teams/{teamUuid}/applications | Returns a list of applications this team has access to.
*TeamsAndPermissionsApi* | [**getTeamInvites**](docs/Api/TeamsAndPermissionsApi.md#getteaminvites) | **GET** /teams/{teamUuid}/invites | Returns a list of invitations to this team.
*TeamsAndPermissionsApi* | [**getTeamMembers**](docs/Api/TeamsAndPermissionsApi.md#getteammembers) | **GET** /teams/{teamUuid}/members | Returns a list of team members.
*TeamsAndPermissionsApi* | [**getTeams**](docs/Api/TeamsAndPermissionsApi.md#getteams) | **GET** /teams | Return teams the current user has access to.
*TeamsAndPermissionsApi* | [**postLeaveTeam**](docs/Api/TeamsAndPermissionsApi.md#postleaveteam) | **POST** /teams/{teamUuid}/actions/leave | Removes the current user from a team.
*TeamsAndPermissionsApi* | [**postTeamAddApplication**](docs/Api/TeamsAndPermissionsApi.md#postteamaddapplication) | **POST** /teams/{teamUuid}/applications | Adds an application to this team.
*TeamsAndPermissionsApi* | [**postTeamsInviteUser**](docs/Api/TeamsAndPermissionsApi.md#postteamsinviteuser) | **POST** /teams/{teamUuid}/invites | Invites a user to join a team.
*TeamsAndPermissionsApi* | [**putRoleByUuid**](docs/Api/TeamsAndPermissionsApi.md#putrolebyuuid) | **PUT** /roles/{roleUuid} | Updates a role.
*TeamsAndPermissionsApi* | [**putTeamsMember**](docs/Api/TeamsAndPermissionsApi.md#putteamsmember) | **PUT** /teams/{teamUuid}/members/{userUuid} | Grant team roles to a member.
*TeamsAndPermissionsApi* | [**putTeamsName**](docs/Api/TeamsAndPermissionsApi.md#putteamsname) | **PUT** /teams/{teamUuid} | Change the name of a team.

## Models

- [AccountInvites](docs/Model/AccountInvites.md)
- [AccountInvitesEmbedded](docs/Model/AccountInvitesEmbedded.md)
- [Agreement](docs/Model/Agreement.md)
- [AgreementReference](docs/Model/AgreementReference.md)
- [Agreements](docs/Model/Agreements.md)
- [AgreementsEmbedded](docs/Model/AgreementsEmbedded.md)
- [Apm](docs/Model/Apm.md)
- [ApmEmbedded](docs/Model/ApmEmbedded.md)
- [ApmEmbeddedEnvironmentInner](docs/Model/ApmEmbeddedEnvironmentInner.md)
- [ApmFlags](docs/Model/ApmFlags.md)
- [ApmType](docs/Model/ApmType.md)
- [ApmTypeFlags](docs/Model/ApmTypeFlags.md)
- [ApmTypes](docs/Model/ApmTypes.md)
- [ApmTypesEmbedded](docs/Model/ApmTypesEmbedded.md)
- [Application](docs/Model/Application.md)
- [ApplicationDatabaseName](docs/Model/ApplicationDatabaseName.md)
- [ApplicationDatabases](docs/Model/ApplicationDatabases.md)
- [ApplicationDatabasesEmbedded](docs/Model/ApplicationDatabasesEmbedded.md)
- [ApplicationEmbedded](docs/Model/ApplicationEmbedded.md)
- [ApplicationFeature](docs/Model/ApplicationFeature.md)
- [ApplicationFeatures](docs/Model/ApplicationFeatures.md)
- [ApplicationFeaturesEmbedded](docs/Model/ApplicationFeaturesEmbedded.md)
- [ApplicationFlagsValue](docs/Model/ApplicationFlagsValue.md)
- [ApplicationHosting](docs/Model/ApplicationHosting.md)
- [ApplicationMetadata](docs/Model/ApplicationMetadata.md)
- [ApplicationStub](docs/Model/ApplicationStub.md)
- [ApplicationUsageMetric](docs/Model/ApplicationUsageMetric.md)
- [ApplicationUsageMetricMetadata](docs/Model/ApplicationUsageMetricMetadata.md)
- [ApplicationUsageMetrics](docs/Model/ApplicationUsageMetrics.md)
- [ApplicationUsageMetricsEmbedded](docs/Model/ApplicationUsageMetricsEmbedded.md)
- [Applications](docs/Model/Applications.md)
- [ApplicationsEmbedded](docs/Model/ApplicationsEmbedded.md)
- [ApplicationsNotifications](docs/Model/ApplicationsNotifications.md)
- [ApplicationsNotificationsEmbedded](docs/Model/ApplicationsNotificationsEmbedded.md)
- [ApplicationsPermissions](docs/Model/ApplicationsPermissions.md)
- [ApplicationsPermissionsEmbedded](docs/Model/ApplicationsPermissionsEmbedded.md)
- [ApplicationsPermissionsFlagsInner](docs/Model/ApplicationsPermissionsFlagsInner.md)
- [ApplicationsTasks](docs/Model/ApplicationsTasks.md)
- [ApplicationsTasksEmbedded](docs/Model/ApplicationsTasksEmbedded.md)
- [ApplicationsTeams](docs/Model/ApplicationsTeams.md)
- [ApplicationsTeamsEmbedded](docs/Model/ApplicationsTeamsEmbedded.md)
- [Artifact](docs/Model/Artifact.md)
- [ArtifactStub](docs/Model/ArtifactStub.md)
- [Artifacts](docs/Model/Artifacts.md)
- [ArtifactsEmbedded](docs/Model/ArtifactsEmbedded.md)
- [AvailableRuntimes](docs/Model/AvailableRuntimes.md)
- [Backup](docs/Model/Backup.md)
- [BackupEmbedded](docs/Model/BackupEmbedded.md)
- [BackupEmbeddedDatabase](docs/Model/BackupEmbeddedDatabase.md)
- [BackupEmbeddedEnvironment](docs/Model/BackupEmbeddedEnvironment.md)
- [BackupFlags](docs/Model/BackupFlags.md)
- [Backups](docs/Model/Backups.md)
- [BackupsEmbedded](docs/Model/BackupsEmbedded.md)
- [CdeSize](docs/Model/CdeSize.md)
- [CdeSizes](docs/Model/CdeSizes.md)
- [CdeSizesEmbedded](docs/Model/CdeSizesEmbedded.md)
- [Cdn](docs/Model/Cdn.md)
- [CdnInformation](docs/Model/CdnInformation.md)
- [Certificate](docs/Model/Certificate.md)
- [CertificateFlagsValue](docs/Model/CertificateFlagsValue.md)
- [CertificateSigningRequest](docs/Model/CertificateSigningRequest.md)
- [CertificateSigningRequestFlagsValue](docs/Model/CertificateSigningRequestFlagsValue.md)
- [Certificates](docs/Model/Certificates.md)
- [CertificatesEmbedded](docs/Model/CertificatesEmbedded.md)
- [CloudAction](docs/Model/CloudAction.md)
- [CloudActions](docs/Model/CloudActions.md)
- [CloudActionsEmbedded](docs/Model/CloudActionsEmbedded.md)
- [CloudActionsFlags](docs/Model/CloudActionsFlags.md)
- [Code](docs/Model/Code.md)
- [CodeEmbedded](docs/Model/CodeEmbedded.md)
- [CodeEmbeddedItemsInner](docs/Model/CodeEmbeddedItemsInner.md)
- [CodeFlagsValue](docs/Model/CodeFlagsValue.md)
- [Color](docs/Model/Color.md)
- [Colors](docs/Model/Colors.md)
- [ColorsEmbedded](docs/Model/ColorsEmbedded.md)
- [ConfigurationSet](docs/Model/ConfigurationSet.md)
- [ConfigurationSetFlags](docs/Model/ConfigurationSetFlags.md)
- [ConfigurationSets](docs/Model/ConfigurationSets.md)
- [ConfigurationSetsEmbedded](docs/Model/ConfigurationSetsEmbedded.md)
- [Cron](docs/Model/Cron.md)
- [CronFlagsValue](docs/Model/CronFlagsValue.md)
- [Crons](docs/Model/Crons.md)
- [CronsEmbedded](docs/Model/CronsEmbedded.md)
- [Database](docs/Model/Database.md)
- [DatabaseFlags](docs/Model/DatabaseFlags.md)
- [DatabasePhpConfig](docs/Model/DatabasePhpConfig.md)
- [DatabaseStub](docs/Model/DatabaseStub.md)
- [Databases](docs/Model/Databases.md)
- [DatabasesEmbedded](docs/Model/DatabasesEmbedded.md)
- [DeleteOrganizationAvailableTagsRequest](docs/Model/DeleteOrganizationAvailableTagsRequest.md)
- [DeleteOrganizationAvailableTagsRequestTagsInner](docs/Model/DeleteOrganizationAvailableTagsRequestTagsInner.md)
- [DeployCodeRequest](docs/Model/DeployCodeRequest.md)
- [Distribution](docs/Model/Distribution.md)
- [DistributionFlags](docs/Model/DistributionFlags.md)
- [DistributionImageUrl](docs/Model/DistributionImageUrl.md)
- [DistributionUpdateUrls](docs/Model/DistributionUpdateUrls.md)
- [DistributionUpdateUrlsGz](docs/Model/DistributionUpdateUrlsGz.md)
- [DistributionUpdateUrlsZip](docs/Model/DistributionUpdateUrlsZip.md)
- [DistributionUrls](docs/Model/DistributionUrls.md)
- [DistributionUrlsGz](docs/Model/DistributionUrlsGz.md)
- [DistributionUrlsZip](docs/Model/DistributionUrlsZip.md)
- [Distributions](docs/Model/Distributions.md)
- [DistributionsEmbedded](docs/Model/DistributionsEmbedded.md)
- [Dns](docs/Model/Dns.md)
- [DnsGlobalConfiguration](docs/Model/DnsGlobalConfiguration.md)
- [DnsRecord](docs/Model/DnsRecord.md)
- [DnsRegionalConfiguration](docs/Model/DnsRegionalConfiguration.md)
- [Domain](docs/Model/Domain.md)
- [DomainFlags](docs/Model/DomainFlags.md)
- [DomainRegistration](docs/Model/DomainRegistration.md)
- [DomainRegistrationDnsRecord](docs/Model/DomainRegistrationDnsRecord.md)
- [DomainRegistrationDnsRecords](docs/Model/DomainRegistrationDnsRecords.md)
- [DomainRegistrationDnsRecordsEmbedded](docs/Model/DomainRegistrationDnsRecordsEmbedded.md)
- [DomainRegistrations](docs/Model/DomainRegistrations.md)
- [DomainRegistrationsEmbedded](docs/Model/DomainRegistrationsEmbedded.md)
- [DomainStatus](docs/Model/DomainStatus.md)
- [DomainStatusFlags](docs/Model/DomainStatusFlags.md)
- [Domains](docs/Model/Domains.md)
- [DomainsEmbedded](docs/Model/DomainsEmbedded.md)
- [EIP](docs/Model/EIP.md)
- [EIPFlags](docs/Model/EIPFlags.md)
- [EIPs](docs/Model/EIPs.md)
- [EIPsEmbedded](docs/Model/EIPsEmbedded.md)
- [Email](docs/Model/Email.md)
- [EmailDomain](docs/Model/EmailDomain.md)
- [EmailDomainFlags](docs/Model/EmailDomainFlags.md)
- [EmailDomains](docs/Model/EmailDomains.md)
- [EmailDomainsEmbedded](docs/Model/EmailDomainsEmbedded.md)
- [EntitlementCde](docs/Model/EntitlementCde.md)
- [EntitlementCdeProperties](docs/Model/EntitlementCdeProperties.md)
- [EntitlementConsumptionBasedPricing](docs/Model/EntitlementConsumptionBasedPricing.md)
- [EntitlementConsumptionBasedPricingProperties](docs/Model/EntitlementConsumptionBasedPricingProperties.md)
- [EntitlementDefaultNewRelic](docs/Model/EntitlementDefaultNewRelic.md)
- [EntitlementDefaultNewRelicProperties](docs/Model/EntitlementDefaultNewRelicProperties.md)
- [EntitlementLogForwarding](docs/Model/EntitlementLogForwarding.md)
- [EntitlementMigrate](docs/Model/EntitlementMigrate.md)
- [EntitlementPipelines](docs/Model/EntitlementPipelines.md)
- [EntitlementShield](docs/Model/EntitlementShield.md)
- [Entitlements](docs/Model/Entitlements.md)
- [EntitlementsEmbedded](docs/Model/EntitlementsEmbedded.md)
- [EntitlementsEmbeddedItemsInner](docs/Model/EntitlementsEmbeddedItemsInner.md)
- [Environment](docs/Model/Environment.md)
- [EnvironmentConfiguration](docs/Model/EnvironmentConfiguration.md)
- [EnvironmentConfigurations](docs/Model/EnvironmentConfigurations.md)
- [EnvironmentFlagsValue](docs/Model/EnvironmentFlagsValue.md)
- [EnvironmentMetadata](docs/Model/EnvironmentMetadata.md)
- [EnvironmentSettings](docs/Model/EnvironmentSettings.md)
- [EnvironmentStub](docs/Model/EnvironmentStub.md)
- [EnvironmentUsageMetric](docs/Model/EnvironmentUsageMetric.md)
- [EnvironmentUsageMetrics](docs/Model/EnvironmentUsageMetrics.md)
- [EnvironmentUsageMetricsEmbedded](docs/Model/EnvironmentUsageMetricsEmbedded.md)
- [EnvironmentVariable](docs/Model/EnvironmentVariable.md)
- [EnvironmentVariables](docs/Model/EnvironmentVariables.md)
- [EnvironmentVariablesEmbedded](docs/Model/EnvironmentVariablesEmbedded.md)
- [Environments](docs/Model/Environments.md)
- [EnvironmentsEmbedded](docs/Model/EnvironmentsEmbedded.md)
- [Error](docs/Model/Error.md)
- [FileDownload](docs/Model/FileDownload.md)
- [GetOptions200Response](docs/Model/GetOptions200Response.md)
- [HasPermission](docs/Model/HasPermission.md)
- [Health](docs/Model/Health.md)
- [HostingSettings](docs/Model/HostingSettings.md)
- [Ide](docs/Model/Ide.md)
- [IdeEmbedded](docs/Model/IdeEmbedded.md)
- [IdentityProvider](docs/Model/IdentityProvider.md)
- [IdentityProviders](docs/Model/IdentityProviders.md)
- [IdentityProvidersEmbedded](docs/Model/IdentityProvidersEmbedded.md)
- [Ides](docs/Model/Ides.md)
- [IdesEmbedded](docs/Model/IdesEmbedded.md)
- [ImportSiteRequest](docs/Model/ImportSiteRequest.md)
- [Index](docs/Model/Index.md)
- [IndexEmbedded](docs/Model/IndexEmbedded.md)
- [Indexes](docs/Model/Indexes.md)
- [IndexesEmbedded](docs/Model/IndexesEmbedded.md)
- [Invite](docs/Model/Invite.md)
- [InviteFlags](docs/Model/InviteFlags.md)
- [Invitees](docs/Model/Invitees.md)
- [InviteesEmbedded](docs/Model/InviteesEmbedded.md)
- [IsAdministrator](docs/Model/IsAdministrator.md)
- [IsOwner](docs/Model/IsOwner.md)
- [LegacyProductKeysSettings](docs/Model/LegacyProductKeysSettings.md)
- [LegacyProductKeysSettingsAcquiaConnector](docs/Model/LegacyProductKeysSettingsAcquiaConnector.md)
- [LegacyProductKeysSettingsCloudApi](docs/Model/LegacyProductKeysSettingsCloudApi.md)
- [Links](docs/Model/Links.md)
- [LinksSelf](docs/Model/LinksSelf.md)
- [Log](docs/Model/Log.md)
- [LogFlags](docs/Model/LogFlags.md)
- [LogForwardingConsumer](docs/Model/LogForwardingConsumer.md)
- [LogForwardingConsumers](docs/Model/LogForwardingConsumers.md)
- [LogForwardingConsumersEmbedded](docs/Model/LogForwardingConsumersEmbedded.md)
- [LogForwardingDestination](docs/Model/LogForwardingDestination.md)
- [LogForwardingDestinationCredentials](docs/Model/LogForwardingDestinationCredentials.md)
- [LogForwardingDestinationFlags](docs/Model/LogForwardingDestinationFlags.md)
- [LogForwardingDestinations](docs/Model/LogForwardingDestinations.md)
- [LogForwardingDestinationsEmbedded](docs/Model/LogForwardingDestinationsEmbedded.md)
- [LogForwardingSource](docs/Model/LogForwardingSource.md)
- [LogForwardingSources](docs/Model/LogForwardingSources.md)
- [LogForwardingSourcesEmbedded](docs/Model/LogForwardingSourcesEmbedded.md)
- [Logs](docs/Model/Logs.md)
- [LogsEmbedded](docs/Model/LogsEmbedded.md)
- [Logstream](docs/Model/Logstream.md)
- [LogstreamLogstream](docs/Model/LogstreamLogstream.md)
- [Message](docs/Model/Message.md)
- [MessageWithLinks](docs/Model/MessageWithLinks.md)
- [Metrics](docs/Model/Metrics.md)
- [Notification](docs/Model/Notification.md)
- [NotificationMetadata](docs/Model/NotificationMetadata.md)
- [NotificationTasks](docs/Model/NotificationTasks.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationAdminInvite](docs/Model/OrganizationAdminInvite.md)
- [OrganizationAdminInvites](docs/Model/OrganizationAdminInvites.md)
- [OrganizationAdminInvitesEmbedded](docs/Model/OrganizationAdminInvitesEmbedded.md)
- [OrganizationAdminUserProfile](docs/Model/OrganizationAdminUserProfile.md)
- [OrganizationAdminUserProfileFlags](docs/Model/OrganizationAdminUserProfileFlags.md)
- [OrganizationAdminUserProfiles](docs/Model/OrganizationAdminUserProfiles.md)
- [OrganizationAdminUserProfilesEmbedded](docs/Model/OrganizationAdminUserProfilesEmbedded.md)
- [OrganizationApplications](docs/Model/OrganizationApplications.md)
- [OrganizationAvailableTags](docs/Model/OrganizationAvailableTags.md)
- [OrganizationAvailableTagsEmbedded](docs/Model/OrganizationAvailableTagsEmbedded.md)
- [OrganizationEmbedded](docs/Model/OrganizationEmbedded.md)
- [OrganizationFlags](docs/Model/OrganizationFlags.md)
- [OrganizationMembers](docs/Model/OrganizationMembers.md)
- [OrganizationMembersEmbedded](docs/Model/OrganizationMembersEmbedded.md)
- [OrganizationStub](docs/Model/OrganizationStub.md)
- [OrganizationStubEmbedded](docs/Model/OrganizationStubEmbedded.md)
- [OrganizationTeamInvite](docs/Model/OrganizationTeamInvite.md)
- [OrganizationTeamInvites](docs/Model/OrganizationTeamInvites.md)
- [OrganizationTeamInvitesEmbedded](docs/Model/OrganizationTeamInvitesEmbedded.md)
- [OrganizationTeamStub](docs/Model/OrganizationTeamStub.md)
- [OrganizationUserProfile](docs/Model/OrganizationUserProfile.md)
- [Organizations](docs/Model/Organizations.md)
- [OrganizationsEmbedded](docs/Model/OrganizationsEmbedded.md)
- [OrganizationsNotifications](docs/Model/OrganizationsNotifications.md)
- [Pagination](docs/Model/Pagination.md)
- [PasswordRequest](docs/Model/PasswordRequest.md)
- [PasswordValidation](docs/Model/PasswordValidation.md)
- [Permission](docs/Model/Permission.md)
- [PermissionFlags](docs/Model/PermissionFlags.md)
- [Permissions](docs/Model/Permissions.md)
- [PermissionsEmbedded](docs/Model/PermissionsEmbedded.md)
- [PostApplicationDatabaseCreateRequest](docs/Model/PostApplicationDatabaseCreateRequest.md)
- [PostApplicationEnvironmentsRequest](docs/Model/PostApplicationEnvironmentsRequest.md)
- [PostApplicationsIdeRequest](docs/Model/PostApplicationsIdeRequest.md)
- [PostApplicationsTagsRequest](docs/Model/PostApplicationsTagsRequest.md)
- [PostCertificate](docs/Model/PostCertificate.md)
- [PostChangeEnvironmentLabelRequest](docs/Model/PostChangeEnvironmentLabelRequest.md)
- [PostChangeOrganizationOwnerRequest](docs/Model/PostChangeOrganizationOwnerRequest.md)
- [PostCron](docs/Model/PostCron.md)
- [PostCsr](docs/Model/PostCsr.md)
- [PostDeployArtifactRequest](docs/Model/PostDeployArtifactRequest.md)
- [PostEnvironmentSearchIndexesRequest](docs/Model/PostEnvironmentSearchIndexesRequest.md)
- [PostEnvironmentsClearCachesRequest](docs/Model/PostEnvironmentsClearCachesRequest.md)
- [PostEnvironmentsDatabasesRequest](docs/Model/PostEnvironmentsDatabasesRequest.md)
- [PostEnvironmentsDisableLiveDevRequest](docs/Model/PostEnvironmentsDisableLiveDevRequest.md)
- [PostEnvironmentsDomainsClearVarnishRequest](docs/Model/PostEnvironmentsDomainsClearVarnishRequest.md)
- [PostEnvironmentsDomainsRequest](docs/Model/PostEnvironmentsDomainsRequest.md)
- [PostEnvironmentsFilesRequest](docs/Model/PostEnvironmentsFilesRequest.md)
- [PostEnvironmentsLogForwardingDestinationsRequest](docs/Model/PostEnvironmentsLogForwardingDestinationsRequest.md)
- [PostEnvironmentsLogForwardingDestinationsRequestCredentials](docs/Model/PostEnvironmentsLogForwardingDestinationsRequestCredentials.md)
- [PostEnvironmentsLogRequest](docs/Model/PostEnvironmentsLogRequest.md)
- [PostEnvironmentsVariablesRequest](docs/Model/PostEnvironmentsVariablesRequest.md)
- [PostInvite](docs/Model/PostInvite.md)
- [PostMigrateEnvironmentRequest](docs/Model/PostMigrateEnvironmentRequest.md)
- [PostOrganizationAdminInviteRequest](docs/Model/PostOrganizationAdminInviteRequest.md)
- [PostOrganizationAvailableTagsRequest](docs/Model/PostOrganizationAvailableTagsRequest.md)
- [PostOrganizationAvailableTagsRequestContext](docs/Model/PostOrganizationAvailableTagsRequestContext.md)
- [PostOrganizationAvailableTagsRequestContextApplication](docs/Model/PostOrganizationAvailableTagsRequestContextApplication.md)
- [PostOrganizationAvailableTagsRequestTagsInner](docs/Model/PostOrganizationAvailableTagsRequestTagsInner.md)
- [PostOrganizationRolesRequest](docs/Model/PostOrganizationRolesRequest.md)
- [PostOrganizationTeamsRequest](docs/Model/PostOrganizationTeamsRequest.md)
- [PostOrganizationsCreateRequest](docs/Model/PostOrganizationsCreateRequest.md)
- [PostPromoteEnvironmentRequest](docs/Model/PostPromoteEnvironmentRequest.md)
- [PostSubscriptionDomainRegistrationRequest](docs/Model/PostSubscriptionDomainRegistrationRequest.md)
- [PostTeamAddApplicationRequest](docs/Model/PostTeamAddApplicationRequest.md)
- [PutApplicationByUuidRequest](docs/Model/PutApplicationByUuidRequest.md)
- [PutApplicationSecuritySettingsRequest](docs/Model/PutApplicationSecuritySettingsRequest.md)
- [PutCloudActions](docs/Model/PutCloudActions.md)
- [PutCron](docs/Model/PutCron.md)
- [PutEnvironmentSearchIndexRequest](docs/Model/PutEnvironmentSearchIndexRequest.md)
- [PutEnvironmentsApmSettingRequest](docs/Model/PutEnvironmentsApmSettingRequest.md)
- [PutEnvironmentsLogForwardingDestinationRequest](docs/Model/PutEnvironmentsLogForwardingDestinationRequest.md)
- [PutEnvironmentsServerRequest](docs/Model/PutEnvironmentsServerRequest.md)
- [PutEnvironmentsVariableRequest](docs/Model/PutEnvironmentsVariableRequest.md)
- [PutIdentityProviderRequest](docs/Model/PutIdentityProviderRequest.md)
- [PutOrganizationRequest](docs/Model/PutOrganizationRequest.md)
- [PutRoleByUuidRequest](docs/Model/PutRoleByUuidRequest.md)
- [PutTeamsMemberRequest](docs/Model/PutTeamsMemberRequest.md)
- [PutTeamsNameRequest](docs/Model/PutTeamsNameRequest.md)
- [RemoteAdministration](docs/Model/RemoteAdministration.md)
- [RemoteAdministrationSettings](docs/Model/RemoteAdministrationSettings.md)
- [RemoteAdministrationSettingsFlags](docs/Model/RemoteAdministrationSettingsFlags.md)
- [ResourceTag](docs/Model/ResourceTag.md)
- [ResourceTagContext](docs/Model/ResourceTagContext.md)
- [ResourceTagContextApplication](docs/Model/ResourceTagContextApplication.md)
- [ResourceTagContextOrganization](docs/Model/ResourceTagContextOrganization.md)
- [ResourceTagEmbedded](docs/Model/ResourceTagEmbedded.md)
- [ResourceTags](docs/Model/ResourceTags.md)
- [ResourceTagsEmbedded](docs/Model/ResourceTagsEmbedded.md)
- [Role](docs/Model/Role.md)
- [RoleFlags](docs/Model/RoleFlags.md)
- [RoleLastEdited](docs/Model/RoleLastEdited.md)
- [RoleStub](docs/Model/RoleStub.md)
- [Roles](docs/Model/Roles.md)
- [RolesEmbedded](docs/Model/RolesEmbedded.md)
- [Root](docs/Model/Root.md)
- [RootStatus](docs/Model/RootStatus.md)
- [Search](docs/Model/Search.md)
- [SecuritySettings](docs/Model/SecuritySettings.md)
- [Server](docs/Model/Server.md)
- [ServerConfiguration](docs/Model/ServerConfiguration.md)
- [ServerFlags](docs/Model/ServerFlags.md)
- [ServerStub](docs/Model/ServerStub.md)
- [Servers](docs/Model/Servers.md)
- [ServersEmbedded](docs/Model/ServersEmbedded.md)
- [Settings](docs/Model/Settings.md)
- [ShieldAcl](docs/Model/ShieldAcl.md)
- [ShieldAclCollection](docs/Model/ShieldAclCollection.md)
- [ShieldAclCollectionEmbedded](docs/Model/ShieldAclCollectionEmbedded.md)
- [SshKey](docs/Model/SshKey.md)
- [SshKeyRequest](docs/Model/SshKeyRequest.md)
- [SshKeys](docs/Model/SshKeys.md)
- [SshKeysEmbedded](docs/Model/SshKeysEmbedded.md)
- [Ssl](docs/Model/Ssl.md)
- [StackMetricsData](docs/Model/StackMetricsData.md)
- [StackMetricsDataEmbedded](docs/Model/StackMetricsDataEmbedded.md)
- [StackMetricsMetric](docs/Model/StackMetricsMetric.md)
- [StackMetricsMetricMetadata](docs/Model/StackMetricsMetricMetadata.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionEmbedded](docs/Model/SubscriptionEmbedded.md)
- [SubscriptionFlagsValue](docs/Model/SubscriptionFlagsValue.md)
- [SubscriptionMetadata](docs/Model/SubscriptionMetadata.md)
- [SubscriptionOrganization](docs/Model/SubscriptionOrganization.md)
- [SubscriptionProduct](docs/Model/SubscriptionProduct.md)
- [SubscriptionStub](docs/Model/SubscriptionStub.md)
- [SubscriptionStubEmbedded](docs/Model/SubscriptionStubEmbedded.md)
- [SubscriptionUsageMetric](docs/Model/SubscriptionUsageMetric.md)
- [SubscriptionUsageMetrics](docs/Model/SubscriptionUsageMetrics.md)
- [SubscriptionUsageMetricsEmbedded](docs/Model/SubscriptionUsageMetricsEmbedded.md)
- [Subscriptions](docs/Model/Subscriptions.md)
- [SubscriptionsEmbedded](docs/Model/SubscriptionsEmbedded.md)
- [SwitchCodeRequest](docs/Model/SwitchCodeRequest.md)
- [Task](docs/Model/Task.md)
- [TaskMetadataInner](docs/Model/TaskMetadataInner.md)
- [Team](docs/Model/Team.md)
- [TeamInvites](docs/Model/TeamInvites.md)
- [TeamMembers](docs/Model/TeamMembers.md)
- [TeamMembersEmbedded](docs/Model/TeamMembersEmbedded.md)
- [TeamStub](docs/Model/TeamStub.md)
- [TeamUserProfile](docs/Model/TeamUserProfile.md)
- [Teams](docs/Model/Teams.md)
- [Token](docs/Model/Token.md)
- [TokenCreation](docs/Model/TokenCreation.md)
- [TokenFlags](docs/Model/TokenFlags.md)
- [TokenRequest](docs/Model/TokenRequest.md)
- [Tokens](docs/Model/Tokens.md)
- [TokensEmbedded](docs/Model/TokensEmbedded.md)
- [Usage](docs/Model/Usage.md)
- [User](docs/Model/User.md)
- [UserFlagsValue](docs/Model/UserFlagsValue.md)
- [UserMetadata](docs/Model/UserMetadata.md)
- [UserMetadataApplications](docs/Model/UserMetadataApplications.md)
- [UserMetadataApplicationsRecentInner](docs/Model/UserMetadataApplicationsRecentInner.md)
- [UserPhone](docs/Model/UserPhone.md)
- [UserProfile](docs/Model/UserProfile.md)
- [UserStub](docs/Model/UserStub.md)
- [UserStubEmbedded](docs/Model/UserStubEmbedded.md)
- [UxMessage](docs/Model/UxMessage.md)
- [UxMessageFilters](docs/Model/UxMessageFilters.md)
- [UxMessageFlags](docs/Model/UxMessageFlags.md)
- [UxMessages](docs/Model/UxMessages.md)
- [UxMessagesEmbedded](docs/Model/UxMessagesEmbedded.md)
- [ValidationError](docs/Model/ValidationError.md)
- [Vcs](docs/Model/Vcs.md)

## Authorization

Authentication schemes defined for the API:
### OAuth2

- **Type**: `OAuth`
- **Flow**: `application`
- **Authorization URL**: `https://accounts.acquia.com/api/authorize`
- **Scopes**: N/A

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`

To regenerate the SDK:
```shell
openapi-generator generate -i https://raw.githubusercontent.com/acquia/cli/main/assets/acquia-spec.yaml -g php -o . --package-name "CloudApiSdkPhp" --invoker-package "Acquia\CloudApi"
```
