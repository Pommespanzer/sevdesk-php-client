# ModelEmail

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_create** | [**\DateTime**](\DateTime.md) | creation date of the Email | [optional] 
**_update** | [**\DateTime**](\DateTime.md) | date the email was last updated | [optional] 
**_object** | [**\ispserverfarm\sevdesk\phpclient\model\ModelInvoice**](ModelInvoice.md) | invoice object which is send via email | [optional] 
**_from** | **string** | sender of the email | [optional] 
**_to** | **string** | recipient of the email | [optional] 
**_subject** | **string** | subject of the email | [optional] 
**_text** | **string** | text written in the email | [optional] 
**_sev_client** | **object** | sevClient is the unique id every customer has and is used in nearly all operations | [optional] 
**_cc** | **string** | cc of the email | [optional] 
**_bcc** | **string** | bcc of the email | [optional] 
**_arrived** | [**\DateTime**](\DateTime.md) | arrival date of the email | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


