# ispserverfarm\sevdesk\php-client\ObjectUsedApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getObjectUsed**](ObjectUsedApi.md#getObjectUsed) | **GET** /ObjectUsed | Get an overview of all objects used


# **getObjectUsed**
> \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelObjectUsed getObjectUsed($limit, $offset)

Get an overview of all objects used

Calls ObjectUsed.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\ObjectUsedApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned objects used start. Default is 0

try {
    $result = $api_instance->getObjectUsed($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ObjectUsedApi->getObjectUsed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned objects used start. Default is 0 | [optional] [default to 0]

### Return type

[**\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelObjectUsed**](../Model/ModelObjectUsed.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

