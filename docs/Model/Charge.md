# # Charge

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cancellationId** | **string** | The unique identifier of an order cancellation. This field is only applicable and returned if the charge is related to an order  cancellation. | [optional]
**caseId** | **string** | The unique identifier of a case filed against an order. This field is only applicable and returned if the charge is related to a case filed against an order. | [optional]
**chargeNetAmount** | [**\macropage\SDKs\ebay\rest\finance\Model\Amount**](Amount.md) |  | [optional]
**inquiryId** | **string** | The unique identifier of an Item Not Received (INR) inquiry filed against an order. This field is only applicable and returned if the charge is related to has an INR inquiry filed against the order. | [optional]
**orderId** | **string** | The unique identifier of the order that is associated with the charge. | [optional]
**paymentDisputeId** | **string** | The unique identifier of a third-party payment dispute filed against an order. This occurs when the buyer files a dispute against the order with their payment provider, and then the dispute comes into eBay&#39;s system. This field is only applicable and returned if the charge is related to a third-party payment dispute filed against an order. | [optional]
**refundId** | **string** | The unique identifier of a buyer refund associated with the charge. | [optional]
**returnId** | **string** | The unique identifier of an order return. This field is only applicable and returned if the charge is related to an order that was returned by the buyer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
