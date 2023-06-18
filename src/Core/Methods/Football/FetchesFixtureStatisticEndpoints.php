<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\FixtureStatistics;

trait FetchesFixtureStatisticEndpoints
{
    /**
     * Get the statistics for a fixture.
     *
     * @param int $id The unique identifier of the fixture.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixtureStatistics(int $id) : Response
    {
        return $this->fetch(FixtureStatistics::class, [
            'fixture' => $id
        ]);
    }

    /**
     * Get the statistics for one team in a fixture.
     *
     * @param int $id The unique identifier of the fixture.
     * @param int $teamId The unique identifier of the team.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixtureStatisticsTeam(int $id, int $teamId) : Response
    {
        return $this->fetch(FixtureStatistics::class, [
            'fixture' => $id,
            'team' => $teamId
        ]);
    }


    /**
     * Combine a custom array of parameters to get a subset of fixture statistics.
     *
     * @param array $parameters the parameters to add to the request.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function rawFixtureStatistics(array $parameters) : Response
    {
        return $this->fetch(FixtureStatistics::class, $parameters);
    }
}