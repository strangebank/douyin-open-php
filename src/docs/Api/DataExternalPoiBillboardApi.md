# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataExternalPoiBillboardGet**](DataExternalPoiBillboardApi.md#dataExternalPoiBillboardGet) | **GET** /data/external/poi/billboard/ | POI热度榜

# **dataExternalPoiBillboardGet**
> \swagger_client\Model\ExternalDataPoiExternalDataPoiInlineResponse2003 dataExternalPoiBillboardGet($access_token, $billboard_type)

POI热度榜

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
$billboard_type = 56; // int | 10：近30日餐饮类POI的热度TOP500；20：近30日景点类POI的热度TOP500；30：近30日住宿类POI的热度TOP500

try {
    $result = $apiInstance->dataExternalPoiBillboardGet($access_token, $billboard_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalPoiBillboardApi->dataExternalPoiBillboardGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/client_token/生成的token，此token不需要用户授权。 |
 **billboard_type** | **int**| 10：近30日餐饮类POI的热度TOP500；20：近30日景点类POI的热度TOP500；30：近30日住宿类POI的热度TOP500 |

### Return type

[**\swagger_client\Model\ExternalDataPoiExternalDataPoiInlineResponse2003**](../Model/ExternalDataPoiExternalDataPoiInlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

