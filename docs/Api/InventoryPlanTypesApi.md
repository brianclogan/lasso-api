# CollingMedia\Lasso\InventoryPlanTypesApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryInventoryIdPlansGet**](InventoryPlanTypesApi.md#inventoryInventoryIdPlansGet) | **GET** /inventory/{inventoryId}/plans | 
[**inventoryInventoryIdPlansPut**](InventoryPlanTypesApi.md#inventoryInventoryIdPlansPut) | **PUT** /inventory/{inventoryId}/plans | 
[**inventoryPlansGet**](InventoryPlanTypesApi.md#inventoryPlansGet) | **GET** /inventory/plans | 
[**inventoryPlansPlanTypeIdGet**](InventoryPlanTypesApi.md#inventoryPlansPlanTypeIdGet) | **GET** /inventory/plans/{planTypeId} | 
[**inventoryPlansPlanTypeIdPut**](InventoryPlanTypesApi.md#inventoryPlansPlanTypeIdPut) | **PUT** /inventory/plans/{planTypeId} | 
[**inventoryPlansPost**](InventoryPlanTypesApi.md#inventoryPlansPost) | **POST** /inventory/plans | 


# **inventoryInventoryIdPlansGet**
> \CollingMedia\Lasso\Model\PlanTypeRead inventoryInventoryIdPlansGet($inventory_id)



Get the plan type associated with this inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryPlanTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | 

try {
    $result = $apiInstance->inventoryInventoryIdPlansGet($inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPlanTypesApi->inventoryInventoryIdPlansGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**|  |

### Return type

[**\CollingMedia\Lasso\Model\PlanTypeRead**](../Model/PlanTypeRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInventoryIdPlansPut**
> \CollingMedia\Lasso\Model\PlanTypeRead inventoryInventoryIdPlansPut($inventory_id, $plan_type)



Associate an inventory with a plan type by ID or by plan type. If both are provided, then lookup will be by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryPlanTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | 
$plan_type = new \CollingMedia\Lasso\Model\InventoryPlanTypeWrite(); // \CollingMedia\Lasso\Model\InventoryPlanTypeWrite | 

try {
    $result = $apiInstance->inventoryInventoryIdPlansPut($inventory_id, $plan_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPlanTypesApi->inventoryInventoryIdPlansPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**|  |
 **plan_type** | [**\CollingMedia\Lasso\Model\InventoryPlanTypeWrite**](../Model/InventoryPlanTypeWrite.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\PlanTypeRead**](../Model/PlanTypeRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPlansGet**
> \CollingMedia\Lasso\Model\PlanTypeRead[] inventoryPlansGet()



Get the plan types associated with this project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryPlanTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->inventoryPlansGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPlanTypesApi->inventoryPlansGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CollingMedia\Lasso\Model\PlanTypeRead[]**](../Model/PlanTypeRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPlansPlanTypeIdGet**
> \CollingMedia\Lasso\Model\PlanTypeRead inventoryPlansPlanTypeIdGet($plan_type_id)



Get a plan type associated with this project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryPlanTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_type_id = "plan_type_id_example"; // string | 

try {
    $result = $apiInstance->inventoryPlansPlanTypeIdGet($plan_type_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPlanTypesApi->inventoryPlansPlanTypeIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_type_id** | **string**|  |

### Return type

[**\CollingMedia\Lasso\Model\PlanTypeRead**](../Model/PlanTypeRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPlansPlanTypeIdPut**
> \CollingMedia\Lasso\Model\PlanTypeRead inventoryPlansPlanTypeIdPut($plan_type_id, $plan_type)



Update a plan type associated with this project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryPlanTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_type_id = "plan_type_id_example"; // string | 
$plan_type = new \CollingMedia\Lasso\Model\PlanTypeWrite(); // \CollingMedia\Lasso\Model\PlanTypeWrite | 

try {
    $result = $apiInstance->inventoryPlansPlanTypeIdPut($plan_type_id, $plan_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPlanTypesApi->inventoryPlansPlanTypeIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_type_id** | **string**|  |
 **plan_type** | [**\CollingMedia\Lasso\Model\PlanTypeWrite**](../Model/PlanTypeWrite.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\PlanTypeRead**](../Model/PlanTypeRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPlansPost**
> \CollingMedia\Lasso\Model\PlanTypeRead inventoryPlansPost($plan_type)



Create a new plan type for this project

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryPlanTypesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_type = new \CollingMedia\Lasso\Model\PlanTypeWrite(); // \CollingMedia\Lasso\Model\PlanTypeWrite | 

try {
    $result = $apiInstance->inventoryPlansPost($plan_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryPlanTypesApi->inventoryPlansPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **plan_type** | [**\CollingMedia\Lasso\Model\PlanTypeWrite**](../Model/PlanTypeWrite.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\PlanTypeRead**](../Model/PlanTypeRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

