<?php

namespace Drenth1\ApiSports\Tests\Unit\ClientFactory;

use Drenth1\ApiSports\ClientFactory;
use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Enums\Host;

/** @testdox \Drenth1\ApiSports\ClientFactory */
class ClientFactoryVersionValidationTest extends TestCase
{
    /** @testdox Version Validation (Invalid Version) */
    public function test_client_factory_throws_error_on_invalid_version() : void
    {
        $this->expectException('\InvalidArgumentException');
        ClientFactory::football(Host::ApiSports, 'v999', 'xxxxx');
    }

    /** @testdox Version Validation (No Version) */
    public function test_client_factory_throws_error_on_missing_version() : void
    {
        $this->expectException('\InvalidArgumentException');
        ClientFactory::football(Host::ApiSports, '', 'xxxxx');
    }
}