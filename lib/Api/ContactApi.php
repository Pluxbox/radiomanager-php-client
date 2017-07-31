<?php
/**
 * ContactApi
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
 * ContactApi Class Doc Comment
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ContactApi
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
     * @return ContactApi
     */
    public function setApiClient(\RadioManager\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation createContact
     *
     * Create contact.
     *
     * @param \RadioManager\Model\ContactDataInput $data Data **(Required)** (required)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\PostSuccess
     */
    public function createContact($data)
    {
        list($response) = $this->createContactWithHttpInfo($data);
        return $response;
    }

    /**
     * Operation createContactWithHttpInfo
     *
     * Create contact.
     *
     * @param \RadioManager\Model\ContactDataInput $data Data **(Required)** (required)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\PostSuccess, HTTP status code, HTTP response headers (array of strings)
     */
    public function createContactWithHttpInfo($data)
    {
        // verify the required parameter 'data' is set
        if ($data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data when calling createContact');
        }
        // parse inputs
        $resourcePath = "/contacts";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // body params
        $_tempBody = null;
        if (isset($data)) {
            $_tempBody = $data;
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
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\RadioManager\Model\PostSuccess',
                '/contacts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\PostSuccess', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\PostSuccess', $e->getResponseHeaders());
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
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\UnprocessableEntity', $e->getResponseHeaders());
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
     * Operation deleteContactById
     *
     * Delete contact by id
     *
     * @param int $id ID of Contact **(Required)** (required)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\Success
     */
    public function deleteContactById($id)
    {
        list($response) = $this->deleteContactByIdWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteContactByIdWithHttpInfo
     *
     * Delete contact by id
     *
     * @param int $id ID of Contact **(Required)** (required)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\Success, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteContactByIdWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteContactById');
        }
        if (($id < 0)) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling ContactApi.deleteContactById, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/contacts/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

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
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                '\RadioManager\Model\Success',
                '/contacts/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\Success', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\Success', $e->getResponseHeaders());
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
     * Operation getContactById
     *
     * Get contact by id
     *
     * @param int $id ID of Contact **(Required)** (required)
     * @param int $_external_station_id Query on a different (content providing) station *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\ContactResult
     */
    public function getContactById($id, $_external_station_id = null)
    {
        list($response) = $this->getContactByIdWithHttpInfo($id, $_external_station_id);
        return $response;
    }

    /**
     * Operation getContactByIdWithHttpInfo
     *
     * Get contact by id
     *
     * @param int $id ID of Contact **(Required)** (required)
     * @param int $_external_station_id Query on a different (content providing) station *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\ContactResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getContactByIdWithHttpInfo($id, $_external_station_id = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getContactById');
        }
        if (($id < 0)) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling ContactApi.getContactById, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/contacts/{id}";
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
                '\RadioManager\Model\ContactResult',
                '/contacts/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\ContactResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\ContactResult', $e->getResponseHeaders());
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
     * Operation listContacts
     *
     * Get all contacts.
     *
     * @param int $page Current page *(Optional)* (optional, default to 1)
     * @param int $model_type_id Search on ModelType ID *(Optional)* (optional)
     * @param int $tag_id Search on Tag ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $item_id Search on Item ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $_external_station_id Query on a different (content providing) station *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\ContactResults
     */
    public function listContacts($page = '1', $model_type_id = null, $tag_id = null, $item_id = null, $_external_station_id = null)
    {
        list($response) = $this->listContactsWithHttpInfo($page, $model_type_id, $tag_id, $item_id, $_external_station_id);
        return $response;
    }

    /**
     * Operation listContactsWithHttpInfo
     *
     * Get all contacts.
     *
     * @param int $page Current page *(Optional)* (optional, default to 1)
     * @param int $model_type_id Search on ModelType ID *(Optional)* (optional)
     * @param int $tag_id Search on Tag ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $item_id Search on Item ID *(Optional)* &#x60;(Relation)&#x60; (optional)
     * @param int $_external_station_id Query on a different (content providing) station *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\ContactResults, HTTP status code, HTTP response headers (array of strings)
     */
    public function listContactsWithHttpInfo($page = '1', $model_type_id = null, $tag_id = null, $item_id = null, $_external_station_id = null)
    {
        if (!is_null($page) && ($page < 0)) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling ContactApi.listContacts, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/contacts";
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
        if ($model_type_id !== null) {
            $queryParams['model_type_id'] = $this->apiClient->getSerializer()->toQueryValue($model_type_id);
        }
        // query params
        if ($tag_id !== null) {
            $queryParams['tag_id'] = $this->apiClient->getSerializer()->toQueryValue($tag_id);
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
                '\RadioManager\Model\ContactResults',
                '/contacts'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\ContactResults', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\ContactResults', $e->getResponseHeaders());
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
     * Operation updateContactByID
     *
     * Update contact by id
     *
     * @param int $id ID of Contact **(Required)** (required)
     * @param \RadioManager\Model\ContactDataInput $data Data *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\Success
     */
    public function updateContactByID($id, $data = null)
    {
        list($response) = $this->updateContactByIDWithHttpInfo($id, $data);
        return $response;
    }

    /**
     * Operation updateContactByIDWithHttpInfo
     *
     * Update contact by id
     *
     * @param int $id ID of Contact **(Required)** (required)
     * @param \RadioManager\Model\ContactDataInput $data Data *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\Success, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateContactByIDWithHttpInfo($id, $data = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling updateContactByID');
        }
        if (($id < 0)) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling ContactApi.updateContactByID, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/contacts/{id}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // body params
        $_tempBody = null;
        if (isset($data)) {
            $_tempBody = $data;
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
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\RadioManager\Model\Success',
                '/contacts/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\Success', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\Success', $e->getResponseHeaders());
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
                case 422:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\UnprocessableEntity', $e->getResponseHeaders());
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
