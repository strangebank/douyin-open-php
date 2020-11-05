# XiguaVideoCreateBody1

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**video_id** | **string** | video_id, 通过/xigua/video/upload/接口得到 | 
**text** | **string** | 标题长度应该在5-30字之间 | 
**praise** | **bool** | 是否给视频开通可以赞赏的入口 | [default to false]
**claim_origin** | **bool** | 是否声明原创 | [default to false]
**abstract** | **string** | 视频简介，400字以内 | [default to '']
**cover_tsp** | **int** | 从视频中截取封面的时间，用该帧作为封面（单位为毫秒） | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

