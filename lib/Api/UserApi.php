<?php
/**
 * UserApi
 * PHP version 5
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Pluxbox Radiomanager Client
 *
 * Pluxbox RadioManager gives you the power, flexibility and speed you always wanted in a lightweight and easy-to-use web-based radio solution. With Pluxbox RadioManager you can organise your radio workflow and automate your omnichannel communication with your listeners. We offer wide range specialised services for the radio and connections like Hybrid Radio, Visual Radio, your website and social media without losing focus on your broadcast. For more information visit https://pluxbox.com
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
 * UserApi Class Doc Comment
 *
 * @category Class
 * @package  RadioManager
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserApi
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
     * @return UserApi
     */
    public function setApiClient(\RadioManager\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation deleteUserById
     *
     * Remove user from station by Id
     *
     * @param int $id id of User (required)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\Success
     */
    public function deleteUserById($id)
    {
        list($response) = $this->deleteUserByIdWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation deleteUserByIdWithHttpInfo
     *
     * Remove user from station by Id
     *
     * @param int $id id of User (required)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\Success, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteUserByIdWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling deleteUserById');
        }
        if (($id < 0)) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling UserApi.deleteUserById, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/users/{id}";
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
                '/users/{id}'
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
     * Operation getUserById
     *
     * Get user by id
     *
     * @param int $id id of User (required)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\UserResult
     */
    public function getUserById($id)
    {
        list($response) = $this->getUserByIdWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation getUserByIdWithHttpInfo
     *
     * Get user by id
     *
     * @param int $id id of User (required)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\UserResult, HTTP status code, HTTP response headers (array of strings)
     */
    public function getUserByIdWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling getUserById');
        }
        if (($id < 0)) {
            throw new \InvalidArgumentException('invalid value for "$id" when calling UserApi.getUserById, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/users/{id}";
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
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\RadioManager\Model\UserResult',
                '/users/{id}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\UserResult', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\UserResult', $e->getResponseHeaders());
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
     * Operation inviteUserByMail
     *
     * Invite user by mail
     *
     * @param \RadioManager\Model\InviteUserData $data Data **(Required)** (required)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\InviteUserSuccess
     */
    public function inviteUserByMail($data)
    {
        list($response) = $this->inviteUserByMailWithHttpInfo($data);
        return $response;
    }

    /**
     * Operation inviteUserByMailWithHttpInfo
     *
     * Invite user by mail
     *
     * @param \RadioManager\Model\InviteUserData $data Data **(Required)** (required)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\InviteUserSuccess, HTTP status code, HTTP response headers (array of strings)
     */
    public function inviteUserByMailWithHttpInfo($data)
    {
        // verify the required parameter 'data' is set
        if ($data === null) {
            throw new \InvalidArgumentException('Missing the required parameter $data when calling inviteUserByMail');
        }
        // parse inputs
        $resourcePath = "/users/invite";
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
                '\RadioManager\Model\InviteUserSuccess',
                '/users/invite'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\InviteUserSuccess', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\InviteUserSuccess', $e->getResponseHeaders());
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
     * Operation listUsers
     *
     * Get all users.
     *
     * @param int $page Current page *(Optional)* (optional, default to 1)
     * @param int $role_id Search on Role ID *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return \RadioManager\Model\UserResults
     */
    public function listUsers($page = '1', $role_id = null)
    {
        list($response) = $this->listUsersWithHttpInfo($page, $role_id);
        return $response;
    }

    /**
     * Operation listUsersWithHttpInfo
     *
     * Get all users.
     *
     * @param int $page Current page *(Optional)* (optional, default to 1)
     * @param int $role_id Search on Role ID *(Optional)* (optional)
     * @throws \RadioManager\ApiException on non-2xx response
     * @return array of \RadioManager\Model\UserResults, HTTP status code, HTTP response headers (array of strings)
     */
    public function listUsersWithHttpInfo($page = '1', $role_id = null)
    {
        if (!is_null($page) && ($page < 0)) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling UserApi.listUsers, must be bigger than or equal to 0.');
        }

        // parse inputs
        $resourcePath = "/users";
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
        if ($role_id !== null) {
            $queryParams['role_id'] = $this->apiClient->getSerializer()->toQueryValue($role_id);
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
                '\RadioManager\Model\UserResults',
                '/users'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\RadioManager\Model\UserResults', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\RadioManager\Model\UserResults', $e->getResponseHeaders());
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
