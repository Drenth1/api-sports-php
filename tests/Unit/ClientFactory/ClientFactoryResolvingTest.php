<?php

namespace Drenth1\ApiSports\Tests\Unit\ClientFactory;

use Drenth1\ApiSports\ClientFactory;
use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Validation\Enums\Host;

/** @testdox \Drenth1\ApiSports\ClientFactory */
class ClientFactoryResolvingTest extends TestCase
{
    /** @testdox Resolve To Client */
    public function test_client_factory_resolves_football_apisports() : void
    {
        $client = ClientFactory::football(Host::ApiSports, 'v3', 'xxxxx');

        $this->assertInstanceOf('Drenth1\ApiSports\Core\Client', $client);
    }
}