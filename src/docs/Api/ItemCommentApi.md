# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**itemCommentListGet**](ItemCommentApi.md#itemCommentListGet) | **GET** /item/comment/list/ | 评论列表
[**itemCommentReplyListGet**](ItemCommentApi.md#itemCommentReplyListGet) | **GET** /item/comment/reply/list/ | 评论回复列表
[**itemCommentReplyPost**](ItemCommentApi.md#itemCommentReplyPost) | **POST** /item/comment/reply/ | 回复视频评论

# **itemCommentListGet**
> \swagger_client\Model\ItemCommentItemCommentInlineResponse200 itemCommentListGet($open_id, $access_token, $count, $item_id, $cursor)

评论列表

* Scope: `item.comment`

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
    $result = $apiInstance->itemCommentListGet($open_id, $access_token, $count, $item_id, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCommentApi->itemCommentListGet: ', $e->getMessage(), PHP_EOL;
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

[**\swagger_client\Model\ItemCommentItemCommentInlineResponse200**](../Model/ItemCommentItemCommentInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemCommentReplyListGet**
> \swagger_client\Model\ItemCommentItemCommentInlineResponse200 itemCommentReplyListGet($open_id, $access_token, $count, $item_id, $comment_id, $cursor)

评论回复列表

* Scope: `item.comment`

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
    $result = $apiInstance->itemCommentReplyListGet($open_id, $access_token, $count, $item_id, $comment_id, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCommentApi->itemCommentReplyListGet: ', $e->getMessage(), PHP_EOL;
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

[**\swagger_client\Model\ItemCommentItemCommentInlineResponse200**](../Model/ItemCommentItemCommentInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **itemCommentReplyPost**
> \swagger_client\Model\ItemCommentItemCommentInlineResponse2001 itemCommentReplyPost($open_id, $access_token, $body)

回复视频评论

* Scope: `item.comment`

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
$body = new \swagger_client\Model\ItemCommentItemCommentBody(); // \swagger_client\Model\ItemCommentItemCommentBody | 

try {
    $result = $apiInstance->itemCommentReplyPost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ItemCommentApi->itemCommentReplyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\ItemCommentItemCommentBody**](../Model/ItemCommentItemCommentBody.md)|  | [optional]

### Return type

[**\swagger_client\Model\ItemCommentItemCommentInlineResponse2001**](../Model/ItemCommentItemCommentInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

