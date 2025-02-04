<?php

namespace Zerotoprod\SpapiLwaSdk\RefreshToken;

use Zerotoprod\SpapiLwaSdk\Helpers\DataModel;
use Zerotoprod\DataModel\Describe;

class RefreshTokenResponseHeaders
{
    use DataModel;

    public const server = 'server';
    public ?string $server = null;

    public const date = 'date';
    public ?string $date = null;

    public const content_type = 'content-type';
    #[Describe(['from' => self::content_type])]
    public ?string $content_type = null;

    public const content_length = 'content-length';
    #[Describe(['from' => self::content_length])]
    public ?string $content_length = null;

    public const connection = 'connection';
    public ?string $connection = null;

    public const x_amz_rid = 'x-amz-rid';
    #[Describe(['from' => self::x_amz_rid])]
    public ?string $x_amz_rid = null;

    /**
     * Unique request reference identifier.
     *
     * @see $x_amzn_requestid
     */
    public const x_amzn_requestid = 'x-amzn-requestid';
    /** Unique request reference identifier. */
    #[Describe(['from' => self::x_amzn_requestid])]
    public ?string $x_amzn_requestid = null;

    /**
     * Unique request reference identifier.
     *
     * @see $x_amzn_date
     */
    public const x_amz_date = 'x-amz-date';
    /** Unique request reference identifier. */
    #[Describe(['from' => self::x_amz_date])]
    public ?string $x_amzn_date = null;

    /**
     * Unique request reference identifier.
     *
     * @see $cache_control
     */
    public const cache_control = 'cache-control';
    /** Unique request reference identifier. */
    #[Describe(['from' => self::cache_control])]
    public ?string $cache_control = null;

    public const pragma = 'pragma';
    public ?string $pragma = null;

    public const vary = 'vary';
    public ?string $vary = null;

    public const strict_transport_security = 'strict-transport-security';
    #[Describe(['from' => self::strict_transport_security])]
    public ?string $strict_transport_security = null;
}