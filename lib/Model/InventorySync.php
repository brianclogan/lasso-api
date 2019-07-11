<?php
/**
 * InventorySync.
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
 * InventorySync Class Doc Comment.
 *
 * @category Class
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class InventorySync extends Inventory
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'InventorySync';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'revisions' => '\CollingMedia\Lasso\Model\PricingRevision[]',
        'notes' => '\CollingMedia\Lasso\Model\Note[]',
        'subjects' => '\CollingMedia\Lasso\Model\Subject[]',
        'deposits' => '\CollingMedia\Lasso\Model\Deposit[]',
        'realtors' => '\CollingMedia\Lasso\Model\Realtor[]',
        'bicycle_lockers' => '\CollingMedia\Lasso\Model\BicycleLocker[]',
        'storage_lockers' => '\CollingMedia\Lasso\Model\StorageLocker[]',
        'parking_stalls' => '\CollingMedia\Lasso\Model\ParkingStall[]',
        'sales_reps' => 'string[]',
        'purchasers' => 'string[]',
        'options' => '\CollingMedia\Lasso\Model\Option[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'revisions' => null,
        'notes' => null,
        'subjects' => null,
        'deposits' => null,
        'realtors' => null,
        'bicycle_lockers' => null,
        'storage_lockers' => null,
        'parking_stalls' => null,
        'sales_reps' => null,
        'purchasers' => null,
        'options' => null,
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
        'revisions' => 'revisions',
        'notes' => 'notes',
        'subjects' => 'subjects',
        'deposits' => 'deposits',
        'realtors' => 'realtors',
        'bicycle_lockers' => 'bicycleLockers',
        'storage_lockers' => 'storageLockers',
        'parking_stalls' => 'parkingStalls',
        'sales_reps' => 'salesReps',
        'purchasers' => 'purchasers',
        'options' => 'options',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'revisions' => 'setRevisions',
        'notes' => 'setNotes',
        'subjects' => 'setSubjects',
        'deposits' => 'setDeposits',
        'realtors' => 'setRealtors',
        'bicycle_lockers' => 'setBicycleLockers',
        'storage_lockers' => 'setStorageLockers',
        'parking_stalls' => 'setParkingStalls',
        'sales_reps' => 'setSalesReps',
        'purchasers' => 'setPurchasers',
        'options' => 'setOptions',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'revisions' => 'getRevisions',
        'notes' => 'getNotes',
        'subjects' => 'getSubjects',
        'deposits' => 'getDeposits',
        'realtors' => 'getRealtors',
        'bicycle_lockers' => 'getBicycleLockers',
        'storage_lockers' => 'getStorageLockers',
        'parking_stalls' => 'getParkingStalls',
        'sales_reps' => 'getSalesReps',
        'purchasers' => 'getPurchasers',
        'options' => 'getOptions',
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

        $this->container['revisions'] = isset($data['revisions']) ? $data['revisions'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['subjects'] = isset($data['subjects']) ? $data['subjects'] : null;
        $this->container['deposits'] = isset($data['deposits']) ? $data['deposits'] : null;
        $this->container['realtors'] = isset($data['realtors']) ? $data['realtors'] : null;
        $this->container['bicycle_lockers'] = isset($data['bicycle_lockers']) ? $data['bicycle_lockers'] : null;
        $this->container['storage_lockers'] = isset($data['storage_lockers']) ? $data['storage_lockers'] : null;
        $this->container['parking_stalls'] = isset($data['parking_stalls']) ? $data['parking_stalls'] : null;
        $this->container['sales_reps'] = isset($data['sales_reps']) ? $data['sales_reps'] : null;
        $this->container['purchasers'] = isset($data['purchasers']) ? $data['purchasers'] : null;
        $this->container['options'] = isset($data['options']) ? $data['options'] : null;
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
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets revisions.
     *
     * @return \CollingMedia\Lasso\Model\PricingRevision[]
     */
    public function getRevisions()
    {
        return $this->container['revisions'];
    }

    /**
     * Sets revisions.
     *
     * @param \CollingMedia\Lasso\Model\PricingRevision[] $revisions revisions
     *
     * @return $this
     */
    public function setRevisions($revisions)
    {
        $this->container['revisions'] = $revisions;

        return $this;
    }

    /**
     * Gets notes.
     *
     * @return \CollingMedia\Lasso\Model\Note[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes.
     *
     * @param \CollingMedia\Lasso\Model\Note[] $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets subjects.
     *
     * @return \CollingMedia\Lasso\Model\Subject[]
     */
    public function getSubjects()
    {
        return $this->container['subjects'];
    }

    /**
     * Sets subjects.
     *
     * @param \CollingMedia\Lasso\Model\Subject[] $subjects subjects
     *
     * @return $this
     */
    public function setSubjects($subjects)
    {
        $this->container['subjects'] = $subjects;

        return $this;
    }

    /**
     * Gets deposits.
     *
     * @return \CollingMedia\Lasso\Model\Deposit[]
     */
    public function getDeposits()
    {
        return $this->container['deposits'];
    }

    /**
     * Sets deposits.
     *
     * @param \CollingMedia\Lasso\Model\Deposit[] $deposits deposits
     *
     * @return $this
     */
    public function setDeposits($deposits)
    {
        $this->container['deposits'] = $deposits;

        return $this;
    }

    /**
     * Gets realtors.
     *
     * @return \CollingMedia\Lasso\Model\Realtor[]
     */
    public function getRealtors()
    {
        return $this->container['realtors'];
    }

    /**
     * Sets realtors.
     *
     * @param \CollingMedia\Lasso\Model\Realtor[] $realtors Realtors associated with the inventory. Only a realtor's compensation may be updated, all non compensation fields will be ignored.
     *
     * @return $this
     */
    public function setRealtors($realtors)
    {
        $this->container['realtors'] = $realtors;

        return $this;
    }

    /**
     * Gets bicycle_lockers.
     *
     * @return \CollingMedia\Lasso\Model\BicycleLocker[]
     */
    public function getBicycleLockers()
    {
        return $this->container['bicycle_lockers'];
    }

    /**
     * Sets bicycle_lockers.
     *
     * @param \CollingMedia\Lasso\Model\BicycleLocker[] $bicycle_lockers bicycle_lockers
     *
     * @return $this
     */
    public function setBicycleLockers($bicycle_lockers)
    {
        $this->container['bicycle_lockers'] = $bicycle_lockers;

        return $this;
    }

    /**
     * Gets storage_lockers.
     *
     * @return \CollingMedia\Lasso\Model\StorageLocker[]
     */
    public function getStorageLockers()
    {
        return $this->container['storage_lockers'];
    }

    /**
     * Sets storage_lockers.
     *
     * @param \CollingMedia\Lasso\Model\StorageLocker[] $storage_lockers storage_lockers
     *
     * @return $this
     */
    public function setStorageLockers($storage_lockers)
    {
        $this->container['storage_lockers'] = $storage_lockers;

        return $this;
    }

    /**
     * Gets parking_stalls.
     *
     * @return \CollingMedia\Lasso\Model\ParkingStall[]
     */
    public function getParkingStalls()
    {
        return $this->container['parking_stalls'];
    }

    /**
     * Sets parking_stalls.
     *
     * @param \CollingMedia\Lasso\Model\ParkingStall[] $parking_stalls parking_stalls
     *
     * @return $this
     */
    public function setParkingStalls($parking_stalls)
    {
        $this->container['parking_stalls'] = $parking_stalls;

        return $this;
    }

    /**
     * Gets sales_reps.
     *
     * @return string[]
     */
    public function getSalesReps()
    {
        return $this->container['sales_reps'];
    }

    /**
     * Sets sales_reps.
     *
     * @param string[] $sales_reps sales_reps
     *
     * @return $this
     */
    public function setSalesReps($sales_reps)
    {
        $this->container['sales_reps'] = $sales_reps;

        return $this;
    }

    /**
     * Gets purchasers.
     *
     * @return string[]
     */
    public function getPurchasers()
    {
        return $this->container['purchasers'];
    }

    /**
     * Sets purchasers.
     *
     * @param string[] $purchasers List of registrant IDs to associate as purchasers with this inventory. Use the registrant create route to create a registrant if it does not exist yet.
     *
     * @return $this
     */
    public function setPurchasers($purchasers)
    {
        $this->container['purchasers'] = $purchasers;

        return $this;
    }

    /**
     * Gets options.
     *
     * @return \CollingMedia\Lasso\Model\Option[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options.
     *
     * @param \CollingMedia\Lasso\Model\Option[] $options options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->container['options'] = $options;

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
