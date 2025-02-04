<?php

namespace Zerotoprod\SpapiLwaSdk\RefreshToken;

use Zerotoprod\Arr\Arr;
use Zerotoprod\CurlHelperSdk\DataModels\Info;
use Zerotoprod\SpapiLwaSdk\Helpers\DataModel;

class RefreshTokenResponse
{
    use DataModel;

    public const info = 'info';
    public Info $info;

    public const error = 'error';
    public ?string $error = null;

    public const headers = 'headers';
    public RefreshTokenResponseHeaders $headers;

    public const response = 'response';
    public LwaAccessToken|RefreshTokenResponseError $response;

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