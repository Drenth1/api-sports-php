<?php

namespace Drenth1\ApiSports\Endpoints\Football\Sets;

use Drenth1\ApiSports\Core\ApiResponse;
use Drenth1\ApiSports\Endpoints\Football\Venues;

trait VenueEndpoints
{
    /**
     * Combine a custom array of parameters to get a subset of venues.
     *
     * @param array $parameters the parameters to add to the request.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function rawVenues(array $parameters) : ApiResponse
    {
        return $this->fetch(Venues::class, $parameters);
    }

    /**
     * Get one or more venues by their name.
     *
     * @param string $name the name of the venue.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function venueByName(string $name) : ApiResponse
    {
        return $this->fetch(Venues::class, [
            'name' => $name
        ]);
    }

    /**
     * Get one or more venues by the name of the city it is in.
     *
     * @param string $city the name of the city.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function venuesByCity(string $city) : ApiResponse
    {
        return $this->fetch(Venues::class, [
            'city' => $city
        ]);
    }

    /**
     * Get one or more venues by the name of the country they are in.
     *
     * @param string $country the name of the country.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function venuesByCountry(string $country) : ApiResponse
    {
        return $this->fetch(Venues::class, [
            'country' => $country
        ]);
    }

    /**
     * Get one or more venues by a search term.
     *
     * @param string $search the term to search.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function venuesBySearch(string $search) : ApiResponse
    {
        return $this->fetch(Venues::class, [
            'search' => $search
        ]);
    }
}