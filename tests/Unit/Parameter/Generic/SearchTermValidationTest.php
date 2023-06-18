<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter\Generic;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Parameters\Generic\SearchTerm;

/** @testdox \Drenth1\ApiSports\Validation\Parameters\Generic\SearchTerm */
class SearchTermValidationTest extends TestCase
{
    /** @testdox Validation (Valid Input) */
    public function test_SearchTerm_generic_parameter_validation() : void
    {
        $this->assertTrue(SearchTerm::validate('test'));
        $this->assertTrue(SearchTerm::validate('111'));
    }

    /**
     * @testdox Validation (Invalid Input)
     * @dataProvider invalidInputs
     */
    public function test_SearchTerm_generic_parameter_validation_invalid($invalidValue) : void
    {
        $this->expectException('InvalidArgumentException');
        SearchTerm::validate($invalidValue);
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