<?php

namespace Zerotoprod\SpapiLwaSdk;

use Zerotoprod\SpapiLwa\SpapiLwa;
use Zerotoprod\SpapiLwaSdk\ClientCredentials\ClientCredentialsResponse;
use Zerotoprod\SpapiLwaSdk\RefreshToken\RefreshTokenResponse;

class SpapiLwaSdk
{
    public static function refreshToken(string $url, string $refresh_token, string $client_id, string $client_secret, ?string $user_agent = null): RefreshTokenResponse
    {
        return RefreshTokenResponse::fromResponse(
            SpapiLwa::refreshToken($url, $refresh_token, $client_id, $client_secret, $user_agent),
        );
    }

    public static function clientCredentials(string $url, string $scope, string $client_id, string $client_secret, ?string $user_agent = null): ClientCredentialsResponse
    {
        return ClientCredentialsResponse::fromResponse(
            SpapiLwa::clientCredentials($url, $scope, $client_id, $client_secret, $user_agent),
        );
    }
}