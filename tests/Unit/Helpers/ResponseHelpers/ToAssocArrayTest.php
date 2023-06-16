<?php

namespace Drenth1\ApiSports\Tests\Unit\ResponseHelpers;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Helpers\ResponseHelpers;

/** @testdox \Drenth1\ApiSports\Helpers\ResponseHelpers */
class ToAssocArrayTest extends TestCase
{
    /** @testdox Json String To Associative Array */
    public function test_response_helper_converts_json_to_array() : void
    {
        $assoc = ResponseHelpers::toAssocArray('{"name": "Test", "description": "Description"}');

        $this->assertIsArray($assoc);
        $this->assertEquals([
            'name' => 'Test',
            'description' => 'Description'
        ], $assoc);
    }
}