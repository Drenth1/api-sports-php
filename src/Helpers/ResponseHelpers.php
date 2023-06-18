<?php

namespace Drenth1\ApiSports\Helpers;

class ResponseHelpers
{
    /**
     * Format a response to a JSON object.
     *
     * @param string $response The response to format.
     * @return object
     */
    public static function toJsonObject(string $response) : object
    {
        return json_decode($response) ?? new \stdClass();
    }

    /**
     * Format a response to an associative array.
     *
     * @param string $response The response to format.
     * @return array
     */
    public static function toAssocArray(string $response) : array
    {
        return json_decode($response, true) ?? [];
    }

    /**
     * Flatten a multidimensional associative array to an array with dots.
     *
     * @param iterable $array The array to flatten.
     * @param string $prepend The value to prepend.
     * @return array
     */
    public static function flatten(iterable $array, string $prepend = '') : array
    {
        $results = [];

        foreach ($array as $key => $value)
        {
            if (is_array($value) && ! empty($value))
            {
                $results = array_merge($results, static::flatten($value, $prepend.$key.'.'));
            } else
            {
                $results[$prepend.$key] = $value;
            }
        }

        return $results;
    }
}