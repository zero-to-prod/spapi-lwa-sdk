<?php

namespace Zerotoprod\SpapiLwaSdk\RefreshToken;

use Zerotoprod\Arr\Arr;
use Zerotoprod\CurlHelperSdk\DataModels\Info;
use Zerotoprod\SpapiLwaSdk\Helpers\DataModel;

/**
 * @link https://github.com/zero-to-prod/spapi-lwa-sdk
 */
class RefreshTokenResponse
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const info = 'info';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public Info $info;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const error = 'error';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public ?string $error = null;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const headers = 'headers';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public RefreshTokenResponseHeaders $headers;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const response = 'response';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public LwaAccessToken|RefreshTokenResponseError $response;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public static function fromResponse(array $response): self
    {
        return self::from([
            self::info => $response['info'],
            self::error => $response['error'] ?? null,
            self::headers => Arr::mapKeys($response['headers'] ?? [], static fn($key) => strtolower($key)),
            self::response => $response['info']['http_code'] === 200
                ? LwaAccessToken::from($response['response'])
                : RefreshTokenResponseError::from($response['response'])
        ]);
    }
}