# ispserverfarm\sevdesk\SwissEsrApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSwissEsr**](SwissEsrApi.md#getSwissEsr) | **GET** /SwissEsr | Get an overview of swiss esr


# **getSwissEsr**
> \ispserverfarm\sevdesk\sevDeskModel\ModelSwissEsr getSwissEsr()

Get an overview of swiss esr

Calls SwissEsr.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\SwissEsrApi();

try {
    $result = $api_instance->getSwissEsr();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SwissEsrApi->getSwissEsr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelSwissEsr**](../Model/ModelSwissEsr.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

