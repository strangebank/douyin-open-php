# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**xiguaVideoCreatePost**](XiguaVideoPublishApi.md#xiguaVideoCreatePost) | **POST** /xigua/video/create/ | 创建西瓜视频
[**xiguaVideoPartCompletePost**](XiguaVideoPublishApi.md#xiguaVideoPartCompletePost) | **POST** /xigua/video/part/complete/ | 完成上传
[**xiguaVideoPartInitPost**](XiguaVideoPublishApi.md#xiguaVideoPartInitPost) | **POST** /xigua/video/part/init/ | 初始化上传
[**xiguaVideoPartUploadPost**](XiguaVideoPublishApi.md#xiguaVideoPartUploadPost) | **POST** /xigua/video/part/upload/ | 上传视频分片到文件服务器
[**xiguaVideoUploadPost**](XiguaVideoPublishApi.md#xiguaVideoUploadPost) | **POST** /xigua/video/upload/ | 上传视频到文件服务器

# **xiguaVideoCreatePost**
> \swagger_client\Model\XiguaVideoCreateInlineResponse2001 xiguaVideoCreatePost($open_id, $access_token, $body)

创建西瓜视频

* Scope: `xigua.video.create`

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
$body = new \swagger_client\Model\XiguaVideoCreateBody1(); // \swagger_client\Model\XiguaVideoCreateBody1 | 

try {
    $result = $apiInstance->xiguaVideoCreatePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XiguaVideoPublishApi->xiguaVideoCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\XiguaVideoCreateBody1**](../Model/XiguaVideoCreateBody1.md)|  | [optional]

### Return type

[**\swagger_client\Model\XiguaVideoCreateInlineResponse2001**](../Model/XiguaVideoCreateInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **xiguaVideoPartCompletePost**
> \swagger_client\Model\XiguaVideoCreateInlineResponse2004 xiguaVideoPartCompletePost($open_id, $access_token, $upload_id)

完成上传

* Scope: `xigua.video.create`

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
$upload_id = "upload_id_example"; // string | 分片上传的标记。有限时间为2小时。

try {
    $result = $apiInstance->xiguaVideoPartCompletePost($open_id, $access_token, $upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XiguaVideoPublishApi->xiguaVideoPartCompletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **upload_id** | **string**| 分片上传的标记。有限时间为2小时。 |

### Return type

[**\swagger_client\Model\XiguaVideoCreateInlineResponse2004**](../Model/XiguaVideoCreateInlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **xiguaVideoPartInitPost**
> \swagger_client\Model\XiguaVideoCreateInlineResponse2002 xiguaVideoPartInitPost($open_id, $access_token)

初始化上传

* Scope: `xigua.video.create`

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

try {
    $result = $apiInstance->xiguaVideoPartInitPost($open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XiguaVideoPublishApi->xiguaVideoPartInitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |

### Return type

[**\swagger_client\Model\XiguaVideoCreateInlineResponse2002**](../Model/XiguaVideoCreateInlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **xiguaVideoPartUploadPost**
> \swagger_client\Model\XiguaVideoCreateInlineResponse2003 xiguaVideoPartUploadPost($video, $open_id, $access_token, $upload_id, $part_number)

上传视频分片到文件服务器

* Scope: `xigua.video.create`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$video = "video_example"; // string | 
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$upload_id = "upload_id_example"; // string | 分片上传的标记。有限时间为2小时。
$part_number = 56; // int | 第几个分片，从1开始

try {
    $result = $apiInstance->xiguaVideoPartUploadPost($video, $open_id, $access_token, $upload_id, $part_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XiguaVideoPublishApi->xiguaVideoPartUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video** | **string****string**|  |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **upload_id** | **string**| 分片上传的标记。有限时间为2小时。 |
 **part_number** | **int**| 第几个分片，从1开始 |

### Return type

[**\swagger_client\Model\XiguaVideoCreateInlineResponse2003**](../Model/XiguaVideoCreateInlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **xiguaVideoUploadPost**
> \swagger_client\Model\XiguaVideoCreateInlineResponse200 xiguaVideoUploadPost($video, $open_id, $access_token)

上传视频到文件服务器

* Scope: `xigua.video.create`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$video = "video_example"; // string | 
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

try {
    $result = $apiInstance->xiguaVideoUploadPost($video, $open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling XiguaVideoPublishApi->xiguaVideoUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **video** | **string****string**|  |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |

### Return type

[**\swagger_client\Model\XiguaVideoCreateInlineResponse200**](../Model/XiguaVideoCreateInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

