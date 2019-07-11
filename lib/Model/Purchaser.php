<?php
/**
 * Purchaser.
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
 * Purchaser Class Doc Comment.
 *
 * @category Class
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class Purchaser implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Purchaser';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'registrant_id' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'purchaser_type' => 'string',
        'purchaser_reason' => 'string',
        'date_assigned' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'registrant_id' => null,
        'first_name' => null,
        'last_name' => null,
        'purchaser_type' => null,
        'purchaser_reason' => null,
        'date_assigned' => null,
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
        'registrant_id' => 'registrantId',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'purchaser_type' => 'purchaserType',
        'purchaser_reason' => 'purchaserReason',
        'date_assigned' => 'dateAssigned',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'registrant_id' => 'setRegistrantId',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'purchaser_type' => 'setPurchaserType',
        'purchaser_reason' => 'setPurchaserReason',
        'date_assigned' => 'setDateAssigned',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'registrant_id' => 'getRegistrantId',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'purchaser_type' => 'getPurchaserType',
        'purchaser_reason' => 'getPurchaserReason',
        'date_assigned' => 'getDateAssigned',
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
        $this->container['registrant_id'] = isset($data['registrant_id']) ? $data['registrant_id'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['purchaser_type'] = isset($data['purchaser_type']) ? $data['purchaser_type'] : null;
        $this->container['purchaser_reason'] = isset($data['purchaser_reason']) ? $data['purchaser_reason'] : null;
        $this->container['date_assigned'] = isset($data['date_assigned']) ? $data['date_assigned'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['registrant_id'] === null) {
            $invalidProperties[] = "'registrant_id' can't be null";
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
     * Gets registrant_id.
     *
     * @return string
     */
    public function getRegistrantId()
    {
        return $this->container['registrant_id'];
    }

    /**
     * Sets registrant_id.
     *
     * @param string $registrant_id registrant_id
     *
     * @return $this
     */
    public function setRegistrantId($registrant_id)
    {
        $this->container['registrant_id'] = $registrant_id;

        return $this;
    }

    /**
     * Gets first_name.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name.
     *
     * @param string $first_name first_name
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name.
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name.
     *
     * @param string $last_name last_name
     *
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets purchaser_type.
     *
     * @return string
     */
    public function getPurchaserType()
    {
        return $this->container['purchaser_type'];
    }

    /**
     * Sets purchaser_type.
     *
     * @param string $purchaser_type purchaser_type
     *
     * @return $this
     */
    public function setPurchaserType($purchaser_type)
    {
        $this->container['purchaser_type'] = $purchaser_type;

        return $this;
    }

    /**
     * Gets purchaser_reason.
     *
     * @return string
     */
    public function getPurchaserReason()
    {
        return $this->container['purchaser_reason'];
    }

    /**
     * Sets purchaser_reason.
     *
     * @param string $purchaser_reason purchaser_reason
     *
     * @return $this
     */
    public function setPurchaserReason($purchaser_reason)
    {
        $this->container['purchaser_reason'] = $purchaser_reason;

        return $this;
    }

    /**
     * Gets date_assigned.
     *
     * @return string
     */
    public function getDateAssigned()
    {
        return $this->container['date_assigned'];
    }

    /**
     * Sets date_assigned.
     *
     * @param string $date_assigned Date in the ISO 8601 UTC format
     *
     * @return $this
     */
    public function setDateAssigned($date_assigned)
    {
        $this->container['date_assigned'] = $date_assigned;

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
