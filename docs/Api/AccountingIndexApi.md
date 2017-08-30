# isp-serverfarm\sevdesk\php-client\AccountingIndexApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAccountingIndex**](AccountingIndexApi.md#addAccountingIndex) | **POST** /AccountingIndex | Create a new accounting index
[**deleteAccountingIndex**](AccountingIndexApi.md#deleteAccountingIndex) | **DELETE** /AccountingIndex/{id} | Delete an existing accounting index
[**getAccountingIndexes**](AccountingIndexApi.md#getAccountingIndexes) | **GET** /AccountingIndex | Get an overview of all accounting indexes
[**updateAccountingIndex**](AccountingIndexApi.md#updateAccountingIndex) | **PUT** /AccountingIndex/{id} | Update an existing accounting index


# **addAccountingIndex**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingIndex addAccountingIndex($body)

Create a new accounting index

Calls AccountingIndex.php to add an accounting index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AccountingIndexApi();
$body = "keyword=&accountingType[id]=&accountingType[objectName]=AccountingType&taxType=default"; // string | To create an accounting index, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addAccountingIndex($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingIndexApi->addAccountingIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an accounting index, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingIndex**](../Model/ModelAccountingIndex.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountingIndex**
> deleteAccountingIndex($id)

Delete an existing accounting index

Calls AccountingIndex.php to delete an accounting index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AccountingIndexApi();
$id = 56; // int | id of the accounting index you want to delete

try {
    $api_instance->deleteAccountingIndex($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingIndexApi->deleteAccountingIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the accounting index you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountingIndexes**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingIndex getAccountingIndexes($limit, $offset, $embed)

Get an overview of all accounting indexes

Calls AccountingIndex.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AccountingIndexApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned accounting indexes start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getAccountingIndexes($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingIndexApi->getAccountingIndexes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned accounting indexes start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingIndex**](../Model/ModelAccountingIndex.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountingIndex**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingIndex updateAccountingIndex($id, $body)

Update an existing accounting index

Calls AccountingIndex.php to update an accounting index

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AccountingIndexApi();
$id = 56; // int | id of accounting index you want to update
$body = "body_example"; // string | Parameters which need to be updated. Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updateAccountingIndex($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingIndexApi->updateAccountingIndex: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of accounting index you want to update |
 **body** | **string**| Parameters which need to be updated. Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingIndex**](../Model/ModelAccountingIndex.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

