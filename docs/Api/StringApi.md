# RadioManager\StringApi

All URIs are relative to *https://staging.radiomanager.io/api/v2*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStringsByName**](StringApi.md#getStringsByName) | **GET** /strings/{name} | Get Strings (formatted)


# **getStringsByName**
> \RadioManager\Model\TextString getStringsByName($name, $full_model)

Get Strings (formatted)

Get Strings (formatted)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
RadioManager\Configuration::getDefaultConfiguration()->setApiKey('api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// RadioManager\Configuration::getDefaultConfiguration()->setApiKeyPrefix('api-key', 'Bearer');

$api_instance = new RadioManager\Api\StringApi();
$name = "name_example"; // string | Name of Strings **(Required)**
$full_model = true; // bool | Full model or content only **(Required)**

try {
    $result = $api_instance->getStringsByName($name, $full_model);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StringApi->getStringsByName: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of Strings **(Required)** |
 **full_model** | **bool**| Full model or content only **(Required)** | [default to true]

### Return type

[**\RadioManager\Model\TextString**](../Model/TextString.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

