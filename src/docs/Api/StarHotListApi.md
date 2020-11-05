# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**starHotListGet**](StarHotListApi.md#starHotListGet) | **GET** /star/hot_list/ | 获取抖音星图达人热榜

# **starHotListGet**
> \swagger_client\Model\StarDataStarDataInlineResponse200 starHotListGet($access_token, $hot_list_type)

获取抖音星图达人热榜

* Scope: `star_tops`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$hot_list_type = 56; // int | 达人热榜类型 * `1` - 星图指数榜 * `2` - 涨粉指数榜 * `3` - 性价比指数榜 * `4` - 种草指数榜 * `5` - 精选指数榜 * `6` - 传播指数榜

try {
    $result = $apiInstance->starHotListGet($access_token, $hot_list_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StarHotListApi->starHotListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **hot_list_type** | **int**| 达人热榜类型 * &#x60;1&#x60; - 星图指数榜 * &#x60;2&#x60; - 涨粉指数榜 * &#x60;3&#x60; - 性价比指数榜 * &#x60;4&#x60; - 种草指数榜 * &#x60;5&#x60; - 精选指数榜 * &#x60;6&#x60; - 传播指数榜 |

### Return type

[**\swagger_client\Model\StarDataStarDataInlineResponse200**](../Model/StarDataStarDataInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

