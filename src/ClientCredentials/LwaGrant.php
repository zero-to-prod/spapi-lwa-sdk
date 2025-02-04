<?php

namespace Zerotoprod\SpapiLwaSdk\ClientCredentials;

use Zerotoprod\SpapiLwaSdk\Helpers\DataModel;

class LwaGrant
{
    use DataModel;

    public const access_token = 'access_token';
    public string $access_token;

    public const scope = 'scope';
    public string $scope;

    public const token_type = 'token_type';
    public string $token_type;

    public const expires_in = 'expires_in';
    public int $expires_in;
}