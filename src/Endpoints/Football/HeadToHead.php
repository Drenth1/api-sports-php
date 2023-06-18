<?php

namespace Drenth1\ApiSports\Endpoints\Football;

use Drenth1\ApiSports\Core\Endpoint;
use Drenth1\ApiSports\Validation\Parameters\Generic\Date;
use Drenth1\ApiSports\Validation\Parameters\Generic\Year;
use Drenth1\ApiSports\Validation\Parameters\Generic\Identifier;
use Drenth1\ApiSports\Validation\Parameters\Generic\Identifiers;
use Drenth1\ApiSports\Validation\Parameters\Generic\ResultLimit;
use Drenth1\ApiSports\Validation\Parameters\Football\FixtureStatus;

class HeadToHead extends Endpoint
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
    public static function supportedParameters(string $version): array
    {
        return [
            'h2h' => Identifiers::class,
            'date' => Date::class,
            'league' => Identifier::class,
            'season' => Year::class,
            'last' => ResultLimit::class,
            'next' => ResultLimit::class,
            'from' => Date::class,
            'to' => Date::class,
            'status' => FixtureStatus::class,
            'venue' => Identifier::class,
            'timezone' => Timezone::class
        ];
    }

    /**
     * Get the URL for a version of the Endpoint.
     *
     * @param string $version The version of the API to use.
     * @return string
     */
    public static function url(string $version): string
    {
        return 'fixtures/headtohead';
    }
}