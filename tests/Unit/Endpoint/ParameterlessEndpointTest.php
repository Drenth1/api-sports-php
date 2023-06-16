<?php

namespace Drenth1\ApiSports\Tests\Unit\Endpoint;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Tests\TestClasses\ParameterlessEndpoint;

/** @testdox \Drenth1\ApiSports\Core\Endpoint */
class ParameterlessEndpointTest extends TestCase
{
    /** @testdox Ignore Parameters On Parameterless Endpoint */
    public function test_endpoint_ignores_parameterless_parameters() : void
    {
        $this->assertEmpty(ParameterlessEndpoint::supportedParameters('v3'));
        $this->assertTrue(ParameterlessEndpoint::hasValidParameters('v3', ['not' => 'needed']));
    }
}