<?php
/**
 * RunnerChange
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Betfair: Exchange Streaming API
 *
 * API to receive streamed updates. This is an ssl socket connection of CRLF delimited json messages (see RequestMessage & ResponseMessage)
 *
 * OpenAPI spec version: 1.0.1423
 * Contact: bdp@betfair.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * RunnerChange Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RunnerChange implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RunnerChange';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'tv' => 'double',
        'batb' => 'double[][]',
        'spb' => 'double[][]',
        'bdatl' => 'double[][]',
        'trd' => 'double[][]',
        'spf' => 'double',
        'ltp' => 'double',
        'atb' => 'double[][]',
        'spl' => 'double[][]',
        'spn' => 'double',
        'atl' => 'double[][]',
        'batl' => 'double[][]',
        'id' => 'int',
        'hc' => 'double',
        'bdatb' => 'double[][]'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'tv' => 'tv',
        'batb' => 'batb',
        'spb' => 'spb',
        'bdatl' => 'bdatl',
        'trd' => 'trd',
        'spf' => 'spf',
        'ltp' => 'ltp',
        'atb' => 'atb',
        'spl' => 'spl',
        'spn' => 'spn',
        'atl' => 'atl',
        'batl' => 'batl',
        'id' => 'id',
        'hc' => 'hc',
        'bdatb' => 'bdatb'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'tv' => 'setTv',
        'batb' => 'setBatb',
        'spb' => 'setSpb',
        'bdatl' => 'setBdatl',
        'trd' => 'setTrd',
        'spf' => 'setSpf',
        'ltp' => 'setLtp',
        'atb' => 'setAtb',
        'spl' => 'setSpl',
        'spn' => 'setSpn',
        'atl' => 'setAtl',
        'batl' => 'setBatl',
        'id' => 'setId',
        'hc' => 'setHc',
        'bdatb' => 'setBdatb'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'tv' => 'getTv',
        'batb' => 'getBatb',
        'spb' => 'getSpb',
        'bdatl' => 'getBdatl',
        'trd' => 'getTrd',
        'spf' => 'getSpf',
        'ltp' => 'getLtp',
        'atb' => 'getAtb',
        'spl' => 'getSpl',
        'spn' => 'getSpn',
        'atl' => 'getAtl',
        'batl' => 'getBatl',
        'id' => 'getId',
        'hc' => 'getHc',
        'bdatb' => 'getBdatb'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['tv'] = isset($data['tv']) ? $data['tv'] : null;
        $this->container['batb'] = isset($data['batb']) ? $data['batb'] : null;
        $this->container['spb'] = isset($data['spb']) ? $data['spb'] : null;
        $this->container['bdatl'] = isset($data['bdatl']) ? $data['bdatl'] : null;
        $this->container['trd'] = isset($data['trd']) ? $data['trd'] : null;
        $this->container['spf'] = isset($data['spf']) ? $data['spf'] : null;
        $this->container['ltp'] = isset($data['ltp']) ? $data['ltp'] : null;
        $this->container['atb'] = isset($data['atb']) ? $data['atb'] : null;
        $this->container['spl'] = isset($data['spl']) ? $data['spl'] : null;
        $this->container['spn'] = isset($data['spn']) ? $data['spn'] : null;
        $this->container['atl'] = isset($data['atl']) ? $data['atl'] : null;
        $this->container['batl'] = isset($data['batl']) ? $data['batl'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['hc'] = isset($data['hc']) ? $data['hc'] : null;
        $this->container['bdatb'] = isset($data['bdatb']) ? $data['bdatb'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets tv
     * @return double
     */
    public function getTv()
    {
        return $this->container['tv'];
    }

    /**
     * Sets tv
     * @param double $tv The total amount matched. This value is truncated at 2dp.
     * @return $this
     */
    public function setTv($tv)
    {
        $this->container['tv'] = $tv;

        return $this;
    }

    /**
     * Gets batb
     * @return double[][]
     */
    public function getBatb()
    {
        return $this->container['batb'];
    }

    /**
     * Sets batb
     * @param double[][] $batb Best Available To Back - LevelPriceVol triple delta of price changes, keyed by level (0 vol is remove)
     * @return $this
     */
    public function setBatb($batb)
    {
        $this->container['batb'] = $batb;

        return $this;
    }

    /**
     * Gets spb
     * @return double[][]
     */
    public function getSpb()
    {
        return $this->container['spb'];
    }

    /**
     * Sets spb
     * @param double[][] $spb Starting Price Back - PriceVol tuple delta of price changes (0 vol is remove)
     * @return $this
     */
    public function setSpb($spb)
    {
        $this->container['spb'] = $spb;

        return $this;
    }

    /**
     * Gets bdatl
     * @return double[][]
     */
    public function getBdatl()
    {
        return $this->container['bdatl'];
    }

    /**
     * Sets bdatl
     * @param double[][] $bdatl Best Display Available To Lay (includes virtual prices)- LevelPriceVol triple delta of price changes, keyed by level (0 vol is remove)
     * @return $this
     */
    public function setBdatl($bdatl)
    {
        $this->container['bdatl'] = $bdatl;

        return $this;
    }

    /**
     * Gets trd
     * @return double[][]
     */
    public function getTrd()
    {
        return $this->container['trd'];
    }

    /**
     * Sets trd
     * @param double[][] $trd Traded - PriceVol tuple delta of price changes (0 vol is remove)
     * @return $this
     */
    public function setTrd($trd)
    {
        $this->container['trd'] = $trd;

        return $this;
    }

    /**
     * Gets spf
     * @return double
     */
    public function getSpf()
    {
        return $this->container['spf'];
    }

    /**
     * Sets spf
     * @param double $spf Starting Price Far - The far starting price (or null if un-changed)
     * @return $this
     */
    public function setSpf($spf)
    {
        $this->container['spf'] = $spf;

        return $this;
    }

    /**
     * Gets ltp
     * @return double
     */
    public function getLtp()
    {
        return $this->container['ltp'];
    }

    /**
     * Sets ltp
     * @param double $ltp Last Traded Price - The last traded price (or null if un-changed)
     * @return $this
     */
    public function setLtp($ltp)
    {
        $this->container['ltp'] = $ltp;

        return $this;
    }

    /**
     * Gets atb
     * @return double[][]
     */
    public function getAtb()
    {
        return $this->container['atb'];
    }

    /**
     * Sets atb
     * @param double[][] $atb Available To Back - PriceVol tuple delta of price changes (0 vol is remove)
     * @return $this
     */
    public function setAtb($atb)
    {
        $this->container['atb'] = $atb;

        return $this;
    }

    /**
     * Gets spl
     * @return double[][]
     */
    public function getSpl()
    {
        return $this->container['spl'];
    }

    /**
     * Sets spl
     * @param double[][] $spl Starting Price Lay - PriceVol tuple delta of price changes (0 vol is remove)
     * @return $this
     */
    public function setSpl($spl)
    {
        $this->container['spl'] = $spl;

        return $this;
    }

    /**
     * Gets spn
     * @return double
     */
    public function getSpn()
    {
        return $this->container['spn'];
    }

    /**
     * Sets spn
     * @param double $spn Starting Price Near - The far starting price (or null if un-changed)
     * @return $this
     */
    public function setSpn($spn)
    {
        $this->container['spn'] = $spn;

        return $this;
    }

    /**
     * Gets atl
     * @return double[][]
     */
    public function getAtl()
    {
        return $this->container['atl'];
    }

    /**
     * Sets atl
     * @param double[][] $atl Available To Lay - PriceVol tuple delta of price changes (0 vol is remove)
     * @return $this
     */
    public function setAtl($atl)
    {
        $this->container['atl'] = $atl;

        return $this;
    }

    /**
     * Gets batl
     * @return double[][]
     */
    public function getBatl()
    {
        return $this->container['batl'];
    }

    /**
     * Sets batl
     * @param double[][] $batl Best Available To Lay - LevelPriceVol triple delta of price changes, keyed by level (0 vol is remove)
     * @return $this
     */
    public function setBatl($batl)
    {
        $this->container['batl'] = $batl;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id Selection Id - the id of the runner (selection)
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets hc
     * @return double
     */
    public function getHc()
    {
        return $this->container['hc'];
    }

    /**
     * Sets hc
     * @param double $hc Handicap - the handicap of the runner (selection) (null if not applicable)
     * @return $this
     */
    public function setHc($hc)
    {
        $this->container['hc'] = $hc;

        return $this;
    }

    /**
     * Gets bdatb
     * @return double[][]
     */
    public function getBdatb()
    {
        return $this->container['bdatb'];
    }

    /**
     * Sets bdatb
     * @param double[][] $bdatb Best Display Available To Back (includes virtual prices)- LevelPriceVol triple delta of price changes, keyed by level (0 vol is remove)
     * @return $this
     */
    public function setBdatb($bdatb)
    {
        $this->container['bdatb'] = $bdatb;

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
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


