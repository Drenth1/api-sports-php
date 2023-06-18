<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\Coaches;

trait FetchesCoachEndpoints
{
    /**
     * Get a coach by their unique identifier.
     *
     * @param int $id The id of the coach.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function coachById(int $id) : Response
    {
        return $this->fetch(Coaches::class, [
            'id' => $id
        ]);
    }

    /**
     * Get a coach by their team.
     *
     * @param int $id The id of the team.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function coachByTeam(int $id) : Response
    {
        return $this->fetch(Coaches::class, [
            'team' => $id
        ]);
    }

    /**
     * Get one or more coaches by a search term.
     *
     * @param string $search The term to search by.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function searchCoaches(string $search) : Response
    {
        return $this->fetch(Coaches::class, [
            'search' => $search
        ]);
    }
}