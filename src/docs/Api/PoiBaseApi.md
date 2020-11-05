# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poiBaseQueryAmapGet**](PoiBaseApi.md#poiBaseQueryAmapGet) | **GET** /poi/base/query/amap/ | 通过高德POI ID获取抖音POI ID

# **poiBaseQueryAmapGet**
> \swagger_client\Model\PoiBaseBaseInlineResponse200 poiBaseQueryAmapGet($access_token, $amap_id)

通过高德POI ID获取抖音POI ID

* Scope: `poi.base`

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
$amap_id = "amap_id_example"; // string | 高德POI ID

try {
    $result = $apiInstance->poiBaseQueryAmapGet($access_token, $amap_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiBaseApi->poiBaseQueryAmapGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **amap_id** | **string**| 高德POI ID |

### Return type

[**\swagger_client\Model\PoiBaseBaseInlineResponse200**](../Model/PoiBaseBaseInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

