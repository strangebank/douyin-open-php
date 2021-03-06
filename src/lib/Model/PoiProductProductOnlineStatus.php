<?php
/**
 * PoiProductProductOnlineStatus
 *
 * PHP version 5
 *
 * @category Class
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.20
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace swagger_client\Model;
use swagger_client\ObjectSerializer;

/**
 * PoiProductProductOnlineStatus Class Doc Comment
 *
 * @category Class
 * @description 在线状态 1 - 在线; 2 - 下线
 * @package  swagger_client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PoiProductProductOnlineStatus
{
    /**
     * Possible values of this enum
     */
    const 1 = 1;
const 2 = 2;
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::1,
self::2,        ];
    }
}
