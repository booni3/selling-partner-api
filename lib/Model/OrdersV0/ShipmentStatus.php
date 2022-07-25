<?php
/**
 * ShipmentStatus
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Orders
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * The version of the OpenAPI document: v0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\OrdersV0;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * ShipmentStatus Class Doc Comment
 *
 * @category Class
 * @description the status of the shipment of the order to be updated
 * @package  SellingPartnerApi
 * @group 
 */
class ShipmentStatus
{
    public $value;

    /**
     * Possible values of this enum
     */
    const READY_FOR_PICKUP = 'ReadyForPickup';
    const PICKED_UP = 'PickedUp';
    const REFUSED_PICKUP = 'RefusedPickup';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::READY_FOR_PICKUP,
            self::PICKED_UP,
            self::REFUSED_PICKUP,
        ];
    }

    public function __construct($value)
    {
        if (is_null($value) || !in_array($value, self::getAllowableEnumValues())) {
            throw new \InvalidArgumentException(sprintf("Invalid value for enum 'ShipmentStatus', must be one of '%s'", implode("', '", self::getAllowableEnumValues())));
        }

        $this->value = $value;
    }

    /**
     * Convert the enum value to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}


