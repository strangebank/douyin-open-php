# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**videoCommentListGet**](VideoCommentApi.md#videoCommentListGet) | **GET** /video/comment/list/ | 评论列表
[**videoCommentReplyListGet**](VideoCommentApi.md#videoCommentReplyListGet) | **GET** /video/comment/reply/list/ | 评论回复列表
[**videoCommentReplyPost**](VideoCommentApi.md#videoCommentReplyPost) | **POST** /video/comment/reply/ | 回复视频评论
[**videoCommentTopPost**](VideoCommentApi.md#videoCommentTopPost) | **POST** /video/comment/top/ | 置顶视频评论(企业号)

# **videoCommentListGet**
> \swagger_client\Model\VideoCommentVideoCommentInlineResponse200 videoCommentListGet($open_id, $access_token, $count, $item_id, $cursor)

评论列表

* Scope: `video.comment`

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
$count = 56; // int | 每页数量
$item_id = "item_id_example"; // string | 视频id
$cursor = 56; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。

try {
    $result = $apiInstance->videoCommentListGet($open_id, $access_token, $count, $item_id, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoCommentApi->videoCommentListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **count** | **int**| 每页数量 |
 **item_id** | **string**| 视频id |
 **cursor** | **int**| 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 | [optional]

### Return type

[**\swagger_client\Model\VideoCommentVideoCommentInlineResponse200**](../Model/VideoCommentVideoCommentInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoCommentReplyListGet**
> \swagger_client\Model\VideoCommentVideoCommentInlineResponse200 videoCommentReplyListGet($open_id, $access_token, $count, $item_id, $comment_id, $cursor)

评论回复列表

* Scope: `video.comment`

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
$count = 56; // int | 每页数量
$item_id = "item_id_example"; // string | 视频id
$comment_id = "comment_id_example"; // string | 评论id
$cursor = 56; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。

try {
    $result = $apiInstance->videoCommentReplyListGet($open_id, $access_token, $count, $item_id, $comment_id, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoCommentApi->videoCommentReplyListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **count** | **int**| 每页数量 |
 **item_id** | **string**| 视频id |
 **comment_id** | **string**| 评论id |
 **cursor** | **int**| 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 | [optional]

### Return type

[**\swagger_client\Model\VideoCommentVideoCommentInlineResponse200**](../Model/VideoCommentVideoCommentInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoCommentReplyPost**
> \swagger_client\Model\VideoCommentVideoCommentCommonResponse videoCommentReplyPost($open_id, $access_token, $body)

回复视频评论

* Scope: `video.comment`

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
$body = new \swagger_client\Model\VideoCommentVideoCommentBody(); // \swagger_client\Model\VideoCommentVideoCommentBody | 

try {
    $result = $apiInstance->videoCommentReplyPost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoCommentApi->videoCommentReplyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\VideoCommentVideoCommentBody**](../Model/VideoCommentVideoCommentBody.md)|  | [optional]

### Return type

[**\swagger_client\Model\VideoCommentVideoCommentCommonResponse**](../Model/VideoCommentVideoCommentCommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoCommentTopPost**
> \swagger_client\Model\VideoCommentVideoCommentCommonResponse videoCommentTopPost($open_id, $access_token, $body)

置顶视频评论(企业号)

* Scope: `video.comment`

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
$body = new \swagger_client\Model\VideoCommentVideoCommentBody1(); // \swagger_client\Model\VideoCommentVideoCommentBody1 | 

try {
    $result = $apiInstance->videoCommentTopPost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoCommentApi->videoCommentTopPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\VideoCommentVideoCommentBody1**](../Model/VideoCommentVideoCommentBody1.md)|  | [optional]

### Return type

[**\swagger_client\Model\VideoCommentVideoCommentCommonResponse**](../Model/VideoCommentVideoCommentCommonResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

