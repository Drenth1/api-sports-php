<?php

namespace Drenth1\ApiSports\Core;

abstract class Provider
{
    /**
     * The version of the Provider that should be used, set at runtime.
     *
     * @var string
     */
    protected string $version;

    /**
     * The array of versions that this Provider supports.
     *
     * @var string[]
     */
    protected array $supportedVersions;

    /**
     * Get the base url of the Provider  per version.
     *
     * @return string
     */
    abstract public function getHost() : string;

    /**
     * Get the name of the header that should contain the host, optional.
     *
     * @return ?string
     */
    abstract public function getHostHeaderName() : ?string;

    /**
     * Get the name of the header that should contain the api key.
     *
     * @return string
     */
    abstract public function getApiKeyHeaderName() : string;

    /**
     * Create a new instance of a Provider and validate and set the version.
     *
     * @param string $version the version of the api to use.
     * @return void
     */
    public function __construct(string $version)
    {
        $this->setVersion($version);
    }

    /**
     * Get the version of the api that is being used.
     *
     * @return string
     */
    public function getVersion() : string
    {
        return $this->version;
    }

    /**
     * Check whether the Provider expects a host header on every request.
     *
     * @return bool
     */
    public function expectsHostHeader() : bool
    {
        return !empty($this->getHostHeaderName());
    }

    /**
     * Validate and set the version for the Provider.
     *
     * @param string $version the version of the api to use.
     * @return void
     */
    protected function setVersion(string $version) : void
    {
        if (!in_array($version, $this->supportedVersions))
        {
            throw new \InvalidArgumentException(sprintf(
                '%s is not a valid version for Provider %s', $version, get_class($this)
            ));
        }

        $this->version = $version;
    }
}