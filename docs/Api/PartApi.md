# ispserverfarm\sevdesk\phpclient\PartApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPart**](PartApi.md#addPart) | **POST** /Part | Create a new part
[**bookPart**](PartApi.md#bookPart) | **PUT** /Part/{id}/book | add / remove parts from the stock
[**deletePart**](PartApi.md#deletePart) | **DELETE** /Part/{id} | Delete an existing part
[**duplicatePart**](PartApi.md#duplicatePart) | **POST** /Part/{id}/duplicate | Duplicate an existing part
[**getParts**](PartApi.md#getParts) | **GET** /Part | Get an overview of all parts
[**partGetLastLog**](PartApi.md#partGetLastLog) | **GET** /Part/{id}/getLastLog | Get last log about the part
[**partGetPrice**](PartApi.md#partGetPrice) | **GET** /Part/{id}/getPrice | Get price of a specified part
[**partGetStock**](PartApi.md#partGetStock) | **GET** /Part/{id}/getStock | Get stock of the part
[**partGetStockBefore**](PartApi.md#partGetStockBefore) | **GET** /Part/{id}/getStockBefore | Get stock difference of the part before a specified date
[**updatePart**](PartApi.md#updatePart) | **PUT** /Part/{id} | Update an existing part


# **addPart**
> \ispserverfarm\sevdesk\phpclient\Model\ModelPart addPart($body)

Create a new part

Calls Part.php to add a part

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartApi();
$body = "partNumber=1111&name=test part&stock=10&taxRate=19&unity[id]=1&unity[objectName]=Unity&price=42.50&category[id]=1&category[objectName]=Category"; // string | To create a part, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addPart($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->addPart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a part, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelPart**](../Model/ModelPart.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bookPart**
> \ispserverfarm\sevdesk\phpclient\Model\ModelPart bookPart($id, $body)

add / remove parts from the stock

Calls book() in Part.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartApi();
$id = 56; // int | id of part of which you want to update the stock
$body = "name=&amount=&date=&object[id]&object[objectName]=&supplier[id]=&supplier[objectName]=Contact"; // string | Parameters which need to be updated. Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->bookPart($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->bookPart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of part of which you want to update the stock |
 **body** | **string**| Parameters which need to be updated. Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelPart**](../Model/ModelPart.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePart**
> deletePart($id)

Delete an existing part

Calls the delete() function in Part.php. Be aware that you can't delete parts which are used somewhere!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartApi();
$id = 56; // int | id of the part you want to delete

try {
    $api_instance->deletePart($id);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->deletePart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the part you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicatePart**
> \ispserverfarm\sevdesk\phpclient\Model\ModelPart duplicatePart($id)

Duplicate an existing part

Calls duplicate() in Part.php to duplicate the specified part. Mind that the stock will be zero

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartApi();
$id = 56; // int | Id of the part which you want to duplicate

try {
    $result = $api_instance->duplicatePart($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->duplicatePart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the part which you want to duplicate |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelPart**](../Model/ModelPart.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getParts**
> \ispserverfarm\sevdesk\phpclient\Model\ModelPart getParts($limit, $offset, $embed)

Get an overview of all parts

Calls Part.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned parts start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getParts($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->getParts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned parts start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelPart**](../Model/ModelPart.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partGetLastLog**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInventoryPartLog partGetLastLog($id, $max_date, $embed)

Get last log about the part

Calls getLastLog() in Part.php to get the last log about the specified part

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartApi();
$id = 56; // int | Id of the part of which you want to get the last log
$max_date = ""; // string | Sets the maximal date if required
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->partGetLastLog($id, $max_date, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->partGetLastLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the part of which you want to get the last log |
 **max_date** | **string**| Sets the maximal date if required | [optional] [default to ]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInventoryPartLog**](../Model/ModelInventoryPartLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partGetPrice**
> partGetPrice($id, $contact_id, $contact_object_name, $part_unity_id, $part_unity_object_name)

Get price of a specified part

Calls getPrice() in Part.php to get the price of the specified part

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartApi();
$id = 56; // int | Id of the part of which you want to get the price
$contact_id = 56; // int | Enter valid contact id here for getting a part contact price
$contact_object_name = ""; // string | Enter 'Contact' here for getting a part contact price
$part_unity_id = 56; // int | Enter a valid part unity id here for getting a part unity price
$part_unity_object_name = ""; // string | Enter 'PartUnity' here for getting a part unity price

try {
    $api_instance->partGetPrice($id, $contact_id, $contact_object_name, $part_unity_id, $part_unity_object_name);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->partGetPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the part of which you want to get the price |
 **contact_id** | **int**| Enter valid contact id here for getting a part contact price | [optional]
 **contact_object_name** | **string**| Enter &#39;Contact&#39; here for getting a part contact price | [optional] [default to ]
 **part_unity_id** | **int**| Enter a valid part unity id here for getting a part unity price | [optional]
 **part_unity_object_name** | **string**| Enter &#39;PartUnity&#39; here for getting a part unity price | [optional] [default to ]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partGetStock**
> partGetStock($id, $max_date)

Get stock of the part

Calls getStock() in Part.php to get the stock of the specified part

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartApi();
$id = 56; // int | Id of the part of which you want to get stock
$max_date = ""; // string | Sets the maximal date if required. The function will return the stock of the part at the specified date!

try {
    $api_instance->partGetStock($id, $max_date);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->partGetStock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the part of which you want to get stock |
 **max_date** | **string**| Sets the maximal date if required. The function will return the stock of the part at the specified date! | [optional] [default to ]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **partGetStockBefore**
> partGetStockBefore($id, $date)

Get stock difference of the part before a specified date

Calls getStockBefore() in Part.php to get the stock difference of the specified part before the specified date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartApi();
$id = 56; // int | Id of the part of which you want to get the stock difference
$date = ""; // string | You will get the stock difference before this specified date, otherwise the current date will be used

try {
    $api_instance->partGetStockBefore($id, $date);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->partGetStockBefore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the part of which you want to get the stock difference |
 **date** | **string**| You will get the stock difference before this specified date, otherwise the current date will be used | [optional] [default to ]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePart**
> \ispserverfarm\sevdesk\phpclient\Model\ModelPart updatePart($id, $body)

Update an existing part

Calls PartContactPrice to update a part

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\PartApi();
$id = 56; // int | id of part you want to update
$body = "body_example"; // string | Parameters which need to be updated. Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updatePart($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartApi->updatePart: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of part you want to update |
 **body** | **string**| Parameters which need to be updated. Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelPart**](../Model/ModelPart.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

