# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseGrouponOrderOverviewGet**](EnterpriseGrouponOrderOverviewApi.md#enterpriseGrouponOrderOverviewGet) | **GET** /enterprise/groupon/order/overview/ | 团购活动订单汇总信息

# **enterpriseGrouponOrderOverviewGet**
> \swagger_client\Model\EnterpriseGrouponGrouponOrderOrderOverviewInlineResponse200 enterpriseGrouponOrderOverviewGet($access_token, $open_id, $start_time, $end_time)

团购活动订单汇总信息

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
$start_time = 56; // int | 订单开始时间，unix时间戳
$end_time = 56; // int | 订单结束时间，unix时间戳

try {
    $result = $apiInstance->enterpriseGrouponOrderOverviewGet($access_token, $open_id, $start_time, $end_time);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseGrouponOrderOverviewApi->enterpriseGrouponOrderOverviewGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **start_time** | **int**| 订单开始时间，unix时间戳 |
 **end_time** | **int**| 订单结束时间，unix时间戳 |

### Return type

[**\swagger_client\Model\EnterpriseGrouponGrouponOrderOrderOverviewInlineResponse200**](../Model/EnterpriseGrouponGrouponOrderOrderOverviewInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

