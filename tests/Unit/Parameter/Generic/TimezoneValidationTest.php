<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter\Generic;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Parameters\Generic\Timezone;

/** @testdox \Drenth1\ApiSports\Validation\Parameters\Generic\Timezone */
class TimezoneValidationTest extends TestCase
{
    /** @testdox Validation (Valid Input) */
    public function test_Timezone_generic_parameter_validation() : void
    {
        $this->assertTrue(Timezone::validate('Amsterdam/Netherlands'));
    }

    /**
     * @testdox Validation (Invalid Input)
     * @dataProvider invalidInputs
     */
    public function test_Timezone_generic_parameter_validation_invalid($invalidValue) : void
    {
        $this->expectException('InvalidArgumentException');
        Timezone::validate($invalidValue);
    }

    /**
     * Return an array with arrays of invalid values for the Parameter.
     *
     * @return array
     */
    public static function invalidInputs() : array
    {
        return [
            [0],
            [992],
            ['Russia/'],
            ['Russia'],
            ['14'],
            [null],
            [true],
        ];
    }
}