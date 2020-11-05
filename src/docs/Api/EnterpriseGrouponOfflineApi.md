# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseGrouponOfflinePost**](EnterpriseGrouponOfflineApi.md#enterpriseGrouponOfflinePost) | **POST** /enterprise/groupon/offline/ | 团购活动下线

# **enterpriseGrouponOfflinePost**
> \swagger_client\Model\EnterpriseGrouponGrouponGrouponOfflineInlineResponse200 enterpriseGrouponOfflinePost($access_token, $open_id, $body)

团购活动下线

* Scope: `enterprise.groupon`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new swagger_client\Api{{classname}}(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = "access_token_example"; // string | 调用/oauth/access_token/生成的token，此token需要用户授权。
$open_id = "open_id_example"; // string | 通过/oauth/access_token/获取，用户唯一标志
$body = new \swagger_client\Model\EnterpriseGrouponGrouponGrouponOfflineBody(); // \swagger_client\Model\EnterpriseGrouponGrouponGrouponOfflineBody | 

try {
    $result = $apiInstance->enterpriseGrouponOfflinePost($access_token, $open_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseGrouponOfflineApi->enterpriseGrouponOfflinePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **body** | [**\swagger_client\Model\EnterpriseGrouponGrouponGrouponOfflineBody**](../Model/EnterpriseGrouponGrouponGrouponOfflineBody.md)|  | [optional]

### Return type

[**\swagger_client\Model\EnterpriseGrouponGrouponGrouponOfflineInlineResponse200**](../Model/EnterpriseGrouponGrouponGrouponOfflineInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

