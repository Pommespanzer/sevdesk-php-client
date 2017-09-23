# ispserverfarm\sevdesk\CommunicationWayKeyApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCommunicationWayKeys**](CommunicationWayKeyApi.md#getCommunicationWayKeys) | **GET** /CommunicationWayKey | Get an overview of all communication way keys


# **getCommunicationWayKeys**
> \ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWayKey getCommunicationWayKeys($limit, $offset)

Get an overview of all communication way keys

Calls CommunicationWayKey.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\CommunicationWayKeyApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned communication way keys start. Default is 0

try {
    $result = $api_instance->getCommunicationWayKeys($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayKeyApi->getCommunicationWayKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned communication way keys start. Default is 0 | [optional] [default to 0]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWayKey**](../Model/ModelCommunicationWayKey.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

