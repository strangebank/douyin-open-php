# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**douyinPayAccountTransPost**](DouyinPayAccountTransApi.md#douyinPayAccountTransPost) | **POST** /douyin-pay/account-trans/ | 商户向用户转账

# **douyinPayAccountTransPost**
> \swagger_client\Model\DouyinPayDouyinPayInlineResponse200 douyinPayAccountTransPost($body, $open_id, $access_token)

商户向用户转账

* Scope: `douyin.pay`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \swagger_client\Model\DouyinPayDouyinPayBody(); // \swagger_client\Model\DouyinPayDouyinPayBody | 
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

try {
    $result = $apiInstance->douyinPayAccountTransPost($body, $open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DouyinPayAccountTransApi->douyinPayAccountTransPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\DouyinPayDouyinPayBody**](../Model/DouyinPayDouyinPayBody.md)|  |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |

### Return type

[**\swagger_client\Model\DouyinPayDouyinPayInlineResponse200**](../Model/DouyinPayDouyinPayInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

