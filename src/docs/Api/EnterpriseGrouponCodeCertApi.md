# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseGrouponCodeVerificationPost**](EnterpriseGrouponCodeCertApi.md#enterpriseGrouponCodeVerificationPost) | **POST** /enterprise/groupon/code/verification/ | 券码核销

# **enterpriseGrouponCodeVerificationPost**
> \swagger_client\Model\EnterpriseGrouponGrouponCodeCodeVerificationInlineResponse200 enterpriseGrouponCodeVerificationPost($access_token, $open_id, $body)

券码核销

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
$body = new \swagger_client\Model\EnterpriseGrouponGrouponCodeCodeVerificationBody(); // \swagger_client\Model\EnterpriseGrouponGrouponCodeCodeVerificationBody | 

try {
    $result = $apiInstance->enterpriseGrouponCodeVerificationPost($access_token, $open_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseGrouponCodeCertApi->enterpriseGrouponCodeVerificationPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **body** | [**\swagger_client\Model\EnterpriseGrouponGrouponCodeCodeVerificationBody**](../Model/EnterpriseGrouponGrouponCodeCodeVerificationBody.md)|  | [optional]

### Return type

[**\swagger_client\Model\EnterpriseGrouponGrouponCodeCodeVerificationInlineResponse200**](../Model/EnterpriseGrouponGrouponCodeCodeVerificationInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

