# ispserverfarm\sevdesk\phpclient\AccountingCorrectionApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAccountingCorrection**](AccountingCorrectionApi.md#addAccountingCorrection) | **POST** /AccountingCorrection | Create a new accounting correction
[**deleteAccountingCorrection**](AccountingCorrectionApi.md#deleteAccountingCorrection) | **DELETE** /AccountingCorrection/{id} | Delete an existing accounting correction
[**getAccountingCorrections**](AccountingCorrectionApi.md#getAccountingCorrections) | **GET** /AccountingCorrection | Get an overview of all accounting corrections
[**updateAccountingCorrection**](AccountingCorrectionApi.md#updateAccountingCorrection) | **PUT** /AccountingCorrection/{id} | Update an existing accounting correction


# **addAccountingCorrection**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelAccountingCorrection addAccountingCorrection($body)

Create a new accounting correction

Calls AccountingCorrection.php to add an accounting correction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\AccountingCorrectionApi();
$body = "object[id]=&object[objectName]=&accountingType[id]=&accountingType[objectName]=AccountingType&ammount="; // string | To create an accounting correction, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addAccountingCorrection($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCorrectionApi->addAccountingCorrection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an accounting correction, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelAccountingCorrection**](../Model/ModelAccountingCorrection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountingCorrection**
> deleteAccountingCorrection($id)

Delete an existing accounting correction

Calls AccountingCorrection.php to delete an accounting correction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\AccountingCorrectionApi();
$id = 56; // int | id of the accounting correction you want to delete

try {
    $api_instance->deleteAccountingCorrection($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCorrectionApi->deleteAccountingCorrection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the accounting correction you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountingCorrections**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelAccountingCorrection getAccountingCorrections($limit, $offset, $embed)

Get an overview of all accounting corrections

Calls AccountingCorrection.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\AccountingCorrectionApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned accounting corrections start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getAccountingCorrections($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCorrectionApi->getAccountingCorrections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned accounting corrections start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelAccountingCorrection**](../Model/ModelAccountingCorrection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountingCorrection**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelAccountingCorrection updateAccountingCorrection($id, $body)

Update an existing accounting correction

Calls AccountingCorrection.php to update an accounting correction

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\AccountingCorrectionApi();
$id = 56; // int | id of accounting correction you want to update
$body = "body_example"; // string | Parameters which need to be updated. Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updateAccountingCorrection($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingCorrectionApi->updateAccountingCorrection: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of accounting correction you want to update |
 **body** | **string**| Parameters which need to be updated. Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelAccountingCorrection**](../Model/ModelAccountingCorrection.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

