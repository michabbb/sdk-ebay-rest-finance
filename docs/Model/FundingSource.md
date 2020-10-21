# # FundingSource

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**brand** | **string** | The brand name of the credit card or the name of the financial institution that is the source of payment. This field may not be populated for other funding sources. | [optional] 
**memo** | **string** | This field provides a note about the funding source. If the seller&#39;s credit card or bank account is the funding source, this field might contain the last four digits of the credit card or bank account. This field may also be returned as null. | [optional] 
**type** | **string** | The string value returned here indicates the funding source. Possible values include the following: AVAILABLE_FUNDS: transfer is funded with seller payout funds CREDIT_CARD: transfer is funded with seller&#39;s credit card BANK: transfer is funded with a direct debit to seller&#39;s bank account on file with eBay PAY_UPON_INVOICE: eBay will bill the seller for the transfer on the monthly invoice | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


