<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter\Generic;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Parameters\Generic\Page;

/** @testdox \Drenth1\ApiSports\Validation\Parameters\Generic\Name */
class PageValidationTest extends TestCase
{
    /** @testdox Validation (Valid Input) */
    public function test_Name_generic_parameter_validation() : void
    {
        $this->assertTrue(Page::validate(1));
        $this->assertTrue(Page::validate(13));
    }

    /**
     * @testdox Validation (Invalid Input)
     * @dataProvider invalidInputs
     */
    public function test_Name_generic_parameter_validation_invalid($invalidValue) : void
    {
        $this->expectException('InvalidArgumentException');
        Page::validate($invalidValue);
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
            [null],
            [true],
        ];
    }
}