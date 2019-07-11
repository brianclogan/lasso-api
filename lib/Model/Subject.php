<?php
/**
 * Subject.
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
 * Subject Class Doc Comment.
 *
 * @category Class
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class Subject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Subject';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'purchaser' => 'string',
        'subject_date' => '\DateTime',
        'description' => 'string',
        'removed' => 'bool',
        'removal_date' => '\DateTime',
        'removal_description' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'purchaser' => null,
        'subject_date' => 'date',
        'description' => null,
        'removed' => null,
        'removal_date' => 'date',
        'removal_description' => null,
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
        'purchaser' => 'purchaser',
        'subject_date' => 'subjectDate',
        'description' => 'description',
        'removed' => 'removed',
        'removal_date' => 'removalDate',
        'removal_description' => 'removalDescription',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'purchaser' => 'setPurchaser',
        'subject_date' => 'setSubjectDate',
        'description' => 'setDescription',
        'removed' => 'setRemoved',
        'removal_date' => 'setRemovalDate',
        'removal_description' => 'setRemovalDescription',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'purchaser' => 'getPurchaser',
        'subject_date' => 'getSubjectDate',
        'description' => 'getDescription',
        'removed' => 'getRemoved',
        'removal_date' => 'getRemovalDate',
        'removal_description' => 'getRemovalDescription',
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
        $this->container['purchaser'] = isset($data['purchaser']) ? $data['purchaser'] : null;
        $this->container['subject_date'] = isset($data['subject_date']) ? $data['subject_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['removed'] = isset($data['removed']) ? $data['removed'] : null;
        $this->container['removal_date'] = isset($data['removal_date']) ? $data['removal_date'] : null;
        $this->container['removal_description'] = isset($data['removal_description']) ? $data['removal_description'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['purchaser'] === null) {
            $invalidProperties[] = "'purchaser' can't be null";
        }
        if ($this->container['subject_date'] === null) {
            $invalidProperties[] = "'subject_date' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
     * Gets purchaser.
     *
     * @return string
     */
    public function getPurchaser()
    {
        return $this->container['purchaser'];
    }

    /**
     * Sets purchaser.
     *
     * @param string $purchaser RegistrantId of a registrant assigned to the inventory
     *
     * @return $this
     */
    public function setPurchaser($purchaser)
    {
        $this->container['purchaser'] = $purchaser;

        return $this;
    }

    /**
     * Gets subject_date.
     *
     * @return \DateTime
     */
    public function getSubjectDate()
    {
        return $this->container['subject_date'];
    }

    /**
     * Sets subject_date.
     *
     * @param \DateTime $subject_date subject_date
     *
     * @return $this
     */
    public function setSubjectDate($subject_date)
    {
        $this->container['subject_date'] = $subject_date;

        return $this;
    }

    /**
     * Gets description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description.
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
     * Gets removed.
     *
     * @return bool
     */
    public function getRemoved()
    {
        return $this->container['removed'];
    }

    /**
     * Sets removed.
     *
     * @param bool $removed removed
     *
     * @return $this
     */
    public function setRemoved($removed)
    {
        $this->container['removed'] = $removed;

        return $this;
    }

    /**
     * Gets removal_date.
     *
     * @return \DateTime
     */
    public function getRemovalDate()
    {
        return $this->container['removal_date'];
    }

    /**
     * Sets removal_date.
     *
     * @param \DateTime $removal_date removal_date
     *
     * @return $this
     */
    public function setRemovalDate($removal_date)
    {
        $this->container['removal_date'] = $removal_date;

        return $this;
    }

    /**
     * Gets removal_description.
     *
     * @return string
     */
    public function getRemovalDescription()
    {
        return $this->container['removal_description'];
    }

    /**
     * Sets removal_description.
     *
     * @param string $removal_description removal_description
     *
     * @return $this
     */
    public function setRemovalDescription($removal_description)
    {
        $this->container['removal_description'] = $removal_description;

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
