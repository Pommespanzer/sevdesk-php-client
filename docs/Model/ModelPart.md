# ModelPart

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_create** | [**\DateTime**](\DateTime.md) | date the part was created | [optional] 
**_update** | [**\DateTime**](\DateTime.md) | date the part was last updated | [optional] 
**_name** | **string** | name of the part | [optional] 
**_part_number** | **string** |  | [optional] 
**_text** | **string** |  | [optional] 
**_category** | [**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelCategory**](ModelCategory.md) |  | [optional] 
**_stock** | **float** |  | [optional] 
**_unity** | [**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelUnity**](ModelUnity.md) | unity of the part, references Unity.php | [optional] 
**_price_partner** | **float** | price for a partner. Can be added via the options in the inventory where the part is displayed | [optional] 
**_price_customer** | **float** | price for a customer. Can be added via the options in the inventory where the part is displayed | [optional] 
**_price** | **float** | price of the part | [optional] 
**_second_unity** | [**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelUnity**](ModelUnity.md) | a second unity which can be added to the part | [optional] 
**_second_unity_factor** | **float** | factor for the second unity resulting in a new sumNet for the secondUnity | [optional] 
**_sev_client** | **object** | sevClient is the unique id every customer has and is used in nearly all operations | [optional] 
**_price_purchase** | **float** |  | [optional] 
**_tax_rate** | **float** |  | [optional] 
**_image** | **string** |  | [optional] 
**_status** | **int** |  | [optional] 
**_characteristics** | **string** | characteristics of the part | [optional] 
**_origin** | [**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelPart**](ModelPart.md) |  | [optional] 
**_characteristics_string** | **string** |  | [optional] 
**_internal_comment** | **string** |  | [optional] 
**_entry_type** | [**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelEntryType**](ModelEntryType.md) |  | [optional] 
**_accounting_type** | [**\ispserverfarm\sevdesk\phpclient\sevDeskModel\ModelAccountingType**](ModelAccountingType.md) |  | [optional] 
**_price_net** | **float** |  | [optional] 
**_price_gross** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


