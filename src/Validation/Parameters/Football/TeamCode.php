<?php

namespace Drenth1\ApiSports\Validation\Parameters\Football;

use Drenth1\ApiSports\Validation\Parameters\Parameter;

class TeamCode extends Parameter
{
    /**
     * The rules that the Parameter should comply with.
     *
     * @var array[]
     */
    protected static array $rules = [
        'dataType' => ['string'],
        'stringLength' => [3, '=']
    ];
}