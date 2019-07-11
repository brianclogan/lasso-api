<?php
/**
 * ProjectSettings
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
 * ProjectSettings Class Doc Comment
 *
 * @category Class
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class ProjectSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProjectSettings';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'project' => '\CollingMedia\Lasso\Model\Project',
        'website_tracking' => '\CollingMedia\Lasso\Model\ProjectWebsiteTracking[]',
        'rotations' => '\CollingMedia\Lasso\Model\ProjectRotation[]',
        'sales_reps' => '\CollingMedia\Lasso\Model\ProjectSalesRep[]',
        'source_types' => '\CollingMedia\Lasso\Model\ProjectSourceType[]',
        'secondary_source_types' => '\CollingMedia\Lasso\Model\ProjectSecondarySourceType[]',
        'ratings' => '\CollingMedia\Lasso\Model\ProjectRating[]',
        'follow_up_processes' => '\CollingMedia\Lasso\Model\FollowUpProcess[]',
        'questions' => '\CollingMedia\Lasso\Model\Question[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'project' => null,
        'website_tracking' => null,
        'rotations' => null,
        'sales_reps' => null,
        'source_types' => null,
        'secondary_source_types' => null,
        'ratings' => null,
        'follow_up_processes' => null,
        'questions' => null
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
        'project' => 'project',
        'website_tracking' => 'websiteTracking',
        'rotations' => 'rotations',
        'sales_reps' => 'salesReps',
        'source_types' => 'sourceTypes',
        'secondary_source_types' => 'secondarySourceTypes',
        'ratings' => 'ratings',
        'follow_up_processes' => 'followUpProcesses',
        'questions' => 'questions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project' => 'setProject',
        'website_tracking' => 'setWebsiteTracking',
        'rotations' => 'setRotations',
        'sales_reps' => 'setSalesReps',
        'source_types' => 'setSourceTypes',
        'secondary_source_types' => 'setSecondarySourceTypes',
        'ratings' => 'setRatings',
        'follow_up_processes' => 'setFollowUpProcesses',
        'questions' => 'setQuestions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project' => 'getProject',
        'website_tracking' => 'getWebsiteTracking',
        'rotations' => 'getRotations',
        'sales_reps' => 'getSalesReps',
        'source_types' => 'getSourceTypes',
        'secondary_source_types' => 'getSecondarySourceTypes',
        'ratings' => 'getRatings',
        'follow_up_processes' => 'getFollowUpProcesses',
        'questions' => 'getQuestions'
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
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['website_tracking'] = isset($data['website_tracking']) ? $data['website_tracking'] : null;
        $this->container['rotations'] = isset($data['rotations']) ? $data['rotations'] : null;
        $this->container['sales_reps'] = isset($data['sales_reps']) ? $data['sales_reps'] : null;
        $this->container['source_types'] = isset($data['source_types']) ? $data['source_types'] : null;
        $this->container['secondary_source_types'] = isset($data['secondary_source_types']) ? $data['secondary_source_types'] : null;
        $this->container['ratings'] = isset($data['ratings']) ? $data['ratings'] : null;
        $this->container['follow_up_processes'] = isset($data['follow_up_processes']) ? $data['follow_up_processes'] : null;
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
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets project
     *
     * @return \CollingMedia\Lasso\Model\Project
     */
    public function getProject()
    {
        return $this->container['project'];
    }

    /**
     * Sets project
     *
     * @param \CollingMedia\Lasso\Model\Project $project project
     *
     * @return $this
     */
    public function setProject($project)
    {
        $this->container['project'] = $project;

        return $this;
    }

    /**
     * Gets website_tracking
     *
     * @return \CollingMedia\Lasso\Model\ProjectWebsiteTracking[]
     */
    public function getWebsiteTracking()
    {
        return $this->container['website_tracking'];
    }

    /**
     * Sets website_tracking
     *
     * @param \CollingMedia\Lasso\Model\ProjectWebsiteTracking[] $website_tracking website_tracking
     *
     * @return $this
     */
    public function setWebsiteTracking($website_tracking)
    {
        $this->container['website_tracking'] = $website_tracking;

        return $this;
    }

    /**
     * Gets rotations
     *
     * @return \CollingMedia\Lasso\Model\ProjectRotation[]
     */
    public function getRotations()
    {
        return $this->container['rotations'];
    }

    /**
     * Sets rotations
     *
     * @param \CollingMedia\Lasso\Model\ProjectRotation[] $rotations rotations
     *
     * @return $this
     */
    public function setRotations($rotations)
    {
        $this->container['rotations'] = $rotations;

        return $this;
    }

    /**
     * Gets sales_reps
     *
     * @return \CollingMedia\Lasso\Model\ProjectSalesRep[]
     */
    public function getSalesReps()
    {
        return $this->container['sales_reps'];
    }

    /**
     * Sets sales_reps
     *
     * @param \CollingMedia\Lasso\Model\ProjectSalesRep[] $sales_reps sales_reps
     *
     * @return $this
     */
    public function setSalesReps($sales_reps)
    {
        $this->container['sales_reps'] = $sales_reps;

        return $this;
    }

    /**
     * Gets source_types
     *
     * @return \CollingMedia\Lasso\Model\ProjectSourceType[]
     */
    public function getSourceTypes()
    {
        return $this->container['source_types'];
    }

    /**
     * Sets source_types
     *
     * @param \CollingMedia\Lasso\Model\ProjectSourceType[] $source_types source_types
     *
     * @return $this
     */
    public function setSourceTypes($source_types)
    {
        $this->container['source_types'] = $source_types;

        return $this;
    }

    /**
     * Gets secondary_source_types
     *
     * @return \CollingMedia\Lasso\Model\ProjectSecondarySourceType[]
     */
    public function getSecondarySourceTypes()
    {
        return $this->container['secondary_source_types'];
    }

    /**
     * Sets secondary_source_types
     *
     * @param \CollingMedia\Lasso\Model\ProjectSecondarySourceType[] $secondary_source_types secondary_source_types
     *
     * @return $this
     */
    public function setSecondarySourceTypes($secondary_source_types)
    {
        $this->container['secondary_source_types'] = $secondary_source_types;

        return $this;
    }

    /**
     * Gets ratings
     *
     * @return \CollingMedia\Lasso\Model\ProjectRating[]
     */
    public function getRatings()
    {
        return $this->container['ratings'];
    }

    /**
     * Sets ratings
     *
     * @param \CollingMedia\Lasso\Model\ProjectRating[] $ratings ratings
     *
     * @return $this
     */
    public function setRatings($ratings)
    {
        $this->container['ratings'] = $ratings;

        return $this;
    }

    /**
     * Gets follow_up_processes
     *
     * @return \CollingMedia\Lasso\Model\FollowUpProcess[]
     */
    public function getFollowUpProcesses()
    {
        return $this->container['follow_up_processes'];
    }

    /**
     * Sets follow_up_processes
     *
     * @param \CollingMedia\Lasso\Model\FollowUpProcess[] $follow_up_processes follow_up_processes
     *
     * @return $this
     */
    public function setFollowUpProcesses($follow_up_processes)
    {
        $this->container['follow_up_processes'] = $follow_up_processes;

        return $this;
    }

    /**
     * Gets questions
     *
     * @return \CollingMedia\Lasso\Model\Question[]
     */
    public function getQuestions()
    {
        return $this->container['questions'];
    }

    /**
     * Sets questions
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


