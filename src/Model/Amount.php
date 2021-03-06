<?php
/**
 * Amount
 *
 * PHP version 7.2
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
 * The version of the OpenAPI document: 1.4.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.0-SNAPSHOT
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
 * Amount Class Doc Comment
 *
 * @category Class
 * @description This type is used to express the dollar value and currency used for any transaction retrieved with the Finances API, including an order total, a seller payout, a buyer refund, or a seller credit.
 * @package  macropage\SDKs\ebay\rest\finance
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Amount implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Amount';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'currency' => 'string',
        'convertedFromCurrency' => 'string',
        'convertedFromValue' => 'string',
        'exchangeRate' => 'string',
        'value' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'currency' => null,
        'convertedFromCurrency' => null,
        'convertedFromValue' => null,
        'exchangeRate' => null,
        'value' => null
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
        'currency' => 'currency',
        'convertedFromCurrency' => 'convertedFromCurrency',
        'convertedFromValue' => 'convertedFromValue',
        'exchangeRate' => 'exchangeRate',
        'value' => 'value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'currency' => 'setCurrency',
        'convertedFromCurrency' => 'setConvertedFromCurrency',
        'convertedFromValue' => 'setConvertedFromValue',
        'exchangeRate' => 'setExchangeRate',
        'value' => 'setValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'currency' => 'getCurrency',
        'convertedFromCurrency' => 'getConvertedFromCurrency',
        'convertedFromValue' => 'getConvertedFromValue',
        'exchangeRate' => 'getExchangeRate',
        'value' => 'getValue'
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
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['convertedFromCurrency'] = isset($data['convertedFromCurrency']) ? $data['convertedFromCurrency'] : null;
        $this->container['convertedFromValue'] = isset($data['convertedFromValue']) ? $data['convertedFromValue'] : null;
        $this->container['exchangeRate'] = isset($data['exchangeRate']) ? $data['exchangeRate'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
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
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency A three-letter ISO 4217 code that indicates the currency of the amount in the value field. This field is always returned with any container using Amount type. Default: The currency of the authenticated user's country. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/base:CurrencyCodeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets convertedFromCurrency
     *
     * @return string|null
     */
    public function getConvertedFromCurrency()
    {
        return $this->container['convertedFromCurrency'];
    }

    /**
     * Sets convertedFromCurrency
     *
     * @param string|null $convertedFromCurrency The three-letter ISO 4217 code representing the currency of the amount in the convertedFromValue field. This value is the pre-conversion currency. This field is only returned if/when currency conversion was applied by eBay. For implementation help, refer to <a href='https://developer.ebay.com/api-docs/sell/finances/types/base:CurrencyCodeEnum'>eBay API documentation</a>
     *
     * @return $this
     */
    public function setConvertedFromCurrency($convertedFromCurrency)
    {
        $this->container['convertedFromCurrency'] = $convertedFromCurrency;

        return $this;
    }

    /**
     * Gets convertedFromValue
     *
     * @return string|null
     */
    public function getConvertedFromValue()
    {
        return $this->container['convertedFromValue'];
    }

    /**
     * Sets convertedFromValue
     *
     * @param string|null $convertedFromValue The monetary amount before any conversion is performed, in the currency specified by the convertedFromCurrency field. This value is the pre-conversion amount. The value field contains the converted amount of this value, in the currency specified by the currency field. This field is only returned if/when currency conversion was applied by eBay.
     *
     * @return $this
     */
    public function setConvertedFromValue($convertedFromValue)
    {
        $this->container['convertedFromValue'] = $convertedFromValue;

        return $this;
    }

    /**
     * Gets exchangeRate
     *
     * @return string|null
     */
    public function getExchangeRate()
    {
        return $this->container['exchangeRate'];
    }

    /**
     * Sets exchangeRate
     *
     * @param string|null $exchangeRate The exchange rate used for the monetary conversion. This field shows the exchange rate used to convert the dollar value in the value field from the dollar value in the convertedFromValue field. This field is only returned when eBay does a currency version, and a currency conversion is generally needed if the buyer is viewing, or has purchased an item on an international site. This field is only returned if/when currency conversion was applied by eBay.
     *
     * @return $this
     */
    public function setExchangeRate($exchangeRate)
    {
        $this->container['exchangeRate'] = $exchangeRate;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value The monetary amount, in the currency specified by the currency field. This field is always returned with any container using Amount type.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


