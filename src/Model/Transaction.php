<?php
/**
 * Transaction
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  macropage\SDKs\ebay\rest\finance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * eBay Finances API
 *
 * This API is used to retrieve seller payouts and monetary transaction details related to those payouts.
 *
 * The version of the OpenAPI document: 1.9.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace macropage\SDKs\ebay\rest\finance\Model;

use \ArrayAccess;
use \macropage\SDKs\ebay\rest\finance\ObjectSerializer;

/**
 * Transaction Class Doc Comment
 *
 * @category Class
 * @description This type is used to express the details of one of the following monetary transactions: a buyer&#39;s payment for an order, a refund to the buyer for a returned item or cancelled order, or a credit issued by eBay to the seller&#39;s account.
 * @package  macropage\SDKs\ebay\rest\finance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Transaction implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => '\macropage\SDKs\ebay\rest\finance\Model\Amount',
        'bookingEntry' => 'string',
        'buyer' => '\macropage\SDKs\ebay\rest\finance\Model\Buyer',
        'feeType' => 'string',
        'orderId' => 'string',
        'orderLineItems' => '\macropage\SDKs\ebay\rest\finance\Model\OrderLineItem[]',
        'paymentsEntity' => 'string',
        'payoutId' => 'string',
        'references' => '\macropage\SDKs\ebay\rest\finance\Model\Reference[]',
        'salesRecordReference' => 'string',
        'totalFeeBasisAmount' => '\macropage\SDKs\ebay\rest\finance\Model\Amount',
        'totalFeeAmount' => '\macropage\SDKs\ebay\rest\finance\Model\Amount',
        'transactionDate' => 'string',
        'transactionId' => 'string',
        'transactionMemo' => 'string',
        'transactionStatus' => 'string',
        'transactionType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'bookingEntry' => null,
        'buyer' => null,
        'feeType' => null,
        'orderId' => null,
        'orderLineItems' => null,
        'paymentsEntity' => null,
        'payoutId' => null,
        'references' => null,
        'salesRecordReference' => null,
        'totalFeeBasisAmount' => null,
        'totalFeeAmount' => null,
        'transactionDate' => null,
        'transactionId' => null,
        'transactionMemo' => null,
        'transactionStatus' => null,
        'transactionType' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'bookingEntry' => 'bookingEntry',
        'buyer' => 'buyer',
        'feeType' => 'feeType',
        'orderId' => 'orderId',
        'orderLineItems' => 'orderLineItems',
        'paymentsEntity' => 'paymentsEntity',
        'payoutId' => 'payoutId',
        'references' => 'references',
        'salesRecordReference' => 'salesRecordReference',
        'totalFeeBasisAmount' => 'totalFeeBasisAmount',
        'totalFeeAmount' => 'totalFeeAmount',
        'transactionDate' => 'transactionDate',
        'transactionId' => 'transactionId',
        'transactionMemo' => 'transactionMemo',
        'transactionStatus' => 'transactionStatus',
        'transactionType' => 'transactionType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'bookingEntry' => 'setBookingEntry',
        'buyer' => 'setBuyer',
        'feeType' => 'setFeeType',
        'orderId' => 'setOrderId',
        'orderLineItems' => 'setOrderLineItems',
        'paymentsEntity' => 'setPaymentsEntity',
        'payoutId' => 'setPayoutId',
        'references' => 'setReferences',
        'salesRecordReference' => 'setSalesRecordReference',
        'totalFeeBasisAmount' => 'setTotalFeeBasisAmount',
        'totalFeeAmount' => 'setTotalFeeAmount',
        'transactionDate' => 'setTransactionDate',
        'transactionId' => 'setTransactionId',
        'transactionMemo' => 'setTransactionMemo',
        'transactionStatus' => 'setTransactionStatus',
        'transactionType' => 'setTransactionType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'bookingEntry' => 'getBookingEntry',
        'buyer' => 'getBuyer',
        'feeType' => 'getFeeType',
        'orderId' => 'getOrderId',
        'orderLineItems' => 'getOrderLineItems',
        'paymentsEntity' => 'getPaymentsEntity',
        'payoutId' => 'getPayoutId',
        'references' => 'getReferences',
        'salesRecordReference' => 'getSalesRecordReference',
        'totalFeeBasisAmount' => 'getTotalFeeBasisAmount',
        'totalFeeAmount' => 'getTotalFeeAmount',
        'transactionDate' => 'getTransactionDate',
        'transactionId' => 'getTransactionId',
        'transactionMemo' => 'getTransactionMemo',
        'transactionStatus' => 'getTransactionStatus',
        'transactionType' => 'getTransactionType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['amount'] = $data['amount'] ?? null;
        $this->container['bookingEntry'] = $data['bookingEntry'] ?? null;
        $this->container['buyer'] = $data['buyer'] ?? null;
        $this->container['feeType'] = $data['feeType'] ?? null;
        $this->container['orderId'] = $data['orderId'] ?? null;
        $this->container['orderLineItems'] = $data['orderLineItems'] ?? null;
        $this->container['paymentsEntity'] = $data['paymentsEntity'] ?? null;
        $this->container['payoutId'] = $data['payoutId'] ?? null;
        $this->container['references'] = $data['references'] ?? null;
        $this->container['salesRecordReference'] = $data['salesRecordReference'] ?? null;
        $this->container['totalFeeBasisAmount'] = $data['totalFeeBasisAmount'] ?? null;
        $this->container['totalFeeAmount'] = $data['totalFeeAmount'] ?? null;
        $this->container['transactionDate'] = $data['transactionDate'] ?? null;
        $this->container['transactionId'] = $data['transactionId'] ?? null;
        $this->container['transactionMemo'] = $data['transactionMemo'] ?? null;
        $this->container['transactionStatus'] = $data['transactionStatus'] ?? null;
        $this->container['transactionType'] = $data['transactionType'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets amount
     *
     * @return \macropage\SDKs\ebay\rest\finance\Model\Amount|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param \macropage\SDKs\ebay\rest\finance\Model\Amount|null $amount amount
     *
     * @return self
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets bookingEntry
     *
     * @return string|null
     */
    public function getBookingEntry()
    {
        return $this->container['bookingEntry'];
    }

    /**
     * Sets bookingEntry
     *
     * @param string|null $bookingEntry The enumeration value returned in this field indicates if the monetary transaction amount is a (<code>CREDIT</code>) or a (<code>DEBIT</code>) to the seller's account. Typically, the <code>SALE</code> and <code>CREDIT</code> transaction types are credits to the seller's account, and the <code>REFUND</code>, <code>DISPUTE</code>, <code>SHIPPING_LABEL</code>, and <code>TRANSFER</code> transaction types are debits to the seller's account. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:BookingEntryEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setBookingEntry($bookingEntry)
    {
        $this->container['bookingEntry'] = $bookingEntry;

        return $this;
    }

    /**
     * Gets buyer
     *
     * @return \macropage\SDKs\ebay\rest\finance\Model\Buyer|null
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer
     *
     * @param \macropage\SDKs\ebay\rest\finance\Model\Buyer|null $buyer buyer
     *
     * @return self
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets feeType
     *
     * @return string|null
     */
    public function getFeeType()
    {
        return $this->container['feeType'];
    }

    /**
     * Sets feeType
     *
     * @param string|null $feeType The type of fee. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/api:FeeTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setFeeType($feeType)
    {
        $this->container['feeType'] = $feeType;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string|null
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string|null $orderId The unique identifier of the eBay order associated with the monetary transaction.
     *
     * @return self
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets orderLineItems
     *
     * @return \macropage\SDKs\ebay\rest\finance\Model\OrderLineItem[]|null
     */
    public function getOrderLineItems()
    {
        return $this->container['orderLineItems'];
    }

    /**
     * Sets orderLineItems
     *
     * @param \macropage\SDKs\ebay\rest\finance\Model\OrderLineItem[]|null $orderLineItems This array shows the fees that are deducted from a seller payout for each line item in an order.
     *
     * @return self
     */
    public function setOrderLineItems($orderLineItems)
    {
        $this->container['orderLineItems'] = $orderLineItems;

        return $this;
    }

    /**
     * Gets paymentsEntity
     *
     * @return string|null
     */
    public function getPaymentsEntity()
    {
        return $this->container['paymentsEntity'];
    }

    /**
     * Sets paymentsEntity
     *
     * @param string|null $paymentsEntity This string value indicates the entity that is processing  the payment.
     *
     * @return self
     */
    public function setPaymentsEntity($paymentsEntity)
    {
        $this->container['paymentsEntity'] = $paymentsEntity;

        return $this;
    }

    /**
     * Gets payoutId
     *
     * @return string|null
     */
    public function getPayoutId()
    {
        return $this->container['payoutId'];
    }

    /**
     * Sets payoutId
     *
     * @param string|null $payoutId The unique identifier of the seller payout associated with the monetary transaction. This identifier is generated once eBay begins processing the payout for the corresponding order. This field will not be returned if eBay has not yet begun processing the payout for an order.
     *
     * @return self
     */
    public function setPayoutId($payoutId)
    {
        $this->container['payoutId'] = $payoutId;

        return $this;
    }

    /**
     * Gets references
     *
     * @return \macropage\SDKs\ebay\rest\finance\Model\Reference[]|null
     */
    public function getReferences()
    {
        return $this->container['references'];
    }

    /**
     * Sets references
     *
     * @param \macropage\SDKs\ebay\rest\finance\Model\Reference[]|null $references This field contains reference information for the transaction fee. This includes an ID and the type of ID provided (such as item ID).
     *
     * @return self
     */
    public function setReferences($references)
    {
        $this->container['references'] = $references;

        return $this;
    }

    /**
     * Gets salesRecordReference
     *
     * @return string|null
     */
    public function getSalesRecordReference()
    {
        return $this->container['salesRecordReference'];
    }

    /**
     * Sets salesRecordReference
     *
     * @param string|null $salesRecordReference The Sales Record Number associated with a sales order. Sales Record Numbers are Selling Manager/Selling Manager Pro identifiers that are created at order checkout.<br/><br/><span class=\"tablenote\"><strong>Note:</strong> For all orders originating after February 1, 2020, a value of <code>0</code> will be returned in this field. The Sales Record Number field has also been removed from Seller Hub. Instead of <strong>salesRecordReference</strong>, depend on <strong>orderId</strong> instead as the identifier of the order. The <strong>salesRecordReference</strong> field has been scheduled for deprecation, and a date for when this field will no longer be returned at all will be announced soon.</span>
     *
     * @return self
     */
    public function setSalesRecordReference($salesRecordReference)
    {
        $this->container['salesRecordReference'] = $salesRecordReference;

        return $this;
    }

    /**
     * Gets totalFeeBasisAmount
     *
     * @return \macropage\SDKs\ebay\rest\finance\Model\Amount|null
     */
    public function getTotalFeeBasisAmount()
    {
        return $this->container['totalFeeBasisAmount'];
    }

    /**
     * Sets totalFeeBasisAmount
     *
     * @param \macropage\SDKs\ebay\rest\finance\Model\Amount|null $totalFeeBasisAmount totalFeeBasisAmount
     *
     * @return self
     */
    public function setTotalFeeBasisAmount($totalFeeBasisAmount)
    {
        $this->container['totalFeeBasisAmount'] = $totalFeeBasisAmount;

        return $this;
    }

    /**
     * Gets totalFeeAmount
     *
     * @return \macropage\SDKs\ebay\rest\finance\Model\Amount|null
     */
    public function getTotalFeeAmount()
    {
        return $this->container['totalFeeAmount'];
    }

    /**
     * Sets totalFeeAmount
     *
     * @param \macropage\SDKs\ebay\rest\finance\Model\Amount|null $totalFeeAmount totalFeeAmount
     *
     * @return self
     */
    public function setTotalFeeAmount($totalFeeAmount)
    {
        $this->container['totalFeeAmount'] = $totalFeeAmount;

        return $this;
    }

    /**
     * Gets transactionDate
     *
     * @return string|null
     */
    public function getTransactionDate()
    {
        return $this->container['transactionDate'];
    }

    /**
     * Sets transactionDate
     *
     * @param string|null $transactionDate This timestamp indicates when the monetary transaction (order purchase, buyer refund, seller credit) occurred. The following (UTC) format is used: <code>YYYY-MM-DDTHH:MM:SS.SSSZ</code>. For example, <code>2015-08-04T19:09:02.768Z</code>.
     *
     * @return self
     */
    public function setTransactionDate($transactionDate)
    {
        $this->container['transactionDate'] = $transactionDate;

        return $this;
    }

    /**
     * Gets transactionId
     *
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string|null $transactionId The unique identifier of the monetary transaction. A monetary transaction can be a sales order, an order refund to the buyer, a credit to the seller's account, a debit to the seller for the purchase of a shipping label, or a transaction where eBay recouped money from the seller if the seller lost a buyer-initiated payment dispute.
     *
     * @return self
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets transactionMemo
     *
     * @return string|null
     */
    public function getTransactionMemo()
    {
        return $this->container['transactionMemo'];
    }

    /**
     * Sets transactionMemo
     *
     * @param string|null $transactionMemo This field provides more details on shipping label transactions and transactions where the funds are being held by eBay. For shipping label transactions, the <b>transactionMemo</b> gives details about a purchase, a refund, or a price adjustment to the cost of the shipping label. For on-hold transactions, the <b>transactionMemo</b> provides information on the reason for the hold or when the hold will be released (e.g., \"Funds on hold. Estimated release on Jun 1\").<br/><br/>This field is only returned if applicable/available.
     *
     * @return self
     */
    public function setTransactionMemo($transactionMemo)
    {
        $this->container['transactionMemo'] = $transactionMemo;

        return $this;
    }

    /**
     * Gets transactionStatus
     *
     * @return string|null
     */
    public function getTransactionStatus()
    {
        return $this->container['transactionStatus'];
    }

    /**
     * Sets transactionStatus
     *
     * @param string|null $transactionStatus This enumeration value indicates the current status of the seller payout associated with the monetary transaction. See the <code>TransactionStatusEnum</code> type for more information on the different states. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:TransactionStatusEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setTransactionStatus($transactionStatus)
    {
        $this->container['transactionStatus'] = $transactionStatus;

        return $this;
    }

    /**
     * Gets transactionType
     *
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->container['transactionType'];
    }

    /**
     * Sets transactionType
     *
     * @param string|null $transactionType This enumeration value indicates whether the monetary transaction is a buyer's payment for an order, a refund to the buyer for a returned item or cancelled order, a credit issued by eBay to the seller's account, a payment dispute between the buyer and seller, or where eBay is billing the seller for an eBay shipping label or another charge (such as a refund to a buyer). Note that the shipping label functionality will initially only be available to a select number of sellers. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/pay:TransactionTypeEnum'>eBay API documentation</a>
     *
     * @return self
     */
    public function setTransactionType($transactionType)
    {
        $this->container['transactionType'] = $transactionType;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


