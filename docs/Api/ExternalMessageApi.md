# RadioManager\ExternalMessageApi

All URIs are relative to *https://staging.pluxbox.com/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**queueExternalMessage**](ExternalMessageApi.md#queueExternalMessage) | **POST** /externalmessagequeue | Queue External Message.


# **queueExternalMessage**
> object queueExternalMessage($message)

Queue External Message.

Queue External Message.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\ExternalMessageApi();
$message = new \RadioManager\Model\ExternalMessageQueueData(); // \RadioManager\Model\ExternalMessageQueueData | Data **(Required)**

try {
    $result = $api_instance->queueExternalMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExternalMessageApi->queueExternalMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\RadioManager\Model\ExternalMessageQueueData**](../Model/ExternalMessageQueueData.md)| Data **(Required)** |

### Return type

**object**

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

