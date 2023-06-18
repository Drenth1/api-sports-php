<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\Venues;

trait FetchesVenueEndpoints
{
    /**
     * Get a venue by its unique identifier.
     *
     * @param int $id The id of the venue.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function venueById(int $id) : Response
    {
        return $this->fetch(Venues::class, [
            'id' => $id
        ]);
    }

    /**
     * Get one or more venues by their name.
     *
     * @param string $name The name of the venue or venues.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function venuesByName(string $name) : Response
    {
        return $this->fetch(Venues::class, [
            'name' => $name
        ]);
    }

    /**
     * Get the venues in a city.
     *
     * @param string $city The name of the city.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function venuesByCity(string $city) : Response
    {
        return $this->fetch(Venues::class, [
            'city' => $city
        ]);
    }

    /**
     * Get the venues in a country, by the name of the country.
     *
     * @param string $country The name of the country.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function venuesByCountryName(string $country) : Response
    {
        return $this->fetch(Venues::class, [
            'country' => $country
        ]);
    }

    /**
     * Search for teams by a given string.
     *
     * @param string $search The string to search for.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function searchVenues(string $search) : Response
    {
        return $this->fetch(Venues::class, [
            'search' => $search
        ]);
    }

    /**
     * Get a subset of venues using a custom set of parameters.
     *
     * @param array $parameters The custom set of parameters to use.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function rawVenues(array $parameters) : Response
    {
        return $this->fetch(Venues::class, $parameters);
    }
}