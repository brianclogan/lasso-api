<?php
/**
 * RegistrantWrite.
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
 * RegistrantWrite Class Doc Comment.
 *
 * @category Class
 * @author   Brian Logan
 * @link     https://github.com/colling-media/lasso-api
 */
class RegistrantWrite extends Registrant
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'RegistrantWrite';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'emails' => '\CollingMedia\Lasso\Model\EmailWrite[]',
        'phones' => '\CollingMedia\Lasso\Model\PhoneWrite[]',
        'addresses' => '\CollingMedia\Lasso\Model\AddressWrite[]',
        'history' => '\CollingMedia\Lasso\Model\HistoryWrite[]',
        'notes' => '\CollingMedia\Lasso\Model\RegistrantNoteWrite[]',
        'send_sales_rep_assignment_notification' => 'bool',
        'thank_you_email_template_id' => 'string',
        'send_opt_in_email' => 'bool',
        'rotation_id' => 'string',
        '_links' => '\CollingMedia\Lasso\Model\RegistrantWriteLinks',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'emails' => null,
        'phones' => null,
        'addresses' => null,
        'history' => null,
        'notes' => null,
        'send_sales_rep_assignment_notification' => null,
        'thank_you_email_template_id' => null,
        'send_opt_in_email' => null,
        'rotation_id' => null,
        '_links' => null,
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
        'emails' => 'emails',
        'phones' => 'phones',
        'addresses' => 'addresses',
        'history' => 'history',
        'notes' => 'notes',
        'send_sales_rep_assignment_notification' => 'sendSalesRepAssignmentNotification',
        'thank_you_email_template_id' => 'thankYouEmailTemplateId',
        'send_opt_in_email' => 'sendOptInEmail',
        'rotation_id' => 'rotationId',
        '_links' => '_links',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'emails' => 'setEmails',
        'phones' => 'setPhones',
        'addresses' => 'setAddresses',
        'history' => 'setHistory',
        'notes' => 'setNotes',
        'send_sales_rep_assignment_notification' => 'setSendSalesRepAssignmentNotification',
        'thank_you_email_template_id' => 'setThankYouEmailTemplateId',
        'send_opt_in_email' => 'setSendOptInEmail',
        'rotation_id' => 'setRotationId',
        '_links' => 'setLinks',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'emails' => 'getEmails',
        'phones' => 'getPhones',
        'addresses' => 'getAddresses',
        'history' => 'getHistory',
        'notes' => 'getNotes',
        'send_sales_rep_assignment_notification' => 'getSendSalesRepAssignmentNotification',
        'thank_you_email_template_id' => 'getThankYouEmailTemplateId',
        'send_opt_in_email' => 'getSendOptInEmail',
        'rotation_id' => 'getRotationId',
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

        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['phones'] = isset($data['phones']) ? $data['phones'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['history'] = isset($data['history']) ? $data['history'] : null;
        $this->container['notes'] = isset($data['notes']) ? $data['notes'] : null;
        $this->container['send_sales_rep_assignment_notification'] = isset($data['send_sales_rep_assignment_notification']) ? $data['send_sales_rep_assignment_notification'] : null;
        $this->container['thank_you_email_template_id'] = isset($data['thank_you_email_template_id']) ? $data['thank_you_email_template_id'] : null;
        $this->container['send_opt_in_email'] = isset($data['send_opt_in_email']) ? $data['send_opt_in_email'] : null;
        $this->container['rotation_id'] = isset($data['rotation_id']) ? $data['rotation_id'] : null;
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
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets emails.
     *
     * @return \CollingMedia\Lasso\Model\EmailWrite[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails.
     *
     * @param \CollingMedia\Lasso\Model\EmailWrite[] $emails emails
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets phones.
     *
     * @return \CollingMedia\Lasso\Model\PhoneWrite[]
     */
    public function getPhones()
    {
        return $this->container['phones'];
    }

    /**
     * Sets phones.
     *
     * @param \CollingMedia\Lasso\Model\PhoneWrite[] $phones phones
     *
     * @return $this
     */
    public function setPhones($phones)
    {
        $this->container['phones'] = $phones;

        return $this;
    }

    /**
     * Gets addresses.
     *
     * @return \CollingMedia\Lasso\Model\AddressWrite[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses.
     *
     * @param \CollingMedia\Lasso\Model\AddressWrite[] $addresses addresses
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets history.
     *
     * @return \CollingMedia\Lasso\Model\HistoryWrite[]
     */
    public function getHistory()
    {
        return $this->container['history'];
    }

    /**
     * Sets history.
     *
     * @param \CollingMedia\Lasso\Model\HistoryWrite[] $history history
     *
     * @return $this
     */
    public function setHistory($history)
    {
        $this->container['history'] = $history;

        return $this;
    }

    /**
     * Gets notes.
     *
     * @return \CollingMedia\Lasso\Model\RegistrantNoteWrite[]
     */
    public function getNotes()
    {
        return $this->container['notes'];
    }

    /**
     * Sets notes.
     *
     * @param \CollingMedia\Lasso\Model\RegistrantNoteWrite[] $notes notes
     *
     * @return $this
     */
    public function setNotes($notes)
    {
        $this->container['notes'] = $notes;

        return $this;
    }

    /**
     * Gets send_sales_rep_assignment_notification.
     *
     * @return bool
     */
    public function getSendSalesRepAssignmentNotification()
    {
        return $this->container['send_sales_rep_assignment_notification'];
    }

    /**
     * Sets send_sales_rep_assignment_notification.
     *
     * @param bool $send_sales_rep_assignment_notification send_sales_rep_assignment_notification
     *
     * @return $this
     */
    public function setSendSalesRepAssignmentNotification($send_sales_rep_assignment_notification)
    {
        $this->container['send_sales_rep_assignment_notification'] = $send_sales_rep_assignment_notification;

        return $this;
    }

    /**
     * Gets thank_you_email_template_id.
     *
     * @return string
     */
    public function getThankYouEmailTemplateId()
    {
        return $this->container['thank_you_email_template_id'];
    }

    /**
     * Sets thank_you_email_template_id.
     *
     * @param string $thank_you_email_template_id thank_you_email_template_id
     *
     * @return $this
     */
    public function setThankYouEmailTemplateId($thank_you_email_template_id)
    {
        $this->container['thank_you_email_template_id'] = $thank_you_email_template_id;

        return $this;
    }

    /**
     * Gets send_opt_in_email.
     *
     * @return bool
     */
    public function getSendOptInEmail()
    {
        return $this->container['send_opt_in_email'];
    }

    /**
     * Sets send_opt_in_email.
     *
     * @param bool $send_opt_in_email send_opt_in_email
     *
     * @return $this
     */
    public function setSendOptInEmail($send_opt_in_email)
    {
        $this->container['send_opt_in_email'] = $send_opt_in_email;

        return $this;
    }

    /**
     * Gets rotation_id.
     *
     * @return string
     */
    public function getRotationId()
    {
        return $this->container['rotation_id'];
    }

    /**
     * Sets rotation_id.
     *
     * @param string $rotation_id Assign a sales rep from next in rotation. assignedSalesReps override rotationId
     *
     * @return $this
     */
    public function setRotationId($rotation_id)
    {
        $this->container['rotation_id'] = $rotation_id;

        return $this;
    }

    /**
     * Gets _links.
     *
     * @return \CollingMedia\Lasso\Model\RegistrantWriteLinks
     */
    public function getLinks()
    {
        return $this->container['_links'];
    }

    /**
     * Sets _links.
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
