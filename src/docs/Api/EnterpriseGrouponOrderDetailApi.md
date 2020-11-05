# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseGrouponOrderDetailGet**](EnterpriseGrouponOrderDetailApi.md#enterpriseGrouponOrderDetailGet) | **GET** /enterprise/groupon/order/detail/ | 团购活动订单详情

# **enterpriseGrouponOrderDetailGet**
> \swagger_client\Model\EnterpriseGrouponGrouponOrderOrderDetailInlineResponse200 enterpriseGrouponOrderDetailGet($access_token, $open_id, $order_id)

团购活动订单详情

* Scope: `enterprise.groupon`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$order_id = "order_id_example"; // string | 订单id

try {
    $result = $apiInstance->enterpriseGrouponOrderDetailGet($access_token, $open_id, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseGrouponOrderDetailApi->enterpriseGrouponOrderDetailGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **order_id** | **string**| 订单id |

### Return type

[**\swagger_client\Model\EnterpriseGrouponGrouponOrderOrderDetailInlineResponse200**](../Model/EnterpriseGrouponGrouponOrderOrderDetailInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

