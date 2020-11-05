# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseGrouponOrderListGet**](EnterpriseGrouponOrderListApi.md#enterpriseGrouponOrderListGet) | **GET** /enterprise/groupon/order/list/ | 团购活动订单详情

# **enterpriseGrouponOrderListGet**
> \swagger_client\Model\EnterpriseGrouponGrouponOrderOrderListInlineResponse200 enterpriseGrouponOrderListGet($access_token, $open_id, $count, $start_time, $end_time, $cursor, $filter_status)

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
$count = 56; // int | 每页数量
$start_time = 56; // int | 订单创建开始时间，unix时间戳
$end_time = 56; // int | 订单创建结束时间，unix时间戳
$cursor = 56; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。
$filter_status = "filter_status_example"; // string | 过滤订单状态，用\",\"分隔，不传默认下发所有状态

try {
    $result = $apiInstance->enterpriseGrouponOrderListGet($access_token, $open_id, $count, $start_time, $end_time, $cursor, $filter_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseGrouponOrderListApi->enterpriseGrouponOrderListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **count** | **int**| 每页数量 |
 **start_time** | **int**| 订单创建开始时间，unix时间戳 |
 **end_time** | **int**| 订单创建结束时间，unix时间戳 |
 **cursor** | **int**| 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 | [optional]
 **filter_status** | **string**| 过滤订单状态，用\&quot;,\&quot;分隔，不传默认下发所有状态 | [optional]

### Return type

[**\swagger_client\Model\EnterpriseGrouponGrouponOrderOrderListInlineResponse200**](../Model/EnterpriseGrouponGrouponOrderOrderListInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

