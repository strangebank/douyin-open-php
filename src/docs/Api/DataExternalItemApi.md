# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataExternalItemBaseGet**](DataExternalItemApi.md#dataExternalItemBaseGet) | **GET** /data/external/item/base/ | 获取视频基础数据
[**dataExternalItemCommentGet**](DataExternalItemApi.md#dataExternalItemCommentGet) | **GET** /data/external/item/comment/ | 获取视频评论数据
[**dataExternalItemLikeGet**](DataExternalItemApi.md#dataExternalItemLikeGet) | **GET** /data/external/item/like/ | 获取视频点赞数据
[**dataExternalItemPlayGet**](DataExternalItemApi.md#dataExternalItemPlayGet) | **GET** /data/external/item/play/ | 获取视频播放数据
[**dataExternalItemShareGet**](DataExternalItemApi.md#dataExternalItemShareGet) | **GET** /data/external/item/share/ | 获取视频分享数据

# **dataExternalItemBaseGet**
> \swagger_client\Model\ExternalDataItemExternalDataItemInlineResponse200 dataExternalItemBaseGet($open_id, $access_token, $item_id)

获取视频基础数据

* Scope: `data.external.item`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频

try {
    $result = $apiInstance->dataExternalItemBaseGet($open_id, $access_token, $item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalItemApi->dataExternalItemBaseGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **item_id** | **string**| item_id，仅能查询access_token对应用户上传的视频 |

### Return type

[**\swagger_client\Model\ExternalDataItemExternalDataItemInlineResponse200**](../Model/ExternalDataItemExternalDataItemInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalItemCommentGet**
> \swagger_client\Model\ExternalDataItemExternalDataItemInlineResponse2002 dataExternalItemCommentGet($open_id, $access_token, $item_id, $date_type)

获取视频评论数据

* Scope: `data.external.item`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalItemCommentGet($open_id, $access_token, $item_id, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalItemApi->dataExternalItemCommentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **item_id** | **string**| item_id，仅能查询access_token对应用户上传的视频 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\swagger_client\Model\ExternalDataItemExternalDataItemInlineResponse2002**](../Model/ExternalDataItemExternalDataItemInlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalItemLikeGet**
> \swagger_client\Model\ExternalDataItemExternalDataItemInlineResponse2001 dataExternalItemLikeGet($open_id, $access_token, $item_id, $date_type)

获取视频点赞数据

* Scope: `data.external.item`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalItemLikeGet($open_id, $access_token, $item_id, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalItemApi->dataExternalItemLikeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **item_id** | **string**| item_id，仅能查询access_token对应用户上传的视频 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\swagger_client\Model\ExternalDataItemExternalDataItemInlineResponse2001**](../Model/ExternalDataItemExternalDataItemInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalItemPlayGet**
> \swagger_client\Model\ExternalDataItemExternalDataItemInlineResponse2003 dataExternalItemPlayGet($open_id, $access_token, $item_id, $date_type)

获取视频播放数据

* Scope: `data.external.item`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalItemPlayGet($open_id, $access_token, $item_id, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalItemApi->dataExternalItemPlayGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **item_id** | **string**| item_id，仅能查询access_token对应用户上传的视频 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\swagger_client\Model\ExternalDataItemExternalDataItemInlineResponse2003**](../Model/ExternalDataItemExternalDataItemInlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalItemShareGet**
> \swagger_client\Model\ExternalDataItemExternalDataItemInlineResponse2004 dataExternalItemShareGet($open_id, $access_token, $item_id, $date_type)

获取视频分享数据

* Scope: `data.external.item`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$item_id = "item_id_example"; // string | item_id，仅能查询access_token对应用户上传的视频
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天

try {
    $result = $apiInstance->dataExternalItemShareGet($open_id, $access_token, $item_id, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalItemApi->dataExternalItemShareGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **item_id** | **string**| item_id，仅能查询access_token对应用户上传的视频 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天 |

### Return type

[**\swagger_client\Model\ExternalDataItemExternalDataItemInlineResponse2004**](../Model/ExternalDataItemExternalDataItemInlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

