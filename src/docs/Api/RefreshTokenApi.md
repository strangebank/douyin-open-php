# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthRefreshTokenGet**](RefreshTokenApi.md#oauthRefreshTokenGet) | **GET** /oauth/refresh_token/ | 刷新access_token

# **oauthRefreshTokenGet**
> \swagger_client\Model\Oauth2RefreshTokenInlineResponse200 oauthRefreshTokenGet($client_key, $grant_type, $refresh_token)

刷新access_token

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
$grant_type = "grant_type_example"; // string | 填refresh_token
$refresh_token = "refresh_token_example"; // string | 填写通过access_token获取到的refresh_token参数

try {
    $result = $apiInstance->oauthRefreshTokenGet($client_key, $grant_type, $refresh_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefreshTokenApi->oauthRefreshTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| 应用唯一标识 |
 **grant_type** | **string**| 填refresh_token |
 **refresh_token** | **string**| 填写通过access_token获取到的refresh_token参数 |

### Return type

[**\swagger_client\Model\Oauth2RefreshTokenInlineResponse200**](../Model/Oauth2RefreshTokenInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

