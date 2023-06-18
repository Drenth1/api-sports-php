<?php

namespace Drenth1\ApiSports\Core;

abstract class Endpoint
{
    /**
     * The API versions in which the Endpoint is supported.
     *
     * @var array
     */
    protected static array $supportedVersions = ['*'];

    /**
     * Get the supported parameters for a version of the Endpoint.
     *
     * @param string $version The version of the API to use.
     * @return array
     */
    abstract public static function supportedParameters(string $version) : array;

    /**
     * Get the URL for a version of the Endpoint.
     *
     * @param string $version The version of the API to use.
     * @return string
     */
    abstract public static function url(string $version) : string;

    /**
     * Determine whether an array of parameters is valid for the Endpoint.
     *
     * @param string $version The version of the API to use.
     * @param array $parameters The parameters to validate.
     * @return bool
     */
    public static function hasValidParameters(string $version, array $parameters) : bool
    {
        // Pointless to run validation when the Endpoint does not need parameters.
        if (!static::supportsParameters($version)) return true;

        if ((count(array_intersect(array_keys(static::supportedParameters($version)), array_keys($parameters))) !== count($parameters)))
        {
            throw new \InvalidArgumentException(sprintf(
                'Parameter array for Endpoint %s contains illegal keys, only %s are allowed',
                get_class(new static), implode(', ', array_keys(static::supportedParameters($version)))
            ));
        }

        // The validator will throw errors on invalid parameters.
        static::runParameterValidation($version, $parameters);

        return true;
    }

    /**
     * Run the validation rules for the parameters in the parameters array.
     *
     * @param string $version The version of the API to use.
     * @param array $parameters The array of parameters to validate.
     * @return void
     */
    protected static function runParameterValidation(string $version, array $parameters) : void
    {
        $validatorClasses = static::supportedParameters($version);

        foreach ($parameters as $name => $value)
        {
            call_user_func([
                $validatorClasses[$name],
                'validate'
            ], $value);
        }
    }

    /**
     * Determine whether the Endpoint supports any parameters.
     *
     * @param string $version The version of the API to use.
     * @return bool
     */
    public static function supportsParameters(string $version) : bool
    {
        return !empty(static::supportedParameters($version));
    }

    /**
     * Determine whether the Endpoint is supported in a version.
     *
     * @param string $version The version to check.
     * @return bool
     */
    public static function supportedInVersion(string $version) : bool
    {
        return (
            in_array('*', static::$supportedVersions) ||
            in_array($version, static::$supportedVersions)
        );
    }
}