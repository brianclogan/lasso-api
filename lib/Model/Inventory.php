<?php
/**
 * Inventory.
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
 * Inventory Class Doc Comment.
 *
 * @category Class
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class Inventory implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Inventory';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'status_overwrite' => 'string',
        'plan' => 'string',
        'square_footage' => 'float',
        'patio_square_footage' => 'float',
        'color_scheme' => 'string',
        'maintenance_fee' => 'float',
        'floor' => 'float',
        'bedrooms' => 'string',
        'bathrooms' => 'string',
        'direction' => 'string',
        'exposure' => 'string',
        'definition' => 'string',
        'dates' => '\CollingMedia\Lasso\Model\Dates',
        'pricing' => '\CollingMedia\Lasso\Model\Pricing',
        '_links' => '\CollingMedia\Lasso\Model\InventoryLinks',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'status_overwrite' => null,
        'plan' => null,
        'square_footage' => null,
        'patio_square_footage' => null,
        'color_scheme' => null,
        'maintenance_fee' => null,
        'floor' => null,
        'bedrooms' => null,
        'bathrooms' => null,
        'direction' => null,
        'exposure' => null,
        'definition' => null,
        'dates' => null,
        'pricing' => null,
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
        'status_overwrite' => 'statusOverwrite',
        'plan' => 'plan',
        'square_footage' => 'squareFootage',
        'patio_square_footage' => 'patioSquareFootage',
        'color_scheme' => 'colorScheme',
        'maintenance_fee' => 'maintenanceFee',
        'floor' => 'floor',
        'bedrooms' => 'bedrooms',
        'bathrooms' => 'bathrooms',
        'direction' => 'direction',
        'exposure' => 'exposure',
        'definition' => 'definition',
        'dates' => 'dates',
        'pricing' => 'pricing',
        '_links' => '_links',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'status_overwrite' => 'setStatusOverwrite',
        'plan' => 'setPlan',
        'square_footage' => 'setSquareFootage',
        'patio_square_footage' => 'setPatioSquareFootage',
        'color_scheme' => 'setColorScheme',
        'maintenance_fee' => 'setMaintenanceFee',
        'floor' => 'setFloor',
        'bedrooms' => 'setBedrooms',
        'bathrooms' => 'setBathrooms',
        'direction' => 'setDirection',
        'exposure' => 'setExposure',
        'definition' => 'setDefinition',
        'dates' => 'setDates',
        'pricing' => 'setPricing',
        '_links' => 'setLinks',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'status_overwrite' => 'getStatusOverwrite',
        'plan' => 'getPlan',
        'square_footage' => 'getSquareFootage',
        'patio_square_footage' => 'getPatioSquareFootage',
        'color_scheme' => 'getColorScheme',
        'maintenance_fee' => 'getMaintenanceFee',
        'floor' => 'getFloor',
        'bedrooms' => 'getBedrooms',
        'bathrooms' => 'getBathrooms',
        'direction' => 'getDirection',
        'exposure' => 'getExposure',
        'definition' => 'getDefinition',
        'dates' => 'getDates',
        'pricing' => 'getPricing',
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

    const STATUS_OVERWRITE_AVAILABLE = 'Available';
    const STATUS_OVERWRITE_UNAVAILABLE = 'Unavailable';
    const STATUS_OVERWRITE_RESERVED = 'Reserved';
    const STATUS_OVERWRITE_SUBJECT = 'Subject';
    const STATUS_OVERWRITE_FIRM = 'Firm';
    const STATUS_OVERWRITE_FIRM_R = 'Firm(R)';
    const STATUS_OVERWRITE_OFFER = 'Offer';
    const STATUS_OVERWRITE_CLOSED = 'Closed';
    const DEFINITION_UNIT = 'Unit';
    const DEFINITION_TOWNHOME = 'Townhome';
    const DEFINITION_LOT = 'Lot';
    const DEFINITION_HOMESITE = 'Homesite';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getStatusOverwriteAllowableValues()
    {
        return [
            self::STATUS_OVERWRITE_AVAILABLE,
            self::STATUS_OVERWRITE_UNAVAILABLE,
            self::STATUS_OVERWRITE_RESERVED,
            self::STATUS_OVERWRITE_SUBJECT,
            self::STATUS_OVERWRITE_FIRM,
            self::STATUS_OVERWRITE_FIRM_R,
            self::STATUS_OVERWRITE_OFFER,
            self::STATUS_OVERWRITE_CLOSED,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getDefinitionAllowableValues()
    {
        return [
            self::DEFINITION_UNIT,
            self::DEFINITION_TOWNHOME,
            self::DEFINITION_LOT,
            self::DEFINITION_HOMESITE,
        ];
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
        $this->container['status_overwrite'] = isset($data['status_overwrite']) ? $data['status_overwrite'] : null;
        $this->container['plan'] = isset($data['plan']) ? $data['plan'] : null;
        $this->container['square_footage'] = isset($data['square_footage']) ? $data['square_footage'] : null;
        $this->container['patio_square_footage'] = isset($data['patio_square_footage']) ? $data['patio_square_footage'] : null;
        $this->container['color_scheme'] = isset($data['color_scheme']) ? $data['color_scheme'] : null;
        $this->container['maintenance_fee'] = isset($data['maintenance_fee']) ? $data['maintenance_fee'] : null;
        $this->container['floor'] = isset($data['floor']) ? $data['floor'] : null;
        $this->container['bedrooms'] = isset($data['bedrooms']) ? $data['bedrooms'] : null;
        $this->container['bathrooms'] = isset($data['bathrooms']) ? $data['bathrooms'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['exposure'] = isset($data['exposure']) ? $data['exposure'] : null;
        $this->container['definition'] = isset($data['definition']) ? $data['definition'] : null;
        $this->container['dates'] = isset($data['dates']) ? $data['dates'] : null;
        $this->container['pricing'] = isset($data['pricing']) ? $data['pricing'] : null;
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

        $allowedValues = $this->getStatusOverwriteAllowableValues();
        if (! is_null($this->container['status_overwrite']) && ! in_array($this->container['status_overwrite'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status_overwrite', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getDefinitionAllowableValues();
        if (! is_null($this->container['definition']) && ! in_array($this->container['definition'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'definition', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets status_overwrite.
     *
     * @return string
     */
    public function getStatusOverwrite()
    {
        return $this->container['status_overwrite'];
    }

    /**
     * Sets status_overwrite.
     *
     * @param string $status_overwrite Current status of inventory. Will default to existing value if not provided.
     *
     * @return $this
     */
    public function setStatusOverwrite($status_overwrite)
    {
        $allowedValues = $this->getStatusOverwriteAllowableValues();
        if (! is_null($status_overwrite) && ! in_array($status_overwrite, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status_overwrite', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status_overwrite'] = $status_overwrite;

        return $this;
    }

    /**
     * Gets plan.
     *
     * @return string
     */
    public function getPlan()
    {
        return $this->container['plan'];
    }

    /**
     * Sets plan.
     *
     * @param string $plan This field has to be set up in Lasso. It is matched to an existing option via the name. If no existing option is found, a new one is created. Will default to existing value if not provided.
     *
     * @return $this
     */
    public function setPlan($plan)
    {
        $this->container['plan'] = $plan;

        return $this;
    }

    /**
     * Gets square_footage.
     *
     * @return float
     */
    public function getSquareFootage()
    {
        return $this->container['square_footage'];
    }

    /**
     * Sets square_footage.
     *
     * @param float $square_footage Will default to existing value if not provided.
     *
     * @return $this
     */
    public function setSquareFootage($square_footage)
    {
        $this->container['square_footage'] = $square_footage;

        return $this;
    }

    /**
     * Gets patio_square_footage.
     *
     * @return float
     */
    public function getPatioSquareFootage()
    {
        return $this->container['patio_square_footage'];
    }

    /**
     * Sets patio_square_footage.
     *
     * @param float $patio_square_footage Will default to existing value if not provided.
     *
     * @return $this
     */
    public function setPatioSquareFootage($patio_square_footage)
    {
        $this->container['patio_square_footage'] = $patio_square_footage;

        return $this;
    }

    /**
     * Gets color_scheme.
     *
     * @return string
     */
    public function getColorScheme()
    {
        return $this->container['color_scheme'];
    }

    /**
     * Sets color_scheme.
     *
     * @param string $color_scheme This field has to be set up in Lasso. It is matched to an existing option via the name. If no existing option is found, a new one is created. Will default to existing value if not provided.
     *
     * @return $this
     */
    public function setColorScheme($color_scheme)
    {
        $this->container['color_scheme'] = $color_scheme;

        return $this;
    }

    /**
     * Gets maintenance_fee.
     *
     * @return float
     */
    public function getMaintenanceFee()
    {
        return $this->container['maintenance_fee'];
    }

    /**
     * Sets maintenance_fee.
     *
     * @param float $maintenance_fee Will default to existing value if not provided.
     *
     * @return $this
     */
    public function setMaintenanceFee($maintenance_fee)
    {
        $this->container['maintenance_fee'] = $maintenance_fee;

        return $this;
    }

    /**
     * Gets floor.
     *
     * @return float
     */
    public function getFloor()
    {
        return $this->container['floor'];
    }

    /**
     * Sets floor.
     *
     * @param float $floor Will default to existing value if not provided.
     *
     * @return $this
     */
    public function setFloor($floor)
    {
        $this->container['floor'] = $floor;

        return $this;
    }

    /**
     * Gets bedrooms.
     *
     * @return string
     */
    public function getBedrooms()
    {
        return $this->container['bedrooms'];
    }

    /**
     * Sets bedrooms.
     *
     * @param string $bedrooms This field has to be set up in Lasso. It is matched to an existing option via the name. If no existing option is found, a new one is created. Will default to existing value if not provided.
     *
     * @return $this
     */
    public function setBedrooms($bedrooms)
    {
        $this->container['bedrooms'] = $bedrooms;

        return $this;
    }

    /**
     * Gets bathrooms.
     *
     * @return string
     */
    public function getBathrooms()
    {
        return $this->container['bathrooms'];
    }

    /**
     * Sets bathrooms.
     *
     * @param string $bathrooms Will default to existing value if not provided.
     *
     * @return $this
     */
    public function setBathrooms($bathrooms)
    {
        $this->container['bathrooms'] = $bathrooms;

        return $this;
    }

    /**
     * Gets direction.
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
     * Sets direction.
     *
     * @param string $direction This field has to be set up in Lasso. It is matched to an existing option via the name. If no existing option is found, a new one is created. Will default to existing value if not provided.
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;

        return $this;
    }

    /**
     * Gets exposure.
     *
     * @return string
     */
    public function getExposure()
    {
        return $this->container['exposure'];
    }

    /**
     * Sets exposure.
     *
     * @param string $exposure This field has to be set up in Lasso. It is matched to an existing option via the name. If no existing option is found, a new one is created. Will default to existing value if not provided.
     *
     * @return $this
     */
    public function setExposure($exposure)
    {
        $this->container['exposure'] = $exposure;

        return $this;
    }

    /**
     * Gets definition.
     *
     * @return string
     */
    public function getDefinition()
    {
        return $this->container['definition'];
    }

    /**
     * Sets definition.
     *
     * @param string $definition Will default to existing value if not provided.
     *
     * @return $this
     */
    public function setDefinition($definition)
    {
        $allowedValues = $this->getDefinitionAllowableValues();
        if (! is_null($definition) && ! in_array($definition, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'definition', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['definition'] = $definition;

        return $this;
    }

    /**
     * Gets dates.
     *
     * @return \CollingMedia\Lasso\Model\Dates
     */
    public function getDates()
    {
        return $this->container['dates'];
    }

    /**
     * Sets dates.
     *
     * @param \CollingMedia\Lasso\Model\Dates $dates dates
     *
     * @return $this
     */
    public function setDates($dates)
    {
        $this->container['dates'] = $dates;

        return $this;
    }

    /**
     * Gets pricing.
     *
     * @return \CollingMedia\Lasso\Model\Pricing
     */
    public function getPricing()
    {
        return $this->container['pricing'];
    }

    /**
     * Sets pricing.
     *
     * @param \CollingMedia\Lasso\Model\Pricing $pricing pricing
     *
     * @return $this
     */
    public function setPricing($pricing)
    {
        $this->container['pricing'] = $pricing;

        return $this;
    }

    /**
     * Gets _links.
     *
     * @return \CollingMedia\Lasso\Model\InventoryLinks
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links.
     *
     * @param \CollingMedia\Lasso\Model\InventoryLinks $_links _links
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
