# ispserverfarm\sevdesk\phpclient\VatReportApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVatReport**](VatReportApi.md#getVatReport) | **GET** /VatReport | Get a vat report for a defined period of time


# **getVatReport**
> getVatReport($reporting_year, $reporting_period_code, $no_actual_taxation_on_input_tax)

Get a vat report for a defined period of time

Calls VatReport.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\VatReportApi();
$reporting_year = 56; // int | Year for which you want to have a vat report
$reporting_period_code = "monthly"; // string | Define the period for your vat report
$no_actual_taxation_on_input_tax = false; // bool | Define if you want actual taxation on input tax

try {
    $api_instance->getVatReport($reporting_year, $reporting_period_code, $no_actual_taxation_on_input_tax);
} catch (Exception $e) {
    echo 'Exception when calling VatReportApi->getVatReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reporting_year** | **int**| Year for which you want to have a vat report |
 **reporting_period_code** | **string**| Define the period for your vat report | [default to monthly]
 **no_actual_taxation_on_input_tax** | **bool**| Define if you want actual taxation on input tax | [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

