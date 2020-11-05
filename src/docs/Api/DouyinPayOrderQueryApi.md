# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**douyinPayOrderQueryGet**](DouyinPayOrderQueryApi.md#douyinPayOrderQueryGet) | **GET** /douyin-pay/order-query/ | 订单查询，可查询一个月内的订单，优先级biz_order_no&gt;pay_order_no

# **douyinPayOrderQueryGet**
> \swagger_client\Model\DouyinPayDouyinPayInlineResponse2001 douyinPayOrderQueryGet($access_token, $merchant_id, $live_id, $biz_order_no, $pay_order_no)

订单查询，可查询一个月内的订单，优先级biz_order_no>pay_order_no

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
$biz_order_no = "biz_order_no_example"; // string | 外部订单号，由调用方生成
$pay_order_no = "pay_order_no_example"; // string | 抖音订单号，由抖音生成

try {
    $result = $apiInstance->douyinPayOrderQueryGet($access_token, $merchant_id, $live_id, $biz_order_no, $pay_order_no);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DouyinPayOrderQueryApi->douyinPayOrderQueryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **merchant_id** | **int**| 商户id |
 **live_id** | **int**| 业务id |
 **biz_order_no** | **string**| 外部订单号，由调用方生成 | [optional]
 **pay_order_no** | **string**| 抖音订单号，由抖音生成 | [optional]

### Return type

[**\swagger_client\Model\DouyinPayDouyinPayInlineResponse2001**](../Model/DouyinPayDouyinPayInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

