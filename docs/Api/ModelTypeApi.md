# RadioManager\ModelTypeApi

All URIs are relative to *https://staging.radiomanager.io/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getModelTypeById**](ModelTypeApi.md#getModelTypeById) | **GET** /model_types/{id} | Get modelType by id
[**listModelTypes**](ModelTypeApi.md#listModelTypes) | **GET** /model_types | Get all modelTypes.


# **getModelTypeById**
> \RadioManager\Model\ModelTypeResult getModelTypeById($id, $_external_station_id)

Get modelType by id

Get modelType by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ModelTypeApi();
$id = 789; // int | ID of ModelType **(Required)**
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->getModelTypeById($id, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelTypeApi->getModelTypeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of ModelType **(Required)** |
 **_external_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\ModelTypeResult**](../Model/ModelTypeResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listModelTypes**
> \RadioManager\Model\ModelTypeResults listModelTypes($page, $program_id, $broadcast_id, $item_id, $campaign_id, $presenter_id, $contact_id, $model, $limit, $order_by, $order_direction, $_external_station_id)

Get all modelTypes.

List all modelTypes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ModelTypeApi();
$page = 789; // int | Current page *(Optional)*
$program_id = 789; // int | Search on Program ID *(Optional)*
$broadcast_id = 789; // int | Search on Broadcast ID *(Optional)*
$item_id = 789; // int | Search on Item ID *(Optional)*
$campaign_id = 789; // int | Search on Campaign ID *(Optional)*
$presenter_id = 789; // int | Search on Presenter ID *(Optional)*
$contact_id = 789; // int | Search on Contact ID *(Optional)*
$model = "model_example"; // string | Search Modeltypes for certain Model *(Optional)*
$limit = 789; // int | Results per page *(Optional)*
$order_by = "order_by_example"; // string | Field to order the results *(Optional)*
$order_direction = "order_direction_example"; // string | Direction of ordering *(Optional)*
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->listModelTypes($page, $program_id, $broadcast_id, $item_id, $campaign_id, $presenter_id, $contact_id, $model, $limit, $order_by, $order_direction, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ModelTypeApi->listModelTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page *(Optional)* | [optional]
 **program_id** | **int**| Search on Program ID *(Optional)* | [optional]
 **broadcast_id** | **int**| Search on Broadcast ID *(Optional)* | [optional]
 **item_id** | **int**| Search on Item ID *(Optional)* | [optional]
 **campaign_id** | **int**| Search on Campaign ID *(Optional)* | [optional]
 **presenter_id** | **int**| Search on Presenter ID *(Optional)* | [optional]
 **contact_id** | **int**| Search on Contact ID *(Optional)* | [optional]
 **model** | **string**| Search Modeltypes for certain Model *(Optional)* | [optional]
 **limit** | **int**| Results per page *(Optional)* | [optional]
 **order_by** | **string**| Field to order the results *(Optional)* | [optional]
 **order_direction** | **string**| Direction of ordering *(Optional)* | [optional]
 **_external_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\ModelTypeResults**](../Model/ModelTypeResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

