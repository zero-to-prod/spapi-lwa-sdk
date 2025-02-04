<?php

namespace Zerotoprod\SpapiLwaSdk\ClientCredentials;

use Zerotoprod\SpapiLwaSdk\Helpers\DataModel;

class ClientCredentialsResponseError
{
    use DataModel;

    public const error_description = 'error_description';
    public string $error_description;

    public const error = 'error';
    public string $error;
}