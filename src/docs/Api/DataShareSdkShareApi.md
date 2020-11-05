# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataExternalSdkShareGet**](DataShareSdkShareApi.md#dataExternalSdkShareGet) | **GET** /data/external/sdk_share/ | 获取SDK分享视频数据

# **dataExternalSdkShareGet**
> \swagger_client\Model\ExternalDataSdkShareExternalDataSdkShareInlineResponse200 dataExternalSdkShareGet($access_token, $begin_date, $end_date)

获取SDK分享视频数据

* Scope: `data.external.sdk_share`

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
$begin_date = "begin_date_example"; // string | 最近30天，开始日期(yyyy-MM-dd)
$end_date = "end_date_example"; // string | 最近30天，结束日期(yyyy-MM-dd)

try {
    $result = $apiInstance->dataExternalSdkShareGet($access_token, $begin_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataShareSdkShareApi->dataExternalSdkShareGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **begin_date** | **string**| 最近30天，开始日期(yyyy-MM-dd) |
 **end_date** | **string**| 最近30天，结束日期(yyyy-MM-dd) |

### Return type

[**\swagger_client\Model\ExternalDataSdkShareExternalDataSdkShareInlineResponse200**](../Model/ExternalDataSdkShareExternalDataSdkShareInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

