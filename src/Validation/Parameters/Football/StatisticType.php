<?php

namespace Drenth1\ApiSports\Validation\Parameters\Football;

use Drenth1\ApiSports\Validation\Parameter;

class StatisticType extends Parameter
{
    /**
     * The rules that the Parameter must pass.
     *
     * @var array
     */
    protected static array $rules = [
        'dataType' => ['string'],
        'enum' => [[
            'Shots on Goal',
            'Shots off Goal',
            'Shots insidebox',
            'Shots outsidebox',
            'Total Shots',
            'Blocked Shots',
            'Fouls',
            'Corner Kicks',
            'Offsides',
            'Ball Possession',
            'Yellow Cards',
            'Red Cards',
            'Goalkeeper Saves',
            'Total passes',
            'Passes accurate',
            'Passes %'
        ]]
    ];
}