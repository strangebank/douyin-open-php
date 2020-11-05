# swagger_client{{classname}}

All URIs are relative to *https://aweme.snssdk.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthAuthorizeV2Get**](AuthorizeV2Api.md#oauthAuthorizeV2Get) | **GET** /oauth/authorize/v2/ | 获取授权码(code)

# **oauthAuthorizeV2Get**
> oauthAuthorizeV2Get($client_key, $response_type, $scope, $redirect_uri, $state)

获取授权码(code)

注意该URL要在抖音端内的h5页面请求，这样才能带上抖音的登录态来获取用户的OpenId。 一旦clientKey有静默授权权限login_id，接口会以重定向的方式跳转到redirect_uri，并返回code。 拿到code之后再去调用https://open.douyin.com/oauth/access_token/。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_key = "client_key_example"; // string | 应用唯一标识
$response_type = "response_type_example"; // string | 填写code
$scope = "scope_example"; // string | 填login_id
$redirect_uri = "redirect_uri_example"; // string | 授权成功后的回调地址，必须以http/https开头。域名要跟申请应用时填写的授权回调域一致。用于调用https://open.douyin.com/oauth/access_token/换token。
$state = "state_example"; // string | 用于保持请求和回调状态，授权请求后会原样返回给接入方,如果是App则不用传该参数

try {
    $apiInstance->oauthAuthorizeV2Get($client_key, $response_type, $scope, $redirect_uri, $state);
} catch (Exception $e) {
    echo 'Exception when calling AuthorizeV2Api->oauthAuthorizeV2Get: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| 应用唯一标识 |
 **response_type** | **string**| 填写code |
 **scope** | **string**| 填login_id |
 **redirect_uri** | **string**| 授权成功后的回调地址，必须以http/https开头。域名要跟申请应用时填写的授权回调域一致。用于调用https://open.douyin.com/oauth/access_token/换token。 |
 **state** | **string**| 用于保持请求和回调状态，授权请求后会原样返回给接入方,如果是App则不用传该参数 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

