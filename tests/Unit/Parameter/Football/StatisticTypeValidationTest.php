<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter\Generic;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Parameters\Football\StatisticType;

/** @testdox \Drenth1\ApiSports\Validation\Parameters\Football\StatisticType */
class StatisticTypeValidationTest extends TestCase
{
    /** @testdox Validation (Valid Input) */
    public function test_identifier_generic_parameter_validation() : void
    {
        $this->assertTrue(StatisticType::validate('Shots on Goal'));
        $this->assertTrue(StatisticType::validate('Shots off Goal'));
        $this->assertTrue(StatisticType::validate('Shots insidebox'));
        $this->assertTrue(StatisticType::validate('Shots outsidebox'));
        $this->assertTrue(StatisticType::validate('Total Shots'));
        $this->assertTrue(StatisticType::validate('Blocked Shots'));
        $this->assertTrue(StatisticType::validate('Fouls'));
        $this->assertTrue(StatisticType::validate('Corner Kicks'));
        $this->assertTrue(StatisticType::validate('Offsides'));
        $this->assertTrue(StatisticType::validate('Ball Possession'));
        $this->assertTrue(StatisticType::validate('Yellow Cards'));
        $this->assertTrue(StatisticType::validate('Red Cards'));
        $this->assertTrue(StatisticType::validate('Goalkeeper Saves'));
        $this->assertTrue(StatisticType::validate('Total passes'));
        $this->assertTrue(StatisticType::validate('Passes accurate'));
        $this->assertTrue(StatisticType::validate('Passes %'));
    }

    /**
     * @testdox Validation (Invalid Input)
     * @dataProvider invalidInputs
     */
    public function test_identifier_generic_parameter_validation_invalid($invalidValue) : void
    {
        $this->expectException('InvalidArgumentException');
        StatisticType::validate($invalidValue);
    }

    /**
     * Return an array with arrays of invalid values for the Parameter.
     *
     * @return array
     */
    public static function invalidInputs() : array
    {
        return [
            [11],
            ['12'],
            ['128'],
            ['RUS'],
            ['Passes'],
            [null],
            [true],
        ];
    }
}