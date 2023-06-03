<?php

namespace Drenth1\ApiSports\Validation\Parameters\Shared;

use Drenth1\ApiSports\Validation\Parameters\Parameter;

class Date extends Parameter
{
    /**
     * The rules that the Parameter should comply with.
     *
     * @var array[]
     */
    protected static array $rules = [
        'dataType' => ['string'],
        'stringLength' => [10, '='],
        'regex' => ['@\d{4}-\d{2}-\d{2}@']
    ];
}