<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\Teams;

trait FetchesTeamEndpoints
{
    /**
     * Get a team by its unique identifier.
     *
     * @param int $id The id of the team.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function teamById(int $id) : Response
    {
        return $this->fetch(Teams::class, [
            'id' => $id
        ]);
    }

    /**
     * Get a team by its name.
     *
     * @param string $name The name of the team.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function teamByName(string $name) : Response
    {
        return $this->fetch(Teams::class, [
            'name' => $name
        ]);
    }

    /**
     * Get teams by league ID and season.
     *
     * @param int $leagueId The ID of the league.
     * @param int $season The season of the league.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function teamsByLeague(int $leagueId, int $season) : Response
    {
        return $this->fetch(Teams::class, [
            'league' => $leagueId,
            'season' => $season
        ]);
    }

    /**
     * Get teams by country name.
     *
     * @param string $country The name of the country.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function teamsByCountryName(string $country) : Response
    {
        return $this->fetch(Teams::class, [
            'country' => $country
        ]);
    }

    /**
     * Get teams by their code.
     *
     * @param string $code The code of the team or teams.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function teamsByCode(string $code) : Response
    {
        return $this->fetch(Teams::class, [
            'code' => $code
        ]);
    }

    /**
     * Search for teams by a given string.
     *
     * @param string $search The string to search for.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function searchTeams(string $search) : Response
    {
        return $this->fetch(Teams::class, [
            'search' => $search
        ]);
    }

    /**
     * Get teams by venue ID.
     *
     * @param int $id The ID of the venue.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function teamsByVenue(int $id) : Response
    {
        return $this->fetch(Teams::class, [
            'venue' => $id
        ]);
    }
}