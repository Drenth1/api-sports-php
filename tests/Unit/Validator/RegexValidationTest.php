<?php

namespace Drenth1\ApiSports\Tests\Unit\Validator;

use Drenth1\ApiSports\Tests\BaseTestCase;
use Drenth1\ApiSports\Validation\Validator;

/** @testdox The regex Validator */
class RegexValidationTest extends BaseTestCase
{
    /** @testdox throws an error on invalid value */
    public function test_enum_validator_throws_error_regex_pattern_mismatch(): void
    {
        $this->expectException('InvalidArgumentException');
        Validator::regex('wrong', '@\d{4}-\d{2}-\d{2}@');
    }

    /** @testdox validates a value using a regex pattern */
    public function test_enum_validator_returns_true_on_regex_pattern_match(): void
    {
        $this->assertTrue(Validator::regex('1111-11-11', '@\d{4}-\d{2}-\d{2}@'));
    }
}