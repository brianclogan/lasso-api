# CollingMedia\Lasso\RegistrantAssignedSalesRepsApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrantsRegistrantIdAssignedSalesRepsGet**](RegistrantAssignedSalesRepsApi.md#registrantsRegistrantIdAssignedSalesRepsGet) | **GET** /registrants/{registrantId}/assigned-sales-reps | 
[**registrantsRegistrantIdAssignedSalesRepsPut**](RegistrantAssignedSalesRepsApi.md#registrantsRegistrantIdAssignedSalesRepsPut) | **PUT** /registrants/{registrantId}/assigned-sales-reps | 


# **registrantsRegistrantIdAssignedSalesRepsGet**
> \CollingMedia\Lasso\Model\SalesRep[] registrantsRegistrantIdAssignedSalesRepsGet($registrant_id)



Gets a list of sales reps that this registrant is assigned to.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantAssignedSalesRepsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 

try {
    $result = $apiInstance->registrantsRegistrantIdAssignedSalesRepsGet($registrant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantAssignedSalesRepsApi->registrantsRegistrantIdAssignedSalesRepsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |

### Return type

[**\CollingMedia\Lasso\Model\SalesRep[]**](../Model/SalesRep.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdAssignedSalesRepsPut**
> \CollingMedia\Lasso\Model\SalesRep[] registrantsRegistrantIdAssignedSalesRepsPut($registrant_id, $sales_reps)



Update a registrant's assigned sales reps. This list will overwrite the assigned sales reps for the registrant. Only one sales rep can be set to primary. If more than one has isPrimary set to true, an error will be thrown.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantAssignedSalesRepsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$sales_reps = array(new \CollingMedia\Lasso\Model\SalesRep()); // \CollingMedia\Lasso\Model\SalesRep[] | 

try {
    $result = $apiInstance->registrantsRegistrantIdAssignedSalesRepsPut($registrant_id, $sales_reps);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantAssignedSalesRepsApi->registrantsRegistrantIdAssignedSalesRepsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **sales_reps** | [**\CollingMedia\Lasso\Model\SalesRep[]**](../Model/SalesRep.md)|  | [optional]

### Return type

[**\CollingMedia\Lasso\Model\SalesRep[]**](../Model/SalesRep.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

