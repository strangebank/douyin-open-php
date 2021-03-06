# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseImPersonaCreatePost**](EnterpriseImPersonaCreateApi.md#enterpriseImPersonaCreatePost) | **POST** /enterprise/im/persona/create/ | 客服账号

# **enterpriseImPersonaCreatePost**
> \swagger_client\Model\EnterprisePersonaPersonaCreateInlineResponse200 enterpriseImPersonaCreatePost($body, $open_id, $access_token)

客服账号

* Scope: `enterprise.im`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \swagger_client\Model\EnterprisePersonaPersonaCreateBody(); // \swagger_client\Model\EnterprisePersonaPersonaCreateBody | 
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

try {
    $result = $apiInstance->enterpriseImPersonaCreatePost($body, $open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseImPersonaCreateApi->enterpriseImPersonaCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\EnterprisePersonaPersonaCreateBody**](../Model/EnterprisePersonaPersonaCreateBody.md)|  |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |

### Return type

[**\swagger_client\Model\EnterprisePersonaPersonaCreateInlineResponse200**](../Model/EnterprisePersonaPersonaCreateInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

