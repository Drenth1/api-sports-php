<?php

namespace Drenth1\ApiSports\Tests\Unit\Endpoint;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Tests\TestClasses\ParameterizedEndpoint;

/** @testdox \Drenth1\ApiSports\Core\Endpoint */
class ParameterizedEndpointTest extends TestCase
{
    /** @testdox Validate Parameters (Illegal Parameter Key) */
    public function test_endpoint_class_stops_illegal_parameters() : void
    {
        $this->expectException('InvalidArgumentException');
        ParameterizedEndpoint::hasValidParameters('v3', ['invalid' => 'param']);
    }

    /** @testdox Validate Parameters (Illegal Parameter Value) */
    public function test_endpoint_class_stops_illegal_parameter_values() : void
    {
        $this->expectException('InvalidArgumentException');
        ParameterizedEndpoint::hasValidParameters('v3', ['id' => 0]);
    }
}