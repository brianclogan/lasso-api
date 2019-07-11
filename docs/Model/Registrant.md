# Registrant

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**website_tracking** | [**\CollingMedia\Lasso\Model\RegistrantWebsiteTracking**](RegistrantWebsiteTracking.md) |  | [optional] 
**exclude_from_traffic** | **bool** | Exclude this registrant from traffic reports | [optional] 
**registration_date** | **string** | When the registrant was created in the system. Dates are in ISO 8601 UTC format. | [optional] 
**external_id** | **string** | identifies this registrant in an externally linked system. The external system is determined from the api key | [optional] 
**external_duplicate_ids** | **string[]** | a registrant that has been merged with another will inherit the other&#39;s externalId. This list keeps track of all other externalId&#39;s linked to this single registrant | [optional] 
**person** | [**\CollingMedia\Lasso\Model\RegistrantPersonalInfo**](RegistrantPersonalInfo.md) |  | [optional] 
**rating** | [**\CollingMedia\Lasso\Model\Rating**](Rating.md) |  | [optional] 
**source_type** | [**\CollingMedia\Lasso\Model\SourceType**](SourceType.md) |  | [optional] 
**secondary_source_type** | [**\CollingMedia\Lasso\Model\SecondarySourceType**](SecondarySourceType.md) |  | [optional] 
**follow_up_process** | [**\CollingMedia\Lasso\Model\FollowUpProcess**](FollowUpProcess.md) |  | [optional] 
**assigned_sales_reps** | [**\CollingMedia\Lasso\Model\SalesRep[]**](SalesRep.md) |  | [optional] 
**questions** | [**\CollingMedia\Lasso\Model\Question[]**](Question.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


