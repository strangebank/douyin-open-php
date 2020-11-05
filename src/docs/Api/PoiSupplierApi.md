# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**poiQueryGet**](PoiSupplierApi.md#poiQueryGet) | **GET** /poi/query/ | 获取抖音POI ID
[**poiSupplierMatchPost**](PoiSupplierApi.md#poiSupplierMatchPost) | **POST** /poi/supplier/match/ | 店铺匹配
[**poiSupplierMatchQueryGet**](PoiSupplierApi.md#poiSupplierMatchQueryGet) | **GET** /poi/supplier/match/query/ | 店铺匹配结果查询
[**poiSupplierQueryGet**](PoiSupplierApi.md#poiSupplierQueryGet) | **GET** /poi/supplier/query/ | 查询店铺
[**poiSupplierSyncPost**](PoiSupplierApi.md#poiSupplierSyncPost) | **POST** /poi/supplier/sync/ | 商铺同步

# **poiQueryGet**
> \swagger_client\Model\PoiSupplierSupplierInlineResponse2002 poiQueryGet($access_token, $amap_id)

获取抖音POI ID

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
$amap_id = "amap_id_example"; // string | 

try {
    $result = $apiInstance->poiQueryGet($access_token, $amap_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSupplierApi->poiQueryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **amap_id** | **string**|  |

### Return type

[**\swagger_client\Model\PoiSupplierSupplierInlineResponse2002**](../Model/PoiSupplierSupplierInlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiSupplierMatchPost**
> \swagger_client\Model\PoiSupplierSupplierInlineResponse2003 poiSupplierMatchPost($body, $access_token)

店铺匹配

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
$body = new \swagger_client\Model\PoiSupplierSupplierBody1(); // \swagger_client\Model\PoiSupplierSupplierBody1 | 
$access_token = "access_token_example"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->poiSupplierMatchPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSupplierApi->poiSupplierMatchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\PoiSupplierSupplierBody1**](../Model/PoiSupplierSupplierBody1.md)|  |
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |

### Return type

[**\swagger_client\Model\PoiSupplierSupplierInlineResponse2003**](../Model/PoiSupplierSupplierInlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiSupplierMatchQueryGet**
> \swagger_client\Model\PoiSupplierSupplierInlineResponse2004 poiSupplierMatchQueryGet($body, $access_token)

店铺匹配结果查询

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
$body = new \swagger_client\Model\PoiSupplierSupplierBody2(); // \swagger_client\Model\PoiSupplierSupplierBody2 | 
$access_token = "access_token_example"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->poiSupplierMatchQueryGet($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSupplierApi->poiSupplierMatchQueryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\PoiSupplierSupplierBody2**](../Model/PoiSupplierSupplierBody2.md)|  |
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |

### Return type

[**\swagger_client\Model\PoiSupplierSupplierInlineResponse2004**](../Model/PoiSupplierSupplierInlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiSupplierQueryGet**
> \swagger_client\Model\PoiSupplierSupplierInlineResponse2001 poiSupplierQueryGet($access_token, $supplier_ext_id)

查询店铺

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
$supplier_ext_id = "supplier_ext_id_example"; // string | 

try {
    $result = $apiInstance->poiSupplierQueryGet($access_token, $supplier_ext_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSupplierApi->poiSupplierQueryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **supplier_ext_id** | **string**|  |

### Return type

[**\swagger_client\Model\PoiSupplierSupplierInlineResponse2001**](../Model/PoiSupplierSupplierInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **poiSupplierSyncPost**
> \swagger_client\Model\PoiSupplierSupplierInlineResponse200 poiSupplierSyncPost($body, $access_token)

商铺同步

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
$body = new \swagger_client\Model\PoiSupplierSupplierBody(); // \swagger_client\Model\PoiSupplierSupplierBody | 
$access_token = "access_token_example"; // string | 调用/oauth/client_token/生成的token，此token不需要用户授权。

try {
    $result = $apiInstance->poiSupplierSyncPost($body, $access_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoiSupplierApi->poiSupplierSyncPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\swagger_client\Model\PoiSupplierSupplierBody**](../Model/PoiSupplierSupplierBody.md)|  |
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |

### Return type

[**\swagger_client\Model\PoiSupplierSupplierInlineResponse200**](../Model/PoiSupplierSupplierInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

