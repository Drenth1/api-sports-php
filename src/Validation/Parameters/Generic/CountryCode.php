<?php

namespace Drenth1\ApiSports\Validation\Parameters\Generic;

use Drenth1\ApiSports\Validation\Parameter;

class CountryCode extends Parameter
{
    /**
     * The rules that the Parameter must pass.
     *
     * @var array
     */
    protected static array $rules = [
        'dataType' => ['string'],
        'strLengthEquals' => [2],
        'regex' => ['@[a-zA-Z]@']
    ];
}