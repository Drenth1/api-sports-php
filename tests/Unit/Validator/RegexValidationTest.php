<?php

namespace Drenth1\ApiSports\Tests\Unit\Validator;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Validator;

/** @testdox \Drenth1\ApiSports\Validation\Validator */
class RegexValidationTest extends TestCase
{
    /** @testdox Regex (Match Pattern) */
    public function test_regex_validation_match_single_pattern() : void
    {
        $this->assertTrue(Validator::regex('2023-16-10', '@\d{4}-\d{2}-\d{2}@'));
        $this->assertFalse(Validator::regex('11-11-11', '@\d{4}-\d{2}-\d{2}@'));
    }

    /** @testdox Regex (Match Any) */
    public function test_regex_validation_match_any_pattern() : void
    {
        $patterns = ['@\d{4}-\d{2}-\d{2}@', '@\d{4}-\d{2}-\d{4}@'];

        $this->assertTrue(Validator::regexAny('2023-16-10', $patterns));
        $this->assertTrue(Validator::regexAny('2023-16-2023', $patterns));
        $this->assertFalse(Validator::regexAny('invalid', $patterns));
    }
}