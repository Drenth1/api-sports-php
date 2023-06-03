<?php

namespace Drenth1\ApiSports\Endpoints\Football\Sets;

use Drenth1\ApiSports\Core\ApiResponse;
use Drenth1\ApiSports\Endpoints\Football\Standings;

trait StandingEndpoints
{
    /**
     * Get the standings for a season.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function seasonStandings(int $league_id, int $season) : ApiResponse
    {
        return $this->fetch(Standings::class, [
            'league' => $league_id,
            'season' => $season
        ]);
    }

    /**
     * Get the standings for a team in a season.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @param int $team_id the id of the team.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function teamSeasonStandings(int $league_id, int $season, int $team_id) : ApiResponse
    {
        return $this->fetch(Standings::class, [
            'league' => $league_id,
            'season' => $season,
            'team' => $team_id
        ]);
    }
}