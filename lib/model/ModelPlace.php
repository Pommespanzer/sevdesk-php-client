<?php
/**
 * ModelPlace
 *
 * PHP version 5
 *
 * @category Class
 * @package  ispserverfarm\sevdesk\phpclient
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

namespace ispserverfarm\sevdesk\phpclient\model;

use \ArrayAccess;

/**
 * ModelPlace Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelPlace implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_Place';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_name' => 'string',
        '_lon' => 'float',
        '_lat' => 'float',
        '_zip' => 'string',
        '_loc_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_name' => null,
        '_lon' => 'float',
        '_lat' => 'float',
        '_zip' => null,
        '_loc_id' => null
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
        '_name' => '_name',
        '_lon' => '_lon',
        '_lat' => '_lat',
        '_zip' => '_zip',
        '_loc_id' => '_locId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_name' => 'setName',
        '_lon' => 'setLon',
        '_lat' => 'setLat',
        '_zip' => 'setZip',
        '_loc_id' => 'setLocId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_name' => 'getName',
        '_lon' => 'getLon',
        '_lat' => 'getLat',
        '_zip' => 'getZip',
        '_loc_id' => 'getLocId'
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
        $this->container['_name'] = isset($data['_name']) ? $data['_name'] : null;
        $this->container['_lon'] = isset($data['_lon']) ? $data['_lon'] : null;
        $this->container['_lat'] = isset($data['_lat']) ? $data['_lat'] : null;
        $this->container['_zip'] = isset($data['_zip']) ? $data['_zip'] : null;
        $this->container['_loc_id'] = isset($data['_loc_id']) ? $data['_loc_id'] : null;
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
     * Gets _name
     * @return string
     */
    public function getName()
    {
        return $this->container['_name'];
    }

    /**
     * Sets _name
     * @param string $_name name of the place
     * @return $this
     */
    public function setName($_name)
    {
        $this->container['_name'] = $_name;

        return $this;
    }

    /**
     * Gets _lon
     * @return float
     */
    public function getLon()
    {
        return $this->container['_lon'];
    }

    /**
     * Sets _lon
     * @param float $_lon longitude of the place
     * @return $this
     */
    public function setLon($_lon)
    {
        $this->container['_lon'] = $_lon;

        return $this;
    }

    /**
     * Gets _lat
     * @return float
     */
    public function getLat()
    {
        return $this->container['_lat'];
    }

    /**
     * Sets _lat
     * @param float $_lat latitude of the place
     * @return $this
     */
    public function setLat($_lat)
    {
        $this->container['_lat'] = $_lat;

        return $this;
    }

    /**
     * Gets _zip
     * @return string
     */
    public function getZip()
    {
        return $this->container['_zip'];
    }

    /**
     * Sets _zip
     * @param string $_zip zip of the place
     * @return $this
     */
    public function setZip($_zip)
    {
        $this->container['_zip'] = $_zip;

        return $this;
    }

    /**
     * Gets _loc_id
     * @return int
     */
    public function getLocId()
    {
        return $this->container['_loc_id'];
    }

    /**
     * Sets _loc_id
     * @param int $_loc_id location id of the place
     * @return $this
     */
    public function setLocId($_loc_id)
    {
        $this->container['_loc_id'] = $_loc_id;

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
            return json_encode(\ispserverfarm\sevdesk\phpclient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ispserverfarm\sevdesk\phpclient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


