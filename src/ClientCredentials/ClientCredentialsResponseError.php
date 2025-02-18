<?php

namespace Zerotoprod\SpapiLwaSdk\ClientCredentials;

use Zerotoprod\SpapiLwaSdk\Helpers\DataModel;

/**
 * @link https://github.com/zero-to-prod/spapi-lwa-sdk
 */
class ClientCredentialsResponseError
{
    use DataModel;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const error_description = 'error_description';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public string $error_description;

    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public const error = 'error';
    /**
     * @link https://github.com/zero-to-prod/spapi-lwa-sdk
     */
    public string $error;
}