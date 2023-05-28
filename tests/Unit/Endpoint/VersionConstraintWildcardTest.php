<?php

namespace Drenth1\ApiSports\Tests\Unit\Endpoint;

use Drenth1\ApiSports\Tests\BaseTestCase;
use Drenth1\ApiSports\Endpoints\Shared\Status;

/** @testdox The Endpoint class */
class VersionConstraintWildcardTest extends BaseTestCase
{
    /** @testdox allows any version string when a wildcard is used */
    public function test_endpoint_class_allows_any_version_on_wildcard() : void
    {
        $this->assertTrue(Status::isSupportedIn('*'));
        $this->assertTrue(Status::isSupportedIn('v3'));
        $this->assertTrue(Status::isSupportedIn('nonExistentVersion'));
    }
}