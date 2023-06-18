<?php

namespace Drenth1\ApiSports\Validation;

abstract class Parameter
{
    /**
     * The rules that the Parameter must pass.
     *
     * @var array
     */
    protected static array $rules;

    /**
     * Run the validation.
     *
     * @param mixed $value the value to validate.
     * @return bool
     *
     * @throws \InvalidArgumentException when the validation does not pass.
     */
    final public static function validate(mixed $value) : bool
    {
        if (!isset(static::$rules) || empty(static::$rules))
        {
            return true;
        }

        foreach (static::$rules as $callback => $parameters)
        {
            if (!call_user_func_array([Validator::class, $callback], array_merge([$value], $parameters)))
            {
                throw new \InvalidArgumentException(sprintf(
                    'Validation for %s Parameter failed, rule %s did not pass for value %s',
                    get_class(new static), $callback, $value
                ));
            }
        }

        return true;
    }
}