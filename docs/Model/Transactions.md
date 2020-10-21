# # Transactions

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | The URI of the getTransactions method request that produced the current page of the result set. | [optional] 
**limit** | **int** | The maximum number of monetary transactions that may be returned per page of the result set. The limit value can be passed in as a query parameter, or if omitted, its value defaults to 20. Note: If this is the last or only page of the result set, the page may contain fewer monetary transactions than the limit value. To determine the number of pages in a result set, divide the total value (total number of monetary transactions matching input criteria) by this limit value, and then round up to the next integer. For example, if the total value was 120 (120 total monetary transactions) and the limit value was 50 (show 50 monetary transactions per page), the total number of pages in the result set is three, so the seller would have to make three separate getTransactions calls to view all monetary transactions matching the input criteria. Maximum: 200 Default: 20 | [optional] 
**next** | **string** | The getTransactions method URI to use if you wish to view the next page of the result set. This field is only returned if there is a next page of results to view based on the current input criteria. | [optional] 
**offset** | **int** | This integer value indicates the actual position that the first monetary transaction returned on the current page has in the results set. So, if you wanted to view the 11th monetary transaction of the result set, you would set the offset value in the request to 10. In the request, you can use the offset parameter in conjunction with the limit parameter to control the pagination of the output. For example, if offset is set to 30 and limit is set to 10, the method retrieves monetary transactions 31 thru 40 from the resulting collection of monetary transactions. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. Default: 0 (zero) | [optional] 
**prev** | **string** | The getTransactions method URI to use if you wish to view the previous page of the result set. This field is only returned if there is a previous page of results to view based on the current input criteria. | [optional] 
**total** | **int** | This integer value is the total amount of monetary transactions in the result set based on the current input criteria. Based on the total number of monetary transactions that match the criteria, and on the limit and offset values, there may be additional pages in the results set. | [optional] 
**transactions** | [**\macropage\SDKs\ebay\rest\finance\Model\Transaction[]**](Transaction.md) | An array of one or more monetary transactions that match the input criteria. Details for each monetary transaction may include the unique identifier of the order associated with the monetary transaction, the status of the transaction, the amount of the order, the order&#39;s buyer, and the unique identifier of the payout (if a payout has been initiated/issued for the order). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


