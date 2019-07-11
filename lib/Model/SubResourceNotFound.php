<?php
/**
 * SubResourceNotFound.
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
 * SubResourceNotFound Class Doc Comment.
 *
 * @category Class
 * @description Some sub-resources have to exist before you can specify them, like the follow-up process. That&#39;s usually because the sub-resource needs more information to create than can reasonably be included in the request, like rules for creating activities based off the follow-up process.
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class SubResourceNotFound implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'SubResourceNotFound';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'error_code' => 'float',
        'error' => 'string',
        'error_message' => 'string',
        'missing_sub_resource_type' => 'string',
        'missing_sub_resource' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'error_code' => null,
        'error' => null,
        'error_message' => null,
        'missing_sub_resource_type' => null,
        'missing_sub_resource' => null,
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
        'error_code' => 'errorCode',
        'error' => 'error',
        'error_message' => 'errorMessage',
        'missing_sub_resource_type' => 'missingSubResourceType',
        'missing_sub_resource' => 'missingSubResource',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'error_code' => 'setErrorCode',
        'error' => 'setError',
        'error_message' => 'setErrorMessage',
        'missing_sub_resource_type' => 'setMissingSubResourceType',
        'missing_sub_resource' => 'setMissingSubResource',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'error_code' => 'getErrorCode',
        'error' => 'getError',
        'error_message' => 'getErrorMessage',
        'missing_sub_resource_type' => 'getMissingSubResourceType',
        'missing_sub_resource' => 'getMissingSubResource',
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
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['missing_sub_resource_type'] = isset($data['missing_sub_resource_type']) ? $data['missing_sub_resource_type'] : null;
        $this->container['missing_sub_resource'] = isset($data['missing_sub_resource']) ? $data['missing_sub_resource'] : null;
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
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets error_code.
     *
     * @return float
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code.
     *
     * @param float $error_code error_code
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets error.
     *
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error.
     *
     * @param string $error Which sub-resource was not found
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets error_message.
     *
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message.
     *
     * @param string $error_message A human-friendly error message
     *
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets missing_sub_resource_type.
     *
     * @return string
     */
    public function getMissingSubResourceType()
    {
        return $this->container['missing_sub_resource_type'];
    }

    /**
     * Sets missing_sub_resource_type.
     *
     * @param string $missing_sub_resource_type Type of sub-resource that's missing
     *
     * @return $this
     */
    public function setMissingSubResourceType($missing_sub_resource_type)
    {
        $this->container['missing_sub_resource_type'] = $missing_sub_resource_type;

        return $this;
    }

    /**
     * Gets missing_sub_resource.
     *
     * @return string
     */
    public function getMissingSubResource()
    {
        return $this->container['missing_sub_resource'];
    }

    /**
     * Sets missing_sub_resource.
     *
     * @param string $missing_sub_resource Name of the sub-resource that couldn't be found
     *
     * @return $this
     */
    public function setMissingSubResource($missing_sub_resource)
    {
        $this->container['missing_sub_resource'] = $missing_sub_resource;

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
