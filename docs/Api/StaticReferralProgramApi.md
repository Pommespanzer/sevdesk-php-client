# isp-serverfarm\sevdesk\php-client\StaticReferralProgramApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStaticReferralPrograms**](StaticReferralProgramApi.md#getStaticReferralPrograms) | **GET** /StaticReferralProgram | Get staticReferralProgram list


# **getStaticReferralPrograms**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelStaticReferralProgram getStaticReferralPrograms()

Get staticReferralProgram list

Calls StaticReferralProgram.php to return the staticReferralProgram list which is basically the list of referral programs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\StaticReferralProgramApi();

try {
    $result = $api_instance->getStaticReferralPrograms();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticReferralProgramApi->getStaticReferralPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelStaticReferralProgram**](../Model/ModelStaticReferralProgram.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

