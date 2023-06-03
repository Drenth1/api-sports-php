<?php

namespace Drenth1\ApiSports\Validation;

class Validator
{
    /**
     * Check if a value matches a regular expression.
     *
     * @param mixed $variable the variable to validate.
     * @param string $pattern the regular expression to match.
     * @return bool
     */
    public static function regex(mixed $variable, string $pattern) : bool
    {
        if (preg_match($pattern, $variable))
        {
            return true;
        }

        throw new \InvalidArgumentException(sprintf(
            '%s does not match pattern: %s',
            $variable, $pattern
        ));
    }

    /**
     * Check if a variable is in an 'enum' array.
     *
     * @param mixed $variable the variable to validate.
     * @param array $allowed the values that are allowed.
     * @return bool
     */
    public static function enum(mixed $variable, array $allowed) : bool
    {
        if (in_array($variable, $allowed))
        {
            return true;
        }

        throw new \InvalidArgumentException(sprintf(
            '%s is not an allowed value (allowed values: %s)',
            $variable, implode(', ', $allowed)
        ));
    }

    /**
     * Check the datatype of a variable.
     *
     * @param mixed $variable the variable to validate.
     * @param mixed $dataType the type that the variable should have.
     * @return bool
     */
    public static function dataType(mixed $variable, mixed $dataType) : bool
    {
        return match ($dataType)
        {
            'integer' => is_integer($variable),
            'string' => is_string($variable),
            'object' => is_object($variable),
            'boolean' => is_bool($variable),
            'array' => is_array($variable),
            'float' => is_float($variable),

            default => throw new \InvalidArgumentException(sprintf(
                '%s is not a valid datatype for datatype validation',
                $dataType
            ))
        };
    }

    /**
     * Check the length of a string.
     *
     * @param string $string the string to validate.
     * @param int $length the length to validate.
     * @param string $operator = '=' the operator to use, defaults to equal.
     * @return bool
     */
    public static function stringLength(string $string, int $length, string $operator = '=') : bool
    {
        return match ($operator)
        {
            '<=' => strlen($string) <= $length,
            '>=' => strlen($string) >= $length,
            '=' => strlen($string) == $length,
            '>' => strlen($string) > $length,
            '<' => strlen($string) < $length,

            default => throw new \InvalidArgumentException(sprintf(
                '%s is not a valid operand for length validation',
                $operator
            ))
        };
    }
}