# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**starAuthorScoreGet**](StarAuthorScoreApi.md#starAuthorScoreGet) | **GET** /star/author_score/ | 获取抖音星图达人指数
[**starAuthorScoreV2Get**](StarAuthorScoreApi.md#starAuthorScoreV2Get) | **GET** /star/author_score_v2/ | 获取抖音星图达人指数数据V2

# **starAuthorScoreGet**
> \swagger_client\Model\StarAuthorStarAuthorInlineResponse200 starAuthorScoreGet($open_id, $access_token)

获取抖音星图达人指数

* Scope: `star_top_score_display`

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
    $result = $apiInstance->starAuthorScoreGet($open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StarAuthorScoreApi->starAuthorScoreGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |

### Return type

[**\swagger_client\Model\StarAuthorStarAuthorInlineResponse200**](../Model/StarAuthorStarAuthorInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **starAuthorScoreV2Get**
> \swagger_client\Model\StarAuthorStarAuthorInlineResponse2001 starAuthorScoreV2Get($access_token, $unique_id)

获取抖音星图达人指数数据V2

* Scope: `star_author_score_display`

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
$unique_id = "unique_id_example"; // string | 达人抖音号

try {
    $result = $apiInstance->starAuthorScoreV2Get($access_token, $unique_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StarAuthorScoreApi->starAuthorScoreV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **unique_id** | **string**| 达人抖音号 |

### Return type

[**\swagger_client\Model\StarAuthorStarAuthorInlineResponse2001**](../Model/StarAuthorStarAuthorInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

