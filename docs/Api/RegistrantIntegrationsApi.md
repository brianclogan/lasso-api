# CollingMedia\Lasso\RegistrantIntegrationsApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrantsRegistrantIdExternalExternalIdDelete**](RegistrantIntegrationsApi.md#registrantsRegistrantIdExternalExternalIdDelete) | **DELETE** /registrants/{registrantId}/external/{externalId} | 
[**registrantsRegistrantIdIntegrationsDelete**](RegistrantIntegrationsApi.md#registrantsRegistrantIdIntegrationsDelete) | **DELETE** /registrants/{registrantId}/integrations | 
[**registrantsRegistrantIdIntegrationsPost**](RegistrantIntegrationsApi.md#registrantsRegistrantIdIntegrationsPost) | **POST** /registrants/{registrantId}/integrations | 


# **registrantsRegistrantIdExternalExternalIdDelete**
> registrantsRegistrantIdExternalExternalIdDelete($registrant_id, $external_id)



Disassociates a registrant from a specific externalId. This means that webhooks that trigger on the specified externalId will no longer send events for this registrant. The integration associated with the registrant will be determined from the API Key used to access this route.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantIntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$external_id = "external_id_example"; // string | 

try {
    $apiInstance->registrantsRegistrantIdExternalExternalIdDelete($registrant_id, $external_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantIntegrationsApi->registrantsRegistrantIdExternalExternalIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **external_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdIntegrationsDelete**
> registrantsRegistrantIdIntegrationsDelete($registrant_id)



Disassociates a registrant from all externalId's of an integration. This means that webhooks that trigger on externalId will no longer send events for this registrant. The integration associated with the registrant will be determined from the API Key used to access this route.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantIntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 

try {
    $apiInstance->registrantsRegistrantIdIntegrationsDelete($registrant_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantIntegrationsApi->registrantsRegistrantIdIntegrationsDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdIntegrationsPost**
> \CollingMedia\Lasso\Model\ExternalId registrantsRegistrantIdIntegrationsPost($registrant_id, $external_id)



Associate an external customer with a Lasso registrant. What this allows, is for integration-specific triggers to automatically fire when an event is registered for a registrant - for example, when a registrant is updated, Lasso could fire off an event to an external integration. The integration type will be determined from the API Key used to access this route.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantIntegrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$external_id = new \CollingMedia\Lasso\Model\ExternalId(); // \CollingMedia\Lasso\Model\ExternalId | 

try {
    $result = $apiInstance->registrantsRegistrantIdIntegrationsPost($registrant_id, $external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantIntegrationsApi->registrantsRegistrantIdIntegrationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **external_id** | [**\CollingMedia\Lasso\Model\ExternalId**](../Model/ExternalId.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\ExternalId**](../Model/ExternalId.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

