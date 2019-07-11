# CollingMedia\Lasso\RegistrantQuestionAnswersApi

All URIs are relative to *https://api.lassocrm.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**registrantsRegistrantIdQuestionsPost**](RegistrantQuestionAnswersApi.md#registrantsRegistrantIdQuestionsPost) | **POST** /registrants/{registrantId}/questions | 
[**registrantsRegistrantIdQuestionsQuestionIdPut**](RegistrantQuestionAnswersApi.md#registrantsRegistrantIdQuestionsQuestionIdPut) | **PUT** /registrants/{registrantId}/questions/{questionId} | 


# **registrantsRegistrantIdQuestionsPost**
> \CollingMedia\Lasso\Model\Question registrantsRegistrantIdQuestionsPost($registrant_id, $questions)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantQuestionAnswersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$questions = new \CollingMedia\Lasso\Model\Question(); // \CollingMedia\Lasso\Model\Question | 

try {
    $result = $apiInstance->registrantsRegistrantIdQuestionsPost($registrant_id, $questions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantQuestionAnswersApi->registrantsRegistrantIdQuestionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **questions** | [**\CollingMedia\Lasso\Model\Question**](../Model/Question.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\Question**](../Model/Question.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **registrantsRegistrantIdQuestionsQuestionIdPut**
> \CollingMedia\Lasso\Model\Question[] registrantsRegistrantIdQuestionsQuestionIdPut($registrant_id, $question_id, $answer)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: JwtAuthorizer
$config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CollingMedia\Lasso\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CollingMedia\Lasso\Api\RegistrantQuestionAnswersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$registrant_id = "registrant_id_example"; // string | 
$question_id = "question_id_example"; // string | 
$answer = new \CollingMedia\Lasso\Model\Answer1(); // \CollingMedia\Lasso\Model\Answer1 | 

try {
    $result = $apiInstance->registrantsRegistrantIdQuestionsQuestionIdPut($registrant_id, $question_id, $answer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrantQuestionAnswersApi->registrantsRegistrantIdQuestionsQuestionIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **registrant_id** | **string**|  |
 **question_id** | **string**|  |
 **answer** | [**\CollingMedia\Lasso\Model\Answer1**](../Model/Answer1.md)|  |

### Return type

[**\CollingMedia\Lasso\Model\Question[]**](../Model/Question.md)

### Authorization

[JwtAuthorizer](../../README.md#JwtAuthorizer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

