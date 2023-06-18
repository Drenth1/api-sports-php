<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\PlayerStatisticSeasons;

trait FetchesPlayerStatisticEndpoints
{
    /**
     * Get all available seasons for players statistics.
     *
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function playerStatisticSeasons() : Response
    {
        return $this->fetch(PlayerStatisticSeasons::class);
    }

    /**
     * Get all available seasons for player statistics for one player.
     *
     * @param int $id The id of the player.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function playerStatisticSeasonsPlayer(int $id) : Response
    {
        return $this->fetch(PlayerStatisticSeasons::class, [
            'player' => $id
        ]);
    }
}