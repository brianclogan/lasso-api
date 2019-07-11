<?php
/**
 * RegistrantRead
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
use \CollingMedia\Lasso\ObjectSerializer;

/**
 * RegistrantRead Class Doc Comment
 *
 * @category Class
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class RegistrantRead extends Registrant 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RegistrantRead';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'registrant_id' => 'string',
        'project' => '\CollingMedia\Lasso\Model\Project',
        'emails' => '\CollingMedia\Lasso\Model\EmailRead[]',
        'phones' => '\CollingMedia\Lasso\Model\PhoneRead[]',
        'addresses' => '\CollingMedia\Lasso\Model\AddressRead[]',
        'history' => '\CollingMedia\Lasso\Model\HistoryRead[]',
        'notes' => '\CollingMedia\Lasso\Model\RegistrantNoteRead[]',
        'relationships' => '\CollingMedia\Lasso\Model\RegistrantRelationshipRead[]',
        '_links' => '\CollingMedia\Lasso\Model\RegistrantWriteLinks'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'registrant_id' => null,
        'project' => null,
        'emails' => null,
        'phones' => null,
        'addresses' => null,
        'history' => null,
        'notes' => null,
        'relationships' => null,
        '_links' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'registrant_id' => 'registrantId',
        'project' => 'project',
        'emails' => 'emails',
        'phones' => 'phones',
        'addresses' => 'addresses',
        'history' => 'history',
        'notes' => 'notes',
        'relationships' => 'relationships',
        '_links' => '_links'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'registrant_id' => 'setRegistrantId',
        'project' => 'setProject',
        'emails' => 'setEmails',
        'phones' => 'setPhones',
        'addresses' => 'setAddresses',
        'history' => 'setHistory',
        'notes' => 'setNotes',
        'relationships' => 'setRelationships',
        '_links' => 'setLinks'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'registrant_id' => 'getRegistrantId',
        'project' => 'getProject',
        'emails' => 'getEmails',
        'phones' => 'getPhones',
        'addresses' => 'getAddresses',
        'history' => 'getHistory',
        'notes' => 'getNotes',
        'relationships' => 'getRelationships',
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
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['registrant_id'] = isset($data['registrant_id']) ? $data['registrant_id'] : null;
        $this->container['project'] = isset($data['project']) ? $data['project'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['history'] = isset($data['history']) ? $data['history'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['relationships'] = isset($data['relationships']) ? $data['relationships'] : null;
        $this->container['_links'] = isset($data['_links']) ? $data['_links'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets registrant_id
     *
     * @return string
     */
    public function getRegistrantId()
    {
        return $this->container['registrant_id'];
    }

    /**
     * Sets registrant_id
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
     * Gets emails
     *
     * @return \CollingMedia\Lasso\Model\EmailRead[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \CollingMedia\Lasso\Model\EmailRead[] $emails emails
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets phones
     *
     * @return \CollingMedia\Lasso\Model\PhoneRead[]
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param \CollingMedia\Lasso\Model\PhoneRead[] $phones phones
     *
     * @return $this
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \CollingMedia\Lasso\Model\AddressRead[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \CollingMedia\Lasso\Model\AddressRead[] $addresses addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets history
     *
     * @return \CollingMedia\Lasso\Model\HistoryRead[]
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history
     *
     * @param \CollingMedia\Lasso\Model\HistoryRead[] $history history
     *
     * @return $this
     */
    public function setHistory($history)
    {
        $this->container['history'] = $history;

        return $this;
    }

    /**
     * Gets notes
     *
     * @return \CollingMedia\Lasso\Model\RegistrantNoteRead[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes
     *
     * @param \CollingMedia\Lasso\Model\RegistrantNoteRead[] $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets relationships
     *
     * @return \CollingMedia\Lasso\Model\RegistrantRelationshipRead[]
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     *
     * @param \CollingMedia\Lasso\Model\RegistrantRelationshipRead[] $relationships relationships
     *
     * @return $this
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets _links
     *
     * @return \CollingMedia\Lasso\Model\RegistrantWriteLinks
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links
     *
     * @param \CollingMedia\Lasso\Model\RegistrantWriteLinks $_links _links
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


