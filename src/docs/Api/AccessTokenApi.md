# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthAccessTokenGet**](AccessTokenApi.md#oauthAccessTokenGet) | **GET** /oauth/access_token/ | 获取access_token

# **oauthAccessTokenGet**
> \swagger_client\Model\Oauth2UserTokenInlineResponse200 oauthAccessTokenGet($client_key, $client_secret, $code, $grant_type)

获取access_token

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
$client_secret = "client_secret_example"; // string | 应用唯一标识对应的密钥
$code = "code_example"; // string | 授权码
$grant_type = "grant_type_example"; // string | 写死\"authorization_code\"即可

try {
    $result = $apiInstance->oauthAccessTokenGet($client_key, $client_secret, $code, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessTokenApi->oauthAccessTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| 应用唯一标识 |
 **client_secret** | **string**| 应用唯一标识对应的密钥 |
 **code** | **string**| 授权码 |
 **grant_type** | **string**| 写死\&quot;authorization_code\&quot;即可 |

### Return type

[**\swagger_client\Model\Oauth2UserTokenInlineResponse200**](../Model/Oauth2UserTokenInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

