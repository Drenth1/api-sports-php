<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\HeadToHead;

trait FetchesHeadToHeadEndpoints
{
    /**
     * Get the latest head-to-head results between two teams.
     *
     * @param int $team_one_id The id of the first team.
     * @param int $team_two_id The id of the second team.
     * @param int $limit The amount of results to fetch.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function latestH2HResults(int $team_one_id, int $team_two_id, int $limit) : Response
    {
        $h2h = sprintf('%s-%s', $team_one_id, $team_two_id);

        return $this->fetch(HeadToHead::class, [
            'h2h' => $h2h,
            'last' => $limit
        ]);
    }

    /**
     * Get the upcoming head-to-head fixtures between two teams.
     *
     * @param int $team_one_id The id of the first team.
     * @param int $team_two_id The id of the second team.
     * @param int $limit The amount of fixtures to fetch.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function upcomingH2HFixtures(int $team_one_id, int $team_two_id, int $limit) : Response
    {
        $h2h = sprintf('%s-%s', $team_one_id, $team_two_id);

        return $this->fetch(HeadToHead::class, [
            'h2h' => $h2h,
            'next' => $limit
        ]);
    }

    /**
     * Combine a custom array of parameters to get a subset of h2h-fixtures.
     *
     * @param array $parameters The parameters to add to the request.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function rawH2H(array $parameters) : Response
    {
        return $this->fetch(HeadToHead::class, $parameters);
    }
}