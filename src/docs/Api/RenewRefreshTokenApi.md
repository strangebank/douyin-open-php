# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthRenewRefreshTokenGet**](RenewRefreshTokenApi.md#oauthRenewRefreshTokenGet) | **GET** /oauth/renew_refresh_token/ | 刷新refresh_token

# **oauthRenewRefreshTokenGet**
> \swagger_client\Model\Oauth2NewRefreshTokenInlineResponse200 oauthRenewRefreshTokenGet($client_key, $refresh_token)

刷新refresh_token

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
$refresh_token = "refresh_token_example"; // string | 填写通过access_token获取到的refresh_token参数

try {
    $result = $apiInstance->oauthRenewRefreshTokenGet($client_key, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RenewRefreshTokenApi->oauthRenewRefreshTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| 应用唯一标识 |
 **refresh_token** | **string**| 填写通过access_token获取到的refresh_token参数 |

### Return type

[**\swagger_client\Model\Oauth2NewRefreshTokenInlineResponse200**](../Model/Oauth2NewRefreshTokenInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

