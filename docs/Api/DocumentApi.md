# ispserverfarm\sevdesk\phpclient\DocumentApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addDocument**](DocumentApi.md#addDocument) | **POST** /Document | Create a new document. Be aware that there wont be a working document with content!
[**deleteDocument**](DocumentApi.md#deleteDocument) | **DELETE** /Document/{id} | Delete an existing document
[**downloadDocument**](DocumentApi.md#downloadDocument) | **GET** /Document/{id}/download | Download a document
[**factoryAddDocument**](DocumentApi.md#factoryAddDocument) | **POST** /Document/Factory/fileUpload | Upload a file (creating a document)
[**getDocuments**](DocumentApi.md#getDocuments) | **GET** /Document | Get an overview of all documents
[**updateDocument**](DocumentApi.md#updateDocument) | **PUT** /Document/{id} | Update an existing document. Be aware that you can only update its parameter but not the content of the document itself!
[**updateDocumentStatusToTrashed**](DocumentApi.md#updateDocumentStatusToTrashed) | **PUT** /Document/{id}/trash | Update an existing documents status to &#39;TRASHED&#39;, be aware that this deletes the document


# **addDocument**
> \ispserverfarm\sevdesk\phpclient\Model\ModelDocument addDocument($body)

Create a new document. Be aware that there wont be a working document with content!

Calls Document.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentApi();
$body = "filename=&status=&extension=&filesize="; // string | To create a document, simply enter desired values after parameter= and remove the quotation marks

try {
    $result = $api_instance->addDocument($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->addDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a document, simply enter desired values after parameter&#x3D; and remove the quotation marks |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelDocument**](../Model/ModelDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDocument**
> deleteDocument($id)

Delete an existing document

Calls the delete() function in Document.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentApi();
$id = 56; // int | id of document you want to delete

try {
    $api_instance->deleteDocument($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->deleteDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of document you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadDocument**
> \SplFileObject downloadDocument($id)

Download a document

Calls download() in Document.php to download a document. Will return base64 content.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentApi();
$id = 56; // int | Id of the document you want to download

try {
    $result = $api_instance->downloadDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->downloadDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the document you want to download |

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **factoryAddDocument**
> factoryAddDocument($file, $object, $folder)

Upload a file (creating a document)

With the new version of sevdesk some models are not created by calling the Model.php directly but by calling the Factory.php because of better performance and flexibility.    Basically the Model.php itself still constructs the model however new instances of the model are created trough the Factory.php    So for example when you create a new invoice it wont be saved by a POST request with '/Invoice?para1=&...' but with the saveInvoice function in Factory.php 'Voucher/Factory/saveInvoice?para1='

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentApi();
$file = "/path/to/file.txt"; // \SplFileObject | file to upload
$object = ""; // string | object to which you want to upload your file
$folder = ""; // string | folder to which you want to upload your file

try {
    $api_instance->factoryAddDocument($file, $object, $folder);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->factoryAddDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **\SplFileObject**| file to upload |
 **object** | **string**| object to which you want to upload your file | [optional] [default to ]
 **folder** | **string**| folder to which you want to upload your file | [optional] [default to ]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDocuments**
> \ispserverfarm\sevdesk\phpclient\Model\ModelDocument getDocuments($limit, $offset, $embed)

Get an overview of all documents

Calls Document.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned documents start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getDocuments($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned documents start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelDocument**](../Model/ModelDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDocument**
> \ispserverfarm\sevdesk\phpclient\Model\ModelDocument updateDocument($id, $body)

Update an existing document. Be aware that you can only update its parameter but not the content of the document itself!

Calls Document.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentApi();
$id = 56; // int | id of document you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create document.    Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updateDocument($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->updateDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of document you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create document.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelDocument**](../Model/ModelDocument.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDocumentStatusToTrashed**
> updateDocumentStatusToTrashed($id)

Update an existing documents status to 'TRASHED', be aware that this deletes the document

Calls trash() in Document.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\DocumentApi();
$id = 56; // int | id of document of which you want to update the status to 'TRASHED

try {
    $api_instance->updateDocumentStatusToTrashed($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->updateDocumentStatusToTrashed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of document of which you want to update the status to &#39;TRASHED |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

