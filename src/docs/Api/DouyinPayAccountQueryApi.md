# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**douyinPayAccountQueryGet**](DouyinPayAccountQueryApi.md#douyinPayAccountQueryGet) | **GET** /douyin-pay/account-query/ | 账户余额查询

# **douyinPayAccountQueryGet**
> \swagger_client\Model\DouyinPayDouyinPayInlineResponse2002 douyinPayAccountQueryGet($access_token, $merchant_id, $live_id)

账户余额查询

* Scope: `douyin.pay.op`

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
$merchant_id = 56; // int | 商户id
$live_id = 56; // int | 业务id

try {
    $result = $apiInstance->douyinPayAccountQueryGet($access_token, $merchant_id, $live_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DouyinPayAccountQueryApi->douyinPayAccountQueryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **merchant_id** | **int**| 商户id |
 **live_id** | **int**| 业务id |

### Return type

[**\swagger_client\Model\DouyinPayDouyinPayInlineResponse2002**](../Model/DouyinPayDouyinPayInlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

