<?php

namespace Drenth1\ApiSports\Validation\Validators;

trait ValidatesStrings
{
    /**
     * Check if a string has an exact length.
     *
     * @param string $value The string to validate.
     * @param int $length The expected length of the string.
     * @return bool
     */
    public static function strLengthEquals(string $value, int $length): bool
    {
        return strlen($value) === $length;
    }

    /**
     * Check if a string is shorter than a specified length.
     *
     * @param string $value The string to validate.
     * @param int $length The maximum allowed length of the string.
     * @return bool
     */
    public static function strLengthLessThan(string $value, int $length): bool
    {
        return strlen($value) < $length;
    }

    /**
     * Check if a string is longer than a specified length.
     *
     * @param string $value The string to validate.
     * @param int $length The minimum required length of the string.
     * @return bool
     */
    public static function strLengthGreaterThan(string $value, int $length): bool
    {
        return strlen($value) > $length;
    }

    /**
     * Check if a string is shorter than or equal to a specified length.
     *
     * @param string $value The string to validate.
     * @param int $length The maximum allowed length of the string.
     * @return bool
     */
    public static function strLengthMaximum(string $value, int $length): bool
    {
        return strlen($value) <= $length;
    }

    /**
     * Check if a string is longer than or equal to a specified length.
     *
     * @param string $value The string to validate.
     * @param int $length The minimum required length of the string.
     * @return bool
     */
    public static function strLengthMinimum(string $value, int $length): bool
    {
        return strlen($value) >= $length;
    }
}