# # PayoutSummaryResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\macropage\SDKs\ebay\rest\finance\Model\Amount**](Amount.md) |  | [optional] 
**payoutCount** | **int** | This integer value indicates the total count of payouts to the seller that match the input criteria. This field is always returned, even if there are no payouts that match the input criteria (its value will show 0). | [optional] 
**transactionCount** | **int** | This integer value indicates the total count of monetary transactions (order payments, buyer refunds, and seller credits) associated with the payouts that match the input criteria. This field is always returned, even if there are no payouts that match the input criteria (its value will show 0). If there is at least one payout that matches the input criteria, the value in this field will be at least 1. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


