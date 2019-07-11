# CollingMedia\Lasso\RegistrantContactInformationApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrantsRegistrantIdAddressesAddressIdDelete**](RegistrantContactInformationApi.md#registrantsRegistrantIdAddressesAddressIdDelete) | **DELETE** /registrants/{registrantId}/addresses/{addressId} | 
[**registrantsRegistrantIdAddressesAddressIdPut**](RegistrantContactInformationApi.md#registrantsRegistrantIdAddressesAddressIdPut) | **PUT** /registrants/{registrantId}/addresses/{addressId} | 
[**registrantsRegistrantIdAddressesPost**](RegistrantContactInformationApi.md#registrantsRegistrantIdAddressesPost) | **POST** /registrants/{registrantId}/addresses | 
[**registrantsRegistrantIdEmailsEmailIdDelete**](RegistrantContactInformationApi.md#registrantsRegistrantIdEmailsEmailIdDelete) | **DELETE** /registrants/{registrantId}/emails/{emailId} | 
[**registrantsRegistrantIdEmailsEmailIdPut**](RegistrantContactInformationApi.md#registrantsRegistrantIdEmailsEmailIdPut) | **PUT** /registrants/{registrantId}/emails/{emailId} | 
[**registrantsRegistrantIdEmailsPost**](RegistrantContactInformationApi.md#registrantsRegistrantIdEmailsPost) | **POST** /registrants/{registrantId}/emails | 
[**registrantsRegistrantIdPersonContactInformationGet**](RegistrantContactInformationApi.md#registrantsRegistrantIdPersonContactInformationGet) | **GET** /registrants/{registrantId}/person/contact-information | Retrieve all of a registrant&#39;s contact information
[**registrantsRegistrantIdPersonContactInformationPut**](RegistrantContactInformationApi.md#registrantsRegistrantIdPersonContactInformationPut) | **PUT** /registrants/{registrantId}/person/contact-information | Convenience method to update all of a registrant&#39;s contact information in a single call
[**registrantsRegistrantIdPhonesPhoneIdDelete**](RegistrantContactInformationApi.md#registrantsRegistrantIdPhonesPhoneIdDelete) | **DELETE** /registrants/{registrantId}/phones/{phoneId} | 
[**registrantsRegistrantIdPhonesPhoneIdPut**](RegistrantContactInformationApi.md#registrantsRegistrantIdPhonesPhoneIdPut) | **PUT** /registrants/{registrantId}/phones/{phoneId} | 
[**registrantsRegistrantIdPhonesPost**](RegistrantContactInformationApi.md#registrantsRegistrantIdPhonesPost) | **POST** /registrants/{registrantId}/phones | 


# **registrantsRegistrantIdAddressesAddressIdDelete**
> registrantsRegistrantIdAddressesAddressIdDelete($registrant_id, $address_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantContactInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$address_id = "address_id_example"; // string | 

try {
    $apiInstance->registrantsRegistrantIdAddressesAddressIdDelete($registrant_id, $address_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantContactInformationApi->registrantsRegistrantIdAddressesAddressIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **address_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdAddressesAddressIdPut**
> \CollingMedia\Lasso\Model\AddressRead registrantsRegistrantIdAddressesAddressIdPut($registrant_id, $address_id, $address)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantContactInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$address_id = "address_id_example"; // string | 
$address = new \CollingMedia\Lasso\Model\AddressWrite(); // \CollingMedia\Lasso\Model\AddressWrite | 

try {
    $result = $apiInstance->registrantsRegistrantIdAddressesAddressIdPut($registrant_id, $address_id, $address);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantContactInformationApi->registrantsRegistrantIdAddressesAddressIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **address_id** | **string**|  |
 **address** | [**\CollingMedia\Lasso\Model\AddressWrite**](../Model/AddressWrite.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\AddressRead**](../Model/AddressRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdAddressesPost**
> \CollingMedia\Lasso\Model\AddressRead registrantsRegistrantIdAddressesPost($registrant_id, $addresses)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantContactInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$addresses = new \CollingMedia\Lasso\Model\AddressWrite(); // \CollingMedia\Lasso\Model\AddressWrite | 

try {
    $result = $apiInstance->registrantsRegistrantIdAddressesPost($registrant_id, $addresses);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantContactInformationApi->registrantsRegistrantIdAddressesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **addresses** | [**\CollingMedia\Lasso\Model\AddressWrite**](../Model/AddressWrite.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\AddressRead**](../Model/AddressRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdEmailsEmailIdDelete**
> registrantsRegistrantIdEmailsEmailIdDelete($registrant_id, $email_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantContactInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$email_id = "email_id_example"; // string | 

try {
    $apiInstance->registrantsRegistrantIdEmailsEmailIdDelete($registrant_id, $email_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantContactInformationApi->registrantsRegistrantIdEmailsEmailIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **email_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdEmailsEmailIdPut**
> \CollingMedia\Lasso\Model\EmailRead registrantsRegistrantIdEmailsEmailIdPut($registrant_id, $email_id, $email)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantContactInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$email_id = "email_id_example"; // string | 
$email = new \CollingMedia\Lasso\Model\EmailWrite(); // \CollingMedia\Lasso\Model\EmailWrite | 

try {
    $result = $apiInstance->registrantsRegistrantIdEmailsEmailIdPut($registrant_id, $email_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantContactInformationApi->registrantsRegistrantIdEmailsEmailIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **email_id** | **string**|  |
 **email** | [**\CollingMedia\Lasso\Model\EmailWrite**](../Model/EmailWrite.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\EmailRead**](../Model/EmailRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdEmailsPost**
> \CollingMedia\Lasso\Model\EmailRead registrantsRegistrantIdEmailsPost($registrant_id, $emails)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantContactInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$emails = new \CollingMedia\Lasso\Model\EmailWrite(); // \CollingMedia\Lasso\Model\EmailWrite | 

try {
    $result = $apiInstance->registrantsRegistrantIdEmailsPost($registrant_id, $emails);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantContactInformationApi->registrantsRegistrantIdEmailsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **emails** | [**\CollingMedia\Lasso\Model\EmailWrite**](../Model/EmailWrite.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\EmailRead**](../Model/EmailRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdPersonContactInformationGet**
> \CollingMedia\Lasso\Model\ContactInformation registrantsRegistrantIdPersonContactInformationGet($registrant_id)

Retrieve all of a registrant's contact information

Retrieves all of a registrant's contact information. Use this method in conjunction with the PUT method of the same resource to perform a safe update.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantContactInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 

try {
    $result = $apiInstance->registrantsRegistrantIdPersonContactInformationGet($registrant_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantContactInformationApi->registrantsRegistrantIdPersonContactInformationGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |

### Return type

[**\CollingMedia\Lasso\Model\ContactInformation**](../Model/ContactInformation.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdPersonContactInformationPut**
> \CollingMedia\Lasso\Model\ContactInformation registrantsRegistrantIdPersonContactInformationPut($registrant_id, $registrant_contact_information)

Convenience method to update all of a registrant's contact information in a single call

Update a registrant's contact information. This will overwrite all of the registrant's contact information with the entity provided in the request payload. To avoid accidentally deleting contact information, first perform a GET on the same resource, then modify the returned entity, and finally apply the entity through this PUT method.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantContactInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$registrant_contact_information = new \CollingMedia\Lasso\Model\ContactInformation(); // \CollingMedia\Lasso\Model\ContactInformation | Registrant's contact information for update.  Notes: - emails, phones, addresses: for the collections that are non-empty, there must be exactly   one entity within the collection that is a designated primary, otherwise a 400 error will be returned

try {
    $result = $apiInstance->registrantsRegistrantIdPersonContactInformationPut($registrant_id, $registrant_contact_information);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantContactInformationApi->registrantsRegistrantIdPersonContactInformationPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **registrant_contact_information** | [**\CollingMedia\Lasso\Model\ContactInformation**](../Model/ContactInformation.md)| Registrant&#39;s contact information for update.  Notes: - emails, phones, addresses: for the collections that are non-empty, there must be exactly   one entity within the collection that is a designated primary, otherwise a 400 error will be returned |

### Return type

[**\CollingMedia\Lasso\Model\ContactInformation**](../Model/ContactInformation.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdPhonesPhoneIdDelete**
> registrantsRegistrantIdPhonesPhoneIdDelete($registrant_id, $phone_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantContactInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$phone_id = "phone_id_example"; // string | 

try {
    $apiInstance->registrantsRegistrantIdPhonesPhoneIdDelete($registrant_id, $phone_id);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantContactInformationApi->registrantsRegistrantIdPhonesPhoneIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **phone_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdPhonesPhoneIdPut**
> \CollingMedia\Lasso\Model\PhoneRead registrantsRegistrantIdPhonesPhoneIdPut($registrant_id, $phone_id, $phone)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantContactInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$phone_id = "phone_id_example"; // string | 
$phone = new \CollingMedia\Lasso\Model\PhoneWrite(); // \CollingMedia\Lasso\Model\PhoneWrite | 

try {
    $result = $apiInstance->registrantsRegistrantIdPhonesPhoneIdPut($registrant_id, $phone_id, $phone);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantContactInformationApi->registrantsRegistrantIdPhonesPhoneIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **phone_id** | **string**|  |
 **phone** | [**\CollingMedia\Lasso\Model\PhoneWrite**](../Model/PhoneWrite.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\PhoneRead**](../Model/PhoneRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdPhonesPost**
> \CollingMedia\Lasso\Model\PhoneRead registrantsRegistrantIdPhonesPost($registrant_id, $phones)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantContactInformationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$phones = new \CollingMedia\Lasso\Model\PhoneWrite(); // \CollingMedia\Lasso\Model\PhoneWrite | 

try {
    $result = $apiInstance->registrantsRegistrantIdPhonesPost($registrant_id, $phones);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantContactInformationApi->registrantsRegistrantIdPhonesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **phones** | [**\CollingMedia\Lasso\Model\PhoneWrite**](../Model/PhoneWrite.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\PhoneRead**](../Model/PhoneRead.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

