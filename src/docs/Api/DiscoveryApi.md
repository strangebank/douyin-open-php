# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**discoveryEntRankItemGet**](DiscoveryApi.md#discoveryEntRankItemGet) | **GET** /discovery/ent/rank/item/ | 获取抖音电影榜、抖音电视剧榜、抖音综艺榜
[**discoveryEntRankVersionGet**](DiscoveryApi.md#discoveryEntRankVersionGet) | **GET** /discovery/ent/rank/version/ | 获取抖音影视综榜单版本

# **discoveryEntRankItemGet**
> \swagger_client\Model\DiscoveryEntRankRankInlineResponse200 discoveryEntRankItemGet($access_token, $type, $version)

获取抖音电影榜、抖音电视剧榜、抖音综艺榜

* Scope: `discovery.ent`

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
$type = 56; // int | 榜单类型：   * 1 - 电影    * 2 - 电视剧    * 3 - 综艺
$version = 56; // int | 榜单版本：空值默认为本周榜单

try {
    $result = $apiInstance->discoveryEntRankItemGet($access_token, $type, $version);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->discoveryEntRankItemGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **type** | **int**| 榜单类型：   * 1 - 电影    * 2 - 电视剧    * 3 - 综艺 |
 **version** | **int**| 榜单版本：空值默认为本周榜单 | [optional]

### Return type

[**\swagger_client\Model\DiscoveryEntRankRankInlineResponse200**](../Model/DiscoveryEntRankRankInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discoveryEntRankVersionGet**
> \swagger_client\Model\DiscoveryEntRankRankInlineResponse2001 discoveryEntRankVersionGet($access_token, $count, $type, $cursor)

获取抖音影视综榜单版本

* Scope: `discovery.ent`

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
$type = 56; // int | 榜单类型：   * 1 - 电影    * 2 - 电视剧    * 3 - 综艺
$cursor = 56; // int | 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。

try {
    $result = $apiInstance->discoveryEntRankVersionGet($access_token, $count, $type, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DiscoveryApi->discoveryEntRankVersionGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **count** | **int**| 每页数量 |
 **type** | **int**| 榜单类型：   * 1 - 电影    * 2 - 电视剧    * 3 - 综艺 |
 **cursor** | **int**| 分页游标, 第一页请求cursor是0, response中会返回下一页请求用到的cursor, 同时response还会返回has_more来表明是否有更多的数据。 | [optional]

### Return type

[**\swagger_client\Model\DiscoveryEntRankRankInlineResponse2001**](../Model/DiscoveryEntRankRankInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

