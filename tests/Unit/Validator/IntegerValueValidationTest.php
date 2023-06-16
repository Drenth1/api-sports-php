<?php

namespace Drenth1\ApiSports\Tests\Unit\Validator;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Validator;

/** @testdox \Drenth1\ApiSports\Validation\Validator */
class IntegerValueValidationTest extends TestCase
{
    /** @testdox Integer Value (Exact Equal) */
    public function test_integer_validation_match_exact_value() : void
    {
        $this->assertTrue(Validator::intValueEquals(10, 10));
        $this->assertFalse(Validator::intValueEquals(10, 5));
        $this->assertFalse(Validator::intValueEquals(10, 15));
    }

    /** @testdox Integer Value (Less Than) */
    public function test_integer_validation_match_less_than_value() : void
    {
        $this->assertTrue(Validator::intValueLessThan(10, 15));
        $this->assertFalse(Validator::intValueLessThan(10, 10));
        $this->assertFalse(Validator::intValueLessThan(10, 5));
    }

    /** @testdox Integer Value (Greater Than) */
    public function test_integer_validation_match_greater_than_value() : void
    {
        $this->assertTrue(Validator::intValueGreaterThan(10, 5));
        $this->assertFalse(Validator::intValueGreaterThan(10, 10));
        $this->assertFalse(Validator::intValueGreaterThan(10, 15));
    }

    /** @testdox Integer Value (Minimum) */
    public function test_integer_validation_match_minimum_value() : void
    {
        $this->assertTrue(Validator::intValueMinimum(10, 5));
        $this->assertTrue(Validator::intValueMinimum(10, 10));
        $this->assertFalse(Validator::intValueMinimum(10, 15));
    }

    /** @testdox Integer Value (Maximum) */
    public function test_integer_validation_match_maximum_value() : void
    {
        $this->assertTrue(Validator::intValueMaximum(10, 15));
        $this->assertTrue(Validator::intValueMaximum(10, 10));
        $this->assertFalse(Validator::intValueMaximum(10, 5));
    }
}