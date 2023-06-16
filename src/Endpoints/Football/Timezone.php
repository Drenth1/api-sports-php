<?php

namespace Drenth1\ApiSports\Endpoints\Football;

use Drenth1\ApiSports\Core\Endpoint;

class Timezone extends Endpoint
{
    /**
     * The API versions in which the Endpoint is supported.
     *
     * @var array
     */
    protected static array $supportedVersions = ['v3'];

    /**
     * Get the supported parameters for a version of the Endpoint.
     *
     * @param string $version The version of the API to use.
     * @return array
     */
    public static function supportedParameters(string $version) : array
    {
        return [];
    }

    /**
     * Get the URL for a version of the Endpoint.
     *
     * @param string $version The version of the API to use.
     * @return string
     */
    public static function url(string $version) : string
    {
        return 'timezone';
    }
}