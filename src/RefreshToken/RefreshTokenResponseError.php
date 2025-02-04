<?php

namespace Zerotoprod\SpapiLwaSdk\RefreshToken;

use Zerotoprod\SpapiLwaSdk\Helpers\DataModel;

class RefreshTokenResponseError
{
    use DataModel;

    public const error_description = 'error_description';
    public string $error_description;

    public const error = 'error';
    public string $error;
}