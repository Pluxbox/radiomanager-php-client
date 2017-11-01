# RadioManager\ItemApi

All URIs are relative to *https://staging.radiomanager.io/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createItem**](ItemApi.md#createItem) | **POST** /items | Create an new item.
[**currentItemPostStructure**](ItemApi.md#currentItemPostStructure) | **POST** /items/current/structure | Post a current playing item, keep structure
[**currentItemPostTiming**](ItemApi.md#currentItemPostTiming) | **POST** /items/current/timing | Post a current playing item
[**deleteItemById**](ItemApi.md#deleteItemById) | **DELETE** /items/{id} | Delete item by ID.
[**getItemById**](ItemApi.md#getItemById) | **GET** /items/{id} | Get extended item details by ID.
[**listItems**](ItemApi.md#listItems) | **GET** /items | Get a list of all the items currently in your station.
[**playlistPostStructure**](ItemApi.md#playlistPostStructure) | **POST** /items/playlist/structure | Post a playlist, keep current structure
[**playlistPostTiming**](ItemApi.md#playlistPostTiming) | **POST** /items/playlist/timing | Post a playlist
[**updateItemById**](ItemApi.md#updateItemById) | **PATCH** /items/{id} | Update extended item details by ID.


# **createItem**
> \RadioManager\Model\PostSuccess createItem($data)

Create an new item.

Create item.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ItemApi();
$data = new \RadioManager\Model\ItemDataInput(); // \RadioManager\Model\ItemDataInput | Data *(Optional)*

try {
    $result = $api_instance->createItem($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->createItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\RadioManager\Model\ItemDataInput**](../Model/ItemDataInput.md)| Data *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\PostSuccess**](../Model/PostSuccess.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currentItemPostStructure**
> \RadioManager\Model\Success currentItemPostStructure($data)

Post a current playing item, keep structure

Post a current playing item, keep structure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ItemApi();
$data = new \RadioManager\Model\ImportItem(); // \RadioManager\Model\ImportItem | Data *(Optional)*

try {
    $result = $api_instance->currentItemPostStructure($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->currentItemPostStructure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\RadioManager\Model\ImportItem**](../Model/ImportItem.md)| Data *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currentItemPostTiming**
> \RadioManager\Model\Success currentItemPostTiming($data)

Post a current playing item

Post a current playing item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ItemApi();
$data = new \RadioManager\Model\ImportItem(); // \RadioManager\Model\ImportItem | Data *(Optional)*

try {
    $result = $api_instance->currentItemPostTiming($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->currentItemPostTiming: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\RadioManager\Model\ImportItem**](../Model/ImportItem.md)| Data *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteItemById**
> \RadioManager\Model\Success deleteItemById($id)

Delete item by ID.

Delete item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ItemApi();
$id = 789; // int | ID of Item **(Required)**

try {
    $result = $api_instance->deleteItemById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->deleteItemById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Item **(Required)** |

### Return type

[**\RadioManager\Model\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getItemById**
> \RadioManager\Model\ItemResult getItemById($id, $_external_station_id)

Get extended item details by ID.

Read item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ItemApi();
$id = 789; // int | ID of Item **(Required)**
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->getItemById($id, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->getItemById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Item **(Required)** |
 **_external_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\ItemResult**](../Model/ItemResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listItems**
> \RadioManager\Model\ItemResults listItems($page, $block_id, $broadcast_id, $model_type_id, $tag_id, $campaign_id, $contact_id, $program_draft_id, $user_draft_id, $station_draft_id, $program_id, $start_min, $start_max, $duration_min, $duration_max, $status, $limit, $order_by, $order_direction, $_external_station_id)

Get a list of all the items currently in your station.

Get a list of all the items currently in your station. This feature supports pagination and will give a maximum results of 50 items back.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ItemApi();
$page = 789; // int | Current page *(Optional)*
$block_id = 789; // int | Search on Block ID *(Optional)* `(Relation)`
$broadcast_id = 789; // int | Search on Broadcast ID *(Optional)* `(Relation)`
$model_type_id = 789; // int | Search on ModelType ID *(Optional)* `(Relation)`
$tag_id = 789; // int | Search on Tag ID *(Optional)* `(Relation)`
$campaign_id = 789; // int | Search on Campaign ID *(Optional)* `(Relation)`
$contact_id = 789; // int | Search on Contact ID *(Optional)* `(Relation)`
$program_draft_id = 789; // int | Search on Program Draft ID *(Optional)*
$user_draft_id = 789; // int | Search on User Draft ID *(Optional)*
$station_draft_id = 789; // int | Search on Station Draft ID *(Optional)*
$program_id = 789; // int | Search on Program ID *(Optional)* `(Relation)`
$start_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Minimum start date *(Optional)*
$start_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Maximum start date *(Optional)*
$duration_min = 56; // int | Minimum duration (seconds) *(Optional)*
$duration_max = 56; // int | Maximum duration (seconds) *(Optional)*
$status = "status_example"; // string | Play Status of item *(Optional)*
$limit = 789; // int | Results per page *(Optional)*
$order_by = "order_by_example"; // string | Field to order the results *(Optional)*
$order_direction = "order_direction_example"; // string | Direction of ordering *(Optional)*
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->listItems($page, $block_id, $broadcast_id, $model_type_id, $tag_id, $campaign_id, $contact_id, $program_draft_id, $user_draft_id, $station_draft_id, $program_id, $start_min, $start_max, $duration_min, $duration_max, $status, $limit, $order_by, $order_direction, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->listItems: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page *(Optional)* | [optional]
 **block_id** | **int**| Search on Block ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **broadcast_id** | **int**| Search on Broadcast ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **model_type_id** | **int**| Search on ModelType ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **tag_id** | **int**| Search on Tag ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **campaign_id** | **int**| Search on Campaign ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **contact_id** | **int**| Search on Contact ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **program_draft_id** | **int**| Search on Program Draft ID *(Optional)* | [optional]
 **user_draft_id** | **int**| Search on User Draft ID *(Optional)* | [optional]
 **station_draft_id** | **int**| Search on Station Draft ID *(Optional)* | [optional]
 **program_id** | **int**| Search on Program ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **start_min** | **\DateTime**| Minimum start date *(Optional)* | [optional]
 **start_max** | **\DateTime**| Maximum start date *(Optional)* | [optional]
 **duration_min** | **int**| Minimum duration (seconds) *(Optional)* | [optional]
 **duration_max** | **int**| Maximum duration (seconds) *(Optional)* | [optional]
 **status** | **string**| Play Status of item *(Optional)* | [optional]
 **limit** | **int**| Results per page *(Optional)* | [optional]
 **order_by** | **string**| Field to order the results *(Optional)* | [optional]
 **order_direction** | **string**| Direction of ordering *(Optional)* | [optional]
 **_external_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\ItemResults**](../Model/ItemResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistPostStructure**
> \RadioManager\Model\InlineResponse202 playlistPostStructure($data)

Post a playlist, keep current structure

Post a playlist, keep current structure

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ItemApi();
$data = new \RadioManager\Model\Data1(); // \RadioManager\Model\Data1 | Data *(Optional)*

try {
    $result = $api_instance->playlistPostStructure($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->playlistPostStructure: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\RadioManager\Model\Data1**](../Model/Data1.md)| Data *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **playlistPostTiming**
> \RadioManager\Model\InlineResponse202 playlistPostTiming($data)

Post a playlist

Post a playlist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ItemApi();
$data = new \RadioManager\Model\Data(); // \RadioManager\Model\Data | Data *(Optional)*

try {
    $result = $api_instance->playlistPostTiming($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->playlistPostTiming: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\RadioManager\Model\Data**](../Model/Data.md)| Data *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\InlineResponse202**](../Model/InlineResponse202.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateItemById**
> \RadioManager\Model\Success updateItemById($id, $data)

Update extended item details by ID.

Update item by id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ItemApi();
$id = 789; // int | ID of Item **(Required)**
$data = new \RadioManager\Model\Item(); // \RadioManager\Model\Item | Data *(Optional)*

try {
    $result = $api_instance->updateItemById($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemApi->updateItemById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Item **(Required)** |
 **data** | [**\RadioManager\Model\Item**](../Model/Item.md)| Data *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

