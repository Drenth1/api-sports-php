<?php

namespace Drenth1\ApiSports\Tests\Unit\ClientFactory;

use Drenth1\ApiSports\ClientFactory;
use Drenth1\ApiSports\Tests\BaseTestCase;
use Drenth1\ApiSports\Validation\Enums\Host;

/** @testdox The ClientFactory */
class ClientFactoryVersionValidationTest extends BaseTestCase
{
    /** @testdox throws an error when an unsupported version is used */
    public function test_client_factory_throws_error_on_invalid_version() : void
    {
        $this->expectException('\InvalidArgumentException');
        ClientFactory::football(Host::ApiSports, 'v999', 'xxxxx');
    }

    /** @testdox throws an error when no version is used */
    public function test_client_factory_throws_error_on_missing_version() : void
    {
        $this->expectException('\InvalidArgumentException');
        ClientFactory::football(Host::ApiSports, '', 'xxxxx');
    }
}