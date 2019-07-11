# CollingMedia\Lasso\InventoryApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**inventoryGet**](InventoryApi.md#inventoryGet) | **GET** /inventory | Returns a list of all inventories
[**inventoryInventoryIdDelete**](InventoryApi.md#inventoryInventoryIdDelete) | **DELETE** /inventory/{inventoryId} | Delete an inventory
[**inventoryInventoryIdGet**](InventoryApi.md#inventoryInventoryIdGet) | **GET** /inventory/{inventoryId} | Get a single inventory
[**inventoryInventoryIdPut**](InventoryApi.md#inventoryInventoryIdPut) | **PUT** /inventory/{inventoryId} | Update an inventory
[**inventoryInventoryIdResetPost**](InventoryApi.md#inventoryInventoryIdResetPost) | **POST** /inventory/{inventoryId}/reset | Reset an inventory items. Deletes all associated data with the inventory item, e.g. pricing information, options and upgrades, deposits, etc.
[**inventoryInventoryIdSyncPut**](InventoryApi.md#inventoryInventoryIdSyncPut) | **PUT** /inventory/{inventoryId}/sync | Sync an inventory
[**inventoryPost**](InventoryApi.md#inventoryPost) | **POST** /inventory | Create an inventory
[**inventorySearchGet**](InventoryApi.md#inventorySearchGet) | **GET** /inventory/search | Search inventories by strataLot and inventoryNumber.


# **inventoryGet**
> \CollingMedia\Lasso\Model\InventoryRead[] inventoryGet()

Returns a list of all inventories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->inventoryGet();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\CollingMedia\Lasso\Model\InventoryRead[]**](../Model/InventoryRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInventoryIdDelete**
> inventoryInventoryIdDelete($inventory_id)

Delete an inventory

Deletes an inventory, in order to remove an inventory it must have a status of \"Available\" and not be \"locked\"

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | /inventory/123

try {
    $apiInstance->inventoryInventoryIdDelete($inventory_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryInventoryIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**| /inventory/123 |

### Return type

void (empty response body)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInventoryIdGet**
> \CollingMedia\Lasso\Model\InventoryFull inventoryInventoryIdGet($inventory_id)

Get a single inventory

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | /inventory/123

try {
    $result = $apiInstance->inventoryInventoryIdGet($inventory_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryInventoryIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**| /inventory/123 |

### Return type

[**\CollingMedia\Lasso\Model\InventoryFull**](../Model/InventoryFull.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInventoryIdPut**
> \CollingMedia\Lasso\Model\InventoryRead inventoryInventoryIdPut($inventory_id, $inventory)

Update an inventory

Updates an inventory, this route will not process changes to strata lot or inventory number. Note that this will overwrite all of the inventory's information with the entity provided in the request payload. To avoid accidentally deleting existing information, first perform a GET on the same resource, then modify the returned entity, then finally apply the entity through this PUT method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | /inventory/123
$inventory = new \CollingMedia\Lasso\Model\InventoryUpdate(); // \CollingMedia\Lasso\Model\InventoryUpdate | 

try {
    $result = $apiInstance->inventoryInventoryIdPut($inventory_id, $inventory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryInventoryIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**| /inventory/123 |
 **inventory** | [**\CollingMedia\Lasso\Model\InventoryUpdate**](../Model/InventoryUpdate.md)|  | [optional]

### Return type

[**\CollingMedia\Lasso\Model\InventoryRead**](../Model/InventoryRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInventoryIdResetPost**
> inventoryInventoryIdResetPost($inventory_id)

Reset an inventory items. Deletes all associated data with the inventory item, e.g. pricing information, options and upgrades, deposits, etc.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | /inventory/123/reset

try {
    $apiInstance->inventoryInventoryIdResetPost($inventory_id);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryInventoryIdResetPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**| /inventory/123/reset |

### Return type

void (empty response body)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryInventoryIdSyncPut**
> \CollingMedia\Lasso\Model\InventoryFull inventoryInventoryIdSyncPut($inventory_id, $inventory)

Sync an inventory

Syncs an inventory item with Lasso. This can only be done once, afterwards Lasso will reject any subsequent PUT request with a 409 error. This is done to prevent accidental data loss in Lasso, as certain items may not be included in the sync data.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory_id = "inventory_id_example"; // string | /inventory/123/sync
$inventory = new \CollingMedia\Lasso\Model\InventorySync(); // \CollingMedia\Lasso\Model\InventorySync | 

try {
    $result = $apiInstance->inventoryInventoryIdSyncPut($inventory_id, $inventory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryInventoryIdSyncPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory_id** | **string**| /inventory/123/sync |
 **inventory** | [**\CollingMedia\Lasso\Model\InventorySync**](../Model/InventorySync.md)|  | [optional]

### Return type

[**\CollingMedia\Lasso\Model\InventoryFull**](../Model/InventoryFull.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventoryPost**
> \CollingMedia\Lasso\Model\InventoryRead inventoryPost($inventory)

Create an inventory

Creates an inventory, if no component is specified the default is used.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inventory = new \CollingMedia\Lasso\Model\InventoryCreate(); // \CollingMedia\Lasso\Model\InventoryCreate | 

try {
    $result = $apiInstance->inventoryPost($inventory);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventoryPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inventory** | [**\CollingMedia\Lasso\Model\InventoryCreate**](../Model/InventoryCreate.md)|  | [optional]

### Return type

[**\CollingMedia\Lasso\Model\InventoryRead**](../Model/InventoryRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inventorySearchGet**
> \CollingMedia\Lasso\Model\InventoryRead[] inventorySearchGet($strata_lot, $inventory_number)

Search inventories by strataLot and inventoryNumber.

This endpoint is optimized for speed with a smaller payload than `/inventory`. This is handy for live search features, e.g. a drop-down with suggested results for a search bar.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\InventoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$strata_lot = "strata_lot_example"; // string | /inventory/search?strataLot=123
$inventory_number = "inventory_number_example"; // string | /inventory/search?inventoryNumber=123

try {
    $result = $apiInstance->inventorySearchGet($strata_lot, $inventory_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InventoryApi->inventorySearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **strata_lot** | **string**| /inventory/search?strataLot&#x3D;123 | [optional]
 **inventory_number** | **string**| /inventory/search?inventoryNumber&#x3D;123 | [optional]

### Return type

[**\CollingMedia\Lasso\Model\InventoryRead[]**](../Model/InventoryRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

