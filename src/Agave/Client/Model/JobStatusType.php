<?php
/**
 * JobStatusType
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
 * JobStatusType Class Doc Comment
 *
 * @category Class
 * @package  Agave\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobStatusType
{
    /**
     * Possible values of this enum
     */
    const PENDING = 'PENDING';
    const STAGING_INPUTS = 'STAGING_INPUTS';
    const CLEANING_UP = 'CLEANING_UP';
    const ARCHIVING = 'ARCHIVING';
    const STAGING_JOB = 'STAGING_JOB';
    const FINISHED = 'FINISHED';
    const KILLED = 'KILLED';
    const FAILED = 'FAILED';
    const STOPPED = 'STOPPED';
    const RUNNING = 'RUNNING';
    const PAUSED = 'PAUSED';
    const QUEUED = 'QUEUED';
    const SUBMITTING = 'SUBMITTING';
    const STAGED = 'STAGED';
    const PROCESSING_INPUTS = 'PROCESSING_INPUTS';
    const ARCHIVING_FINISHED = 'ARCHIVING_FINISHED';
    const ARCHIVING_FAILED = 'ARCHIVING_FAILED';
    const HEARTBEAT = 'HEARTBEAT';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PENDING,
            self::STAGING_INPUTS,
            self::CLEANING_UP,
            self::ARCHIVING,
            self::STAGING_JOB,
            self::FINISHED,
            self::KILLED,
            self::FAILED,
            self::STOPPED,
            self::RUNNING,
            self::PAUSED,
            self::QUEUED,
            self::SUBMITTING,
            self::STAGED,
            self::PROCESSING_INPUTS,
            self::ARCHIVING_FINISHED,
            self::ARCHIVING_FAILED,
            self::HEARTBEAT,
        ];
    }
}


