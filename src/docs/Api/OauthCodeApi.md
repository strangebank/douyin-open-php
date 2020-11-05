# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**platformOauthConnectGet**](OauthCodeApi.md#platformOauthConnectGet) | **GET** /platform/oauth/connect/ | 获取授权码(code)

# **platformOauthConnectGet**
> platformOauthConnectGet($client_key, $response_type, $scope, $redirect_uri, $state)

获取授权码(code)

注意该URL不是用来请求的, 需要展示给用户用于扫码。 在抖音APP支持端内唤醒的版本内打开的话会弹出客户端原生授权页面。  使用本接口前提: 1. 首先你需要去官网申请，使你的应用可以使用特定的Scope，具体需要哪些Scope，请查看各接口定义。 2. 其次你需要在本URL的scope字段中填上用户需要授权给你的Scope。 3. 用户授权通过后，你才可以调用相应的接口。

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
$scope = "scope_example"; // string | 应用授权作用域,多个授权作用域以英文逗号（,）分隔
$redirect_uri = "redirect_uri_example"; // string | 授权成功后的回调地址，必须以http/https开头。域名必须对应申请应用时填写的域名，如不清楚请联系应用申请人。
$state = "state_example"; // string | 用于保持请求和回调的状态

try {
    $apiInstance->platformOauthConnectGet($client_key, $response_type, $scope, $redirect_uri, $state);
} catch (Exception $e) {
    echo 'Exception when calling OauthCodeApi->platformOauthConnectGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| 应用唯一标识 |
 **response_type** | **string**| 填写code |
 **scope** | **string**| 应用授权作用域,多个授权作用域以英文逗号（,）分隔 |
 **redirect_uri** | **string**| 授权成功后的回调地址，必须以http/https开头。域名必须对应申请应用时填写的域名，如不清楚请联系应用申请人。 |
 **state** | **string**| 用于保持请求和回调的状态 | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

