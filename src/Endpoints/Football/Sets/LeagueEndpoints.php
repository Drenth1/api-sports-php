<?php

namespace Drenth1\ApiSports\Endpoints\Football\Sets;

use Drenth1\ApiSports\Core\ApiResponse;
use Drenth1\ApiSports\Endpoints\Football\Leagues;

trait LeagueEndpoints
{
    /**
     * Combine a custom array of parameters to get a subset of leagues.
     *
     * @param array $parameters the parameters to add to the request.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function rawLeagues(array $parameters) : ApiResponse
    {
        return $this->fetch(Leagues::class, $parameters);
    }

    /**
     * Get all available leagues from the api.
     *
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function leagues() : ApiResponse
    {
        return $this->fetch(Leagues::class);
    }

    /**
     * Get a league by its unique identifier.
     *
     * @param int $id the id of the league.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function leagueById(int $id) : ApiResponse
    {
        return $this->fetch(Leagues::class, [
            'id' => $id
        ]);
    }

    /**
     * Get the leagues in a country by the name of the country.
     *
     * @param string $country the name of the country.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function leaguesByCountryName(string $country) : ApiResponse
    {
        return $this->fetch(Leagues::class, [
            'country' => $country
        ]);
    }

    /**
     * Get the leagues by their type.
     *
     * @param string $type the type to fetch.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function leaguesByType(string $type) : ApiResponse
    {
        return $this->fetch(Leagues::class, [
            'type' => $type
        ]);
    }

    /**
     * Get the currently active seasons for all leagues.
     *
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function currentLeagues() : ApiResponse
    {
        return $this->fetch(Leagues::class, [
            'current' => 'true'
        ]);
    }

    /**
     * Get the latest leagues added to the api.
     *
     * @param int $limit the amount of results to fetch.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function latestLeagues(int $limit) : ApiResponse
    {
        return $this->fetch(Leagues::class, [
            'last' => $limit
        ]);
    }
}