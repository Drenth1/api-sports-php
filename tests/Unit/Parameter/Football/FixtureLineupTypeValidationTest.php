<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter\Generic;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Parameters\Football\FixtureLineupType;

/** @testdox \Drenth1\ApiSports\Validation\Parameters\Football\FixtureLineupType */
class FixtureLineupTypeValidationTest extends TestCase
{
    /** @testdox Validation (Valid Input) */
    public function test_identifier_generic_parameter_validation() : void
    {
        $this->assertTrue(FixtureLineupType::validate('startxi'));
        $this->assertTrue(FixtureLineupType::validate('coach'));
        $this->assertTrue(FixtureLineupType::validate('formation'));
        $this->assertTrue(FixtureLineupType::validate('substitutes'));
    }

    /**
     * @testdox Validation (Invalid Input)
     * @dataProvider invalidInputs
     */
    public function test_identifier_generic_parameter_validation_invalid($invalidValue) : void
    {
        $this->expectException('InvalidArgumentException');
        FixtureLineupType::validate($invalidValue);
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
            ['RUS'],
            [null],
            [true],
        ];
    }
}