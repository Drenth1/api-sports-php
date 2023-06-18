<?php

namespace Drenth1\ApiSports\Tests\Unit\Validator;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Validator;

/** @testdox \Drenth1\ApiSports\Validation\Validator */
class StringLengthValidationTest extends TestCase
{
    /** @testdox String Length (Exact Equal) */
    public function test_string_validation_match_exact_length() : void
    {
        $this->assertTrue(Validator::strLengthEquals('hello', 5));
        $this->assertFalse(Validator::strLengthEquals('hello', 6));
        $this->assertFalse(Validator::strLengthEquals('hello', 3));
    }

    /** @testdox String Length (Less Than) */
    public function test_string_validation_match_less_than_length() : void
    {
        $this->assertTrue(Validator::strLengthLessThan('hello', 6));
        $this->assertFalse(Validator::strLengthLessThan('hello', 5));
        $this->assertFalse(Validator::strLengthLessThan('hello', 4));
    }

    /** @testdox String Length (Greater Than) */
    public function test_string_validation_match_greater_than_length() : void
    {
        $this->assertTrue(Validator::strLengthGreaterThan('hello', 4));
        $this->assertFalse(Validator::strLengthGreaterThan('hello', 5));
        $this->assertFalse(Validator::strLengthGreaterThan('hello', 6));
    }

    /** @testdox String Length (Minimum) */
    public function test_string_validation_match_minimum_length() : void
    {
        $this->assertTrue(Validator::strLengthMinimum('hello', 3));
        $this->assertTrue(Validator::strLengthMinimum('hello', 4));
        $this->assertFalse(Validator::strLengthMinimum('hello', 6));
    }

    /** @testdox String Length (Maximum) */
    public function test_string_validation_match_maximum_length() : void
    {
        $this->assertTrue(Validator::strLengthMaximum('hello', 5));
        $this->assertTrue(Validator::strLengthMaximum('hello', 6));
        $this->assertFalse(Validator::strLengthMaximum('hello', 3));
    }
}