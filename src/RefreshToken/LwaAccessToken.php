<?php

namespace Zerotoprod\SpapiLwaSdk\RefreshToken;

use Zerotoprod\SpapiLwaSdk\Helpers\DataModel;

class LwaAccessToken
{
    use DataModel;

    public const access_token = 'access_token';
    public string $access_token;

    public const token_type = 'token_type';
    public string $token_type;

    public const expires_in = 'expires_in';
    public int $expires_in;

    public const refresh_token = 'refresh_token';
    public string $refresh_token;
}