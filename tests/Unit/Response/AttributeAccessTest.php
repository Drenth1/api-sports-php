<?php

namespace Drenth1\ApiSports\Tests\Unit\Response;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Tests\TestCase;
use GuzzleHttp\Psr7\Response as GuzzleResponse;

/** @testdox \Drenth1\ApiSports\Core\Response */
class AttributeAccessTest extends TestCase
{
    /**
     * The test response.
     *
     * @var \Drenth1\ApiSports\Core\Response
     */
    protected Response $response;

    /**
     * The setup to run prior to each test.
     *
     * @return void
     */
    protected function setUp() : void
    {
        parent::setUp();

        $guzzleResponse = new GuzzleResponse(200, [], file_get_contents(
            __DIR__ . '/../../TestData/ExampleResponse.json')
        );

        $this->response = new Response($guzzleResponse);
    }

    /** @testdox Attribute Check (Simple) */
    public function test_response_attribute_check_simple_attribute() : void
    {
        $this->assertTrue($this->response->has('get'));
        $this->assertFalse($this->response->has('invalid'));
    }

    /** @testdox Attribute Check (Nested) */
    public function test_response_attribute_check_nested_attribute() : void
    {
        $this->assertTrue($this->response->has('response.0.fixture.id'));
        $this->assertFalse($this->response->has('response.0.fixture.name'));
    }

    /** @testdox Attribute Retrieval (Simple) */
    public function test_response_returns_simple_attribute_or_error() : void
    {
        $this->assertEquals('fixtures', $this->response->get('get'));
        $this->assertEquals(4, $this->response->get('results'));

        $this->expectException('InvalidArgumentException');
        $this->response->get('invalid');
    }

    /** @testdox Attribute Retrieval (Nested) */
    public function test_response_returns_nested_attribute_or_error() : void
    {
        $this->assertEquals(239625, $this->response->get('response.0.fixture.id'));
        $this->assertEquals(967, $this->response->get('response.0.teams.home.id'));

        $this->expectException('InvalidArgumentException');
        $this->response->get('invalid.invalid');
    }

    /** @testdox Error Check (No Errors) */
    public function test_response_returns_bool_based_on_errors() : void
    {
        $this->assertFalse($this->response->hasErrors());
    }

    /** @testdox Data retrieval */
    public function test_response_returns_data() : void
    {
        $this->assertIsObject($this->response->data());
        $this->assertIsArray($this->response->data(true));
    }
}