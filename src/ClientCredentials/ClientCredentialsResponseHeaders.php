<?php

namespace Zerotoprod\SpapiLwaSdk\ClientCredentials;

use Zerotoprod\DataModel\Describe;
use Zerotoprod\SpapiLwaSdk\Helpers\DataModel;

/**
 * @link https://github.com/zero-to-prod/spapi-lwa-sdk
 */
class ClientCredentialsResponseHeaders
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const server = 'server';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public ?string $server = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const date = 'date';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public ?string $date = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const content_type = 'content-type';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    #[Describe(['from' => self::content_type])]
    public ?string $content_type = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const content_length = 'content-length';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    #[Describe(['from' => self::content_length])]
    public ?string $content_length = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const connection = 'connection';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public ?string $connection = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const x_amz_rid = 'x-amz-rid';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    #[Describe(['from' => self::x_amz_rid])]
    public ?string $x_amz_rid = null;

    /**
     * Unique request reference identifier.
     *
     * @see  $x_amzn_requestid
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const x_amzn_requestid = 'x-amzn-requestid';
    /**
     * Unique request reference identifier.
     *
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    #[Describe(['from' => self::x_amzn_requestid])]
    public ?string $x_amzn_requestid = null;

    /**
     * Unique request reference identifier.
     *
     * @see  $x_amzn_date
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const x_amz_date = 'x-amz-date';
    /**
     * Unique request reference identifier.
     *
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    #[Describe(['from' => self::x_amz_date])]
    public ?string $x_amzn_date = null;

    /**
     * Unique request reference identifier.
     *
     * @see  $cache_control
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const cache_control = 'cache-control';
    /**
     * Unique request reference identifier.
     *
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    #[Describe(['from' => self::cache_control])]
    public ?string $cache_control = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const pragma = 'pragma';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public ?string $pragma = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const vary = 'vary';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public ?string $vary = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const strict_transport_security = 'strict-transport-security';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    #[Describe(['from' => self::strict_transport_security])]
    public ?string $strict_transport_security = null;
}