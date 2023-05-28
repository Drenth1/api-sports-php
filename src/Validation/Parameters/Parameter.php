<?php

namespace Drenth1\ApiSports\Validation\Parameters;

use Drenth1\ApiSports\Validation\Validator;

abstract class Parameter
{
    /**
     * The rules that the Parameter should comply with.
     *
     * @var array
     */
    protected static array $rules;

    /**
     * Validate the Parameter.
     *
     * @param mixed $value the value to validate.
     * @return bool
     */
    public static function check(mixed $value) : bool
    {
        foreach (static::$rules as $callback => $requirement)
        {
            if (!call_user_func_array([Validator::class, $callback], array_merge([$value], $requirement)))
            {
                throw new \InvalidArgumentException(sprintf(
                    'Validation %s failed for value %s, rule %s did not pass',
                    get_class(new static), $value, $callback
                ));
            }
        }

        return true;
    }
}