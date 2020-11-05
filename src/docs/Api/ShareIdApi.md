# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**shareIdGet**](ShareIdApi.md#shareIdGet) | **GET** /share-id/ | 获取share-id

# **shareIdGet**
> \swagger_client\Model\ShareIdShareIdInlineResponse200 shareIdGet($access_token, $need_callback, $source_style_id, $default_hashtag, $link_param)

获取share-id

* Scope: `aweme.share`

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
$need_callback = true; // bool | 如果需要知道视频分享成功的结果，need_callback设置为true
$source_style_id = "source_style_id_example"; // string | 多来源样式id（暂未开放）
$default_hashtag = "default_hashtag_example"; // string | 追踪分享默认hashtag
$link_param = "link_param_example"; // string | 分享来源url附加参数（暂未开放）

try {
    $result = $apiInstance->shareIdGet($access_token, $need_callback, $source_style_id, $default_hashtag, $link_param);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShareIdApi->shareIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **need_callback** | **bool**| 如果需要知道视频分享成功的结果，need_callback设置为true | [optional]
 **source_style_id** | **string**| 多来源样式id（暂未开放） | [optional]
 **default_hashtag** | **string**| 追踪分享默认hashtag | [optional]
 **link_param** | **string**| 分享来源url附加参数（暂未开放） | [optional]

### Return type

[**\swagger_client\Model\ShareIdShareIdInlineResponse200**](../Model/ShareIdShareIdInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

