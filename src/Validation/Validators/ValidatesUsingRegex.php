<?php

namespace Drenth1\ApiSports\Validation\Validators;

trait ValidatesUsingRegex
{
    /**
     * Check if a value matches a regular expression.
     *
     * @param mixed $value the value to validate.
     * @param string $pattern the regular expression to match.
     * @return bool
     */
    public static function regex(mixed $value, string $pattern) : bool
    {
        return preg_match($pattern, $value);
    }

    /**
     * Check if a value matches one of multiple regular expressions.
     *
     * @param mixed $value the value to validate.
     * @param array $patterns the regular expressions to match.
     * @return bool
     */
    public static function regexAny(mixed $value, array $patterns) : bool
    {
        foreach ($patterns as $pattern)
        {
            if (static::regex($value, $pattern))
            {
                return true;
            }
        }

        return false;
    }
}