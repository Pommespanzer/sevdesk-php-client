# ispserverfarm\sevdesk\phpclient\TagRelationApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTagRelation**](TagRelationApi.md#addTagRelation) | **POST** /TagRelation | Create a new tag relation
[**deleteTagRelation**](TagRelationApi.md#deleteTagRelation) | **DELETE** /TagRelation/{id} | Delete an existing tag relation
[**getTagRelations**](TagRelationApi.md#getTagRelations) | **GET** /TagRelation | Get an overview of all tag relations
[**updateTagRelation**](TagRelationApi.md#updateTagRelation) | **PUT** /TagRelation/{id} | Update an existing tag relation


# **addTagRelation**
> \ispserverfarm\sevdesk\phpclient\model\ModelTagRelation addTagRelation($body)

Create a new tag relation

Calls TagRelation.php to create a new tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\TagRelationApi();
$body = "tag[id]=&tag[objectName]=Tag&object[id]=&object[objectName]="; // string | To create a tag relation, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addTagRelation($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagRelationApi->addTagRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a tag relation, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelTagRelation**](../Model/ModelTagRelation.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTagRelation**
> deleteTagRelation($id)

Delete an existing tag relation

Calls the delete() function in TagRelation.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\TagRelationApi();
$id = 56; // int | Id of tag relation you want to delete

try {
    $api_instance->deleteTagRelation($id);
} catch (Exception $e) {
    echo 'Exception when calling TagRelationApi->deleteTagRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of tag relation you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTagRelations**
> \ispserverfarm\sevdesk\phpclient\model\ModelTagRelation getTagRelations($limit, $offset, $embed)

Get an overview of all tag relations

Calls TagRelation.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\TagRelationApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned tag relations start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getTagRelations($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagRelationApi->getTagRelations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned tag relations start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelTagRelation**](../Model/ModelTagRelation.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTagRelation**
> \ispserverfarm\sevdesk\phpclient\model\ModelTagRelation updateTagRelation($id, $body)

Update an existing tag relation

Calls TagRelation.php to update an existing tag

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\TagRelationApi();
$id = 56; // int | Id of tag relation you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create tag relation.    Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateTagRelation($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagRelationApi->updateTagRelation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of tag relation you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create tag relation.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelTagRelation**](../Model/ModelTagRelation.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

