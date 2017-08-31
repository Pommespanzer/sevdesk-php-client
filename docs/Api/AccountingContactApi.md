# ispserverfarm\sevdesk\php-client\AccountingContactApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountingContactIsAvailableDebitorCreditorNumber**](AccountingContactApi.md#accountingContactIsAvailableDebitorCreditorNumber) | **GET** /AccountingContact/isAvailableDebitorCreditorNumber | Return if a debitor / creditor number is available
[**addAccountingContact**](AccountingContactApi.md#addAccountingContact) | **POST** /AccountingContact | Create a new accounting contact
[**deleteAccountingContact**](AccountingContactApi.md#deleteAccountingContact) | **DELETE** /AccountingContact/{id} | Delete an existing accounting contact
[**getAccountingContacts**](AccountingContactApi.md#getAccountingContacts) | **GET** /AccountingContact | Get an overview of all accounting contacts
[**updateAccountingContact**](AccountingContactApi.md#updateAccountingContact) | **PUT** /AccountingContact/{id} | Update an existing accounting contact


# **accountingContactIsAvailableDebitorCreditorNumber**
> accountingContactIsAvailableDebitorCreditorNumber($contact_id, $contact_object_name, $debitor_number, $creditor_number)

Return if a debitor / creditor number is available

Calls isAvailableDebitorCreditorNumber() in AccountingContact.php to get if the debitor / creditor number is available.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\AccountingContactApi();
$contact_id = 56; // int | If you want to exclude a contact from getting checked you can provide its id here
$contact_object_name = "Contact"; // string | Contact object name
$debitor_number = ""; // string | debitor number of which you want to know if it is available
$creditor_number = ""; // string | creditor number of which you want to know if it is available

try {
    $api_instance->accountingContactIsAvailableDebitorCreditorNumber($contact_id, $contact_object_name, $debitor_number, $creditor_number);
} catch (Exception $e) {
    echo 'Exception when calling AccountingContactApi->accountingContactIsAvailableDebitorCreditorNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **contact_id** | **int**| If you want to exclude a contact from getting checked you can provide its id here | [optional]
 **contact_object_name** | **string**| Contact object name | [optional] [default to Contact]
 **debitor_number** | **string**| debitor number of which you want to know if it is available | [optional] [default to ]
 **creditor_number** | **string**| creditor number of which you want to know if it is available | [optional] [default to ]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addAccountingContact**
> \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingContact addAccountingContact($body)

Create a new accounting contact

Calls AccountingContact.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\AccountingContactApi();
$body = "contact[id]=&contact[objectName]=Contact&debitorNumber=&creditorNumber="; // string | To create an accounting contact, simply enter desired values after parameter= and remove the quotation marks.

try {
    $result = $api_instance->addAccountingContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingContactApi->addAccountingContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an accounting contact, simply enter desired values after parameter&#x3D; and remove the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingContact**](../Model/ModelAccountingContact.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAccountingContact**
> deleteAccountingContact($id)

Delete an existing accounting contact

Calls the delete() function in AccountingContact.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\AccountingContactApi();
$id = 56; // int | id of accounting contact you want to delete

try {
    $api_instance->deleteAccountingContact($id);
} catch (Exception $e) {
    echo 'Exception when calling AccountingContactApi->deleteAccountingContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of accounting contact you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAccountingContacts**
> \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingContact getAccountingContacts($limit, $offset, $embed)

Get an overview of all accounting contacts

Calls AccountingContact.php to get necessary variables.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\AccountingContactApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned discounts start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getAccountingContacts($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingContactApi->getAccountingContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned discounts start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingContact**](../Model/ModelAccountingContact.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAccountingContact**
> \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingContact updateAccountingContact($id, $body)

Update an existing accounting contact

Calls AccountingContact.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\php-client\Api\AccountingContactApi();
$id = 56; // int | id of accounting contact you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create accounting contact.    Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateAccountingContact($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountingContactApi->updateAccountingContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of accounting contact you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create accounting contact.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelAccountingContact**](../Model/ModelAccountingContact.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

