<?php
/**
 * ModelAccountingType
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
 * ModelAccountingType Class Doc Comment
 *
 * @category    Class
 * @package     ispserverfarm\sevdesk\phpclient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ModelAccountingType implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Model_AccountingType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        '_create' => '\DateTime',
        '_update' => '\DateTime',
        '_sev_client' => 'object',
        '_parent' => '\ispserverfarm\sevdesk\phpclient\model\ModelAccountingType',
        '_name' => 'string',
        '_skr03' => 'int',
        '_skr03_deprecation' => 'int',
        '_accounting_chart' => '\ispserverfarm\sevdesk\phpclient\model\ModelAccountingChart',
        '_skr04' => 'int',
        '_skr04_deprecation' => 'int',
        '_skr_at' => 'int',
        '_skr_at_deprecation' => 'int',
        '_skr_ch' => 'int',
        '_skr_ch_deprecation' => 'int',
        '_skr_gr' => 'int',
        '_skr_gr_deprecation' => 'int',
        '_type' => 'string',
        '_translation_code' => 'string',
        '_description_translation_code' => 'string',
        '_connotation_translation_code' => 'string',
        '_booking_type' => 'string',
        '_asset_type' => 'string',
        '_status' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        '_create' => 'date-time',
        '_update' => 'date-time',
        '_sev_client' => null,
        '_parent' => null,
        '_name' => null,
        '_skr03' => null,
        '_skr03_deprecation' => null,
        '_accounting_chart' => null,
        '_skr04' => null,
        '_skr04_deprecation' => null,
        '_skr_at' => null,
        '_skr_at_deprecation' => null,
        '_skr_ch' => null,
        '_skr_ch_deprecation' => null,
        '_skr_gr' => null,
        '_skr_gr_deprecation' => null,
        '_type' => null,
        '_translation_code' => null,
        '_description_translation_code' => null,
        '_connotation_translation_code' => null,
        '_booking_type' => null,
        '_asset_type' => null,
        '_status' => null
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
        '_sev_client' => '_sevClient',
        '_parent' => '_parent',
        '_name' => '_name',
        '_skr03' => '_skr03',
        '_skr03_deprecation' => '_skr03Deprecation',
        '_accounting_chart' => '_accountingChart',
        '_skr04' => '_skr04',
        '_skr04_deprecation' => '_skr04Deprecation',
        '_skr_at' => '_skrAt',
        '_skr_at_deprecation' => '_skrAtDeprecation',
        '_skr_ch' => '_skrCh',
        '_skr_ch_deprecation' => '_skrChDeprecation',
        '_skr_gr' => '_skrGr',
        '_skr_gr_deprecation' => '_skrGrDeprecation',
        '_type' => '_type',
        '_translation_code' => '_translationCode',
        '_description_translation_code' => '_descriptionTranslationCode',
        '_connotation_translation_code' => '_connotationTranslationCode',
        '_booking_type' => '_bookingType',
        '_asset_type' => '_assetType',
        '_status' => '_status'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        '_create' => 'setCreate',
        '_update' => 'setUpdate',
        '_sev_client' => 'setSevClient',
        '_parent' => 'setParent',
        '_name' => 'setName',
        '_skr03' => 'setSkr03',
        '_skr03_deprecation' => 'setSkr03Deprecation',
        '_accounting_chart' => 'setAccountingChart',
        '_skr04' => 'setSkr04',
        '_skr04_deprecation' => 'setSkr04Deprecation',
        '_skr_at' => 'setSkrAt',
        '_skr_at_deprecation' => 'setSkrAtDeprecation',
        '_skr_ch' => 'setSkrCh',
        '_skr_ch_deprecation' => 'setSkrChDeprecation',
        '_skr_gr' => 'setSkrGr',
        '_skr_gr_deprecation' => 'setSkrGrDeprecation',
        '_type' => 'setType',
        '_translation_code' => 'setTranslationCode',
        '_description_translation_code' => 'setDescriptionTranslationCode',
        '_connotation_translation_code' => 'setConnotationTranslationCode',
        '_booking_type' => 'setBookingType',
        '_asset_type' => 'setAssetType',
        '_status' => 'setStatus'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        '_create' => 'getCreate',
        '_update' => 'getUpdate',
        '_sev_client' => 'getSevClient',
        '_parent' => 'getParent',
        '_name' => 'getName',
        '_skr03' => 'getSkr03',
        '_skr03_deprecation' => 'getSkr03Deprecation',
        '_accounting_chart' => 'getAccountingChart',
        '_skr04' => 'getSkr04',
        '_skr04_deprecation' => 'getSkr04Deprecation',
        '_skr_at' => 'getSkrAt',
        '_skr_at_deprecation' => 'getSkrAtDeprecation',
        '_skr_ch' => 'getSkrCh',
        '_skr_ch_deprecation' => 'getSkrChDeprecation',
        '_skr_gr' => 'getSkrGr',
        '_skr_gr_deprecation' => 'getSkrGrDeprecation',
        '_type' => 'getType',
        '_translation_code' => 'getTranslationCode',
        '_description_translation_code' => 'getDescriptionTranslationCode',
        '_connotation_translation_code' => 'getConnotationTranslationCode',
        '_booking_type' => 'getBookingType',
        '_asset_type' => 'getAssetType',
        '_status' => 'getStatus'
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
        $this->container['_sev_client'] = isset($data['_sev_client']) ? $data['_sev_client'] : null;
        $this->container['_parent'] = isset($data['_parent']) ? $data['_parent'] : null;
        $this->container['_name'] = isset($data['_name']) ? $data['_name'] : null;
        $this->container['_skr03'] = isset($data['_skr03']) ? $data['_skr03'] : null;
        $this->container['_skr03_deprecation'] = isset($data['_skr03_deprecation']) ? $data['_skr03_deprecation'] : null;
        $this->container['_accounting_chart'] = isset($data['_accounting_chart']) ? $data['_accounting_chart'] : null;
        $this->container['_skr04'] = isset($data['_skr04']) ? $data['_skr04'] : null;
        $this->container['_skr04_deprecation'] = isset($data['_skr04_deprecation']) ? $data['_skr04_deprecation'] : null;
        $this->container['_skr_at'] = isset($data['_skr_at']) ? $data['_skr_at'] : null;
        $this->container['_skr_at_deprecation'] = isset($data['_skr_at_deprecation']) ? $data['_skr_at_deprecation'] : null;
        $this->container['_skr_ch'] = isset($data['_skr_ch']) ? $data['_skr_ch'] : null;
        $this->container['_skr_ch_deprecation'] = isset($data['_skr_ch_deprecation']) ? $data['_skr_ch_deprecation'] : null;
        $this->container['_skr_gr'] = isset($data['_skr_gr']) ? $data['_skr_gr'] : null;
        $this->container['_skr_gr_deprecation'] = isset($data['_skr_gr_deprecation']) ? $data['_skr_gr_deprecation'] : null;
        $this->container['_type'] = isset($data['_type']) ? $data['_type'] : null;
        $this->container['_translation_code'] = isset($data['_translation_code']) ? $data['_translation_code'] : null;
        $this->container['_description_translation_code'] = isset($data['_description_translation_code']) ? $data['_description_translation_code'] : null;
        $this->container['_connotation_translation_code'] = isset($data['_connotation_translation_code']) ? $data['_connotation_translation_code'] : null;
        $this->container['_booking_type'] = isset($data['_booking_type']) ? $data['_booking_type'] : null;
        $this->container['_asset_type'] = isset($data['_asset_type']) ? $data['_asset_type'] : 'N';
        $this->container['_status'] = isset($data['_status']) ? $data['_status'] : null;
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
     * @param \DateTime $_create date the accounting type was created
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
     * @param \DateTime $_update date the accounting type was last updated
     * @return $this
     */
    public function setUpdate($_update)
    {
        $this->container['_update'] = $_update;

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
     * Gets _parent
     * @return \ispserverfarm\sevdesk\phpclient\model\ModelAccountingType
     */
    public function getParent()
    {
        return $this->container['_parent'];
    }

    /**
     * Sets _parent
     * @param \ispserverfarm\sevdesk\phpclient\model\ModelAccountingType $_parent 
     * @return $this
     */
    public function setParent($_parent)
    {
        $this->container['_parent'] = $_parent;

        return $this;
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
     * @param string $_name 
     * @return $this
     */
    public function setName($_name)
    {
        $this->container['_name'] = $_name;

        return $this;
    }

    /**
     * Gets _skr03
     * @return int
     */
    public function getSkr03()
    {
        return $this->container['_skr03'];
    }

    /**
     * Sets _skr03
     * @param int $_skr03 
     * @return $this
     */
    public function setSkr03($_skr03)
    {
        $this->container['_skr03'] = $_skr03;

        return $this;
    }

    /**
     * Gets _skr03_deprecation
     * @return int
     */
    public function getSkr03Deprecation()
    {
        return $this->container['_skr03_deprecation'];
    }

    /**
     * Sets _skr03_deprecation
     * @param int $_skr03_deprecation 
     * @return $this
     */
    public function setSkr03Deprecation($_skr03_deprecation)
    {
        $this->container['_skr03_deprecation'] = $_skr03_deprecation;

        return $this;
    }

    /**
     * Gets _accounting_chart
     * @return \ispserverfarm\sevdesk\phpclient\model\ModelAccountingChart
     */
    public function getAccountingChart()
    {
        return $this->container['_accounting_chart'];
    }

    /**
     * Sets _accounting_chart
     * @param \ispserverfarm\sevdesk\phpclient\model\ModelAccountingChart $_accounting_chart 
     * @return $this
     */
    public function setAccountingChart($_accounting_chart)
    {
        $this->container['_accounting_chart'] = $_accounting_chart;

        return $this;
    }

    /**
     * Gets _skr04
     * @return int
     */
    public function getSkr04()
    {
        return $this->container['_skr04'];
    }

    /**
     * Sets _skr04
     * @param int $_skr04 
     * @return $this
     */
    public function setSkr04($_skr04)
    {
        $this->container['_skr04'] = $_skr04;

        return $this;
    }

    /**
     * Gets _skr04_deprecation
     * @return int
     */
    public function getSkr04Deprecation()
    {
        return $this->container['_skr04_deprecation'];
    }

    /**
     * Sets _skr04_deprecation
     * @param int $_skr04_deprecation 
     * @return $this
     */
    public function setSkr04Deprecation($_skr04_deprecation)
    {
        $this->container['_skr04_deprecation'] = $_skr04_deprecation;

        return $this;
    }

    /**
     * Gets _skr_at
     * @return int
     */
    public function getSkrAt()
    {
        return $this->container['_skr_at'];
    }

    /**
     * Sets _skr_at
     * @param int $_skr_at 
     * @return $this
     */
    public function setSkrAt($_skr_at)
    {
        $this->container['_skr_at'] = $_skr_at;

        return $this;
    }

    /**
     * Gets _skr_at_deprecation
     * @return int
     */
    public function getSkrAtDeprecation()
    {
        return $this->container['_skr_at_deprecation'];
    }

    /**
     * Sets _skr_at_deprecation
     * @param int $_skr_at_deprecation 
     * @return $this
     */
    public function setSkrAtDeprecation($_skr_at_deprecation)
    {
        $this->container['_skr_at_deprecation'] = $_skr_at_deprecation;

        return $this;
    }

    /**
     * Gets _skr_ch
     * @return int
     */
    public function getSkrCh()
    {
        return $this->container['_skr_ch'];
    }

    /**
     * Sets _skr_ch
     * @param int $_skr_ch 
     * @return $this
     */
    public function setSkrCh($_skr_ch)
    {
        $this->container['_skr_ch'] = $_skr_ch;

        return $this;
    }

    /**
     * Gets _skr_ch_deprecation
     * @return int
     */
    public function getSkrChDeprecation()
    {
        return $this->container['_skr_ch_deprecation'];
    }

    /**
     * Sets _skr_ch_deprecation
     * @param int $_skr_ch_deprecation 
     * @return $this
     */
    public function setSkrChDeprecation($_skr_ch_deprecation)
    {
        $this->container['_skr_ch_deprecation'] = $_skr_ch_deprecation;

        return $this;
    }

    /**
     * Gets _skr_gr
     * @return int
     */
    public function getSkrGr()
    {
        return $this->container['_skr_gr'];
    }

    /**
     * Sets _skr_gr
     * @param int $_skr_gr 
     * @return $this
     */
    public function setSkrGr($_skr_gr)
    {
        $this->container['_skr_gr'] = $_skr_gr;

        return $this;
    }

    /**
     * Gets _skr_gr_deprecation
     * @return int
     */
    public function getSkrGrDeprecation()
    {
        return $this->container['_skr_gr_deprecation'];
    }

    /**
     * Sets _skr_gr_deprecation
     * @param int $_skr_gr_deprecation 
     * @return $this
     */
    public function setSkrGrDeprecation($_skr_gr_deprecation)
    {
        $this->container['_skr_gr_deprecation'] = $_skr_gr_deprecation;

        return $this;
    }

    /**
     * Gets _type
     * @return string
     */
    public function getType()
    {
        return $this->container['_type'];
    }

    /**
     * Sets _type
     * @param string $_type 
     * @return $this
     */
    public function setType($_type)
    {
        $this->container['_type'] = $_type;

        return $this;
    }

    /**
     * Gets _translation_code
     * @return string
     */
    public function getTranslationCode()
    {
        return $this->container['_translation_code'];
    }

    /**
     * Sets _translation_code
     * @param string $_translation_code 
     * @return $this
     */
    public function setTranslationCode($_translation_code)
    {
        $this->container['_translation_code'] = $_translation_code;

        return $this;
    }

    /**
     * Gets _description_translation_code
     * @return string
     */
    public function getDescriptionTranslationCode()
    {
        return $this->container['_description_translation_code'];
    }

    /**
     * Sets _description_translation_code
     * @param string $_description_translation_code 
     * @return $this
     */
    public function setDescriptionTranslationCode($_description_translation_code)
    {
        $this->container['_description_translation_code'] = $_description_translation_code;

        return $this;
    }

    /**
     * Gets _connotation_translation_code
     * @return string
     */
    public function getConnotationTranslationCode()
    {
        return $this->container['_connotation_translation_code'];
    }

    /**
     * Sets _connotation_translation_code
     * @param string $_connotation_translation_code 
     * @return $this
     */
    public function setConnotationTranslationCode($_connotation_translation_code)
    {
        $this->container['_connotation_translation_code'] = $_connotation_translation_code;

        return $this;
    }

    /**
     * Gets _booking_type
     * @return string
     */
    public function getBookingType()
    {
        return $this->container['_booking_type'];
    }

    /**
     * Sets _booking_type
     * @param string $_booking_type 
     * @return $this
     */
    public function setBookingType($_booking_type)
    {
        $this->container['_booking_type'] = $_booking_type;

        return $this;
    }

    /**
     * Gets _asset_type
     * @return string
     */
    public function getAssetType()
    {
        return $this->container['_asset_type'];
    }

    /**
     * Sets _asset_type
     * @param string $_asset_type 
     * @return $this
     */
    public function setAssetType($_asset_type)
    {
        $this->container['_asset_type'] = $_asset_type;

        return $this;
    }

    /**
     * Gets _status
     * @return int
     */
    public function getStatus()
    {
        return $this->container['_status'];
    }

    /**
     * Sets _status
     * @param int $_status 
     * @return $this
     */
    public function setStatus($_status)
    {
        $this->container['_status'] = $_status;

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


