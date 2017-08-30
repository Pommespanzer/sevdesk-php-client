# ModelTask

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_create** | [**\DateTime**](\DateTime.md) | the date the task was created | [optional] 
**_update** | [**\DateTime**](\DateTime.md) | date the task was last updated | [optional] 
**_name** | **string** |  | [optional] 
**_assigned** | [**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelSevUser**](ModelSevUser.md) | the sevDesk user who is assigned to the task | [optional] 
**_object** | **object** | can be a contact, invoice, etc to which the task refers to | [optional] 
**_deadline** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_status** | **int** |  | [optional] 
**_category** | [**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelCategory**](ModelCategory.md) | category of the created task | [optional] 
**_done** | [**\DateTime**](\DateTime.md) |  | [optional] 
**_create_user** | [**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelSevUser**](ModelSevUser.md) | the SevUser who created the task | [optional] 
**_done_user** | [**\isp-serverfarm\sevdesk\php-client\sevdesk-model\ModelSevUser**](ModelSevUser.md) | the SevUser who completed the task | [optional] 
**_notice_creator** | **bool** | notice the creator when the task is finished | [optional] 
**_sev_client** | **object** | sevClient is the unique id every customer has and is used in nearly all operations | [optional] 
**_begin** | [**\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


