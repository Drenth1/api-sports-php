<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter\Generic;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Parameters\Football\FixtureStatus;

/** @testdox \Drenth1\ApiSports\Validation\Parameters\Football\FixtureStatus */
class FixtureStatusValidationTest extends TestCase
{
    /** @testdox Validation (Valid Input) */
    public function test_identifier_generic_parameter_validation() : void
    {
        $this->assertTrue(FixtureStatus::validate('PEN'));
        $this->assertTrue(FixtureStatus::validate('1H'));
        $this->assertTrue(FixtureStatus::validate('2H'));
    }

    /**
     * @testdox Validation (Invalid Input)
     * @dataProvider invalidInputs
     */
    public function test_identifier_generic_parameter_validation_invalid($invalidValue) : void
    {
        $this->expectException('InvalidArgumentException');
        FixtureStatus::validate($invalidValue);
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
            ['128-'],
            ['PENNN'],
            [null],
            [true],
        ];
    }
}