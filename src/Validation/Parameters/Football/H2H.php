<?php

namespace Drenth1\ApiSports\Validation\Parameters\Football;

use Drenth1\ApiSports\Validation\Parameters\Parameter;

class H2H extends Parameter
{
    /**
     * The rules that the Parameter should comply with.
     *
     * @var array[]
     */
    protected static array $rules = [
        'dataType' => ['string'],
    ];
}