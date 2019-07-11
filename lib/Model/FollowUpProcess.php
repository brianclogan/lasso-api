<?php
/**
 * FollowUpProcess.
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
 * FollowUpProcess Class Doc Comment.
 *
 * @category Class
 * @description If &#x60;followUpProcessId&#x60; is provided, the system will attempt to lookup the process by id, and fail if not found. If &#x60;followUpProcessId&#x60; is not provided, but &#x60;followUpProcess&#x60; is instead provided, the system will then attempt to lookup the process by value. If the value doesn&#39;t exist, it will be created
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class FollowUpProcess implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FollowUpProcess';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'follow_up_process_id' => 'string',
        'follow_up_process' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'follow_up_process_id' => null,
        'follow_up_process' => null,
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
        'follow_up_process_id' => 'followUpProcessId',
        'follow_up_process' => 'followUpProcess',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'follow_up_process_id' => 'setFollowUpProcessId',
        'follow_up_process' => 'setFollowUpProcess',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'follow_up_process_id' => 'getFollowUpProcessId',
        'follow_up_process' => 'getFollowUpProcess',
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
        $this->container['follow_up_process_id'] = isset($data['follow_up_process_id']) ? $data['follow_up_process_id'] : null;
        $this->container['follow_up_process'] = isset($data['follow_up_process']) ? $data['follow_up_process'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (! is_null($this->container['follow_up_process']) && (mb_strlen($this->container['follow_up_process']) > 20)) {
            $invalidProperties[] = "invalid value for 'follow_up_process', the character length must be smaller than or equal to 20.";
        }

        if (! is_null($this->container['follow_up_process']) && (mb_strlen($this->container['follow_up_process']) < 1)) {
            $invalidProperties[] = "invalid value for 'follow_up_process', the character length must be bigger than or equal to 1.";
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
     * Gets follow_up_process_id.
     *
     * @return string
     */
    public function getFollowUpProcessId()
    {
        return $this->container['follow_up_process_id'];
    }

    /**
     * Sets follow_up_process_id.
     *
     * @param string $follow_up_process_id follow_up_process_id
     *
     * @return $this
     */
    public function setFollowUpProcessId($follow_up_process_id)
    {
        $this->container['follow_up_process_id'] = $follow_up_process_id;

        return $this;
    }

    /**
     * Gets follow_up_process.
     *
     * @return string
     */
    public function getFollowUpProcess()
    {
        return $this->container['follow_up_process'];
    }

    /**
     * Sets follow_up_process.
     *
     * @param string $follow_up_process follow_up_process
     *
     * @return $this
     */
    public function setFollowUpProcess($follow_up_process)
    {
        if (! is_null($follow_up_process) && (mb_strlen($follow_up_process) > 20)) {
            throw new \InvalidArgumentException('invalid length for $follow_up_process when calling FollowUpProcess., must be smaller than or equal to 20.');
        }
        if (! is_null($follow_up_process) && (mb_strlen($follow_up_process) < 1)) {
            throw new \InvalidArgumentException('invalid length for $follow_up_process when calling FollowUpProcess., must be bigger than or equal to 1.');
        }

        $this->container['follow_up_process'] = $follow_up_process;

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
