<?php
/**
 * RegistrantSalesDetailsApi
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
 * RegistrantSalesDetailsApi Class Doc Comment
 *
 * @category Class
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class RegistrantSalesDetailsApi
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
     * Operation registrantsRegistrantIdFollowUpProcessPut
     *
     * @param  string $registrant_id registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\FollowUpProcess $follow_up_process follow_up_process (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\FollowUpProcess
     */
    public function registrantsRegistrantIdFollowUpProcessPut($registrant_id, $follow_up_process)
    {
        list($response) = $this->registrantsRegistrantIdFollowUpProcessPutWithHttpInfo($registrant_id, $follow_up_process);
        return $response;
    }

    /**
     * Operation registrantsRegistrantIdFollowUpProcessPutWithHttpInfo
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\FollowUpProcess $follow_up_process (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\FollowUpProcess, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsRegistrantIdFollowUpProcessPutWithHttpInfo($registrant_id, $follow_up_process)
    {
        $returnType = '\CollingMedia\Lasso\Model\FollowUpProcess';
        $request = $this->registrantsRegistrantIdFollowUpProcessPutRequest($registrant_id, $follow_up_process);

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
                        '\CollingMedia\Lasso\Model\FollowUpProcess',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation registrantsRegistrantIdFollowUpProcessPutAsync
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\FollowUpProcess $follow_up_process (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdFollowUpProcessPutAsync($registrant_id, $follow_up_process)
    {
        return $this->registrantsRegistrantIdFollowUpProcessPutAsyncWithHttpInfo($registrant_id, $follow_up_process)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsRegistrantIdFollowUpProcessPutAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\FollowUpProcess $follow_up_process (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdFollowUpProcessPutAsyncWithHttpInfo($registrant_id, $follow_up_process)
    {
        $returnType = '\CollingMedia\Lasso\Model\FollowUpProcess';
        $request = $this->registrantsRegistrantIdFollowUpProcessPutRequest($registrant_id, $follow_up_process);

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
     * Create request for operation 'registrantsRegistrantIdFollowUpProcessPut'
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\FollowUpProcess $follow_up_process (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsRegistrantIdFollowUpProcessPutRequest($registrant_id, $follow_up_process)
    {
        // verify the required parameter 'registrant_id' is set
        if ($registrant_id === null || (is_array($registrant_id) && count($registrant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_id when calling registrantsRegistrantIdFollowUpProcessPut'
            );
        }
        // verify the required parameter 'follow_up_process' is set
        if ($follow_up_process === null || (is_array($follow_up_process) && count($follow_up_process) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $follow_up_process when calling registrantsRegistrantIdFollowUpProcessPut'
            );
        }

        $resourcePath = '/registrants/{registrantId}/follow-up-process';
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
        if (isset($follow_up_process)) {
            $_tempBody = $follow_up_process;
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
     * Operation registrantsRegistrantIdRatingPut
     *
     * @param  string $registrant_id registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\Rating $rating rating (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\Rating
     */
    public function registrantsRegistrantIdRatingPut($registrant_id, $rating)
    {
        list($response) = $this->registrantsRegistrantIdRatingPutWithHttpInfo($registrant_id, $rating);
        return $response;
    }

    /**
     * Operation registrantsRegistrantIdRatingPutWithHttpInfo
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\Rating $rating (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\Rating, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsRegistrantIdRatingPutWithHttpInfo($registrant_id, $rating)
    {
        $returnType = '\CollingMedia\Lasso\Model\Rating';
        $request = $this->registrantsRegistrantIdRatingPutRequest($registrant_id, $rating);

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
                        '\CollingMedia\Lasso\Model\Rating',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation registrantsRegistrantIdRatingPutAsync
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\Rating $rating (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdRatingPutAsync($registrant_id, $rating)
    {
        return $this->registrantsRegistrantIdRatingPutAsyncWithHttpInfo($registrant_id, $rating)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsRegistrantIdRatingPutAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\Rating $rating (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdRatingPutAsyncWithHttpInfo($registrant_id, $rating)
    {
        $returnType = '\CollingMedia\Lasso\Model\Rating';
        $request = $this->registrantsRegistrantIdRatingPutRequest($registrant_id, $rating);

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
     * Create request for operation 'registrantsRegistrantIdRatingPut'
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\Rating $rating (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsRegistrantIdRatingPutRequest($registrant_id, $rating)
    {
        // verify the required parameter 'registrant_id' is set
        if ($registrant_id === null || (is_array($registrant_id) && count($registrant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_id when calling registrantsRegistrantIdRatingPut'
            );
        }
        // verify the required parameter 'rating' is set
        if ($rating === null || (is_array($rating) && count($rating) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $rating when calling registrantsRegistrantIdRatingPut'
            );
        }

        $resourcePath = '/registrants/{registrantId}/rating';
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
        if (isset($rating)) {
            $_tempBody = $rating;
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
     * Operation registrantsRegistrantIdSecondarySourceTypePut
     *
     * @param  string $registrant_id registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\SecondarySourceType $secondary_source_type secondary_source_type (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\SecondarySourceType
     */
    public function registrantsRegistrantIdSecondarySourceTypePut($registrant_id, $secondary_source_type)
    {
        list($response) = $this->registrantsRegistrantIdSecondarySourceTypePutWithHttpInfo($registrant_id, $secondary_source_type);
        return $response;
    }

    /**
     * Operation registrantsRegistrantIdSecondarySourceTypePutWithHttpInfo
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\SecondarySourceType $secondary_source_type (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\SecondarySourceType, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsRegistrantIdSecondarySourceTypePutWithHttpInfo($registrant_id, $secondary_source_type)
    {
        $returnType = '\CollingMedia\Lasso\Model\SecondarySourceType';
        $request = $this->registrantsRegistrantIdSecondarySourceTypePutRequest($registrant_id, $secondary_source_type);

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
                        '\CollingMedia\Lasso\Model\SecondarySourceType',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation registrantsRegistrantIdSecondarySourceTypePutAsync
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\SecondarySourceType $secondary_source_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdSecondarySourceTypePutAsync($registrant_id, $secondary_source_type)
    {
        return $this->registrantsRegistrantIdSecondarySourceTypePutAsyncWithHttpInfo($registrant_id, $secondary_source_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsRegistrantIdSecondarySourceTypePutAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\SecondarySourceType $secondary_source_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdSecondarySourceTypePutAsyncWithHttpInfo($registrant_id, $secondary_source_type)
    {
        $returnType = '\CollingMedia\Lasso\Model\SecondarySourceType';
        $request = $this->registrantsRegistrantIdSecondarySourceTypePutRequest($registrant_id, $secondary_source_type);

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
     * Create request for operation 'registrantsRegistrantIdSecondarySourceTypePut'
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\SecondarySourceType $secondary_source_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsRegistrantIdSecondarySourceTypePutRequest($registrant_id, $secondary_source_type)
    {
        // verify the required parameter 'registrant_id' is set
        if ($registrant_id === null || (is_array($registrant_id) && count($registrant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_id when calling registrantsRegistrantIdSecondarySourceTypePut'
            );
        }
        // verify the required parameter 'secondary_source_type' is set
        if ($secondary_source_type === null || (is_array($secondary_source_type) && count($secondary_source_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $secondary_source_type when calling registrantsRegistrantIdSecondarySourceTypePut'
            );
        }

        $resourcePath = '/registrants/{registrantId}/secondary-source-type';
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
        if (isset($secondary_source_type)) {
            $_tempBody = $secondary_source_type;
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
     * Operation registrantsRegistrantIdSourceTypePut
     *
     * @param  string $registrant_id registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\SourceType $source_type source_type (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\SourceType
     */
    public function registrantsRegistrantIdSourceTypePut($registrant_id, $source_type)
    {
        list($response) = $this->registrantsRegistrantIdSourceTypePutWithHttpInfo($registrant_id, $source_type);
        return $response;
    }

    /**
     * Operation registrantsRegistrantIdSourceTypePutWithHttpInfo
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\SourceType $source_type (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\SourceType, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsRegistrantIdSourceTypePutWithHttpInfo($registrant_id, $source_type)
    {
        $returnType = '\CollingMedia\Lasso\Model\SourceType';
        $request = $this->registrantsRegistrantIdSourceTypePutRequest($registrant_id, $source_type);

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
                        '\CollingMedia\Lasso\Model\SourceType',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation registrantsRegistrantIdSourceTypePutAsync
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\SourceType $source_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdSourceTypePutAsync($registrant_id, $source_type)
    {
        return $this->registrantsRegistrantIdSourceTypePutAsyncWithHttpInfo($registrant_id, $source_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsRegistrantIdSourceTypePutAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\SourceType $source_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdSourceTypePutAsyncWithHttpInfo($registrant_id, $source_type)
    {
        $returnType = '\CollingMedia\Lasso\Model\SourceType';
        $request = $this->registrantsRegistrantIdSourceTypePutRequest($registrant_id, $source_type);

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
     * Create request for operation 'registrantsRegistrantIdSourceTypePut'
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\SourceType $source_type (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsRegistrantIdSourceTypePutRequest($registrant_id, $source_type)
    {
        // verify the required parameter 'registrant_id' is set
        if ($registrant_id === null || (is_array($registrant_id) && count($registrant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_id when calling registrantsRegistrantIdSourceTypePut'
            );
        }
        // verify the required parameter 'source_type' is set
        if ($source_type === null || (is_array($source_type) && count($source_type) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $source_type when calling registrantsRegistrantIdSourceTypePut'
            );
        }

        $resourcePath = '/registrants/{registrantId}/source-type';
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
        if (isset($source_type)) {
            $_tempBody = $source_type;
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
