<?php
/**
 * Pricing.
 *
 * PHP version 7
 *
 * @category Class
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */

/**
 * Lasso API.
 *
 * Manage Registrant and Inventory data within Lasso CRM.  Authorization header with a Bearer JWT api key token is required for all requests. API keys are project/location based, and can be obtained from your business contact with Lasso Data Systems. In the future, Project Admin's will be able to generate their own api keys from the Lasso CRM web application.  To try it out in swagger: - Select the `Authorize` button and place your api key in the textbox - Ensure that the api key is prefixed with `Bearer` including a space separating `Bearer` from the api key - Go to the route you want to try out in the swagger definition - Select `Try it out` - Input any required fields, query params, and request payload - Select `Execute`  Alternatively, you can try it on your command line with curl, for example: `curl -X GET \"https://api.lassocrm.com/v1/registrants/123456\" -H \"accept: application/json\" -H \"Authorization: Bearer ***apikey***\"`
 */

namespace CollingMedia\Lasso\Model;

use ArrayAccess;
use CollingMedia\Lasso\ObjectSerializer;

/**
 * Pricing Class Doc Comment.
 *
 * @category Class
 * @description Sets the pricing information for the inventory in Lasso. Setting all fields to 0 except the &#x60;initialPrice&#x60; allows you to specify an exact sales price.
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class Pricing implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Pricing';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'initial_price' => 'float',
        'adjusted_gross_price' => 'float',
        'off_the_top_discount' => 'float',
        'in_lieu_of_incentive' => 'float',
        'credit' => 'float',
        '_links' => '\CollingMedia\Lasso\Model\PricingLinks',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'initial_price' => null,
        'adjusted_gross_price' => null,
        'off_the_top_discount' => null,
        'in_lieu_of_incentive' => null,
        'credit' => null,
        '_links' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'initial_price' => 'initialPrice',
        'adjusted_gross_price' => 'adjustedGrossPrice',
        'off_the_top_discount' => 'offTheTopDiscount',
        'in_lieu_of_incentive' => 'inLieuOfIncentive',
        'credit' => 'credit',
        '_links' => '_links',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'initial_price' => 'setInitialPrice',
        'adjusted_gross_price' => 'setAdjustedGrossPrice',
        'off_the_top_discount' => 'setOffTheTopDiscount',
        'in_lieu_of_incentive' => 'setInLieuOfIncentive',
        'credit' => 'setCredit',
        '_links' => 'setLinks',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'initial_price' => 'getInitialPrice',
        'adjusted_gross_price' => 'getAdjustedGrossPrice',
        'off_the_top_discount' => 'getOffTheTopDiscount',
        'in_lieu_of_incentive' => 'getInLieuOfIncentive',
        'credit' => 'getCredit',
        '_links' => 'getLinks',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
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
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['initial_price'] = isset($data['initial_price']) ? $data['initial_price'] : null;
        $this->container['adjusted_gross_price'] = isset($data['adjusted_gross_price']) ? $data['adjusted_gross_price'] : null;
        $this->container['off_the_top_discount'] = isset($data['off_the_top_discount']) ? $data['off_the_top_discount'] : null;
        $this->container['in_lieu_of_incentive'] = isset($data['in_lieu_of_incentive']) ? $data['in_lieu_of_incentive'] : null;
        $this->container['credit'] = isset($data['credit']) ? $data['credit'] : null;
        $this->container['_links'] = isset($data['_links']) ? $data['_links'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['initial_price'] === null) {
            $invalidProperties[] = "'initial_price' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets initial_price.
     *
     * @return float
     */
    public function getInitialPrice()
    {
        return $this->container['initial_price'];
    }

    /**
     * Sets initial_price.
     *
     * @param float $initial_price Base price of inventory
     *
     * @return $this
     */
    public function setInitialPrice($initial_price)
    {
        $this->container['initial_price'] = $initial_price;

        return $this;
    }

    /**
     * Gets adjusted_gross_price.
     *
     * @return float
     */
    public function getAdjustedGrossPrice()
    {
        return $this->container['adjusted_gross_price'];
    }

    /**
     * Sets adjusted_gross_price.
     *
     * @param float $adjusted_gross_price adjusted_gross_price
     *
     * @return $this
     */
    public function setAdjustedGrossPrice($adjusted_gross_price)
    {
        $this->container['adjusted_gross_price'] = $adjusted_gross_price;

        return $this;
    }

    /**
     * Gets off_the_top_discount.
     *
     * @return float
     */
    public function getOffTheTopDiscount()
    {
        return $this->container['off_the_top_discount'];
    }

    /**
     * Sets off_the_top_discount.
     *
     * @param float $off_the_top_discount off_the_top_discount
     *
     * @return $this
     */
    public function setOffTheTopDiscount($off_the_top_discount)
    {
        $this->container['off_the_top_discount'] = $off_the_top_discount;

        return $this;
    }

    /**
     * Gets in_lieu_of_incentive.
     *
     * @return float
     */
    public function getInLieuOfIncentive()
    {
        return $this->container['in_lieu_of_incentive'];
    }

    /**
     * Sets in_lieu_of_incentive.
     *
     * @param float $in_lieu_of_incentive in_lieu_of_incentive
     *
     * @return $this
     */
    public function setInLieuOfIncentive($in_lieu_of_incentive)
    {
        $this->container['in_lieu_of_incentive'] = $in_lieu_of_incentive;

        return $this;
    }

    /**
     * Gets credit.
     *
     * @return float
     */
    public function getCredit()
    {
        return $this->container['credit'];
    }

    /**
     * Sets credit.
     *
     * @param float $credit credit
     *
     * @return $this
     */
    public function setCredit($credit)
    {
        $this->container['credit'] = $credit;

        return $this;
    }

    /**
     * Gets _links.
     *
     * @return \CollingMedia\Lasso\Model\PricingLinks
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links.
     *
     * @param \CollingMedia\Lasso\Model\PricingLinks $_links _links
     *
     * @return $this
     */
    public function setLinks($_links)
    {
        $this->container['_links'] = $_links;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
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
     * @param int $offset Offset
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
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
