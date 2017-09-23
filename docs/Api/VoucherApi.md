# ispserverfarm\sevdesk\VoucherApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addVoucher**](VoucherApi.md#addVoucher) | **POST** /Voucher | Create a new voucher
[**deleteVoucher**](VoucherApi.md#deleteVoucher) | **DELETE** /Voucher/{id} | Delete an existing voucher
[**getVouchers**](VoucherApi.md#getVouchers) | **GET** /Voucher | Get an overview of all vouchers
[**saveVoucher**](VoucherApi.md#saveVoucher) | **POST** /Voucher/Factory/saveVoucher | Create a new voucher
[**updateVoucher**](VoucherApi.md#updateVoucher) | **PUT** /Voucher/{id} | Update an existing voucher
[**voucherBookAmount**](VoucherApi.md#voucherBookAmount) | **PUT** /Voucher/{id}/bookAmmount | Book an amount for a specified voucher
[**voucherChangeStatus**](VoucherApi.md#voucherChangeStatus) | **PUT** /Voucher/{id}/changeStatus | Change status of a specified voucher
[**voucherDeleteDocument**](VoucherApi.md#voucherDeleteDocument) | **DELETE** /Voucher/{id}/deleteDocument | Delete the document of an existing voucher
[**voucherExtractThumb**](VoucherApi.md#voucherExtractThumb) | **GET** /Voucher/Factory/extractThumb | Extract file thumb
[**voucherGetAccountingTypes**](VoucherApi.md#voucherGetAccountingTypes) | **GET** /Voucher/{id}/getAccountingTypes | Get the accounting types of a specified voucher
[**voucherGetCheckAccountTransactionLogs**](VoucherApi.md#voucherGetCheckAccountTransactionLogs) | **GET** /Voucher/{id}/getCheckAccountTransactionLogs | Get the check account transaction logs of a specified voucher
[**voucherGetCheckAccountTransactions**](VoucherApi.md#voucherGetCheckAccountTransactions) | **GET** /Voucher/{id}/getCheckAccountTransactions | Get the check account transactions of a specified voucher
[**voucherGetCurrency**](VoucherApi.md#voucherGetCurrency) | **GET** /Voucher/{id}/getCurrency | Get the currency of a specified voucher
[**voucherGetDebit**](VoucherApi.md#voucherGetDebit) | **GET** /Voucher/{id}/getDebit | Get unpaid amount of a specified voucher
[**voucherGetDelinquent**](VoucherApi.md#voucherGetDelinquent) | **GET** /Voucher/{id}/getDelinquent | Return if the voucher is delinquent
[**voucherGetDependingRecurringVouchers**](VoucherApi.md#voucherGetDependingRecurringVouchers) | **GET** /Voucher/{id}/getDependingRecurringVouchers | Get the depending recurring vouchers of a specified origin voucher
[**voucherGetDocumentImage**](VoucherApi.md#voucherGetDocumentImage) | **GET** /Voucher/{id}/getDocumentImage | Returns the base64 encoded preview content of the vouchers document
[**voucherGetTaxGroups**](VoucherApi.md#voucherGetTaxGroups) | **GET** /Voucher/{id}/getTaxGroupes | Get an overview of all vouchers
[**voucherMarkAsOpen**](VoucherApi.md#voucherMarkAsOpen) | **PUT** /Voucher/{id}/markAsOpen | Mark a specified voucher as open
[**voucherMarkAsPaid**](VoucherApi.md#voucherMarkAsPaid) | **PUT** /Voucher/{id}/markAsPaid | Mark a specified voucher as paid
[**voucherRefundAmount**](VoucherApi.md#voucherRefundAmount) | **PUT** /Voucher/{id}/refundAmmount | Refund an amount for a specified voucher
[**voucherUploadTempFile**](VoucherApi.md#voucherUploadTempFile) | **POST** /Voucher/Factory/uploadTempFile | Upload a temporary file to be used later


# **addVoucher**
> \ispserverfarm\sevdesk\sevDeskModel\ModelVoucher addVoucher($body)

Create a new voucher

Calls Voucher.php to create a voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$body = "voucherType=VOU&description=&status=&supplier[id]=&supplier[objectName]=Contact&voucherDate=&paymentDeadline=&taxType=default&creditDebit=C"; // string | To create a voucher, simply enter desired values after parameter= and remove the quotation marks.      Be aware that you can't use all the parameters included in the Model_Voucher, as creating a voucher involves other functions.      So for example, adding a sumNet/Gross/etc. does not work as they normally get their value from the product which is involved in the voucher      The product/part in this case is handled in the Model_VoucherPos which makes a call to Model_Part.

try {
    $result = $api_instance->addVoucher($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->addVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a voucher, simply enter desired values after parameter&#x3D; and remove the quotation marks.      Be aware that you can&#39;t use all the parameters included in the Model_Voucher, as creating a voucher involves other functions.      So for example, adding a sumNet/Gross/etc. does not work as they normally get their value from the product which is involved in the voucher      The product/part in this case is handled in the Model_VoucherPos which makes a call to Model_Part. |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelVoucher**](../Model/ModelVoucher.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteVoucher**
> deleteVoucher($id)

Delete an existing voucher

Calls the delete() function in Voucher.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of voucher you want to delete

try {
    $api_instance->deleteVoucher($id);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->deleteVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of voucher you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVouchers**
> \ispserverfarm\sevdesk\sevDeskModel\ModelVoucher getVouchers($limit, $offset, $embed)

Get an overview of all vouchers

Calls Voucher.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned vouchers start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getVouchers($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->getVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned vouchers start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelVoucher**](../Model/ModelVoucher.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveVoucher**
> \ispserverfarm\sevdesk\sevDeskModel\ModelVoucherFactory saveVoucher($body)

Create a new voucher

With the new version of sevdesk some models are not created by calling the Model.php directly but by calling the Factory.php because of better performance and flexibility.    Basically the model.php itself still constructs the model however new instances of the model are created trough the factory.php    So for example when you create a new voucher it wont be saved by a POST request with '/Voucher?para1=&...' but with the saveVoucher function in Factory.php 'Voucher/Factory/saveVoucher?para1='

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$body = "body_example"; // string | The saveVoucher function in Voucher/Factory.php combines both Voucher and VoucherPos with all their HTTP-methods.    It is now possible to **simultaneously** create a voucher with its position.    To simply (only) create a voucher you can use the given parameters and concatenate your values.    For also adding a voucher position refer to the **quick reference** below.    The parameters you find there are **needed** for creating a voucher position. Just concatenate them to the existing voucher parameters.    You can also find additional (optional) parameters in the **Models** section.    Quick reference:  * &voucherPosSave[0][accountingType][id]=  * &voucherPosSave[0][accountingType][objectName]=AccountingType  * &voucherPosSave[0][taxRate]=19  * &voucherPosSave[0][sum]=  * &voucherPosSave[0][objectName]=VoucherPos  * &voucherPosSave[0][mapAll]=true  * &voucherPosDelete=true/false <-- if you provide this parameter, you can delete a voucher position    You can also use additional parameters for creating a voucher in the same way by adding them in the format: **voucher[yourParameter]**

try {
    $result = $api_instance->saveVoucher($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->saveVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| The saveVoucher function in Voucher/Factory.php combines both Voucher and VoucherPos with all their HTTP-methods.    It is now possible to **simultaneously** create a voucher with its position.    To simply (only) create a voucher you can use the given parameters and concatenate your values.    For also adding a voucher position refer to the **quick reference** below.    The parameters you find there are **needed** for creating a voucher position. Just concatenate them to the existing voucher parameters.    You can also find additional (optional) parameters in the **Models** section.    Quick reference:  * &amp;voucherPosSave[0][accountingType][id]&#x3D;  * &amp;voucherPosSave[0][accountingType][objectName]&#x3D;AccountingType  * &amp;voucherPosSave[0][taxRate]&#x3D;19  * &amp;voucherPosSave[0][sum]&#x3D;  * &amp;voucherPosSave[0][objectName]&#x3D;VoucherPos  * &amp;voucherPosSave[0][mapAll]&#x3D;true  * &amp;voucherPosDelete&#x3D;true/false &lt;-- if you provide this parameter, you can delete a voucher position    You can also use additional parameters for creating a voucher in the same way by adding them in the format: **voucher[yourParameter]** |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelVoucherFactory**](../Model/ModelVoucherFactory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVoucher**
> \ispserverfarm\sevdesk\sevDeskModel\ModelVoucher updateVoucher($id, $body)

Update an existing voucher

Calls Voucher.php to update an existing voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create invoice.      Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updateVoucher($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->updateVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create invoice.      Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelVoucher**](../Model/ModelVoucher.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherBookAmount**
> voucherBookAmount($id, $body)

Book an amount for a specified voucher

Book an amount for the specified voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher for which you want to book an amount
$body = "body_example"; // string | To book an amount for your voucher, simply enter desired values after parameter= and remove the quotation marks.

try {
    $api_instance->voucherBookAmount($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherBookAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher for which you want to book an amount |
 **body** | **string**| To book an amount for your voucher, simply enter desired values after parameter&#x3D; and remove the quotation marks. | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherChangeStatus**
> voucherChangeStatus($id, $body)

Change status of a specified voucher

Change the status of the specified voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher of which you want to change the status
$body = "body_example"; // string | To change the status of your voucher, simply enter desired values after parameter= and remove the quotation marks.

try {
    $api_instance->voucherChangeStatus($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherChangeStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher of which you want to change the status |
 **body** | **string**| To change the status of your voucher, simply enter desired values after parameter&#x3D; and remove the quotation marks. | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherDeleteDocument**
> voucherDeleteDocument($id)

Delete the document of an existing voucher

Calls the deleteDocument() function in Voucher.php to delete the document of an existing voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher of which you want to delete the document

try {
    $api_instance->voucherDeleteDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherDeleteDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher of which you want to delete the document |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherExtractThumb**
> voucherExtractThumb($file_name)

Extract file thumb

Calls extractThumb() in Voucher/Factory.php to extract the thumb of the specified file

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$file_name = ""; // string | Name of the file of which you want to extract the thumb

try {
    $api_instance->voucherExtractThumb($file_name);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherExtractThumb: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file_name** | **string**| Name of the file of which you want to extract the thumb | [optional] [default to ]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherGetAccountingTypes**
> \ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType voucherGetAccountingTypes($id, $embed)

Get the accounting types of a specified voucher

Calls getAccountingTypes() in Voucher.php to get the accounting types of the specified voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher of which you want to get the accounting types
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->voucherGetAccountingTypes($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherGetAccountingTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher of which you want to get the accounting types |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelAccountingType**](../Model/ModelAccountingType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherGetCheckAccountTransactionLogs**
> voucherGetCheckAccountTransactionLogs($id, $embed)

Get the check account transaction logs of a specified voucher

Calls getCheckAccountTransactionLogs() in Voucher.php to get the check account transaction logs of the specified voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher of which you want to get the check account transaction logs
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $api_instance->voucherGetCheckAccountTransactionLogs($id, $embed);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherGetCheckAccountTransactionLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher of which you want to get the check account transaction logs |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherGetCheckAccountTransactions**
> voucherGetCheckAccountTransactions($id, $embed)

Get the check account transactions of a specified voucher

Calls getCheckAccountTransactions() in Voucher.php to get the check account transactions of the specified voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher of which you want to get the check account transactions
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $api_instance->voucherGetCheckAccountTransactions($id, $embed);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherGetCheckAccountTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher of which you want to get the check account transactions |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherGetCurrency**
> voucherGetCurrency($id)

Get the currency of a specified voucher

Calls getCurrency() in Voucher.php to get the currency of the specified voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher of which you want to get the currency

try {
    $api_instance->voucherGetCurrency($id);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherGetCurrency: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher of which you want to get the currency |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherGetDebit**
> voucherGetDebit($id)

Get unpaid amount of a specified voucher

Calls getDebit() in Voucher.php to get the unpaid amount of a specified voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher of which you want to get the unpaid amount

try {
    $api_instance->voucherGetDebit($id);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherGetDebit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher of which you want to get the unpaid amount |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherGetDelinquent**
> voucherGetDelinquent($id)

Return if the voucher is delinquent

Calls getDelinquent() in Voucher.php to get if the voucher is delinquent

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher of which you want to know if it is delinquent

try {
    $api_instance->voucherGetDelinquent($id);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherGetDelinquent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher of which you want to know if it is delinquent |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherGetDependingRecurringVouchers**
> \ispserverfarm\sevdesk\sevDeskModel\ModelVoucher voucherGetDependingRecurringVouchers($id, $embed)

Get the depending recurring vouchers of a specified origin voucher

Calls getDependingRecurringVouchers() in Voucher.php to get the depending recurring vouchers of the specified origin voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher of which you want to get the depending recurring vouchers
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->voucherGetDependingRecurringVouchers($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherGetDependingRecurringVouchers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher of which you want to get the depending recurring vouchers |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelVoucher**](../Model/ModelVoucher.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherGetDocumentImage**
> voucherGetDocumentImage($id)

Returns the base64 encoded preview content of the vouchers document

Calls getDocumentImage() in Voucher.php to return the base64 encoded preview content of the vouchers document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher of which you want to get the document image

try {
    $api_instance->voucherGetDocumentImage($id);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherGetDocumentImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher of which you want to get the document image |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherGetTaxGroups**
> voucherGetTaxGroups($id, $show_total_sum, $with_corrections)

Get an overview of all vouchers

Calls Voucher.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher you want to update
$show_total_sum = false; // bool | Define if you want to have the total sum of each tax group
$with_corrections = false; // bool | Define if you want to have the total sum with corrections

try {
    $api_instance->voucherGetTaxGroups($id, $show_total_sum, $with_corrections);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherGetTaxGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher you want to update |
 **show_total_sum** | **bool**| Define if you want to have the total sum of each tax group | [default to false]
 **with_corrections** | **bool**| Define if you want to have the total sum with corrections | [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherMarkAsOpen**
> \ispserverfarm\sevdesk\sevDeskModel\ModelVoucher voucherMarkAsOpen($id)

Mark a specified voucher as open

Mark the specified voucher as open

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher you want to mark as open

try {
    $result = $api_instance->voucherMarkAsOpen($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherMarkAsOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher you want to mark as open |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelVoucher**](../Model/ModelVoucher.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherMarkAsPaid**
> \ispserverfarm\sevdesk\sevDeskModel\ModelVoucher voucherMarkAsPaid($id, $body)

Mark a specified voucher as paid

Mark the specified voucher as paid

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher you want to mark as paid
$body = "body_example"; // string | Enter the date the voucher was paid here, using the format DD.MM.YYYY!

try {
    $result = $api_instance->voucherMarkAsPaid($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherMarkAsPaid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher you want to mark as paid |
 **body** | **string**| Enter the date the voucher was paid here, using the format DD.MM.YYYY! | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelVoucher**](../Model/ModelVoucher.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherRefundAmount**
> \ispserverfarm\sevdesk\sevDeskModel\ModelVoucherLog voucherRefundAmount($id, $body)

Refund an amount for a specified voucher

Refund an amount for the specified voucher

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$id = 56; // int | Id of the voucher for which you want to refund an amount
$body = "body_example"; // string | Enter the amount which should be refunded, the date of the refund (format DD.MM.YYYY) and if it should appear in the feed an remove the quotation marks!

try {
    $result = $api_instance->voucherRefundAmount($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherRefundAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the voucher for which you want to refund an amount |
 **body** | **string**| Enter the amount which should be refunded, the date of the refund (format DD.MM.YYYY) and if it should appear in the feed an remove the quotation marks! | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelVoucherLog**](../Model/ModelVoucherLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **voucherUploadTempFile**
> \ispserverfarm\sevdesk\sevDeskModel\ModelVoucherFactory voucherUploadTempFile($file)

Upload a temporary file to be used later

With the new version of sevdesk some models are not created by calling the Model.php directly but by calling the Factory.php because of better performance and flexibility.    Basically the model.php itself still constructs the model however new instances of the model are created trough the factory.php    So for example when you create a new voucher it wont be saved by a POST request with '/Voucher?para1=&...' but with the saveVoucher function in Factory.php 'Voucher/Factory/saveVoucher?para1='

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\VoucherApi();
$file = "/path/to/file.txt"; // \SplFileObject | file to upload

try {
    $result = $api_instance->voucherUploadTempFile($file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VoucherApi->voucherUploadTempFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| file to upload |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelVoucherFactory**](../Model/ModelVoucherFactory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

