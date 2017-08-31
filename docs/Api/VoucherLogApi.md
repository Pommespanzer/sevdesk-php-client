# ispserverfarm\sevdesk\php-client\VoucherLogApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addVoucherLogEntry**](VoucherLogApi.md#addVoucherLogEntry) | **POST** /VoucherLog | Create a new voucher log entry
[**deleteVoucherLogEntry**](VoucherLogApi.md#deleteVoucherLogEntry) | **DELETE** /VoucherLog/{id} | Delete an existing voucher log entry
[**getVoucherLog**](VoucherLogApi.md#getVoucherLog) | **GET** /VoucherLog | Get an overview of all voucher log entries
[**updateVoucherLogEntry**](VoucherLogApi.md#updateVoucherLogEntry) | **PUT** /VoucherLog/{id} | Update an existing voucher log entry


# **addVoucherLogEntry**
> \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelVoucherLog addVoucherLogEntry($body)

Create a new voucher log entry

Calls VoucherLog.php to create a voucher log entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\VoucherLogApi();
$body = "voucher[id]=&voucher[objectName]=Voucher&fromStatus=&toStatus=&amountPayed=&bookingDate="; // string | To create a voucher, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addVoucherLogEntry($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherLogApi->addVoucherLogEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a voucher, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelVoucherLog**](../Model/ModelVoucherLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVoucherLogEntry**
> deleteVoucherLogEntry($id)

Delete an existing voucher log entry

Calls the delete() function in VoucherLog.php to delete a voucher log entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\VoucherLogApi();
$id = 56; // int | Id of voucher log entry you want to delete

try {
    $api_instance->deleteVoucherLogEntry($id);
} catch (Exception $e) {
    echo 'Exception when calling VoucherLogApi->deleteVoucherLogEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of voucher log entry you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVoucherLog**
> \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelVoucherLog getVoucherLog($limit, $offset, $embed)

Get an overview of all voucher log entries

Calls VoucherLog.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\VoucherLogApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned voucher log entries start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getVoucherLog($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherLogApi->getVoucherLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned voucher log entries start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelVoucherLog**](../Model/ModelVoucherLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVoucherLogEntry**
> \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelVoucherLog updateVoucherLogEntry($id, $body)

Update an existing voucher log entry

Calls VoucherLog.php to update an existing voucher log entry

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\VoucherLogApi();
$id = 56; // int | Id of the voucher log entry you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create voucher log entry.    Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updateVoucherLogEntry($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherLogApi->updateVoucherLogEntry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher log entry you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create voucher log entry.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelVoucherLog**](../Model/ModelVoucherLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

