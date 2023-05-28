<?php

namespace Drenth1\ApiSports\Tests\Unit\Validator;

use Drenth1\ApiSports\Tests\BaseTestCase;
use Drenth1\ApiSports\Validation\Validator;

/** @testdox The enum Validator */
class EnumValidationTest extends BaseTestCase
{
    /** @testdox throws an error on invalid value */
    public function test_enum_validator_throws_error_on_invalid_value(): void
    {
        $this->expectException('InvalidArgumentException');
        Validator::enum('wrong', ['league', 'cup']);
    }

    /** @testdox validates a value */
    public function test_enum_validator_returns_true_on_valid_value(): void
    {
        $this->assertTrue(Validator::enum('league', ['league', 'cup']));
        $this->assertTrue(Validator::enum('cup', ['league', 'cup']));
    }
}