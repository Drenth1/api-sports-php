<?php

namespace Drenth1\ApiSports\Core\Methods\Football;

use Drenth1\ApiSports\Core\Response;
use Drenth1\ApiSports\Endpoints\Football\Fixtures;
use Drenth1\ApiSports\Endpoints\Football\Predictions;

trait FetchesFixtureEndpoints
{
    /**
     * Get a fixture by its unique identifier.
     *
     * @param int $id The id of the fixture.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixtureById(int $id) : Response
    {
        return $this->fetch(Fixtures::class, [
            'id' => $id
        ]);
    }

    /**
     * Get multiple fixtures by their identifiers.
     *
     * @param array $ids An array of identifiers.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixturesByIds(array $ids) : Response
    {
        return $this->fetch(Fixtures::class, [
            'ids' => implode('-', $ids)
        ]);
    }

    /**
     * Get the fixtures on a date.
     *
     * @param string $date The date of the fixtures.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixturesByDate(string $date) : Response
    {
        return $this->fetch(Fixtures::class, [
            'date' => $date
        ]);
    }

    /**
     * Get the fixtures in a season.
     *
     * @param int $leagueId The id of the league.
     * @param int $season The year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixturesBySeason(int $leagueId, int $season) : Response
    {
        return $this->fetch(Fixtures::class, [
            'league' => $leagueId,
            'season' => $season
        ]);
    }

    /**
     * Get the fixtures for a team, for all competitions.
     *
     * @param int $id The id of the team.
     * @param int $season The year of the season.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function seasonFixturesByTeam(int $id, int $season) : Response
    {
        return $this->fetch(Fixtures::class, [
            'team' => $id,
            'season' => $season
        ]);
    }

    /**
     * Get the fixtures for a team, for one competition.
     *
     * @param int $leagueId The id of the league
     * @param int $season The year of the season.
     * @param int $teamId The id of the team.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function leagueFixturesByTeam(int $leagueId, int $season, int $teamId) : Response
    {
        return $this->fetch(Fixtures::class, [
            'team' => $teamId,
            'league' => $leagueId,
            'season' => $season
        ]);
    }

    /**
     * Get the upcoming N fixtures for a season.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @param int $limit the amount of fixtures to fetch.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function upcomingSeasonFixtures(int $league_id, int $season, int $limit) : Response
    {
        return $this->fetch(Fixtures::class, [
            'league' => $league_id,
            'season' => $season,
            'next' => $limit
        ]);
    }

    /**
     * Get the latest results for a season.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @param int $limit the amount of results to fetch.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function latestSeasonResults(int $league_id, int $season, int $limit) : Response
    {
        return $this->fetch(Fixtures::class, [
            'league' => $league_id,
            'season' => $season,
            'last' => $limit
        ]);
    }

    /**
     * Get the upcoming fixtures for a team.
     *
     * @param int $id the id of the team.
     * @param int $limit the amount of fixtures to fetch.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function upcomingTeamFixtures(int $id, int $limit) : Response
    {
        return $this->fetch(Fixtures::class, [
            'team' => $id,
            'next' => $limit
        ]);
    }

    /**
     * Get the latest results for a team.
     *
     * @param int $id the id of the team.
     * @param int $limit the amount of results to fetch.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function latestTeamResults(int $id, int $limit) : Response
    {
        return $this->fetch(Fixtures::class, [
            'team' => $id,
            'last' => $limit
        ]);
    }

    /**
     * Get the predictions for a fixture.
     *
     * @param int $id The id of the fixture.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function fixturePredictions(int $id) : Response
    {
        return $this->fetch(Predictions::class, [
            'fixture' => $id
        ]);
    }

    /**
     * Get a subset of fixtures using a custom set of parameters.
     *
     * @param array $parameters The custom set of parameters to use.
     * @return \Drenth1\ApiSports\Core\Response
     */
    public function rawFixtures(array $parameters) : Response
    {
        return $this->fetch(Fixtures::class, $parameters);
    }

}