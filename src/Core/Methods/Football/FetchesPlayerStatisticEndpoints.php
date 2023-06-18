<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\Squads;
use Drenth1\ApiSports\Endpoints\Football\Players;
use Drenth1\ApiSports\Endpoints\Football\Trophies;
use Drenth1\ApiSports\Endpoints\Football\Transfers;
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

    /**
     * Get the players in a team during a season.
     *
     * @param int $id The id of the team.
     * @param int $season The year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function playersByTeam(int $id, int $season) : Response
    {
        return $this->fetch(Players::class, [
            'team' => $id,
            'season' => $season
        ]);
    }

    /**
     * Get a subset of players using a custom set of parameters.
     *
     * @param array $parameters The custom set of parameters to use.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function rawPlayers(array $parameters) : Response
    {
        return $this->fetch(Players::class, $parameters);
    }

    /**
     * Get the current squad of a team.
     *
     * @param int $id The id of the team.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function squadByTeam(int $id) : Response
    {
        return $this->fetch(Squads::class, [
            'team' => $id
        ]);
    }

    /**
     * Get the transfers for a player.
     *
     * @param int $id The id of the player.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function transfersByPlayer(int $id) : Response
    {
        return $this->fetch(Transfers::class, [
            'player' => $id
        ]);
    }

    /**
     * Get the trophies that a player won.
     *
     * @param int $id The id of the coach.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function trophiesByPlayer(int $id) : Response
    {
        return $this->fetch(Trophies::class, [
            'player' => $id
        ]);
    }

    /**
     * Get the current squad that a player plays in.
     *
     * @param int $id The id of the player.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function squadByPlayer(int $id) : Response
    {
        return $this->fetch(Squads::class, [
            'player' => $id
        ]);
    }
}