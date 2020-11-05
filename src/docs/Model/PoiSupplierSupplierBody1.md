# PoiSupplierSupplierBody1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**match_type** | **int** | 匹配类型，0-离线匹配 1-实时匹配。离线匹配，不会实时返回结果，最大上传1w个数据，通过/poi/supplier/match/query/接口查询匹配结果； 在线匹配，实时返回结果，最大上传100个数据，需要申请授权。 | 
**match_data_list** | [**\swagger_client\Model\PoiSupplierSupplierMatchOriginData[]**](PoiSupplierSupplierMatchOriginData.md) | 第三方上传的有效匹配数据 | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

