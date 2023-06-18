<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter\Generic;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Parameters\Football\TeamCode;

/** @testdox \Drenth1\ApiSports\Validation\Parameters\Football\TeamCode */
class TeamCodeValidationTest extends TestCase
{
    /** @testdox Validation (Valid Input) */
    public function test_identifier_generic_parameter_validation() : void
    {
        $this->assertTrue(TeamCode::validate('FOR'));
        $this->assertTrue(TeamCode::validate('AJA'));
    }

    /**
     * @testdox Validation (Invalid Input)
     * @dataProvider invalidInputs
     */
    public function test_identifier_generic_parameter_validation_invalid($invalidValue) : void
    {
        $this->expectException('InvalidArgumentException');
        TeamCode::validate($invalidValue);
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
            ['1'],
            ['BE'],
            [null],
            [true],
        ];
    }
}