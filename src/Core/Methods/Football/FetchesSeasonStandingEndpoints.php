<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\SeasonStandings;

trait FetchesSeasonStandingEndpoints
{
    /**
     * Get the standings for a season.
     *
     * @param int $leagueId The id of the league.
     * @param int $season The year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function seasonStandings(int $leagueId, int $season) : Response
    {
        return $this->fetch(SeasonStandings::class, [
            'league' => $leagueId,
            'season' => $season
        ]);
    }

    /**
     * Get the statistics for a team in a season.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @param int $team_id the id of the team.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function seasonStandingsTeam(int $league_id, int $season, int $team_id) : Response
    {
        return $this->fetch(SeasonStandings::class, [
            'league' => $league_id,
            'season' => $season,
            'team' => $team_id
        ]);
    }
}