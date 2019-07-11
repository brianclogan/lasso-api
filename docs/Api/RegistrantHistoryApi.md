# CollingMedia\Lasso\RegistrantHistoryApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrantsRegistrantIdHistoriesHistoryIdGet**](RegistrantHistoryApi.md#registrantsRegistrantIdHistoriesHistoryIdGet) | **GET** /registrants/{registrantId}/histories/{historyId} | 
[**registrantsRegistrantIdHistoriesHistoryIdPut**](RegistrantHistoryApi.md#registrantsRegistrantIdHistoriesHistoryIdPut) | **PUT** /registrants/{registrantId}/histories/{historyId} | 
[**registrantsRegistrantIdHistoriesPost**](RegistrantHistoryApi.md#registrantsRegistrantIdHistoriesPost) | **POST** /registrants/{registrantId}/histories | 


# **registrantsRegistrantIdHistoriesHistoryIdGet**
> \CollingMedia\Lasso\Model\HistoryReadFull registrantsRegistrantIdHistoriesHistoryIdGet($registrant_id, $history_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$history_id = "history_id_example"; // string | 

try {
    $result = $apiInstance->registrantsRegistrantIdHistoriesHistoryIdGet($registrant_id, $history_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantHistoryApi->registrantsRegistrantIdHistoriesHistoryIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **history_id** | **string**|  |

### Return type

[**\CollingMedia\Lasso\Model\HistoryReadFull**](../Model/HistoryReadFull.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdHistoriesHistoryIdPut**
> \CollingMedia\Lasso\Model\HistoryReadFull registrantsRegistrantIdHistoriesHistoryIdPut($registrant_id, $history_id, $history)



Update a history item. `createdBy` is ignored and cannot be updated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$history_id = "history_id_example"; // string | 
$history = new \CollingMedia\Lasso\Model\HistoryWrite(); // \CollingMedia\Lasso\Model\HistoryWrite | 

try {
    $result = $apiInstance->registrantsRegistrantIdHistoriesHistoryIdPut($registrant_id, $history_id, $history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantHistoryApi->registrantsRegistrantIdHistoriesHistoryIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **history_id** | **string**|  |
 **history** | [**\CollingMedia\Lasso\Model\HistoryWrite**](../Model/HistoryWrite.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\HistoryReadFull**](../Model/HistoryReadFull.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdHistoriesPost**
> \CollingMedia\Lasso\Model\HistoryReadFull registrantsRegistrantIdHistoriesPost($registrant_id, $history)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantHistoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$history = new \CollingMedia\Lasso\Model\HistoryWrite(); // \CollingMedia\Lasso\Model\HistoryWrite | 

try {
    $result = $apiInstance->registrantsRegistrantIdHistoriesPost($registrant_id, $history);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantHistoryApi->registrantsRegistrantIdHistoriesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **history** | [**\CollingMedia\Lasso\Model\HistoryWrite**](../Model/HistoryWrite.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\HistoryReadFull**](../Model/HistoryReadFull.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

