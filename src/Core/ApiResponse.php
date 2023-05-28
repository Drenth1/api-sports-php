<?php

namespace Drenth1\ApiSports\Core;

use Psr\Http\Message\ResponseInterface;

class ApiResponse
{
    /**
     * The status code of the response.
     *
     * @var int
     */
    protected int $statusCode;

    /**
     * The body of the response as a string.
     *
     * @var string
     */
    protected string $body;

    /**
     * The response as a json object.
     *
     * @var object
     */
    protected object $json;

    /**
     * Create a new instance of the ApiResponse.
     *
     * @param ResponseInterface $response the response received by the HTTP-client.
     * @return void
     */
    public function __construct(ResponseInterface $response)
    {
        $this->statusCode = $response->getStatusCode();
        $this->body = $response->getBody()->getContents();
        $this->json = json_decode($this->body);
    }

    /**
     * Check whether the request was successful.
     *
     * @return bool
     */
    public function ok() : bool
    {
        return $this->statusCode === 200;
    }

    /**
     * Get the response as a json object.
     *
     * @return object
     */
    public function json() : object
    {
        return $this->json;
    }

    /**
     * Get the body of the response as a string.
     *
     * @return string
     */
    public function body() : string
    {
        return $this->body;
    }
}