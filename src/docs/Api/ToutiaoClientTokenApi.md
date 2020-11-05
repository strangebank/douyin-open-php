# swagger_client{{classname}}

All URIs are relative to *https://open.snssdk.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**oauthClientTokenGet**](ToutiaoClientTokenApi.md#oauthClientTokenGet) | **GET** /oauth/client_token/ | 生成client_token

# **oauthClientTokenGet**
> \swagger_client\Model\ToutiaoOauth2Oauth2InlineResponse2002 oauthClientTokenGet($client_key, $client_secret, $grant_type)

生成client_token

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
$grant_type = "grant_type_example"; // string | 传client_credential

try {
    $result = $apiInstance->oauthClientTokenGet($client_key, $client_secret, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ToutiaoClientTokenApi->oauthClientTokenGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_key** | **string**| 应用唯一标识 |
 **client_secret** | **string**| 应用唯一标识对应的密钥 |
 **grant_type** | **string**| 传client_credential |

### Return type

[**\swagger_client\Model\ToutiaoOauth2Oauth2InlineResponse2002**](../Model/ToutiaoOauth2Oauth2InlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

