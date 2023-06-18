<?php

namespace Drenth1\ApiSports\Validation\Parameters\Generic;

use Drenth1\ApiSports\Validation\Parameter;

class Page extends Parameter
{
    /**
     * The rules that the Parameter must pass.
     *
     * @var array
     */
    protected static array $rules = [
        'dataType' => ['integer'],
        'intValueMinimum' => [1]
    ];
}