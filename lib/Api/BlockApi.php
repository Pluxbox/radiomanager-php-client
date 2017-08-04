<?php
/**
 * BlockApi
 * PHP version 5
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * RadioManager
 *
 * RadioManager
 *
 * OpenAPI spec version: 2.0
 * Contact: support@pluxbox.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace RadioManager\Api;

use \RadioManager\ApiClient;
use \RadioManager\ApiException;
use \RadioManager\Configuration;
use \RadioManager\ObjectSerializer;

/**
 * BlockApi Class Doc Comment
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BlockApi
{
    /**
     * API Client
     *
     * @var \RadioManager\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \RadioManager\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\RadioManager\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \RadioManager\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \RadioManager\ApiClient $apiClient set the API client
     *
     * @return BlockApi
     */
    public function setApiClient(\RadioManager\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getBlockById
     *
     * Get block by id
     *
     * @param int $id ID of Block **(Required)** (required)
     * @param int $_external_station_id Query on a different (content providing) station *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\BlockResult
     */
    public function getBlockById($id, $_external_station_id = null)
    {
        list($response) = $this->getBlockByIdWithHttpInfo($id, $_external_station_id);
        return $response;
    }

    /**
     * Operation getBlockByIdWithHttpInfo
     *
     * Get block by id
     *
     * @param int $id ID of Block **(Required)** (required)
     * @param int $_external_station_id Query on a different (content providing) station *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\BlockResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getBlockByIdWithHttpInfo($id, $_external_station_id = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getBlockById');
        }
        if (($id < 0)) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling BlockApi.getBlockById, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/blocks/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($_external_station_id !== null) {
            $queryParams['_external_station_id'] = $this->apiClient->getSerializer()->toQueryValue($_external_station_id);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\RadioManager\Model\BlockResult',
                '/blocks/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\BlockResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\BlockResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\TooManyRequests', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCurrentBlock
     *
     * Get current Block
     *
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\BlockResult
     */
    public function getCurrentBlock()
    {
        list($response) = $this->getCurrentBlockWithHttpInfo();
        return $response;
    }

    /**
     * Operation getCurrentBlockWithHttpInfo
     *
     * Get current Block
     *
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\BlockResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCurrentBlockWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/blocks/current";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\RadioManager\Model\BlockResult',
                '/blocks/current'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\BlockResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\BlockResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\TooManyRequests', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getNextBlock
     *
     * Get next Block
     *
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\BlockResult
     */
    public function getNextBlock()
    {
        list($response) = $this->getNextBlockWithHttpInfo();
        return $response;
    }

    /**
     * Operation getNextBlockWithHttpInfo
     *
     * Get next Block
     *
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\BlockResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getNextBlockWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/blocks/next";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);


        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\RadioManager\Model\BlockResult',
                '/blocks/next'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\BlockResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\BlockResult', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\TooManyRequests', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation listBlocks
     *
     * Get a list of all blocks currently in your station.
     *
     * @param int $page Current page *(Optional)* (optional, default to 1)
     * @param \DateTime $start_min Minimum start date *(Optional)* (optional)
     * @param \DateTime $start_max Maximum start date *(Optional)* (optional)
     * @param int $broadcast_id Search on Broadcast ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $program_id Search on Program ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $item_id Search on Item ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $_external_station_id Query on a different (content providing) station *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\BlockResults
     */
    public function listBlocks($page = '1', $start_min = null, $start_max = null, $broadcast_id = null, $program_id = null, $item_id = null, $_external_station_id = null)
    {
        list($response) = $this->listBlocksWithHttpInfo($page, $start_min, $start_max, $broadcast_id, $program_id, $item_id, $_external_station_id);
        return $response;
    }

    /**
     * Operation listBlocksWithHttpInfo
     *
     * Get a list of all blocks currently in your station.
     *
     * @param int $page Current page *(Optional)* (optional, default to 1)
     * @param \DateTime $start_min Minimum start date *(Optional)* (optional)
     * @param \DateTime $start_max Maximum start date *(Optional)* (optional)
     * @param int $broadcast_id Search on Broadcast ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $program_id Search on Program ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $item_id Search on Item ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $_external_station_id Query on a different (content providing) station *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\BlockResults, HTTP status code, HTTP response headers (array of strings)
     */
    public function listBlocksWithHttpInfo($page = '1', $start_min = null, $start_max = null, $broadcast_id = null, $program_id = null, $item_id = null, $_external_station_id = null)
    {
        if (!is_null($page) && ($page < 0)) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling BlockApi.listBlocks, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/blocks";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($start_min !== null) {
            $queryParams['start-min'] = $this->apiClient->getSerializer()->toQueryValue($start_min);
        }
        // query params
        if ($start_max !== null) {
            $queryParams['start-max'] = $this->apiClient->getSerializer()->toQueryValue($start_max);
        }
        // query params
        if ($broadcast_id !== null) {
            $queryParams['broadcast_id'] = $this->apiClient->getSerializer()->toQueryValue($broadcast_id);
        }
        // query params
        if ($program_id !== null) {
            $queryParams['program_id'] = $this->apiClient->getSerializer()->toQueryValue($program_id);
        }
        // query params
        if ($item_id !== null) {
            $queryParams['item_id'] = $this->apiClient->getSerializer()->toQueryValue($item_id);
        }
        // query params
        if ($_external_station_id !== null) {
            $queryParams['_external_station_id'] = $this->apiClient->getSerializer()->toQueryValue($_external_station_id);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api-key');
        if (strlen($apiKey) !== 0) {
            $headerParams['api-key'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\RadioManager\Model\BlockResults',
                '/blocks'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\BlockResults', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\BlockResults', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\Forbidden', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\NotFound', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\TooManyRequests', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
