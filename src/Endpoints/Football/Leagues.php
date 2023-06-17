<?php

namespace Drenth1\ApiSports\Endpoints\Football;

use Drenth1\ApiSports\Core\Endpoint;
use Drenth1\ApiSports\Validation\Parameters\Generic\Year;
use Drenth1\ApiSports\Validation\Parameters\Generic\Name;
use Drenth1\ApiSports\Validation\Parameters\Generic\Boolean;
use Drenth1\ApiSports\Validation\Parameters\Generic\SearchTerm;
use Drenth1\ApiSports\Validation\Parameters\Generic\Identifier;
use Drenth1\ApiSports\Validation\Parameters\Generic\ResultLimit;
use Drenth1\ApiSports\Validation\Parameters\Football\LeagueType;
use Drenth1\ApiSports\Validation\Parameters\Generic\CountryCode;

class Leagues extends Endpoint
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
        return [
            'id' => Identifier::class,
            'name' => Name::class,
            'country' => Name::class,
            'code' => CountryCode::class,
            'season' => Year::class,
            'team' => Identifier::class,
            'type' => LeagueType::class,
            'current' => Boolean::class,
            'search' => SearchTerm::class,
            'last' => ResultLimit::class
        ];
    }

    /**
     * Get the URL for a version of the Endpoint.
     *
     * @param string $version The version of the API to use.
     * @return string
     */
    public static function url(string $version) : string
    {
        return 'leagues';
    }
}