<?php
/**
 * RegistrantApi
 * PHP version 7.
 *
 * @category Class
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */

/**
 * Lasso API.
 *
 * Manage Registrant and Inventory data within Lasso CRM.  Authorization header with a Bearer JWT api key token is required for all requests. API keys are project/location based, and can be obtained from your business contact with Lasso Data Systems. In the future, Project Admin's will be able to generate their own api keys from the Lasso CRM web application.  To try it out in swagger: - Select the `Authorize` button and place your api key in the textbox - Ensure that the api key is prefixed with `Bearer` including a space separating `Bearer` from the api key - Go to the route you want to try out in the swagger definition - Select `Try it out` - Input any required fields, query params, and request payload - Select `Execute`  Alternatively, you can try it on your command line with curl, for example: `curl -X GET \"https://api.lassocrm.com/v1/registrants/123456\" -H \"accept: application/json\" -H \"Authorization: Bearer ***apikey***\"`
 */

namespace CollingMedia\Lasso\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\ClientInterface;
use CollingMedia\Lasso\ApiException;
use GuzzleHttp\Psr7\MultipartStream;
use CollingMedia\Lasso\Configuration;
use CollingMedia\Lasso\HeaderSelector;
use CollingMedia\Lasso\ObjectSerializer;
use GuzzleHttp\Exception\RequestException;

/**
 * RegistrantApi Class Doc Comment.
 *
 * @category Class
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class RegistrantApi
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
     * Operation registrantsGet.
     *
     * List of registrants for a project.
     *
     * @param  string $rating rating (optional)
     * @param  \DateTime $last_modified_after Returns only registrants that were modified at least once since the given date, in ISO 8601 UTC format (optional)
     * @param  \DateTime $last_modified_before Returns only registrants that were last modified before this date. Combined with lastModifiedAfter this allows to select registrants that were last modified between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_after Returns only registrants that were registered since the given date, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_before Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  string $cursor A cursor for the next batch of registrants is providing in the metadata of the body. Provide the &#x60;next&#x60; cursor as a query parameter in your next request to access the next batch of registrants. It&#39;s a base64 encoded json object with the fields &#x60;v&#x60; for version, &#x60;o&#x60; for offset and &#x60;l&#x60; for limit. You don&#39;t have to create the cursor object as it is embedded in the &#x60;next&#x60; link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.) (optional)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\InlineResponse200
     */
    public function registrantsGet($rating = null, $last_modified_after = null, $last_modified_before = null, $registered_after = null, $registered_before = null, $cursor = null)
    {
        [$response] = $this->registrantsGetWithHttpInfo($rating, $last_modified_after, $last_modified_before, $registered_after, $registered_before, $cursor);

        return $response;
    }

    /**
     * Operation registrantsGetWithHttpInfo.
     *
     * List of registrants for a project.
     *
     * @param  string $rating (optional)
     * @param  \DateTime $last_modified_after Returns only registrants that were modified at least once since the given date, in ISO 8601 UTC format (optional)
     * @param  \DateTime $last_modified_before Returns only registrants that were last modified before this date. Combined with lastModifiedAfter this allows to select registrants that were last modified between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_after Returns only registrants that were registered since the given date, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_before Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  string $cursor A cursor for the next batch of registrants is providing in the metadata of the body. Provide the &#x60;next&#x60; cursor as a query parameter in your next request to access the next batch of registrants. It&#39;s a base64 encoded json object with the fields &#x60;v&#x60; for version, &#x60;o&#x60; for offset and &#x60;l&#x60; for limit. You don&#39;t have to create the cursor object as it is embedded in the &#x60;next&#x60; link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.) (optional)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\InlineResponse200, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsGetWithHttpInfo($rating = null, $last_modified_after = null, $last_modified_before = null, $registered_after = null, $registered_before = null, $cursor = null)
    {
        $returnType = '\CollingMedia\Lasso\Model\InlineResponse200';
        $request = $this->registrantsGetRequest($rating, $last_modified_after, $last_modified_before, $registered_after, $registered_before, $cursor);

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
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\InlineResponse200',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation registrantsGetAsync.
     *
     * List of registrants for a project.
     *
     * @param  string $rating (optional)
     * @param  \DateTime $last_modified_after Returns only registrants that were modified at least once since the given date, in ISO 8601 UTC format (optional)
     * @param  \DateTime $last_modified_before Returns only registrants that were last modified before this date. Combined with lastModifiedAfter this allows to select registrants that were last modified between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_after Returns only registrants that were registered since the given date, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_before Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  string $cursor A cursor for the next batch of registrants is providing in the metadata of the body. Provide the &#x60;next&#x60; cursor as a query parameter in your next request to access the next batch of registrants. It&#39;s a base64 encoded json object with the fields &#x60;v&#x60; for version, &#x60;o&#x60; for offset and &#x60;l&#x60; for limit. You don&#39;t have to create the cursor object as it is embedded in the &#x60;next&#x60; link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsGetAsync($rating = null, $last_modified_after = null, $last_modified_before = null, $registered_after = null, $registered_before = null, $cursor = null)
    {
        return $this->registrantsGetAsyncWithHttpInfo($rating, $last_modified_after, $last_modified_before, $registered_after, $registered_before, $cursor)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsGetAsyncWithHttpInfo.
     *
     * List of registrants for a project.
     *
     * @param  string $rating (optional)
     * @param  \DateTime $last_modified_after Returns only registrants that were modified at least once since the given date, in ISO 8601 UTC format (optional)
     * @param  \DateTime $last_modified_before Returns only registrants that were last modified before this date. Combined with lastModifiedAfter this allows to select registrants that were last modified between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_after Returns only registrants that were registered since the given date, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_before Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  string $cursor A cursor for the next batch of registrants is providing in the metadata of the body. Provide the &#x60;next&#x60; cursor as a query parameter in your next request to access the next batch of registrants. It&#39;s a base64 encoded json object with the fields &#x60;v&#x60; for version, &#x60;o&#x60; for offset and &#x60;l&#x60; for limit. You don&#39;t have to create the cursor object as it is embedded in the &#x60;next&#x60; link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsGetAsyncWithHttpInfo($rating = null, $last_modified_after = null, $last_modified_before = null, $registered_after = null, $registered_before = null, $cursor = null)
    {
        $returnType = '\CollingMedia\Lasso\Model\InlineResponse200';
        $request = $this->registrantsGetRequest($rating, $last_modified_after, $last_modified_before, $registered_after, $registered_before, $cursor);

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
                        $response->getHeaders(),
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
     * Create request for operation 'registrantsGet'.
     *
     * @param  string $rating (optional)
     * @param  \DateTime $last_modified_after Returns only registrants that were modified at least once since the given date, in ISO 8601 UTC format (optional)
     * @param  \DateTime $last_modified_before Returns only registrants that were last modified before this date. Combined with lastModifiedAfter this allows to select registrants that were last modified between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_after Returns only registrants that were registered since the given date, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_before Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  string $cursor A cursor for the next batch of registrants is providing in the metadata of the body. Provide the &#x60;next&#x60; cursor as a query parameter in your next request to access the next batch of registrants. It&#39;s a base64 encoded json object with the fields &#x60;v&#x60; for version, &#x60;o&#x60; for offset and &#x60;l&#x60; for limit. You don&#39;t have to create the cursor object as it is embedded in the &#x60;next&#x60; link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsGetRequest($rating = null, $last_modified_after = null, $last_modified_before = null, $registered_after = null, $registered_before = null, $cursor = null)
    {
        $resourcePath = '/registrants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($rating !== null) {
            $queryParams['rating'] = ObjectSerializer::toQueryValue($rating);
        }
        // query params
        if ($last_modified_after !== null) {
            $queryParams['lastModifiedAfter'] = ObjectSerializer::toQueryValue($last_modified_after);
        }
        // query params
        if ($last_modified_before !== null) {
            $queryParams['lastModifiedBefore'] = ObjectSerializer::toQueryValue($last_modified_before);
        }
        // query params
        if ($registered_after !== null) {
            $queryParams['registeredAfter'] = ObjectSerializer::toQueryValue($registered_after);
        }
        // query params
        if ($registered_before !== null) {
            $queryParams['registeredBefore'] = ObjectSerializer::toQueryValue($registered_before);
        }
        // query params
        if ($cursor !== null) {
            $queryParams['cursor'] = ObjectSerializer::toQueryValue($cursor);
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
                        'contents' => $formParamValue,
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
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation registrantsPost.
     *
     * Create a registrant
     *
     * @param  \CollingMedia\Lasso\Model\RegistrantWrite $registrant Registrant to create (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\RegistrantRead
     */
    public function registrantsPost($registrant)
    {
        [$response] = $this->registrantsPostWithHttpInfo($registrant);

        return $response;
    }

    /**
     * Operation registrantsPostWithHttpInfo.
     *
     * Create a registrant
     *
     * @param  \CollingMedia\Lasso\Model\RegistrantWrite $registrant Registrant to create (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\RegistrantRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsPostWithHttpInfo($registrant)
    {
        $returnType = '\CollingMedia\Lasso\Model\RegistrantRead';
        $request = $this->registrantsPostRequest($registrant);

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
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\RegistrantRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\StandardError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
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
     * Operation registrantsPostAsync.
     *
     * Create a registrant
     *
     * @param  \CollingMedia\Lasso\Model\RegistrantWrite $registrant Registrant to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsPostAsync($registrant)
    {
        return $this->registrantsPostAsyncWithHttpInfo($registrant)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsPostAsyncWithHttpInfo.
     *
     * Create a registrant
     *
     * @param  \CollingMedia\Lasso\Model\RegistrantWrite $registrant Registrant to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsPostAsyncWithHttpInfo($registrant)
    {
        $returnType = '\CollingMedia\Lasso\Model\RegistrantRead';
        $request = $this->registrantsPostRequest($registrant);

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
                        $response->getHeaders(),
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
     * Create request for operation 'registrantsPost'.
     *
     * @param  \CollingMedia\Lasso\Model\RegistrantWrite $registrant Registrant to create (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsPostRequest($registrant)
    {
        // verify the required parameter 'registrant' is set
        if ($registrant === null || (is_array($registrant) && count($registrant) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant when calling registrantsPost'
            );
        }

        $resourcePath = '/registrants';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // body params
        $_tempBody = null;
        if (isset($registrant)) {
            $_tempBody = $registrant;
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
                        'contents' => $formParamValue,
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
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation registrantsRegistrantIdGet.
     *
     * Extended data for a registrant
     *
     * @param  string $registrant_id registrant_id (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\RegistrantRead
     */
    public function registrantsRegistrantIdGet($registrant_id)
    {
        [$response] = $this->registrantsRegistrantIdGetWithHttpInfo($registrant_id);

        return $response;
    }

    /**
     * Operation registrantsRegistrantIdGetWithHttpInfo.
     *
     * Extended data for a registrant
     *
     * @param  string $registrant_id (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\RegistrantRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsRegistrantIdGetWithHttpInfo($registrant_id)
    {
        $returnType = '\CollingMedia\Lasso\Model\RegistrantRead';
        $request = $this->registrantsRegistrantIdGetRequest($registrant_id);

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
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\RegistrantRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation registrantsRegistrantIdGetAsync.
     *
     * Extended data for a registrant
     *
     * @param  string $registrant_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdGetAsync($registrant_id)
    {
        return $this->registrantsRegistrantIdGetAsyncWithHttpInfo($registrant_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsRegistrantIdGetAsyncWithHttpInfo.
     *
     * Extended data for a registrant
     *
     * @param  string $registrant_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdGetAsyncWithHttpInfo($registrant_id)
    {
        $returnType = '\CollingMedia\Lasso\Model\RegistrantRead';
        $request = $this->registrantsRegistrantIdGetRequest($registrant_id);

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
                        $response->getHeaders(),
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
     * Create request for operation 'registrantsRegistrantIdGet'.
     *
     * @param  string $registrant_id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsRegistrantIdGetRequest($registrant_id)
    {
        // verify the required parameter 'registrant_id' is set
        if ($registrant_id === null || (is_array($registrant_id) && count($registrant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_id when calling registrantsRegistrantIdGet'
            );
        }

        $resourcePath = '/registrants/{registrantId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($registrant_id !== null) {
            $resourcePath = str_replace(
                '{'.'registrantId'.'}',
                ObjectSerializer::toPathValue($registrant_id),
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
                        'contents' => $formParamValue,
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
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation registrantsRegistrantIdPut.
     *
     * @param  string $registrant_id registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\RegistrantPersonalInfo $registrant_personal_info Registrants personal data to update (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\RegistrantRead
     */
    public function registrantsRegistrantIdPut($registrant_id, $registrant_personal_info)
    {
        [$response] = $this->registrantsRegistrantIdPutWithHttpInfo($registrant_id, $registrant_personal_info);

        return $response;
    }

    /**
     * Operation registrantsRegistrantIdPutWithHttpInfo.
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\RegistrantPersonalInfo $registrant_personal_info Registrants personal data to update (required)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\RegistrantRead, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsRegistrantIdPutWithHttpInfo($registrant_id, $registrant_personal_info)
    {
        $returnType = '\CollingMedia\Lasso\Model\RegistrantRead';
        $request = $this->registrantsRegistrantIdPutRequest($registrant_id, $registrant_personal_info);

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
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\RegistrantRead',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\StandardError',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 422:
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
     * Operation registrantsRegistrantIdPutAsync.
     *
     *
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\RegistrantPersonalInfo $registrant_personal_info Registrants personal data to update (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdPutAsync($registrant_id, $registrant_personal_info)
    {
        return $this->registrantsRegistrantIdPutAsyncWithHttpInfo($registrant_id, $registrant_personal_info)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsRegistrantIdPutAsyncWithHttpInfo.
     *
     *
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\RegistrantPersonalInfo $registrant_personal_info Registrants personal data to update (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsRegistrantIdPutAsyncWithHttpInfo($registrant_id, $registrant_personal_info)
    {
        $returnType = '\CollingMedia\Lasso\Model\RegistrantRead';
        $request = $this->registrantsRegistrantIdPutRequest($registrant_id, $registrant_personal_info);

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
                        $response->getHeaders(),
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
     * Create request for operation 'registrantsRegistrantIdPut'.
     *
     * @param  string $registrant_id (required)
     * @param  \CollingMedia\Lasso\Model\RegistrantPersonalInfo $registrant_personal_info Registrants personal data to update (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsRegistrantIdPutRequest($registrant_id, $registrant_personal_info)
    {
        // verify the required parameter 'registrant_id' is set
        if ($registrant_id === null || (is_array($registrant_id) && count($registrant_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_id when calling registrantsRegistrantIdPut'
            );
        }
        // verify the required parameter 'registrant_personal_info' is set
        if ($registrant_personal_info === null || (is_array($registrant_personal_info) && count($registrant_personal_info) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $registrant_personal_info when calling registrantsRegistrantIdPut'
            );
        }

        $resourcePath = '/registrants/{registrantId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if ($registrant_id !== null) {
            $resourcePath = str_replace(
                '{'.'registrantId'.'}',
                ObjectSerializer::toPathValue($registrant_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($registrant_personal_info)) {
            $_tempBody = $registrant_personal_info;
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
                        'contents' => $formParamValue,
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
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation registrantsSearchGet.
     *
     * Search registrants by name, email, phone, nickname, externalId, rating or creation date.
     *
     * @param  string $last_modified Return only registrant modified after the specified date time, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_after Returns only registrants that were registered since the given date, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_before Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  string $rating Return only registrants who currently have the specified rating (optional)
     * @param  string $email Search registrants by email address (optional)
     * @param  string $phone Search registrants by phone number (optional)
     * @param  string $nick_name Search registrants by nickname (optional)
     * @param  string $name Search registrants by name. This is a loose search, the name will be parsed into first and last name, and then partially matched. E.g. &#x60;Jim and Susan Smith&#x60; will match &#x60;Jim Smith&#x60; and &#x60;Susan Smith&#x60;. (optional)
     * @param  bool $fuzzy Default is &#x60;false&#x60;, turns on partial matching for specific field searches where the provided value is a prefix or an exact match. E.g. &#x60;name&#x3D;rob&amp;fuzzy&#x3D;true&#x60; will match the name &#x60;Robert&#x60;. Affected fields are: name, nickName, phone, email, externalId, and rating. (optional)
     * @param  string $external_id Search registrants by an integration externalId. The integration type will be determined by the API key. (optional)
     * @param  string $smart_search Searches for registrants where the given value is a prefix or exactly matches at least one of first name, last name, full name, phone, email, nickName, or company. E.g. &#x60;Jon&#x60;, &#x60;Jon Sno&#x60;, &#x60;Sno&#x60;, &#x60;Jo&#x60;  will all return &#x60;Jon Snow&#x60;. &#x60;jonsnow@&#x60; and &#x60;jonsno&#x60; will return a registrant with the email &#x60;jonsnow@westeros.com&#x60;. (optional)
     * @param  string $cursor A cursor for the next batch of registrants is providing in the metadata of the body. Provide the &#x60;next&#x60; cursor as a query parameter in your next request to access the next batch of registrants. It&#39;s a base64 encoded json object with the fields &#x60;v&#x60; for version, &#x60;o&#x60; for offset and &#x60;l&#x60; for limit. You don&#39;t have to create the cursor object as it is embedded in the &#x60;next&#x60; link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.) (optional)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \CollingMedia\Lasso\Model\InlineResponse2001
     */
    public function registrantsSearchGet($last_modified = null, $registered_after = null, $registered_before = null, $rating = null, $email = null, $phone = null, $nick_name = null, $name = null, $fuzzy = null, $external_id = null, $smart_search = null, $cursor = null)
    {
        [$response] = $this->registrantsSearchGetWithHttpInfo($last_modified, $registered_after, $registered_before, $rating, $email, $phone, $nick_name, $name, $fuzzy, $external_id, $smart_search, $cursor);

        return $response;
    }

    /**
     * Operation registrantsSearchGetWithHttpInfo.
     *
     * Search registrants by name, email, phone, nickname, externalId, rating or creation date.
     *
     * @param  string $last_modified Return only registrant modified after the specified date time, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_after Returns only registrants that were registered since the given date, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_before Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  string $rating Return only registrants who currently have the specified rating (optional)
     * @param  string $email Search registrants by email address (optional)
     * @param  string $phone Search registrants by phone number (optional)
     * @param  string $nick_name Search registrants by nickname (optional)
     * @param  string $name Search registrants by name. This is a loose search, the name will be parsed into first and last name, and then partially matched. E.g. &#x60;Jim and Susan Smith&#x60; will match &#x60;Jim Smith&#x60; and &#x60;Susan Smith&#x60;. (optional)
     * @param  bool $fuzzy Default is &#x60;false&#x60;, turns on partial matching for specific field searches where the provided value is a prefix or an exact match. E.g. &#x60;name&#x3D;rob&amp;fuzzy&#x3D;true&#x60; will match the name &#x60;Robert&#x60;. Affected fields are: name, nickName, phone, email, externalId, and rating. (optional)
     * @param  string $external_id Search registrants by an integration externalId. The integration type will be determined by the API key. (optional)
     * @param  string $smart_search Searches for registrants where the given value is a prefix or exactly matches at least one of first name, last name, full name, phone, email, nickName, or company. E.g. &#x60;Jon&#x60;, &#x60;Jon Sno&#x60;, &#x60;Sno&#x60;, &#x60;Jo&#x60;  will all return &#x60;Jon Snow&#x60;. &#x60;jonsnow@&#x60; and &#x60;jonsno&#x60; will return a registrant with the email &#x60;jonsnow@westeros.com&#x60;. (optional)
     * @param  string $cursor A cursor for the next batch of registrants is providing in the metadata of the body. Provide the &#x60;next&#x60; cursor as a query parameter in your next request to access the next batch of registrants. It&#39;s a base64 encoded json object with the fields &#x60;v&#x60; for version, &#x60;o&#x60; for offset and &#x60;l&#x60; for limit. You don&#39;t have to create the cursor object as it is embedded in the &#x60;next&#x60; link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.) (optional)
     *
     * @throws \CollingMedia\Lasso\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \CollingMedia\Lasso\Model\InlineResponse2001, HTTP status code, HTTP response headers (array of strings)
     */
    public function registrantsSearchGetWithHttpInfo($last_modified = null, $registered_after = null, $registered_before = null, $rating = null, $email = null, $phone = null, $nick_name = null, $name = null, $fuzzy = null, $external_id = null, $smart_search = null, $cursor = null)
    {
        $returnType = '\CollingMedia\Lasso\Model\InlineResponse2001';
        $request = $this->registrantsSearchGetRequest($last_modified, $registered_after, $registered_before, $rating, $email, $phone, $nick_name, $name, $fuzzy, $external_id, $smart_search, $cursor);

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
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\CollingMedia\Lasso\Model\InlineResponse2001',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation registrantsSearchGetAsync.
     *
     * Search registrants by name, email, phone, nickname, externalId, rating or creation date.
     *
     * @param  string $last_modified Return only registrant modified after the specified date time, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_after Returns only registrants that were registered since the given date, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_before Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  string $rating Return only registrants who currently have the specified rating (optional)
     * @param  string $email Search registrants by email address (optional)
     * @param  string $phone Search registrants by phone number (optional)
     * @param  string $nick_name Search registrants by nickname (optional)
     * @param  string $name Search registrants by name. This is a loose search, the name will be parsed into first and last name, and then partially matched. E.g. &#x60;Jim and Susan Smith&#x60; will match &#x60;Jim Smith&#x60; and &#x60;Susan Smith&#x60;. (optional)
     * @param  bool $fuzzy Default is &#x60;false&#x60;, turns on partial matching for specific field searches where the provided value is a prefix or an exact match. E.g. &#x60;name&#x3D;rob&amp;fuzzy&#x3D;true&#x60; will match the name &#x60;Robert&#x60;. Affected fields are: name, nickName, phone, email, externalId, and rating. (optional)
     * @param  string $external_id Search registrants by an integration externalId. The integration type will be determined by the API key. (optional)
     * @param  string $smart_search Searches for registrants where the given value is a prefix or exactly matches at least one of first name, last name, full name, phone, email, nickName, or company. E.g. &#x60;Jon&#x60;, &#x60;Jon Sno&#x60;, &#x60;Sno&#x60;, &#x60;Jo&#x60;  will all return &#x60;Jon Snow&#x60;. &#x60;jonsnow@&#x60; and &#x60;jonsno&#x60; will return a registrant with the email &#x60;jonsnow@westeros.com&#x60;. (optional)
     * @param  string $cursor A cursor for the next batch of registrants is providing in the metadata of the body. Provide the &#x60;next&#x60; cursor as a query parameter in your next request to access the next batch of registrants. It&#39;s a base64 encoded json object with the fields &#x60;v&#x60; for version, &#x60;o&#x60; for offset and &#x60;l&#x60; for limit. You don&#39;t have to create the cursor object as it is embedded in the &#x60;next&#x60; link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsSearchGetAsync($last_modified = null, $registered_after = null, $registered_before = null, $rating = null, $email = null, $phone = null, $nick_name = null, $name = null, $fuzzy = null, $external_id = null, $smart_search = null, $cursor = null)
    {
        return $this->registrantsSearchGetAsyncWithHttpInfo($last_modified, $registered_after, $registered_before, $rating, $email, $phone, $nick_name, $name, $fuzzy, $external_id, $smart_search, $cursor)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation registrantsSearchGetAsyncWithHttpInfo.
     *
     * Search registrants by name, email, phone, nickname, externalId, rating or creation date.
     *
     * @param  string $last_modified Return only registrant modified after the specified date time, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_after Returns only registrants that were registered since the given date, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_before Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  string $rating Return only registrants who currently have the specified rating (optional)
     * @param  string $email Search registrants by email address (optional)
     * @param  string $phone Search registrants by phone number (optional)
     * @param  string $nick_name Search registrants by nickname (optional)
     * @param  string $name Search registrants by name. This is a loose search, the name will be parsed into first and last name, and then partially matched. E.g. &#x60;Jim and Susan Smith&#x60; will match &#x60;Jim Smith&#x60; and &#x60;Susan Smith&#x60;. (optional)
     * @param  bool $fuzzy Default is &#x60;false&#x60;, turns on partial matching for specific field searches where the provided value is a prefix or an exact match. E.g. &#x60;name&#x3D;rob&amp;fuzzy&#x3D;true&#x60; will match the name &#x60;Robert&#x60;. Affected fields are: name, nickName, phone, email, externalId, and rating. (optional)
     * @param  string $external_id Search registrants by an integration externalId. The integration type will be determined by the API key. (optional)
     * @param  string $smart_search Searches for registrants where the given value is a prefix or exactly matches at least one of first name, last name, full name, phone, email, nickName, or company. E.g. &#x60;Jon&#x60;, &#x60;Jon Sno&#x60;, &#x60;Sno&#x60;, &#x60;Jo&#x60;  will all return &#x60;Jon Snow&#x60;. &#x60;jonsnow@&#x60; and &#x60;jonsno&#x60; will return a registrant with the email &#x60;jonsnow@westeros.com&#x60;. (optional)
     * @param  string $cursor A cursor for the next batch of registrants is providing in the metadata of the body. Provide the &#x60;next&#x60; cursor as a query parameter in your next request to access the next batch of registrants. It&#39;s a base64 encoded json object with the fields &#x60;v&#x60; for version, &#x60;o&#x60; for offset and &#x60;l&#x60; for limit. You don&#39;t have to create the cursor object as it is embedded in the &#x60;next&#x60; link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function registrantsSearchGetAsyncWithHttpInfo($last_modified = null, $registered_after = null, $registered_before = null, $rating = null, $email = null, $phone = null, $nick_name = null, $name = null, $fuzzy = null, $external_id = null, $smart_search = null, $cursor = null)
    {
        $returnType = '\CollingMedia\Lasso\Model\InlineResponse2001';
        $request = $this->registrantsSearchGetRequest($last_modified, $registered_after, $registered_before, $rating, $email, $phone, $nick_name, $name, $fuzzy, $external_id, $smart_search, $cursor);

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
                        $response->getHeaders(),
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
     * Create request for operation 'registrantsSearchGet'.
     *
     * @param  string $last_modified Return only registrant modified after the specified date time, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_after Returns only registrants that were registered since the given date, in ISO 8601 UTC format. (optional)
     * @param  \DateTime $registered_before Returns only registrants that were registered before this date. Combined with registeredAfter this allows to select registrants that were registered between two dates. Dates are in ISO 8601 UTC format. (optional)
     * @param  string $rating Return only registrants who currently have the specified rating (optional)
     * @param  string $email Search registrants by email address (optional)
     * @param  string $phone Search registrants by phone number (optional)
     * @param  string $nick_name Search registrants by nickname (optional)
     * @param  string $name Search registrants by name. This is a loose search, the name will be parsed into first and last name, and then partially matched. E.g. &#x60;Jim and Susan Smith&#x60; will match &#x60;Jim Smith&#x60; and &#x60;Susan Smith&#x60;. (optional)
     * @param  bool $fuzzy Default is &#x60;false&#x60;, turns on partial matching for specific field searches where the provided value is a prefix or an exact match. E.g. &#x60;name&#x3D;rob&amp;fuzzy&#x3D;true&#x60; will match the name &#x60;Robert&#x60;. Affected fields are: name, nickName, phone, email, externalId, and rating. (optional)
     * @param  string $external_id Search registrants by an integration externalId. The integration type will be determined by the API key. (optional)
     * @param  string $smart_search Searches for registrants where the given value is a prefix or exactly matches at least one of first name, last name, full name, phone, email, nickName, or company. E.g. &#x60;Jon&#x60;, &#x60;Jon Sno&#x60;, &#x60;Sno&#x60;, &#x60;Jo&#x60;  will all return &#x60;Jon Snow&#x60;. &#x60;jonsnow@&#x60; and &#x60;jonsno&#x60; will return a registrant with the email &#x60;jonsnow@westeros.com&#x60;. (optional)
     * @param  string $cursor A cursor for the next batch of registrants is providing in the metadata of the body. Provide the &#x60;next&#x60; cursor as a query parameter in your next request to access the next batch of registrants. It&#39;s a base64 encoded json object with the fields &#x60;v&#x60; for version, &#x60;o&#x60; for offset and &#x60;l&#x60; for limit. You don&#39;t have to create the cursor object as it is embedded in the &#x60;next&#x60; link provided in the result set. Version is an integer that indicates the layout of the cursor. Future layouts may provide a different way to access parts of a result set, e.g. by providing a primary key as a reference point. This prevents the missing/repeated data issue with paged results, if the result set is modified during paging (e.g. a registrant is added while on page 2, and when loading page 3, the last registrant from page is pushed down to be the first registrant on page three and being included in two result pages. The opposite happens if a registrant is deleted, one result will be skipped.) (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function registrantsSearchGetRequest($last_modified = null, $registered_after = null, $registered_before = null, $rating = null, $email = null, $phone = null, $nick_name = null, $name = null, $fuzzy = null, $external_id = null, $smart_search = null, $cursor = null)
    {
        $resourcePath = '/registrants/search';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($last_modified !== null) {
            $queryParams['lastModified'] = ObjectSerializer::toQueryValue($last_modified);
        }
        // query params
        if ($registered_after !== null) {
            $queryParams['registeredAfter'] = ObjectSerializer::toQueryValue($registered_after);
        }
        // query params
        if ($registered_before !== null) {
            $queryParams['registeredBefore'] = ObjectSerializer::toQueryValue($registered_before);
        }
        // query params
        if ($rating !== null) {
            $queryParams['rating'] = ObjectSerializer::toQueryValue($rating);
        }
        // query params
        if ($email !== null) {
            $queryParams['email'] = ObjectSerializer::toQueryValue($email);
        }
        // query params
        if ($phone !== null) {
            $queryParams['phone'] = ObjectSerializer::toQueryValue($phone);
        }
        // query params
        if ($nick_name !== null) {
            $queryParams['nickName'] = ObjectSerializer::toQueryValue($nick_name);
        }
        // query params
        if ($name !== null) {
            $queryParams['name'] = ObjectSerializer::toQueryValue($name);
        }
        // query params
        if ($fuzzy !== null) {
            $queryParams['fuzzy'] = ObjectSerializer::toQueryValue($fuzzy);
        }
        // query params
        if ($external_id !== null) {
            $queryParams['externalId'] = ObjectSerializer::toQueryValue($external_id);
        }
        // query params
        if ($smart_search !== null) {
            $queryParams['smartSearch'] = ObjectSerializer::toQueryValue($smart_search);
        }
        // query params
        if ($cursor !== null) {
            $queryParams['cursor'] = ObjectSerializer::toQueryValue($cursor);
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
                        'contents' => $formParamValue,
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
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option.
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (! $options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        return $options;
    }
}
