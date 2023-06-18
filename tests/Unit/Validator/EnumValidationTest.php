<?php

namespace Drenth1\ApiSports\Tests\Unit\Validator;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Validator;

/** @testdox \Drenth1\ApiSports\Validation\Validator */
class EnumValidationTest extends TestCase
{
    /** @testdox Enum Value */
    public function test_validator_validates_enum_value_array() : void
    {
        $this->assertTrue(Validator::enum('valid', ['valid']));
        $this->assertTrue(Validator::enum('valid', ['valid', 'also valid']));
        $this->assertFalse(Validator::enum('invalid', ['valid', 'also valid']));
    }
}