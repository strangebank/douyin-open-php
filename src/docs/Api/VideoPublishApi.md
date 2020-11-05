# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**videoCreatePost**](VideoPublishApi.md#videoCreatePost) | **POST** /video/create/ | 创建抖音视频
[**videoPartCompletePost**](VideoPublishApi.md#videoPartCompletePost) | **POST** /video/part/complete/ | 完成上传
[**videoPartInitPost**](VideoPublishApi.md#videoPartInitPost) | **POST** /video/part/init/ | 初始化上传
[**videoPartUploadPost**](VideoPublishApi.md#videoPartUploadPost) | **POST** /video/part/upload/ | 上传视频分片到文件服务器
[**videoUploadPost**](VideoPublishApi.md#videoUploadPost) | **POST** /video/upload/ | 上传视频到文件服务器

# **videoCreatePost**
> \swagger_client\Model\VideoCreateAwemeCreateInlineResponse2001 videoCreatePost($open_id, $access_token, $body)

创建抖音视频

* Scope: `video.create`

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
$body = new \swagger_client\Model\VideoCreateAwemeCreateBody1(); // \swagger_client\Model\VideoCreateAwemeCreateBody1 | 

try {
    $result = $apiInstance->videoCreatePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoPublishApi->videoCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\VideoCreateAwemeCreateBody1**](../Model/VideoCreateAwemeCreateBody1.md)|  | [optional]

### Return type

[**\swagger_client\Model\VideoCreateAwemeCreateInlineResponse2001**](../Model/VideoCreateAwemeCreateInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoPartCompletePost**
> \swagger_client\Model\VideoCreateAwemeCreateInlineResponse2004 videoPartCompletePost($open_id, $access_token, $upload_id)

完成上传

* Scope: `video.create`

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
    $result = $apiInstance->videoPartCompletePost($open_id, $access_token, $upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoPublishApi->videoPartCompletePost: ', $e->getMessage(), PHP_EOL;
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

[**\swagger_client\Model\VideoCreateAwemeCreateInlineResponse2004**](../Model/VideoCreateAwemeCreateInlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoPartInitPost**
> \swagger_client\Model\VideoCreateAwemeCreateInlineResponse2002 videoPartInitPost($open_id, $access_token)

初始化上传

* Scope: `video.create`

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
    $result = $apiInstance->videoPartInitPost($open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoPublishApi->videoPartInitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |

### Return type

[**\swagger_client\Model\VideoCreateAwemeCreateInlineResponse2002**](../Model/VideoCreateAwemeCreateInlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoPartUploadPost**
> \swagger_client\Model\VideoCreateAwemeCreateInlineResponse2003 videoPartUploadPost($video, $open_id, $access_token, $upload_id, $part_number)

上传视频分片到文件服务器

* Scope: `video.create`

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
    $result = $apiInstance->videoPartUploadPost($video, $open_id, $access_token, $upload_id, $part_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoPublishApi->videoPartUploadPost: ', $e->getMessage(), PHP_EOL;
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

[**\swagger_client\Model\VideoCreateAwemeCreateInlineResponse2003**](../Model/VideoCreateAwemeCreateInlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **videoUploadPost**
> \swagger_client\Model\VideoCreateAwemeCreateInlineResponse200 videoUploadPost($video, $open_id, $access_token)

上传视频到文件服务器

* Scope: `video.create`

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
    $result = $apiInstance->videoUploadPost($video, $open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoPublishApi->videoUploadPost: ', $e->getMessage(), PHP_EOL;
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

[**\swagger_client\Model\VideoCreateAwemeCreateInlineResponse200**](../Model/VideoCreateAwemeCreateInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

