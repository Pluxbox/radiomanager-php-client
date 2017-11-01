# RadioManager\BlockApi

All URIs are relative to *https://staging.radiomanager.io/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getBlockById**](BlockApi.md#getBlockById) | **GET** /blocks/{id} | Get block by id
[**getCurrentBlock**](BlockApi.md#getCurrentBlock) | **GET** /blocks/current | Get current Block
[**getNextBlock**](BlockApi.md#getNextBlock) | **GET** /blocks/next | Get next Block
[**listBlocks**](BlockApi.md#listBlocks) | **GET** /blocks | Get a list of all blocks currently in your station.


# **getBlockById**
> \RadioManager\Model\BlockResult getBlockById($id, $_external_station_id)

Get block by id

Get block by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BlockApi();
$id = 789; // int | ID of Block **(Required)**
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->getBlockById($id, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->getBlockById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Block **(Required)** |
 **_external_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\BlockResult**](../Model/BlockResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentBlock**
> \RadioManager\Model\BlockResult getCurrentBlock()

Get current Block

Get current Block

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BlockApi();

try {
    $result = $api_instance->getCurrentBlock();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->getCurrentBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RadioManager\Model\BlockResult**](../Model/BlockResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNextBlock**
> \RadioManager\Model\BlockResult getNextBlock()

Get next Block

Get next Block

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BlockApi();

try {
    $result = $api_instance->getNextBlock();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->getNextBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RadioManager\Model\BlockResult**](../Model/BlockResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBlocks**
> \RadioManager\Model\BlockResults listBlocks($page, $broadcast_id, $item_id, $program_id, $start_min, $start_max, $limit, $order_by, $order_direction, $_external_station_id)

Get a list of all blocks currently in your station.

Get a list of all blocks currently in your station. This feature supports pagination and will give a maximum of 50 blocks back.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BlockApi();
$page = 1; // int | Current page *(Optional)*
$broadcast_id = 789; // int | Search on Broadcast ID *(Optional)* `(Relation)`
$item_id = 789; // int | Search on Item ID *(Optional)* `(Relation)`
$program_id = 789; // int | Search on Program ID *(Optional)* `(Relation)`
$start_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Minimum start date *(Optional)*
$start_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Maximum start date *(Optional)*
$limit = 789; // int | Results per page *(Optional)*
$order_by = "order_by_example"; // string | Field to order the results *(Optional)*
$order_direction = "order_direction_example"; // string | Direction of ordering *(Optional)*
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->listBlocks($page, $broadcast_id, $item_id, $program_id, $start_min, $start_max, $limit, $order_by, $order_direction, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->listBlocks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page *(Optional)* | [optional] [default to 1]
 **broadcast_id** | **int**| Search on Broadcast ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **item_id** | **int**| Search on Item ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **program_id** | **int**| Search on Program ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **start_min** | **\DateTime**| Minimum start date *(Optional)* | [optional]
 **start_max** | **\DateTime**| Maximum start date *(Optional)* | [optional]
 **limit** | **int**| Results per page *(Optional)* | [optional]
 **order_by** | **string**| Field to order the results *(Optional)* | [optional]
 **order_direction** | **string**| Direction of ordering *(Optional)* | [optional]
 **_external_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\BlockResults**](../Model/BlockResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

