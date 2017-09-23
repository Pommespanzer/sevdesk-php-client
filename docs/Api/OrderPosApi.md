# ispserverfarm\sevdesk\phpclient\OrderPosApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrderPos**](OrderPosApi.md#addOrderPos) | **POST** /OrderPos | Create a new order position
[**deleteOrderPos**](OrderPosApi.md#deleteOrderPos) | **DELETE** /OrderPos/{id} | Delete an existing order position
[**getOrderPositions**](OrderPosApi.md#getOrderPositions) | **GET** /OrderPos | Get an overview of all order positions
[**updateOrderPos**](OrderPosApi.md#updateOrderPos) | **PUT** /OrderPos/{id} | Update an existing order position


# **addOrderPos**
> \ispserverfarm\sevdesk\phpclient\Model\ModelOrderPos addOrderPos($body)

Create a new order position

Calls OrderPos.php.     As described in the Model_Order earlier, some of its parameters get their value from other models/functions.     OrderPos is one of those Models and provides the ability to add products/parts to your order which fills values like sumNet,taxation, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\OrderPosApi();
$body = "order[id]=194409&order[objectName]=Order&quantity=1&price=5.42&taxRate=19&unity[id]=1&unity[objectName]=Unity"; // string | To create an order position, simply enter desired values after parameter= and remove the quotation marks.      Adds a product/part to an order with a price, quantity etc, therefore the order model gets sumNet and other parameters from it too

try {
    $result = $api_instance->addOrderPos($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPosApi->addOrderPos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an order position, simply enter desired values after parameter&#x3D; and remove the quotation marks.      Adds a product/part to an order with a price, quantity etc, therefore the order model gets sumNet and other parameters from it too |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelOrderPos**](../Model/ModelOrderPos.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrderPos**
> deleteOrderPos($id)

Delete an existing order position

Calls the delete() function in OrderPos.php. This does NOT delete an order, just the position which belonged to the order!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\OrderPosApi();
$id = 56; // int | id of order position you want to delete

try {
    $api_instance->deleteOrderPos($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderPosApi->deleteOrderPos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of order position you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderPositions**
> \ispserverfarm\sevdesk\phpclient\Model\ModelOrderPos getOrderPositions($limit, $offset, $embed)

Get an overview of all order positions

Calls OrderPos.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\OrderPosApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned order positions start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getOrderPositions($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPosApi->getOrderPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned order positions start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelOrderPos**](../Model/ModelOrderPos.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrderPos**
> \ispserverfarm\sevdesk\phpclient\Model\ModelOrderPos updateOrderPos($id, $body)

Update an existing order position

TODO: Enter short backend documentation here

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\OrderPosApi();
$id = 56; // int | id of order position you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create order position.        Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updateOrderPos($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderPosApi->updateOrderPos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of order position you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create order position.        Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelOrderPos**](../Model/ModelOrderPos.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

