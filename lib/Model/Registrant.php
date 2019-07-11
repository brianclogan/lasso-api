<?php
/**
 * Registrant.
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
 * Registrant Class Doc Comment.
 *
 * @category Class
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class Registrant implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Registrant';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'website_tracking' => '\CollingMedia\Lasso\Model\RegistrantWebsiteTracking',
        'exclude_from_traffic' => 'bool',
        'registration_date' => 'string',
        'external_id' => 'string',
        'external_duplicate_ids' => 'string[]',
        'person' => '\CollingMedia\Lasso\Model\RegistrantPersonalInfo',
        'rating' => '\CollingMedia\Lasso\Model\Rating',
        'source_type' => '\CollingMedia\Lasso\Model\SourceType',
        'secondary_source_type' => '\CollingMedia\Lasso\Model\SecondarySourceType',
        'follow_up_process' => '\CollingMedia\Lasso\Model\FollowUpProcess',
        'assigned_sales_reps' => '\CollingMedia\Lasso\Model\SalesRep[]',
        'questions' => '\CollingMedia\Lasso\Model\Question[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'website_tracking' => null,
        'exclude_from_traffic' => null,
        'registration_date' => 'datetime',
        'external_id' => null,
        'external_duplicate_ids' => null,
        'person' => null,
        'rating' => null,
        'source_type' => null,
        'secondary_source_type' => null,
        'follow_up_process' => null,
        'assigned_sales_reps' => null,
        'questions' => null,
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
        'website_tracking' => 'websiteTracking',
        'exclude_from_traffic' => 'excludeFromTraffic',
        'registration_date' => 'registrationDate',
        'external_id' => 'externalId',
        'external_duplicate_ids' => 'externalDuplicateIds',
        'person' => 'person',
        'rating' => 'rating',
        'source_type' => 'sourceType',
        'secondary_source_type' => 'secondarySourceType',
        'follow_up_process' => 'followUpProcess',
        'assigned_sales_reps' => 'assignedSalesReps',
        'questions' => 'questions',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'website_tracking' => 'setWebsiteTracking',
        'exclude_from_traffic' => 'setExcludeFromTraffic',
        'registration_date' => 'setRegistrationDate',
        'external_id' => 'setExternalId',
        'external_duplicate_ids' => 'setExternalDuplicateIds',
        'person' => 'setPerson',
        'rating' => 'setRating',
        'source_type' => 'setSourceType',
        'secondary_source_type' => 'setSecondarySourceType',
        'follow_up_process' => 'setFollowUpProcess',
        'assigned_sales_reps' => 'setAssignedSalesReps',
        'questions' => 'setQuestions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'website_tracking' => 'getWebsiteTracking',
        'exclude_from_traffic' => 'getExcludeFromTraffic',
        'registration_date' => 'getRegistrationDate',
        'external_id' => 'getExternalId',
        'external_duplicate_ids' => 'getExternalDuplicateIds',
        'person' => 'getPerson',
        'rating' => 'getRating',
        'source_type' => 'getSourceType',
        'secondary_source_type' => 'getSecondarySourceType',
        'follow_up_process' => 'getFollowUpProcess',
        'assigned_sales_reps' => 'getAssignedSalesReps',
        'questions' => 'getQuestions',
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
        $this->container['website_tracking'] = isset($data['website_tracking']) ? $data['website_tracking'] : null;
        $this->container['exclude_from_traffic'] = isset($data['exclude_from_traffic']) ? $data['exclude_from_traffic'] : null;
        $this->container['registration_date'] = isset($data['registration_date']) ? $data['registration_date'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['external_duplicate_ids'] = isset($data['external_duplicate_ids']) ? $data['external_duplicate_ids'] : null;
        $this->container['person'] = isset($data['person']) ? $data['person'] : null;
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['source_type'] = isset($data['source_type']) ? $data['source_type'] : null;
        $this->container['secondary_source_type'] = isset($data['secondary_source_type']) ? $data['secondary_source_type'] : null;
        $this->container['follow_up_process'] = isset($data['follow_up_process']) ? $data['follow_up_process'] : null;
        $this->container['assigned_sales_reps'] = isset($data['assigned_sales_reps']) ? $data['assigned_sales_reps'] : null;
        $this->container['questions'] = isset($data['questions']) ? $data['questions'] : null;
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
     * Gets website_tracking.
     *
     * @return \CollingMedia\Lasso\Model\RegistrantWebsiteTracking
     */
    public function getWebsiteTracking()
    {
        return $this->container['website_tracking'];
    }

    /**
     * Sets website_tracking.
     *
     * @param \CollingMedia\Lasso\Model\RegistrantWebsiteTracking $website_tracking website_tracking
     *
     * @return $this
     */
    public function setWebsiteTracking($website_tracking)
    {
        $this->container['website_tracking'] = $website_tracking;

        return $this;
    }

    /**
     * Gets exclude_from_traffic.
     *
     * @return bool
     */
    public function getExcludeFromTraffic()
    {
        return $this->container['exclude_from_traffic'];
    }

    /**
     * Sets exclude_from_traffic.
     *
     * @param bool $exclude_from_traffic Exclude this registrant from traffic reports
     *
     * @return $this
     */
    public function setExcludeFromTraffic($exclude_from_traffic)
    {
        $this->container['exclude_from_traffic'] = $exclude_from_traffic;

        return $this;
    }

    /**
     * Gets registration_date.
     *
     * @return string
     */
    public function getRegistrationDate()
    {
        return $this->container['registration_date'];
    }

    /**
     * Sets registration_date.
     *
     * @param string $registration_date When the registrant was created in the system. Dates are in ISO 8601 UTC format.
     *
     * @return $this
     */
    public function setRegistrationDate($registration_date)
    {
        $this->container['registration_date'] = $registration_date;

        return $this;
    }

    /**
     * Gets external_id.
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id.
     *
     * @param string $external_id identifies this registrant in an externally linked system. The external system is determined from the api key
     *
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets external_duplicate_ids.
     *
     * @return string[]
     */
    public function getExternalDuplicateIds()
    {
        return $this->container['external_duplicate_ids'];
    }

    /**
     * Sets external_duplicate_ids.
     *
     * @param string[] $external_duplicate_ids a registrant that has been merged with another will inherit the other's externalId. This list keeps track of all other externalId's linked to this single registrant
     *
     * @return $this
     */
    public function setExternalDuplicateIds($external_duplicate_ids)
    {
        $this->container['external_duplicate_ids'] = $external_duplicate_ids;

        return $this;
    }

    /**
     * Gets person.
     *
     * @return \CollingMedia\Lasso\Model\RegistrantPersonalInfo
     */
    public function getPerson()
    {
        return $this->container['person'];
    }

    /**
     * Sets person.
     *
     * @param \CollingMedia\Lasso\Model\RegistrantPersonalInfo $person person
     *
     * @return $this
     */
    public function setPerson($person)
    {
        $this->container['person'] = $person;

        return $this;
    }

    /**
     * Gets rating.
     *
     * @return \CollingMedia\Lasso\Model\Rating
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating.
     *
     * @param \CollingMedia\Lasso\Model\Rating $rating rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets source_type.
     *
     * @return \CollingMedia\Lasso\Model\SourceType
     */
    public function getSourceType()
    {
        return $this->container['source_type'];
    }

    /**
     * Sets source_type.
     *
     * @param \CollingMedia\Lasso\Model\SourceType $source_type source_type
     *
     * @return $this
     */
    public function setSourceType($source_type)
    {
        $this->container['source_type'] = $source_type;

        return $this;
    }

    /**
     * Gets secondary_source_type.
     *
     * @return \CollingMedia\Lasso\Model\SecondarySourceType
     */
    public function getSecondarySourceType()
    {
        return $this->container['secondary_source_type'];
    }

    /**
     * Sets secondary_source_type.
     *
     * @param \CollingMedia\Lasso\Model\SecondarySourceType $secondary_source_type secondary_source_type
     *
     * @return $this
     */
    public function setSecondarySourceType($secondary_source_type)
    {
        $this->container['secondary_source_type'] = $secondary_source_type;

        return $this;
    }

    /**
     * Gets follow_up_process.
     *
     * @return \CollingMedia\Lasso\Model\FollowUpProcess
     */
    public function getFollowUpProcess()
    {
        return $this->container['follow_up_process'];
    }

    /**
     * Sets follow_up_process.
     *
     * @param \CollingMedia\Lasso\Model\FollowUpProcess $follow_up_process follow_up_process
     *
     * @return $this
     */
    public function setFollowUpProcess($follow_up_process)
    {
        $this->container['follow_up_process'] = $follow_up_process;

        return $this;
    }

    /**
     * Gets assigned_sales_reps.
     *
     * @return \CollingMedia\Lasso\Model\SalesRep[]
     */
    public function getAssignedSalesReps()
    {
        return $this->container['assigned_sales_reps'];
    }

    /**
     * Sets assigned_sales_reps.
     *
     * @param \CollingMedia\Lasso\Model\SalesRep[] $assigned_sales_reps assigned_sales_reps
     *
     * @return $this
     */
    public function setAssignedSalesReps($assigned_sales_reps)
    {
        $this->container['assigned_sales_reps'] = $assigned_sales_reps;

        return $this;
    }

    /**
     * Gets questions.
     *
     * @return \CollingMedia\Lasso\Model\Question[]
     */
    public function getQuestions()
    {
        return $this->container['questions'];
    }

    /**
     * Sets questions.
     *
     * @param \CollingMedia\Lasso\Model\Question[] $questions questions
     *
     * @return $this
     */
    public function setQuestions($questions)
    {
        $this->container['questions'] = $questions;

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
