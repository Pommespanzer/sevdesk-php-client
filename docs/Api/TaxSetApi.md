# ispserverfarm\sevdesk\phpclient\TaxSetApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTaxSet**](TaxSetApi.md#addTaxSet) | **POST** /TaxSet | Create a new tax set
[**deleteTaxSet**](TaxSetApi.md#deleteTaxSet) | **DELETE** /TaxSet/{id} | Delete an existing tax set
[**getTaxSets**](TaxSetApi.md#getTaxSets) | **GET** /TaxSet | Get an overview of all tax sets
[**updateTaxSet**](TaxSetApi.md#updateTaxSet) | **PUT** /TaxSet/{id} | Update an existing tax set


# **addTaxSet**
> \ispserverfarm\sevdesk\phpclient\model\ModelTaxSet addTaxSet($body)

Create a new tax set

Calls TaxSet.php to create a new tax set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\TaxSetApi();
$body = "text=&taxRate=&showInvoice=&showDebitVoucher=&showCreditVoucher="; // string | To create a tax set, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addTaxSet($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxSetApi->addTaxSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a tax set, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelTaxSet**](../Model/ModelTaxSet.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTaxSet**
> deleteTaxSet($id)

Delete an existing tax set

Calls the delete() function in TaxSet.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\TaxSetApi();
$id = 56; // int | Id of tax set you want to delete

try {
    $api_instance->deleteTaxSet($id);
} catch (Exception $e) {
    echo 'Exception when calling TaxSetApi->deleteTaxSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of tax set you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTaxSets**
> \ispserverfarm\sevdesk\phpclient\model\ModelTaxSet getTaxSets($limit, $offset, $embed)

Get an overview of all tax sets

Calls TaxSet.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\TaxSetApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned tax sets start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getTaxSets($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxSetApi->getTaxSets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned tax sets start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelTaxSet**](../Model/ModelTaxSet.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateTaxSet**
> \ispserverfarm\sevdesk\phpclient\model\ModelTaxSet updateTaxSet($id, $body)

Update an existing tax set

Calls TaxSet.php to update an existing tax set

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\TaxSetApi();
$id = 56; // int | Id of tax set you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create tax set.    Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateTaxSet($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxSetApi->updateTaxSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of tax set you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create tax set.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelTaxSet**](../Model/ModelTaxSet.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

