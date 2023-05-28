<?php

namespace Drenth1\ApiSports\Endpoints\Football\Sets;

use Drenth1\ApiSports\Core\ApiResponse;
use Drenth1\ApiSports\Endpoints\Football\Seasons;
use Drenth1\ApiSports\Endpoints\Football\Leagues;

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
}