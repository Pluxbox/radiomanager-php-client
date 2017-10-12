<?php
/**
 * StationApi
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
 * StationApi Class Doc Comment
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class StationApi
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
     * @return StationApi
     */
    public function setApiClient(\RadioManager\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getStation
     *
     * Get own station only
     *
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\StationResult
     */
    public function getStation()
    {
        list($response) = $this->getStationWithHttpInfo();
        return $response;
    }

    /**
     * Operation getStationWithHttpInfo
     *
     * Get own station only
     *
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\StationResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getStationWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/station";
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
                '\RadioManager\Model\StationResult',
                '/station'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\StationResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\StationResult', $e->getResponseHeaders());
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
