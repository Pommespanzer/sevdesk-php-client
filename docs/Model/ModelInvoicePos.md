# ModelInvoicePos

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_create** | [**\DateTime**](\DateTime.md) | creation date of the invoice position | [optional] 
**_update** | [**\DateTime**](\DateTime.md) | date the invoice position was last updated | [optional] 
**_invoice** | [**\ispserverfarm\sevdesk\phpclient\Model\ModelInvoice**](ModelInvoice.md) | the Model_Invoice the invoice position belongs to | [optional] 
**_part** | [**\ispserverfarm\sevdesk\phpclient\Model\ModelPart**](ModelPart.md) | the product/part which belongs to the invoice position | [optional] 
**_quantity** | **float** | the quantity of the product/part | [optional] 
**_price** | **float** | the price of the product/part | [optional] 
**_name** | **string** | the name of the product/part | [optional] 
**_priority** | **int** |  | [optional] 
**_unity** | [**\ispserverfarm\sevdesk\phpclient\Model\ModelUnity**](ModelUnity.md) |  | [optional] 
**_sev_client** | **object** | sevClient is the unique id every customer has and is used in nearly all operations | [optional] 
**_position_number** | **int** |  | [optional] 
**_text** | **string** |  | [optional] 
**_discount** | **float** | does not get filled, discount is handled in the discount_model | [optional] 
**_tax_rate** | **float** | tax rate in percent | [optional] 
**_temporary** | **bool** |  | [optional] 
**_sum_net** | **float** |  | [optional] 
**_sum_gross** | **float** |  | [optional] 
**_sum_discount** | **float** | does not get filled, sumDiscount is handled in the discount_model | [optional] 
**_sum_tax** | **float** |  | [optional] 
**_sum_net_accounting** | **float** | equals sumNet | [optional] 
**_sum_tax_accounting** | **float** | equals sumTax | [optional] 
**_sum_gross_accounting** | **float** | equals sumGross | [optional] 
**_price_net** | **float** | net price of the product/part (one) | [optional] 
**_price_gross** | **float** | gross price of the product/part (one) | [optional] 
**_price_tax** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


