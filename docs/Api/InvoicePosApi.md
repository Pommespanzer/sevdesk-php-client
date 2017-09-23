# ispserverfarm\sevdesk\phpclient\InvoicePosApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInvoicePos**](InvoicePosApi.md#addInvoicePos) | **POST** /InvoicePos | Create a new invoice position
[**deleteInvoicePos**](InvoicePosApi.md#deleteInvoicePos) | **DELETE** /InvoicePos/{id} | Delete an existing invoice position
[**getInvoicePositions**](InvoicePosApi.md#getInvoicePositions) | **GET** /InvoicePos | Get an overview of all invoice positions
[**updateInvoicePos**](InvoicePosApi.md#updateInvoicePos) | **PUT** /InvoicePos/{id} | Update an existing invoice position


# **addInvoicePos**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelInvoicePos addInvoicePos($body)

Create a new invoice position

Calls InvoicePos.php.    As described in the Model_Invoice earlier, some of its parameters get their value from other models/functions.    InvoicePos is one of those Models and provides the ability to add products/parts to your invoice which fills values like sumNet,taxation, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoicePosApi();
$body = "invoice[id]=210&invoice[objectName]=Invoice&name=Pizza&quantity=1&price=4.5&unity[id]=1&unity[objectName]=Unity&taxRate=7"; // string | To create an invoice position, simply enter desired values after parameter= and remove the quotation marks.    Adds a product/part to an invoice with a price, quantity etc, therefore the invoice model gets sumNet and other parameters from it too

try {
    $result = $api_instance->addInvoicePos($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePosApi->addInvoicePos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an invoice position, simply enter desired values after parameter&#x3D; and remove the quotation marks.    Adds a product/part to an invoice with a price, quantity etc, therefore the invoice model gets sumNet and other parameters from it too |

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelInvoicePos**](../Model/ModelInvoicePos.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInvoicePos**
> deleteInvoicePos($id)

Delete an existing invoice position

Calls the delete() function in InvoicePos.php. This does NOT delete an invoice, just the position which belonged to the invoice!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoicePosApi();
$id = 56; // int | id of invoice position you want to delete

try {
    $api_instance->deleteInvoicePos($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePosApi->deleteInvoicePos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of invoice position you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoicePositions**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelInvoicePos getInvoicePositions($limit, $offset, $embed)

Get an overview of all invoice positions

Calls InvoicePos.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoicePosApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned invoice positions start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getInvoicePositions($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePosApi->getInvoicePositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned invoice positions start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelInvoicePos**](../Model/ModelInvoicePos.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoicePos**
> \ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelInvoicePos updateInvoicePos($id, $body)

Update an existing invoice position

TODO: Enter short backend documentation here

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoicePosApi();
$id = 56; // int | id of invoice position you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create invoice position.     Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updateInvoicePos($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicePosApi->updateInvoicePos: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of invoice position you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create invoice position.     Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelInvoicePos**](../Model/ModelInvoicePos.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

