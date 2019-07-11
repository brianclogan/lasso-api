# CollingMedia\Lasso\InventoryPurchasersApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryInventoryIdPurchasersGet**](InventoryPurchasersApi.md#inventoryInventoryIdPurchasersGet) | **GET** /inventory/{inventoryId}/purchasers | 
[**inventoryInventoryIdPurchasersPut**](InventoryPurchasersApi.md#inventoryInventoryIdPurchasersPut) | **PUT** /inventory/{inventoryId}/purchasers | 


# **inventoryInventoryIdPurchasersGet**
> \CollingMedia\Lasso\Model\Purchaser[] inventoryInventoryIdPurchasersGet($inventory_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryPurchasersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | 

try {
    $result = $apiInstance->inventoryInventoryIdPurchasersGet($inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPurchasersApi->inventoryInventoryIdPurchasersGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**|  |

### Return type

[**\CollingMedia\Lasso\Model\Purchaser[]**](../Model/Purchaser.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInventoryIdPurchasersPut**
> \CollingMedia\Lasso\Model\Purchaser[] inventoryInventoryIdPurchasersPut($inventory_id, $purchasers)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryPurchasersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | 
$purchasers = array(new \CollingMedia\Lasso\Model\PurchaserCreate()); // \CollingMedia\Lasso\Model\PurchaserCreate[] | 

try {
    $result = $apiInstance->inventoryInventoryIdPurchasersPut($inventory_id, $purchasers);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPurchasersApi->inventoryInventoryIdPurchasersPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**|  |
 **purchasers** | [**\CollingMedia\Lasso\Model\PurchaserCreate[]**](../Model/PurchaserCreate.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\Purchaser[]**](../Model/Purchaser.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

