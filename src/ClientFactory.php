<?php

namespace Drenth1\ApiSports;

use Drenth1\ApiSports\Core\Provider;
use Drenth1\ApiSports\Clients\Football;
use Drenth1\ApiSports\Validation\Enums\Host;
use Drenth1\ApiSports\Validation\Enums\Sport;

class ClientFactory
{
    /**
     * Create a Football client.
     *
     * @param \Drenth1\ApiSports\Validation\Enums\Host $host the host to create the Client for, must match the Enum.
     * @param string $version the version of the api that the Client should use.
     * @param string $apiKey the api key that should be used during requests.
     * @return \Drenth1\ApiSports\Clients\Football
     */
    public static function football(Host $host, string $version, string $apiKey) : Football
    {
        $clientClass = static::getClientClass(Sport::Football);

        return new $clientClass(
            static::getProviderClass(Sport::Football, $host, $version),
            $apiKey
        );
    }

    /**
     * Resolve a sport to a fully-qualified classname of a Client class.
     *
     * @param Sport $sport the sport to resolve the Client for, must match the Enum.
     * @return string
     */
    private static function getClientClass(Sport $sport) : string
    {
        return sprintf(
            'Drenth1\ApiSports\Clients\%s',
            $sport->value
        );
    }

    /**
     * Resolve a sport and host to a Provider class and return an instance.
     *
     * @param \Drenth1\ApiSports\Validation\Enums\Sport $sport the sport to create the Provider for, must match the Enum.
     * @param \Drenth1\ApiSports\Validation\Enums\Host $host the host to create the Provider for, must match the Enum.
     * @param string $version the api version to use when creating the Provider.
     * @return \Drenth1\ApiSports\Core\Provider
     */
    private static function getProviderClass(Sport $sport, Host $host, string $version) : Provider
    {
        $className = sprintf(
            'Drenth1\ApiSports\Providers\%s\%s',
            $host->value, $sport->value
        );

        return new $className($version);
    }
}