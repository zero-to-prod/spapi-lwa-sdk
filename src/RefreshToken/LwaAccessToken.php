<?php

namespace Zerotoprod\SpapiLwaSdk\RefreshToken;

use Zerotoprod\SpapiLwaSdk\Helpers\DataModel;

/**
 * @link https://github.com/zero-to-prod/spapi-lwa-sdk
 */
class LwaAccessToken
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const access_token = 'access_token';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public string $access_token;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const token_type = 'token_type';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public string $token_type;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const expires_in = 'expires_in';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public int $expires_in;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const refresh_token = 'refresh_token';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public string $refresh_token;
}