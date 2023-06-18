<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\Seasons;
use Drenth1\ApiSports\Endpoints\Football\Leagues;

trait FetchesSeasonEndpoints
{
    /**
     * Get the list of available seasons.
     *
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function seasons() : Response
    {
        return $this->fetch(Seasons::class);
    }

    /**
     * Get a season for a league.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function season(int $league_id, int $season) : Response
    {
        return $this->fetch(Leagues::class, [
            'id' => $league_id,
            'season' => $season
        ]);
    }
}