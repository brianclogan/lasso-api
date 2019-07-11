<?php
/**
 * ContactInformation
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
 * ContactInformation Class Doc Comment
 *
 * @category Class
 * @package CollingMedia\Lasso
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class ContactInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ContactInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'personal_id' => 'string',
        'name_title' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'company' => 'string',
        'contact_preference' => 'string',
        'gender' => 'string',
        'nickname' => 'string',
        'birthday' => 'string',
        'emails' => '\CollingMedia\Lasso\Model\Email[]',
        'phones' => '\CollingMedia\Lasso\Model\Phone[]',
        'addresses' => '\CollingMedia\Lasso\Model\Address[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'personal_id' => null,
        'name_title' => null,
        'first_name' => null,
        'last_name' => null,
        'company' => null,
        'contact_preference' => null,
        'gender' => null,
        'nickname' => null,
        'birthday' => null,
        'emails' => null,
        'phones' => null,
        'addresses' => null
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
        'personal_id' => 'personalId',
        'name_title' => 'nameTitle',
        'first_name' => 'firstName',
        'last_name' => 'lastName',
        'company' => 'company',
        'contact_preference' => 'contactPreference',
        'gender' => 'gender',
        'nickname' => 'nickname',
        'birthday' => 'birthday',
        'emails' => 'emails',
        'phones' => 'phones',
        'addresses' => 'addresses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'personal_id' => 'setPersonalId',
        'name_title' => 'setNameTitle',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'company' => 'setCompany',
        'contact_preference' => 'setContactPreference',
        'gender' => 'setGender',
        'nickname' => 'setNickname',
        'birthday' => 'setBirthday',
        'emails' => 'setEmails',
        'phones' => 'setPhones',
        'addresses' => 'setAddresses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'personal_id' => 'getPersonalId',
        'name_title' => 'getNameTitle',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'company' => 'getCompany',
        'contact_preference' => 'getContactPreference',
        'gender' => 'getGender',
        'nickname' => 'getNickname',
        'birthday' => 'getBirthday',
        'emails' => 'getEmails',
        'phones' => 'getPhones',
        'addresses' => 'getAddresses'
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

    const CONTACT_PREFERENCE_NO_PREFERENCE = 'noPreference';
    const CONTACT_PREFERENCE_ANY = 'any';
    const CONTACT_PREFERENCE_EMAIL = 'email';
    const CONTACT_PREFERENCE_MAIL = 'mail';
    const CONTACT_PREFERENCE_PHONE = 'phone';
    const CONTACT_PREFERENCE_TEXT = 'text';
    const CONTACT_PREFERENCE_NO_EMAIL = 'noEmail';
    const CONTACT_PREFERENCE_NO_CONTACT = 'noContact';
    const GENDER_UNSPECIFIED = 'unspecified';
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContactPreferenceAllowableValues()
    {
        return [
            self::CONTACT_PREFERENCE_NO_PREFERENCE,
            self::CONTACT_PREFERENCE_ANY,
            self::CONTACT_PREFERENCE_EMAIL,
            self::CONTACT_PREFERENCE_MAIL,
            self::CONTACT_PREFERENCE_PHONE,
            self::CONTACT_PREFERENCE_TEXT,
            self::CONTACT_PREFERENCE_NO_EMAIL,
            self::CONTACT_PREFERENCE_NO_CONTACT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_UNSPECIFIED,
            self::GENDER_MALE,
            self::GENDER_FEMALE,
        ];
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
        $this->container['personal_id'] = isset($data['personal_id']) ? $data['personal_id'] : null;
        $this->container['name_title'] = isset($data['name_title']) ? $data['name_title'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['contact_preference'] = isset($data['contact_preference']) ? $data['contact_preference'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['nickname'] = isset($data['nickname']) ? $data['nickname'] : null;
        $this->container['birthday'] = isset($data['birthday']) ? $data['birthday'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        $allowedValues = $this->getContactPreferenceAllowableValues();
        if (!is_null($this->container['contact_preference']) && !in_array($this->container['contact_preference'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'contact_preference', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets personal_id
     *
     * @return string
     */
    public function getPersonalId()
    {
        return $this->container['personal_id'];
    }

    /**
     * Sets personal_id
     *
     * @param string $personal_id personal_id
     *
     * @return $this
     */
    public function setPersonalId($personal_id)
    {
        $this->container['personal_id'] = $personal_id;

        return $this;
    }

    /**
     * Gets name_title
     *
     * @return string
     */
    public function getNameTitle()
    {
        return $this->container['name_title'];
    }

    /**
     * Sets name_title
     *
     * @param string $name_title name_title
     *
     * @return $this
     */
    public function setNameTitle($name_title)
    {
        $this->container['name_title'] = $name_title;

        return $this;
    }

    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
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
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
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
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company company
     *
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets contact_preference
     *
     * @return string
     */
    public function getContactPreference()
    {
        return $this->container['contact_preference'];
    }

    /**
     * Sets contact_preference
     *
     * @param string $contact_preference How the registrant would like to be contacted
     *
     * @return $this
     */
    public function setContactPreference($contact_preference)
    {
        $allowedValues = $this->getContactPreferenceAllowableValues();
        if (!is_null($contact_preference) && !in_array($contact_preference, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'contact_preference', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['contact_preference'] = $contact_preference;

        return $this;
    }

    /**
     * Gets gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string $gender gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['gender'] = $gender;

        return $this;
    }

    /**
     * Gets nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->container['nickname'];
    }

    /**
     * Sets nickname
     *
     * @param string $nickname nickname
     *
     * @return $this
     */
    public function setNickname($nickname)
    {
        $this->container['nickname'] = $nickname;

        return $this;
    }

    /**
     * Gets birthday
     *
     * @return string
     */
    public function getBirthday()
    {
        return $this->container['birthday'];
    }

    /**
     * Sets birthday
     *
     * @param string $birthday Contains only the month and day.
     *
     * @return $this
     */
    public function setBirthday($birthday)
    {
        $this->container['birthday'] = $birthday;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return \CollingMedia\Lasso\Model\Email[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \CollingMedia\Lasso\Model\Email[] $emails emails
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
     * @return \CollingMedia\Lasso\Model\Phone[]
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones
     *
     * @param \CollingMedia\Lasso\Model\Phone[] $phones phones
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
     * @return \CollingMedia\Lasso\Model\Address[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \CollingMedia\Lasso\Model\Address[] $addresses addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

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


