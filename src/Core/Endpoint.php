<?php

namespace Drenth1\ApiSports\Core;

abstract class Endpoint
{
    /**
     * The array of api versions in which this Endpoint is supported.
     *
     * @var array
     */
    public static array $supportedVersions = ['*'];

    /**
     * Get an array of possible request parameters for the Endpoint.
     *
     * @param string $version the version of the api to use.
     * @return array
     */
    abstract public static function parameters(string $version) : array;

    /**
     * Get the URL-path for the Endpoint.
     *
     * @param string $version the version of the api to use.
     * @return string
     */
    abstract public static function path(string $version) : string;

    /**
     * Check if an array of parameters contains any keys that are not compatible with the Endpoint.
     *
     * @param string $version the version of the api to use.
     * @param array $parameters the array of parameters to check.
     * @return bool
     */
    public static function hasValidParameters(string $version, array $parameters) : bool
    {
        if  (!(count(array_intersect(array_keys(static::parameters($version)), array_keys($parameters))) === count($parameters)))
        {
            throw new \InvalidArgumentException(sprintf(
                'Parameter array for Endpoint %s contains illegal values, only %s are allowed',
                get_class(new static), implode(', ', array_keys(static::parameters($version)))
            ));
        }

        $validators = static::parameters($version);

        foreach ($parameters as $name => $value)
        {
            call_user_func([$validators[$name], 'check'], $value);
        }

        return true;
    }

    /**
     * Check if the Endpoint has any possible parameters.
     *
     * @param string $version the version of the api to use.
     * @return bool
     */
    public static function allowsParameters(string $version) : bool
    {
        return !empty(static::parameters($version));
    }

    /**
     * Check if the Endpoint is supported in a certain version.
     *
     * @param string $version the version of the api to check.
     * @return bool
     */
    public static function isSupportedIn(string $version) : bool
    {
        return (in_array($version, static::$supportedVersions) || in_array('*', static::$supportedVersions));
    }
}