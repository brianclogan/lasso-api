# CollingMedia\Lasso\RegistrantRelationshipsApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrantsRegistrantIdRelationshipsPost**](RegistrantRelationshipsApi.md#registrantsRegistrantIdRelationshipsPost) | **POST** /registrants/{registrantId}/relationships | 
[**registrantsRegistrantIdRelationshipsRelationshipIdDelete**](RegistrantRelationshipsApi.md#registrantsRegistrantIdRelationshipsRelationshipIdDelete) | **DELETE** /registrants/{registrantId}/relationships/{relationshipId} | 
[**registrantsRegistrantIdRelationshipsRelationshipIdPut**](RegistrantRelationshipsApi.md#registrantsRegistrantIdRelationshipsRelationshipIdPut) | **PUT** /registrants/{registrantId}/relationships/{relationshipId} | 


# **registrantsRegistrantIdRelationshipsPost**
> \CollingMedia\Lasso\Model\RegistrantRelationshipRead registrantsRegistrantIdRelationshipsPost($registrant_id, $relationship)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantRelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$relationship = new \CollingMedia\Lasso\Model\RegistrantRelationshipCreate(); // \CollingMedia\Lasso\Model\RegistrantRelationshipCreate | 

try {
    $result = $apiInstance->registrantsRegistrantIdRelationshipsPost($registrant_id, $relationship);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantRelationshipsApi->registrantsRegistrantIdRelationshipsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **relationship** | [**\CollingMedia\Lasso\Model\RegistrantRelationshipCreate**](../Model/RegistrantRelationshipCreate.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\RegistrantRelationshipRead**](../Model/RegistrantRelationshipRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdRelationshipsRelationshipIdDelete**
> registrantsRegistrantIdRelationshipsRelationshipIdDelete($registrant_id, $relationship_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantRelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$relationship_id = "relationship_id_example"; // string | 

try {
    $apiInstance->registrantsRegistrantIdRelationshipsRelationshipIdDelete($registrant_id, $relationship_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantRelationshipsApi->registrantsRegistrantIdRelationshipsRelationshipIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **relationship_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdRelationshipsRelationshipIdPut**
> \CollingMedia\Lasso\Model\RegistrantRelationshipRead registrantsRegistrantIdRelationshipsRelationshipIdPut($registrant_id, $relationship_id, $relationship)



Edits a relationship type only. This method cannot be used to edit a relationship's registrant. To do so, please delete the relationship, then re-add.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantRelationshipsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$relationship_id = "relationship_id_example"; // string | 
$relationship = new \CollingMedia\Lasso\Model\RegistrantRelationshipUpdate(); // \CollingMedia\Lasso\Model\RegistrantRelationshipUpdate | 

try {
    $result = $apiInstance->registrantsRegistrantIdRelationshipsRelationshipIdPut($registrant_id, $relationship_id, $relationship);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantRelationshipsApi->registrantsRegistrantIdRelationshipsRelationshipIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **relationship_id** | **string**|  |
 **relationship** | [**\CollingMedia\Lasso\Model\RegistrantRelationshipUpdate**](../Model/RegistrantRelationshipUpdate.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\RegistrantRelationshipRead**](../Model/RegistrantRelationshipRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

