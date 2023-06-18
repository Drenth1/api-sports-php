<?php

namespace Drenth1\ApiSports\Validation\Parameters\Football;

use Drenth1\ApiSports\Validation\Parameter;

class FixtureStatus extends Parameter
{
    /**
     * The rules that the Parameter must pass.
     *
     * @var array
     */
    protected static array $rules = [
        'dataType' => ['string'],
        'enum' => [[
            'TBD',
            'NS',
            '1H',
            'HT',
            '2H',
            'ET',
            'BT',
            'P',
            'SUSP',
            'INT',
            'FT',
            'AET',
            'PEN',
            'PST',
            'CANC',
            'ABD',
            'AWD',
            'WO',
            'LIVE'
        ]]
    ];
}