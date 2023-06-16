<?php

namespace Drenth1\ApiSports\Core;

use Psr\Http\Message\ResponseInterface;
use Drenth1\ApiSports\Helpers\ResponseHelpers;

class Response
{
    /**
     * The response, flattened to an array with the dot notation.
     *
     * @var array
     */
    protected array $flattened;

    /**
     * The response as a string.
     *
     * @var string
     */
    protected string $body;

    /**
     * The response as a JSON object.
     *
     * @var ?object
     */
    protected ?object $json;

    /**
     * The response as an associative array.
     *
     * @var ?array
     */
    protected ?array $assoc;

    /**
     * The status code of the response.
     *
     * @var int
     */
    protected int $statusCode;

    /**
     * Create a new instance of the Response class.
     *
     * @param \Psr\Http\Message\ResponseInterface $response The Guzzle response.
     * @return void
     */
    public function __construct(ResponseInterface $response)
    {
        $this->body = $response->getBody()->getContents();
        $this->statusCode = $response->getStatusCode();

        $this->json = ResponseHelpers::toJsonObject($this->body);
        $this->assoc = ResponseHelpers::toAssocArray($this->body);
        $this->flattened = ResponseHelpers::flatten($this->assoc);
    }

    /**
     * Get a value from the response, by its key.
     *
     * @param string $key The key to retrieve.
     * @return mixed
     */
    public function get(string $key) : mixed
    {
        if (!$this->has($key))
        {
            throw new \InvalidArgumentException(sprintf(
               'Key %s does not exist in response',
                $key
            ));
        }

        return $this->flattened[$key];
    }

    /**
     * Determine whether a key is present in the response.
     *
     * @param string $key The key to check for (supports dot notation)
     * @return bool
     */
    public function has(string $key) : bool
    {
        return array_key_exists($key, $this->flattened);
    }

    /**
     * Determine whether the response has errors.
     *
     * @return bool
     */
    public function hasErrors() : bool
    {
        return (
            $this->has('errors') &&
            !empty($this->get('errors'))
        );
    }

    /**
     * Get the status code of the response.
     *
     * @return int
     */
    public function statusCode() : int
    {
        return $this->statusCode;
    }

    /**
     * Determine if the status code of the response was 200.
     *
     * @return bool
     */
    public function isOk() : bool
    {
        return $this->statusCode === 200;
    }

    /**
     * Determine if the status code of the response was 204.
     *
     * @return bool
     */
    public function isNoContent() : bool
    {
        return $this->statusCode === 204;
    }

    /**
     * Determine if the status code of the response was 404.
     *
     * @return bool
     */
    public function isNotFound() : bool
    {
        return $this->statusCode === 404;
    }

    /**
     * Determine if the status code of the response was 499.
     *
     * @return bool
     */
    public function isTimeOut() : bool
    {
        return $this->statusCode === 499;
    }

    /**
     * Determine if the status code of the response was 500.
     *
     * @return bool
     */
    public function isServerError() : bool
    {
        return $this->statusCode === 500;
    }

    /**
     * Get the actual data of the response.
     *
     * @param bool $toArray = false Convert the data to an associative array.
     * @return object|array
     */
    public function data(bool $toArray = false) : object|array
    {
        return $toArray
            ? $this->assoc['response'] ?? []
            : (object) $this->json->response;
    }
}