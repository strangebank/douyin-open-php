# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poiSearchKeywordGet**](PoiSearchApi.md#poiSearchKeywordGet) | **GET** /poi/search/keyword/ | 查询POI信息

# **poiSearchKeywordGet**
> \swagger_client\Model\VideoPoiVideoPoiInlineResponse200 poiSearchKeywordGet($access_token, $count, $keyword, $cursor, $city)

查询POI信息

* Scope: `poi.search`

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
$count = 56; // int | 每页数量
$keyword = "keyword_example"; // string | 查询关键字，例如美食
$cursor = 56; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。
$city = "city_example"; // string | 查询城市，例如上海、北京

try {
    $result = $apiInstance->poiSearchKeywordGet($access_token, $count, $keyword, $cursor, $city);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSearchApi->poiSearchKeywordGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **count** | **int**| 每页数量 |
 **keyword** | **string**| 查询关键字，例如美食 |
 **cursor** | **int**| 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 | [optional]
 **city** | **string**| 查询城市，例如上海、北京 | [optional]

### Return type

[**\swagger_client\Model\VideoPoiVideoPoiInlineResponse200**](../Model/VideoPoiVideoPoiInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

