<?php
/**
 * GenreApi
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
 * GenreApi Class Doc Comment
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class GenreApi
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
     * @return GenreApi
     */
    public function setApiClient(\RadioManager\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation getGenreById
     *
     * Get genre by id
     *
     * @param int $id ID of Genre **(Required)** (required)
     * @param int $_external_station_id Query on a different (content providing) station *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\GenreResult
     */
    public function getGenreById($id, $_external_station_id = null)
    {
        list($response) = $this->getGenreByIdWithHttpInfo($id, $_external_station_id);
        return $response;
    }

    /**
     * Operation getGenreByIdWithHttpInfo
     *
     * Get genre by id
     *
     * @param int $id ID of Genre **(Required)** (required)
     * @param int $_external_station_id Query on a different (content providing) station *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\GenreResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getGenreByIdWithHttpInfo($id, $_external_station_id = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getGenreById');
        }
        if (($id < 0)) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling GenreApi.getGenreById, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/genres/{id}";
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
                '\RadioManager\Model\GenreResult',
                '/genres/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\GenreResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\GenreResult', $e->getResponseHeaders());
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
     * Operation listGenres
     *
     * List all genres.
     *
     * @param int $page Current page *(Optional)* (optional)
     * @param int $parent_id Search on Parent ID of Genre *(Optional)* (optional)
     * @param int $program_id Search on Program ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $broadcast_id Search on Broadcast ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $_external_station_id Query on a different (content providing) station *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\GenreResults
     */
    public function listGenres($page = null, $parent_id = null, $program_id = null, $broadcast_id = null, $_external_station_id = null)
    {
        list($response) = $this->listGenresWithHttpInfo($page, $parent_id, $program_id, $broadcast_id, $_external_station_id);
        return $response;
    }

    /**
     * Operation listGenresWithHttpInfo
     *
     * List all genres.
     *
     * @param int $page Current page *(Optional)* (optional)
     * @param int $parent_id Search on Parent ID of Genre *(Optional)* (optional)
     * @param int $program_id Search on Program ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $broadcast_id Search on Broadcast ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $_external_station_id Query on a different (content providing) station *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\GenreResults, HTTP status code, HTTP response headers (array of strings)
     */
    public function listGenresWithHttpInfo($page = null, $parent_id = null, $program_id = null, $broadcast_id = null, $_external_station_id = null)
    {
        if (!is_null($page) && ($page < 0)) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling GenreApi.listGenres, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/genres";
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
        if ($parent_id !== null) {
            $queryParams['parent_id'] = $this->apiClient->getSerializer()->toQueryValue($parent_id);
        }
        // query params
        if ($program_id !== null) {
            $queryParams['program_id'] = $this->apiClient->getSerializer()->toQueryValue($program_id);
        }
        // query params
        if ($broadcast_id !== null) {
            $queryParams['broadcast_id'] = $this->apiClient->getSerializer()->toQueryValue($broadcast_id);
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
                '\RadioManager\Model\GenreResults',
                '/genres'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\GenreResults', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\GenreResults', $e->getResponseHeaders());
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
