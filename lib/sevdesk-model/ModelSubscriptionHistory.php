<?php
/**
 * ModelSubscriptionHistory
 *
 * PHP version 5
 *
 * @category Class
 * @package  ispserverfarm\sevdesk\php-client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sevDesk
 *
 * # Getting started  The sevDesk API v1 uses a token authentication.    You need to click on the authorization button (lock symbol) and enter your api-key there.    The token can be found on [https://my.sevdesk.de](https://my.sevdesk.de).    settings-->user-->specific user    # General information    The sevDesk api uses **models** to represent the different categories like **contacts** and **invoices**.    Every time you request such a model from the api, it will return the whole model schema including the unique **model id** and all the other objects and parameters that are included in the model.    Have a look at it in the developer console of your desired browser, especially if you are looking for specific parameters like the model id.    # URL    The basic URL contains four elements. **BaseURL** + **Controller** + **Version** + **Model**: [https://my.sevdesk.de/api/v1/Contact/](https://my.sevdesk.de/api/v1/Contact/)    # Basic Operations    Access a list of models: [https://my.sevdesk.de/api/v1/{Model}/](https://my.sevdesk.de/api/v1/{Model}/)    Access a specific model: [https://my.sevdesk.de/api/v1/{Model}/{id}](https://my.sevdesk.de/api/v1/{Model}/{id})    The **id** of a specific model can usually be found in the **developer console** of your browser or when opening a specific model, in the **url**.    Call a model function: [https://my.sevdesk.de/api/v1/{Model}/{id}/{Function}](https://my.sevdesk.de/api/v1/{Model}/{id}/{Function})    Each operation can be used with different HTTP methods:  * GET - read data  * POST - create data  * PUT - update existing data  * DELETE - delete data    # Useful Parameters    For each request, there are some specific parameters.    **GET Query Parameters**  * **limit** - limits the number of entries returned  * **offset** - set the index where the returned entries should start  * **embed** - embed can be used to get some additional information about a model. For example you can get the addresses of a contact with **embed=addresses**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses`    * If there is a need to get more information about the country in the addresses, embed can be extended by **addresses.country**    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=addresses,addresses.country`    * Some models also contain other models. By default these models are only filled with an id and objectName. If you want to get more information about the nested model you can use embed too.    `[GET]https://my.sevdesk.de/api/v1/Contact/?embed=parent`    * Every model also has specified 'query parameters'. These can be used to filter the results. E.g. all Contacts with a 'Company' in their name    `[GET]https://my.sevdesk.de/api/v1/Contact/?name=Company`    * **countAll** If countAll is set to 1 the total number of entries will be returned additionally  * **orderBy** Is an array that can be filled with objects containing the the properties field and arrangement    `json: orderBy = [{field:'parent' ,arrangement:'desc'},{field:'name' ,arrangement:'asc'}];`    `url: ?orderBy[0][field]=parent&orderBy[0][arrangement]=desc&orderBy[1][field]=name&orderBy[1][arrangement]=asc`
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ispserverfarm\sevdesk\php-client\sevdesk-model;

use \ArrayAccess;

/**
 * ModelSubscriptionHistory Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk\php-client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelSubscriptionHistory implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_SubscriptionHistory';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_end_date' => '\DateTime',
        '_current_subscription_code' => 'string',
        '_current_subscription_duration' => 'string',
        '_sev_client' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_end_date' => 'date-time',
        '_current_subscription_code' => null,
        '_current_subscription_duration' => null,
        '_sev_client' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        '_end_date' => '_endDate',
        '_current_subscription_code' => '_currentSubscriptionCode',
        '_current_subscription_duration' => '_currentSubscriptionDuration',
        '_sev_client' => '_sevClient'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_end_date' => 'setEndDate',
        '_current_subscription_code' => 'setCurrentSubscriptionCode',
        '_current_subscription_duration' => 'setCurrentSubscriptionDuration',
        '_sev_client' => 'setSevClient'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_end_date' => 'getEndDate',
        '_current_subscription_code' => 'getCurrentSubscriptionCode',
        '_current_subscription_duration' => 'getCurrentSubscriptionDuration',
        '_sev_client' => 'getSevClient'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['_end_date'] = isset($data['_end_date']) ? $data['_end_date'] : null;
        $this->container['_current_subscription_code'] = isset($data['_current_subscription_code']) ? $data['_current_subscription_code'] : null;
        $this->container['_current_subscription_duration'] = isset($data['_current_subscription_duration']) ? $data['_current_subscription_duration'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets _end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['_end_date'];
    }

    /**
     * Sets _end_date
     * @param \DateTime $_end_date End date of subscription in subscription history
     * @return $this
     */
    public function setEndDate($_end_date)
    {
        $this->container['_end_date'] = $_end_date;

        return $this;
    }

    /**
     * Gets _current_subscription_code
     * @return string
     */
    public function getCurrentSubscriptionCode()
    {
        return $this->container['_current_subscription_code'];
    }

    /**
     * Sets _current_subscription_code
     * @param string $_current_subscription_code Status of the subscription you currently have
     * @return $this
     */
    public function setCurrentSubscriptionCode($_current_subscription_code)
    {
        $this->container['_current_subscription_code'] = $_current_subscription_code;

        return $this;
    }

    /**
     * Gets _current_subscription_duration
     * @return string
     */
    public function getCurrentSubscriptionDuration()
    {
        return $this->container['_current_subscription_duration'];
    }

    /**
     * Sets _current_subscription_duration
     * @param string $_current_subscription_duration Duration of your current subscription
     * @return $this
     */
    public function setCurrentSubscriptionDuration($_current_subscription_duration)
    {
        $this->container['_current_subscription_duration'] = $_current_subscription_duration;

        return $this;
    }

    /**
     * Gets _sev_client
     * @return object
     */
    public function getSevClient()
    {
        return $this->container['_sev_client'];
    }

    /**
     * Sets _sev_client
     * @param object $_sev_client sevClient is the unique id every customer has and is used in nearly all operations
     * @return $this
     */
    public function setSevClient($_sev_client)
    {
        $this->container['_sev_client'] = $_sev_client;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ispserverfarm\sevdesk\php-client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ispserverfarm\sevdesk\php-client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


