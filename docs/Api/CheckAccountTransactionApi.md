# ispserverfarm\sevdesk\phpclient\CheckAccountTransactionApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCheckAccountTransaction**](CheckAccountTransactionApi.md#addCheckAccountTransaction) | **POST** /CheckAccountTransaction | Create a new check account transaction
[**checkAccountTransactionGetLog**](CheckAccountTransactionApi.md#checkAccountTransactionGetLog) | **GET** /CheckAccountTransaction/{id}/getLog | Get log of a specified check account transaction
[**checkAccountTransactionGetRemainingAmount**](CheckAccountTransactionApi.md#checkAccountTransactionGetRemainingAmount) | **GET** /CheckAccountTransaction/{id}/getRemainingAmount | Get invoice amount which is not assigned yet
[**deleteCheckAccountTransaction**](CheckAccountTransactionApi.md#deleteCheckAccountTransaction) | **DELETE** /CheckAccountTransaction/{id} | Delete an existing check account transaction
[**getCheckAccountTransactions**](CheckAccountTransactionApi.md#getCheckAccountTransactions) | **GET** /CheckAccountTransaction | Get an overview of all check account transactions
[**linkInvoiceToCheckAccountTransaction**](CheckAccountTransactionApi.md#linkInvoiceToCheckAccountTransaction) | **PUT** /CheckAccountTransaction/{id}/linkInvoice | link invoice to check account transaction
[**linkVoucherToCheckAccountTransaction**](CheckAccountTransactionApi.md#linkVoucherToCheckAccountTransaction) | **PUT** /CheckAccountTransaction/{id}/linkVoucher | link voucher to check account transaction
[**updateCheckAccountTransaction**](CheckAccountTransactionApi.md#updateCheckAccountTransaction) | **PUT** /CheckAccountTransaction/{id} | Update a existing check account transaction
[**updateCheckAccountTransactionStatus**](CheckAccountTransactionApi.md#updateCheckAccountTransactionStatus) | **PUT** /CheckAccountTransaction/{id}/changeStatus | Update status of a existing check account transaction


# **addCheckAccountTransaction**
> \ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransaction addCheckAccountTransaction($body)

Create a new check account transaction

Calls CheckAccountTransaction.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionApi();
$body = "valueDate=&amount=&paymtPurpose=&checkAccount[id]=&checkAccount[objectName]=CheckAccount"; // string | To create a check account transaction , simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addCheckAccountTransaction($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->addCheckAccountTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a check account transaction , simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransaction**](../Model/ModelCheckAccountTransaction.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAccountTransactionGetLog**
> \ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransactionLog checkAccountTransactionGetLog($id, $embed)

Get log of a specified check account transaction

Calls getLog() in CheckAccountTransaction.php to get the log of a specified check account transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionApi();
$id = 56; // int | Id of the check account transaction of which you want to get the log
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->checkAccountTransactionGetLog($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->checkAccountTransactionGetLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the check account transaction of which you want to get the log |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransactionLog**](../Model/ModelCheckAccountTransactionLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAccountTransactionGetRemainingAmount**
> checkAccountTransactionGetRemainingAmount($id)

Get invoice amount which is not assigned yet

Calls getRemainingAmount() in CheckAccountTransaction.php to get invoice amount which is not assigned yet.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionApi();
$id = 56; // int | Id of check account transaction you want to use

try {
    $api_instance->checkAccountTransactionGetRemainingAmount($id);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->checkAccountTransactionGetRemainingAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of check account transaction you want to use |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCheckAccountTransaction**
> deleteCheckAccountTransaction($id)

Delete an existing check account transaction

Calls the delete() function in CheckAccountTransaction.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionApi();
$id = 56; // int | id of check account transaction you want to delete

try {
    $api_instance->deleteCheckAccountTransaction($id);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->deleteCheckAccountTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of check account transaction you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckAccountTransactions**
> \ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransaction getCheckAccountTransactions($limit, $offset, $embed)

Get an overview of all check account transactions

Calls CheckAccountTransaction.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned check account transactions start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getCheckAccountTransactions($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->getCheckAccountTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned check account transactions start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransaction**](../Model/ModelCheckAccountTransaction.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkInvoiceToCheckAccountTransaction**
> \ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransaction linkInvoiceToCheckAccountTransaction($id, $body)

link invoice to check account transaction

Calls linkInvoice() in CheckAccountTransaction.php.      This will update the specified invoice as well as the status of the check account transaction!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionApi();
$id = 56; // int | id of check account transaction you want to update
$body = "body_example"; // string | Enter the id of the invoice you want to be linked after invoiceId= and remove the quotation marks.

try {
    $result = $api_instance->linkInvoiceToCheckAccountTransaction($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->linkInvoiceToCheckAccountTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of check account transaction you want to update |
 **body** | **string**| Enter the id of the invoice you want to be linked after invoiceId&#x3D; and remove the quotation marks. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransaction**](../Model/ModelCheckAccountTransaction.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **linkVoucherToCheckAccountTransaction**
> \ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransaction linkVoucherToCheckAccountTransaction($id, $body)

link voucher to check account transaction

Calls linkVoucher() in CheckAccountTransaction.php.      This will update the specified voucher as well as the status of the check account transaction!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionApi();
$id = 56; // int | id of check account transaction you want to update
$body = "body_example"; // string | Enter the id of the voucher you want to be linked after voucherId= and remove the quotation marks.

try {
    $result = $api_instance->linkVoucherToCheckAccountTransaction($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->linkVoucherToCheckAccountTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of check account transaction you want to update |
 **body** | **string**| Enter the id of the voucher you want to be linked after voucherId&#x3D; and remove the quotation marks. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransaction**](../Model/ModelCheckAccountTransaction.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCheckAccountTransaction**
> \ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransaction updateCheckAccountTransaction($id, $body)

Update a existing check account transaction

Calls CheckAccountTransaction.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionApi();
$id = 56; // int | id of check account transaction you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create check account transaction.    Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateCheckAccountTransaction($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->updateCheckAccountTransaction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of check account transaction you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create check account transaction.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransaction**](../Model/ModelCheckAccountTransaction.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCheckAccountTransactionStatus**
> \ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransaction updateCheckAccountTransactionStatus($id, $body)

Update status of a existing check account transaction

Calls changeStatus() in CheckAccountTransaction.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountTransactionApi();
$id = 56; // int | id of check account transaction you want to update
$body = "body_example"; // string | Enter your desired status after value= and remove the quotation marks

try {
    $result = $api_instance->updateCheckAccountTransactionStatus($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountTransactionApi->updateCheckAccountTransactionStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of check account transaction you want to update |
 **body** | **string**| Enter your desired status after value&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelCheckAccountTransaction**](../Model/ModelCheckAccountTransaction.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

