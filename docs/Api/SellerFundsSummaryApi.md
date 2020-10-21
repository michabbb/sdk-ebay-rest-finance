# macropage\SDKs\ebay\rest\finance\SellerFundsSummaryApi

All URIs are relative to *https://apiz.ebay.com/sell/finances/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSellerFundsSummary**](SellerFundsSummaryApi.md#getSellerFundsSummary) | **GET** /seller_funds_summary | 



## getSellerFundsSummary

> \macropage\SDKs\ebay\rest\finance\Model\SellerFundsSummaryResponse getSellerFundsSummary()



This method retrieves all pending funds that have not yet been distibuted through a seller payout. There are no input parameters for this method. The response payload includes available funds, funds being processed, funds on hold, and also an aggregate count of all three of these categories. If there are no funds that are pending, on hold, or being processed for the seller's account, no response payload is returned, and an http status code of 204 - No Content is returned instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: api_auth
$config = macropage\SDKs\ebay\rest\finance\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new macropage\SDKs\ebay\rest\finance\Api\SellerFundsSummaryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getSellerFundsSummary();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellerFundsSummaryApi->getSellerFundsSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\macropage\SDKs\ebay\rest\finance\Model\SellerFundsSummaryResponse**](../Model/SellerFundsSummaryResponse.md)

### Authorization

[api_auth](../../README.md#api_auth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

