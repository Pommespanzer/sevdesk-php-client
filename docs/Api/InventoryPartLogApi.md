# ispserverfarm\sevdesk\phpclient\InventoryPartLogApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInventoryPartLog**](InventoryPartLogApi.md#addInventoryPartLog) | **POST** /InventoryPartLog | Create a new inventory part log
[**deleteInventoryPartLog**](InventoryPartLogApi.md#deleteInventoryPartLog) | **DELETE** /InventoryPartLog/{id} | Delete an existing inventory part log
[**getInventoryPartLog**](InventoryPartLogApi.md#getInventoryPartLog) | **GET** /InventoryPartLog | Get an overview of InventoryPartLog
[**getInventoryPartLogStock**](InventoryPartLogApi.md#getInventoryPartLogStock) | **GET** /InventoryPartLog/{id}/getStock | Get stock of inventory part involved in part log
[**updateInventoryPartLog**](InventoryPartLogApi.md#updateInventoryPartLog) | **PUT** /InventoryPartLog/{id} | Update an existing inventory part log


# **addInventoryPartLog**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInventoryPartLog addInventoryPartLog($body)

Create a new inventory part log

Calls InventoryPartLog.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InventoryPartLogApi();
$body = "part[id]=&part[objectName]=Part&ammount=&name=&supplier[id]=&supplier[objectName]=Contact&postingDate="; // string | To create a inventory part log, simply enter desired values after parameter= and remove the quotation marks!    Be aware that creating an inventory part log this way is not recommended as there is no real acquisition/dispatch of a part!

try {
    $result = $api_instance->addInventoryPartLog($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPartLogApi->addInventoryPartLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a inventory part log, simply enter desired values after parameter&#x3D; and remove the quotation marks!    Be aware that creating an inventory part log this way is not recommended as there is no real acquisition/dispatch of a part! |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInventoryPartLog**](../Model/ModelInventoryPartLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInventoryPartLog**
> deleteInventoryPartLog($id)

Delete an existing inventory part log

Calls the delete() function in InventoryPartLog.php    Be aware that this operations sets the stock of your part to the value it had before the acquisition/dispatch and deletes the corresponding feed!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InventoryPartLogApi();
$id = 56; // int | id of inventory part log you want to delete

try {
    $api_instance->deleteInventoryPartLog($id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPartLogApi->deleteInventoryPartLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of inventory part log you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryPartLog**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInventoryPartLog getInventoryPartLog($limit, $offset, $embed)

Get an overview of InventoryPartLog

Calls InventoryPartLog.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InventoryPartLogApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned part logs start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getInventoryPartLog($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPartLogApi->getInventoryPartLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned part logs start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInventoryPartLog**](../Model/ModelInventoryPartLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInventoryPartLogStock**
> getInventoryPartLogStock($id)

Get stock of inventory part involved in part log

Calls getStock() in InventoryPartLog.php to get the stock of the part involved in the part log

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InventoryPartLogApi();
$id = 56; // int | Id of inventory part log you want to get the stock from

try {
    $api_instance->getInventoryPartLogStock($id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPartLogApi->getInventoryPartLogStock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of inventory part log you want to get the stock from |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInventoryPartLog**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInventoryPartLog updateInventoryPartLog($id, $body)

Update an existing inventory part log

Calls InventoryPartLog.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InventoryPartLogApi();
$id = 56; // int | id of inventory part log you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create inventory part log.    Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks!    Be aware that updating an existing inventory part log is not recommended unless its for correcting wrong data in the database!

try {
    $result = $api_instance->updateInventoryPartLog($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPartLogApi->updateInventoryPartLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of inventory part log you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create inventory part log.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks!    Be aware that updating an existing inventory part log is not recommended unless its for correcting wrong data in the database! | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInventoryPartLog**](../Model/ModelInventoryPartLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

