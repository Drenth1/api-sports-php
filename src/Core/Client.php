<?php

namespace Drenth1\ApiSports\Core;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\GuzzleException;

abstract class Client
{
    /**
     * The api key to use during requests.
     *
     * @var string
     */
    protected string $apiKey;

    /**
     * The Provider instance that contains information about the host and request format.
     *
     * @var \Drenth1\ApiSports\Core\Provider
     */
    protected Provider $provider;

    /**
     * The HTTP-client used to make requests.
     *
     * @var \GuzzleHttp\Client
     */
    protected HttpClient $httpClient;

    /**
     * Create a new instance of the Client.
     *
     * @param Provider $provider the Provider to use.
     * @param string $apiKey the api key to use during requests.
     * @return void
     */
    public function __construct(Provider $provider, string $apiKey)
    {
        $this->provider = $provider;
        $this->apiKey = $apiKey;

        $this->httpClient = new HttpClient([
            'headers' => $this->getRequestHeaders(),
            'base_uri' => $this->provider->getHost()
        ]);
    }

    /**
     * Perform a request on an Endpoint using optional url parameters and request queries.
     *
     * @param string $endpoint the fully-qualified class name of the Endpoint to fetch.
     * @param array $parameters = [] the request parameters to use, depends on endpoint.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    protected function fetch(string $endpoint, array $parameters = []) : ApiResponse
    {
        $path = call_user_func([$endpoint, 'path'], $this->provider->getVersion());

        try
        {
            $parametersRequired = (
                call_user_func([$endpoint, 'allowsParameters'], $this->provider->getVersion()) &&
                call_user_func_array([$endpoint, 'hasValidParameters'], [$this->provider->getVersion(), $parameters])
            );

            $response = ($parametersRequired)
                ? $this->httpClient->get($path, ['query' => $parameters])
                : $this->httpClient->get($path);
        }
        catch (GuzzleException $exception)
        {
            die(sprintf(
                'Encountered error when sending request to API: %s',
                $exception->getMessage()
            ));
        }

        return new ApiResponse($response);
    }

    /**
     * Get an array of headers that should be added to every request.
     *
     * @return array
     */
    protected function getRequestHeaders() : array
    {
        return array_merge(
            $this->getHostHeader(),
            $this->getApiKeyHeader(),
            ['User-Agent' => 'Drenth1 ApiSports Wrapper; compatible']
        );
    }

    /**
     * Get the api key header.
     *
     * @return string[]
     */
    protected function getApiKeyHeader() : array
    {
        return [$this->provider->getApiKeyHeaderName() => $this->apiKey];
    }

    /**
     * Get the (optional) host header.
     *
     * @return array
     */
    protected function getHostHeader() : array
    {
        return $this->provider->expectsHostHeader()
            ? [$this->provider->getHostHeaderName() => $this->provider->getHost()]
            : [];
    }
}