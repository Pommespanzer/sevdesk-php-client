# isp-serverfarm\sevdesk\php-client\AggregatorApi

All URIs are relative to *https://my.sevdesk.de/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**aggregatorCalcTotalDepreciation**](AggregatorApi.md#aggregatorCalcTotalDepreciation) | **GET** /Aggregator/calcTotalDepreciation | Calculates total sum of all asset amounts for the year of the current query
[**aggregatorGetAccountingScore**](AggregatorApi.md#aggregatorGetAccountingScore) | **GET** /Aggregator/getAccountingScore | Get accounting score
[**aggregatorGetAppRevenueChartData**](AggregatorApi.md#aggregatorGetAppRevenueChartData) | **GET** /Aggregator/getAppRevenueChartData | Get the data which is displayed in the chart on the dashboard in the app
[**aggregatorGetProfitAndLossCalculation**](AggregatorApi.md#aggregatorGetProfitAndLossCalculation) | **GET** /Aggregator/getProfitAndLossCalculation | Calculates the profit and loss over a specified period
[**aggregatorGetTaxInformation**](AggregatorApi.md#aggregatorGetTaxInformation) | **GET** /Aggregator/getTaxInformation | Calculates tax of earnings and spending over a specified period
[**aggregatorGetVoucherCategoryInformation**](AggregatorApi.md#aggregatorGetVoucherCategoryInformation) | **GET** /Aggregator/getVoucherCategoryInformation | Get information about the categories of all vouchers in the year of the current query
[**aggregatorGetVoucherChartData**](AggregatorApi.md#aggregatorGetVoucherChartData) | **GET** /Aggregator/getVoucherChartData | Get voucher chart data
[**aggregatorGetWebRevenueChartData**](AggregatorApi.md#aggregatorGetWebRevenueChartData) | **GET** /Aggregator/getWebRevenueChartData | Get the data which is displayed in the chart on the dashboard


# **aggregatorCalcTotalDepreciation**
> aggregatorCalcTotalDepreciation()

Calculates total sum of all asset amounts for the year of the current query

Calls calcTotalDepreciation() in Aggregator.php to get total sum of all asset amounts for the year of the current query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AggregatorApi();

try {
    $api_instance->aggregatorCalcTotalDepreciation();
} catch (Exception $e) {
    echo 'Exception when calling AggregatorApi->aggregatorCalcTotalDepreciation: ', $e->getMessage(), PHP_EOL;
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

# **aggregatorGetAccountingScore**
> aggregatorGetAccountingScore($startdate, $enddate)

Get accounting score

Calls getAccountingScore() in Aggregator.php to get your accounting score

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AggregatorApi();
$startdate = ""; // string | Start date for the accounting score calculation
$enddate = ""; // string | End date for the accounting score calculation

try {
    $api_instance->aggregatorGetAccountingScore($startdate, $enddate);
} catch (Exception $e) {
    echo 'Exception when calling AggregatorApi->aggregatorGetAccountingScore: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startdate** | **string**| Start date for the accounting score calculation | [optional] [default to ]
 **enddate** | **string**| End date for the accounting score calculation | [optional] [default to ]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aggregatorGetAppRevenueChartData**
> aggregatorGetAppRevenueChartData()

Get the data which is displayed in the chart on the dashboard in the app

Calls getAppRevenueChartData() in Aggregator.php to get data displayed in the revenue chart on the dashboard in the app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AggregatorApi();

try {
    $api_instance->aggregatorGetAppRevenueChartData();
} catch (Exception $e) {
    echo 'Exception when calling AggregatorApi->aggregatorGetAppRevenueChartData: ', $e->getMessage(), PHP_EOL;
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

# **aggregatorGetProfitAndLossCalculation**
> aggregatorGetProfitAndLossCalculation($start_date, $end_date, $actual_taxation)

Calculates the profit and loss over a specified period

Calls getProfitAndLossCalculation() in Aggregator.php to calculate the profit and loss over a specified period.    The output of this function is divided into six groups:  * costs - all invoices/vouchers which contain a spending, again separated into direct [dc] and indirect costs [ic]  * earnings - all invoices/vouchers which contain a earning  * totalcosts  * totalearnings  * totalrevenue  * profit - the profit, difference between costs and earnings

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AggregatorApi();
$start_date = ""; // string | Start date of the period you want to calculate
$end_date = ""; // string | End date of the period you want to calculate
$actual_taxation = false; // bool | Specify if you want to calculate the net income method (true) or the profit and loss (false)

try {
    $api_instance->aggregatorGetProfitAndLossCalculation($start_date, $end_date, $actual_taxation);
} catch (Exception $e) {
    echo 'Exception when calling AggregatorApi->aggregatorGetProfitAndLossCalculation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **string**| Start date of the period you want to calculate | [default to ]
 **end_date** | **string**| End date of the period you want to calculate | [default to ]
 **actual_taxation** | **bool**| Specify if you want to calculate the net income method (true) or the profit and loss (false) | [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aggregatorGetTaxInformation**
> aggregatorGetTaxInformation($type, $year, $period, $actual_taxation, $no_actual_taxation_on_input_tax)

Calculates tax of earnings and spending over a specified period

Calls getTaxInformation() in Aggregator.php to calculate tax of earnings and spending over a specified period.    This function will return:  * earningsSum (gross earnings), earningsSumNet (net earnings)  * earningsTax - tax on earnings  * expensesSum (gross expenses), expensesSumNet (net expenses)  * expensesTax - tax on expenses  * earningsTaxGroups - list of invoices/vouchers which involved a taxation, separated into tax groups  * expensesTaxGroups - list of invoices/vouchers which involved a taxation, separated into tax groups  * remainingTaxPayable - tax which is yet to be payed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AggregatorApi();
$type = "monthly"; // string | Tax period you want to calculate with
$year = ""; // string | Year of your tax calculation
$period = 56; // int | Starting period (month) of your tax calculation
$actual_taxation = false; // bool | Specify if you want to calculate the net income method (true) or the profit and loss (false)
$no_actual_taxation_on_input_tax = false; // bool | Specify if you want no actual taxation on input tax

try {
    $api_instance->aggregatorGetTaxInformation($type, $year, $period, $actual_taxation, $no_actual_taxation_on_input_tax);
} catch (Exception $e) {
    echo 'Exception when calling AggregatorApi->aggregatorGetTaxInformation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **type** | **string**| Tax period you want to calculate with | [default to monthly]
 **year** | **string**| Year of your tax calculation | [default to ]
 **period** | **int**| Starting period (month) of your tax calculation |
 **actual_taxation** | **bool**| Specify if you want to calculate the net income method (true) or the profit and loss (false) | [default to false]
 **no_actual_taxation_on_input_tax** | **bool**| Specify if you want no actual taxation on input tax | [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aggregatorGetVoucherCategoryInformation**
> aggregatorGetVoucherCategoryInformation()

Get information about the categories of all vouchers in the year of the current query

Calls getVoucherCategoryInformation() in Aggregator.php to get information about the categories of all vouchers in the year of the current query

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AggregatorApi();

try {
    $api_instance->aggregatorGetVoucherCategoryInformation();
} catch (Exception $e) {
    echo 'Exception when calling AggregatorApi->aggregatorGetVoucherCategoryInformation: ', $e->getMessage(), PHP_EOL;
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

# **aggregatorGetVoucherChartData**
> aggregatorGetVoucherChartData($year)

Get voucher chart data

Calls getVoucherChartData() in Aggregator.php to get voucher chart data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AggregatorApi();
$year = ""; // string | Year for which you want to get the voucher chart data

try {
    $api_instance->aggregatorGetVoucherChartData($year);
} catch (Exception $e) {
    echo 'Exception when calling AggregatorApi->aggregatorGetVoucherChartData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **string**| Year for which you want to get the voucher chart data | [default to ]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **aggregatorGetWebRevenueChartData**
> aggregatorGetWebRevenueChartData($sum_gross_toggle)

Get the data which is displayed in the chart on the dashboard

Calls getWebRevenueChartData() in Aggregator.php to get data displayed in the revenue chart on the dashboard

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKey('token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// isp-serverfarm\sevdesk\php-client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('token', 'Bearer');

$api_instance = new isp-serverfarm\sevdesk\php-client\Api\AggregatorApi();
$sum_gross_toggle = false; // bool | Specify if you want to calculate sum gross instead of net

try {
    $api_instance->aggregatorGetWebRevenueChartData($sum_gross_toggle);
} catch (Exception $e) {
    echo 'Exception when calling AggregatorApi->aggregatorGetWebRevenueChartData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sum_gross_toggle** | **bool**| Specify if you want to calculate sum gross instead of net | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/xml, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

