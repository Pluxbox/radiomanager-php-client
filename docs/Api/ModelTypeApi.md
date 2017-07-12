# RadioManager\ModelTypeApi

All URIs are relative to *http://radiomanager.pb/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getModelTypeById**](ModelTypeApi.md#getModelTypeById) | **GET** /model_types/{id} | Get modelType by id
[**listModelTypes**](ModelTypeApi.md#listModelTypes) | **GET** /model_types | Get all modelTypes.


# **getModelTypeById**
> \RadioManager\RadioManagerModels\ModelTypeResult getModelTypeById($id, $_station_id)

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
$_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->getModelTypeById($id, $_station_id);
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
 **_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\ModelTypeResult**](../Model/ModelTypeResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listModelTypes**
> \RadioManager\RadioManagerModels\ModelTypeResults listModelTypes($page, $model, $program_id, $broadcast_id, $item_id, $campaign_id, $presenter_id, $contact_id, $_station_id)

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
$model = "model_example"; // string | 
$program_id = 789; // int | Search on Program ID *(Optional)*
$broadcast_id = 789; // int | Search on Broadcast ID *(Optional)*
$item_id = 789; // int | Search on Item ID *(Optional)*
$campaign_id = 789; // int | Search on Campaign ID *(Optional)*
$presenter_id = 789; // int | Search on Presenter ID *(Optional)*
$contact_id = 789; // int | Search on Contact ID *(Optional)*
$_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->listModelTypes($page, $model, $program_id, $broadcast_id, $item_id, $campaign_id, $presenter_id, $contact_id, $_station_id);
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
 **model** | **string**|  | [optional]
 **program_id** | **int**| Search on Program ID *(Optional)* | [optional]
 **broadcast_id** | **int**| Search on Broadcast ID *(Optional)* | [optional]
 **item_id** | **int**| Search on Item ID *(Optional)* | [optional]
 **campaign_id** | **int**| Search on Campaign ID *(Optional)* | [optional]
 **presenter_id** | **int**| Search on Presenter ID *(Optional)* | [optional]
 **contact_id** | **int**| Search on Contact ID *(Optional)* | [optional]
 **_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\RadioManagerModels\ModelTypeResults**](../Model/ModelTypeResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
