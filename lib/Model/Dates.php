<?php
/**
 * Dates
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
 * Dates Class Doc Comment
 *
 * @category Class
 * @description All dates are in the ISO 8601 UTC format, limited to year, month and day (YYYY-MM-DD). Will set all dates to blank if not provided.
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class Dates implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Dates';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contract' => '\DateTime',
        'acceptance' => '\DateTime',
        'completion' => '\DateTime',
        'release' => '\DateTime',
        'possession' => '\DateTime',
        'occupancy' => '\DateTime',
        'send_to_lawyer' => '\DateTime',
        'adjustment' => '\DateTime',
        '_links' => '\CollingMedia\Lasso\Model\DatesLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contract' => 'date',
        'acceptance' => 'date',
        'completion' => 'date',
        'release' => 'date',
        'possession' => 'date',
        'occupancy' => 'date',
        'send_to_lawyer' => 'date',
        'adjustment' => 'date',
        '_links' => null
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
        'contract' => 'contract',
        'acceptance' => 'acceptance',
        'completion' => 'completion',
        'release' => 'release',
        'possession' => 'possession',
        'occupancy' => 'occupancy',
        'send_to_lawyer' => 'sendToLawyer',
        'adjustment' => 'adjustment',
        '_links' => '_links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contract' => 'setContract',
        'acceptance' => 'setAcceptance',
        'completion' => 'setCompletion',
        'release' => 'setRelease',
        'possession' => 'setPossession',
        'occupancy' => 'setOccupancy',
        'send_to_lawyer' => 'setSendToLawyer',
        'adjustment' => 'setAdjustment',
        '_links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contract' => 'getContract',
        'acceptance' => 'getAcceptance',
        'completion' => 'getCompletion',
        'release' => 'getRelease',
        'possession' => 'getPossession',
        'occupancy' => 'getOccupancy',
        'send_to_lawyer' => 'getSendToLawyer',
        'adjustment' => 'getAdjustment',
        '_links' => 'getLinks'
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
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
        $this->container['acceptance'] = isset($data['acceptance']) ? $data['acceptance'] : null;
        $this->container['completion'] = isset($data['completion']) ? $data['completion'] : null;
        $this->container['release'] = isset($data['release']) ? $data['release'] : null;
        $this->container['possession'] = isset($data['possession']) ? $data['possession'] : null;
        $this->container['occupancy'] = isset($data['occupancy']) ? $data['occupancy'] : null;
        $this->container['send_to_lawyer'] = isset($data['send_to_lawyer']) ? $data['send_to_lawyer'] : null;
        $this->container['adjustment'] = isset($data['adjustment']) ? $data['adjustment'] : null;
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
     * Gets contract
     *
     * @return \DateTime
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     *
     * @param \DateTime $contract contract
     *
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

        return $this;
    }

    /**
     * Gets acceptance
     *
     * @return \DateTime
     */
    public function getAcceptance()
    {
        return $this->container['acceptance'];
    }

    /**
     * Sets acceptance
     *
     * @param \DateTime $acceptance acceptance
     *
     * @return $this
     */
    public function setAcceptance($acceptance)
    {
        $this->container['acceptance'] = $acceptance;

        return $this;
    }

    /**
     * Gets completion
     *
     * @return \DateTime
     */
    public function getCompletion()
    {
        return $this->container['completion'];
    }

    /**
     * Sets completion
     *
     * @param \DateTime $completion completion
     *
     * @return $this
     */
    public function setCompletion($completion)
    {
        $this->container['completion'] = $completion;

        return $this;
    }

    /**
     * Gets release
     *
     * @return \DateTime
     */
    public function getRelease()
    {
        return $this->container['release'];
    }

    /**
     * Sets release
     *
     * @param \DateTime $release release
     *
     * @return $this
     */
    public function setRelease($release)
    {
        $this->container['release'] = $release;

        return $this;
    }

    /**
     * Gets possession
     *
     * @return \DateTime
     */
    public function getPossession()
    {
        return $this->container['possession'];
    }

    /**
     * Sets possession
     *
     * @param \DateTime $possession possession
     *
     * @return $this
     */
    public function setPossession($possession)
    {
        $this->container['possession'] = $possession;

        return $this;
    }

    /**
     * Gets occupancy
     *
     * @return \DateTime
     */
    public function getOccupancy()
    {
        return $this->container['occupancy'];
    }

    /**
     * Sets occupancy
     *
     * @param \DateTime $occupancy occupancy
     *
     * @return $this
     */
    public function setOccupancy($occupancy)
    {
        $this->container['occupancy'] = $occupancy;

        return $this;
    }

    /**
     * Gets send_to_lawyer
     *
     * @return \DateTime
     */
    public function getSendToLawyer()
    {
        return $this->container['send_to_lawyer'];
    }

    /**
     * Sets send_to_lawyer
     *
     * @param \DateTime $send_to_lawyer send_to_lawyer
     *
     * @return $this
     */
    public function setSendToLawyer($send_to_lawyer)
    {
        $this->container['send_to_lawyer'] = $send_to_lawyer;

        return $this;
    }

    /**
     * Gets adjustment
     *
     * @return \DateTime
     */
    public function getAdjustment()
    {
        return $this->container['adjustment'];
    }

    /**
     * Sets adjustment
     *
     * @param \DateTime $adjustment adjustment
     *
     * @return $this
     */
    public function setAdjustment($adjustment)
    {
        $this->container['adjustment'] = $adjustment;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \CollingMedia\Lasso\Model\DatesLinks
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \CollingMedia\Lasso\Model\DatesLinks $_links _links
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


