<?php

namespace Drenth1\ApiSports\Tests\Unit\Endpoint;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Tests\TestClasses\ParameterizedEndpoint;

/** @testdox \Drenth1\ApiSports\Core\Endpoint */
class EndpointParameterValidationTest extends TestCase
{
    /** @testdox Parameter Validation */
    public function test_endpoint_parameter_validation() : void
    {
        $this->assertTrue(ParameterizedEndpoint::hasValidParameters('v3', ['id' => 1]));

        $this->expectException('InvalidArgumentException');
        ParameterizedEndpoint::hasValidParameters('v3', ['id' => 0]);
    }
}