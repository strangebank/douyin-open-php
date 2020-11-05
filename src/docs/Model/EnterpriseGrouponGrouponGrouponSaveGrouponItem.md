# EnterpriseGrouponGrouponGrouponSaveGrouponItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**groupon_id** | **string** | 团购活动Id，审核失败修改用 | [optional] 
**use_type** | **int** | * 团购使用方式   * 1: 到店核销 | 
**code_type** | **int** | * 券码生成的方式   * 1: 系统生成   * 2: 自定义上传 | [default to ENTERPRISE_GROUPON_GROUPON_GROUPON_SAVE_CODE_TYPE.1]
**merchant_name** | **string** | 商户名称 | 
**service_number** | **string** | 联系电话 | 
**title** | **string** | 卡券标题 | 
**cover_images** | **string[]** | 封面图 | 
**original_amount** | **int** | 原价(单位分) | 
**actual_amount** | **int** | 实际金额(单位分) | 
**notification** | **string** | 团购须知 | 
**order_limit** | **int** | 单用户购买数量上限 | 
**stock** | **int** | 团购活动库存总数 | 
**poi_ids** | **string[]** | * 绑定的POI 列表 默认展示全部门店 | [optional] 
**groupon_goods** | [**\swagger_client\Model\EnterpriseGrouponGrouponGrouponSaveGrouponItemGrouponGoods[]**](EnterpriseGrouponGrouponGrouponSaveGrouponItemGrouponGoods.md) | 团购商品 | 
**start_time** | **int** | * 活动开始时间 unix time | 
**end_time** | **int** | * 活动截止时间 unix time | 
**h5_url** | **string** | 团购活动详情页链接 | 
**status** | **int** | * 活动状态 创建时可以忽略  * 1：有效  * 2：审核中  * 3：审核失败  * 4：中止 | [optional] 
**sold_count** | **int** | 已售出数量 | [optional] 
**audit_msg** | **string** | 审核失败原因 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

