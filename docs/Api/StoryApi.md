# RadioManager\StoryApi

All URIs are relative to *https://staging.radiomanager.io/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStory**](StoryApi.md#createStory) | **POST** /stories | Create story.
[**deleteStoryById**](StoryApi.md#deleteStoryById) | **DELETE** /stories/{id} | Delete story by id
[**getStoryById**](StoryApi.md#getStoryById) | **GET** /stories/{id} | Get story by id
[**listStories**](StoryApi.md#listStories) | **GET** /stories | Get all stories.
[**updateStoryByID**](StoryApi.md#updateStoryByID) | **PATCH** /stories/{id} | Update story by id


# **createStory**
> \RadioManager\Model\PostSuccess createStory($data)

Create story.

Create story.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\StoryApi();
$data = new \RadioManager\Model\StoryDataInput(); // \RadioManager\Model\StoryDataInput | Data **(Required)**

try {
    $result = $api_instance->createStory($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoryApi->createStory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\RadioManager\Model\StoryDataInput**](../Model/StoryDataInput.md)| Data **(Required)** |

### Return type

[**\RadioManager\Model\PostSuccess**](../Model/PostSuccess.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStoryById**
> \RadioManager\Model\Success deleteStoryById($id)

Delete story by id

Delete story by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\StoryApi();
$id = 789; // int | ID of Story **(Required)**

try {
    $result = $api_instance->deleteStoryById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoryApi->deleteStoryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Story **(Required)** |

### Return type

[**\RadioManager\Model\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStoryById**
> \RadioManager\Model\StoryResult getStoryById($id, $_external_station_id)

Get story by id

Get story by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\StoryApi();
$id = 789; // int | ID of Story **(Required)**
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->getStoryById($id, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoryApi->getStoryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Story **(Required)** |
 **_external_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\StoryResult**](../Model/StoryResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listStories**
> \RadioManager\Model\StoryResults listStories($page, $item_id, $model_type_id, $tag_id, $limit, $order_by, $order_direction, $_external_station_id)

Get all stories.

List all stories.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\StoryApi();
$page = 1; // int | Current page *(Optional)*
$item_id = 789; // int | Search on Item ID *(Optional)* `(Relation)`
$model_type_id = 789; // int | Search on ModelType ID *(Optional)* `(Relation)`
$tag_id = 789; // int | Search on Tag ID *(Optional)* `(Relation)`
$limit = 789; // int | Results per page *(Optional)*
$order_by = "order_by_example"; // string | Field to order the results *(Optional)*
$order_direction = "order_direction_example"; // string | Direction of ordering *(Optional)*
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->listStories($page, $item_id, $model_type_id, $tag_id, $limit, $order_by, $order_direction, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoryApi->listStories: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page *(Optional)* | [optional] [default to 1]
 **item_id** | **int**| Search on Item ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **model_type_id** | **int**| Search on ModelType ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **tag_id** | **int**| Search on Tag ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **limit** | **int**| Results per page *(Optional)* | [optional]
 **order_by** | **string**| Field to order the results *(Optional)* | [optional]
 **order_direction** | **string**| Direction of ordering *(Optional)* | [optional]
 **_external_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\StoryResults**](../Model/StoryResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStoryByID**
> \RadioManager\Model\Success updateStoryByID($id, $data)

Update story by id

Update story by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\StoryApi();
$id = 789; // int | ID of Story **(Required)**
$data = new \RadioManager\Model\StoryDataInput(); // \RadioManager\Model\StoryDataInput | Data *(Optional)*

try {
    $result = $api_instance->updateStoryByID($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StoryApi->updateStoryByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Story **(Required)** |
 **data** | [**\RadioManager\Model\StoryDataInput**](../Model/StoryDataInput.md)| Data *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

