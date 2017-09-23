# ispserverfarm\sevdesk\ExportApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportContactCsv**](ExportApi.md#exportContactCsv) | **GET** /Export/contactCsv | Export the specified contact as csv
[**exportContactListCsv**](ExportApi.md#exportContactListCsv) | **GET** /Export/contactListCsv | Export the contact list as csv
[**exportDatev**](ExportApi.md#exportDatev) | **GET** /Export/datev | Datev export as zip with csv´s
[**exportDatevZip**](ExportApi.md#exportDatevZip) | **GET** /Export/datevZip | Export zip for voucher upload
[**exportInventoryPartLogList**](ExportApi.md#exportInventoryPartLogList) | **GET** /Export/inventoryPartLogListCsv | Export the inventory part log as csv
[**exportInvoiceCsv**](ExportApi.md#exportInvoiceCsv) | **GET** /Export/invoiceCsv | Export the invoice list as csv
[**exportInvoiceZip**](ExportApi.md#exportInvoiceZip) | **GET** /Export/invoiceZip | Export the invoice list as zip with csv´s
[**exportPartCsv**](ExportApi.md#exportPartCsv) | **GET** /Export/partCsv | Export the parts as csv
[**exportPebe**](ExportApi.md#exportPebe) | **GET** /Export/pebe | Pebe export as zip with csv´s
[**exportTransactionsCsv**](ExportApi.md#exportTransactionsCsv) | **GET** /Export/transactionsCsv | Export the transactions as csv
[**exportVoucherListCsv**](ExportApi.md#exportVoucherListCsv) | **GET** /Export/voucherListCsv | Export the voucher list as csv
[**exportVoucherZip**](ExportApi.md#exportVoucherZip) | **GET** /Export/voucherZip | Export the voucher list as zip with csv´s


# **exportContactCsv**
> \SplFileObject exportContactCsv($contact_id, $contact_object_name, $download)

Export the specified contact as csv

Calls contactCsv() in Export.php to export the specified contact as a csv.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ExportApi();
$contact_id = 56; // int | Id of the contact you want to export
$contact_object_name = "Contact"; // string | Model name which is exported
$download = true; // bool | Specifies if the document is downloaded

try {
    $result = $api_instance->exportContactCsv($contact_id, $contact_object_name, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportContactCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| Id of the contact you want to export |
 **contact_object_name** | **string**| Model name which is exported | [default to Contact]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportContactListCsv**
> \SplFileObject exportContactListCsv($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_filter_depth)

Export the contact list as csv

Calls contactListCsv() in Export.php to export the contact list as a csv.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ExportApi();
$sev_query_model_name = "Contact"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$download = true; // bool | Specifies if the document is downloaded
$sev_query_limit = 99999; // int | Limit exported contacts
$sev_query_filter_depth = true; // bool | Specify if companies and persons (true) or only persons (false) should be exported

try {
    $result = $api_instance->exportContactListCsv($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_filter_depth);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportContactListCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sev_query_model_name** | **string**| Model name which is exported | [default to Contact]
 **sev_query_object_name** | **string**| SevQuery object name | [default to SevQuery]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]
 **sev_query_limit** | **int**| Limit exported contacts | [optional] [default to 99999]
 **sev_query_filter_depth** | **bool**| Specify if companies and persons (true) or only persons (false) should be exported | [optional] [default to true]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportDatev**
> \SplFileObject exportDatev($scope, $start, $end, $with_enshrined, $enshrine, $download)

Datev export as zip with csv´s

Calls datev() in Export.php to export the datev as a csv.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ExportApi();
$scope = "IVDT"; // string | Define what you want to include in the datev export. This parameter takes a string of 4 letters. Each stands for a model that should be included.    Possible letters are: **'I'** (Invoices), **'V'** (Vouchers), **'D'** (Depreciations), **'T'** (Transactions).    By providing one of those letter you specify that it should be included in the datev export. Some combinations are: 'IVDT', 'IVT' ...
$start = ""; // string | Specify the start date for the datev export
$end = ""; // string | Specify the end date for the datev export
$with_enshrined = false; // bool | Specify if you want to include enshrined models
$enshrine = false; // bool | Specify if you want to enshrine all models which were included in the export
$download = true; // bool | Specifies if the document is downloaded

try {
    $result = $api_instance->exportDatev($scope, $start, $end, $with_enshrined, $enshrine, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportDatev: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scope** | **string**| Define what you want to include in the datev export. This parameter takes a string of 4 letters. Each stands for a model that should be included.    Possible letters are: **&#39;I&#39;** (Invoices), **&#39;V&#39;** (Vouchers), **&#39;D&#39;** (Depreciations), **&#39;T&#39;** (Transactions).    By providing one of those letter you specify that it should be included in the datev export. Some combinations are: &#39;IVDT&#39;, &#39;IVT&#39; ... | [default to IVDT]
 **start** | **string**| Specify the start date for the datev export | [default to ]
 **end** | **string**| Specify the end date for the datev export | [default to ]
 **with_enshrined** | **bool**| Specify if you want to include enshrined models | [default to false]
 **enshrine** | **bool**| Specify if you want to enshrine all models which were included in the export | [default to false]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportDatevZip**
> \SplFileObject exportDatevZip($scope, $start, $end, $with_enshrined, $download)

Export zip for voucher upload

Calls datevZip() in Export.php to export the zip for voucher upload.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ExportApi();
$scope = "IVDT"; // string | Define what you want to include in the zip export. This parameter takes a string of 4 letters. Each stands for a model that should be included.    Possible letters are: **'I'** (Invoices), **'V'** (Vouchers), **'D'** (Depreciations), **'T'** (Transactions).    By providing one of those letter you specify that it should be included in the datev export. Some combinations are: 'IVDT', 'IVT' ...
$start = ""; // string | Specify the start date for the zip export
$end = ""; // string | Specify the end date for the zip export
$with_enshrined = false; // bool | Specify if you want to include enshrined models
$download = true; // bool | Specifies if the document is downloaded

try {
    $result = $api_instance->exportDatevZip($scope, $start, $end, $with_enshrined, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportDatevZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scope** | **string**| Define what you want to include in the zip export. This parameter takes a string of 4 letters. Each stands for a model that should be included.    Possible letters are: **&#39;I&#39;** (Invoices), **&#39;V&#39;** (Vouchers), **&#39;D&#39;** (Depreciations), **&#39;T&#39;** (Transactions).    By providing one of those letter you specify that it should be included in the datev export. Some combinations are: &#39;IVDT&#39;, &#39;IVT&#39; ... | [default to IVDT]
 **start** | **string**| Specify the start date for the zip export | [default to ]
 **end** | **string**| Specify the end date for the zip export | [default to ]
 **with_enshrined** | **bool**| Specify if you want to include enshrined models | [default to false]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportInventoryPartLogList**
> \SplFileObject exportInventoryPartLogList($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_filter_part_id, $sev_query_filter_part_object_name)

Export the inventory part log as csv

Calls inventoryPartLogListCsv() in Export.php to export the inventory part log list as a csv.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ExportApi();
$sev_query_model_name = "InventoryPartLog"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$download = true; // bool | Specifies if the document is downloaded
$sev_query_limit = 99999; // int | Limit exported part log
$sev_query_filter_part_id = 56; // int | Id of the part for which you want to export the part log
$sev_query_filter_part_object_name = "Part"; // string | Object name of part

try {
    $result = $api_instance->exportInventoryPartLogList($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_filter_part_id, $sev_query_filter_part_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportInventoryPartLogList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sev_query_model_name** | **string**| Model name which is exported | [default to InventoryPartLog]
 **sev_query_object_name** | **string**| SevQuery object name | [default to SevQuery]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]
 **sev_query_limit** | **int**| Limit exported part log | [optional] [default to 99999]
 **sev_query_filter_part_id** | **int**| Id of the part for which you want to export the part log | [optional]
 **sev_query_filter_part_object_name** | **string**| Object name of part | [optional] [default to Part]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportInvoiceCsv**
> \SplFileObject exportInvoiceCsv($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit)

Export the invoice list as csv

Calls invoiceCsv() in Export.php to export the invoice list as a csv.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ExportApi();
$sev_query_model_name = "Invoice"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$download = true; // bool | Specifies if the document is downloaded
$sev_query_limit = 99999; // int | Limit exported invoices

try {
    $result = $api_instance->exportInvoiceCsv($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportInvoiceCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sev_query_model_name** | **string**| Model name which is exported | [default to Invoice]
 **sev_query_object_name** | **string**| SevQuery object name | [default to SevQuery]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]
 **sev_query_limit** | **int**| Limit exported invoices | [optional] [default to 99999]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportInvoiceZip**
> \SplFileObject exportInvoiceZip($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit)

Export the invoice list as zip with csv´s

Calls invoiceZip() in Export.php to export the invoice list as a zip with csv´s.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ExportApi();
$sev_query_model_name = "Invoice"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$download = true; // bool | Specifies if the document is downloaded
$sev_query_limit = 50; // int | Limit exported invoices

try {
    $result = $api_instance->exportInvoiceZip($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportInvoiceZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sev_query_model_name** | **string**| Model name which is exported | [default to Invoice]
 **sev_query_object_name** | **string**| SevQuery object name | [default to SevQuery]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]
 **sev_query_limit** | **int**| Limit exported invoices | [optional] [default to 50]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportPartCsv**
> \SplFileObject exportPartCsv($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit)

Export the parts as csv

Calls partCsv() in Export.php to export the parts as csv.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ExportApi();
$sev_query_model_name = "Part"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$download = true; // bool | Specifies if the document is downloaded
$sev_query_limit = 99999; // int | Limit exported part

try {
    $result = $api_instance->exportPartCsv($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportPartCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sev_query_model_name** | **string**| Model name which is exported | [default to Part]
 **sev_query_object_name** | **string**| SevQuery object name | [default to SevQuery]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]
 **sev_query_limit** | **int**| Limit exported part | [optional] [default to 99999]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportPebe**
> \SplFileObject exportPebe($scope, $start, $end, $with_enshrined, $enshrine, $download)

Pebe export as zip with csv´s

Calls pebe() in Export.php to export the pebe zip with csv´s.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ExportApi();
$scope = "IVDT"; // string | Define what you want to include in the datev export. This parameter takes a string of 4 letters. Each stands for a model that should be included.    Possible letters are: **'I'** (Invoices), **'V'** (Vouchers), **'D'** (Depreciations), **'T'** (Transactions).    By providing one of those letter you specify that it should be included in the datev export. Some combinations are: 'IVDT', 'IVT' ...
$start = ""; // string | Specify the start date for the pebe export
$end = ""; // string | Specify the end date for the pebe export
$with_enshrined = false; // bool | Specify if you want to include enshrined models
$enshrine = false; // bool | Specify if you want to enshrine all models which were included in the export
$download = true; // bool | Specifies if the document is downloaded

try {
    $result = $api_instance->exportPebe($scope, $start, $end, $with_enshrined, $enshrine, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportPebe: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **scope** | **string**| Define what you want to include in the datev export. This parameter takes a string of 4 letters. Each stands for a model that should be included.    Possible letters are: **&#39;I&#39;** (Invoices), **&#39;V&#39;** (Vouchers), **&#39;D&#39;** (Depreciations), **&#39;T&#39;** (Transactions).    By providing one of those letter you specify that it should be included in the datev export. Some combinations are: &#39;IVDT&#39;, &#39;IVT&#39; ... | [default to IVDT]
 **start** | **string**| Specify the start date for the pebe export | [default to ]
 **end** | **string**| Specify the end date for the pebe export | [default to ]
 **with_enshrined** | **bool**| Specify if you want to include enshrined models | [default to false]
 **enshrine** | **bool**| Specify if you want to enshrine all models which were included in the export | [default to false]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportTransactionsCsv**
> \SplFileObject exportTransactionsCsv($sev_query_filter_register, $sev_query_model_name, $sev_query_object_name, $sev_query_order_entry_date, $download, $check_account_id, $check_account_object_name, $sev_query_limit)

Export the transactions as csv

Calls transactionsCsv() in Export.php to export the transactions as csv. Optionally you can provide a specific check account.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ExportApi();
$sev_query_filter_register = false; // bool | Specifies if the register is included
$sev_query_model_name = "CheckAccountTransaction"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$sev_query_order_entry_date = "desc"; // string | Order in which you want to have the transactions listed
$download = true; // bool | Specifies if the document is downloaded
$check_account_id = 56; // int | Specify check account for which you want the transactions. Otherwise all transactions will be used
$check_account_object_name = "CheckAccount"; // string | Check account model name
$sev_query_limit = 99999; // int | Limit exported transactions

try {
    $result = $api_instance->exportTransactionsCsv($sev_query_filter_register, $sev_query_model_name, $sev_query_object_name, $sev_query_order_entry_date, $download, $check_account_id, $check_account_object_name, $sev_query_limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportTransactionsCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sev_query_filter_register** | **bool**| Specifies if the register is included | [default to false]
 **sev_query_model_name** | **string**| Model name which is exported | [default to CheckAccountTransaction]
 **sev_query_object_name** | **string**| SevQuery object name | [default to SevQuery]
 **sev_query_order_entry_date** | **string**| Order in which you want to have the transactions listed | [default to desc]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]
 **check_account_id** | **int**| Specify check account for which you want the transactions. Otherwise all transactions will be used | [optional]
 **check_account_object_name** | **string**| Check account model name | [optional] [default to CheckAccount]
 **sev_query_limit** | **int**| Limit exported transactions | [optional] [default to 99999]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportVoucherListCsv**
> \SplFileObject exportVoucherListCsv($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_filter_start_date, $sev_query_filter_voucher_type)

Export the voucher list as csv

Calls voucherListCsv() in Export.php to export the voucher list as a csv.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ExportApi();
$sev_query_model_name = "Voucher"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$download = true; // bool | Specifies if the document is downloaded
$sev_query_limit = 99999; // int | Limit exported vouchers
$sev_query_filter_start_date = ""; // string | Start date of the voucher list
$sev_query_filter_voucher_type = "VOU"; // string | Type of vouchers you want to export

try {
    $result = $api_instance->exportVoucherListCsv($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_filter_start_date, $sev_query_filter_voucher_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportVoucherListCsv: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sev_query_model_name** | **string**| Model name which is exported | [default to Voucher]
 **sev_query_object_name** | **string**| SevQuery object name | [default to SevQuery]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]
 **sev_query_limit** | **int**| Limit exported vouchers | [optional] [default to 99999]
 **sev_query_filter_start_date** | **string**| Start date of the voucher list | [optional] [default to ]
 **sev_query_filter_voucher_type** | **string**| Type of vouchers you want to export | [optional] [default to VOU]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: text/csv

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportVoucherZip**
> \SplFileObject exportVoucherZip($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_filter_start_date, $sev_query_filter_voucher_type)

Export the voucher list as zip with csv´s

Calls voucherZip() in Export.php to export the voucher list as a zip with csv´s.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ExportApi();
$sev_query_model_name = "Voucher"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$download = true; // bool | Specifies if the document is downloaded
$sev_query_limit = 99999; // int | Limit exported vouchers
$sev_query_filter_start_date = ""; // string | Start date of the voucher list
$sev_query_filter_voucher_type = "VOU"; // string | Type of vouchers you want to export

try {
    $result = $api_instance->exportVoucherZip($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_filter_start_date, $sev_query_filter_voucher_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportApi->exportVoucherZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sev_query_model_name** | **string**| Model name which is exported | [default to Voucher]
 **sev_query_object_name** | **string**| SevQuery object name | [default to SevQuery]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]
 **sev_query_limit** | **int**| Limit exported vouchers | [optional] [default to 99999]
 **sev_query_filter_start_date** | **string**| Start date of the voucher list | [optional] [default to ]
 **sev_query_filter_voucher_type** | **string**| Type of vouchers you want to export | [optional] [default to VOU]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/zip

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

