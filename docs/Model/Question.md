# Question

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**question_id** | **string** | Specifies precisely which question | [optional] 
**type** | **string** | If the question does not exist, this defines which type of question is going to be created. Available types are: - Checkbox   Multiple possible answers, and multiple set answers - Text   Only one possible answer which is freeform text - Date   Only one possible answer, a date in the ISO 8601 UTC format | [optional] 
**name** | **string** |  | [optional] 
**path** | **string** | Specify which folder the question is in. Format: &#x60;/folder/subfolder&#x60;. If no path is given, the &#x60;integrations&#x60; folder will be used. | [optional] 
**answers** | [**\CollingMedia\Lasso\Model\Answer[]**](Answer.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


