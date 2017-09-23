# ispserverfarm\sevdesk\phpclient\CheckAccountTransactionLogApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCheckAccountTransactionLog**](CheckAccountTransactionLogApi.md#addCheckAccountTransactionLog) | **POST** /CheckAccountTransactionLog | Create a new logged check account transaction
[**deleteCheckAccountTransactionLog**](CheckAccountTransactionLogApi.md#deleteCheckAccountTransactionLog) | **DELETE** /CheckAccountTransactionLog/{id} | Delete an existing logged check account transaction
[**getCheckAccountTransactionLog**](CheckAccountTransactionLogApi.md#getCheckAccountTransactionLog) | **GET** /CheckAccountTransactionLog | Get an overview of all check account transactions which were logged
[**updateCheckAccountTransactionLog**](CheckAccountTransactionLogApi.md#updateCheckAccountTransactionLog) | **PUT** /CheckAccountTransactionLog/{id} | Update a existing logged check account transaction


# **addCheckAccountTransactionLog**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelCheckAccountTransactionLog addCheckAccountTransactionLog($body)

Create a new logged check account transaction

Calls CheckAccountTransactionLog.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionLogApi();
$body = "checkAccountTransaction[id]=&checkAccountTransaction[objectName]=CheckAccountTransaction&fromStatus=&toStatus=&bookingDate="; // string | To create a logged check account transaction , simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addCheckAccountTransactionLog($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionLogApi->addCheckAccountTransactionLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a logged check account transaction , simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelCheckAccountTransactionLog**](../Model/ModelCheckAccountTransactionLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCheckAccountTransactionLog**
> deleteCheckAccountTransactionLog($id)

Delete an existing logged check account transaction

Calls the delete() function in CheckAccountTransactionLog.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionLogApi();
$id = 56; // int | id of logged check account transaction you want to delete

try {
    $api_instance->deleteCheckAccountTransactionLog($id);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionLogApi->deleteCheckAccountTransactionLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of logged check account transaction you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckAccountTransactionLog**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelCheckAccountTransactionLog getCheckAccountTransactionLog($limit, $offset, $embed)

Get an overview of all check account transactions which were logged

Calls CheckAccountTransactionLog.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionLogApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned logged check account transactions start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getCheckAccountTransactionLog($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionLogApi->getCheckAccountTransactionLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned logged check account transactions start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelCheckAccountTransactionLog**](../Model/ModelCheckAccountTransactionLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCheckAccountTransactionLog**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelCheckAccountTransactionLog updateCheckAccountTransactionLog($id, $body)

Update a existing logged check account transaction

Calls CheckAccountTransactionLog.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionLogApi();
$id = 56; // int | id of logged check account transaction you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create check account transaction log.    Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateCheckAccountTransactionLog($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionLogApi->updateCheckAccountTransactionLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of logged check account transaction you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create check account transaction log.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelCheckAccountTransactionLog**](../Model/ModelCheckAccountTransactionLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

