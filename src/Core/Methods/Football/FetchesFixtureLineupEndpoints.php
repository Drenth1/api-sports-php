<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\FixtureLineups;

trait FetchesFixtureLineupEndpoints
{
    /**
     * Get the lineups for a fixture.
     *
     * @param int $id the unique identifier of the fixture.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixtureLineups(int $id) : Response
    {
        return $this->fetch(FixtureLineups::class, [
            'fixture' => $id
        ]);
    }

    /**
     * Combine a custom array of parameters to get a subset of fixture lineups.
     *
     * @param array $parameters the parameters to add to the request.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function rawFixtureLineups(array $parameters) : Response
    {
        return $this->fetch(FixtureLineups::class, $parameters);
    }
}