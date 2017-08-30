# isp-serverfarm\sevdesk\php-client\SevSequenceApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSevSequence**](SevSequenceApi.md#getSevSequence) | **GET** /SevSequence | Get an overview of all object sequences


# **getSevSequence**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelSevSequence getSevSequence($limit, $offset, $embed)

Get an overview of all object sequences

Calls SevSequence.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\SevSequenceApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned check accounts start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getSevSequence($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SevSequenceApi->getSevSequence: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned check accounts start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelSevSequence**](../Model/ModelSevSequence.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

