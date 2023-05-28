<?php

namespace Drenth1\ApiSports\Validation\Parameters\Shared;

use Drenth1\ApiSports\Validation\Parameters\Parameter;

class Boolean extends Parameter
{
    /**
     * The rules that the Parameter should comply with.
     *
     * @var array[]
     */
    protected static array $rules = [
        'dataType' => ['string'],
        'enum' => [['true', 'false']]
    ];
}