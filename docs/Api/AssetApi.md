# isp-serverfarm\sevdesk\php-client\AssetApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAsset**](AssetApi.md#addAsset) | **POST** /Asset | Create a new asset
[**assetGetDepreciationAmount**](AssetApi.md#assetGetDepreciationAmount) | **GET** /Asset/{id}/getDepreciationAmount | Get depreciation amount of the specified asset for the given year/month
[**assetGetResidualValue**](AssetApi.md#assetGetResidualValue) | **GET** /Asset/{id}/getResidualValue | Get residual value of the specified asset for the given year/month
[**assetGetVoucher**](AssetApi.md#assetGetVoucher) | **GET** /Asset/{id}/getVoucher | Get voucher of the specified asset
[**deleteAsset**](AssetApi.md#deleteAsset) | **DELETE** /Asset/{id} | Delete an existing asset
[**getAssets**](AssetApi.md#getAssets) | **GET** /Asset | Get an overview of all assets
[**updateAsset**](AssetApi.md#updateAsset) | **PUT** /Asset/{id} | Update an existing asset


# **addAsset**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAsset addAsset($body)

Create a new asset

Calls Asset.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AssetApi();
$body = "voucherPos[id]=&voucherPos[objectName]=VoucherPos&name=&usefulLife=&acquisitionDate=&purchasePrice=&taxRate=19&accountingType[id]=&accountingType[objectName]=AccountingType"; // string | To create an asset, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addAsset($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->addAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an asset, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAsset**](../Model/ModelAsset.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetGetDepreciationAmount**
> assetGetDepreciationAmount($id, $year, $month)

Get depreciation amount of the specified asset for the given year/month

Calls getDepreciationAmount() in Asset.php to get the depreciation ammount of the specified asset for the given year/month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AssetApi();
$id = 56; // int | Id of the asset of which you want to get the depreciation amount
$year = ""; // string | year for which you want to get the depreciation amount
$month = ""; // string | month for which you want to get the depreciation amount

try {
    $api_instance->assetGetDepreciationAmount($id, $year, $month);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->assetGetDepreciationAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the asset of which you want to get the depreciation amount |
 **year** | **string**| year for which you want to get the depreciation amount | [optional] [default to ]
 **month** | **string**| month for which you want to get the depreciation amount | [optional] [default to ]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetGetResidualValue**
> assetGetResidualValue($id, $year, $month)

Get residual value of the specified asset for the given year/month

Calls getResidualValue() in Asset.php to get the residual value of the specified asset for the given year/month

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AssetApi();
$id = 56; // int | Id of the asset of which you want to get the residual value
$year = ""; // string | year for which you want to get the residual value
$month = ""; // string | month for which you want to get the residual value

try {
    $api_instance->assetGetResidualValue($id, $year, $month);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->assetGetResidualValue: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the asset of which you want to get the residual value |
 **year** | **string**| year for which you want to get the residual value | [optional] [default to ]
 **month** | **string**| month for which you want to get the residual value | [optional] [default to ]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **assetGetVoucher**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelVoucher assetGetVoucher($id, $embed)

Get voucher of the specified asset

Calls getVoucher() in Asset.php to get the voucher of the specified asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AssetApi();
$id = 56; // int | Id of the asset of which you want to get the voucher
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->assetGetVoucher($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->assetGetVoucher: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the asset of which you want to get the voucher |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelVoucher**](../Model/ModelVoucher.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAsset**
> deleteAsset($id)

Delete an existing asset

Calls the delete() function in Asset.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AssetApi();
$id = 56; // int | id of asset you want to delete

try {
    $api_instance->deleteAsset($id);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->deleteAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of asset you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAssets**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAsset getAssets($limit, $offset, $embed)

Get an overview of all assets

Calls Asset.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AssetApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned assets start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getAssets($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->getAssets: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned assets start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAsset**](../Model/ModelAsset.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAsset**
> \isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAsset updateAsset($id, $body)

Update an existing asset

Calls Asset.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AssetApi();
$id = 56; // int | id of asset you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create asset.    Append the parameters according to the syntax: parameter1=&parameter2= and remove the quotation marks!

try {
    $result = $api_instance->updateAsset($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AssetApi->updateAsset: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of asset you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create asset.    Append the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; and remove the quotation marks! | [optional]

### Return type

[**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelAsset**](../Model/ModelAsset.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

