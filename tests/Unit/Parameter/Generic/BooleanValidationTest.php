<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter\Generic;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Parameters\Generic\Boolean;

/** @testdox \Drenth1\ApiSports\Validation\Parameters\Generic\Boolean */
class BooleanValidationTest extends TestCase
{
    /** @testdox Validation (Valid Input) */
    public function test_identifier_generic_parameter_validation() : void
    {
        $this->assertTrue(Boolean::validate('true'));
        $this->assertTrue(Boolean::validate('false'));
    }

    /**
     * @testdox Validation (Invalid Input)
     * @dataProvider invalidInputs
     */
    public function test_identifier_generic_parameter_validation_invalid($invalidValue) : void
    {
        $this->expectException('InvalidArgumentException');
        Boolean::validate($invalidValue);
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
            ['2-'],
            ['null'],
            ['1--1'],
            [null],
            [true],
            [false]
        ];
    }
}