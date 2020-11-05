# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**videoSearchCommentListGet**](VideoSearchCommentApi.md#videoSearchCommentListGet) | **GET** /video/search/comment/list/ | 评论列表
[**videoSearchCommentReplyListGet**](VideoSearchCommentApi.md#videoSearchCommentReplyListGet) | **GET** /video/search/comment/reply/list/ | 评论回复列表
[**videoSearchCommentReplyPost**](VideoSearchCommentApi.md#videoSearchCommentReplyPost) | **POST** /video/search/comment/reply/ | 回复视频评论

# **videoSearchCommentListGet**
> \swagger_client\Model\VideoSearchCommentVideoSearchCommentInlineResponse200 videoSearchCommentListGet($access_token, $count, $sec_item_id, $cursor)

评论列表

* Scope: `video.search.comment`

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
$count = 56; // int | 每页数量
$sec_item_id = "sec_item_id_example"; // string | 视频搜索接口返回的加密的视频id
$cursor = 56; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。

try {
    $result = $apiInstance->videoSearchCommentListGet($access_token, $count, $sec_item_id, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoSearchCommentApi->videoSearchCommentListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **count** | **int**| 每页数量 |
 **sec_item_id** | **string**| 视频搜索接口返回的加密的视频id |
 **cursor** | **int**| 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 | [optional]

### Return type

[**\swagger_client\Model\VideoSearchCommentVideoSearchCommentInlineResponse200**](../Model/VideoSearchCommentVideoSearchCommentInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoSearchCommentReplyListGet**
> \swagger_client\Model\VideoSearchCommentVideoSearchCommentInlineResponse200 videoSearchCommentReplyListGet($access_token, $count, $sec_item_id, $comment_id, $cursor)

评论回复列表

* Scope: `video.search.comment`

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
$count = 56; // int | 每页数量
$sec_item_id = "sec_item_id_example"; // string | 视频搜索接口返回的加密的视频id
$comment_id = "comment_id_example"; // string | 评论id
$cursor = 56; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。

try {
    $result = $apiInstance->videoSearchCommentReplyListGet($access_token, $count, $sec_item_id, $comment_id, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoSearchCommentApi->videoSearchCommentReplyListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **count** | **int**| 每页数量 |
 **sec_item_id** | **string**| 视频搜索接口返回的加密的视频id |
 **comment_id** | **string**| 评论id |
 **cursor** | **int**| 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 | [optional]

### Return type

[**\swagger_client\Model\VideoSearchCommentVideoSearchCommentInlineResponse200**](../Model/VideoSearchCommentVideoSearchCommentInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoSearchCommentReplyPost**
> \swagger_client\Model\VideoSearchCommentVideoSearchCommentInlineResponse2001 videoSearchCommentReplyPost($open_id, $access_token, $body)

回复视频评论

* Scope: `video.search.comment`

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
$body = new \swagger_client\Model\VideoSearchCommentVideoSearchCommentBody(); // \swagger_client\Model\VideoSearchCommentVideoSearchCommentBody | 

try {
    $result = $apiInstance->videoSearchCommentReplyPost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoSearchCommentApi->videoSearchCommentReplyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\VideoSearchCommentVideoSearchCommentBody**](../Model/VideoSearchCommentVideoSearchCommentBody.md)|  | [optional]

### Return type

[**\swagger_client\Model\VideoSearchCommentVideoSearchCommentInlineResponse2001**](../Model/VideoSearchCommentVideoSearchCommentInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

