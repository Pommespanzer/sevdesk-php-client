# ispserverfarm\sevdesk\ContactApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addAddress**](ContactApi.md#addAddress) | **POST** /Contact/{id}/addAddress | Add an address
[**addContact**](ContactApi.md#addContact) | **POST** /Contact | Create a new contact of type person or company
[**addContactCommunicationWay**](ContactApi.md#addContactCommunicationWay) | **POST** /Contact/{id}/addCommunicationWay | Create a new communication way for a contact
[**addMobile**](ContactApi.md#addMobile) | **POST** /Contact/{id}/addMobile | Add a new mobile number
[**addPhone**](ContactApi.md#addPhone) | **POST** /Contact/{id}/addPhone | Add a new phone number
[**addWebsite**](ContactApi.md#addWebsite) | **POST** /Contact/{id}/addWeb | Add a new website
[**contactAddEmail**](ContactApi.md#contactAddEmail) | **POST** /Contact/{id}/addEmail | Add a new email
[**contactFactoryCreateContact**](ContactApi.md#contactFactoryCreateContact) | **POST** /Contact/Factory/create | Create a new contact of type person or company
[**contactGetAddresses**](ContactApi.md#contactGetAddresses) | **GET** /Contact/{id}/getAddresses | Get the addresses of a specified contact
[**deleteContact**](ContactApi.md#deleteContact) | **DELETE** /Contact/{id} | Delete an existing contact
[**getContactBillingAddress**](ContactApi.md#getContactBillingAddress) | **GET** /Contact/{id}/getBillingAddress | Get the billing address of a specified contact
[**getContactBillingEmail**](ContactApi.md#getContactBillingEmail) | **GET** /Contact/{id}/getBillingEmail | Get the billing email of a specified contact
[**getContactCommunicationWays**](ContactApi.md#getContactCommunicationWays) | **GET** /Contact/{id}/getCommunicationWays | Get the communication ways of a specified contact
[**getContactMainAddress**](ContactApi.md#getContactMainAddress) | **GET** /Contact/{id}/getMainAddress | Get the main address of a specified contact
[**getContactMainEmail**](ContactApi.md#getContactMainEmail) | **GET** /Contact/{id}/getMainEmail | Get the main email of a specified contact
[**getContactMainMobile**](ContactApi.md#getContactMainMobile) | **GET** /Contact/{id}/getMainMobile | Get the main mobile of a specified contact
[**getContactMainPhone**](ContactApi.md#getContactMainPhone) | **GET** /Contact/{id}/getMainPhone | Get the main phone of a specified contact
[**getContactMainWebsite**](ContactApi.md#getContactMainWebsite) | **GET** /Contact/{id}/getMainWebsite | Get the main website of a specified contact
[**getContactRelatedCommunicationWays**](ContactApi.md#getContactRelatedCommunicationWays) | **GET** /Contact/{id}/getRelatedCommunicationWays | Get the related communication ways of a specified contact
[**getContactTabsItemCount**](ContactApi.md#getContactTabsItemCount) | **GET** /Contact/{id}/getTabsItemCount | Get number of all invoices, orders, etc. of a specified contact
[**getContacts**](ContactApi.md#getContacts) | **GET** /Contact | Get an overview of all contacts
[**getNextCustomerNumber**](ContactApi.md#getNextCustomerNumber) | **GET** /Contact/Factory/getNextCustomerNumber | Get the next customer number
[**updateContact**](ContactApi.md#updateContact) | **PUT** /Contact/{id} | Update an existing contact


# **addAddress**
> \ispserverfarm\sevdesk\sevDeskModel\ModelContactAddress addAddress($id, $body)

Add an address

Adds an address to the contact by calling addAddress() in Contact.php. Address is defined in ContactAddress.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of contact you want to add an address to
$body = "street=&city=&zip=&country=&category="; // string | Change the desired values and remove the quotation marks to add an address.

try {
    $result = $api_instance->addAddress($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->addAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of contact you want to add an address to |
 **body** | **string**| Change the desired values and remove the quotation marks to add an address. |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelContactAddress**](../Model/ModelContactAddress.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContact**
> \ispserverfarm\sevdesk\sevDeskModel\ModelContact addContact($body)

Create a new contact of type person or company

Creating a new contact of type person/company calls a shared path with the same http-verb.  However, both types require certain parameters which will indicate that their type of contact should be created.  So, using **familyname** or **name** in front of 'category' will define if either a person or a company is created

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$body = "category[id]=3&category[objectName]=Category"; // string | Concatenate the following attributes with '&' to the example and put **familyname=yourFamilyName&** at the beginning to define the **person** you want to add and remove the quotation marks:  * customerNumber  * gender (m,w, empty)  * academicTitle, titel  * surename, name2  * bankNumber, bankAccount, vatNumber  * defaultCashbackTime, defaultCashbackPercent, defaultTimeToPay  * description    Concatenate the following attributes with '&' to the example and put **name=yourCompanyName&** at the beginning  to define the **company** you want to add and remove the quotation marks:  * name2  * bankNumber, bankAccount, vatNumber  * defaultCashbackTime, defaultCashbackPercent, defaultTimeToPay  * description

try {
    $result = $api_instance->addContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->addContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| Concatenate the following attributes with &#39;&amp;&#39; to the example and put **familyname&#x3D;yourFamilyName&amp;** at the beginning to define the **person** you want to add and remove the quotation marks:  * customerNumber  * gender (m,w, empty)  * academicTitle, titel  * surename, name2  * bankNumber, bankAccount, vatNumber  * defaultCashbackTime, defaultCashbackPercent, defaultTimeToPay  * description    Concatenate the following attributes with &#39;&amp;&#39; to the example and put **name&#x3D;yourCompanyName&amp;** at the beginning  to define the **company** you want to add and remove the quotation marks:  * name2  * bankNumber, bankAccount, vatNumber  * defaultCashbackTime, defaultCashbackPercent, defaultTimeToPay  * description |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelContact**](../Model/ModelContact.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addContactCommunicationWay**
> \ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay addContactCommunicationWay($id, $value, $key, $type)

Create a new communication way for a contact

Calls addCommunicationWay() in Contact.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of contact you want to add a communication way to
$value = ""; // string | Value of the communication way you want to add
$key = 2; // int | Key of the communication way you want to add
$type = "WEB"; // string | Type of communication way you want to add

try {
    $result = $api_instance->addContactCommunicationWay($id, $value, $key, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->addContactCommunicationWay: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of contact you want to add a communication way to |
 **value** | **string**| Value of the communication way you want to add | [default to ]
 **key** | **int**| Key of the communication way you want to add | [default to 2]
 **type** | **string**| Type of communication way you want to add | [optional] [default to WEB]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay**](../Model/ModelCommunicationWay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMobile**
> addMobile($id, $body)

Add a new mobile number

Calls addMobile in Contact.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of contact you want to update
$body = "key=1&value=1337"; // string | Change the desired values and remove the quotation marks to add a mobile number.    The key represents what type of website it is (1: Private, 2: Work, 3. Fax, 4. Mobil, 5. empty, 6. Autobox, 7. Newsletter, 8. Invoice address)

try {
    $api_instance->addMobile($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->addMobile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of contact you want to update |
 **body** | **string**| Change the desired values and remove the quotation marks to add a mobile number.    The key represents what type of website it is (1: Private, 2: Work, 3. Fax, 4. Mobil, 5. empty, 6. Autobox, 7. Newsletter, 8. Invoice address) |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addPhone**
> addPhone($id, $body)

Add a new phone number

Calls addPhone() in Contact.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of contact you want to update
$body = "key=1&value=1337"; // string | Change the desired values and remove the quotation marks to add a phone number.    The key represents what type of website it is (1: Private, 2: Work, 3. Fax, 4. Mobil, 5. empty, 6. Autobox, 7. Newsletter, 8. Invoice address)

try {
    $api_instance->addPhone($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->addPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of contact you want to update |
 **body** | **string**| Change the desired values and remove the quotation marks to add a phone number.    The key represents what type of website it is (1: Private, 2: Work, 3. Fax, 4. Mobil, 5. empty, 6. Autobox, 7. Newsletter, 8. Invoice address) |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addWebsite**
> addWebsite($id, $body)

Add a new website

Calls addWeb() in Contact.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of contact you want to update
$body = "key=1&value=www.sevdesk.de"; // string | Change the desired values and remove the quotation marks to add a website.    The key represents what type of website it is (1: Private, 2: Work, 3. Fax, 4. Mobil, 5. empty, 6. Autobox, 7. Newsletter, 8. Invoice address)

try {
    $api_instance->addWebsite($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->addWebsite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of contact you want to update |
 **body** | **string**| Change the desired values and remove the quotation marks to add a website.    The key represents what type of website it is (1: Private, 2: Work, 3. Fax, 4. Mobil, 5. empty, 6. Autobox, 7. Newsletter, 8. Invoice address) |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactAddEmail**
> contactAddEmail($id, $body)

Add a new email

Calls addEmail() in Contact.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of contact you want to update
$body = "key=1&value=example@example.com"; // string | Change the desired values and remove the quotation marks to add an email.    The key represents what type of website it is (1: Private, 2: Work, 3. Fax, 4. Mobil, 5. empty, 6. Autobox, 7. Newsletter, 8. Invoice address)

try {
    $api_instance->contactAddEmail($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactAddEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of contact you want to update |
 **body** | **string**| Change the desired values and remove the quotation marks to add an email.    The key represents what type of website it is (1: Private, 2: Work, 3. Fax, 4. Mobil, 5. empty, 6. Autobox, 7. Newsletter, 8. Invoice address) |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactFactoryCreateContact**
> \ispserverfarm\sevdesk\sevDeskModel\ModelContact contactFactoryCreateContact($body)

Create a new contact of type person or company

With the new version of sevdesk some models are not created by calling the model.php directly but by calling the factory.php because of better performance and flexibility.    Basically the model.php itself still constructs the model however new instances of the model are created trough the factory.php    So for example when you create a new invoice it wont be saved by a POST request with '/Invoice?para1=&...' but with the saveInvoice function in Factory.php 'Voucher/Factory/saveInvoice?para1='    Creating a new contact of type person/company calls a shared path with the same http-verb.    However, both types require certain parameters which will indicate that their type of contact should be created.    So, using **familyname** or **name** in front of 'category' will define if either a person or a company is created

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$body = "data[category][id]=3&data[category][objectName]=Category"; // string | Concatenate the following attributes with '&' to the example and put **data[familyname]=yourFamilyName&** at the beginning to define the **person** you want to add and remove the quotation marks:  * &data[customerNumber]=  * &data[gender]= (m,w, empty)  * &data[academicTitle]=, &data[titel]=  * &data[surename]=, &data[name2]=  * &data[bankNumber]=, &data[bankAccount]=, &data[vatNumber]=  * &data[defaultCashbackTime]=, &data[defaultCashbackPercent]=, &data[defaultTimeToPay]=  * &data[description]=    Concatenate the following attributes with '&' to the example and put **data[name]=yourCompanyName&** at the beginning  to define the **company** you want to add and remove the quotation marks:  * &data[name2]=  * &data[bankNumber]=, &data[bankAccount]=, &data[vatNumber]=  * &data[defaultCashbackTime]=, &data[defaultCashbackPercent]=, &data[defaultTimeToPay]=  * &data[description]=

try {
    $result = $api_instance->contactFactoryCreateContact($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactFactoryCreateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| Concatenate the following attributes with &#39;&amp;&#39; to the example and put **data[familyname]&#x3D;yourFamilyName&amp;** at the beginning to define the **person** you want to add and remove the quotation marks:  * &amp;data[customerNumber]&#x3D;  * &amp;data[gender]&#x3D; (m,w, empty)  * &amp;data[academicTitle]&#x3D;, &amp;data[titel]&#x3D;  * &amp;data[surename]&#x3D;, &amp;data[name2]&#x3D;  * &amp;data[bankNumber]&#x3D;, &amp;data[bankAccount]&#x3D;, &amp;data[vatNumber]&#x3D;  * &amp;data[defaultCashbackTime]&#x3D;, &amp;data[defaultCashbackPercent]&#x3D;, &amp;data[defaultTimeToPay]&#x3D;  * &amp;data[description]&#x3D;    Concatenate the following attributes with &#39;&amp;&#39; to the example and put **data[name]&#x3D;yourCompanyName&amp;** at the beginning  to define the **company** you want to add and remove the quotation marks:  * &amp;data[name2]&#x3D;  * &amp;data[bankNumber]&#x3D;, &amp;data[bankAccount]&#x3D;, &amp;data[vatNumber]&#x3D;  * &amp;data[defaultCashbackTime]&#x3D;, &amp;data[defaultCashbackPercent]&#x3D;, &amp;data[defaultTimeToPay]&#x3D;  * &amp;data[description]&#x3D; |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelContact**](../Model/ModelContact.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **contactGetAddresses**
> \ispserverfarm\sevdesk\sevDeskModel\ModelContactAddress contactGetAddresses($id, $category_id, $category_object_name)

Get the addresses of a specified contact

Calls getAddresses() in Contact.php to get the addresses of a specified contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of the contact you want to get the addresses from
$category_id = 43; // int | Category of addresses you want to get
$category_object_name = "Category"; // string | 

try {
    $result = $api_instance->contactGetAddresses($id, $category_id, $category_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->contactGetAddresses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the contact you want to get the addresses from |
 **category_id** | **int**| Category of addresses you want to get | [default to 43]
 **category_object_name** | **string**|  | [default to Category]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelContactAddress**](../Model/ModelContactAddress.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/text
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteContact**
> deleteContact($id)

Delete an existing contact

Calls the delete() function in Contact.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | id of contact you want to delete

try {
    $api_instance->deleteContact($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of contact you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactBillingAddress**
> \ispserverfarm\sevdesk\sevDeskModel\ModelContactAddress getContactBillingAddress($id)

Get the billing address of a specified contact

Calls getBillingAddress() in Contact.php to get the billing address of a specified contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of the contact you want to get the billing address from

try {
    $result = $api_instance->getContactBillingAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactBillingAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the contact you want to get the billing address from |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelContactAddress**](../Model/ModelContactAddress.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/text
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactBillingEmail**
> \ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay getContactBillingEmail($id)

Get the billing email of a specified contact

Calls getBillingEmail() in Contact.php to get the billing email of a specified contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of the contact you want to get the billing email from

try {
    $result = $api_instance->getContactBillingEmail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactBillingEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the contact you want to get the billing email from |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay**](../Model/ModelCommunicationWay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/text
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactCommunicationWays**
> \ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay getContactCommunicationWays($id, $type)

Get the communication ways of a specified contact

Calls getCommunicationWays() in Contact.php to get the communication ways of a specified contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of the contact you want to get the communication ways from
$type = "WEB"; // string | Type of communication ways you want to get

try {
    $result = $api_instance->getContactCommunicationWays($id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactCommunicationWays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the contact you want to get the communication ways from |
 **type** | **string**| Type of communication ways you want to get | [optional] [default to WEB]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay**](../Model/ModelCommunicationWay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/text
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactMainAddress**
> \ispserverfarm\sevdesk\sevDeskModel\ModelContactAddress getContactMainAddress($id)

Get the main address of a specified contact

Calls getMainAddress() in Contact.php to get the main address of a specified contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of the contact you want to get the main address from

try {
    $result = $api_instance->getContactMainAddress($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactMainAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the contact you want to get the main address from |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelContactAddress**](../Model/ModelContactAddress.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/text
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactMainEmail**
> \ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay getContactMainEmail($id)

Get the main email of a specified contact

Calls getMainEmail() in Contact.php to get the main email of a specified contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of the contact you want to get the main email from

try {
    $result = $api_instance->getContactMainEmail($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactMainEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the contact you want to get the main email from |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay**](../Model/ModelCommunicationWay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/text
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactMainMobile**
> \ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay getContactMainMobile($id)

Get the main mobile of a specified contact

Calls getMainMobile() in Contact.php to get the main mobile of a specified contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of the contact you want to get the main mobile from

try {
    $result = $api_instance->getContactMainMobile($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactMainMobile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the contact you want to get the main mobile from |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay**](../Model/ModelCommunicationWay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/text
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactMainPhone**
> \ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay getContactMainPhone($id)

Get the main phone of a specified contact

Calls getMainPhone() in Contact.php to get the main phone of a specified contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of the contact you want to get the main phone from

try {
    $result = $api_instance->getContactMainPhone($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactMainPhone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the contact you want to get the main phone from |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay**](../Model/ModelCommunicationWay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/text
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactMainWebsite**
> \ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay getContactMainWebsite($id)

Get the main website of a specified contact

Calls getMainWebsite() in Contact.php to get the main website of a specified contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of the contact you want to get the main website from

try {
    $result = $api_instance->getContactMainWebsite($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactMainWebsite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the contact you want to get the main website from |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay**](../Model/ModelCommunicationWay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/text
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactRelatedCommunicationWays**
> \ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay getContactRelatedCommunicationWays($id, $type)

Get the related communication ways of a specified contact

Calls getRelatedCommunicationWays() in Contact.php to get the related communication ways of a specified contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of the contact you want to get the related communication ways from
$type = "WEB"; // string | Type of related communication ways you want to get

try {
    $result = $api_instance->getContactRelatedCommunicationWays($id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactRelatedCommunicationWays: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the contact you want to get the related communication ways from |
 **type** | **string**| Type of related communication ways you want to get | [optional] [default to WEB]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelCommunicationWay**](../Model/ModelCommunicationWay.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/text
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContactTabsItemCount**
> getContactTabsItemCount($id)

Get number of all invoices, orders, etc. of a specified contact

Calls getTabsItemCount() in Contact.php to get the number of all invoices, orders, etc. of a specified contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of the contact you want to get the number of all invoices, orders, etc. from

try {
    $api_instance->getContactTabsItemCount($id);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactTabsItemCount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the contact you want to get the number of all invoices, orders, etc. from |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/text
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getContacts**
> \ispserverfarm\sevdesk\sevDeskModel\ModelContact getContacts($depth, $limit, $offset, $embed)

Get an overview of all contacts

Calls Contact.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$depth = 0; // int | If depth is set 1 companies and persons will be shown, otherwise only the companies will be shown. Default: 0
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned contacts start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getContacts($depth, $limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **depth** | **int**| If depth is set 1 companies and persons will be shown, otherwise only the companies will be shown. Default: 0 | [optional] [default to 0]
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned contacts start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelContact**](../Model/ModelContact.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/text
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNextCustomerNumber**
> getNextCustomerNumber()

Get the next customer number

Get the next customer number in the sequence

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();

try {
    $api_instance->getNextCustomerNumber();
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getNextCustomerNumber: ', $e->getMessage(), PHP_EOL;
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

# **updateContact**
> \ispserverfarm\sevdesk\sevDeskModel\ModelContact updateContact($id, $body)

Update an existing contact

Calls Contact.php to update an existing contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\ContactApi();
$id = 56; // int | Id of contact you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please be aware not to update any parameters which don't belong to the type of contact you are updating    Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateContact($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->updateContact: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of contact you want to update |
 **body** | **string**| Parameters which need to be updated. Please be aware not to update any parameters which don&#39;t belong to the type of contact you are updating    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelContact**](../Model/ModelContact.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

