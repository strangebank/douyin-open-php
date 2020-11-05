# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poiExtHotelSkuGet**](PoiSkuApi.md#poiExtHotelSkuGet) | **GET** /poi/ext/hotel/sku/ | sku拉取(该接口由接入方实现)

# **poiExtHotelSkuGet**
> \swagger_client\Model\PoiProductProductInlineResponse2003 poiExtHotelSkuGet($spu_ext_id, $start_date, $end_date)

sku拉取(该接口由接入方实现)

# 该接口由接入方实现

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$spu_ext_id = array("spu_ext_id_example"); // string[] | 接入方SPU ID 列表
$start_date = "start_date_example"; // string | 拉取价格时间区间[start_date, end_date)
$end_date = "end_date_example"; // string | 拉取价格时间区间[start_date, end_date)

try {
    $result = $apiInstance->poiExtHotelSkuGet($spu_ext_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSkuApi->poiExtHotelSkuGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **spu_ext_id** | [**string[]**](../Model/string.md)| 接入方SPU ID 列表 |
 **start_date** | **string**| 拉取价格时间区间[start_date, end_date) |
 **end_date** | **string**| 拉取价格时间区间[start_date, end_date) |

### Return type

[**\swagger_client\Model\PoiProductProductInlineResponse2003**](../Model/PoiProductProductInlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

