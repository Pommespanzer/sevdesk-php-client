# isp-serverfarm\sevdesk\php-client\AccountingTypeApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountingTypeGetAccountingNumber**](AccountingTypeApi.md#accountingTypeGetAccountingNumber) | **GET** /AccountingType/{id}/getAccountingNumber | Get accounting system number of the specified accounting type
[**accountingTypeGetAccountingNumberDepreciation**](AccountingTypeApi.md#accountingTypeGetAccountingNumberDepreciation) | **GET** /AccountingType/{id}/getAccountingNumberDepreciation | Get accounting system number depreciation of the specified accounting type
[**accountingTypeGetAccountingSystemNumber**](AccountingTypeApi.md#accountingTypeGetAccountingSystemNumber) | **GET** /AccountingType/{id}/getAccountingSystemNumber | Get accounting system number of the specified accounting type
[**addAccountingType**](AccountingTypeApi.md#addAccountingType) | **POST** /AccountingType | Create a new accounting type
[**addAccountingTypeFactory**](AccountingTypeApi.md#addAccountingTypeFactory) | **POST** /AccountingType/Factory/createType | Create a new accounting type
[**deleteAccountingType**](AccountingTypeApi.md#deleteAccountingType) | **DELETE** /AccountingType/{id} | Delete an existing accounting type
[**getAccountingTypes**](AccountingTypeApi.md#getAccountingTypes) | **GET** /AccountingType | Get an overview of all accounting types
[**updateAccountingType**](AccountingTypeApi.md#updateAccountingType) | **PUT** /AccountingType/{id} | Update an existing accounting type


# **accountingTypeGetAccountingNumber**
> accountingTypeGetAccountingNumber($id)

Get accounting system number of the specified accounting type

Calls getAccountingNumber() in AccountingType.php to get the accounting system number of the specified accounting type.    Basically this function does just calls getAccountingSystemNumber() and returns just the number, not the model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AccountingTypeApi();
$id = 56; // int | Id of the accounting type for which you want to get the accounting system number

try {
    $api_instance->accountingTypeGetAccountingNumber($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTypeApi->accountingTypeGetAccountingNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the accounting type for which you want to get the accounting system number |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingTypeGetAccountingNumberDepreciation**
> accountingTypeGetAccountingNumberDepreciation($id)

Get accounting system number depreciation of the specified accounting type

Calls getAccountingNumberDepreciation() in AccountingType.php to get the accounting system number depreciation of the specified accounting type.    Basically this function does just calls getAccountingSystemNumber() and returns just the depreciation, not the model.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AccountingTypeApi();
$id = 56; // int | Id of the accounting type for which you want to get the accounting system number depreciation

try {
    $api_instance->accountingTypeGetAccountingNumberDepreciation($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTypeApi->accountingTypeGetAccountingNumberDepreciation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the accounting type for which you want to get the accounting system number depreciation |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **accountingTypeGetAccountingSystemNumber**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingSystemNumber accountingTypeGetAccountingSystemNumber($id, $embed)

Get accounting system number of the specified accounting type

Calls getAccountingSystemNumber() in AccountingType.php to get the accounting system number of the specified accounting type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AccountingTypeApi();
$id = 56; // int | Id of the accounting type for which you want to get the accounting system number
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->accountingTypeGetAccountingSystemNumber($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTypeApi->accountingTypeGetAccountingSystemNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the accounting type for which you want to get the accounting system number |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingSystemNumber**](../Model/ModelAccountingSystemNumber.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addAccountingType**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingType addAccountingType($body)

Create a new accounting type

Calls AccountingType.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AccountingTypeApi();
$body = "parent[id]=&parent[objectName]=AccountingType&name=&type=&assetType=N&status=100"; // string | To create an accounting type, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addAccountingType($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTypeApi->addAccountingType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an accounting type, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingType**](../Model/ModelAccountingType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addAccountingTypeFactory**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingType addAccountingTypeFactory($body)

Create a new accounting type

With the new version of sevdesk some models are not created by calling the Model.php directly but by calling the Factory.php because of better performance and flexibility.    Basically the Model.php itself still constructs the model however new instances of the model are created trough the factory.php    So for example when you create a new invoice it wont be saved by a POST request with '/Invoice?para1=&...' but with the saveInvoice function in Factory.php 'Voucher/Factory/saveInvoice?para1='

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AccountingTypeApi();
$body = "name=&type=&number=&assetType=N&numberDepreciation=&automatic="; // string | To create an accounting type, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addAccountingTypeFactory($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTypeApi->addAccountingTypeFactory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an accounting type, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingType**](../Model/ModelAccountingType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountingType**
> deleteAccountingType($id)

Delete an existing accounting type

Calls the delete() function in AccountingType.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AccountingTypeApi();
$id = 56; // int | id of accounting type you want to delete

try {
    $api_instance->deleteAccountingType($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTypeApi->deleteAccountingType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of accounting type you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountingTypes**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingType getAccountingTypes($limit, $offset, $embed)

Get an overview of all accounting types

Calls AccountingType.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AccountingTypeApi();
$limit = 1000; // int | Limits the number of entries returned. Default is 1000
$offset = 0; // int | Set the index where the returned accounting types start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getAccountingTypes($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTypeApi->getAccountingTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 1000 | [optional] [default to 1000]
 **offset** | **int**| Set the index where the returned accounting types start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingType**](../Model/ModelAccountingType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountingType**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingType updateAccountingType($id, $body)

Update an existing accounting type

Calls AccountingType.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AccountingTypeApi();
$id = 56; // int | id of accounting type you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create accounting type.    Append the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks!

try {
    $result = $api_instance->updateAccountingType($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingTypeApi->updateAccountingType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of accounting type you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create accounting type.    Append the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks! | [optional]

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingType**](../Model/ModelAccountingType.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

