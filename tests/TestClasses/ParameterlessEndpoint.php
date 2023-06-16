<?php

namespace Drenth1\ApiSports\Tests\TestClasses;

use Drenth1\ApiSports\Core\Endpoint;

class ParameterlessEndpoint extends Endpoint
{
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
        return 'test';
    }
}