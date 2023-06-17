<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter\Generic;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Parameters\Generic\ResultLimit;

/** @testdox \Drenth1\ApiSports\Validation\Parameters\Generic\ResultLimit */
class ResultLimitValidationTest extends TestCase
{
    /** @testdox Validation (Valid Input) */
    public function test_ResultLimit_generic_parameter_validation() : void
    {
        $this->assertTrue(ResultLimit::validate(1));
        $this->assertTrue(ResultLimit::validate(99));
    }

    /**
     * @testdox Validation (Invalid Input)
     * @dataProvider invalidInputs
     */
    public function test_ResultLimit_generic_parameter_validation_invalid($invalidValue) : void
    {
        $this->expectException('InvalidArgumentException');
        ResultLimit::validate($invalidValue);
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
            [''],
            ['t'],
            ['14'],
            [null],
            [true],
        ];
    }
}