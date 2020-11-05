# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseGrouponDetailGet**](EnterpriseGrouponDetailApi.md#enterpriseGrouponDetailGet) | **GET** /enterprise/groupon/detail/ | 团购活动详情

# **enterpriseGrouponDetailGet**
> \swagger_client\Model\EnterpriseGrouponGrouponGrouponDetailInlineResponse200 enterpriseGrouponDetailGet($access_token, $open_id, $groupon_ids)

团购活动详情

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
$groupon_ids = array("groupon_ids_example"); // string[] | 团购活动的Id

try {
    $result = $apiInstance->enterpriseGrouponDetailGet($access_token, $open_id, $groupon_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseGrouponDetailApi->enterpriseGrouponDetailGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **groupon_ids** | [**string[]**](../Model/string.md)| 团购活动的Id |

### Return type

[**\swagger_client\Model\EnterpriseGrouponGrouponGrouponDetailInlineResponse200**](../Model/EnterpriseGrouponGrouponGrouponDetailInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

