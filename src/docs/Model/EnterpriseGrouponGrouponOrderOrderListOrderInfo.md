# EnterpriseGrouponGrouponOrderOrderListOrderInfo

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**order_id** | **string** | 团购活动订单Id | 
**channel** | **string** | 订单来源 | 
**buyer_open_id** | **string** | 买家的open_id | 
**original_amount** | **int** | 原价，单位分 | 
**amount** | **int** | 订单金额，单位分 | 
**refund_amount** | **int** | 退款金额，单位分 | 
**settle_amount** | **int** | 结算金额，单位分 | 
**item_count** | **int** | 团购券个数 | 
**status** | **int** | * 订单状态   * 1: 订单完成   * 101: 支付完成   * 200: 发起核销   * 201: 核销完成   * 202: 核销失败   * 299: 用户申请退款   * 300: 商户发起退款   * 301: 退款成功   * 302: 退款失败 | 
**create_time** | **int** | 订单创建时间 unix time | 
**pay_time** | **int** | 订单支付时间 unix time | 
**refund_time** | **int** | 退款完成时间 unix time | [optional] 
**codes** | [**\swagger_client\Model\EnterpriseGrouponGrouponOrderOrderListCodeInfo[]**](EnterpriseGrouponGrouponOrderOrderListCodeInfo.md) | 团购券码列表 | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

