<?php

namespace Drenth1\ApiSports\Validation\Validators;

trait ValidatesIntegers
{
    /**
     * Check if an integer value is equal to a given value.
     *
     * @param int $value the integer to validate.
     * @param int $target the value to compare against.
     * @return bool
     */
    public static function intValueEquals(int $value, int $target): bool
    {
        return $value === $target;
    }

    /**
     * Check if an integer value is less than a given value.
     *
     * @param int $value the integer to validate.
     * @param int $target the value to compare against.
     * @return bool
     */
    public static function intValueLessThan(int $value, int $target): bool
    {
        return $value < $target;
    }

    /**
     * Check if an integer value is greater than a given value.
     *
     * @param int $value the integer to validate.
     * @param int $target the value to compare against.
     * @return bool
     */
    public static function intValueGreaterThan(int $value, int $target): bool
    {
        return $value > $target;
    }

    /**
     * Check if an integer value is less than or equal to a given value.
     *
     * @param int $value the integer to validate.
     * @param int $target the value to compare against.
     * @return bool
     */
    public static function intValueMaximum(int $value, int $target): bool
    {
        return $value <= $target;
    }

    /**
     * Check if an integer value is greater than or equal to a given value.
     *
     * @param int $value the integer to validate.
     * @param int $target the value to compare against.
     * @return bool
     */
    public static function intValueMinimum(int $value, int $target): bool
    {
        return $value >= $target;
    }
}