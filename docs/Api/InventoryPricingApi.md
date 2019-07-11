# CollingMedia\Lasso\InventoryPricingApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryInventoryIdPricingGet**](InventoryPricingApi.md#inventoryInventoryIdPricingGet) | **GET** /inventory/{inventoryId}/pricing | 
[**inventoryInventoryIdPricingPut**](InventoryPricingApi.md#inventoryInventoryIdPricingPut) | **PUT** /inventory/{inventoryId}/pricing | 


# **inventoryInventoryIdPricingGet**
> \CollingMedia\Lasso\Model\Pricing inventoryInventoryIdPricingGet($inventory_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | 

try {
    $result = $apiInstance->inventoryInventoryIdPricingGet($inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPricingApi->inventoryInventoryIdPricingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**|  |

### Return type

[**\CollingMedia\Lasso\Model\Pricing**](../Model/Pricing.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInventoryIdPricingPut**
> \CollingMedia\Lasso\Model\Pricing inventoryInventoryIdPricingPut($inventory_id, $dates)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryPricingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | 
$dates = new \CollingMedia\Lasso\Model\Pricing(); // \CollingMedia\Lasso\Model\Pricing | 

try {
    $result = $apiInstance->inventoryInventoryIdPricingPut($inventory_id, $dates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPricingApi->inventoryInventoryIdPricingPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**|  |
 **dates** | [**\CollingMedia\Lasso\Model\Pricing**](../Model/Pricing.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\Pricing**](../Model/Pricing.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

