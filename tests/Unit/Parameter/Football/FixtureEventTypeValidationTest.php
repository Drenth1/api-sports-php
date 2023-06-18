<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter\Generic;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Parameters\Football\FixtureEventType;

/** @testdox \Drenth1\ApiSports\Validation\Parameters\Football\FixtureEventType */
class FixtureEventTypeValidationTest extends TestCase
{
    /** @testdox Validation (Valid Input) */
    public function test_identifier_generic_parameter_validation() : void
    {
        $this->assertTrue(FixtureEventType::validate('Goal'));
        $this->assertTrue(FixtureEventType::validate('Card'));
        $this->assertTrue(FixtureEventType::validate('Subst'));
        $this->assertTrue(FixtureEventType::validate('Var'));
    }

    /**
     * @testdox Validation (Invalid Input)
     * @dataProvider invalidInputs
     */
    public function test_identifier_generic_parameter_validation_invalid($invalidValue) : void
    {
        $this->expectException('InvalidArgumentException');
        FixtureEventType::validate($invalidValue);
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