# # Payout

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\macropage\SDKs\ebay\rest\finance\Model\Amount**](Amount.md) |  | [optional] 
**lastAttemptedPayoutDate** | **string** | This timestamp indicates the date/time when eBay last attempted to process a seller payout but it failed. This field is only returned if a seller payout fails, and the payoutStatus value shows RETRYABLE_FAILED or TERMINAL_FAILED. A seller can filter on the lastAttemptedPayoutDate in a getPayouts request. | [optional] 
**payoutDate** | **string** | This timestamp indicates when the seller payout began processing. The following format is used: YYYY-MM-DDTHH:MM:SS.SSSZ. For example, 2015-08-04T19:09:02.768Z. This field is still returned even if the payout was pending but failed (payoutStatus value shows RETRYABLE_FAILED or TERMINAL_FAILED). | [optional] 
**payoutId** | **string** | The unique identifier of the seller payout. This identifier is generated once eBay begins processing the payout to the seller&#39;s bank account. | [optional] 
**payoutInstrument** | [**\macropage\SDKs\ebay\rest\finance\Model\PayoutInstrument**](PayoutInstrument.md) |  | [optional] 
**payoutStatus** | **string** | This enumeration value indicates the current status of the seller payout. For a successful payout, the value returned will be SUCCEEDED. See the PayoutStatusEnum type for more details on each payout status value. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/finances/types/pay:PayoutStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**payoutStatusDescription** | **string** | This field provides more details about the current status of payout. The description returned here will correspond with enumeration value returned in the payoutStatus field. The following shows what description text might appear based on the different payoutStatus values: INITIATED: Preparing to send SUCCEEDED: Funds sent REVERSED: Waiting to retry : Money rejected by seller&#39;s bank RETRYABLE_FAILED: Waiting to retry TERMINAL_FAILED: Payout failed | [optional] 
**transactionCount** | **int** | This integer value indicates the number of monetary transactions (all orders, refunds, and credits, etc.) that have occurred with the corresponding payout. Its value should always be at least 1, since there is at least one order per seller payout. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


