# # Transaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | [**\macropage\SDKs\ebay\rest\finance\Model\Amount**](Amount.md) |  | [optional] 
**bookingEntry** | **string** | The enumeration value returned in this field indicates if the monetary transaction amount is a (CREDIT) or a (DEBIT) to the seller&#39;s account. Typically, the SALE and CREDIT transaction types are credits to the seller&#39;s account, and the REFUND, DISPUTE, SHIPPING_LABEL, and TRANSFER transaction types are debits to the seller&#39;s account. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**buyer** | [**\macropage\SDKs\ebay\rest\finance\Model\Buyer**](Buyer.md) |  | [optional] 
**orderId** | **string** | The unique identifier of the eBay order associated with the monetary transaction. | [optional] 
**orderLineItems** | [**\macropage\SDKs\ebay\rest\finance\Model\OrderLineItem[]**](OrderLineItem.md) | This array shows the fees that are deducted from a seller payout for each line item in an order. | [optional] 
**paymentsEntity** | **string** | This string value indicates the entity that is processing the payment. | [optional] 
**payoutId** | **string** | The unique identifier of the seller payout associated with the monetary transaction. This identifier is generated once eBay begins processing the payout for the corresponding order. This field will not be returned if eBay has not yet begun processing the payout for an order. | [optional] 
**salesRecordReference** | **string** | The Sales Record Number associated with a sales order. Sales Record Numbers are Selling Manager/Selling Manager Pro identifiers that are created at order checkout. Note: For all orders originating after February 1, 2020, a value of 0 will be returned in this field. The Sales Record Number field has also been removed from Seller Hub. Instead of salesRecordReference, depend on orderId instead as the identifier of the order. The salesRecordReference field has been scheduled for deprecation, and a date for when this field will no longer be returned at all will be announced soon. | [optional] 
**totalFeeBasisAmount** | [**\macropage\SDKs\ebay\rest\finance\Model\Amount**](Amount.md) |  | [optional] 
**totalFeeAmount** | [**\macropage\SDKs\ebay\rest\finance\Model\Amount**](Amount.md) |  | [optional] 
**transactionDate** | **string** | This timestamp indicates when the monetary transaction (order purchase, buyer refund, seller credit) occurred. The following format is used: YYYY-MM-DDTHH:MM:SS.SSSZ. For example, 2015-08-04T19:09:02.768Z. | [optional] 
**transactionId** | **string** | The unique identifier of the monetary transaction. A monetary transaction can be a sales order, an order refund to the buyer, a credit to the seller&#39;s account, a debit to the seller for the purchase of a shipping label, or a transaction where eBay recouped money from the seller if the seller lost a buyer-initiated payment dispute. | [optional] 
**transactionMemo** | **string** | This field provides more details on a shipping label transaction, such as a purchase, a refund, or a price adjustment to the cost of the shipping label. This field is only returned if applicable/available. Currently, this field is only used for shipping label transactions, but it is possible that it will be used for other transaction types in the future. | [optional] 
**transactionStatus** | **string** | This enumeration value indicates the current status of the seller payout associated with the monetary transaction. See the TransactionStatusEnum type for more information on the different states. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/finances/types/pay:TransactionStatusEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 
**transactionType** | **string** | This enumeration value indicates whether the monetary transaction is a buyer&#39;s payment for an order, a refund to the buyer for a returned item or cancelled order, a credit issued by eBay to the seller&#39;s account, a payment dispute between the buyer and seller, or where eBay is billing the seller for an eBay shipping label or another charge (such as a refund to a buyer). Note that the shipping label functionality will initially only be available to a select number of sellers. For implementation help, refer to &lt;a href&#x3D;&#39;https://developer.ebay.com/api-docs/sell/finances/types/pay:TransactionTypeEnum&#39;&gt;eBay API documentation&lt;/a&gt; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


