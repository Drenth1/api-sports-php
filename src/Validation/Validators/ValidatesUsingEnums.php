<?php

namespace Drenth1\ApiSports\Validation\Validators;

trait ValidatesUsingEnums
{
    /**
     * Determine if a value is within a set of allowed values.
     *
     * @param mixed $value The value to check.
     * @param array $allowed The allowed values.
     * @return bool
     */
    public static function enum(mixed $value, array $allowed) : bool
    {
        return in_array($value, $allowed);
    }
}