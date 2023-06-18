<?php

namespace Drenth1\ApiSports\Validation\Parameters\Football;

use Drenth1\ApiSports\Validation\Parameter;

class FixtureLineupType extends Parameter
{
    /**
     * The rules that the Parameter must pass.
     *
     * @var array
     */
    protected static array $rules = [
        'dataType' => ['string'],
        'enum' => [['formation', 'coach', 'startxi', 'substitutes']]
    ];
}