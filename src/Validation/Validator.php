<?php

namespace Drenth1\ApiSports\Validation;

class Validator
{
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