# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**toutiaoVideoCreatePost**](ToutiaoVideoPublishApi.md#toutiaoVideoCreatePost) | **POST** /toutiao/video/create/ | 创建头条视频
[**toutiaoVideoPartCompletePost**](ToutiaoVideoPublishApi.md#toutiaoVideoPartCompletePost) | **POST** /toutiao/video/part/complete/ | 完成上传
[**toutiaoVideoPartInitPost**](ToutiaoVideoPublishApi.md#toutiaoVideoPartInitPost) | **POST** /toutiao/video/part/init/ | 初始化上传
[**toutiaoVideoPartUploadPost**](ToutiaoVideoPublishApi.md#toutiaoVideoPartUploadPost) | **POST** /toutiao/video/part/upload/ | 上传视频分片到文件服务器
[**toutiaoVideoUploadPost**](ToutiaoVideoPublishApi.md#toutiaoVideoUploadPost) | **POST** /toutiao/video/upload/ | 上传视频到文件服务器

# **toutiaoVideoCreatePost**
> \swagger_client\Model\ToutiaoVideoCreateCreateInlineResponse2001 toutiaoVideoCreatePost($open_id, $access_token, $body)

创建头条视频

* Scope: `toutiao.video.create`

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
$body = new \swagger_client\Model\ToutiaoVideoCreateCreateBody1(); // \swagger_client\Model\ToutiaoVideoCreateCreateBody1 | 

try {
    $result = $apiInstance->toutiaoVideoCreatePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToutiaoVideoPublishApi->toutiaoVideoCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\ToutiaoVideoCreateCreateBody1**](../Model/ToutiaoVideoCreateCreateBody1.md)|  | [optional]

### Return type

[**\swagger_client\Model\ToutiaoVideoCreateCreateInlineResponse2001**](../Model/ToutiaoVideoCreateCreateInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **toutiaoVideoPartCompletePost**
> \swagger_client\Model\ToutiaoVideoCreateCreateInlineResponse2004 toutiaoVideoPartCompletePost($open_id, $access_token, $upload_id)

完成上传

* Scope: `toutiao.video.create`

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
    $result = $apiInstance->toutiaoVideoPartCompletePost($open_id, $access_token, $upload_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToutiaoVideoPublishApi->toutiaoVideoPartCompletePost: ', $e->getMessage(), PHP_EOL;
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

[**\swagger_client\Model\ToutiaoVideoCreateCreateInlineResponse2004**](../Model/ToutiaoVideoCreateCreateInlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **toutiaoVideoPartInitPost**
> \swagger_client\Model\ToutiaoVideoCreateCreateInlineResponse2002 toutiaoVideoPartInitPost($open_id, $access_token)

初始化上传

* Scope: `toutiao.video.create`

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
    $result = $apiInstance->toutiaoVideoPartInitPost($open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToutiaoVideoPublishApi->toutiaoVideoPartInitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |

### Return type

[**\swagger_client\Model\ToutiaoVideoCreateCreateInlineResponse2002**](../Model/ToutiaoVideoCreateCreateInlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **toutiaoVideoPartUploadPost**
> \swagger_client\Model\ToutiaoVideoCreateCreateInlineResponse2003 toutiaoVideoPartUploadPost($video, $open_id, $access_token, $upload_id, $part_number)

上传视频分片到文件服务器

* Scope: `toutiao.video.create`

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
    $result = $apiInstance->toutiaoVideoPartUploadPost($video, $open_id, $access_token, $upload_id, $part_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToutiaoVideoPublishApi->toutiaoVideoPartUploadPost: ', $e->getMessage(), PHP_EOL;
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

[**\swagger_client\Model\ToutiaoVideoCreateCreateInlineResponse2003**](../Model/ToutiaoVideoCreateCreateInlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **toutiaoVideoUploadPost**
> \swagger_client\Model\ToutiaoVideoCreateCreateInlineResponse200 toutiaoVideoUploadPost($video, $open_id, $access_token)

上传视频到文件服务器

* Scope: `toutiao.video.create`

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
    $result = $apiInstance->toutiaoVideoUploadPost($video, $open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToutiaoVideoPublishApi->toutiaoVideoUploadPost: ', $e->getMessage(), PHP_EOL;
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

[**\swagger_client\Model\ToutiaoVideoCreateCreateInlineResponse200**](../Model/ToutiaoVideoCreateCreateInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

