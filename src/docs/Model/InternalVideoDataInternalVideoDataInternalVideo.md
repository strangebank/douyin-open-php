# InternalVideoDataInternalVideoDataInternalVideo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**item_id** | **string** | 视频id | 
**title** | **string** | 视频标题 | 
**cover** | **string** | 视频封面 | 
**is_top** | **bool** | 是否置顶 | 
**create_time** | **int** | 视频创建时间戳 | 
**is_reviewed** | **bool** | 表示是否审核结束。审核通过或者失败都会返回true，审核中返回false。 | 
**share_url** | **string** | 视频播放页面。视频播放页可能会失效，请在观看视频前调用/video/data/获取最新的播放页。 | 
**download_url** | **string** | 视频播放链接 | [optional] 
**statistics** | [**\swagger_client\Model\InternalVideoDataInternalVideoDataInternalVideoStatistics**](InternalVideoDataInternalVideoDataInternalVideoStatistics.md) |  | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

