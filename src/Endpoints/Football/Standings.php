<?php

namespace Drenth1\ApiSports\Endpoints\Football;

use Drenth1\ApiSports\Core\Endpoint;
use Drenth1\ApiSports\Validation\Parameters\Football\Season;
use Drenth1\ApiSports\Validation\Parameters\Shared\Identifier;

class Standings extends Endpoint
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
            'league' => Identifier::class,
            'season' => Season::class,
            'team' => Identifier::class
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
        return 'standings';
    }
}