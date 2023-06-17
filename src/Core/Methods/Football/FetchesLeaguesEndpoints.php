<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\Leagues;

trait FetchesLeaguesEndpoints
{
    /**
     * Get all available leagues.
     *
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function leagues() : Response
    {
        return $this->fetch(Leagues::class);
    }

    /**
     * Get a league by its unique identifier.
     *
     * @param int $id The id of the league.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function leagueById(int $id) : Response
    {
        return $this->fetch(Leagues::class, [
            'id' => $id
        ]);
    }

    /**
     * Get the leagues in a country, by the country's name.
     *
     * @param string $country The name of the country.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function leaguesByCountryName(string $country) : Response
    {
        return $this->fetch(Leagues::class, [
            'country' => $country
        ]);
    }

    /**
     * Get the leagues in a country, by the country's code.
     *
     * @param string $code The code of the country.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function leaguesByCountryCode(string $code) : Response
    {
        return $this->fetch(Leagues::class, [
            'code' => $code
        ]);
    }

    /**
     * Get leagues by type.
     *
     * @param string $type The type of leagues.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function leaguesByType(string $type) : Response
    {
        return $this->fetch(Leagues::class, [
            'type' => $type
        ]);
    }

    /**
     * Search for leagues by keyword.
     *
     * @param string $search The keyword to search for leagues.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function searchLeagues(string $search) : Response
    {
        return $this->fetch(Leagues::class, [
            'search' => $search
        ]);
    }

    /**
     * Get the last N leagues added to the API.
     *
     * @param int $last The number of leagues to retrieve.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function lastLeagues(int $last) : Response
    {
        return $this->fetch(Leagues::class, [
            'last' => $last
        ]);
    }

    /**
     * Get the current leagues.
     *
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function currentLeagues() : Response
    {
        return $this->fetch(Leagues::class, [
            'current' => 'true'
        ]);
    }

    /**
     * Get a subset of leagues using a custom set of parameters.
     *
     * @param array $parameters The custom set of parameters to use.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function rawLeagues(array $parameters) : Response
    {
        return $this->fetch(Leagues::class, $parameters);
    }
}