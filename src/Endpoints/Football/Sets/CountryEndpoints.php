<?php

namespace Drenth1\ApiSports\Endpoints\Football\Sets;

use Drenth1\ApiSports\Core\ApiResponse;
use Drenth1\ApiSports\Endpoints\Football\Countries;
use Drenth1\ApiSports\Endpoints\Football\TeamCountries;

trait CountryEndpoints
{
    /**
     * Get all available countries.
     *
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function countries() : ApiResponse
    {
        return $this->fetch(Countries::class);
    }

    /**
     * Get a list of available countries for the teams endpoints.
     *
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function teamCountries() : ApiResponse
    {
        return $this->fetch(TeamCountries::class);
    }

    /**
     * Get one or more countries by their name.
     *
     * @param string $name the name of the country/countries.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function countryByName(string $name) : ApiResponse
    {
        return $this->fetch(Countries::class, [
            'name' => $name
        ]);
    }

    /**
     * Get a country by its unique country code.
     *
     * @param string $code the country code.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function countryByCode(string $code) : ApiResponse
    {
        return $this->fetch(Countries::class, [
            'code' => $code
        ]);
    }

    /**
     * Get one or more countries by a search term.
     *
     * @param string $search the term to search.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function countriesBySearch(string $search) : ApiResponse
    {
        return $this->fetch(Countries::class, [
            'search' => $search
        ]);
    }
}