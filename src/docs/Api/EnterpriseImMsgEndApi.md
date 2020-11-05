# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseImMessageSendPost**](EnterpriseImMsgEndApi.md#enterpriseImMessageSendPost) | **POST** /enterprise/im/message/send/ | 发送消息

# **enterpriseImMessageSendPost**
> \swagger_client\Model\EnterpriseImEnterpriseImInlineResponse200 enterpriseImMessageSendPost($body, $open_id, $access_token)

发送消息

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
$body = new \swagger_client\Model\EnterpriseImEnterpriseImBody(); // \swagger_client\Model\EnterpriseImEnterpriseImBody | 
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。

try {
    $result = $apiInstance->enterpriseImMessageSendPost($body, $open_id, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseImMsgEndApi->enterpriseImMessageSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\EnterpriseImEnterpriseImBody**](../Model/EnterpriseImEnterpriseImBody.md)|  |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |

### Return type

[**\swagger_client\Model\EnterpriseImEnterpriseImInlineResponse200**](../Model/EnterpriseImEnterpriseImInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

