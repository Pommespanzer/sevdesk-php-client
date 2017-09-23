# ispserverfarm\sevdesk\SearchApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**search**](SearchApi.md#search) | **GET** /Search/search | Search for a specified term


# **search**
> search($embed, $term, $search_type)

Search for a specified term

Calls search() in Search.php to search with a specified term in Contacts, Orders, Invoices, Vouchers, Documents and Parts.    It is also possible to search without defining a model, so sevDesk system operations will also be shown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\SearchApi();
$embed = "contact,contact.parent,parent"; // string | 
$term = ""; // string | Term you want to search
$search_type = array("search_type_example"); // string[] | Specify a type (model) that you want to have searched

try {
    $api_instance->search($embed, $term, $search_type);
} catch (Exception $e) {
    echo 'Exception when calling SearchApi->search: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **embed** | **string**|  | [optional] [default to contact,contact.parent,parent]
 **term** | **string**| Term you want to search | [optional] [default to ]
 **search_type** | [**string[]**](../Model/string.md)| Specify a type (model) that you want to have searched | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

