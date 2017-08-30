# ModelOrderPos

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_create** | [**\DateTime**](\DateTime.md) | creation date of the order position | [optional] 
**_update** | [**\DateTime**](\DateTime.md) | date the order position was last updated | [optional] 
**_order** | [**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelOrder**](ModelOrder.md) | Model_Order the position belongs to | [optional] 
**_part** | [**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelPart**](ModelPart.md) | The Model_Part which is used in Model_OrderPos | [optional] 
**_quantity** | **float** | quantity of the Model_Part | [optional] 
**_price** | **float** | price of the Model_Part | [optional] 
**_name** | **string** |  | [optional] 
**_priority** | **int** |  | [optional] 
**_unity** | [**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelUnity**](ModelUnity.md) |  | [optional] 
**_sev_client** | **object** | sevClient is the unique id every customer has and is used in nearly all operations | [optional] 
**_position_number** | **int** |  | [optional] 
**_text** | **string** |  | [optional] 
**_discount** | **float** |  | [optional] 
**_optional** | **bool** |  | [optional] 
**_optional_chargeable** | **bool** |  | [optional] 
**_tax_rate** | **float** |  | [optional] 
**_sum_net** | **float** |  | [optional] 
**_sum_gross** | **float** |  | [optional] 
**_sum_discount** | **float** |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


