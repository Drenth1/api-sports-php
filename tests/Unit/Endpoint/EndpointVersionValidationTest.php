<?php

namespace Drenth1\ApiSports\Tests\Unit\Endpoint;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Tests\TestClasses\ParameterlessEndpoint;
use Drenth1\ApiSports\Tests\TestClasses\ExplicitVersionEndpoint;

/** @testdox \Drenth1\ApiSports\Core\Endpoint */
class EndpointVersionValidationTest extends TestCase
{
    /** @testdox Wildcard Version Validation Always Passes */
    public function test_endpoint_class_wildcard_version() : void
    {
        $this->assertTrue(ParameterlessEndpoint::supportedInVersion('*'));
        $this->assertTrue(ParameterlessEndpoint::supportedInVersion('v3'));
        $this->assertTrue(ParameterlessEndpoint::supportedInVersion('v2'));
        $this->assertTrue(ParameterlessEndpoint::supportedInVersion('invalid'));
    }

    /** @testdox Explicit Version Validation */
    public function test_endpoint_class_explicit_version() : void
    {
        $this->assertTrue(ExplicitVersionEndpoint::supportedInVersion('v3'));
        $this->assertFalse(ExplicitVersionEndpoint::supportedInVersion('v2'));
        $this->assertFalse(ExplicitVersionEndpoint::supportedInVersion('*'));
    }
}