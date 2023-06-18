<?php

namespace Drenth1\ApiSports\Validation\Parameters\Generic;

use Drenth1\ApiSports\Validation\Parameter;

class ResultLimit extends Parameter
{
    /**
     * The rules that the Parameter must pass.
     *
     * @var array
     */
    protected static array $rules = [
        'dataType' => ['integer'],
        'strLengthMaximum' => [2],
        'intValueMinimum' => [1]
    ];
}