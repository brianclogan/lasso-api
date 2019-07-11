# CollingMedia\Lasso\RegistrantNotesApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrantsRegistrantIdNotesNoteIdDelete**](RegistrantNotesApi.md#registrantsRegistrantIdNotesNoteIdDelete) | **DELETE** /registrants/{registrantId}/notes/{noteId} | 
[**registrantsRegistrantIdNotesPost**](RegistrantNotesApi.md#registrantsRegistrantIdNotesPost) | **POST** /registrants/{registrantId}/notes | 


# **registrantsRegistrantIdNotesNoteIdDelete**
> registrantsRegistrantIdNotesNoteIdDelete($registrant_id, $note_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$note_id = "note_id_example"; // string | 

try {
    $apiInstance->registrantsRegistrantIdNotesNoteIdDelete($registrant_id, $note_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantNotesApi->registrantsRegistrantIdNotesNoteIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **note_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdNotesPost**
> \CollingMedia\Lasso\Model\RegistrantNoteRead registrantsRegistrantIdNotesPost($registrant_id, $note)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$note = new \CollingMedia\Lasso\Model\RegistrantNoteWrite(); // \CollingMedia\Lasso\Model\RegistrantNoteWrite | 

try {
    $result = $apiInstance->registrantsRegistrantIdNotesPost($registrant_id, $note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantNotesApi->registrantsRegistrantIdNotesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **note** | [**\CollingMedia\Lasso\Model\RegistrantNoteWrite**](../Model/RegistrantNoteWrite.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\RegistrantNoteRead**](../Model/RegistrantNoteRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

