<?php

namespace Drenth1\ApiSports\Tests\Unit\Response;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Tests\TestCase;
use GuzzleHttp\Psr7\Response as GuzzleResponse;

/** @testdox \Drenth1\ApiSports\Core\Response */
class StatusCodeTest extends TestCase
{
    /** @testdox Status Code Retrieval (Universal) */
    public function test_response_returns_status_code() : void
    {
        $response = new Response(new GuzzleResponse(200));

        $this->assertEquals(200, $response->statusCode());
    }

    /** @testdox Status Code Check (200, 204, 404, 499, 500) */
    public function test_response_returns_explicit_status_code() : void
    {
        $c200 = new Response(new GuzzleResponse(200));
        $c204 = new Response(new GuzzleResponse(204));
        $c404 = new Response(new GuzzleResponse(404));
        $c499 = new Response(new GuzzleResponse(499));
        $c500 = new Response(new GuzzleResponse(500));

        $this->assertTrue($c200->isOk());
        $this->assertTrue($c204->isNoContent());
        $this->assertTrue($c404->isNotFound());
        $this->assertTrue($c499->isTimeOut());
        $this->assertTrue($c500->isServerError());
    }
}