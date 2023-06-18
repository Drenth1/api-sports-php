<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\FixtureEvents;

trait FetchesFixtureEventEndpoints
{
    /**
     * Get the events for a fixture.
     *
     * @param int $id the unique identifier of the fixture.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixtureEvents(int $id) : Response
    {
        return $this->fetch(FixtureEvents::class, [
            'fixture' => $id
        ]);
    }

    /**
     * Combine a custom array of parameters to get a subset of fixture events.
     *
     * @param array $parameters the parameters to add to the request.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function rawFixtureEvents(array $parameters) : Response
    {
        return $this->fetch(FixtureEvents::class, $parameters);
    }
}