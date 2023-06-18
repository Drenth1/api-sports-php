<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\TopScorers;
use Drenth1\ApiSports\Endpoints\Football\TopAssists;
use Drenth1\ApiSports\Endpoints\Football\TopRedCards;
use Drenth1\ApiSports\Endpoints\Football\TopYellowCards;
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
     * @param int $leagueId The id of the league.
     * @param int $season The year of the season.
     * @param int $teamId The id of the team.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function seasonStandingsTeam(int $leagueId, int $season, int $teamId) : Response
    {
        return $this->fetch(SeasonStandings::class, [
            'league' => $leagueId,
            'season' => $season,
            'team' => $teamId
        ]);
    }

    /**
     * Get the 20 players with the most goals.
     *
     * @param int $leagueId The id of the league.
     * @param int $season The year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function topScorers(int $leagueId, int $season) : Response
    {
        return $this->fetch(TopScorers::class, [
            'league' => $leagueId,
            'season' => $season
        ]);
    }

    /**
     * Get the 20 players with the most assists.
     *
     * @param int $leagueId The id of the league.
     * @param int $season The year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function topAssists(int $leagueId, int $season) : Response
    {
        return $this->fetch(TopAssists::class, [
            'league' => $leagueId,
            'season' => $season
        ]);
    }

    /**
     * Get the 20 players with the most yellow cards.
     *
     * @param int $leagueId The id of the league.
     * @param int $season The year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function topYellowCards(int $leagueId, int $season) : Response
    {
        return $this->fetch(TopYellowCards::class, [
            'league' => $leagueId,
            'season' => $season
        ]);
    }

    /**
     * Get the 20 players with the most red cards.
     *
     * @param int $leagueId The id of the league.
     * @param int $season The year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function topRedCards(int $leagueId, int $season) : Response
    {
        return $this->fetch(TopRedCards::class, [
            'league' => $leagueId,
            'season' => $season
        ]);
    }
}