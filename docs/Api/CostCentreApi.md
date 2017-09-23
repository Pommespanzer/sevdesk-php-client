# ispserverfarm\sevdesk\phpclient\CostCentreApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCostCentre**](CostCentreApi.md#addCostCentre) | **POST** /CostCentre | Create a new cost centre
[**deleteCostCentre**](CostCentreApi.md#deleteCostCentre) | **DELETE** /CostCentre/{id} | Delete an existing cost centre
[**getCostCentre**](CostCentreApi.md#getCostCentre) | **GET** /CostCentre | Get an overview of all cost centre
[**updateCostCentre**](CostCentreApi.md#updateCostCentre) | **PUT** /CostCentre/{id} | Update an existing cost centre


# **addCostCentre**
> \ispserverfarm\sevdesk\phpclient\Model\ModelCostCentre addCostCentre($body)

Create a new cost centre

Calls CostCentre.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CostCentreApi();
$body = "name=&color=&number="; // string | To create a cost centre, simply enter desired values after parameter= and remove the quotation marks

try {
    $result = $api_instance->addCostCentre($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->addCostCentre: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a cost centre, simply enter desired values after parameter&#x3D; and remove the quotation marks |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelCostCentre**](../Model/ModelCostCentre.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCostCentre**
> deleteCostCentre($id)

Delete an existing cost centre

Calls the delete() function in CostCentre.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CostCentreApi();
$id = 56; // int | id of cost centre you want to delete

try {
    $api_instance->deleteCostCentre($id);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->deleteCostCentre: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of cost centre you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCostCentre**
> \ispserverfarm\sevdesk\phpclient\Model\ModelCostCentre getCostCentre($limit, $offset, $embed)

Get an overview of all cost centre

Calls CostCentre.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CostCentreApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned cost centre start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getCostCentre($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->getCostCentre: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned cost centre start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelCostCentre**](../Model/ModelCostCentre.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCostCentre**
> \ispserverfarm\sevdesk\phpclient\Model\ModelCostCentre updateCostCentre($id, $body)

Update an existing cost centre

Calls CostCentre.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CostCentreApi();
$id = 56; // int | id of cost centre you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create cost centre.    Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateCostCentre($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CostCentreApi->updateCostCentre: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of cost centre you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create cost centre.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelCostCentre**](../Model/ModelCostCentre.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

