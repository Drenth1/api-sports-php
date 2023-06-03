<?php

namespace Drenth1\ApiSports\Validation\Parameters\Football;

use Drenth1\ApiSports\Validation\Parameters\Parameter;

class EventType extends Parameter
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