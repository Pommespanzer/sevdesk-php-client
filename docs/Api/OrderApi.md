# ispserverfarm\sevdesk\OrderApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addOrder**](OrderApi.md#addOrder) | **POST** /Order | Create a new order
[**copyOrder**](OrderApi.md#copyOrder) | **POST** /Order/{id}/copy | Copy an existing order
[**deleteOrder**](OrderApi.md#deleteOrder) | **DELETE** /Order/{id} | Delete an existing order
[**duplicateOrder**](OrderApi.md#duplicateOrder) | **POST** /Order/{id}/duplicate | Duplicate an existing order
[**getNextOrderNumber**](OrderApi.md#getNextOrderNumber) | **GET** /Order/Factory/getNextOrderNumber | Get the next order number
[**getOrderDiscounts**](OrderApi.md#getOrderDiscounts) | **GET** /Order/{id}/getDiscounts | Get all order discounts
[**getOrders**](OrderApi.md#getOrders) | **GET** /Order | Get an overview of all orders
[**orderChangeStatus**](OrderApi.md#orderChangeStatus) | **PUT** /Order/{id}/changeStatus | Update status of an existing order
[**orderGetChargeableInformation**](OrderApi.md#orderGetChargeableInformation) | **GET** /Order/{id}/getChargeableInformation | Get sum charged already, total net, gross and tax amount and tax rate
[**orderGetChargeableSums**](OrderApi.md#orderGetChargeableSums) | **GET** /Order/{id}/getChargeableSums | Get total net, gross and tax amount of order
[**orderGetMainOrderByLogs**](OrderApi.md#orderGetMainOrderByLogs) | **GET** /Order/{id}/getMainOrderByLogs | Get main order by checking if there are existing order logs of the specified order
[**orderGetPdf**](OrderApi.md#orderGetPdf) | **GET** /Order/{id}/getPdf | Get the order as a pdf
[**orderGetPositions**](OrderApi.md#orderGetPositions) | **GET** /Order/{id}/getPositions | Get all order positions
[**orderGetRelatedObjects**](OrderApi.md#orderGetRelatedObjects) | **GET** /Order/{id}/getRelatedObjects | Get related objects of a specified order
[**orderGetTags**](OrderApi.md#orderGetTags) | **GET** /Order/{id}/getTags | Get tags of the specified order
[**orderGetTax**](OrderApi.md#orderGetTax) | **GET** /Order/{id}/getTax | Get sum tax of the specified order
[**orderGetTaxGroupes**](OrderApi.md#orderGetTaxGroupes) | **GET** /Order/{id}/getTaxGroupes | Get tax groups of the specified order
[**orderGetTotal**](OrderApi.md#orderGetTotal) | **GET** /Order/{id}/getTotal | Get sum gross of the specified order
[**orderGetTotalCalc**](OrderApi.md#orderGetTotalCalc) | **GET** /Order/{id}/getTotalCalc | Get total gross amount of order
[**orderGetTotalNet**](OrderApi.md#orderGetTotalNet) | **GET** /Order/{id}/getTotalNet | Get total net amount of order
[**orderRender**](OrderApi.md#orderRender) | **POST** /Order/{id}/render | Render the order document on doc server and return the metadata
[**orderSendBy**](OrderApi.md#orderSendBy) | **PUT** /Order/{id}/sendBy | Send an order by the desired send type
[**sendOrderViaEmail**](OrderApi.md#sendOrderViaEmail) | **POST** /Order/{id}/sendViaEmail | Send an order via Email
[**sendOrderViaPost**](OrderApi.md#sendOrderViaPost) | **POST** /Order/{id}/sendViaPost | Send an order via post
[**updateOrder**](OrderApi.md#updateOrder) | **PUT** /Order/{id} | Update an existing order


# **addOrder**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrder addOrder($body)

Create a new order

Calls Order.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$body = "orderNumber=AN-1042&orderType=AN&contact[id]=825022&contact[objectName]=Contact&orderDate=26.8.2015&header=Angebot O-42&headText=head text&footText=foot text&addressName=Factory&addressStreet=Hauptstr. 5&addressZip=77933&addressCity=Lahr&smallSettlement=0&contactPerson[id]=811&contactPerson[objectName]=SevUser&taxRate=0&taxText=Umsatzsteuer ausweisen&taxType=default&currency=EUR&version=1"; // string | To create an order, simply enter desired values after parameter=, concatenate additional parameters with & and remove the quotation marks.    Be aware that you can't use all the parameters included in the Model_Order, as creating an order involves other functions/models.    So for example, adding a sumNet/Gross/etc. does not work as they normally get their value from the product/part which is involved in the order.    The product/part in this case is handled in the Model_OrderPos which makes a call to Model_Part.    In Order.php there is only a function 'getPositions' which makes the call to OrderPos.php to get the positions involved in the order.

try {
    $result = $api_instance->addOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->addOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**| To create an order, simply enter desired values after parameter&#x3D;, concatenate additional parameters with &amp; and remove the quotation marks.    Be aware that you can&#39;t use all the parameters included in the Model_Order, as creating an order involves other functions/models.    So for example, adding a sumNet/Gross/etc. does not work as they normally get their value from the product/part which is involved in the order.    The product/part in this case is handled in the Model_OrderPos which makes a call to Model_Part.    In Order.php there is only a function &#39;getPositions&#39; which makes the call to OrderPos.php to get the positions involved in the order. |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrder**](../Model/ModelOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copyOrder**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrder copyOrder($id)

Copy an existing order

Calls copy() in Order.php to copy an existing order.    The new orders origin is the copied order, and its version is the copied orders version increased by one.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order which you want to copy

try {
    $result = $api_instance->copyOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->copyOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order which you want to copy |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrder**](../Model/ModelOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOrder**
> deleteOrder($id)

Delete an existing order

Calls the delete() function in Order.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | id of order you want to delete

try {
    $api_instance->deleteOrder($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->deleteOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of order you want to delete |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **duplicateOrder**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrder duplicateOrder($id)

Duplicate an existing order

Calls duplicate() in Order.php to duplicate an existing order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order which you want to duplicate

try {
    $result = $api_instance->duplicateOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->duplicateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order which you want to duplicate |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrder**](../Model/ModelOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNextOrderNumber**
> getNextOrderNumber($order_type, $use_next_number)

Get the next order number



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$order_type = "AN"; // string | defines the type of order you want to get the next number from
$use_next_number = true; // bool | By default this is true, so the orderNumber will increase by one otherwise the orderNumber will not change

try {
    $api_instance->getNextOrderNumber($order_type, $use_next_number);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getNextOrderNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_type** | **string**| defines the type of order you want to get the next number from | [default to AN]
 **use_next_number** | **bool**| By default this is true, so the orderNumber will increase by one otherwise the orderNumber will not change | [default to true]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrderDiscounts**
> \ispserverfarm\sevdesk\sevDeskModel\ModelDiscounts getOrderDiscounts($id, $limit, $offset, $embed)

Get all order discounts

Calls getDiscounts() in Order.php to get the discounts of the specified order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to get the discounts
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned order positions start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->getOrderDiscounts($id, $limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrderDiscounts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to get the discounts |
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned order positions start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelDiscounts**](../Model/ModelDiscounts.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOrders**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrder getOrders($limit, $offset, $embed)

Get an overview of all orders

Calls Order.php to get necessary variables. However, not all variables get their value from Order.php directly but from other models like Model_OrderPos

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned invoice positions start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``

try {
    $result = $api_instance->getOrders($limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned invoice positions start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60; | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrder**](../Model/ModelOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderChangeStatus**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrder orderChangeStatus($id, $body)

Update status of an existing order

Calls changeStatus() in Order.php to update the specified orders status

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of order of which you want to change the status
$body = "body_example"; // string | Enter desired values after parameter= and remove the quotation marks!    If updateOther is set to 'true', changeStatus will also change other orders with the same order number.    If updateContactStatus is set to 'true', changeStatus will update the connected contacts category if necessary.

try {
    $result = $api_instance->orderChangeStatus($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderChangeStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of order of which you want to change the status |
 **body** | **string**| Enter desired values after parameter&#x3D; and remove the quotation marks!    If updateOther is set to &#39;true&#39;, changeStatus will also change other orders with the same order number.    If updateContactStatus is set to &#39;true&#39;, changeStatus will update the connected contacts category if necessary. | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrder**](../Model/ModelOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetChargeableInformation**
> orderGetChargeableInformation($id)

Get sum charged already, total net, gross and tax amount and tax rate

Calls getChargeableInformation() in Order.php to get the sum charged already, total net, gross and tax amount and tax rate of the specified order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to get the information

try {
    $api_instance->orderGetChargeableInformation($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetChargeableInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to get the information |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetChargeableSums**
> orderGetChargeableSums($id)

Get total net, gross and tax amount of order

Calls getChargeableSums() in Order.php to get the total net, gross and tax amount of the specified order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to get the total net, gross and tax amount

try {
    $api_instance->orderGetChargeableSums($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetChargeableSums: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to get the total net, gross and tax amount |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetMainOrderByLogs**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrder orderGetMainOrderByLogs($id)

Get main order by checking if there are existing order logs of the specified order

Calls getMainOrderByLogs() in Order.php to get main order by checking if there are existing order logs of the specified order.    If the specified order is not the main order (eg. if there are no existing logs), this will return null!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to know if it is the main order

try {
    $result = $api_instance->orderGetMainOrderByLogs($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetMainOrderByLogs: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to know if it is the main order |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrder**](../Model/ModelOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetPdf**
> orderGetPdf($id, $prevent_send_by)

Get the order as a pdf

Calls getPdf() in Order.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to get the pdf
$prevent_send_by = false; // bool | Define if you want to prevent to send the order via pdf

try {
    $api_instance->orderGetPdf($id, $prevent_send_by);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetPdf: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to get the pdf |
 **prevent_send_by** | **bool**| Define if you want to prevent to send the order via pdf | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetPositions**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrderPos orderGetPositions($id, $with_optional, $only_chargeable, $limit, $offset, $embed)

Get all order positions

Calls getPositions() in Order.php to get necessary variables

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to get the positions
$with_optional = false; // bool | Define if you want optional order positions
$only_chargeable = false; // bool | Define if you want only chargeable order positions
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned order positions start. Default is 0
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $result = $api_instance->orderGetPositions($id, $with_optional, $only_chargeable, $limit, $offset, $embed);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetPositions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to get the positions |
 **with_optional** | **bool**| Define if you want optional order positions | [optional] [default to false]
 **only_chargeable** | **bool**| Define if you want only chargeable order positions | [optional] [default to false]
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned order positions start. Default is 0 | [optional] [default to 0]
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrderPos**](../Model/ModelOrderPos.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetRelatedObjects**
> orderGetRelatedObjects($id, $include_itself, $sort_by_type, $embed)

Get related objects of a specified order

Calls getRelatedObjects() in Order.php to get related objects of the order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to get the related objects
$include_itself = false; // bool | Define if the related objects include the order itself
$sort_by_type = false; // bool | Define if you want the related objects sorted by type
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $api_instance->orderGetRelatedObjects($id, $include_itself, $sort_by_type, $embed);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetRelatedObjects: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to get the related objects |
 **include_itself** | **bool**| Define if the related objects include the order itself | [optional] [default to false]
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

# **orderGetTags**
> orderGetTags($id, $embed)

Get tags of the specified order

Calls getTags() in Order.php to get the tags of the specified order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to get the tags
$embed = array("embed_example"); // string[] | Get some additional information. Embed can handle multiple values, they must be separated by comma. Default ``.

try {
    $api_instance->orderGetTags($id, $embed);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetTags: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to get the tags |
 **embed** | [**string[]**](../Model/string.md)| Get some additional information. Embed can handle multiple values, they must be separated by comma. Default &#x60;&#x60;. | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetTax**
> orderGetTax($id, $foreign_currency)

Get sum tax of the specified order

Calls getTax() in Order.php to get the sum tax of the specified order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to get the sum tax
$foreign_currency = false; // bool | Specify if a foreign currency is used

try {
    $api_instance->orderGetTax($id, $foreign_currency);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetTax: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to get the sum tax |
 **foreign_currency** | **bool**| Specify if a foreign currency is used | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetTaxGroupes**
> orderGetTaxGroupes($id)

Get tax groups of the specified order

Calls getTaxGroupes() in Order.php to get the tax groups of the specified order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to get the tax groups

try {
    $api_instance->orderGetTaxGroupes($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetTaxGroupes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to get the tax groups |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetTotal**
> orderGetTotal($id, $foreign_currency)

Get sum gross of the specified order

Calls getTotal() in Order.php to get the sum gross of the specified order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to get the sum gross
$foreign_currency = false; // bool | Specify if a foreign currency is used

try {
    $api_instance->orderGetTotal($id, $foreign_currency);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetTotal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to get the sum gross |
 **foreign_currency** | **bool**| Specify if a foreign currency is used | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetTotalCalc**
> orderGetTotalCalc($id)

Get total gross amount of order

Calls getTotalCalc() in Order.php to get the total gross amount of the specified order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to get the total gross amount

try {
    $api_instance->orderGetTotalCalc($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetTotalCalc: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to get the total gross amount |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderGetTotalNet**
> orderGetTotalNet($id)

Get total net amount of order

Calls getTotalNet() in Order.php to get the total net amount of the specified order

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of the order of which you want to get the total net amount

try {
    $api_instance->orderGetTotalNet($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetTotalNet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the order of which you want to get the total net amount |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderRender**
> orderRender($id)

Render the order document on doc server and return the metadata

Calls render() in Order.php to render an order document on doc server and return the metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of order you want to render

try {
    $api_instance->orderRender($id);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderRender: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of order you want to render |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderSendBy**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrder orderSendBy($id, $send_type)

Send an order by the desired send type

Calls sendBy() in Order.php to send the order by the desired send type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of order which you want to send
$send_type = ""; // string | Your desired send type. Available are: VM = Mail, VP = Post, VPDF = PDF, PRN = Print

try {
    $result = $api_instance->orderSendBy($id, $send_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderSendBy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of order which you want to send |
 **send_type** | **string**| Your desired send type. Available are: VM &#x3D; Mail, VP &#x3D; Post, VPDF &#x3D; PDF, PRN &#x3D; Print | [optional] [default to ]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrder**](../Model/ModelOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendOrderViaEmail**
> \ispserverfarm\sevdesk\sevDeskModel\ModelEmail sendOrderViaEmail($id, $body)

Send an order via Email

Calls sendViaEmail in Order.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of order you want to send via Email
$body = "toEmail=test@sevenit.de&subject=This is a test&text=Hello this is a test mail"; // string | Change the desired values after the parameters and remove the quotation marks. You can also add 'additionalAttachments', 'ccEmail=' and 'bccEmail'    Please note: additionalAttachments is a String containing document id's (of existing documents!)

try {
    $result = $api_instance->sendOrderViaEmail($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->sendOrderViaEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of order you want to send via Email |
 **body** | **string**| Change the desired values after the parameters and remove the quotation marks. You can also add &#39;additionalAttachments&#39;, &#39;ccEmail&#x3D;&#39; and &#39;bccEmail&#39;    Please note: additionalAttachments is a String containing document id&#39;s (of existing documents!) |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelEmail**](../Model/ModelEmail.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendOrderViaPost**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrder sendOrderViaPost($id)

Send an order via post

Calls sendViaPost() in Order.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | Id of order you want to send via post

try {
    $result = $api_instance->sendOrderViaPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->sendOrderViaPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of order you want to send via post |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrder**](../Model/ModelOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOrder**
> \ispserverfarm\sevdesk\sevDeskModel\ModelOrder updateOrder($id, $body)

Update an existing order

Calls Order.php

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\OrderApi();
$id = 56; // int | id of order you want to update
$body = "body_example"; // string | Parameters which need to be updated. Enter the parameters according to the syntax: parameter1=&parameter2=

try {
    $result = $api_instance->updateOrder($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->updateOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id of order you want to update |
 **body** | **string**| Parameters which need to be updated. Enter the parameters according to the syntax: parameter1&#x3D;&amp;parameter2&#x3D; | [optional]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelOrder**](../Model/ModelOrder.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

