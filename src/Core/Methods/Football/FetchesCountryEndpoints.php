<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\Countries;

trait FetchesCountryEndpoints
{
    /**
     * Get the list of available countries for the league endpoint.
     *
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function countries() : Response
    {
        return $this->fetch(Countries::class);
    }

    /**
     * Get a country by its unique country code.
     *
     * @param string $code The country code.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function countryByCode(string $code) : Response
    {
        return $this->fetch(Countries::class, [
            'code' => $code
        ]);
    }

    /**
     * Get one or more countries by a name.
     *
     * @param string $name The name of the country or countries.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function countryByName(string $name) : Response
    {
        return $this->fetch(Countries::class, [
            'name' => $name
        ]);
    }

    /**
     * Get one or more countries by a search term.
     *
     * @param string $search The term to search by.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function searchCountries(string $search) : Response
    {
        return $this->fetch(Countries::class, [
            'search' => $search
        ]);
    }
}