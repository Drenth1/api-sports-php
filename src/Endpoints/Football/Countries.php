<?php

namespace Drenth1\ApiSports\Endpoints\Football;

use Drenth1\ApiSports\Core\Endpoint;
use Drenth1\ApiSports\Validation\Parameters\Football\CountryCode;
use Drenth1\ApiSports\Validation\Parameters\Football\CountryName;
use Drenth1\ApiSports\Validation\Parameters\Shared\Search;

class Countries extends Endpoint
{
    /**
     * Get an array of possible request parameters for the Endpoint.
     *
     * @param string $version the version of the api to use.
     * @return array
     */
    public static function parameters(string $version) : array
    {
        return [
            'name' => CountryName::class,
            'code' => CountryCode::class,
            'search' => Search::class
        ];
    }

    /**
     * Get the URL-path for the Endpoint.
     *
     * @param string $version the version of the api to use.
     * @return string
     */
    public static function path(string $version) : string
    {
        return 'countries';
    }
}