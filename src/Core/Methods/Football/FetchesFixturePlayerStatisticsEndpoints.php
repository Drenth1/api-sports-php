<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\FixturePlayerStatistics;

trait FetchesFixturePlayerStatisticsEndpoints
{
    /**
     * Get the player statistics for a fixture.
     *
     * @param int $id the unique identifier of the fixture.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixturePlayerStatistics(int $id) : Response
    {
        return $this->fetch(FixturePlayerStatistics::class, [
            'fixture' => $id
        ]);
    }

    /**
     * Get the player statistics for a team in a fixture.
     *
     * @param int $fixture_id the unique identifier of the fixture.
     * @param int $team_id the unique identifier of the team
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixturePlayerStatisticsTeam(int $fixture_id, int $team_id) : Response
    {
        return $this->fetch(FixturePlayerStatistics::class, [
            'fixture' => $fixture_id,
            'team' => $team_id
        ]);
    }
}