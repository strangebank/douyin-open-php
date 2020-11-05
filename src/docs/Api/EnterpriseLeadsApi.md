# swagger_client{{classname}}

All URIs are relative to *https://open.douyin.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**enterpriseLeadsTagCreatePost**](EnterpriseLeadsApi.md#enterpriseLeadsTagCreatePost) | **POST** /enterprise/leads/tag/create/ | 创建标签
[**enterpriseLeadsTagDeletePost**](EnterpriseLeadsApi.md#enterpriseLeadsTagDeletePost) | **POST** /enterprise/leads/tag/delete/ | 删除标签
[**enterpriseLeadsTagListGet**](EnterpriseLeadsApi.md#enterpriseLeadsTagListGet) | **GET** /enterprise/leads/tag/list/ | 获取标签列表
[**enterpriseLeadsTagUpdatePost**](EnterpriseLeadsApi.md#enterpriseLeadsTagUpdatePost) | **POST** /enterprise/leads/tag/update/ | 编辑标签
[**enterpriseLeadsTagUserListGet**](EnterpriseLeadsApi.md#enterpriseLeadsTagUserListGet) | **GET** /enterprise/leads/tag/user/list/ | 获取打标签的用户列表
[**enterpriseLeadsTagUserUpdatePost**](EnterpriseLeadsApi.md#enterpriseLeadsTagUserUpdatePost) | **POST** /enterprise/leads/tag/user/update/ | 给用户设置标签
[**enterpriseLeadsUserActionListGet**](EnterpriseLeadsApi.md#enterpriseLeadsUserActionListGet) | **GET** /enterprise/leads/user/action/list/ | 获取意向用户互动记录
[**enterpriseLeadsUserDetailGet**](EnterpriseLeadsApi.md#enterpriseLeadsUserDetailGet) | **GET** /enterprise/leads/user/detail/ | 获取意向用户详情
[**enterpriseLeadsUserListGet**](EnterpriseLeadsApi.md#enterpriseLeadsUserListGet) | **GET** /enterprise/leads/user/list/ | 获取意向用户列表

# **enterpriseLeadsTagCreatePost**
> \swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2005 enterpriseLeadsTagCreatePost($open_id, $access_token, $body)

创建标签

* Scope: `enterprise.data` * 一个企业号最多创建100个标签

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
$body = new \swagger_client\Model\EnterpriseLeadsLeadsUserBody(); // \swagger_client\Model\EnterpriseLeadsLeadsUserBody | 

try {
    $result = $apiInstance->enterpriseLeadsTagCreatePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsTagCreatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\EnterpriseLeadsLeadsUserBody**](../Model/EnterpriseLeadsLeadsUserBody.md)|  | [optional]

### Return type

[**\swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2005**](../Model/EnterpriseLeadsLeadsUserInlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsTagDeletePost**
> \swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2006 enterpriseLeadsTagDeletePost($open_id, $access_token, $body)

删除标签

* Scope: `enterprise.data`

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
$body = new \swagger_client\Model\EnterpriseLeadsLeadsUserBody2(); // \swagger_client\Model\EnterpriseLeadsLeadsUserBody2 | 

try {
    $result = $apiInstance->enterpriseLeadsTagDeletePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsTagDeletePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\EnterpriseLeadsLeadsUserBody2**](../Model/EnterpriseLeadsLeadsUserBody2.md)|  | [optional]

### Return type

[**\swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2006**](../Model/EnterpriseLeadsLeadsUserInlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsTagListGet**
> \swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2003 enterpriseLeadsTagListGet($open_id, $access_token, $count, $cursor)

获取标签列表

* Scope: `enterprise.data`

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
$count = 56; // int | 每页数量
$cursor = 1; // int | 分页游标

try {
    $result = $apiInstance->enterpriseLeadsTagListGet($open_id, $access_token, $count, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsTagListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **count** | **int**| 每页数量 |
 **cursor** | **int**| 分页游标 | [optional] [default to 1]

### Return type

[**\swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2003**](../Model/EnterpriseLeadsLeadsUserInlineResponse2003.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsTagUpdatePost**
> \swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2005 enterpriseLeadsTagUpdatePost($open_id, $access_token, $body)

编辑标签

* Scope: `enterprise.data`

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
$body = new \swagger_client\Model\EnterpriseLeadsLeadsUserBody1(); // \swagger_client\Model\EnterpriseLeadsLeadsUserBody1 | 

try {
    $result = $apiInstance->enterpriseLeadsTagUpdatePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsTagUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\EnterpriseLeadsLeadsUserBody1**](../Model/EnterpriseLeadsLeadsUserBody1.md)|  | [optional]

### Return type

[**\swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2005**](../Model/EnterpriseLeadsLeadsUserInlineResponse2005.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsTagUserListGet**
> \swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2004 enterpriseLeadsTagUserListGet($open_id, $access_token, $count, $tag_id, $cursor)

获取打标签的用户列表

* Scope: `enterprise.data`

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
$count = 56; // int | 每页数量
$tag_id = 56; // int | 
$cursor = 1; // int | 分页游标

try {
    $result = $apiInstance->enterpriseLeadsTagUserListGet($open_id, $access_token, $count, $tag_id, $cursor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsTagUserListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **count** | **int**| 每页数量 |
 **tag_id** | **int**|  |
 **cursor** | **int**| 分页游标 | [optional] [default to 1]

### Return type

[**\swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2004**](../Model/EnterpriseLeadsLeadsUserInlineResponse2004.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsTagUserUpdatePost**
> \swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2006 enterpriseLeadsTagUserUpdatePost($open_id, $access_token, $body)

给用户设置标签

* Scope: `enterprise.data` * 一个用户最多设置5个标签

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
$body = new \swagger_client\Model\EnterpriseLeadsLeadsUserBody3(); // \swagger_client\Model\EnterpriseLeadsLeadsUserBody3 | 

try {
    $result = $apiInstance->enterpriseLeadsTagUserUpdatePost($open_id, $access_token, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsTagUserUpdatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **body** | [**\swagger_client\Model\EnterpriseLeadsLeadsUserBody3**](../Model/EnterpriseLeadsLeadsUserBody3.md)|  | [optional]

### Return type

[**\swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2006**](../Model/EnterpriseLeadsLeadsUserInlineResponse2006.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsUserActionListGet**
> \swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2002 enterpriseLeadsUserActionListGet($open_id, $access_token, $count, $user_id, $cursor, $action_type)

获取意向用户互动记录

* Scope: `enterprise.data`

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
$count = 56; // int | 每页数量
$user_id = "user_id_example"; // string | 
$cursor = "cursor_example"; // string | 
$action_type = 56; // int | 

try {
    $result = $apiInstance->enterpriseLeadsUserActionListGet($open_id, $access_token, $count, $user_id, $cursor, $action_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsUserActionListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **count** | **int**| 每页数量 |
 **user_id** | **string**|  |
 **cursor** | **string**|  | [optional]
 **action_type** | **int**|  | [optional]

### Return type

[**\swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2002**](../Model/EnterpriseLeadsLeadsUserInlineResponse2002.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsUserDetailGet**
> \swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2001 enterpriseLeadsUserDetailGet($open_id, $access_token, $user_id)

获取意向用户详情

* Scope: `enterprise.data`

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
$user_id = "user_id_example"; // string | 

try {
    $result = $apiInstance->enterpriseLeadsUserDetailGet($open_id, $access_token, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsUserDetailGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **user_id** | **string**|  |

### Return type

[**\swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse2001**](../Model/EnterpriseLeadsLeadsUserInlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enterpriseLeadsUserListGet**
> \swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse200 enterpriseLeadsUserListGet($open_id, $access_token, $count, $start_time, $end_time, $action_type, $cursor, $leads_level)

获取意向用户列表

* Scope: `enterprise.data`

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
$count = 56; // int | 每页数量
$start_time = 56; // int | 
$end_time = 56; // int | 
$action_type = 56; // int | 分类:   * `0` - 全部   * `1` - 私信互动   * `2` - 组件互动   * `3` - 主页互动
$cursor = 1; // int | 分页游标
$leads_level = 56; // int | 用户状态:   * `-1` - 没兴趣   * `0` - 了解   * `1` - 有兴趣   * `2` - 有意愿   * `10` - 已转化

try {
    $result = $apiInstance->enterpriseLeadsUserListGet($open_id, $access_token, $count, $start_time, $end_time, $action_type, $cursor, $leads_level);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseLeadsApi->enterpriseLeadsUserListGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **open_id** | **string**| 通过/oauth/access_token/获取，用户唯一标志 |
 **access_token** | **string**| 调用/oauth/access_token/生成的token，此token需要用户授权。 |
 **count** | **int**| 每页数量 |
 **start_time** | **int**|  |
 **end_time** | **int**|  |
 **action_type** | **int**| 分类:   * &#x60;0&#x60; - 全部   * &#x60;1&#x60; - 私信互动   * &#x60;2&#x60; - 组件互动   * &#x60;3&#x60; - 主页互动 |
 **cursor** | **int**| 分页游标 | [optional] [default to 1]
 **leads_level** | **int**| 用户状态:   * &#x60;-1&#x60; - 没兴趣   * &#x60;0&#x60; - 了解   * &#x60;1&#x60; - 有兴趣   * &#x60;2&#x60; - 有意愿   * &#x60;10&#x60; - 已转化 | [optional]

### Return type

[**\swagger_client\Model\EnterpriseLeadsLeadsUserInlineResponse200**](../Model/EnterpriseLeadsLeadsUserInlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

