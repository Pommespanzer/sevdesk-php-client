# ModelVoucherPos

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_create** | [**\DateTime**](\DateTime.md) | date the voucher positions was created | [optional] 
**_update** | [**\DateTime**](\DateTime.md) | date the voucher position was last updated | [optional] 
**_sev_client** | **object** | sevClient is the unique id every customer has and is used in nearly all operations | [optional] 
**_voucher** | [**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelVoucher**](ModelVoucher.md) | voucher to which the position belongs | [optional] 
**_accounting_type** | [**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelAccountingType**](ModelAccountingType.md) |  | [optional] 
**_estimated_accounting_type** | [**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelAccountingType**](ModelAccountingType.md) |  | [optional] 
**_tax_rate** | **float** |  | [optional] 
**_sum** | **float** |  | [optional] 
**_net** | **bool** |  | [optional] 
**_is_asset** | **bool** |  | [optional] 
**_sum_net** | **float** |  | [optional] [default to 0.0]
**_sum_tax** | **float** |  | [optional] [default to 0.0]
**_sum_gross** | **float** |  | [optional] [default to 0.0]
**_sum_net_accounting** | **float** |  | [optional] [default to 0.0]
**_sum_tax_accounting** | **float** |  | [optional] [default to 0.0]
**_sum_gross_accounting** | **float** |  | [optional] [default to 0.0]
**_comment** | **string** |  | [optional] 
**_is_gwg** | **bool** |  | [optional] 
**_catering_tax_rate** | **float** |  | [optional] 
**_catering_tip** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


