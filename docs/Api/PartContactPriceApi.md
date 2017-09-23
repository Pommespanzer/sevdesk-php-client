# ispserverfarm\sevdesk\PartContactPriceApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addPartContactPrice**](PartContactPriceApi.md#addPartContactPrice) | **POST** /PartContactPrice | Create a new part contact price
[**deletePartContactPrice**](PartContactPriceApi.md#deletePartContactPrice) | **DELETE** /PartContactPrice/{id} | Delete an existing part contact price
[**getPartContactPrices**](PartContactPriceApi.md#getPartContactPrices) | **GET** /PartContactPrice | Get an overview of all part contact prices
[**updatePartContactPrice**](PartContactPriceApi.md#updatePartContactPrice) | **PUT** /PartContactPrice/{id} | Update an existing part contact price


# **addPartContactPrice**
> \ispserverfarm\sevdesk\sevDeskModel\ModelPartContactPrice addPartContactPrice($body)

Create a new part contact price

Calls PartContactPrice.php to add a part contact price

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\PartContactPriceApi();
$body = "contact[id]=&contact[objectName]=Contact&part[id]=&part[objectName]=Part&type=&priceNet=&priceGross="; // string | To create a part contact price, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addPartContactPrice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartContactPriceApi->addPartContactPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a part contact price, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelPartContactPrice**](../Model/ModelPartContactPrice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePartContactPrice**
> deletePartContactPrice($id)

Delete an existing part contact price

Calls PartContactPrice.php to delete a part contact price

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\PartContactPriceApi();
$id = 56; // int | id of the part contact price you want to delete

try {
    $api_instance->deletePartContactPrice($id);
} catch (Exception $e) {
    echo 'Exception when calling PartContactPriceApi->deletePartContactPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of the part contact price you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPartContactPrices**
> \ispserverfarm\sevdesk\sevDeskModel\ModelPartContactPrice getPartContactPrices($limit, $offset, $embed)

Get an overview of all part contact prices

Calls PartContactPrice.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\PartContactPriceApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned part contact prices start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getPartContactPrices($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartContactPriceApi->getPartContactPrices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned part contact prices start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelPartContactPrice**](../Model/ModelPartContactPrice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePartContactPrice**
> \ispserverfarm\sevdesk\sevDeskModel\ModelPartContactPrice updatePartContactPrice($id, $body)

Update an existing part contact price

Calls PartContactPrice.php to update a part contact price

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\PartContactPriceApi();
$id = 56; // int | id of part contact price you want to update
$body = "body_example"; // string | Parameters which need to be updated. Enter the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks

try {
    $result = $api_instance->updatePartContactPrice($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PartContactPriceApi->updatePartContactPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of part contact price you want to update |
 **body** | **string**| Parameters which need to be updated. Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelPartContactPrice**](../Model/ModelPartContactPrice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

