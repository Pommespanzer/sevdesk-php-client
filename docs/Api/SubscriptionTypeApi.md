# isp-serverfarm\sevdesk\php-client\SubscriptionTypeApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSubscriptionTypes**](SubscriptionTypeApi.md#getSubscriptionTypes) | **GET** /SubscriptionType | Get an overview of all subscription types


# **getSubscriptionTypes**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelSubscriptionType getSubscriptionTypes()

Get an overview of all subscription types

Calls SubscriptionType.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\SubscriptionTypeApi();

try {
    $result = $api_instance->getSubscriptionTypes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionTypeApi->getSubscriptionTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelSubscriptionType**](../Model/ModelSubscriptionType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

