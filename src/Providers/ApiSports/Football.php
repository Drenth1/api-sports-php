<?php

namespace Drenth1\ApiSports\Providers\ApiSports;

use Drenth1\ApiSports\Core\Provider;

class Football extends Provider
{
    /**
     * The array of versions that this Provider supports.
     *
     * @var string[]
     */
    protected array $supportedVersions = ['v3'];

    /**
     * Get the base url per version of the Provider.
     *
     * @return string
     */
    public function getHost() : string
    {
        return match ($this->version)
        {
            'v2' => 'https://v2.api-football.com/',
            'v3' => 'https://v3.football.api-sports.io/'
        };
    }

    /**
     * Get the name of the header that should contain the host, optional.
     *
     * @return ?string
     */
    public function getHostHeaderName() : ?string
    {
        return null;
    }

    /**
     * Get the name of the header that should contain the api key.
     *
     * @return string
     */
    public function getApiKeyHeaderName() : string
    {
        return match($this->version)
        {
            'v2' => 'x-rapidapi-key',
            'v3' => 'x-apisports-key'
        };
    }
}