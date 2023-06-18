<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter\Generic;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Parameters\Generic\Year;

/** @testdox \Drenth1\ApiSports\Validation\Parameters\Generic\Year */
class YearValidationTest extends TestCase
{
    /** @testdox Validation (Valid Input) */
    public function test_Year_generic_parameter_validation() : void
    {
        $this->assertTrue(Year::validate(1999));
        $this->assertTrue(Year::validate(3932));
    }

    /**
     * @testdox Validation (Invalid Input)
     * @dataProvider invalidInputs
     */
    public function test_Year_generic_parameter_validation_invalid($invalidValue) : void
    {
        $this->expectException('InvalidArgumentException');
        Year::validate($invalidValue);
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
            [''],
            ['t'],
            ['14'],
            [null],
            [true],
        ];
    }
}