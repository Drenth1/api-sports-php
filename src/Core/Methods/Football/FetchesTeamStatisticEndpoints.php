<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\TeamStatistics;

trait FetchesTeamStatisticEndpoints
{
    /**
     * Get the statistics for a team in a season.
     *
     * @param int $league_id The id of the league.
     * @param int $season The year of the season.
     * @param int $team_id The id of the team.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function seasonTeamStatistics(int $league_id, int $season, int $team_id) : Response
    {
        return $this->fetch(TeamStatistics::class, [
            'league' => $league_id,
            'season' => $season,
            'team' => $team_id
        ]);
    }

    /**
     * Get the statistics for a team in a season, until a certain date.
     *
     * @param int $league_id The id of the league.
     * @param int $season The year of the season.
     * @param int $team_id The id of the team.
     * @param string $date The date limit (yyyy-mm-dd).
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function seasonTeamStatisticsUntil(int $league_id, int $season, int $team_id, string $date) : Response
    {
        return $this->fetch(TeamStatistics::class, [
            'league' => $league_id,
            'season' => $season,
            'team' => $team_id,
            'date' => $date
        ]);
    }
}