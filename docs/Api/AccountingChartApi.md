# ispserverfarm\sevdesk\phpclient\AccountingChartApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAccountingChart**](AccountingChartApi.md#addAccountingChart) | **POST** /AccountingChart | Create a new accounting chart
[**deleteAccountingChart**](AccountingChartApi.md#deleteAccountingChart) | **DELETE** /AccountingChart/{id} | Delete an existing accounting chart
[**getAccountingChart**](AccountingChartApi.md#getAccountingChart) | **GET** /AccountingChart | Get an overview of all accounting charts
[**updateAccountingChart**](AccountingChartApi.md#updateAccountingChart) | **PUT** /AccountingChart/{id} | Update an existing accounting chart


# **addAccountingChart**
> \ispserverfarm\sevdesk\phpclient\Model\ModelAccountingChart addAccountingChart($body)

Create a new accounting chart

Calls AccountingChart.php to add an accounting chart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\AccountingChartApi();
$body = "body_example"; // string | To create an accounting chart, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addAccountingChart($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingChartApi->addAccountingChart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an accounting chart, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelAccountingChart**](../Model/ModelAccountingChart.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountingChart**
> deleteAccountingChart($id)

Delete an existing accounting chart

Calls AccountingChart.php to delete an accounting chart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\AccountingChartApi();
$id = 56; // int | id of the accounting chart you want to delete

try {
    $api_instance->deleteAccountingChart($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingChartApi->deleteAccountingChart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the accounting chart you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountingChart**
> \ispserverfarm\sevdesk\phpclient\Model\ModelAccountingChart getAccountingChart($limit, $offset)

Get an overview of all accounting charts

Calls AccountingChart.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\AccountingChartApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned accounting charts start. Default is 0

try {
    $result = $api_instance->getAccountingChart($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingChartApi->getAccountingChart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned accounting charts start. Default is 0 | [optional] [default to 0]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelAccountingChart**](../Model/ModelAccountingChart.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountingChart**
> \ispserverfarm\sevdesk\phpclient\Model\ModelAccountingChart updateAccountingChart($id, $body)

Update an existing accounting chart

Calls AccountingChart.php to update an accounting chart

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\AccountingChartApi();
$id = 56; // int | id of accounting chart you want to update
$body = "body_example"; // string | Parameters which need to be updated. Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updateAccountingChart($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingChartApi->updateAccountingChart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of accounting chart you want to update |
 **body** | **string**| Parameters which need to be updated. Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelAccountingChart**](../Model/ModelAccountingChart.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

