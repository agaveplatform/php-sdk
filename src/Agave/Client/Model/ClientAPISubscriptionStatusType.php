<?php
/**
 * ClientAPISubscriptionStatusType
 *
 * PHP version 5
 *
 * @category Class
 * @package  Agave\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Agave Platform Science API
 *
 * Power your digital lab and reduce the time from theory to discovery using the Agave Science-as-a-Service API Platform. Agave provides hosted services that allow researchers to manage data, conduct experiments, and publish and share results from anywhere at any time.
 *
 * OpenAPI spec version: 2.2.14
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: unset
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Agave\Client\Model;
use \Agave\Client\ObjectSerializer;

/**
 * ClientAPISubscriptionStatusType Class Doc Comment
 *
 * @category Class
 * @package  Agave\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClientAPISubscriptionStatusType
{
    /**
     * Possible values of this enum
     */
    const CREATED = 'CREATED';
    const PROTOTYPED = 'PROTOTYPED';
    const PUBLISHED = 'PUBLISHED';
    const DEPRECATED = 'DEPRECATED';
    const RETIRED = 'RETIRED';
    const BLOCKED = 'BLOCKED';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
            self::PROTOTYPED,
            self::PUBLISHED,
            self::DEPRECATED,
            self::RETIRED,
            self::BLOCKED,
        ];
    }
}


