<?php

namespace Drenth1\ApiSports\Tests\Unit\Validator;

use Drenth1\ApiSports\Tests\BaseTestCase;
use Drenth1\ApiSports\Validation\Validator;

/** @testdox The length Validator */
class LengthValidationTest extends BaseTestCase
{
    /** @testdox throws an error on invalid operand */
    public function test_length_validator_throws_error_on_invalid_operand() : void
    {
        $this->expectException('InvalidArgumentException');
        Validator::stringLength('TestString', 10, '>>');
    }

    /** @testdox validates lengths using the '=' operator */
    public function test_length_validator_works_with_is_operator() : void
    {
        $this->assertTrue(Validator::stringLength('One', 3));
        $this->assertFalse(Validator::stringLength('Four', 3));
    }

    /** @testdox validates lengths using the '>' operator */
    public function test_length_validator_works_with_gt_operator() : void
    {
        $this->assertTrue(Validator::stringLength('Four', 3, '>'));
        $this->assertFalse(Validator::stringLength('One', 3, '>'));
    }

    /** @testdox validates lengths using the '>=' operator */
    public function test_length_validator_works_with_gt_or_equals_operator() : void
    {
        $this->assertTrue(Validator::stringLength('Test', 2, '>='));
        $this->assertTrue(Validator::stringLength('Test', 4, '>='));
        $this->assertFalse(Validator::stringLength('Four', 5, '>='));
    }

    /** @testdox validates lengths using the '<' operator */
    public function test_length_validator_works_with_lt_operator() : void
    {
        $this->assertTrue(Validator::stringLength('Test', 8, '<'));
        $this->assertFalse(Validator::stringLength('Four', 3, '<'));
    }

    /** @testdox validates lengths using the '<=' operator */
    public function test_length_validator_works_with_lt_or_equals_operator() : void
    {
        $this->assertTrue(Validator::stringLength('Test', 8, '<='));
        $this->assertTrue(Validator::stringLength('Test', 4, '<='));
        $this->assertFalse(Validator::stringLength('Four', 3, '<='));
    }
}