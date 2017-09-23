# ispserverfarm\sevdesk\phpclient\CommunicationWayApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCommunicationWay**](CommunicationWayApi.md#addCommunicationWay) | **POST** /CommunicationWay | Create a new communication way
[**deleteCommunicationWay**](CommunicationWayApi.md#deleteCommunicationWay) | **DELETE** /CommunicationWay/{id} | Delete an existing communication way
[**getCommunicationWays**](CommunicationWayApi.md#getCommunicationWays) | **GET** /CommunicationWay | Get an overview of all communication ways
[**updateCommunicationWay**](CommunicationWayApi.md#updateCommunicationWay) | **PUT** /CommunicationWay/{id} | Update a existing communication way


# **addCommunicationWay**
> \ispserverfarm\sevdesk\phpclient\model\ModelCommunicationWay addCommunicationWay($body)

Create a new communication way

Calls CommunicationWay.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CommunicationWayApi();
$body = "type=&value=&key[id]=&key[objectName]=CommunicationWayKey"; // string | To create a communication way , simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addCommunicationWay($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->addCommunicationWay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a communication way , simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelCommunicationWay**](../Model/ModelCommunicationWay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCommunicationWay**
> deleteCommunicationWay($id)

Delete an existing communication way

Calls CommunicationWay.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CommunicationWayApi();
$id = 56; // int | id of communication way you want to delete

try {
    $api_instance->deleteCommunicationWay($id);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->deleteCommunicationWay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of communication way you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCommunicationWays**
> \ispserverfarm\sevdesk\phpclient\model\ModelCommunicationWay getCommunicationWays($limit, $offset, $embed)

Get an overview of all communication ways

Calls CommunicationWay.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CommunicationWayApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned communication ways start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getCommunicationWays($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->getCommunicationWays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned communication ways start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelCommunicationWay**](../Model/ModelCommunicationWay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCommunicationWay**
> \ispserverfarm\sevdesk\phpclient\model\ModelCommunicationWay updateCommunicationWay($id, $body)

Update a existing communication way

Calls CommunicationWay.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CommunicationWayApi();
$id = 56; // int | id of communication way you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create communication way.    Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateCommunicationWay($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommunicationWayApi->updateCommunicationWay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of communication way you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create communication way.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelCommunicationWay**](../Model/ModelCommunicationWay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

