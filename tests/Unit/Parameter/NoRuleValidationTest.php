<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Tests\TestClasses\NoRuleParameter;

/** @testdox \Drenth1\ApiSports\Validation\Parameter */
class NoRuleValidationTest extends TestCase
{
    /** @testdox Skip Validation On No Rules */
    public function test_parameter_skips_validation_on_no_rules() : void
    {
        $this->assertTrue(NoRuleParameter::validate('random'));
    }
}