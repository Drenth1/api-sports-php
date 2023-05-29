<?php

namespace Drenth1\ApiSports\Endpoints\Football\Sets;

use Drenth1\ApiSports\Core\ApiResponse;
use Drenth1\ApiSports\Endpoints\Football\Teams;
use Drenth1\ApiSports\Endpoints\Football\Seasons;
use Drenth1\ApiSports\Endpoints\Football\Leagues;
use Drenth1\ApiSports\Endpoints\Football\TeamSeasons;
use Drenth1\ApiSports\Endpoints\Football\TeamStatistics;

trait SeasonEndpoints
{
    /**
     * Get a list of available seasons.
     *
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function seasons() : ApiResponse
    {
        return $this->fetch(Seasons::class);
    }

    /**
     * Get a list of available seasons for a team.
     *
     * @param int $id the id of the team.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function seasonsByTeam(int $id) : ApiResponse
    {
        return $this->fetch(TeamSeasons::class, [
            'team' => $id
        ]);
    }

    /**
     * Get a season for a league.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function season(int $league_id, int $season) : ApiResponse
    {
        return $this->fetch(Leagues::class, [
            'id' => $league_id,
            'season' => $season
        ]);
    }

    /**
     * Get the teams in a league.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function seasonTeams(int $league_id, int $season) : ApiResponse
    {
        return $this->fetch(Teams::class, [
            'league' => $league_id,
            'season' => $season
        ]);
    }

    /**
     * Get the statistics for a team in a season.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @param int $team_id the id of the team.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function seasonTeamStatistics(int $league_id, int $season, int $team_id) : ApiResponse
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
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @param int $team_id the id of the team.
     * @param string $date the date limit (yyyy-mm-dd).
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function seasonTeamStatisticsUntil(int $league_id, int $season, int $team_id, string $date) : ApiResponse
    {
        return $this->fetch(TeamStatistics::class, [
            'league' => $league_id,
            'season' => $season,
            'team' => $team_id,
            'date' => $date
        ]);
    }
}