<?php

namespace Drenth1\ApiSports\Validation\Validators;

trait ValidatesDataTypes
{
    /**
     * Check if the value is of a specified data type.
     *
     * @param mixed $value the value to check.
     * @param string $dataType the data type the value should be.
     * @return bool
     */
    public static function dataType(mixed $value, string $dataType) : bool
    {
        return match ($dataType)
        {
            'boolean' => is_bool($value) || in_array($value, ['true', 'false']),
            'list' => is_array($value) && array_is_list($value),
            'integer' => is_integer($value),
            'string' => is_string($value),
            'object' => is_object($value),
            'array' => is_array($value),
            'float' => is_float($value),
            'null' => is_null($value),

            default => false
        };
    }
}