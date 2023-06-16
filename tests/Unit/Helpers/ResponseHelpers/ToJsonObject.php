<?php

namespace Drenth1\ApiSports\Tests\Unit\ResponseHelpers;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Helpers\ResponseHelpers;

/** @testdox \Drenth1\ApiSports\Helpers\ResponseHelpers */
class ToJsonObject extends TestCase
{
    /** @testdox Json String To Json Object */
    public function test_response_helper_converts_json_to_array() : void
    {
        $json = ResponseHelpers::toJsonObject('{"name": "Test", "description": "Description"}');

        $this->assertIsObject($json);
        $this->assertEquals('Test', $json->name);
        $this->assertEquals('Description', $json->description);
    }
}