<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\FixtureRounds;

trait FetchesFixtureRoundEndpoints
{
    /**
     * Get the rounds for a league or a cup.
     *
     * @param int $leagueId The id of the league.
     * @param int $year The year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixtureRounds(int $leagueId, int $year) : Response
    {
        return $this->fetch(FixtureRounds::class, [
            'league' => $leagueId,
            'season' => $year
        ]);
    }

    /**
     * Get current round for a league or a cup.
     *
     * @param int $leagueId The id of the league.
     * @param int $year The year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function currentFixtureRound(int $leagueId, int $year) : Response
    {
        return $this->fetch(FixtureRounds::class, [
            'league' => $leagueId,
            'season' => $year,
            'current' => 'true'
        ]);
    }

    /**
     * Get the rounds for a league or a cup, excluding the current round.
     *
     * @param int $leagueId The id of the league.
     * @param int $year The year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function exceptCurrentFixtureRound(int $leagueId, int $year) : Response
    {
        return $this->fetch(FixtureRounds::class, [
            'league' => $leagueId,
            'season' => $year,
            'current' => 'false'
        ]);
    }
}