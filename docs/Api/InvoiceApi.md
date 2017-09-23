# ispserverfarm\sevdesk\phpclient\InvoiceApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInvoice**](InvoiceApi.md#addInvoice) | **POST** /Invoice | Create a new invoice
[**cancelInvoice**](InvoiceApi.md#cancelInvoice) | **GET** /Invoice/{id}/cancel | Cancel an invoice
[**createInvoiceFromOrder**](InvoiceApi.md#createInvoiceFromOrder) | **POST** /Invoice/Factory/createInvoiceFromOrder | Create an new invoice from an existing order
[**createInvoiceReminder**](InvoiceApi.md#createInvoiceReminder) | **POST** /Invoice/Factory/createInvoiceReminder | Create an invoice reminder
[**deleteInvoice**](InvoiceApi.md#deleteInvoice) | **DELETE** /Invoice/{id} | Delete an existing invoice
[**duplicateInvoice**](InvoiceApi.md#duplicateInvoice) | **POST** /Invoice/{id}/duplicate | Duplicate an existing invoice
[**getInvoiceAndReminderAmount**](InvoiceApi.md#getInvoiceAndReminderAmount) | **GET** /Invoice/Factory/getTotalInvoiceReminderAndInvoiceAmount | Get amount of an invoice including reminders
[**getInvoiceAsPdf**](InvoiceApi.md#getInvoiceAsPdf) | **GET** /Invoice/{id}/getPdf | Get the invoice as a PDF
[**getInvoiceReminderAmount**](InvoiceApi.md#getInvoiceReminderAmount) | **GET** /Invoice/Factory/getTotalInvoiceReminderAmount | Get (monetary) amount of all reminders of an invoice
[**getInvoices**](InvoiceApi.md#getInvoices) | **GET** /Invoice | Get an overview of all invoices
[**getNextInvoiceNumber**](InvoiceApi.md#getNextInvoiceNumber) | **GET** /Invoice/Factory/getNextInvoiceNumber | Get the next invoice number
[**invoiceAddPosition**](InvoiceApi.md#invoiceAddPosition) | **PUT** /Invoice/{id}/addPosition | Add a position to an existing invoice
[**invoiceBookAmount**](InvoiceApi.md#invoiceBookAmount) | **PUT** /Invoice/{id}/bookAmmount | Book amount for an invoice
[**invoiceCalcTotalDebit**](InvoiceApi.md#invoiceCalcTotalDebit) | **GET** /Invoice/calcTotalDebit | Calculate total sum of all invoices of current query
[**invoiceCalculateDunningLevel**](InvoiceApi.md#invoiceCalculateDunningLevel) | **GET** /Invoice/{id}/calculateDunningLevel | Get dunning level of an invoice
[**invoiceChangeStatus**](InvoiceApi.md#invoiceChangeStatus) | **PUT** /Invoice/{id}/changeStatus | Change status of an invoice
[**invoiceGetCancled**](InvoiceApi.md#invoiceGetCancled) | **GET** /Invoice/{id}/getCancled | Returns if an invoice is cancled
[**invoiceGetCheckAccountTransactionLogs**](InvoiceApi.md#invoiceGetCheckAccountTransactionLogs) | **GET** /Invoice/{id}/getCheckAccountTransactionLogs | Get check account transaction logs about a specified invoice
[**invoiceGetCheckAccountTransactions**](InvoiceApi.md#invoiceGetCheckAccountTransactions) | **GET** /Invoice/{id}/getCheckAccountTransactions | Get check account transactions of a specified invoice
[**invoiceGetDebit**](InvoiceApi.md#invoiceGetDebit) | **GET** /Invoice/{id}/getDebit | Get debit of an invoice
[**invoiceGetDelinquent**](InvoiceApi.md#invoiceGetDelinquent) | **GET** /Invoice/{id}/getDelinquent | Get if an invoice is delinquent
[**invoiceGetDiscounts**](InvoiceApi.md#invoiceGetDiscounts) | **GET** /Invoice/{id}/getDiscounts | Get the discounts of a specified invoice
[**invoiceGetDocument**](InvoiceApi.md#invoiceGetDocument) | **GET** /Invoice/{id}/getDocument | Get document of an invoice
[**invoiceGetDunnings**](InvoiceApi.md#invoiceGetDunnings) | **GET** /Invoice/{id}/getDunnings | Get invoice dunnings
[**invoiceGetFeed**](InvoiceApi.md#invoiceGetFeed) | **GET** /Invoice/{id}/getFeed | Get the feed of a specified invoice
[**invoiceGetFinalInvoiceId**](InvoiceApi.md#invoiceGetFinalInvoiceId) | **GET** /Invoice/{id}/getFinalInvoiceId | Get final invoice id
[**invoiceGetIsPartiallyPaid**](InvoiceApi.md#invoiceGetIsPartiallyPaid) | **GET** /Invoice/{id}/getIsPartiallyPaid | Returns if the invoice is partially payed
[**invoiceGetLastDunningDate**](InvoiceApi.md#invoiceGetLastDunningDate) | **GET** /Invoice/{id}/getLastDunningDate | Get last dunning date of invoice as timestamp
[**invoiceGetPartialInvoices**](InvoiceApi.md#invoiceGetPartialInvoices) | **GET** /Invoice/{id}/getPartialInvoices | Get partial invoices of a specified invoice
[**invoiceGetPositions**](InvoiceApi.md#invoiceGetPositions) | **GET** /Invoice/{id}/getPositions | Get the positions of a specified invoice
[**invoiceGetRelatedObjects**](InvoiceApi.md#invoiceGetRelatedObjects) | **GET** /Invoice/{id}/getRelatedObjects | Get related objects of a specified invoice
[**invoiceGetSwissEsr**](InvoiceApi.md#invoiceGetSwissEsr) | **GET** /Invoice/getSwissEsr | Get swiss esr
[**invoiceGetSwissEsrData**](InvoiceApi.md#invoiceGetSwissEsrData) | **GET** /Invoice/getSwissEsrData | Get swiss esr data
[**invoiceGetTags**](InvoiceApi.md#invoiceGetTags) | **GET** /Invoice/{id}/getTags | Get the tags of a specified invoice
[**invoiceGetTax**](InvoiceApi.md#invoiceGetTax) | **GET** /Invoice/{id}/getTax | Get invoice tax amount in invoice currency
[**invoiceGetTaxGroups**](InvoiceApi.md#invoiceGetTaxGroups) | **GET** /Invoice/{id}/getTaxGroupes | Get tax groups of invoice
[**invoiceGetTotal**](InvoiceApi.md#invoiceGetTotal) | **GET** /Invoice/{id}/getTotal | Get gross invoice amount in invoice currency
[**invoiceGetTotalCalc**](InvoiceApi.md#invoiceGetTotalCalc) | **GET** /Invoice/{id}/getTotalCalc | Get total invoice amount in invoice currency
[**invoiceGetTotalNet**](InvoiceApi.md#invoiceGetTotalNet) | **GET** /Invoice/{id}/getTotalNet | Get total net invoice amount in invoice currency
[**invoiceHasDiscounts**](InvoiceApi.md#invoiceHasDiscounts) | **GET** /Invoice/{id}/hasDiscounts | Returns if the specified invoice has discounts
[**invoiceIsOrigin**](InvoiceApi.md#invoiceIsOrigin) | **GET** /Invoice/{id}/isOrigin | Returns if the specified invoice is the origin of an order
[**invoiceMarkAsSent**](InvoiceApi.md#invoiceMarkAsSent) | **PUT** /Invoice/{id}/markAsSent | Marks an invoice as sent
[**invoiceRefundAmount**](InvoiceApi.md#invoiceRefundAmount) | **PUT** /Invoice/{id}/refundAmmount | Refund an already payed invoice amount
[**invoiceRender**](InvoiceApi.md#invoiceRender) | **POST** /Invoice/{id}/render | Render invoice document on docserver and return metadata
[**invoiceSendBy**](InvoiceApi.md#invoiceSendBy) | **PUT** /Invoice/{id}/sendBy | Send invoice by desired method
[**saveInvoice**](InvoiceApi.md#saveInvoice) | **POST** /Invoice/Factory/saveInvoice | Create a new invoice (with / without invoice positions and discounts)
[**sendInvoiceViaEmail**](InvoiceApi.md#sendInvoiceViaEmail) | **POST** /Invoice/{id}/sendViaEmail | Send an invoice via Email
[**sendInvoiceViaPost**](InvoiceApi.md#sendInvoiceViaPost) | **POST** /Invoice/{id}/sendViaPost | Send an invoice via Letter
[**updateInvoice**](InvoiceApi.md#updateInvoice) | **PUT** /Invoice/{id} | Update an existing invoice


# **addInvoice**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice addInvoice($body)

Create a new invoice

Calls Invoice.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$body = "header=&invoiceNumber=&invoiceType=&invoiceDate=&contactPerson[id]=705&contactPerson[objectName]=SevUser&contact[id]=207&contact[objectName]=Contact&discount=&discountTime=&  taxRate=&taxText=&taxType=&status=100&smallSettlement=&currency="; // string | To create an invoice, simply enter desired values after parameter= and remove the quotation marks.    Be aware that you can't use all the parameters included in the Model_Invoice, as creating an invoice involves other functions.    So for example, adding a sumNet/Gross/etc. does not work as they normally get their value from the product which is involved in the invoice    The product/part in this case is handled in the Model_InvoicePos which makes a call to Model_Part.    In Invoice.php there is only a function 'addPosition' which makes the call to InvoicePos.php

try {
    $result = $api_instance->addInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->addInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an invoice, simply enter desired values after parameter&#x3D; and remove the quotation marks.    Be aware that you can&#39;t use all the parameters included in the Model_Invoice, as creating an invoice involves other functions.    So for example, adding a sumNet/Gross/etc. does not work as they normally get their value from the product which is involved in the invoice    The product/part in this case is handled in the Model_InvoicePos which makes a call to Model_Part.    In Invoice.php there is only a function &#39;addPosition&#39; which makes the call to InvoicePos.php |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelInvoice**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice cancelInvoice($id)

Cancel an invoice

Calls cancel() in Invoice.php to cancel an invoice and creates a cancellation invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice which you want to cancel

try {
    $result = $api_instance->cancelInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->cancelInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice which you want to cancel |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInvoiceFromOrder**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice createInvoiceFromOrder($body)

Create an new invoice from an existing order

With the new version of sevdesk some models are not created by calling the Model.php directly but by calling the Factory.php because of better performance and flexibility.    Basically the Model.php itself still constructs the model however new instances of the model are created trough the Factory.php    So for example when you create a new invoice it wont be saved by a POST request with '/Invoice?para1=&...' but with the saveInvoice function in Factory.php 'Voucher/Factory/saveInvoice?para1='

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$body = "body_example"; // string | Takes an existing Model_Order and creates an invoice with positions and discounts from it. Enter your values after parameter= and remove the quotation marks

try {
    $result = $api_instance->createInvoiceFromOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->createInvoiceFromOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| Takes an existing Model_Order and creates an invoice with positions and discounts from it. Enter your values after parameter&#x3D; and remove the quotation marks |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createInvoiceReminder**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice createInvoiceReminder($body)

Create an invoice reminder

With the new version of sevdesk some models are not created by calling the Model.php directly but by calling the Factory.php because of better performance and flexibility.    Basically the Model.php itself still constructs the model however new instances of the model are created trough the Factory.php    So for example when you create a new invoice it wont be saved by a POST request with '/Invoice?para1=&...' but with the saveInvoice function in Factory.php 'Voucher/Factory/saveInvoice?para1='

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$body = "body_example"; // string | Takes an existing Model_Invoice and creates a reminder for it.    Note that actually creating a reminder would require to save the rendered invoice reminder so this is not possible by calling the api directly.    However for demonstration purposes you can still call the function by appending an invoice id after invoice[id]= and removing the quotation marks.

try {
    $result = $api_instance->createInvoiceReminder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->createInvoiceReminder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| Takes an existing Model_Invoice and creates a reminder for it.    Note that actually creating a reminder would require to save the rendered invoice reminder so this is not possible by calling the api directly.    However for demonstration purposes you can still call the function by appending an invoice id after invoice[id]&#x3D; and removing the quotation marks. |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteInvoice**
> deleteInvoice($id)

Delete an existing invoice

Calls the delete() function in Invoice.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | id of invoice you want to delete

try {
    $api_instance->deleteInvoice($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->deleteInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of invoice you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicateInvoice**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice duplicateInvoice($id)

Duplicate an existing invoice

Calls duplicate() in Invoice.php to duplicate an existing invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | id of invoice you want to duplicate

try {
    $result = $api_instance->duplicateInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->duplicateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of invoice you want to duplicate |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceAndReminderAmount**
> getInvoiceAndReminderAmount($invoice_id, $invoice_object_name)

Get amount of an invoice including reminders

Calls the getTotalInvoiceReminderAndInvoiceAmount function in /Invoice/Factory/ to get the amount of the invoice including its reminders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$invoice_id = 56; // int | id of the invoice you want to get the total amount for
$invoice_object_name = "Invoice"; // string | 

try {
    $api_instance->getInvoiceAndReminderAmount($invoice_id, $invoice_object_name);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoiceAndReminderAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| id of the invoice you want to get the total amount for |
 **invoice_object_name** | **string**|  | [default to Invoice]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceAsPdf**
> getInvoiceAsPdf($id, $download)

Get the invoice as a PDF

Calls getPdf in Invoice.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the PDF
$download = 0; // bool | If true PDF will return as filestream otherwise as json object the content base64 encoded

try {
    $api_instance->getInvoiceAsPdf($id, $download);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoiceAsPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the PDF |
 **download** | **bool**| If true PDF will return as filestream otherwise as json object the content base64 encoded | [default to 0]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoiceReminderAmount**
> getInvoiceReminderAmount($invoice_id, $invoice_object_name)

Get (monetary) amount of all reminders of an invoice

Calls the getTotalInvoiceReminderAmount function in /Invoice/Factory/ to get the amount of all reminders of an invoice.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$invoice_id = 56; // int | id of the invoice you want to get the reminder amount for
$invoice_object_name = "Invoice"; // string | 

try {
    $api_instance->getInvoiceReminderAmount($invoice_id, $invoice_object_name);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoiceReminderAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **int**| id of the invoice you want to get the reminder amount for |
 **invoice_object_name** | **string**|  | [default to Invoice]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getInvoices**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice getInvoices($limit, $offset, $embed)

Get an overview of all invoices

Calls Invoice.php to get necessary variables. However, not all variables get their value from Invoice.php directly but from other models like Model_InvoicePos or Model_Part

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned invoices start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getInvoices($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned invoices start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNextInvoiceNumber**
> getNextInvoiceNumber($invoice_type, $use_next_number)

Get the next invoice number



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$invoice_type = "RE"; // string | defines the type of invoice you want to get the next number from
$use_next_number = true; // bool | By default this is true, so the invoiceNumber will increase by one otherwise the invoiceNumber will not change

try {
    $api_instance->getNextInvoiceNumber($invoice_type, $use_next_number);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->getNextInvoiceNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_type** | **string**| defines the type of invoice you want to get the next number from | [default to RE]
 **use_next_number** | **bool**| By default this is true, so the invoiceNumber will increase by one otherwise the invoiceNumber will not change | [default to true]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceAddPosition**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice invoiceAddPosition($id, $body)

Add a position to an existing invoice

Calls addPosition() in Invoice.php to add a position to an invoice.    This function is not required anymore as there is a function for creating Invoices in Invoice/Factory which includes adding the position.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | id of invoice you want to add a position to
$body = "quantity=&name=&text=&price=&taxRate=&part[id]=&part[objectName]=Part&unity[id]=&unity[objectName]=Unity&discount=&temporary="; // string | To add a position, simply enter desired values after parameter= and remove the quotation marks

try {
    $result = $api_instance->invoiceAddPosition($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceAddPosition: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of invoice you want to add a position to |
 **body** | **string**| To add a position, simply enter desired values after parameter&#x3D; and remove the quotation marks | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceBookAmount**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoiceLog invoiceBookAmount($id, $ammount, $date, $body)

Book amount for an invoice

Calls bookAmmount() in Invoice.php to book an invoice amount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to book an amount
$ammount = 56; // int | amount which should be booked
$date = ""; // string | booking date
$body = "body_example"; // string | Optionally, you can enter a checkAccount and checkAccountTransaction here.    Be aware that if you dont define a checkAccount / checkAccountTransaction you need to remove the part from the body or remove everything except the quotation marks if you dont want to define anything at all!

try {
    $result = $api_instance->invoiceBookAmount($id, $ammount, $date, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceBookAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to book an amount |
 **ammount** | **int**| amount which should be booked |
 **date** | **string**| booking date | [default to ]
 **body** | **string**| Optionally, you can enter a checkAccount and checkAccountTransaction here.    Be aware that if you dont define a checkAccount / checkAccountTransaction you need to remove the part from the body or remove everything except the quotation marks if you dont want to define anything at all! | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoiceLog**](../Model/ModelInvoiceLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceCalcTotalDebit**
> invoiceCalcTotalDebit()

Calculate total sum of all invoices of current query

Calls calcTotalDebit() in Invoice.php to calculate total sum of all invoices of current query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();

try {
    $api_instance->invoiceCalcTotalDebit();
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceCalcTotalDebit: ', $e->getMessage(), PHP_EOL;
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

# **invoiceCalculateDunningLevel**
> invoiceCalculateDunningLevel($id)

Get dunning level of an invoice

Calls calculateDunningLevel() in Invoice.php to get the dunning level of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the dunning level

try {
    $api_instance->invoiceCalculateDunningLevel($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceCalculateDunningLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the dunning level |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceChangeStatus**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice invoiceChangeStatus($id, $value)

Change status of an invoice

Calls changeStatus() in Invoice.php to book an invoice amount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to book an amount
$value = 56; // int | desired status

try {
    $result = $api_instance->invoiceChangeStatus($id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceChangeStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to book an amount |
 **value** | **int**| desired status |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetCancled**
> invoiceGetCancled($id)

Returns if an invoice is cancled

Calls getCancled() in Invoice.php to know if an invoice is cancled

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to know if it is cancled

try {
    $api_instance->invoiceGetCancled($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetCancled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to know if it is cancled |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetCheckAccountTransactionLogs**
> \ispserverfarm\sevdesk\phpclient\Model\ModelCheckAccountTransactionLog invoiceGetCheckAccountTransactionLogs($id, $embed)

Get check account transaction logs about a specified invoice

Calls getCheckAccountTransactionLogs() in Invoice.php to get check account transaction logs about the invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of the invoice of which you want to get the check account transaction logs
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->invoiceGetCheckAccountTransactionLogs($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetCheckAccountTransactionLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the invoice of which you want to get the check account transaction logs |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelCheckAccountTransactionLog**](../Model/ModelCheckAccountTransactionLog.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetCheckAccountTransactions**
> \ispserverfarm\sevdesk\phpclient\Model\ModelCheckAccountTransaction invoiceGetCheckAccountTransactions($id, $embed)

Get check account transactions of a specified invoice

Calls getCheckAccountTransactions() in Invoice.php to get check account transactions of the invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of the invoice of which you want to get the check account transactions
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->invoiceGetCheckAccountTransactions($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetCheckAccountTransactions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the invoice of which you want to get the check account transactions |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelCheckAccountTransaction**](../Model/ModelCheckAccountTransaction.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetDebit**
> invoiceGetDebit($id)

Get debit of an invoice

Calls getDebit() in Invoice.php to get debit of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the debit

try {
    $api_instance->invoiceGetDebit($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetDebit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the debit |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetDelinquent**
> invoiceGetDelinquent($id)

Get if an invoice is delinquent

Calls getDelinquent() in Invoice.php to get if an invoice is delinquent

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to know if its delinquent

try {
    $api_instance->invoiceGetDelinquent($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetDelinquent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to know if its delinquent |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetDiscounts**
> \ispserverfarm\sevdesk\phpclient\Model\ModelDiscounts invoiceGetDiscounts($id, $embed)

Get the discounts of a specified invoice

Calls getDiscounts() in Invoice.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the discounts
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->invoiceGetDiscounts($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the discounts |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelDiscounts**](../Model/ModelDiscounts.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetDocument**
> invoiceGetDocument($id, $embed)

Get document of an invoice

Calls getDocument() in Invoice.php to get the document of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the document
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $api_instance->invoiceGetDocument($id, $embed);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the document |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetDunnings**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice invoiceGetDunnings($id)

Get invoice dunnings

Calls getDunnings() in Invoice.php to get the dunnings of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the dunnings

try {
    $result = $api_instance->invoiceGetDunnings($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetDunnings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the dunnings |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetFeed**
> \ispserverfarm\sevdesk\phpclient\Model\ModelFeed invoiceGetFeed($id, $embed)

Get the feed of a specified invoice

Calls getFeed() in Invoice.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the feed
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->invoiceGetFeed($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetFeed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the feed |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelFeed**](../Model/ModelFeed.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetFinalInvoiceId**
> invoiceGetFinalInvoiceId($id)

Get final invoice id

Calls getFinalInvoiceId() in Invoice.php to get final invoice id of the invoice chain

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of the invoice of which you want to get the final invoice id

try {
    $api_instance->invoiceGetFinalInvoiceId($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetFinalInvoiceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the invoice of which you want to get the final invoice id |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetIsPartiallyPaid**
> invoiceGetIsPartiallyPaid($id)

Returns if the invoice is partially payed

Calls getIsPartiallyPaid() in Invoice.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to know if it is partially paid

try {
    $api_instance->invoiceGetIsPartiallyPaid($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetIsPartiallyPaid: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to know if it is partially paid |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetLastDunningDate**
> invoiceGetLastDunningDate($id)

Get last dunning date of invoice as timestamp

Calls getLastDunningDate() in Invoice.php to get the date of the last dunning of an invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the date of the last dunning

try {
    $api_instance->invoiceGetLastDunningDate($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetLastDunningDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the date of the last dunning |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetPartialInvoices**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice invoiceGetPartialInvoices($id, $embed)

Get partial invoices of a specified invoice

Calls getPartialInvoices() in Invoice.php to get partial invoices of the invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of the invoice of which you want to get the partial invoices
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->invoiceGetPartialInvoices($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetPartialInvoices: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the invoice of which you want to get the partial invoices |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetPositions**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoicePos invoiceGetPositions($id, $limit, $offset, $embed)

Get the positions of a specified invoice

Calls getPositions() in Invoice.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the positions
$limit = 100; // int | limits the number of entries returned
$offset = 0; // int | set the index where the returned entries start
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->invoiceGetPositions($id, $limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the positions |
 **limit** | **int**| limits the number of entries returned | [optional] [default to 100]
 **offset** | **int**| set the index where the returned entries start | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoicePos**](../Model/ModelInvoicePos.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetRelatedObjects**
> invoiceGetRelatedObjects($id, $include_itself, $sort_by_type, $embed)

Get related objects of a specified invoice

Calls getRelatedObjects() in Invoice.php to get related objects of the invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of the invoice of which you want to get the related objects
$include_itself = false; // bool | Define if the related objects include the invoice itself
$sort_by_type = false; // bool | Define if you want the related objects sorted by type
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $api_instance->invoiceGetRelatedObjects($id, $include_itself, $sort_by_type, $embed);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetRelatedObjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the invoice of which you want to get the related objects |
 **include_itself** | **bool**| Define if the related objects include the invoice itself | [optional] [default to false]
 **sort_by_type** | **bool**| Define if you want the related objects sorted by type | [optional] [default to false]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetSwissEsr**
> invoiceGetSwissEsr()

Get swiss esr

Calls getSwissEsr() in Invoice.php to get the swiss esr

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();

try {
    $api_instance->invoiceGetSwissEsr();
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetSwissEsr: ', $e->getMessage(), PHP_EOL;
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

# **invoiceGetSwissEsrData**
> invoiceGetSwissEsrData()

Get swiss esr data

Calls getSwissEsrData() in Invoice.php to get the swiss esr data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();

try {
    $api_instance->invoiceGetSwissEsrData();
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetSwissEsrData: ', $e->getMessage(), PHP_EOL;
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

# **invoiceGetTags**
> \ispserverfarm\sevdesk\phpclient\Model\ModelTag invoiceGetTags($id, $embed)

Get the tags of a specified invoice

Calls getTags() in Invoice.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the tags
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->invoiceGetTags($id, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the tags |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelTag**](../Model/ModelTag.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetTax**
> invoiceGetTax($id, $invoice_amount)

Get invoice tax amount in invoice currency

Calls getTax() in Invoice.php to get tax amount of invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the invoice tax amount
$invoice_amount = false; // bool | Determines whether to use sumTax from invoice or sumTaxAccounting

try {
    $api_instance->invoiceGetTax($id, $invoice_amount);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the invoice tax amount |
 **invoice_amount** | **bool**| Determines whether to use sumTax from invoice or sumTaxAccounting | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetTaxGroups**
> invoiceGetTaxGroups($id)

Get tax groups of invoice

Calls getTaxGroupes() in Invoice.php to get tax groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the tax groups

try {
    $api_instance->invoiceGetTaxGroups($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetTaxGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the tax groups |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetTotal**
> invoiceGetTotal($id, $invoice_amount)

Get gross invoice amount in invoice currency

Calls getTotal() in Invoice.php to get gross amount of invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the gross invoice amount
$invoice_amount = false; // bool | Determines whether to use sumGross from invoice or sumGrossAccounting

try {
    $api_instance->invoiceGetTotal($id, $invoice_amount);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetTotal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the gross invoice amount |
 **invoice_amount** | **bool**| Determines whether to use sumGross from invoice or sumGrossAccounting | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetTotalCalc**
> invoiceGetTotalCalc($id)

Get total invoice amount in invoice currency

Calls getTotalCalc() in Invoice.php to get tax groups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the invoice amount in invoice currency

try {
    $api_instance->invoiceGetTotalCalc($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetTotalCalc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the invoice amount in invoice currency |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceGetTotalNet**
> invoiceGetTotalNet($id, $invoice_amount, $without_discounts)

Get total net invoice amount in invoice currency

Calls getTotalNet() in Invoice.php to get total net amount of invoice

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to get the total net invoice amount
$invoice_amount = false; // bool | Determines whether to use sumNet from invoice or sumNetAccounting
$without_discounts = false; // bool | Determines whether the total net is calculated with or without the discounts

try {
    $api_instance->invoiceGetTotalNet($id, $invoice_amount, $without_discounts);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceGetTotalNet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to get the total net invoice amount |
 **invoice_amount** | **bool**| Determines whether to use sumNet from invoice or sumNetAccounting | [optional] [default to false]
 **without_discounts** | **bool**| Determines whether the total net is calculated with or without the discounts | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceHasDiscounts**
> invoiceHasDiscounts($id)

Returns if the specified invoice has discounts

Calls hasDiscounts() in Invoice.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to know if it has discounts

try {
    $api_instance->invoiceHasDiscounts($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceHasDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to know if it has discounts |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceIsOrigin**
> invoiceIsOrigin($id)

Returns if the specified invoice is the origin of an order

Calls isOrigin() in Invoice.php to find out if the invoice is the origin of an order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to know if it is the origin of an order

try {
    $api_instance->invoiceIsOrigin($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceIsOrigin: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to know if it is the origin of an order |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceMarkAsSent**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice invoiceMarkAsSent($id)

Marks an invoice as sent

Calls markAsSent() in Invoice.php to mark an invoice as sent

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice which you want to mark as sent

try {
    $result = $api_instance->invoiceMarkAsSent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceMarkAsSent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice which you want to mark as sent |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceRefundAmount**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice invoiceRefundAmount($id, $ammount, $date)

Refund an already payed invoice amount

Calls refundAmmount() in Invoice.php to refund an invoice amount

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to refund the amount
$ammount = 56; // int | amount which should be refunded
$date = ""; // string | booking date

try {
    $result = $api_instance->invoiceRefundAmount($id, $ammount, $date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceRefundAmount: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to refund the amount |
 **ammount** | **int**| amount which should be refunded |
 **date** | **string**| booking date | [default to ]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceRender**
> invoiceRender($id)

Render invoice document on docserver and return metadata

Calls render() in Invoice.php to render invoice document on docserver and return the metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice of which you want to render the document and get the metadata

try {
    $api_instance->invoiceRender($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceRender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice of which you want to render the document and get the metadata |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invoiceSendBy**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice invoiceSendBy($id, $send_type)

Send invoice by desired method

Calls sendBy() in Invoice.php to send an invoice by the desired method

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | Id of invoice which you want to send
$send_type = ""; // string | desired send type, available are: VM = Mail, VP = Post, VPDF = PDF, PRN = Print

try {
    $result = $api_instance->invoiceSendBy($id, $send_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->invoiceSendBy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of invoice which you want to send |
 **send_type** | **string**| desired send type, available are: VM &#x3D; Mail, VP &#x3D; Post, VPDF &#x3D; PDF, PRN &#x3D; Print | [default to ]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **saveInvoice**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoiceFactory saveInvoice($body)

Create a new invoice (with / without invoice positions and discounts)

With the new version of sevdesk some models are not created by calling the model.php directly but by calling the factory.php because of better performance and flexibility.    Basically the model.php itself still constructs the model however new instances of the model are created trough the factory.php    So for example when you create a new invoice it wont be saved by a POST request with '/Invoice?para1=&...' but with the saveInvoice function in Factory.php 'Voucher/Factory/saveInvoice?para1='

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$body = "body_example"; // string | The saveInvoice function in Invoice/Factory.php combines both Invoice and InvoicePos with all their HTTP-methods.    It is now possible to **simultaneously** create an invoice with its position and discount.    To simply (only) create an invoice you can use the given parameters and concatenate your values.    For also adding an invoice position or a discount refer to the corresponding **quick reference** below.    The parameters you find there are **needed** for creating an invoice position / discount. Just concatenate them to the existing invoice / invoicePosSave parameters.    You can also find additional (optional) parameters in the **Models** section.    Quick reference InvoicePos:  * &invoicePosSave[0][part][id]=  * &invoicePosSave[0][part][objectName]=Part  * &invoicePosSave[0][quantity]=  * &invoicePosSave[0][unity][id]=  * &invoicePosSave[0][unity][objectName]=Unity  * &invoicePosSave[0][taxRate]=19  * &invoicePosSave[0][objectName]=InvoicePos  * &invoicePosSave[0][mapAll]=true  * &invoicePosSave[0][price]=  * &invoicePosDelete=null    Quick reference Discounts:  * &discountSave[0][discount]=true  * &discountSave[0][text]=  * &discountSave[0][percentage]=  * &discountSave[0][value]=  * &discountSave[0][objectName]=Discounts  * &discountSave[0][mapAll]=true  * &discountDelete=null    You can also use additional parameters for creating an invoice in the same way by adding them in the format: **invoice[yourParameter]**

try {
    $result = $api_instance->saveInvoice($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->saveInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| The saveInvoice function in Invoice/Factory.php combines both Invoice and InvoicePos with all their HTTP-methods.    It is now possible to **simultaneously** create an invoice with its position and discount.    To simply (only) create an invoice you can use the given parameters and concatenate your values.    For also adding an invoice position or a discount refer to the corresponding **quick reference** below.    The parameters you find there are **needed** for creating an invoice position / discount. Just concatenate them to the existing invoice / invoicePosSave parameters.    You can also find additional (optional) parameters in the **Models** section.    Quick reference InvoicePos:  * &amp;invoicePosSave[0][part][id]&#x3D;  * &amp;invoicePosSave[0][part][objectName]&#x3D;Part  * &amp;invoicePosSave[0][quantity]&#x3D;  * &amp;invoicePosSave[0][unity][id]&#x3D;  * &amp;invoicePosSave[0][unity][objectName]&#x3D;Unity  * &amp;invoicePosSave[0][taxRate]&#x3D;19  * &amp;invoicePosSave[0][objectName]&#x3D;InvoicePos  * &amp;invoicePosSave[0][mapAll]&#x3D;true  * &amp;invoicePosSave[0][price]&#x3D;  * &amp;invoicePosDelete&#x3D;null    Quick reference Discounts:  * &amp;discountSave[0][discount]&#x3D;true  * &amp;discountSave[0][text]&#x3D;  * &amp;discountSave[0][percentage]&#x3D;  * &amp;discountSave[0][value]&#x3D;  * &amp;discountSave[0][objectName]&#x3D;Discounts  * &amp;discountSave[0][mapAll]&#x3D;true  * &amp;discountDelete&#x3D;null    You can also use additional parameters for creating an invoice in the same way by adding them in the format: **invoice[yourParameter]** |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoiceFactory**](../Model/ModelInvoiceFactory.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendInvoiceViaEmail**
> \ispserverfarm\sevdesk\phpclient\Model\ModelEmail sendInvoiceViaEmail($id, $body)

Send an invoice via Email

Calls sendViaEmail in Invoice.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | id of invoice you want to send via Email
$body = "toEmail=test@sevenit.de&subject=This is a test&text=Hello this is a test mail"; // string | Change the desired values after the parameters and remove the quotation marks. You can also add 'additionalAttachments', 'ccEmail=' and 'bccEmail'    Please note: additionalAttachments is a String containing document id's (of existing documents!)

try {
    $result = $api_instance->sendInvoiceViaEmail($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->sendInvoiceViaEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of invoice you want to send via Email |
 **body** | **string**| Change the desired values after the parameters and remove the quotation marks. You can also add &#39;additionalAttachments&#39;, &#39;ccEmail&#x3D;&#39; and &#39;bccEmail&#39;    Please note: additionalAttachments is a String containing document id&#39;s (of existing documents!) |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelEmail**](../Model/ModelEmail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendInvoiceViaPost**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice sendInvoiceViaPost($id)

Send an invoice via Letter

Calls sendViaPost in Invoice.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | id of invoice you want to send via Letter

try {
    $result = $api_instance->sendInvoiceViaPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->sendInvoiceViaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of invoice you want to send via Letter |

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateInvoice**
> \ispserverfarm\sevdesk\phpclient\Model\ModelInvoice updateInvoice($id, $body)

Update an existing invoice

Calls Invoice.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\phpclient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\phpclient\Api\InvoiceApi();
$id = 56; // int | id of invoice you want to update
$body = "body_example"; // string | Parameters which need to be updated. Please refer to the description from create invoice.    Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateInvoice($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoiceApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of invoice you want to update |
 **body** | **string**| Parameters which need to be updated. Please refer to the description from create invoice.    Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](../Model/ModelInvoice.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

