# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataExternalPoiUserGet**](DataExternalPoiUserApi.md#dataExternalPoiUserGet) | **GET** /data/external/poi/user/ | POI用户数据

# **dataExternalPoiUserGet**
> \swagger_client\Model\ExternalDataPoiExternalDataPoiInlineResponse2001 dataExternalPoiUserGet($access_token, $poi_id, $date_type)

POI用户数据

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
$date_type = 56; // int | 近7/15/30天

try {
    $result = $apiInstance->dataExternalPoiUserGet($access_token, $poi_id, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalPoiUserApi->dataExternalPoiUserGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **poi_id** | **string**| 抖音poi_id |
 **date_type** | **int**| 近7/15/30天 |

### Return type

[**\swagger_client\Model\ExternalDataPoiExternalDataPoiInlineResponse2001**](../Model/ExternalDataPoiExternalDataPoiInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

