<?php
/**
 * InventoryApi
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
 * InventoryApi Class Doc Comment
 *
 * @category Class
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class InventoryApi
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
     * Operation inventoryGet
     *
     * Returns a list of all inventories
     *
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\InventoryRead[]
     */
    public function inventoryGet()
    {
        list($response) = $this->inventoryGetWithHttpInfo();
        return $response;
    }

    /**
     * Operation inventoryGetWithHttpInfo
     *
     * Returns a list of all inventories
     *
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\InventoryRead[], HTTP status code, HTTP response headers (array of strings)
     */
    public function inventoryGetWithHttpInfo()
    {
        $returnType = '\CollingMedia\Lasso\Model\InventoryRead[]';
        $request = $this->inventoryGetRequest();

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
                        '\CollingMedia\Lasso\Model\InventoryRead[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation inventoryGetAsync
     *
     * Returns a list of all inventories
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryGetAsync()
    {
        return $this->inventoryGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation inventoryGetAsyncWithHttpInfo
     *
     * Returns a list of all inventories
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryGetAsyncWithHttpInfo()
    {
        $returnType = '\CollingMedia\Lasso\Model\InventoryRead[]';
        $request = $this->inventoryGetRequest();

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
     * Create request for operation 'inventoryGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function inventoryGetRequest()
    {

        $resourcePath = '/inventory';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



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
     * Operation inventoryInventoryIdDelete
     *
     * Delete an inventory
     *
     * @param  string $inventory_id /inventory/123 (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function inventoryInventoryIdDelete($inventory_id)
    {
        $this->inventoryInventoryIdDeleteWithHttpInfo($inventory_id);
    }

    /**
     * Operation inventoryInventoryIdDeleteWithHttpInfo
     *
     * Delete an inventory
     *
     * @param  string $inventory_id /inventory/123 (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function inventoryInventoryIdDeleteWithHttpInfo($inventory_id)
    {
        $returnType = '';
        $request = $this->inventoryInventoryIdDeleteRequest($inventory_id);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\AuthForbidden',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\ErrorInventoryCannotBeDeleted',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation inventoryInventoryIdDeleteAsync
     *
     * Delete an inventory
     *
     * @param  string $inventory_id /inventory/123 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryInventoryIdDeleteAsync($inventory_id)
    {
        return $this->inventoryInventoryIdDeleteAsyncWithHttpInfo($inventory_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation inventoryInventoryIdDeleteAsyncWithHttpInfo
     *
     * Delete an inventory
     *
     * @param  string $inventory_id /inventory/123 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryInventoryIdDeleteAsyncWithHttpInfo($inventory_id)
    {
        $returnType = '';
        $request = $this->inventoryInventoryIdDeleteRequest($inventory_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'inventoryInventoryIdDelete'
     *
     * @param  string $inventory_id /inventory/123 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function inventoryInventoryIdDeleteRequest($inventory_id)
    {
        // verify the required parameter 'inventory_id' is set
        if ($inventory_id === null || (is_array($inventory_id) && count($inventory_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inventory_id when calling inventoryInventoryIdDelete'
            );
        }

        $resourcePath = '/inventory/{inventoryId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($inventory_id !== null) {
            $resourcePath = str_replace(
                '{' . 'inventoryId' . '}',
                ObjectSerializer::toPathValue($inventory_id),
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
            'DELETE',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation inventoryInventoryIdGet
     *
     * Get a single inventory
     *
     * @param  string $inventory_id /inventory/123 (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\InventoryFull
     */
    public function inventoryInventoryIdGet($inventory_id)
    {
        list($response) = $this->inventoryInventoryIdGetWithHttpInfo($inventory_id);
        return $response;
    }

    /**
     * Operation inventoryInventoryIdGetWithHttpInfo
     *
     * Get a single inventory
     *
     * @param  string $inventory_id /inventory/123 (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\InventoryFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function inventoryInventoryIdGetWithHttpInfo($inventory_id)
    {
        $returnType = '\CollingMedia\Lasso\Model\InventoryFull';
        $request = $this->inventoryInventoryIdGetRequest($inventory_id);

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
                        '\CollingMedia\Lasso\Model\InventoryFull',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\AuthForbidden',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\ErrorInventoryNotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation inventoryInventoryIdGetAsync
     *
     * Get a single inventory
     *
     * @param  string $inventory_id /inventory/123 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryInventoryIdGetAsync($inventory_id)
    {
        return $this->inventoryInventoryIdGetAsyncWithHttpInfo($inventory_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation inventoryInventoryIdGetAsyncWithHttpInfo
     *
     * Get a single inventory
     *
     * @param  string $inventory_id /inventory/123 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryInventoryIdGetAsyncWithHttpInfo($inventory_id)
    {
        $returnType = '\CollingMedia\Lasso\Model\InventoryFull';
        $request = $this->inventoryInventoryIdGetRequest($inventory_id);

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
     * Create request for operation 'inventoryInventoryIdGet'
     *
     * @param  string $inventory_id /inventory/123 (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function inventoryInventoryIdGetRequest($inventory_id)
    {
        // verify the required parameter 'inventory_id' is set
        if ($inventory_id === null || (is_array($inventory_id) && count($inventory_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inventory_id when calling inventoryInventoryIdGet'
            );
        }

        $resourcePath = '/inventory/{inventoryId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($inventory_id !== null) {
            $resourcePath = str_replace(
                '{' . 'inventoryId' . '}',
                ObjectSerializer::toPathValue($inventory_id),
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
     * Operation inventoryInventoryIdPut
     *
     * Update an inventory
     *
     * @param  string $inventory_id /inventory/123 (required)
     * @param  \CollingMedia\Lasso\Model\InventoryUpdate $inventory inventory (optional)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\InventoryRead
     */
    public function inventoryInventoryIdPut($inventory_id, $inventory = null)
    {
        list($response) = $this->inventoryInventoryIdPutWithHttpInfo($inventory_id, $inventory);
        return $response;
    }

    /**
     * Operation inventoryInventoryIdPutWithHttpInfo
     *
     * Update an inventory
     *
     * @param  string $inventory_id /inventory/123 (required)
     * @param  \CollingMedia\Lasso\Model\InventoryUpdate $inventory (optional)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\InventoryRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function inventoryInventoryIdPutWithHttpInfo($inventory_id, $inventory = null)
    {
        $returnType = '\CollingMedia\Lasso\Model\InventoryRead';
        $request = $this->inventoryInventoryIdPutRequest($inventory_id, $inventory);

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
                        '\CollingMedia\Lasso\Model\InventoryRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\AuthForbidden',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\ErrorInventoryAlreadySynced',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation inventoryInventoryIdPutAsync
     *
     * Update an inventory
     *
     * @param  string $inventory_id /inventory/123 (required)
     * @param  \CollingMedia\Lasso\Model\InventoryUpdate $inventory (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryInventoryIdPutAsync($inventory_id, $inventory = null)
    {
        return $this->inventoryInventoryIdPutAsyncWithHttpInfo($inventory_id, $inventory)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation inventoryInventoryIdPutAsyncWithHttpInfo
     *
     * Update an inventory
     *
     * @param  string $inventory_id /inventory/123 (required)
     * @param  \CollingMedia\Lasso\Model\InventoryUpdate $inventory (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryInventoryIdPutAsyncWithHttpInfo($inventory_id, $inventory = null)
    {
        $returnType = '\CollingMedia\Lasso\Model\InventoryRead';
        $request = $this->inventoryInventoryIdPutRequest($inventory_id, $inventory);

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
     * Create request for operation 'inventoryInventoryIdPut'
     *
     * @param  string $inventory_id /inventory/123 (required)
     * @param  \CollingMedia\Lasso\Model\InventoryUpdate $inventory (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function inventoryInventoryIdPutRequest($inventory_id, $inventory = null)
    {
        // verify the required parameter 'inventory_id' is set
        if ($inventory_id === null || (is_array($inventory_id) && count($inventory_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inventory_id when calling inventoryInventoryIdPut'
            );
        }

        $resourcePath = '/inventory/{inventoryId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($inventory_id !== null) {
            $resourcePath = str_replace(
                '{' . 'inventoryId' . '}',
                ObjectSerializer::toPathValue($inventory_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($inventory)) {
            $_tempBody = $inventory;
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
     * Operation inventoryInventoryIdResetPost
     *
     * Reset an inventory items. Deletes all associated data with the inventory item, e.g. pricing information, options and upgrades, deposits, etc.
     *
     * @param  string $inventory_id /inventory/123/reset (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function inventoryInventoryIdResetPost($inventory_id)
    {
        $this->inventoryInventoryIdResetPostWithHttpInfo($inventory_id);
    }

    /**
     * Operation inventoryInventoryIdResetPostWithHttpInfo
     *
     * Reset an inventory items. Deletes all associated data with the inventory item, e.g. pricing information, options and upgrades, deposits, etc.
     *
     * @param  string $inventory_id /inventory/123/reset (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function inventoryInventoryIdResetPostWithHttpInfo($inventory_id)
    {
        $returnType = '';
        $request = $this->inventoryInventoryIdResetPostRequest($inventory_id);

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

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\AuthForbidden',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\ErrorInventoryNotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation inventoryInventoryIdResetPostAsync
     *
     * Reset an inventory items. Deletes all associated data with the inventory item, e.g. pricing information, options and upgrades, deposits, etc.
     *
     * @param  string $inventory_id /inventory/123/reset (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryInventoryIdResetPostAsync($inventory_id)
    {
        return $this->inventoryInventoryIdResetPostAsyncWithHttpInfo($inventory_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation inventoryInventoryIdResetPostAsyncWithHttpInfo
     *
     * Reset an inventory items. Deletes all associated data with the inventory item, e.g. pricing information, options and upgrades, deposits, etc.
     *
     * @param  string $inventory_id /inventory/123/reset (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryInventoryIdResetPostAsyncWithHttpInfo($inventory_id)
    {
        $returnType = '';
        $request = $this->inventoryInventoryIdResetPostRequest($inventory_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
     * Create request for operation 'inventoryInventoryIdResetPost'
     *
     * @param  string $inventory_id /inventory/123/reset (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function inventoryInventoryIdResetPostRequest($inventory_id)
    {
        // verify the required parameter 'inventory_id' is set
        if ($inventory_id === null || (is_array($inventory_id) && count($inventory_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inventory_id when calling inventoryInventoryIdResetPost'
            );
        }

        $resourcePath = '/inventory/{inventoryId}/reset';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($inventory_id !== null) {
            $resourcePath = str_replace(
                '{' . 'inventoryId' . '}',
                ObjectSerializer::toPathValue($inventory_id),
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
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation inventoryInventoryIdSyncPut
     *
     * Sync an inventory
     *
     * @param  string $inventory_id /inventory/123/sync (required)
     * @param  \CollingMedia\Lasso\Model\InventorySync $inventory inventory (optional)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\InventoryFull
     */
    public function inventoryInventoryIdSyncPut($inventory_id, $inventory = null)
    {
        list($response) = $this->inventoryInventoryIdSyncPutWithHttpInfo($inventory_id, $inventory);
        return $response;
    }

    /**
     * Operation inventoryInventoryIdSyncPutWithHttpInfo
     *
     * Sync an inventory
     *
     * @param  string $inventory_id /inventory/123/sync (required)
     * @param  \CollingMedia\Lasso\Model\InventorySync $inventory (optional)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\InventoryFull, HTTP status code, HTTP response headers (array of strings)
     */
    public function inventoryInventoryIdSyncPutWithHttpInfo($inventory_id, $inventory = null)
    {
        $returnType = '\CollingMedia\Lasso\Model\InventoryFull';
        $request = $this->inventoryInventoryIdSyncPutRequest($inventory_id, $inventory);

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
                        '\CollingMedia\Lasso\Model\InventoryFull',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\ErrorStorageSupplyExhausted',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\AuthForbidden',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\ErrorInventoryNotFound',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 406:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\InvalidSubResourceAction',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\ErrorInventoryAlreadySynced',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation inventoryInventoryIdSyncPutAsync
     *
     * Sync an inventory
     *
     * @param  string $inventory_id /inventory/123/sync (required)
     * @param  \CollingMedia\Lasso\Model\InventorySync $inventory (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryInventoryIdSyncPutAsync($inventory_id, $inventory = null)
    {
        return $this->inventoryInventoryIdSyncPutAsyncWithHttpInfo($inventory_id, $inventory)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation inventoryInventoryIdSyncPutAsyncWithHttpInfo
     *
     * Sync an inventory
     *
     * @param  string $inventory_id /inventory/123/sync (required)
     * @param  \CollingMedia\Lasso\Model\InventorySync $inventory (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryInventoryIdSyncPutAsyncWithHttpInfo($inventory_id, $inventory = null)
    {
        $returnType = '\CollingMedia\Lasso\Model\InventoryFull';
        $request = $this->inventoryInventoryIdSyncPutRequest($inventory_id, $inventory);

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
     * Create request for operation 'inventoryInventoryIdSyncPut'
     *
     * @param  string $inventory_id /inventory/123/sync (required)
     * @param  \CollingMedia\Lasso\Model\InventorySync $inventory (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function inventoryInventoryIdSyncPutRequest($inventory_id, $inventory = null)
    {
        // verify the required parameter 'inventory_id' is set
        if ($inventory_id === null || (is_array($inventory_id) && count($inventory_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $inventory_id when calling inventoryInventoryIdSyncPut'
            );
        }

        $resourcePath = '/inventory/{inventoryId}/sync';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($inventory_id !== null) {
            $resourcePath = str_replace(
                '{' . 'inventoryId' . '}',
                ObjectSerializer::toPathValue($inventory_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($inventory)) {
            $_tempBody = $inventory;
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
     * Operation inventoryPost
     *
     * Create an inventory
     *
     * @param  \CollingMedia\Lasso\Model\InventoryCreate $inventory inventory (optional)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\InventoryRead
     */
    public function inventoryPost($inventory = null)
    {
        list($response) = $this->inventoryPostWithHttpInfo($inventory);
        return $response;
    }

    /**
     * Operation inventoryPostWithHttpInfo
     *
     * Create an inventory
     *
     * @param  \CollingMedia\Lasso\Model\InventoryCreate $inventory (optional)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\InventoryRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function inventoryPostWithHttpInfo($inventory = null)
    {
        $returnType = '\CollingMedia\Lasso\Model\InventoryRead';
        $request = $this->inventoryPostRequest($inventory);

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
                        '\CollingMedia\Lasso\Model\InventoryRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\AuthForbidden',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\ErrorInventoryAlreadySynced',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation inventoryPostAsync
     *
     * Create an inventory
     *
     * @param  \CollingMedia\Lasso\Model\InventoryCreate $inventory (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryPostAsync($inventory = null)
    {
        return $this->inventoryPostAsyncWithHttpInfo($inventory)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation inventoryPostAsyncWithHttpInfo
     *
     * Create an inventory
     *
     * @param  \CollingMedia\Lasso\Model\InventoryCreate $inventory (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventoryPostAsyncWithHttpInfo($inventory = null)
    {
        $returnType = '\CollingMedia\Lasso\Model\InventoryRead';
        $request = $this->inventoryPostRequest($inventory);

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
     * Create request for operation 'inventoryPost'
     *
     * @param  \CollingMedia\Lasso\Model\InventoryCreate $inventory (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function inventoryPostRequest($inventory = null)
    {

        $resourcePath = '/inventory';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($inventory)) {
            $_tempBody = $inventory;
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
     * Operation inventorySearchGet
     *
     * Search inventories by strataLot and inventoryNumber.
     *
     * @param  string $strata_lot /inventory/search?strataLot&#x3D;123 (optional)
     * @param  string $inventory_number /inventory/search?inventoryNumber&#x3D;123 (optional)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\InventoryRead[]
     */
    public function inventorySearchGet($strata_lot = null, $inventory_number = null)
    {
        list($response) = $this->inventorySearchGetWithHttpInfo($strata_lot, $inventory_number);
        return $response;
    }

    /**
     * Operation inventorySearchGetWithHttpInfo
     *
     * Search inventories by strataLot and inventoryNumber.
     *
     * @param  string $strata_lot /inventory/search?strataLot&#x3D;123 (optional)
     * @param  string $inventory_number /inventory/search?inventoryNumber&#x3D;123 (optional)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\InventoryRead[], HTTP status code, HTTP response headers (array of strings)
     */
    public function inventorySearchGetWithHttpInfo($strata_lot = null, $inventory_number = null)
    {
        $returnType = '\CollingMedia\Lasso\Model\InventoryRead[]';
        $request = $this->inventorySearchGetRequest($strata_lot, $inventory_number);

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
                        '\CollingMedia\Lasso\Model\InventoryRead[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation inventorySearchGetAsync
     *
     * Search inventories by strataLot and inventoryNumber.
     *
     * @param  string $strata_lot /inventory/search?strataLot&#x3D;123 (optional)
     * @param  string $inventory_number /inventory/search?inventoryNumber&#x3D;123 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventorySearchGetAsync($strata_lot = null, $inventory_number = null)
    {
        return $this->inventorySearchGetAsyncWithHttpInfo($strata_lot, $inventory_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation inventorySearchGetAsyncWithHttpInfo
     *
     * Search inventories by strataLot and inventoryNumber.
     *
     * @param  string $strata_lot /inventory/search?strataLot&#x3D;123 (optional)
     * @param  string $inventory_number /inventory/search?inventoryNumber&#x3D;123 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function inventorySearchGetAsyncWithHttpInfo($strata_lot = null, $inventory_number = null)
    {
        $returnType = '\CollingMedia\Lasso\Model\InventoryRead[]';
        $request = $this->inventorySearchGetRequest($strata_lot, $inventory_number);

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
     * Create request for operation 'inventorySearchGet'
     *
     * @param  string $strata_lot /inventory/search?strataLot&#x3D;123 (optional)
     * @param  string $inventory_number /inventory/search?inventoryNumber&#x3D;123 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function inventorySearchGetRequest($strata_lot = null, $inventory_number = null)
    {

        $resourcePath = '/inventory/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($strata_lot !== null) {
            $queryParams['strataLot'] = ObjectSerializer::toQueryValue($strata_lot);
        }
        // query params
        if ($inventory_number !== null) {
            $queryParams['inventoryNumber'] = ObjectSerializer::toQueryValue($inventory_number);
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
