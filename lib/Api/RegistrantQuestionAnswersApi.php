<?php
/**
 * RegistrantQuestionAnswersApi
 * PHP version 7
 *
 * @category Class
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */

/**
 * Lasso API
 *
 * Manage Registrant and Inventory data within Lasso CRM.  Authorization header with a Bearer JWT api key token is required for all requests. API keys are project/location based, and can be obtained from your business contact with Lasso Data Systems. In the future, Project Admin's will be able to generate their own api keys from the Lasso CRM web application.  To try it out in swagger: - Select the `Authorize` button and place your api key in the textbox - Ensure that the api key is prefixed with `Bearer` including a space separating `Bearer` from the api key - Go to the route you want to try out in the swagger definition - Select `Try it out` - Input any required fields, query params, and request payload - Select `Execute`  Alternatively, you can try it on your command line with curl, for example: `curl -X GET \"https://api.lassocrm.com/v1/registrants/123456\" -H \"accept: application/json\" -H \"Authorization: Bearer ***apikey***\"`
 *
 */



namespace CollingMedia\Lasso\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use CollingMedia\Lasso\ApiException;
use CollingMedia\Lasso\Configuration;
use CollingMedia\Lasso\HeaderSelector;
use CollingMedia\Lasso\ObjectSerializer;

/**
 * RegistrantQuestionAnswersApi Class Doc Comment
 *
 * @category Class
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class RegistrantQuestionAnswersApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation registrantsRegistrantIdQuestionsPost
     *
     * @param  string $registrant_id registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\Question $questions questions (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\Question
     */
    public function registrantsRegistrantIdQuestionsPost($registrant_id, $questions)
    {
        list($response) = $this->registrantsRegistrantIdQuestionsPostWithHttpInfo($registrant_id, $questions);
        return $response;
    }

    /**
     * Operation registrantsRegistrantIdQuestionsPostWithHttpInfo
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\Question $questions (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\Question, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsRegistrantIdQuestionsPostWithHttpInfo($registrant_id, $questions)
    {
        $returnType = '\CollingMedia\Lasso\Model\Question';
        $request = $this->registrantsRegistrantIdQuestionsPostRequest($registrant_id, $questions);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\Question',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation registrantsRegistrantIdQuestionsPostAsync
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\Question $questions (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdQuestionsPostAsync($registrant_id, $questions)
    {
        return $this->registrantsRegistrantIdQuestionsPostAsyncWithHttpInfo($registrant_id, $questions)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsRegistrantIdQuestionsPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\Question $questions (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdQuestionsPostAsyncWithHttpInfo($registrant_id, $questions)
    {
        $returnType = '\CollingMedia\Lasso\Model\Question';
        $request = $this->registrantsRegistrantIdQuestionsPostRequest($registrant_id, $questions);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'registrantsRegistrantIdQuestionsPost'
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\Question $questions (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsRegistrantIdQuestionsPostRequest($registrant_id, $questions)
    {
        // verify the required parameter 'registrant_id' is set
        if ($registrant_id === null || (is_array($registrant_id) && count($registrant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_id when calling registrantsRegistrantIdQuestionsPost'
            );
        }
        // verify the required parameter 'questions' is set
        if ($questions === null || (is_array($questions) && count($questions) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $questions when calling registrantsRegistrantIdQuestionsPost'
            );
        }

        $resourcePath = '/registrants/{registrantId}/questions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($registrant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'registrantId' . '}',
                ObjectSerializer::toPathValue($registrant_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($questions)) {
            $_tempBody = $questions;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation registrantsRegistrantIdQuestionsQuestionIdPut
     *
     * @param  string $registrant_id registrant_id (required)
     * @param  string $question_id question_id (required)
     * @param  \CollingMedia\Lasso\Model\Answer1 $answer answer (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\Question[]
     */
    public function registrantsRegistrantIdQuestionsQuestionIdPut($registrant_id, $question_id, $answer)
    {
        list($response) = $this->registrantsRegistrantIdQuestionsQuestionIdPutWithHttpInfo($registrant_id, $question_id, $answer);
        return $response;
    }

    /**
     * Operation registrantsRegistrantIdQuestionsQuestionIdPutWithHttpInfo
     *
     * @param  string $registrant_id (required)
     * @param  string $question_id (required)
     * @param  \CollingMedia\Lasso\Model\Answer1 $answer (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\Question[], HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsRegistrantIdQuestionsQuestionIdPutWithHttpInfo($registrant_id, $question_id, $answer)
    {
        $returnType = '\CollingMedia\Lasso\Model\Question[]';
        $request = $this->registrantsRegistrantIdQuestionsQuestionIdPutRequest($registrant_id, $question_id, $answer);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\Question[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation registrantsRegistrantIdQuestionsQuestionIdPutAsync
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  string $question_id (required)
     * @param  \CollingMedia\Lasso\Model\Answer1 $answer (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdQuestionsQuestionIdPutAsync($registrant_id, $question_id, $answer)
    {
        return $this->registrantsRegistrantIdQuestionsQuestionIdPutAsyncWithHttpInfo($registrant_id, $question_id, $answer)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsRegistrantIdQuestionsQuestionIdPutAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  string $question_id (required)
     * @param  \CollingMedia\Lasso\Model\Answer1 $answer (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdQuestionsQuestionIdPutAsyncWithHttpInfo($registrant_id, $question_id, $answer)
    {
        $returnType = '\CollingMedia\Lasso\Model\Question[]';
        $request = $this->registrantsRegistrantIdQuestionsQuestionIdPutRequest($registrant_id, $question_id, $answer);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'registrantsRegistrantIdQuestionsQuestionIdPut'
     *
     * @param  string $registrant_id (required)
     * @param  string $question_id (required)
     * @param  \CollingMedia\Lasso\Model\Answer1 $answer (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsRegistrantIdQuestionsQuestionIdPutRequest($registrant_id, $question_id, $answer)
    {
        // verify the required parameter 'registrant_id' is set
        if ($registrant_id === null || (is_array($registrant_id) && count($registrant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_id when calling registrantsRegistrantIdQuestionsQuestionIdPut'
            );
        }
        // verify the required parameter 'question_id' is set
        if ($question_id === null || (is_array($question_id) && count($question_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $question_id when calling registrantsRegistrantIdQuestionsQuestionIdPut'
            );
        }
        // verify the required parameter 'answer' is set
        if ($answer === null || (is_array($answer) && count($answer) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $answer when calling registrantsRegistrantIdQuestionsQuestionIdPut'
            );
        }

        $resourcePath = '/registrants/{registrantId}/questions/{questionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($registrant_id !== null) {
            $resourcePath = str_replace(
                '{' . 'registrantId' . '}',
                ObjectSerializer::toPathValue($registrant_id),
                $resourcePath
            );
        }
        // path params
        if ($question_id !== null) {
            $resourcePath = str_replace(
                '{' . 'questionId' . '}',
                ObjectSerializer::toPathValue($question_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($answer)) {
            $_tempBody = $answer;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
