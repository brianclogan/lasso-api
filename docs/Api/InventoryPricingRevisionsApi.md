# CollingMedia\Lasso\InventoryPricingRevisionsApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryInventoryIdPricingRevisionsGet**](InventoryPricingRevisionsApi.md#inventoryInventoryIdPricingRevisionsGet) | **GET** /inventory/{inventoryId}/pricing-revisions | 
[**inventoryInventoryIdPricingRevisionsPost**](InventoryPricingRevisionsApi.md#inventoryInventoryIdPricingRevisionsPost) | **POST** /inventory/{inventoryId}/pricing-revisions | 


# **inventoryInventoryIdPricingRevisionsGet**
> \CollingMedia\Lasso\Model\PricingRevision[] inventoryInventoryIdPricingRevisionsGet($inventory_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryPricingRevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | 

try {
    $result = $apiInstance->inventoryInventoryIdPricingRevisionsGet($inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPricingRevisionsApi->inventoryInventoryIdPricingRevisionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**|  |

### Return type

[**\CollingMedia\Lasso\Model\PricingRevision[]**](../Model/PricingRevision.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInventoryIdPricingRevisionsPost**
> \CollingMedia\Lasso\Model\PricingRevision inventoryInventoryIdPricingRevisionsPost($inventory_id, $dates)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryPricingRevisionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | 
$dates = new \CollingMedia\Lasso\Model\PricingRevision(); // \CollingMedia\Lasso\Model\PricingRevision | 

try {
    $result = $apiInstance->inventoryInventoryIdPricingRevisionsPost($inventory_id, $dates);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPricingRevisionsApi->inventoryInventoryIdPricingRevisionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**|  |
 **dates** | [**\CollingMedia\Lasso\Model\PricingRevision**](../Model/PricingRevision.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\PricingRevision**](../Model/PricingRevision.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

