<?php

namespace Drenth1\ApiSports\Endpoints\Football;

use Drenth1\ApiSports\Core\Endpoint;
use Drenth1\ApiSports\Validation\Parameters\Shared\Date;
use Drenth1\ApiSports\Validation\Parameters\Football\Live;
use Drenth1\ApiSports\Validation\Parameters\Football\Round;
use Drenth1\ApiSports\Validation\Parameters\Football\Season;
use Drenth1\ApiSports\Validation\Parameters\Football\Status;
use Drenth1\ApiSports\Validation\Parameters\Shared\Timezone;
use Drenth1\ApiSports\Validation\Parameters\Shared\Identifier;
use Drenth1\ApiSports\Validation\Parameters\Shared\ResultLimit;
use Drenth1\ApiSports\Validation\Parameters\Football\Identifiers;

class Fixtures extends Endpoint
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
            'ids' => Identifiers::class,
            'live' => Live::class,
            'date' => Date::class,
            'league' => Identifier::class,
            'season' => Season::class,
            'team' => Identifier::class,
            'next' => ResultLimit::class,
            'last' => ResultLimit::class,
            'from' => Date::class,
            'to' => Date::class,
            'round' => Round::class,
            'status' => Status::class,
            'venue' => Identifier::class,
            'timezone' => Timezone::class
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
        return 'fixtures';
    }
}