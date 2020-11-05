# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poiExtHotelOrderCancelPost**](PoiOrderApi.md#poiExtHotelOrderCancelPost) | **POST** /poi/ext/hotel/order/cancel/ | 取消订单(该接口由接入方实现)
[**poiExtHotelOrderCommitPost**](PoiOrderApi.md#poiExtHotelOrderCommitPost) | **POST** /poi/ext/hotel/order/commit/ | 下单接口(该接口由接入方实现)
[**poiExtHotelOrderStatusPost**](PoiOrderApi.md#poiExtHotelOrderStatusPost) | **POST** /poi/ext/hotel/order/status/ | 支付状态通知(该接口由接入方实现)
[**poiOrderStatusPost**](PoiOrderApi.md#poiOrderStatusPost) | **POST** /poi/order/status/ | 订单状态同步接口

# **poiExtHotelOrderCancelPost**
> \swagger_client\Model\PoiOrderOrderInlineResponse2003 poiExtHotelOrderCancelPost($body)

取消订单(该接口由接入方实现)

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
$body = new \swagger_client\Model\PoiOrderOrderBody3(); // \swagger_client\Model\PoiOrderOrderBody3 | 

try {
    $result = $apiInstance->poiExtHotelOrderCancelPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderApi->poiExtHotelOrderCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\PoiOrderOrderBody3**](../Model/PoiOrderOrderBody3.md)|  | [optional]

### Return type

[**\swagger_client\Model\PoiOrderOrderInlineResponse2003**](../Model/PoiOrderOrderInlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiExtHotelOrderCommitPost**
> \swagger_client\Model\PoiOrderOrderInlineResponse2001 poiExtHotelOrderCommitPost($body)

下单接口(该接口由接入方实现)

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
$body = new \swagger_client\Model\PoiOrderOrderBody1(); // \swagger_client\Model\PoiOrderOrderBody1 | 

try {
    $result = $apiInstance->poiExtHotelOrderCommitPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderApi->poiExtHotelOrderCommitPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\PoiOrderOrderBody1**](../Model/PoiOrderOrderBody1.md)|  | [optional]

### Return type

[**\swagger_client\Model\PoiOrderOrderInlineResponse2001**](../Model/PoiOrderOrderInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiExtHotelOrderStatusPost**
> \swagger_client\Model\PoiOrderOrderInlineResponse2002 poiExtHotelOrderStatusPost($body)

支付状态通知(该接口由接入方实现)

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
$body = new \swagger_client\Model\PoiOrderOrderBody2(); // \swagger_client\Model\PoiOrderOrderBody2 | 

try {
    $result = $apiInstance->poiExtHotelOrderStatusPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderApi->poiExtHotelOrderStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\PoiOrderOrderBody2**](../Model/PoiOrderOrderBody2.md)|  | [optional]

### Return type

[**\swagger_client\Model\PoiOrderOrderInlineResponse2002**](../Model/PoiOrderOrderInlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiOrderStatusPost**
> \swagger_client\Model\PoiOrderOrderInlineResponse200 poiOrderStatusPost($body, $access_token)

订单状态同步接口

* Scope: `poi.product`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \swagger_client\Model\PoiOrderOrderBody(); // \swagger_client\Model\PoiOrderOrderBody | 
$access_token = "access_token_example"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->poiOrderStatusPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderApi->poiOrderStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\PoiOrderOrderBody**](../Model/PoiOrderOrderBody.md)|  |
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |

### Return type

[**\swagger_client\Model\PoiOrderOrderInlineResponse200**](../Model/PoiOrderOrderInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

