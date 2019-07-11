# CollingMedia\Lasso\RegistrantSalesDetailsApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrantsRegistrantIdFollowUpProcessPut**](RegistrantSalesDetailsApi.md#registrantsRegistrantIdFollowUpProcessPut) | **PUT** /registrants/{registrantId}/follow-up-process | 
[**registrantsRegistrantIdRatingPut**](RegistrantSalesDetailsApi.md#registrantsRegistrantIdRatingPut) | **PUT** /registrants/{registrantId}/rating | 
[**registrantsRegistrantIdSecondarySourceTypePut**](RegistrantSalesDetailsApi.md#registrantsRegistrantIdSecondarySourceTypePut) | **PUT** /registrants/{registrantId}/secondary-source-type | 
[**registrantsRegistrantIdSourceTypePut**](RegistrantSalesDetailsApi.md#registrantsRegistrantIdSourceTypePut) | **PUT** /registrants/{registrantId}/source-type | 


# **registrantsRegistrantIdFollowUpProcessPut**
> \CollingMedia\Lasso\Model\FollowUpProcess registrantsRegistrantIdFollowUpProcessPut($registrant_id, $follow_up_process)



Set the follow-up process. If the follow-up process does not exist, it will be created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantSalesDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$follow_up_process = new \CollingMedia\Lasso\Model\FollowUpProcess(); // \CollingMedia\Lasso\Model\FollowUpProcess | 

try {
    $result = $apiInstance->registrantsRegistrantIdFollowUpProcessPut($registrant_id, $follow_up_process);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantSalesDetailsApi->registrantsRegistrantIdFollowUpProcessPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **follow_up_process** | [**\CollingMedia\Lasso\Model\FollowUpProcess**](../Model/FollowUpProcess.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\FollowUpProcess**](../Model/FollowUpProcess.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdRatingPut**
> \CollingMedia\Lasso\Model\Rating registrantsRegistrantIdRatingPut($registrant_id, $rating)



Set the rating for the registrant. If the rating does not exist, it will be created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantSalesDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$rating = new \CollingMedia\Lasso\Model\Rating(); // \CollingMedia\Lasso\Model\Rating | 

try {
    $result = $apiInstance->registrantsRegistrantIdRatingPut($registrant_id, $rating);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantSalesDetailsApi->registrantsRegistrantIdRatingPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **rating** | [**\CollingMedia\Lasso\Model\Rating**](../Model/Rating.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\Rating**](../Model/Rating.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdSecondarySourceTypePut**
> \CollingMedia\Lasso\Model\SecondarySourceType registrantsRegistrantIdSecondarySourceTypePut($registrant_id, $secondary_source_type)



Set the secondary source type. If the secondary source type does not exist, it will be created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantSalesDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$secondary_source_type = new \CollingMedia\Lasso\Model\SecondarySourceType(); // \CollingMedia\Lasso\Model\SecondarySourceType | 

try {
    $result = $apiInstance->registrantsRegistrantIdSecondarySourceTypePut($registrant_id, $secondary_source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantSalesDetailsApi->registrantsRegistrantIdSecondarySourceTypePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **secondary_source_type** | [**\CollingMedia\Lasso\Model\SecondarySourceType**](../Model/SecondarySourceType.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\SecondarySourceType**](../Model/SecondarySourceType.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdSourceTypePut**
> \CollingMedia\Lasso\Model\SourceType registrantsRegistrantIdSourceTypePut($registrant_id, $source_type)



Set the source type. If the source type does not exist, it will be created.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantSalesDetailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$source_type = new \CollingMedia\Lasso\Model\SourceType(); // \CollingMedia\Lasso\Model\SourceType | 

try {
    $result = $apiInstance->registrantsRegistrantIdSourceTypePut($registrant_id, $source_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantSalesDetailsApi->registrantsRegistrantIdSourceTypePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **source_type** | [**\CollingMedia\Lasso\Model\SourceType**](../Model/SourceType.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\SourceType**](../Model/SourceType.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

