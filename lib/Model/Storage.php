<?php
/**
 * Storage
 *
 * PHP version 7
 *
 * @category Class
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */

/**
 * Lasso API
 *
 * Manage Registrant and Inventory data within Lasso CRM.  Authorization header with a Bearer JWT api key token is required for all requests. API keys are project/location based, and can be obtained from your business contact with Lasso Data Systems. In the future, Project Admin's will be able to generate their own api keys from the Lasso CRM web application.  To try it out in swagger: - Select the `Authorize` button and place your api key in the textbox - Ensure that the api key is prefixed with `Bearer` including a space separating `Bearer` from the api key - Go to the route you want to try out in the swagger definition - Select `Try it out` - Input any required fields, query params, and request payload - Select `Execute`  Alternatively, you can try it on your command line with curl, for example: `curl -X GET \"https://api.lassocrm.com/v1/registrants/123456\" -H \"accept: application/json\" -H \"Authorization: Bearer ***apikey***\"`
 *
 */



namespace CollingMedia\Lasso\Model;

use \ArrayAccess;
use \CollingMedia\Lasso\ObjectSerializer;

/**
 * Storage Class Doc Comment
 *
 * @category Class
 * @description For all storage types, if no specific storage option is given (by setting &#x60;uniqueId&#x60;), the next unassigned storage option is associated to the inventory.
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class Storage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Storage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unique_id' => 'string',
        'price' => 'float',
        'date' => '\DateTime',
        'payment_received_date' => '\DateTime',
        'outside_of_contract' => 'bool',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unique_id' => null,
        'price' => null,
        'date' => 'date',
        'payment_received_date' => 'date',
        'outside_of_contract' => null,
        'description' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'unique_id' => 'uniqueId',
        'price' => 'price',
        'date' => 'date',
        'payment_received_date' => 'paymentReceivedDate',
        'outside_of_contract' => 'outsideOfContract',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'unique_id' => 'setUniqueId',
        'price' => 'setPrice',
        'date' => 'setDate',
        'payment_received_date' => 'setPaymentReceivedDate',
        'outside_of_contract' => 'setOutsideOfContract',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'unique_id' => 'getUniqueId',
        'price' => 'getPrice',
        'date' => 'getDate',
        'payment_received_date' => 'getPaymentReceivedDate',
        'outside_of_contract' => 'getOutsideOfContract',
        'description' => 'getDescription'
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
        return self::$swaggerModelName;
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
        $this->container['unique_id'] = isset($data['unique_id']) ? $data['unique_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['payment_received_date'] = isset($data['payment_received_date']) ? $data['payment_received_date'] : null;
        $this->container['outside_of_contract'] = isset($data['outside_of_contract']) ? $data['outside_of_contract'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
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
     * Gets unique_id
     *
     * @return string
     */
    public function getUniqueId()
    {
        return $this->container['unique_id'];
    }

    /**
     * Sets unique_id
     *
     * @param string $unique_id unique_id
     *
     * @return $this
     */
    public function setUniqueId($unique_id)
    {
        $this->container['unique_id'] = $unique_id;

        return $this;
    }

    /**
     * Gets price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param float $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets payment_received_date
     *
     * @return \DateTime
     */
    public function getPaymentReceivedDate()
    {
        return $this->container['payment_received_date'];
    }

    /**
     * Sets payment_received_date
     *
     * @param \DateTime $payment_received_date payment_received_date
     *
     * @return $this
     */
    public function setPaymentReceivedDate($payment_received_date)
    {
        $this->container['payment_received_date'] = $payment_received_date;

        return $this;
    }

    /**
     * Gets outside_of_contract
     *
     * @return bool
     */
    public function getOutsideOfContract()
    {
        return $this->container['outside_of_contract'];
    }

    /**
     * Sets outside_of_contract
     *
     * @param bool $outside_of_contract outside_of_contract
     *
     * @return $this
     */
    public function setOutsideOfContract($outside_of_contract)
    {
        $this->container['outside_of_contract'] = $outside_of_contract;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


