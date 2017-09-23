# ispserverfarm\sevdesk\phpclient\ReportApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportContact**](ReportApi.md#reportContact) | **GET** /Report/contact | Export the contact
[**reportContactList**](ReportApi.md#reportContactList) | **GET** /Report/contactlist | Export the contact list
[**reportInventory**](ReportApi.md#reportInventory) | **GET** /Report/inventory | Export the inventory
[**reportInvoiceList**](ReportApi.md#reportInvoiceList) | **GET** /Report/invoicelist | Export the invoicelist
[**reportOrderList**](ReportApi.md#reportOrderList) | **GET** /Report/orderlist | Export the order list
[**reportProfitAndLoss**](ReportApi.md#reportProfitAndLoss) | **GET** /Report/profitAndLoss | Export the profit and loss
[**reportRegisterBook**](ReportApi.md#reportRegisterBook) | **GET** /Report/registerBook | Export the register book / cash report
[**reportVoucherList**](ReportApi.md#reportVoucherList) | **GET** /Report/voucherlist | Export the voucher list


# **reportContact**
> \SplFileObject reportContact($download, $contact_id, $contact_object_name)

Export the contact

Calls contact() in Report.php to export the contact.    With **sevQuery[filter][yourFilter]**, you can filter the entries you want to export. For this, just switch 'yourFilter' with some parameter the involved model would normally take.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\ReportApi();
$download = true; // bool | Specifies if the document is downloaded
$contact_id = 56; // int | Id of contact which should be exported
$contact_object_name = "Contact"; // string | Model name which is exported

try {
    $result = $api_instance->reportContact($download, $contact_id, $contact_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **download** | **bool**| Specifies if the document is downloaded | [default to true]
 **contact_id** | **int**| Id of contact which should be exported |
 **contact_object_name** | **string**| Model name which is exported | [default to Contact]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportContactList**
> \SplFileObject reportContactList($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_offset)

Export the contact list

Calls contactlist() in Report.php to export the contact list.    With **sevQuery[filter][yourFilter]**, you can filter the entries you want to export. For this, just switch 'yourFilter' with some parameter the involved model would normally take.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\ReportApi();
$sev_query_model_name = "Contact"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$download = true; // bool | Specifies if the document is downloaded
$sev_query_limit = 99999; // int | Limit exported contacts
$sev_query_offset = 0; // int | Set the index where the exported contacts start

try {
    $result = $api_instance->reportContactList($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportContactList: ', $e->getMessage(), PHP_EOL;
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
 **sev_query_offset** | **int**| Set the index where the exported contacts start | [optional] [default to 0]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportInventory**
> \SplFileObject reportInventory($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_offset)

Export the inventory

Calls inventory() in Report.php to export the inventory.    With **sevQuery[filter][yourFilter]**, you can filter the entries you want to export. For this, just switch 'yourFilter' with some parameter the involved model would normally take.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\ReportApi();
$sev_query_model_name = "Part"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$download = true; // bool | Specifies if the document is downloaded
$sev_query_limit = 99999; // int | Limit exported inventory entries
$sev_query_offset = 99999; // int | Set the index where the exported parts start

try {
    $result = $api_instance->reportInventory($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportInventory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sev_query_model_name** | **string**| Model name which is exported | [default to Part]
 **sev_query_object_name** | **string**| SevQuery object name | [default to SevQuery]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]
 **sev_query_limit** | **int**| Limit exported inventory entries | [optional] [default to 99999]
 **sev_query_offset** | **int**| Set the index where the exported parts start | [optional] [default to 99999]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportInvoiceList**
> \SplFileObject reportInvoiceList($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_offset)

Export the invoicelist

Calls invoicelist() in Report.php to export the invoices.    With **sevQuery[filter][yourFilter]**, you can filter the entries you want to export. For this, just switch 'yourFilter' with some parameter the involved model would normally take.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\ReportApi();
$sev_query_model_name = "Invoice"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$download = true; // bool | Specifies if the document is downloaded
$sev_query_limit = 99999; // int | Limit exported invoices
$sev_query_offset = 0; // int | Set the index where the exported invoices should start

try {
    $result = $api_instance->reportInvoiceList($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportInvoiceList: ', $e->getMessage(), PHP_EOL;
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
 **sev_query_offset** | **int**| Set the index where the exported invoices should start | [optional] [default to 0]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportOrderList**
> \SplFileObject reportOrderList($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_offset)

Export the order list

Calls orderlist() in Report.php to export the orders.    With **sevQuery[filter][yourFilter]**, you can filter the entries you want to export. For this, just switch 'yourFilter' with some parameter the involved model would normally take.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\ReportApi();
$sev_query_model_name = "Order"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$download = true; // bool | Specifies if the document is downloaded
$sev_query_limit = 99999; // int | Limit exported orders
$sev_query_offset = 0; // int | Set the index where the exported orders should start

try {
    $result = $api_instance->reportOrderList($sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportOrderList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sev_query_model_name** | **string**| Model name which is exported | [default to Order]
 **sev_query_object_name** | **string**| SevQuery object name | [default to SevQuery]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]
 **sev_query_limit** | **int**| Limit exported orders | [optional] [default to 99999]
 **sev_query_offset** | **int**| Set the index where the exported orders should start | [optional] [default to 0]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportProfitAndLoss**
> \SplFileObject reportProfitAndLoss($start_date, $end_date, $tax_rule, $download)

Export the profit and loss

Calls profitAndLoss() in Report.php to export the profit and loss.    With **sevQuery[filter][yourFilter]**, you can filter the entries you want to export. For this, just switch 'yourFilter' with some parameter the involved model would normally take.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\ReportApi();
$start_date = ""; // string | Start date of the profit and loss calculation
$end_date = ""; // string | End date of the profit and loss calculation
$tax_rule = true; // bool | Specify if you want the net income method or the profit and loss
$download = true; // bool | Specifies if the document is downloaded

try {
    $result = $api_instance->reportProfitAndLoss($start_date, $end_date, $tax_rule, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportProfitAndLoss: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Start date of the profit and loss calculation | [default to ]
 **end_date** | **string**| End date of the profit and loss calculation | [default to ]
 **tax_rule** | **bool**| Specify if you want the net income method or the profit and loss | [default to true]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportRegisterBook**
> \SplFileObject reportRegisterBook($check_account_id, $check_account_object_name, $start_date, $end_date, $download)

Export the register book / cash report

Calls registerBook() in Report.php to export the register book / cash report.    With **sevQuery[filter][yourFilter]**, you can filter the entries you want to export. For this, just switch 'yourFilter' with some parameter the involved model would normally take.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\ReportApi();
$check_account_id = 56; // int | Check account you want to export
$check_account_object_name = "CheckAccount"; // string | Check account object name
$start_date = ""; // string | Start date of the register book / cash report
$end_date = ""; // string | End date of the register book / cash report
$download = true; // bool | Specifies if the document is downloaded

try {
    $result = $api_instance->reportRegisterBook($check_account_id, $check_account_object_name, $start_date, $end_date, $download);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportRegisterBook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **check_account_id** | **int**| Check account you want to export |
 **check_account_object_name** | **string**| Check account object name | [default to CheckAccount]
 **start_date** | **string**| Start date of the register book / cash report | [default to ]
 **end_date** | **string**| End date of the register book / cash report | [default to ]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportVoucherList**
> \SplFileObject reportVoucherList($sev_query_filter_start_date, $sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_offset)

Export the voucher list

Calls voucherlist() in Report.php to export the vouchers.    With **sevQuery[filter][yourFilter]**, you can filter the entries you want to export. For this, just switch 'yourFilter' with some parameter the involved model would normally take.    **Currently there is a problem with swagger understanding return type 'file', so the api will respond accordingly but swagger ui can not display it correctly.**

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\ReportApi();
$sev_query_filter_start_date = ""; // string | Start date to filter vouchers with
$sev_query_model_name = "Voucher"; // string | Model name which is exported
$sev_query_object_name = "SevQuery"; // string | SevQuery object name
$download = true; // bool | Specifies if the document is downloaded
$sev_query_limit = 99999; // int | Limit exported vouchers
$sev_query_offset = 0; // int | Set the index where the exported vouchers should start

try {
    $result = $api_instance->reportVoucherList($sev_query_filter_start_date, $sev_query_model_name, $sev_query_object_name, $download, $sev_query_limit, $sev_query_offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportVoucherList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sev_query_filter_start_date** | **string**| Start date to filter vouchers with | [default to ]
 **sev_query_model_name** | **string**| Model name which is exported | [default to Voucher]
 **sev_query_object_name** | **string**| SevQuery object name | [default to SevQuery]
 **download** | **bool**| Specifies if the document is downloaded | [optional] [default to true]
 **sev_query_limit** | **int**| Limit exported vouchers | [optional] [default to 99999]
 **sev_query_offset** | **int**| Set the index where the exported vouchers should start | [optional] [default to 0]

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

