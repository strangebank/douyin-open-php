# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**imageCreatePost**](ImageApi.md#imageCreatePost) | **POST** /image/create/ | 发布图片
[**imageUploadPost**](ImageApi.md#imageUploadPost) | **POST** /image/upload/ | 上传图片到文件服务器

# **imageCreatePost**
> \swagger_client\Model\ImageCreateImageCreateInlineResponse2001 imageCreatePost($open_id, $access_token, $body)

发布图片

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
$body = new \swagger_client\Model\ImageCreateImageCreateBody1(); // \swagger_client\Model\ImageCreateImageCreateBody1 | 

try {
    $result = $apiInstance->imageCreatePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\ImageCreateImageCreateBody1**](../Model/ImageCreateImageCreateBody1.md)|  | [optional]

### Return type

[**\swagger_client\Model\ImageCreateImageCreateInlineResponse2001**](../Model/ImageCreateImageCreateInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageUploadPost**
> \swagger_client\Model\ImageCreateImageCreateInlineResponse200 imageUploadPost($image, $open_id, $access_token)

上传图片到文件服务器

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
$image = "image_example"; // string | 
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

try {
    $result = $apiInstance->imageUploadPost($image, $open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImageApi->imageUploadPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **image** | **string****string**|  |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |

### Return type

[**\swagger_client\Model\ImageCreateImageCreateInlineResponse200**](../Model/ImageCreateImageCreateInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

