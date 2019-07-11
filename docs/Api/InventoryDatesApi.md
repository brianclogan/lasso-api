# CollingMedia\Lasso\InventoryDatesApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryInventoryIdDatesGet**](InventoryDatesApi.md#inventoryInventoryIdDatesGet) | **GET** /inventory/{inventoryId}/dates | 
[**inventoryInventoryIdDatesPut**](InventoryDatesApi.md#inventoryInventoryIdDatesPut) | **PUT** /inventory/{inventoryId}/dates | 


# **inventoryInventoryIdDatesGet**
> \CollingMedia\Lasso\Model\Dates inventoryInventoryIdDatesGet($inventory_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryDatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | /inventory/123/dates

try {
    $result = $apiInstance->inventoryInventoryIdDatesGet($inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryDatesApi->inventoryInventoryIdDatesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**| /inventory/123/dates |

### Return type

[**\CollingMedia\Lasso\Model\Dates**](../Model/Dates.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInventoryIdDatesPut**
> \CollingMedia\Lasso\Model\Dates inventoryInventoryIdDatesPut($inventory_id, $dates)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryDatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | /inventory/123/dates
$dates = new \CollingMedia\Lasso\Model\Dates(); // \CollingMedia\Lasso\Model\Dates | 

try {
    $result = $apiInstance->inventoryInventoryIdDatesPut($inventory_id, $dates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryDatesApi->inventoryInventoryIdDatesPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**| /inventory/123/dates |
 **dates** | [**\CollingMedia\Lasso\Model\Dates**](../Model/Dates.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\Dates**](../Model/Dates.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

