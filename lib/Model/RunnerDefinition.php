<?php
/**
 * RunnerDefinition
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
 * RunnerDefinition Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RunnerDefinition implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RunnerDefinition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'sort_priority' => 'int',
        'removal_date' => '\DateTime',
        'id' => 'int',
        'hc' => 'double',
        'adjustment_factor' => 'double',
        'bsp' => 'double',
        'status' => 'string'
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
        'sort_priority' => 'sortPriority',
        'removal_date' => 'removalDate',
        'id' => 'id',
        'hc' => 'hc',
        'adjustment_factor' => 'adjustmentFactor',
        'bsp' => 'bsp',
        'status' => 'status'
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
        'sort_priority' => 'setSortPriority',
        'removal_date' => 'setRemovalDate',
        'id' => 'setId',
        'hc' => 'setHc',
        'adjustment_factor' => 'setAdjustmentFactor',
        'bsp' => 'setBsp',
        'status' => 'setStatus'
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
        'sort_priority' => 'getSortPriority',
        'removal_date' => 'getRemovalDate',
        'id' => 'getId',
        'hc' => 'getHc',
        'adjustment_factor' => 'getAdjustmentFactor',
        'bsp' => 'getBsp',
        'status' => 'getStatus'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_WINNER = 'WINNER';
    const STATUS_LOSER = 'LOSER';
    const STATUS_REMOVED = 'REMOVED';
    const STATUS_REMOVED_VACANT = 'REMOVED_VACANT';
    const STATUS_HIDDEN = 'HIDDEN';
    const STATUS_PLACED = 'PLACED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_WINNER,
            self::STATUS_LOSER,
            self::STATUS_REMOVED,
            self::STATUS_REMOVED_VACANT,
            self::STATUS_HIDDEN,
            self::STATUS_PLACED,
        ];
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
        $this->container['sort_priority'] = isset($data['sort_priority']) ? $data['sort_priority'] : null;
        $this->container['removal_date'] = isset($data['removal_date']) ? $data['removal_date'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['hc'] = isset($data['hc']) ? $data['hc'] : null;
        $this->container['adjustment_factor'] = isset($data['adjustment_factor']) ? $data['adjustment_factor'] : null;
        $this->container['bsp'] = isset($data['bsp']) ? $data['bsp'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("ACTIVE", "WINNER", "LOSER", "REMOVED", "REMOVED_VACANT", "HIDDEN", "PLACED");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

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
        $allowed_values = array("ACTIVE", "WINNER", "LOSER", "REMOVED", "REMOVED_VACANT", "HIDDEN", "PLACED");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets sort_priority
     * @return int
     */
    public function getSortPriority()
    {
        return $this->container['sort_priority'];
    }

    /**
     * Sets sort_priority
     * @param int $sort_priority
     * @return $this
     */
    public function setSortPriority($sort_priority)
    {
        $this->container['sort_priority'] = $sort_priority;

        return $this;
    }

    /**
     * Gets removal_date
     * @return \DateTime
     */
    public function getRemovalDate()
    {
        return $this->container['removal_date'];
    }

    /**
     * Sets removal_date
     * @param \DateTime $removal_date
     * @return $this
     */
    public function setRemovalDate($removal_date)
    {
        $this->container['removal_date'] = $removal_date;

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
     * Gets adjustment_factor
     * @return double
     */
    public function getAdjustmentFactor()
    {
        return $this->container['adjustment_factor'];
    }

    /**
     * Sets adjustment_factor
     * @param double $adjustment_factor
     * @return $this
     */
    public function setAdjustmentFactor($adjustment_factor)
    {
        $this->container['adjustment_factor'] = $adjustment_factor;

        return $this;
    }

    /**
     * Gets bsp
     * @return double
     */
    public function getBsp()
    {
        return $this->container['bsp'];
    }

    /**
     * Sets bsp
     * @param double $bsp
     * @return $this
     */
    public function setBsp($bsp)
    {
        $this->container['bsp'] = $bsp;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('ACTIVE', 'WINNER', 'LOSER', 'REMOVED', 'REMOVED_VACANT', 'HIDDEN', 'PLACED');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'ACTIVE', 'WINNER', 'LOSER', 'REMOVED', 'REMOVED_VACANT', 'HIDDEN', 'PLACED'");
        }
        $this->container['status'] = $status;

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


