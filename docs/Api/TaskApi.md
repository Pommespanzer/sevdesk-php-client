# ispserverfarm\sevdesk\php-client\TaskApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTask**](TaskApi.md#addTask) | **POST** /Task | Create a new task
[**deleteTask**](TaskApi.md#deleteTask) | **DELETE** /Task/{id} | Delete an existing task
[**getTasks**](TaskApi.md#getTasks) | **GET** /Task | Get an overview of all tasks
[**updateTask**](TaskApi.md#updateTask) | **PUT** /Task/{id} | Update an existing Task


# **addTask**
> \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelOrderPos addTask($body)

Create a new task

Calls Task.php to add a task

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\TaskApi();
$body = "name=&assigned[id]=&assigned[objectName]=SevUser&category[id]=38&category[objectName]=Category& createUser[id]=&createUser[objectName]=SevUser&noticeCreator=0&deadline=01.01.1997&status=100&object[id]=&object[objectName]="; // string | To create a task, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addTask($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->addTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a task, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelOrderPos**](../Model/ModelOrderPos.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTask**
> deleteTask($id)

Delete an existing task

TODO: Write backend documentation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\TaskApi();
$id = 56; // int | id of the task you want to delete

try {
    $api_instance->deleteTask($id);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->deleteTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the task you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTasks**
> \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelTask getTasks($limit, $offset, $embed)

Get an overview of all tasks

Calls Task.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\TaskApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned tasks start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getTasks($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->getTasks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned tasks start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelTask**](../Model/ModelTask.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTask**
> \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelTask updateTask($id, $body)

Update an existing Task

TODO: Enter short backend documentation here

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\TaskApi();
$id = 56; // int | id of task you want to update
$body = "name=&assigned[id]=&assigned[objectName]=SevUser&category[id]=38&category[objectName]=Category& createUser[id]=&createUser[objectName]=SevUser&noticeCreator=0&deadline=01.01.1997&status=100&object[id]=&object[objectName]="; // string | Parameters which need to be updated. Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updateTask($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaskApi->updateTask: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of task you want to update |
 **body** | **string**| Parameters which need to be updated. Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelTask**](../Model/ModelTask.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

