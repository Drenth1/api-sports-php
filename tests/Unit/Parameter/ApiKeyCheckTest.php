<?php

namespace Drenth1\ApiSports\Tests\Unit\Parameter;

use Drenth1\ApiSports\Tests\BaseTestCase;
use Drenth1\ApiSports\Validation\Parameters\Shared\ApiKey;

/** @testdox The ApiKey parameter */
class ApiKeyCheckTest extends BaseTestCase
{
    /** @testdox throws exception on invalid lengths */
    public function test_apikey_parameter_throws_exception_on_invalid_length() : void
    {
        $this->expectException('InvalidArgumentException');
        ApiKey::check('xxxxx');
    }

    /** @testdox returns true on valid lengths */
    public function test_apikey_parameter_returns_true_on_valid_length() : void
    {
        $this->assertTrue(ApiKey::check('xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'));
    }
}