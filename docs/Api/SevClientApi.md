# isp-serverfarm\sevdesk\php-client\SevClientApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sevClientGetSevDeskAccountInvoices**](SevClientApi.md#sevClientGetSevDeskAccountInvoices) | **GET** /SevClient/getSevDeskAccountInvoices | Get sevDesk account invoices


# **sevClientGetSevDeskAccountInvoices**
> sevClientGetSevDeskAccountInvoices()

Get sevDesk account invoices

Get sevDesk account invoices

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\SevClientApi();

try {
    $api_instance->sevClientGetSevDeskAccountInvoices();
} catch (Exception $e) {
    echo 'Exception when calling SevClientApi->sevClientGetSevDeskAccountInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

