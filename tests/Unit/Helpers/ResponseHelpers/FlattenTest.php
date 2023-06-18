<?php

namespace Drenth1\ApiSports\Tests\Unit\ResponseHelpers;

use Drenth1\ApiSports\Tests\TestCase;
use Drenth1\ApiSports\Helpers\ResponseHelpers;

/** @testdox \Drenth1\ApiSports\Helpers\ResponseHelpers */
class FlattenTest extends TestCase
{
    /** @testdox Flatten Non-Nested Array */
    public function test_response_helper_flattens_flat_array() : void
    {
        $flattened = ResponseHelpers::flatten(['key' => 'value']);

        $this->assertIsArray($flattened);
        $this->assertEquals([
            'key' => 'value'
        ], $flattened);
    }

    /** @testdox Flatten Nested Array */
    public function test_response_helper_flattens_array() : void
    {
        $flattened = ResponseHelpers::flatten([
            'key' => 'value',
            'key2' => [
                'key3' => 'value2',
                'key4' => 'value3'
            ]
        ]);

        $this->assertIsArray($flattened);
        $this->assertEquals([
            'key' => 'value',
            'key2.key3' => 'value2',
            'key2.key4' => 'value3'
        ], $flattened);
    }
}