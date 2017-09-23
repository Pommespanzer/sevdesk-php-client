# ispserverfarm\sevdesk\phpclient\TextTemplateApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTextTemplate**](TextTemplateApi.md#addTextTemplate) | **POST** /TextTemplate | Create a new text template
[**deleteTextTemplate**](TextTemplateApi.md#deleteTextTemplate) | **DELETE** /TextTemplate/{id} | Delete an existing text template
[**getTextTemplate**](TextTemplateApi.md#getTextTemplate) | **GET** /TextTemplate | Get an overview of all text template
[**updateTextTemplate**](TextTemplateApi.md#updateTextTemplate) | **PUT** /TextTemplate/{id} | Update an existing text template


# **addTextTemplate**
> \ispserverfarm\sevdesk\phpclient\Model\ModelTextTemplate addTextTemplate($body)

Create a new text template

Calls TextTemplate.php to create a new text template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\TextTemplateApi();
$body = "name=&text=&objectType=&textType="; // string | To create a text template, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addTextTemplate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->addTextTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a text template, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelTextTemplate**](../Model/ModelTextTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTextTemplate**
> deleteTextTemplate($id)

Delete an existing text template

Calls TextTemplate.php to delete a text template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\TextTemplateApi();
$id = 56; // int | Id of text template you want to delete

try {
    $api_instance->deleteTextTemplate($id);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->deleteTextTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of text template you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTextTemplate**
> \ispserverfarm\sevdesk\phpclient\Model\ModelTextTemplate getTextTemplate($limit, $offset, $embed)

Get an overview of all text template

Calls TextTemplate.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\TextTemplateApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned text templates start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getTextTemplate($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->getTextTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned text templates start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelTextTemplate**](../Model/ModelTextTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTextTemplate**
> \ispserverfarm\sevdesk\phpclient\Model\ModelTextTemplate updateTextTemplate($id, $body)

Update an existing text template

Calls TextTemplate.php to update an existing text template

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\TextTemplateApi();
$id = 56; // int | Id of text template you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create text template.    Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateTextTemplate($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->updateTextTemplate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of text template you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create text template.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelTextTemplate**](../Model/ModelTextTemplate.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

