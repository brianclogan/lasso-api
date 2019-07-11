<?php
/**
 * InventoryUpdate.
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

use CollingMedia\Lasso\ObjectSerializer;

/**
 * InventoryUpdate Class Doc Comment.
 *
 * @category Class
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class InventoryUpdate extends Inventory
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'InventoryUpdate';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'strata_lot' => 'string',
        'inventory_number' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'strata_lot' => null,
        'inventory_number' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'strata_lot' => 'strataLot',
        'inventory_number' => 'inventoryNumber',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'strata_lot' => 'setStrataLot',
        'inventory_number' => 'setInventoryNumber',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'strata_lot' => 'getStrataLot',
        'inventory_number' => 'getInventoryNumber',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['strata_lot'] = isset($data['strata_lot']) ? $data['strata_lot'] : null;
        $this->container['inventory_number'] = isset($data['inventory_number']) ? $data['inventory_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if (! is_null($this->container['strata_lot']) && (mb_strlen($this->container['strata_lot']) > 15)) {
            $invalidProperties[] = "invalid value for 'strata_lot', the character length must be smaller than or equal to 15.";
        }

        if (! is_null($this->container['strata_lot']) && (mb_strlen($this->container['strata_lot']) < 1)) {
            $invalidProperties[] = "invalid value for 'strata_lot', the character length must be bigger than or equal to 1.";
        }

        if (! is_null($this->container['inventory_number']) && (mb_strlen($this->container['inventory_number']) > 11)) {
            $invalidProperties[] = "invalid value for 'inventory_number', the character length must be smaller than or equal to 11.";
        }

        if (! is_null($this->container['inventory_number']) && (mb_strlen($this->container['inventory_number']) < 1)) {
            $invalidProperties[] = "invalid value for 'inventory_number', the character length must be bigger than or equal to 1.";
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
     * Gets strata_lot.
     *
     * @return string
     */
    public function getStrataLot()
    {
        return $this->container['strata_lot'];
    }

    /**
     * Sets strata_lot.
     *
     * @param string $strata_lot strata_lot
     *
     * @return $this
     */
    public function setStrataLot($strata_lot)
    {
        if (! is_null($strata_lot) && (mb_strlen($strata_lot) > 15)) {
            throw new \InvalidArgumentException('invalid length for $strata_lot when calling InventoryUpdate., must be smaller than or equal to 15.');
        }
        if (! is_null($strata_lot) && (mb_strlen($strata_lot) < 1)) {
            throw new \InvalidArgumentException('invalid length for $strata_lot when calling InventoryUpdate., must be bigger than or equal to 1.');
        }

        $this->container['strata_lot'] = $strata_lot;

        return $this;
    }

    /**
     * Gets inventory_number.
     *
     * @return string
     */
    public function getInventoryNumber()
    {
        return $this->container['inventory_number'];
    }

    /**
     * Sets inventory_number.
     *
     * @param string $inventory_number inventory_number
     *
     * @return $this
     */
    public function setInventoryNumber($inventory_number)
    {
        if (! is_null($inventory_number) && (mb_strlen($inventory_number) > 11)) {
            throw new \InvalidArgumentException('invalid length for $inventory_number when calling InventoryUpdate., must be smaller than or equal to 11.');
        }
        if (! is_null($inventory_number) && (mb_strlen($inventory_number) < 1)) {
            throw new \InvalidArgumentException('invalid length for $inventory_number when calling InventoryUpdate., must be bigger than or equal to 1.');
        }

        $this->container['inventory_number'] = $inventory_number;

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
