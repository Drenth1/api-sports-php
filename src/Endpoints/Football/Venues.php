<?php

namespace Drenth1\ApiSports\Endpoints\Football;

use Drenth1\ApiSports\Core\Endpoint;
use Drenth1\ApiSports\Validation\Parameters\Shared\Name;
use Drenth1\ApiSports\Validation\Parameters\Shared\Search;
use Drenth1\ApiSports\Validation\Parameters\Shared\Country;
use Drenth1\ApiSports\Validation\Parameters\Shared\Identifier;

class Venues extends Endpoint
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
            'id' => Identifier::class,
            'name' => Name::class,
            'city' => Name::class,
            'country' => Country::class,
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
        return 'venues';
    }
}