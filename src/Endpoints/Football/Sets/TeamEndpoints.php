<?php

namespace Drenth1\ApiSports\Endpoints\Football\Sets;

use Drenth1\ApiSports\Core\ApiResponse;
use Drenth1\ApiSports\Endpoints\Football\Teams;

trait TeamEndpoints
{
    /**
     * Combine a custom array of parameters to get a subset of teams.
     *
     * @param array $parameters the parameters to add to the request.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function rawTeams(array $parameters) : ApiResponse
    {
        return $this->fetch(Teams::class, $parameters);
    }

    /**
     * Get a team by its unique identifier.
     *
     * @param int $id the id of the team.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function teamById(int $id) : ApiResponse
    {
        return $this->fetch(Teams::class, [
            'id' => $id
        ]);
    }

    /**
     * Get one or more teams by a name.
     *
     * @param string $name the name of the team.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function teamByName(string $name) : ApiResponse
    {
        return $this->fetch(Teams::class, [
            'name' => $name
        ]);
    }

    /**
     * Get the teams in a country by the name of the country.
     *
     * @param string $country the name of the country.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function teamsByCountryName(string $country) : ApiResponse
    {
        return $this->fetch(Teams::class, [
            'country' => $country
        ]);
    }

    /**
     * Get a team by its three-letter code.
     *
     * @param string $code the three-letter code of the team.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function teamByCode(string $code) : ApiResponse
    {
        return $this->fetch(Teams::class, [
            'code' => $code
        ]);
    }

    /**
     * Get the team or teams that play in a venue.
     *
     * @param int $id the id of the venue.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function teamByVenue(int $id) : ApiResponse
    {
        return $this->fetch(Teams::class, [
            'venue' => $id
        ]);
    }

    /**
     * Get one or more teams by a search term.
     *
     * @param string $search the term to search.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function teamsBySearch(string $search) : ApiResponse
    {
        return $this->fetch(Teams::class, [
            'search' => $search
        ]);
    }
}