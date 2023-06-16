<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter\Generic;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Parameters\Generic\Identifiers;

/** @testdox \Drenth1\ApiSports\Validation\Parameters\Generic\Identifiers */
class IdentifiersValidationTest extends TestCase
{
    /** @testdox Validation (Valid Input) */
    public function test_identifier_generic_parameter_validation() : void
    {
        $this->assertTrue(Identifiers::validate('1-1'));
        $this->assertTrue(Identifiers::validate('21-291-39-250'));
    }

    /**
     * @testdox Validation (Invalid Input)
     * @dataProvider invalidInputs
     */
    public function test_identifier_generic_parameter_validation_invalid($invalidValue) : void
    {
        $this->expectException('InvalidArgumentException');
        Identifiers::validate($invalidValue);
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
            ['-2'],
            ['1--1'],
            [null],
            [true],
        ];
    }
}