# ispserverfarm\sevdesk\OrderLogApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderLog**](OrderLogApi.md#addOrderLog) | **POST** /OrderLog | Create a new order log
[**deleteOrderLog**](OrderLogApi.md#deleteOrderLog) | **DELETE** /OrderLog/{id} | Delete an existing order log
[**getOrderLogs**](OrderLogApi.md#getOrderLogs) | **GET** /OrderLog | Get an overview of order logs
[**updateOrderLog**](OrderLogApi.md#updateOrderLog) | **PUT** /OrderLog/{id} | Update an existing order log


# **addOrderLog**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrderLog addOrderLog($body)

Create a new order log

Calls OrderLog.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderLogApi();
$body = "date=&order[id]=&order[objectName]=Order&object[id]=&object[objectName]=&currency=EUR&amount=&taxRate=&amountType="; // string | To create an order log, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addOrderLog($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLogApi->addOrderLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an order log, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrderLog**](../Model/ModelOrderLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderLog**
> deleteOrderLog($id)

Delete an existing order log

Calls the delete() function in OrderLog.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderLogApi();
$id = 56; // int | Id of order log you want to delete

try {
    $api_instance->deleteOrderLog($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderLogApi->deleteOrderLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of order log you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderLogs**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrderLog getOrderLogs($limit, $offset, $embed)

Get an overview of order logs

Calls OrderLog.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderLogApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned order logs start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getOrderLogs($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLogApi->getOrderLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned order logs start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrderLog**](../Model/ModelOrderLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderLog**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrderLog updateOrderLog($id, $body)

Update an existing order log

Calls OrderLog.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderLogApi();
$id = 56; // int | Id of order log you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create order log.    Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks!

try {
    $result = $api_instance->updateOrderLog($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderLogApi->updateOrderLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of order log you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create order log.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks! | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrderLog**](../Model/ModelOrderLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

