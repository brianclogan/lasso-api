# CollingMedia\Lasso\RegistrantApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrantsGet**](RegistrantApi.md#registrantsGet) | **GET** /registrants | List of registrants for a project.
[**registrantsPost**](RegistrantApi.md#registrantsPost) | **POST** /registrants | Create a registrant
[**registrantsRegistrantIdGet**](RegistrantApi.md#registrantsRegistrantIdGet) | **GET** /registrants/{registrantId} | Extended data for a registrant
[**registrantsRegistrantIdPut**](RegistrantApi.md#registrantsRegistrantIdPut) | **PUT** /registrants/{registrantId} | 
[**registrantsSearchGet**](RegistrantApi.md#registrantsSearchGet) | **GET** /registrants/search | Search registrants by name, email, phone, nickname, externalId, rating or creation date.


# **registrantsGet**
> \CollingMedia\Lasso\Model\InlineResponse200 registrantsGet($rating, $last_modified_after, $last_modified_before, $registered_after, $registered_before, $cursor)

List of registrants for a project.

Returns a full representation of a registrant, including notes and history items excluding the history body. This may produce a lot of data, so the endpoint is limited to 20 results at a time. Because a history body can be quite large, a separate request must be made to `/registrants/{registrantId}/histories/{historyId}` in order to retrieve it. Use the `next` link to page through the available registrants. Registrant are sorted by creation date, with newest on top.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rating = "rating_example"; // string | 
$last_modified_after = new \DateTime("2013-10-20"); // \DateTime | Returns only registrants that were modified at least once since the given date, in ISO 8601 UTC format
$last_modified_before = new \DateTime("2013-10-20"); // \DateTime | Returns only registrants that were last modified before this date. Combined with lastModifiedAfter this allows to select registrants that were last modified between two dates. Dates are in ISO 8601 UTC format.
$registered_after = new \DateTime("2013-10-20"); // \DateTime | Returns only registrants that were registered since the given date, in ISO 8601 UTC format.
$registered_before = new \DateTime("2013-10-20"); // \DateTime | Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format.
$cursor = "cursor_example"; // string | A cursor for the next batch of registrants is providing in the metadata of the body. Provide the `next` cursor as a query parameter in your next request to access the next batch of registrants. It's a base64 encoded json object with the fields `v` for version, `o` for offset and `l` for limit. You don't have to create the cursor object as it is embedded in the `next` link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.)

try {
    $result = $apiInstance->registrantsGet($rating, $last_modified_after, $last_modified_before, $registered_after, $registered_before, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantApi->registrantsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rating** | **string**|  | [optional]
 **last_modified_after** | **\DateTime**| Returns only registrants that were modified at least once since the given date, in ISO 8601 UTC format | [optional]
 **last_modified_before** | **\DateTime**| Returns only registrants that were last modified before this date. Combined with lastModifiedAfter this allows to select registrants that were last modified between two dates. Dates are in ISO 8601 UTC format. | [optional]
 **registered_after** | **\DateTime**| Returns only registrants that were registered since the given date, in ISO 8601 UTC format. | [optional]
 **registered_before** | **\DateTime**| Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format. | [optional]
 **cursor** | **string**| A cursor for the next batch of registrants is providing in the metadata of the body. Provide the &#x60;next&#x60; cursor as a query parameter in your next request to access the next batch of registrants. It&#39;s a base64 encoded json object with the fields &#x60;v&#x60; for version, &#x60;o&#x60; for offset and &#x60;l&#x60; for limit. You don&#39;t have to create the cursor object as it is embedded in the &#x60;next&#x60; link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.) | [optional]

### Return type

[**\CollingMedia\Lasso\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsPost**
> \CollingMedia\Lasso\Model\RegistrantRead registrantsPost($registrant)

Create a registrant

Note: History body is not returned in the response payload. Because a history body can be quite large, a separate request must be made to `/registrants/{registrantId}/histories/{historyId}` in order to retrieve it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant = new \CollingMedia\Lasso\Model\RegistrantWrite(); // \CollingMedia\Lasso\Model\RegistrantWrite | Registrant to create

try {
    $result = $apiInstance->registrantsPost($registrant);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantApi->registrantsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant** | [**\CollingMedia\Lasso\Model\RegistrantWrite**](../Model/RegistrantWrite.md)| Registrant to create |

### Return type

[**\CollingMedia\Lasso\Model\RegistrantRead**](../Model/RegistrantRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdGet**
> \CollingMedia\Lasso\Model\RegistrantRead registrantsRegistrantIdGet($registrant_id)

Extended data for a registrant

Note: History body is not returned in the response payload. Because a history body can be quite large, a separate request must be made to `/registrants/{registrantId}/histories/{historyId}` in order to retrieve it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 

try {
    $result = $apiInstance->registrantsRegistrantIdGet($registrant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantApi->registrantsRegistrantIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |

### Return type

[**\CollingMedia\Lasso\Model\RegistrantRead**](../Model/RegistrantRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdPut**
> \CollingMedia\Lasso\Model\RegistrantRead registrantsRegistrantIdPut($registrant_id, $registrant_personal_info)



Update a registrants personal data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$registrant_personal_info = new \CollingMedia\Lasso\Model\RegistrantPersonalInfo(); // \CollingMedia\Lasso\Model\RegistrantPersonalInfo | Registrants personal data to update

try {
    $result = $apiInstance->registrantsRegistrantIdPut($registrant_id, $registrant_personal_info);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantApi->registrantsRegistrantIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **registrant_personal_info** | [**\CollingMedia\Lasso\Model\RegistrantPersonalInfo**](../Model/RegistrantPersonalInfo.md)| Registrants personal data to update |

### Return type

[**\CollingMedia\Lasso\Model\RegistrantRead**](../Model/RegistrantRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsSearchGet**
> \CollingMedia\Lasso\Model\InlineResponse2001 registrantsSearchGet($last_modified, $registered_after, $registered_before, $rating, $email, $phone, $nick_name, $name, $fuzzy, $external_id, $smart_search, $cursor)

Search registrants by name, email, phone, nickname, externalId, rating or creation date.

This endpoint is optimized for speed with a smaller payload than `/registrants`. This is handy for live search features, e.g. a drop-down with suggested results for a search bar. Note: History body is not returned in the response payload. Because a history body can be quite large, a separate request must be made to `/registrants/{registrantId}/histories/{historyId}` in order to retrieve it.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$last_modified = "last_modified_example"; // string | Return only registrant modified after the specified date time, in ISO 8601 UTC format.
$registered_after = new \DateTime("2013-10-20"); // \DateTime | Returns only registrants that were registered since the given date, in ISO 8601 UTC format.
$registered_before = new \DateTime("2013-10-20"); // \DateTime | Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format.
$rating = "rating_example"; // string | Return only registrants who currently have the specified rating
$email = "email_example"; // string | Search registrants by email address
$phone = "phone_example"; // string | Search registrants by phone number
$nick_name = "nick_name_example"; // string | Search registrants by nickname
$name = "name_example"; // string | Search registrants by name. This is a loose search, the name will be parsed into first and last name, and then partially matched. E.g. `Jim and Susan Smith` will match `Jim Smith` and `Susan Smith`.
$fuzzy = true; // bool | Default is `false`, turns on partial matching for specific field searches where the provided value is a prefix or an exact match. E.g. `name=rob&fuzzy=true` will match the name `Robert`. Affected fields are: name, nickName, phone, email, externalId, and rating.
$external_id = "external_id_example"; // string | Search registrants by an integration externalId. The integration type will be determined by the API key.
$smart_search = "smart_search_example"; // string | Searches for registrants where the given value is a prefix or exactly matches at least one of first name, last name, full name, phone, email, nickName, or company. E.g. `Jon`, `Jon Sno`, `Sno`, `Jo`  will all return `Jon Snow`. `jonsnow@` and `jonsno` will return a registrant with the email `jonsnow@westeros.com`.
$cursor = "cursor_example"; // string | A cursor for the next batch of registrants is providing in the metadata of the body. Provide the `next` cursor as a query parameter in your next request to access the next batch of registrants. It's a base64 encoded json object with the fields `v` for version, `o` for offset and `l` for limit. You don't have to create the cursor object as it is embedded in the `next` link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.)

try {
    $result = $apiInstance->registrantsSearchGet($last_modified, $registered_after, $registered_before, $rating, $email, $phone, $nick_name, $name, $fuzzy, $external_id, $smart_search, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantApi->registrantsSearchGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **last_modified** | **string**| Return only registrant modified after the specified date time, in ISO 8601 UTC format. | [optional]
 **registered_after** | **\DateTime**| Returns only registrants that were registered since the given date, in ISO 8601 UTC format. | [optional]
 **registered_before** | **\DateTime**| Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format. | [optional]
 **rating** | **string**| Return only registrants who currently have the specified rating | [optional]
 **email** | **string**| Search registrants by email address | [optional]
 **phone** | **string**| Search registrants by phone number | [optional]
 **nick_name** | **string**| Search registrants by nickname | [optional]
 **name** | **string**| Search registrants by name. This is a loose search, the name will be parsed into first and last name, and then partially matched. E.g. &#x60;Jim and Susan Smith&#x60; will match &#x60;Jim Smith&#x60; and &#x60;Susan Smith&#x60;. | [optional]
 **fuzzy** | **bool**| Default is &#x60;false&#x60;, turns on partial matching for specific field searches where the provided value is a prefix or an exact match. E.g. &#x60;name&#x3D;rob&amp;fuzzy&#x3D;true&#x60; will match the name &#x60;Robert&#x60;. Affected fields are: name, nickName, phone, email, externalId, and rating. | [optional]
 **external_id** | **string**| Search registrants by an integration externalId. The integration type will be determined by the API key. | [optional]
 **smart_search** | **string**| Searches for registrants where the given value is a prefix or exactly matches at least one of first name, last name, full name, phone, email, nickName, or company. E.g. &#x60;Jon&#x60;, &#x60;Jon Sno&#x60;, &#x60;Sno&#x60;, &#x60;Jo&#x60;  will all return &#x60;Jon Snow&#x60;. &#x60;jonsnow@&#x60; and &#x60;jonsno&#x60; will return a registrant with the email &#x60;jonsnow@westeros.com&#x60;. | [optional]
 **cursor** | **string**| A cursor for the next batch of registrants is providing in the metadata of the body. Provide the &#x60;next&#x60; cursor as a query parameter in your next request to access the next batch of registrants. It&#39;s a base64 encoded json object with the fields &#x60;v&#x60; for version, &#x60;o&#x60; for offset and &#x60;l&#x60; for limit. You don&#39;t have to create the cursor object as it is embedded in the &#x60;next&#x60; link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.) | [optional]

### Return type

[**\CollingMedia\Lasso\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

