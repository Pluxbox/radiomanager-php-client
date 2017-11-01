# RadioManager\VisualSlideApi

All URIs are relative to *https://staging.radiomanager.io/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getVisualSlide**](VisualSlideApi.md#getVisualSlide) | **GET** /visual | Get Visual Slide Image as Base64


# **getVisualSlide**
> \RadioManager\Model\VisualResult getVisualSlide()

Get Visual Slide Image as Base64

Get Visual Slide Image as Base64

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\VisualSlideApi();

try {
    $result = $api_instance->getVisualSlide();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VisualSlideApi->getVisualSlide: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\RadioManager\Model\VisualResult**](../Model/VisualResult.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

