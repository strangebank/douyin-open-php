# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**dataExternalUserCommentGet**](DataExternalUserApi.md#dataExternalUserCommentGet) | **GET** /data/external/user/comment/ | 获取用户评论数
[**dataExternalUserFansGet**](DataExternalUserApi.md#dataExternalUserFansGet) | **GET** /data/external/user/fans/ | 获取用户粉丝数
[**dataExternalUserItemGet**](DataExternalUserApi.md#dataExternalUserItemGet) | **GET** /data/external/user/item/ | 获取用户视频情况
[**dataExternalUserLikeGet**](DataExternalUserApi.md#dataExternalUserLikeGet) | **GET** /data/external/user/like/ | 获取用户点赞数
[**dataExternalUserProfileGet**](DataExternalUserApi.md#dataExternalUserProfileGet) | **GET** /data/external/user/profile/ | 获取用户主页访问数
[**dataExternalUserShareGet**](DataExternalUserApi.md#dataExternalUserShareGet) | **GET** /data/external/user/share/ | 获取用户分享数

# **dataExternalUserCommentGet**
> \swagger_client\Model\ExternalDataUserExternalDataUserInlineResponse2003 dataExternalUserCommentGet($open_id, $access_token, $date_type)

获取用户评论数

* Scope: `data.external.user`

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
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天、30代表30天

try {
    $result = $apiInstance->dataExternalUserCommentGet($open_id, $access_token, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalUserApi->dataExternalUserCommentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天、30代表30天 |

### Return type

[**\swagger_client\Model\ExternalDataUserExternalDataUserInlineResponse2003**](../Model/ExternalDataUserExternalDataUserInlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalUserFansGet**
> \swagger_client\Model\ExternalDataUserExternalDataUserInlineResponse2001 dataExternalUserFansGet($open_id, $access_token, $date_type)

获取用户粉丝数

* Scope: `data.external.user`

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
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天、30代表30天

try {
    $result = $apiInstance->dataExternalUserFansGet($open_id, $access_token, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalUserApi->dataExternalUserFansGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天、30代表30天 |

### Return type

[**\swagger_client\Model\ExternalDataUserExternalDataUserInlineResponse2001**](../Model/ExternalDataUserExternalDataUserInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalUserItemGet**
> \swagger_client\Model\ExternalDataUserExternalDataUserInlineResponse200 dataExternalUserItemGet($open_id, $access_token, $date_type)

获取用户视频情况

* Scope: `data.external.user`

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
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天、30代表30天

try {
    $result = $apiInstance->dataExternalUserItemGet($open_id, $access_token, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalUserApi->dataExternalUserItemGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天、30代表30天 |

### Return type

[**\swagger_client\Model\ExternalDataUserExternalDataUserInlineResponse200**](../Model/ExternalDataUserExternalDataUserInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalUserLikeGet**
> \swagger_client\Model\ExternalDataUserExternalDataUserInlineResponse2002 dataExternalUserLikeGet($open_id, $access_token, $date_type)

获取用户点赞数

* Scope: `data.external.user`

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
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天、30代表30天

try {
    $result = $apiInstance->dataExternalUserLikeGet($open_id, $access_token, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalUserApi->dataExternalUserLikeGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天、30代表30天 |

### Return type

[**\swagger_client\Model\ExternalDataUserExternalDataUserInlineResponse2002**](../Model/ExternalDataUserExternalDataUserInlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalUserProfileGet**
> \swagger_client\Model\ExternalDataUserExternalDataUserInlineResponse2005 dataExternalUserProfileGet($open_id, $access_token, $date_type)

获取用户主页访问数

* Scope: `data.external.user`

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
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天、30代表30天

try {
    $result = $apiInstance->dataExternalUserProfileGet($open_id, $access_token, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalUserApi->dataExternalUserProfileGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天、30代表30天 |

### Return type

[**\swagger_client\Model\ExternalDataUserExternalDataUserInlineResponse2005**](../Model/ExternalDataUserExternalDataUserInlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **dataExternalUserShareGet**
> \swagger_client\Model\ExternalDataUserExternalDataUserInlineResponse2004 dataExternalUserShareGet($open_id, $access_token, $date_type)

获取用户分享数

* Scope: `data.external.user`

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
$date_type = 56; // int | 近7/15天；输入7代表7天、15代表15天、30代表30天

try {
    $result = $apiInstance->dataExternalUserShareGet($open_id, $access_token, $date_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DataExternalUserApi->dataExternalUserShareGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **date_type** | **int**| 近7/15天；输入7代表7天、15代表15天、30代表30天 |

### Return type

[**\swagger_client\Model\ExternalDataUserExternalDataUserInlineResponse2004**](../Model/ExternalDataUserExternalDataUserInlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

