# # ServerFlags

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**elastic_ip** | **bool** | Determines if the server has an elastic (static) IP or not. | [optional]
**active_web** | **bool** | Determines if the server is an active balancer or not. | [optional]
**active_bal** | **bool** | Determines if the server is an active web server or not. | [optional]
**primary_db** | **bool** | Determines if the server is the primary database.  Note that \&quot;false\&quot; does not imply that this is the secondary database. The server must be a database, and not primary in order to be the secondary database. | [optional]
**web** | **bool** | Determines if the server is a web server. | [optional]
**database** | **bool** | Determines if the server is a database server. | [optional]
**balancer** | **bool** | Determines if the server is a balancer. | [optional]
**fs** | **bool** | Determines if the server is a file server. | [optional]
**memcache** | **bool** | Determines if the server is a memcache server. | [optional]
**dedicated** | **bool** | Determines if the server is dedicated or shared. | [optional]
**self_service** | **bool** | Determines if the server is self-service. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
