# Acquia\CloudApi\EnvironmentsApi

All URIs are relative to https://cloud.acquia.com/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteCdnByEnvironmentId()**](EnvironmentsApi.md#deleteCdnByEnvironmentId) | **DELETE** /environments/{environmentId}/cdn | Disables a CDN for an environment. |
| [**deleteCertificate()**](EnvironmentsApi.md#deleteCertificate) | **DELETE** /environments/{environmentId}/ssl/certificates/{certificateId} | Deletes a specific certificate by its ID. |
| [**deleteCertificateSigningRequest()**](EnvironmentsApi.md#deleteCertificateSigningRequest) | **DELETE** /environments/{environmentId}/ssl/csrs/{certificateId} | Deletes the certificate signing request. |
| [**deleteEnvironment()**](EnvironmentsApi.md#deleteEnvironment) | **DELETE** /environments/{environmentId} | Deletes a CD environment. |
| [**deleteEnvironmentSearchIndex()**](EnvironmentsApi.md#deleteEnvironmentSearchIndex) | **DELETE** /environments/{environmentId}/search/indexes/{indexId} | Removes and deletes a specific search index from an environment |
| [**deleteEnvironmentsDatabaseBackup()**](EnvironmentsApi.md#deleteEnvironmentsDatabaseBackup) | **DELETE** /environments/{environmentId}/databases/{databaseName}/backups/{backupId} | Deletes a database backup. |
| [**deleteEnvironmentsDomain()**](EnvironmentsApi.md#deleteEnvironmentsDomain) | **DELETE** /environments/{environmentId}/domains/{domain} | Removes the domain from this environment. |
| [**deleteEnvironmentsLogForwardingDestination()**](EnvironmentsApi.md#deleteEnvironmentsLogForwardingDestination) | **DELETE** /environments/{environmentId}/log-forwarding-destinations/{logForwardingDestinationUuid} | Deletes the specified log forwarding destination. |
| [**deleteEnvironmentsVariable()**](EnvironmentsApi.md#deleteEnvironmentsVariable) | **DELETE** /environments/{environmentId}/variables/{environmentVariableName} | Removes an environment variable from an environment. |
| [**getAvailableRuntimes()**](EnvironmentsApi.md#getAvailableRuntimes) | **GET** /environments/{environmentId}/available-runtimes | Return a list of runtimes. |
| [**getCdnByEnvironmentId()**](EnvironmentsApi.md#getCdnByEnvironmentId) | **GET** /environments/{environmentId}/cdn | Returns the CDN status for an environment. |
| [**getCertificate()**](EnvironmentsApi.md#getCertificate) | **GET** /environments/{environmentId}/ssl/certificates/{certificateId} | Returns a specific certificate by certificate id. |
| [**getCertificateSigningRequest()**](EnvironmentsApi.md#getCertificateSigningRequest) | **GET** /environments/{environmentId}/ssl/csrs/{certificateId} | Returns the certificate signing request for the certificate specified by id. |
| [**getCertificateSigningRequests()**](EnvironmentsApi.md#getCertificateSigningRequests) | **GET** /environments/{environmentId}/ssl/csrs | Returns certificate signing requests. |
| [**getCertificates()**](EnvironmentsApi.md#getCertificates) | **GET** /environments/{environmentId}/ssl/certificates | Return a list of SSL certificates. |
| [**getCron()**](EnvironmentsApi.md#getCron) | **GET** /environments/{environmentId}/crons/{cronId} | Return details about a specific cron job. |
| [**getCronJobsByEnvironmentId()**](EnvironmentsApi.md#getCronJobsByEnvironmentId) | **GET** /environments/{environmentId}/crons | Return environment cron jobs. |
| [**getEIPs()**](EnvironmentsApi.md#getEIPs) | **GET** /environments/{environmentId}/eips | Return a list of Web EIPs. |
| [**getEnvironment()**](EnvironmentsApi.md#getEnvironment) | **GET** /environments/{environmentId} | Return details about a specific environment. |
| [**getEnvironmentCloudActions()**](EnvironmentsApi.md#getEnvironmentCloudActions) | **GET** /environments/{environmentId}/cloud-actions | Returns a list of Cloud Actions. |
| [**getEnvironmentSearchIndex()**](EnvironmentsApi.md#getEnvironmentSearchIndex) | **GET** /environments/{environmentId}/search/indexes/{indexId} | Returns a search configuration set for an application |
| [**getEnvironmentSearchIndexes()**](EnvironmentsApi.md#getEnvironmentSearchIndexes) | **GET** /environments/{environmentId}/search/indexes | Returns a collection of search indexes for an environment. |
| [**getEnvironmentSearchList()**](EnvironmentsApi.md#getEnvironmentSearchList) | **GET** /environments/{environmentId}/search | Returns a traversal endpoint for search entities for the environment. |
| [**getEnvironmentsDatabase()**](EnvironmentsApi.md#getEnvironmentsDatabase) | **GET** /environments/{environmentId}/databases/{databaseName} | Return details about a specific database. |
| [**getEnvironmentsDatabaseBackup()**](EnvironmentsApi.md#getEnvironmentsDatabaseBackup) | **GET** /environments/{environmentId}/databases/{databaseName}/backups/{backupId} | Return details about a specific backup. |
| [**getEnvironmentsDatabaseBackups()**](EnvironmentsApi.md#getEnvironmentsDatabaseBackups) | **GET** /environments/{environmentId}/databases/{databaseName}/backups | Returns a list of backups. |
| [**getEnvironmentsDatabaseDownloadBackup()**](EnvironmentsApi.md#getEnvironmentsDatabaseDownloadBackup) | **GET** /environments/{environmentId}/databases/{databaseName}/backups/{backupId}/actions/download | Downloads the database backup file. |
| [**getEnvironmentsDatabasePhpConfig()**](EnvironmentsApi.md#getEnvironmentsDatabasePhpConfig) | **GET** /environments/{environmentId}/databases/{databaseName}/php-config | Returns PHP configuration details for this database. |
| [**getEnvironmentsDatabases()**](EnvironmentsApi.md#getEnvironmentsDatabases) | **GET** /environments/{environmentId}/databases | Returns a list of databases. |
| [**getEnvironmentsDns()**](EnvironmentsApi.md#getEnvironmentsDns) | **GET** /environments/{environmentId}/dns | Returns DNS configuration details for an environment. |
| [**getEnvironmentsDomain()**](EnvironmentsApi.md#getEnvironmentsDomain) | **GET** /environments/{environmentId}/domains/{domain} | Return details about a specific domain. |
| [**getEnvironmentsDomainStatus()**](EnvironmentsApi.md#getEnvironmentsDomainStatus) | **GET** /environments/{environmentId}/domains/{domain}/status | Returns details about the domain. |
| [**getEnvironmentsDomains()**](EnvironmentsApi.md#getEnvironmentsDomains) | **GET** /environments/{environmentId}/domains | Returns a list of domains. |
| [**getEnvironmentsLog()**](EnvironmentsApi.md#getEnvironmentsLog) | **GET** /environments/{environmentId}/logs/{logType} | Downloads the log file. |
| [**getEnvironmentsLogForwardingDestination()**](EnvironmentsApi.md#getEnvironmentsLogForwardingDestination) | **GET** /environments/{environmentId}/log-forwarding-destinations/{logForwardingDestinationUuid} | Returns the specified log forwarding destination. |
| [**getEnvironmentsLogForwardingDestinations()**](EnvironmentsApi.md#getEnvironmentsLogForwardingDestinations) | **GET** /environments/{environmentId}/log-forwarding-destinations | Returns a collection of log forwarding destinations for this environment. |
| [**getEnvironmentsLogs()**](EnvironmentsApi.md#getEnvironmentsLogs) | **GET** /environments/{environmentId}/logs | Returns a list of log files for this environment available for download. |
| [**getEnvironmentsLogstream()**](EnvironmentsApi.md#getEnvironmentsLogstream) | **GET** /environments/{environmentId}/logstream | Returns a logstream url and metadata. |
| [**getEnvironmentsMetrics()**](EnvironmentsApi.md#getEnvironmentsMetrics) | **GET** /environments/{environmentId}/metrics | Does not return any data. Allows traversal to metrics groups endpoints. |
| [**getEnvironmentsServer()**](EnvironmentsApi.md#getEnvironmentsServer) | **GET** /environments/{environmentId}/servers/{serverId} | Return details about a specific server. |
| [**getEnvironmentsServers()**](EnvironmentsApi.md#getEnvironmentsServers) | **GET** /environments/{environmentId}/servers | Returns a list of servers. |
| [**getEnvironmentsSettings()**](EnvironmentsApi.md#getEnvironmentsSettings) | **GET** /environments/{environmentId}/settings | Provides links to environment settings. |
| [**getEnvironmentsStackMetrics()**](EnvironmentsApi.md#getEnvironmentsStackMetrics) | **GET** /environments/{environmentId}/metrics/stackmetrics | Does not return any data. Allows traversal to StackMetrics endpoints. |
| [**getEnvironmentsStackMetricsData()**](EnvironmentsApi.md#getEnvironmentsStackMetricsData) | **GET** /environments/{environmentId}/metrics/stackmetrics/data | Returns StackMetrics data for the metrics specified in the filter paramater (e.g., apache-access, web-cpu). |
| [**getEnvironmentsUsageData()**](EnvironmentsApi.md#getEnvironmentsUsageData) | **GET** /environments/{environmentId}/metrics/usage/data | Retrieves usage data for an environment. |
| [**getEnvironmentsUsageLinks()**](EnvironmentsApi.md#getEnvironmentsUsageLinks) | **GET** /environments/{environmentId}/metrics/usage | Retrieves traversal links for an environment&#39;s usage data. |
| [**getEnvironmentsUsageMetricData()**](EnvironmentsApi.md#getEnvironmentsUsageMetricData) | **GET** /environments/{environmentId}/metrics/usage/{usageMetric} | Retrieves usage metric data for an environment. |
| [**getEnvironmentsVariable()**](EnvironmentsApi.md#getEnvironmentsVariable) | **GET** /environments/{environmentId}/variables/{environmentVariableName} | Get an environment variable associated with this environment. |
| [**getEnvironmentsVariables()**](EnvironmentsApi.md#getEnvironmentsVariables) | **GET** /environments/{environmentId}/variables | Returns a list of environment variables associated with this environment. |
| [**getSsl()**](EnvironmentsApi.md#getSsl) | **GET** /environments/{environmentId}/ssl | Returns the SSL settings for this environment. |
| [**postActivateCertificate()**](EnvironmentsApi.md#postActivateCertificate) | **POST** /environments/{environmentId}/ssl/certificates/{certificateId}/actions/activate | Activates an SSL certificate. |
| [**postCdnByEnvironmentId()**](EnvironmentsApi.md#postCdnByEnvironmentId) | **POST** /environments/{environmentId}/cdn | Enables a CDN for an environment. |
| [**postCertificate()**](EnvironmentsApi.md#postCertificate) | **POST** /environments/{environmentId}/ssl/certificates | Install an SSL certificate. |
| [**postCertificateSigningRequest()**](EnvironmentsApi.md#postCertificateSigningRequest) | **POST** /environments/{environmentId}/ssl/csrs | Generates a certificate signing request (CSR) for one or more domains. |
| [**postChangeEnvironmentLabel()**](EnvironmentsApi.md#postChangeEnvironmentLabel) | **POST** /environments/{environmentId}/actions/change-label | Change the label for an environment. |
| [**postDeactivateCertificate()**](EnvironmentsApi.md#postDeactivateCertificate) | **POST** /environments/{environmentId}/ssl/certificates/{certificateId}/actions/deactivate | Deactivates an active SSL certificate. |
| [**postDeployArtifact()**](EnvironmentsApi.md#postDeployArtifact) | **POST** /environments/{environmentId}/artifacts/actions/switch | Deploys an artifact to this environment. |
| [**postEnvironmentCloudActionsDisable()**](EnvironmentsApi.md#postEnvironmentCloudActionsDisable) | **POST** /environments/{environmentId}/cloud-actions/actions/disable | Disables Cloud Actions. |
| [**postEnvironmentCloudActionsEnable()**](EnvironmentsApi.md#postEnvironmentCloudActionsEnable) | **POST** /environments/{environmentId}/cloud-actions/actions/enable | Enables Cloud Actions. |
| [**postEnvironmentCloudActionsReset()**](EnvironmentsApi.md#postEnvironmentCloudActionsReset) | **POST** /environments/{environmentId}/cloud-actions/actions/reset | Resets Cloud Actions. |
| [**postEnvironmentCronDelete()**](EnvironmentsApi.md#postEnvironmentCronDelete) | **DELETE** /environments/{environmentId}/crons/{cronId} | Deletes a cron job. |
| [**postEnvironmentCronDisable()**](EnvironmentsApi.md#postEnvironmentCronDisable) | **POST** /environments/{environmentId}/crons/{cronId}/actions/disable | Disables a cron job. |
| [**postEnvironmentCronEnable()**](EnvironmentsApi.md#postEnvironmentCronEnable) | **POST** /environments/{environmentId}/crons/{cronId}/actions/enable | Enables a cron job. |
| [**postEnvironmentCrons()**](EnvironmentsApi.md#postEnvironmentCrons) | **POST** /environments/{environmentId}/crons | Creates a scheduled job with cron. |
| [**postEnvironmentEmailDisable()**](EnvironmentsApi.md#postEnvironmentEmailDisable) | **POST** /environments/{environmentId}/email/actions/disable | Disables email for an environment. |
| [**postEnvironmentEmailEnable()**](EnvironmentsApi.md#postEnvironmentEmailEnable) | **POST** /environments/{environmentId}/email/actions/enable | Enables email for an environment. |
| [**postEnvironmentSearchIndexes()**](EnvironmentsApi.md#postEnvironmentSearchIndexes) | **POST** /environments/{environmentId}/search/indexes | Creates a search index for an environment. |
| [**postEnvironmentsClearCaches()**](EnvironmentsApi.md#postEnvironmentsClearCaches) | **POST** /environments/{environmentId}/actions/clear-caches | Clears the caches for one or more domains attached to this environment. |
| [**postEnvironmentsDatabaseBackups()**](EnvironmentsApi.md#postEnvironmentsDatabaseBackups) | **POST** /environments/{environmentId}/databases/{databaseName}/backups | Create a backup. |
| [**postEnvironmentsDatabaseRestoreBackup()**](EnvironmentsApi.md#postEnvironmentsDatabaseRestoreBackup) | **POST** /environments/{environmentId}/databases/{databaseName}/backups/{backupId}/actions/restore | Restores this backup to the appropriate environment&#39;s database. |
| [**postEnvironmentsDatabases()**](EnvironmentsApi.md#postEnvironmentsDatabases) | **POST** /environments/{environmentId}/databases | Copies a database to this environment. |
| [**postEnvironmentsDeployCode()**](EnvironmentsApi.md#postEnvironmentsDeployCode) | **POST** /environments/{environmentId}/code | Deploys code to this environment. |
| [**postEnvironmentsDisableLiveDev()**](EnvironmentsApi.md#postEnvironmentsDisableLiveDev) | **POST** /environments/{environmentId}/livedev/actions/disable | Disable Live Development on this environment. |
| [**postEnvironmentsDisableLogForwardingDestination()**](EnvironmentsApi.md#postEnvironmentsDisableLogForwardingDestination) | **POST** /environments/{environmentId}/log-forwarding-destinations/{logForwardingDestinationUuid}/actions/disable | Disables the specified log forwarding destination. |
| [**postEnvironmentsDisableProductionMode()**](EnvironmentsApi.md#postEnvironmentsDisableProductionMode) | **POST** /environments/{environmentId}/production-mode/actions/disable | Disables production mode for an environment. |
| [**postEnvironmentsDomainClearCaches()**](EnvironmentsApi.md#postEnvironmentsDomainClearCaches) | **POST** /environments/{environmentId}/domains/{domain}/actions/clear-caches | Clears the caches for the specified domain. |
| [**postEnvironmentsDomainClearVarnish()**](EnvironmentsApi.md#postEnvironmentsDomainClearVarnish) | **POST** /environments/{environmentId}/domains/{domain}/actions/clear-varnish | Clears the Varnish cache for the specified domain. |
| [**postEnvironmentsDomains()**](EnvironmentsApi.md#postEnvironmentsDomains) | **POST** /environments/{environmentId}/domains | Adds a domain to the environment. |
| [**postEnvironmentsDomainsClearVarnish()**](EnvironmentsApi.md#postEnvironmentsDomainsClearVarnish) | **POST** /environments/{environmentId}/domains/actions/clear-varnish | Clears the Varnish cache for one or more domains attached to this environment. |
| [**postEnvironmentsEnableLiveDev()**](EnvironmentsApi.md#postEnvironmentsEnableLiveDev) | **POST** /environments/{environmentId}/livedev/actions/enable | Enable Live Development on this environment. |
| [**postEnvironmentsEnableLogForwardingDestination()**](EnvironmentsApi.md#postEnvironmentsEnableLogForwardingDestination) | **POST** /environments/{environmentId}/log-forwarding-destinations/{logForwardingDestinationUuid}/actions/enable | Enables the specified log forwarding destination. |
| [**postEnvironmentsEnableProductionMode()**](EnvironmentsApi.md#postEnvironmentsEnableProductionMode) | **POST** /environments/{environmentId}/production-mode/actions/enable | Enables production mode for an environment. |
| [**postEnvironmentsFiles()**](EnvironmentsApi.md#postEnvironmentsFiles) | **POST** /environments/{environmentId}/files | Copies files to this environment. |
| [**postEnvironmentsImportSite()**](EnvironmentsApi.md#postEnvironmentsImportSite) | **POST** /environments/{environmentId}/code/actions/import | Imports a site to this environment. |
| [**postEnvironmentsLog()**](EnvironmentsApi.md#postEnvironmentsLog) | **POST** /environments/{environmentId}/logs/{logType} | Creates a log file snapshot. |
| [**postEnvironmentsLogForwardingDestinations()**](EnvironmentsApi.md#postEnvironmentsLogForwardingDestinations) | **POST** /environments/{environmentId}/log-forwarding-destinations | Creates a log forwarding destination. |
| [**postEnvironmentsServerReboot()**](EnvironmentsApi.md#postEnvironmentsServerReboot) | **POST** /environments/{environmentId}/servers/{serverId}/actions/reboot | Reboots a server. |
| [**postEnvironmentsServerRelaunch()**](EnvironmentsApi.md#postEnvironmentsServerRelaunch) | **POST** /environments/{environmentId}/servers/{serverId}/actions/relaunch | Relaunches a server. |
| [**postEnvironmentsServerSuspend()**](EnvironmentsApi.md#postEnvironmentsServerSuspend) | **POST** /environments/{environmentId}/servers/{serverId}/actions/suspend | Suspends a server. |
| [**postEnvironmentsServerUpgrade()**](EnvironmentsApi.md#postEnvironmentsServerUpgrade) | **POST** /environments/{environmentId}/servers/{serverId}/actions/upgrade | Upgrades a server from \&quot;precise\&quot; to \&quot;xenial\&quot;. |
| [**postEnvironmentsSwitchCode()**](EnvironmentsApi.md#postEnvironmentsSwitchCode) | **POST** /environments/{environmentId}/code/actions/switch | Switches code on this environment to a different branch or release tag. |
| [**postEnvironmentsVariables()**](EnvironmentsApi.md#postEnvironmentsVariables) | **POST** /environments/{environmentId}/variables | Adds a new environment variable to an environment. |
| [**postMigrateEnvironment()**](EnvironmentsApi.md#postMigrateEnvironment) | **POST** /environments/{environmentId}/actions/migrate | Create a Migrate Environment using the provided environment as its source. |
| [**postPromoteEnvironment()**](EnvironmentsApi.md#postPromoteEnvironment) | **POST** /environments/{environmentId}/actions/promote | Promote a Migrate Environment. |
| [**postRefreshEnvironment()**](EnvironmentsApi.md#postRefreshEnvironment) | **POST** /environments/{environmentId}/actions/refresh | Refreshes a Migrate Environment. |
| [**putCron()**](EnvironmentsApi.md#putCron) | **PUT** /environments/{environmentId}/crons/{cronId} | Modify an existing scheduled job. |
| [**putEnvironment()**](EnvironmentsApi.md#putEnvironment) | **PUT** /environments/{environmentId} | Modifies configuration settings for an environment. |
| [**putEnvironmentCloudActions()**](EnvironmentsApi.md#putEnvironmentCloudActions) | **PUT** /environments/{environmentId}/cloud-actions | Modifies an existing list of Cloud Actions. |
| [**putEnvironmentSearchIndex()**](EnvironmentsApi.md#putEnvironmentSearchIndex) | **PUT** /environments/{environmentId}/search/indexes/{indexId} | Updates a search index on an environment. |
| [**putEnvironmentsLogForwardingDestination()**](EnvironmentsApi.md#putEnvironmentsLogForwardingDestination) | **PUT** /environments/{environmentId}/log-forwarding-destinations/{logForwardingDestinationUuid} | Updates an environment&#39;s log forwarding destination. |
| [**putEnvironmentsServer()**](EnvironmentsApi.md#putEnvironmentsServer) | **PUT** /environments/{environmentId}/servers/{serverId} | Modifies configuration settings for a server. |
| [**putEnvironmentsVariable()**](EnvironmentsApi.md#putEnvironmentsVariable) | **PUT** /environments/{environmentId}/variables/{environmentVariableName} | Updates an environment variable on an environment. |


## `deleteCdnByEnvironmentId()`

```php
deleteCdnByEnvironmentId($environment_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Disables a CDN for an environment.

Disables a CDN for an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->deleteCdnByEnvironmentId($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->deleteCdnByEnvironmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCertificate()`

```php
deleteCertificate($environment_id, $certificate_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Deletes a specific certificate by its ID.

Deletes a specific certificate by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$certificate_id = 7; // int | An ID that uniquely identifies a certificate.

try {
    $result = $apiInstance->deleteCertificate($environment_id, $certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->deleteCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **certificate_id** | **int**| An ID that uniquely identifies a certificate. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteCertificateSigningRequest()`

```php
deleteCertificateSigningRequest($environment_id, $certificate_id): \Acquia\CloudApi\Model\Message
```

Deletes the certificate signing request.

Deletes the certificate signing request for the certificate specified by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$certificate_id = 7; // int | An ID that uniquely identifies a certificate.

try {
    $result = $apiInstance->deleteCertificateSigningRequest($environment_id, $certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->deleteCertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **certificate_id** | **int**| An ID that uniquely identifies a certificate. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvironment()`

```php
deleteEnvironment($environment_id): \Acquia\CloudApi\Model\Message
```

Deletes a CD environment.

Deletes a CD environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->deleteEnvironment($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->deleteEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvironmentSearchIndex()`

```php
deleteEnvironmentSearchIndex($environment_id, $index_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Removes and deletes a specific search index from an environment

Removes and deletes a specific search index from an environment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$index_id = ABCDE-1234.test.example; // string | An ID that uniquely identifies an index.

try {
    $result = $apiInstance->deleteEnvironmentSearchIndex($environment_id, $index_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->deleteEnvironmentSearchIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **index_id** | **string**| An ID that uniquely identifies an index. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvironmentsDatabaseBackup()`

```php
deleteEnvironmentsDatabaseBackup($environment_id, $database_name, $backup_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Deletes a database backup.

Deletes a database backup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$database_name = my_db; // string | The database name, typically lower snake case.
$backup_id = 1; // int | The database backup identifier.

try {
    $result = $apiInstance->deleteEnvironmentsDatabaseBackup($environment_id, $database_name, $backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->deleteEnvironmentsDatabaseBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **database_name** | **string**| The database name, typically lower snake case. | |
| **backup_id** | **int**| The database backup identifier. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvironmentsDomain()`

```php
deleteEnvironmentsDomain($environment_id, $domain): \Acquia\CloudApi\Model\MessageWithLinks
```

Removes the domain from this environment.

Removes the domain from this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$domain = example.com; // string | A domain name.

try {
    $result = $apiInstance->deleteEnvironmentsDomain($environment_id, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->deleteEnvironmentsDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **domain** | **string**| A domain name. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvironmentsLogForwardingDestination()`

```php
deleteEnvironmentsLogForwardingDestination($environment_id, $log_forwarding_destination_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Deletes the specified log forwarding destination.

Deletes the specified log forwarding destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$log_forwarding_destination_uuid = dbd8a966-2b25-11e9-b210-d663bd873d93; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->deleteEnvironmentsLogForwardingDestination($environment_id, $log_forwarding_destination_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->deleteEnvironmentsLogForwardingDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **log_forwarding_destination_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEnvironmentsVariable()`

```php
deleteEnvironmentsVariable($environment_id, $environment_variable_name): \Acquia\CloudApi\Model\MessageWithLinks
```

Removes an environment variable from an environment.

Removes an environment variable from an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$environment_variable_name = EXAMPLE_VARIABLE_NAME; // string | The environment variable name.

try {
    $result = $apiInstance->deleteEnvironmentsVariable($environment_id, $environment_variable_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->deleteEnvironmentsVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **environment_variable_name** | **string**| The environment variable name. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAvailableRuntimes()`

```php
getAvailableRuntimes($environment_id): \Acquia\CloudApi\Model\AvailableRuntimes
```

Return a list of runtimes.

Returns a list of available runtimes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getAvailableRuntimes($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getAvailableRuntimes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\AvailableRuntimes**](../Model/AvailableRuntimes.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCdnByEnvironmentId()`

```php
getCdnByEnvironmentId($environment_id): \Acquia\CloudApi\Model\Cdn
```

Returns the CDN status for an environment.

Returns the CDN status for an environment. The CDN must be enabled for the status to be displayed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getCdnByEnvironmentId($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getCdnByEnvironmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Cdn**](../Model/Cdn.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCertificate()`

```php
getCertificate($environment_id, $certificate_id): \Acquia\CloudApi\Model\Certificate
```

Returns a specific certificate by certificate id.

Returns details about a specific SSL certificate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$certificate_id = 7; // int | An ID that uniquely identifies a certificate.

try {
    $result = $apiInstance->getCertificate($environment_id, $certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **certificate_id** | **int**| An ID that uniquely identifies a certificate. | |

### Return type

[**\Acquia\CloudApi\Model\Certificate**](../Model/Certificate.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCertificateSigningRequest()`

```php
getCertificateSigningRequest($environment_id, $certificate_id): \Acquia\CloudApi\Model\CertificateSigningRequest
```

Returns the certificate signing request for the certificate specified by id.

Returns details about a specific certificate signing request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$certificate_id = 7; // int | An ID that uniquely identifies a certificate.

try {
    $result = $apiInstance->getCertificateSigningRequest($environment_id, $certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getCertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **certificate_id** | **int**| An ID that uniquely identifies a certificate. | |

### Return type

[**\Acquia\CloudApi\Model\CertificateSigningRequest**](../Model/CertificateSigningRequest.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCertificateSigningRequests()`

```php
getCertificateSigningRequests($environment_id): \Acquia\CloudApi\Model\Certificates
```

Returns certificate signing requests.

Returns the certificate signing requests for this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getCertificateSigningRequests($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getCertificateSigningRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Certificates**](../Model/Certificates.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCertificates()`

```php
getCertificates($environment_id): \Acquia\CloudApi\Model\Certificates
```

Return a list of SSL certificates.

Returns the SSL certificates that are installed on this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getCertificates($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getCertificates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Certificates**](../Model/Certificates.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCron()`

```php
getCron($environment_id, $cron_id): \Acquia\CloudApi\Model\Cron
```

Return details about a specific cron job.

Return details about a specific cron job by environment ID and cron job ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$cron_id = e10a665c-c9ec-4422-a82b-b32c82329f9d; // string | An ID that uniquely identifies a cron job.

try {
    $result = $apiInstance->getCron($environment_id, $cron_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getCron: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **cron_id** | **string**| An ID that uniquely identifies a cron job. | |

### Return type

[**\Acquia\CloudApi\Model\Cron**](../Model/Cron.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCronJobsByEnvironmentId()`

```php
getCronJobsByEnvironmentId($environment_id): \Acquia\CloudApi\Model\Crons
```

Return environment cron jobs.

Returns a list of the cron jobs on an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getCronJobsByEnvironmentId($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getCronJobsByEnvironmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Crons**](../Model/Crons.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEIPs()`

```php
getEIPs($environment_id): \Acquia\CloudApi\Model\EIPs
```

Return a list of Web EIPs.

Returns a list of Web EIPs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEIPs($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEIPs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\EIPs**](../Model/EIPs.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironment()`

```php
getEnvironment($environment_id): \Acquia\CloudApi\Model\Environment
```

Return details about a specific environment.

Return details about a specific environment.  To find your environment ID via API:  1. Make a request to GET `/api/applications/[uuid]/environments`. 2. Find the entry that matches your environment. If you don't know the application UUID, first make a request to GET `/api/applications`.  To find your environment ID via cloud.acquia.com:  1. Open [https://cloud.acquia.com](https://cloud.acquia.com). 2. Navigate to your application. 3. Navigate to the environment. 4. See the environment ID in the browser URL. For example, in this URL `https://cloud.acquia.com/app/develop/applications/53785bca-1946-4adc-a022-e50d24686c20/environments/289576-53785bca-1946-4adc-a022-e50d24686c20`, the environment id is `289576-53785bca-1946-4adc-a022-e50d24686c20`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEnvironment($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Environment**](../Model/Environment.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentCloudActions()`

```php
getEnvironmentCloudActions($environment_id): \Acquia\CloudApi\Model\CloudActions
```

Returns a list of Cloud Actions.

Returns a list of Cloud Actions on an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEnvironmentCloudActions($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentCloudActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\CloudActions**](../Model/CloudActions.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentSearchIndex()`

```php
getEnvironmentSearchIndex($environment_id, $index_id): \Acquia\CloudApi\Model\Index
```

Returns a search configuration set for an application

A specific search configuration set.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$index_id = ABCDE-1234.test.example; // string | An ID that uniquely identifies an index.

try {
    $result = $apiInstance->getEnvironmentSearchIndex($environment_id, $index_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentSearchIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **index_id** | **string**| An ID that uniquely identifies an index. | |

### Return type

[**\Acquia\CloudApi\Model\Index**](../Model/Index.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentSearchIndexes()`

```php
getEnvironmentSearchIndexes($environment_id): \Acquia\CloudApi\Model\Indexes
```

Returns a collection of search indexes for an environment.

A collection of search indexes for an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEnvironmentSearchIndexes($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentSearchIndexes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Indexes**](../Model/Indexes.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentSearchList()`

```php
getEnvironmentSearchList($environment_id): \Acquia\CloudApi\Model\Search
```

Returns a traversal endpoint for search entities for the environment.

Does not return any data. Allows traversal to search entity endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEnvironmentSearchList($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentSearchList: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Search**](../Model/Search.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsDatabase()`

```php
getEnvironmentsDatabase($environment_id, $database_name): \Acquia\CloudApi\Model\Database
```

Return details about a specific database.

Return details about a specific database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$database_name = my_db; // string | The database name, typically lower snake case.

try {
    $result = $apiInstance->getEnvironmentsDatabase($environment_id, $database_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsDatabase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **database_name** | **string**| The database name, typically lower snake case. | |

### Return type

[**\Acquia\CloudApi\Model\Database**](../Model/Database.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsDatabaseBackup()`

```php
getEnvironmentsDatabaseBackup($environment_id, $database_name, $backup_id): \Acquia\CloudApi\Model\Backup
```

Return details about a specific backup.

Return details about a specific backup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$database_name = my_db; // string | The database name, typically lower snake case.
$backup_id = 1; // int | The database backup identifier.

try {
    $result = $apiInstance->getEnvironmentsDatabaseBackup($environment_id, $database_name, $backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsDatabaseBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **database_name** | **string**| The database name, typically lower snake case. | |
| **backup_id** | **int**| The database backup identifier. | |

### Return type

[**\Acquia\CloudApi\Model\Backup**](../Model/Backup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsDatabaseBackups()`

```php
getEnvironmentsDatabaseBackups($environment_id, $database_name, $from, $to, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\Backups
```

Returns a list of backups.

Returns a list of backups.  Filterable fields: * `type` * `created` Specifies an [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) formatted date.  Sortable fields: * `type` * `created`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$database_name = my_db; // string | The database name, typically lower snake case.
$from = 2019-10-01T00:00:00.000Z; // string | (Use filter `from` instead.) Specifies an [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) formatted date. Used in conjunction with `to` query.
$to = 2020-01-01T00:00:00.000Z; // string | (Use filter `to` instead.) Specifies an [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) formatted date. Used in conjunction with `from` query.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getEnvironmentsDatabaseBackups($environment_id, $database_name, $from, $to, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsDatabaseBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **database_name** | **string**| The database name, typically lower snake case. | |
| **from** | **string**| (Use filter &#x60;from&#x60; instead.) Specifies an [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) formatted date. Used in conjunction with &#x60;to&#x60; query. | [optional] |
| **to** | **string**| (Use filter &#x60;to&#x60; instead.) Specifies an [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) formatted date. Used in conjunction with &#x60;from&#x60; query. | [optional] |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Backups**](../Model/Backups.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsDatabaseDownloadBackup()`

```php
getEnvironmentsDatabaseDownloadBackup($environment_id, $database_name, $backup_id): \SplFileObject
```

Downloads the database backup file.

Downloads the database backup file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$database_name = my_db; // string | The database name, typically lower snake case.
$backup_id = 1; // int | The database backup identifier.

try {
    $result = $apiInstance->getEnvironmentsDatabaseDownloadBackup($environment_id, $database_name, $backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsDatabaseDownloadBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **database_name** | **string**| The database name, typically lower snake case. | |
| **backup_id** | **int**| The database backup identifier. | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/hal+json`, `application/json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsDatabasePhpConfig()`

```php
getEnvironmentsDatabasePhpConfig($environment_id, $database_name): \Acquia\CloudApi\Model\DatabasePhpConfig
```

Returns PHP configuration details for this database.

Returns PHP configuration details for this database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$database_name = my_db; // string | The database name, typically lower snake case.

try {
    $result = $apiInstance->getEnvironmentsDatabasePhpConfig($environment_id, $database_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsDatabasePhpConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **database_name** | **string**| The database name, typically lower snake case. | |

### Return type

[**\Acquia\CloudApi\Model\DatabasePhpConfig**](../Model/DatabasePhpConfig.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsDatabases()`

```php
getEnvironmentsDatabases($environment_id, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\Databases
```

Returns a list of databases.

Returns a list of databases.  Filterable fields: * `name` * `id`  Sortable fields: * `name` * `id`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getEnvironmentsDatabases($environment_id, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsDatabases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Databases**](../Model/Databases.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsDns()`

```php
getEnvironmentsDns($environment_id): \Acquia\CloudApi\Model\Dns
```

Returns DNS configuration details for an environment.

Returns environment DNS configuration information for apex domain and subdomains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEnvironmentsDns($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsDns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Dns**](../Model/Dns.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsDomain()`

```php
getEnvironmentsDomain($environment_id, $domain): \Acquia\CloudApi\Model\Domain
```

Return details about a specific domain.

Return details about a specific domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$domain = example.com; // string | A domain name.

try {
    $result = $apiInstance->getEnvironmentsDomain($environment_id, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsDomain: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **domain** | **string**| A domain name. | |

### Return type

[**\Acquia\CloudApi\Model\Domain**](../Model/Domain.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsDomainStatus()`

```php
getEnvironmentsDomainStatus($environment_id, $domain): \Acquia\CloudApi\Model\DomainStatus
```

Returns details about the domain.

Returns details about the domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$domain = example.com; // string | A domain name.

try {
    $result = $apiInstance->getEnvironmentsDomainStatus($environment_id, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsDomainStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **domain** | **string**| A domain name. | |

### Return type

[**\Acquia\CloudApi\Model\DomainStatus**](../Model/DomainStatus.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsDomains()`

```php
getEnvironmentsDomains($environment_id, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\Domains
```

Returns a list of domains.

Returns a list of domains.  Filterable fields: * `hostname`  Sortable fields: * `hostname`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getEnvironmentsDomains($environment_id, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Domains**](../Model/Domains.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsLog()`

```php
getEnvironmentsLog($environment_id, $log_type): \SplFileObject
```

Downloads the log file.

Downloads the log file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$log_type = php-error; // string | An ID that uniquely identifies a log type.

try {
    $result = $apiInstance->getEnvironmentsLog($environment_id, $log_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **log_type** | **string**| An ID that uniquely identifies a log type. | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`, `application/json`, `application/hal+json`, `text/html`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsLogForwardingDestination()`

```php
getEnvironmentsLogForwardingDestination($environment_id, $log_forwarding_destination_uuid): \Acquia\CloudApi\Model\LogForwardingDestination
```

Returns the specified log forwarding destination.

Returns the specified log forwarding destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$log_forwarding_destination_uuid = dbd8a966-2b25-11e9-b210-d663bd873d93; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->getEnvironmentsLogForwardingDestination($environment_id, $log_forwarding_destination_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsLogForwardingDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **log_forwarding_destination_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\LogForwardingDestination**](../Model/LogForwardingDestination.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsLogForwardingDestinations()`

```php
getEnvironmentsLogForwardingDestinations($environment_id, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\LogForwardingDestinations
```

Returns a collection of log forwarding destinations for this environment.

Returns a collection of log forwarding destinations for this environment.  Filterable fields: * `label` * `consumer`  Sortable fields: * `label`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getEnvironmentsLogForwardingDestinations($environment_id, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsLogForwardingDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\LogForwardingDestinations**](../Model/LogForwardingDestinations.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsLogs()`

```php
getEnvironmentsLogs($environment_id): \Acquia\CloudApi\Model\Logs
```

Returns a list of log files for this environment available for download.

Returns a list of log files for this environment available for download.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEnvironmentsLogs($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Logs**](../Model/Logs.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsLogstream()`

```php
getEnvironmentsLogstream($environment_id): \Acquia\CloudApi\Model\Logstream
```

Returns a logstream url and metadata.

Returns a logstream url and metadata.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEnvironmentsLogstream($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsLogstream: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Logstream**](../Model/Logstream.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsMetrics()`

```php
getEnvironmentsMetrics($environment_id): \Acquia\CloudApi\Model\Metrics
```

Does not return any data. Allows traversal to metrics groups endpoints.

Does not return any data. Allows traversal to metrics groups endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEnvironmentsMetrics($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Metrics**](../Model/Metrics.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsServer()`

```php
getEnvironmentsServer($environment_id, $server_id): \Acquia\CloudApi\Model\Server
```

Return details about a specific server.

Return details about a specific server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$server_id = 42; // string | The internal database identifier of the server.

try {
    $result = $apiInstance->getEnvironmentsServer($environment_id, $server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **server_id** | **string**| The internal database identifier of the server. | |

### Return type

[**\Acquia\CloudApi\Model\Server**](../Model/Server.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsServers()`

```php
getEnvironmentsServers($environment_id, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\Servers
```

Returns a list of servers.

Returns a list of servers.  Filterable fields: * `name` * `region` * `hostname` * `ip` * `status`  Sortable fields: * `name` * `region` * `hostname` * `ip` * `status`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getEnvironmentsServers($environment_id, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsServers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\Servers**](../Model/Servers.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsSettings()`

```php
getEnvironmentsSettings($environment_id): \Acquia\CloudApi\Model\EnvironmentSettings
```

Provides links to environment settings.

Provides links to environment settings.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEnvironmentsSettings($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\EnvironmentSettings**](../Model/EnvironmentSettings.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsStackMetrics()`

```php
getEnvironmentsStackMetrics($environment_id): \Acquia\CloudApi\Model\Metrics
```

Does not return any data. Allows traversal to StackMetrics endpoints.

Does not return any data. Allows traversal to StackMetrics endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEnvironmentsStackMetrics($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsStackMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Metrics**](../Model/Metrics.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsStackMetricsData()`

```php
getEnvironmentsStackMetricsData($environment_id, $filter, $from, $to, $resolution): \Acquia\CloudApi\Model\StackMetricsData
```

Returns StackMetrics data for the metrics specified in the filter paramater (e.g., apache-access, web-cpu).

Returns StackMetrics data for the metrics specified by the filter paramater (e.g., apache-access, web-cpu).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)  **For this endpoint, the \"metric\" filter is required. Multiple metrics can be returned in one request. The following metrics are available:**  * apache-requests, bal-cpu, bal-memory, cron-memory, db-cpu, db-disk-size, db-disk-usage, db-memory, file-disk-size, file-cpu, file-disk-usage, file-memory, http-2xx, http-3xx, http-4xx, http-5xx, mysql-slow-query-count, nginx-requests, out-of-memory, php-proc-max-reached-site, php-proc-max-reached-total, php-proc-site, php-proc-total, varnish-cache-hit-rate, varnish-requests, web-cpu, web-memory
$from = 2021-01-29T22:45:21+00:00; // string | An ISO-8601 formatted date retrieve metrics from.
$to = 2021-01-29T23:55:21+00:00; // string | An ISO-8601 formatted date retrieve results to.
$resolution = 'resolution_example'; // string | Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \"week\" resolution - 3 year limit for “month” resolution

try {
    $result = $apiInstance->getEnvironmentsStackMetricsData($environment_id, $filter, $from, $to, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsStackMetricsData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;)  **For this endpoint, the \&quot;metric\&quot; filter is required. Multiple metrics can be returned in one request. The following metrics are available:**  * apache-requests, bal-cpu, bal-memory, cron-memory, db-cpu, db-disk-size, db-disk-usage, db-memory, file-disk-size, file-cpu, file-disk-usage, file-memory, http-2xx, http-3xx, http-4xx, http-5xx, mysql-slow-query-count, nginx-requests, out-of-memory, php-proc-max-reached-site, php-proc-max-reached-total, php-proc-site, php-proc-total, varnish-cache-hit-rate, varnish-requests, web-cpu, web-memory | |
| **from** | **string**| An ISO-8601 formatted date retrieve metrics from. | |
| **to** | **string**| An ISO-8601 formatted date retrieve results to. | [optional] |
| **resolution** | **string**| Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \&quot;week\&quot; resolution - 3 year limit for “month” resolution | [optional] |

### Return type

[**\Acquia\CloudApi\Model\StackMetricsData**](../Model/StackMetricsData.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsUsageData()`

```php
getEnvironmentsUsageData($environment_id, $from, $to, $filter, $resolution): \Acquia\CloudApi\Model\EnvironmentUsageMetrics
```

Retrieves usage data for an environment.

Filterable fields: * `metric` - One of: {`views`, `visits`}

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$resolution = 'resolution_example'; // string | Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \"week\" resolution - 3 year limit for “month” resolution

try {
    $result = $apiInstance->getEnvironmentsUsageData($environment_id, $from, $to, $filter, $resolution);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsUsageData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **resolution** | **string**| Specifies the data granularity of the request. Available resolutions: minute, hour, day, week or month.  Limits: - 3 hour limit for “minute” resolution - 1 week limit for “hour” resolution - 6 month limit for “day” resolution - 1 year limit for \&quot;week\&quot; resolution - 3 year limit for “month” resolution | [optional] |

### Return type

[**\Acquia\CloudApi\Model\EnvironmentUsageMetrics**](../Model/EnvironmentUsageMetrics.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsUsageLinks()`

```php
getEnvironmentsUsageLinks($environment_id): \Acquia\CloudApi\Model\Usage
```

Retrieves traversal links for an environment's usage data.

Retrieves traversal links for an environment's usage data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getEnvironmentsUsageLinks($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsUsageLinks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Usage**](../Model/Usage.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsUsageMetricData()`

```php
getEnvironmentsUsageMetricData($usage_metric, $environment_id, $from, $to): \Acquia\CloudApi\Model\EnvironmentUsageMetric
```

Retrieves usage metric data for an environment.

Retrieves usage metric data for an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$usage_metric = ["views"]; // string | A usage data metric type.
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$from = -7d; // string | Specifies relative or absolute time period to retrieve results from. (Default value -7d)
$to = -1d; // string | Optionally specifies relative or absolute time period to retrieve results until.

try {
    $result = $apiInstance->getEnvironmentsUsageMetricData($usage_metric, $environment_id, $from, $to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsUsageMetricData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **usage_metric** | **string**| A usage data metric type. | |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **from** | **string**| Specifies relative or absolute time period to retrieve results from. (Default value -7d) | [optional] |
| **to** | **string**| Optionally specifies relative or absolute time period to retrieve results until. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\EnvironmentUsageMetric**](../Model/EnvironmentUsageMetric.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsVariable()`

```php
getEnvironmentsVariable($environment_id, $environment_variable_name): \Acquia\CloudApi\Model\EnvironmentVariable
```

Get an environment variable associated with this environment.

Get an environment variable associated with this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$environment_variable_name = EXAMPLE_VARIABLE_NAME; // string | The environment variable name.

try {
    $result = $apiInstance->getEnvironmentsVariable($environment_id, $environment_variable_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **environment_variable_name** | **string**| The environment variable name. | |

### Return type

[**\Acquia\CloudApi\Model\EnvironmentVariable**](../Model/EnvironmentVariable.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnvironmentsVariables()`

```php
getEnvironmentsVariables($environment_id, $sort, $filter, $limit, $offset): \Acquia\CloudApi\Model\EnvironmentVariables
```

Returns a list of environment variables associated with this environment.

Returns a list of environment variables associated with this environment.  Filterable fields: * `name`  Sortable fields: * `name`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$sort = field1,-field2; // string | A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable.
$filter = 'filter_example'; // string | The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: `= (%3D)` * Does not equal: `!= (!%3D)` * Greater than: `> (%3E)` * Less than: `< (%3C)` * Greater than or equal to: `>= (%3E%3D)` * Less than or equal to: `<= (%3C%3D)` * Contains substring: `=@ (%3D@)` * Does not contain substring: `!@ (!@)`  Filters can be combined using `OR` and `AND` boolean logic. The `OR` operator is defined using a comma (`,`) and the `AND` operator is defined using a semi-colon (`;`).  Some examples: * `filter=field%3Dvalue` (`field` equals `'value'`) * `filter=field%3D@*partialmatch` (`field` ends with `'partialmatch'`) * `filter=field%3D@*partialmatch,field%3Dvalue` (`field` ends with `'partialmatch'` OR `field` equals `'value'`) * `filter=field%3D@*partialmatch,field%3Dvalue;field2%3C5` (`field` ends with `'partialmatch'` OR `field` equals `'value'` AND `field2` > `5`)
$limit = 10; // int | The maximum number of items to return.
$offset = 10; // int | An integer to signify the offset to paginate from.

try {
    $result = $apiInstance->getEnvironmentsVariables($environment_id, $sort, $filter, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getEnvironmentsVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **sort** | **string**| A comma-delimited string with fields used for sorting. The order of the fields is significant. A leading - in the field indicates the field should be sorted in a descending order. Not all fields are sortable. | [optional] |
| **filter** | **string**| The filters query string parameter restricts the data returned from your request. Filtered queries restrict the rows that do (or do not) get included in the result by testing each row in the result against the filters. Not all fields are filterable.  There are eight filter operators that can be used and they must be URL encoded in order to be included. The operators are:  * Equals: &#x60;&#x3D; (%3D)&#x60; * Does not equal: &#x60;!&#x3D; (!%3D)&#x60; * Greater than: &#x60;&gt; (%3E)&#x60; * Less than: &#x60;&lt; (%3C)&#x60; * Greater than or equal to: &#x60;&gt;&#x3D; (%3E%3D)&#x60; * Less than or equal to: &#x60;&lt;&#x3D; (%3C%3D)&#x60; * Contains substring: &#x60;&#x3D;@ (%3D@)&#x60; * Does not contain substring: &#x60;!@ (!@)&#x60;  Filters can be combined using &#x60;OR&#x60; and &#x60;AND&#x60; boolean logic. The &#x60;OR&#x60; operator is defined using a comma (&#x60;,&#x60;) and the &#x60;AND&#x60; operator is defined using a semi-colon (&#x60;;&#x60;).  Some examples: * &#x60;filter&#x3D;field%3Dvalue&#x60; (&#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60;) * &#x60;filter&#x3D;field%3D@*partialmatch,field%3Dvalue;field2%3C5&#x60; (&#x60;field&#x60; ends with &#x60;&#39;partialmatch&#39;&#x60; OR &#x60;field&#x60; equals &#x60;&#39;value&#39;&#x60; AND &#x60;field2&#x60; &gt; &#x60;5&#x60;) | [optional] |
| **limit** | **int**| The maximum number of items to return. | [optional] |
| **offset** | **int**| An integer to signify the offset to paginate from. | [optional] |

### Return type

[**\Acquia\CloudApi\Model\EnvironmentVariables**](../Model/EnvironmentVariables.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSsl()`

```php
getSsl($environment_id): \Acquia\CloudApi\Model\Ssl
```

Returns the SSL settings for this environment.

Returns the SSL settings for this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->getSsl($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->getSsl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Ssl**](../Model/Ssl.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postActivateCertificate()`

```php
postActivateCertificate($environment_id, $certificate_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Activates an SSL certificate.

Activates an SSL certificate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$certificate_id = 7; // int | An ID that uniquely identifies a certificate.

try {
    $result = $apiInstance->postActivateCertificate($environment_id, $certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postActivateCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **certificate_id** | **int**| An ID that uniquely identifies a certificate. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCdnByEnvironmentId()`

```php
postCdnByEnvironmentId($environment_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Enables a CDN for an environment.

Enables a CDN for an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->postCdnByEnvironmentId($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postCdnByEnvironmentId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCertificate()`

```php
postCertificate($environment_id, $post_certificate): \Acquia\CloudApi\Model\MessageWithLinks
```

Install an SSL certificate.

Install a new SSL certificate on this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_certificate = {"legacy":false,"certificate":"-----BEGIN CERTIFICATE-----abc123....-----END CERTIFICATE-----","private_key":"-----BEGIN RSA PRIVATE KEY-----secret....-----END RSA PRIVATE KEY-----","ca_certificates":"-----BEGIN CERTIFICATE-----123abc....-----END CERTIFICATE-----","csr_id":123,"label":"My New Cert"}; // \Acquia\CloudApi\Model\PostCertificate

try {
    $result = $apiInstance->postCertificate($environment_id, $post_certificate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_certificate** | [**\Acquia\CloudApi\Model\PostCertificate**](../Model/PostCertificate.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postCertificateSigningRequest()`

```php
postCertificateSigningRequest($environment_id, $post_csr): \Acquia\CloudApi\Model\Message
```

Generates a certificate signing request (CSR) for one or more domains.

Generates a CSR for one or more domains.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_csr = {"country":"CA","state":"Ontario","locality":"Toronto","organization":"Acquia","organizational_unit":"Networking","common_name":"www.example.com","alternate_names":["www2.example.com","www3.example.com"]}; // \Acquia\CloudApi\Model\PostCsr

try {
    $result = $apiInstance->postCertificateSigningRequest($environment_id, $post_csr);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postCertificateSigningRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_csr** | [**\Acquia\CloudApi\Model\PostCsr**](../Model/PostCsr.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postChangeEnvironmentLabel()`

```php
postChangeEnvironmentLabel($environment_id, $post_change_environment_label_request): \Acquia\CloudApi\Model\Message
```

Change the label for an environment.

Change the label for an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_change_environment_label_request = {"label":"New Label"}; // \Acquia\CloudApi\Model\PostChangeEnvironmentLabelRequest

try {
    $result = $apiInstance->postChangeEnvironmentLabel($environment_id, $post_change_environment_label_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postChangeEnvironmentLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_change_environment_label_request** | [**\Acquia\CloudApi\Model\PostChangeEnvironmentLabelRequest**](../Model/PostChangeEnvironmentLabelRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDeactivateCertificate()`

```php
postDeactivateCertificate($environment_id, $certificate_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Deactivates an active SSL certificate.

Deactivates an active SSL certificate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$certificate_id = 7; // int | An ID that uniquely identifies a certificate.

try {
    $result = $apiInstance->postDeactivateCertificate($environment_id, $certificate_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postDeactivateCertificate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **certificate_id** | **int**| An ID that uniquely identifies a certificate. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postDeployArtifact()`

```php
postDeployArtifact($environment_id, $post_deploy_artifact_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Deploys an artifact to this environment.

Deploys an artifact to this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_deploy_artifact_request = {"artifact_id":123}; // \Acquia\CloudApi\Model\PostDeployArtifactRequest

try {
    $result = $apiInstance->postDeployArtifact($environment_id, $post_deploy_artifact_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postDeployArtifact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_deploy_artifact_request** | [**\Acquia\CloudApi\Model\PostDeployArtifactRequest**](../Model/PostDeployArtifactRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentCloudActionsDisable()`

```php
postEnvironmentCloudActionsDisable($environment_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Disables Cloud Actions.

Disables Cloud Actions on an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->postEnvironmentCloudActionsDisable($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentCloudActionsDisable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentCloudActionsEnable()`

```php
postEnvironmentCloudActionsEnable($environment_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Enables Cloud Actions.

Enables Cloud Actions on an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->postEnvironmentCloudActionsEnable($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentCloudActionsEnable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentCloudActionsReset()`

```php
postEnvironmentCloudActionsReset($environment_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Resets Cloud Actions.

Resets Cloud Actions to the default on an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->postEnvironmentCloudActionsReset($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentCloudActionsReset: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentCronDelete()`

```php
postEnvironmentCronDelete($environment_id, $cron_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Deletes a cron job.

Deletes a cron job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$cron_id = e10a665c-c9ec-4422-a82b-b32c82329f9d; // string | An ID that uniquely identifies a cron job.

try {
    $result = $apiInstance->postEnvironmentCronDelete($environment_id, $cron_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentCronDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **cron_id** | **string**| An ID that uniquely identifies a cron job. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentCronDisable()`

```php
postEnvironmentCronDisable($environment_id, $cron_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Disables a cron job.

Disables a cron job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$cron_id = e10a665c-c9ec-4422-a82b-b32c82329f9d; // string | An ID that uniquely identifies a cron job.

try {
    $result = $apiInstance->postEnvironmentCronDisable($environment_id, $cron_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentCronDisable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **cron_id** | **string**| An ID that uniquely identifies a cron job. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentCronEnable()`

```php
postEnvironmentCronEnable($environment_id, $cron_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Enables a cron job.

Enables a cron job.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$cron_id = e10a665c-c9ec-4422-a82b-b32c82329f9d; // string | An ID that uniquely identifies a cron job.

try {
    $result = $apiInstance->postEnvironmentCronEnable($environment_id, $cron_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentCronEnable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **cron_id** | **string**| An ID that uniquely identifies a cron job. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentCrons()`

```php
postEnvironmentCrons($environment_id, $post_cron): \Acquia\CloudApi\Model\MessageWithLinks
```

Creates a scheduled job with cron.

Creates a scheduled job with cron on an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_cron = {"command":"/usr/local/bin/drush cc all","frequency":"*/30 * * * *","label":"My New Cron"}; // \Acquia\CloudApi\Model\PostCron

try {
    $result = $apiInstance->postEnvironmentCrons($environment_id, $post_cron);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentCrons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_cron** | [**\Acquia\CloudApi\Model\PostCron**](../Model/PostCron.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentEmailDisable()`

```php
postEnvironmentEmailDisable($environment_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Disables email for an environment.

Disables email for an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->postEnvironmentEmailDisable($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentEmailDisable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentEmailEnable()`

```php
postEnvironmentEmailEnable($environment_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Enables email for an environment.

Enables email for an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->postEnvironmentEmailEnable($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentEmailEnable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentSearchIndexes()`

```php
postEnvironmentSearchIndexes($environment_id, $post_environment_search_indexes_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Creates a search index for an environment.

Creates a search index for an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_environment_search_indexes_request = {"config_set_id":"ABCDE-1234.12345ab6c7e8f90g12i1jk234l56mn78","database_role":"example"}; // \Acquia\CloudApi\Model\PostEnvironmentSearchIndexesRequest

try {
    $result = $apiInstance->postEnvironmentSearchIndexes($environment_id, $post_environment_search_indexes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentSearchIndexes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_environment_search_indexes_request** | [**\Acquia\CloudApi\Model\PostEnvironmentSearchIndexesRequest**](../Model/PostEnvironmentSearchIndexesRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsClearCaches()`

```php
postEnvironmentsClearCaches($environment_id, $post_environments_clear_caches_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Clears the caches for one or more domains attached to this environment.

Clear caches for Varnish and Platform CDN (if Platform CDN is enabled).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_environments_clear_caches_request = {"domains":["domain1.example.com","domain2.example.com"]}; // \Acquia\CloudApi\Model\PostEnvironmentsClearCachesRequest

try {
    $result = $apiInstance->postEnvironmentsClearCaches($environment_id, $post_environments_clear_caches_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsClearCaches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_environments_clear_caches_request** | [**\Acquia\CloudApi\Model\PostEnvironmentsClearCachesRequest**](../Model/PostEnvironmentsClearCachesRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsDatabaseBackups()`

```php
postEnvironmentsDatabaseBackups($environment_id, $database_name): \Acquia\CloudApi\Model\MessageWithLinks
```

Create a backup.

Create a backup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$database_name = my_db; // string | The database name, typically lower snake case.

try {
    $result = $apiInstance->postEnvironmentsDatabaseBackups($environment_id, $database_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsDatabaseBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **database_name** | **string**| The database name, typically lower snake case. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsDatabaseRestoreBackup()`

```php
postEnvironmentsDatabaseRestoreBackup($environment_id, $database_name, $backup_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Restores this backup to the appropriate environment's database.

Restores this backup to the appropriate environment's database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$database_name = my_db; // string | The database name, typically lower snake case.
$backup_id = 1; // int | The database backup identifier.

try {
    $result = $apiInstance->postEnvironmentsDatabaseRestoreBackup($environment_id, $database_name, $backup_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsDatabaseRestoreBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **database_name** | **string**| The database name, typically lower snake case. | |
| **backup_id** | **int**| The database backup identifier. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsDatabases()`

```php
postEnvironmentsDatabases($environment_id, $post_environments_databases_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Copies a database to this environment.

Copies a database to this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_environments_databases_request = {"name":"db_name","source":"14-0c7e79ab-1c4a-424e-8446-76ae8be7e851"}; // \Acquia\CloudApi\Model\PostEnvironmentsDatabasesRequest

try {
    $result = $apiInstance->postEnvironmentsDatabases($environment_id, $post_environments_databases_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsDatabases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_environments_databases_request** | [**\Acquia\CloudApi\Model\PostEnvironmentsDatabasesRequest**](../Model/PostEnvironmentsDatabasesRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsDeployCode()`

```php
postEnvironmentsDeployCode($environment_id, $deploy_code_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Deploys code to this environment.

Deploys code to this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$deploy_code_request = {"source":"14-0c7e79ab-1c4a-424e-8446-76ae8be7e851","message":"Optional commit message","cloud-actions":[]}; // \Acquia\CloudApi\Model\DeployCodeRequest

try {
    $result = $apiInstance->postEnvironmentsDeployCode($environment_id, $deploy_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsDeployCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **deploy_code_request** | [**\Acquia\CloudApi\Model\DeployCodeRequest**](../Model/DeployCodeRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsDisableLiveDev()`

```php
postEnvironmentsDisableLiveDev($environment_id, $post_environments_disable_live_dev_request): \Acquia\CloudApi\Model\Message
```

Disable Live Development on this environment.

Disable Live Development on this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_environments_disable_live_dev_request = {"discard":1}; // \Acquia\CloudApi\Model\PostEnvironmentsDisableLiveDevRequest

try {
    $result = $apiInstance->postEnvironmentsDisableLiveDev($environment_id, $post_environments_disable_live_dev_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsDisableLiveDev: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_environments_disable_live_dev_request** | [**\Acquia\CloudApi\Model\PostEnvironmentsDisableLiveDevRequest**](../Model/PostEnvironmentsDisableLiveDevRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsDisableLogForwardingDestination()`

```php
postEnvironmentsDisableLogForwardingDestination($environment_id, $log_forwarding_destination_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Disables the specified log forwarding destination.

Disables the specified log forwarding destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$log_forwarding_destination_uuid = dbd8a966-2b25-11e9-b210-d663bd873d93; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->postEnvironmentsDisableLogForwardingDestination($environment_id, $log_forwarding_destination_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsDisableLogForwardingDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **log_forwarding_destination_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsDisableProductionMode()`

```php
postEnvironmentsDisableProductionMode($environment_id): \Acquia\CloudApi\Model\Message
```

Disables production mode for an environment.

Removes protection from a production environment, taking it out of production mode.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->postEnvironmentsDisableProductionMode($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsDisableProductionMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsDomainClearCaches()`

```php
postEnvironmentsDomainClearCaches($environment_id, $domain): \Acquia\CloudApi\Model\MessageWithLinks
```

Clears the caches for the specified domain.

Clear caches for Varnish and Platform CDN (if Platform CDN is enabled).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$domain = example.com; // string | A domain name.

try {
    $result = $apiInstance->postEnvironmentsDomainClearCaches($environment_id, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsDomainClearCaches: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **domain** | **string**| A domain name. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsDomainClearVarnish()`

```php
postEnvironmentsDomainClearVarnish($environment_id, $domain): \Acquia\CloudApi\Model\MessageWithLinks
```

Clears the Varnish cache for the specified domain.

Clears the Varnish cache for the specified domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$domain = example.com; // string | A domain name.

try {
    $result = $apiInstance->postEnvironmentsDomainClearVarnish($environment_id, $domain);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsDomainClearVarnish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **domain** | **string**| A domain name. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsDomains()`

```php
postEnvironmentsDomains($environment_id, $post_environments_domains_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Adds a domain to the environment.

Adds a domain to the environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_environments_domains_request = {"hostname":"example.com"}; // \Acquia\CloudApi\Model\PostEnvironmentsDomainsRequest

try {
    $result = $apiInstance->postEnvironmentsDomains($environment_id, $post_environments_domains_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsDomains: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_environments_domains_request** | [**\Acquia\CloudApi\Model\PostEnvironmentsDomainsRequest**](../Model/PostEnvironmentsDomainsRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsDomainsClearVarnish()`

```php
postEnvironmentsDomainsClearVarnish($environment_id, $post_environments_domains_clear_varnish_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Clears the Varnish cache for one or more domains attached to this environment.

Clears the Varnish cache for one or more domains attached to this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_environments_domains_clear_varnish_request = {"domains":["domain1.example.com","domain2.example.com"]}; // \Acquia\CloudApi\Model\PostEnvironmentsDomainsClearVarnishRequest

try {
    $result = $apiInstance->postEnvironmentsDomainsClearVarnish($environment_id, $post_environments_domains_clear_varnish_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsDomainsClearVarnish: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_environments_domains_clear_varnish_request** | [**\Acquia\CloudApi\Model\PostEnvironmentsDomainsClearVarnishRequest**](../Model/PostEnvironmentsDomainsClearVarnishRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsEnableLiveDev()`

```php
postEnvironmentsEnableLiveDev($environment_id): \Acquia\CloudApi\Model\Message
```

Enable Live Development on this environment.

Enable Live Development on this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->postEnvironmentsEnableLiveDev($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsEnableLiveDev: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsEnableLogForwardingDestination()`

```php
postEnvironmentsEnableLogForwardingDestination($environment_id, $log_forwarding_destination_uuid): \Acquia\CloudApi\Model\MessageWithLinks
```

Enables the specified log forwarding destination.

Enables the specified log forwarding destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$log_forwarding_destination_uuid = dbd8a966-2b25-11e9-b210-d663bd873d93; // string | The entity's universally unique identifier.

try {
    $result = $apiInstance->postEnvironmentsEnableLogForwardingDestination($environment_id, $log_forwarding_destination_uuid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsEnableLogForwardingDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **log_forwarding_destination_uuid** | **string**| The entity&#39;s universally unique identifier. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsEnableProductionMode()`

```php
postEnvironmentsEnableProductionMode($environment_id): \Acquia\CloudApi\Model\Message
```

Enables production mode for an environment.

Enables production mode for an environment. While production mode is enabled, files and databases cannot be copied to the production environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->postEnvironmentsEnableProductionMode($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsEnableProductionMode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsFiles()`

```php
postEnvironmentsFiles($environment_id, $post_environments_files_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Copies files to this environment.

Copies files to this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_environments_files_request = {"source":"14-0c7e79ab-1c4a-424e-8446-76ae8be7e851"}; // \Acquia\CloudApi\Model\PostEnvironmentsFilesRequest

try {
    $result = $apiInstance->postEnvironmentsFiles($environment_id, $post_environments_files_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsFiles: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_environments_files_request** | [**\Acquia\CloudApi\Model\PostEnvironmentsFilesRequest**](../Model/PostEnvironmentsFilesRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsImportSite()`

```php
postEnvironmentsImportSite($environment_id, $import_site_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Imports a site to this environment.

Imports a site to this environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$import_site_request = {"url":"http://www.example.com/path/to/site.tar.gz","name":"Drupal 8"}; // \Acquia\CloudApi\Model\ImportSiteRequest

try {
    $result = $apiInstance->postEnvironmentsImportSite($environment_id, $import_site_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsImportSite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **import_site_request** | [**\Acquia\CloudApi\Model\ImportSiteRequest**](../Model/ImportSiteRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsLog()`

```php
postEnvironmentsLog($environment_id, $log_type, $post_environments_log_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Creates a log file snapshot.

Creates a log file snapshot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$log_type = php-error; // string | An ID that uniquely identifies a log type.
$post_environments_log_request = {"from":"2021-01-28T22:45:21+00:00","to":"2021-01-29T23:55:21+00:00"}; // \Acquia\CloudApi\Model\PostEnvironmentsLogRequest

try {
    $result = $apiInstance->postEnvironmentsLog($environment_id, $log_type, $post_environments_log_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **log_type** | **string**| An ID that uniquely identifies a log type. | |
| **post_environments_log_request** | [**\Acquia\CloudApi\Model\PostEnvironmentsLogRequest**](../Model/PostEnvironmentsLogRequest.md)|  | [optional] |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/hal+json`
- **Accept**: `application/hal+json`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsLogForwardingDestinations()`

```php
postEnvironmentsLogForwardingDestinations($environment_id, $post_environments_log_forwarding_destinations_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Creates a log forwarding destination.

Creates a log forwarding destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_environments_log_forwarding_destinations_request = {"label":"Test destination","sources":["apache-access","apache-error"],"consumer":"syslog","credentials":{"certificate":"-----BEGIN CERTIFICATE-----...-----END CERTIFICATE-----"},"address":"example.com:1234"}; // \Acquia\CloudApi\Model\PostEnvironmentsLogForwardingDestinationsRequest

try {
    $result = $apiInstance->postEnvironmentsLogForwardingDestinations($environment_id, $post_environments_log_forwarding_destinations_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsLogForwardingDestinations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_environments_log_forwarding_destinations_request** | [**\Acquia\CloudApi\Model\PostEnvironmentsLogForwardingDestinationsRequest**](../Model/PostEnvironmentsLogForwardingDestinationsRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsServerReboot()`

```php
postEnvironmentsServerReboot($environment_id, $server_id): \Acquia\CloudApi\Model\Message
```

Reboots a server.

Reboots a server. This will cause all applications on this server to be unavailable while the server reboots.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$server_id = 42; // string | The internal database identifier of the server.

try {
    $result = $apiInstance->postEnvironmentsServerReboot($environment_id, $server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsServerReboot: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **server_id** | **string**| The internal database identifier of the server. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsServerRelaunch()`

```php
postEnvironmentsServerRelaunch($environment_id, $server_id): \Acquia\CloudApi\Model\Message
```

Relaunches a server.

Relaunches a server. This will cause all applications on this server to be unavailable while the server relaunches.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$server_id = 42; // string | The internal database identifier of the server.

try {
    $result = $apiInstance->postEnvironmentsServerRelaunch($environment_id, $server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsServerRelaunch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **server_id** | **string**| The internal database identifier of the server. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsServerSuspend()`

```php
postEnvironmentsServerSuspend($environment_id, $server_id): \Acquia\CloudApi\Model\Message
```

Suspends a server.

Suspends a server. The server will no longer respond to web requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$server_id = 42; // string | The internal database identifier of the server.

try {
    $result = $apiInstance->postEnvironmentsServerSuspend($environment_id, $server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsServerSuspend: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **server_id** | **string**| The internal database identifier of the server. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsServerUpgrade()`

```php
postEnvironmentsServerUpgrade($environment_id, $server_id): \Acquia\CloudApi\Model\Message
```

Upgrades a server from \"precise\" to \"xenial\".

Upgrades a server from \"precise\" to \"xenial\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$server_id = 42; // string | The internal database identifier of the server.

try {
    $result = $apiInstance->postEnvironmentsServerUpgrade($environment_id, $server_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsServerUpgrade: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **server_id** | **string**| The internal database identifier of the server. | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsSwitchCode()`

```php
postEnvironmentsSwitchCode($environment_id, $switch_code_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Switches code on this environment to a different branch or release tag.

Switches code on this environment to a different branch or release tag.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$switch_code_request = {"branch":"my-feature-branch","cloud-actions":[]}; // \Acquia\CloudApi\Model\SwitchCodeRequest

try {
    $result = $apiInstance->postEnvironmentsSwitchCode($environment_id, $switch_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsSwitchCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **switch_code_request** | [**\Acquia\CloudApi\Model\SwitchCodeRequest**](../Model/SwitchCodeRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postEnvironmentsVariables()`

```php
postEnvironmentsVariables($environment_id, $post_environments_variables_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Adds a new environment variable to an environment.

Adds a new environment variable to an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_environments_variables_request = {"name":"APP_KEY","value":"aaaabbbbccccddddeee"}; // \Acquia\CloudApi\Model\PostEnvironmentsVariablesRequest

try {
    $result = $apiInstance->postEnvironmentsVariables($environment_id, $post_environments_variables_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postEnvironmentsVariables: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_environments_variables_request** | [**\Acquia\CloudApi\Model\PostEnvironmentsVariablesRequest**](../Model/PostEnvironmentsVariablesRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postMigrateEnvironment()`

```php
postMigrateEnvironment($environment_id, $post_migrate_environment_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Create a Migrate Environment using the provided environment as its source.

Create a Migrate Environment using the provided environment as its source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_migrate_environment_request = {"label":"Migrate Environment","config":true}; // \Acquia\CloudApi\Model\PostMigrateEnvironmentRequest

try {
    $result = $apiInstance->postMigrateEnvironment($environment_id, $post_migrate_environment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postMigrateEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_migrate_environment_request** | [**\Acquia\CloudApi\Model\PostMigrateEnvironmentRequest**](../Model/PostMigrateEnvironmentRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postPromoteEnvironment()`

```php
postPromoteEnvironment($environment_id, $post_promote_environment_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Promote a Migrate Environment.

Promote a Migrate Environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$post_promote_environment_request = {"target":"6a534a67-2d89-406d-95c8-efb515342983"}; // \Acquia\CloudApi\Model\PostPromoteEnvironmentRequest

try {
    $result = $apiInstance->postPromoteEnvironment($environment_id, $post_promote_environment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postPromoteEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **post_promote_environment_request** | [**\Acquia\CloudApi\Model\PostPromoteEnvironmentRequest**](../Model/PostPromoteEnvironmentRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postRefreshEnvironment()`

```php
postRefreshEnvironment($environment_id): \Acquia\CloudApi\Model\MessageWithLinks
```

Refreshes a Migrate Environment.

Refreshes a Migrate Environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.

try {
    $result = $apiInstance->postRefreshEnvironment($environment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->postRefreshEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putCron()`

```php
putCron($environment_id, $cron_id, $put_cron): \Acquia\CloudApi\Model\MessageWithLinks
```

Modify an existing scheduled job.

Modify an existing scheduled job on an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$cron_id = e10a665c-c9ec-4422-a82b-b32c82329f9d; // string | An ID that uniquely identifies a cron job.
$put_cron = {"command":"/usr/local/bin/drush7 cc all","frequency":"*/5 * * * *"}; // \Acquia\CloudApi\Model\PutCron

try {
    $result = $apiInstance->putCron($environment_id, $cron_id, $put_cron);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->putCron: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **cron_id** | **string**| An ID that uniquely identifies a cron job. | |
| **put_cron** | [**\Acquia\CloudApi\Model\PutCron**](../Model/PutCron.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEnvironment()`

```php
putEnvironment($environment_id, $environment_configurations): \Acquia\CloudApi\Model\MessageWithLinks
```

Modifies configuration settings for an environment.

Modifies configuration settings for an environment. Note that some settings cannot be configured for certain subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$environment_configurations = {"version":"8.0","max_execution_time":10,"memory_limit":192,"apcu":8,"max_input_vars":1000,"max_post_size":256,"memcached_limit":128}; // \Acquia\CloudApi\Model\EnvironmentConfigurations

try {
    $result = $apiInstance->putEnvironment($environment_id, $environment_configurations);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->putEnvironment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **environment_configurations** | [**\Acquia\CloudApi\Model\EnvironmentConfigurations**](../Model/EnvironmentConfigurations.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEnvironmentCloudActions()`

```php
putEnvironmentCloudActions($environment_id, $put_cloud_actions): \Acquia\CloudApi\Model\MessageWithLinks
```

Modifies an existing list of Cloud Actions.

Modifies an existing list of Cloud Actions on an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$put_cloud_actions = {"cloud-actions":{"fb4aa87a-8be2-42c6-bdf0-ef9d09a3de70":true,"9440be70-c042-47ae-9134-e85acbbd6edf":false}}; // \Acquia\CloudApi\Model\PutCloudActions

try {
    $result = $apiInstance->putEnvironmentCloudActions($environment_id, $put_cloud_actions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->putEnvironmentCloudActions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **put_cloud_actions** | [**\Acquia\CloudApi\Model\PutCloudActions**](../Model/PutCloudActions.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEnvironmentSearchIndex()`

```php
putEnvironmentSearchIndex($environment_id, $index_id, $put_environment_search_index_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Updates a search index on an environment.

Updates a search index on an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$index_id = ABCDE-1234.test.example; // string | An ID that uniquely identifies an index.
$put_environment_search_index_request = {"config_set_id":"ABCDE-1234.12345ab6c7e8f90g12i1jk234l56mn78"}; // \Acquia\CloudApi\Model\PutEnvironmentSearchIndexRequest

try {
    $result = $apiInstance->putEnvironmentSearchIndex($environment_id, $index_id, $put_environment_search_index_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->putEnvironmentSearchIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **index_id** | **string**| An ID that uniquely identifies an index. | |
| **put_environment_search_index_request** | [**\Acquia\CloudApi\Model\PutEnvironmentSearchIndexRequest**](../Model/PutEnvironmentSearchIndexRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEnvironmentsLogForwardingDestination()`

```php
putEnvironmentsLogForwardingDestination($environment_id, $log_forwarding_destination_uuid, $put_environments_log_forwarding_destination_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Updates an environment's log forwarding destination.

Updates an environment's log forwarding destination.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$log_forwarding_destination_uuid = dbd8a966-2b25-11e9-b210-d663bd873d93; // string | The entity's universally unique identifier.
$put_environments_log_forwarding_destination_request = {"label":"Test destination","sources":["apache-access","apache-error"],"consumer":"syslog","credentials":{"certificate":"-----BEGIN CERTIFICATE-----...-----END CERTIFICATE-----"},"address":"example.com:1234"}; // \Acquia\CloudApi\Model\PutEnvironmentsLogForwardingDestinationRequest

try {
    $result = $apiInstance->putEnvironmentsLogForwardingDestination($environment_id, $log_forwarding_destination_uuid, $put_environments_log_forwarding_destination_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->putEnvironmentsLogForwardingDestination: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **log_forwarding_destination_uuid** | **string**| The entity&#39;s universally unique identifier. | |
| **put_environments_log_forwarding_destination_request** | [**\Acquia\CloudApi\Model\PutEnvironmentsLogForwardingDestinationRequest**](../Model/PutEnvironmentsLogForwardingDestinationRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEnvironmentsServer()`

```php
putEnvironmentsServer($environment_id, $server_id, $put_environments_server_request): \Acquia\CloudApi\Model\Message
```

Modifies configuration settings for a server.

Modifies configuration settings for a server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: OAuth2
$config = Acquia\CloudApi\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$server_id = 42; // string | The internal database identifier of the server.
$put_environments_server_request = {"memcache":128}; // \Acquia\CloudApi\Model\PutEnvironmentsServerRequest

try {
    $result = $apiInstance->putEnvironmentsServer($environment_id, $server_id, $put_environments_server_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->putEnvironmentsServer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **server_id** | **string**| The internal database identifier of the server. | |
| **put_environments_server_request** | [**\Acquia\CloudApi\Model\PutEnvironmentsServerRequest**](../Model/PutEnvironmentsServerRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\Message**](../Model/Message.md)

### Authorization

[OAuth2](../../README.md#OAuth2)

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putEnvironmentsVariable()`

```php
putEnvironmentsVariable($environment_id, $environment_variable_name, $put_environments_variable_request): \Acquia\CloudApi\Model\MessageWithLinks
```

Updates an environment variable on an environment.

Updates an environment variable on an environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Acquia\CloudApi\Api\EnvironmentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$environment_id = 12-d314739e-296f-11e9-b210-d663bd873d93; // string | The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID.
$environment_variable_name = EXAMPLE_VARIABLE_NAME; // string | The environment variable name.
$put_environments_variable_request = {"value":"aaaabbbbccccddddeee"}; // \Acquia\CloudApi\Model\PutEnvironmentsVariableRequest

try {
    $result = $apiInstance->putEnvironmentsVariable($environment_id, $environment_variable_name, $put_environments_variable_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnvironmentsApi->putEnvironmentsVariable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **environment_id** | **string**| The environment identifier. The identifier is a compound key consisting of the internal database ID of the environment and the application UUID. | |
| **environment_variable_name** | **string**| The environment variable name. | |
| **put_environments_variable_request** | [**\Acquia\CloudApi\Model\PutEnvironmentsVariableRequest**](../Model/PutEnvironmentsVariableRequest.md)|  | |

### Return type

[**\Acquia\CloudApi\Model\MessageWithLinks**](../Model/MessageWithLinks.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`, `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
