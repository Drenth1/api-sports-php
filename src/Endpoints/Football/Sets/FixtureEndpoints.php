<?php

namespace Drenth1\ApiSports\Endpoints\Football\Sets;

use Drenth1\ApiSports\Core\ApiResponse;
use Drenth1\ApiSports\Endpoints\Football\FixturePlayerStatistics;
use Drenth1\ApiSports\Endpoints\Football\Fixtures;
use Drenth1\ApiSports\Endpoints\Football\HeadToHead;
use Drenth1\ApiSports\Endpoints\Football\FixtureRounds;
use Drenth1\ApiSports\Endpoints\Football\FixtureEvents;
use Drenth1\ApiSports\Endpoints\Football\FixtureLineups;
use Drenth1\ApiSports\Endpoints\Football\FixtureStatistics;

trait FixtureEndpoints
{
    /**
     * Combine a custom array of parameters to get a subset of fixtures.
     *
     * @param array $parameters the parameters to add to the request.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function rawFixtures(array $parameters) : ApiResponse
    {
        return $this->fetch(Fixtures::class, $parameters);
    }

    /**
     * Get the available fixture rounds in a season.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function fixtureRounds(int $league_id, int $season) : ApiResponse
    {
        return $this->fetch(FixtureRounds::class, [
            'league' => $league_id,
            'season' => $season
        ]);
    }

    /**
     * Get the current fixture round for a season.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function currentFixtureRound(int $league_id, int $season) : ApiResponse
    {
        return $this->fetch(FixtureRounds::class, [
            'league' => $league_id,
            'season' => $season,
            'current' => 'true'
        ]);
    }

    /**
     * Get a fixture by its unique identifier.
     *
     * @param int $id the if of the fixture.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function fixtureById(int $id) : ApiResponse
    {
        return $this->fetch(Fixtures::class, [
            'id' => $id,
        ]);
    }

    /**
     * Get the fixtures in a season.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function fixturesBySeason(int $league_id, int $season) : ApiResponse
    {
        return $this->fetch(Fixtures::class, [
            'league' => $league_id,
            'season' => $season
        ]);
    }

    /**
     * Get the upcoming N fixtures for a season.
     *
     * @param int $league_id the id of the league.
     * @param int $season the year of the season.
     * @param int $limit the amount of fixtures to fetch.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function upcomingSeasonFixtures(int $league_id, int $season, int $limit) : ApiResponse
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
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function latestSeasonResults(int $league_id, int $season, int $limit) : ApiResponse
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
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function upcomingTeamFixtures(int $id, int $limit) : ApiResponse
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
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function latestTeamResults(int $id, int $limit) : ApiResponse
    {
        return $this->fetch(Fixtures::class, [
            'team' => $id,
            'last' => $limit
        ]);
    }

    /**
     * Get the fixtures on a date.
     *
     * @param string $date the date of the fixtures.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function fixturesByDate(string $date) : ApiResponse
    {
        return $this->fetch(Fixtures::class, [
            'date' => $date
        ]);
    }

    /**
     * Get the latest head-to-head results between two teams.
     *
     * @param int $team_one_id the id of the first team.
     * @param int $team_two_id the id of the second team.
     * @param int $limit the amount of results to fetch.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function latestH2HResults(int $team_one_id, int $team_two_id, int $limit) : ApiResponse
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
     * @param int $team_one_id the id of the first team.
     * @param int $team_two_id the id of the second team.
     * @param int $limit the amount of fixtures to fetch.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function upcomingH2HFixtures(int $team_one_id, int $team_two_id, int $limit) : ApiResponse
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
     * @param array $parameters the parameters to add to the request.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function rawH2H(array $parameters) : ApiResponse
    {
        return $this->fetch(HeadToHead::class, $parameters);
    }

    /**
     * Get the statistics for a fixture.
     *
     * @param int $id the unique identifier of the fixture.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function fixtureStatistics(int $id) : ApiResponse
    {
        return $this->fetch(FixtureStatistics::class, [
            'fixture' => $id
        ]);
    }

    /**
     * Combine a custom array of parameters to get a subset of fixture statistics.
     *
     * @param array $parameters the parameters to add to the request.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function rawFixtureStatistics(array $parameters) : ApiResponse
    {
        return $this->fetch(FixtureStatistics::class, $parameters);
    }

    /**
     * Get the events for a fixture.
     *
     * @param int $id the unique identifier of the fixture.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function fixtureEvents(int $id) : ApiResponse
    {
        return $this->fetch(FixtureEvents::class, [
            'fixture' => $id
        ]);
    }

    /**
     * Combine a custom array of parameters to get a subset of fixture events.
     *
     * @param array $parameters the parameters to add to the request.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function rawFixtureEvents(array $parameters) : ApiResponse
    {
        return $this->fetch(FixtureEvents::class, $parameters);
    }

    /**
     * Get the lineups for a fixture.
     *
     * @param int $id the unique identifier of the fixture.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function fixtureLineups(int $id) : ApiResponse
    {
        return $this->fetch(FixtureLineups::class, [
            'fixture' => $id
        ]);
    }

    /**
     * Combine a custom array of parameters to get a subset of fixture lineups.
     *
     * @param array $parameters the parameters to add to the request.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function rawFixtureLineups(array $parameters) : ApiResponse
    {
        return $this->fetch(FixtureLineups::class, $parameters);
    }

    /**
     * Get the player statistics for a fixture.
     *
     * @param int $id the unique identifier of the fixture.
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function fixturePlayerStatistics(int $id) : ApiResponse
    {
        return $this->fetch(FixturePlayerStatistics::class, [
            'fixture' => $id
        ]);
    }

    /**
     * Get the player statistics for a team in a fixture.
     *
     * @param int $fixture_id the unique identifier of the fixture.
     * @param int $team_id the unique identifier of the team
     * @return \Drenth1\ApiSports\Core\ApiResponse
     */
    public function fixturePlayerStatisticsTeam(int $fixture_id, int $team_id) : ApiResponse
    {
        return $this->fetch(FixturePlayerStatistics::class, [
            'fixture' => $fixture_id,
            'team' => $team_id
        ]);
    }
}