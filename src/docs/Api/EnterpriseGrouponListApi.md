# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseGrouponListGet**](EnterpriseGrouponListApi.md#enterpriseGrouponListGet) | **GET** /enterprise/groupon/list/ | 团购活动列表

# **enterpriseGrouponListGet**
> \swagger_client\Model\EnterpriseGrouponGrouponGrouponListInlineResponse200 enterpriseGrouponListGet($access_token, $open_id, $count, $cursor, $status)

团购活动列表

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
$cursor = 56; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。
$status = 56; // int | * 状态筛选   * 1: 有效   * 2: 审核中   * 3: 审核失败   * 4: 中止

try {
    $result = $apiInstance->enterpriseGrouponListGet($access_token, $open_id, $count, $cursor, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseGrouponListApi->enterpriseGrouponListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **count** | **int**| 每页数量 |
 **cursor** | **int**| 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 | [optional]
 **status** | **int**| * 状态筛选   * 1: 有效   * 2: 审核中   * 3: 审核失败   * 4: 中止 | [optional]

### Return type

[**\swagger_client\Model\EnterpriseGrouponGrouponGrouponListInlineResponse200**](../Model/EnterpriseGrouponGrouponGrouponListInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

