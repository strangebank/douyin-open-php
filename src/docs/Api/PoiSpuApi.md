# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poiSkuSyncPost**](PoiSpuApi.md#poiSkuSyncPost) | **POST** /poi/sku/sync/ | SKU同步
[**poiSpuQueryGet**](PoiSpuApi.md#poiSpuQueryGet) | **GET** /poi/spu/query/ | 查询SPU
[**poiSpuSyncPost**](PoiSpuApi.md#poiSpuSyncPost) | **POST** /poi/spu/sync/ | SPU同步

# **poiSkuSyncPost**
> \swagger_client\Model\PoiProductProductInlineResponse2002 poiSkuSyncPost($body, $access_token)

SKU同步

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
$body = new \swagger_client\Model\PoiProductProductBody1(); // \swagger_client\Model\PoiProductProductBody1 | 
$access_token = "access_token_example"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->poiSkuSyncPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSpuApi->poiSkuSyncPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\PoiProductProductBody1**](../Model/PoiProductProductBody1.md)|  |
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |

### Return type

[**\swagger_client\Model\PoiProductProductInlineResponse2002**](../Model/PoiProductProductInlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiSpuQueryGet**
> \swagger_client\Model\PoiProductProductInlineResponse2001 poiSpuQueryGet($access_token, $spu_ext_id)

查询SPU

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
$access_token = "access_token_example"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。
$spu_ext_id = "spu_ext_id_example"; // string | 

try {
    $result = $apiInstance->poiSpuQueryGet($access_token, $spu_ext_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSpuApi->poiSpuQueryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **spu_ext_id** | **string**|  |

### Return type

[**\swagger_client\Model\PoiProductProductInlineResponse2001**](../Model/PoiProductProductInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiSpuSyncPost**
> \swagger_client\Model\PoiProductProductInlineResponse200 poiSpuSyncPost($body, $access_token)

SPU同步

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
$body = new \swagger_client\Model\PoiProductProductBody(); // \swagger_client\Model\PoiProductProductBody | 
$access_token = "access_token_example"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->poiSpuSyncPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSpuApi->poiSpuSyncPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\PoiProductProductBody**](../Model/PoiProductProductBody.md)|  |
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |

### Return type

[**\swagger_client\Model\PoiProductProductInlineResponse200**](../Model/PoiProductProductInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

