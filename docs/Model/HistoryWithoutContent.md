# HistoryWithoutContent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Clients can create their own history types, so an exhaustive list of available history items is currently not available. Defaults: Appointment Cancelled Appointment Email Email Reply Fax Mail Mass Mail Merge Opted-Out Phone - Left Message Return Visit SSRU Visit | [optional] 
**type_id** | **string** | ID of the history type (could be client-created) | [optional] 
**subject** | **string** | Short summary of history item | [optional] 
**date** | **string** | When the history item was received, e.g. send-date for email | [optional] 
**created_by** | [**\CollingMedia\Lasso\Model\Creator**](Creator.md) |  | [optional] 
**_links** | [**\CollingMedia\Lasso\Model\HistoryWithoutContentLinks**](HistoryWithoutContentLinks.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


