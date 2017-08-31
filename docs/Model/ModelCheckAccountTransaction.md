# ModelCheckAccountTransaction

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_create** | [**\DateTime**](\DateTime.md) | date the check account transaction was created | [optional] 
**_update** | [**\DateTime**](\DateTime.md) | date the check account transaction was last updated | [optional] 
**_sev_client** | **object** | sevClient is the unique id every customer has and is used in nearly all operations | [optional] 
**_value_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_entry_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_amount** | **float** | amount of the transaction | [optional] 
**_gv_code** | **string** |  | [optional] 
**_entry_text** | **string** |  | [optional] 
**_prima_nota_no** | **string** |  | [optional] 
**_paymt_purpose** | **string** |  | [optional] 
**_payee_payer_bank_code** | **string** | payer bank code | [optional] 
**_payee_payer_acct_no** | **string** | payer account number | [optional] 
**_payee_payer_name** | **string** | payer name | [optional] 
**_check_account** | [**\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelCheckAccount**](ModelCheckAccount.md) | id of the check account | [optional] 
**_status** | **int** |  | [optional] 
**_score** | **string** |  | [optional] 
**_compare_hash** | **string** | hash to be compared | [optional] 
**_entry_type** | **object** |  | [optional] 
**_enshrined** | **bool** |  | [optional] 
**_source_transaction** | **object** | source check account transaction used for transfers | [optional] 
**_target_transaction** | **object** | destination check account transaction used for transfers | [optional] 
**_obono_receipt_uuid** | **string** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


