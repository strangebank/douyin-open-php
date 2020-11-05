# Oauth2UserTokenInlineResponse200Data

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**error_code** | [**\swagger_client\Model\Oauth2UserTokenErrorCode**](Oauth2UserTokenErrorCode.md) |  | [optional] 
**description** | [**\swagger_client\Model\Oauth2UserTokenDescription**](Oauth2UserTokenDescription.md) |  | [optional] 
**access_token** | **string** | 接口调用凭证 | [optional] 
**expires_in** | **int** | access_token接口调用凭证超时时间，单位（秒) | [optional] 
**refresh_token** | **string** | 用户刷新access_token | [optional] 
**refresh_expires_in** | **int** | refresh_token凭证超时时间，单位（秒) | [optional] 
**open_id** | **string** | 授权用户唯一标识 | [optional] 
**scope** | **string** | 用户授权的作用域(Scope)，使用逗号（,）分隔，开放平台几乎几乎每个接口都需要特定的Scope。 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

