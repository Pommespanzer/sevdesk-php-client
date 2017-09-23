# ispserverfarm\sevdesk\phpclient\PartUnityApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPartUnity**](PartUnityApi.md#addPartUnity) | **POST** /PartUnity | Create a new part unity
[**deletePartUnity**](PartUnityApi.md#deletePartUnity) | **DELETE** /PartUnity/{id} | Delete an existing part unity
[**getPartUnities**](PartUnityApi.md#getPartUnities) | **GET** /PartUnity | Get an overview of all part unities
[**updatePartUnity**](PartUnityApi.md#updatePartUnity) | **PUT** /PartUnity/{id} | Update an existing part unity


# **addPartUnity**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelPartUnity addPartUnity($body)

Create a new part unity

Calls PartUnity.php to add a part unity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartUnityApi();
$body = "part[id]=&part[objectName]=Part&price=&factor=1&unity[id]=&unity[objectName]=Unity"; // string | To create a part unity, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addPartUnity($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartUnityApi->addPartUnity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a part unity, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelPartUnity**](../Model/ModelPartUnity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePartUnity**
> deletePartUnity($id)

Delete an existing part unity

Calls PartUnity.php to delete a part unity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartUnityApi();
$id = 56; // int | id of the part unity you want to delete

try {
    $api_instance->deletePartUnity($id);
} catch (Exception $e) {
    echo 'Exception when calling PartUnityApi->deletePartUnity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the part unity you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPartUnities**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelPartUnity getPartUnities($limit, $offset, $embed)

Get an overview of all part unities

Calls PartUnity.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartUnityApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned part unities start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getPartUnities($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartUnityApi->getPartUnities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned part unities start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelPartUnity**](../Model/ModelPartUnity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePartUnity**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelPartUnity updatePartUnity($id, $body)

Update an existing part unity

Calls PartUnity.php to update a part unity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartUnityApi();
$id = 56; // int | id of part unity you want to update
$body = "body_example"; // string | Parameters which need to be updated. Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updatePartUnity($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartUnityApi->updatePartUnity: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of part unity you want to update |
 **body** | **string**| Parameters which need to be updated. Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelPartUnity**](../Model/ModelPartUnity.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

