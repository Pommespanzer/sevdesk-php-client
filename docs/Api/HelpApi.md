# ispserverfarm\sevdesk\HelpApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**helpGetArticle**](HelpApi.md#helpGetArticle) | **GET** /Help/getArticle | Get a specified article
[**helpGetArticles**](HelpApi.md#helpGetArticles) | **GET** /Help/getArticles | Get all help articles for a specified section
[**helpGetCategories**](HelpApi.md#helpGetCategories) | **GET** /Help/getCategories | Get all categories of help articles
[**helpGetSections**](HelpApi.md#helpGetSections) | **GET** /Help/getSections | Get all sections of help articles
[**helpSearchArticles**](HelpApi.md#helpSearchArticles) | **GET** /Help/search | Search for articles


# **helpGetArticle**
> \ispserverfarm\sevdesk\sevDeskModel\ModelHelp helpGetArticle($article_id)

Get a specified article

Calls getArticle() in Help.php to get a specified help article

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\HelpApi();
$article_id = 56; // int | Id of the article you want to get

try {
    $result = $api_instance->helpGetArticle($article_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpApi->helpGetArticle: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **article_id** | **int**| Id of the article you want to get |

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelHelp**](../Model/ModelHelp.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpGetArticles**
> \ispserverfarm\sevdesk\sevDeskModel\ModelHelp helpGetArticles($section_id, $limit, $offset)

Get all help articles for a specified section

Calls getArticles() in Help.php to get all help articles for a specified section

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\HelpApi();
$section_id = 56; // int | Section id you want to get help articles about
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned help articles start. Default is 0

try {
    $result = $api_instance->helpGetArticles($section_id, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpApi->helpGetArticles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **section_id** | **int**| Section id you want to get help articles about |
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned help articles start. Default is 0 | [optional] [default to 0]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelHelp**](../Model/ModelHelp.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpGetCategories**
> \ispserverfarm\sevdesk\sevDeskModel\ModelHelp helpGetCategories($limit, $offset)

Get all categories of help articles

Calls getCategories() in Help.php to get all categories available for searching help articles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\HelpApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned sections start. Default is 0

try {
    $result = $api_instance->helpGetCategories($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpApi->helpGetCategories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned sections start. Default is 0 | [optional] [default to 0]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelHelp**](../Model/ModelHelp.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpGetSections**
> \ispserverfarm\sevdesk\sevDeskModel\ModelHelp helpGetSections($limit, $offset)

Get all sections of help articles

Calls getSections() in Help.php to get all sections available for searching help articles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\HelpApi();
$limit = 100; // int | Limits the number of entries returned. Default is 100
$offset = 0; // int | Set the index where the returned sections start. Default is 0

try {
    $result = $api_instance->helpGetSections($limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpApi->helpGetSections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limits the number of entries returned. Default is 100 | [optional] [default to 100]
 **offset** | **int**| Set the index where the returned sections start. Default is 0 | [optional] [default to 0]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelHelp**](../Model/ModelHelp.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **helpSearchArticles**
> \ispserverfarm\sevdesk\sevDeskModel\ModelHelp helpSearchArticles($name)

Search for articles

Calls search() in Help.php to search for articles

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// ispserverfarm\sevdesk\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new ispserverfarm\sevdesk\Api\HelpApi();
$name = ""; // string | String to search for

try {
    $result = $api_instance->helpSearchArticles($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpApi->helpSearchArticles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| String to search for | [optional] [default to ]

### Return type

[**\ispserverfarm\sevdesk\sevDeskModel\ModelHelp**](../Model/ModelHelp.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

