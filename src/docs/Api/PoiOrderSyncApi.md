# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poiOrderSyncPost**](PoiOrderSyncApi.md#poiOrderSyncPost) | **POST** /poi/order/sync/ | 订单同步

# **poiOrderSyncPost**
> \swagger_client\Model\PoiOrderSyncOrderSyncInlineResponse200 poiOrderSyncPost($body, $access_token)

订单同步

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
$body = new \swagger_client\Model\PoiOrderSyncOrderSyncBody(); // \swagger_client\Model\PoiOrderSyncOrderSyncBody | 
$access_token = "access_token_example"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->poiOrderSyncPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiOrderSyncApi->poiOrderSyncPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\PoiOrderSyncOrderSyncBody**](../Model/PoiOrderSyncOrderSyncBody.md)|  |
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |

### Return type

[**\swagger_client\Model\PoiOrderSyncOrderSyncInlineResponse200**](../Model/PoiOrderSyncOrderSyncInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

