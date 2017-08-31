<?php
/**
 * ModelVoucherLog
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
 * ModelVoucherLog Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk\php-client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelVoucherLog implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_VoucherLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_voucher' => '\ispserverfarm\sevdesk\php-client\sevdesk-model\ModelVoucher',
        '_from_status' => 'int',
        '_to_status' => 'int',
        '_amount_payed' => 'float',
        '_booking_date' => '\DateTime',
        '_sev_client' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_voucher' => null,
        '_from_status' => null,
        '_to_status' => null,
        '_amount_payed' => 'float',
        '_booking_date' => 'date-time',
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
        '_create' => '_create',
        '_voucher' => '_voucher',
        '_from_status' => '_fromStatus',
        '_to_status' => '_toStatus',
        '_amount_payed' => '_amountPayed',
        '_booking_date' => '_bookingDate',
        '_sev_client' => '_sevClient'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_voucher' => 'setVoucher',
        '_from_status' => 'setFromStatus',
        '_to_status' => 'setToStatus',
        '_amount_payed' => 'setAmountPayed',
        '_booking_date' => 'setBookingDate',
        '_sev_client' => 'setSevClient'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_voucher' => 'getVoucher',
        '_from_status' => 'getFromStatus',
        '_to_status' => 'getToStatus',
        '_amount_payed' => 'getAmountPayed',
        '_booking_date' => 'getBookingDate',
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
        $this->container['_create'] = isset($data['_create']) ? $data['_create'] : null;
        $this->container['_voucher'] = isset($data['_voucher']) ? $data['_voucher'] : null;
        $this->container['_from_status'] = isset($data['_from_status']) ? $data['_from_status'] : null;
        $this->container['_to_status'] = isset($data['_to_status']) ? $data['_to_status'] : null;
        $this->container['_amount_payed'] = isset($data['_amount_payed']) ? $data['_amount_payed'] : null;
        $this->container['_booking_date'] = isset($data['_booking_date']) ? $data['_booking_date'] : null;
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
     * Gets _create
     * @return \DateTime
     */
    public function getCreate()
    {
        return $this->container['_create'];
    }

    /**
     * Sets _create
     * @param \DateTime $_create date the voucher log was created
     * @return $this
     */
    public function setCreate($_create)
    {
        $this->container['_create'] = $_create;

        return $this;
    }

    /**
     * Gets _voucher
     * @return \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelVoucher
     */
    public function getVoucher()
    {
        return $this->container['_voucher'];
    }

    /**
     * Sets _voucher
     * @param \ispserverfarm\sevdesk\php-client\sevdesk-model\ModelVoucher $_voucher voucher to which the log belongs
     * @return $this
     */
    public function setVoucher($_voucher)
    {
        $this->container['_voucher'] = $_voucher;

        return $this;
    }

    /**
     * Gets _from_status
     * @return int
     */
    public function getFromStatus()
    {
        return $this->container['_from_status'];
    }

    /**
     * Sets _from_status
     * @param int $_from_status status of the voucher before the logged change
     * @return $this
     */
    public function setFromStatus($_from_status)
    {
        $this->container['_from_status'] = $_from_status;

        return $this;
    }

    /**
     * Gets _to_status
     * @return int
     */
    public function getToStatus()
    {
        return $this->container['_to_status'];
    }

    /**
     * Sets _to_status
     * @param int $_to_status status of the voucher after the logged change
     * @return $this
     */
    public function setToStatus($_to_status)
    {
        $this->container['_to_status'] = $_to_status;

        return $this;
    }

    /**
     * Gets _amount_payed
     * @return float
     */
    public function getAmountPayed()
    {
        return $this->container['_amount_payed'];
    }

    /**
     * Sets _amount_payed
     * @param float $_amount_payed amount which was payed
     * @return $this
     */
    public function setAmountPayed($_amount_payed)
    {
        $this->container['_amount_payed'] = $_amount_payed;

        return $this;
    }

    /**
     * Gets _booking_date
     * @return \DateTime
     */
    public function getBookingDate()
    {
        return $this->container['_booking_date'];
    }

    /**
     * Sets _booking_date
     * @param \DateTime $_booking_date date of the booking
     * @return $this
     */
    public function setBookingDate($_booking_date)
    {
        $this->container['_booking_date'] = $_booking_date;

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


