<?php
/**
 * RegistrantHistoryApi
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
 * RegistrantHistoryApi Class Doc Comment
 *
 * @category Class
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class RegistrantHistoryApi
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
     * Operation registrantsRegistrantIdHistoriesHistoryIdGet
     *
     * @param  string $registrant_id registrant_id (required)
     * @param  string $history_id history_id (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\HistoryReadFull
     */
    public function registrantsRegistrantIdHistoriesHistoryIdGet($registrant_id, $history_id)
    {
        list($response) = $this->registrantsRegistrantIdHistoriesHistoryIdGetWithHttpInfo($registrant_id, $history_id);
        return $response;
    }

    /**
     * Operation registrantsRegistrantIdHistoriesHistoryIdGetWithHttpInfo
     *
     * @param  string $registrant_id (required)
     * @param  string $history_id (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\HistoryReadFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsRegistrantIdHistoriesHistoryIdGetWithHttpInfo($registrant_id, $history_id)
    {
        $returnType = '\CollingMedia\Lasso\Model\HistoryReadFull';
        $request = $this->registrantsRegistrantIdHistoriesHistoryIdGetRequest($registrant_id, $history_id);

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
                        '\CollingMedia\Lasso\Model\HistoryReadFull',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation registrantsRegistrantIdHistoriesHistoryIdGetAsync
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  string $history_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdHistoriesHistoryIdGetAsync($registrant_id, $history_id)
    {
        return $this->registrantsRegistrantIdHistoriesHistoryIdGetAsyncWithHttpInfo($registrant_id, $history_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsRegistrantIdHistoriesHistoryIdGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  string $history_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdHistoriesHistoryIdGetAsyncWithHttpInfo($registrant_id, $history_id)
    {
        $returnType = '\CollingMedia\Lasso\Model\HistoryReadFull';
        $request = $this->registrantsRegistrantIdHistoriesHistoryIdGetRequest($registrant_id, $history_id);

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
     * Create request for operation 'registrantsRegistrantIdHistoriesHistoryIdGet'
     *
     * @param  string $registrant_id (required)
     * @param  string $history_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsRegistrantIdHistoriesHistoryIdGetRequest($registrant_id, $history_id)
    {
        // verify the required parameter 'registrant_id' is set
        if ($registrant_id === null || (is_array($registrant_id) && count($registrant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_id when calling registrantsRegistrantIdHistoriesHistoryIdGet'
            );
        }
        // verify the required parameter 'history_id' is set
        if ($history_id === null || (is_array($history_id) && count($history_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $history_id when calling registrantsRegistrantIdHistoriesHistoryIdGet'
            );
        }

        $resourcePath = '/registrants/{registrantId}/histories/{historyId}';
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
        if ($history_id !== null) {
            $resourcePath = str_replace(
                '{' . 'historyId' . '}',
                ObjectSerializer::toPathValue($history_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation registrantsRegistrantIdHistoriesHistoryIdPut
     *
     * @param  string $registrant_id registrant_id (required)
     * @param  string $history_id history_id (required)
     * @param  \CollingMedia\Lasso\Model\HistoryWrite $history history (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\HistoryReadFull
     */
    public function registrantsRegistrantIdHistoriesHistoryIdPut($registrant_id, $history_id, $history)
    {
        list($response) = $this->registrantsRegistrantIdHistoriesHistoryIdPutWithHttpInfo($registrant_id, $history_id, $history);
        return $response;
    }

    /**
     * Operation registrantsRegistrantIdHistoriesHistoryIdPutWithHttpInfo
     *
     * @param  string $registrant_id (required)
     * @param  string $history_id (required)
     * @param  \CollingMedia\Lasso\Model\HistoryWrite $history (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\HistoryReadFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsRegistrantIdHistoriesHistoryIdPutWithHttpInfo($registrant_id, $history_id, $history)
    {
        $returnType = '\CollingMedia\Lasso\Model\HistoryReadFull';
        $request = $this->registrantsRegistrantIdHistoriesHistoryIdPutRequest($registrant_id, $history_id, $history);

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
                        '\CollingMedia\Lasso\Model\HistoryReadFull',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation registrantsRegistrantIdHistoriesHistoryIdPutAsync
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  string $history_id (required)
     * @param  \CollingMedia\Lasso\Model\HistoryWrite $history (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdHistoriesHistoryIdPutAsync($registrant_id, $history_id, $history)
    {
        return $this->registrantsRegistrantIdHistoriesHistoryIdPutAsyncWithHttpInfo($registrant_id, $history_id, $history)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsRegistrantIdHistoriesHistoryIdPutAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  string $history_id (required)
     * @param  \CollingMedia\Lasso\Model\HistoryWrite $history (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdHistoriesHistoryIdPutAsyncWithHttpInfo($registrant_id, $history_id, $history)
    {
        $returnType = '\CollingMedia\Lasso\Model\HistoryReadFull';
        $request = $this->registrantsRegistrantIdHistoriesHistoryIdPutRequest($registrant_id, $history_id, $history);

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
     * Create request for operation 'registrantsRegistrantIdHistoriesHistoryIdPut'
     *
     * @param  string $registrant_id (required)
     * @param  string $history_id (required)
     * @param  \CollingMedia\Lasso\Model\HistoryWrite $history (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsRegistrantIdHistoriesHistoryIdPutRequest($registrant_id, $history_id, $history)
    {
        // verify the required parameter 'registrant_id' is set
        if ($registrant_id === null || (is_array($registrant_id) && count($registrant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_id when calling registrantsRegistrantIdHistoriesHistoryIdPut'
            );
        }
        // verify the required parameter 'history_id' is set
        if ($history_id === null || (is_array($history_id) && count($history_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $history_id when calling registrantsRegistrantIdHistoriesHistoryIdPut'
            );
        }
        // verify the required parameter 'history' is set
        if ($history === null || (is_array($history) && count($history) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $history when calling registrantsRegistrantIdHistoriesHistoryIdPut'
            );
        }

        $resourcePath = '/registrants/{registrantId}/histories/{historyId}';
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
        if ($history_id !== null) {
            $resourcePath = str_replace(
                '{' . 'historyId' . '}',
                ObjectSerializer::toPathValue($history_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($history)) {
            $_tempBody = $history;
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
     * Operation registrantsRegistrantIdHistoriesPost
     *
     * @param  string $registrant_id registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\HistoryWrite $history history (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\HistoryReadFull
     */
    public function registrantsRegistrantIdHistoriesPost($registrant_id, $history)
    {
        list($response) = $this->registrantsRegistrantIdHistoriesPostWithHttpInfo($registrant_id, $history);
        return $response;
    }

    /**
     * Operation registrantsRegistrantIdHistoriesPostWithHttpInfo
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\HistoryWrite $history (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\HistoryReadFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsRegistrantIdHistoriesPostWithHttpInfo($registrant_id, $history)
    {
        $returnType = '\CollingMedia\Lasso\Model\HistoryReadFull';
        $request = $this->registrantsRegistrantIdHistoriesPostRequest($registrant_id, $history);

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
                        '\CollingMedia\Lasso\Model\HistoryReadFull',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\StandardError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation registrantsRegistrantIdHistoriesPostAsync
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\HistoryWrite $history (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdHistoriesPostAsync($registrant_id, $history)
    {
        return $this->registrantsRegistrantIdHistoriesPostAsyncWithHttpInfo($registrant_id, $history)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsRegistrantIdHistoriesPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\HistoryWrite $history (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdHistoriesPostAsyncWithHttpInfo($registrant_id, $history)
    {
        $returnType = '\CollingMedia\Lasso\Model\HistoryReadFull';
        $request = $this->registrantsRegistrantIdHistoriesPostRequest($registrant_id, $history);

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
     * Create request for operation 'registrantsRegistrantIdHistoriesPost'
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\HistoryWrite $history (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsRegistrantIdHistoriesPostRequest($registrant_id, $history)
    {
        // verify the required parameter 'registrant_id' is set
        if ($registrant_id === null || (is_array($registrant_id) && count($registrant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_id when calling registrantsRegistrantIdHistoriesPost'
            );
        }
        // verify the required parameter 'history' is set
        if ($history === null || (is_array($history) && count($history) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $history when calling registrantsRegistrantIdHistoriesPost'
            );
        }

        $resourcePath = '/registrants/{registrantId}/histories';
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
        if (isset($history)) {
            $_tempBody = $history;
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
