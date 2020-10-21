# macropage\SDKs\ebay\rest\finance\PayoutApi

All URIs are relative to *https://apiz.ebay.com/sell/finances/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getPayout**](PayoutApi.md#getPayout) | **GET** /payout/{payout_Id} | 
[**getPayoutSummary**](PayoutApi.md#getPayoutSummary) | **GET** /payout_summary | 
[**getPayouts**](PayoutApi.md#getPayouts) | **GET** /payout | 



## getPayout

> \macropage\SDKs\ebay\rest\finance\Model\Payout getPayout($payoutId)



This method retrieves details on a specific seller payout. The unique identfier of the payout is passed in as a path parameter at the end of the call URI. The getPayouts method can be used to retrieve the unique identifier of a payout, or the user can check Seller Hub.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\finance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\finance\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payoutId = 'payoutId_example'; // string | The unique identfier of the payout is passed in as a path parameter at the end of the call URI. The getPayouts method can be used to retrieve the unique identifier of a payout, or the user can check Seller Hub to get the payout ID.

try {
    $result = $apiInstance->getPayout($payoutId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payoutId** | **string**| The unique identfier of the payout is passed in as a path parameter at the end of the call URI. The getPayouts method can be used to retrieve the unique identifier of a payout, or the user can check Seller Hub to get the payout ID. |

### Return type

[**\macropage\SDKs\ebay\rest\finance\Model\Payout**](../Model/Payout.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPayoutSummary

> \macropage\SDKs\ebay\rest\finance\Model\PayoutSummaryResponse getPayoutSummary($filter)



This method is used to retrieve cumulative values for payouts in a particular state, or all states. The metadata in the response includes total payouts, the total number of monetary transactions (sales, refunds, credits) associated with those payouts, and the total dollar value of all payouts. If the filter query parameter is used to filter by payout status, only one payout status value may be used. If the filter query parameter is not used to filter by a specific payout status, cumulative values for payouts in all states are returned. The user can also use the filter query parameter to specify a date range, and then only payouts that were processed within that date range are considered.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\finance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\finance\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | The two filter types that can be used here are discussed below. One or both of these filter types can be used. If none of these filters are used, the data returned in the response will reflect payouts, in all states, processed within the last 90 days. payoutDate: consider payouts processed within a specific range of dates. The date format to use is YYYY-MM-DDTHH:MM:SS.SSSZ. Below is the proper syntax to use if filtering by a date range: https://apiz.ebay.com/sell/finances/v1/payout_summary?filter=payoutDate:[2018-12-17T00:00:01.000Z..2018-12-24T00:00:01.000Z] Alternatively, the user could omit the ending date, and the date range would include the starting date and up to 90 days past that date, or the current date if the starting date is less than 90 days in the past. payoutStatus: consider only the payouts in a particular state. Only one payout state can be specified with this filter. The supported payoutStatus values are as follows: INITIATED: search for payouts that have been initiated but not processed. SUCCEEDED: consider only successful payouts. RETRYABLE_FAILED: consider only payouts that failed, but ones which will be tried again. TERMINAL_FAILED: consider only payouts that failed, and ones that will not be tried again. REVERSED: consider only payouts that were reversed. Below is the proper syntax to use if filtering by payout status: https://apiz.ebay.com/sell/finances/v1/payout_summary?filter=payoutStatus:{SUCCEEDED} If both the payoutDate and payoutStatus filters are used, only the payouts that satisfy both criteria are considered in the results. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/cos:FilterField

try {
    $result = $apiInstance->getPayoutSummary($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayoutSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| The two filter types that can be used here are discussed below. One or both of these filter types can be used. If none of these filters are used, the data returned in the response will reflect payouts, in all states, processed within the last 90 days. payoutDate: consider payouts processed within a specific range of dates. The date format to use is YYYY-MM-DDTHH:MM:SS.SSSZ. Below is the proper syntax to use if filtering by a date range: https://apiz.ebay.com/sell/finances/v1/payout_summary?filter&#x3D;payoutDate:[2018-12-17T00:00:01.000Z..2018-12-24T00:00:01.000Z] Alternatively, the user could omit the ending date, and the date range would include the starting date and up to 90 days past that date, or the current date if the starting date is less than 90 days in the past. payoutStatus: consider only the payouts in a particular state. Only one payout state can be specified with this filter. The supported payoutStatus values are as follows: INITIATED: search for payouts that have been initiated but not processed. SUCCEEDED: consider only successful payouts. RETRYABLE_FAILED: consider only payouts that failed, but ones which will be tried again. TERMINAL_FAILED: consider only payouts that failed, and ones that will not be tried again. REVERSED: consider only payouts that were reversed. Below is the proper syntax to use if filtering by payout status: https://apiz.ebay.com/sell/finances/v1/payout_summary?filter&#x3D;payoutStatus:{SUCCEEDED} If both the payoutDate and payoutStatus filters are used, only the payouts that satisfy both criteria are considered in the results. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/cos:FilterField | [optional]

### Return type

[**\macropage\SDKs\ebay\rest\finance\Model\PayoutSummaryResponse**](../Model/PayoutSummaryResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## getPayouts

> \macropage\SDKs\ebay\rest\finance\Model\Payouts getPayouts($filter, $sort, $limit, $offset)



This method is used to retrieve the details of one or more seller payouts. By using the filter query parameter, users can retrieve payouts processed within a specific date range, and/or they can retrieve payouts in a specific state. There are also pagination and sort query parameters that allow users to control the payouts that are returned in the response. If no payouts match the input criteria, an empty payload is returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\finance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\finance\Api\PayoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = 'filter_example'; // string | The three filter types that can be used here are discussed below. If none of these filters are used, all recent payouts in all states are returned: payoutDate: search for payouts within a specific range of dates. The date format to use is YYYY-MM-DDTHH:MM:SS.SSSZ. Below is the proper syntax to use if filtering by a date range: https://apiz.ebay.com/sell/finances/v1/payout?filter=payoutDate:[2018-12-17T00:00:01.000Z..2018-12-24T00:00:01.000Z] Alternatively, the user could omit the ending date, and the date range would include the starting date and up to 90 days past that date, or the current date if the starting date is less than 90 days in the past. lastAttemptedPayoutDate: search for attempted payouts that failed within a specific range of dates. In order to use this filter, the payoutStatus filter must also be used and its value must be set to RETRYABLE_FAILED. The date format to use is YYYY-MM-DDTHH:MM:SS.SSSZ. The same syntax used for the payoutDate filter is also used for the lastAttemptedPayoutDate filter. This filter is only applicable (and will return results) if one or more seller payouts have failed, but are retryable. payoutStatus: search for payouts in a particular state. Only one payout state can be specified with this filter. The supported payoutStatus values are as follows: INITIATED: search for payouts that have been initiated but not processed. SUCCEEDED: search for successful payouts. RETRYABLE_FAILED: search for payouts that failed, but ones which will be tried again. This value must be used if filtering by lastAttemptedPayoutDate. TERMINAL_FAILED: search for payouts that failed, and ones that will not be tried again. REVERSED: search for payouts that were reversed. Below is the proper syntax to use if filtering by payout status: https://apiz.ebay.com/sell/finances/v1/payout?filter=payoutStatus:{SUCCEEDED} If both the payoutDate and payoutStatus filters are used, payouts must satisfy both criteria to be returned. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/cos:FilterField
$sort = 'sort_example'; // string | By default, payouts or failed payouts that match the input criteria are sorted in ascending order according to the payout date/last attempted payout date (oldest payouts returned first). To view payouts in descending order instead (most recent payouts/attempted payouts first), you would include the sort query parameter, and then set the value of its field parameter to payoutDate or lastAttemptedPayoutDate (if searching for failed, retrybable payouts). Below is the proper syntax to use if filtering by a payout date range in descending order: https://apiz.ebay.com/sell/finances/v1/payout?filter=payoutDate:[2018-12-17T00:00:01.000Z..2018-12-24T00:00:01.000Z]&amp;sort=payoutDate Payouts can only be sorted according to payout date, and can not be sorted by payout status. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/cos:SortField
$limit = 'limit_example'; // string | The number of payouts to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagination of the output. For example, if offset is set to 10 and limit is set to 10, the method retrieves payouts 11 thru 20 from the result set. Note: This feature employs a zero-based list, where the first payout in the results set has an offset value of 0. Maximum: 200 Default: 20
$offset = 'offset_example'; // string | This integer value indicates the actual position that the first payout returned on the current page has in the results set. So, if you wanted to view the 11th payout of the result set, you would set the offset value in the request to 10. In the request, you can use the offset parameter in conjunction with the limit parameter to control the pagination of the output. For example, if offset is set to 30 and limit is set to 10, the method retrieves payouts 31 thru 40 from the resulting collection of payouts. Note: This feature employs a zero-based list, where the first payout in the results set has an offset value of 0. Default: 0 (zero)

try {
    $result = $apiInstance->getPayouts($filter, $sort, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PayoutApi->getPayouts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | **string**| The three filter types that can be used here are discussed below. If none of these filters are used, all recent payouts in all states are returned: payoutDate: search for payouts within a specific range of dates. The date format to use is YYYY-MM-DDTHH:MM:SS.SSSZ. Below is the proper syntax to use if filtering by a date range: https://apiz.ebay.com/sell/finances/v1/payout?filter&#x3D;payoutDate:[2018-12-17T00:00:01.000Z..2018-12-24T00:00:01.000Z] Alternatively, the user could omit the ending date, and the date range would include the starting date and up to 90 days past that date, or the current date if the starting date is less than 90 days in the past. lastAttemptedPayoutDate: search for attempted payouts that failed within a specific range of dates. In order to use this filter, the payoutStatus filter must also be used and its value must be set to RETRYABLE_FAILED. The date format to use is YYYY-MM-DDTHH:MM:SS.SSSZ. The same syntax used for the payoutDate filter is also used for the lastAttemptedPayoutDate filter. This filter is only applicable (and will return results) if one or more seller payouts have failed, but are retryable. payoutStatus: search for payouts in a particular state. Only one payout state can be specified with this filter. The supported payoutStatus values are as follows: INITIATED: search for payouts that have been initiated but not processed. SUCCEEDED: search for successful payouts. RETRYABLE_FAILED: search for payouts that failed, but ones which will be tried again. This value must be used if filtering by lastAttemptedPayoutDate. TERMINAL_FAILED: search for payouts that failed, and ones that will not be tried again. REVERSED: search for payouts that were reversed. Below is the proper syntax to use if filtering by payout status: https://apiz.ebay.com/sell/finances/v1/payout?filter&#x3D;payoutStatus:{SUCCEEDED} If both the payoutDate and payoutStatus filters are used, payouts must satisfy both criteria to be returned. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/cos:FilterField | [optional]
 **sort** | **string**| By default, payouts or failed payouts that match the input criteria are sorted in ascending order according to the payout date/last attempted payout date (oldest payouts returned first). To view payouts in descending order instead (most recent payouts/attempted payouts first), you would include the sort query parameter, and then set the value of its field parameter to payoutDate or lastAttemptedPayoutDate (if searching for failed, retrybable payouts). Below is the proper syntax to use if filtering by a payout date range in descending order: https://apiz.ebay.com/sell/finances/v1/payout?filter&#x3D;payoutDate:[2018-12-17T00:00:01.000Z..2018-12-24T00:00:01.000Z]&amp;amp;sort&#x3D;payoutDate Payouts can only be sorted according to payout date, and can not be sorted by payout status. For implementation help, refer to eBay API documentation at https://developer.ebay.com/api-docs/sell/finances/types/cos:SortField | [optional]
 **limit** | **string**| The number of payouts to return per page of the result set. Use this parameter in conjunction with the offset parameter to control the pagination of the output. For example, if offset is set to 10 and limit is set to 10, the method retrieves payouts 11 thru 20 from the result set. Note: This feature employs a zero-based list, where the first payout in the results set has an offset value of 0. Maximum: 200 Default: 20 | [optional]
 **offset** | **string**| This integer value indicates the actual position that the first payout returned on the current page has in the results set. So, if you wanted to view the 11th payout of the result set, you would set the offset value in the request to 10. In the request, you can use the offset parameter in conjunction with the limit parameter to control the pagination of the output. For example, if offset is set to 30 and limit is set to 10, the method retrieves payouts 31 thru 40 from the resulting collection of payouts. Note: This feature employs a zero-based list, where the first payout in the results set has an offset value of 0. Default: 0 (zero) | [optional]

### Return type

[**\macropage\SDKs\ebay\rest\finance\Model\Payouts**](../Model/Payouts.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

