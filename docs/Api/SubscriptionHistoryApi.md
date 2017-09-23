# ispserverfarm\sevdesk\phpclient\SubscriptionHistoryApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSubscriptionHistory**](SubscriptionHistoryApi.md#getSubscriptionHistory) | **GET** /SubscriptionHistory | Get an overview of your subscription history


# **getSubscriptionHistory**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelSubscriptionHistory getSubscriptionHistory($embed)

Get an overview of your subscription history

Calls SubscriptionHistory.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\SubscriptionHistoryApi();
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getSubscriptionHistory($embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionHistoryApi->getSubscriptionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelSubscriptionHistory**](../Model/ModelSubscriptionHistory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

