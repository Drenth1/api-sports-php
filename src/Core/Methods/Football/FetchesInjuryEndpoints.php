<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\Injuries;

trait FetchesInjuryEndpoints
{
    /**
     * Get the injuries in a season.
     *
     * @param int $leagueId The id of the league.
     * @param int $season The year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function seasonInjuries(int $leagueId, int $season) : Response
    {
        return $this->fetch(Injuries::class, [
            'league' => $leagueId,
            'season' => $season
        ]);
    }

    /**
     * Get the injuries for a fixture.
     *
     * @param int $id The id of the fixture.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixtureInjuries(int $id) : Response
    {
        return $this->fetch(Injuries::class, [
            'fixture' => $id
        ]);
    }

    /**
     * Get the injuries for a team.
     *
     * @param int $id The id of the team.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function teamInjuries(int $id) : Response
    {
        return $this->fetch(Injuries::class, [
            'team' => $id
        ]);
    }

    /**
     * Get a subset of injuries using a custom set of parameters.
     *
     * @param array $parameters The custom set of parameters to use.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function rawInjuries(array $parameters) : Response
    {
        return $this->fetch(Injuries::class, $parameters);
    }
}