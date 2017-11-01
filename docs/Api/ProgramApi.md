# RadioManager\ProgramApi

All URIs are relative to *https://staging.radiomanager.io/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createProgram**](ProgramApi.md#createProgram) | **POST** /programs | Create program.
[**deleteProgramById**](ProgramApi.md#deleteProgramById) | **DELETE** /programs/{id} | Delete program by id
[**getProgramById**](ProgramApi.md#getProgramById) | **GET** /programs/{id} | Get program by id
[**listPrograms**](ProgramApi.md#listPrograms) | **GET** /programs | Get all programs.
[**updateProgramByID**](ProgramApi.md#updateProgramByID) | **PATCH** /programs/{id} | Update program by id


# **createProgram**
> \RadioManager\Model\PostSuccess createProgram($data)

Create program.

Create program.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ProgramApi();
$data = new \RadioManager\Model\ProgramDataInput(); // \RadioManager\Model\ProgramDataInput | Data **(Required)**

try {
    $result = $api_instance->createProgram($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->createProgram: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\RadioManager\Model\ProgramDataInput**](../Model/ProgramDataInput.md)| Data **(Required)** |

### Return type

[**\RadioManager\Model\PostSuccess**](../Model/PostSuccess.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramById**
> \RadioManager\Model\Success deleteProgramById($id)

Delete program by id

Delete program by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ProgramApi();
$id = 789; // int | ID of program **(Required)**

try {
    $result = $api_instance->deleteProgramById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->deleteProgramById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of program **(Required)** |

### Return type

[**\RadioManager\Model\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramById**
> \RadioManager\Model\ProgramResult getProgramById($id, $_external_station_id)

Get program by id

Get program by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ProgramApi();
$id = 789; // int | ID of Program **(Required)**
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->getProgramById($id, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->getProgramById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Program **(Required)** |
 **_external_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\ProgramResult**](../Model/ProgramResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPrograms**
> \RadioManager\Model\ProgramResults listPrograms($page, $broadcast_id, $model_type_id, $tag_id, $presenter_id, $genre_id, $block_id, $item_id, $limit, $order_by, $order_direction, $_external_station_id)

Get all programs.

List all programs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ProgramApi();
$page = 789; // int | Current page *(Optional)*
$broadcast_id = 789; // int | Search on Broadcast ID *(Optional)* `(Relation)`
$model_type_id = 789; // int | Search on ModelType ID *(Optional)* `(Relation)`
$tag_id = 789; // int | Search on Tag ID *(Optional)* `(Relation)`
$presenter_id = 789; // int | Search on Presenter ID *(Optional)* `(Relation)`
$genre_id = 789; // int | Search on Genre ID *(Optional)*
$block_id = 789; // int | Search on Block ID *(Optional)* `(Relation)`
$item_id = 789; // int | Search on Item ID *(Optional)* `(Relation)`
$limit = 789; // int | Results per page *(Optional)*
$order_by = "order_by_example"; // string | Field to order the results *(Optional)*
$order_direction = "order_direction_example"; // string | Direction of ordering *(Optional)*
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->listPrograms($page, $broadcast_id, $model_type_id, $tag_id, $presenter_id, $genre_id, $block_id, $item_id, $limit, $order_by, $order_direction, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->listPrograms: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page *(Optional)* | [optional]
 **broadcast_id** | **int**| Search on Broadcast ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **model_type_id** | **int**| Search on ModelType ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **tag_id** | **int**| Search on Tag ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **presenter_id** | **int**| Search on Presenter ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **genre_id** | **int**| Search on Genre ID *(Optional)* | [optional]
 **block_id** | **int**| Search on Block ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **item_id** | **int**| Search on Item ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **limit** | **int**| Results per page *(Optional)* | [optional]
 **order_by** | **string**| Field to order the results *(Optional)* | [optional]
 **order_direction** | **string**| Direction of ordering *(Optional)* | [optional]
 **_external_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\ProgramResults**](../Model/ProgramResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramByID**
> \RadioManager\Model\Success updateProgramByID($id, $data)

Update program by id

Update program by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ProgramApi();
$id = 789; // int | ID of Program **(Required)**
$data = new \RadioManager\Model\ProgramDataInput(); // \RadioManager\Model\ProgramDataInput | Data *(Optional)*

try {
    $result = $api_instance->updateProgramByID($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramApi->updateProgramByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Program **(Required)** |
 **data** | [**\RadioManager\Model\ProgramDataInput**](../Model/ProgramDataInput.md)| Data *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

