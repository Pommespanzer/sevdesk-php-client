# ispserverfarm\sevdesk\php-client\PlaceApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPlaces**](PlaceApi.md#getPlaces) | **GET** /Place | Get an overview of all places


# **getPlaces**
> \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelPlace getPlaces($limit, $offset)

Get an overview of all places

Calls Place.php to get necessary variables.    It is recommended to set limit and offset appropriately as there are over 5000 entries for place!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\PlaceApi();
$limit = 1000; // int | Limits the number of entries returned. Default is 1000
$offset = 0; // int | Set the index where the returned places start. Default is 0

try {
    $result = $api_instance->getPlaces($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlaceApi->getPlaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 1000 | [optional] [default to 1000]
 **offset** | **int**| Set the index where the returned places start. Default is 0 | [optional] [default to 0]

### Return type

[**\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelPlace**](../Model/ModelPlace.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

