# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**videoDeletePost**](VideoDeleteApi.md#videoDeletePost) | **POST** /video/delete/ | 删除授权用户发布的视频

# **videoDeletePost**
> \swagger_client\Model\VideoDeleteAwemeDeleteInlineResponse200 videoDeletePost($open_id, $access_token, $body)

删除授权用户发布的视频

* Scope: `video.delete`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$body = new \swagger_client\Model\VideoDeleteAwemeDeleteBody(); // \swagger_client\Model\VideoDeleteAwemeDeleteBody | 

try {
    $result = $apiInstance->videoDeletePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoDeleteApi->videoDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\VideoDeleteAwemeDeleteBody**](../Model/VideoDeleteAwemeDeleteBody.md)|  | [optional]

### Return type

[**\swagger_client\Model\VideoDeleteAwemeDeleteInlineResponse200**](../Model/VideoDeleteAwemeDeleteInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

