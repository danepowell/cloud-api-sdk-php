# # EnvironmentConfigurations

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | The PHP or Node version. | [optional]
**memory_limit** | **int** | Limits PHP request memory usage in megabytes. | [optional] [default to 128]
**opcache** | **int** | This is the total amount of memory available for caching precompiled script bytecode per PHP/FPM process. | [optional] [default to 96]
**apcu** | **int** | APCu shared memory size per web server. | [optional] [default to 32]
**interned_strings_buffer** | **int** | Sets PHP Opcache key count per server. | [optional] [default to 8]
**max_execution_time** | **int** | Limits PHP request time in seconds. | [optional] [default to 300]
**max_post_size** | **int** | Sets the PHP limit on POST body size. | [optional] [default to 256]
**max_input_vars** | **int** | Limits the number of various request items in PHP. | [optional] [default to 1000]
**memcached_limit** | **int** | Sets the maximum amount of memory in MB that can be allocated to memcached. Only available on Acquia Cloud Next. | [optional] [default to 64]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
