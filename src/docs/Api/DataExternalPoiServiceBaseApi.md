# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataExternalPoiServiceBaseGet**](DataExternalPoiServiceBaseApi.md#dataExternalPoiServiceBaseGet) | **GET** /data/external/poi/service_base/ | POI服务基础数据

# **dataExternalPoiServiceBaseGet**
> \swagger_client\Model\ExternalDataPoiExternalDataPoiInlineResponse2002 dataExternalPoiServiceBaseGet($access_token, $poi_id, $begin_date, $end_date, $service_type)

POI服务基础数据

* Scope: `data.external.poi`

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
$poi_id = "poi_id_example"; // string | 抖音poi_id
$begin_date = "begin_date_example"; // string | 最近30天，开始日期(yyyy-MM-dd)
$end_date = "end_date_example"; // string | 最近30天，结束日期(yyyy-MM-dd)
$service_type = 56; // int | 服务类型，40:民宿

try {
    $result = $apiInstance->dataExternalPoiServiceBaseGet($access_token, $poi_id, $begin_date, $end_date, $service_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalPoiServiceBaseApi->dataExternalPoiServiceBaseGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **poi_id** | **string**| 抖音poi_id |
 **begin_date** | **string**| 最近30天，开始日期(yyyy-MM-dd) |
 **end_date** | **string**| 最近30天，结束日期(yyyy-MM-dd) |
 **service_type** | **int**| 服务类型，40:民宿 | [optional]

### Return type

[**\swagger_client\Model\ExternalDataPoiExternalDataPoiInlineResponse2002**](../Model/ExternalDataPoiExternalDataPoiInlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

