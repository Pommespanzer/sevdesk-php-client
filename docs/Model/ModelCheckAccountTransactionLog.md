# ModelCheckAccountTransactionLog

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_create** | [**\DateTime**](\DateTime.md) | date the check account transaction log was created | [optional] 
**_check_account_transaction** | [**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelCheckAccountTransaction**](ModelCheckAccountTransaction.md) | the check account transaction to which the log refers | [optional] 
**_from_status** | **int** | the status before the logged change | [optional] 
**_to_status** | **int** | the status after the logged change | [optional] 
**_amount_paid** | **float** | the logged amount which was paid | [optional] 
**_booking_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_sev_client** | **object** | sevClient is the unique id every customer has and is used in nearly all operations | [optional] 
**_object** | **object** | Invoice/Voucher to which the logged transaction belongs | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


