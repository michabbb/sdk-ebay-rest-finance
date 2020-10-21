# macropage\SDKs\ebay\rest\finance\TransferApi

All URIs are relative to *https://apiz.ebay.com/sell/finances/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTransfer**](TransferApi.md#getTransfer) | **GET** /transfer/{transfer_Id} | 



## getTransfer

> \macropage\SDKs\ebay\rest\finance\Model\Transfer getTransfer($transferId)



This method retrieves detailed information regarding a TRANSFER transaction type. A TRANSFER is a monetary transaction type that involves a seller transferring money to eBay for reimbursement of one or more charges. For example, when a seller reimburses eBay for a buyer refund. If an ID is passed into the URI that is an identifier for another transaction type, this call will return an http status code of 404 Not found.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\finance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\finance\Api\TransferApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transferId = 'transferId_example'; // string | The unique identifier of the TRANSFER transaction type you wish to retrieve.

try {
    $result = $apiInstance->getTransfer($transferId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransferApi->getTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transferId** | **string**| The unique identifier of the TRANSFER transaction type you wish to retrieve. |

### Return type

[**\macropage\SDKs\ebay\rest\finance\Model\Transfer**](../Model/Transfer.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

