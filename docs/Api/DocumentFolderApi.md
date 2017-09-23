# ispserverfarm\sevdesk\phpclient\DocumentFolderApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocumentFolder**](DocumentFolderApi.md#addDocumentFolder) | **POST** /DocumentFolder | Create a new document folder
[**deleteDocumentFolder**](DocumentFolderApi.md#deleteDocumentFolder) | **DELETE** /DocumentFolder/{id} | Delete an existing document folder
[**emptyBin**](DocumentFolderApi.md#emptyBin) | **DELETE** /DocumentFolder/emptyBin | Delete all objects in the bin
[**getDocumentFolderChildren**](DocumentFolderApi.md#getDocumentFolderChildren) | **GET** /DocumentFolder/{id}/getChildren | Returns children (documents and document folders) as &#39;nodes&#39; and count of all children as &#39;total&#39;
[**getDocumentFolderDocuments**](DocumentFolderApi.md#getDocumentFolderDocuments) | **GET** /DocumentFolder/{id}/getDocuments | Get an overview of all documents in a document folder
[**getDocumentFolderFolders**](DocumentFolderApi.md#getDocumentFolderFolders) | **GET** /DocumentFolder/{id}/getFolders | Get an overview of all folders in a document folder
[**getDocumentFolderPath**](DocumentFolderApi.md#getDocumentFolderPath) | **GET** /DocumentFolder/{id}/getPath | Get path (all parent folders) of this folder
[**getDocumentFolders**](DocumentFolderApi.md#getDocumentFolders) | **GET** /DocumentFolder | Get an overview of all document folders
[**trashDocumentFolder**](DocumentFolderApi.md#trashDocumentFolder) | **PUT** /DocumentFolder/{id}/trash | Trash an existing document folder
[**updateDocumentFolder**](DocumentFolderApi.md#updateDocumentFolder) | **PUT** /DocumentFolder/{id} | Update an existing document folder


# **addDocumentFolder**
> \ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder addDocumentFolder($body)

Create a new document folder

Calls DocumentFolder.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentFolderApi();
$body = "name=&status="; // string | To create a document folder, simply enter desired values after parameter= and remove the quotation marks

try {
    $result = $api_instance->addDocumentFolder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentFolderApi->addDocumentFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a document folder, simply enter desired values after parameter&#x3D; and remove the quotation marks |

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder**](../Model/ModelDocumentFolder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocumentFolder**
> deleteDocumentFolder($id)

Delete an existing document folder

Calls the delete() function in DocumentFolder.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentFolderApi();
$id = 56; // int | id of document folder you want to delete

try {
    $api_instance->deleteDocumentFolder($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentFolderApi->deleteDocumentFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of document folder you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **emptyBin**
> emptyBin()

Delete all objects in the bin

Calls the emptyBin() function in DocumentFolder.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentFolderApi();

try {
    $api_instance->emptyBin();
} catch (Exception $e) {
    echo 'Exception when calling DocumentFolderApi->emptyBin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentFolderChildren**
> \ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder getDocumentFolderChildren($id, $limit, $offset, $embed)

Returns children (documents and document folders) as 'nodes' and count of all children as 'total'

Calls getChildren() in DocumentFolder.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentFolderApi();
$id = 56; // int | Document folder of which you want to get the children
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned children start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getDocumentFolderChildren($id, $limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentFolderApi->getDocumentFolderChildren: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Document folder of which you want to get the children |
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned children start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder**](../Model/ModelDocumentFolder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentFolderDocuments**
> \ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder getDocumentFolderDocuments($id, $limit, $offset, $embed)

Get an overview of all documents in a document folder

Calls getDocuments() in DocumentFolder.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentFolderApi();
$id = 56; // int | Document folder of which you want to get the containing documents
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned documents start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getDocumentFolderDocuments($id, $limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentFolderApi->getDocumentFolderDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Document folder of which you want to get the containing documents |
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned documents start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder**](../Model/ModelDocumentFolder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentFolderFolders**
> \ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder getDocumentFolderFolders($id, $limit, $offset, $embed)

Get an overview of all folders in a document folder

Calls getFolders() in DocumentFolder.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentFolderApi();
$id = 56; // int | Document folder of which you want to get the containing folders
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned folders start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getDocumentFolderFolders($id, $limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentFolderApi->getDocumentFolderFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Document folder of which you want to get the containing folders |
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned folders start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder**](../Model/ModelDocumentFolder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentFolderPath**
> \ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder getDocumentFolderPath($id)

Get path (all parent folders) of this folder

Calls getPath() in DocumentFolder.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentFolderApi();
$id = 56; // int | Document folder of which you want to get the path

try {
    $result = $api_instance->getDocumentFolderPath($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentFolderApi->getDocumentFolderPath: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Document folder of which you want to get the path |

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder**](../Model/ModelDocumentFolder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocumentFolders**
> \ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder getDocumentFolders($limit, $offset, $embed)

Get an overview of all document folders

Calls DocumentFolder.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentFolderApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned document folders start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getDocumentFolders($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentFolderApi->getDocumentFolders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned document folders start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder**](../Model/ModelDocumentFolder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **trashDocumentFolder**
> trashDocumentFolder($id)

Trash an existing document folder

Calls trash() in DocumentFolder.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentFolderApi();
$id = 56; // int | id of document folder you want to trash

try {
    $api_instance->trashDocumentFolder($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentFolderApi->trashDocumentFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of document folder you want to trash |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDocumentFolder**
> \ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder updateDocumentFolder($id, $body)

Update an existing document folder

Calls DocumentFolder.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentFolderApi();
$id = 56; // int | id of document folder you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create document folder.    Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updateDocumentFolder($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentFolderApi->updateDocumentFolder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of document folder you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create document folder.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelDocumentFolder**](../Model/ModelDocumentFolder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

