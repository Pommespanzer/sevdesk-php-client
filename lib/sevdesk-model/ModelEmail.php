<?php
/**
 * ModelEmail
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
 * ModelEmail Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk\php-client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelEmail implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_Email';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_object' => '\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelInvoice',
        '_from' => 'string',
        '_to' => 'string',
        '_subject' => 'string',
        '_text' => 'string',
        '_sev_client' => 'object',
        '_cc' => 'string',
        '_bcc' => 'string',
        '_arrived' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_object' => null,
        '_from' => null,
        '_to' => null,
        '_subject' => null,
        '_text' => null,
        '_sev_client' => null,
        '_cc' => null,
        '_bcc' => null,
        '_arrived' => 'date-time'
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
        '_create' => '_create',
        '_update' => '_update',
        '_object' => '_object',
        '_from' => '_from',
        '_to' => '_to',
        '_subject' => '_subject',
        '_text' => '_text',
        '_sev_client' => '_sevClient',
        '_cc' => '_cc',
        '_bcc' => '_bcc',
        '_arrived' => '_arrived'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_object' => 'setObject',
        '_from' => 'setFrom',
        '_to' => 'setTo',
        '_subject' => 'setSubject',
        '_text' => 'setText',
        '_sev_client' => 'setSevClient',
        '_cc' => 'setCc',
        '_bcc' => 'setBcc',
        '_arrived' => 'setArrived'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_object' => 'getObject',
        '_from' => 'getFrom',
        '_to' => 'getTo',
        '_subject' => 'getSubject',
        '_text' => 'getText',
        '_sev_client' => 'getSevClient',
        '_cc' => 'getCc',
        '_bcc' => 'getBcc',
        '_arrived' => 'getArrived'
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
        $this->container['_create'] = isset($data['_create']) ? $data['_create'] : null;
        $this->container['_update'] = isset($data['_update']) ? $data['_update'] : null;
        $this->container['_object'] = isset($data['_object']) ? $data['_object'] : null;
        $this->container['_from'] = isset($data['_from']) ? $data['_from'] : null;
        $this->container['_to'] = isset($data['_to']) ? $data['_to'] : null;
        $this->container['_subject'] = isset($data['_subject']) ? $data['_subject'] : null;
        $this->container['_text'] = isset($data['_text']) ? $data['_text'] : null;
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_cc'] = isset($data['_cc']) ? $data['_cc'] : null;
        $this->container['_bcc'] = isset($data['_bcc']) ? $data['_bcc'] : null;
        $this->container['_arrived'] = isset($data['_arrived']) ? $data['_arrived'] : null;
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
     * Gets _create
     * @return \DateTime
     */
    public function getCreate()
    {
        return $this->container['_create'];
    }

    /**
     * Sets _create
     * @param \DateTime $_create creation date of the Email
     * @return $this
     */
    public function setCreate($_create)
    {
        $this->container['_create'] = $_create;

        return $this;
    }

    /**
     * Gets _update
     * @return \DateTime
     */
    public function getUpdate()
    {
        return $this->container['_update'];
    }

    /**
     * Sets _update
     * @param \DateTime $_update date the email was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

        return $this;
    }

    /**
     * Gets _object
     * @return \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelInvoice
     */
    public function getObject()
    {
        return $this->container['_object'];
    }

    /**
     * Sets _object
     * @param \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelInvoice $_object invoice object which is send via email
     * @return $this
     */
    public function setObject($_object)
    {
        $this->container['_object'] = $_object;

        return $this;
    }

    /**
     * Gets _from
     * @return string
     */
    public function getFrom()
    {
        return $this->container['_from'];
    }

    /**
     * Sets _from
     * @param string $_from sender of the email
     * @return $this
     */
    public function setFrom($_from)
    {
        $this->container['_from'] = $_from;

        return $this;
    }

    /**
     * Gets _to
     * @return string
     */
    public function getTo()
    {
        return $this->container['_to'];
    }

    /**
     * Sets _to
     * @param string $_to recipient of the email
     * @return $this
     */
    public function setTo($_to)
    {
        $this->container['_to'] = $_to;

        return $this;
    }

    /**
     * Gets _subject
     * @return string
     */
    public function getSubject()
    {
        return $this->container['_subject'];
    }

    /**
     * Sets _subject
     * @param string $_subject subject of the email
     * @return $this
     */
    public function setSubject($_subject)
    {
        $this->container['_subject'] = $_subject;

        return $this;
    }

    /**
     * Gets _text
     * @return string
     */
    public function getText()
    {
        return $this->container['_text'];
    }

    /**
     * Sets _text
     * @param string $_text text written in the email
     * @return $this
     */
    public function setText($_text)
    {
        $this->container['_text'] = $_text;

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
     * Gets _cc
     * @return string
     */
    public function getCc()
    {
        return $this->container['_cc'];
    }

    /**
     * Sets _cc
     * @param string $_cc cc of the email
     * @return $this
     */
    public function setCc($_cc)
    {
        $this->container['_cc'] = $_cc;

        return $this;
    }

    /**
     * Gets _bcc
     * @return string
     */
    public function getBcc()
    {
        return $this->container['_bcc'];
    }

    /**
     * Sets _bcc
     * @param string $_bcc bcc of the email
     * @return $this
     */
    public function setBcc($_bcc)
    {
        $this->container['_bcc'] = $_bcc;

        return $this;
    }

    /**
     * Gets _arrived
     * @return \DateTime
     */
    public function getArrived()
    {
        return $this->container['_arrived'];
    }

    /**
     * Sets _arrived
     * @param \DateTime $_arrived arrival date of the email
     * @return $this
     */
    public function setArrived($_arrived)
    {
        $this->container['_arrived'] = $_arrived;

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


