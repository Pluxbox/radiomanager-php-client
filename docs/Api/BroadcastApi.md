# RadioManager\BroadcastApi

All URIs are relative to *https://staging.radiomanager.io/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createBroadcast**](BroadcastApi.md#createBroadcast) | **POST** /broadcasts | Create broadcast.
[**deleteBroadcastById**](BroadcastApi.md#deleteBroadcastById) | **DELETE** /broadcasts/{id} | Delete broadcast by id
[**getBroadcastById**](BroadcastApi.md#getBroadcastById) | **GET** /broadcasts/{id} | Get broadcast by id
[**getCurrentBroadcast**](BroadcastApi.md#getCurrentBroadcast) | **GET** /broadcasts/current | Get current Broadcast
[**getDailyEPG**](BroadcastApi.md#getDailyEPG) | **GET** /broadcasts/epg/daily | Get daily EPG
[**getEPGByDate**](BroadcastApi.md#getEPGByDate) | **GET** /broadcasts/epg | Get EPG by date
[**getNextBroadcast**](BroadcastApi.md#getNextBroadcast) | **GET** /broadcasts/next | Get next Broadcast
[**getWeeklyEPG**](BroadcastApi.md#getWeeklyEPG) | **GET** /broadcasts/epg/weekly | Get weekly EPG
[**listBroadcasts**](BroadcastApi.md#listBroadcasts) | **GET** /broadcasts | Get all broadcasts.
[**printBroadcastById**](BroadcastApi.md#printBroadcastById) | **GET** /broadcasts/print/{id} | Print Broadcast by id
[**updateBroadcastByID**](BroadcastApi.md#updateBroadcastByID) | **PATCH** /broadcasts/{id} | Update broadcast by id


# **createBroadcast**
> \RadioManager\Model\PostSuccess createBroadcast($data)

Create broadcast.

Create broadcast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$data = new \RadioManager\Model\BroadcastDataInput(); // \RadioManager\Model\BroadcastDataInput | Data **(Required)**

try {
    $result = $api_instance->createBroadcast($data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->createBroadcast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **data** | [**\RadioManager\Model\BroadcastDataInput**](../Model/BroadcastDataInput.md)| Data **(Required)** |

### Return type

[**\RadioManager\Model\PostSuccess**](../Model/PostSuccess.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBroadcastById**
> \RadioManager\Model\Success deleteBroadcastById($id)

Delete broadcast by id

Delete broadcast by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$id = 789; // int | ID of Broadcast **(Required)**

try {
    $result = $api_instance->deleteBroadcastById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->deleteBroadcastById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Broadcast **(Required)** |

### Return type

[**\RadioManager\Model\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBroadcastById**
> \RadioManager\Model\BroadcastResult getBroadcastById($id, $_external_station_id)

Get broadcast by id

Get broadcast by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$id = 789; // int | ID of Broadcast **(Required)**
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->getBroadcastById($id, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->getBroadcastById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Broadcast **(Required)** |
 **_external_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\BroadcastResult**](../Model/BroadcastResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCurrentBroadcast**
> \RadioManager\Model\BroadcastResult getCurrentBroadcast($withunpublished)

Get current Broadcast

Get current Broadcast

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$withunpublished = true; // bool | Show Unpublished *(Optional)*

try {
    $result = $api_instance->getCurrentBroadcast($withunpublished);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->getCurrentBroadcast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **withunpublished** | **bool**| Show Unpublished *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\BroadcastResult**](../Model/BroadcastResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDailyEPG**
> \RadioManager\Model\EPGResults getDailyEPG($date, $withunpublished)

Get daily EPG

Get current Broadcast

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date *(Optional)*
$withunpublished = true; // bool | Show Unpublished *(Optional)*

try {
    $result = $api_instance->getDailyEPG($date, $withunpublished);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->getDailyEPG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Date *(Optional)* | [optional]
 **withunpublished** | **bool**| Show Unpublished *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\EPGResults**](../Model/EPGResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEPGByDate**
> \RadioManager\Model\EPGResults getEPGByDate($date, $withunpublished)

Get EPG by date

Get EPG by date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Date *(Optional)*
$withunpublished = true; // bool | Show Unpublished *(Optional)*

try {
    $result = $api_instance->getEPGByDate($date, $withunpublished);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->getEPGByDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **\DateTime**| Date *(Optional)* | [optional]
 **withunpublished** | **bool**| Show Unpublished *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\EPGResults**](../Model/EPGResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNextBroadcast**
> \RadioManager\Model\BroadcastResult getNextBroadcast($withunpublished)

Get next Broadcast

Get next Broadcast

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$withunpublished = true; // bool | Show Unpublished *(Optional)*

try {
    $result = $api_instance->getNextBroadcast($withunpublished);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->getNextBroadcast: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **withunpublished** | **bool**| Show Unpublished *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\BroadcastResult**](../Model/BroadcastResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWeeklyEPG**
> \RadioManager\Model\EPGResults getWeeklyEPG($date, $withunpublished)

Get weekly EPG

Get weekly EPG

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$date = "date_example"; // string | Date *(Optional)*
$withunpublished = true; // bool | Show Unpublished *(Optional)*

try {
    $result = $api_instance->getWeeklyEPG($date, $withunpublished);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->getWeeklyEPG: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date** | **string**| Date *(Optional)* | [optional]
 **withunpublished** | **bool**| Show Unpublished *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\EPGResults**](../Model/EPGResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listBroadcasts**
> \RadioManager\Model\BroadcastResults listBroadcasts($page, $program_id, $block_id, $model_type_id, $tag_id, $presenter_id, $genre_id, $item_id, $start_min, $start_max, $limit, $order_by, $order_direction, $_external_station_id)

Get all broadcasts.

List all broadcasts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$page = 1; // int | Current page *(Optional)*
$program_id = 789; // int | Search on Program ID *(Optional)* `(Relation)`
$block_id = 789; // int | Search on Block ID *(Optional)* `(Relation)`
$model_type_id = 789; // int | Search on ModelType ID *(Optional)* `(Relation)`
$tag_id = 789; // int | Search on Tag ID *(Optional)* `(Relation)`
$presenter_id = 789; // int | Search on Presenter ID *(Optional)* `(Relation)`
$genre_id = 789; // int | Search on Genre ID *(Optional)* `(Relation)`
$item_id = 789; // int | Search on Item ID *(Optional)* `(Relation)`
$start_min = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Minimum start date *(Optional)*
$start_max = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Maximum start date *(Optional)*
$limit = 789; // int | Results per page *(Optional)*
$order_by = "order_by_example"; // string | Field to order the results *(Optional)*
$order_direction = "order_direction_example"; // string | Direction of ordering *(Optional)*
$_external_station_id = 789; // int | Query on a different (content providing) station *(Optional)*

try {
    $result = $api_instance->listBroadcasts($page, $program_id, $block_id, $model_type_id, $tag_id, $presenter_id, $genre_id, $item_id, $start_min, $start_max, $limit, $order_by, $order_direction, $_external_station_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->listBroadcasts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| Current page *(Optional)* | [optional] [default to 1]
 **program_id** | **int**| Search on Program ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **block_id** | **int**| Search on Block ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **model_type_id** | **int**| Search on ModelType ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **tag_id** | **int**| Search on Tag ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **presenter_id** | **int**| Search on Presenter ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **genre_id** | **int**| Search on Genre ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **item_id** | **int**| Search on Item ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **start_min** | **\DateTime**| Minimum start date *(Optional)* | [optional]
 **start_max** | **\DateTime**| Maximum start date *(Optional)* | [optional]
 **limit** | **int**| Results per page *(Optional)* | [optional]
 **order_by** | **string**| Field to order the results *(Optional)* | [optional]
 **order_direction** | **string**| Direction of ordering *(Optional)* | [optional]
 **_external_station_id** | **int**| Query on a different (content providing) station *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\BroadcastResults**](../Model/BroadcastResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **printBroadcastById**
> \RadioManager\Model\EPGResults printBroadcastById($id, $program_id, $presenter_id, $tag_id)

Print Broadcast by id

Print Broadcast by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$id = 789; // int | ID of Broadcast **(Required)**
$program_id = 789; // int | Search on Program ID *(Optional)* `(Relation)`
$presenter_id = 789; // int | Search on Presenter ID *(Optional)* `(Relation)`
$tag_id = 789; // int | Search on Tag ID *(Optional)* `(Relation)`

try {
    $result = $api_instance->printBroadcastById($id, $program_id, $presenter_id, $tag_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->printBroadcastById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Broadcast **(Required)** |
 **program_id** | **int**| Search on Program ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **presenter_id** | **int**| Search on Presenter ID *(Optional)* &#x60;(Relation)&#x60; | [optional]
 **tag_id** | **int**| Search on Tag ID *(Optional)* &#x60;(Relation)&#x60; | [optional]

### Return type

[**\RadioManager\Model\EPGResults**](../Model/EPGResults.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBroadcastByID**
> \RadioManager\Model\Success updateBroadcastByID($id, $data)

Update broadcast by id

Update broadcast by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\BroadcastApi();
$id = 789; // int | ID of Broadcast **(Required)**
$data = new \RadioManager\Model\BroadcastDataInput(); // \RadioManager\Model\BroadcastDataInput | Data *(Optional)*

try {
    $result = $api_instance->updateBroadcastByID($id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BroadcastApi->updateBroadcastByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of Broadcast **(Required)** |
 **data** | [**\RadioManager\Model\BroadcastDataInput**](../Model/BroadcastDataInput.md)| Data *(Optional)* | [optional]

### Return type

[**\RadioManager\Model\Success**](../Model/Success.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

