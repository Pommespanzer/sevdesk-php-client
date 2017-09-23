# ispserverfarm\sevdesk\LetterApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLetter**](LetterApi.md#addLetter) | **POST** /Letter | Create a new letter
[**deleteLetter**](LetterApi.md#deleteLetter) | **DELETE** /Letter/{id} | Delete an existing letter
[**getLetters**](LetterApi.md#getLetters) | **GET** /Letter | Get an overview of all letters
[**letterGetPdf**](LetterApi.md#letterGetPdf) | **GET** /Letter/{id}/getPdf | Get pdf from docserver
[**letterRender**](LetterApi.md#letterRender) | **POST** /Letter/{id}/render | Render a letter to the docserver and return the metadata
[**letterSendBy**](LetterApi.md#letterSendBy) | **PUT** /Letter/{id}/sendBy | Update parameter sendType
[**letterSendViaMail**](LetterApi.md#letterSendViaMail) | **POST** /Letter/{id}/sendViaEmail | Send a letter via mail
[**letterSendViaPost**](LetterApi.md#letterSendViaPost) | **POST** /Letter/{id}/sendViaPost | Send a letter via post
[**updateLetter**](LetterApi.md#updateLetter) | **PUT** /Letter/{id} | Update an existing letter


# **addLetter**
> \ispserverfarm\sevdesk\sevDeskModel\ModelLetter addLetter($body)

Create a new letter

Calls Letter.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\LetterApi();
$body = "letterNumber=&contact[objectName]=Contact&contact[id]=&header=&status=&text=&sendType=&sendDate="; // string | To create a letter, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addLetter($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LetterApi->addLetter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a letter, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelLetter**](../Model/ModelLetter.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLetter**
> deleteLetter($id)

Delete an existing letter

Calls the delete() function in Letter.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\LetterApi();
$id = 56; // int | id of letter you want to delete

try {
    $api_instance->deleteLetter($id);
} catch (Exception $e) {
    echo 'Exception when calling LetterApi->deleteLetter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of letter you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLetters**
> \ispserverfarm\sevdesk\sevDeskModel\ModelLetter getLetters($limit, $offset, $embed)

Get an overview of all letters

Calls Letter.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\LetterApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned letters start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getLetters($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LetterApi->getLetters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned letters start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelLetter**](../Model/ModelLetter.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **letterGetPdf**
> letterGetPdf($id)

Get pdf from docserver

Calls getPdf() in Letter.php to get the pdf of a specified letter from the docserver

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\LetterApi();
$id = 56; // int | Id of the letter of which you want to get the pdf

try {
    $api_instance->letterGetPdf($id);
} catch (Exception $e) {
    echo 'Exception when calling LetterApi->letterGetPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the letter of which you want to get the pdf |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **letterRender**
> letterRender($id)

Render a letter to the docserver and return the metadata

Calls render() in Letter.php to render a letter to the docserver and return the metadata.    Note that this does not work for letters created by calling the api directly (eg. over Swagger)!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\LetterApi();
$id = 56; // int | id of letter you want to render

try {
    $api_instance->letterRender($id);
} catch (Exception $e) {
    echo 'Exception when calling LetterApi->letterRender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of letter you want to render |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **letterSendBy**
> \ispserverfarm\sevdesk\sevDeskModel\ModelLetter letterSendBy($id, $body)

Update parameter sendType

Calls sendBy() in Letter.php to update the sendType parameter of the letter and change its status to DELIVERED

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\LetterApi();
$id = 56; // int | id of letter of which you want to update the sendType parameter
$body = "body_example"; // string | Enter desired send type after sendType= and remove the quotation marks!

try {
    $result = $api_instance->letterSendBy($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LetterApi->letterSendBy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of letter of which you want to update the sendType parameter |
 **body** | **string**| Enter desired send type after sendType&#x3D; and remove the quotation marks! | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelLetter**](../Model/ModelLetter.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **letterSendViaMail**
> letterSendViaMail($id, $body)

Send a letter via mail

Calls sendViaMail() in Letter.php to send a letter via mail.    Note that you can not send a letter created by calling the api directly (eg. over Swagger)!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\LetterApi();
$id = 56; // int | id of letter you want to send
$body = "body_example"; // string | To send a letter, simply enter desired values after parameter= and remove the quotation marks.    Please note: additionalAttachments is a String containing document id's (of existing documents!)

try {
    $api_instance->letterSendViaMail($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling LetterApi->letterSendViaMail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of letter you want to send |
 **body** | **string**| To send a letter, simply enter desired values after parameter&#x3D; and remove the quotation marks.    Please note: additionalAttachments is a String containing document id&#39;s (of existing documents!) | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **letterSendViaPost**
> letterSendViaPost($id)

Send a letter via post

Calls sendViaPost() in Letter.php to send a letter via post if enabled in your subscription    Note that you can not send a letter created by calling the api directly (eg. over Swagger)!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\LetterApi();
$id = 56; // int | id of letter you want to send

try {
    $api_instance->letterSendViaPost($id);
} catch (Exception $e) {
    echo 'Exception when calling LetterApi->letterSendViaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of letter you want to send |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLetter**
> \ispserverfarm\sevdesk\sevDeskModel\ModelLetter updateLetter($id, $body)

Update an existing letter

Calls Letter.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\LetterApi();
$id = 56; // int | id of letter you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create letter.    Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateLetter($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LetterApi->updateLetter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of letter you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create letter.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelLetter**](../Model/ModelLetter.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

