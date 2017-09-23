# ispserverfarm\sevdesk\phpclient\CheckAccountApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCheckAccount**](CheckAccountApi.md#addCheckAccount) | **POST** /CheckAccount | Create a new check account
[**checkAccountGetCheckAccountDetails**](CheckAccountApi.md#checkAccountGetCheckAccountDetails) | **GET** /CheckAccount/{id}/getCheckAccountDetails | Get check account details of figo check account
[**checkAccountGetCurrentBalance**](CheckAccountApi.md#checkAccountGetCurrentBalance) | **GET** /CheckAccount/{id}/getCurrentBalance | Get current balance of the specified check account
[**checkAccountGetIbanBic**](CheckAccountApi.md#checkAccountGetIbanBic) | **GET** /CheckAccount/{id}/getIbanBic | Get iban and bic of figo check account
[**checkAccountGetNewTransactions**](CheckAccountApi.md#checkAccountGetNewTransactions) | **GET** /CheckAccount/{id}/getNewTransactions | Get new transactions from figo
[**checkAccountGetPaymentIsSupported**](CheckAccountApi.md#checkAccountGetPaymentIsSupported) | **GET** /CheckAccount/getPaymentIsSupported | Return if a payment method is supported
[**checkAccountGetSupportedBankServices**](CheckAccountApi.md#checkAccountGetSupportedBankServices) | **GET** /CheckAccount/getSupportedBankServices | Get supported bank services of figo
[**checkAccountGetSupportedTanSchemes**](CheckAccountApi.md#checkAccountGetSupportedTanSchemes) | **GET** /CheckAccount/{id}/getSupportedTanSchemes | Get supported tan schemes of figo
[**checkAccountSetDefault**](CheckAccountApi.md#checkAccountSetDefault) | **PUT** /CheckAccount/{id}/setDefault | Set the specified check accounts as the default check account
[**checkAccountTransfer**](CheckAccountApi.md#checkAccountTransfer) | **PUT** /CheckAccount/{id}/transfer | Transfer an amount from one check account to another
[**deleteCheckAccount**](CheckAccountApi.md#deleteCheckAccount) | **DELETE** /CheckAccount/{id} | Delete an existing check account
[**getCheckAccounts**](CheckAccountApi.md#getCheckAccounts) | **GET** /CheckAccount | Get an overview of all check accounts
[**updateCheckAccount**](CheckAccountApi.md#updateCheckAccount) | **PUT** /CheckAccount/{id} | Update an existing check account


# **addCheckAccount**
> \ispserverfarm\sevdesk\phpclient\model\ModelCheckAccount addCheckAccount($body)

Create a new check account

Calls CheckAccount.php to create a check account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();
$body = "name=&type=&currency=&status="; // string | To create a check account, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addCheckAccount($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->addCheckAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create a check account, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelCheckAccount**](../Model/ModelCheckAccount.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAccountGetCheckAccountDetails**
> checkAccountGetCheckAccountDetails($id)

Get check account details of figo check account

Calls getCheckAccountDetails() in CheckAccount.php to get the details of the figo check account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();
$id = 56; // int | Id of the check account you want to use. Must be a figo check account!

try {
    $api_instance->checkAccountGetCheckAccountDetails($id);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->checkAccountGetCheckAccountDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the check account you want to use. Must be a figo check account! |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAccountGetCurrentBalance**
> checkAccountGetCurrentBalance($id)

Get current balance of the specified check account

Calls getCurrentBalance() in CheckAccount.php to get the balance of the specified check account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();
$id = 56; // int | Id of the check account of which you want the current balance

try {
    $api_instance->checkAccountGetCurrentBalance($id);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->checkAccountGetCurrentBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the check account of which you want the current balance |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAccountGetIbanBic**
> checkAccountGetIbanBic($id)

Get iban and bic of figo check account

Calls getIbanBic() in CheckAccount.php to get the iban and bic of the figo check account.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();
$id = 56; // int | Id of the check account you want to use. Must be a figo check account!

try {
    $api_instance->checkAccountGetIbanBic($id);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->checkAccountGetIbanBic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the check account you want to use. Must be a figo check account! |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAccountGetNewTransactions**
> checkAccountGetNewTransactions($id, $from_date, $to_date)

Get new transactions from figo

Calls getNewTransactions() in CheckAccount.php to check if there are any transactions in figo that are not in the db and import them.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();
$id = 56; // int | Id of the check account you want to use
$from_date = ""; // string | Start date of period you want to check on
$to_date = ""; // string | End date of period you want to check on

try {
    $api_instance->checkAccountGetNewTransactions($id, $from_date, $to_date);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->checkAccountGetNewTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the check account you want to use |
 **from_date** | **string**| Start date of period you want to check on | [default to ]
 **to_date** | **string**| End date of period you want to check on | [default to ]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAccountGetPaymentIsSupported**
> checkAccountGetPaymentIsSupported()

Return if a payment method is supported

Calls getPaymentIsSupported() in CheckAccount.php to get if a payment method is supported.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();

try {
    $api_instance->checkAccountGetPaymentIsSupported();
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->checkAccountGetPaymentIsSupported: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAccountGetSupportedBankServices**
> checkAccountGetSupportedBankServices()

Get supported bank services of figo

Calls getSupportedBankServices() in CheckAccount.php to get the bank services figo supports.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();

try {
    $api_instance->checkAccountGetSupportedBankServices();
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->checkAccountGetSupportedBankServices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAccountGetSupportedTanSchemes**
> checkAccountGetSupportedTanSchemes($id)

Get supported tan schemes of figo

Calls getSupportedTanSchemes() in CheckAccount.php to get the supported tan schemes of figo.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();
$id = 56; // int | Id of the check account you want to use. Must be a figo check account!

try {
    $api_instance->checkAccountGetSupportedTanSchemes($id);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->checkAccountGetSupportedTanSchemes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the check account you want to use. Must be a figo check account! |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAccountSetDefault**
> checkAccountSetDefault($id)

Set the specified check accounts as the default check account

Calls setDefault() in CheckAccount.php to set a specified check account as the default check account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();
$id = 56; // int | Id of check account you want to set as the default check account

try {
    $api_instance->checkAccountSetDefault($id);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->checkAccountSetDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of check account you want to set as the default check account |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkAccountTransfer**
> checkAccountTransfer($id, $amount, $target_id, $target_object_name, $date)

Transfer an amount from one check account to another

Calls transfer() in CheckAccount.php to transfer an amount from one check account to another

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();
$id = 56; // int | Id of check account you want to use as source account
$amount = ""; // string | Amount you want to transfer
$target_id = 56; // int | Target check account id
$target_object_name = "CheckAccount"; // string | Target check account object name
$date = ""; // string | Date of the transfer

try {
    $api_instance->checkAccountTransfer($id, $amount, $target_id, $target_object_name, $date);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->checkAccountTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of check account you want to use as source account |
 **amount** | **string**| Amount you want to transfer | [default to ]
 **target_id** | **int**| Target check account id |
 **target_object_name** | **string**| Target check account object name | [default to CheckAccount]
 **date** | **string**| Date of the transfer | [default to ]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCheckAccount**
> deleteCheckAccount($id)

Delete an existing check account

Calls the delete() function in CheckAccount.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();
$id = 56; // int | Id of check account you want to delete

try {
    $api_instance->deleteCheckAccount($id);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->deleteCheckAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of check account you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCheckAccounts**
> \ispserverfarm\sevdesk\phpclient\model\ModelDiscounts getCheckAccounts($limit, $offset, $embed)

Get an overview of all check accounts

Calls CheckAccount.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned check accounts start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getCheckAccounts($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->getCheckAccounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned check accounts start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelDiscounts**](../Model/ModelDiscounts.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCheckAccount**
> \ispserverfarm\sevdesk\phpclient\model\ModelCheckAccount updateCheckAccount($id, $body)

Update an existing check account

Calls CheckAccount.php to update a check account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\CheckAccountApi();
$id = 56; // int | Id of check account you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create discount.    Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateCheckAccount($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckAccountApi->updateCheckAccount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of check account you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create discount.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\model\ModelCheckAccount**](../Model/ModelCheckAccount.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

